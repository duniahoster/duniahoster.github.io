@extends('admin.layouts.app')

@section('panel')
<div class <div class="row">

    <div class="col-lg-12">
        <div class="card b-radius--5 ">
            <div class="card-body p-0">
                <div class="table-responsive--md  table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                            <tr>
                                <th scope="col">@lang('User')</th>
                                <th scope="col">@lang('Username')</th>
                                <th scope="col">@lang('Email')</th>
                                <th scope="col">@lang('Phone')</th>
                                <th scope="col">@lang('Joined At')</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td data-label="@lang('User')">
                                    <div class="user">
                                        <div class="thumb"><img src="{{ getImage('assets/images/user/profile/'. $user->image)}}" alt="image"></div>
                                        <span class="name">{{$user->fullname}}</span>
                                    </div>
                                </td>
                                <td data-label="@lang('Username')"><a href="{{ route('admin.users.detail', $user->id) }}">{{ $user->username }}</a></td>
                                <td data-label="@lang('Email')">{{ $user->email }}</td>
                                <td data-label="@lang('Phone')">{{ $user->mobile }}</td>
                                <td data-label="@lang('Joined At')">{{ showDateTime($user->created_at) }}</td>
                                <td data-label="Action">
                                    <a href="{{ route('admin.withdraw.method.edit', $method->id)}}" class="icon-btn ml-1" data-toggle="tooltip" title="" data-original-title="@lang('Edit')"><i class="las la-pen"></i></a>


                                    @if($method->status == 1)
                                    <a href="javascript:void(0)" class="icon-btn btn--danger deactivateBtn  ml-1" data-toggle="tooltip" title="" data-original-title="@lang('Disable')" data-id="{{ $method->id }}" data-name="{{ $method->name }}">
                                        <i class="la la-eye-slash"></i>
                                    </a>
                                    @else
                                    <a href="javascript:void(0)" class="icon-btn btn--success activateBtn  ml-1" data-toggle="tooltip" title="" data-original-title="@lang('Enable')" data-id="{{ $method->id }}" data-name="{{ $method->name }}">
                                        <i class="la la-eye"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">{{ trans($empty_message) }}</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
            <div class="card-footer py-4">
                {{ $users->links('admin.partials.paginate') }}
            </div>
        </div><!-- card end -->
    </div>


</div>
@endsection

@push('breadcrumb-plugins')
<a href="users/create"></a>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@endpush

@push('breadcrumb-plugins')
<a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.users.create') }}"><i class="fa fa-fw fa-plus"></i>Add New</a>
@endpush

@push('breadcrumb-plugins')
<form action="{{ route('admin.users.search', $scope ?? str_replace('admin.users.', '', request()->route()->getName())) }}" method="GET" class="form-inline float-sm-right bg--white">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="@lang('Username or email')" value="{{ $search ?? '' }}">
        <div class="input-group-append">
            <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
@endpush