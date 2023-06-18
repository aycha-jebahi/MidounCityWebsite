<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use App\Like;
use Illuminate\Http\JsonResponse;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements=Evenement::all();

        return view('index')->with('evenements', $evenements);
    }

    public function index2()
    {
        $evenements=Evenement::all();

        return view('index2')->with('evenements', $evenements);
    }

    public function like() :JsonResponse
    {
        $evenement = Evenement :: find(request()->id) ;
        if ($evenement->isLikedByLoggedInUser())
        {
            $res= Like :: where ([
                'partenaire_id' => auth()->user()->id,
                'evenement_id' => request()->id
            ]) -> delete();

            if($res)
            {
                 return response() -> json([
                     'count' => Evenement :: find(request()->id)->likes->count()
                 ]);
            }
        }
        else
        {
            $like = new like();
            $like->partenaire_id = auth()->user()->id;
            $like->evenement_id = request()->id;
            $like->save();
            return response()->json([
                'count' => Evenement :: find(request()->id)->likes->count()
            ]);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
