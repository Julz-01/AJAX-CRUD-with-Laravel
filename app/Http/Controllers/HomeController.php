<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ajaxcrud;
use Auth;
use App\Information;
use App\practice;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function submit()
    {
        $this-> validate(request(),
            [
                  'name' => 'required',
                  'address' => 'required',
                  'number' => 'required',  
            ]);


        ajaxcrud::create([
        'user_id'=> request('user_id'),
        'name' => request('name'),
        'gender' => request('gender'),
        'address' => request('address'),
        'number' => request('number'),
    ]);
        return response()->json();
    }
    public function table(){
          $data = ajaxcrud::all();
        return view('table', compact('data'));
    }
    public function destroy(ajaxcrud $id){
        $data = ajaxcrud::where('id', '=' , $id->id)->first();
        $data->delete();
        return response()->json();
    }
    public function update(ajaxcrud $id){
        
        $data = ajaxcrud::where('id', '=' , $id->id)->first();
        $data->name = request('up_name');
        $data->address = request('up_address');
        $data->gender = request('up_gender');
        $data->number = request('up_number');
        $data->save();
        return response()->json();
    }
    public function send()
    {
      $this->validate(request(),
        [
        'product' => 'required',
        'quantity'=> 'required',
        'status' => 'required',
        ]);
      Information::create([
        'user_id' => Auth::user()->id,
        'product' => request('product'),
        'quantity'=> request('quantity'),
        'status' => request('status'),
        ]);
      return back();
    }
    public function view()
    {
      return view('send');
    }
    public function table_list()
    {
      $data = Information::all();
      return view('/table_list',compact('data'));
    }
    public function destroy_id(Information $id)
    {
      $data = Information::where('id', '=', $id->id)->first();
      $data->delete();
      return back();
    }
    public function get_id(Information $id)
    {
      $data = Information::where('id', '=', $id->id)->first();
      return view('edit', compact('data'));
    }
    public function update_id(Information $id)
    {
      $data = Information::where('id', '=', $id->id)->first();
      $data->product = request('up_product');
      $data->quantity = request('up_quantity');
      $data->status = request('up_status'); 
      $data->save();
      return redirect('/table_list');
    }
    public function resend()
    {
      $this->validate(request(),
        ['name' => 'required',
          'number' => 'required',
      ]);
      practice::create([
        'name' => request('name'),
        'number' => request('number'),
      ]);
      return back();
    }
    public function review()
    {
      return view('/resend');
    }
    public function rtable()
    {
      $data = practice::all();
      return view('/rtable',compact('data'));
    }
    public function redestroy(practice $id)
    {
      $data = practice::where('id', '=', $id->id)->first();
      $data->delete();
      return back();
    }

    public function gets_id(practice $id)
    {
      $data = practice::where('id', '=', $id->id)->first();
      return view('/get_id',compact('data'));
    }
    public function up_id(practice $id)
    {
      $data = practice::where('id', '=', $id->id)->first();
      $data->name = request('up_name');
      $data->number = request('up_number');
      $data->save();
      return redirect('/rtable');
    }
}
