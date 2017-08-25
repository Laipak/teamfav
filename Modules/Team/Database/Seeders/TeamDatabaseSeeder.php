<?php

namespace Modules\Team\Database\Seeders;

use Modules\Team\Entities\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TeamDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        
        // Create the initial demo team if it's not yet created
        $team = Team::where('nickname', 'GXFC')->first();
        if (!$team) {
            Team::create([
                'fullname' => 'Gong Xi Fa Cai',
                'nickname' => 'GXFC',
                'state' => '1',
            ]);
        }
    }
}
