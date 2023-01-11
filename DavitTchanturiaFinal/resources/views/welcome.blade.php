<!DOCTYPE html>
<html>
<head>
  <title>David Tchanturia Quiz App</title>
  <style>
    /* add some CSS styling for the gradient background */
    body {
      background: linear-gradient(to right, #ff7e5f, #feb47b);
    }
    /* add some CSS styling for the heading and button */
    h1 {
      font-size: 3rem;
      text-align: center;
      color: white;
      margin-top: 10%;
    }
    button {
      display: block;
      margin: 0 auto;
      width: 150px;
      padding: 15px;
      font-size: 1.5rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      text-align: center;
      text-decoration: none;
      margin-top: 20%;
    }
    button:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <h1>David Tchanturia Quiz App</h1>
  <button onclick="location.href='{{ route('quizzes.index') }}'">Get started</button>
</body>
</html>
