<?php
session_start();
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
        <li><a href="search.php" title="Search">Search</a></li>
        <li><a class="current" href="playlistpage.php" title="Playlist">Playlist</a></li>
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
     
		     <h1>Your Playlist<?php if(isset($_SESSION['user'])) {
	#echo "inside loop HIIII!!!!!";
		  echo ", ", $_SESSION['user'];
		  } ?></h1>
        <!-- **** INSERT PAGE CONTENT HERE **** -->
 					<h3>...</h3>

				<?php
		  
	include('db_connect.php');
	#echo "HIIII!!!!!";
	if(isset($_SESSION['user'])) {
	#echo "inside loop HIIII!!!!!";
		  #echo $_SESSION['user'];
		  $currentUser = $_SESSION['user'];
		

	$query = "select u.username, art.artistname artistname, a.albumname albumname, s.songname songname, l.link link FROM users INNER JOIN artist art INNER JOIN album a INNER JOIN song s INNER JOIN playlist p INNER JOIN link l ON u.user_id=p.user_id AND p.link_id=l.link_id AND l.song_id=s.song_id AND s.album_id=a.album_id AND art.artist_id=a.artist_id AND u.username = (SELECT username FROM users WHERE username = '$currentUser');
	   $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
						
        while($row = mysqli_fetch_array($result)) {
   		$artistname = $row['artistname'];
		$albumname = $row['albumname'];
 		$songname = $row['songname'];
 		$link = $row['link'];

	//echo "<tr><td>$artistname<td>$artistname $songname</td><td>$link</td></tr>\n";
	
  	echo "<tr> Artist: $artistname <br><td> Album: $albumname <br>Song Title: $songname<br></td><td>
	<iframe width='420' height='315' src='http://www.youtube.com/embed/$link' frameborder='0' allowfullscreen></iframe> <br></td><br></tr>\n";

  }   
  }
  else {
	echo "<b>Sick of YouTube?  Join us!</b> <br><br> Please login to view your playlist.";
	}
    mysqli_close($db);
?>
					
					
					
					
					
        
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="login.php">Login</a> | <a href="logout.php" title="createaccount">Logout</a>
    </div>
  </div>
</body>


</html>


