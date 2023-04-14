<?php
    require("conncet.php");

   $error ='';
   if(isset($_POST['Register'])){
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $email =$_POST['email'];
      $phone =$_POST['phone'];
      $password =$_POST['password'];
      $password =$_POST['password2'];
   
   // check connection
   if (!$conn) {
   die("Conncetion failed:". mysqli_conncet_error());
   }
   $sql = "INSERT INTO user (firstname, lastname, email, phone, password) VALUES ('$firstname','$lastname','$email','$phone','$password')";
   $result = mysqli_query($conn,$sql);
   if (!$result){
      die("Error: " . mysqli_error($conn));
   }
   print("inserted 1 row");
}

?>