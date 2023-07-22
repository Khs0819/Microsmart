<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'desc')->paginate(5);
        $roles = Role::all();
        return response()->view('cms.author.index', compact('authors', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'author')->get();
        return response()->view('cms.author.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  $users->actor()->associate($authors);

     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required',

        ]);
        if (!$validator->fails()) {
            $authors = new Author();
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/author', $imageName);

                $authors->image = $imageName;
            }
            $authors->email = $request->get('email');
            $authors->password = Hash::make($request->get('password'));
            $authors->first_name = $request->get('first_name');
            $authors->last_name = $request->get('last_name');
            $authors->status = $request->get('status');
            $authors->gender = $request->get('gender');
            $authors->date = $request->get('date');
            $authors->mobile = $request->get('mobile');
            $authors->role_id = $request->get('role_id');
            $roles = Role::findOrFail($request->get('role_id'));
            $authors->assignRole($roles->name);
            $isSaved = $authors->save();
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
        $authors = Author::findOrFail($id);
        $roles = Role::where('guard_name', 'author')->get();
        return response()->view('cms.author.edit', compact('authors', 'roles'));
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
            $authors = Author::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/author', $imageName);

                $authors->image = $imageName;
            }
            $authors->email = $request->get('email');
            $authors->first_name = $request->get('first_name');
            $authors->last_name = $request->get('last_name');
            $authors->status = $request->get('status');
            $authors->gender = $request->get('gender');
            $authors->date = $request->get('date');
            $authors->mobile = $request->get('mobile');
            $authors->role_id = $request->get('role_id');
            $authors->syncRoles($request->get('role_id'));
            $isSaved = $authors->save();

            if ($isSaved) {
                return ['redirect' => route('authors.index')];
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
        $authors = Author::destroy($id);
    }
}
