<?php
$host = "172.31.22.43";
$username = "Arjun200551705";
$password = "9T8bgMMQsI";
$dbname = "Arjun200551705";

$connection = new mysqli($host, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $pizzaType = $_POST["pizzaType"];
    $pizzaSize = $_POST["pizzaSize"];
    $toppings = isset($_POST["topping"]) ? implode(", ", $_POST["topping"]) : '';
    $comments = $_POST["comments"];

    $sql = "INSERT INTO orders (name, email, address, pizza_type, pizza_size, toppings, comments) 
            VALUES ('$name', '$email', '$address', '$pizzaType', '$pizzaSize', '$toppings', '$comments')";

    if ($connection->query($sql) === TRUE) {
        echo "Order received!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Address: $address<br>";
        echo "Pizza Type: $pizzaType<br>";
        echo "Pizza Size: $pizzaSize<br>";
        echo "Toppings: $toppings<br>";
        echo "Comments: $comments";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
$connection->close();
?>
