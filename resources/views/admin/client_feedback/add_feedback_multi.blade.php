@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Add Feedback Multi Image</h4>
                            <form method="post" action="{{route('store.feedback.multi.image')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-5">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Feedback Multi Image</label>
                                    <div class="col-sm-10">
                                        <input name="multi_image[]" class="form-control" type="file"
                                               placeholder="Artisanal kale"
                                               id="image" multiple="" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg"
                                             src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light mt-5"
                                       value="Add Feedback Multi Image">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
