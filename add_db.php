<?php

$region_name = $_POST["region"];
$rack = $_POST["rack"];
$machine_number = $_POST["machine"];
$ip_address = $_POST["ip"];
$serial_number = $_POST["sn"];
$product = $_POST["product"];


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Server Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.html">
                        Server management
                    </a>
                </li>
                <li>
                    <a href="add.html">Add Server</a>
                </li>
                <li>
                    <a href="remove.html">Remove Server</a>
                </li>
                <li>
                    <a href="replace.html">Replace Server</a>
                </li>
                <li>
                    <a href="case_status.html">Case status</a>
                </li>
                <li>
                    <a href="devices.html">Devices</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Server description</h1>
                        Region :<?php echo $region_name; ?><br>
                        Rack : <?php echo $rack; ?><br>
                        Machine number : <?php echo $machine_number; ?><br>
                        Ip address : <?php echo $ip_address; ?><br>
                        Serial number : <?php echo $serial_number; ?><br>
                        Product name : <?php echo $product; ?><br>

                    </div>
                </div>
            </div>
        </div>

        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
