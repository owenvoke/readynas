<?php

namespace pxgamer\ReadyNAS\Requests;

use GuzzleHttp\Client;

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
            'base_uri' => 'https://' . getenv('NAS_IP') . '/dbbroker',
            'verify'   => false
        ]);
    }
}