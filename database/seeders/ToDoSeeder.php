<?php

namespace Database\Seeders;

use App\Enums\ToDoStatuses;
use App\Models\ToDo;
use App\Models\User;
use Illuminate\Database\Seeder;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();
        foreach ($users as $user) {
            foreach (ToDoStatuses::cases() as $todo_status) {
                ToDo::factory()->create([
                    ToDo::USER_ID => $user->id,
                    ToDo::STATUS => $todo_status->value,
                ]);
                ToDo::factory()->create([
                    ToDo::USER_ID => $user->id,
                    ToDo::STATUS => $todo_status->value,
                ]);
            }
        }
    }
}
