<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Questions</title>
</head>
<body>
    <h1>Create Question</h1>

    <form action="{{ route('questions.store') }}" method="post">
        @csrf

        <div>
            <label for="question">Question</label>
            <input type="text" name="question" value="{{ old('question') }}">
        </div>

        <div>
            <label for="picture">Picture</label>
            <input type="text" name="picture" value="{{ old('picture') }}">
        </div>

        <div>
            <label for="answer_1">Answer 1</label>
            <input type="text" name="answer_1" value="{{ old('answer_1') }}">
        </div>

        <div>
            <label for="answer_2">Answer 2</label>
            <input type="text" name="answer_2" value="{{ old('answer_2') }}">
        </div>

        <div>
            <label for="answer_3">Answer 3</label>
            <input type="text" name="answer_3" value="{{ old('answer_3') }}">
        </div>

        <div>
            <label for="answer_4">Answer 4</label>
            <input type="text" name="answer_4" value="{{ old('answer_4') }}">
        </div>

        <div>
            <label for="position">Position</label>
            <input type="number" name="position" value="{{ old('position') }}">
        </div>

        <div>
            <label for="correct_answer">Correct Answer</label>
            <input type="number" name="correct_answer" value="{{ old('correct_answer') }}">
        </div>

            <div>
                <label for="quiz_id">Quiz</label>
                <select name="quiz_id">
                    @foreach ($quizzes as $quiz)
                        <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
                    @endforeach
                </select>
            </div>

        <button type="submit">Create Question</button>
    </form>   
</body>
</html>