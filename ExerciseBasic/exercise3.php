<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo "$i Fizz chia het 3<br />";
    } else if ($i % 5 == 0) {
        echo "$i Buzz chia het 5<br />";
    } else if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i FizzBuzz chia het 3 va 5<br />";
    }
}
