<?php

namespace App\Format;

/**
 * Class YAML
 * @package App\Format
 */
class YAML extends BaseFormat
{
    /**
     * @return string
     */
    public function convert(): string
    {
        $result = '';

        foreach ($this->data AS $key => $value) {
            $result .= $key . ': ' . $value . "\n";
        }
        return htmlspecialchars($result);
    }
}
