@extends ('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="ibox ibox-success">
            <div class="ibox-head">
                <div class="ibox-title">Notices Table</div>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $form)
                        <tr>
                            <td>{{$form->id}}</td>
                            <td>{{$form->category}}</td>
                            <td>{{$form->title}}</td>
                            <td>{!!$form->description!!}</td>
                            <td>

                                @foreach (
                                explode(',',$form->file) as $file)

                                <a href="{{asset('storage/'. $file)}}" target="_blank">
                                    <i class="fa fa-file-text"></i>
                                </a>

                                @endforeach
                            </td>

                            <td><a href="{{route('notice.edit', $form->id)}}">
                                    <button type="button" class="btn btn-primary" style="margin-right:2em;"><i
                                            class="fa fa-edit"></i></button>
                                </a>

                                <a href="{{ route('notice.show', $form->id) }}">
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
                <a href="{{ route('notice.create')}}">
                    <button type="button" class="btn btn-success" style="margin-top:2em; ">Add Notices</button>
                </a>
                <a href="{{url('/sbk/notice')}}">
                    <button type="button" class="btn btn-success" style="margin-top:2em;">View on Frontend</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function deleteData(id) {
            var id = id;
            var url = '{{ route("notice.destroy",":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
</script>
@endsection