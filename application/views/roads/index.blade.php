@layout('layouts.master')

@section('content')
	{{ render('partials.errors') }}
    @include('partials.search')
@endsection