<?php include  "html/nav.php"?>
<section>
    <div class="main_box">

        <div  class="box "id="box1">
            <div class="box1_text">
                <span class="text">GOLD</span>
            </div>
            <div class="photo_area">
                <img class="img" src="photo/gold_photo.jpg" alt="Gold_photo">
            </div>
            <div class="ajax">
                <div class="price_area">
                    <span class="text" id="gold-value"></span>
                </div>
                <div class="button_index">
                    <button onclick="priceg()">Reload</button>
                </div>
            </div>
        </div>


        <div class="box" id="box2">
            <div class="box2_text">
                <span class="text">SILVER</span>
            </div>
            <div class="photo_area">
                <img class="img" src="photo/silver_photo.jpg" alt="Gold_photo">
            </div>
            <div class="ajax">
                <div class="price_area">
                    <span class="text" id="silver-value"></span>
                </div>
                <div class="button_index">
                    <button onclick="prices()">Reload</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "html/footer.php"?>