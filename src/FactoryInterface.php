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
     * @throws CouldNotMakeExceptionInterface If the factory failed to make the instance.
     * @throws FactoryExceptionInterface If an error occurred while making the instance.
     *
     * @return object The created instance.
     */
    public function make($id, array $config = array());
}
