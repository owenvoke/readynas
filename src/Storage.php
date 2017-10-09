<?php

namespace pxgamer\ReadyNAS;

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
     * @return array|null
     */
    public function getDisksInfo()
    {
        $response = $this->sendStandardRequest('DiskEnclosure', 'DiskEnclosure_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }

    /**
     * Retrieve S.M.A.R.T. results for a specific disk drive
     *
     * @link https://en.wikipedia.org/wiki/S.M.A.R.T. - Wikipedia SMART test information
     * @param string $drive
     * @return array|null
     */
    public function getSmartInfo($drive)
    {
        $response = $this->sendStandardRequest($drive, 'Disk_SMART_Info');

        $result = $this->xmlToArray($response);

        return $result;
    }

    /**
     * Get information on what volumes are available in storage
     *
     * @return array|null
     */
    public function getVolumeInfo()
    {
        $response = $this->sendStandardRequest('Volumes', 'Volume_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }
}