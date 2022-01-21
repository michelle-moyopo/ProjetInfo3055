<?php

namespace App\Http\Controllers\admin\Faq;

use App\Models\FaqQuestion;
use Illuminate\Http\Request;
use App\Models\CategoriesQuestion;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class FaqQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qat = FaqQuestion::all();
        return view('admin.faq.faquestions.index',compact('qat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = CategoriesQuestion::all();
        return view('admin.faq.faquestions.create',compact('cat'));
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
            FaqQuestion::create([
                'type_cathegories' => $request->input('categories'),
                'question' => $request->input('question'),
                'answer' => $request->input('answer'),
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
            $cat = CategoriesQuestion::all();
            $qat = FaqQuestion::findOrFail($id);
            return view('admin.faq.faquestions.edit', compact('cat','qat'));
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
            $qat = FaqQuestion::findOrFail($id);
            $qat->type_cathegories = $request->input('cat');
            $qat->question = $request->input('question');
            $qat->answer = $request->input('answer');
            $qat->save();
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
            $qat = FaqQuestion::findOrFail($id);
            $qat->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
