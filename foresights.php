<?php 
    include 'include/head.php';
    include 'include/header.php';

    
    $url = "https://signetra-foresights.ghost.io/ghost/api/content/posts/?key=1fdc1930e2f4d9ec2f56528f78";
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Accept-Version: v6.0"
    ]);
    
    $response = curl_exec($ch);
    
    $posts = [];
    
    if(!curl_errno($ch)){
    
        $data = json_decode($response, true);
    
        if(isset($data['posts'])){
            $posts = $data['posts'];
        }
    
    }
    
    curl_close($ch);

?>

<!-- Banner Sec Start -->
   <section class="inn-banner">
     <div class="container">
        <div class="inn-slide-cap">
          <h2>Foresights</h2>
        </div>
     </div>
   </section>
<!-- Banner Sec End -->

<!-- About Sec Start -->
    <section class="about-sec rmv-bg">
      <div class="container">
        <div class="row flx-centr">
          
          <div class="col-md-6">
            <div class="about-blk">
              <b class="txt-b">NEWSLETTER / BLOG</b>
              <h3>Foresights</h3>
              <p>Decoding where the industry is going, before it gets there.</p>
              <p>This is where we share perspectives on programme execution, system-level failures, and the signals shaping how complex programmes get built, delivered, and held to account.</p>
              <p>No summaries. No noise. Only what matters, and what it leads to.</p>
              <a href="https://www.signetraforesights.com/" class="green-btn">Explore Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-blk-img">
              <img src="images/image-foresights.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>
<!-- About Sec End -->

<!-- Solutions Sec Start -->
  <section class="solution-sec" id="capabilities">
    <div class="container">
      <div class="sol-title">
        <h3>SIGNALS | SYSTEMS | WHAT HAPPENS NEXT</h3>
        <p>Perspectives on programme execution, the systems that shape it, and what comes next.</p>
      </div>
      <div class="row">
        <?php foreach($posts as $post){ ?>
            <div class="col-md-6">
              <div class="sol-blk">
                <div class="sol-img">
                <?php if(isset($post['feature_image'])){ ?>
                  <img src="<?php echo $post['feature_image']; ?>" alt="">
                <?php } ?>
                  <!--<span class="tag">STRATEGIC VIEW</span>-->
                </div>
                 <div class="sol-blk-txt">
                  <p><b>Date:</b> <?php echo date("F d, Y", strtotime($post['published_at'])); ?></p>
                    <h4><?php echo $post['title']; ?></h4>
                    <p><?php echo $post['excerpt']; ?>.</p>
                    <a href="<?php echo $post['url']; ?>" target="_blank">Read More</a>
                    <!--<a href="https://www.signetraforesights.com/">Read More</a>-->
                 </div>
              </div>
            </div>
        <?php } ?>
        <!--<div class="col-md-6">-->
        <!--  <div class="sol-blk">-->
        <!--    <div class="sol-img">-->
        <!--      <img src="images/sol-img2.webp" alt="">-->
        <!--      <span class="tag">MARKET TRENDS</span>-->
        <!--    </div>-->
        <!--    <div class="sol-blk-txt">-->
        <!--      <p><b>Date:</b> 20-05-2026</p>-->
        <!--    <h4>MARKET TRENDS</h4>-->
        <!--    <p>Component and systems suppliers running parallel programmes for multiple OEMs, where each customer's timing plan competes for the same engineering capacity, and where reconciling change cycles across customers is a continuous effort. Engaged through Automotive Advisory, Forward Visibility, and DeliverXL</p>-->
        <!--    <a href="https://www.signetraforesights.com/">Read More</a>-->
        <!--  </div>-->
        <!--  </div>-->
        <!--</div>-->

      </div>
    </div>
  </section>
<!-- Solutions Sec End -->




<?php include 'include/footer.php';?>
<?php include 'include/links.php';?>


