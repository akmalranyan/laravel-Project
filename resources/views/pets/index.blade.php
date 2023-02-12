<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://kit.fontawesome.com/110c64d119.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="flex flex-no-wrap bg-slate-700">
        <!-- Sidebar starts -->
        <div style="min-height: 716px"
            class="w-64 absolute sm:relative bg-gray-800 shadow md:h-[screen] flex-col justify-between hidden sm:flex">
            <div class="px-8">
                <div class="h-16 w-full flex items-center">
                    <i class="fa-solid fa-paw fa-xl" style="color: white;"></i>
                    <p class=" text-2xl text-white">Doppie</p>
                </div>
                <ul class="mt-12">
                    <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center   focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="18"
                                height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                            </svg>
                            <span class="text-sm ml-2">Dashboard</span>
                        </a>

                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <i class="fa-solid fa-shield-cat"></i>
                            <span class="text-sm ml-2">Available</span>
                        </a>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <i class="fa-solid fa-list-check"></i>
                            <span class="text-sm ml-2">Adopted</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-8 border-t border-gray-700">
                <a href="index.php" class="flex items-center py-5">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-2" style="color: white;"></i>
                    <span class="text-white">log out</span>
                </a>
            </div>
        </div>
        <div class="w-64 z-40 absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out"
            id="mobile-nav">
            <button aria-label="toggle sidebar" id="openSideBar"
                class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800"
                onclick="sidebarHandler(true)">
                <i class="fa-solid fa-list-ul" style="color: white;"></i>
            </button>
            <button aria-label="Close sidebar" id="closeSideBar"
                class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
                onclick="sidebarHandler(false)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg8.svg"
                    alt="cross">
            </button>
            <div class="px-8 h-screen">
                <div class="h-16 w-full flex items-center">
                    <i class="fa-solid fa-paw fa-xl" style="color: white;"></i>
                    <p class=" text-2xl text-white">Doppie</p>
                </div>
                <ul class="mt-12">
                    <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center   focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="18"
                                height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                            </svg>
                            <span class="text-sm ml-2">Dashboard</span>
                        </a>

                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <i class="fa-solid fa-shield-cat"></i>
                            <span class="text-sm ml-2">Available</span>
                        </a>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href=""
                            class="flex items-center focus:bg-white focus:text-slate-700 focus:pr-[128px] focus:py-[5px] focus:pl-[8px] duration-200">
                            <i class="fa-solid fa-list-check"></i>
                            <span class="text-sm ml-2">Adopted</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-8 border-t border-gray-700">
                <a href="index.php" class="flex items-center py-5">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-2" style="color: white;"></i>
                    <span class="text-white">log out</span>
                </a>
            </div>
        </div>


        <!-- Sidebar ends -->



        <div class="w-full h-full rounded">
            <div class="ml-4 mt-8">
                <p class="lg:text-4xl font-semibold text-white  md:text-4xl">Hey, user</p>
                <p class="lg:text-l font-medium text-slate-200 mb-5 mt-3 md:text-l">This is an Admin Page, you can add, edit, or delete your pets data here</p>
                <a type="button" href="{{url('/home-admin/create')}}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 lg:scale-100 md:scale-100 scale-75 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    New Adoption</a>
            </div>


            <div class="flex flex-wrap gap-5 ml-4 mt-8">
                @foreach ($data as $item)

                <div
                    class="max-w-sm w-[50vw] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5 block">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $item->type }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->desc }} {{ $item->age }} years old</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{ $item->shop }}
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div class="mt-5">
                            <a 
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" ><i
                                    class="fa-solid fa-trash"></i></a>
                            <a type="button"
                                class="focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900" href="{{ url("/home-admin/$item->id/delete") }}"><i
                                    class="fa-solid fa-pen"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>
    </div>




    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script>
        var sideBar = document.getElementById("mobile-nav");
        var openSidebar = document.getElementById("openSideBar");
        var closeSidebar = document.getElementById("closeSideBar");
        sideBar.style.transform = "translateX(-260px)";

        function sidebarHandler(flag) {
            if (flag) {
                sideBar.style.transform = "translateX(0px)";
                openSidebar.classList.add("hidden");
                closeSidebar.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                closeSidebar.classList.add("hidden");
                openSidebar.classList.remove("hidden");
            }
        }

    </script>
</body>





</body>


</html>
