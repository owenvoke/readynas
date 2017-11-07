<?php

namespace pxgamer\ReadyNAS;

use Illuminate\Support\Collection;
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
     * @return Collection|null
     */
    public function getAppsInfo()
    {
        $response = $this->sendStandardRequest('LaunchableApp', 'LocalApp_Collection');

        $result = $this->xmlToArray($response);

        if (isset($result->LocalApp_Collection->Application)) {
            $apps = [];

            foreach ($result->LocalApp_Collection->Application as $app) {
                $apps[] = (new Elements\App)->populateFromData($app);
            }

            return collect($apps);
        }

        return null;
    }
}
