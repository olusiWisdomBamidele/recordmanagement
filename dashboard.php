<?php 

include('includes/config.php'); 
include('includes/block.php');
$logged = $_GET["name"];

?>
<!DOCTYPE html>
<!-- saved from url=(0053) -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/dashboard.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .dropdown-menu{
        text-align:center;
      }
      #ed:hover{
background-color:#33ff33;
      }
      #log:hover{
        background-color:#33ff33;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./Dashboard Template · Bootstrap_files/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
  <body>




  
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IO FARMS DBMS</a>

   <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="color:blue;"><?php echo $_COOKIE["user"];   ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li id="ed" style="width:100%; height:50%;" align="center"><a href="#" align="center">EDIT PROFILE</a></li>
      <li id="log" style="width:100%; height:50%;" align="center"><a href="index.php";  <?php session_destroy(); setcookie("areuin",3,time()-60*60*24); ?>align="center">LOG OUT</a></li>
    </ul>
  </div>

  
    
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item" id="addtodo" onclick="add()">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" id="svgadd" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              ADD NEW EMPLOYEE
            </a>
          </li>
          <li class="nav-item"  onclick="viewchart()">
            <a class="nav-link" href="#">
              <svg class="active" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              VIEW CHART
            </a>
          </li>
          
          <li class="nav-item" id="register"  >
            <a class="nav-link" onclick="view()" href="#" >
            <svg  id="svgview" onclick="alert("hello");" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              VIEW DATABASE
            </a>
           
        </ul>

        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">BE SECURED</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button onclick="viewchart()" type="button" class="btn btn-sm btn-outline-secondary">CHART</button>
            <button type="button" onclick="add()" class="btn btn-sm btn-outline-secondary">ADD NEW</button>
          </div>
          
          <button onclick="view()" type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            VIEW DB
          </button>
          
        </div>
        </hr>
      </div>
      <!--===============================for CHART=======================================-->
     
   
   <!--===============================END OF CHART=======================================-->
  <div width="50%" id="chart" height="50%">
  <canvas id="myAreaChart" height="30" width="100%"></canvas>
  
 <pre> 
 
 
 
           TOTAL NUMBER OF EMPLOYEE = <?=$no_of_employee?>  
           
           TOTAL AMOUNT PAID = <?=$amount?>
           
           
            </pre>
    </div>
<!--===============================for new Record=======================================-->


<!--===============================END OF ADDING TODO=======================================-->
<!--===============================FOR registration=======================================-->
<div CLASS="row"   style="display:none;" id="regfrm">
        <div class="col-sm-6">
        <form method="POST" action="dashboard.php" class="form-group">
            <label for="rfn" id="label-user">FIRSTNAME: </label>
                  <input type="text" class="form-control" name="rfn" id="rfn"/>
            <label for="rln" id="label-user">LASTNAME: </label>
                  <input type="text" class="form-control" name="rln" id="rln"/>
            <label for="rdob" >DATE OF BIRTH </label>
                  <input type="date" class="form-control" name="rdob" id="rdob"/></br>
            <label for="rqual" >HIGHEST QUALIFICATION</label>
                <SELECT class="select" name="rqual" id="rqual">
                  <OPTION>NIL</OPTION>
                  <OPTION>MASTERS</OPTION>
                  <OPTION>PHD</OPTION>
                  <OPTION>OND</OPTION>
                  <OPTION>FSLC</OPTION>
                  <OPTION>JSCE</OPTION>
                  <OPTION>SSCE</OPTION>
                 
                </SELECT><br/>
             <label for="rsl" id="label-user">SALARY: </label>
                  <input type="text" class="form-control" name="rsl" id="rsl"/>
            <label for="rdj" >DATE JOINED </label>
                  <input type="date" class="form-control" name="rdj" id="rdj"/>
        <button type="submit" id="regsubmit" name="regsubmit" class="btn btn-success btn-block">REGISTER</button>
        </form>
        </div>
    </div>
