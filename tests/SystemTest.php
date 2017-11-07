<?php

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use pxgamer\ReadyNAS\Elements\Device;
use pxgamer\ReadyNAS\Elements\Firmware;
use pxgamer\ReadyNAS\System;

/**
 * Class SystemTest.
 */
class SystemTest extends TestCase
{
    /**
     * Test whether Firmware information can be retrieved as a Firmware instance.
     */
    public function testCanGetFirmwareInfo()
    {
        $system = new System();
        $firmwareInfo = $system->getFirmwareInfo();

        $this->assertInstanceOf(Firmware::class, $firmwareInfo);
    }

    /**
     * Test whether Device information can be retrieved as a Device instance.
     */
    public function testCanGetDeviceInfo()
    {
        $system = new System();
        $deviceInfo = $system->getDeviceInfo();

        $this->assertInstanceOf(Device::class, $deviceInfo);
    }

    /**
     * Test whether Health information can be retrieved as a Collection.
     */
    public function testCanGetHealthInfo()
    {
        $system = new System();
        $deviceInfo = $system->getHealthInfo();

        $this->assertInstanceOf(Collection::class, $deviceInfo);
    }

    /**
     * Test whether Protocol information can be retrieved as a Collection.
     */
    public function testCanGetProtocolInfo()
    {
        $system = new System();
        $deviceInfo = $system->getProtocolInfo();

        $this->assertInstanceOf(Collection::class, $deviceInfo);
    }
}
