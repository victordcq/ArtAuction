<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Item;
use App\Category;
use App\Subject;
use App\Type;
use App\Items_has_Category;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function overview()
    {
        
        $items = Auth::user()->items;

        return view('admin.overview', [
            'items' => $items
        ]);
    }

    public function showFormCreate()
    {
        // get all categories
        $category = Category::where('id', '>' ,1)
        ->pluck('name','id');
        // get all subjects
        $subject = Subject::where('id', '>' ,1)
        ->pluck('name','id');
        // get all types
        $type = Type::where('id', '>' ,1)
        ->pluck('name','id');

        return view('admin.add' , [
            'category' => $category,
            'subject' => $subject,
            'type' => $type,
            'c' => 2,
            's' => 2,
            't' => 2

        ]);
    }

    public function showFormOffer($id)
    {        
        $item = Item::find($id);
        return view('admin.offer' , [
            'item' => $item,
        ]);
    }

public function offer(Request $request)
    {
        $this->validate($request, [
            'price' => 'required|integer',
            'item_id' => 'required'
        ]);

        //Create Offer, this functionality isn't worked out. It was not part of the task. There should be more validation and a real payment methode here.
        Auth::user()->offers()->attach([$request->get('item_id') =>['price'=>$request->price,'item_id'=>$request->item_id]]);

        return redirect('/');
    }



    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:125',
            'discription' => 'required',
            'images[]' => 'mimes:jpeg',
            'category_id'=> 'required',
            'subject_id'=> 'required',
            'type_id'=> 'required|integer',
            'year'=> 'required|integer',
            'name_artist'=> 'required'
        ]);

        //create item
        $item = Auth::user()->items()->create($request->all());
        //attach pivots
        $item->categories()->attach($request->get('category_id'));
        $item->subjects()->attach($request->get('subject_id'));

        //images
        $files = $request->file('images');
        $i = 1;
        if ($files) {
            try{
                foreach ($files as $file) {
                    $dest=storage_path('app/public/img/'.$item->id);
                    $filename=$i . ".jpg";
                    $succes=$file->move($dest,$filename);
                    $i=$i+1;
                    // folder relative to Filesystem root
            // want to specify file name? $file->storeAs()
                }
            }catch(Exception $e){
                return redirect('/error');
            }
        }
        return redirect('/admin');
    }


    public function showFormUpdate($id)
    {

        $item = Auth::user()->items()->find($id);
        // get all categories
        $category = Category::where('id', '>' ,1)
        ->pluck('name','id');
        // get all subjects
        $subject = Subject::where('id', '>' ,1)
        ->pluck('name','id');
        // get all types
        $type = Type::where('id', '>' ,1)
        ->pluck('name','id');
        //voor checkboxes
        $checkedCat = $item->categories()->pluck('id');        
        $checkedSub = $item->subjects()->pluck('id');
        $checkedType = $item->type_id;

        return view('admin.edit', [
            'item' => $item,
            'category' => $category,
            'subject' => $subject,
            'type' => $type,
            'checkedCat' => $checkedCat,
            'checkedSub' => $checkedSub,
            'checkedType' => $checkedType,
            'c' => 2,
            's' => 2,
            't' => 2
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:125',
            'discription' => 'required',
            'images[]' => 'mimes:jpeg',
            'category_id'=> 'required',
            'subject_id'=> 'required',
            'type_id'=> 'required|integer',
            'year'=> 'required|integer',
            'name_artist'=> 'required'
        ]);
        
        //update item
        Auth::user()->items()->find($request->id)->update($request->all());
        //update pivots
        $item = Auth::user()->items()->find($request->id);
        $item->categories()->sync($request->get('category_id'));
        $item->subjects()->sync($request->get('subject_id'));

        return redirect('/admin');
    }

    public function delete(Request $request)
    {

        Auth::user()->items()->find($request->id)->delete();
        //catergoeries, subjects en offers worden automatisch gedelte door ondelete(cascade) .

        return redirect('/admin');
    }

}
