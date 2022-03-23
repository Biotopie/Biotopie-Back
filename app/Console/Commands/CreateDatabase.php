<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;

class CreateDatabase extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create';

    protected $name = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $database = env('DB_DATABASE', false);

        if (! $database) {
            $this->info('Skipping creation of database as env(DB_DATABASE) is empty');
            return;
        }

        try {
            $pdo = $this->getPDOConnection(env('DB_HOST'), env('DB_PORT'), env('DB_USERNAME'), env('DB_PASSWORD'));

            $pdo->exec(
                'CREATE DATABASE IF NOT EXISTS ' . $database
            );

            $this->info(sprintf('Successfully created %s database', $database));
        } catch (PDOException $exception) {
            $this->error(sprintf('Failed to create %s database, %s', $database, $exception->getMessage()));
        }
    }

    private function getPDOConnection($host, $port, $username, $password) {
        return new PDO(sprintf('mysql:host=%s;port=%d;', $host, $port), $username, $password);
    }
}
