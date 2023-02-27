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
                <div class="flex mb-12 mt-12">
                    <div
                        class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 mb-6 mr-6">
                        <span class="font-medium text-gray-600 dark:text-gray-300"><i
                                class="fa-solid fa-user"></i></span>
                    </div>
                    <div class="mt-2">
                        <span class="text-sm  text-gray-600 dark:text-gray-300">User</span>
                    </div>
                </div>

                <div class="px-4 border rounded border-gray-700 flex content-end justify-center">
                    <a href="{{ route('logout') }}" class="flex items-center py-2"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-2" style="color: white;"></i>
                        <span class="text-white">log out</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                    </form>

                </div>
                
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
            </div>
            <div class="px-8 border-t border-gray-700">
                <i class="fa-solid fa-arrow-right-from-bracket mr-2" style="color: white;"></i>
                @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning">Sign-up</a>
                @else
                <a href="{{ route('logout') }}" class="btn btn-outline-light me-2"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                </form>
                @endguest
            </div>
        </div>


        <!-- Sidebar ends -->



        <div class="w-full h-full rounded ">
            <div class="ml-16 mt-24">
                <p class="lg:text-4xl font-semibold text-white  md:text-4xl">Welcome to Doppie</p>
                <p class="lg:text-l font-medium text-slate-200 mb-5 mt-3 md:text-l">What a great day to start a day with a new family member</p>
            </div>


            <div class="flex  flex-wrap gap-3 ml-4 mt-20 pb-20">
                @foreach ($data as $item)

                <div
                    class="max-w-sm w-[50vw] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 block">
                    <a href="#" class="rounded-lg">
                        <img class="rounded-t-lg w-[45vw] h-[52vh] p-3" src="/image/{{ $item->image }}" alt="" />
                    </a>
                    <div class="p-5 block">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $item->type }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->desc }} {{ $item->age }}
                            years old</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-solid fa-shop mr-3"></i>
                            {{ $item->shop }}
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
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
