@extends('layouts.main')
@section('contain')
<header class="slid-half">
	<div id="js-cta-slider" class="cta__slider-wrapper nofull swiper-container" >
		<div class="swiper-wrapper cta__slider">
			<!-- SLIDER ITEM -->
			<div class="cta__slider-item swiper-slide" >
				<div class="media-wrapper slide-inner valign" >
					<div class="bg-img" data-background="{{url('Forntend/img/slide-1.jpg')}}" data-overlay-dark="5"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div class="caption">
									<span class="top-corn"></span>
									<span class="bottom-corn"></span>
									<div class="custom-font">
										<h5 class="thin custom-font">We Are</h5>
										<h1 data-splitting>
											<a href="#0">
												Creativity At It's Best!
											</a>
										</h1>
									</div>
									<p>You Dream, We Design!</p>
									<a href="image-gallery.html" class="btn-curve btn-color mt-30">
										<span>View Gallery</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SLIDER ITEM -->
			<!-- SLIDER ITEM -->
			<div class="cta__slider-item swiper-slide">
				<div class="media-wrapper slide-inner valign">
					<div class="bg-img" data-background="{{url('Forntend/img/slide-2.jpg')}}" data-overlay-dark="5"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div class="caption">
									<span class="top-corn"></span>
									<span class="bottom-corn"></span>
									<div class="custom-font">
										<h5 class="thin custom-font">Innovative & </h5>
										<h1 data-splitting><a href="#0">Stylish Concepts</a>
										</h1>
									</div>
									<p>To design a space without getting attached to it, is next to impossible.
									</p>
									<a href="image-gallery.html" class="btn-curve btn-color mt-30">
									<span>View Gallery</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SLIDER ITEM -->
			<!-- SLIDER ITEM -->
			<div class="cta__slider-item swiper-slide">
				<div class="media-wrapper slide-inner valign">
					<div class="bg-img" style="background-image:{{url('Forntend/img/slide-3.jpg')}}" data-overlay-dark="5"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div class="caption">
									<span class="top-corn"></span>
									<span class="bottom-corn"></span>
									<div class="custom-font">
										<h5 class="thin custom-font">Elegant Design </h5>
										<h1 data-splitting><a href="#0">
											For Elegant You
											</a>
										</h1>
									</div>
									<p>A design never goes out of style if you are faithful towards it!
									</p>
									<a href="image-gallery.html" class="btn-curve btn-color mt-30">
									<span>View Gallery</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SLIDER ITEM -->
		</div>
		<div class="cta__slider-arrows">
			<i id="js-cta-slider-next" class="cta__slider-arrow cta__slider-arrow--next">
			<i class="fas fa-chevron-up"></i>
			</i>
			<i id="js-cta-slider-previous" class="cta__slider-arrow cta__slider-arrow--previous">
			<i class="fas fa-chevron-down"></i>
			</i>
		</div>
	</div>
	<div class="swiper-pagination top custom-font"></div>
</header>

<!-- ==================== Start before & after ==================== -->
<section class="after-before section-padding">
	<div class="background bg-img parallaxie" data-background="{{url('Frontend/img/04.jpg') }}" data-overlay-dark="7"></div>
	<div class="container ontop">
		<div class="section-head text-center wow fadeInUp" data-wow-delay=".3s">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<h6 class="custom-font" style="font-size: 18px;
