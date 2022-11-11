<html>
<head>

<title>User list</title>
</head>
<body>

<br>
<table border="1">
<tr>


<th>ID</th>
                <th>NAME</th>
<th>PASSWORD</th>
<th>EMAIL</th>

</tr>

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

     if($conn){
        echo "Success";
        echo "<br>";
     }else{
       echo "DB Error...";
     }

    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);

    while($row= mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
   
    
       
   
?>
<tr>
<th><?=$row["ID"]?></th>
<th><?=$row["Name"]?></th>
<th><?=$row["Password"]?></th>
<th><?=$row["Email"]?></th>


</tr>
<?php


?>
</table>
</body>
</html>