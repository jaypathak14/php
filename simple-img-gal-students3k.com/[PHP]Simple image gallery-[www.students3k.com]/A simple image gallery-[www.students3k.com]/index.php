<?php
require_once 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo $title; ?></title>
<LINK REL=StyleSheet HREF="<?php echo $css_file; ?>" TYPE="text/css">
</head>
<body background="">

<center>

<?php


$target='.';

if ( isset($_GET["target"])==TRUE ){
	$target=$_GET["target"];
	}

	

echo "<h4>".$title."</h4>";

if ($target!="" and  $target!='.') {

	echo "<h5>Album :".substr($target,2)."</h5>";
	echo "<h5><a href=\"index.php?target=".dirname($target);
	echo "\">$back_text</a></h5>";
	}
?>

<TABLE>
<TR>

<?php


$count=1;
echo "<TR>";


foreach(glob($target.'/*',GLOB_ONLYDIR)as $fisier){
	if ($target!=$fisier){	
	?>
	<TD>
	<A HREF="index.php?target=<?php echo $fisier; ?>" 
	target="" style="text-decoration:none"><IMG SRC="<?php echo $default_album_icon; ?>" BORDER="0">
	<div style="text-align: center"><?php echo substr($fisier,2); ?><BR></div></A></FONT></TD>
	<?php
		$count++;
		if ( $count>$dir_on_line ){
		$count=1;
		echo "</TR><TR>";
		}
	} 
	}

?>
</TR>

<TR>
<?php
$count=1;

//echo $target.'/*.'.$file_ext;

foreach(glob($target.'/*.*')as $fisier){
	$path_parts = pathinfo($fisier);
	
	if ( strtoupper ($path_parts['extension'])=='JPG' or
		strtoupper ($path_parts['extension'])=='JPEG' or
		strtoupper ($path_parts['extension'])=='JPE' or
		strtoupper ($path_parts['extension'])=='JIFF' or
		 strtoupper ($path_parts['extension'])=='TIF'  ){
	?>
	<TD>
	<A HREF="file.php?file=<?php echo $fisier; ?>" target="" 
	style="text-decoration:none"><IMG SRC="tmb.php?file=<?php echo $fisier; ?>" 	 BORDER="0" >
	<div style="text-align: center"><?php echo basename($fisier); ?>
	<BR>Size: <?php echo (int)(filesize($fisier)/1024)."KO"; ?></div></A></FONT></TD>
	<?php
	$count++;
	if ($count>$foto_on_line){
	$count=1;
	echo "</TR><TR>";
	}


	} //end show only this type of files
	
	}	// end read all the current folder

?>
</TR>


</TABLE>
<br><br><br><br>
<div align=right><b>
Copyright@2013,Karthikh Venkat | <a href="http://students3k.com/">Students3k</a>
</b>
</div>
