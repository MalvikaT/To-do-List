
<html>
<style>
  @import url('https://fonts.googleapis.com/css?family=Yrsa');
  .container{
  font-family: 'Yrsa', serif;
  font-size: 30px;
  color: white;
  text-align: center;
  }
  body{
  background-image: url('images/image1.jpg');
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
  </style>
<div class="container">
<div id="login">
<h3>Invalid password, please try again!</h3>
<form action = "login.php">
    <input type="submit" value="Click to Login" />
   </form>
   </div>
</div>
</body>
</html>