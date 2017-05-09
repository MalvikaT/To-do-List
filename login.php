<html>
<meta charset="UTF-8">
  <title>Welcome to to-do list application</title>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Yrsa');
  body{
  background-image: url('images/image1.jpg');
}
  .heading-style{
  font-family: 'Yrsa', serif;
  font-size: 50px;
  color: white;
  text-align: center;
}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

</style>
</head>
<body>

<div id="login">
<h1 class="heading-style"> Sign In</h1>
<div align="center">
<form method ="post" action="index.php">
<input type="text" placeholder = "Enter Email ID" type="text" name="email" value=""/><br>
<input type="password" placeholder = "Enter Password" type="password" name="password" value=""/><br>
<input type="hidden" name="action" value="check_login"/><br>
<input type="submit" value="Login"/>
</form>
<form action= "register.php">
 <input type="submit" value="Register"/>
</form>
</div>
</div>
</body>
</html>
