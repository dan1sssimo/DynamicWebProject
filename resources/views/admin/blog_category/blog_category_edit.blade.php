@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Blog Category Edit</h4>
                            <form method="post" id="editCategory" action="{{route('update.blog.category')}}">
                                @csrf

                                <input type="hidden" name="id" value="{{$blogCategory->id}}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category
                                        Name</label>
                                    <div class="form-group col-sm-10">
                                        <input name="blog_category" class="form-control" type="text"
                                               placeholder="Please type require data"
                                               id="example-text-input"
                                               value="{{$blogCategory->blog_category}}">
                                        @error('blog_category')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light mt-5"
                                       value="Update Blog Category Data">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#editCategory').validate({
                rules: {
                    blog_category: {
                        required: true,
                    },
                },
                messages: {
                    blog_category: {
                        required: 'Please Enter Blog Category',
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            })
        })
    </script>
@endsection
