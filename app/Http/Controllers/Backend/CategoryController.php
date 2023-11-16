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
                ->addColumn('data_image', function ($data) {
                    $btn = '<img src="' . url('images', $data->image) . '">';
                    return $btn;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="d-flex">
                    <a href="javascript:void(0)" data-id="' . $data->id . '" class="edit btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" data-route="' . route('admin.department.destroy', $data->id) . '" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['data_image', 'action'])
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
            'slug' => 'required|string|max:255|unique:departments',
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
