<style>
    .All-loader {
        background-color: rgba(255, 255, 255, 0.3);
        bottom: 0;
        color: #0033FF;
        display: block;
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        z-index: 5;
    }

    .loader {
        position: absolute;
        color: #fff;
        font-size: 40px;
        top: 40%;
        left: 45%;
    }

    .loader .fa {
        line-height: 1;
    }

    .text-success {
        color: #fff !important
    }

    .text-danger {
        color: #dc3545 !important
    }
</style>

<section>
    <div class="contact-heading">
        <div class="d-flex justify-content-center align-items-center">
            <h2>Become an Envirocare Nurturer</h2>
        </div>
    </div>
    <div class="contact-section">
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <div class="contact-container">
                <div id="loadpost" class="All-loader" style="display:none">
                    <div class="loader"><i class="fa fa-spinner fa-1x"></i></div>
                </div>
                <div class="form">
                    <h2>Enviro Connect</h2>
                    <div class="Inpt success-message"></div>
                    <form method="post" class="actionForm" action="<?= $path; ?>./assets/mail/functions.php">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="inputBx">
                                    <input type="text" class="txtfeild" maxlength="50" required="required" name="fullname">
                                    <span>Full Name</span>
                                    <i class="fa fa-user"></i>
                                    <div class="Inpt fullname"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputBx">
                                    <input type="email" class="txtfeild" maxlength="60" name="email" required="required">
                                    <span>Email ID</span>
                                    <a href="#" class="email-control"></a>
                                    <i class="fa fa-envelope"></i>
                                    <div class="Inpt email"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5">
                                <div class="inputBx">
                                    <input type="number" class="txtfeild" maxlength="10" name="phoneno" required="required">
                                    <span>Phone No.</span>
                                    <i class="fa fa-phone"></i>
                                    <div class="Inpt phoneno"></div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="inputBx">
                                    <input type="text" class="txtfeild" maxlength="100" name="subject" required="required">
                                    <span>Subject</span>
                                    <i class="fa fa-user"></i>
                                    <div class="Inpt subject"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="inputBx">
                                    <textarea maxlength="500" class="txtfeild" name="message" required="required"></textarea>
                                    <span>Message</span>
                                    <a href="#" class="msg-control"></a>
                                    <i class="fa fa-comment"></i>
                                    <div class="Inpt message"></div>
                                </div>
                            </div>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>