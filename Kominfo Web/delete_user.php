<?php
//get the value from form update
 $id = $_GET['id']; //get the no which will deleted
 
//query for update data in database
 $link=mysql_connect("localhost","root","","login");
 mysql_select_db("apa",$link);

 $query = "DELETE from login WHERE id = '$id'" ;
 $hasil = mysql_query($query,$link);
 //see the result
 if ($hasil) {
    include "user.php";
}
?>