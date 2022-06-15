<?php include 'inc/header.php' ;?>
           

<div class="main-body">
<div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Login</h3>
                        <ul>
                            <li>
                                <a href="index-2.php">Home</a>
                            </li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="assets/images/inner-banner/inner-banner6.png" alt="Inner Banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="user-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <h3 class="user-title"> Login</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Username Or Email Address*"
                                                placeholder="Username Or Email Address*">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="Password"
                                                placeholder="Password*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-condition">
                                        <div class="agree-label">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                Remember Me <a class="forget" href="forgot-password.php">Forgot
                                                    Password?</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            Login Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php include 'inc/footer.php' ;?>