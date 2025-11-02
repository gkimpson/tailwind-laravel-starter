<div
    id="readEventModal"
    data-event-id=""
    data-modal-target="readEventModal"
    tabindex="-1"
    aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
    <div class="relative max-h-full w-full max-w-4xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="mb-4 flex items-center justify-between rounded-t border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-5">
                <h3 class="font-semibold text-gray-900 dark:text-white" id="readEventTitle"></h3>
                <button type="button" class="inline-flex rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readEventModal">
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="mb-4 grid gap-4 sm:mb-5 sm:grid-cols-2 sm:gap-6">
                <dl class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-600 dark:bg-gray-700">
                    <dt class="sr-only">Date</dt>
                    <dd class="mb-2 flex items-center font-light text-gray-500 dark:text-gray-400">
                        <svg class="mr-1.5 h-4 w-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                fill-rule="evenodd"
                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span class="font-medium text-gray-900 dark:text-white" id="readEventStartDate"></span>
                        <span class="font-medium text-gray-900 dark:text-white" id="readEventEndDate"></span>
                    </dd>
                    <dt class="sr-only">Location</dt>
                    <dd class="mb-4 flex items-center font-light text-gray-500 dark:text-gray-400 sm:mb-5">
                        <svg class="me-1.5 h-4 w-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                fill-rule="evenodd"
                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span class="font-medium text-gray-900 dark:text-white" id="readEventLocation">No location</span>
                    </dd>
                    <dt class="mb-2 leading-none text-gray-500 dark:text-gray-400">Participants</dt>
                    <dd class="mb-4 flex -space-x-4 sm:mb-5">
                        <img class="h-8 w-8 rounded-full border-2 border-gray-50 dark:border-gray-700" src="http://localhost:1313/images/users/helene-engels.png" alt="Helene Engels" />
                        <img class="h-8 w-8 rounded-full border-2 border-gray-50 dark:border-gray-700" src="http://localhost:1313/images/users/robert-brown.png" alt="Robert Brown" />
                        <img class="h-8 w-8 rounded-full border-2 border-gray-50 dark:border-gray-700" src="http://localhost:1313/images/users/bonnie-green.png" alt="Bonnie Green" />
                        <button type="button" class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-50 bg-gray-600 text-xs font-medium text-white hover:bg-gray-500 dark:border-gray-700">+9</button>
                    </dd>
                    <dt class="mb-2 leading-none text-gray-500 dark:text-gray-400">Online</dt>
                    <dd class="mb-4 font-medium text-gray-900 dark:text-white sm:mb-5">Google Meet</dd>
                    <dt class="mb-2 leading-none text-gray-500 dark:text-gray-400">Duration</dt>
                    <dd class="font-medium text-gray-900 dark:text-white" id="readEventTime">All day</dd>
                </dl>
                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                    <dd class="text-gray-500 dark:text-gray-400" id="readEventDescription">No description.</dd>
                </dl>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <button
                        type="button"
                        id="updateEventDrawerButton"
                        data-drawer-target="updateEventDrawer"
                        data-drawer-show="updateEventDrawer"
                        data-modal-hide="readEventModal"
                        aria-controls="updateEventDrawer"
                        data-drawer-placement="right"
                        class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                        <svg class="-ms-0.5 me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                fill-rule="evenodd"
                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        Edit
                    </button>
                    <button
                        type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                    >
                        Preview
                    </button>
                </div>
                <button
                    type="button"
                    class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900"
                    id="deleteEventButton"
                    data-modal-target="deleteEventModal"
                    data-modal-toggle="deleteEventModal"
                >
                    <svg class="-ms-0.5 me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            fill-rule="evenodd"
                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                            clip-rule="evenodd"
                        />
                    </svg>

                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
