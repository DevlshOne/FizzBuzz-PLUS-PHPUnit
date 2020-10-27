<?

function fizzBuzz($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        $out = $i . "\n";
    if (($i % 15) === 0) {
        $out = "FizzBuzz\n";
    } elseif (($i % 5) === 0) {
        $out = "Buzz\n";
    } elseif (($i % 3) === 0) {
        $out = "Fizz\n";
    }
    echo $out;
    }
}
?>
