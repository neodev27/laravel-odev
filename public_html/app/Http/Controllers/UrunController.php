<?php

namespace App\Http\Controllers;

use App\Models\urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
   
    public function index()
    {
        $uruns = urun::latest()->paginate(150);
        return view('pages.urunlist', compact('uruns'))
              ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uruns = urun::all();
        return view('pages.urun_create', compact('uruns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['urunadi'=> 'required',
        'ambalajturu'=> 'required',                           
        'stok'=> 'required',                         
        'fiyat'=> 'required',
        'kategori_id'=> 'required']);
       urun::create($request->all());
       return redirect()->route('urun.index')
           ->with('success', 'turetim_depolama ekleme işlemi başarılı.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function show(urun $urun)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function edit($uid)
    {
        $urun = urun::find($uid);
        return view('pages.urunduzenle',compact('urun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, urun $urun)
    {
        $request->validate(['urunadi'=> 'required',
        'ambalajturu'=> 'required',                           
        'stok'=> 'required',                         
        'fiyat'=> 'required']);
  
        $urun->update($request->all());
  
        return redirect()->route('urun.index')
                        ->with('success','İl başarı ile güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid)
    {
        urun::destroy($uid);
        return redirect()->route('urun.index')->with('success','İl başarı ile silindi');
    }
}
