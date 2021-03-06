<?php

namespace Dhii\Factory\UnitTest\Exception;

use Dhii\Factory\Exception\CouldNotMakeExceptionInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Factory\Exception\CouldNotMakeExceptionInterface}.
 *
 * @since 0.1
 */
class CouldNotMakeExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Factory\Exception\CouldNotMakeExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getFactory()
            ->getSubjectConfig()

            ->getMessage()
            ->getCode()
            ->getPrevious()
            ->getFile()
            ->getLine()
            ->getTrace()
            ->getTraceAsString()
            ->__toString()

            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\Factory\Exception\FactoryExceptionInterface', $subject, 'Subject is not a FactoryExceptionInterface instance.'
        );
    }
}
