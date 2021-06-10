<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/calendar.css">

    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <input type="hidden" id = "base_url" value = "<?php echo base_url();?>">
    <!-- container start  -->
    <div class = "container">
        <!-- navigation start  -->
        <div class = "navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class = "icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
                        <span class = "title"><h2>Company</h2></span>
                    </a>
                </li>
                <li class = "<?php if($title == 'Dashboard'){echo 'active';}?>">
                    <a href="<?php echo site_url('Users/dashboard');?>">
                        <span class = "icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                        <span class = "title">Dashboard</span>
                    </a>
                </li>
                <li class = "<?php if($title == 'Teacher'){echo 'active';}?>">
                    <a href="<?php echo site_url('Teacher');?>">
                        <span class = "icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        <span class = "title">Teacher</span>
                    </a>
                </li>
                <li class = "<?php if($title == 'Class'){echo 'active';}?>">
                    <a href="<?php echo site_url('Class_controller');?>">
                        <span class = "icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                        <span class = "title">Class</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class = "icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <span class = "title">Section</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class = "icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class = "title">Subject</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class = "icon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                        <span class = "title">Study Material</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class = "icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class = "title">Class Routine</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout');?>">
                        <span class = "icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class = "title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- navigation end  -->
        <!-- main start  -->
        <div class = "main">
            <!-- topbar start  -->
            <div class = "topbar">
                <div class = "toggle" onclick = "toggleMenu();"></div>
                <div class = "search">
                    <label>
                        <input type="text" placeholder = "Search Here">
                        <i class = "fa fa-search" arai-hidden = "true"></i>
                    </label>
                </div>
                <div class = "user">
                        <img src="<?php echo base_url();?>assets/images/user.jpg" alt="user">
                </div>
            </div>
            <!-- topbar end  -->

            