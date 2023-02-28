<?php

namespace Codepoint\ZabbixApi\Commands;

use Illuminate\Console\Command;

class ZabbixApiCommand extends Command
{
    public $signature = 'laravel-zabbix-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
