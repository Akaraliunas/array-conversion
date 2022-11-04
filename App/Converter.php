<?php

namespace App;

class Converter
{
    /**
     * Converts given array to specified format
     *
     * @return void
     */
    public function convert($array, $format)
    {
        switch ($format) {
            case 'csv':
                return $this->toCSV($array);
                break;

            default:
                break;
        }
    }

    public function toCSV($array)
    {
        return json_encode($array, JSON_PRETTY_PRINT);
    }
}
