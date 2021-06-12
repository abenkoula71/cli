<?php namespace Tests\CLI;

use Framework\CLI\Console;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
	protected CommandMock $command;

	protected function setUp() : void
	{
		$this->command = new CommandMock(new Console());
	}

	public function testDescription() : void
	{
		$this->assertEquals('Lorem ipsum', $this->command->getDescription());
	}

	public function testUsage() : void
	{
		$this->assertEquals('test', $this->command->getUsage());
	}

	public function testOptions() : void
	{
		$this->assertEquals(['-b' => 'foo bar'], $this->command->getOptions());
	}
}
