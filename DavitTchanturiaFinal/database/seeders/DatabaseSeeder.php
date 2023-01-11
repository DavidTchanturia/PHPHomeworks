<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
        'id' => 1,
        'email' => 'admin@example.com',
        'password' => bcrypt('admin'),
    ]);


        // Create a quiz
        $quiz = Quiz::create([
            'name' => 'General knowledge quiz',
            'picture' => 'https://media.baamboozle.com/uploads/images/54897/1589764863_46191',
            'description' => 'this quiz containts some general questions about every field there is',
            "is_published" => true,
            'author_id' => 1,
        ]);

        // Create some questions for the quiz
        $quiz->questions()->createMany([
            [
                'question' => 'What is the capital of France?',
                'picture' => 'https://i.natgeofe.com/k/04665f4a-3f8d-4b62-8ca3-09ce7dfc5a20/france-eiffel-tower_4x3.jpg',
                'answer_1' => 'Paris',
                'answer_2' => 'London',
                'answer_3' => 'Madrid',
                'answer_4' => 'Rome',
                'position' => 1,
                'correct_answer' => 1,
            ],
            [
                'question' => 'What is the highest mountain in the world?',
                'picture' => 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg',
                'answer_1' => 'Mount Everest',
                'answer_2' => 'K2',
                'answer_3' => 'Mount Kilimanjaro',
                'answer_4' => 'Mont Blanc',
                'position' => 2,
                'correct_answer' => 1,
            ],
        ]);
    }
}