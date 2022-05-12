<x-app-layout>
    <div class="container">
        <div class="text-center mt-8 mb-4">
            <h3 class="font-bold text-3xl">Buat Tiket Baru</h3>
            <p class="text-lg">Isi Formulir detail masalah.</p>
        </div>
        <section class="py-12">
            <form action="/ticket/create" method="post" class="flex flex-col flex-1 w-8/12 mx-auto font-semibold">
                @csrf
                <div class="flex w-full flex-1 mx-auto gap-3 justify-center mb-2">
                    <input type="text" name="nama" class="rounded w-1/2 px-2 py-4 border border-gray-500" placeholder="Nama Pengisi Tiket">
                    <select name="divisi" id="" class="rounded w-1/2 px-2 py-4">
                        <option value="" hidden>Divisi</option>
                        <option value="Logistik">Logistik</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Sumber Daya Manusia">Sumber Daya Manusia</option>
                        <option value="Pemasaran">Pemasaran</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                </div>
                <div class="flex w-full flex-1 mx-auto gap-3 justify-center mb-2">
                    <select name="topik" id="" class="rounded w-1/2 px-2 py-4">
                        <option value="" hidden>Isu Masalah</option>
                        <option value="Alat Rusak">Alat Rusak</option>
                        <option value="Masalah Interkoneksi">Masalah Interkoneksi</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                    <select name="alat" id="" class="rounded w-1/2 px-2 py-4">
                        <option value="" hidden>Alat-Alat</option>
                        <option value="PC">PC</option>
                        <option value="Printer">Printer</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Wi-fi">Wi-fi</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <div class="text-center my-4">
                    <h3 class="font-bold text-3xl">Detail Problem</h3>
                    <p class="text-lg">Jelaskan Secara Detail isu yang ada.</p>
                </div>
                <textarea name="keterangan" id="" cols="25" rows="10" class="border-gray-400 border rounded-sm p-2" placeholder="Masukkan Detail masalah..."></textarea>
                <button type="submit" class="rounded mt-2 px-2 py-4 w-4/12 mx-auto bg-gradient-to-r from-blue-600 to-blue-400 text-white hover:from-blue-400 hover:to-blue-600 transition-all duration-500 font-semibold">Send ticket</button>
            </form>
        </section>
    </div>
</x-app-layout>