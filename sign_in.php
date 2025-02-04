<?php include  "html/nav.php"?>
<section>
    <div class="sign_in">
        <form action="" method="post">
        <span class="heading"><h3>Sign In</h3></span>
        <div class="name_area">
            <span class="form_text">Name</span>
            <div class="box">
                <input type="text" name="name" class="box_textbox">
            </div>
        </div>
        <div class="email_area">
            <span class="form_text">Email</span>   
            <div class="box">
                <input type="text" name="email" class="box_textbox">
            </div>

        </div>
        <div class="password_area">
            <span class="form_text">Password</span>
            <div class="box">
                <input type="password" name="pass" class="box_textbox">
            </div>

        </div>
        <div class="button_area">
            <input type="submit" value="submit" name="submit">
        </div>
        </form>
    </div>
    <div class="log_">
    <span class="heading"><h3>Log In</h3></span>
    <form action="" method="post">
        <div class="email_area">
            <span class="form_text">Email</span>   
            <div class="box">
                <input type="text" name="email" class="box_textbox">
            </div>

        </div>
        <div class="password_area">
            <span class="form_text">Password</span>
            <div class="box">
                <input type="password" name="pass" class="box_textbox">
            </div>

        </div>
        <div class="button_area">
            <input type="submit" value="submit" name="submit">
        </div>
        </form>
    </div>
</section>
<?php include "html/footer.php"?>