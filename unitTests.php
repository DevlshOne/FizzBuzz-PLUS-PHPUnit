class FizzBuzzTests {
    public function tStartValid() {
        try {
            fizzBuzz(-1, 100);
        }
        catch(InvalidArgumentException $ex) {
            assert(TRUE);
            return;
        }
        assert(FALSE);
        return FALSE;
    }

    public function tStopValid() {
        try {
            fizzBuzz(1, -100);
        }
        catch(InvalidArgumentException $ex) {
            assert(TRUE);
            return;
        }
        assert(FALSE);
        return FALSE;
    }

    public function tStartStopValid() {
        try {
            fizzBuzz(100, 1);
        }
        catch(InvalidArgumentException $ex) {
            assert(TRUE);
            return;
        }
        assert(FALSE);
        return FALSE;
    }

    public function tFizz() {
        $b = 1;
        $e = 1000;
        $g = 0;
        for($i = $b; $i <= $e; $i++) {
            if($i % 3 == 0 || ($i % 15 == 0)) {
                $g++;
            }
        }
        $s = fizzBuzz($b, $e);
        $c = substr_count($s, 'Fizz');
        assert($g === $c, "Error Found [Fizz] : $g does not match $c");
        return $g === $c;
    }

    public function tBuzz() {
        $b = 1;
        $e = 1000;
        $g = 0;
        for($i = $b; $i <= $e; $i++) {
            if($i % 5 == 0 || ($i % 15 == 0)) {
                $g++;
            }
        }
        $s = fizzBuzz($b, $e);
        $c = substr_count($s, 'Buzz');
        assert($g === $c, "Error Found [Buzz] : $g does not match $c.");
        return $g === $c;
    }

    public function tFizzBuzzSweep() {
        $b = 1;
        $e = 1000;
        $s = '';
        for($i = $b; $i <= $e; $i++) {
            if($i % 15 == 0) {
                $s .= 'FizzBuzz';
                continue;
            }
            if($i % 3 == 0) {
                $s .= 'Fizz';
                continue;
            }
            if ($i % 5 == 0) {
                $s .= 'Buzz';
                continue;
            }
            $s .= $i;
        }
        $r = fizzBuzz($b, $e);
        assert($s === $r, "Error Found [Sweep]: $s does not match $r.");
        return $s === $r;
    }

    public function allTests() {
        $fbMethods = get_class_methods('FizzBuzzTests');
        foreach($fbMethods as $fbMethod) {
            if($fbMethod !== "allTests") {
                $r = $this->$fbMethod();
                if($r !== FALSE) {
                    echo "$fbMethod PASSED!\n";
                }
                else {
                    echo "$fbMethod FAILED!\n";
                }
            }
        }
    }
}

$testFizzBuzz = new FizzBuzzTests();
$textFizzBuzz->allTests();
