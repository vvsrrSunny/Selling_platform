    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="<?php echo base_url();?>js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        
    </script>
    <!-- <link href="//fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    -->
    <?php 
            if (isset($_COOKIE["email"]))
            $_SESSION["email"] = $_COOKIE["email"];
            
            
        ?>

    </script>
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1100px;height:380px;overflow:hidden;visibility:hidden; background: grey">
        <!-- Loading Screen -->
       <!--  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div> -->
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1100px;height:380px;overflow:hidden;">
            <div data-p="170">
                <img data-u="image" src="<?php echo base_url();?>/img/001.jpg" />
                <div data-t="0" style="position:absolute;top:320px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Your greatest deal ahead </div>
            </div>
            <div data-p="170">
                <img data-u="image" src="<?php echo base_url();?>/img/002.jpg" />
                <div data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">A joyfull office</div>
            </div>
            <div data-p="170">
                <img data-u="image" src="<?php echo base_url();?>img/003.jpg" />
                <div data-t="2" style="position:absolute;top:30px;left:-505px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">new</div>
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

<script>
  
  function mycall(content) {
    
        //alert(content);
        
        var url="<?php echo base_url();?>"+content;

        window.location.href = url;

    }


</script>
<br>

<!-- code for middle part -->
<div id="box-orange">
    <div id="lcontent">
      <div id="ltcontent">
      <div id="lticontent">
    
    <img src="<?php echo base_url();?>/img/happyone.jpg" alt="Girl in a jacket" width="100%" height="95%">
    </div>
    <div id="gap">
      
    </div>
    <div id="lttxcontent">
      <br>
      <h3 style="top: 10px">Sell at best</h3>
      
      
      
      <?php 
        
            if (isset($_SESSION["email"])) {
              $route="'Additem'";
               echo '<h5> Our product users are one of the best satisfying rate. <br>
            Join our elite groups and follow us, have a bright feature and sell you are product here.
      </h5>
               <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">view now!</button>';
            } else {
              $route="'Login'";
                echo '<h5> Our product users are one of the best satisfying rate. <br>
            Join our elite groups and follow us, have a bright feature and sell you are product here.
      </h5>
        <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">view now!</button>';
            }
        ?>
    </div>

    </div>
    <div id="lbcontent">
      <div id="lticontent">
    
    <img src="<?php echo base_url();?>/img/happygroup.jpg" alt="Girl in a jacket" width="100%" height="95%">
    </div>
    <div id="gap">
      
    </div>
    <div id="lttxcontent">
      <br>
      <h3 style="top: 10px">Your Wishes</h3>
      
      
      <?php 
        
            if (isset($_SESSION["email"])) {
              $route="'Wishlist'";
               echo '<h5>Our culture is the best and crazy one, you can do what ever you like for your wishes. <br>
            You life your wish</h5>
               <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">View now !</button>';
            } else {
              $route="'Login'";
                echo '<h5>Our culture is the best and crazy one, you can do what ever you like for your wishes. <br>
            You life your wish</h5>
        <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">View now !</button>';
            }
        ?>
    </div>

    </div>

    </div>
    <div id="rcontent">
      <img src="<?php echo base_url();?>/img/deal.jpg" alt="Girl in a jacket" width="100%" height="50%">
      <br><br>
      <h3>Best Deals</h3>
      <!-- <h5>Try our best deals and with proper assurance, we could able to win 100 persent success rate in bringing 
        happyness to the people with dreams. <br>Never thing a you have small room to buy and sell</h5> -->
        <?php 
        
            if (isset($_SESSION["email"])) {
              $route="'Buyitems'";
               echo '<h5>Try our best deals, for signed up users we are providing 10% off on all deals with proper insurance. <br>Never thing a you have small room to buy and sell</h5>
               <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">View now !</button>';
            } else {
              $route="'Login'";
                echo '<h5>Try our best deals and with proper assurance, we could able to win 100 persent success rate in bringing 
        happyness to the people with dreams. <br>Never thing a you have small room to buy and sell</h5>
        <button type="button" class="btn btn-primary" onclick="mycall('.$route.')">View now !</button>';
            }
        ?>
        
    </div>

    
  </div>

<hr>


