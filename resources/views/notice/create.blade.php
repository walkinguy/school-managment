@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="col-md-6">
                <div class="ibox ibox-success">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Notices</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            {{-- <a class="ibox-remove"><i class="fa fa-times"></i></a> --}}
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" id="form" action="{{ route('notice.store') }}" name="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="category"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <select name="category" autocomplete="category" autofocus>
                                        <optgroup label="Select Category" placeholder="Select Category">Select
                                            Category
                                        </optgroup>
                                        <option>Event</option>
                                        <option>Result</option>
                                        <option>Curriculum</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="text" placeholder="Enter title" type="text" class="form-control"
                                           name="title" autocomplete="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="summernote" placeholder="Enter your description" class="form-control"
                                              name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                                <div class="col-md-6">
                                    <input type="file" placeholder="Upload File" id="file" class="form-control"
                                           name="file[]" multiple>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                    <a href="{{route("notice.index")}}">
                                        <button type="button" class="btn btn-primary"
                                                style="background-color:limegreen; border:none;">
                                            {{ __('Show Data') }}
                                        </button>
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

