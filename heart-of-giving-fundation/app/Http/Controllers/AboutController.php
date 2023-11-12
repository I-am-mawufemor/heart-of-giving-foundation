<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fecth data
        $post = About::all();
        return view('about.index')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        try {
            DB::beginTransaction();

            if (About::count() > 0) {
                throw new \Exception('Post already exists');
            }

            $post = new About($request->all());
            $post->save();

            DB::commit();

            return redirect()->route('about.index')->with('success', 'Your post has been successfully updated');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = About::find($id);
        return view('about.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate($this->getValidationRules());

        try {
            DB::beginTransaction();

            $post = About::find($id);

            if (!$post) {
                throw new \Exception('Post not found');
            }

            $post->update($request->all());

            DB::commit();

            return back()->with('success', 'Your post has been successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete About us

        $post = About::find($id);
        $post->delete();
        return redirect('/aboutUs')->with('success', 'You have successfully deleted abouts');
    }

    private function getValidationRules()
    {
        return [
            'sub_heading_1' => 'required',
            'sub_heading_1_body' => 'required',
            'sub_heading_2' => 'required',
            'sub_heading_2_body' => 'required',
            'sub_heading_3' => 'required',
            'sub_heading_3_body' => 'required',
            'sub_heading_4' => 'required',
            'sub_heading_4_body' => 'required',
        ];
    }
}
