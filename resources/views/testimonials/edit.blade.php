@extends ('admin.layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="col-md-6">
                <div class="ibox ibox-primary">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Testimonials</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="ibox-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" name="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" placeholder="Enter your name" value="{{ $testimonial->name }}" type="text" class="form-control" name="name" autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profile" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="profile" value="{{ $testimonial->profile }}" type="file" class="form-control" name="profile[]" multiple>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="testimonial" class="col-md-4 col-form-label text-md-right">{{ __('Testimonial') }}</label>

                                <div class="col-md-6">
                                    <textarea id="summernote" class="form-control" name="testimonial" placeholder="Enter your content">{{ $testimonial->testimonial }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <input type="text" id="role" class="form-control" name="role" value="{{ $testimonial->role }}" autocomplete="role" placeholder="Enter your role">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

