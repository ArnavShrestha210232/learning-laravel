@extends('user.layout.app')
@push('css')
@endpush
@section('content')
    <section class="page-title" style="{{ asset('user/background-image:url(images/background/2.png)') }}">
        <div class="container">
            <div class="content">
                <h1>Gallery</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="gallery-us-area pt-30 pb-70">
        <div class="container gallery mt-5 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter">
                        <button data-name="*" class="btn active ">All</button>
                        <button data-name=".photo" class="btn ">Photos</button>
                        <button data-name=".video" class="btn ">Videos</button>

                    </div>
                </div>
            </div>

            <div class="grid">

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo ">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-5.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('user/images/gallery/img-5.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-1.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('user/images/gallery/img-1.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-3 grid-item grid-sizer photo">
                        <div class="h-product-item">
                            <div class="h-product-thumb">
                                <a href="{{ asset('user/images/gallery/img-2.jpg') }}" class="fancybox"
                                    data-fancybox="gallery1"><img src="{{ asset('userimages/gallery/img-2.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>
                    </div>



                </div>


            </div>

        </div>
    </section>
@endsection
@section('js')
@endsection
