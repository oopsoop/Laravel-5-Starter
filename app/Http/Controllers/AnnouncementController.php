<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Captcha;
use DB;
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user=$request->user();
        $announcements=DB::table('announcements')->orderBy('created_at', 'desc')->simplePaginate(15);
        $data=array(
            'currentUser' => $user,
            'captchaurl' => Captcha::src(),
            'announcements' => $announcements,
        );
        return view('announcement')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $postData = $request->all();

        Announcement::create([
            'title' => $postData['subject'],
            'binfo' => $postData['type'],
            'message' => $postData['message'],
        ]);

        return redirect('/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $postData = $request->all();

        Announcement::where('id', '=', $id)->update([
            'title' => $postData['subject'],
            'binfo' => $postData['type'],
            'message' => $postData['message'],
        ]);

        return redirect('/admin');
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
    public function destroy(Request $request, $id)
    {
        Announcement::destroy($id);
        return 'ok';
    }
}
