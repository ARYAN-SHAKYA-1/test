<?php include  "html/nav.php" ?>
<?php include "connection.php"?>
<link rel="stylesheet" href="css/portfolio.css" />
<section class="sec_portfolio">
  <div class="top_half">

  <div class="insert_data">
   <?php include "html/insert_data.php" ?>
  </div>

  </div>
  <div class="bottom_half">
    <div class="table">
      <table border="1">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Cost Price</th>
          <th>Current Price</th>
          <th>profit/loss</th>
        </tr>
      </table>
    </div>

    <div class="update_area">
      <span class="update_text">Want to change something?</span>
      <form onsubmit="ja/update.js" method="post">
        <div class="textbox">
          <input type="text" name="update" id="update" class="textbox" />
        </div>
        <div class="button">
          <input type="submit" value="submit" class="submit" id="submit" />
        </div>
      </form>
    </div>
  </div>
</section>
<?php include "html/footer.php"?>
