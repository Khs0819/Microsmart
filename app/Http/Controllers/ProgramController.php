<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::withCount('courses')->orderBy('id', 'desc')->paginate(5);
        return response()->view('cms.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $programs = program::all();
        return response()->view('cms.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator($request->all(), [
            'name' => 'required|unique:programs',
        ], [
            'name.required' => 'حقل اسم البرنامج مطلوب',
            'name.unique' => 'اسم البرنامج موجود مسبقا',



        ]);

        if (!$validator->fails()) {

            $programs = new Program();
            $programs->name = $request->get('name');


            $isSaved = $programs->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => "Created is Successfully"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "Created is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
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
        $programs = Program::findOrFail($id);
        return response()->view('cms.program.edit', compact('programs'));
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
        $validator = Validator($request->all(), [
            'name' => 'required',
        ], [
            'name.required' => 'حقل اسم البرنامج مطلوب',
            'name.unique' => 'اسم البرنامج موجود مسبقا',


        ]);

        if (!$validator->fails()) {

            $programs = Program::findOrFail($id);
            $programs->name = $request->get('name');

            $isUpdated = $programs->save();
            return ['redirect' => route('programs.index')];
            if ($isUpdated) {
                return response()->json(['icon' => 'success', 'title' => "Updated is Successfully"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "Updated is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
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
        $programs = program::destroy($id);
        return response()->json(['icon' => 'success', 'title' => "Deleted is Successfully"], 200);
    }
}
