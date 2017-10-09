<?php

namespace pxgamer\ReadyNAS\Requests;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Requester
 */
class Requester
{
    /**
     * @var Client
     */
    protected $guzzle;

    /**
     * System constructor.
     */
    public function __construct()
    {
        $this->guzzle = new Client([
            'base_uri' => 'https://' . getenv('NAS_HOST') . '/dbbroker',
            'verify'   => false
        ]);
    }

    /**
     * Convert XML responses to an array
     *
     * @param ResponseInterface $response
     * @return array|null
     */
    protected function xmlToArray(ResponseInterface $response)
    {
        $data = new \SimpleXMLElement(
            $response->getBody(),
            null,
            false,
            'xs',
            true
        );

        return $data->transaction->response->error ??
               $data->transaction->response->result->{'get-s'}->children() ??
               null;
    }
}