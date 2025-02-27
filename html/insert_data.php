<?php
    include "connection.php";
    if(isset($_POST['insert'])){
        $name=$_POST['name'];
        $qty=$_POST['quantity'];
        $cp=$_POST['cost_price'];

        $check="select id,name,email,pass from user;";
        $res=$conn->query($check);

        if($res->num_rows >0){
        $row= $res->fetch_assoc();
        $u_id=$row['id'];
        $sql="INSERT INTO ITEM(itm_name,itm_qty,itm_cp,user_id) values('$name','$qty','$cp','$u_id')";}
        if($conn->query($sql)=== TRUE){
            header("loaction:portfolio.php");
        }
    }
?>
<span class="heading_text">Insert what you have 
    <?php
    echo $row['name'];
    ?>
</span>
    <form action="" method="post">
      <div class="text_box">
        <span class="text">name</span>
        <input type="text" name="name" id="item">
      </div>
      <div class="text_box">
        <span class="text">quantity</span>
      <input type="number" name="quantity" id="qty">
      </div>
      <div class="text_box">
        <span class="text">cost_price</span>
      <input type="number" name="cost_price" id="cp">
      </div>
      <div class="submit">
        <input type="submit" value="insert" name="insert">
      </div>
    </form>
