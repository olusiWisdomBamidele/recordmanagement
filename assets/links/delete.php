<?php
include '../../includes/config.php';
$userid= $_GET['id'];
$url = "delete.php?id=".$userid;
if (isset($_POST["btn_delete"])){
    $userid= $_GET['id'];
    $sql = "DELETE FROM employee WHERE employee_id = ? ";
    $stmt =$conn->prepare($sql);
    $stmt->bind_param('i',$id);
    $id = $userid;
    $stmt->execute();


    if($stmt){
        $_SESSION['message'] = 'record deleted sucessfully!';
        header("Location:../../dashboard.php");
        return;
    }



}
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../cssmain.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>are you sure you want to delete user with ID <?=$userid ?> </p>
    <form action="<?=$url?>" method="POST">
<input type="hidden" name="user_id" value=""/>
<button type="submit" id="btn_delete" name="btn_delete">delete</button>
<button type="button"  name="btn_cancel" onclick="location.href='../../dashboard.php'; return;">cancel</button>

    </form


    </body>
</html>