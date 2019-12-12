<?php
include '../../includes/config.php';
include '../../includes/cleaner.php';
$pick = $_GET['id'];
setcookie("reque",$pick,time() + 60*60*24);
$sql="select * from `employee` where employee_id=$pick";
$stmt =$conn->query($sql);
if($rows = $stmt->fetch_assoc()){
$fname= $rows['em_firstname'];
$lname= $rows['em_lastname'];
$dob= $rows['em_dob'];
$qual= $rows['em_qualification'];
$sal= $rows['em_salary'];
$dj= $rows['em_dj'];
$url="update.php?id=".$pick;
}



if(isset($_POST['regsubmit'])){
    $sql = "UPDATE employee SET em_firstname= ? ,em_lastname = ?, em_dob = ? ,em_qualification=? ,em_salary = ?,em_dj =? WHERE employee_id= ?";
    $stmt  = $conn->prepare($sql);
    $stmt->bind_param("ssssdsi",$fn,$ln,$dob,$quali,$sall,$dj,$pick);
    $fn = cleans($_POST['fn']);
    $ln = cleans($_POST['ln']);
    $dob = cleans($_POST['dob']);
    $quali = cleans($_POST['qual']);
    $sall = cleans($_POST['sal']);
    $dj = cleans($_POST['dj']);

    $stmt->execute();

    if($stmt){
        setcookie("reque","",time() + 60*60*24);
    $_SESSION['message'] = 'record updated sucessfully';
    header("Location:../../dashboard.php");
    return;

}



}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

   
    <!-- Vendor CSS-->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../css/main.css" rel="stylesheet" media="all">
    <link href="../css/daterangepicker.css" rel="stylesheet" media="all">

    
   
</head>

<body class="container">

<h1>UPDATING YOUR PROFILE </h1>
    <div align="center" style="padding:20px;">
<div CLASS="row"  align="center"  id="regfrm">
    <div class="col-sm-4">
    <form method="POST" action="<?=$url?>" class="form-group">
    <label for="fn" id="label-user">FIRSTNAME: </label>
        <input type="text" value="<?=$fname?>" class="form-control" name="fn" id="fn"/>
        
        <label for="ln" id="label-user">LASTNAME: </label>
        <input type="text" class="form-control" value="<?=$lname?>" name="ln" id="ln"/>

<label for="dob" id="label-user">DATE OF BIRTH: </label>
        <input type="DATE" class="form-control" value="<?=$dob?>" name="dob" id="dob"/>

<label for="qual" id="label-user">QUALIFICATION </label>
        <input type="text" value="<?=$qual?>" class="form-control" name="qual" id="qual"/>

<label for="sal" id="label-user">SALARY: </label>
        <input type="text" value="<?=$sal?>" class="form-control" name="sal" id="sal"/>

<label for="dj" id="label-user">DATE JOINED: </label>
        <input type="date" value="<?=$dj?>" class="form-control" name="dj" id="dj"/>

      <BR/>
    <button type="submit" id="regsubmit" name="regsubmit" class="btn btn-success btn-block">update</button>
    </form>
    </div>
    </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
