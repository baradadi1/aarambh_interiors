@extends('layouts.main')
@section('contain')
<header class="pages-header work-header bg-img valign" data-background="img/slide-2.jpg" data-overlay-light="6" style="background-image: url(_img/009.html);">
        <div class="container">
            <div class="section-head text-center mb-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-11">
                        <h6 class="custom-font">Our Projects</h6>
                        <h4 class="playfont">Super Prime lighting Design and interiors</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <section class="projdtal pt-80 pb-80">

	   <div class="justified-gallery">
        @for ($i = 1; $i <= 26; $i++)
            <a href="{{ url('Frontend/img/project/p'.$i.'.jpg') }}" data-fancybox="gallery">
                <img alt="" src="{{ url('Frontend/img/project/p'.$i.'.jpg') }}" />
            </a>
        @endfor
        </div>
    </section>
@endsection()
