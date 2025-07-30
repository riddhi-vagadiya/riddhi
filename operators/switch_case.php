<?php
$score = 85; 
switch (true) {
    case ($score >= 90):
        echo "Grade A";
        break;
    case ($score >= 84):
        echo "Grade B"; 
        break;
    case ($score >= 70):
        echo "Grade C";
        break;
    case ($score >= 60):
        echo "Grade D";
        break;
    default:
        echo "Grade F";
}
?>
