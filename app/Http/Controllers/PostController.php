<?php

namespace App\Http\Controllers;

use App\DataTables\postsDataTableEditor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function getusers(){
        $user =  User::select('id','name')->get();
        return response()->json($user);
    }
    public function index()
    {
        return view('custom/apps/user/posts');
    }
    // GET ALL Posts
    public function getPosts(Request $request){
        $posts=DB::table('users')
            ->join('posts', 'users.id', 'posts.userId')
            ->get();
        return DataTables::of($posts)
            ->make(true);
    }
    public function create(Request $request)
    {
        dd($request);
    }
    public function store(postsDataTableEditor $editor)
    {
        return $editor->process(\request());
//        dd(\request());
//        return \request();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }

}
