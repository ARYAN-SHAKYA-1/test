<?php include  "html/nav.php" ?>
<link rel="stylesheet" href="css/portfolio.css" />
<section class="sec_portfolio">
  <div class="top_half">

  <div class="insert_data">
   <?php include "html/insert_data.php" ?>
  </div>

  </div>
  <div class="bottom_half">
    <div class="table">
    <div>
      <table border="1">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Cost Price</th>
          <!-- <th>Current Price</th>
          <th>profit/loss</th> -->
        </tr>
        <?php
          include "html/display.php";
        ?>
      </table>
    </div>
    </div>

    <div class="update_area">
      <?php
      include "html/update.php"
      ?>
    </div>
  </div>
</section>
<?php include "html/footer.php"?>
