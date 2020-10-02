<!doctype html>
<html lang='en'>

<head>
    <title>Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9779d43f9a.js" crossorigin="anonymous"></script>
    <link href="p1.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Project 1: Rock, Paper, Scissors Game Simulator!</h1>
    <p>for DGMD E-2 by Alyson Lynch </p>
    <i class="fas fa-hand-rock"></i>
    <i class="fas fa-hand-paper"></i>
    <i class="fas fa-hand-scissors"></i>
    <h2>Mechanics</h2>

    <ul>
        <li>Player A and Player B randomly “throw” either rock, paper, or scissors.
        <li>A tie is declared if both players "throw" the same move.
        <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
    </ul>
    <h2>Results</h2>
    <ul class="results">
        <li>Player A threw <?php echo $playerA; ?>.
        </li>
        <li>Player B threw <?php echo $playerB; ?>.
        </li>
        <li><?php echo $result; ?>
        </li>
    </ul>
</body>

</html>