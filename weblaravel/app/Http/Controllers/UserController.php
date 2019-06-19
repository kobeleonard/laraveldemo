<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    private $users=[
            ['id'=>1,'username'=>'user1','password'=>'123456'],
            ['id'=>2,'username'=>'user2','password'=>'123456'],
            ['id'=>3,'username'=>'user3','password'=>'123456'],
            ['id'=>4,'username'=>'user4','password'=>'123456'],
            ['id'=>5,'username'=>'user5','password'=>'123456'],
        ];
    //
    public function index()
    {
        return 'user/index/你好明天';
    }

    public function list(Request $request){
        return $this->users;
    }

    public function show(int $id){
        $data = array_filter($this->users,function($item) use ($id){
                return $item['id'] == $id;
        });
        return $data[0];
    }

    public function add(Request $request){
        return response()->json($request->all(),201);
    }

    public function edit(Request $request,$id){
        return response()->json($request->all(),202);
    }

    public function del(int $id){
        return response()->json(['status'=>0,'mst'=>'删除成功'],204);
    }
}
