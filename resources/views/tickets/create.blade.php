<x-app-layout>
    <div class="container">
        <div class="text-center mt-8 mb-4">
            <h3 class="font-bold text-3xl">Lorem, ipsum.</h3>
            <p class="text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <form action="/ticket/create" method="post" class="flex flex-col flex-1 w-8/12 mx-auto font-semibold">
            @csrf
            <div class="flex w-full flex-1 mx-auto gap-3 justify-center mb-2">
                <input type="text" name="nama" class="rounded w-1/2 px-2 py-4 border border-gray-500" placeholder="lorem Ipsum dolor sid Amed">
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
                <h3 class="font-bold text-3xl">Lorem, ipsum.</h3>
                <p class="text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <textarea name="keterangan" id="" cols="25" rows="10">Lorem ipsum dolor sit.</textarea>
            <button type="submit" class="rounded px-2 py-4 bg-gray-500 text-white hover:bg-white border-2 border-gray-500 hover:text-black transition-all duration-200">Send ticket</button>
        </form>
    </div>
</x-app-layout>