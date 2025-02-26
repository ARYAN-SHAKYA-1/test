<?php include  "html/nav.php"?>
<section class="index_section">
    <main>

        <div class="main_box" id="box_one">
            <div class="main_box_text">
                <h1>Gold</h1>
            </div>
            <div class="inside_box" id="box_part_one">
                <div class="box_value">
                    <div class="box_text">
                        <!-- ajax -->
                        <div id="gold-vlaue"class="box_current_value">
                            170,300.23
                        </div>
                    </div>
                    <div class="index_reolad" >
                        <input type="submit" value="reload" class="reload" name="submit" />
                    </div>
                </div>
            </div>
        </div>


        <div class="main_box" id="box_two">
            <div class="main_box_text">
                <h1>Silver</h1>
            </div>
            <div class="inside_box" id="box_part_two">
                <div class="box_value">
                    <div class="box_text">
                        <!-- ajax -->
                        <div id="silver-vlaue"class="box_current_value">
                          1,970.05
                        </div>
                    </div>
                    <div class="index_reolad" >
                        <input type="submit" value="reload" class="reload" name="submit"  />
                     </div>
                </div>
            </div>
        </div>


    </main>
    
</section>
<?php include "html/footer.php"?>