<?php
// Type Juggling
$value = '10';
$add = $value + 5;

// Variables & Arrays
$name = 'Mark';
$favorites = ['Chocolate', 'Toffee', 'Fudge'];

$nutrition = [
    'fat' => 15,
    'sugar' => 67,
    'salt' => 5.3,
];

// Expressions & Operators
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal * 0.20);
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <h2>Type Juggling</h2>
    <p>Value: $<?= $value ?></p>
    <p>Total: $<?= $add ?></p>

    <h2>Variables & Arrays</h2>
    <h3>Welcome <?= $name ?></h3>
    <p>Your favorite type of candy is <?= $favorites[1] ?></p>

    <h2>Chocolate Nutrition Facts (per 100g)</h2>
    <p>Fat: <?= $nutrition['fat'] ?>%</p>
    <p>Sugar: <?= $nutrition['sugar'] ?>%</p>
    <p>Salt: <?= $nutrition['salt'] ?>%</p>

    <h2>Expressions & Operators</h2>
    <h3>Shopping Cart</h3>
    <p>Items: <?= $items ?></p>
    <p>Cost per Pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>

    <?php
    $stock = 12;
    $day = 'Friday';
    $flavor = 'Toffee';

    // if
    if ($items > 0) {
        echo "<p>Your total packs: $items packs in your cart.</p>";
    }

    // if...else
    if ($stock >= $items) {
        echo '<p>Stock check: Enough stock for this order.</p>';
    } else {
        echo '<p>Stock check: Not enough stock right now.</p>';
    }

    // if...elseif...else
    if ($total >= 50) {
        echo '<p>Delivery fee: Free</p>';
    } elseif ($total >= 15) {
        echo '<p>Delivery fee: $2</p>';
    } else {
        echo '<p>Delivery fee: $5</p>';
    }

    // switch
    switch ($day) {
        case 'Monday':
            echo '<p>Todays deal: Buy 1 get 1 free on gummies</p>';
            break;
        case 'Friday':
            echo '<p>Todays deal: 10% off all chocolate</p>';
            break;
        default:
            echo '<p>Todays deal: No deal today</p>';
    }

    // match
    $taste = match ($flavor) {
        'Chocolate' => 'rich and creamy',
        'Toffee' => 'sweet and chewy',
        'Fudge' => 'soft and buttery',
        default => 'new to us',
    };
    echo "<p>Flavor note: $flavor is $taste.</p>";

    // while loop
    echo '<p>Packing list: ';
    $box = 1;
    while ($box <= $items) {
        echo "Candy box $box";
        if ($box < $items) {
            echo ', ';
        }
        $box++;
    }
    echo '</p>';

    // do while loop
    echo '<p>Countdown: ';
    $count = 3;
    do {
        echo $count;
        if ($count > 1) {
            echo ', ';
        }
        $count--;
    } while ($count > 0);
    echo '</p>';

    // for loop
    echo '<p>Price after each pack: ';
    for ($i = 1; $i <= $items; $i++) {
        echo '$' . ($cost * $i);
        if ($i < $items) {
            echo ', ';
        }
    }
    echo '</p>';

    // foreach loop
    echo '<p>Our favorite candies:</p>';
    echo '<ul>';
    foreach ($favorites as $candy) {
        echo "<li>$candy</li>";
    }
    echo '</ul>';

    echo '<p>Nutrition facts:</p>';
    echo '<ul>';
    foreach ($nutrition as $key => $amount) {
        echo "<li>$key: $amount%</li>";
    }
    echo '</ul>';
    ?>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
