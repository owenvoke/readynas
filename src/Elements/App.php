<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class App
 */
class App
{
    use Element;

    /**
     * @var string The name of the app
     */
    protected $name;
    /**
     * @var string The version number for the app
     */
    protected $version;
    /**
     * @var string The author of the app
     */
    protected $author;
    /**
     * @var string The category ID of the app
     */
    protected $category;
    /**
     * @var bool Whether the app requires a restart or not
     */
    protected $requirereboot;
    /**
     * @var string The configuration URL for the app
     */
    protected $configurl;
    /**
     * @var string The launch URL for the app
     */
    protected $launchurl;
    /**
     * @var string The information URL for the app
     */
    protected $infourl;
    /**
     * @var int The port number that is reserved for the app
     */
    protected $reserveport;
    /**
     * @var string A unique Debian package name for the app
     */
    protected $debianpackage;
    /**
     * @var string A unique name of the .service runtime for the app
     */
    protected $servicename;
    /**
     * @var string A description for the app
     */
    protected $description;
}
