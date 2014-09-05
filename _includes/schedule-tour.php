<!-- Begin Schedule Tour Form -->
  <div id="schedule-tour" class="form--base form--schedule-tour">
    <div class="form__body">
        <div class="row l-inner">

          <div id="message_tour"></div>

          <div class="form__content">
            <div class="form__intro">
              <h3 class="gamma">Visit us</h3>
              <p class="blurb">Schedule a personal tour of Salude to view our facility, meet our staff and learn more about how we can help with your recovery.</p>
            </div>
            <div class="form__wrapper">                          
                <form action="<?php echo $base_url;?>/send_tour.php" name="form_tour" id="form_tour" method="post">
                  <div class="form-group form-group--first-col">
                      <label class="label-input">First Name</label>
                      <input type="text" name="userFirstName_tour" id="userFirstName_tour" value="" class="form-control" autocomplete="off" />
                      <span class="form__error-message"></span>
                  </div>
                  <div class="form-group form-group--second-col">
                      <label class="label-input">Last Name</label>
                      <input type="text" name="userLastName_tour" id="userLastName_tour" value="" class="form-control" autocomplete="off" />
                  </div>
                  <div class="form-group form-group--first-col">
                      <label class="label-input">Email Address</label>
                      <input type="text" name="userEmail_tour" id="userEmail_tour" value="" class="form-control" autocomplete="off" />
                      <span class="form__error-message"></span>
                  </div>
                  <div class="form-group form-group--second-col">
                      <label class="label-input">Phone Number</label>
                      <input type="text" name="userPhone_tour" id="userPhone_tour" value="" class="form-control" autocomplete="off" />
                      <span class="form__error-message"></span>
                  </div>
                  <div class="form-group form-group--push-right">
                      <label class="label-checkbox checkbox" for="input5">
                          <input type="checkbox" checked="checked" name="userReceiveUpdates_tour" id="userReceiveUpdates_tour" value="Yes" data-toggle="checkbox">
                          Yes, I’d like to receive updates from Salude.
                      </label>
                  </div>
                  <div class="form-group form-group--push-left">
                    <button type="submit" id="saveForm_tour" name="saveForm_tour" class="btn btn-primary">
                      Submit<span class="icons--arrow">&#8594;</span>
                    </button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>
  </div>
<!-- End Schedule Tour Form -->