
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanban-Board</title>
</head>
<body class="">
<div class="h-screen flex">
    <div class="w-64 bg-gray-100 border-r">
        <img src="https://stackoverflow.design/assets/img/logos/se/se-icon.svg" class="w-20 h-20">
        <nav class="mt-8 ">
            <h3 class="ml-2 font-semibold text-gray-600 uppercase tracking-wide">Issues</h3>
            <div class="mt-2 ">
                <a href="#" class=" items-center flex justify-between bg-gray-200 rounded-lg px-3 py-1">
                    <span class=" text-sm font-medium text-gray-900">All</span>
                    <span class="text-xs text-gray-700 font-semibold">36</span>
                </a>
                <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                    <span class=" text-sm font-medium text-gray-700">Assinged To Me</span>
                    <span class="text-xs text-gray-700 font-semibold">2</span>
                </a>
                <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                    <span class=" text-sm font-medium text-gray-700">Created By Me</span>
                    <span class="text-xs text-gray-700 font-semibold">2</span>
                </a>
                <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                    <span class=" text-sm font-medium text-gray-700">Archieved</span>
                    {{--                        <span class="text-xs text-gray-700 font-semibold"></span>--}}
                </a>
                <h3 class="mt-8 ml-2 font-semibold text-gray-600 uppercase tracking-wide">Tags</h3>
                <div class="mt-2 ">
                    <a href="#" class=" items-center flex justify-between bg-gray-200 rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-900">Bug</span>
                        {{--                            <span class="text-xs text-gray-700 font-semibold"></span>--}}
                    </a>
                    <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-700">Feature Request</span>
                        {{--                            <span class="text-xs text-gray-700 font-semibold">2</span>--}}
                    </a>
                    <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-700">Marketing</span>
                        {{--                        <span class="text-xs text-gray-700 font-semibold"></span>--}}
                    </a>
                    <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-700">v2.0</span>
                        {{--                            <span class="text-xs text-gray-700 font-semibold">Enhacement</span>--}}
                    </a>
                    <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-700">Enhacement</span>
                        {{--                            <span class="text-xs text-gray-700 font-semibold">Enhacement</span>--}}
                    </a>
                    <a href="#" class=" items-center flex justify-between  rounded-lg px-3 py-1">
                        <span class=" text-sm font-medium text-gray-700">Design</span>
                        {{--                            <span class="text-xs text-gray-700 font-semibold">2</span>--}}
                    </a>

                </div>
            </div>
            <button type="submit" class="mt-16 ml-3 bg bg-gray-100 w-full rounded-lg flex items-center text-sm font-medium text-gray-600  ">
                <svg class="text-gray-500 " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h3zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
                <span class="ml-3">Add New Projects</span>
            </button>
        </nav>
    </div>
    <div class="flex-1 min-w-0 bg-white">
        <div class="border-b-2 border-gray-200">
            <header class="px-6">
                <div class="flex justify-between items-center  border-b border-gray-200">
                    <div class="flex-1">
                        <div class="relative w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-2 bi bi-search w-6 h-6 text-gray-600" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                                </span>
                            <input type="text" placeholder="Search" class="block w-full text-sm placeholder-gray-600 text-gray-900 rounded-md border border-gray-400 py-2 pl-10 pr-4">
                        </div>
                    </div>
                    <div class="flex  items-center">
                        <button>
                            <svg class="bi bi-bell h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                        </button>
                        <button class="ml-6">
                            <img class="h-9 w-9 rounded-full object-cover"
                                 src="https://images.unsplash.com/photo-1540174401473-df5f1c06c716?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80">
                        </button>
                    </div>
                </div>
                <div class="ml-6 py-2 flex items-center justify-between">
                    <div class="flex items-center justify-between ">
                        <h2 class="text-2xl  font-semibold  text-gray-900 leading-tight">All Issues</h2>
                        <div class="flex items-center ml-16">
                                <span class="-ml-1 rounded-full border-2 border-white">
                                <img class="h-6 w-6 rounded-full object-cover"
                                     src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                    </span>
                            <span class="-ml-1 rounded-full border-2 border-white">
                                <img class="h-6 w-6 rounded-full object-cover"
                                     src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                </span>
                            <span class="-ml-1 rounded-full border-2 border-white">
                                <img class="h-6 w-6 rounded-full object-cover"
                                     src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                </span>
                        </div>
                    </div>
                    <div class="flex">
                            <span class="inline-flex p-1 border bg-gray-200 rounded-md ">
                                <button class=" px-2  py-1 rounded">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-6 w-6 bi bi-card-checklist" viewBox="0 0 16 16">
                                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                      <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </button>
                                <button class=" px-2  py-1 bg-white rounded shadow">
                                   <svg class="bi bi-list-check h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </button>
                            </span>
                        <button type="submit" class="bg-gray-100 w-full rounded-lg flex items-center text-sm font-medium text-white bg-gray-800 rounded-md pr-4 pl-2 ml-5 py-2 flex items-center hover:bg-gray-700 ">
                            <svg class="bi bi-plus-square-fill h-6 w-6 bg-red-800 " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h3zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                            </svg>
                            <span class="ml-3 xl:text-blue-800">Add Issue</span>
                        </button>
                    </div>
                </div>
            </header>
        </div>
        <div>
            <main class="p-3 flex">
                <div class="p-3 w-80 bg-gray-100 rounded-md">
                    <h3 class="text-sm font-medium text-gray-900">Backlog</h3>
                    <ul class="mt-2">
                        <li >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
                <div class="p-3 w-80 bg-gray-100 rounded-md">
                    <h3 class="text-sm font-medium text-gray-900">In Progress</h3>
                    <ul class="mt-2">
                        <li >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
                <div class="p-3 w-80 bg-gray-100 rounded-md">
                    <h3 class="text-sm font-medium text-gray-900">Done</h3>
                    <ul class="mt-2">
                        <li >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
                <div class="p-3 w-80 bg-gray-100 rounded-md">
                    <h3 class="text-sm font-medium text-gray-900">Testing</h3>
                    <ul class="mt-2">
                        <li class="mt-3" >
                            <a href="#" class="rounded-md shadow bg-white p-5 block">
                                <div class="flex justify-between items-center">
                                    <p class="text-sm font-medium text-gray-900 leading-snug">Add Discount Code To Checkout Page</p>
                                    <span>
                                            <img class="ml-2 h-6 w-6 rounded-full object-cover"
                                                 src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.25&w=144&h=144&q=80
" >
                                        </span>
                                </div>
                                <div class="flex items-baseline justify-between ">
                                    <div class="text-sm text-gray-600"><time datetime="2021-10-16">Oct 16</time></div>
                                    <div class="mt-2">
                                        <span class="bg-teal-100 inline-flex items-center rounded px-2 py-1">
                                            <svg viewBox="0 0 8 8" fill="currentColor" class="h-2  w-2 text-blue-700">
                                                <circle cx="4" cy="4" r="3"></circle>
                                            </svg>
                                            <span class="text-blue-500 text-sm font-medium ml-2">Feature Request</span>
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>
