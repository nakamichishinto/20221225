<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class AdvanceController extends Controller
{
    public function register() {
        return view('/register');
    }

    public function createUser(Request $request) {
        $status=$request->all();
        User::create($status);
        return redirect('/thanks');
    }

    public function thanks(Request $request) {
        return view('/thanks');
    }

    public function login(Request $request)
    {
        return view('/login');
    }
    
    

    public function check(Request $request)
    {
    $text = ['text' => 'ログインして下さい。'];
    return view('/login', $text);
    }

    public function checkUser(Request $request)
    {
    $email = $request->email;
    $password = $request->password;

    $query=User::query();

        if(!empty($email)) {
            $query->where('email','=',$email);
        }

        if(!empty($password)) {
            $query->where('password','=',$password);
        }
        $users=$query->get();

        if($users->isEmpty()){
        return view('/thanks');
        }
        foreach ($users as $user) {
            $user->flag = 1;
            $query->update([
                'flag'=> 1
            ]);
        }

        $items=Restaurant::all();
        $keyword=$request->input('keyword');

        $address=$request->input('address');

        $genre=$request->input('genre');

        $posts=$query->get();
        $text = $users;
        return view('index', ['text' => $text, 'items' =>$items],compact('posts','address','genre','keyword'))->with('keyword',$keyword);
    }
    

    public function index(Request $request) {
        $items=Restaurant::all();

        $users = User::where('flag',1);
        $user = $users->get();

        $keyword=$request->input('keyword');

        return view('index',['items' =>$items],compact('user','keyword'));
    }

    public function search(Request $request) {
        
        $keyword=$request->input('keyword');

        $address=$request->input('address');

        $genre=$request->input('genre');

        $query=Restaurant::query();

        if(!empty($address)) {
            $query->where('address_id','=',$address);
        }

        if(!empty($genre)) {
            $query->where('genre_id','=',$genre);
        }

        if(!empty($keyword)) {
            $query->where('name','like','%'.$keyword.'%');
        }

        $posts=$query->get();
        
        return view('/search',compact('posts','address','genre','keyword'))->with('keyword',$keyword);
    }



    

    public function detail($id)
    {
        $users = User::where('flag',1);
        $user = $users->first();
        $item = Restaurant::find($id);
        return view('/detail',compact('item','user'));
    }


    public function createReserve(Request $request)
    {
        $user_id=array('user_id'=>2);
        $request->merge($user_id);
        print_r($request->all());
        $reserve=$request->all();
        print_r($reserve);
        Reserve::create($reserve);
        return view('/done');
    }


    

    public function logout() {
        $user=User::where('flag','=',1);
        $user->update([
                'flag'=> 0
            ]);
        return redirect('/');
    }

    public function favorite($id) {
        $item = Restaurant::find($id);


    }
    


}
