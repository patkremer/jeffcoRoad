<div class="row">
<div class="small-10 large-12 small-centered large-centered columns">
	<div class="row">
		<div class="large-5 large-centered columns">
			<h5 class="title"><i class="icon-search icon-large" id="search"></i>Find a Street Number</h5>
			<div class="row collapse">
				<div class="small-10 columns">
					{{ Form::open('search', 'POST')  }}
						{{ Form::token() }}
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
</div>