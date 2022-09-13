<?php

namespace App\Jobs;

use App\Events\DataServeEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Faker\Generator as Faker;

class DataServeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Faker $faker)
    {
        for ($i=1; $i <= 20000; $i++) { 
            $data=[
                'id' =>$i,
                'name' => $faker->name(),
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail(),
            ];
            event(new DataServeEvent($data));
           }
    }
}
