<?php
session_start();

if (isset($_SESSION['score1'])) {
    $score1 = $_SESSION['score1'];

    // Load the XML file
    $xml = simplexml_load_file('quiz.xml');

    // Convert XML object to array
    $questions = [];
    foreach ($xml->question as $question) {
        $questions[] = $question;
    }

    $totalQuestions = count($questions);
    unset($_SESSION['score1']);
} else {
    // Redirect back to the quiz.php file if the score is not set
    header('Location: quiz.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Quiz Score</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Quiz Score</h1>
  <div class="score-container">
    <h2>Your Score</h2>
    <p><?php echo $score1; ?> / <?php echo $totalQuestions; ?></p>
    <button onclick="window.location.href = 'index.php';">Return to Home</button>
  </div>
</body>
</html>
