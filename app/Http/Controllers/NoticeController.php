<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Mockery\Matcher\Not;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        $page='notice';
        return view('notice.index', compact('notices','page'));
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
        $rules = array(
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file'
        );

        $validator = Validator::make(request()->all(), $rules);

        if ($validator->fails()) {
            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else {

            $notices = new Notice();
            $request->validate($rules);
            $form = $request->except('file');
            $form['file'] = storeImage(request()->file);
            $success = $notices->fill($form)->save();
            
        }

        return redirect()->route('notice.index')->with('toast_success', 'Notice was added!');
    }

    private function storeFile($notices)
    {
        if (request()->has('file')) {
            $notices->update([

                'file' => request()->file->store('uploads', 'public')
            ]);
        }
    }

    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $notices = DB::table('notices')->where('title', 'like', '%' . $search . '%')->orWhere('category', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->orWhere('file', 'like', '%' . $search . '%')->paginate(100);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make(request()->all(), $rules);

        if ($validator->fails()) {
            return back()->with('toast_warning', $validator->messages()->all()[0])->withInput();
        } else {

            $notices = Notice::findOrFail($id);
            $request->validate($rules);
            $notices->fill($request->all());
            $notices->update();
            $this->storeFile($notices);

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
        $delete = Notice::findOrFail($id);
        if ($delete->delete())

            return redirect()->route('notice.index')->with('toast_error', 'Notice was deleted!');
    }
}
