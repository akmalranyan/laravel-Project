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


    <div class="">
        <div class="bg-slate-700 justify-center flex pt-12">
            <i class="fa-solid fa-paw fa-xl mt-[15px]" style="color: white;"></i>
            <p class=" text-2xl text-white">Doppie</p>
        </div>
        <div class="bg-slate-700 h-screen flex justify-center">

            <div class="card bg-slate-900 mt-20 h-[500px] p-8 rounded-lg">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
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
