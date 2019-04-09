<?php

namespace App\Format;

/**
 * Class XML
 *
 * @category
 * @author   Alfred <alfredleo@gmail.com>
 * @license  MIT
 * @link     https://github.com/alfredleo
 *
 * XML formatting class
 *
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
