<?php

namespace App\Console\Commands;

use App\Models\order;
use Illuminate\Console\Command;

class CreateOrderCommand extends Command
{

    protected $signature = 'make:order';  


    protected $description = 'Este comando es para crear una nueva Order';


    public function handle()
    {
        order::create([
            'user_id' => 20,
            'amount'=> 25

        ]);
        return Command::SUCCESS;
    }
}
