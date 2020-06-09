<?php

namespace ChurakovMike\Identicon;

use ChurakovMike\Identicon\Interfaces\GeneratorInterface;

/**
 * Class Identicon
 * @package ChurakovMike\Identicon
 *
 * @property GeneratorInterface|null $generator
 */
class Identicon
{
    /**
     * @var GeneratorInterface|null $generator
     */
    private $generator;

    /**
     * Identicon constructor.
     *
     * @param GeneratorInterface|null $generator
     */
    public function __construct(GeneratorInterface $generator = null)
    {
        $this->generator = $generator;
    }

    /**
     * @param GeneratorInterface $generator
     */
    public function setGenerator(GeneratorInterface $generator)
    {
        $this->generator = $generator;
    }

    /**
     * {@inheritDoc}
     */
    public function generate() {}


}
