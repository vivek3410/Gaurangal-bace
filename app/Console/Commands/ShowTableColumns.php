<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ShowTableColumns extends Command
{
    protected $signature = 'show:columns {model}';

    protected $description = 'Show the columns of a database table associated with a model';

    public function handle()
    {
        $modelName = $this->argument('model');
        $modelInstance = app($modelName);

        if ($modelInstance instanceof Model) {
            $tableName = $modelInstance->getTable();
            $columns = Schema::getColumnListing($tableName);

            $this->info("Columns for table '{$tableName}':");
            foreach ($columns as $column) {
                $this->line($column);
            }
        } else {
            $this->error("The provided class '{$modelName}' is not an Eloquent model.");
        }
    }
}