<?php

namespace App\Format;

/**
 * Class BaseFormat
 *
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
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    abstract public function convert(): string;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->convert();
    }
}
