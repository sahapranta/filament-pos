<?php

namespace Sahapranta\FilamentPos\Commands;

use Illuminate\Console\Command;

class FilamentPosCommand extends Command
{
    public $signature = 'filament-pos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
