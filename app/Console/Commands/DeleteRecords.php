<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DeleteRecords extends Command
{
    protected $signature = 'delete-records';

    protected $description = 'Supprime les données des formulaires de contact après 1 an.';

    public function handle()
    {
        DB::table('forms')->where('date', '<=', Carbon::now()->subMonth(6))->delete();
        DB::table('estimates')->where('date', '<=', Carbon::now()->subMonth(6))->delete();
    }
}
