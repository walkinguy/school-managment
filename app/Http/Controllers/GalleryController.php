<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    protected $gallery = null;

    public function __construct(Gallery $gallery)

    {
        $this->gallery = $gallery;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gallery = Gallery::all();
        $page = 'gallery';
        return view('gallery.index', compact('gallery', 'page'));
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

        $validator = Validator::make(request()->all(), $this->gallery->getRules());

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else {
            $request->validate($this->gallery->getRules());
            $form = $request->except('profile');
            $form['profile'] = storeImage(request()->profile, 'gallery');
            $success = $this->gallery->fill($form)->save();


            return redirect()->route('gallery.index')->with('toast_success', 'Gallery was added!');
        }
    }



    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $gallery = DB::table('gallery')->where('profile', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->orWhere('gallery', 'like', '%' . $search . '%')->orWhere('role', 'like', '%' . $search . '%')->paginate(100);
    //     return view('gallery.index', ['gallery' => $gallery]);
    // }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Responset
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make(request()->all(), $this->gallery->getRules("update"));

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else 
        {

            $gallery = $this->gallery->findOrFail($id);
            $request->validate($this->gallery->getRules());
            $form = $request->except('profile');
            if (request()->has('profile')) {
                $form['profile'] = storeImage(request()->profile);
                $oldprofiles = $gallery->profile;
            }
            $success = $gallery->fill($form)->save();
            if($success && request()->has('profile')){

                foreach(explode(',',$oldprofiles) as $oldprofile)

                {
                    deleteFile($oldprofile);
                }
                
            }

            return redirect()->route('gallery.index')->with('toast_success', 'Gallery was edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $delete = Gallery::find($id);
        if ($delete->delete()) {
            return redirect()->route('gallery.index')->with('toast_error', 'Gallery was deleted!');
        }
    }
}
