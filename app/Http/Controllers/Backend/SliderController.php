<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()::of(Slider::latest()->get())
                ->addColumn('data_image', function ($data) {
                    $btn = '<img src="' . url('images', $data->image) . '" style="width: 100px">';
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
        return view('backend.slider.index');
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
     * 'offer_text', 'slider_heading', 'offer_type', 'offer_percentage', 'offer_time', 'product_link', 'image'
     *  'offer_text_error', 'slider_heading_error','offer_type_error','offer_percentage_error','offer_time_error','product_link_error','image_error',
     */
    public function store(Request $request)
    {
        // return $request;
        $rules = array(
            'offer_text' => 'required',
            'slider_heading' => 'required|string|max:255',
            'offer_type' => 'required|string|max:255',
            'offer_percentage' => 'required|string|max:255',
            'offer_time' => 'required|string|max:255',
            'product_link' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'offer_text_error' => $error->errors()->first('offer_text'),
                'slider_heading_error' => $error->errors()->first('slider_heading'),
                'offer_type_error' => $error->errors()->first('offer_type'),
                'offer_percentage_error' => $error->errors()->first('offer_percentage'),
                'offer_time_error' => $error->errors()->first('offer_time'),
                'product_link_error' => $error->errors()->first('product_link'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $input['image'] = $name;
        }

        Slider::create($input);

        return response()->json([
            'success' => 'New Slider has been added successfully',
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
        $slider = Slider::findOrFail(intval($id));
        return response()->json([
            'slider' => $slider,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $slider = Slider::where('id', $request->hidden_id)->firstOrFail();

        $rules = array(
            'offer_text' => 'required',
            'slider_heading' => 'required|string|max:255',
            'offer_type' => 'required|string|max:255',
            'offer_percentage' => 'required|string|max:255',
            'offer_time' => 'required|string|max:255',
            'product_link' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'offer_text_error' => $error->errors()->first('offer_text'),
                'slider_heading_error' => $error->errors()->first('slider_heading'),
                'offer_type_error' => $error->errors()->first('offer_type'),
                'offer_percentage_error' => $error->errors()->first('offer_percentage'),
                'offer_time_error' => $error->errors()->first('offer_time'),
                'product_link_error' => $error->errors()->first('product_link'),
                'image_error' => $error->errors()->first('image'),
            ]);
        }

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $original_name = str_replace(' ', '-', $image->getClientOriginalName());
            $name = time() . '.' . $original_name;
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $input['image'] = $name;
        }

        $slider->update($input);

        return response()->json([
            'success' => 'Slider has been updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail(intval($id));
        $slider->delete();

        return response()->json([
            'success' => 'Slider has been updated successfully',
        ]);
    }
}
