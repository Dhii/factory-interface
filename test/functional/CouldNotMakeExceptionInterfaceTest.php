<?php

namespace Dhii\Factory\FuncTest;

use Dhii\Factory\CouldNotMakeExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Factory\CouldNotMakeExceptionInterface}.
 *
 * @since [*next-version*]
 */
class CouldNotMakeExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Factory\\CouldNotMakeExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return CouldNotMakeExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getSubjectId()
            ->getSubjectConfig()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\\Factory\\FactoryExceptionInterface', $subject, 'Subject is not a FactoryExceptionInterface instance.'
        );
    }
}
