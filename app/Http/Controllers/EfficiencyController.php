<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CoursesUsers;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EfficiencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexPreference($id)
    {
        //
        $preferences = Preference::where('user_id', $id)->get();
        $users = User::findOrFail($id);
        return response()->view('cms.efficiency.indexPreferences', compact('preferences', 'users', 'id'));
    }

    public function indexCourses($id)
    {
        $users = User::findOrFail($id);
        $CourseUsers = CoursesUsers::where('user_id', $id)->get();
        $courses = Course::all();

        return response()->view('cms.efficiency.indexCourses', compact('courses', 'id', 'CourseUsers', 'users'));
    }

    public function indexStudent($id)
    {
        $users = User::findOrFail($id);
        return response()->view('cms.efficiency.show', compact('users', 'id'));
    }


    public function index()
    {
        $count = 0;
        $users = DB::table('users')
            ->join('courses_users', 'user_id', '=', 'users.id')
            ->join('courses', 'course_id', '=', 'courses.id')
            ->join('programs', 'program_id', '=', 'programs.id')
            ->select('users.*')
            ->where('programs.id', '=', '1')
            ->distinct()
            ->simplePaginate(8);

        return response()->view('cms.efficiency.index', compact('users', 'count'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        return response()->view('cms.efficiency.show', compact('users'));
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
        $users = User::destroy($id);
    }
}
