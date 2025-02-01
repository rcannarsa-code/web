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

    <!-- eigtheenth lesson
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
    -->

    <!-- 22nd lesson
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username: <br>
        <input type="text" name="username">
        <input type="submit">
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
    function happy_bday(string $name, int $age)
    {
        echo "Happy Birthday dear {$name}<br>";
        echo "Happy Birthday to you<br>";
        echo "Happy Birthday dear {$name}<br>";
        echo "You are {$age} years old! <br>";
    }
    happy_bday("Raffaele", 23);
    
    function is_even(int $number)
    {
        return $number % 2;
    }
    echo is_even(11);
    
    function hypotenuse(int $a, int $b)
    {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo hypotenuse(3, 4);
    */



    /* seventeenth lesson (string functions)
    $username = "Raffaele Cannarsa";
    $phone = "123-456-7890";

    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username);
    $username = str_pad($username, 20, "-");
    $phone = str_replace("-", " ", $phone);
    $username = strrev($username);
    $username = str_shuffle($username);
    $equals = strcmp($username, "Raffo");
    $count = strlen($username);
    $index = strpos($username, " ");
    $first_name = substr($username, 0, 3);
    $last_name = substr($username, 5);
    $full_name = explode(" ", $username);
    $name = implode(" ", $full_name);
    echo "{$username} <br>";
    */

    

    /* eigtheenth lesson (sanitize/validate input)
    if(isset($_POST["login"]))
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (empty($age) || empty($email))
        echo "invalid input<br>";
        else
        echo "Hi {$username}, you are {$age} years old, your email is {$email}<br>";
    }
    */



    /* nineteenth lesson (include, created header, footer, about and locations)
    include("header.html");
    */



    /* twentieth lesson (cookies: information about a user stored in the user's web-browser)
    setcookie("fav_food", "pizza", time() - 0, "/");
    setcookie("fav_drink", "soda", time() + 86400 * 3, "/");
    setcookie("fav_dessert", "tiramisu", time() + 86400 * 4, "/");
    
    foreach($_COOKIE as $key => $value)
    {
        echo "{$key} = {$value}<br>";
    }
    if(isset($_COOKIE["fav_drink"]))
        echo "buy some {$_COOKIE["fav_drink"]}";
        else
        echo "no favourite drink found";
    */



    /* 21st lesson (session: Super Global Variable used to store information on a user to be used across multiple pages)
                    created home.php
    session_start();
    */



    /* 22nd lesson (server: SGB that contains headers, paths and script locations)
    foreach($_SERVER as $key => $value)
    {
        echo "{$key} = {$value}<br>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "Hi<br>";
    }
    */



    /* 23rd lesson (hashing)
    $password = "raffi123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    if (password_verify("partal123", $hash))
    {
        echo "Logging in<br>";
    }
    else
    {
        echo "Incorrect password<br>";
    }
    echo $hash;
    */



    /* 24th lesson (MySQL created database.php, created database with myadmin)
    include("database.php");
    */



    /* 25th lesson (inserting data into a MySQL table with php)
    include("database.php");
    
    $username = "utente3";
    $password = "password3";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    //$sql = "INSERT INTO users (user, password) VALUES ('user1', 'password1')";
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
    
    try{
        mysqli_query($conn, $sql);
        echo "created user";
    }
    catch(mysqli_sql_exception)
    {
        echo "Could not create user";
    }
    mysqli_close($conn);
    */



    /* 26th lesson (retrieve data from a MySQL database using php)
    include("database.php");
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        };
    }
    else
    {
        echo "user not found";
    }
    mysqli_close($conn);
    */

    /* 28th lesson (registration form using php)
    include("database.php");
    */




    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- nineteenth lesson
    
    This is the Home page <br>
    Here are all the general informations <br>
    -->



    <!-- 21st lesson
    This is the login page <br>
    <a href="home.php">Home Page</a> <br>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
    -->



    <!-- 24th lesson
    Hi <br>
    -->



    <!-- 27th lesson
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to the Webpage</h2>
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register"><br>
    </form>
    -->
    
</body>
</html> 

<?php

    /* nineteenth lesson
    
    include("footer.html");
    */



    /* 21st lesson 
    $_SESSION["username"] = "RaffiC";
    $_SESSION["password"] = "R12345";
    if (isset($_POST["login"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"]))
        {
            $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
        
            header("Location: home.php");
        }
        else
        echo "Please insert the required data<br>";
    }
    */



    /* 28th lesson
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if (empty($username))
            echo "Please enter a username";
            elseif(empty($password))
            echo "Please enter a password";
            else
            {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
                try
                {
                    mysqli_query($conn, $sql);
                    echo "You are now registered";
                }
                catch(mysqli_sql_exception)
                {
                    echo "username already taken";
                }
            }
        }
        mysqli_close($conn);
    */

?>

