<?php

namespace Nerdmonkey\LaravelWakeonlan\Commands;

use Illuminate\Console\Command;

class LaravelWakeonlanCommand extends Command
{
    public $signature = 'laravel-wakeonlan';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
