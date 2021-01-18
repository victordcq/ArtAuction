<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Subject;
use App\Type;
use App\Item;
use App\Offers;


class ItemController extends Controller
{
    //item overview with filter
    public function overview(Request $request)
    {
               
        $category = Category::pluck('name','id');
        $subject= Subject::pluck('name','id'); 
        $type = Type::pluck('name','id');              
        
        
        $items = new Item;
        //query to search all options at once.
        $filter = $items->newQuery(); 

        //filter category.
        if ($request->category_id[0]!=1 && $request->has('category_id')) {
          $filter->where(function($subfilter) use ($request){            
            foreach ($request->category_id as $index => $cat) {
                $callback = function($query) use ($cat) {
                    $query->where('category_id', '=', $cat);
                };
                if ($index == 0) {
                 $subfilter->whereHas('categories', $callback);
                } else {
                 $subfilter->orWhereHas('categories', $callback);
                }
            }
          });       
        }
        //filter subject.
        if ($request->subject_id[0]!=1 && $request->has('subject_id')) {
          $filter->where(function($subfilter) use ($request){
            foreach ($request->subject_id as $index => $subj) {
                $callback = function($query) use ($subj) {
                    $query->where('subject_id', '=', $subj);
                };
                if ($index == 0) {
                    $subfilter->whereHas('subjects', $callback);
                } else {
                    $subfilter->orWhereHas('subjects', $callback);
                }
            } 
          });               
        }
        //filter type.
        if ($request->type_id[0]!=1 && $request->has('type_id')) {
           $filter->where(function($subfilter) use ($request){
            foreach ($request->type_id as $index => $ty) {
                if ($index == 0) {
                    $subfilter->where('type_id', 'like', $ty);
                } else {
                    $subfilter->orWhere('type_id', 'like', $ty);
                }
            }
          });   
        }
        //filter name.
        if ($request->has('name') && $request->name!='') {
            $filter->where('name', 'LIKE', '%'.$request->name.'%');
        }
        //filter atist name.
        if ($request->has('name_artist') && $request->name_artist!='') {
            $filter->where('name_artist', 'LIKE', '%'.$request->name_artist.'%');
        }
        //filter origin.
        if ($request->has('origin') && $request->origin!='') {
            $filter->where('origin', 'LIKE', '%'.$request->origin.'%');
        }
        //filter years.
        if ($request->has('yearmax') && $request->yearmax!='') {            
            $filter->where('year', '<', $request->yearmax);
        }
        if ($request->has('yearmin') && $request->yearmin!='') {            
            $filter->where('year', '>', $request->yearmin);
        }
        

        // Get the results from filter       
        $items=$filter->get();
        

        return view('item.overview', [
            'items' => $items,
            'category' => $category,
            'subject' => $subject,
            'type' => $type,
            's'=>1,
            'c'=>1,
            't'=>1
        ]);
    }


    public function detail($id)
    {
        $item = Item::findOrFail($id);
        $subj=$item->subjects;
        
        return view('item.detail', [
            'item' => $item
        ]);
    }

}
