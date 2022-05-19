<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class TicketsController extends Controller
{
    public function index(){
        return view('tickets.index', [
            'tickets' => Ticket::orderBy('id', 'desc')->paginate(6)
        ]);
        }
    public function create(){
        return view('tickets.create');
        }


    public function store(Request $request){
        $request->validate([
            'nama' =>'required',
            'divisi' => 'required',
            'topik' => 'required',
            'alat' => 'required',
        ]);
        Ticket::create([
            'nama' => $request->nama,
            'divisi' => $request->divisi,
            'topik' => $request->topik,
            'alat' => $request->alat,
            'keterangan' => $request->keterangan ?? '-'
        ]);
        return back();
        }

    public function edit($id){

        // $Tickets = Ticket::where('id', $id)->first();
        $index = Ticket::find($id);
        return view('tickets.edit', ['edit' => $index]);
        }

    public function update(Request $request, $id){
        Ticket::find($id)->update([
            'nama' => $request->nama,
            'divisi' => $request->divisi,
            'topik' => $request->topik,
            'alat' => $request->alat,
            'keterangan' => $request->keterangan
        ]);
        return redirect('ticket');
    }

    public function check(){
        $index = Ticket::orderBy('id', 'desc')->paginate(4);
            return view('tickets.search', ['tickets' => $index]);
        }

    public function search(Request $request){
        $cari = $request->cari;

        $index = Ticket::orderBy('id','desc')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('divisi','like',"%".$cari."%")
        ->orWhere('topik','like',"%".$cari."%")
        ->orWhere('alat','=',"%".$cari."%")
        ->paginate(4);

        $index->appends($request->only('cari'));

        return view('tickets.search',['tickets' => $index]);
    }
    
    public function destroy($id){

        Ticket::find($id)->delete();
        return back();
        }
}
