
<form  method="post">
  <div class="textbox">
    <span>id</span><br>
    <input type="number" name="id" id="id" class="textbox" />
  </div>
  <div class="button">
    <input type="submit" value="delete" name="delete" id="submit" />

  </div>
</form>

<?php
include "connection.php";
if(isset($_POST['delete'])){
  $check3 = "SELECT user_id FROM item WHERE user_id = '" . $_SESSION['id'] . "'";
  $res=$conn->query($check3);
    if($row->num_row>0){
      echo "<script>alert('user id doesnot match')</script>";
    }else{

    
     $id=$_POST['id'];

     $sql="DELETE FROM item where itm_id=$id";
     if($conn-> query($sql)=== TRUE){
         header("location:portfolio.php");
    }else{
       echo  "<script>alert('failed to delete updated')</script>";
    }
   }
  }
?>