@extends ('core::layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel">
        <div class="panel-body">
            <a href="{{ route('admin.users.index') }}" class="pull-right">Go back</a>
            <h1>{{ $user->name }}</h1>
            <hr>
            <dl>
                <dt>Name</dt>
                <dd>{{ $user->name }}</dd>
            </dl>
            <dl>
                <dt>Email</dt>
                <dd>{{ $user->email }}</dd>
            </dl>
            <dl>
                <dt>Created at</dt>
                <dd>{{ $user->created_at }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection
