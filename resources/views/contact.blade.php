@extends('layouts.main')
@section('contain')
 <section class="contact" style="background:#05070d;margin-top:120px">
        <div class="info  pt-80 pb-80">
            <div class="container">
				<div class="section-head text-center">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-10">
							<!--h6 class="custom-font wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Connect</h6-->
							<h4 class="playfont wow flipInX" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Connect</h4>
						</div>
					</div>
				</div>
                <div class="row">
					 <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-map"></span>
                            <div class="cont">
                                <h6 class="custom-font">Address</h6>
                                <p>"Kuber Kashtbhanjan", <br>Beside Patel Suzuki, <br>Nr. Giriraj Hospital,150 ft. Ring Road, <br>Rajkot. Gujrat. </p>
                            </div>
                        </div>
                    </div>
				   <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-phone"></span>
                            <div class="cont">
                                <h6 class="custom-font">Call Us</h6>
                                <p><a href="tel:+91 99981 97798">+91 99981 97798</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-mail-open"></span>
                            <div class="cont">
                                <h6 class="custom-font">Email Us</h6>
                                <p><a href="mailto:info@aarambhinteriors.co.in">info@aarambhinteriors.co.in</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29535.96583520914!2d70.77350313008169!3d22.278151611430395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb64843fe13b%3A0xc9f327bb02648dd!2sKuber%20kashtabhanjan%20complex!5e0!3m2!1sen!2sin!4v1680615997570!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 form">
                     <h6 class="custom-font">Get in touch with us !</h6><br>

					<form method="post" action="php/contact-enquiry.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                            </div>

                             <div class="form-group">
                                <input id="form_name" type="text" name="phone" placeholder="Phone" required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="msg" placeholder="Message" rows="4"  required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
