<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Protocol.
 */
class Protocol
{
    use Element;

    /**
     * @var string The ID of the resource
     */
    protected $id;
    /**
     * @var int The resource id / name
     */
    protected $resource_id;
    /**
     * @var string The resource type
     */
    protected $resource_type;
    /**
     * @var bool The raw status of the protocol
     */
    protected $raw_enabled;
    /**
     * @var bool Whether the protocol is enabled
     */
    protected $enabled;
    /**
     * @var string The status (as text) of the protocol
     */
    protected $status;
}
