@extends ('admin.layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="col-md-6">
                <div class="ibox ibox-primary">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Gallery</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" name="form" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input type="text" value="{{$gallery->title}}" id="title" class="form-control" name="title" autocomplete="title"
                                           placeholder="Enter image title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right"
                                       required>{{ __('Image Description')  }}</label>
                                <div class="col-md-6">
                                    <textarea id="summernote" class="form-control"
                                              name="description" placeholder="Enter your image description"
                                              autocomplete="description" autofocus>{{$gallery->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right"
                                       required>{{ __('Image') }} </label>
                                <div class="col-md-6">
                                    <input type="file" id="profile" class="form-control"
                                           value="{{asset('storage/'. $gallery->image)}}" name="profile[]"
                                           placeholder="Upload Image">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                            <br>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @include('layouts.snscript')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
