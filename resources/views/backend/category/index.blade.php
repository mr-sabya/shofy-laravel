@extends('backend.layouts.base')

@section('title', 'Categories')

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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Department</th>
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
                        <label for="title">Department</label>
                        <select class="form-control" id="department_id" name="department_id"></select>
                        <span class="error" id="department_error"></span>
                    </div>


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                        <span class="error" id="title_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug">
                        <span class="error" id="slug_error"></span>
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
            url: "{{ route('admin.category.index') }}",
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
                data: 'title',
                name: 'title'
            },
            {
                data: 'slug',
                name: 'slug'
            },
            {
                data: 'department',
                name: 'department'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
        ]
    });

    function resetError() {
        $('#title_error').html('')
        $('#slug_error').html('')
        $('#icon_error').html('')
        $('#image_error').html('')
    };

    $('#add_new_btn').click(function() {
        $('#modal_title').text('Add New Department');
        $('#action_button').html('Add');
        $('#action').val('Add');
        $('#form_result').html('');

        // reset form
        resetError();
        $('#crud_form')[0].reset();
        $('#department_id').html('');


        // get department
        $.ajax({
            url: "{{ route('admin.get.department') }}",
            dataType: "json",
            success: function(data) {
                $('#department_id').append(data.data);
            }

        });

        // show modal
        $('#crud_modal').modal('show');
    });


    // add and edit data
    $('#crud_form').on('submit', function(event) {

        event.preventDefault();
        var action_url = '';

        if ($('#action').val() == 'Add') {
            action_url = "{{ route('admin.category.store') }}";
        }

        if ($('#action').val() == 'Edit') {
            action_url = "{{ route('admin.category.update') }}";
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

                if (data.name_error) {
                    $('#title_error').html(data.title_error)
                }

                if (data.slug_error) {
                    $('#slug_error').html(data.slug_error)
                }

                if (data.icon_error) {
                    $('#department_error').html(data.department_error)
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
                }
                $('#crud_modal').modal('hide');
            }
        });
    });



    $(document).on('click', '.edit', function() {
        var id = $(this).attr('data-id');
        resetError();

        $.ajax({
            url: "/admin/category/" + id + "/edit",
            dataType: "json",
            success: function(data) {
                $('#title').val(data.category.title);
                $('#slug').val(data.category.slug);

                // get department
                $.ajax({
                    url: "/admin/get-department-select-option/" + id,
                    dataType: "json",
                    success: function(data) {
                        $('#department_id').append(data.data);
                    }

                });

                $('#hidden_id').val(id);
                $('.modal-title').text('Edit Department');
                $('#action_button').html('Update');
                $('#action').val('Edit');

                // show current image

                var image_url = base_path + 'images/' + data.category.image;
                $('#imgPreview').attr('src', image_url);
                $('#image_title').html(data.category.image);
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