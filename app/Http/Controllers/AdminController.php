<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::orderBy('id', 'desc')->paginate(5);
        $roles = Role::all();
        return response()->view('cms.admin.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'admin')->get();
        return response()->view('cms.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  $users->actor()->associate($admins);

     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required',

        ]);
        if (!$validator->fails()) {
            $admins = new Admin();
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $admins->image = $imageName;
            }
            $admins->email = $request->get('email');
            $admins->password = Hash::make($request->get('password'));
            $admins->first_name = $request->get('first_name');
            $admins->last_name = $request->get('last_name');
            $admins->status = $request->get('status');
            $admins->gender = $request->get('gender');
            $admins->date = $request->get('date');
            $admins->mobile = $request->get('mobile');
            $admins->role_id = $request->get('role_id');
            $roles = Role::findOrFail($request->get('role_id'));
            $admins->assignRole($roles->name);
            $isSaved = $admins->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => 'Created is Successfully'], 200);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::findOrFail($id);
        $roles = Role::where('guard_name', 'admin')->get();
        return response()->view('cms.admin.edit', compact('admins', 'roles'));
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
            'email' => 'required',
        ]);

        if (!$validator->fails()) {
            $admins = Admin::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $admins->image = $imageName;
            }
            $admins->email = $request->get('email');
            $admins->first_name = $request->get('first_name');
            $admins->last_name = $request->get('last_name');
            $admins->status = $request->get('status');
            $admins->gender = $request->get('gender');
            $admins->date = $request->get('date');
            $admins->mobile = $request->get('mobile');
            $admins->role_id = $request->get('role_id');
            $admins->syncRoles($request->get('role_id'));
            $isSaved = $admins->save();

            if ($isSaved) {
                return ['redirect' => route('admins.index')];
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
        $admins = Admin::destroy($id);
    }
}
