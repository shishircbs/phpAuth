<?php
  include('connection.php');
  $username=$_POST['user'];
  $password=$_POST['pass'];

        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username=mysqli_real_escape_string($con, $username);
        $password=mysqli_real_escape_string($con, $password);
        
        $sql="select * from login where username = '$username' and password='$password'";
        $result = mysqli_query($con, $sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);

        if($count==true)
        {
            include('thank.html');
        }
        else
        {
            include('log-in.html');
            ?>
            <script>
                alert('Wrong credentials!');
                </script>
            <?php
 }

?>