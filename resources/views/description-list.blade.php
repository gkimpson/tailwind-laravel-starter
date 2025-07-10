@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Description List Component</h1>
        <p class="text-gray-600 dark:text-gray-400">Structured content display with terms and definitions in various layouts.</p>
    </div>

    <!-- Basic Description List -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Basic Description List</h2>
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                <dd class="text-lg font-semibold">yourname@flowbite.com</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Home address</dt>
                <dd class="text-lg font-semibold">92 Miles Drive, Newark, NJ 07103, California, USA</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number</dt>
                <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
            </div>
        </dl>
    </div>

    <!-- Horizontal Description List -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Horizontal Description List</h2>
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
                <dd class="text-lg font-semibold">Bonnie Green</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Position</dt>
                <dd class="text-lg font-semibold">Frontend Developer</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Country</dt>
                <dd class="text-lg font-semibold">United States</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Languages</dt>
                <dd class="text-lg font-semibold">English, German, Italian</dd>
            </div>
        </dl>
    </div>

    <!-- Advanced Description List -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Advanced Description List</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Personal Information</h3>
                <dl class="text-gray-900 dark:text-white">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Full Name</dt>
                        <dd class="font-semibold">Bonnie Green</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Date of Birth</dt>
                        <dd class="font-semibold">August 10, 1990</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Gender</dt>
                        <dd class="font-semibold">Female</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Nationality</dt>
                        <dd class="font-semibold">United States</dd>
                    </div>
                </dl>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Professional Information</h3>
                <dl class="text-gray-900 dark:text-white">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Job Title</dt>
                        <dd class="font-semibold">Senior Frontend Developer</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Company</dt>
                        <dd class="font-semibold">Flowbite</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Experience</dt>
                        <dd class="font-semibold">5+ years</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 text-sm dark:text-gray-400">Skills</dt>
                        <dd class="font-semibold">React, Vue.js, TypeScript, Tailwind CSS</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Description List with Icons -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Description List with Icons</h2>
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 flex items-center">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="M10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    Email
                </dt>
                <dd class="text-lg font-semibold">bonnie@flowbite.com</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 flex items-center">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                    </svg>
                    Phone
                </dt>
                <dd class="text-lg font-semibold">+1 (555) 123-4567</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 flex items-center">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                    Address
                </dt>
                <dd class="text-lg font-semibold">123 Main Street, Anytown, AT 12345</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 flex items-center">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    Website
                </dt>
                <dd class="text-lg font-semibold">https://flowbite.com</dd>
            </div>
        </dl>
    </div>

    <!-- Compact Description List -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Compact Description List</h2>
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex justify-between py-2">
                <dt class="text-gray-500 dark:text-gray-400">Status</dt>
                <dd class="font-semibold text-green-600 dark:text-green-400">Active</dd>
            </div>
            <div class="flex justify-between py-2">
                <dt class="text-gray-500 dark:text-gray-400">Created</dt>
                <dd class="font-semibold">Jan 15, 2023</dd>
            </div>
            <div class="flex justify-between py-2">
                <dt class="text-gray-500 dark:text-gray-400">Updated</dt>
                <dd class="font-semibold">Mar 20, 2023</dd>
            </div>
            <div class="flex justify-between py-2">
                <dt class="text-gray-500 dark:text-gray-400">Version</dt>
                <dd class="font-semibold">v2.1.0</dd>
            </div>
        </dl>
    </div>

    <!-- Bordered Description List -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Bordered Description List</h2>
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
            <dl class="divide-y divide-gray-200 dark:divide-gray-700">
                <div class="px-6 py-4">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Product Name</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">Flowbite Dashboard</dd>
                </div>
                <div class="px-6 py-4">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Category</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">Admin Dashboard</dd>
                </div>
                <div class="px-6 py-4">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Price</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">$99</dd>
                </div>
                <div class="px-6 py-4">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Description</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">Premium admin dashboard template built with Tailwind CSS and React components.</dd>
                </div>
                <div class="px-6 py-4">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Features</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">
                        <ul class="list-disc list-inside space-y-1">
                            <li>20+ Dashboard pages</li>
                            <li>100+ UI Components</li>
                            <li>Dark mode support</li>
                            <li>Responsive design</li>
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="mt-8">
        <a href="/" class="text-blue-600 hover:underline">&larr; Back to Components</a>
    </div>
</div>
@endsection