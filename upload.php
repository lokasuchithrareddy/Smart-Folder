<?php 
if(isset($_POST['submit']))
{
$file1 = $_FILES['file']['name'];

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);
$a='upload/';
if(!is_dir($a))
mkdir($a);

$b=$_POST['path'];

$description= $_POST['description_entered'];
	if (isset($name)) 
	{

        if (!empty($name)) 
        {
           $path=$a.$b.'/';
			if(!is_dir($path))
			{
    			mkdir($path);
			}
        }
    $k=move_uploaded_file($tmp_name, $path.$file1);
    $con=new mysqli('localhost','root','','myproject');
    $sql="select filename from files";
    $result = $con->query($sql);
    $n=1;
    if ($result->num_rows > 0)
     {
    while($row = $result->fetch_assoc())
    {
        if($row["filename"]==$name)
            {
                $n=2;
                break;
            }
    }
  }
  if($n==1)
  {
    $sql="INSERT INTO files(description,path,filename) VALUES('$description','$b','$name')";
    if($con->query($sql))
	{
    echo "<h1>The file</h1> ". basename( $_FILES['file']['name']). "<h1>is uploaded</h1>";
	}
    else
	{
    echo "<h1>Problem uploading file</h1>";
	}
    }
    else
	{
        printf("<h1Already uploaded");
	}
    }

    else
	{
        echo "Please upload file";
	}

}
?>






