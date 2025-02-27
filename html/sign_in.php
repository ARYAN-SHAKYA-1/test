<span class="heading"><b>Sign In</b></span>
<form onsubmit="return is_valid()" method="POST">
  <div class="form_area">
    <div class="name_area">
      <span class="form_text">Name</span>
      <div class="box">
        <input type="text" name="name" id="name" class="box_textbox" />
      </div>
    </div>
    <div class="email_area">
      <span class="form_text">Email</span>
      <div class="box">
        <input type="text" name="email" id="email" class="box_textbox" />
      </div>
    </div>
    <div class="password_area">
      <span class="form_text">Password</span>
      <div class="box">
        <input type="password" name="pass" id="pass" class="box_textbox" />
      </div>
    </div>
  </div>
  <div class="button_area">
    <input
      type="submit"
      value="Submit"
      class="btn_submit"
      name="s_submit"
    />
  </div>
</form>
 <?php 
 include "connection.php";
if(isset($_POST["s_submit"]))
{
  $name =$_POST['name'];
  $email =$_POST['email'];
  $pass =$_POST['pass'];
  
 $check="select id from user where email= '$email';";

 if(($conn->query($check))->num_rows >0){
   echo "<script> alert('email already exist')</script>";
 }else{
  $sql="INSERT INTO user (name, email, pass) values ('$name','$email','$pass');";
  if($conn->query($sql)=== TRUE){
    header("location:portfolio.php");
  }
}
$conn->close();
}
?> 