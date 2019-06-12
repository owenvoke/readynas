<?php

use pxgamer\ReadyNAS\Apps;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Collection;

/**
 * Class AppsTest.
 */
class AppsTest extends TestCase
{
    /**
     * Test whether Apps information can be retrieved as a Collection.
     */
    public function testCanGetAppsInfo()
    {
        $apps = new Apps();
        $appInfo = $apps->getAppsInfo();

        $this->assertInstanceOf(Collection::class, $appInfo);
    }
}
