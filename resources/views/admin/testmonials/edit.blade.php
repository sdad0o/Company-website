@extends('admin.master')
@section('title', __('keywords.edit_testmonial'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit_testmonial') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testmonials.update', ['testmonial' => $testmonial]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" value="{{ $testmonial->name }}">
                                    <x-validation-erorr field="name"></x-validation-erorr>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <x-form-label field="position"></x-form-label>
                                    <input type="text" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" value="{{ $testmonial->position }}">
                                    <x-validation-erorr field="position"></x-validation-erorr>
                                </div>
                                <div class="col-md-12 ">
                                    <x-form-label field="image"></x-form-label>
                                    <input type="file" name="image" class="form-control-file">
                                    <x-validation-erorr field="image"></x-validation-erorr>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $testmonial->description }}</textarea>
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
