<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')->delete();
        \App\Models\Ticket::factory(30)->create();
    }
}
