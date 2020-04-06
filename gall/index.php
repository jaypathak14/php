<html> 
<body> 
<table width="744" border="1"> 
<tr>
<th <a href="index.php?option=upload" style="margin-left:100px">Upload image</a> height="41" scope="cow">

<a href="index.php?option=gallery" style="margin-left:10px">Image

Gallery</a>

</th> </tr><tr>

<th <?php @$gall=$_GET['option']; switch (Sgall)

height="401" scope="row">

case 'upload':

include('upload.php'); break; case 'gallery':

include ('gallery.php'); break;

></th></tr> table </html>