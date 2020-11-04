<!DOCTYPE html>

<html lang='en'>

<head>
    <title></title>
    <meta charset="utf-8">
    <style>
        .correct {
            color: green;
        }

        .incorrect {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Mystery Word Results</h1>
    <?php if ($haveAnswer == false) {?>
    You did not enter an answer
    <?php } else { ?>

    <?php if ($correct) { ?>
    <div class='correct'>You got it correct!</div>

    <?php } else {?>
    <div class='incorrect'>Sorry, that is not correct</div>
    <?php } ?>
    <?php } ?>

    <a href="index.php">Play Again</a>-->
</body>

</html>