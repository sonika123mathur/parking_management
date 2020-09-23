@extends('admin.master')

@section('title')
    Edit Parking
@endsection
@section('maincontent')
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-8">
                <h1 class="page-heading">
                    Edit Parking
                </h1>
            </div>
            <div class="col-sm-4 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li><a href="{{route('admin.parking.index')}}">Parking</a></li>
                    <li class="link-effect">Edit Parking</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-narrow">
        <div class="row">
            <div class="col-md-12">
                <!-- Static Labels -->
                <div class="block">
                    <div class="block-content block-content-narrow">
                        <form class="form-horizontal push-10-t add-parking-form"
                              action="{{route('admin.parking.update',$parking->id)}}"
                              method="post">
                            @method('put')
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="parking-name"
                                               name="name" placeholder="Parking Name" value="{{old('name')?old('name'):$parking->name}}" required>
                                        <label for="parking-name">Name</label>
                                    </div>
                                    @if ($errors->has('name'))
                                        <div id="parking-name-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('name') }}</div>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('access_key') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="parking-access_key"
                                               name="access_key" placeholder="Parking Access Key" value="{{old('access_key')?old('access_key'):$parking->access_key}}" required>
                                        <label for="parking-access_key">Access Key</label>
                                    </div>
                                    @if ($errors->has('access_key'))
                                        <div id="parking-access_key-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('access_key') }}</div>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="is_active" name="is_active"
                                                data-placeholder="Please Select one" required>
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach(config('project.is_active') as $key=>$value)
                                                <option value="{{$key}}" {{old('is_active')?(($key==old('is_active'))?'selected':''):(($key==$parking->is_active)?'selected':'')}}>{{$value}}</option>
                                            @endforeach
                                        </select>

                                        <label for="is_active">Select Permissions</label>
                                    </div>
                                    @if ($errors->has('is_active'))
                                        <div id="is_active-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('is_active') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9">
                                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Static Labels -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('custom-styles')
    <link rel="stylesheet" href="{{asset("admin_assets/js/plugins/select2/select2.min.css")}}">
@endsection
@section('custom-js')
    <script src="{{asset('admin_assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/plugins/select2/select2.min.js')}}"></script>
    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('select2');
            App.initFormValidation('.add-parking-form');
        });
    </script>
@endsection
@section('custom-styles')
@endsection
