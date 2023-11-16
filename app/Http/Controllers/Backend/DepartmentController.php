<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()::of(Department::latest()->get())
                ->addColumn('data_image', function ($data) {
                    $btn = '<img src="' . url('images', $data->image) . '">';
                    return $btn;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="d-flex">
                    <a href="javascript:void(0)" data-id="' . $data->id . '" class="edit btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" data-route="'.route('admin.department.destroy', $data->id).'" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['data_image', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.department.index');
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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:departments',
            'icon' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'icon_error' => $error->errors()->first('icon'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $department = new Department();
        $department->title = $request->title;
        $department->slug = $request->slug;
        $department->icon = $request->icon;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $department->image = $name;
        }

        $department->save();

        return response()->json([
            'success' => 'Department has been added successfully',
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
        $department = Department::findOrFail(intval($id));
        return response()->json([
            'department' => $department,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $department = Department::where('id', $request->hidden_id)->firstOrFail();

        if ($department->slug == $request->slug) {
            $rules = array(
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'icon' => 'required',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        } else {
            $rules = array(
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:departments',
                'icon' => 'required',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            );
        }


        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'title_error' => $error->errors()->first('title'),
                'slug_error' => $error->errors()->first('slug'),
                'icon_error' => $error->errors()->first('icon'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $department->title = $request->title;
        $department->slug = $request->slug;
        $department->icon = $request->icon;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $department->image = $name;
        }

        $department->save();

        return response()->json([
            'success' => 'Department has been updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail(intval($id));
        $department->delete();
        
        return response()->json([
            'success' => 'Department has been deleted successfully',
        ]);
    }
}
