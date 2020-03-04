@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Food Table</div>
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
                            <th> Banner</th>
                            <th> Edit</th>
                            <th> Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($web as $form)
                            <tr>
                                <td> {{$form->id}} </td>
                                <td> {{$form->title}} </td>
                                <td> {!! $form->description !!} </td>
                                <td>
                                    <a href="{{asset('storage/'. $form->image)}}" target="_blank">
                                        <img src="{{asset('storage/'. $form->image)}}" class="img-thumbnail" style="height: auto; max-width:50px">
                                    </a></td>
                                <td>
                                    <a href="{{asset('storage/'. $form->banner)}}" target="_blank">
                                        <img src="{{asset('storage/'. $form->banner)}}" class="img-thumbnail" style="height: auto; max-width:50px">
                                    </a></td>
                                <td>
                                    <a href="{{route('gallery.edit',$form->id)}}" class="btn btn-primary"> Edit </a>
                                </td>
                                <td>
                                    @include('layouts.delete-item')

                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$form->id}})"
                                       data-target="#DeleteModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                    <a href="{{ route('website.create')}}">
                        <button type="button" class="btn btn-primary" style="background-color:limegreen; border:none;">
                            {{ __('Add Food Items') }}</button>
                    <a href="website/show"><button type="button" class="btn btn-primary" style="background-color:limegreen; border:none;">
                            {{ __('View Website') }}</button></a>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("website.destroy",":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endsection
