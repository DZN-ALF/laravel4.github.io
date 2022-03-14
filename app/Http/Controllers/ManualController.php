<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function index()
 {
    $pesan = Pesan::paginate(6);
    return view ('pesan.index',compact('pesan'))->with('i', (request()->input('page', 1) -1) * 5);
 }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pesan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function registration(Request $request)
    {
        return redirect()->route("Login.index");
    }
    public function store(Request $request)
    {
    $request->validate([

        'nama' => 'required',
        'tujuan' => 'required',
        'kelas' => 'required',
    ]);
    Pesan::create($request->all());
    return redirect()->route('pesan.store')->with('sukses','Pesanan dicatat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        return view('pesan.show',compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        return view('pesan.edit', compact('pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function up(Request $request, Pesan $pesan)
    {
        $request->validate([
        'nama' => 'required',
        'tujuan' => 'required',
        'kelas' => 'required',
        ]);

        $pesan->up($request->all());
        return redirect()->route('pesan.index')->with('sukses', 'data telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
    
        return redirect()->route('pesan.index')->with('sukses','berhasil dibatalkan');
    }
}
