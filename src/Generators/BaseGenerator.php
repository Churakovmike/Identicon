<?php

namespace ChurakovMike\Identicon\Generators;

use ChurakovMike\Identicon\Interfaces\GeneratorInterface;

/**
 * Class BaseGenerator.
 * @package ChurakovMike\Identicon\Generators
 *
 * @property mixed $color
 * @property mixed $backgroundColor
 * @property mixed $size
 * @property mixed $seed
 */
abstract class BaseGenerator implements GeneratorInterface
{
    /**
     * @var mixed $color
     */
    protected $color;

    /**
     * @var mixed $backgroundColor
     */
    protected $backgroundColor;

    /**
     * @var mixed $size
     */
    protected $size;

    /**
     * @var mixed $seed
     */
    protected $seed;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getSeed()
    {
        return $this->seed;
    }

    public function getWidth() {}

    public function getHeight() {}
}
