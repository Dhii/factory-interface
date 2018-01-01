<?php

namespace Dhii\Factory\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * An exception thrown when a factory failed to create an instance.
 *
 * @since [*next-version*]
 */
interface CouldNotMakeExceptionInterface extends
    FactoryExceptionInterface
{
    /**
     * Retrieves the ID of the subject that failed.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
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
