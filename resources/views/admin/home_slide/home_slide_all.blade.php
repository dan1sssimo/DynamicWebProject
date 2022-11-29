@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Home Slide Page</h4>
                            <form method="post" action="{{route('update.slider')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$homeSlide->id}}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text"
                                               placeholder="Artisanal kale"
                                               value="{{$homeSlide->title}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input name="short_title" class="form-control" type="text"
                                               placeholder="Artisanal kale"
                                               value="{{$homeSlide->short_title}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                    <div class="col-sm-10">
                                        <input name="video_url" class="form-control" type="text"
                                               placeholder="Artisanal kale"
                                               value="{{$homeSlide->video_url}}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image</label>
                                    <div class="col-sm-10">
                                        <input name="home_slide" class="form-control" type="file"
                                               placeholder="Artisanal kale"
                                               id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($homeSlide->home_slide))? url( $homeSlide->home_slide):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light mt-5"
                                       value="Update Slide">
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
