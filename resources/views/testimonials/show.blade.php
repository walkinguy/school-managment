@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#showModal" style="margin-right:2em;"><i class="fa fa-eye"></i></button>
        <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$testimonial->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <a href="{{asset('storage/'. $testimonial->profile)}}" target="_blank">
                                            <img class="card-img-top" src="{{asset('storage/'. $testimonial->profile)}}">
                                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$testimonial->name}}</h5>
                        <div class="text-muted card-subtitle">{{$testimonial->role}}</div>
                        <div>{{$testimonial->testimonial}}</div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="text-info">
                                <button type="button" class="btn btn-primary" style="margin-right:2em;"><i class="fa fa-edit"></i></button>
                                </a>
                            <span class="pull-right text-muted font-13">{{$testimonial->created_at}}</span>
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

{{-- @foreach (explode(',',$testimonial->profile) as $profile)

        <a href="{{asset('storage/'. $profile)}}" target="_blank">
            <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
        </a>

@endforeach

<h1>{{$testimonial->name}}</h1>
<h2>{{$testimonial->testimonial}}</h2>
<h3>{{$testimonial->role}}</h3> --}}

    </div>
</div>

@endsection
