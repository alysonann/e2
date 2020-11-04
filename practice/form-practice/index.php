<form action='signup.php'>


    <div>
        <h1>Cake Order Form</h1>
        Choose your cake size:
        <input type='radio' name='size' id='small'>
        <label for='small'>Small (6")</label>


        <input type='radio' name='size' id='medium' checked>
        <label for='medium'>Medium (8")</label>

        <input type='radio' name='size' id='large'>
        <label for='large'>Large (12")</label>
    </div>


    <div>You can have 2 lines of writing on your cake; what would you like them to say?
        <label for='line1'>Line 1</label>
        <input type='text' id='line1' value="Happy Birthday">
        <label for='line2'>Line 2</label>
        <input type='text' id='line2' value="Jamall">
    </div>
    <div>Choose your cake flavor:

        <select id='flavor'>
            <option>Choose one...</option>
            <option selected>Vanilla</option>
            <option>Chocolate</option>
            <option>Carrot</option>
        </select>
    </div>
    <div>

        Choose your icing:

        <select id='icing'>
            <option>Choose one...</option>
            <option>Vanilla</option>
            <option selected>Chocolate</option>
            <option>Cream cheese</option>
        </select>
    </div>

    <div>Would you like to add any of the following extras to your order?
        <input type='checkbox' id='box'>
        <label for='box'>Insulated box</label>
        <input type='checkbox' id='candles'>
        <label for='candles'>Candles</label>
        <input type='checkbox' id='glass'>
        <label for='glass'>Glass serving platter</label>
        <input type='checkbox' id='serving'>
        <label for='serviing'>Compostable serving plates and forks</label>
    </div>
    <div>
        <label for='instructions'>Special instructions</label>
        <textarea id='instructions'>Extra icing please!</textarea>
    </div>

    <button type='submit'>Submit your order</button>
    <?php
    $foo = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd'=>4
    ];
    extract($foo);
    var_dump($a);
    var_dump($b);
    var_dump($c);
    ?>
</form>