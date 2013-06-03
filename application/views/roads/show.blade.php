@layout('layouts.master')

@section('content')
	{{ render('partials.errors') }}
	@include('partials.search')

    <div class="row">
		<div class="small-12 large-8 small-centered large-centered columns">
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