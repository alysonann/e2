<!doctype html>
<html lang='en'>

<head>
    <title>Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <script src="https://kit.fontawesome.com/9779d43f9a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Paytone+One&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Project 2: Rock, Paper, Scissors</h1>
    <p>Play against the computer!</p>
    <p>for DGMD E-2 by Alyson Lynch </p>


    <h2>Instructions <i class="fas fa-hand-rock"></i>
        <i class="fas fa-hand-paper"></i>
        <i class="fas fa-hand-scissors"></i>
    </h2>
    <ul>
        <li>You pick your "throw": rock, paper, or scissors.</li>
        <li>The computer will choose a "throw" at the same time, and we'll see who wins!</li>
        <li>If you throw the same thing, it's a tie!</li>
        <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
    </ul>
    <h2>Play</h2>
    <form method="GET" action="process.php">
        <input type="radio" name="player" value="rock" id="rock" checked><label for="rock">rock</label>
        <input type="radio" name="player" value="paper" id="paper"><label for="paper">paper</label>
        <input type="radio" name="player" value="scissors" id="scissors"><label for="scissors">scissors</label>
        <br>
        <button class="myButton" type="submit">THROW</button>
    </form>
    <?php if ($haveResults) {?>
    <h2>Results</h2>
    <ul class="results">
        <li>You threw <?php echo $player; ?>.
        </li>
        <li>The computer threw <?php echo $computer; ?>.
        </li>
        <li><?php echo $result; ?>
        </li>
    </ul>
    <?php }?>
</body>

</html>