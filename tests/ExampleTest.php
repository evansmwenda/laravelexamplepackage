<?php

use EvansMwenda\Example\Commands\ExampleCommand;
use Illuminate\Console\Command;

use function Pest\Laravel\artisan;

it('can test', function () {
    // expect(true)->toBeTrue();
    artisan(ExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
