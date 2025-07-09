@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Range Slider Components</h1>
            
            <!-- Default Range Slider -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Default Range Slider</h2>
                <div class="space-y-4">
                    <div>
                        <label for="default-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default range</label>
                        <input id="default-range" type="range" value="50" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="default-range-value">50</span>
                            <span>100</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Range Slider with Steps -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Range Slider with Steps</h2>
                <div class="space-y-4">
                    <div>
                        <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Steps range</label>
                        <input id="steps-range" type="range" min="0" max="10" value="5" step="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="steps-range-value">5</span>
                            <span>10</span>
                        </div>
                    </div>
                    <div>
                        <label for="decimal-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Decimal steps range</label>
                        <input id="decimal-range" type="range" min="0" max="5" value="2.5" step="0.5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="decimal-range-value">2.5</span>
                            <span>5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Range Slider Sizes -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Range Slider Sizes</h2>
                <div class="space-y-4">
                    <div>
                        <label for="small-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small range</label>
                        <input id="small-range" type="range" value="50" class="w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="small-range-value">50</span>
                            <span>100</span>
                        </div>
                    </div>
                    <div>
                        <label for="medium-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medium range (default)</label>
                        <input id="medium-range" type="range" value="50" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="medium-range-value">50</span>
                            <span>100</span>
                        </div>
                    </div>
                    <div>
                        <label for="large-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large range</label>
                        <input id="large-range" type="range" value="50" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="large-range-value">50</span>
                            <span>100</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Disabled Range Slider -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Disabled Range Slider</h2>
                <div class="space-y-4">
                    <div>
                        <label for="disabled-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Disabled range</label>
                        <input id="disabled-range" type="range" value="50" disabled class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-not-allowed dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span>50</span>
                            <span>100</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Min and Max Range Slider -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Min and Max Range Slider</h2>
                <div class="space-y-4">
                    <div>
                        <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min-max range</label>
                        <input id="minmax-range" type="range" min="0" max="10" value="5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                            <span>0</span>
                            <span id="minmax-range-value">5</span>
                            <span>10</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Range Slider with Labels -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Range Slider with Labels</h2>
                <div class="space-y-4">
                    <div>
                        <label for="labels-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Range with labels</label>
                        <input id="labels-range" type="range" value="1000" min="0" max="2000" step="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                            <span>$0</span>
                            <span>$500</span>
                            <span>$1000</span>
                            <span>$1500</span>
                            <span>$2000</span>
                        </div>
                        <div class="text-center text-sm text-gray-700 dark:text-gray-300 mt-2">
                            Selected: <span id="labels-range-value" class="font-semibold">$1000</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi-Range Slider -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Multi-Range Slider</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price range</label>
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <input type="range" id="range-min" min="0" max="1000" value="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                <input type="range" id="range-max" min="0" max="1000" value="900" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                            </div>
                            <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mt-1">
                                <span>$0</span>
                                <span>$1000</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-700 dark:text-gray-300 mt-2">
                                <span>Min: $<span id="range-min-value">100</span></span>
                                <span>Max: $<span id="range-max-value">900</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Color Range Sliders -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Color Range Sliders</h2>
                <div class="space-y-4">
                    <div>
                        <label for="red-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Red (0-255)</label>
                        <input id="red-range" type="range" min="0" max="255" value="255" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span id="red-range-value" class="text-sm text-red-600 dark:text-red-400">255</span>
                    </div>
                    <div>
                        <label for="green-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Green (0-255)</label>
                        <input id="green-range" type="range" min="0" max="255" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span id="green-range-value" class="text-sm text-green-600 dark:text-green-400">0</span>
                    </div>
                    <div>
                        <label for="blue-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blue (0-255)</label>
                        <input id="blue-range" type="range" min="0" max="255" value="0" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span id="blue-range-value" class="text-sm text-blue-600 dark:text-blue-400">0</span>
                    </div>
                    <div class="mt-4 p-4 rounded-lg" id="color-preview" style="background-color: rgb(255, 0, 0);">
                        <p class="text-white text-center font-semibold">Color Preview</p>
                        <p class="text-white text-center text-sm" id="color-value">rgb(255, 0, 0)</p>
                    </div>
                </div>
            </div>

            <!-- Volume Control Range -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Volume Control Range</h2>
                <div class="space-y-4">
                    <div>
                        <label for="volume-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volume</label>
                        <div class="flex items-center space-x-4">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12 9a1 1 0 011.414 0L15 10.586l1.586-1.586a1 1 0 111.414 1.414L16.414 12 18 13.586a1 1 0 01-1.414 1.414L15 13.414l-1.586 1.586a1 1 0 01-1.414-1.414L13.586 12 12 10.414A1 1 0 0112 9z" clip-rule="evenodd"></path>
                            </svg>
                            <input id="volume-range" type="range" min="0" max="100" value="50" class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM15 8.898l1.5 1.5a1 1 0 001.414-1.414L16.414 7.5l1.5-1.5a1 1 0 00-1.414-1.414L15 6.086l-1.5-1.5a1 1 0 00-1.414 1.414L13.586 7.5l-1.5 1.5a1 1 0 001.414 1.414L15 8.898z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-center text-sm text-gray-700 dark:text-gray-300 mt-2">
                            Volume: <span id="volume-range-value" class="font-semibold">50%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Default range slider
            const defaultRange = document.getElementById('default-range');
            const defaultValue = document.getElementById('default-range-value');
            
            defaultRange.addEventListener('input', function() {
                defaultValue.textContent = this.value;
            });

            // Steps range slider
            const stepsRange = document.getElementById('steps-range');
            const stepsValue = document.getElementById('steps-range-value');
            
            stepsRange.addEventListener('input', function() {
                stepsValue.textContent = this.value;
            });

            // Decimal range slider
            const decimalRange = document.getElementById('decimal-range');
            const decimalValue = document.getElementById('decimal-range-value');
            
            decimalRange.addEventListener('input', function() {
                decimalValue.textContent = this.value;
            });

            // Small range slider
            const smallRange = document.getElementById('small-range');
            const smallValue = document.getElementById('small-range-value');
            
            smallRange.addEventListener('input', function() {
                smallValue.textContent = this.value;
            });

            // Medium range slider
            const mediumRange = document.getElementById('medium-range');
            const mediumValue = document.getElementById('medium-range-value');
            
            mediumRange.addEventListener('input', function() {
                mediumValue.textContent = this.value;
            });

            // Large range slider
            const largeRange = document.getElementById('large-range');
            const largeValue = document.getElementById('large-range-value');
            
            largeRange.addEventListener('input', function() {
                largeValue.textContent = this.value;
            });

            // Min-max range slider
            const minmaxRange = document.getElementById('minmax-range');
            const minmaxValue = document.getElementById('minmax-range-value');
            
            minmaxRange.addEventListener('input', function() {
                minmaxValue.textContent = this.value;
            });

            // Labels range slider
            const labelsRange = document.getElementById('labels-range');
            const labelsValue = document.getElementById('labels-range-value');
            
            labelsRange.addEventListener('input', function() {
                labelsValue.textContent = '$' + this.value;
            });

            // Multi-range slider
            const rangeMin = document.getElementById('range-min');
            const rangeMax = document.getElementById('range-max');
            const rangeMinValue = document.getElementById('range-min-value');
            const rangeMaxValue = document.getElementById('range-max-value');
            
            rangeMin.addEventListener('input', function() {
                if (parseInt(this.value) > parseInt(rangeMax.value)) {
                    rangeMax.value = this.value;
                }
                rangeMinValue.textContent = this.value;
                rangeMaxValue.textContent = rangeMax.value;
            });
            
            rangeMax.addEventListener('input', function() {
                if (parseInt(this.value) < parseInt(rangeMin.value)) {
                    rangeMin.value = this.value;
                }
                rangeMinValue.textContent = rangeMin.value;
                rangeMaxValue.textContent = this.value;
            });

            // Color range sliders
            const redRange = document.getElementById('red-range');
            const greenRange = document.getElementById('green-range');
            const blueRange = document.getElementById('blue-range');
            const redValue = document.getElementById('red-range-value');
            const greenValue = document.getElementById('green-range-value');
            const blueValue = document.getElementById('blue-range-value');
            const colorPreview = document.getElementById('color-preview');
            const colorValue = document.getElementById('color-value');
            
            function updateColor() {
                const r = redRange.value;
                const g = greenRange.value;
                const b = blueRange.value;
                const rgb = `rgb(${r}, ${g}, ${b})`;
                
                colorPreview.style.backgroundColor = rgb;
                colorValue.textContent = rgb;
                redValue.textContent = r;
                greenValue.textContent = g;
                blueValue.textContent = b;
            }
            
            redRange.addEventListener('input', updateColor);
            greenRange.addEventListener('input', updateColor);
            blueRange.addEventListener('input', updateColor);

            // Volume control range
            const volumeRange = document.getElementById('volume-range');
            const volumeValue = document.getElementById('volume-range-value');
            
            volumeRange.addEventListener('input', function() {
                volumeValue.textContent = this.value + '%';
            });
        });
    </script>

    <style>
        /* Range slider styles that work with Tailwind classes */
        input[type="range"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }

        /* WebKit (Chrome, Safari, Edge) styles */
        input[type="range"]::-webkit-slider-track {
            background: inherit;
            border-radius: inherit;
            height: inherit;
            border: none;
            box-shadow: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            height: 1.25rem;
            width: 1.25rem;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 1px #d1d5db;
            margin-top: -0.375rem;
        }

        input[type="range"]::-webkit-slider-thumb:hover {
            box-shadow: 0 0 0 8px rgba(59, 130, 246, 0.16);
            transform: scale(1.05);
        }

        input[type="range"]::-webkit-slider-thumb:active {
            transform: scale(1.1);
            box-shadow: 0 0 0 12px rgba(59, 130, 246, 0.24);
        }

        /* Firefox styles */
        input[type="range"]::-moz-range-track {
            background: inherit;
            border-radius: inherit;
            height: inherit;
            border: none;
        }

        input[type="range"]::-moz-range-thumb {
            -moz-appearance: none;
            appearance: none;
            border: 2px solid #ffffff;
            height: 1.25rem;
            width: 1.25rem;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
            box-shadow: 0 0 0 1px #d1d5db;
        }

        input[type="range"]::-moz-range-thumb:hover {
            box-shadow: 0 0 0 8px rgba(59, 130, 246, 0.16);
            transform: scale(1.05);
        }

        input[type="range"]::-moz-range-thumb:active {
            transform: scale(1.1);
            box-shadow: 0 0 0 12px rgba(59, 130, 246, 0.24);
        }

        /* Microsoft Edge Legacy styles */
        input[type="range"]::-ms-track {
            background: transparent;
            border-color: transparent;
            border-width: 0.375rem 0;
            color: transparent;
        }

        input[type="range"]::-ms-fill-lower {
            background: #3b82f6;
            border-radius: 0.25rem;
        }

        input[type="range"]::-ms-fill-upper {
            background: #d1d5db;
            border-radius: 0.25rem;
        }

        input[type="range"]::-ms-thumb {
            height: 1.25rem;
            width: 1.25rem;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 1px #d1d5db;
        }

        /* Size variations */
        input[type="range"].h-1::-webkit-slider-thumb {
            height: 1rem;
            width: 1rem;
            margin-top: -0.25rem;
        }

        input[type="range"].h-1::-moz-range-thumb {
            height: 1rem;
            width: 1rem;
        }

        input[type="range"].h-3::-webkit-slider-thumb {
            height: 1.5rem;
            width: 1.5rem;
            margin-top: -0.5rem;
        }

        input[type="range"].h-3::-moz-range-thumb {
            height: 1.5rem;
            width: 1.5rem;
        }

        /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            input[type="range"]::-webkit-slider-thumb {
                box-shadow: 0 0 0 1px #4b5563;
            }
            
            input[type="range"]::-moz-range-thumb {
                box-shadow: 0 0 0 1px #4b5563;
            }

            input[type="range"]::-ms-fill-upper {
                background: #4b5563;
            }
        }

        /* Disabled state */
        input[type="range"]:disabled::-webkit-slider-thumb {
            background: #9ca3af;
            cursor: not-allowed;
        }

        input[type="range"]:disabled::-moz-range-thumb {
            background: #9ca3af;
            cursor: not-allowed;
        }

        input[type="range"]:disabled::-ms-thumb {
            background: #9ca3af;
            cursor: not-allowed;
        }

        input[type="range"]:disabled::-webkit-slider-thumb:hover {
            transform: none;
            box-shadow: 0 0 0 1px #d1d5db;
        }

        input[type="range"]:disabled::-moz-range-thumb:hover {
            transform: none;
            box-shadow: 0 0 0 1px #d1d5db;
        }

        /* Focus styles for accessibility */
        input[type="range"]:focus {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
        }

        input[type="range"]:focus::-moz-range-thumb {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
        }

        /* Smooth transitions */
        input[type="range"]::-webkit-slider-thumb {
            transition: all 0.2s ease;
        }

        input[type="range"]::-moz-range-thumb {
            transition: all 0.2s ease;
        }
    </style>
@endsection