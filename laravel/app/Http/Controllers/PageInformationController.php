<?php

namespace App\Http\Controllers;

use App\PageInformation;
use Illuminate\Http\Request;

class PageInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = PageInformation::all();
        return view("pageInfo.index",["infos"=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pageInfo.create');
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
            'mision'=>'required',
            'vision'=>'required',
            'whoarewe'=>'required',
            'historical_review'=>'required'
        ]);
        $infos = new PageInformation([
            'name' => $request->get('name'),
            'vision' => $request->get('vision'),
            'whoarewe' => $request->get('whoarewe'),
            'historical_review' => $request->get('historical_review'),
        ]);

        $infos->save();

        if($infos){
            return redirect ('/infos')->with('success','La categoria ha sido creada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageInformation  $pageInformation
     * @return \Illuminate\Http\Response
     */
    public function show($pageInformation_id)
    {
        $info = PageInformation::find($pageInformation_id);
        return view('pageInfo.show',[ 'infos' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageInformation  $pageInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($pageInformation_id)
    {
        $info = PageInformation::find($pageInformation_id);
        return view('pageInfo.edit', [ 'info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageInformation  $pageInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pageInformation_id)
    {
        $request->validate([
            'mision'=>'required',
            'vision'=>'required',
            'whoarewe'=>'required',
            'historical_review'=>'required'
        ]);

        $info = PageInformation::find($pageInformation_id);
        $info->mision = $request->mision;
        $info->vision = $request->vision;
        $info->whoarewe = $request->whoarewe;
        $info->historical_review = $request->historical_review;

        if($info->save()){
            return redirect("/infos");
        }else{
            return view("/home");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageInformation  $pageInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($pageInformation_id)
    {
        $info = PageInformation::find($pageInformation_id);
        PageInformation::destroy($info->id);
        return redirect ('/infos')->with('success','La información de la página ha sido eliminada');
    }
}
