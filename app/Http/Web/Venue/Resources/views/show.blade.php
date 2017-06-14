@extends ('core::layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel">
        <div class="panel-body">
            <a href="{{ route('web.venues.index') }}">Go back</a>

            <h3>{{ $venue->name }}</h3>
            <p>{{ $venue->description }}</p>

            <hr>

            <img class="media-object" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $venue->latitude }},{{ $venue->longitude }}&zoom=1&size=150x150&maptype=roadmap&markers=color:red%7Clabel:%7C{{ $venue->latitude }},{{ $venue->longitude }}" alt="...">
        </div>
    </div>
</div>
@endsection
