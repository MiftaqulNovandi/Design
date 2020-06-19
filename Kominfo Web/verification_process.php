<?php
//get the value from form update
 $id = $_GET['id']; //get the no which will deleted
 echo $id;
//query for update data in database
 $link=mysql_connect("localhost","root","","verification");
 $link2=mysql_connect("localhost","root","","presentation");
 mysql_select_db("apa",$link);
 mysql_select_db("apa",$link2);

 $query = "SELECT id from verification WHERE id = '$id'" ;
 $query2 = "SELECT subject from verification WHERE id = '$id'" ;
 $query3 = "SELECT topic from verification WHERE id = '$id'" ;
 $query4 = "SELECT file from verification WHERE id = '$id'" ;
 $query5 = "SELECT lastupdate from verification WHERE id = '$id'" ;
 $hasil = mysql_query($query,$link);
 $hasil2 = mysql_query($query2,$link);
 $hasil3 = mysql_query($query3,$link);
 $hasil4 = mysql_query($query4,$link);
 $hasil5 = mysql_query($query5,$link);
 

 $query_insert = "INSERT INTO presentation (id,subject,topic,file,lastupdate) VALUES ($hasil,$hasil2,$hasil3,$hasil4,$hasil5)" ;
 $hasil_insert = mysql_query($query_insert,$link2);

 //$query_delete = "DELETE from verification WHERE id = '$id'" ;
 //$hasil_delete = mysql_query($query_delete,$link);
 //see the result
 //if ($hasil_delete) {
 //   include "verification.php";
 //}


?>