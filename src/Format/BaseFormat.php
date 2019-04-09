<?php

namespace App\Format;

/**
 * Class BaseFormat
 * @package App\Format
 */
abstract class BaseFormat
{
    /**
     * @var array
     */
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public abstract function convert(): string;

    /**
     * @return mixed
     */
    public function __toString(): string
    {
        return $this->convert();
    }


}
