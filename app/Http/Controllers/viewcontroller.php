<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class viewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware('auth');
    }
	 
    public function index()
    {
        return view ('pages.index');
    }
	
	 public function home()
    {
		$data = mahasiswa::all();
        return view ('pages.home')->with('datalist',$data);
    }
	
	 public function tambah()
    {
        return view ('pages.add');
    }
	public function add_action (request $request)
	{
		$items			=new mahasiswa;
		$items->nama	=$request-> nama;
		$items->nim		=$request-> nim;
		$items->alamat	=$request-> alamat;
		$items->save();
		return redirect('/');
	}
	 public function ubah($id)
    {
		$data = mahasiswa::FindOrFail ($id);
        return view ('pages.edit')->with('datalist', $data);
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $items			=mahasiswa::find($id);
		$items->nama	=$request-> nama;
		$items->nim		=$request-> nim;
		$items->alamat	=$request-> alamat;
		$items->save();
		return redirect('/');   //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $items			=mahasiswa::find($id);
		$items->delete();
		return redirect('/');//
    }
}
