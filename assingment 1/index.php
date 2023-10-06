<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pizza Order Form</title>
</head>

<body>
<header>
    Pizza Palace
</header>

<h2>Pizza Order Form</h2>
<form action="order.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" required></textarea><br><br>

    <label for="pizzaType">Pizza Type:</label><br>
    <select id="pizzaType" name="pizzaType">
        <option value="margherita">Margherita</option>
        <option value="pepperoni">Pepperoni</option>
        <option value="bbq chicken">BBQ Chicken</option>
        <option value="hawaiian">Hawaiian</option>
    </select><br><br>

    <label for="pizzaSize">Pizza Size:</label><br>
    <select id="pizzaSize" name="pizzaSize">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select><br><br>

    <label for="topping">Additional Toppings:</label><br>
    <input type="checkbox" id="pepperoni" name="topping[]" value="Pepperoni">
    <label for="pepperoni">Pepperoni</label><br>
    <input type="checkbox" id="mushrooms" name="topping[]" value="Mushrooms">
    <label for="mushrooms">Mushrooms</label><br>

    <label for="comments">Comments:</label><br>
    <textarea id="comments" name="comments" rows="4"></textarea><br><br>

    <input type="submit" value="Order">
</form>

</body>
</html>
