@extends('backend.layouts.base')

@section('title', 'Slider')

@section('content')

<div class="row">


    <!-- Column starts -->
    <div class="col-xl-12">
        <div class="card dz-card" id="accordion-four">
            <div class="card-header flex-wrap d-flex justify-content-between">
                <div>
                    <h4 class="card-title">@yield('title')</h4>
                </div>
                <a href="#" class="btn btn-sm btn-primary" id="add_new_btn"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table id="dataTable" class="display table w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Slider Title</th>
                                <th>Offer Text</th>
                                <th>Offter Type</th>
                                <th>Offer Percentage</th>
                                <th>Offer Period</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column ends -->

</div>

<div class="modal fade" id="crud_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="crud_form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="offer_text">Offte Text</label>
                        <input type="text" class="form-control" name="offer_text" id="offer_text" placeholder="Starting at $274.00">
                        <span class="error" id="offer_text_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="slider_heading">Slider Title</label>
                        <input type="text" class="form-control" name="slider_heading" id="slider_heading" placeholder="The best tablet Collection 2023">
                        <span class="error" id="slider_heading_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="offer_type">Offer Type</label>
                        <input type="text" class="form-control" name="offer_type" id="offer_type" placeholder="Exclusive offer">
                        <span class="error" id="offer_type_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="offer_percentage">Offer Percentage</label>
                        <input type="number" class="form-control" name="offer_percentage" id="offer_percentage" placeholder="5">
                        <span class="error" id="offer_percentage_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="offer_time">Offer Period</label>
                        <input type="text" class="form-control" name="offer_time" id="offer_time" placeholder="this week/month..">
                        <span class="error" id="offer_time_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="product_link">Product Link</label>
                        <input type="text" class="form-control" name="product_link" id="product_link" placeholder="">
                        <span class="error" id="product_link_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <span class="error" id="image_error"></span>
                    </div>

                    <div class="image-preview" style="display: none;">
                        <img src="" alt="" id="imgPreview" class="w-100">
                        <p id="image_title" class="m-0 text-center"></p>
                        <div class="text-end">
                            <a href="javascript:void()" id="clear_image"><i class="fa-solid fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>

                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <button type="submit" class="btn btn-primary" id="action_button">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <h3 class="text-center">Do you want to delete this data?</h3>
                <input type="hidden" name="delete_url" id="delete_url">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="delete_btn">Delete</button>
            </div>

        </div>
    </div>
</div>

@endsection


@section('scripts')
<script>
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        language: {
            paginate: {
                next: '<i class="fa-solid fa-angle-right"></i>',
                previous: '<i class="fa-solid fa-angle-left"></i>'
            }
        },
        ajax: {
            url: "{{ route('admin.slider.index') }}",
        },
        columns: [{
                "data": 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'data_image',
                name: 'data_image'
            },
            {
                data: 'slider_heading',
                name: 'slider_heading'
            },
            {
                data: 'offer_text',
                name: 'offer_text'
            },
            {
                data: 'offer_type',
                name: 'offer_type'
            },
            {
                data: 'offer_percentage',
                name: 'offer_percentage'
            },
            {
                data: 'offer_time',
                name: 'offer_time'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
        ]
    });

    function resetError() {
        $('#offer_text_error').html('');
        $('#slider_heading_error').html('');
        $('#offer_type_error').html('');
        $('#offer_percentage_error').html('');
        $('#offer_time_error').html('');
        $('#product_link_error').html('');
        $('#image_error').html('');
    };

    $('#add_new_btn').click(function() {
        $('#modal_title').text('Add New Slider');
        $('#action_button').html('Add');
        $('#action').val('Add');
        $('#form_result').html('');

        // reset form
        resetError();
        $('#crud_form')[0].reset();

        // show modal
        $('#crud_modal').modal('show');
    });


    // add and edit data
    $('#crud_form').on('submit', function(event) {

        event.preventDefault();
        var action_url = '';

        if ($('#action').val() == 'Add') {
            action_url = "{{ route('admin.slider.store') }}";
        }

        if ($('#action').val() == 'Edit') {
            action_url = "{{ route('admin.slider.update') }}";
        }

        $.ajax({
            url: action_url,
            method: "POST",
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                var html = '';

                if (data.offer_text_error) {
                    $('#offer_text_error').html(data.offer_text_error)
                }

                if (data.offer_text_error) {
                    $('#slider_heading_error').html(data.slider_heading_error)
                }

                if (data.offer_type_error) {
                    $('#offer_type_error').html(data.offer_type_error)
                }

                if (data.offer_percentage_error) {
                    $('#offer_percentage_error').html(data.offer_percentage_error)
                }

                if (data.offer_time_error) {
                    $('#offer_time_error').html(data.offer_time_error)
                }

                if (data.product_link_error) {
                    $('#product_link_error').html(data.product_link_error)
                }

                if (data.image_error) {
                    $('#image_error').html(data.image_error)
                }

                if (data.success) {

                    toastr.success(data.success, "Success", {
                        timeOut: 5000,
                        closeButton: !0,
                        progressBar: !0,
                        positionClass: "toast-top-right",
                    });


                    $('#crud_form')[0].reset();
                    $('#dataTable').DataTable().ajax.reload();
                    $('#crud_modal').modal('hide');
                }
            }
        });
    });



    $(document).on('click', '.edit', function() {
        var id = $(this).attr('data-id');
        resetError();

        $.ajax({
            url: "/admin/slider/" + id + "/edit",
            dataType: "json",
            success: function(data) {
                $('#offer_text').val(data.slider.offer_text);
                $('#slider_heading').val(data.slider.slider_heading);
                $('#offer_type').val(data.slider.offer_type);
                $('#offer_percentage').val(data.slider.offer_percentage);
                $('#offer_time').val(data.slider.offer_time);
                $('#product_link').val(data.slider.product_link);
                

                $('#hidden_id').val(id);
                $('.modal-title').text('Edit Slider');
                $('#action_button').html('Update');
                $('#action').val('Edit');

                // show current image

                var image_url = base_path + 'images/' + data.slider.image;
                $('#imgPreview').attr('src', image_url);
                $('#image_title').html(data.slider.image);
                $('.image-preview').show();


                $('#crud_modal').modal('show');
            }
        })
    });

    $(document).on('click', '.delete', function() {

        var action_url = $(this).attr('data-route');
        $('#delete_url').val(action_url);
        $('#delete_modal').modal('show');

    });

    $('#delete_btn').click(function() {
        var action_url = $('#delete_url').val();

        $.ajax({
            type: "DELETE",
            url: action_url,
            success: function(data) {
                $('#dataTable').DataTable().ajax.reload();
                $('#delete_modal').modal('hide');


                toastr.success(data.success, "Success", {
                    timeOut: 5000,
                    closeButton: !0,
                    progressBar: !0,
                    positionClass: "toast-top-right",
                });
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    })


    // image preview before upload
    $('#image').change(function() {
        const file = this.files[0];
        // console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                // console.log(event.target.result);
                $('#imgPreview').attr('src', event.target.result);
                $('#image_title').html(file.name);
            }
            reader.readAsDataURL(file);
            $('.image-preview').show();
        }
    });


    // clear uploader image
    $('#clear_image').click(function() {
        $('.image-preview').hide();
        $('#image').val('');
    });

    // generate slug
    $("#title").keyup(function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
        $("#slug").val(Text);
    });
</script>
@endsection