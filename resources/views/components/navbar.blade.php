{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
    <div class="container-fluid ms-5">
        <a class="navbar-brand" href="/">Punya Hasin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
            </ul>
            <ul class="navbar-nav  me-5">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Nama
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end  ">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<header class="antialiased">
    <nav class="bg-green-100 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <a href="https://flowbite.com" class="flex mr-4 no-underline text-black">
                    {{-- <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" /> --}}
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Punya
                        Hasin</span>
                </a>

                <ul class="flex flex-wrap mr-4">
                    <li
                        class="px-2 py-1 text-sm font-medium rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700">
                        <x-nav-link href="/" :active="request()->is('/')" class="">Home</x-nav-link>
                    </li>
                    <li
                        class="px-2 py-1 text-sm font-medium rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700">
                        <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                    </li>
                    <li
                        class="px-2 py-1 text-sm font-medium rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700">
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </li>
                    <li
                        class="px-2 py-1 text-sm font-medium rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700">
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    </li>
                </ul>

            </div>
            <div class="flex items-center lg:order-2">

                <button type="button"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil sims</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                settings</a>
                        </li>
                    </ul>

                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
