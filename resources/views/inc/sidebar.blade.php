@section('sidebar')
        <div class="well">
            @auth
            <h3>You are logged in!</h3>
            
            @else
            <h3>You are not logged in!</h3>
            @endauth
            
            @show
        </div>