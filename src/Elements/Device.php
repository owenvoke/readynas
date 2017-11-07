<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Device.
 */
class Device
{
    use Element;

    /**
     * @var string The current model of the NAS
     */
    protected $model;
    /**
     * @var string The serial number of the NAS
     */
    protected $serial;
    /**
     * @var string The current firmware name of the NAS
     */
    protected $firmware_name;
    /**
     * @var string The current firmware version of the NAS
     */
    protected $firmware_version;
    /**
     * @var int The current firmware timestamp of the NAS
     */
    protected $firmware_time;
    /**
     * @var int The memory in MB in the NAS
     */
    protected $memory;
    /**
     * @var string The number of CPUs in the NAS
     */
    protected $cpu_number;
    /**
     * @var string The frequency of the CPUs in the NAS
     */
    protected $cpu_frequency;
    /**
     * @var string The MAC Address of the NAS
     */
    protected $mac_address;
    /**
     * @var string The language of the NAS
     */
    protected $language;
    /**
     * @var string The RAID level of the NAS
     */
    protected $raid_level;
    /**
     * @var bool The registration status of the NAS
     */
    protected $registered;
    /**
     * @var string|int The virus definition version of the NAS
     */
    protected $anti_virus_def_version;
    /**
     * @var int The time that the virus definitions were last updated on the NAS
     */
    protected $anti_virus_last_updated;
    /**
     * @var int The number of read-only volumes on the NAS
     */
    protected $read_only_data_volumes;
    /**
     * @var bool The rackmount status of the NAS
     */
    protected $rackmount;
}
