<?php




echo $_GET['e'];
?>
<html>
    <head>

    </head>
    <body>
        <form action="" method="GET">
            Id:<input type="text" name="id" value="<?php echo $_GET['i']; ?>"><br/>
            Name: <input type="text" name="username" value="<?php echo $_GET['n']; ?>"><br/>
            Email: <input type="text" name="email" value="<?php echo $_GET['e']; ?>"><br/>
            <input type="submit" name="submit" value="update"/> 
        </form>
        <?php
        if($_GET['submit'])
        {
            $id=$_GET['id']
        }
    </body>
</html>