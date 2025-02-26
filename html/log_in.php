<span class="heading"><b>Log In</b></span>
<form onsubmit="return is_it_valid()"action="" method="post">
    <div class="form_area">
        <div class="email_area">
            <span class="form_text">Email</span>
            <div class="box">
                <input type="text" name="l_email" id="l_email" class="box_textbox" />
            </div>
        </div>
        <div class="password_area">
            <span class="form_text">Password</span>
             <div class="box">
               <input type="password" name="l_pass" id="l_pass" class="box_textbox" />
            </div>
        </div>
    </div>
    <div class="button_area" id="btn_login">
        <input type="submit" value="Submit" class="btn_submit" name="l_submit" />
    </div>
</form>
<?php 
include "connection.php";
if(isset($_POST["l_submit"]))
{
  $l_email =$_POST['l_email'];
  $l_pass =$_POST['l_pass'];
  
  $l_check="select id,name,email,pass from user where email= '$l_email';";
  $res=$conn->query($l_check);

  if($res->num_rows >0){
    $row= $res->fetch_assoc();
    echo "e_".$l_pass."b_".$row['pass'];
    if(strcmp($row['pass'],$l_pass)===0){
        echo"hello ".$row['name'];
        header("location:portfolio.php");
     }
  }else{
    echo"<script>alert('email not found')</script>";
  }
 $conn->close();
}
?> 
