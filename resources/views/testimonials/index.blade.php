@extends ('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="page-content fade-in-up">
            <div class="ibox ibox-success">
                <div class="ibox-head">
                    <div class="ibox-title">Testimonials Table</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                           <div class="post_data" id="post_data">
                           <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Testimonial</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($testimonial as $form)
                                <tr>
                                    <td>


                                        @foreach (
                                            explode(',',$form->profile) as $profile)

                                        <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                            <img src="{{asset('storage/'. $profile)}}" class="img-thumbnail" style="height:50px; width:50px; object-fit:cover;">
                                        </a>

                                        @endforeach


                                    </td>
                                    <td>{{$form->name}}</td>
                                    <td>{!! $form->testimonial !!}</td>
                                    <td>{{$form->role}}</td>
                                    <td><a href="{{ route('testimonials.edit', $form->id) }}">
                                            <button type="button" class="btn btn-primary" style="margin-right:2em;"><i class="fa fa-edit"></i></button>
                                        </a>
    
                                        @include('layouts.delete-item')
    
                                        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$form->id}})"
                                           data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                           </div>
                    </table>
                    <a href="{{ route('testimonials.create')}}">
                        <button type="button" class="btn btn-success" style="margin-top:2em;">Add Testimonials</button>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("testimonials.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }

        // $(document).ready(function(){
 
        // var _token = $('input[name="_token"]').val();

        // load_data('', _token);

        // function load_data(id="", _token)
        // {
        // $.ajax({
        // url:"{{ route('testimonial.load_data') }}",
        // method:"POST",
        // data:{id:id, _token:_token},
        // success:function(data)
        // {
        //     $('#load_more_button').remove();
        //     $('#post_data').append(data);
        // }
        // })
        // }

        // $(document).on('click', '#load_more_button', function(){
        // var id = $(this).data('id');
        // $('#load_more_button').html('<b>Loading...</b>');
        // load_data(id, _token);
        // });

        // });
    </script>
@endsection
