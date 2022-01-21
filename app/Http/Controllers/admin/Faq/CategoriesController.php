<?php

namespace App\Http\Controllers\admin\Faq;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\CategoriesQuestion;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = CategoriesQuestion::all();
        return view('admin.faq.cathegories.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = Faq::all();
        return view('admin.faq.cathegories.create',compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {

            // save blood pocket with blood bank
            CategoriesQuestion::create([
                'type_faq' => $request->input('faq'),
                'cathegories' => $request->input('categories'),
            ]);
            Toastr::success('message', trans('messages.save_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_save'));
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $faq = Faq::all();
            $cat = CategoriesQuestion::findOrFail($id);
            return view('admin.faq.cathegories.edit', compact('cat','faq'));
        } catch(\Exception $e) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $cat = CategoriesQuestion::findOrFail($id);
            $cat->type_faq = $request->input('faq');
            $cat->cathegories = $request->input('categories');
            $cat->save();
            Toastr::success('messages', trans('messages.update_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_update'));
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $cat = CategoriesQuestion::findOrFail($id);
            $cat->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
