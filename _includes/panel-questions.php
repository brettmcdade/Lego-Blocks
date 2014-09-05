<div class="panel--questions">
    <div class="panel__intro">
      <h4 class="panel__title">Questions?</h4>
      We want to help.
    </div>
    <a class="btn btn-primary js-open-form-overlay">Send Us A Message<span class="icons--arrow">&#8594;</span></a>
    <a class="btn btn-primary">Read Our FAQs<span class="icons--arrow">&#8594;</span></a>
</div>

<!-- Begin: Hidden Contact Form -->
<div class="overlay is-hidden">
  <div class="centerContainer">
	  <!-- Begin: Modal Form -->
	  <div class="modal">
	      <div class="modal__wrap">
	        <span class="modal--close">Close X</span>
	          <div class="modal__header">
	            <!-- Begin: Page Title Bar -->
	            <div class="page-title__bar">
	                <h3 class="page-title__headline">Ask us a question</h3>
	            </div>
	            <!-- End: Page Title Bar -->
	          </div>
	          <div class="modal__content">
	              <!-- Begin: Contact Form -->
	              <div class="form--base form--contact form--question">
	                <div class="form__body">

	                  <!-- Begin: Message -->
	                  <div id="message_question"></div>
	                  <!-- End: Message -->

	                  <div class="form__content">
	                    <div class="form__wrapper">                          
	                        <form action="<?php echo $base_url;?>/send_question.php" name="form_question" id="form_question" method="post">
	                          <div class="column size1of2">
	                            <div class="form-group--modal">
	                                <label class="label-input">First Name</label>
						                      <input type="text" name="userFirstName_question" id="userFirstName_question" value="" class="form-control" autocomplete="off" />
						                      <span class="form__error-message"></span>
	                            </div>
	                            <div class="form-group--modal">
	                                <label class="label-input">Email Address</label>
						                      <input type="text" name="userEmail_question" id="userEmail_question" value="" class="form-control" autocomplete="off" />
						                      <span class="form__error-message"></span>
	                            </div>
	                            <div class="form-group--modal">
	                                <label class="label-input">Phone Number</label>
						                      <input type="text" name="userPhone_question" id="userPhone_question" value="" class="form-control" autocomplete="off" />
						                      <span class="form__error-message"></span>
	                            </div>
	                          </div>
	                          <div class="lastColumn size1of2">
	                            <div class="form-group--modal textarea">
	                                <label class="label-input">Question</label>
	                                <textarea name="userQuestion_question" id="userQuestion_question" class="form-control" autocomplete="off"></textarea>
	                            </div>
	                            <div class="form-group--modal">
	                              <button type="submit" id="saveForm_question" name="saveForm_question" class="btn btn-primary">
	                                Submit<span class="icons--arrow">&#8594;</span>
	                              </button>
	                            </div>
	                          </div>
	                        </form>
	                    </div>
	                  </div>

	                </div>
	              </div>
	              <!-- End Contact Form -->
	          </div>
	      </div>
	  </div>  
	  <!-- End: Modal Form -->
	</div>
</div>
<!-- End: Hidden Contact Form -->