<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scheme;
use App\Models\Category;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class YojanaController extends Controller
{

    public function index()
    {
        $schemes = Scheme::latest()->paginate(20);

        return view('admin.schemes.index', compact('schemes'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $states = State::where('status', 1)->get();

        return view('admin.schemes.create', compact('categories', 'states'));
    }

    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|max:255',
            'slug' => 'required|unique:schemes,slug',
            'category_id' => 'nullable',
            'state_id' => 'nullable',

        ]);

        $imageName = null;

        if ($request->hasFile('featured_image')) {

            $image = $request->file('featured_image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('uploads/schemes'), $imageName);
        }

        Scheme::create([

            'category_id' => $request->category_id,
            'state_id' => $request->state_id,

            'title' => $request->title,

            'slug' => Str::slug($request->slug),

            'featured_image' => $imageName,

            'short_description' => $request->short_description,

            'overview' => $request->overview,

            'benefits' => $request->benefits,

            'eligibility' => $request->eligibility,

            'documents_required' => $request->documents_required,

            'application_process' => $request->application_process,

            'financial_benefits' => $request->financial_benefits,

            'important_dates' => $request->important_dates,

            'status_check' => $request->status_check,

            'official_website' => $request->official_website,

            'helpline' => $request->helpline,

            'meta_title' => $request->meta_title,

            'meta_description' => $request->meta_description,

            'status' => $request->status ?? 1

        ]);

        return redirect()
            ->route('schemes.index')
            ->with('success', 'Scheme Added Successfully');
    }

    public function edit($id)
    {

        $scheme = Scheme::findOrFail($id);

        $categories = Category::where('status', 1)->get();

        $states = State::where('status', 1)->get();

        return view(
            'admin.schemes.edit',
            compact('scheme', 'categories', 'states')
        );
    }

    public function update(Request $request, $id)
    {

        $scheme = Scheme::findOrFail($id);

        $request->validate([

            'title' => 'required|max:255',

            'slug' => 'required|unique:schemes,slug,' . $scheme->id,

        ]);

        $imageName = $scheme->featured_image;

        if ($request->hasFile('featured_image')) {

            $image = $request->file('featured_image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('uploads/schemes'), $imageName);
        }

        $scheme->update([

            'category_id' => $request->category_id,

            'state_id' => $request->state_id,

            'title' => $request->title,

            'slug' => Str::slug($request->slug),

            'featured_image' => $imageName,

            'short_description' => $request->short_description,

            'overview' => $request->overview,

            'benefits' => $request->benefits,

            'eligibility' => $request->eligibility,

            'documents_required' => $request->documents_required,

            'application_process' => $request->application_process,

            'financial_benefits' => $request->financial_benefits,

            'important_dates' => $request->important_dates,

            'status_check' => $request->status_check,

            'official_website' => $request->official_website,

            'helpline' => $request->helpline,

            'meta_title' => $request->meta_title,

            'meta_description' => $request->meta_description,

            'status' => $request->status ?? 1

        ]);

        return redirect()
            ->route('schemes.index')
            ->with('success', 'Scheme Updated Successfully');
    }

    public function destroy($id)
    {

        $scheme = Scheme::findOrFail($id);

        $scheme->delete();

        return redirect()
            ->route('schemes.index')
            ->with('success', 'Scheme Deleted Successfully');
    }
}
