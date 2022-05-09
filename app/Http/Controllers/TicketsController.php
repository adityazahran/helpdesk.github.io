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


    public function store(Request $request){
        Ticket::create([
            'nama' => $request->nama,
            'divisi' => $request->divisi,
            'topik' => $request->topik,
            'alat' => $request->alat,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);
        return back();
        }

    public function edit($id){

        // $Tickets = Ticket::where('id', $id)->first();
        $Tickets = Ticket::find($id);
        return view('tickets.edit', ['Tickets' => $Tickets]);
        }

    public function update(Request $request, $id){
        Ticket::find($id)->update([
            'list' => $request->list,
        ]);
        return redirect('Tickets');
    }
    
    public function destroy($id){

        Ticket::find($id)->delete();
        return back();
        }
}
