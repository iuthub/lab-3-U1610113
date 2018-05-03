<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/3-music/viewer.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		
		
		<div id="listarea">
			<ul id="musiclist">
				<!-- <?php
if ($handle = opendir('songs')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "*.txt") {
        	?>
<a href="songs/<?php echo$entry?>""><li class="mp3item"><?php
            echo "$entry <br>";
            ?>
            </li></a><?php
        }
    }
    closedir($handle);
}
?></li> -->
	<?php
foreach (glob("songs/*.mp3") as $mus) {
	?>
    <a href="<?php echo $mus ?>""><li class="mp3item">
    	<?php
    echo basename($mus, "songs") . "<br>";
    ?>
    </li></a>
    <?php
}
?>

<?php
foreach (glob("songs/*.txt") as $tekst) {
	?>
    <a href="<?php echo $tekst ?>""><li class="playlistitem">
    	<?php
    echo basename($tekst, "songs") . "<br>";
    ?>
    </li></a>
    <?php
}

$Playlist = $_R

?>


			</ul>
		</div>
	</body>
</html>