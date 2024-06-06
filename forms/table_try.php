<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>try</title>
</head>
<body>
<div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="process_form.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="contact_person" class="form-control" id="contact_person" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter a valid name">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="location" id="location" placeholder="Location of occasion" data-rule="location" data-msg="Please enter a valid location">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" data-rule="address" data-msg="Please enter a valid address">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter a valid company name">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="promo_code" class="form-control" id="promo_code" placeholder="Promo code" data-rule="minlen:4" data-msg="Please enter a valid promo code">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="occasion" id="occasion" placeholder="Occasion" data-rule="occasion" data-msg="Please enter a valid occasion">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="budget" id="budget" placeholder="Budget" data-rule="budget" data-msg="Please enter a valid budget">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter a valid contact number">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="event_date" class="form-control" id="event_date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter a valid date">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="event_time" id="event_time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter a valid time">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="num_pax" id="num_pax" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter number of pax">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="special_req" rows="5" placeholder="Special request"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="subscribe" rows="5" placeholder="Subscribe"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Book a Table</button></div>
            </form>
          </div><!-- End Reservation Form -->
</body>
</html>