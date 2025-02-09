<?php

function is_prime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

function find_primes_in_range($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Get input values
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $end = isset($_POST['end']) ? intval($_POST['end']) : 0;

    if ($start > $end) {
        echo "Invalid range: Start range must be less than or equal to end range.";
        exit;
    }

    $primes = find_primes_in_range($start, $end);

    if (empty($primes)) {
        echo "No prime numbers found in the range $start to $end.";
    } else {
        echo "Prime numbers in the range $start to $end: " . implode(", ", $primes);
    }
}
?>
