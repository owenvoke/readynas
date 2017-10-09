<?php

namespace pxgamer\ReadyNAS\Requests;

/**
 * Trait FirmwareRequest
 */
trait FirmwareRequest
{
    use StandardRequest;

    /**
     * Send a request to the Firmware Broker
     *
     * @param string $resourceId
     * @param string $resourceType
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function sendFirmwareRequest(string $resourceId, string $resourceType)
    {
        return $this->sendRequest($resourceId, $resourceType, '/fwbroker');
    }
}