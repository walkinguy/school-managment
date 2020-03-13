@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#showModal" style="margin-right:2em;"><i class="fa fa-eye"></i></button>
        <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$notices->title}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <a href="{{asset('storage/'. $notices->file)}}" target="_blank">
                                            <iframe class="card-img-top" src="{{asset('storage/'. $notices->file)}}" width="100%" height="500px"></iframe>
                                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$notices->title}}</h5>
                        <div class="text-muted card-subtitle">{{$notices->category}}</div>
                        <div>{{$notices->description}}</div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('notice.edit', $notices->id) }}" class="text-info">
                                <button type="button" class="btn btn-primary" style="margin-right:2em;"><i class="fa fa-edit"></i></button>
                                </a>
                            <span class="pull-right text-muted font-13">{{$notices->created_at}}</span>
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

{{-- @foreach (explode(',',$notices->profile) as $profile)

        <a href="{{asset('storage/'. $profile)}}" target="_blank">
            <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
        </a>

@endforeach

<h1>{{$notices->name}}</h1>
<h2>{{$notices->testimonial}}</h2>
<h3>{{$notices->role}}</h3> --}}

    </div>
</div>

@endsection
