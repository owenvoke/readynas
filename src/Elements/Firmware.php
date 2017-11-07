<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Firmware.
 */
class Firmware
{
    use Element;

    /**
     * @var string The version of the current firmware
     */
    protected $firmwareimage_version;
    /**
     * @var int The size of the current firmware
     */
    protected $firmwareimage_size;
    /**
     * @var string The description of the current firmware
     */
    protected $firmwareimage_description;
    /**
     * @var string The URL of the current firmware
     */
    protected $firmwareimage_url;
    /**
     * @var int The timestamp of the current firmware
     */
    protected $firmwareimage_timestamp;
}
