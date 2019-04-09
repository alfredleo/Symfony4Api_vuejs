<?php

namespace App\Format;

/**
 * Class XML
 * @package App\Format
 */
class XML extends BaseFormat
{
    /**
     * @return string
     */
    public function convert(): string
    {
        $result = '';
        foreach ($this->data as $key => $value) {
            $result .= '<' . $key . '>' . $value . '</' . $key . '>';
        }

        return htmlspecialchars($result);
    }
}
