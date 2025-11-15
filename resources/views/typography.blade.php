@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Typography Components</h1>

            <!-- Headings -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Headings</h2>
                <div class="space-y-4">
                    <h1 class="text-5xl font-extrabold dark:text-white">Heading 1 (5xl)</h1>
                    <h2 class="text-4xl font-bold dark:text-white">Heading 2 (4xl)</h2>
                    <h3 class="text-3xl font-bold dark:text-white">Heading 3 (3xl)</h3>
                    <h4 class="text-2xl font-bold dark:text-white">Heading 4 (2xl)</h4>
                    <h5 class="text-xl font-bold dark:text-white">Heading 5 (xl)</h5>
                    <h6 class="text-lg font-bold dark:text-white">Heading 6 (lg)</h6>
                </div>
            </div>

            <!-- Paragraphs -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Paragraphs</h2>
                <div class="space-y-4">
                    <p class="text-lg text-gray-500 dark:text-gray-400">Large paragraph (lg) - Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools.</p>
                    <p class="text-base text-gray-500 dark:text-gray-400">Base paragraph (base) - Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools.</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Small paragraph (sm) - Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools.</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Extra small paragraph (xs) - Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools.</p>
                </div>
            </div>

            <!-- Text Styles -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Text Styles</h2>
                <div class="space-y-4">
                    <p class="text-gray-900 dark:text-white">
                        This is <strong class="font-bold">bold text</strong> and this is <em class="italic">italic text</em> and this is <u class="underline">underlined text</u> and this is <s class="line-through">strikethrough text</s>.
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-light">Font Light</span> |
                        <span class="font-normal">Font Normal</span> |
                        <span class="font-medium">Font Medium</span> |
                        <span class="font-semibold">Font Semibold</span> |
                        <span class="font-bold">Font Bold</span> |
                        <span class="font-extrabold">Font Extrabold</span>
                    </p>
                </div>
            </div>

            <!-- Blockquote -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Blockquote</h2>
                <blockquote class="text-xl italic font-semibold text-gray-900 dark:text-white">
                    <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <p>"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                </blockquote>

                <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                    <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                </blockquote>
            </div>

            <!-- Lists -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Lists</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Unordered List -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Unordered List</h3>
                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>At least 10 characters (and up to 100 characters)</li>
                            <li>At least one lowercase character</li>
                            <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
                        </ul>
                    </div>

                    <!-- Ordered List -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Ordered List</h3>
                        <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                            <li>At least 10 characters (and up to 100 characters)</li>
                            <li>At least one lowercase character</li>
                            <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
                        </ol>
                    </div>
                </div>

                <!-- Description List -->
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Description List</h3>
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 dark:text-gray-400">Email address</dt>
                            <dd class="text-lg font-semibold">yourname@flowbite.com</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 dark:text-gray-400">Home address</dt>
                            <dd class="text-lg font-semibold">92 Miles Drive, Newark, NJ 07103, California, USA</dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 dark:text-gray-400">Phone number</dt>
                            <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Links -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Links</h2>
                <div class="space-y-4">
                    <p class="text-gray-500 dark:text-gray-400">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Default Link</a>
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        <a href="#" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:no-underline">Underlined Link</a>
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Link with Icon
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Button Link
                        </a>
                    </p>
                </div>
            </div>

            <!-- Horizontal Rule -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Horizontal Rule</h2>
                <div class="space-y-4">
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                    <hr class="h-1 my-8 bg-gray-200 border-0 dark:bg-gray-700">
                </div>
            </div>

            <!-- Text Alignment -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Text Alignment</h2>
                <div class="space-y-4">
                    <p class="text-left text-gray-500 dark:text-gray-400">Left aligned text.</p>
                    <p class="text-center text-gray-500 dark:text-gray-400">Center aligned text.</p>
                    <p class="text-right text-gray-500 dark:text-gray-400">Right aligned text.</p>
                    <p class="text-justify text-gray-500 dark:text-gray-400">Justified text. Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                </div>
            </div>

            <!-- Code and Pre-formatted Text -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Code</h2>
                <div class="space-y-4">
                    <p class="text-gray-500 dark:text-gray-400">
                        Use the <code class="text-sm font-semibold text-gray-900 dark:text-white">grid-cols-4</code> class to create a four column grid.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Install packages with <code class="px-2 py-1 text-sm font-semibold text-gray-900 bg-gray-100 rounded dark:bg-gray-700 dark:text-white">npm install</code> command.
                    </p>
                    <pre class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800 overflow-x-auto"><code class="text-sm text-gray-800 dark:text-gray-200">npm install flowbite
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p</code></pre>
                </div>
            </div>

            <!-- Text Colors -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Text Colors</h2>
                <div class="space-y-2">
                    <p class="text-blue-600 dark:text-blue-500">Blue text</p>
                    <p class="text-green-600 dark:text-green-500">Green text</p>
                    <p class="text-red-600 dark:text-red-500">Red text</p>
                    <p class="text-yellow-600 dark:text-yellow-500">Yellow text</p>
                    <p class="text-purple-600 dark:text-purple-500">Purple text</p>
                    <p class="text-gray-600 dark:text-gray-400">Gray text</p>
                </div>
            </div>

        </div>
    </div>
@endsection
