<?php
$y = $_COOKIE["areuin"];
if($y == 1){
 
    header ("Location:http://localhost/recordmanagement/dashboard.php");
}elseif($y == 3){
    
    header ("Location:http://localhost/recordmanagement/index.php"); 
}



?>

<?php
    $msql = "select * from `employee`  where em_qualification = 'MASTERS'";
    $psql = "select * from `employee`  where em_qualification = 'PHD'";
    $osql = "select * from `employee`  where em_qualification = 'OND'";
    $ssql = "select * from `employee`  where em_qualification = 'SSCE'";
    $bsql = "select * from `employee`  where em_qualification = 'BSC'";
    $jsql = "select * from `employee`  where em_qualification = 'JSCE'";
    $fsql = "select * from `employee`  where em_qualification = 'FSLC'";
    $count = "select `employee_id` from `employee`";
    $amount= "select `em_salary` from `employee`";
            $querm = mysqli_query($conn,$msql);
            $querp = mysqli_query($conn,$psql);
            $quero = mysqli_query($conn,$osql);
            $quers = mysqli_query($conn,$ssql);
            $querb = mysqli_query($conn,$bsql);
            $querj = mysqli_query($conn,$jsql);
            $querf = mysqli_query($conn,$fsql);
            $cout = mysqli_query($conn,$count);
            $amountp = mysqli_query($conn,$amount);
                                $m = $querm->num_rows;
                                $p = $querp->num_rows;
                                $o = $quero->num_rows;
                                $s = $quers->num_rows;
                                $b = $querb->num_rows;
                                $j = $querj->num_rows;
                                $f = $querf->num_rows;
                                $no_of_employee = $cout->num_rows;
                                if ($amountp->num_rows > 0){
                                    while($rows = $amountp->fetch_assoc()){
                                        $amount += $rows['em_salary']; 

                                    }
                                }

?>