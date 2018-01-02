<?php

namespace Dhii\Factory;

/**
 * Something that can have a factory retrieved from it.
 *
 * @since [*next-version*]
 */
interface FactoryAwareInterface
{
    /**
     * Retrieves the factory associate with this instance.
     *
     * @since [*next-version*]
     *
     * @return FactoryInterface|null
     */
    public function getFactory();
}
