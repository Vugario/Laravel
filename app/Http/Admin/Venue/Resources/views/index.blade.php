@extends ('core::layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>City</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($venues as $venue)
                        <tr>
                            <td>{{ $venue->id }}</td>
                            <td>{{ $venue->name }}</td>
                            <td>{{ $venue->city }}</td>
                            <td><a href="{{ route('admin.venues.show', $venue->id) }}">Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
