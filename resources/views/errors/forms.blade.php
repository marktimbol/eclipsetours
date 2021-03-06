@if( count($errors) > 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
@endif	

@if( ! empty( Session::get('error') ) )
	<div class="alert alert-danger">
		{{ Session::get('error') }}
	</div>
@endif