<?php

namespace App\Format;

class JSON extends BaseFormat
{
    /**
     * @return string|bool
     */
    public function convert(): string
    {
        return json_encode($this->data);
    }
}
