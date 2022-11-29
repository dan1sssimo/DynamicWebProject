@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"><br><br>
                        <div style="text-align: center;">
                            <img class="rounded-circle avatar-xl"
                                 src="{{ (!empty($adminData->profile_image))?url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}"
                                 alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Name: {{ $adminData->name }} </h4>
                        <hr>
                        <h4 class="card-title">User Email: {{ $adminData->email }} </h4>
                        <hr>
                        <h4 class="card-title">User Name: {{ $adminData->username }} </h4>
                        <hr>
                    </div>
                        <a href="{{route('edit.profile')}}"
                           class="btn btn-info  waves-effect waves-light mt-3"> Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
