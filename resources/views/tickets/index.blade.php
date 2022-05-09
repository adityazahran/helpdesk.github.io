<x-app-layout>
  <h1>Tasks</h1>
  <p class="text-red-500">table kito</p>

  <table class="table-fixed border-2 border-black">
    <thead>
      <tr>
        <th class="w-2/12">NO</th>
        <th class="w-2/12">nama</th>
        <th class="w-1/12">divisi</th>
        <th class="w-2/12">topik</th>
        <th class="w-2/12">alat</th>
        <th class="w-2/12">keterangan</th>
        <th class="w-1/12">status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tickets as $index => $ticket)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $ticket->nama }}</td>
        <td>{{ $ticket->divisi }}</td>
        <td>{{ $ticket->topik }}</td>
        <td>{{ $ticket->alat }}</td>
        <td>{{ $ticket->keterangan }}</td>
        <td>{{ $ticket->status }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


  
</x-app-layout>