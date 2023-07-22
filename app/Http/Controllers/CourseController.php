<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('program')->orderBy('id', 'desc')->paginate(5);
        return response()->view('cms.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        return response()->view('cms.course.create', compact('programs'));
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
            'name' => 'required|unique:courses',
        ], [
            'name.required' => 'حقل اسم الكورس مطلوب',
            'name.unique' => 'اسم الكورس موجود مسبقا',


        ]);

        if (!$validator->fails()) {

            $courses = new Course();

            if (request()->hasFile('pdf')) {

                $pdf = $request->file('pdf');

                $pdfName = time() . 'pdf.' . $pdf->getClientOriginalExtension();

                $pdf->move('storage/files/courses', $pdfName);

                $courses->pdf = $pdfName;
            }
            $courses->name = $request->input('name');
            $courses->program_id = $request->get('program_id');

            $isSaved = $courses->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => 'Created is Successfully '], 200);
            } else {

                return response()->json(['icon' => 'error', 'title' => 'Created is Failed'], 400);
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
        $programs = Program::all();
        $courses = Course::findOrFail($id);
        return response()->view('cms.course.edit', compact('programs', 'courses'));
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
            'name.required' => 'حقل اسم الكورس مطلوب',



        ]);

        if (!$validator->fails()) {

            $courses = Course::findOrFail($id);

            if (request()->hasFile('pdf')) {

                $pdf = $request->file('pdf');

                $pdfName = time() . 'pdf.' . $pdf->getClientOriginalExtension();

                $pdf->move('storage/files/courses', $pdfName);

                $courses->pdf = $pdfName;
            }
            $courses->name = $request->get('name');
            $courses->program_id = $request->get('program_id');

            $isUpdated = $courses->save();
            return ['redirect' => route('courses.index')];
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
        $courses = Course::destroy($id);
    }
}
