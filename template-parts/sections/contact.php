<!-- ======= Contact Section ======= -->
<section class="paralax-mf footer-paralax bg-image route"
         style="background-image: url(<?= get_template_directory_uri(); ?>/assets/background/johannesburg-4322256_1920.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <form action="<?= get_template_directory_uri() . '/contact.php' ?>" method="POST" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text"
                                                           name="name"
                                                           class="form-control"
                                                           id="name"
                                                           placeholder="Your Name"
                                                           data-rule="minlen:3"
                                                           data-msg="Please enter at least 4 chars" />
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email"
                                                           class="form-control"
                                                           name="email"
                                                           id="email"
                                                           placeholder="Your Email"
                                                           data-rule="email"
                                                           data-msg="Please enter a valid email" />
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="subject"
                                                           id="subject"
                                                           placeholder="Subject"
                                                           data-rule="minlen:10"
                                                           data-msg="Please enter at least 10 chars of subject" />
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control"
                                                              name="message"
                                                              rows="5"
                                                              data-rule="required"
                                                              data-msg="Please write something for us"
                                                              min="10"
                                                              placeholder="Message"></textarea>
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center mb-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="font-weight-bolder button button-a button-big button-rouded btn-block">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        Get in touch with me using form or socail media account.
                                    </p>
                                    <ul class="list-ico">
                                        <li>
                                            <span class="ion-ios-location"></span> Johannesburg South
                                        </li>
                                        <li>
                                            <span class="ion-ios-telephone"></span>
                                            <a href="tel:+27747407518" class="bg font-weight-bolder">
                                                074 740 7518
                                            </a>
                                        </li>
                                        <li>
                                            <span class="ion-email"></span>
                                            <a href="mailto:thembangubeni04@gmail.com" class="bg font-weight-bolder">
                                                ThembaNgubeni04@gmail.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li>
                                            <a href="https://linkedin/in/">
                                                <span class="ico-circle"><i class=" ion-social-linkedin"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://facebook.com/themba.ngubeni.129">
                                                <span class="ico-circle"><i class="ion-social-facebook"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->