<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cache;
use Session;
class CacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(!Cache::has('cachetest')){///check exists?
          //set
          Cache::put('cachetest','cache test of Laravel-5-Start',10);
        }

        $data=array(
            'key' => 'cachetest',
            'value' => Cache::get('cachetest')//get
        );
        Session::put('message','lello');
        return view('cache')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $key=$request->input('key');
        $value=$request->input('value');
        $expired=$request->input('expiration',10);
        $value=Cache::put($key,$value,$expired);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $key=$request->input('key');
        $value=$request->input('value');
        $expired=$request->input('expiration',10);
        $value=Cache::put($key,$value,$expired);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
