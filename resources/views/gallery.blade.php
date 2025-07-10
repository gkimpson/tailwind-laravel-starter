@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Gallery Component</h1>
        <p class="text-gray-600 dark:text-gray-400">Interactive image galleries with different layouts and lightbox functionality.</p>
    </div>

    <!-- Basic Gallery -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Basic Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="Gallery image 1">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="Gallery image 2">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="Gallery image 3">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="Gallery image 4">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="Gallery image 5">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="Gallery image 6">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="Gallery image 7">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="Gallery image 8">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="Gallery image 9">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="Gallery image 10">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="Gallery image 11">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Gallery -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Featured Gallery</h2>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="Featured image">
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Gallery thumbnail 1">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Gallery thumbnail 2">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Gallery thumbnail 3">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Gallery thumbnail 4">
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Gallery thumbnail 5">
                    <div class="absolute inset-0 bg-black bg-opacity-60 rounded-lg flex items-center justify-center hover:bg-opacity-50 transition-colors cursor-pointer">
                        <span class="text-xl font-semibold text-white">+99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Gallery -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Card Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-2.jpg" alt="Card image 1">
                    <div class="absolute top-2 right-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">New</span>
                    </div>
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Nature Photography</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Beautiful landscape captures from around the world showcasing natural beauty.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">24 photos</span>
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">View Gallery</a>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-3.jpg" alt="Card image 2">
                    <div class="absolute top-2 right-2">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Popular</span>
                    </div>
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Urban Architecture</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Modern buildings and architectural marvels from metropolitan cities.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">18 photos</span>
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">View Gallery</a>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-4.jpg" alt="Card image 3">
                    <div class="absolute top-2 right-2">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Featured</span>
                    </div>
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Street Photography</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Candid moments and everyday life captured through street photography.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">32 photos</span>
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Gallery with Lightbox -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Interactive Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="lightbox-gallery">
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-5.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-5.jpg" alt="Lightbox image 1">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-6.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-6.jpg" alt="Lightbox image 2">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-7.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image-7.jpg" alt="Lightbox image 3">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="Lightbox image 4">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Lightbox image 5">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="Lightbox image 6">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="Lightbox image 7">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
            <div class="relative group cursor-pointer" data-image="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg">
                <img class="h-auto max-w-full rounded-lg group-hover:opacity-75 transition-opacity" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="Lightbox image 8">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Compact Gallery -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Compact Gallery</h2>
        <div class="flex space-x-4 overflow-x-auto pb-4">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="Compact 1">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Compact 2">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="Compact 3">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Compact 4">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Compact 5">
            <img class="w-32 h-32 rounded-lg object-cover flex-shrink-0 hover:scale-105 transition-transform cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Compact 6">
        </div>
    </div>

    <div class="mt-8">
        <a href="/" class="text-blue-600 hover:underline">&larr; Back to Components</a>
    </div>
</div>

<!-- Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center">
    <div class="relative max-w-4xl max-h-full">
        <img id="lightbox-image" class="max-w-full max-h-full rounded-lg" src="" alt="">
        <button id="close-lightbox" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-colors">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lightboxGallery = document.getElementById('lightbox-gallery');
    const lightboxModal = document.getElementById('lightbox-modal');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightbox = document.getElementById('close-lightbox');

    if (lightboxGallery && lightboxModal && lightboxImage && closeLightbox) {
        // Open lightbox when clicking on gallery images
        lightboxGallery.addEventListener('click', function(e) {
            const galleryItem = e.target.closest('[data-image]');
            if (galleryItem) {
                const imageSrc = galleryItem.getAttribute('data-image');
                lightboxImage.src = imageSrc;
                lightboxModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        });

        // Close lightbox
        function closeLightboxModal() {
            lightboxModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        closeLightbox.addEventListener('click', closeLightboxModal);
        
        // Close lightbox when clicking outside the image
        lightboxModal.addEventListener('click', function(e) {
            if (e.target === lightboxModal) {
                closeLightboxModal();
            }
        });

        // Close lightbox with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
                closeLightboxModal();
            }
        });
    }
});
</script>
@endsection