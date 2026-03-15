<?php

namespace Database\Seeders;

use App\Enums\ToDoStatuses;
use DB;
use Illuminate\Database\Seeder;

class ToDoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ToDoStatuses::cases() as $todo_status) {
            DB::table('todo_statuses')->insert([
                'id' => $todo_status->value,
                'name' => $todo_status->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
