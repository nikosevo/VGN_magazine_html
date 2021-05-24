
<!DOCTYPE html>

<?php 
session_start();
include "connect.php";
include "functions.php";

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/global.css" />

    <link rel="stylesheet" href="css/tooplate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Add Post</title>
</head>

<header>
    <?php 
    include("navbar.php"); 
    ?>
</header>

<body id="reportsPage">
    
    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
            <li><a href="graphpage.php">Main Page</a></li>
                <li><a href="adminpage.php">Manage Posts</a></li>
                <li><a href="manageusers.php">Manage Users</a></li>
                <li><a href="managecategories.php">Manage Categories</a></li>
            </ul>
        </div>
        <!-- Left Sidebar -->

        <!-- Admin Content -->
        
        <div class="tm-col tm-col-big">
            <div class="bg-white tm-block h-100">
                <h2 class="tm-block-title">Performance</h2>
                <canvas id="barChart"></canvas>
            </div>
        </div>
        <div class="tm-col tm-col-small">
            <div class="bg-white tm-block h-100">
                <canvas id="pieChart" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
        
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
        <!-- Admin Content -->
    
    <script>
       function idgiver(id) {
           
        window.location.href="editPost.php?uid=" + id;
        }
        function idgiver2(id) {
        window.location.href="manageusers.php?uid=" + id + "&action=delete";
        }
           
    </script>
    <div>
            <?php include("footer.html"); ?>
    </div>
</body>
</html>