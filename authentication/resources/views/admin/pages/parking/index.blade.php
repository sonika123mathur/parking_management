@extends('admin.master')

@section('title')
    Parking List
@endsection
@section('maincontent')
    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-content">
                <div class="block-header">
                    <h3 class="block-title col-md-6">Parking List</h3>
                    @can('parking.create')
                        <a href="{{route('admin.parking.create')}}" class="pull-right btn btn-primary btn-rounded">Add
                            Parking</a>
                    @endcan
                </div>
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                <table class="table table-bordered table-striped js-dataTable-full">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Access Code</th>
                        <th>Current Status</th>
                        <th>Condition</th>
                        <th class="text-center" data-orderable="false" data-searchable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($parking as $index=>$parking)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$parking->name}}</td>
                            <td>{{$parking->access_key}}</td>
                            <td class="{{$parking->distance > config('project.distance_threshold')?"text-success":"text-danger"}}">{{$parking->distance > config('project.distance_threshold')?'': "Not "}}Available({{$parking->distance}})</td>
                            <td class="{{$parking->is_active==1?"text-success":"text-danger"}}">{{config('project.is_active.'.$parking->is_active)}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    @can('parking.view')
                                        <a href="{{route('admin.parking.show',$parking->id)}}" class="btn btn-xs btn-default"
                                           type="button" data-toggle="tooltip" title="View Parking"><i
                                                    class="fa fa-eye"></i></a>
                                    @endcan
                                    @can('parking.edit')
                                        <a href="{{route('admin.parking.edit',$parking->id)}}" class="btn btn-xs btn-default"
                                           type="button" data-toggle="tooltip" title="Edit Parking"><i
                                                    class="fa fa-pencil"></i></a>
                                    @endcan
                                    @can('parking.delete')

                                        <form class="parking-remove"
                                              action="{{route('admin.parking.destroy',$parking->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-xs btn-default" type="submit"
                                                    data-toggle="tooltip"
                                                    title="Remove Parking"><i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
@section('custom-js')
    <script src="{{asset('admin_assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Page JS Code -->
    {{--<script src="assets/js/pages/base_ui_activity.js"></script>--}}
    <script>
        jQuery(function () {
            let data = {
                title: 'Are you sure?',
                text: 'To Remove This Parking!!',
                confirmButtonText: 'Yes, Remove!',
            };

            // CustomScript.onSubmitSweetAlert(data, '.supplier-inactive');
            // CustomScript.dataTableWithPrint('.js-dataTable-full');
            App.initDataTable('.js-dataTable-full');
            App.initOnSubmitSweetAlert(data, '.parking-remove');
        });
    </script>
@endsection

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('admin_assets/js/plugins/sweetalert/sweetalert.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/js/plugins/datatables/jquery.dataTables.min.css')}}">
    <style type="text/css">
        .parking-remove {
            float: left;
        }
    </style>
@endsection
