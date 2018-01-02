<?php

namespace Dhii\Factory\Exception;

/**
 * An exception thrown when a factory failed to create an instance.
 *
 * @since [*next-version*]
 */
interface CouldNotMakeExceptionInterface extends
    FactoryExceptionInterface
{
    /**
     * Retrieves the configuration of the subject that failed.
     *
     * @since [*next-version*]
     *
     * @return mixed
     */
    public function getSubjectConfig();
}
