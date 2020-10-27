<?

function fizzbuzz($start, $end) {
    for ($i = 1; $i <= 100; $i++) {
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
>?
