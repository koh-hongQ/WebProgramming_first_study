<?php
function caesarCipher($text, $shift, $operation) {
    $result = '';
    $shift = $operation === 'decode' ? 26 - $shift : $shift;

    foreach (str_split($text) as $char) {
        if (ctype_upper($char)) {
            // Uppercase letters
            $result .= chr((ord($char) - 65 + $shift) % 26 + 65);
        } elseif (ctype_lower($char)) {
            // Lowercase letters
            $result .= chr((ord($char) - 97 + $shift) % 26 + 97);
        } else {
            // Non-alphabet characters remain unchanged
            $result .= $char;
        }
    }

    return $result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $shift = intval($_POST['shift']);
    $operation = $_POST['operation'];

    if ($shift < 1 || $shift > 25) {
        echo "Shift value must be between 1 and 25.";
        exit;
    }

    $result = caesarCipher($text, $shift, $operation);

    echo "<h1>Caesar Cipher Result</h1>";
    echo "<p>Original Text: $text</p>";
    echo "<p>Shift Value: $shift</p>";
    echo "<p>Operation: " . ucfirst($operation) . "</p>";
    echo "<p>Result: $result</p>";
    echo '<br><a href="202200307_cipher.html">Back to Tool</a>';
} else {
    echo "Invalid request method.";
}
?>