<?php

namespace pxgamer\ReadyNAS;

use pxgamer\ReadyNAS\Requests;

/**
 * Class Apps
 */
class Apps extends Requests\Requester
{
    use Requests\StandardRequest;

    /**
     * Get information about all installed apps
     *
     * @return array|null
     */
    public function getAppsInfo()
    {
        $response = $this->sendStandardRequest('LaunchableApp', 'LocalApp_Collection');

        $result = $this->xmlToArray($response);

        return $result;
    }
}