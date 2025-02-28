<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style type="text/css">
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
h1{
    text-align: center;
    font-size: 50px;

}
        </style>
</head>
<body>
   <h1 >List of books</h1> 
   <?php
   $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

   echo "<table class= 'table table-bordered table-hover;'>";
   echo "<thead>";
   echo "<tr style= 'background-color: white;'>";
    echo "<th>"; echo"ID"; echo"</th>";
    echo "<th>"; echo"Book-Name"; echo"</th>";
    echo "<th>"; echo"Authors Name"; echo"</th>";
    echo "<th>"; echo"Edition"; echo"</th>";
    echo "<th>"; echo"Status"; echo"</th>";
    echo "<th>"; echo"Quantity"; echo"</th>";
    echo "<th>"; echo"Department"; echo"</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row['bid']; echo"</td>";
        echo "<td>"; echo $row['name']; echo"</td>";
        echo "<td>"; echo $row['authors']; echo"</td>";
        echo "<td>"; echo $row['edition']; echo"</td>";
        echo "<td>"; echo $row['status']; echo"</td>";
        echo "<td>"; echo $row['quantity']; echo"</td>";
        echo "<td>"; echo $row['department']; echo"</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
   ?>
</body>
</html>