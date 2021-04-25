@extends('admin.layouts.app')

@section('panel')
<div class="row mb-none-30">
    <div class="card mt-50">
        <div class="card-body">
            <h5 class="card-title mb-50 border-bottom pb-2">@lang('Add New User')</h5>

            <form action="/users" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="username" class="form-control-label font-weight-bold">@lang('Username') <span class="text-danger">*</span></label>
                            <input class="form-control" type="text @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username">
                            @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="firstname" class="form-control-label font-weight-bold">@lang('First Name') <span class="text-danger">*</span></label>
                            <input class="form-control" type="text @error('firstname') is-invalid @enderror" id="firstname" placeholder="First Name" name="firstname">
                            @error('firstname')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group ">
                            <label for="lastname" class="form-control-label font-weight-bold">@lang('Last Name') <span class="text-danger">*</span></label>
                            <input class="form-control" type="text @error('lastname') is-invalid @enderror" id="lastname" placeholder="Last Name" name="lastname">
                            @error('lastname')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="email" class="form-control-label font-weight-bold">@lang('Email Addres') <span class="text-danger">*</span></label>
                            <input class="form-control" type="text @error('email') is-invalid @enderror" id="email" placeholder="Email Addres" name="email">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="mobile" class="form-control-label font-weight-bold">@lang('Mobile Number') <span class="text-danger">*</span></label>
                            <input class="form-control" type="text @error('mobile') is-invalid @enderror" id="mobile" placeholder="Mobile Number" name="mobile">
                            @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="address" class="form-control-label font-weight-bold">@lang('Address') </label>
                            <input class="form-control" type="text @error('address') is-invalid @enderror" id="address" placeholder="Enter Address" name="address">
                            <small class="form-text text-muted"><i class="las la-info-circle"></i> @lang('House number, street address')
                            </small>
                            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="city" class="form-control-label font-weight-bold">@lang('City') </label>
                            <input class="form-control" type="text @error('city') is-invalid @enderror" id="city" placeholder="City" name="city">
                            @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="state" class="form-control-label font-weight-bold">@lang('State') </label>
                            <input class="form-control" type="text @error('state') is-invalid @enderror" id="state" placeholder="State" name="state">
                            @error('state')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="zip" class="form-control-label font-weight-bold">@lang('Zip/Postal') </label>
                            <input class="form-control" type="text @error('zip') is-invalid @enderror" id="zip" placeholder="Zip/Postal" name="zip">
                            @error('zip')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="form-group">
                            <label for="country" class="form-control-label font-weight-bold">@lang('Country') </label>
                            <select name="country" class="form-control"> @include('partials.country') </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-xl-4 col-md-6  col-sm-3 col-12">
                        <label class="form-control-label font-weight-bold">@lang('Status') </label>
                        <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Active" data-off="Banned" data-width="100%" name="status" @if($user->status) checked @endif>
                    </div>

                    <div class="form-group  col-xl-4 col-md-6  col-sm-3 col-12">
                        <label class="form-control-label font-weight-bold">@lang('Email Verification') </label>
                        <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="ev" @if($user->ev) checked @endif>

                    </div>

                    <div class="form-group  col-xl-4 col-md-6  col-sm-3 col-12">
                        <label class="form-control-label font-weight-bold">@lang('SMS Verification') </label>
                        <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="sv" @if($user->sv) checked @endif>

                    </div>
                    <div class="form-group  col-md-6  col-sm-3 col-12">
                        <label class="form-control-label font-weight-bold">@lang('2FA Status') </label>
                        <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="ts" @if($user->ts) checked @endif>
                    </div>

                    <div class="form-group  col-md-6  col-sm-3 col-12">
                        <label class="form-control-label font-weight-bold">@lang('2FA Verification') </label>
                        <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="tv" @if($user->tv) checked @endif>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn--primary btn-block btn-lg">@lang('Add New User')
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    $(function($) {
        "use strict";
        $("select[name=country]").val("{{ @$user->address->country }}");
    });
</script>
@endpush