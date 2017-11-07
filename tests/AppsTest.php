<?php

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use pxgamer\ReadyNAS\Apps;

/**
 * Class AppsTest
 */
class AppsTest extends TestCase
{
    /**
     * Test whether Apps information can be retrieved as a Collection
     */
    public function testCanGetAppsInfo()
    {
        $apps = new Apps();
        $appInfo = $apps->getAppsInfo();

        $this->assertInstanceOf(Collection::class, $appInfo);
    }
}
