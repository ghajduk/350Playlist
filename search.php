<?php
if (isset($_POST['username'])){
setcookie('user', $POST_['username'], time()*60*60*24*30);
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
        <li><a href="index.php" title="Sidebar - Left">Home</a></li>
        <li><a href="login.php" title="Login">Login</a></li>
        <li><a class="current" href="search.php" title="Search">Search</a></li>
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
        <h1>Search Our Music</h1>
        <!-- **** INSERT PAGE CONTENT HERE **** -->
		<h2>Here you can search our playlist database.</h2>
		<p>Type in the artist's name here:</p>
        <form method="post" action="search.php">
     <p><input type="text" id="search" name="search" size="70" />    <input type="submit" value="Go" name="submit" /></p>
  </form>
        
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="login.php">Login</a> | <a href="logout.php" title="createaccount">Logout</a>
    </div>
  </div>
</body>
</html>
