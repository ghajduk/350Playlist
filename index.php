<?php
if (isset($_POST['username'])){
setcookie('user', $_POST['username'], time()*60*60*24*30);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>350Playlist</title>
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
        <li><a class="current" href="index.php" title="Sidebar - Left">Home</a></li>
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
          <h3>Add a Vid!</h3>
		  <form method = "post" action = "index2.php">
		  <ul>
          <tr><td>Artist:</td><td><input type="text" id="artistname" name="artistname" /></td></tr>
		  <tr><td>Album:</td><td><input type="text" id="albumname" name="albumname" /></td></tr>
          <tr><td>Song Title:</td><td><input type="text" id="songname" name="songname" /></td></tr>
		  <tr><td>Song Code:</td><td><input type="text" id="link" name="link" /></td></tr>
		  <tr><td>&nbsp;</td><td><input type="submit" value="Add Video" /></td></tr>
		  </ul>
		  
		  </form>
		  </div>
      </div>
      <div id="content">
		
        <h1>Welcome to the 350Playlist<?php if(isset($_COOKIE['user'])) {
	#echo "inside loop HIIII!!!!!";
		  echo ", ", $_COOKIE['user'];
		  } ?></h1>
        <!-- **** INSERT PAGE CONTENT HERE **** -->
        <p>
         
		  <br>
		  Sick of YouTube? DUDE
		   
		   JOIN US!
        </p>
        <p>
          Need to create an account? <a href="createAccount.php" title="createaccount">Click here.</a>
        </p>
        
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="login.php">Login</a> | <a href="logout.php" title="createaccount">Logout</a>
    </div>
  </div>
</body>
</html>
