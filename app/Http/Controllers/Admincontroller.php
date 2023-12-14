<?php

namespace App\Http\Controllers;

use App\Models\Atticle;
use App\Models\Category;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Admincontroller extends Controller
{

    public function Adminpage(){
     
        $user = User::all();
        return View('admin.post.index',compact('user'));
    }

    // delete admin register
    public function deleteadmin(string $id){
        $admin=User::find($id);
        $admin->delete();

        return View('admin.post.index');
    }








    public function dasboard()
    {
        $countAdmin=User::count();
        $countcategory = Category::count();
        $count = Atticle::count();
        $atticle = Atticle::all();
        return View('admin.dasboard', compact('atticle', 'count', 'countcategory','countAdmin'));
    }
    public function Addpost()
    {
        $addpost = Category::all();
        return View('admin.post.Addpost', compact('addpost'));
    }

    public function allpost(Request $request)
    {
        // $search = $request->input('search');
        // $posts = Atticle::where('Title', 'like', "%$search%")->get();
        $post = Atticle::paginate(7);
        return View('admin.post.allpost', compact('post'));
    }

    public function showPost(string $id)
    {
        $post = Atticle::find($id);
        return View('admin.post.show', compact('post'));
    }
    public function destroy(string $id)
    {

        $atticle = Atticle::find($id);
        // Delete the associated image if it exists
        $imagePath = public_path('upload/image/' . $atticle->image);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Delete the article record from the database
        $atticle->delete();
        return Redirect('/admin/dasboard/allpost')->with('status', "product Deleted successfull");
    }


    public function Editpost(String $id)
    {
        $atticle = Atticle::find($id);
        $cat = Category::all();
        return View('admin.post.edit', compact('atticle', 'cat'));
    }

    //update post delete old image
    public function updatepost(Request $request, $id)
    {
        $atticle = Atticle::find($id);
        $atticle->Title = $request->input('Title');
        $atticle->Subtitle = $request->input('Subtitle');
        $atticle->cate_id = $request->input('cate_id');

        $atticle->decription = $request->input('decription');
        $atticle->author = $request->input('author');

        if ($request->hasFile('image')) {
            $destination = 'upload/image/' . $atticle->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenttion = $file->getClientOriginalName();
            $fileName = time() . '.' . $extenttion;
            $file->move('upload/image/', $fileName);
            $atticle->image = $fileName;
        }
        $atticle->update();
        return redirect('/admin/dasboard/allpost')->with('status', "sucessfull");
    }
}
