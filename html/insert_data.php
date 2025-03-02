<?php
  session_start();
    include "connection.php";
    if(isset($_POST['insert'])){
        $name=$_POST['name'];
        $qty=$_POST['quantity'];
        $cp=$_POST['cost_price'];

        if (isset($_SESSION['id'])) {
          $u_id = $_SESSION['id'];
         $sql="INSERT INTO ITEM(itm_name,itm_qty,itm_cp,user_id) values('$name','$qty','$cp','$u_id')";
         if($conn->query($sql)=== TRUE){
            header("location:portfolio.php");
          }else{
           echo"<script>alert('error listing items')</script>";
         }
         $conn->close();
      }else{
          echo  "<script>alert('User not logged in');</script>";
      }
    }
?>
<span class="heading_text">Insert what you have 
    <?php
    echo $_SESSION['name'];
    ?>
</span>
    <form onsubmit="return valid()" method="post">
      <div class="text_box">
        <span class="form_text" >name</span>
        <input type="text" name="name" id="item">
      </div>
      <div class="text_box">
        <span class="form_text" >quantity</span>
      <input type="number" name="quantity" id="qty">
      </div>
      <div class="text_box">
        <span class="form_text" >cost_price</span>
      <input type="number" name="cost_price" id="cp">
      </div>
      <div class="submit">
        <input type="submit" value="insert" name="insert">
      </div>
    </form>