<?php

if (isset($_POST['regsubmit'])){
  

      $sql ="INSERT INTO employee (em_firstname,em_lastname, em_dob,em_qualification, em_salary,em_dj)VALUES(?,?,?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssssds',$fn,$ln,$dob,$qual,$sal,$dj);
      $fn=$_POST['rfn'];
      $ln=$_POST['rln'];
      $dob=$_POST['rdob'];
      $qual=$_POST['rqual'];
      $sal=$_POST['rsl'];
      $dj=$_POST['rdj'];
      $stmt->execute();

}

?>
   <!--===============================END OF registration=======================================-->
 <!--===============================VIEW DATABASE=======================================-->
 
 
 <div CLASS="row" id="viewdb"  style="display:none;" >
    <div class="col-sm-12">
    
<?php


$sql = "SELECT * FROM employee";
$stmt = $conn->query($sql);
echo '<table border="2px" class="table table-striped">';
echo '<tr><th>employee_id</th><th>Firstname</th><th>Lastname</th><th>DOB</th><th>SALARY</th><th>Qualification</th> <th>Date joined</th><th colspan="2" align="center">control</th> ';
    if ($stmt->num_rows > 0){
        while($rows = $stmt->fetch_assoc()){
            echo '<tr><td>';
            echo $rows['employee_id'];
            echo '</td><td>';
            echo $rows['em_firstname'];
            echo '</td><td>';
            echo $rows['em_lastname'];
            echo '</td><td>';
            echo $rows['em_dob'];
            echo '</td><td>';
            echo $rows['em_salary'];
            
            echo '</td><td>';
            echo $rows['em_qualification'];
            echo '</td><td>';
            echo $rows['em_dj'];
           
   
?>

        <td><a href="assets/links/update.php?id=<?=$rows['employee_id']?>">update <i class="fa fa-edit"></i></a></td>
        <td><a href="assets/links/delete.php?id=<?= $rows['employee_id'] ?>">delete <span class="fa fa-trash-o"></span></a></td>
        </tr>
<?php

         
}
    


}
echo '</table>';

?>

</div>
</div>


 <!--===============================END OF VIEW DATABASE=======================================-->



 <!--===============================END OF VIEWING TODO=======================================-->
      </div>
    </main>
  </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script src="assets/js/script.js"></script> -->
<!-- <script src="assets/js/chart-area-demo.js"></script> -->
    <script>
      var viewobj=document.getElementById("viewdb");
      var regobj=document.getElementById("regfrm");
      var chart=document.getElementById("chart");
    function view(){
      
      viewobj.style.display = "block";
      regobj.style.display = "none";
      chart.style.display="none";
    }
    function add(){
      viewobj.style.display = "none";
      regobj.style.display = "block";
      chart.style.display="none";
    }
    function viewchart(){
      viewobj.style.display = "none";
      regobj.style.display = "none";
      chart.style.display="block";

    }

      </script>




      <script>
      var value = ["<?=$m?>","<?=$p?>","<?=$o?>","<?=$s ?>","<?=$b ?>","<?=$j ?>","<?=$f?>"];
      console.log(value);
      var names = ["MASTERS", "PHD", "OND", "SSCE", "BSC", "JSCE", "FSLC"];
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var ctx = document.getElementById("myAreaChart");
// const getQual = () =>{
//   let qualss = document.querySelectorAll("td:nth-of-type(5)") ;
// qualifies =[];
// for(let qual of qualss)
// {
// qualifies.push(qual.textContent);
// }
// return qualifies;
// }

var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: names,
        datasets: [{
            label: 'Sessions',
            lineTension: 0.3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
            data: value,
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'date'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
            }],
            yAxes: [{
                // type: "category",
                ticks: {
                    min: 0,
                    max: 15,
                    maxTicksLimit: 8
                },
                gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                }
            }],
        },
        legend: {
            display: false
        }
    }
});





      </script>
</body></html>