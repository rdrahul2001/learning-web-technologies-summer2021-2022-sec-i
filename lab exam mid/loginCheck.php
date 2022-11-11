<?php
        session_start();

        $id = $_REQUEST['id'];
        $password = $_REQUEST['password'];
        $usertype = $_REQUEST['usertype'];
        

        if ($id == null || $password == null)
        {
            echo "Invalid Username/Password <br>";
        }
        else
        {
            $file = fopen('user.txt', 'r');
            while(!feof($file))
            {
                $line = fgets($file);
                $user = explode('|', $line);
                
                if($id == trim($user[0]) && $password == trim($user[1]))
                {
                    setcookie('status','true',time()+7200,'/');
                    if(trim($user[3]) == "user")
                    {
                        header('location: user.php');	
                    }
                    else if(trim($user[3]) == "admin")
                    {
                        header('location: admin.php');	
                    }
                }
                
            }
            echo "Invalid Username/Password <br>";
        }
    ?>