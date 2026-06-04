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
          <h2>Get in Touch</h2>
        </div>
     </div>
   </section>
<!-- Banner Sec End -->


<!-- Contact Sec Start -->
   <section class="contact-sec">
     <div class="container">
       <div class="row">
         
         <div class="col-md-6">
           <div class="engineer-blk1">
              <b class="txt-b">CONTACT</b>
              <h3>Get in Touch</h3>
              <p>Signetra works with organisations running complex, multi-stakeholder programmes where execution outcomes are tightly coupled to dependencies, decisions, and signal flow.</p>
              <p>If you're navigating programme complexity that current systems are not resolving, get in touch.</p>
              <p>All enquiries are reviewed directly. If relevant, we'll schedule a short conversation to understand your programme context and determine fit.</p>
            </div>
         </div>
         <div class="col-md-6">
           <div class="contact-form">
             <form class="form1" method="POST" action="sendmail.php">

  <input type="hidden" name="form1_submit" value="1">

  <div class="row">
    <div class="col-md-6">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Jane Smith">
    </div>

    <div class="col-md-6">
      <label>Work Email*</label>
      <input type="email" name="email" class="form-control" placeholder="j.smith@oem.com">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <label>Organisation*</label>
      <input type="text" name="organisation" class="form-control" placeholder="Your organisation">
    </div>

    <div class="col-md-6">
      <label>Role</label>
      <input type="text" name="role" class="form-control" placeholder="Your role in the programme">
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <label>Brief description</label>
      <textarea name="description" class="form-control" rows="4"
        placeholder="Tell us briefly about the programme context"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary btn-block">
        Send Inquiry
      </button>
    </div>
  </div>

</form>
           </div>
         </div>

       </div>
     </div>
   </section>
<!-- Contact Sec End -->

<script>

const consentCheckbox = document.getElementById('consent');
const submitBtn = document.getElementById('submitBtn');

consentCheckbox.addEventListener('change', function() {

    submitBtn.disabled = !this.checked;

});

</script>

<?php include 'include/footer.php';?>
<?php include 'include/links.php';?>


