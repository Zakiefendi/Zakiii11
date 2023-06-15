<?php
// Create database connection using config file
include_once("config.php");


 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
<main class="table">

    <section class="table__header">
        <h1>User List</h1>
        <a class="btnlog btn4" href="logout.php">Logout</a>
        <a class="btnadd btn3" href="add.php">Add User</a>
           
          
               
                
        </section>
            <table>
                <thead>
                    <tr>
                        <th> Name <span class="icon-arrow"></th>
                        <th> Image <span class="icon-arrow"></th>
                        <th> Update <span class="icon-arrow"></th>
                        
                    </tr>
                </thead>
               
               
                <tbody>
               <?php $class_name = 'btnedit btn1'; ?>
                <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['user']."</td>";
        // echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['img']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'class='btnedit btn1'>Edit</a>  <a href='delete.php?id=$user_data[id]'class='btndel btn2'>Delete</a></td></tr>";        
    }
    ?>
                </tbody>
</body>
</html>