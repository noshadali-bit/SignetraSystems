<?php include 'include/head.php';?>
<?php include 'include/header.php';?>
    <style>
        .consent-check{
            display:flex;
            align-items:flex-start;
            gap:12px;
            margin:20px 0;
        }
        
        .consent-check input{
            width:auto;
            margin-top:5px;
        }
        
        .consent-check label{
            margin:0;
            line-height:1.6;
            padding-left: 35px;
        }
        
    </style>
<!-- Banner Sec Start -->
   <section class="inn-banner">
     <div class="container">
        <div class="inn-slide-cap">
          <h2>Let’s Build Together</h2>
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
              <b class="txt-b">CAREERS</b>
              <h3>Let’s Build Together</h3>
              <p>Signetra is building a system to re-engineer how complex programmes are executed.</p>
              <p>This is not a conventional SaaS build, and not a typical consulting model. It sits at the intersection of engineering, systems thinking, and real-world execution.</p>
              <p><b>If this resonates, tell us about you.</b></p>
              <a href="#down" class="green-btn">Apply to Signetra</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-blk-img">
              <img src="images/Careers Stock Image.png" alt="">
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
        <!--<h3>SIGNALS | SYSTEMS | WHAT HAPPENS NEXT</h3>-->
        <p>Perspectives on programme execution, the systems that shape it, and what comes next.</p>
      </div>
      <div class="row">
        
        <div class="col-md-4">
          <div class="sol-blk">
            <div class="sol-img">
              <img src="images/sol-img1.webp" alt="">
              <span class="tag">VISION</span>
            </div>
             <div class="sol-blk-txt">
               <h4>What Is Taking Shape</h4>
            <p>Signetra is building a unified execution intelligence system: specialist advisory, predictive intelligence, and deterministic programme health computation, brought together into a single layer that organisations running complex programmes can rely on.</p>
            <p>The work is split across three live build streams. Each one solves a different part of the same problem and is moving at its own pace.</p>
            <p>What gets shipped here ends up in front of programme leadership, supplier leadership, and investment committees inside organisations where decisions cost real money.</p>
             </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sol-blk">
            <div class="sol-img">
              <img src="images/sol-img2.webp" alt="">
              <span class="tag">VALUES</span>
            </div>
            <div class="sol-blk-txt">
            <h4>What Drives the Build</h4>
            <p>Systems over tasks. We don't break problems down into to-do lists and chase them. We map the structure first, find the seams where execution is breaking, and intervene there. Tasks are downstream of structure.</p>
            <p>Precision, even when the path isn't fully visible. Most of what we build is novel; there is no manual to follow. We move forward anyway, but with discipline: defensible logic, auditable decisions, no hand-waving past the parts we don't yet know.</p>
            <p>Solving what matters over shipping what's easy. We pick the harder problem when it's the one that changes the outcome. Easy wins that don't move the needle don't make the cut.</p>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sol-blk">
            <div class="sol-img">
              <img src="images/sol-img2.webp" alt="">
              <span class="tag">STAGE</span>
            </div>
            <div class="sol-blk-txt">
            <h4>Where This Stands</h4>
            <p>The platform is built. Initial deployments are being scheduled. The team is being formed across the people who build things, the people who ship them, and the people who put them in front of clients.</p>
            <p>This is not a scaled hiring phase, and it isn't trying to be. We're speaking selectively with people who can contribute meaningfully to what is being built, on terms that match the stage we're at.</p>
            <a href="#down" class="grey-link">If you're still reading, the form below is the way in.</a>
          </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<!-- Solutions Sec End -->


<section class="apply-sang" id="down">
  <div class="container">
     
     <div class="contact-form">
       <h3>Apply to Signetra</h3>
             <form class="form3" method="POST" action="sendmail.php" enctype="multipart/form-data">

  <input type="hidden" name="form3_submit" value="1">

  <div class="row">
    <div class="col-md-6">
      <label>Full Name *</label>
      <input type="text" name="fullname" class="form-control" placeholder="Jane Smith">
    </div>

    <div class="col-md-6">
      <label>Current Job Title</label>
      <input type="text" name="jobtitle" class="form-control" placeholder="Your Job Title">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <label>Current Organisation *</label>
      <input type="text" name="organisation" class="form-control" placeholder="Your organisation">
    </div>

    <div class="col-md-6">
      <label>Years of Experience</label>
      <input type="text" name="experience" class="form-control" placeholder="Your Experience">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <label>Email Address</label>
      <input type="email" name="email" class="form-control" placeholder="j.smith@oem.com">
    </div>

    <div class="col-md-6">
      <label>Phone Number *</label>
      <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <label>Upload CV</label>
      <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx">
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <label>Short Note</label>
      <textarea name="note" class="form-control" rows="4"
        placeholder="What you've worked on..."></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary btn-block">
        Submit Application
      </button>
    </div>
  </div>

</form>
      </div>

  </div>
</section>




<?php include 'include/footer.php';?>
<?php include 'include/links.php';?>


