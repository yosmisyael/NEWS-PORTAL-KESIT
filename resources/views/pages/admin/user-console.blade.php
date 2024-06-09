<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-dashboard-shell>
        <header class="mb-5 flex flex-col gap-1 text-black rounded-lg p-5 bg-gradient-to-l from-indigo-100 to-fuchsia-200 via-stone-100 shadow-lg text-slate-700">
            <p class="text-3xl font-semibold">Welcome to</p>
            <h1 class="text-5xl font-semibold">User Management Console</h1>
            <p class="text-xl md:w-2/3 font-medium">Effortlessly manage your entire user base from a centralized dashboard. Streamline user creation, edit permissions, and track activity – all within a single, intuitive interface.</p>
        </header>
        <h2 class="text-4xl font-bold my-2 w-fit bg-slate-700 px-4 py-2 rounded-lg"><span class="bg-gradient-to-l from-indigo-100 to-fuchsia-200 via-stone-100 bg-clip-text text-transparent">Stats</span></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4 text-slate-700">
            <div
                class="shadow-lg rounded-lg h-32 md:h-32 flex p-5 items-center bg-gradient-to-r from-fuchsia-100 via-gray-100 to-fuchsia-100"
            >
                <div class="flex-auto text-2xl font-semibold">
                        Active Users
                </div>
                <h1 class="flex-1 text-4xl font-bold text-center">{{ $users->count() }}</h1>
            </div>
            <div
                class="shadow-lg rounded-lg h-32 md:h-32 flex p-4 items-center bg-gradient-to-r from-gray-100 via-fuchsia-100 to-stone-100"
            >
                <div class="flex-auto text-2xl font-semibold">
                    Member Total
                </div>
                <h1 class="flex-1 text-4xl font-bold text-center">{{ $members->count() }}</h1>
            </div>
            <div
                class="shadow-lg rounded-lg h-32 md:h-32 flex p-4 items-center bg-gradient-to-r from-fuchsia-100 via-gray-100 to-fuchsia-100"
            >
                <div class="flex-auto text-2xl font-semibold">
                    Author Total
                </div>
                <h1 class="text-center flex-1 text-4xl font-bold">{{ $authors->count() }}</h1>
            </div>
        </div>

        <h2 class="text-4xl font-bold my-2 w-fit bg-slate-700 px-4 py-2 rounded-lg"><span class="bg-gradient-to-l from-indigo-100 to-fuchsia-200 via-stone-100 bg-clip-text text-transparent">Tools</span></h2>
        <div class="grid grid-cols-4 gap-4 mb-4 text-slate-700">
            <a href="{{ route('admin.user.create') }}"
               class="shadow-lg rounded-lg col-span-4 md:col-span-2 lg:col-span-1 h-60 p-4 flex gap-4 items-center justify-center cursor-pointer bg-gradient-to-r from-indigo-100 via-gray-100 to-pink-100 hover:shadow-xl hover:scale-[1.01] transition-all relative"
            >
                <div class="flex flex-col items-center gap-3">
                    <i class="fa-solid fa-address-book text-7xl"></i>
                    <div class="text-center px-6">
                        <h1 class="font-bold">Registration</h1>
                        <p class="text-sm font-medium">Streamline user onboarding with effortless registration
                            management.</p>
                    </div>
                </div>

                <div class="absolute bottom-5 right-5">
                    <i class="fa-solid fa-circle-chevron-right text-4xl"></i>
                </div>
            </a>
            <a href="{{ route('admin.user.member') }}"
               class="shadow-lg rounded-lg col-span-4 md:col-span-2 lg:col-span-1 h-60 p-4 flex gap-4 items-center justify-center cursor-pointer bg-gradient-to-r from-indigo-100 via-gray-100 to-pink-100 hover:shadow-xl hover:scale-[1.01] transition-all relative"
            >
                <div class="flex flex-col items-center gap-3">
                    <i class="fa-solid fa-users-gear text-7xl"></i>
                    <div class="text-center px-6">
                        <h1 class="font-bold">Member Management</h1>
                        <p class="text-sm font-medium">Simplify member oversight with centralized account control.</p>
                    </div>
                </div>

                <div class="absolute bottom-5 right-5">
                    <i class="fa-solid fa-circle-chevron-right text-4xl"></i>
                </div>
            </a>
            <a href="{{ route('admin.user.author') }}"
               class="shadow-lg rounded-lg col-span-4 md:col-span-2 lg:col-span-1 h-60 p-4 flex gap-4 justify-center items-center cursor-pointer bg-gradient-to-r from-indigo-100 via-gray-100 to-pink-100 hover:shadow-xl hover:scale-[1.01] transition-all relative"
            >
                <div class="flex flex-col items-center gap-3">
                    <i class="fa-solid fa-feather text-7xl"></i>
                    <div class="text-center px-6">
                        <h1 class="font-bold">Author Management</h1>
                        <p class="text-sm font-medium">Manage author accounts and content with ease.</p>
                    </div>
                </div>

                <div class="absolute bottom-5 right-5">
                    <i class="fa-solid fa-circle-chevron-right text-4xl"></i>
                </div>
            </a>
            <a href="{{ route('admin.application.index') }}"
               class="shadow-lg rounded-lg col-span-4 md:col-span-2 lg:col-span-1 h-60 p-4 flex gap-4 justify-center items-center cursor-pointer bg-gradient-to-r from-indigo-100 via-gray-100 to-pink-100 hover:shadow-xl hover:scale-[1.01] transition-all relative"
            >
                <div class="flex flex-col items-center gap-3">
                    <i class="fa-solid fa-user-check text-7xl"></i>
                    <div class="text-center px-6">
                        <h1 class="font-bold">Author Application</h1>
                        <p class="text-sm font-medium">Effortlessly onboard new authors through streamlined
                            requests.</p>
                    </div>
                </div>

                <div class="absolute bottom-5 right-5">
                    <i class="fa-solid fa-circle-chevron-right text-4xl"></i>
                </div>
            </a>
            <a href="{{ route('admin.token.index') }}"
               class="shadow-lg rounded-lg col-span-4 md:col-span-2 lg:col-span-1 h-60 p-4 flex gap-4 justify-center items-center cursor-pointer bg-gradient-to-r from-indigo-100 via-gray-100 to-pink-100 hover:shadow-xl hover:scale-[1.01] transition-all relative"
            >
                <div class="flex flex-col items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-20 w-20 fill-slate-700">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/>
                    </svg>
                    <div class="text-center px-6">
                        <h1 class="font-bold">Token Management</h1>
                        <p class="text-sm font-medium">Securely manage and issue tokens for author applications.</p>
                    </div>
                </div>

                <div class="absolute bottom-5 right-5">
                    <i class="fa-solid fa-circle-chevron-right text-4xl"></i>
                </div>
            </a>
        </div>
    </x-dashboard-shell>
</x-app>
