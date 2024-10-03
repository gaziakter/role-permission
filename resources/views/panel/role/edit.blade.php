@extends('panel.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Edit Role</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Role</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Role Name</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{$getRecord->name}}" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" style="display: block; margin-bottom: 20px;" class="col-sm-2 col-form-label"><b>Permission</b></label>
                            @foreach($getPermission as $value)
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-md-2">
                                    {{$value['name']}}
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        @foreach($value['group'] as $group)
                                        @php
                                            $checkd = '';  
                                        @endphp
                                            @foreach ( $getRolePermission as $role)
                                                @if ($role->permission_id == $group['id'])
                                                    @php
                                                     $checkd = 'checked';
                                                    @endphp 
                                                @endif

                                            @endforeach
                                        <div class="col-md-3">
                                            <label for=""><input type="checkbox" {{$checkd}} value="{{$group['id']}}" name="permission_id[]"> {{$group['name']}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection