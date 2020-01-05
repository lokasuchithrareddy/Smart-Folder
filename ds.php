<table width="80%" border="1">
    <tr>
    <th>File Description</th>
    <th>File Name</th>
    <th>View</th>
    </tr>
    <?php
    $con=new mysqli('localhost','root','','myproject');
    $sql="select description,path,filename from files";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
     {
    while($row = $result->fetch_assoc())
    {
        if("DataStructures"==$row['path'])
        { 
  ?>
        <tr>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['filename'] ?></td>
        <td><a href="upload/DataStructures/<?php echo $row['filename']?>" target="_blank">view file</a></td>
        </tr>
        <?php
     }}}
     else{
?>
        <tr><td colspan="3" align="center">No files exist</td></tr>
        <?php
    }?>
</table>