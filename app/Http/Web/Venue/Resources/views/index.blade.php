@extends ('core::layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel">
        <div class="panel-body">
            <h3>Venues</h3>

            @foreach ($venues as $venue)
                <div class="media">
                    <div class="media-left">
                        <a href="{{ route('web.venues.show', $venue->id) }}">
                            <img class="media-object" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $venue->latitude }},{{ $venue->longitude }}&zoom=1&size=64x64&maptype=roadmap&markers=color:red%7Clabel:%7C{{ $venue->latitude }},{{ $venue->longitude }}" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="{{ route('web.venues.show', $venue->id) }}">
                            <strong class="media-heading">{{ $venue->name }}</strong>
                        </a>

                        <p>{{ $venue->description }}</p>
                    </div>
                </div>

                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
