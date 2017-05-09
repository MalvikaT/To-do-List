<?php
require('header.php');
$array_complete = array();
$array_todo = array();
foreach ($result as $res) {

    if ($res['complete'] == 1) {
        $array_complete[] = $res;
    } else {
        $array_todo[] = $res;
    }
}
$firstname_cookie = getcookie('firstname');
$lastname_cookie = getcookie('lastname');
if($firstname_cookie=="" || $lastname_cookie==""){
$firstname_cookie = $_COOKIE['firstname'];
$lastname_cookie = $_COOKIE['lastname'];
}

?>

<html>
<head>

<style>
@import url('https://fonts.googleapis.com/css?family=Yrsa');

body {
    background-color: white;
    }
  .heading-style{
  font-family: 'Yrsa', serif;
  font-size: 50px;
  color: black;
  text-align: center;
}
.reg-label{
  display: inline-block !important;
  width: 120px;
  color:black;
  font-size:20px;
  font-weight:bold;
  font-family: 'Yrsa', serif;
}

.button-style{
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: black;
font-weight: bold;
margin-bottom: 0.5em;
width: auto;
margin-left:10px;
height:30px;
}

    text-align: center;
}

.stylez{
  font-family: 'Yrsa', serif;
  font-size: px;
  color: black;
  text-align: center;


    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    text-align: center;
    border: none;
    cursor: pointer;
    width: 20%;
}
    
    
table {
    border: 1px solid black;
    width: 100%;
    margin:auto;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color: black;
    color: white;
}

  </style>
</head>
    <body>
<div align="center">    
    <h1 class="heading-style"> <?php echo "Welcome, " . $firstname_cookie . " " . $lastname_cookie . '</br>'; ?> </h1>
<br>    
        <table>
        <?php if (count($array_todo) > 0): ?>
            <h2 class="stylez">Below are your incomplete tasks: </h2>
            <tr>
                <th>To-do Item</th>
                <th>Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Complete</th>
                
            </tr>
            <tr>
                <?php foreach ($array_todo as $res): ?>

                <tr>
                    <td><?php echo $res['itemname']; ?></td>
                    <td><?php echo $res['description']; ?></td>
                    <td><?php echo $res['date']; ?></td>
                    <td class="right"><?php echo $res['time']; ?></td>

                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='delete'/>
                            <input class="button-style" style=" background-color: #8ef2cd;" type='submit' value='Delete'/>
                        </form></td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='show_edit_form'/>
                            <input class="button-style" style=" background-color: #8ef2cd;" type='submit' value='Edit'/>
                        </form>
                    </td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='mark' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='mark_complete'/>
                            <input class="button-style" style=" background-color: #8ef2cd;" type='submit' value='Mark Complete'/>
                        </form>
                    </td>
                </tr>   
            <?php endforeach; ?>

        </tr>
    <?php endif; ?>
</table>
<br>
        <table>
            <?php if (count($array_complete) > 0): ?>
                <h2 class="stylez">Below are your completed tasks: </h2>
                <tr>
                    <th>To-do Item</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Delete</th>
                    <th>Edit</th>
                                                          
                </tr>
                <tr>
                    <?php foreach ($array_complete as $res): ?>

                    <tr>
                        <td><?php echo $res['itemname']; ?></td>
                        <td><?php echo $res['description']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td class="right"><?php echo $res['time']; ?></td>

                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='delete'/>
                                <input class="button-style"  style="background-color: #8ef2cd;" type='submit' value='Delete'/>
                            </form></td>
                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='show_edit_form'/>
                                <input class="button-style"  style="background-color: #8ef2cd;" type='submit' value='Edit'/>
                            </form>
                        </td>

                    </tr>   
                <?php endforeach; ?>

            </tr>
        <?php endif; ?>
    </table>


<form method='post' action='index.php'>
    <input type='hidden' name= 'action' value='show_add_form'/></br>
    <input class="button-style" style=" background-color:#4CAF50; margin-left: auto;width:200px;height:40px" type="submit" value="Add" /></br>
</form>
</body>
</html>
