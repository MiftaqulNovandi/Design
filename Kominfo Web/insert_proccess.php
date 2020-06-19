<!--HEADER-->
<?php

  $username = $_POST["username"];
  $nama = $_POST["nama"];
  $password = $_POST["password"];

  $con = mysql_connect("localhost","root","","apa");
  mysql_select_db("apa", $con);

  $sql = "INSERT INTO login (name,username,password) VALUES ('$username' , '$nama','$password')";


            if (!mysql_query($sql,$con)){
              echo('Error : ' . mysql_error());
            }
            else{
              echo '<script language="javascript">alert("User Inserted")</script>';
              ?> <script> window.location = 'user.php'; </script>
          <?php }
        mysql_close($con);
?>