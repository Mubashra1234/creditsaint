<?php
 if(isset($_GET['cty']) && $_GET['cty'] != ''){
  $newword=$_GET['cty'];
  }
$GLOBALS['title'] = "Ihr Partner fÃ¼r die Graffitientfernung in NRW";
$GLOBALS['desc'] = "Bis zu 70% gÃ¼nstiger als ein Neuanstrich âœ“ Festpreisgarantie âœ“ Jetzt anrufen : 02331 488 05 52";
$GLOBALS['keywords'] = "Graffitientfernung";
include('header.php'); ?>



    <div class="packages-banner">
        <div class="container">
            <div class="packages-banner-content">
                <h1>Packages for <span class="line">your</span> needs</h1>
                <p>We offer the most comprehensive service available in the industry today.</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://form.jotform.com/jsform/242834671749064"></script>
        <section class="testimonial">
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h3 class="section-heading mb-5">What Our Clients Say!</h3>
          </div>
          <div class="testimonial-slider">
            <div class="testimonial-item">
              <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                <div class="btn-square bg-white border rounded-circle">
                  <i class="fa fa-quote-right fa-2x text-black"></i>
                </div>
                <img src="./assets/img/review-star.png" alt="" />
                <p class="testimonial-text">
                  “Ethan did an awesome job explaining the different service
                  levels and the free consultation was informative.”
                </p>
              </div>
            </div>

            <div class="testimonial-item">
              <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                <div class="btn-square bg-white border rounded-circle">
                  <i class="fa fa-quote-right fa-2x text-black"></i>
                </div>
                <img src="./assets/img/review-star.png" alt="" />
                <p class="testimonial-text">
                  “Ethan did an awesome job explaining the different service
                  levels and the free consultation was informative.”
                </p>
              </div>
            </div>

            <div class="testimonial-item">
              <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                <div class="btn-square bg-white border rounded-circle">
                  <i class="fa fa-quote-right fa-2x text-black"></i>
                </div>
                <img src="./assets/img/review-star.png" alt="" />
                <p class="testimonial-text">
                  “Ethan did an awesome job explaining the different service
                  levels and the free consultation was informative.”
                </p>
              </div>
            </div>

            <div class="testimonial-item">
              <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                <div class="btn-square bg-white border rounded-circle">
                  <i class="fa fa-quote-right fa-2x text-black"></i>
                </div>
                <img src="./assets/img/review-star.png" alt="" />
                <p class="testimonial-text">
                  “Ethan did an awesome job explaining the different service
                  levels and the free consultation was informative.”
                </p>
              </div>
            </div>

            <div class="testimonial-item">
              <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                <div class="btn-square bg-white border rounded-circle">
                  <i class="fa fa-quote-right fa-2x text-black"></i>
                </div>
                <img src="./assets/img/review-star.png" alt="" />
                <p class="testimonial-text">
                  “Ethan did an awesome job explaining the different service
                  levels and the free consultation was informative.”
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial End -->



        <!-- Callback Start -->
        <section class=" callback mb-5 py-5">
          <div class="container pt-5">
              <div class="row justify-content-center">
                  <div class="col-lg-7">
                      <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                              <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                              </p>
                              <h5 class="display-5 mb-5">Request A Call-Back</h5>
                          </div>
                          <div class="row g-3">
                              <div class="col-sm-6">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="name" placeholder="Your Name">
                                      <label for="name">Your Name</label>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-floating">
                                      <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                      <label for="mail">Your Email</label>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                      <label for="mobile">Your Mobile</label>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="subject" placeholder="Subject">
                                      <label for="subject">Subject</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control" placeholder="Leave a message here" id="message"
                                          style="height: 100px"></textarea>
                                      <label for="message">Message</label>
                                  </div>
                              </div>
                              <div class="col-12 text-center">
                                  <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      <!-- Callback End -->
      <?php include('footer.php'); ?>
