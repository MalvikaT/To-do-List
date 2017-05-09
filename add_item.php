<?php
require('header.php');
?>
<html>
<head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Yrsa');

body{
  background-image: url('images/image1.jpg');
}

  .header{
  font-family: 'Yrsa', serif;
  font-size: 30px;
  color: white;
  text-align: center;
}

.it-label{ 
display: inline-block
  width: 120px;
  color:white;
  font-size:20px;
  font-weight:bold;
  font-family: 'Yrsa', serif;
}

    .btn{
    background-color: #4CAF50;
    color: white;
    padding: 8px 0px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 70%;
    }
</style>
</head>
<body>
    <h1 class="header">Add an Item</h1>
    <form action="redirect.php" method="post" id="add_item_form">
        <input type="hidden" name="action" value="add">
        
         <table>
         <table align="center">
         <tr>
      <td>  <label class="it-label">Item Name:</label></td>
        <td><input class="inpt" type="text" name="itemname" /></td>
        </tr>

      <tr> <td> <label class="it-label">Detail:</label></td>
      <td>  <input class="inpt" type="text" name="description" /></td></tr>
        

     <tr><td> <label class="it-label">Due Date:</label></td>
        <td><input class="inpt" type="date" name="date" /></td>
        </tr>

      <tr><td>  <label class="it-label">Due Time:</label></td>
       <td> <input class="inpt" type="time" name="time" /></td>
       </td>

        <label>&nbsp;</label>
        <tr><td><input class="btn" type="submit" value="Add" /></td>
        <td> <a href="javascript:history.go(-1)"><button class="btn" type="button">Cancel</button></a></td></tr>
        <br>
        </table>
    </form>

</body>
</html>