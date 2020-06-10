<?php

namespace ChurakovMike\Identicon\Interfaces;

/**
 * Interface GeneratorInterface.
 * @package ChurakovMike\Identicon\Interfaces
 */
interface GeneratorInterface
{
    /**
     * Set background color for image.
     *
     * @param mixed $color
     * @return mixed
     */
    public function setBackgroundColor($color);

    /**
     * Set main image color.
     *
     * @param mixed $color
     * @return mixed
     */
    public function setColor($color);

    /**
     * Set image height and width.
     *
     * @param $height
     * @param $width
     * @return mixed
     */
    public function setSize($height, $width);

    /**
     * Set image seed for generator.
     *
     * @param string $seed
     * @return mixed
     */
    public function setSeed(string $seed);

    /**
     * @return mixed
     */
    public function generate();
}
