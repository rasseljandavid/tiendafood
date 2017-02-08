@if (count($errors) > 0)
    <div class="alert alert-danger error-container col-md-10 col-md-offset-1">
    	<div class="navbar-right" style="margin-right: 3px;">
    		<a class="plain-link message-close" title="close" style="color:gray;">x</a>
    	</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <div style="clear:both;"></div>
@endif