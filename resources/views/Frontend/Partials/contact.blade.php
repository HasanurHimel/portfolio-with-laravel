<div class="contact-area section-padding" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                    <p class="line-one"></p>
                    <h2>Contact</h2>
                    <p class="line-one"></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.4s">
                    <i class="fa fa-home"></i>
                    <h2>Location</h2>
                    <p>Gobra, Madrasa ,Gopalgonj,Dhaka</p> <!--edit here-->
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.6s">
                    <i class="fa fa-phone"></i>
                    <h2>Phone: </h2>
                    <p>(+88) 01770936854</p> <!--edit here-->
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.8s">
                    <i class="fa fa-envelope-o"></i>
                    <h2>Email</h2>
                    <p>himel@gmail.com</p> <!--edit here-->
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-contact text-center wow fadeInDown" data-wow-delay="1s">
                    <i class="fa fa-gg"></i>
                    <h2>Social Media: </h2>
                    <div class="socials">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <!--your facebook profile link here-->
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a> <!--your linkedin profile link here-->
                        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a> <!--your twitter profile link here-->
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> <!--your pinterest profile link here-->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <form id="contact-form" method="post" action="contact.php" class="wow fadeInDown" data-wow-delay="1.2s">

                    <div class="messages"></div> <!--you can change the message in contact.php file -->

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your full name *" required="required" data-error="Fullname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your Message *" rows="4" required="required" data-error="Leave a message for me"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-send" value="">Send message</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>