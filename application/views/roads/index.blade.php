@layout('layouts.master')

@section('content')
    <div class="large-12 large-centered columns">
    	<h4 class="title">Enter a street name to find out the road number!</h4>
		<div class="row">
			<div class="large-10 columns">
				<div class="row collapse">
					<div class="small-2 columns">
						<span class="prefix radius">Street Input</span>
					</div>
					<div class="small-8 columns">
						{{ Form::open('search', 'POST')  }}
							
							{{ Form::text('keyword', '', array('id' => 'keyword', 'placeholder' => 'Try coors or quaker for example...', 'required' => 'required')) }}
					</div>
					<div class="small-2 columns">
							{{ Form::submit("Find", array('class' => 'button success prefix')) }}
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		

    </div>
    
@endsection