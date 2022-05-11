<x-app-layout>
    <div class="container">
        <div class="text-center mt-8 mb-4">
            <h3 class="font-bold text-3xl">Lorem, ipsum.</h3>
            <p class="text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <form action="/ticket/{{ $edit ->id }}" method="post" class="flex flex-col flex-1 w-8/12 mx-auto font-semibold">
            @method('put')
            @csrf
            <div class="flex w-full flex-1 mx-auto gap-3 justify-center mb-2">
                <input type="text" name="nama" value="{{ $edit->nama }}" class="rounded w-1/2 px-2 py-4 border border-gray-500" placeholder="lorem Ipsum dolor sid Amed">
                <select name="divisi" id="" class="rounded w-1/2 px-2 py-4">
                    <option value="" hidden>Divisi</option>
                    <option <?php  if($edit->divisi == "Logistik"){echo "selected='selected'";} ?> value="Logistik" >Logistik</option>
                    <option <?php  if($edit->divisi == "Keuangan"){echo "selected='selected'";} ?> value="Keuangan">Keuangan</option>
                    <option <?php  if($edit->divisi == "SDM"){echo "selected='selected'";} ?> value="Sumber Daya Manusia">Sumber Daya Manusia</option>
                    <option <?php  if($edit->divisi == "Pemasaran"){echo "selected='selected'";} ?> value="Pemasaran">Pemasaran</option>
                    <option <?php  if($edit->divisi == "Lain-Lain"){echo "selected='selected'";} ?> value="Lain-Lain">Lain-Lain</option>
                </select>
            </div>
            <div class="flex w-full flex-1 mx-auto gap-3 justify-center mb-2">
                <select name="topik" id="" class="rounded w-1/2 px-2 py-4">
                    <option value="" hidden>Isu Masalah</option>
                    <option <?php  if($edit->topik == "Alat Rusak"){echo "selected='selected'";} ?> value="Alat Rusak">Alat Rusak</option>
                    <option <?php  if($edit->topik == "Masalah Interkoneksi"){echo "selected='selected'";} ?> value="Masalah Interkoneksi">Masalah Interkoneksi</option>
                    <option <?php  if($edit->topik == "Lain-Lain"){echo "selected='selected'";} ?> value="Lain-Lain">Lain-Lain</option>
                </select>
                <select name="alat" id="" class="rounded w-1/2 px-2 py-4">
                    <option value="" hidden>Alat-Alat</option>
                    <option <?php  if($edit->alat == "PC"){echo "selected='selected'";} ?> value="PC">PC</option>
                    <option <?php  if($edit->alat == "Printer"){echo "selected='selected'";} ?> value="Printer">Printer</option>
                    <option <?php  if($edit->alat == "Laptop"){echo "selected='selected'";} ?> value="Laptop">Laptop</option>
                    <option <?php  if($edit->alat == "Mouse"){echo "selected='selected'";} ?> value="Mouse">Mouse</option>
                    <option <?php  if($edit->alat == "Keyboard"){echo "selected='selected'";} ?> value="Keyboard">Keyboard</option>
                    <option <?php  if($edit->alat == "Wi-Fi"){echo "selected='selected'";} ?> value="Wi-fi">Wi-fi</option>
                    <option <?php  if($edit->alat == "Lain-Lain"){echo "selected='selected'";} ?> value="Lain-lain">Lain-lain</option>
                </select>
            </div>
            <div class="text-center my-4">
                <h3 class="font-bold text-3xl">Lorem, ipsum.</h3>
                <p class="text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <textarea name="keterangan" id="" cols="25" rows="10">{{ $edit->keterangan }}</textarea>
            <button type="submit" class="rounded px-2 py-4 bg-gray-500 text-white hover:bg-white border-2 border-gray-500 hover:text-black transition-all duration-200">Send ticket</button>
        </form>
    </div>
</x-app-layout>