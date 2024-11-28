<?php

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80 && $score <= 89) {
    echo "Grade: B";
} elseif ($score >= 70 && $score <= 79) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
?>
