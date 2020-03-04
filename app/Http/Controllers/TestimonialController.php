<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    protected $testimonial = null;

    public function __construct(Testimonial $testimonial)

    {
        $this->testimonial = $testimonial;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $testimonial = Testimonial::all();
        $page = 'testimonial';
        return view('testimonials.index', compact('testimonial', 'page'));
    }

    public function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = DB::table('testimonials')
                    ->where('id', '<', $request->id)
                    ->limit(5)
                    ->get();
            } else {
                $data = DB::table('testimonials')
                    ->limit(5)
                    ->get();
            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty()) {
                foreach ($data as $row) {
                    $output .= '
                                <p><a href="' . 'storage/' . $row->profile . '" target="_blank">
                                        <img src="' . 'storage/' . $row->profile . '" class="img-thumbnail" style="height: auto; max-width:50px">
                                    </a>
                                </p>
                                <p>' . $row->name . '</p>
                                <p>' . $row->testimonial . '</p>
                                <p>' . $row->role . '</p>
        ';
                }
                $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success form-control" id="load_more_button">Load More</button>
       </div>
       ';
            } else {
                $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
            }
            echo $output;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(request()->all(), $this->testimonial->getRules());

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else {
            $request->validate($this->testimonial->getRules());
            $form = $request->except('profile');
            $form['profile'] = storeImage(request()->profile, 'testimonial');
            $success = $this->testimonial->fill($form)->save();


            return redirect()->route('testimonials.index')->with('toast_success', 'Testimonial was added!');
        }
    }



    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $testimonial = DB::table('testimonials')->where('profile', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->orWhere('testimonial', 'like', '%' . $search . '%')->orWhere('role', 'like', '%' . $search . '%')->paginate(100);
    //     return view('testimonials.index', ['testimonial' => $testimonial]);
    // }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        return view('testimonials.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonials.edit', compact('testimonial'));
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

        $validator = Validator::make(request()->all(), $this->testimonial->getRules("update"));

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else 
        {

            $testimonial = $this->testimonial->findOrFail($id);
            $request->validate($this->testimonial->getRules());
            $form = $request->except('profile');
            if (request()->has('profile')) {
                $form['profile'] = storeImage(request()->profile);
                $oldimages = $testimonial->profile;
            }
            $success = $testimonial->fill($form)->save();
            if($success && request()->has('profile')){

                foreach(explode(',',$oldimages) as $oldimage)

                {
                    deleteFile($oldimage);
                }
                
            }

            return redirect()->route('testimonials.index')->with('toast_success', 'Testimonial was edited!');
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
        $delete = Testimonial::find($id);
        if ($delete->delete()) {
            return redirect()->route('testimonials.index')->with('toast_error', 'Testimonial was deleted!');
        }
    }
}
