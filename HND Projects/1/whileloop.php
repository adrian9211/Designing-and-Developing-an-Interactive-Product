<?php

if ($_POST) {
    $firstTerm = 0;
    $secondTerm = 1;
    while ($firstTerm < 7000) {
        echo $firstTerm . "</br>";
        $nextTerm = $firstTerm + $secondTerm;
        $firstTerm = $secondTerm;
        $secondTerm = $nextTerm;
    }
}
?>