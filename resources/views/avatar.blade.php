@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Avatar Components</h1>
            
            <!-- Default Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Default Avatar</h2>
                <div class="flex items-center space-x-4">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Avatar">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Avatar">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Avatar">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Avatar">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Avatar">
                </div>
            </div>

            <!-- Bordered Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Bordered Avatar</h2>
                <div class="flex items-center space-x-4">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Bordered avatar">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-blue-500 dark:ring-blue-400" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Bordered avatar">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-green-500 dark:ring-green-400" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bordered avatar">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-purple-500 dark:ring-purple-400" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Bordered avatar">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-pink-500 dark:ring-pink-400" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">
                </div>
            </div>

            <!-- Placeholder Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Placeholder Avatar</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Dot Indicator Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Dot Indicator Avatar</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Avatar">
                        <span class="top-0 left-7 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Avatar">
                        <span class="top-0 left-7 absolute w-3.5 h-3.5 bg-red-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Avatar">
                        <span class="top-0 left-7 absolute w-3.5 h-3.5 bg-yellow-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Avatar">
                        <span class="top-0 left-7 absolute w-3.5 h-3.5 bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                </div>
            </div>

            <!-- Stacked Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Stacked Avatar</h2>
                <div class="flex -space-x-4 rtl:space-x-reverse">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Avatar">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Avatar">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Avatar">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Avatar">
                    <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                </div>
            </div>

            <!-- Avatar with Text -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Avatar with Text</h2>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Avatar">
                        <div class="font-medium dark:text-white">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Avatar">
                        <div class="font-medium dark:text-white">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in December 2020</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Avatar">
                        <div class="font-medium dark:text-white">
                            <div>Michael Gough</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in March 2019</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Avatar Sizes -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Avatar Sizes</h2>
                <div class="flex items-center space-x-4">
                    <img class="w-6 h-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Extra small avatar">
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Small avatar">
                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Medium avatar">
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Large avatar">
                    <img class="w-36 h-36 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Extra large avatar">
                </div>
            </div>

            <!-- Square Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Square Avatar</h2>
                <div class="flex items-center space-x-4">
                    <img class="w-10 h-10 rounded" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Square avatar">
                    <img class="w-10 h-10 rounded" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Square avatar">
                    <img class="w-10 h-10 rounded" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Square avatar">
                    <img class="w-10 h-10 rounded" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Square avatar">
                    <img class="w-10 h-10 rounded" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Square avatar">
                </div>
            </div>

            <!-- Initials Avatar -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Initials Avatar</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <span class="font-medium text-gray-600 dark:text-gray-300">JL</span>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-blue-100 rounded-full dark:bg-blue-600">
                        <span class="font-medium text-blue-600 dark:text-blue-300">BG</span>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-green-100 rounded-full dark:bg-green-600">
                        <span class="font-medium text-green-600 dark:text-green-300">MG</span>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-purple-100 rounded-full dark:bg-purple-600">
                        <span class="font-medium text-purple-600 dark:text-purple-300">RT</span>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-pink-100 rounded-full dark:bg-pink-600">
                        <span class="font-medium text-pink-600 dark:text-pink-300">AS</span>
                    </div>
                </div>
            </div>

            <!-- Avatar Dropdown -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Avatar Dropdown</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="avatarButton" type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="User photo">
                        </button>
                        <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>Bonnie Green</div>
                                <div class="font-medium truncate">name@flowbite.com</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Avatar Generator -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Interactive Avatar Generator</h2>
                <div class="p-6 bg-gray-50 rounded-lg dark:bg-gray-800">
                    <div class="space-y-4">
                        <div>
                            <label for="avatar-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Name</label>
                            <input type="text" id="avatar-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name" maxlength="20">
                        </div>
                        <div>
                            <label for="avatar-size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                            <select id="avatar-size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="w-8 h-8">Small</option>
                                <option value="w-10 h-10" selected>Medium</option>
                                <option value="w-16 h-16">Large</option>
                                <option value="w-20 h-20">Extra Large</option>
                            </select>
                        </div>
                        <div>
                            <label for="avatar-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                            <select id="avatar-color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="gray">Gray</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="purple">Purple</option>
                                <option value="pink">Pink</option>
                                <option value="yellow">Yellow</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shape</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="avatar-shape" value="rounded-full" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <span class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Circle</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="avatar-shape" value="rounded" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <span class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Square</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Generated Avatar</label>
                            <div id="generated-avatar" class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <span class="font-medium text-gray-600 dark:text-gray-300">AA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Avatar dropdown functionality
        document.getElementById('avatarButton').addEventListener('click', function() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        });

        // Interactive avatar generator
        const nameInput = document.getElementById('avatar-name');
        const sizeSelect = document.getElementById('avatar-size');
        const colorSelect = document.getElementById('avatar-color');
        const shapeRadios = document.querySelectorAll('input[name="avatar-shape"]');
        const generatedAvatar = document.getElementById('generated-avatar');

        function updateAvatar() {
            const name = nameInput.value.trim();
            const size = sizeSelect.value;
            const color = colorSelect.value;
            const shape = document.querySelector('input[name="avatar-shape"]:checked').value;
            
            // Generate initials
            const initials = name.split(' ').map(word => word[0]).join('').toUpperCase().slice(0, 2) || 'AA';
            
            // Update avatar classes
            generatedAvatar.className = `relative inline-flex items-center justify-center ${size} overflow-hidden bg-${color}-100 ${shape} dark:bg-${color}-600`;
            
            // Update initials and color
            const initialsSpan = generatedAvatar.querySelector('span');
            initialsSpan.textContent = initials;
            initialsSpan.className = `font-medium text-${color}-600 dark:text-${color}-300`;
        }

        nameInput.addEventListener('input', updateAvatar);
        sizeSelect.addEventListener('change', updateAvatar);
        colorSelect.addEventListener('change', updateAvatar);
        shapeRadios.forEach(radio => radio.addEventListener('change', updateAvatar));

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('userDropdown');
            const button = document.getElementById('avatarButton');
            
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
@endsection