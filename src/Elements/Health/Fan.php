<?php

namespace pxgamer\ReadyNAS\Elements\Health;

use pxgamer\ReadyNAS\Elements\Element;

/**
 * Class Fan.
 */
class Fan
{
    use Element;

    /**
     * @var string The name of the fan
     */
    protected $device_name;
    /**
     * @var int The fan id
     */
    protected $device_id;
    /**
     * @var string The label of the fan
     */
    protected $label;
    /**
     * @var int The fan speed
     */
    protected $value;
    /**
     * @var string The status (as text) of the fan
     */
    protected $status;
    /**
     * @var int The fan speed
     */
    protected $fan_speed;
    /**
     * @var string The status of the fan in text
     */
    protected $fan_status;
}
