@extends('layouts.websitelayout')

@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Product Image Section -->
        <div class="col-md-5 col-sm-12">
            <div class="main-img">
                <div class="zoom-container">
                    <img class="img-fluid zoom-image" src="{{ Storage::disk('s3')->url('product/images/' . $product->imageName) }}" alt="{{ $product->imageTitle }}">
                </div>
            </div>
        </div>

        <!-- Product Description Section -->
        <div class="col-md-7 col-sm-12">
            <div class="main-description mt-5">
                <div class="product-title text-black my-3">
                    {{ $product->imageTitle }}
                </div>

                <!-- Enquiry Button -->
                <div class="mt-4">
                    <a class="btn btn-outline-success" 
                       href="https://api.whatsapp.com/send?phone=918122937639&text=Hi%20I%20want%20this%20product:%20{{ $product->imageTitle }}%0A%0A%20Image:%20{{ urlencode(Storage::disk('s3')->url('product/images/' . $product->imageName)) }}" 
                       target="_blank" 
                       style="color:green !important">
                        Enquiry Via <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

                <!-- Product Details -->
                <div class="product-details mt-4">
                    <p class="details-title text-color mb-1 text-black">Product Details</p>
                    <p class="description text-black">{{ $product->description }}</p>
                </div>

            

                <!-- Additional Information -->
                <div class="additional-info mt-4">
                    <h6 class="text-black">Material:</h6>
                    <p>Silver and Gold</p>

                    <h6 class="text-black">Stone:</h6>
                    <p>Kemp Stones</p>

                    <h6 class="text-black">Care Instructions:</h6>
                    <ul>
                        <li>Apply cosmetics, hair products, lotions, perfumes & powders prior to donning your jewelry.</li>
                        <li>Prevent your items from being exposed to moisture.</li>
                        <li>Clean the backside of jewelry with 100% cotton cloth to wipe off excess dirt.</li>
                        <li>Avoid velvet box to store jewelry; use plastic cover or box in a dry, dark, and cool place.</li>
                    </ul>
                    <h6 class="text-black mt-2">Terms & Conditions:</h6>
                    <ul>
                        <li>All items are sold in good condition.</li>
                        <li >No return, refund, or exchange is allowed. </li>
                        <li>In case of damages during transport, returns will be accepted for replacement or repair.</li>
                        <li>No pickup service for returns. Customers must return items via reliable courier to our address.</li>
                        <p id="policyButton"><b>( Click To View Policy )</b></p>
                    </ul>

                </div>
    
            </div>
        </div>
    </div>
</div>

<!-- Modal for Policy -->
<div class="modal fade" id="policyModal" tabindex="-1" aria-labelledby="policyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="policyModalLabel">Policies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-black">No Return/Exchange Policy</h6>
                <p>All sales are final. We do not accept returns or exchanges.</p>

                <h6 class="text-black mt-4">Replacement Policy for Damaged Items</h6>
                <p>We take great care in packaging and shipping our products. However, in the unlikely event that your item is damaged during transportation, we will replace it.</p>

                <h6 class="text-black mt-4">Conditions for Replacement</h6>
                <ol>
                    <li>The item must be damaged or defective upon arrival.</li>
                    <li>You must notify us within 3 business days of receiving the damaged item.</li>
                    <li>You must provide clear photos of the damaged item.</li>
                </ol>

                <h6 class="text-black mt-4">Replacement Procedure</h6>
                <ol>
                    <li>Contact us via WhatsApp: +91-8122937639 to report the damage.</li>
                    <li>Provide your Invoice number, clear photos of the damaged item, and a detailed description of the damage.</li>
                    <li>We will review your request and, if approved, ship a replacement item within 5 business days.</li>
                </ol>

                <p class="mt-3">Please note that we reserve the right to refuse any replacement requests that do not meet the above conditions.</p>

                <p class="mt-3">Thank you for your understanding.</p>
            </div>
        </div>
    </div>
</div>

<!-- Styles for Zoom Effect -->
<style>
.zoom-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    max-width: 500px;
    height: 400px;
    cursor: crosshair;
    background-color: #f7f7f7;
}

.zoom-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    transition: transform 0.2s ease-in-out, object-position 0.2s ease-in-out;
}

.zoom-container:hover .zoom-image {
    transform: scale(1.5);
    object-fit: cover;
}

@media (max-width: 767.98px) {
    .zoom-container {
        max-width: 100%;
        height: auto;
    }

    .zoom-container:hover .zoom-image {
        transform: none;
    }
}
</style>

<!-- Script for Interactive Zoom and Modal -->
<script>
document.querySelectorAll('.zoom-container').forEach(container => {
    const image = container.querySelector('.zoom-image');

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width * 100;
        const y = (e.clientY - rect.top) / rect.height * 100;

        image.style.objectPosition = `${x}% ${y}%`;
    });

    container.addEventListener('mouseleave', () => {
        image.style.objectPosition = 'center';
    });
});

// Open modal on Policy button click
document.getElementById('policyButton').addEventListener('click', () => {
    const modal = new bootstrap.Modal(document.getElementById('policyModal'));
    modal.show();
});
</script>

@endsection
