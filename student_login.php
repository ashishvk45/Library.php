<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">

    section{
        margin:-20px ;
    }
</style>

</head>

<body>  
    <section>
        <div class="log_img">
            <br>
            <div class="box1">
                <br><br>
                <h1 style="text-align: center; color: rgb(253, 102, 56); font-size: 35px; font-family: lucida Console;"> SMART LIBRARY</h1><br><br><br><br>
                <h1  style="text-align: center;color: rgb(253, 102, 56); font-size: 25px;">USER LOGIN </h1><br><br>
                <form name="login" action="" method="post">
                    <div class="login">
                    <input type="text" name="Username" placeholder="Username" required=""><br><br><br>
                    <input type="password" name="Password" placeholder="Password" required=""><br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black ;width: 70px; height: 30px;" >
                    </div>
                </form>
          <p><br> <br>
           
           <br> &nbsp &nbsp &nbsp &nbsp &nbsp<a style="color:red;" href=""> Forget password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            New to this website?
            <a style="color: green;"  href="registration.php">Sign Up</a> &nbsp
          </p>
          
            </div>
        </div>
    </section>
    <?php
    if(isset($_POST['submit']))
    {
        $count=0;
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE Username='$_POST[Username]' && Password='$_POST[Password]';");
        $count=mysqli_num_rows($res);
       if($count==0)
{
?>
<script type="text/javascript">
    alert("The username and password doesn't match.");
    </script>
    <!------------
    <div class="alert alert-danger" style=" text-align:center; width: 1300px; margin: left 300px; color:red;padding: -30px;">
        <strong>The password and password does't match</strong>
    </div>
    ------------->
<?php
}
else{
?>
<script type="text/javascript">
    window.location="books.php"
</script>
<?php
}

    }
    ?>

</body>
</html>