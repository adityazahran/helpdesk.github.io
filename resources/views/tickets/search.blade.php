<x-app-layout>
    <div class="container min-h-screen">
        <div class="text-center mt-8 mb-4">
            <h3 class="font-bold text-3xl">Cek Status Tiket</h3>
            <p class="text-lg">Masukkan Nama dan Divisi Untuk Mengecek Status Tiket.</p>
        </div>
        <section class="py-12">
            <form action="" class="flex flex-1 flex-col justify-center space-y-4">
                <input type="text" placeholder="Nama Pengisi Tiket" class="px-2 py-4 w-4/12 mx-auto border border-gray-400">
                <select name="" id="" class="rounded w-4/12 mx-auto px-2 py-4">
                    <option value="" hidden>Divisi</option>
                    <option value="">Logistik</option>
                    <option value="">Keuangan</option>
                    <option value="">Sumber Daya Manusia</option>
                    <option value="">Pemasaran</option>
                    <option value="">Lain-Lain</option>
                </select>
                <button type="submit" class="rounded px-2 py-4 w-4/12 mx-auto bg-gradient-to-r from-blue-600 to-blue-400 text-white hover:from-blue-400 hover:to-blue-600 transition-all duration-500 font-semibold">Cek Tiket</button> 
            </form>
        </section>
    </div>
</x-app-layout>