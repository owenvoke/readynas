<?php

use pxgamer\ReadyNAS\Storage;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Collection;
use pxgamer\ReadyNAS\Elements\Smart;
use pxgamer\ReadyNAS\Elements\Volume;

/**
 * Class StorageTest.
 */
class StorageTest extends TestCase
{
    /**
     * Test whether Disks information can be retrieved as a Collection.
     */
    public function testCanGetDisksInfo()
    {
        $disks = new Storage();
        $diskInfo = $disks->getDisksInfo();

        $this->assertInstanceOf(Collection::class, $diskInfo);
    }

    /**
     * Test whether S.M.A.R.T. information can be retrieved as a Smart instance.
     */
    public function testCanGetSmartInfo()
    {
        $disks = new Storage();
        $smartInfo = $disks->getSmartInfo('sda');

        $this->assertInstanceOf(Smart::class, $smartInfo);
    }

    /**
     * Test whether Volume information can be retrieved as a Collection.
     */
    public function testCanGetVolumeInfo()
    {
        $disks = new Storage();
        $smartInfo = $disks->getVolumeInfo();

        $this->assertInstanceOf(Volume::class, $smartInfo);
    }
}
