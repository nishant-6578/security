<?php include_once('include/header.php') ?>
<section class="inner-about-area clint-review-c pt-120 pb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                    <!-- <div class="hading-title">Get In <span>Touch</span></div> -->
                    <form action="https://raistheme.com/html/secrius/secrius/mail.php" method="POST" id="contact-form" class="contact-form-box row">
                        <div class="col-lg-6">
                            <input type="text" name="name" class="name-box" placeholder="Name" required="">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="name" class="name-box" placeholder="Subject" required="">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" class="name-box" placeholder="Email Address" required="">
                        </div>
                        <div class="col-lg-6">
                            <input type="number" name="number" class="name-box" placeholder="Phone Number" required="">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" id="message-box" placeholder="Your Details" required=""></textarea>
                        </div>
                        <div class="col-lg-12 mt-3">
                        	<div class="custom-file">
							  <input type="file" class="custom-file-input" id="customFile">
							  <label class="custom-file-label" for="customFile">You can attach resume/biodata:(.pdf, .doc, .docx extensions only)*</label>
							</div>
                        	<!-- <form>
							  <div class="form-group">
							    <label for="exampleFormControlFile1">You can attach resume/biodata:(.pdf, .doc, .docx extensions only)*</label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1">
							  </div>
							</form> -->
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn-1 message-send hover-effect">Apply Now</button>
                            <p class="form-message error"></p>
                        </div>


                    </form>

                </div>
		</div>
	</div>
</section>
<?php include_once('include/footer.php') ?>