<x-app-layout title="Cek Status Tiket">
    <div class="container min-h-screen">
        <div class="text-center mt-20 md:mt-8 mb-4 md:px-0 px-4">
            <h3 class="font-bold text-3xl">Cek Status Tiket</h3>
            <p class="text-lg">Masukkan Nama dan Divisi Untuk Mengecek Status Tiket<a href="/ticket/" class="cursor-default">.</a></p>
        </div>
        <section class="md:py-12 w-full mx-auto  md:w-5/12 rounded py-16 px-4">

            <form action="/ticket/search" method="get" class="flex flex-1 flex-col justify-center space-y-2 md:space-y-4">

                <input type="text" name="cari" class="px-2 py-4 w-full md:w-8/12 mx-auto border border-gray-400" placeholder="Cari Tiket..">
                <input type="submit" class="rounded px-2 py-4 w-full md:w-8/12 mx-auto bg-gradient-to-r from-blue-600 to-blue-400 text-white hover:from-blue-400 hover:to-blue-600 transition-all duration-500 font-semibold" value="cari">
            </form>
        </section>
        <section class="py-6">
            <div class="container">
              <table class="table-auto border border-gray-400">
                <thead class="border-t border-b border-gray-400 bg-gray-300">
                  <tr class="text-gray-700">
                    <th class="py-2 font-semibold w-1/12">NO</th>
                    <th class="py-2 font-semibold w-1/12">ID Tiket</th>
                    <th class="py-2 font-semibold w-2/12">nama</th>
                    <th class="py-2 font-semibold w-2/12">divisi</th>
                    <th class="py-2 font-semibold w-2/12">topik</th>
                    <th class="py-2 font-semibold w-2/12">alat</th>
                    <th class="py-2 font-semibold w-2/12">keterangan</th>
                    <th class="py-2 font-semibold w-1/12">status</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($tickets as $index => $ticket)
                  <tr class="">
                    <td class="py-2 text-gray-800 px-2 text-center border-gray-500">{{ $index + 1 }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->id }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->nama }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->divisi }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->topik }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->alat }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->keterangan }}</td>
                    <td class="py-2 border-l text-gray-800 px-2 text-center border-gray-500">{{ $ticket->status }}</td>
                    {{-- <td class="border-l text-gray-800 px-2 text-center border-gray-500" class="inline-flex">
                      <a href="/ticket/{{ $ticket->id }}/edit" class="w-4 h-4 ml-5 hover:text-green-500 transition-colors duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                      </a>
                      <form action="/ticket/{{ $ticket->id }}" method="post">
                        @csrf
                        @method('delete')
                    <button class="w-4 h-4 mr-4 ml-5 hover:text-red-500 transition-colors duration-100" role="button" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </section>
            {{ $tickets->links() }}
          </div>
    </div>
</x-app-layout>