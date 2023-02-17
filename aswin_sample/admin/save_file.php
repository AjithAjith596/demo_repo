<?php

$conn=mysqli_connect("localhost","root","","login");


if(isset($_POST['save']))
{

	$filename=$_FILES['file']['name'];

	//$modified=$_FILES['myfile'] ['modified'];

	$destination="files/".$filename;

	$extension=pathinfo($filename,PATHINFO_EXTENSION);

	$file=$_FILES['file']['tmp_name'];

	$size=$_FILES['file']['size'];

	if(!in_array($extension,[ 'zip','pdf','png','csv','xlsx','docx','doc','txt','html','exe','ppt','gif','jpeg','jpg','php']))
	{

		echo' <script>alert("your file extension must be .zip,.pdf or .png,docx,.xlsx,.doc,.txt,.html,.exe,.ppt,.gif,.jpeg,.jpg,.php,.csv");window.location.href="home.php"</script>';
    }

    elseif ($_FILES['file']['size']  >  1000000000) 
    {
    

    	echo'<script>alert("file is too large");window.location.href="home.php"</script>';
    }

    else{

    		if (move_uploaded_file($file,$destination)) 

    		{

    			$sql="insert into storage(name,size) values('$filename','$size')";

    	    }

    	    if(mysqli_query($conn,$sql))
    	    {

    	    	echo '<script>alert("file uploaded successfully"); window.location.href = "home.php"</script>'; 

    	    }

    	    else
    	    {

    	    	echo '<script>alert("failed to upload "); window.location.href = "home.php"</script>'; 
    	    	
    	    }



    }

 

}


/* if (isset($_GET['file_id'])) {

 	
 	$store_id=$_GET['file_id'];

 	$sql="select * from storage where store_id=$store_id";

 	$result=mysqli_query($conn,$sql);

 	$file=mysqli_fetch_assoc($result); 


 	$filepath='files/' .$file['name'];

    

 	if(file_exists($filepath))
 	{

 		header('content-type:application/ocet-stream');

 		header('content-description:File Transfer');

 		header('content-disposition:attachement; filename=' .basename($filepath));
         header('Expires: 0');
            header('Cache-Control:must-revalidate');
            header('Pragma:public');
            header('Content-Length: ' . filesize('files/'.$file['name']));
            flush(); 
            readfile('files/'.$file['name']);

            exit;


 	}

 }
     */



?>