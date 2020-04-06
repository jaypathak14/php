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

if (isset($_GET["file"])==TRUE) {
	$fisier=$_GET["file"];
	
	}
	else
	{
		exit();
	}
?>
<h4><b><?php echo $title; ?></b></h4>
<?php
echo "<h5><a href=\"index.php?target=".dirname($fisier);

// terminam sirul cu nume
echo "\">$back_text</a></h5>";
?>

<IMG SRC="<?php echo $fisier.'" width="'.$width_image_on_page.'" height="'.$height_image_on_page.'"'; ?> BORDER="0">
<div align="center"><b>
<?php

$exif = exif_read_data($fisier, 'EXIF');
echo $resolution.$exif["COMPUTED"]["Width"].' x '. $exif["COMPUTED"]["Height"];
echo '<br />'.$made_with.$exif["Make"].' '.$exif["Model"];

echo '
</b>
</div>
<div align="right">
'.$save_explain.'
</div>
<br><br>
<div align=right><b>
'.$copyright.'
</b>
</div>
';
?>