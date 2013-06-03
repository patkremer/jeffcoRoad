@if($errors->has())
	<?php  $app_errors = $errors->all('<p>:message</p>') ?>
	@foreach($app_errors as $error)
		<div data-alert class="alert-box">
 			<strong>{{ $error }}</strong>
		  	<a href="#" class="close">&times;</a>
		</div>

	@endforeach

	
@endif