<?php //Question 1

$x = 10;
$y = 7;

echo "$x + $y = ".$x + $y."<br>";
echo "$x - $y = ".$x - $y."<br>";
echo "$x * $y = ".$x * $y."<br>";
echo "$x / $y = ".$x / $y."<br>";
echo "$x % $y = ".$x % $y."<br>";
?>

<?php //Question 2

if(date('F',time()) == 'August'){
    echo "It's August, so it's really hot.";
}else{
    echo "Not August, so at least not in the peak of the heat.";
}
?>

<?php //Question 3

for($x = 1; $x <= 12; $x++){
    echo "$x * $x = ".$x * $x."<br>";
}
?>


<?php //Question 4

echo "<table border='1' style='border-collapse: collapse; width: 20%; margin: 0 auto;'>";

for ($row = 1; $row <= 7; $row++) {
    for ($col = 1; $col <= 7; $col++) {
        $product = $row * $col;
        echo "<td>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>