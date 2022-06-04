<?php
$con = mysqli_connect("localhost","yubin", "1234", "yubin");
$today = $_POST['a1'];
$today = addslashes($today);
$title = $_POST['a2'];
$title = addslashes($title);
$mess = $_POST['a3'];
$mess = addslashes($mess); $sql = "insert into db_project (
today,
title,
mess
)"; $sql = $sql. "values (
'$today',
'$title',
'$mess'
)";
if($con
->query($sql)){ 
echo '<script>alert("success inserting")</script>'; 
}else{ 
echo '<script>alert("fail to insert sql")</script>';
}
mysqli_close($mysqli);
?>
<script>
location.href = "db_project.html";
</script>