<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Get the logged-in user's username
$username = $_SESSION["username"];

// Set default scores if not set
$score1  = isset($_SESSION["score1"]) ? $_SESSION["score1"] : 0;
$score2  = isset($_SESSION["score2"]) ? $_SESSION["score2"] : 0;
$score3  = isset($_SESSION["score3"]) ? $_SESSION["score3"] : 0;
$score4  = isset($_SESSION["score4"]) ? $_SESSION["score4"] : 0;
$score5  = isset($_SESSION["score5"]) ? $_SESSION["score5"] : 0;
$score6  = isset($_SESSION["score6"]) ? $_SESSION["score6"] : 0;
$score7  = isset($_SESSION["score7"]) ? $_SESSION["score7"] : 0;
$score8  = isset($_SESSION["score8"]) ? $_SESSION["score8"] : 0;
$score9  = isset($_SESSION["score9"]) ? $_SESSION["score9"] : 0;
$score10 = isset($_SESSION["score10"]) ? $_SESSION["score10"] : 0;
$score11 = isset($_SESSION["score11"]) ? $_SESSION["score11"] : 0;
$score12 = isset($_SESSION["score12"]) ? $_SESSION["score12"] : 0;
$score13 = isset($_SESSION["score13"]) ? $_SESSION["score13"] : 0;
$score14 = isset($_SESSION["score14"]) ? $_SESSION["score14"] : 0;
$score15 = isset($_SESSION["score15"]) ? $_SESSION["score15"] : 0;

$totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15;


// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Destroy all session data
    session_destroy();
    
    // Redirect the user to the login page or any other desired page
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>QUIZMANIA</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <style>
    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      width: 300px;
      margin: 100px auto;
      padding: 20px;
      text-align: center;
    }
    
    /* Styling for Quiz Number */
    .quiz-number {
      font-weight: bold;
      text-decoration: none; /* Remove underline */
    }

    /* Styling for Completed Quiz */
    .quiz-number.completed-quiz {
      color: blue;
    }

    /* Styling for Default Quiz Number */
    .quiz-number:not(.completed-quiz) {
      color: #D3D3D3;
    }
    
    /* Styling for Hovered Quiz Number */
    .quiz-number:hover {
      color: #add8e6;
    }

  </style>
  <script>
  window.onload = function() {
    var popup = document.querySelector('.popup');
    <?php
if ($score1 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score2 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score3 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score4 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score5 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score6 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score7 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score8 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score9 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score10 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score11 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score12 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score13 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score14 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

    <?php
if ($score15 !== 0):
?>
     popup.style.display = 'block';
    <?php
endif;
?>

  };


  function closePopup() {
    var popup = document.querySelector('.popup');
    popup.style.display = 'none';
  }
</script>

</head>
<body>
  <div class="background-container">
    <div class="container">
    <div class="banner">
        <img src="assets/quiz.jpg" alt="Quiz Banner">
    </div>

      <h1>QUIZMANIA</h1>
      <div class="profile-picture">
        <img src="assets/profile.png" alt="Profile Picture" style="width: 100px;">
      </div>

      <div class="progress-bar">
        <p><a class="pbtext">Total Score :</a></p><progress id="score-progress" max="150" value="<?php
echo $totalScore;
?>"><?php
echo $totalScore;
?>/150</progress>
      </div>    
      
      <h1>Welcome, <?php
echo $username;
?>!</h1>
      <p>_______________________</p>
      <h2>Select a Quiz</h2>
      <table>
  <tr>
    <th>Quiz</th>
    <th>Score</th>
  </tr>
  <tr>
    <td><a href="quiz.php" class="quiz-number <?php
echo ($score1 !== 0) ? 'completed-quiz' : '';
?>">Quiz 1</a></td>
    <td><?php
echo $score1;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz2.php" class="quiz-number <?php
echo ($score2 !== 0) ? 'completed-quiz' : '';
?>">Quiz 2</a></td>
    <td><?php
echo $score2;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz3.php" class="quiz-number <?php
echo ($score3 !== 0) ? 'completed-quiz' : '';
?>">Quiz 3</a></td>
    <td><?php
echo $score3;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz4.php" class="quiz-number <?php
echo ($score4 !== 0) ? 'completed-quiz' : '';
?>">Quiz 4</a></td>
    <td><?php
echo $score4;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz5.php" class="quiz-number <?php
echo ($score5 !== 0) ? 'completed-quiz' : '';
?>">Quiz 5</a></td>
    <td><?php
echo $score5;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz6.php" class="quiz-number <?php
echo ($score6 !== 0) ? 'completed-quiz' : '';
?>">Quiz 6</a></td>
    <td><?php
echo $score6;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz7.php" class="quiz-number <?php
echo ($score7 !== 0) ? 'completed-quiz' : '';
?>">Quiz 7</a></td>
    <td><?php
echo $score7;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz8.php" class="quiz-number <?php
echo ($score8 !== 0) ? 'completed-quiz' : '';
?>">Quiz 8</a></td>
    <td><?php
echo $score8;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz9.php" class="quiz-number <?php
echo ($score9 !== 0) ? 'completed-quiz' : '';
?>">Quiz 9</a></td>
    <td><?php
echo $score9;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz10.php" class="quiz-number <?php
echo ($score10 !== 0) ? 'completed-quiz' : '';
?>">Quiz 10</a></td>
    <td><?php
echo $score10;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz11.php" class="quiz-number <?php
echo ($score11 !== 0) ? 'completed-quiz' : '';
?>">Quiz 11</a></td>
    <td><?php
echo $score11;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz12.php" class="quiz-number <?php
echo ($score12 !== 0) ? 'completed-quiz' : '';
?>">Quiz 12</a></td>
    <td><?php
echo $score12;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz13.php" class="quiz-number <?php
echo ($score13 !== 0) ? 'completed-quiz' : '';
?>">Quiz 13</a></td>
    <td><?php
echo $score13;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz14.php" class="quiz-number <?php
echo ($score14 !== 0) ? 'completed-quiz' : '';
?>">Quiz 14</a></td>
    <td><?php
echo $score14;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz15.php" class="quiz-number <?php
echo ($score15 !== 0) ? 'completed-quiz' : '';
?>">Quiz 15</a></td>
    <td><?php
echo $score15;
?>/10</td>
  </tr>
</table>
      <p>_______________________</p>
    <form action="" method="post">
  <input type="submit" name="logout" value="Logout" onclick="return confirmLogout()">
</form>

<script>
  function confirmLogout() {
    return confirm("Are you sure you want to logout?");
  }
</script>

  
  </div>
<?php
if ($score1 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score1;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score2 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score2;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score3 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score3;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score4 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score4;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score5 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score5;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score6 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score6;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score7 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score7;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score8 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score8;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score9 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score9;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score10 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score10;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score11 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score11;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score12 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score12;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score13 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score13;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score14 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score14;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

<?php
if ($score15 !== 0):
?>
 <div class="popup">
    <div class="popup-content">
      <h2>Your Score</h2>
      <p><?php
    echo $score15;
?> / 10</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>
<?php
endif;
?>

  
</body>
</html>

