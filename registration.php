
<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
    section{
        margin: -20px;
    }
</style>

</head>
<body>
         <section>
        <div class="reg_img">
            <br>
            <div class="box2">
                <br>
                <h1 style="text-align: center;font-size: 35px; margin-top: 20px; font-family: lucida Console;"> SMART LIBRARY</h1><br><br><br><br>

                <h1 style="text-align: center; font-size: 25px;">User Registration </h1><br><br>
                <form name="Registration" action="" method="post">
                    <div class="login">
                        <input class="form-control" type="text" name="First" placeholder="First name" required=""><br><br>
                        <input class="form-control"  type="text" name="Last" placeholder="Last name" required=""><br><br>
                        <input class="form-control"  type="text" name="Username" placeholder="Username" required=""><br><br>
                    <input  class="form-control" type="password" name="Password" placeholder="Password" required=""><br><br>
                    <input class="form-control" type="text" name="Roll" placeholder="Roll No" required=""><br><br>
                    <input class="form-control"  type="text" name="Email" placeholder="Email" required=""><br><br>
                    <input  class="full-control" type="text" name="Contact" placeholder="Phone no" required=""> <br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black;" width="70px" height="30px">
                    </div>
                </form>
            </div>
        </div>
    </section>    
    <?php
    if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT Username from `student`";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
       if($row['Username']==$_POST['Username'])
       {
        $count=$count+1;
       }
    }
    if($count==0)
{mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[First]','$_POST[Last]','$_POST[Username]','$_POST[Password]','$_POST[Roll]','$_POST[Email]','$_POST[Contact]');");
?>
<script type="text/javascript">
    alert("Registration successful");
    </script>
<?php
}

else{
    ?>
    <script type="text/javascript">
    alert("The username already exist.");
    </script>
    <?php
}
}
?>
</body>
</html>