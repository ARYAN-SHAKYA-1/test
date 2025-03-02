<span class="update_text">Want to change something?</span>
<form onsubmit="return valid_update()" method="post">
  <div class="textbox">
    <span>id</span>
    <input type="number" name="id" id="id" class="textbox" />
  </div>
  <div class="textbox">
    <span>name</span>
    <input type="text" name="name" id="name" class="textbox" />
  </div>
  <div class="textbox">
    <span>quantity</span>
    <input type="number" name="qty" id="qty" class="textbox" />
  </div>
  <div class="textbox">
    <span>cost price</span>
    <input type="number" name="cp" id="cp" class="textbox" />
  </div>
  <div class="button">
    <input type="submit" value="submit" name="submit" id="submit" />
  </div>
</form>
<?php
include "connection.php";
if(isset($_POST['submit'])){
    
 $id=$_POST['id'];
 $name=$_POST['name'];
 $qty=$_POST['qty'];
 $cp=$_POST['cp'];

 $sql="update item set itm_name= '$name',itm_qty= $qty,itm_cp= $cp where itm_id=$id";
 if($conn-> query($sql)=== TRUE){
    echo  "<script>alert('data updated reload the page')</script>";
}else{
    echo  "<script>alert('failed to data updated')</script>";
}
$conn->close();
}

?>