<?php

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Create a quiz
        $quiz = Quiz::create([
            'name' => 'My Quiz',
            'picture' => 'https://example.com/quiz.jpg',
            'description' => 'This is my quiz!',
            'author_id' => 1,
        ]);

        // Create some questions for the quiz
        $quiz->questions()->createMany([
            [
                'question' => 'What is the capital of France?',
                'picture' => 'https://example.com/question1.jpg',
                'answer_1' => 'Paris',
                'answer_2' => 'London',
                'answer_3' => 'Madrid',
                'answer_4' => 'Rome',
                'position' => 1,
                'correct_answer' => 1,
            ],
            [
                'question' => 'What is the highest mountain in the world?',
                'picture' => 'https://example.com/question2.jpg',
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
