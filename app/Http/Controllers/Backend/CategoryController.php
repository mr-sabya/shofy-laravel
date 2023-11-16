<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()::of(Category::latest()->get())
                ->addColumn('department', function ($data) {
                    if($data->department){
                        return $data->department['title'];
                    }
                })
                ->addColumn('data_image', function ($data) {
                    $btn = '<img src="' . url('images', $data->image) . '">';
                    return $btn;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="d-flex">
                    <a href="javascript:void(0)" data-id="' . $data->id . '" class="edit btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" data-route="' . route('admin.category.destroy', $data->id) . '" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['department', 'data_image', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.category.index');
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
            'department_id' => 'required',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'department_error' => $error->errors()->first('department_id'),
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $category = new Category();
        $category->department_id = $request->department_id;
        $category->title = $request->title;
        $category->slug = $request->slug;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }

        $category->save();


        return response()->json([
            'success' => 'New category has been added successfully',
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
        $category = Category::findOrFail(intval($id));

        return response()->json([
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = Category::where('id', $request->hidden_id)->firstOrFail();


        if ($category->slug == $request->slug) {
            $rules = array(
                'department_id' => 'required',
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        } else {
            $rules = array(
                'department_id' => 'required',
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:categories',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        }

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'department_error' => $error->errors()->first('department_id'),
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $category->department_id = $request->department_id;
        $category->title = $request->title;
        $category->slug = $request->slug;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }

        $category->save();


        return response()->json([
            'success' => 'Category has been updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail(intval($id));
        $category->delete();

        return response()->json([
            'success' => 'Category has been deleted successfully',
        ]);
    }
}
