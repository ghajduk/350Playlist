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
       
       
      </div>
      <div id="content">
        <h1>Thanks for Adding a Video<?php if(isset($_COOKIE['user'])) {
	#echo "inside loop HIIII!!!!!";
		  echo ", ", $_COOKIE['user'];
		  $u = $_COOKIE['user'];
		  } ?></h1>
		  
        <!-- **** INSERT PAGE CONTENT HERE **** -->
		 <?php 

					include('db_connect.php');
						//?=$_COOKIE['username']
						//$username = echo "$_COOKIE['username']";
						$artistname = $_POST['artistname'];
						$albumname = $_POST['albumname'];
						$songname = $_POST['songname'];
						$link = $_POST['link'];
			
					echo "<p>$songname $artistname</p>";
					echo "<p>$link</p>";
			
				
					//adding artist name, generating aritstid
					$query = "INSERT INTO artist (artistname)VALUES ('".$artistname."')";
					mysqli_query($db, $query)
							or die ('ERRORRR');
					
					//grabbing atristid
					//adding albumname, generating albumid
					$query = "select artist_id from artist where artistname='" .$artistname. "'";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						$artistid = $row['artist_id'];
					}															
					$query = "INSERT INTO album (artist_id, albumname)VALUES ('";
					$query = $query . $artistid . "', '" .$albumname."')";
					mysqli_query($db, $query)
								or die ('ERRORRR');
					
					//grabbing albumid
					//adding songname, generating songid
					$query = "select album_id from album where albumname='" .$albumname. "'";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						$albumid = $row['album_id'];
					}
					$query = "INSERT INTO song (album_id, songname)VALUES ('";
					$query = $query . $albumid . "', '" .$songname."')";
					mysqli_query($db, $query)
							or die ('ERRORRR');
					
					//grabbing songid
					//adding linkname, generating linkid
					$query = "select song_id from song where songname='" .$songname. "'";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						$songid = $row['song_id'];
					}
					$query = "INSERT INTO link (song_id, link)VALUES ('";
					$query = $query . $songid . "', '" .$link."')";
					mysqli_query($db, $query)
							or die ('ERRORRRzzzz');
					
					//grabbing linkid
					//adding to playlist based on userid
					$query = "select link_id from link where link='" .$link. "'";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database for link");
					while($row = mysqli_fetch_array($result)) {
						$linkid = $row['link_id'];
					}
					$u = $_COOKIE['user'];
					$query = "select user_id from users where username='" .$u. "'";
					//echo $u;
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database for username");
					while($row = mysqli_fetch_array($result)) {
						$userid = $row['user_id'];
					}
					$query = "INSERT INTO playlist (link_id, user_id)VALUES ('";
					$query = $query . $linkid . "', '" .$userid. "')";
					mysqli_query($db, $query)
							or die ('ERRORRRzzzz');
					
					
					//echo "DATABASE UPDATED WITH: " .$songname ;
					//$last_id = mysql_insert_id();
					//$query = "INSERT INTO link (song_id, link)VALUES ('";
					//$query = $query . $last_id . "', '" .$link."')";
					//echo $query;
					//mysqli_query($db, $query)
					//or die ('ERRORRR');
					
					//echo "DATABASE UPDATED WITH: " .$link ;
					
					
		
		?>
		
        <p>
   
		 
		  <br>
		  
        </p>
              
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Company Name | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.dcarter.co.uk">design by dcarter</a> | <a href="login.php">Login</a> | <a href="logout.php" title="createaccount">Logout</a>
    </div>
  </div>
</body>
</html>
