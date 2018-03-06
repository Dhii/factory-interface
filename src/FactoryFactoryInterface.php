<?php

namespace Dhii\Factory;

/**
 * Something that creates factories.
 *
 * @since [*next-version*]
 */
interface FactoryFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return FactoryInterface The new factory.
     */
    public function make($config = null);
}
