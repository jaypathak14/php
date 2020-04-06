



</head>
<body>
<h2> </h2>
<a href="download.php?file=UNIT-1.ppt">Click here</a>
</body>
</html>

<?php
if(!empty($_GET['file'])){
    $filename= basename($_GET["file"]);
    $filepath='E:/',$filename;
    if(!empty($filename)&& file_exits($filepath)){
        header()
    }

}