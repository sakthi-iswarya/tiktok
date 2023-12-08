
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('web.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="followers">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="mb-3 max-400 mx-auto mx-md-0 text-white" style="padding-top:200px;">Support</h1>
        <p class="justify-all text-white">Count on us! TikRoyal's team of experts is ready to assist you in placing a new order/ any issues you encounter with an existing one. Taking advantage of our advanced online chat system to maintain consistent communication, we are here to answer your questions and listen to your concerns. Your inquiries will be answered within 24 hours.</p>
      </div>
      <div class="col-lg-6">
      </div>
    </div>
  </div>
</section>

      <section class="working pb-20">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 pt-15">
              <div class="card" style="width:90%;">
                <div class="card-body">
                  <p>Working hours<br>
                  Monday-Friday <span style="padding-left:100px;">9:00 - 17:00</span></p>

                  <p></p>
                  <p>------------------------------------------------------</p>
                  <p></p>
                  <p>Chat with Us<br>
                  Reach out to us if you have any<br>questions</p>

                </div>
              </div>
            </div> 
              
            <div class="col-lg-7 pt-15">
              
          <div class="form-area mb-35 scheme-1 primary">
            <form action="php/sender.php" class="form-fields needs-validation ajax-form" novalidate="novalidate">
              <div class="form-row row">
                <div class="form-col form-floating col-12 col-md-6">
                  <input type="text" name="name" class="form-control" id="InputFloatingExampleName" placeholder="Name" required="required">
                  <label for="InputFloatingExampleName" class="form-label">Name</label>
                  <div class="invalid-feedback">Please enter your name.</div>
                  <div class="valid-feedback">Looks good.</div>
                </div>
                <div class="form-col form-floating col-12 col-md-6">
                  <input type="email" name="email" class="form-control" id="InputFloatingExampleEmail" placeholder="Email" required="required">
                  <label for="InputFloatingExampleEmail" class="form-label">TikTok id</label>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                  <div class="valid-feedback">Looks good.</div>
                </div>
              </div>
              <div class="form-row row">
                <div class="form-col form-floating col-12">
                  <textarea name="message" class="form-control form-textarea" id="InputFloatingExampleMessage" rows="3" placeholder="Message"></textarea>
                  <label for="InputFloatingExampleMessage" class="form-label">Message</label>
                  <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                </div>
              </div>
              <div class="form-row row">
                <div class="form-col form-floating col-12">
                  <div class="form-check">
                    <input type="checkbox" name="terms" id="InputExampleCheckbox" class="form-check-input" required="required">
                    <label class="form-label form-check-label" for="InputExampleCheckbox">
                      I agree to the <a href="#your-link" class="link black primary-hover"><u>terms of use</u>.</a>
                    </label>
                    <div class="invalid-feedback">Please accept the terms to continue.</div>
                  </div>
                </div>
              </div>
              <div class="form-row row">
                <div class="form-col form-floating col-12">
                  <!-- Button -->
                  <button class="button shadow black primary-hover">
                    <span class="button-text white white-hover">Submit</span>
                    <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                  </button>
                </div>
              </div>
              <input type="hidden" name="subject" value="Message sent through the contact form.">
              <span class="form-alert success">Your message was sent successful. Thanks.</span>
              <span class="form-alert error">Sorry. We were unable to send your message.</span>
            </form>
          </div>
          <!-- Input -->
          
          
          </div>
       </div>
     </div>
      </section>

<?php echo $__env->make('web.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tiktok\resources\views/support.blade.php ENDPATH**/ ?>