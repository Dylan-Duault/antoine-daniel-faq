<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FaqItem;

class ParseCSVCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csv:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse FAQ CSV file and display entries';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filePath = storage_path('app/private/faq.csv');

        if (!file_exists($filePath)) {
            $this->error('The FAQ CSV file does not exist.');
            return 1;
        }

        $csvData = array_map('str_getcsv', file($filePath));
        $dataArray = [];

        // Remove header row
        array_shift($csvData);

        foreach ($csvData as $row) {
            $dataArray[] = [
                'question' => $row[0],
                'answer' => $row[1],
            ];
        }

        $this->info('FAQ CSV file parsed successfully.');
        $this->printArray($dataArray);

        // Import the data into the DB using the FaqItem model
        FaqItem::insert($dataArray);

        $this->info('FAQ data imported successfully.');

        return 0;
    }

}
