<?php
// Function to calculate the volume of a rectangular prism
function volume($luas, $tinggi) {
    $volume = $luas * $tinggi;
    echo "Volume ialah: $volume cm³<br />";
}

// Function to calculate the area of a rectangle
function luas_persegi($p, $l, $t) {
    $luas = $p * $l;
    echo "Luas Persegi ialah: $luas cm²<br />";
    volume($luas, $t); // Call the volume function with the calculated area and height
}

// Define dimensions
$panjang = 20;
$lebar = 10;
$tinggi = 5;

// Output dimensions
echo "Panjang Persegi: $panjang cm<br />";
echo "Lebar Persegi: $lebar cm<br />";
echo "Tinggi Persegi: $tinggi cm<br /><br />";

// Calculate and output the area and volume
luas_persegi($panjang, $lebar, $tinggi);
?>
