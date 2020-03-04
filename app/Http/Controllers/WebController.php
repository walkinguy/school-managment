<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Web;
use Illuminate\Support\Facades\Validator;
use function foo\func;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = Web::all();

        return view('website.index', compact('web'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title'=>'required',
            'description' => 'required',
            'image' => 'required|file|image|max:5000'
        );

        $validator = Validator::make(request()->all(), $rules);

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();

        } else {
            $web = new Web();
            $request->validate($rules);
            $form = $request->all();
            $success = $web->fill($form)->save();

            $this->storeImage($web);

            return redirect()->route('website.index')->with('toast_success', 'Image was added!');
        }

    }


    private function storeImage($web)
    {
        if (request()->has('image','banner')) {
            $web->update([

                'image' => request()->image->store('uploads', 'public'),
                'banner' => request()->banner->store('uploads', 'public')
            ]);
        }

    }
 

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $web = Web::all();

        return view('website.show', compact('web'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $webs = Web::find($id);

        return view('website.edit', compact('webs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $rules = array(
            'title' => 'required',
            'description' => 'required',

        );

        $validator = Validator::make(request()->all(), $rules);

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();

        } else {

            $web = Web::findOrFail($id);
            $request->validate($rules);
            $web->fill($request->all());
            $web->update();
            $this->storeImage($web);

            return redirect()->route('website.index')->with('toast_success', 'Image was edited!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $delete = Web::find($id);
        $delete->delete();
        return redirect()->route('website.index')->with('toast_error', 'Image was deleted!');
    }
}
