@extends('layouts.websitelayout')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <div class="main-img">
                <div class="zoom-container">
                    <img class="img-fluid zoom-image" src="{{ Storage::disk('s3')->url('product/images/' . $product->imageName) }}" alt="{{$product->imageTitle}}">
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="main-description mt-5">
                <div class="product-title text-black my-3">
                    {{$product->imageTitle}}
                </div>
              
                <div class="mt-4">
                    <a class="btn btn-outline-success" 
                    href="https://api.whatsapp.com/send?phone=918122937639&text=Hi%20I%20want%20this%20product:%20{{$product->imageTitle}}%0A%0A%20Image:%20{{ urlencode(Storage::disk('s3')->url('product/images/' . $product->imageName)) }}"  
                    target="_blank" 
                    style="color:green !important">
                     Enquiry Via <i class="fab fa-whatsapp"></i>
                 </a>
                 
                </div>

                <div class="product-details mt-4">
                    <p class="details-title text-color mb-1 text-black">Product Details</p>
                    <p class="description text-black">{{$product->description}} </p>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
/* Main image container for zoom effect */
.zoom-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    aspect-ratio: 1 / 1; /* Maintain a square aspect ratio */
    max-width: 500px; /* Optional max width for larger screens */
}

.zoom-container .zoom-image {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Ensures the entire image is visible without cropping */
    object-position: center;
    transition: transform 0.3s ease-in-out, object-position 0.3s ease-in-out;
}

/* Zoom effect on hover */
.zoom-container:hover .zoom-image {
    transform: scale(1.5); /* Scale the image for zoom effect */
    object-position: 50% 50%; /* Focus on the center of the image */
}

/* Responsive adjustments for smaller devices */
@media (max-width: 767.98px) {
    .zoom-container {
        aspect-ratio: unset; /* Removes the square aspect ratio for smaller screens */
        max-width: 100%; /* Adjust to full width for smaller devices */
        height: auto;
    }

    .zoom-container .zoom-image {
        object-fit: contain; /* Maintain full visibility on smaller screens */
    }
}
</style>

@endsection
