<?php declare(strict_types=1);
namespace Kata\Tests;
use Kata\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function exampleMethod_shouldReturn_true(): void
    {
        $example = new Example();
        $this->assertTrue($example->exampleMethod());
    }
}