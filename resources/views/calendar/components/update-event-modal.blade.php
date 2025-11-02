<!-- drawer component -->
<div id="updateEventDrawer" class="fixed right-0 top-0 z-40 h-screen w-80 translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800" tabindex="-1" aria-labelledby="updateEventDrawerLabel" aria-hidden="true">
    <h5 id="updateEventDrawerLabel" class="mb-6 inline-flex items-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400">Update Event</h5>
    <button
        type="button"
        data-drawer-dismiss="updateEventDrawer"
        aria-controls="updateEventDrawer"
        class="absolute right-2.5 top-2.5 inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
    >
        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
            ></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="#" id="updateEventForm">
        <div class="space-y-4">
            <div>
                <label for="update-title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input
                    type="text"
                    name="update-title"
                    id="update-title"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                    value=""
                    placeholder="Add title here"
                    required=""
                />
            </div>
            <div>
                <label for="update-description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea
                    id="update-description"
                    name="update-description"
                    rows="6"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                    placeholder="Enter event description here..."
                ></textarea>
            </div>
            <div>
                <label for="update-start-date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Start date</label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        datepicker
                        id="update-start-date"
                        name="update-start-date"
                        datepicker-format="yyyy-mm-dd"
                        type="text"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                        value=""
                        placeholder="Select date"
                        required
                        datepicker-autohide
                    />
                </div>
            </div>
            <div>
                <label for="update-end-date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">End date</label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        datepicker
                        id="update-end-date"
                        name="update-end-date"
                        datepicker-format="yyyy-mm-dd"
                        type="text"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                        value=""
                        placeholder="Select date"
                        required
                        datepicker-autohide
                    />
                </div>
            </div>
            <div>
                <div class="mr-4 flex items-center">
                    <input
                        data-collapse-toggle="update-time-range-container"
                        id="select-update-time-range-container"
                        type="checkbox"
                        value=""
                        name="select-update-time-range-container"
                        class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                    />
                    <label for="select-update-time-range-container" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add time</label>
                </div>
                <div id="update-time-range-container" class="mt-2 grid hidden w-full grid-cols-2 gap-4">
                    <div>
                        <label for="update-start-time" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Start time:</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 end-0 top-0 flex items-center pe-3.5">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input
                                type="time"
                                id="update-start-time"
                                name="update-start-time"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm leading-none text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                value="00:00"
                                required
                            />
                        </div>
                    </div>
                    <div>
                        <label for="update-end-time" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">End time:</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 end-0 top-0 flex items-center pe-3.5">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input
                                type="time"
                                id="update-end-time"
                                name="update-end-time"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm leading-none text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                value="00:00"
                                required
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for="location" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Location</label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="update-location"
                        name="update-location"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                        value=""
                        placeholder="Enter location"
                    />
                </div>
            </div>
            <div>
                <label for="add-guests" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Add guests</label>
                <div class="relative">
                    <input
                        type="search"
                        id="update-add-guests"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 pl-4 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                        placeholder="Add guest email"
                    />
                    <button
                        type="button"
                        class="absolute bottom-2.5 right-2.5 inline-flex items-center rounded-lg bg-primary-700 px-3 py-1.5 text-xs font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                        <svg aria-hidden="true" class="-ml-0.5 mr-0.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Add
                    </button>
                </div>
                <div class="mb-5 mt-2 flex space-x-1">
                    <div class="relative">
                        <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="http://localhost:1313/images/users/helene-engels.png" alt="helene avatar" />
                        <a href="#" class="absolute left-5 top-0 flex h-3.5 w-3.5  items-center justify-center rounded-full border-2 border-white bg-gray-400 hover:bg-gray-500 dark:border-gray-800">
                            <svg aria-hidden="true" class="h-2 w-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only">Remove user</span>
                        </a>
                    </div>
                    <div class="relative">
                        <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="http://localhost:1313/images/users/bonnie-green.png" alt="bonnie avatar" />
                        <button type="button" class="absolute left-5 top-0 flex h-3.5 w-3.5  items-center justify-center rounded-full border-2 border-white bg-gray-400 hover:bg-gray-500 dark:border-gray-800">
                            <svg aria-hidden="true" class="h-2 w-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only">Remove user</span>
                        </button>
                    </div>
                    <div class="relative">
                        <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="http://localhost:1313/images/users/robert-brown.png" alt="robert avatar" />
                        <button type="button" class="absolute left-5 top-0 flex h-3.5 w-3.5  items-center justify-center rounded-full border-2 border-white bg-gray-400 hover:bg-gray-500 dark:border-gray-800">
                            <svg aria-hidden="true" class="h-2 w-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only">Remove user</span>
                        </button>
                    </div>
                    <div class="relative">
                        <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="http://localhost:1313/images/users/jese-leos.png" alt="jese avatar" />
                        <button type="button" class="absolute left-5 top-0 flex h-3.5 w-3.5  items-center justify-center rounded-full border-2 border-white bg-gray-400 hover:bg-gray-500 dark:border-gray-800">
                            <svg aria-hidden="true" class="h-2 w-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only">Remove user</span>
                        </button>
                    </div>
                    <button type="submit" class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-white bg-gray-700 text-xs font-medium text-white hover:bg-gray-600 dark:border-gray-800 dark:bg-gray-600">+7</button>
                </div>
            </div>
            <div>
                <div class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tag Color</div>
                <div class="flex items-center space-x-2">
                    <button type="button" class="h-6 w-6 rounded-xs bg-purple-500 ring-2 ring-transparent data-[color-selected=true]:ring-purple-300" data-color-picker-target="editColorsInput" data-color-picker-value="purple"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-indigo-500 ring-2 ring-transparent data-[color-selected=true]:ring-indigo-300" data-color-picker-target="editColorsInput" data-color-picker-value="indigo"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-primary-600 ring-2 ring-transparent data-[color-selected=true]:ring-primary-300" data-color-picker-target="editColorsInput" data-color-picker-value="primary"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-pink-500 ring-2 ring-transparent data-[color-selected=true]:ring-pink-300" data-color-picker-target="editColorsInput" data-color-picker-value="pink"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-teal-400 ring-2 ring-transparent data-[color-selected=true]:ring-teal-300" data-color-picker-target="editColorsInput" data-color-picker-value="teal"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-green-400 ring-2 ring-transparent data-[color-selected=true]:ring-green-300" data-color-picker-target="editColorsInput" data-color-picker-value="green"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-yellow-300 ring-2 ring-transparent data-[color-selected=true]:ring-yellow-300" data-color-picker-target="editColorsInput" data-color-picker-value="yellow"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-orange-400 ring-2 ring-transparent data-[color-selected=true]:ring-orange-300" data-color-picker-target="editColorsInput" data-color-picker-value="orange"></button>
                    <button type="button" class="h-6 w-6 rounded-xs bg-red-500 ring-2 ring-transparent data-[color-selected=true]:ring-red-300" data-color-picker-target="editColorsInput" data-color-picker-value="red"></button>
                </div>
            </div>
            <input id="editColorsInput" name="update-color" type="hidden" value="primary-600" />
            <div>
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="guest-permission-checkbox">Guest Permissions</label>
                <div class="space-y-3">
                    <div class="mr-4 flex items-center">
                        <input
                            id="guest-permission-1-checkbox"
                            type="checkbox"
                            value=""
                            name="guest-permission-checkbox"
                            class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        />
                        <label for="guest-permission-1-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Modify event</label>
                    </div>
                    <div class="mr-4 flex items-center">
                        <input
                            id="guest-permission-2-checkbox"
                            type="checkbox"
                            value=""
                            name="guest-permission-checkbox"
                            class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        />
                        <label for="guest-permission-2-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Invite others</label>
                    </div>
                    <div class="mr-4 flex items-center">
                        <input
                            checked=""
                            id="guest-permission-3-checkbox"
                            type="checkbox"
                            value=""
                            name="guest-permission-checkbox"
                            class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        />
                        <label for="guest-permission-3-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">See guest list</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center space-x-3 pt-4 sm:mt-0">
            <button
                type="submit"
                class="w-full justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            >
                Update event
            </button>
            <button
                type="button"
                id="updateEventDrawerDeleteButton"
                class="inline-flex w-full items-center justify-center rounded-lg border border-red-600 px-5 py-2.5 text-center text-sm font-medium text-red-600 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:bg-red-600 dark:hover:text-white dark:focus:ring-red-900"
            >
                <svg aria-hidden="true" class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                Delete
            </button>
        </div>
    </form>
</div>
