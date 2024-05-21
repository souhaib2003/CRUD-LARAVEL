<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroler extends Controller
{
   public function index(){
    $allPosts=[['id'=>1 , 'Title'=>'PHP' , 'Posted_by'=>'Sohaib' , 'Created_at'=>'2020-12-10  09:00:00'],
    ['id'=>2, 'Title'=>'Javascript' , 'Posted_by'=>'Ahmed' , 'Created_at'=>'2023-09-05  01:57:01']
    ,['id'=>3, 'Title'=>'Html' , 'Posted_by'=>'youssef' , 'Created_at'=>'2024-06-02  04:12:02'],
    ['id'=>4 , 'Title'=>'Css' , 'Posted_by'=>'Mohamed' , 'Created_at'=>'2025-07-02  10:34:00'],
 ];
   
     return view('Posts\index' , ['posts'=> $allPosts]);
   }

   public function Schow(){

      $singlePost=['id'=>1 ,'Title'=>'PHP','Description' => 'PHP is cool language.'];

     return view('Posts.schow', ['post'=>$singlePost]);
   }

   public function Create(){

     
      return view('Posts.create');
   }

   public function store(){
      $data = request()->all();
      $title= request()->title;
      $descreption= request()->descreption;
      $postcreator= request()->post_creator;

      // - store the user datat in database


      return to_route(route:'posts.index');
   }
   public function edit(){

       return view('Posts.edit');
   }

   public function update(){
      $title = request()->title;
      $descreption= request()->descreption;
      $postcreator= request()->post_creator;
     

      return to_route(route :'posts.schow' , parameters:1);


   }
   public function destroy(){
    return 'haaaaalo';

   }
}
