@extends('admin.layouts.app')

@section('panel')

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-50 border-bottom pb-2">Add New User</h5>

                <form method="POST" action="create">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="username" class="form-control-label font-weight-bold">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username"> @error('username') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="firstname" class="form-control-label font-weight-bold">First Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="First Name"> @error('firstname') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="lastname" class="form-control-label font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Last Name"> @error('lastname') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="email" class="form-control-label font-weight-bold">Email Addres<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Addres"> @error('email') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="mobile" class="form-control-label font-weight-bold">Mobile Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" placeholder="Mobile Number"> @error('mobile') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="akunmt5" class="form-control-label font-weight-bold">Nomor Akun MT5<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('akunmt5') is-invalid @enderror" id="akunmt5" name="akunmt5" placeholder="Nomor Akun Mt5"> @error('akunmt5') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="address" class="form-control-label font-weight-bold">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Nama jalan, Desa, RT/RW"> @error('address') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="form-group ">
                                <label for="city" class="form-control-label font-weight-bold">City<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="City"> @error('city') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="form-group ">
                                <label for="state" class="form-control-label font-weight-bold">State<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="State"> @error('state') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="form-group ">
                                <label for="zip" class="form-control-label font-weight-bold">Zip/Postal<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" placeholder="Zip/Postal"> @error('zip') <div class="invalid-feedback">{{ $message }} </div> @enderror
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="form-group ">
                                <label class="form-control-label font-weight-bold">@lang('Country') </label>
                                <select name="country" class="form-control"> @include('partials.country') </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-3 mt-4 ml-auto mr-auto">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">@lang('Add User Now')
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
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