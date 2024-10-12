<?php
 if(isset($_GET['cty']) && $_GET['cty'] != ''){
  $newword=$_GET['cty'];
  }
$GLOBALS['title'] = "Ihr Partner fÃ¼r die Graffitientfernung in NRW";
$GLOBALS['desc'] = "Bis zu 70% gÃ¼nstiger als ein Neuanstrich âœ“ Festpreisgarantie âœ“ Jetzt anrufen : 02331 488 05 52";
$GLOBALS['keywords'] = "Graffitientfernung";
include('header.php'); ?>


      <section class="privacy terms">
        <div class="container">

            <h1>Credit Saint, LLC’s CCPA "Do Not Sell My Personal Information" Request Form</h1>
            <p class="section-paragraph"> This Webpage applies solely to those who are consumers ("you" or "your") as defined in Section 1798.140(g) of the California Consumer Privacy Act of 2018 ("CCPA") and any terms defined in the CCPA have the same meaning when used in this Webpage. Credit Saint, LLC takes the privacy of its customers seriously and strives to comply with all applicable state and federal laws. Please review our <a href="https://www.creditsaint.com/ccpa-privacy-policy" target="_blank" rel="noreferrer">CA Privacy Notice</a> for information about how we use and disclose personal information,  including the types of third parties to whom we sell personal information.</p>
            <p class="section-paragraph"> As a California resident, you may be able to exercise certain rights in connection with your personal data, including the right to opt out of the "sale" of your personal information as that term is defined under the CCPA.</p>
            <p class="section-paragraph">If you decide to opt out of the sale of your personal information, Credit Saint, LLC will refrain from selling your personal information to third parties. To opt out, please complete and submit the form below or call us at <a href="tel:1(877)637-2673">877-637-2673</a>.</p>
            <h3 class="section-heading">Do Not Sell Request Form</h3>
                                
                <form method="">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="first_name" id="first_name"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="last_name" id="last_name"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="email" name="email" id="email"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="tel" name="phone" id="phone"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="address">glba.adress</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="address" id="address"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="city">City</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="city" id="city"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="state">State</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="state" id="state"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="zip">Zip Code</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="zip" id="zip"/>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-5">
                             <span>  How can we contact you for questions about your request?</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <input type="checkbox" name="contact_methods[]" value="mail" id="contact_methods_mail"/>
                                <label for="contact_methods_mail">Mail</label>
                            </div>
                            <div>
                                <input type="checkbox" name="contact_methods[]" value="phone" id="contact_methods_phone"/>
                                <label for="contact_methods_phone">Phone Call</label>
                            </div>
                            <div>
                                <input type="checkbox" name="contact_methods[]" value="sms" id="contact_methods_sms"/>
                                <label for="contact_methods_sms">Text Message</label>
                            </div>
                            <div>
                                <input type="checkbox" name="contact_methods[]" value="mail" id="contact_methods_email"/>
                                <label for="contact_methods_email">Email Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <p class="section-paragraph mt-3"> By submitting this form, I certify that I am the above-named individual or a person authorized by the above-named individual to submit this form on their behalf. I understand that Credit Saint, LLC may contact me to obtain identity verification and validate this request.</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
<a href="" class="theme-btn">Submit Request</a>
                        </div>
                    </div>
                </form>
               
        </div>
    </section>

    <?php include('footer.php'); ?>
