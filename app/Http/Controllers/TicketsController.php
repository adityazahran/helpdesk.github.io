<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    public function index(){
        return view('tickets.index', [
            'tickets' => Ticket::orderBy('id', 'desc')->get()
        ]);
        }
    public function create(){
        return view('tickets.create');
        }


    public function store(Request $request){
        Ticket::create([
            'nama' => $request->nama,
            'divisi' => $request->divisi,
            'topik' => $request->topik,
            'alat' => $request->alat,
            'keterangan' => $request->keterangan
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
    
    public function destroy($id){

        Ticket::find($id)->delete();
        return back();
        }
}
