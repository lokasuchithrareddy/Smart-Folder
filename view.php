<table width="80%" border="1">
    <tr>
    <td>File Description</td>
    <td>File Name</td>
    <td>View</td>
    </tr>
    <?php
    $con=new mysqli('localhost','root','','myproject');
    $sql="select id,description,filename from files";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
     {
    while($row = $result->fetch_assoc())
    {
  ?>
        <tr>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['filename'] ?></td>
        <td><a href="upload/<?php echo $row['filename']?>" target="_blank">view file</a></td>
        </tr>
        <?php
	 }}
 ?>
</table>