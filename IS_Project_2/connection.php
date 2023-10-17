<?php
    $conn= mysqli_connect("localhost" ,"root" ,"odera@1148" ,"database123");
    if(!$conn){
       echo "something went wrong"; 
        }
    if(isset($_POST['submit'])){
            $firstname=$_POST["First_name"];
            $secondname=$_POST["Second_name"];
            $mobile=$_POST["Mobile_number"];
            $email=$_POST["Email"];
            $password=$_POST["Enter_password"];
            $confirmpassword=$_POST["Confirm_password"];
            $errors= array();
            if(empty($firstname) ||empty($secondname)||empty($mobile)||empty($email)||empty( $password)||empty( $confirmpassword)){
                array_push($errors, "All fields are required");
            }
            //if(!filter_($email, FILTER_VALIDATE_EMAIL)){
                //array_push($errors, "Email is not valid");
            //}
            if(strlen($password) <5){
                array_push($errors, "password must be atleast 5 characters long");
            }
            if($password!==$confirmpassword){
                arrary_push($errors, "password does not match");
            }
            //if(count($errors>0)){
                //foreach($errors as $errors)
                //echo "Error";
            //}
            else{
                
                $sql = "INSERT INTO entry_details(Frist_name,Second_name,Mobile_number,Email,Enter_password,Confirm_password)
                VALUES(?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt=mysqli_stmt_prepare($stmt,$sql);
                if($preparestmt){
                    mysqli_stmt_bind_param($stmt, "ssisss", $firstname,$secondname,$mobile, $email,$password,$confirmpassword );
                    mysqli_stmt_execute($stmt);
                    
                    
               
                    
                }
            }
         
         }
         
         
        
            
         
                

?>