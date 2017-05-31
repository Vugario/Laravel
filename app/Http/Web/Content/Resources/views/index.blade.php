@extends ('core::layouts.app')

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel">
        <div class="panel-body">
            <h3>Component-based Laravel</h3>
            <p>This project showcases how Laravel can be divided into components with a service layer. This structure provides clear separation of concerns.</p>
            <p>It forces components to interact only through defined interfaces, increasing both reliability and testability.</p>
            <hr>
            <h4>Project-based</h4>
            <p>The application can be divided in three (or more) projects.</p>
            <strong>Web</strong>
            <p>The member-area in which all members can log in to manage their account.</p>
            <p>For example:</p>
            <ul>
                <li><a target="_blank" href="/login">/login</a></li>
                <li><a target="_blank" href="/register">/register</a></li>
            </ul>
            <strong>API</strong>
            <p>The API endpoints to retrieve data for either external partners or the frontend developers</p>
            <p>For example:</p>
            <ul>
                <li><a target="_blank" href="/api/venues">GET /api/venues</a></li>
                <li><a target="_blank" href="/api/users">GET /api/users</a></li>
            </ul>
            <strong>Admin</strong>
            <p>The admin panel used by employees to manage the platform.</p>
            <p>For example:</p>
            <ul>
                <li><a target="_blank" href="/admin/venues">/admin/venues</a></li>
                <li><a target="_blank" href="/admin/users">/admin/users</a></li>
            </ul>

            <hr>

            <h4>File structure</h4>
            <p>The "app" folder only holds project-specific code like controllers and view logic. The actual business logic which needs to be shared between projects is placed in the "src" folder and divided up in clear components.</p>
<pre><code>app
└-- Http
|   └-- Admin (project)
|   |   └-- Controller
|   |   └-- Resources (views)
|   └-- Api   (project)
|   |   └-- Controller
|   |   └-- Resources (views)
|   └-- Web   (project)
|   |   └-- Controller
|   |   └-- Resources (views)
src
└-- component
|   └-- User  (component)
|   |   └-- Service
|   |   └-- Model
|   └-- Venue (component)
|       └-- Service
|       └-- Model
public</code></pre>
        </div>
    </div>
</div>
@endsection
