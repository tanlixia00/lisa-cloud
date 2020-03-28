<?php

require_once("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing = "0">
        <tr>            
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        <?php 
        $sql = "SELECT * FROM Mahasiswa";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    
          $mhs = array();
          $i = 0;

            while ($obj = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $obj['nrp'] . '</td>';
                echo '<td>' . $obj['name'] . '</td>';
                echo '<td>' . $obj['jurusan'] . '</td>';
            }
        } else {
          echo "Empty table.";
          die();
        } 
        ?>
       
    </table>
</body>
</html>
