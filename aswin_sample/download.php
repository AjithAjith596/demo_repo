<?php

 $conn=mysqli_connect("localhost","root","","login");

$sql="select * from storage";
$result=mysqli_query($conn,$sql);
$files=mysqli_fetch_all($result,MYSQLI_ASSOC);


 if (isset($_GET['file_id'])) {

    
    $store_id=$_GET['file_id'];
    
    /* $sql="select * from storage where store_id='".$store_id."'";
    $result=mysqli_query($conn,$sql);

    $file=mysqli_fetch_assoc($result); print_r($file); */


    $filepath='admin/files/' .$_GET['file_id'];
    $file='admin/files/' .$_GET['file_id'];


    if(file_exists($filepath))
    {

     /*   header('content-type:application/ocet-stream');                                                              

        header('content-description:File Transfer');

        header('content-disposition:attachement; filename=' .basename($filepath));
         header('Expires: 0');
            header('Cache-Control:must-revalidate');
            header('Pragma:public');
            header('Content-Length: ' . filesize('/aswin_sample/admin/files/'.$file['name']));
            flush(); 
            readfile('files/'.$file['name']); */




    $filename = basename($file);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    header('Content-Type: ' . finfo_file($finfo, $file));
    header('Content-Length: '. filesize($file));
    header(sprintf('Content-Disposition: attachment; filename=%s',
        strpos('MSIE',$_SERVER['HTTP_REFERER']) ? rawurlencode($filename) : "\"$filename\"" ));
    ob_flush();
    readfile($file);

            exit;


    }

 }




?>