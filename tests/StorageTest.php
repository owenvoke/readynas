<?php

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
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
}