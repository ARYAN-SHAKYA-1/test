<?php include  "html/nav.php"?>
<script src="ja/valid.js"></script>
<section class="sign_in_section">
  <div class="form_box"> 
    <span class="heading"><b>Sign In</b></span>
    <form  method="get">
        <div class="form_area">
            <div class="name_area">
             <span class="form_text">Name</span>
             <div class="box">
             <input type="text" name="name" id="name" class="box_textbox" />
             </div>
            </div>
            <div class="email_area">
                <span class="form_text">Email</span>
                 <div class="box">
                 <input type="text" name="email" id="email" class="box_textbox" />
                </div>
            </div>
            <div class="password_area">
                <span class="form_text">Password</span>
                <div class="box">
                    <input type="password" name="pass" id="pass" class="box_textbox" />
                </div>
            </div>
        </div>
        <div class="button_area">
          <input type="submit" value="submit" class="btn_submit" name="submit" onclick="is_valid()"/>
        </div>
    </form>
  </div>
  <div class="form_box" id="login">
     <span class="heading"><b>Log In</b></span>
    <form action="" method="post">
        <div class="form_area">
            <div class="email_area">
                <span class="form_text">Email</span>
                <div class="box">
                    <input type="text" name="email" id="email" class="box_textbox" />
                </div>
            </div>
             <div class="password_area">
                <span class="form_text">Password</span>
                <div class="box">
                    <input type="password" name="pass" id="pass" class="box_textbox" />
                </div>
             </div>
        </div>
        <div class="button_area" id="btn_login">
          <input type="submit" value="submit" class="btn_submit" name="submit" />
        </div>
      
    </form>
  </div>
</section>
<?php include "html/footer.php"?>
