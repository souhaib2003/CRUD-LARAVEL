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
}
