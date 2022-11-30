@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-5">Add Client Feedback Page </h4>

                            <form method="post" action="{{ route('store.feedback') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input name="full_name" class="form-control" type="text"
                                               placeholder="Artisanal kale"
                                               id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Job
                                        Type</label>
                                    <div class="col-sm-10">
                                        <input name="job_type" class="form-control" type="text"
                                               placeholder="Artisanal kale"
                                               id="example-text-input">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light mt-5"
                                       value="Insert FeedBack Data">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
