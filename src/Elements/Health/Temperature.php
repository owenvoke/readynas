<?php

namespace pxgamer\ReadyNAS\Elements\Health;

use pxgamer\ReadyNAS\Elements\Element;

/**
 * Class Temperature.
 */
class Temperature
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
     * @var string The label of the device
     */
    protected $label;
    /**
     * @var int The current temperature
     */
    protected $value;
    /**
     * @var string The status (as text) of the temperature
     */
    protected $status;
    /**
     * @var int The current temperature
     */
    protected $temp_value;
    /**
     * @var int The minimum temperature
     */
    protected $min_value;
    /**
     * @var int The maximum temperature
     */
    protected $max_value;
}
