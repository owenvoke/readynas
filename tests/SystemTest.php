<?php

use PHPUnit\Framework\TestCase;
use pxgamer\ReadyNAS\Elements\Firmware;
use pxgamer\ReadyNAS\System;

/**
 * Class SystemTest.
 */
class SystemTest extends TestCase
{
    /**
     * Test whether Firmware information can be retrieved as a Collection.
     */
    public function testCanGetFirmwareInfo()
    {
        $system = new System();
        $firmwareInfo = $system->getFirmwareInfo();

        $this->assertInstanceOf(Firmware::class, $firmwareInfo);
    }
}
