<?php
$con=myusqli_connect('localhost','root','','tutorial');

$query="SELECT * from person";
$run=mysqli_query($con,$query);
$total=mysqli_num_rows($run);
if(total !=0){
    ?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th colspan="2">Operations</th>
    </tr>    
    <?php
    while($data=mysqli_fetch_assoc($run))
    {
        echo"<tr>
                <td>".$data['id']."</td>
                <td>".$data['Name']."</td>
                <td>".$data['Email']."</td>
                <td><a href='update.php?i=$data[id]&n=$data[Name]&e=$data[Email]'>Edit</a></td>
                <td><a href='delete.php?i=$data[id]'>Delete</a></td>
            </tr>";
                
    }
}
else
{
    echo "no record found";
}
?>
</table>