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
    max-width: 500px; /* Optional max width for larger screens */
    height: 400px;
    cursor: crosshair;
    background-color: #f7f7f7; /* Optional background color */
}

.zoom-image {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Show full image initially */
    object-position: center;
    transition: transform 0.2s ease-in-out, object-position 0.2s ease-in-out;
}

/* Zoom effect on hover */
.zoom-container:hover .zoom-image {
    transform: scale(1.5); /* Zoom in the image */
    object-fit: cover; /* Show zoomed details */
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
    .zoom-container {
        max-width: 100%;
        height: auto;
    }

    .zoom-container:hover .zoom-image {
        transform: none; /* Disable zoom on smaller devices */
    }
}
</style>

<script>
document.querySelectorAll('.zoom-container').forEach(container => {
    const image = container.querySelector('.zoom-image');

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        // Calculate the x and y positions relative to the container
        const x = (e.clientX - rect.left) / rect.width * 100;
        const y = (e.clientY - rect.top) / rect.height * 100;

        // Dynamically adjust object-position to focus the zoom effect on the cursor's position
        image.style.objectPosition = `${x}% ${y}%`;
    });

    container.addEventListener('mouseleave', () => {
        image.style.objectPosition = 'center'; // Reset to center when the cursor leaves
    });
});
</script>

@endsection
