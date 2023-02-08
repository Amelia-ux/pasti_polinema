<?php

namespace App\Http\Controllers;

use App\Models\Workplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workplan = DB::table('workplan')->simplePaginate(10);

        return view('workplan.index', compact('workplan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workplan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Workplan::create($input);
        return redirect('/workplan')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workplan  $workplan
     * @return \Illuminate\Http\Response
     */
    public function show(Workplan $workplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workplan  $workplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Workplan $workplan)
    {
        return view('workplan.edit', compact('workplan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workplan  $workplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workplan $workplan)
    {
        $request->validate([
            'division' => '',
            'name' => '',
            'description' => '',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $workplan->update($input);
        return redirect('/workplan')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workplan  $workplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workplan $workplan)
    {
        $workplan->delete();

        return redirect('/workplan')->with('message', 'Data berhasil dihapus');
    }
}
