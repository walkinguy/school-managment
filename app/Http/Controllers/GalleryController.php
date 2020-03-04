<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function foo\func;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        $page='gallery';
        return view('gallery.index', compact('gallery','page'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            $gallery = new Gallery();
            $request->validate($rules);
            $form = $request->all();
            $success = $gallery->fill($form)->save();

            $this->storeImage($gallery);

            return redirect()->route('gallery.index')->with('toast_success', 'Image was added!');
        }

    }


    private function storeImage($gallery)
    {
        if (request()->has('image')) {
            $gallery->update([

                'image' => request()->image->store('uploads', 'public')
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        return view('gallery.show');
    }

    // public function search(Request $request)
    // {
    //      $search = $request->get('search');
    //      $gallery = DB::table('galleries')->where('title', 'like', '%'.$search.'%')->orWhere('description', 'like', '%'.$search.'%')->orWhere('image', 'like', '%'.$search.'%')->paginate(100);
    //      return view('gallery.index',['gallery'=>$gallery]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleries = Gallery::find($id);

        return view('gallery.edit', compact('galleries'));
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

            $gallery = Gallery::findOrFail($id);
            $request->validate($rules);
            $gallery->fill($request->all());
            $gallery->update();
            $this->storeImage($gallery);

            return redirect()->route('gallery.index')->with('toast_success', 'Image was edited!');
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
        $delete = Gallery::find($id);
        $delete->delete();
        return redirect()->route('gallery.index')->with('toast_error', 'Image was deleted!');
    }
}
