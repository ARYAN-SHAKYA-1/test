<?php include  "html/nav.php"?>
<section>
  <div class="form_box">
    <form action="" method="post">
        <span class="heading"><b>Sign In</b></span>
        <div class="form_area">
            <div class="name_area">
             <span class="form_text">Name</span>
             <div class="box">
             <input type="text" name="name" class="box_textbox" />
             </div>
            </div>
            <div class="email_area">
                <span class="form_text">Email</span>
                 <div class="box">
                 <input type="text" name="email" class="box_textbox" />
                </div>
            </div>
            <div class="password_area">
                <span class="form_text">Password</span>
                <div class="box">
                    <input type="password" name="pass" class="box_textbox" />
                </div>
            </div>
        </div>
        <div class="button_area">
          <input type="submit" value="submit" name="submit" />
        </div>
    </form>
  </div>
  <div class="form_box">
    <form action="" method="post">
        <span class="heading"><b>Log In</b></span>
        <div class="form_area">
            <div class="email_area">
                <span class="form_text">Email</span>
                <div class="box">
                    <input type="text" name="email" class="box_textbox" />
                </div>
            </div>
             <div class="password_area">
                <span class="form_text">Password</span>
                <div class="box">
                    <input type="password" name="pass" class="box_textbox" />
                </div>
             </div>
        </div>
        <div class="button_area">
          <input type="submit" value="submit" name="submit" />
        </div>
      
    </form>
  </div>
</section>
<?php include "html/footer.php"?>
