<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
    <title>ADMIN_PANEL</title>

    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <style>
*{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
}
#header{
    width: 100%;
    height: 200px;
    background: black;
}
#data{
    height: 770px;
    background: sandybrown;
    color: black;
}
#sidebar{
    width: 200px;
    height: 770px;
    background: gold;
    color: blue;
    float: left;
}
.wrapper{
    border: 1px solid black;
    padding: 20%;
    width: 59%;
    margin: 0 auto;
    font-weight: bold;
}
    </style>
</head>
<body>
<!-- <?php include("login_check.php");?> -->
    <div id="header">
           <center><img src = "admin_logo.png" alt = "adminLogo" id="adminlogo"><center>
    </div>
    <div id="sidebar">
        <div >
            <ul class="wrapper">
                <li><a href="admin/users_page">USERS</a></li>
            </ul>
            <ul class="wrapper">
                <li><a href="<?=base_url('admin/logout')?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <div id="data">

    </div>
</body>
</html>