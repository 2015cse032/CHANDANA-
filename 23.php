<?php 
$db_host='locaLhost';
$db_user='root';
$db_password='tiger';
$db_name='2015cse032';


$dbh = mysqli_connect($db_host, $db_user,$db_password,$db_name) or die("error connecting to the database");

$query = "select * from sample";
$result = mysqli_query($dbh,$query) or die(" error querying the database");   


echo '<form id="myform">';
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" id="name" name="candidate" value="'.$row['idno'].'">'. '</input><br />';
}
echo '</form>'; hhgh
?>
