<?php include 'inc/header.php'; ?>


<div class="main-body">

    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <a href="index-2.php">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="assets/images/inner-banner/inner-banner2.png" alt="Inner Banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-information-area pt-100 pb-70">
        <div class="container">
            <div class="contact-information-max">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.7385664098306!2d-73.90035148255616!3d40.745777800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25fd4d72d3897%3A0x178227ad36280ee8!2sB%26G%20THREADING%20INC.!5e0!3m2!1sen!2sbd!4v1655832500537!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-email"></i>
                            <h3>Send Email</h3>
                            <p><a href="#"><span class="__cf_email__">bgthreadinginc@gmail.com</span></a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-telephone"></i>
                            <h3>Call Center</h3>
                            <p><a href="tel:+347-813-4840">+347-813-4840</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-pin"></i>
                            <h3>Visit Anytime</h3>
                            <p> 4008 67th Street , Woodside</p>
                            <p> NY 11377 , USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-widget-area pb-70">
        <div class="container">
            <div class="contact-widget-max">
                <div class="contact-form">
                    <div class="section-title text-center">
                        <h2>Do You’ve Any Question?</h2>
                    </div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        Accept <a href="terms-condition.php">Terms & Conditions</a> And <a href="privacy-policy.php">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>