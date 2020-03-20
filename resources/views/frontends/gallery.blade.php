@extends ('frontends.layout')

@section('content')

    <div class="gallery-grid mt-3">

        @foreach ($gallery as $form)

        @foreach (explode(',',$form->profile) as $profile)

        <div class="image">

        <a href="{{asset('storage/'. $profile)}}" target="_blank">
            <img src="{{asset('storage/'. $profile)}}">
        </a>

        </div>

        @endforeach

        @endforeach
    </div>

@endsection
