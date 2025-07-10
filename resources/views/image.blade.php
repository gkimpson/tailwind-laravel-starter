@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Image Component</h1>
        <p class="text-gray-600 dark:text-gray-400">Responsive images with various styling options and layouts.</p>
    </div>

    <!-- Basic Image -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Basic Image</h2>
        <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/800/600?random=1" alt="Basic image example">
    </div>

    <!-- Rounded Images -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Rounded Images</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Default Rounded</h3>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/400/400?random=11" alt="Rounded image">
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">More Rounded</h3>
                <img class="h-auto max-w-full rounded-xl" src="https://picsum.photos/400/400?random=12" alt="More rounded image">
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Full Rounded</h3>
                <img class="h-auto max-w-full rounded-full" src="https://picsum.photos/400/400?random=13" alt="Full rounded image">
            </div>
        </div>
    </div>

    <!-- Image with Border -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image with Border</h2>
        <img class="h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" src="https://picsum.photos/800/600?random=2" alt="Bordered image">
    </div>

    <!-- Image with Shadow -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image with Shadow</h2>
        <img class="h-auto max-w-full rounded-lg shadow-lg" src="https://picsum.photos/800/600?random=3" alt="Shadow image">
    </div>

    <!-- Image Sizes -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image Sizes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Small (96px)</h3>
                <img class="w-24 h-24 rounded object-cover" src="https://picsum.photos/96/96?random=14" alt="Small image">
            </div>
            <div>
                <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Medium (128px)</h3>
                <img class="w-32 h-32 rounded object-cover" src="https://picsum.photos/128/128?random=15" alt="Medium image">
            </div>
            <div>
                <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Large (192px)</h3>
                <img class="w-48 h-48 rounded object-cover" src="https://picsum.photos/192/192?random=16" alt="Large image">
            </div>
            <div>
                <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Extra Large (256px)</h3>
                <img class="w-64 h-64 rounded object-cover" src="https://picsum.photos/256/256?random=17" alt="Extra large image">
            </div>
        </div>
    </div>

    <!-- Avatar Images -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Avatar Images</h2>
        <div class="flex items-center space-x-4">
            <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff&size=40" alt="Avatar 1">
            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Jane+Smith&background=ef4444&color=fff&size=48" alt="Avatar 2">
            <img class="w-16 h-16 rounded-full" src="https://ui-avatars.com/api/?name=Mike+Johnson&background=10b981&color=fff&size=64" alt="Avatar 3">
            <img class="w-20 h-20 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=8b5cf6&color=fff&size=80" alt="Avatar 4">
            <img class="w-24 h-24 rounded-full" src="https://ui-avatars.com/api/?name=Alex+Brown&background=f59e0b&color=fff&size=96" alt="Avatar 5">
        </div>
    </div>

    <!-- Image with Caption -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image with Caption</h2>
        <figure class="max-w-lg">
            <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/600/400?random=4" alt="Image with caption">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Beautiful landscape photography showcasing natural scenery.</figcaption>
        </figure>
    </div>

    <!-- Responsive Image Grid -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Responsive Image Grid</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/400?random=21" alt="Grid image 1">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/300?random=22" alt="Grid image 2">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/350?random=23" alt="Grid image 3">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/380?random=24" alt="Grid image 4">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/320?random=25" alt="Grid image 5">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/360?random=26" alt="Grid image 6">
            </div>
        </div>
    </div>

    <!-- Image with Overlay -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image with Overlay</h2>
        <div class="relative max-w-lg">
            <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/600/400?random=5" alt="Overlay image">
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg flex items-center justify-center">
                <h3 class="text-white text-xl font-bold">Image Overlay</h3>
            </div>
        </div>
    </div>

    <!-- Card with Image -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Card with Image</h2>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://picsum.photos/400/200?random=6" alt="Card image" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Aspect Ratio Images -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Aspect Ratio Images</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Square (1:1)</h3>
                <div class="aspect-square">
                    <img class="w-full h-full object-cover rounded-lg" src="https://picsum.photos/400/400?random=18" alt="Square aspect ratio">
                </div>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Video (16:9)</h3>
                <div class="aspect-video">
                    <img class="w-full h-full object-cover rounded-lg" src="https://picsum.photos/640/360?random=7" alt="Video aspect ratio">
                </div>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Portrait (3:4)</h3>
                <div class="aspect-[3/4]">
                    <img class="w-full h-full object-cover rounded-lg" src="https://picsum.photos/300/400?random=19" alt="Portrait aspect ratio">
                </div>
            </div>
        </div>
    </div>

    <!-- Image Gallery Preview -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Image Gallery Preview</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/400?random=31" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/300?random=32" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/350?random=33" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/380?random=34" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/320?random=35" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/360?random=36" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/340?random=37" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/370?random=38" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/330?random=39" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/390?random=40" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://picsum.photos/300/280?random=41" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <a href="/" class="text-blue-600 hover:underline">&larr; Back to Components</a>
    </div>
</div>
@endsection