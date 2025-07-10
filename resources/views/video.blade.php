@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Video Component</h1>
        <p class="text-gray-600 dark:text-gray-400">Responsive video players with custom controls and embed options.</p>
    </div>

    <!-- Basic Video -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Basic Video Player</h2>
        <video class="w-full h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" controls>
            <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Video with Poster -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Video with Poster</h2>
        <video class="w-full h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" controls poster="https://picsum.photos/800/450?random=201">
            <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Custom Video Player -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Custom Video Player</h2>
        <div class="relative">
            <video id="custom-video" class="w-full h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" poster="https://picsum.photos/800/450?random=202">
                <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg" id="play-overlay">
                <button id="play-button" class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 ml-1 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                        <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Video Card -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Video Card</h2>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <div class="relative">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="https://picsum.photos/400/192?random=203" alt="Video thumbnail" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex items-center justify-center w-12 h-12 bg-black bg-opacity-70 rounded-full">
                            <svg class="w-4 h-4 ml-0.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">
                        5:32
                    </div>
                </div>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Getting Started with Flowbite</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Learn how to use Flowbite components in your web projects with this comprehensive tutorial.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500 dark:text-gray-400">John Doe</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">1.2K views</span>
                </div>
            </div>
        </div>
    </div>

    <!-- YouTube Embed -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">YouTube Embed</h2>
        <div class="aspect-video max-w-full">
            <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Vimeo Embed -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Vimeo Embed</h2>
        <div class="aspect-video max-w-full">
            <iframe class="w-full h-full rounded-lg" src="https://player.vimeo.com/video/76979871?h=8272103f6e" title="Vimeo video player" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Video Gallery -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Video Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <img class="rounded-t-lg w-full h-32 object-cover" src="https://picsum.photos/400/128?random=204" alt="Video 1" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex items-center justify-center w-10 h-10 bg-black bg-opacity-70 rounded-full">
                            <svg class="w-3 h-3 ml-0.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-70 text-white text-xs px-1 py-0.5 rounded">
                        3:45
                    </div>
                </div>
                <div class="p-3">
                    <h5 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Component Tutorial</h5>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Basic components overview</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <img class="rounded-t-lg w-full h-32 object-cover" src="https://picsum.photos/400/128?random=205" alt="Video 2" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex items-center justify-center w-10 h-10 bg-black bg-opacity-70 rounded-full">
                            <svg class="w-3 h-3 ml-0.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-70 text-white text-xs px-1 py-0.5 rounded">
                        7:12
                    </div>
                </div>
                <div class="p-3">
                    <h5 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Advanced Features</h5>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Deep dive into advanced usage</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <img class="rounded-t-lg w-full h-32 object-cover" src="https://picsum.photos/400/128?random=206" alt="Video 3" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex items-center justify-center w-10 h-10 bg-black bg-opacity-70 rounded-full">
                            <svg class="w-3 h-3 ml-0.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-1 right-1 bg-black bg-opacity-70 text-white text-xs px-1 py-0.5 rounded">
                        12:30
                    </div>
                </div>
                <div class="p-3">
                    <h5 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Best Practices</h5>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Tips for optimal implementation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Player with Controls -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Video Player with Controls</h2>
        <div class="relative bg-black rounded-lg overflow-hidden">
            <video class="w-full h-auto" controls preload="metadata">
                <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute top-4 left-4">
                <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">LIVE</span>
            </div>
        </div>
        <div class="mt-4 bg-white dark:bg-gray-800 p-4 rounded-lg border border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Flowbite Introduction</h3>
            <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                <span>1,234 views</span>
                <span>Uploaded 2 days ago</span>
            </div>
            <p class="mt-2 text-gray-700 dark:text-gray-300">Learn about Flowbite components and how to integrate them into your web projects effectively.</p>
        </div>
    </div>

    <!-- Responsive Video Container -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Responsive Video Container</h2>
        <div class="relative overflow-hidden bg-black rounded-lg" style="padding-bottom: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/KaLxCiilHns" title="Responsive video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <div class="mt-8">
        <a href="/" class="text-blue-600 hover:underline">&larr; Back to Components</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('custom-video');
    const playButton = document.getElementById('play-button');
    const playOverlay = document.getElementById('play-overlay');

    if (playButton && video && playOverlay) {
        playButton.addEventListener('click', function() {
            video.play();
            playOverlay.style.display = 'none';
        });

        video.addEventListener('pause', function() {
            if (video.currentTime === 0) {
                playOverlay.style.display = 'flex';
            }
        });

        video.addEventListener('ended', function() {
            playOverlay.style.display = 'flex';
        });
    }
});
</script>
@endsection