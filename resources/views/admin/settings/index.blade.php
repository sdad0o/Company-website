@extends('admin.master')
@section('title', __('keywords.settings'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="address"></x-form-label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="{{ __('keywords.address') }}" value="{{ $setting->address }}">
                                    <x-validation-erorr field="address"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="phone"></x-form-label>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                                    <x-validation-erorr field="phone"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="email"></x-form-label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                                    <x-validation-erorr field="email"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="facebook"></x-form-label>
                                    <input type="url" name="facebook" class="form-control"
                                        placeholder="{{ __('keywords.facebook') }}" value="{{ $setting->facebook }}">
                                    <x-validation-erorr field="facebook"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="linkedin"></x-form-label>
                                    <input type="url" name="linkedin" class="form-control"
                                        placeholder="{{ __('keywords.linkedin') }}" value="{{ $setting->linkedin }}">
                                    <x-validation-erorr field="linkedin"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="twitter"></x-form-label>
                                    <input type="url" name="twitter" class="form-control"
                                        placeholder="{{ __('keywords.twitter') }}" value="{{ $setting->twitter }}">
                                    <x-validation-erorr field="twitter"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="instagram"></x-form-label>
                                    <input type="url" name="instagram" class="form-control"
                                        placeholder="{{ __('keywords.instagram') }}" value="{{ $setting->instagram }}">
                                    <x-validation-erorr field="instagram"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="youtube"></x-form-label>
                                    <input type="url" name="youtube" class="form-control"
                                        placeholder="{{ __('keywords.youtube') }}" value="{{ $setting->youtube }}">
                                    <x-validation-erorr field="youtube"></x-validation-erorr>
                                </div>
                            </div>
                            <x-submit-button></x-submit-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
