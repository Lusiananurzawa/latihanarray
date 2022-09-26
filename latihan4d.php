<?php
$ArrayMultidimensi = [
    "Negara" => ["Indonesia","Singapura","Malaysia","Brunei","Thailand","Laos","FIlipina","Myanmar"],
    "Ibukota" => ["D.K.I Jakarta", "Singapura", "Kuala Lumpur", "Bandar Seri Begawan", "Bangkok", "Vientiane", "Manila", "Naupyidaw"],
    "Kode Telepon" => ["+62", "+65", "+60", "+673", "+66", "+856", "+63", "+95"]
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan4d</title>
    </head>
    <body>
    <table border="1">
    <tr>
      <?php
      foreach ($ArrayMultidimensi as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      ?> 
    </tr>
    <?php
    for ($i=0; $i < 8; $i++) { 
        echo "<tr>";
        echo "<td>" .$ArrayMultidimensi["Negara"][$i] . "</td>";
        echo "<td>" .$ArrayMultidimensi["Ibukota"][$i] . "</td>";
        echo "<td>" .$ArrayMultidimensi["Kode Telepon"][$i] . "</td>";
        echo "</tr>";
    }
    ?>
  </table>
</body>
</html>
