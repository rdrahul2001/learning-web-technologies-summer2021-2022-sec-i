<?php   

        
            $id = $_REQUEST['id'];
            $password = $_REQUEST['password'];
            $cpassword = $_REQUEST['cpassword'];
            $name = $_REQUEST['name'];
            $usertype = $_REQUEST['usertype'];
            
    
            if ($id == null && ($password != $cpassword))
            {
                echo "Missing Information! <br>";
            }
            else
            {
                $data = $id."|".$password."|".$cpassword."|".$name."|".$usertype."\r\n";
                $file = fopen('user.txt','a');
                fwrite($file,$data);   
                header('location: login.html');
                
            }
        
       
?>