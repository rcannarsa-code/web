<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- fourth lesson 
    <form action="index.php" method="get">
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username" required><br>

        <label>password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="login"><br>
    </form>

    <form action="index.php" method="post">
        <label>quantity: </label><br> 
        <input type="text" name="quantity"><br>
        <input type="submit" value="place order">
    </form><br>
    -->

    <!-- fifth lesson 
    <form action="index.php" method="post">
        <label>x</label>
        <input type="text" name="x"><br>
        <label>y</label>
        <input type="text" name="y"><br>
        <label>z</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form><br>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="caulculate"><br>
    </form><br>
    -->

    <!-- ninth lesson
    <form action="index.php" method="post">
        <label>Enter a number to count to: <br></label>
        <label>Enter a number to count down from: <br></label>
        <input type="text" name="counter"><br>
        <input type="submit" value="start"><br>
    </form>
    -->

    <!-- tenth lesson
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
    -->

    <!-- twelfth lesson

    <form action="index.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country"><br>
        <input type="submit" name="">
    </form>
    -->
    
    <!-- thirteenth lesson
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
    -->

    <!-- fourtheenth lesson
    <form action="index.php" method="post">
        visa: 
        <input type="radio" value="visa" name="credit_card">
        mastercard: 
        <input type="radio" value="mastercard" name="credit_card">
        amex: 
        <input type="radio" value="amex" name="credit_card">
        <input type="submit" name="confirm" value="confirm payment">
    </form>
    -->

    <!-- fifteen lesson
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="burger" value="Burger">
        Burger <br>
        <input type="checkbox" name="cinese" value="Cinese">
        Cinese <br>
        <input type="checkbox" name="mexican" value="Mexican">
        Mexican <br>
        <input type="submit" name="submit">
    </form>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Burger">
        Burger <br>
        <input type="checkbox" name="foods[]" value="Cinese">
        Cinese <br>
        <input type="checkbox" name="foods[]" value="Mexican">
        Mexican <br>
        <input type="submit" name="submit">
    </form>
    -->




</body>
</html>

