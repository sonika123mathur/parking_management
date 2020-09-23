@extends('admin.master')

@section('title')
    Edit Role
@endsection
@section('maincontent')
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-8">
                <h1 class="page-heading">
                    Edit Role
                </h1>
            </div>
            <div class="col-sm-4 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li><a href="{{route('admin.roles.index')}}">Roles</a></li>
                    <li class="link-effect">Edit Role</li>
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
                        <form class="form-horizontal push-10-t add-role-form"
                              action="{{route('admin.roles.update',$role->id)}}"
                              method="post">
                            @method('put')
                            @csrf


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="role-name"
                                               name="name" placeholder="Role Name" value="{{old('name')?old('name'):$role->name}}" required>
                                        <label for="role-name">Role Name</label>
                                    </div>
                                    @if ($errors->has('name'))
                                        <div id="role-name-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('name') }}</div>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="role-display_name"
                                               name="display_name" placeholder="Role Name" value="{{old('display_name')?old('display_name'):$role->display_name}}" required>
                                        <label for="role-display_name">Role Display Name</label>
                                    </div>
                                    @if ($errors->has('display_name'))
                                        <div id="role-display_name-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('display_name') }}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('permissions') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="permissions" name="permissions[]" multiple
                                                data-placeholder="Please Select a Role" required>
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach($permissions as $index=>$permissionGroup)
                                                <optgroup label="{{$index}}">
                                                    @foreach($permissionGroup as $permission)
                                                        <option value="{{$permission->id}}" {{old('permissions')?(in_array($permission->id,old('permissions'))?'selected':''):(in_array($permission->id,$role_permissions)?'selected':'')}}>{{$permission->display_name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>

                                        <label for="permissions">Select Permissions</label>
                                    </div>
                                    @if ($errors->has('permissions'))
                                        <div id="permissions-error"
                                             class="help-block animated fadeInDown">{{ $errors->first('permissions') }}</div>
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
            App.initFormValidation('.add-role-form');
        });
    </script>
@endsection
@section('custom-styles')
@endsection