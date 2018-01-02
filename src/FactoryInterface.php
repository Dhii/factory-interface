<?php

namespace Dhii\Factory;

use Dhii\Factory\Exception\FactoryExceptionInterface;
use Dhii\Factory\Exception\CouldNotMakeExceptionInterface;

/**
 * Something that can create things.
 *
 * @since [*next-version*]
 */
interface FactoryInterface
{
    /**
     * Creates a new instance.
     *
     * @since [*next-version*]
     *
     * @param mixed $config Some kind of configuration.
     *
     * @throws CouldNotMakeExceptionInterface If the factory failed to make the instance.
     * @throws FactoryExceptionInterface      If an error related to the factory occurs.
     *
     * @return mixed The created things.
     */
    public function make(array $config = array());
}
