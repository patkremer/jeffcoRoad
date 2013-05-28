<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>Jeffco Road Search</title>
	
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/foundation.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::script('js/vendor/custom.modernizr.js') }}

</head>
<body>
	<header>
		<div class="row">
			<div class="large-12 large-centered columns">
				<h2>{{ HTML::link('/', 'Jeffco R&amp;B - Road Finder', array('id' => 'title_link')) }}</h2>
			</div>
		</div>
	</header>

	<div class="content">
		<div class="row">
			@yield('content') 
		</div>	
	</div>
	<hr />
	<footer>
		<div class="row">
			<div class="small-12 large-8 small-centered columns">
				<h6 class="text-center">To learn more about why I created this app - {{ HTML::link('about', 'About') }}</h6>
				<h6 class="text-center">Created by Patrick Kremer for Jeffco Road & Bridge</h6>
			</div>
		</div>
	</footer>
	{{ HTML::script('js/vendor/jquery.js') }}
	{{ HTML::script('js/vendor/zepto.js') }}	    
	{{ HTML::script('js/foundation.min.js') }}
	{{ HTML::script('js/foundation/foundation.alerts.js') }}
	{{ HTML::script('js/foundation/foundation.forms.js') }}
	{{ HTML::script('js/foundation/foundation.placeholder.js') }}
	<script>
		$(document).foundation(); 
	</script>
</body>
</html>