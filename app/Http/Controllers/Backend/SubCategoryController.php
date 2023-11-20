<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()::of(SubCategory::latest()->get())
                ->addColumn('category', function ($data) {
                    if ($data->category) {
                        return $data->category['title'];
                    }
                })
                ->addColumn('data_image', function ($data) {
                    $btn = '<img src="' . url('images', $data->image) . '">';
                    return $btn;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="d-flex">
                    <a href="javascript:void(0)" data-id="' . $data->id . '" class="edit btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" data-route="' . route('admin.sub-category.destroy', $data->id) . '" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['category', 'data_image', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.sub-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $rules = array(
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:sub_categories',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'category_error' => $error->errors()->first('category_id'),
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->title = $request->title;
        $subcategory->slug = $request->slug;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $subcategory->image = $name;
        }

        $subcategory->save();

        return response()->json([
            'success' => 'New Sub Category has been added successfully',
        ]);
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
        $subcategory = SubCategory::FindOrFail(intval($id));

        return response()->json([
            'subcategory' => $subcategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $subcategory = SubCategory::where('id', $request->hidden_id)->firstOrFail();

        if ($subcategory->slug == $request->slug) {
            $rules = array(
                'category_id' => 'required',
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        } else {
            $rules = array(
                'category_id' => 'required',
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:sub_categories',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        }


        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'category_error' => $error->errors()->first('category_id'),
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $subcategory->category_id = $request->category_id;
        $subcategory->title = $request->title;
        $subcategory->slug = $request->slug;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $subcategory->image = $name;
        }

        $subcategory->save();

        return response()->json([
            'success' => 'Sub Category has been updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = SubCategory::findOrFail(intval($id));
        $subcategory->delete();

        return response()->json([
            'success' => 'Sub Category has been deleted successfully',
        ]);
    }
}
