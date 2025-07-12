@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Banner Components</h1>
            <p class="text-gray-600 dark:text-gray-400 mb-8">Informational banners for announcements, notifications, and promotional content.</p>

            <!-- Interactive Demo Controls -->
            <div class="mb-8 p-4 bg-blue-50 border border-blue-200 rounded-lg dark:bg-blue-800/20 dark:border-blue-800">
                <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-400 mb-3">Interactive Demo</h3>
                <p class="text-sm text-blue-700 dark:text-blue-300 mb-4">Click the buttons below to see how different banners would appear when active:</p>
                <div class="flex flex-wrap gap-2">
                    <button type="button" onclick="toggleBanner('info-demo')" class="px-3 py-1.5 text-xs font-medium text-blue-600 bg-white border border-blue-600 rounded-lg hover:bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-gray-700">Toggle Info Banner</button>
                    <button type="button" onclick="toggleBanner('newsletter-demo')" class="px-3 py-1.5 text-xs font-medium text-blue-600 bg-white border border-blue-600 rounded-lg hover:bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-gray-700">Toggle Newsletter Banner</button>
                    <button type="button" onclick="toggleBanner('bottom-demo')" class="px-3 py-1.5 text-xs font-medium text-blue-600 bg-white border border-blue-600 rounded-lg hover:bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-gray-700">Toggle Bottom Banner</button>
                    <button type="button" onclick="toggleBanner('cookie-demo')" class="px-3 py-1.5 text-xs font-medium text-blue-600 bg-white border border-blue-600 rounded-lg hover:bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-gray-700">Toggle Cookie Banner</button>
                </div>
            </div>

            <!-- Marketing Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Marketing Banner</h2>
                <div class="space-y-4">
                    <div class="flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 rounded-lg">
                        <div class="flex items-center mx-auto">
                            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                                <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                        <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"/>
                                    </svg>
                                    <span class="sr-only">Discount</span>
                                </span>
                                <span>Get 5% commission per sale <a href="#" class="inline text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Refer Friends <svg class="w-3 h-3 ms-1 inline rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg></a></span>
                            </p>
                        </div>
                        <div class="flex items-center">
                            <button type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close banner</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Signup Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Newsletter Signup Banner</h2>
                <div class="space-y-4">
                    <div class="flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 rounded-lg">
                        <div class="flex items-center flex-shrink-0 w-full mx-auto">
                            <form action="#" class="flex flex-col items-center justify-center w-full md:flex-row">
                                <label for="email" class="flex-shrink-0 mb-2 me-auto text-sm font-medium text-gray-500 md:mb-0 md:me-4 dark:text-gray-400 md:m-0">Sign up for our newsletter</label>
                                <input type="email" id="email" placeholder="Enter your email" class="bg-white border border-gray-300 text-gray-900 md:w-64 mb-2 md:mb-0 md:me-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
                            </form>
                        </div>
                        <div class="flex items-center">
                            <button type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close banner</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Warning Banner</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Warning</span>
                        <div>
                            <span class="font-medium">Warning alert!</span> This is a warning message with an icon.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Success Banner</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Success</span>
                        <div>
                            <span class="font-medium">Success alert!</span> Operation completed successfully.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Error Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Error Banner</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Error</span>
                        <div>
                            <span class="font-medium">Error alert!</span> Something went wrong. Please try again.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call-to-Action Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Call-to-Action Banner</h2>
                <div class="space-y-4">
                    <div class="p-4 mb-4 bg-blue-50 border border-blue-200 rounded-lg dark:bg-blue-800/20 dark:border-blue-800">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 me-2 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="text-sm font-medium text-blue-800 dark:text-blue-400">Ready to get started? <span class="font-semibold">Upgrade to Pro</span> and unlock all features!</span>
                            </div>
                            <div class="flex items-center">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm1.5 6.5H5.707l.293-.293a1 1 0 0 0-1.414-1.414l-2 2a1 1 0 0 0 0 1.414l2 2a1 1 0 0 0 1.414-1.414L5.707 8.5H12.5a1 1 0 0 0 0-2Z"/>
                                    </svg>
                                    Upgrade now
                                </button>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-blue-800/20 dark:text-blue-400 dark:hover:bg-blue-800/40" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cookie Consent Banner -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Cookie Consent Banner</h2>
                <div class="space-y-4">
                    <div class="flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 rounded-lg">
                        <div class="flex items-center mx-auto">
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                We use cookies to ensure you get the best experience on our website.
                                <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Learn more</a>
                            </p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                Decline
                            </button>
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Accept
                            </button>
                            <button type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close banner</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Demo Banners (Hidden by Default) -->
            <div id="info-demo" class="fixed top-0 start-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 hidden">
                <div class="flex items-center mx-auto">
                    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"/>
                            </svg>
                            <span class="sr-only">Light bulb</span>
                        </span>
                        <span>This is a live demo of an info banner!</span>
                    </p>
                </div>
                <div class="flex items-center">
                    <button onclick="toggleBanner('info-demo')" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>
            </div>

            <div id="newsletter-demo" class="fixed top-0 start-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 hidden">
                <div class="flex items-center flex-shrink-0 w-full mx-auto">
                    <form action="#" class="flex flex-col items-center justify-center w-full md:flex-row">
                        <label for="demo-email" class="flex-shrink-0 mb-2 me-auto text-sm font-medium text-gray-500 md:mb-0 md:me-4 dark:text-gray-400 md:m-0">Demo Newsletter Signup</label>
                        <input type="email" id="demo-email" placeholder="Enter your email" class="bg-white border border-gray-300 text-gray-900 md:w-64 mb-2 md:mb-0 md:me-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
                    </form>
                </div>
                <div class="flex items-center">
                    <button onclick="toggleBanner('newsletter-demo')" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>
            </div>

            <div id="bottom-demo" class="fixed bottom-0 start-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 hidden">
                <div class="flex items-center mx-auto">
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        This is a demo bottom banner!
                    </p>
                </div>
                <div class="flex items-center">
                    <button onclick="toggleBanner('bottom-demo')" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>
            </div>

            <div id="cookie-demo" class="fixed bottom-0 start-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 hidden">
                <div class="flex items-center mx-auto">
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Demo cookie consent banner - We use cookies!
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Learn more</a>
                    </p>
                </div>
                <div class="flex items-center space-x-3">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        Decline
                    </button>
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Accept
                    </button>
                    <button onclick="toggleBanner('cookie-demo')" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleBanner(bannerId) {
            const banner = document.getElementById(bannerId);
            if (banner) {
                banner.classList.toggle('hidden');
            }
        }
    </script>
@endsection
