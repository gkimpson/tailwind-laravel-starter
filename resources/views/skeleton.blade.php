@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Skeleton Component</h1>
        <p class="text-gray-600 dark:text-gray-400">Loading placeholders with animated backgrounds for better user experience.</p>
    </div>

    <!-- Basic Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Basic Skeleton</h2>
        <div class="animate-pulse">
            <div class="rounded-lg bg-gray-200 dark:bg-gray-700 h-4 mb-4"></div>
            <div class="rounded-lg bg-gray-200 dark:bg-gray-700 h-4 mb-4"></div>
            <div class="rounded-lg bg-gray-200 dark:bg-gray-700 h-4 mb-4 w-3/4"></div>
        </div>
    </div>

    <!-- Card Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Card Skeleton</h2>
        <div class="max-w-sm p-4 border border-gray-200 rounded shadow animate-pulse dark:border-gray-700">
            <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700">
                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"/>
                </svg>
            </div>
            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            <div class="flex items-center mt-4">
                <svg class="w-10 h-10 me-3 text-gray-200 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
                <div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"></div>
                    <div class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- List Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">List Skeleton</h2>
        <div class="max-w-md p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
            </div>
            <div class="flex items-center justify-between pt-4">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
            </div>
            <div class="flex items-center justify-between pt-4">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
            </div>
            <div class="flex items-center justify-between pt-4">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
            </div>
            <div class="flex items-center justify-between pt-4">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                    <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
            </div>
        </div>
    </div>

    <!-- Table Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Table Skeleton</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-600 w-20"></div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-600 w-16"></div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-600 w-12"></div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-600 w-16"></div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="animate-pulse">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-24"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-16"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-20"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-12"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-28"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-20"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-14"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-18"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-12"></div>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-36"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-22"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-18"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-16"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-12"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Profile Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Profile Skeleton</h2>
        <div class="flex items-center space-x-4 animate-pulse">
            <div class="w-10 h-10 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            <div class="flex-1 space-y-2">
                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-48"></div>
            </div>
        </div>
    </div>

    <!-- Testimonial Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Testimonial Skeleton</h2>
        <div class="max-w-md p-4 border border-gray-200 rounded shadow animate-pulse dark:border-gray-700">
            <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700">
                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                </svg>
            </div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            <div class="flex items-center mt-4">
                <svg class="w-10 h-10 me-3 text-gray-200 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
                <div>
                    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"></div>
                    <div class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Skeleton -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Video Skeleton</h2>
        <div class="animate-pulse">
            <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded dark:bg-gray-700">
                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 12">
                    <path d="M15.314 3.5a1 1 0 0 1-.02.1l-3.38 5.2a1 1 0 0 1-1.67 0L6.942 3.6a1 1 0 0 1 .02-.1A2.99 2.99 0 0 1 9.5 1.5h3a3 3 0 0 1 2.814 2Z"/>
                    <path d="M14.5 5.5V9.5a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V5.5a1.5 1.5 0 0 1 1.5-1.5h10a1.5 1.5 0 0 1 1.5 1.5ZM8 7a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0V8a1 1 0 0 0-1-1Z"/>
                </svg>
            </div>
            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4 mt-4"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
    </div>

    <div class="mt-8">
        <a href="/" class="text-blue-600 hover:underline">&larr; Back to Components</a>
    </div>
</div>
@endsection