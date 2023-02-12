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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="bg-slate-700 justify-center flex pt-12">
            <i class="fa-solid fa-paw fa-xl mt-[15px]" style="color: white;"></i>
            <p class=" text-2xl text-white">Doppie</p>
        </div>
        <div class="bg-slate-700 h-screen flex justify-center">

            <div class="card bg-slate-900 mt-20 h-[75vh] p-14 rounded-lg">
                <div class="card-body">
                    <form action="{{ url("/home-admin/$pets->id") }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <h2 class="text-slate-200 text-2xl">Edit Animal Information</h2>
                        <div class="">
                            {{-- name input section --}}
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-14">Animal
                                Name and Type</label>
                            <input type="text" name="type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('type', $pets->type) }}">
                            @error('name')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            {{-- age input section --}}
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-2" >Age</label>
                            <input type="age" name="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('age', $pets->age) }}">
                            @error('numeric')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            {{-- description input section --}}
                            <label for="desc"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-2" >Animal
                                Description</label>
                            <input type="desc" name="desc"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('desc', $pets->desc) }}">
                            @error('string')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            {{-- shop input section --}}
                            <label for="shop"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2 mt-2" >Shop</label>
                            <input type="shop" name="shop"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('shop', $pets->shop) }}">
                            @error('string')
                            <span class="text-red-400">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>


                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-10">Edit Data</button>
                </div>
                </form>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>


</html>
