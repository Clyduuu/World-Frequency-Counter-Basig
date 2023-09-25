<?php
/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'name' and 'price' keys.
 *
 * @return float The total price of the items in the shopping cart.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Modifies a string by removing spaces and converting it to lowercase.
 *
 * @param string $inputString The input string to be modified.
 *
 * @return string The modified string.
 */
function modifyStringForDisplay(string $inputString): string {
    $modifiedString = str_replace(' ', '', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}

/**
 * Checks if a number is even or odd and returns a descriptive message.
 *
 * @param int $number The number to be checked.
 *
 * @return string A message indicating if the number is even or odd.
 */
function checkEvenOrOddAndReturnMessage(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// Shopping cart items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Calculate and display the total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

// String manipulation
$inputString = "This is a poorly written program with little structure and read ability.";
$modifiedString = modifyStringForDisplay($inputString);
echo "\n Modified string: " . $modifiedString;

// Check if a number is even or odd and display the message
$number = 42;
$message = checkEvenOrOddAndReturnMessage($number);
echo "\n$message";
?>