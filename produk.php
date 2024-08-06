<?php
include 'asset/header.php';
?>
<body class="dark:bg-gray-800">
    <div class="fixed fixed-media bottom-4 right-4">
        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center justify-center w-14 h-14 rounded-full focus:outline-none">
            <img src="wa.png" alt="">
        </a>
    </div>  
    <!-- Tambahkan HTML spinner di sini -->
    <div id="spinner" role="status" class="fixed inset-0 flex items-center justify-center bg-white dark:bg-gray-800 z-50">
        <div class="m-10">
            <span class="block self-center text-xs sm:text-xl font-semibold whitespace-nowrap text-teal-500">PT Crown Teknologi Indonesia</span>
        </div>
        <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-green-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
    <?php include 'asset/menu.php'; ?>

    <div class="bg-white dark:bg-gray-800">
        <div class="container xl:pt-10 md:pt-20 pt-20 pb-7 p-4 m-auto xl:mt-20 mt-7">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">NAAT (Nucleic Acid Amplification Test)</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">MEDIA & BUFFER</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">KIT EKSTRAKSI</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">RAPID (RDT)</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="grid gap-6 mb-1 xl:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 grid-cols-2">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577833.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577910.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577962.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720578066.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720579784.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720579784.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577833.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577910.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720577962.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720578066.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720579784.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="1720579784.png" alt="" />
                            </a>
                            <div class="p-1">
                                <a href="#">
                                    <h5 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">CRown_Lab® TB Dx</h5>
                                    <p class="mb-1 text-gray-700 dark:text-gray-400" style="font-size: 8px;">KEMENKES RI AKD 20303321178</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gelap">
        <div class="container mx-auto px-4 py-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="col-span-1 mb-10">
                    <a href="#" class="flex items-center space-x-3">
                        <img src="logo.png" class="h-10" alt="Flowbite Logo" />
                        <div>
                            <span class="block text-white italic text-sm">Quality, Accuracy, Affordable</span>
                            <span class="block text-lg font-semibold text-teal-500">PT Crown Teknologi Indonesia</span>
                            <span class="block text-white text-xs">"Menuju Kemandirian untuk Kemaslahatan Bangsa"</span>
                        </div>
                    </a>
                </div>
                <div class="col-span-1 mb-20">
                    <ul class="flex flex-wrap items-center justify-center text-white text-sm space-x-6">
                        <li><a href="#" class="block hover:underline">Beranda</a></li>
                        <li><a href="#" class="block hover:underline">Produk</a></li>
                        <li><a href="#" class="hover:underline">Berita</a></li>
                        <li><a href="#" class="hover:underline">FAQs</a></li>
                        <li><a href="#" class="hover:underline">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-span-1 text-white text-sm">
                    <p class="mb-5">Jl. By Pass km 17, Koto Panjang Ikua Koto, Kec. Koto Tangah, Kota Padang, Sumatera Barat 25175</p>
                    <p class="font-bold text-yellow-200">Phone: 0751 4643632</p>
                    <p class="font-bold text-yellow-200">Email: teknologi@crownidn.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-biru py-2">
        <div class="text-center text-white text-xs">
            <p>© 2024 PT. Crown Teknologi Indonesia. All Rights Reserved</p>
        </div>
    </div>


    <script src="flowbite.js"></script>
    <?php include 'asset/style.php'; ?>
</body>
</html>