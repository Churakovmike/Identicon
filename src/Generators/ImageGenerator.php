<?php

namespace ChurakovMike\Identicon\Generators;

/**
 * Class ImageGenerator
 * @package ChurakovMike\Identicon\Generators
 */
class ImageGenerator extends BaseGenerator
{
    /**
     * @param mixed $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param $height
     * @param $width
     * @return void
     */
    public function setSize($height, $width)
    {
        $this->size = [$height, $width];
    }

    /**
     * @param mixed $color
     * @return mixed|void
     */
    public function setBackgroundColor($color)
    {
        $this->backgroundColor = $color;
    }

    /**
     * @param string $seed
     * @return mixed|void
     */
    public function setSeed(string $seed)
    {
        $this->seed = $seed;
    }

    /**
     * @return int|void
     */
    public function getHeight()
    {
        return 100;
    }

    /**
     * @return int|void
     */
    public function getWidth()
    {
        return 100;
    }

    public function generate()
    {

        $image = $this->createImage();
        $backgroundColor = imagecolorallocate($this->getBackgroundColor(), 255, 255, 255);
        imagefill($image, 0, 0, $backgroundColor);
        $red = imagecolorallocate($image, 255, 0, 0);
        $green = imagecolorallocate($image,   0, 255,   0);
        $blue = imagecolorallocate($image,   0, 0, 255);
        header("Content-type: image/png");
        imagepng($image);
        imagedestroy($image);
    }

    protected function createImage()
    {
        return imagecreatetruecolor($this->getWidth(), $this->getHeight());
    }
}
