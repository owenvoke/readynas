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
     * @return Element
     */
    public function populateFromData($data)
    {
        if (is_object($data)) {
            foreach ($data as $item => $value) {
                $itemLower = strtolower($item);
                if (property_exists($this, $itemLower)) {
                    switch (true) {
                        case is_numeric((string)$value):
                            $value = (int)$value;
                            break;
                        case (string)$value === 'true':
                            $value = true;
                            break;
                        case (string)$value === 'false':
                            $value = false;
                            break;
                        case (string)$value !== '':
                            $value = (string)$value;
                            break;
                        default:
                            $value = null;
                    }
                    $this->$itemLower = $value;
                }
            }
        }

        return $this;
    }
}