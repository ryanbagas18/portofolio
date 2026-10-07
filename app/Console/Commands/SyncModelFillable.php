<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use ReflectionClass;

class SyncModelFillable extends Command
{
    protected $signature = 'model:sync-fillable {model?}';

    protected $description = 'Sync model $fillable with database table columns';

    public function handle()
    {
        $modelName = $this->argument('model');

        // Kalau model diberikan, sync hanya model tersebut
        if ($modelName) {
            return $this->syncModel($modelName);
        }

        // Kalau model tidak diberikan, sync semua model
        $modelsPath = app_path('Models');

        $files = glob($modelsPath . '/*.php');

        if (!$files) {
            $this->error('Tidak ada model ditemukan di app/Models.');
            return self::FAILURE;
        }

        $success = 0;
        $failed = 0;

        foreach ($files as $file) {
            $modelName = pathinfo($file, PATHINFO_FILENAME);

            $this->newLine();
            $this->info("Syncing {$modelName}...");

            $result = $this->syncModel($modelName);

            if ($result === self::SUCCESS) {
                $success++;
            } else {
                $failed++;
            }
        }

        $this->newLine();
        $this->info("Selesai.");
        $this->info("Berhasil : {$success}");

        if ($failed > 0) {
            $this->warn("Gagal    : {$failed}");
        }

        return $failed > 0
            ? self::FAILURE
            : self::SUCCESS;
    }

    private function syncModel(string $modelName)
    {
        $modelClass = 'App\\Models\\' . $modelName;

        if (!class_exists($modelClass)) {
            $this->error("Model {$modelClass} tidak ditemukan.");
            return self::FAILURE;
        }

        $model = new $modelClass;

        $table = $model->getTable();

        if (!Schema::hasTable($table)) {
            $this->error("Table '{$table}' tidak ditemukan di database.");
            return self::FAILURE;
        }

        $columns = Schema::getColumnListing($table);

        $excluded = [
            'id',
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        $fillable = array_values(
            array_diff($columns, $excluded)
        );

        $reflection = new ReflectionClass($modelClass);
        $file = $reflection->getFileName();

        if (!$file) {
            $this->error("File model {$modelName} tidak ditemukan.");
            return self::FAILURE;
        }

        $content = file_get_contents($file);

        // Buat isi $fillable
        $fillableContent = "protected \$fillable = [\n";

        foreach ($fillable as $column) {
            $fillableContent .= "        '{$column}',\n";
        }

        $fillableContent .= "    ];";

        // Kalau $fillable sudah ada → overwrite
        if (preg_match(
            '/protected\s+\$fillable\s*=\s*\[.*?\];/s',
            $content
        )) {
            $content = preg_replace(
                '/protected\s+\$fillable\s*=\s*\[.*?\];/s',
                $fillableContent,
                $content
            );
        } else {
            // Kalau belum ada → tambahkan sebelum }
            $position = strrpos($content, '}');

            if ($position === false) {
                $this->error("Struktur model {$modelName} tidak valid.");
                return self::FAILURE;
            }

            $content = substr_replace(
                $content,
                "\n    {$fillableContent}\n",
                $position,
                0
            );
        }

        file_put_contents($file, $content);

        $this->info("✓ {$modelName} → {$table} → " . count($fillable) . " kolom");

        return self::SUCCESS;
    }
}
