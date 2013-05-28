@layout('layouts.master')

@section('content')
	<h4 class="title">Enter another street to find out the road number!</h4>
	<div class="large-8 large-centered columns">
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
    <div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
				    <tr>
				    	<th>Road Number</th>
				      	<th>Sub-Division</th>
				      	<th>Street Name</th>
				      	<th>From Street</th>
				      	<th>To Street</th>
				      	<th class="show-for-medium-up">Shop</th>
				      	<th class="show-for-medium-up">Direction</th>
				      	<th class="show-for-medium-up">Miles</th>
				    </tr>
				</thead>
				<tbody>
				    @foreach($roads as $road)
	    			<tr>
				       	<td >{{ $road->roadno }}</td>
				   	   	<td>{{ $road->subdiv }}</td>
				    	<td>{{ $road->street }}</td>
				      	<td>{{ $road->fromstreet }}</td>
				      	<td>{{ $road->tostreet }}</td>
				      	<td class="show-for-medium-up">{{ $road->distshop }}</td>
				      	<td class="show-for-medium-up">{{ $road->direction }}</td>
				      	<td class="show-for-medium-up">{{ $road->miles }}</td>
				    </tr> 

	    			@endforeach
				    
				</tbody>
			</table>

    	</div>
    	
    </div>
    
@endsection