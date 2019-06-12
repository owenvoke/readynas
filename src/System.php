<?php

namespace pxgamer\ReadyNAS;

use Illuminate\Support\Collection;
use pxgamer\ReadyNAS\Requests\Requester;
use pxgamer\ReadyNAS\Requests\FirmwareRequest;

/**
 * Class System.
 */
class System extends Requester
{
    use FirmwareRequest;

    /**
     * Get details on the current firmware.
     *
     * @return Elements\Element|array|null
     */
    public function getFirmwareInfo()
    {
        $response = $this->sendFirmwareRequest(
            'FW_Broker',
            'FirmwareImage'
        );

        $result = $this->xmlToArray($response);

        if (isset($result->FirmwareImage)) {
            return (new Elements\Firmware())
                ->populateFromData($result->FirmwareImage);
        }

        return new Elements\Firmware();
    }

    /**
     * Get details on the device.
     *
     * @return Elements\Element|array|null
     */
    public function getDeviceInfo()
    {
        $response = $this->sendStandardRequest('SystemInfo', 'SystemInfo');

        $result = $this->xmlToArray($response);

        if (isset($result->SystemInfo)) {
            return (new Elements\Device())
                ->populateFromData($result->SystemInfo);
        }

        return $result;
    }

    /**
     * Get details on the system's health.
     *
     * @return Collection|array|null
     */
    public function getHealthInfo()
    {
        $response = $this->sendStandardRequest('HealthInfo', 'Health_Collection');

        $result = $this->xmlToArray($response);

        if (isset($result->Health_Collection->Enclosure_Health)) {
            $statuses = [];

            foreach ($result->Health_Collection->Enclosure_Health->children() as $health) {
                switch ($health->getName()) {
                    case 'Fan':
                        $statuses['Fan'] = (new Elements\Health\Fan())->populateFromData($health);
                        break;
                    case 'Temperature':
                        $statuses['Temperature'] = (new Elements\Health\Temperature())->populateFromData($health);
                        break;
                    case 'Disk':
                        $statuses['Disk'][] = (new Elements\Health\Disk())->populateFromData($health);
                        break;
                    default:
                }
            }

            return collect($statuses);
        }

        return $result;
    }

    /**
     * Get details on the available protocols for the system (FTP, SSH, SMB, etc.).
     *
     * @return Collection|array|null
     */
    public function getProtocolInfo()
    {
        $response = $this->sendStandardRequest('Protocols', 'Protocol_Collection');

        $result = $this->xmlToArray($response);

        if (isset($result->Protocol_Collection->Protocol)) {
            $protocols = [];

            foreach ($result->Protocol_Collection->Protocol as $protocol) {
                $protocols[] = (new Elements\Protocol())->populateFromData($protocol);
            }

            return collect($protocols);
        }

        return $result;
    }
}
