<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Class Smart
 */
class Smart
{
    use Element;

    /**
     * @var int The ATA Error Count for the disk
     */
    protected $ataerrorcount;
    /**
     * @var int The reallocated sectors for the disk
     */
    protected $reallocatedsectors;
    /**
     * @var int The number of reallocation events for the disk
     */
    protected $reallocationevents;
    /**
     * @var int The number of retries for spin-ups for the disk
     */
    protected $spinretrycount;
    /**
     * @var int The currently pending sectors count for the disk
     */
    protected $currentpendingsectorcount;
    /**
     * @var int The number of uncorrectable sectors for the disk
     */
    protected $uncorrectablesectorcount;
    /**
     * @var int The current temperature of the disk
     */
    protected $temperature;
    /**
     * @var int The number of starts/stops for the disk
     */
    protected $startstopcount;
    /**
     * @var int The total power-on hours for the disk
     */
    protected $poweronhours;
    /**
     * @var int The number of power cycles for the disk
     */
    protected $powercyclecount;
    /**
     * @var int The number of load cycles for the disk
     */
    protected $loadcyclecount;
}