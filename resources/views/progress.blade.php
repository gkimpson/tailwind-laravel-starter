@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Progress Components</h1>
            
            <!-- Default Progress -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Default Progress</h2>
                <div class="space-y-4">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 60%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-red-600 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>

            <!-- Progress with Label -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress with Label</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Flowbite</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-green-700 dark:text-white">React</span>
                            <span class="text-sm font-medium text-green-700 dark:text-white">60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-red-700 dark:text-white">Vue</span>
                            <span class="text-sm font-medium text-red-700 dark:text-white">30%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-red-600 h-2.5 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Sizes -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress Sizes</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Small</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-1.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Default</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Large</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                            <div class="bg-blue-600 h-4 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Extra Large</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-6 dark:bg-gray-700">
                            <div class="bg-blue-600 h-6 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress with Label Inside -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress with Label Inside</h2>
                <div class="space-y-4">
                    <div class="w-full bg-gray-200 rounded-full h-6 dark:bg-gray-700">
                        <div class="bg-blue-600 h-6 rounded-full flex items-center justify-center" style="width: 45%">
                            <span class="text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full">45%</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-6 dark:bg-gray-700">
                        <div class="bg-green-600 h-6 rounded-full flex items-center justify-center" style="width: 60%">
                            <span class="text-xs font-medium text-green-100 text-center p-0.5 leading-none rounded-full">60%</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-6 dark:bg-gray-700">
                        <div class="bg-red-600 h-6 rounded-full flex items-center justify-center" style="width: 30%">
                            <span class="text-xs font-medium text-red-100 text-center p-0.5 leading-none rounded-full">30%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi-step Progress -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Multi-step Progress</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Progress</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">2 of 3</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 66%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-green-700 dark:text-white">Progress</span>
                            <span class="text-sm font-medium text-green-700 dark:text-white">5 of 10</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress with Multiple Colors -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress with Multiple Colors</h2>
                <div class="space-y-4">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-blue-500 to-green-500 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-green-500 to-yellow-500 h-2.5 rounded-full" style="width: 60%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-red-500 to-orange-500 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>

            <!-- Animated Progress -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Animated Progress</h2>
                <div class="space-y-4">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500 ease-out" style="width: 45%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full transition-all duration-1000 ease-out" style="width: 60%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-red-600 h-2.5 rounded-full transition-all duration-1500 ease-out" style="width: 30%"></div>
                    </div>
                </div>
            </div>

            <!-- Progress with Steps -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress with Steps</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="flex items-center text-blue-600 dark:text-blue-500">
                                <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </div>
                                Personal info
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-0.5 mx-4 dark:bg-gray-700">
                                <div class="bg-blue-600 h-0.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <div class="flex items-center text-blue-600 dark:text-blue-500">
                                <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    2
                                </div>
                                Account info
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-0.5 mx-4 dark:bg-gray-700">
                                <div class="bg-blue-600 h-0.5 rounded-full" style="width: 50%"></div>
                            </div>
                            <div class="flex items-center text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </div>
                                Confirmation
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Progress -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Interactive Progress</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">Upload Progress</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white" id="progress-label">0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-300" id="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="mt-4 space-x-2">
                            <button id="start-progress" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Start Upload</button>
                            <button id="reset-progress" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Interactive progress functionality
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('progress-bar');
            const progressLabel = document.getElementById('progress-label');
            const startButton = document.getElementById('start-progress');
            const resetButton = document.getElementById('reset-progress');
            
            let progressInterval;
            let currentProgress = 0;
            
            startButton.addEventListener('click', function() {
                if (progressInterval) return;
                
                startButton.disabled = true;
                progressInterval = setInterval(function() {
                    currentProgress += Math.random() * 10;
                    if (currentProgress >= 100) {
                        currentProgress = 100;
                        clearInterval(progressInterval);
                        progressInterval = null;
                        startButton.disabled = false;
                    }
                    
                    progressBar.style.width = currentProgress + '%';
                    progressLabel.textContent = Math.round(currentProgress) + '%';
                }, 200);
            });
            
            resetButton.addEventListener('click', function() {
                if (progressInterval) {
                    clearInterval(progressInterval);
                    progressInterval = null;
                }
                currentProgress = 0;
                progressBar.style.width = '0%';
                progressLabel.textContent = '0%';
                startButton.disabled = false;
            });
        });
    </script>
@endsection