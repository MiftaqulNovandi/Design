<?php
//get the value from form update
 $id = $_GET['id']; //get the no which will deleted
 
//query for update data in database
 $link=mysql_connect("localhost","root","","presentation");
 mysql_select_db("apa",$link);

 $query = "DELETE from presentation WHERE id = '$id'" ;
 $hasil = mysql_query($query,$link);
 //see the result
 if ($hasil) {
    include "browse_admin.php";
}
?>