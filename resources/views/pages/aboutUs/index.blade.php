@extends('layouts.default')

@section('title', 'About Us')

@section('content')
    <section data-bs-version="5.1" class="testimonials1 cid-tj7HRzJ1Pk" id="testimonials1-6">

        <div class="container">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                <strong>About Us</strong>
            </h3>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/AboutUsCrop.jpg') }}" alt="Rodney Hoddinott">
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper">
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            My grandfather teacher me how to work with wood. Have been building furniture for many years. Passionate about building and creating.
                        </p>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            Always open to new ideas with wood. Farm house to modern style. Diversity off colors or steins.
                        </p>
                        <p class="name mbr-fonts-style mb-1 display-4">
                            <strong>Rodney Hoddinott</strong>
                        </p>
                        {{-- <p class="position mbr-fonts-style display-4">
                            <strong>Client</strong>
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
