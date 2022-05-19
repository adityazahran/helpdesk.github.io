<x-app-layout>
    <div class="min-h-screen">
        <div class="container">
            <section class="pt-16 block md:flex bg-heroes">
                <div class="w-full md:w-1/2 antialiased flex flex-col justify-center mt-12">
                    <div class="-mb-2">
                        <img src="/img/heroes.svg" alt="" srcset="" class="mx-auto" style="width: 400px">
                    </div>
                    <h1 class="font-bold text-5xl md:text-left text-center">PT Tirta Asasta</h1>
                    <span class="font-medium md:font-semibold text-2xl md:text-left text-center">Selamat datang di Helpdesk Karyawan</span>
                </div>
                <div class="w-full md:w-1/2 gap-x-5 block md:flex px-4">
                    <a href="/ticket/create" class="mt-20 border-2 space-y-6 text-center border-blue-500 bg-blue-500 hover:bg-blue-400 flex flex-col items-center transition-all duration-500  px-12 md:px-14 py-24 w-full md:w-1/2 rounded font-semibold text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            <span class="text-2xl">Buat Tiket Baru</span>
                    </a>
                    <a href="/ticket/search" class="mt-20 border-2 space-y-6 text-center border-blue-500 bg-blue-500 hover:bg-blue-400 flex flex-col items-center transition-all duration-500  px-12 md:px-14 py-24 w-full md:w-1/2 rounded font-semibold text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                          </svg>
                        <span class="text-2xl">Cek Status Tiket</span>
                    </a>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>