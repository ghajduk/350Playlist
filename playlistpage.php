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
     
		     <h1>Your Playlist<?php if(isset($_COOKIE['user'])) {
	#echo "inside loop HIIII!!!!!";
		  echo ", ", $_COOKIE['user'];
		  } ?></h1>
        <!-- **** INSERT PAGE CONTENT HERE **** -->
 					<h3>...</h3>

				<?php
		  
	include('db_connect.php');
	#echo "HIIII!!!!!";
	if(isset($_COOKIE['user'])) {
	#echo "inside loop HIIII!!!!!";
		  #echo $_COOKIE['user'];
		  $currentUser = $_COOKIE['user'];
		  
	$query = "select users.username, artist.artistname artistname, album.albumname albumname, song.songname songname, link.link link FROM users JOIN artist JOIN album JOIN song JOIN playlist JOIN link WHERE users.user_id=playlist.user_id AND playlist.link_id=link.link_id AND link.song_id=song.song_id AND song.album_id=album.album_id AND artist.artist_id=album.artist_id AND users.username='$currentUser';";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
						
        while($row = mysqli_fetch_array($result)) {
   		$artistname = $row['artistname'];
		$albumname = $row['albumname'];
 		$songname = $row['songname'];
 		$link = $row['link'];

	echo "<tr><td>$artistname<td>$artistname $songname</td><td>$link</td></tr>\n";
	
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



