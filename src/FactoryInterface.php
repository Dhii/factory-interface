<?php

namespace Dhii\Factory;

/**
 * Something that can create instances.
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
     * @param string $id     The ID of the instance to create.
     * @param mixed  $config Some kind of configuration.
     *
     * @return object|null The created instance or null on failure.
     */
    public function make($id, array $config = array());
}
