<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studio;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->input('search');

        if($search)
        {
            // return $search;
            $articles = studio::where('Name',$search)->paginate(5);
            return view('studio.index',compact('articles'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            // return $articles;
        }

        else
        {
            $articles = studio::latest()->paginate(5);
            // dd($articles['UserId']);

            return view('studio.index',compact('articles'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        request()->validate([
//            'title' => 'required',
//            'body' => 'required',
//        ]);
        //dd($request->all());
        $starttime = $request['OpeningTime'];
        $endtime = strtotime($starttime) + 60*60;
        $closingtime = date('H:i', $endtime);
       // $request['ClosingTime'] = $closingtime;


        //dd($time);
        studio::create($request->all());

        return redirect()->route('studio.index')
            ->with('success','Studio created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = studio::find($id);
        return view('studio.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = studio::find($id);
        return view('studio.edit',compact('article'));
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

//        request()->validate([
//            'title' => 'required',
//            'body' => 'required',
//        ]);

        //dd($id);
        //dd($request->all());
        $UserId = Auth::id();
       // dd($UserId);
        $starttime = $request['OpeningTime'];
        $endtime = strtotime($starttime) + 60*60;
        $closingtime = date('H:i', $endtime);
        $request['ClosingTime'] = $closingtime;
        $request['Date'] = date("Y/m/d");
        $request['UserId'] = $UserId;
        //dd($request['OpeningTime']);
       // dd($id);
        $list = studio::where('Id',$id)->first();

        $todaydate = date("Y-m-d");
        $a = date( 'H:i', strtotime($list['OpeningTime']) );
        $b = date( 'H:i', strtotime($list['ClosingTime']) );
        //dd($list['Date']);
        //dd($todaydate);
        //
        if (($starttime > $a && $starttime < $b) && ($list['UserId'] != $UserId) && ($list['Date'] == $todaydate) ) {
            //dd("dasd");
            return redirect()->route('studio.index')
                ->with('success','Studio already booked for this time.');
        }
        elseif (($starttime < $a && $closingtime < $b) && $list['UserId'] != $UserId && ($list['Date'] == $todaydate))
        {
            return redirect()->route('studio.index')
                ->with('success','Studio already booked for this time.');
        }
        else
        {
            if($list['UserId'] == $UserId)
            {
                studio::find($id)->update($request->all());

                return redirect()->route('studio.index')
                    ->with('success','Studio Booked successfully');
            }

            else
            {
                //$this->store($request);
                studio::create($request->all());

                return redirect()->route('studio.index')
                    ->with('success','Studio created successfully');
            }

        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        studio::find($id)->delete();

        return redirect()->route('studio.index')
            ->with('success','Studio deleted successfully');
    }
}
