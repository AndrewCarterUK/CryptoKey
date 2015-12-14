<?php

namespace AndrewCarterUK\CryptoKey;

class ConsoleTest extends \PHPUnit_Framework_TestCase
{
    public function testConsole()
    {
        exec('php ' . __DIR__ . '/../cryptokey', $output);

        $searchStrings = [
            'help',
            'list',
            'generate',
            'Generate a key using a CSPRNG'
        ];

        $buffer = implode(PHP_EOL, $output);

        foreach ($searchStrings as $searchString) {
            $this->assertContains($searchString, $buffer);
        }
    }
}
