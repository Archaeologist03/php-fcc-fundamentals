<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <?php

  // // variables
  // $characterName = 'John';
  // $characterAge = 35;
  // echo "<h1>Hello $characterName </h1>";
  // echo '<hr>';
  // echo "<p>my age: $characterAge </p>";


  // // data types
  // $phrase = "Some text..";
  // $age = 30;
  // $gpa = 3.42;
  // $isMale = false;

  // // working with strings
  // $phrase = "Some good stuff...";
  // echo strtolower($phrase);
  // echo strtoupper($phrase);
  // echo strlen($phrase);
  // $phrase[0] = "X";
  // echo $phrase[0];
  // echo str_replace("good", "bad", $phrase);
  // echo $phrase;
  // echo substr($phrase, 10, 5);


  // // working with numbers
  // echo -40.543;
  // echo 5.5 + 9;
  // echo 10 % 3;

  // $num = 10;
  // $num++;
  // $num += 25;
  // echo $num;

  // echo abs(-100);
  // echo pow(2, 4);
  // echo sqrt(144);
  // echo max(2, 10);
  // echo round(3.2);
  // echo ceil(3.3);
  // echo floor(3.9);

  ?>



  <!-- getting user input
  <form action="site.php" method="get">
    Name: <input type="text" name="username">
    <br>
    Age: <input type="text" name="age">
    <input type="submit">
  </form>
  <br>

  Your name is: <?php echo $_GET["username"] ?>
  <br>
  Your age is: <?php echo $_GET["age"] ?> -->



  <!-- Simple calculator
  <form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form>

  Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?> -->

  <!-- MadLib game
  <form action="site.php" method="get">
    <input type="text" name="color">
    <br>
    <input type="text" name="pluralNoun">
    <br>
    <input type="text" name="celebrity">
    <input type="submit">
  </form>
  <br><br>

  <?php
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $celebrity = $_GET["celebrity"];

  echo "Roses are $color <br>";
  echo "$pluralNoun are blue <br>";
  echo "I love $celebrity <br>";
  ?> -->


  <!-- URL Parameters  ---  POST method
  <form action="site.php" method="post">
    Password: <input type="password" name="password">
    <input type="submit">
  </form>

  <?php
  echo $_POST["password"];
  ?> -->

  <!-- Arrays
<?php
$friends = array("Kevin", "Karen", "Oscar", "Jim");
echo $friends[0];
$friends[1] = 400;
echo $friends[1];

echo count($friends);

?>
-->

  <!-- Checkboxes -->
  <!-- <form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    pears: <input type="checkbox" name="fruits[]" value="pears"><br>

    <input type="submit">
  </form>


  <?php
  $fruits = $_POST["fruits"];
  echo $fruits[0];


  ?> -->


  <!-- Asociative array -->
   <!-- <form action="site.php" method="post">
    <input type="text" name="student" >
    <input type="submit">
  </form>


  
  <?php
  $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
  echo $grades[$_POST["student"]];

  ?> -->


  <!-- Functions -->




</body>

</html>


<!-- http://localhost:4000/programming/code/php-tut/site.php -->