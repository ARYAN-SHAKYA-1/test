<?php
include "connection.php";
     
    $id=$_SESSION['id'];
    $check = "select itm_id,itm_name,itm_qty,itm_cp from item where itm_id= $id;";
    $res=$conn->query($check);
    while ($row=$res->fetch_assoc()) {
        echo "<tr>";
        echo"<td>".$row['itm_id']."</td>";
        echo"<td>".$row['itm_name']."</td>";
        echo"<td>".$row['itm_qty']."</td>";
        echo"<td>".$row['itm_cp']."</td>";
        echo"</tr>";
    }
    $conn->close();
?>
