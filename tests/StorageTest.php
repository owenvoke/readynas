<?php

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use pxgamer\ReadyNAS\Elements\Smart;
use pxgamer\ReadyNAS\Storage;

/**
 * Class StorageTest
 */
class StorageTest extends TestCase
{
    /**
     * Test whether Disks information can be retrieved as a Collection
     */
    public function testCanGetDisksInfo()
    {
        $disks = new Storage();
        $diskInfo = $disks->getDisksInfo();

        $this->assertInstanceOf(Collection::class, $diskInfo);
    }

    /**
     * Test whether S.M.A.R.T. information can be retrieved as a Smart instance
     */
    public function testCanGetSmartInfo()
    {
        $disks = new Storage();
        $smartInfo = $disks->getSmartInfo('sda');
        var_dump($smartInfo);

        $this->assertInstanceOf(Smart::class, $smartInfo);
    }
}