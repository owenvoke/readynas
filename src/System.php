<?php

namespace pxgamer\ReadyNAS;

use pxgamer\ReadyNAS\Requests\FirmwareRequest;
use pxgamer\ReadyNAS\Requests\Requester;

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
     * @return array|null
     */
    public function getHealthInfo()
    {
        $response = $this->sendStandardRequest('HealthInfo', 'Health_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }

    /**
     * Get details on the available protocols for the system (FTP, SSH, SMB, etc.).
     *
     * @return array|null
     */
    public function getProtocolInfo()
    {
        $response = $this->sendStandardRequest('Protocols', 'Protocol_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }
}
