@extends('front.layouts.master')
@section('content')
    <!--main area-->
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ route('front.index') }}" class="link">home</a></li>
                    <li class="item-link"><span>Contact us</span></li>
                </ul>
            </div>
            <!--massage Error -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- massage add-->
            @if (session()->has('Add'))
                <div class="alert alert-success"><i class="fas fa-check-circle"></i>
                    <strong>{{ session()->get('Add') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class=" main-content-area">
                    <div class="wrap-contacts ">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="contact-box contact-form">
                                <h2 class="box-title">Leave a Message</h2>
                                <form action="{{ route('ContactUs.store') }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">Name<span>*</span></label>
                                    <input type="text" value="{{ old('name') }}" id="name" name="name">


                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" value="{{ old('email') }}" id="email" name="email">

                                    <label for="phone">subject </label>
                                    <input type="text" value="{{ old('name') }}" id="subject" name="subject">


                                    <label for="massage">massage</label>
                                    <textarea name="message" id="message" placeholder="Text"></textarea>

                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-info">
								<div class="wrap-map">
									<div class="mercado-google-maps"
										 id="az-google-maps57341d9e51968"
										 data-hue=""
										 data-lightness="1"
										 data-map-style="2"
										 data-saturation="-100"
										 data-modify-coloring="false"
										 data-title_maps="Kute themes"
										 data-phone="088-465 9965 02"
										 data-email="kutethemes@gmail.com"
										 data-address="Z115 TP. Thai Nguyen"
										 data-longitude="-0.120850"
										 data-latitude="51.508742"
										 data-pin-icon=""
										 data-zoom="16"
										 data-map-type="ROADMAP"
										 data-map-height="263">
									</div>
								</div>
								<h2 class="box-title">Contact Detail</h2>
								<div class="wrap-icon-box">

									<div class="icon-box-item">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<div class="right-info">
											<b>Email</b>
											<p>Support1@Mercado.com</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="right-info">
											<b>Phone</b>
											<p>0123-465-789-111</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="right-info">
											<b>Mail Office</b>
											<p>Sed ut perspiciatis unde omnis<br />Street Name, Los Angeles</p>
										</div>
									</div>

								</div>
							</div>
						</div>
                    </div>
                </div>
                <!--end main products area-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->
    </main>
    <!--main area-->
@endsection
