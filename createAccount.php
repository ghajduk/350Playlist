<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>350Playlist</title>
  
   <?php

  	   include "db_connect.php";
  	   if (isset($_POST['username'])){
  	     $name = $_POST['username'];
         $pw = $_POST['pw'];
		 
		 $_SESSION['user'] = $name;
		 
		 
		 $query1 = "INSERT INTO users(username, password) VALUES
		 ('$name', SHA('$pw'))";
		 #echo $query1;
		 
		 $result1 = mysqli_query($db, $query1)
		 or die("Error inserting into database");

         $query = "select * from users WHERE username = '$name' AND password = '$pw'";
         $result = mysqli_query($db, $query)
         or die("Error Querying Database");
         if ($row = mysqli_fetch_array($result))
         {
   		#echo $query;
   		echo '<META http-equiv="refresh" content="0;URL=index.php">';
       }}
?>

  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <!-- **** layout stylesheet **** -->
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!-- **** colour stylesheet **** -->
  <link rel="stylesheet" type="text/css" href="style/colour.css" />
</head>

<body>
  <div id="main">
    <div id="logo"><h1>350Playlist</h1></div>
    <div id="menubar">
      <ul id="menu">
        <li><a href="index.php" title="Sidebar - Left">Home</a></li>
        <li><a href="login.php" title="Login">Login</a></li>
        <li><a href="search.php" title="Search">Search</a></li>
        <li><a href="playlistpage.php" title="Playlist">Playlist</a></li>
      </ul>
      
    </div>
    <div id="site_content">
      <div class="sidebar">
        <div class="sidebaritem">
          <h3>Most Popular</h3>
          <ul>
            <li><a class="current" href="#" title="Home">Home</a></li>
            <li><a href="#" title="">Category 1 (0)</a></li>
          </ul>
        </div>
        
        <div class="sidebaritem">
          <h3>Recent Comments</h3>
          <ul>
            <li><a href="#" title="">Comment 1</a></li>
            <li><a href="#" title="">Comment 2</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Create Account</h1>
          <form method="post" action="createAccount.php">
    <p>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="pw" size="40" /></p>

    <p><input type="submit" value="Create Account" name="submit" /></p>
  </form>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="#">Login</a>
    </div>
  </div>
</body>
</html>