<?php
    // first lesson (comments ,echo & inclusion of html)
    /* 
    multiline comment

    // inline comment
    
    echo "This is the first line";
    echo "<br>";
    echo "This is the second line";
     */



    // second lesson (variables: string // integer // float // boolean ...)
    /* 
    $name = "Raffaele";
    $gender = "male";
    $email = "rc12345@gmail.com";
    
    $age = 23;
    $users = 3;
    $quantity = 4;

    $price = 3.5;

    $online = true;

    $total = null;

    echo "Hi {$name}<br>";
    echo "You're a {$age} {$gender}<br>";
    echo "The price of the item is \${$price}<br>";
    echo "online status: {$online}<br>";
    $total = $price * $quantity;
    echo "The total of you'r order is {$total}";
    */

    

    // third lesson (arithmetic operators and increment // decrement)
    /* 
    $x = 5;
    $y = 4;
    $z = null;

    $z = $x + $y;
    $z = $x - $y;
    $z = $x * $y;
    $z = $x / $y;
    $z = $x % $y;
    $z = $x ** $y;
    echo "{$z} <br>";

    $count = 1;
    $count++;
    $count--;
    $count += 2;
    $count -= 2;
    echo "{$count} <br>";
    */



    // fourth lesson (super global variable: $_GET // $_POST used to collect data from html)
    /* 
    $_GET -->   data is appended to the url
                NOT SECURE
                char limit
                Bookmark is possible with values
                GET requests can be cached
                Better for a search page

    $_POST-->   data is packeged inside the body of the HTTP request
                MORE SECURE
                no data limit
                Bookmark not possible
                GET requests are not cached
                Better for sensible credentials
    
    echo $_GET["username"] . "<br>";    
    echo "{$_GET["password"]} <br>" ;
    
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;

    echo "The order is for {$quantity} {$item}s and the total is \${$total}";
    */



    // fifth lesson (math related functions)
    /* 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;
    $total = abs($x);
    $total = round($x);
    $total = floor($x);
    $total = ceil($x);
    $total = sqrt($x);
    $total = pow($x, $y);
    $total = max($x, $y, $z);
    $total = min($x, $y, $z);
    $total = pi();
    $total = rand(1, 6);
    
    $radius = $_POST["radius"];
    $circumferance = null;
    $area = null;
    $volume = null;

    $circumferance = 2 * pi() * $radius;
    $circumferance = round($circumferance, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = 4 / 3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    */



    // sixth lesson (if statements)
    /* 
    $age = 0;
    if ($age >= 18)
    {
        echo "Now entering the site";
    }
    elseif ($age <= 0)
    {
        echo "Invalid age value";
    }
    else
    {
        echo "Age requirement not met";
    }
    $hours = 0;
    $rate = 15;
    $weekly_pay = null;
    
    if ($hours <= 0)
        $weekly_pay = 0;
        elseif ($hours <= 40)
            $weekly_pay = $hours * $rate;
        else
            $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    echo "{$weekly_pay}<br>";
    */



    //seventh lesson (logical operators && // || // !)
    /*
    $temp = 25;
    $cloudy = true;
    if ($temp >= 18 && $temp <= 25)
        echo "Good wheater<br>";
    if(!$cloudy)
        echo "It's sunny<br>";
    else
        echo "The sky it's cloudy<br>";
    $age = 23;
    $citizen = true;
    
    if ($age >= 18 && $citizen)
    echo "You can vote<br>";
    else
    echo"You can't vote<br>";
    if (!$age >= 18 || !$citizen)
        echo "You can't vote<br>";
    else
        echo "You can vote<br>";
    
    $child = false;
    $senior = false;
    $ticket = null;
    if ($child || $senior)
        $ticket = 10;
    else
        $ticket = 15;
    echo "The price for the ticket is \${$ticket}";
    */



    //eigth lesson (switch)
    /*
    $grade = "A";
    switch ($grade)
    {
        case "A":
            echo "Your mark is excellent<br>";
            break;
        case "B":
            echo "Your mark is very good<br>";
            break;
        case "C":
            echo "Your mark is good<br>";
            break;
        case "D":
            echo "Your mark is meh<br>";
            break;
        case "F":
            echo "Your mark is not sufficient<br>";
            break;
        default:
            echo "Invalid value for a grade: {$grade}<br>";
            break;
    }
    
    $date = date("l");
    switch ($date) {
        case "Monday":
            echo"first day of the week";
            break;
        case "Tuesday":
            echo"second day of the week";
            break;
        case "Wednesday":
            echo"third day of the week";
            break;
        case "Thursday":
            echo"fourth day of the week";
            break;
        case "Friday":
            echo"fifth day of the week";
            break;
        case "Saturday":
            echo"sixth day of the week";
            break;
        case "Sunday":
            echo"seventh day of the week";
            break;
        default:
            echo"{$date} is not a day";
            break;
    }
    */



    //ninth lesson (for loops)
    /* 
    for ($i=0; $i < 7; $i++) { 
        echo"{$i}<br>";
    }

    $counter = $_POST["counter"];
    for ($i = $counter; $i > 0; $i--) { 
        echo"{$i}<br>";
    }
    */



    //tenth lesson (while loops)
    /* 
    $counter = 0;
    while ($counter <= 10) {
        echo"{$counter}<br>";
        $counter++;
    }
    
    $seconds = 0;
    $running = true;

    while ($running)
    {
        if(isset($_POST["stop"]))
            $running = false;
        else
        {
            sleep(1);
            $seconds++;
            echo"{$seconds}<br>";
        }
    }
    */



    /* eleventh lesson (arrays)
    $foods = array("apple", "orange", "banana", "coconut");
    echo"{$foods[0]}<br>";
    echo"{$foods[1]}<br>";
    echo"{$foods[2]}<br>";
    echo"{$foods[3]}<br>";

    $foods[0] = "pineapple";
    array_push($foods, "apple", "kiwi");
    array_pop($foods);
    array_shift($foods);
    $sdoof = array_reverse($foods);
    echo count($foods);
    foreach($foods as $food)
        echo"{$food}<br>"
    */



    /* twelfth lesson (associative arrays, key=>value pairs)
    $capitals = array("USA"=>"Miami",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");
    echo $capitals["USA"];
    $capitals["USA"] = "Washington D.C.";
    $capitals["China"] = "Beijing";
    array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $flipped_capitals = array_flip($capitals);
    $reversed_capitals = array_reverse($capitals);
    echo count($capitals);
    foreach($capitals as $key => $value)
    {
        echo"{$key} {$value}<br>";
    }
    $capital = $_POST["country"];
    $capital = $capitals[$_POST["country"]];
    echo "{$capital}";
    */



    /* thirteenth lesson  (isset->true if declared && not null 
                        // empty->true if not declared || false || null)
    $user = "Raffa";
    echo isset($user);
    echo empty($user);
    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value}<br>";
    }
    if (isset($_POST["login"]))
    {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username))
        echo "Missing username";
    elseif(empty($password))
        echo "Missing password";
    else
        echo "Hello {$username}";
    }
    */



    /* fourtheenth lesson (radio buttons)
    if (isset($_POST["confirm"]))
    {
        if(isset($_POST["credit_card"]))
        {
            $credit_card = $_POST["credit_card"];
            echo $credit_card;
        }
        else
        {
            echo "Please select a method of payment first";
        }
    }
    if (isset($_POST["confirm"]))
    {
        if(isset($_POST["credit_card"]))
        {
            $credit_card = $_POST["credit_card"];
        }
        if($credit_card == "visa")
        {
            echo "You selected visa";
        }
        elseif($credit_card == "mastercard")
        {
            echo "You selected mastercard";
        }
        elseif($credit_card == "amex")
        {
            echo "You selected amex";
        }
        else
        {
            echo "Please select a method of payment";
        }
    }
    switch ($credit_card) {
        case 'visa':
            echo "You selected visa";
            break;
        case 'mastercard':
            echo "You selected mastercard";
            break;
        case 'amex':
            echo "You selected amex";
            break;
        default:
            echo "None selected";
            break;
    }
    */



    /* fifteenth lesson (checkbox)
    if (isset($_POST["submit"]))
    {
        if (isset($_POST["pizza"]))
        {
            echo "you like pizzas<br>";
        }
        if (isset($_POST["burger"]))
        {
            echo "you like burgers<br>";
        }
        if (isset($_POST["cinese"]))
        {
            echo "you like cinese<br>";
        }
        if (isset($_POST["mexican"]))
        {
            echo "you like mexican<br>";
        }
        if (empty($_POST["pizza"]))
        {
            echo "you don't like pizzas<br>";
        }
        if (empty($_POST["burger"]))
        {
            echo "you like burgers<br>";
        }
        if (empty($_POST["cinese"]))
        {
            echo "you don't like cinese<br>";
        }
        if (empty($_POST["mexican"]))
        {
            echo "you don't like mexican<br>";
        }
    }
    if(isset($_POST["submit"]))
    {
        $foods = $_POST["foods"];
    }
    foreach($foods as $food)
    {
        echo "{$food}<br>";
    }
    */



    /* sixteenth lesson
    */
    function happy_bday()
    {
        
    }

?>

