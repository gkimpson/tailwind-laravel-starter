@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Device Mockup Components</h1>

            <!-- Mobile Mockup (iPhone) -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Mobile Mockup (iPhone)</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                        <div class="h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-light.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-dark.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tablet Mockup (iPad) -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Tablet Mockup (iPad)</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[454px] max-w-[341px] md:h-[682px] md:max-w-[512px]">
                        <div class="h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden h-[426px] md:h-[654px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/tablet-mockup-image.png" class="dark:hidden h-[426px] md:h-[654px]" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/tablet-mockup-image-dark.png" class="hidden dark:block h-[426px] md:h-[654px]" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laptop Mockup (MacBook) -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Laptop Mockup (MacBook)</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[8px] rounded-t-xl h-[172px] max-w-[301px] md:h-[294px] md:max-w-[512px]">
                        <div class="rounded-lg overflow-hidden h-[156px] md:h-[278px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen.png" class="dark:hidden h-[156px] md:h-[278px] w-full rounded-lg" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen-dark.png" class="hidden dark:block h-[156px] md:h-[278px] w-full rounded-lg" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative mx-auto bg-gray-900 dark:bg-gray-700 rounded-b-xl rounded-t-sm h-[17px] max-w-[351px] md:h-[21px] md:max-w-[597px]">
                        <div class="absolute left-1/2 top-0 -translate-x-1/2 rounded-b-xl w-[56px] h-[5px] md:w-[96px] md:h-[8px] bg-gray-800"></div>
                    </div>
                </div>
            </div>

            <!-- Desktop Mockup (iMac) -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Desktop Mockup (iMac)</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[16px] rounded-t-xl h-[172px] max-w-[301px] md:h-[294px] md:max-w-[512px]">
                        <div class="rounded-xl overflow-hidden h-[140px] md:h-[262px]">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/screen-image-imac.png" class="dark:hidden h-[140px] md:h-[262px] w-full rounded-xl" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/screen-image-imac-dark.png" class="hidden dark:block h-[140px] md:h-[262px] w-full rounded-xl" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative mx-auto bg-gray-900 dark:bg-gray-700 rounded-b-xl h-[24px] max-w-[301px] md:h-[42px] md:max-w-[512px]"></div>
                </div>
                <div class="flex justify-center">
                    <div class="relative mx-auto bg-gray-800 rounded-b-xl h-[55px] max-w-[83px] md:h-[95px] md:max-w-[142px]"></div>
                </div>
            </div>

            <!-- Smartwatch Mockup (Apple Watch) -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Smartwatch Mockup (Apple Watch)</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-900 dark:border-gray-800 bg-gray-900 border-[10px] rounded-[2.5rem] h-[63px] w-[56px]">
                        <div class="h-[41px] w-[6px] bg-gray-800 dark:bg-gray-800 absolute -start-[16px] top-[10px] rounded-s-lg"></div>
                        <div class="h-[32px] w-[6px] bg-gray-800 dark:bg-gray-800 absolute -end-[16px] top-[15px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden h-[43px]">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/watch-screen-image.png" class="dark:hidden h-[43px]" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/watch-screen-image-dark.png" class="hidden dark:block h-[43px]" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Android Phone Mockup -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Android Phone Mockup</h2>
                <div class="flex justify-center">
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-xl h-[600px] w-[300px] shadow-xl">
                        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-lg overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-light.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-dark.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Usage Note -->
            <div class="mb-8">
                <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                    <h3 class="text-sm font-semibold text-blue-800 dark:text-blue-300 mb-2">Device Mockups Usage</h3>
                    <p class="text-sm text-blue-700 dark:text-blue-400 mb-2">
                        Device mockups are perfect for showcasing your app or website designs in a realistic context. Replace the screenshot images with your own application screenshots.
                    </p>
                    <p class="text-sm text-blue-700 dark:text-blue-400">
                        These mockups are responsive and will scale appropriately on different screen sizes using Tailwind's responsive prefixes (md:, lg:, etc.).
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
