<?php

namespace App\Http\Controllers;

use App\Results;
use App\Http\Requests\ResultsRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Str;
use Storage;

class crudController extends Controller
{


    public function index()
    {

        $lists = Results::all();

        $view = view('list');

        $view->lists = $lists;

        return $view;

    }

    public function form()
    {


        $view = view('create-edit');


        return $view;

    }

    public function create(ResultsRequest $request,$id=null)
    {
        if($id){
            $update = Results::find($id);
            $update->update($request->all());

            return redirect('list')->with('success',1);
        }

        $slug = Str::slug($request->name, '-');

        $request->request->add(
            [
                'slug' => $slug
            ]

        );

        $resuts = new Results;

        results::create($request->all());

        $insertIntoTxt = Results::all();

        Storage::disk('local')->put('public/results.txt', json_encode($insertIntoTxt));


        return redirect('list')->with('success',1);

    }


    public function delete(Request $request,$id)
    {

        $deleteID = $id;

        $id = Results::find( $deleteID );
        $id->delete();

        return redirect('list')->with('success',1);

    }


}


