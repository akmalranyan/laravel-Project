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
    
        <div class="flex flex-no-wrap">
            <!-- Sidebar starts -->
            <div style="min-height: 716px"
                class="w-64 absolute sm:relative bg-gray-800 shadow md:h-full flex-col justify-between hidden sm:flex">
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
    
            <div class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6">
                <div class="w-full h-full rounded ">
                    <p class="lg:text-4xl font-semibold text-slate-700 mb-5 md:text-4xl">Hey, Admin!</p>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 lg:scale-100 md:scale-100 scale-75 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                        New Adoption</button>
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
    
    </html>
        <div class="bg-slate-700 justify-center flex pt-12">
            <i class="fa-solid fa-paw fa-xl mt-[15px]" style="color: white;"></i>
            <p class=" text-2xl text-white">Doppie</p>
        </div>
        <div class="bg-slate-700 h-screen flex justify-center">

            <div class="card bg-slate-900 mt-20 h-[500px] p-8 rounded-lg">
                <div class="card-body">
                    <form action="{{ url('/admin-login') }}" method="POST">
                        <h2 class="text-slate-200 text-2xl">Login To Your Admin Account</h2>
                        <div class="">
                            {{-- name input section --}}
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-14">Name</label>
                            <input type="text" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            {{-- email input section --}}
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-2">Email</label>
                            <input type="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('email')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            {{-- password input section --}}
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-2">Password</label>
                            <input type="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('password')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-10">Login</button>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>


</html>
