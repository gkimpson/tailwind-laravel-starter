@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Chat Bubble Components</h1>

            <!-- Default Chat Bubbles -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Default Chat Bubbles</h2>
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5 justify-end">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2 justify-end">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">You</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-blue-700 rounded-s-xl rounded-ee-xl">
                                <p class="text-sm font-normal text-white">Thanks! I'm glad you like it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat Bubbles with Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">With Avatar</h2>
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Jese Leos</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                            </div>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5 justify-end">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2 justify-end">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:47</span>
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">You</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-blue-700 rounded-s-xl rounded-ee-xl">
                                <p class="text-sm font-normal text-white">I agree! Let's ship it tomorrow.</p>
                            </div>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400 text-right">Read</span>
                        </div>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Your image">
                    </div>
                </div>
            </div>

            <!-- Grouped Chat Messages -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Grouped Messages</h2>
                <div class="space-y-2 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Jese Leos</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:45</span>
                            </div>
                            <div class="flex flex-col gap-2 w-full max-w-[320px]">
                                <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <p class="text-sm font-normal text-gray-900 dark:text-white">Hey! How are you?</p>
                                </div>
                                <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <p class="text-sm font-normal text-gray-900 dark:text-white">I wanted to ask about the project status</p>
                                </div>
                                <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <p class="text-sm font-normal text-gray-900 dark:text-white">Can you send me an update?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat with Typing Indicator -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">With Typing Indicator</h2>
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="User image">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">typing...</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <div class="flex items-center space-x-1">
                                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0s"></span>
                                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                                    <span class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat with Image -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">With Image Attachment</h2>
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="User image">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal pb-2.5 text-gray-900 dark:text-white">Check out this design!</p>
                                <div class="group relative my-2.5">
                                    <div class="absolute w-full h-full bg-gray-900/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                                        <button class="inline-flex items-center justify-center rounded-full h-10 w-10 bg-white/30 hover:bg-white/50 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50">
                                            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" class="rounded-lg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat with Options Menu -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">With Options Menu</h2>
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-start gap-2.5">
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="User image">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                    Reply
                                </button>
                                <button class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                    Forward
                                </button>
                                <button class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
