@extends('admin.master')
@section('title', __('keywords.edit_feature'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit_feature') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', ['feature' => $feature]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="title"></x-form-label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}" value="{{ $feature->title }}">
                                    <x-validation-erorr field="title"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="icon"></x-form-label>
                                    <input type="text" name="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}" value="{{ $feature->icon }}">
                                    <x-validation-erorr field="icon"></x-validation-erorr>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $feature->description }}</textarea>
                                    <x-validation-erorr field="description"></x-validation-erorr>
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
