@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Feedback Page</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">All Feedback</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Short Description</th>
                                    <th>Full Name</th>
                                    <th>Job Type</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($allFeedback as $key=>$item)
                                    <tr>
                                        <td> {{ $key+1}} </td>
                                        <td>{{$item->short_description}}</td>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->job_type}}</td>
                                        <td>
                                            <a href="{{ route('delete.feedback',$item->id) }}"
                                               class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                    class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

@endsection
