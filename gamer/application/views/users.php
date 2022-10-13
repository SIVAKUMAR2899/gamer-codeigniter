<!-- <?php include("../config/constants.php");?> -->

<!DOCTYPE html>
<html>
<head>
    <title>USER DETAILS</title>
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
.btn-primary{
    background-color: blue;
    padding: 8px;
    color: antiquewhite;
    text-decoration: none;
    font-weight: lighter;
}
.btn-primary:hover{
    background-color: black;
}
.btn-secondary{
    background-color: rgb(0, 140, 255);
    padding: 1%;
    color: rgb(7, 7, 7);
    text-decoration: none;
    font-weight: bold;
}
.btn-danger{
    background-color: rgb(250, 8, 8);
    padding: 1%;
    color: rgb(8, 8, 8);
    text-decoration: none;
    font-weight: bold;
}
table tr th{
    border: 1px solid black;
    border-width: 100%;
    border-bottom: 5px solid black;
    padding: 1%;
    text-align: left;
    width: 2px;
    font-size: large;
}
table tr td{
    border: 1px solid black;
    padding: 1%;
    font-size: medium;
}
    </style>
</head>
<body>
    <div id="header">
          <center><img src = "admin_logo.png" alt = "adminLogo" id="adminlogo"><center>
    </div>
    <div id="sidebar">
        <div>
            <ul class="wrapper">
                <li><a href="users_page">USERS</a></li>
            </ul>
            <ul class="wrapper">
                <li><a href="<?=base_url('admin/logout')?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <div id="data">
        <div class="container">
            <div class="row">
               <h1><center>USER DETAILS<center></h1>
                
                     <br /><br />

                     <a href="add_user" class="btn-primary">ADD USER</a>
                   <br /><br />
                <table style="width:80%">
                <thead>
                    <tr>
                       <th style="width:5%">ID</th>
                       <th style="width:10%">FIRSTNAME</th>
                       <th style="width:10%">LASTNAME</th>
                       <th style="width:6%">AGE</th>
                       <th style="width:9%">GENDER</th>
                       <th style="width:10%">CONTACT</th>
                       <th style="width:10%">EMAIL</th>
                       <th style="width:10%">UPDATE</th>
                       <th style="width:10%;">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $row) {
                        
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->lastname; ?></td>
                            <td><?php echo $row->age; ?></td>
                            <td><?php echo $row->gender; ?></td>
                            <td><?php echo $row->contact; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td>
                                <a href="edit_page" class="btn-secondary">Update</a>
                            </td>
                            <td>
                                <a href="delete_user" action="delete_user" class="btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        
                    }?>
                </tbody>
                </table>
            </div> 
        </div> 
    </div>
</body>
</html>