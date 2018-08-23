<html>
<body>
<form method="post" style="position: absolute;left : 500px;top : 300px;border : 4px ;">
<label style="font-size: 24px;">ENTER THE OTP SENT ON YOUR MAIL</label>
<br>
<br>
<input type="text" id="username" name="t1" placeholder="Enter Otp" class="input-xlarge" required><br>
<br>
<input type="submit" name="submit" value="Submit Otp">
</form>


<?php
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
    $n=$_POST["t1"];
    $sqll="SELECT * FROM forgot where code='$n'";
    $ress=mysqli_query($connect,$sqll);
    $roww=mysqli_fetch_row($ress);
    if($roww[0] == $n)
    {
       echo '<script type="text/javascript">window.location="faq.php";</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("WRONG");</script>';
    }
}



?>

</body>
</html>
