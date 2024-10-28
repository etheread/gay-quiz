<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gay quiz</title>
</head>
<body>
    <header>
        <h1>
            GAY QUIZ
        </h1>
    </header>
    <br>
    <hr>
    <br>
    <form action="index.php" method="post">
        <label>
            Write your gender(male of female):
        </label>
        <br>
        <input type="text" name="gender">
        <br>
        <label>
            who you lime more girls or boys?
        </label>
        <br>
        <input type="text" name="pref">
        <button>
            submit
        </button>
    </form>
</body>
</html>
<?php
    $gen = $_POST["gender"];
    $pref = $_POST["pref"];

    if ($gen == "male" && $pref =="girls"){
        echo "you are straight";
    }
    elseif($gen == "female" && $pref =="boys"){
        echo "you are straight";
    }
    elseif($gen == "male" && $pref == "boys"){
        echo "you are fucking gay";
    }
    elseif($gen == "female" && $pref == "girls"){
        echo "you are fucking gay";
    }
?>