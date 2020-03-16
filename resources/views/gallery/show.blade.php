@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#showModal" style="margin-right:2em;">TAP TO VIEW DETAILS  <i class="fa fa-eye"></i></button>
        <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$gallery->title}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        @foreach (explode(',',$gallery->profile) as $profile)

                            <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
                            </a>

                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{$gallery->title}}</h5>
                        <div>{{$gallery->description}}</div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="text-info">
                                <button type="button" class="btn btn-primary" style="margin-right:2em;"><i class="fa fa-edit"></i></button>
                                </a>
                            <span class="pull-right text-muted font-13">{{$gallery->created_at}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

{{-- @foreach (explode(',',$gallery->profile) as $profile)

        <a href="{{asset('storage/'. $profile)}}" target="_blank">
            <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
        </a>

@endforeach

<h1>{{$gallery->name}}</h1>
<h2>{{$gallery->testimonial}}</h2>
<h3>{{$gallery->role}}</h3> --}}

    </div>
</div>

@endsection
