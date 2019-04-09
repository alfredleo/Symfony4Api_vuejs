<?php

namespace App\Format;

/**
 * Class YAML
 *
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

        foreach ($this->data as $key => $value) {
            $result .= $key . ': ' . $value . "\n";
        }
        return htmlspecialchars($result);
    }
}
