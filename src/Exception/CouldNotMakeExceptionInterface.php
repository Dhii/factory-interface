<?php

namespace Dhii\Factory\Exception;

use Dhii\Exception\ThrowableInterface;

/**
 * An exception thrown when a factory failed to create an instance.
 *
 * @since [*next-version*]
 */
interface CouldNotMakeExceptionInterface extends
    ThrowableInterface,
    FactoryExceptionInterface
{
    /**
     * Retrieves the ID of the subject that failed.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getSubjectId();

    /**
     * Retrieves the configuration of the subject that failed.
     *
     * @since [*next-version*]
     *
     * @return mixed
     */
    public function getSubjectConfig();
}
