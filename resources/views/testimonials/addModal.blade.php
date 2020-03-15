<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Testimonial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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

                    </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            {{ __('Submit') }}</button>
            <a href="{{route('testimonials.index')}}">
                <button type="button" class="btn btn-success">
                    {{ __('Show Data') }}</button>
            </a>
        </form>
        </div>
      </div>
    </div>
  </div>
