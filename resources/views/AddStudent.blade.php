<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="">
        <h2 class="  text-white py-3  bg-black text-center text-4xl  uppercase font-bold">Add Student</h2>
    </div>
    <div class=" flex justify-end mb-5">
        <a href="#">Back To Home</a>
    </div>
    <section>
        <div class="container mx-auto my-20">
            <h3>
                {{ Session::get('info') }}
            </h3>
            <div class="">
                <form action="{{ route('create.student') }}" method="POST" class="max-w-sm mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Enter Your name" name="name" value="{{ old('name') }}" />

                        <span>
                            @error('name')
                                <small class=" text-sm text-red-400"> {{ $message }}</small>
                            @enderror
                        </span>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" name="email" value="{{ old('email') }}" />
                        <span>
                            @error('email')
                                <small class=" text-sm text-red-400"> {{ $message }}</small>
                            @enderror
                        </span>
                    </div>
                    <div class="mb-5">
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" id="phone"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Enter Your Phone" name="phone" value="{{ old('phone') }}" />
                        <span>
                            @error('phone')
                                <small class=" text-sm text-red-400"> {{ $message }}</small>
                            @enderror
                        </span>
                    </div>
                    {{-- <div class="mb-5">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="multiple_files">Upload multiple files</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="multiple_files" type="file" name="image" value="{{ old('image') }}">
                        <span>
                            @error('image')
                                <small class=" text-sm text-red-400"> {{ $message }}</small>
                            @enderror
                        </span>

                    </div> --}}
                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ADD
                        STUDENT</button>
                </form>

            </div>
        </div>
    </section>

</body>

</html>
