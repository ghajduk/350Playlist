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
		  <form method = "post" action = "index.php">
		  <ul>
          <tr><td>Artist:</td><td><input type="text" id="art" name="art" /></td></tr>
		  <tr><td>Album:</td><td><input type="text" id="alb" name="alb" /></td></tr>
          <tr><td>Song Title:</td><td><input type="text" id="songti" name="songti" /></td></tr>
		  <tr><td>Song Code:</td><td><input type="text" id="songco" name="songco" /></td></tr>
		  <tr><td>&nbsp;</td><td><input type="submit" value="Add Video" /></td></tr>
		  </ul>
		  <?php 
			$art = $_POST['art'];
			$alb = $_POST['alb'];
			$songti = $_POST['songti'];
			$songco = $_POST['songco'];
			$query = "INSERT INTO playlist (artist, album, songTitle, link) VALUES ('";
					$query = $query . $art . "', '" . $alb . "', '" . $songti . "', '" . $songco . "')";
			?>
		  </form>
		  </div>
      </div>
      <div id="content">
        <h1>Welcome to the 350Playlist</h1>
        <!-- **** INSERT PAGE CONTENT HERE **** -->
        <p>
          <b>Sick of YouTube?  Join us! D's edit</b>
		  <br><br>
		  <?php
	include('db_connect.php');
	$query = "select users.username, artist.artistname art, album.albumname alb, song.songname son, link.link lin FROM users JOIN artist JOIN album JOIN song JOIN playlist JOIN link WHERE users.user_id=playlist.user_id AND playlist.link_id=link.link_id AND link.song_id=song.song_id AND song.album_id=album.album_id AND artist.artist_id=album.artist_id AND users.username='greg';";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$artist = $row['art'];
  		$album = $row['alb'];
		$songName = $row['son'];
		$link = $row['lin'];
  	echo "<tr> Artist: $artist <br><td> Album: $album <br><td>Song Title: $songName<br></td><td> 
	<iframe width='420' height='315' src='http://www.youtube.com/embed/$link' frameborder='0' allowfullscreen></iframe> <br></td><br></tr>\n";
	
  }   
    mysqli_close($db);
?>
        </p>
        <p>
          Need to create an account? <a href="createAccount.php" title="createaccount">Click here.</a>
        </p>
        
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="#">Login</a>
    </div>
  </div>
</body>
</html>
