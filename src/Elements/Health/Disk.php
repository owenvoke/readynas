<?php

namespace pxgamer\ReadyNAS\Elements\Health;

use pxgamer\ReadyNAS\Elements\Element;

/**
 * Class Disk.
 */
class Disk
{
    use Element;

    /**
     * @var string The name of the device
     */
    protected $device_name;
    /**
     * @var int The device id
     */
    protected $device_id;
    /**
     * @var string The disk's model
     */
    protected $disk_model;
    /**
     * @var int The temperature of the disk
     */
    protected $disk_temperature;
    /**
     * @var int The capacity of the disk
     */
    protected $disk_capacity;
    /**
     * @var string The status (as text) of the disk
     */
    protected $disk_status;
}
