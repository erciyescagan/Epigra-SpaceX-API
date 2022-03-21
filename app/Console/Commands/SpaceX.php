<?php

namespace App\Console\Commands;

use App\Models\Capsule;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class SpaceX extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spacex:get';

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
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(){
        $endpoint = "https://api.spacexdata.com/v3/capsules";
        $client = new Client();

        $capsulesFromSpaceX = $client->request('GET', $endpoint);
        foreach (json_decode($capsulesFromSpaceX->getBody()) as $capsuleFromSpaceX){
            $capsuleSerial = json_decode(json_encode($capsuleFromSpaceX), true)['capsule_serial'];
            if (Capsule::where('capsule_serial', $capsuleSerial)->exists()){
                $capsule = Capsule::where('capsule_serial', $capsuleSerial)->first();
                $capsule->update((array)$capsuleFromSpaceX);
            } else{
                Capsule::create((array)$capsuleFromSpaceX);
            }
        }

    }
}
