<?php include "connection.php";
if(session_status() ==PHP_SESSION_NONE)
{?>
    <div class="button_frame">
        <div class="signin_button">
         <label for="btn">
           <button name="btn" class="btn_nav">
             <a class="link" href="sign_in.php" class="button_link"
               ><span class="link_text">Sign In</span></a
                >
              </button>
            </label>
          </div>
     </div>
<?php
}
else{?>
    <div class="button_frame">
        <div class="signin_button">
         <label for="btn">
           <button name="btn" class="btn_nav">
             <a class="link" href="portfolio.php" class="button_link"
               ><span class="link_text">Portfolio</span></a
                >
              </button>
            </label>
          </div>
     </div>
<?php } ?>