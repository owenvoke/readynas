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
    public function getInfo()
    {
        $response = $this->sendRequest('DiskEnclosure', 'DiskEnclosure_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }
}