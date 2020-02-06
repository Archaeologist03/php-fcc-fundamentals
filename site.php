<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta title="viewport" content="width=device-width, initial-scale=1.0">
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
	<!-- 
  <?php
	function sayHi($name)
	{
		echo "Hello $name";
	}
	sayHi('Ilija');

	echo "<br />";

	function cube($num)
	{
		return $num * $num * $num;
	}

	$cubeResult = cube(4);
	echo $cubeResult;

	?> -->


	<!--  IF/Else Branching -->

	<!-- <?php
				$isMale = true;
				$isTall = true;

				if ($isMale && $isTall) {
					echo "You are a tall male";
				} elseif ($isMale && !$isTall) {
					echo "You are not tall male";
				} else {
					echo "You are not male";
				}
				?> -->

	<!-- 
  <?php
	function getMax($num1, $num2, $num3)
	{
		if ($num1 >= $num2 && $num1 >= $num3) {
			return $num1;
		} elseif ($num2 >= $num1 && $num2 >= $num3) {
			return $num2;
		} else {
			return $num3;
		}
	}

	echo getMax(3, 6, 9);
	?> -->


	<!--  Better calculator  -->

	<!-- <form action="site.php" method="post">
    First Num: <br> <input type='number' step="0.1" name='num1' /><br>
    Operation: <br> <input type='text' name='op' /><br>
    Second Num: <br> <input type='number' step="0.1" name='num2' /><br>
    <input type="submit">
  </form>

  <?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$op = $_POST["op"];

	if ($op == "+") {
		echo $num1 + $num2;
	} elseif ($op == "-") {
		echo $num1 - $num2;
	} elseif ($op == '/') {
		echo $num1 / $num2;
	} elseif ($op == '*') {
		echo $num1 * $num2;
	} else {
		echo "Invalid operator";
	}
	?> -->

	<!--  Switch statement -->

	<!-- <?php
				$grade = 'A';

				switch ($grade) {
					case "A":
						echo "That's amazing!";
						break;
					case "B":
						echo "That's pretty good.";
						break;
					default:
						echo 'Not greatest, but okay.';
						break;
				}
				?> -->


	<!--  While loop -->

	<!--   
  <?php
	$index = 1;

	while ($index <= 5) {
		echo "$index <br>";
		$index++;
	}
	?> -->

	<!--  FOR loop -->

	<!-- <?php
				$luckyNumbers = array(4, 55, 11, 33, 23, 11);

				for ($i = 0; $i < count($luckyNumbers); $i++) {
					echo "$luckyNumbers[$i] <br>";
				}
				?> -->



	<!-- Include -->

	<!-- <?php include "header.html" ?>
  <p>Hello world</p>
  <?php include "footer.html" ?> -->

	<!-- <?php
				$title = 'My first post';
				$author = 'Ilija';
				$wordCount = 333;

				include "article-header.php"

				?> -->

	<!-- <?php include "useful-tools.php";
				sayName('X');
				echo $feetInMile;
				?> -->



	<!-- Classes and Objects ... Constructors -->

	<!-- <?php
				class Book
				{
					var $title;
					var $author;
					var $pages;

					function __construct($aTitle, $aAuthor, $aPages)
					{
						$this->title = $aTitle;
						$this->author = $aAuthor;
						$this->pages = $aPages;
					}
				}

				$book1 = new Book('Harry Potter', 'JK Rowling', 255);
				$book1->pages = 400;

				$book2 = new Book('Lord of the Rings', 'Tolkien', 700);


				echo $book1->title;
				?> -->


	<!-- <?php
				class Student
				{
					var $name;
					var $major;
					var $gpa;

					function __construct($name, $major, $gpa)
					{
						$this->title = $name;
						$this->author = $major;
						$this->pages = $gpa;
					}

					function hasHonors()
					{
						if ($this->gpa >= 3.5) {
							return "true";
						}
						return "false";
					}
				}

				$student1 = new Student('Jim', 'Business', 2.8);
				$student2 = new Student('Pam', 'Art', 3.6);


				echo $student1->hasHonors();
				?> -->


	<!-- Getters and Setters -->


	<!-- <?php
				class Movie
				{
					public $title;
					private $rating;

					function __construct($title, $rating)
					{
						$this->title = $title;
						$this->setRating($rating);
					}

					function getRating()
					{
						return $this->rating;
					}

					function setRating($rating)
					{
						if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
							$this->rating = $rating;
						} else {
							$this->rating = "NR";
						}
					}
				}

				$avangers = new Movie("Avangers", "PG-13");

				echo $avangers->getRating();
				$avangers->setRating('Dog');
				echo $avangers->getRating();
				$avangers->setRating('PG');
				echo $avangers->getRating();
				?> -->


	<!-- Inheritance -->
	<?php
	class Chef
	{
		function makeChicken()
		{
			echo "The chef makes chicken <br>";
		}
		function makeSalad()
		{
			echo "The chef makes salad <br>";
		}
		function makeSpecialDish()
		{
			echo "The chef makes bbq ribs <br>";
		}
	}

	class ItalianChef extends Chef
	{
		function makePasta()
		{
			echo "The chef make pasta..";
		}
		function makeSpecialDish()
		{
			echo "The chef makes chicken parm";
		}
	}

	$chef = new Chef();
	$chef->makeChicken();

	$italianChef = new ItalianChef();
	$italianChef->makeChicken();
	$italianChef->makePasta();

	echo "<br>";
	echo "<br>";

	$chef->makeSpecialDish();
	$italianChef->makeSpecialDish();




	?>

</body>

</html>


<!-- http://localhost:4000/programming/code/php-tut/site.php -->