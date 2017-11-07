<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Disk
 */
class Disk
{
    use Element;

    /**
     * @var string The resource ID for the disk
     */
    protected $resource_id;
    /**
     * @var string The resource type for the disk
     */
    protected $resource_type;
    /**
     * @var bool Whether the disk is currently present
     */
    protected $present;
    /**
     * @var string The model name for the disk
     */
    protected $model;
    /**
     * @var string The serial ID for the disk
     */
    protected $serial;
    /**
     * @var string The firmware version number for the disk
     */
    protected $firmwareversion;
    /**
     * @var int The RPM of the disk
     */
    protected $rpm;
    /**
     * @var int The sectors of the disk in bytes
     */
    protected $sectors;
    /**
     * @var int The capacity of the disk in bytes
     */
    protected $capacity;
    /**
     * @var int The temperature of the disk
     */
    protected $temperature;
    /**
     * @var bool The SATA error status of the disk
     */
    protected $ataerror;
    /**
     * @var string The name of the disks slot
     */
    protected $slotname;
    /**
     * @var string The hardware interface type of the disk
     */
    protected $hardwareinterface;
    /**
     * @var string The pool name of the disk
     */
    protected $poolname;
    /**
     * @var string The pool type of the disk
     */
    protected $pooltype;
    /**
     * @var string The pool state of the disk
     */
    protected $poolstate;
    /**
     * @var string The pool host ID of the disk
     */
    protected $poolhostid;
    /**
     * @var string The state of the disk
     */
    protected $diskstate;
    /**
     * @var int The channel of the disk
     */
    protected $channel;
    /**
     * @var bool The signing status of the disk by Netgear
     */
    protected $issignedbynetgear;
    /**
     * @var bool Whether the disk can be formatted
     */
    protected $formatable;
    /**
     * @var bool Whether the disk is a spare
     */
    protected $isglobalspare;
    /**
     * @var int The type of the disk
     */
    protected $type;
    /**
     * @var string The class name of the disk
     */
    protected $class;
}
