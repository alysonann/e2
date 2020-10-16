<!doctype html>
<html lang="en">

<head>
    <title>Rock, Paper, Scissors</title>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/9779d43f9a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Paytone+One&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Project 2: Rock, Paper, Scissors</h1>
    <div>Play against the computer! (DGMD E-2 by Alyson Lynch) </div>


    <h2>Instructions
        <i class="fas fa-hand-rock"></i>
        <i class="fas fa-hand-paper"></i>
        <i class="fas fa-hand-scissors"></i>
    </h2>
    <ul>
        <li>Pick your "throw": rock, paper, or scissors. Also, enter your name if you wish!</li>
        <li>The computer will choose a "throw" at the same time, and we'll see who wins!</li>
        <li>If you throw the same thing, it's a tie!</li>
        <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
    </ul>
    <h2>Play</h2>
    <form method="GET" action="process.php">
        <div class="inputs"><label for="playerName">Player name:</label><input type="text" name="playerName"
                id="playerName" value="Player"></div>
        <div class="inputs"> <input type="radio" name="player" value="rock" id="rock" required><label for="rock"><i
                    class="fas fa-hand-rock"></i>rock</label>
        </div>
        <div class="inputs"><input type="radio" name="player" value="paper" id="paper" required><label for="paper"><i
                    class="fas fa-hand-paper"></i>paper</label></div>
        <div class="inputs"><input type="radio" name="player" value="scissors" id="scissors" required><label
                for="scissors"><i class="fas fa-hand-scissors"></i>scissors</label></div>
        <button class="myButton" type="submit">THROW</button>
    </form>
    <!--Only show results if game has been played!-->
    <?php if ($haveResults) {?>
    <div class="results">
        <h2>Results</h2>
        <ul>
            <li><?php echo $playerName; ?> threw <?php echo $player; ?>.</li>
            <li>The computer threw <?php echo $computer; ?>.</li>
            <!--Results are communicated using booleans. Can customize results messages here.-->
            <?php if ($isTie) {?>
            <li>It's a tie!</li>
            <?php } elseif ($playerWins) {?>
            <li><?php echo $playerName; ?> wins!</li>
            <?php } elseif (!$playerWins) {?>
            <li>The computer wins!</li><?php } ?>
        </ul>
    </div>
    <?php } else { ?>
    <!-- This will be displayed before the player plays the game, 
    and each time the page is reloaded.-->
    <p id="instructions">Make a selection and click THROW!</p>
    <?php } ?>
</body>

</html>