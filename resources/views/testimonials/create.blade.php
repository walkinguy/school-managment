@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="col-md-6">
                <div class="ibox ibox-success">
                    <div class="ibox-head">
                        <div class="ibox-title">Enter Testimonials</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="ibox-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ route('testimonials.store') }}" name="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control"
                                           name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profile" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="profile" type="file"
                                           class="form-control"
                                           name="profile[]" multiple>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label for="testimonial"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Testimonial') }}</label>
                                <div class="col-md-6">
                            <textarea id="summernote" class="form-control" placeholder="Enter your content"
                                      name="testimonial"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <input type="text" id="role" class="form-control" name="role" autocomplete="role"
                                           placeholder="Enter your role">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}</button>
                                    <a href="{{route('testimonials.index')}}">
                                        <button type="button" class="btn btn-success">
                                            {{ __('Show Data') }}</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.snscript')

@endsection

