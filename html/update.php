<form onsubmit="return valid_update()" method="post">
  <div class="textbox">
    <span>id</span><br>
    <input type="number" name="id" id="id" class="textbox" />
  </div>
  <div class="textbox">
    <span>name</span><br>
    <input type="text" name="name" id="name" class="textbox" />
  </div>
  <div class="textbox">
    <span>quantity</span><br>
    <input type="number" name="qty" id="qty" class="textbox" />
  </div>
  <div class="textbox">
    <span>cost price</span><br>
    <input type="number" name="cp" id="cp" class="textbox" />
  </div>
  <div class="button">
    <input type="submit" value="update" name="update" id="submit" />
    <!-- <input type="submit" value="delete" name="submit" id="delete" /> -->

  </div>
</form>
<?php
include "connection.php";
if(isset($_POST['update'])){
    
 $id=$_POST['id'];
 $name=$_POST['name'];
 $qty=$_POST['qty'];
 $cp=$_POST['cp'];


 $sql="UPDATE item set itm_name= '$name', itm_qty= $qty, itm_cp= $cp where itm_id=$id";
 if($conn-> query($sql) === TRUE){
    header("location:portfolio.php");
}else{
    echo  "<script>alert('failed to data updated')</script>";
}
$conn->close();
}
?>