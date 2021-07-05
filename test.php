<?php
$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

$c = 1;
$b = 1;

foreach ($data as $d) {
    if ($c % 4 == 0) {
        echo '<ul>';
        for ($i = $b; $i <= $c; $i++) {
            echo '<li>' . $i  . '</li>';
        }
        $b = $i;
        echo '</ul>';
    }
    $c++;
}
echo '</ul>';
