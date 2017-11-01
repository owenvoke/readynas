<?php

namespace pxgamer\ReadyNAS\Elements;

/**
 * Trait Element
 */
trait Element
{
    /**
     * Populate the class from an object
     *
     * @param object $data
     */
    public function populateFromData($data)
    {
        if (is_object($data)) {
            foreach ($data as $item => $value) {
                $itemLower = strtolower($item);
                if (property_exists($this, $itemLower)) {
                    $this->$itemLower = $value;
                }
            }
        }
    }
}