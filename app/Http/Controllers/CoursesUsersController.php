<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CoursesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $CourseUsers = CoursesUsers::findOrFail($id);
        return response()->view('cms.user.editCourses', compact('CourseUsers'));
    }
    public function editEfficiency($id)
    {

        $CourseUsers = CoursesUsers::findOrFail($id);
        return response()->view('cms.efficiency.editCourses', compact('CourseUsers'));
    }
    public function editManagement($id)
    {

        $CourseUsers = CoursesUsers::findOrFail($id);
        return response()->view('cms.management.editCourses', compact('CourseUsers'));
    }
    public function editIt($id)
    {

        $CourseUsers = CoursesUsers::findOrFail($id);
        return response()->view('cms.it.editCourses', compact('CourseUsers'));
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
            // 'name' => 'required|string|min:3|max:20',
        ], [
            'name.required' => 'حقل اسم الدولة مطلوب',
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف',
            'name.max' => 'لا يمكن أضافة اكثر من 20 حرف',

        ]);

        if (!$validator->fails()) {

            $CourseUsers = CoursesUsers::findOrFail($id);

            $CourseUsers->status = $request->get('status');
            $CourseUsers->notice = $request->get('notice');

            $isUpdated = $CourseUsers->save();
            return ['redirect' => route('indexCourses', ['id' => $CourseUsers->user_id])];
            if ($isUpdated) {
                return response()->json(['icon' => 'success', 'title' => "Updated is Successfully"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "Updated is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }


    public function updateEfficiency(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            // 'name' => 'required|string|min:3|max:20',
        ], [
            'name.required' => 'حقل اسم الدولة مطلوب',
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف',
            'name.max' => 'لا يمكن أضافة اكثر من 20 حرف',

        ]);

        if (!$validator->fails()) {

            $CourseUsers = CoursesUsers::findOrFail($id);

            $CourseUsers->status = $request->get('status');
            $CourseUsers->notice = $request->get('notice');

            $isUpdated = $CourseUsers->save();
            return ['redirect' => route('efficiencyCourses', ['id' => $CourseUsers->user_id])];
            if ($isUpdated) {
                return response()->json(['icon' => 'success', 'title' => "Updated is Successfully"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "Updated is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }
    public function updateManagement(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            // 'name' => 'required|string|min:3|max:20',
        ], [
            'name.required' => 'حقل اسم الدولة مطلوب',
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف',
            'name.max' => 'لا يمكن أضافة اكثر من 20 حرف',

        ]);

        if (!$validator->fails()) {

            $CourseUsers = CoursesUsers::findOrFail($id);

            $CourseUsers->status = $request->get('status');
            $CourseUsers->notice = $request->get('notice');

            $isUpdated = $CourseUsers->save();
            return ['redirect' => route('managementCourses', ['id' => $CourseUsers->user_id])];
            if ($isUpdated) {
                return response()->json(['icon' => 'success', 'title' => "Updated is Successfully"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "Updated is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }
    public function updateIt(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            // 'name' => 'required|string|min:3|max:20',
        ], [
            'name.required' => 'حقل اسم الدولة مطلوب',
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف',
            'name.max' => 'لا يمكن أضافة اكثر من 20 حرف',

        ]);

        if (!$validator->fails()) {

            $CourseUsers = CoursesUsers::findOrFail($id);

            $CourseUsers->status = $request->get('status');
            $CourseUsers->notice = $request->get('notice');

            $isUpdated = $CourseUsers->save();
            return ['redirect' => route('itCourses', ['id' => $CourseUsers->user_id])];
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
        DB::table('courses_users')->where('id', $id)->delete();
    }
}
