<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['Name']);
        $ph = mysqli_real_escape_string($conn, $_POST['Mobile_Number']);
        $email = mysqli_real_escape_string($conn, $_POST['Email-ID']);
        $password = mysqli_real_escape_string($conn, $_POST['Pwd']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['RPwd']);


 $sql = "Select * from alture where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from alture where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);
        
        $sql = "SELECT MAX(id) FROM alture"; // Get the maximum value of the 'id' column
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $next_id = $row[0] + 1; // Increment the maximum id value by 1
        
        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO alture(id, username, ph, email, password) VALUES('$next_id','$username', '$ph', '$email','$password')";
        
                $result = mysqli_query($conn, $sql);        
                if ($result) {
                    echo  '<script>
                        alert("Account created please login!")
                        window.location.href = "login.php";
                    </script>';
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "signup.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "signup.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "signup.php";
                        alert("Email already exists!!")
                    </script>';
            }
        }     
    }
    ?>