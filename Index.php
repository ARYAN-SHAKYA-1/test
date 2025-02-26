<?php include  "html/nav.php"?>
<section class="index_section">
    <main>

        <div class="main_box" id="box_one">
            <div class="main_box_text">
                <h1>Gold</h1>
            </div>
            <div class="inside_box" id="box_part_one">
                <div id="gold-value" class="box_value">
                    <div id="gold-value" class="box_text">
                        <!-- ajax -->
                        <div id="gold-vlaue"class="box_current_value">
                            
                        </div>
                    </div>
                    <div class="button_area" id="btn_login">
                        <input  onclick="getdata_g()"type="submit" value="reload" class="btn_submit" name="submit" />
                    </div>
                </div>
            </div>
        </div>


        <div class="main_box" id="box_two">
            <h1>Silver</h1>
            <div id="silver-value" class="box_value">
                <div id="silver-value" class="box_text">
                    <!-- ajax  -->
                </div>
                <div class="button_area" id="btn_login">
                    <input  onclick="getdata_s()"type="submit" value="reload" class="btn_submit" name="submit" />
              </div>
            </div>
        </div>


    </main>
    
</section>
<?php include "html/footer.php"?>