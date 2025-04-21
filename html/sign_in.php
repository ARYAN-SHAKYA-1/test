<span class="heading"><b>Sign In</b></span>
<form onsubmit="return isvalid()" method="POST">
  <div class="form_area">
    <div class="name_area">
      <span class="form_text">Name</span>
      <div >
        <input type="text" name="name" id="name" class="box_textbox" />
      </div>
    </div>
    <div class="email_area">
      <span class="form_text">Email</span>
      <div >
        <input type="text" name="email" id="email" class="box_textbox" />
      </div>
    </div>
    <div class="pan_no_area">
      <span class="form_text">Pan Number</span>
      <div >
        <input type="text" name="pan_no" id="pan_no" class="box_textbox" />
      </div>
    </div>
    <div class="password_area">
      <span class="form_text">Password</span>
      <div >
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
 session_start();
 include "connection.php";
if(isset($_POST["s_submit"]))
{
  $name =$_POST['name'];
  $pan_no=$_POST['pan_no'];
  $email =$_POST['email'];
  $pass =$_POST['pass'];
 $check1="select id from user where email= '$email';";
 $check2="select id from user where pan_no= '$pan_no';";

 if((($conn->query($check1))->num_rows >0)&&(($conn->query($check2))->num_rows >0)){
   echo "<script> alert('email or pan_no already exist')</script>";
 }else{
  $sql="INSERT INTO user (name,pan_no, email, pass) values ('$name','$pan_no','$email','$pass');";
  if($conn->query($sql)=== TRUE){
    $SESSION['name']=$name;
    header("location:sign_in.php");
  }
}
$conn->close();
}
?> 