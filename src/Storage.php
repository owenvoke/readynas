<?php

namespace pxgamer\ReadyNAS;

use Illuminate\Support\Collection;
use pxgamer\ReadyNAS\Requests;

/**
 * Class Storage
 */
class Storage extends Requests\Requester
{
    use Requests\StandardRequest;

    /**
     * Get information about all disks
     *
     * @return Collection|array|null
     */
    public function getDisksInfo()
    {
        $response = $this->sendStandardRequest('DiskEnclosure', 'DiskEnclosure_Collection');

        $result = $this->xmlToArray($response);

        if (isset($result->DiskEnclosure_Collection->DiskEnclosure->Disk_Collection->Disk)) {
            $disks = [];

            foreach ($result->DiskEnclosure_Collection->DiskEnclosure->Disk_Collection->Disk as $disk) {
                $disks[] = (new Elements\Disk)->populateFromData($disk);
            }

            return collect($disks);
        }

        return $result;
    }

    /**
     * Retrieve S.M.A.R.T. results for a specific disk drive
     *
     * @link https://en.wikipedia.org/wiki/S.M.A.R.T. - Wikipedia SMART test information
     * @param string $drive
     * @return Elements\Element|array|null
     */
    public function getSmartInfo($drive)
    {
        $response = $this->sendStandardRequest($drive, 'Disk_SMART_Info');

        $result = $this->xmlToArray($response);

        if (isset($result->DiskSMARTInfo->HealthData)) {
            return (new Elements\Smart)
                ->populateFromData($result->DiskSMARTInfo->HealthData);
        }

        return $result;
    }

    /**
     * Get information on what volumes are available in storage
     *
     * @return Elements\Element|array|null
     */
    public function getVolumeInfo()
    {
        $response = $this->sendStandardRequest('Volumes', 'Volume_Collection');

        $result = $this->xmlToArray($response);

        if (isset($result->Volume_Collection->Volume->Property_List)) {
            return (new Elements\Volume)
                ->populateFromData($result->Volume_Collection->Volume->Property_List);
        }

        return $result;
    }
}
