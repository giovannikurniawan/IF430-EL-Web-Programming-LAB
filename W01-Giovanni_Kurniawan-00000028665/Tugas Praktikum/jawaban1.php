<!DOCTYPE html>
<html>
<head>
  <title>Belajar Array 2 Dimensi PHP</title>
</head>
<body>
<table>
<tr><td>Nama Negara</td><td>Ibu Kota </td><td> Kode Telepon</td><td>Mata Uang</td></tr>
<?php
$namanegara= array(
        array("India", "New Delhi", 91,"INR"),
        array("Indonesia", "Jakarta", 62, "IDR"),
        array("Japan", "Tokyo", 81 ,"JPY")
        );
            
    for ($row = 0; $row < 3; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 4; $col++) {
            echo "<td>".$namanegara[$row][$col]."</td>";
        }
    echo "</tr>";
}
?>
</table>
</body>
</html>