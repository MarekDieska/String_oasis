<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EmptyTrash extends Command
{
    protected $signature = 'trash:empty';
    protected $description = 'Vyčistenie koša každých 30 dní';

    public function handle()
    {
        $files = Storage::disk('public')->files('images/trash');

        foreach ($files as $file) {
            $lastModified = Storage::disk('public')->lastModified($file);
            $fileAge = Carbon::createFromTimestamp($lastModified);

            if ($fileAge->lt(Carbon::now()->subDays(30))) {
                Storage::disk('public')->delete($file);
                $this->info("Odstránený súbor: {$file}");
            }
        }

        $this->info('Kôš vyčistený!');
    }
}
