@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="ibox ibox-success">
                <div class="ibox-head">
                    <div class="ibox-title">Gallery Table</div>
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
                            <th> Action</th>
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
                                            <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
                                        </a>

                                        @endforeach
                                <td>
                                    <a href="{{route('gallery.edit',$form->id)}}" class="btn btn-primary" style="margin-right:2em;"><i class="fa fa-edit"></i></a>

                                    <a href="{{ route('gallery.show', $form->id) }}">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#showModal" style="margin-right:2em;"><i class="fa fa-eye"></i></button>
                                    </a>


                                    @include('layouts.delete-item')

                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$form->id}})"
                                       data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('gallery.create')}}">
                        <button type="button" class="btn btn-success" style="margin-top:2em;">Add Images</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("gallery.destroy",":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endsection
