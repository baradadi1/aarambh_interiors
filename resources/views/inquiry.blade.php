@extends('layouts.main')
@section('contain')
 <section class="contact" style="background:#05070d;margin-top:120px">
			   <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 form">
                     <div class="section-head text-center">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-8 col-sm-10">
							<!--h6 class="custom-font wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">Inquiry</h6-->
							<h4 class="playfont wow flipInX" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Project Inquiry</h4>
						</div>
					</div>
				</div>
					<form id="contact-form" method="post" action="#">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name*" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email*"
                                    required="required">
                            </div>
							 <div class="form-group">
                                <input id="form_phone" type="email" name="email" placeholder="Phone*"
                                    required="required">
                            </div>
							 <div class="form-group">
                                <input id="form_phone" type="email" name="email" placeholder="Subject"
                                    required="required">
                            </div>
							 <div class="form-group">
                                <select>
									<option>Select Project*</option>
									<option>Residential Project</option>
									<option>Commercial Project</option>
									<option>Corporate Project</option>
									<option>Hospitality Project</option>
									<option></option>
								</select>
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
    </section>
@endsection
