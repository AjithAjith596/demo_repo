

<?php
   
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $flag=1;
      $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session("username");
         $_SESSION["login_user"] = $email;
		    $_SESSION["name"] = $row['username'];
         echo '<script>alert("Succesfully Registered"); window.location.href = "welcome.php"</script>';
       //  header("location: welcome.php");
      }else {
         $error = "Invalid login";
         echo '<script>alert("invalid login"); window.location.href = "login.php"</script>';
        // header("location: sigin.php");
      }
   }
?>
