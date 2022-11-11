<?php
include "../Model/Doctordb.php";

$Username=$_POST["Username"];

if($Username=="")
{
    echo "Try new username";
}
else
{

    $connection=new Doctortdb();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUsername($conobj,$Username);

    if ($result->num_rows > 0)
    {
       echo "Username Already Used";
    }

    else{
    echo "Unique Username";
    }
    $connection->CloseCon($conobj);
}




?>