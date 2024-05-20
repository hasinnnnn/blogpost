<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
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
</nav>
