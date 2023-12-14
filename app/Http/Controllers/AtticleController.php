<?php

namespace App\Http\Controllers;

use App\Models\Atticle;
use Illuminate\Http\Request;

class AtticleController extends Controller
{
    public function create(Request $request)
    {
        $validateData =$request->validate([
            'Title'=>'required|max:255',
            'Subtitle'=>'required|max:255',
            'cate_id'=>'required',
            'decription'=>'required',
            'author'=>'required'
     
          ]);
    
          $atticle = new Atticle();
          $atticle->Title=$validateData['Title'];
          $atticle->Subtitle=$validateData['Subtitle'];
          $atticle->cate_id=$validateData['cate_id'];
          $atticle->decription=$validateData['decription'];
          $atticle->author=$validateData['author'];



        if($request->hasFile('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filname=time().'.'.$extention;
            $file->move('upload/image/',$filname);
            $atticle->image=$filname;

        }
        $atticle->save();
          Return redirect('/admin/dasboard/allpost')->with('status',"sucessfull");
        
    }
}
