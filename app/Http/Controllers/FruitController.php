<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    public function index(){
        $fruits = DB::table('fruits')
                ->orderBy('id_Fruit', 'desc')
                ->get();

        return view('fruits.index', array(
            'fruits' => $fruits
        ));
    }
    public function detail($id){
        $fruit = DB::table('fruits')->where('id_Fruit', '=', $id)->first();
        // $fruit is a resultset

        return view('fruits.detail', array(
            'fruit' => $fruit
        ));
    }
    public function create(){
        return view('fruits.create');
    }
    public function save(Request $request){
        // var_dump($request->input());
        
        $save = DB::table('fruits')->insert(array(
            'st_Name' => $request->input('name'),
            'st_Description' => $request->input('description'),
            'ft_Price' => $request->input('price'),
            'dt_Date' => date('Y-m-d')
        ));

        $status = $save ? 'fruit added' : 'woops error at adding fruit :(';
        
        return redirect()->action('FruitController@index')->with('status', $status);
    }
    public function delete($id){
        $result = DB::table('fruits')
                ->where('id_Fruit', $id)
                ->delete();

        $status = $result ? 'Fruit deleted' : 'Error at deleting fruit';
        
        return redirect()->action('FruitController@index')->with('status', $status);
    }
    public function update($id){
        $fruit = DB::table('fruits')->where('id_Fruit', '=', $id)->first();
        
        return view('fruits.create', array(
            'fruit' => $fruit
        ));
    }
    public function doUpdate(Request $request){
        $id = $request->input('id');
        $fruit = DB::table('fruits')
                ->where('id_Fruit', $id)
                ->update(array(
                    'st_Name' => $request->input('name'),
                    'st_Description' => $request->input('description'),
                    'ft_Price' => $request->input('price')
                ));
        $status = $fruit ? 'Fruit Updated' : 'Error Updating fruit';
        
        return redirect()->action('FruitController@index')->with('status', $status);
    }
}