text-transform: inherit;">" Let's make something beautiful together "</h6>
					<h4 class="playfont">Drag the Slider to See
						the Transformation One of the Interior
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="dotsbg wow fadeInUp" data-wow-delay=".3s">
					<div class="twentytwenty-container wow imago">
						<img src="{{url('Frontend/img/before.jpg')}}" alt=""/>
						<img src="{{url('Frontend/img/after.jpg')}}" alt=""/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="numbers section-padding pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<h3><span class="nbr custom-font">2+</span></h3>
					<h6>Years of Experience</h6>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<h3><span class="nbr custom-font">50+</span></h3>
					<h6>Projects Completed</h6>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<h3><span class="nbr custom-font">50+</span></h3>
					<h6>Satisfied Clients</h6>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<h3><span class="nbr custom-font">100+</span></h3>
					<h6>Diffrent designs</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="process section-padding bg-img bg-repeat" style="background:#05070d">
	<div class="container">
		<div class="section-head text-center">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 col-sm-10">
					<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">How We Do It</h6>
					<h4 class="playfont wow flipInX" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Work Process</h4>
				</div>
			</div>
		</div>
		<div class=" row">
			<div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
				<div class="item">
					<div class="bg-img" data-background="img/process/01.jpg" style="background-image: url(_img/process/01.html);">
						<h3 class="numb custom-font">01</h3>
					</div>
					<div class="cont">
						<h6 class="mb-10">Concept</h6>
						<p>It all starts with the concept first. We begin by knowing what your ideas are!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
				<div class="item">
					<div class="bg-img" data-background="img/process/02.jpg" style="background-image: url(_img/process/02.html);">
						<h3 class="numb custom-font">02</h3>
					</div>
					<div class="cont">
						<h6 class="mb-10">Design Process</h6>
						<p>From here, we start to shape the concept.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
				<div class="item">
					<div class="bg-img" data-background="img/process/03.jpg" style="background-image: url(_img/process/03.html);">
						<h3 class="numb custom-font">03</h3>
					</div>
					<div class="cont">
						<h6 class="mb-10"> Budget Planning</h6>
						<p>A step where we finalize the budget, in order to proceed ahead.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
				<div class="item">
					<div class="bg-img" data-background="img/process/04.jpg" style="background-image: url(_img/process/04.html);">
						<h3 class="numb custom-font">04</h3>
					</div>
					<div class="cont">
						<h6 class="mb-10">Supervision & Execution</h6>
						<p>Executing and checking out whether the designing process is parallel to its timeline and keeping an eye on the progress.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="services section-padding bg-gray">
			<div class="container">
				<div class="section-head text-center">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-10">
							<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
							<h4 class="playfont wow flipInX" data-wow-delay=".5s">What Aarambh offers?</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="item-bx bg-img wow fadeInUp" data-wow-delay=".3s" >
							<span class="icon flaticon-houses"></span>
							<h6 class="mb-20">Detailed drawings</h6>
							<p>Modern and elegant concepts in detailed drawings.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-bx bg-img wow fadeInUp" data-wow-delay=".5s">
							<span class="icon flaticon-living-room"></span>
							<h6 class="mb-20">Interior Designing</h6>
							<p>Attractive design and patterns for your dream home.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-bx bg-img wow fadeInUp" data-wow-delay=".7s">
							<span class="icon flaticon-interior-design"></span>
							<h6 class="mb-20">3D Modeling</h6>
							<p>Representing various parts of building interiors, from structures and other decorative elements.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="testimonials grid section-padding bg-img parallaxie pt-0">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-8 col-sm-10">
                        <h6 class="custom-font">Clients’ Tales</h6>
                        <h4 class="playfont">People’s POV Towards US! <span><img src="img/heart.png" alt=""></span></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testim">
                        <div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">
								Glad to say that,<br>
								Thank you very much "AARAMBH INTERIORS" for fabulous designing of our dream home. It only happened by your dedication, efforts and hard work. We are very happy with your work, designing, drawing arrangements, home planning, visit, co-operation and hassle-free communication. We were very inspired by your good work and dedication. We hope that you are serve better & better to your clients by creating dream projects with the help of your incredible designing skills</p><br>

								<p class="playfont">
								We are Thankful to Devanshi and her entire team of AARAMBH for creating our new dream home.
                                </p>
                            </div>
                            <div class="info">
                                <h6>- Harshil Doshi</h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">Gratitude to Ms.Devanshi for designing our Dream home with concern of her extra ordinary skills in latest definition of architecture. I am happy to say that Aarambh is one of the best in providing designs, planning ,drawing, virtual planning and map in entire region with satisfactory work for ventures, offices, home, flat, shops, cafe, hotels with all of your customized need.
                                </p><br>
								 <p class="playfont">Thank you very much for your hard work and passion for decorating our dream home.
                                </p><br>
								 <p class="playfont">Regards to you that your passion, hardwork, capabilities, dedication are your top qualities.
                                </p><br>

                            </div>
                            <div class="info">
                                <h6>- Hetal Doshi (P'cist) </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">They did an amazing job,</p><br>
								 <p class="playfont">We had excellent choices, from concept to material.</p><br>

								 <p class="playfont">The project was managed by Rohit Sinh Mori with Devyanshi Vyas, who is an interior designer, and they both were in contact with me at each and every step of my dream workplace. I think they rock in this field.
								Thanks with warm regards.</p>

                                </p>
                            </div>
                            <div class="info">
                                <h6>- Vishalbhai Sagar</h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">I'm in Touch with many interior designers, but with you it was more delightful & satisfactory experience with you.</p><br>
								<p class="playfont">
								With your guidance my home interior has become like heaven on earth.
                                </p>
                            </div>
                            <div class="info">
                                <h6>- Sandip Gohel</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">Devanshi and her team are extremely talented and it is always a pleasure to work with them. Our corporate office does not only look great but it is very eye-capturing for our visitors. We will suggest your firm in my group circle as well. </p><br>
								<p class="playfont">
								Kudos to the team Aarambh
                                </p>
                            </div>
                            <div class="info">
                                <h6>- Builder Manish Gohel</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">I will recommend your platform to my relatives & friends. I appreciated your speed very much and efficiency towards project and to it’s really a dream come true house for me. </p><br>
								<p class="playfont">
							Thanks Devanshi madam & regards.
                                </p>
                            </div>
                            <div class="info">
                                <h6>- Daxa Vasani- corporator BJP</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">Good Knowledge, Fresh Ideas took our office on next level! We loved working with Aarambh & its team.</p>

                            </div>
                            <div class="info">
                                <h6>- Gaurav Nathwani</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">Let me start by saying; I really enjoyed working with Aarambh. Thank you so much for capturing my vision and bringing my ordinary space to a level of brilliance! Every detail looks absolutely amazing.</p>

                            </div>
                            <div class="info">
                                <h6>- Haresh Miyatra</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">We are so proud to recognize the outstanding job done by our interior designer Miss Devanshi. From the moment they took on the job, they have demonstrated an exceptional level of passion and dedication to make sure the project was successful. They have paid close attention to every detail, utilizing their knowledge and creativity to craft a space that is truly remarkable!</p><br>

								 <p class="playfont">The end result is a stunning transformation that has left us in awe. From the perfect selection of furniture, to the perfectly coordinated accessories, to the thoughtful touches throughout the space, it is clear that our interior designer has taken great care in making sure this project was a grand success. </p><br>

								 <p class="playfont">We are deeply appreciative of the hard work and dedication that our interior designer has put into this job. They have truly gone above and beyond our expectations and delivered a space that we will always cherish. Thank you for all your hard work and for making our Dream Home.</p><br>
								 <p class="playfont">
								Thank you team Arambh Interiors.
								</p>

                            </div>
                            <div class="info">
                                <h6>- Prashant & Niraj Malvi</h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">Thank you for the beautiful designs. The plans & 3d looked fantastic and even in real, our home looks more elegant. No one can understand our taste better than you. Thank you team Aarambh. More Power to you. </p>

                            </div>
                            <div class="info">
                                <h6>- Ketan Sagpariya </h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">From creating the perfect layout to finding pieces I absolutely loved, my designer really took my space to the next level. I never dreamed my home could look – and feel – this good! </p><br>
								<p class="playfont">Thanks Aarambh!</p>

                            </div>
                            <div class="info">
                                <h6>- Ashish Khokhar </h6>
                            </div>
                        </div>
						<div class="item">
                            <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">They are so amazing! The designs were just gorgeous! I was looking for something that was more than "okay". I wanted beautiful, and they delivered. My designer helped me design one awesome kids’ rooms, which are also somehow elevated and exciting at the same time - not everyone has the ability to do that! They are beautiful heavens that my kids will love for years to come.
Thank you!”
</p>


                            </div>
                            <div class="info">
                                <h6>- Mr. Parag Bharatbhai Sudani</h6>
                            </div>
                        </div>
                    </div>
                    <div class="navs mt-30">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
