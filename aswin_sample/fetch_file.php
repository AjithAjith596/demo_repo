<?php
   include('session.php');

       //include('C:/xampp/ak/htdocs/aswin_sample/admin/save_file.php');
   include('download.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left"></h2>
                    </div>
                    
                      <table class='table table-bordered table-striped'>
                       
                        

                     <thead>

                    <td>Store_id</td>
                    <td>name</td>

                    <td>size</td>
                    <td>download</td>

                </thead>

                <tbody>

                    <?php foreach ($files as $file): ?>

                    <tr>



                        <td><?php echo $file['store_id']  ?></td>
                        <td><?php echo $file['name']  ?></td>
                        <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                        <td><a href="download.php?file_id=<?php echo $file['name'] ?>"> download</a></td>

                         <!---   <td><a href="/aswin_sample/admin/files/<?php #echo $file['name']  ?>" download>download</a></td>-->

                    </tr>

                <?php endforeach ;?>
                        

                    

                </tbody>
                


            </table>
            
                   
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>