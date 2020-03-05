<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    protected $notices = null;

    public function __construct(Notice $notices)

    {
        $this->notices = $notices;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notices = Notice::all();
        $page = 'notices';
        return view('notice.index', compact('notices', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(request()->all(), $this->notices->getRules());

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else {
            $request->validate($this->notices->getRules());
            $form = $request->except('file');
            $form['file'] = storeImage(request()->file, 'notices');
            $success = $this->notices->fill($form)->save();


            return redirect()->route('notice.index')->with('toast_success', 'Notice was added!');
        }
    }



    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $notices = DB::table('notices')->where('file', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->orWhere('notices', 'like', '%' . $search . '%')->orWhere('role', 'like', '%' . $search . '%')->paginate(100);
    //     return view('notice.index', ['notices' => $notices]);
    // }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        return view('notice.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notices = Notice::find($id);
        return view('notice.edit', compact('notices'));
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

        $validator = Validator::make(request()->all(), $this->notices->getRules("update"));

        if ($validator->fails()) {

            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else 
        {

            $notices = $this->notices->findOrFail($id);
            $request->validate($this->notices->getRules());
            $form = $request->except('file');
            if (request()->has('file')) {
                $form['file'] = storeImage(request()->file);
                $oldimages = $notices->file;
            }
            $success = $notices->fill($form)->save();
            if($success && request()->has('file')){

                foreach(explode(',',$oldimages) as $oldimage)

                {
                    deleteFile($oldimage);
                }
                
            }

            return redirect()->route('notice.index')->with('toast_success', 'Notice was edited!');
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
        $delete = Notice::find($id);
        if ($delete->delete()) {
            return redirect()->route('notice.index')->with('toast_error', 'Notice was deleted!');
        }
    }
}
