<?php

namespace pxgamer\ReadyNAS\Requests;

/**
 * Trait StandardRequest.
 */
trait StandardRequest
{
    /**
     * Send a general request, by default to the DB Broker.
     *
     * @param string $resourceId
     * @param string $resourceType
     * @param string $resourceUrl
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function sendStandardRequest(string $resourceId, string $resourceType, string $resourceUrl = '/dbbroker')
    {
        $xml = new \SimpleXMLElement(
            '<xs:nml
            xmlns:xs="http://www.netgear.com/protocol/transaction/NMLSchema-0.9"
            xmlns="urn:netgear:nas:readynasd"/>'
        );
        $xml->addAttribute('src', 'dpv_'.time());
        $xml->addAttribute('dst', 'nas');
        $transaction = $xml->addChild('xs:transaction');
        $get = $transaction->addChild('xs:get');

        $get->addAttribute('resource-id', $resourceId);
        $get->addAttribute('resource-type', $resourceType);

        $response = $this->guzzle
            ->post(
                $resourceUrl, [
                'body' => $xml->asXML(),
                'auth' => [
                    getenv('NAS_USER'),
                    getenv('NAS_PASS'),
                ],
                ]
            );

        return $response;
    }
}
