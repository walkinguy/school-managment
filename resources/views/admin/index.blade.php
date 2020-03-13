@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="ibox ibox-success">
            <div class="ibox-head">
                <div class="ibox-title">Notices Table</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="ibox-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $form)
                        <tr>
                            <td>{{$form->id}}</td>
                            <td>{{$form->category}}</td>
                            <td>{{$form->title}}</td>
                            <td>{!!$form->description!!}</td>
                            <td><a href="{{asset('storage/'. $form->file)}}">{{$form->file}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="ibox ibox-success">
        <div class="ibox-head">
            <div class="ibox-title">Gallery Table</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="ibox-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th> ID</th>
                        <th> Title</th>
                        <th> Description</th>
                        <th> Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $form)
                    <tr>
                        <td> {{$form->id}} </td>
                        <td> {{$form->title}} </td>
                        <td style="width: 50%;"> {!! $form->description !!} </td>
                        <td>
                            @foreach (
                            explode(',',$form->profile) as $profile)

                            <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail"
                                    style="height:50px; width:50px; object-fit:cover;">
                            </a>

                            @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="ibox ibox-success">
        <div class="ibox-head">
            <div class="ibox-title">Testimonials Table</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="ibox-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <div class="post_data" id="post_data">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Testimonial</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonial as $form)
                        <tr>
                            <td>


                                @foreach (
                                explode(',',$form->profile) as $profile)

                                <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                    <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail"
                                        style="height:50px; width:50px; object-fit:cover;">
                                </a>

                                @endforeach

                            </td>
                            <td>{{$form->name}}</td>
                            <td>{!! $form->testimonial !!}</td>
                            <td>{{$form->role}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </table>
        </div>
    </div>
</div>
@endsection