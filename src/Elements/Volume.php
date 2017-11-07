<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Volume.
 */
class Volume
{
    use Element;

    /**
     * @var string A unique ID for the volume
     */
    protected $guid;
    /**
     * @var string A name for the volume
     */
    protected $volume_name;
    /**
     * @var int The ID for the volume
     */
    protected $volume_mode;
    /**
     * @var int The RAID level for the volume
     */
    protected $raid_level;
    /**
     * @var string Whether the volume will auto-expand on the disk
     */
    protected $autoexpand;
    /**
     * @var string Whether the volume will autoreplace
     */
    protected $autoreplace;
    /**
     * @var string Whether the volume is delegated
     */
    protected $delegation;
    /**
     * @var string Whether or not the volume lists it's snapshots
     */
    protected $listsnapshots;
    /**
     * @var int The version number of the volume
     */
    protected $version;
    /**
     * @var int The allocated space on the volume
     */
    protected $allocated;
    /**
     * @var int The available capacity of the volume
     */
    protected $capacity;
    /**
     * @var int The free space for the volume
     */
    protected $free;
    /**
     * @var int The available space for the volume
     */
    protected $available;
    /**
     * @var int The number of snapshots required before pruning
     */
    protected $snapshotprunethreshold;
    /**
     * @var int The number of KB used by snapshots on the volume
     */
    protected $usedbysnapshotkb;
    /**
     * @var int The number of KB allocated for metadata on the volume
     */
    protected $metadataallocatedkb;
    /**
     * @var int The number of KB used by metadata on the volume
     */
    protected $metadatausedkb;
    /**
     * @var int The number of KB allocated for data on the volume
     */
    protected $dataallocatedkb;
    /**
     * @var int The number of KB used by data on the volume
     */
    protected $datausedkb;
    /**
     * @var int The number of unallocated KB on the volume
     */
    protected $unallocatedkb;
    /**
     * @var string The health status of the volume
     */
    protected $health;
    /**
     * @var string Whether the checksum feature is on for the volume
     */
    protected $checksum;
    /**
     * @var string Whether the quota feature is on for the volume
     */
    protected $quota;
    /**
     * @var int
     */
    protected $expanded;
    /**
     * @var int
     */
    protected $discardable;
    /**
     * @var int
     */
    protected $xraidexpanded;
}
