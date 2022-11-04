<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|Application
    {
        $people = Person::all();
        return view('people.index',['people'=>$people]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request['name'])
//        dd($request['first_name']);
        $validatedData = $request->validate([
            'title' =>  ['required',Rule::in(['Mr', 'Mrs', 'Miss','Ms','Dr','Dr.','Doctor'])],
            'first_name' => 'required|string',
                'surname' => 'required|string',
                'address' => 'required|string',
            ]);
        $a = new Person;
        $a->title = $validatedData['title'];
        $a->first_name = $validatedData['first_name'];
        $a->surname = $validatedData['surname'];
        $a->address = $validatedData['address'];
//        $a->enclosure_id = $validatedData['enclosure_id’];
        $a->save();
        session()->flash('message','Person was created');
        return redirect()->route('people.index');
            //return "Passed Validation";
//        return $validatedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::FindOrFail($id);
        return view('people.show',['person'=>$person]);
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
