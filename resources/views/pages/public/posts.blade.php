<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-shell>
        <section class="grid grid-cols-3 gap-10">
            <div class="col-span-3 md:col-span-2 grid grid-cols-2">
                <div class="col-span-2 w-5/6 border-b-2 border-blue-600 inline-flex">
                    <span class="bg-blue-600 p-2 md:p-3 uppercase font-semibold text-sm md:text-base text-white">Semua Berita</span>
                </div>
                <div class="col-span-2 py-5 grid grid-cols-2 gap-5">
                    <a href="" class="col-span-2 md:col-span-1 flex flex-col gap-1">
                        <img src="https://picsum.photos/1920/1080" alt="article">
                        <h1 class="font-semibold text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Eius, facere.</h1>
                        <p class="text-xs"><b>Yosev</b> | 20 Aug 2024</p>
                    </a>
                    <a href="" class="col-span-2 md:col-span-1 flex flex-col gap-1">
                        <img src="https://picsum.photos/1920/1080" alt="article">
                        <h1 class="font-semibold text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Eius, facere.</h1>
                        <p class="text-xs"><b>Yosev</b> | 20 Aug 2024</p>
                    </a>
                    <a href="" class="col-span-2 md:col-span-1 flex flex-col gap-1">
                        <img src="https://picsum.photos/1920/1080" alt="article">
                        <h1 class="font-semibold text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Eius, facere.</h1>
                        <p class="text-xs"><b>Yosev</b> | 20 Aug 2024</p>
                    </a>
                    <a href="" class="col-span-2 md:col-span-1 flex flex-col gap-1">
                        <img src="https://picsum.photos/1920/1080" alt="article">
                        <h1 class="font-semibold text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Eius, facere.</h1>
                        <p class="text-xs"><b>Yosev</b> | 20 Aug 2024</p>
                    </a>
                </div>
                <nav class="col-span-2">
                    <ul class="inline-flex gap-1 text-sm">
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                               class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="md:col-span-1 col-span-3 gap-5">
                <div class="w-5/6 border-b-2 border-red-600 h-min inline-flex">
                    <span class="bg-red-600 p-2 md:p-3 uppercase font-semibold text-sm md:text-base text-white">Ikuti Kami</span>
                </div>
                <div class="flex flex-col gap-5 py-5">
                    <a href="" class="flex justify-between items-center font-bold">
                        <div class="flex gap-3">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/800px-Instagram_icon.png"
                                alt="instagram icon" class="h-8">
                            <p>2k+ followers</p>
                        </div>
                        <p class="uppercase bg-black text-white p-2">Follow</p>
                    </a>
                    <a href="" class="flex justify-between items-center font-bold">
                        <div class="flex gap-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png"
                                 alt="instagram icon" class="h-6">
                            <p>2k+ followers</p>
                        </div>
                        <p class="uppercase bg-black text-white p-2">Subscribe</p>
                    </a>
                </div>
            </div>
        </section>
    </x-shell>
</x-app>
