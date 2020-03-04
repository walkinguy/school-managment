@extends ('admin.layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="col-md-6">
                <div class="ibox ibox-success">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Images to Gallery</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="ibox-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ route('gallery.store') }}" name="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input type="text" id="title" class="form-control" name="title" autocomplete="role"
                                           placeholder="Enter image title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                    <textarea id="summernote" class="form-control" name="description" autofocus
                                              placeholder="Enter image description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                <div class="col-md-6">
                                    <input type="file" id="profile" class="form-control" name="profile"
                                           autofocus placeholder="Upload image" multiple>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                    <a href="{{route('gallery.index')}}">
                                        <button type="button" class="btn btn-primary"
                                                style="background-color:limegreen; border:none;">
                                            {{ __('Show data') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>

                        @include('layouts.snscript')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
