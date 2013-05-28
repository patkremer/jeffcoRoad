@layout('layouts.master')

@section('content')

    <div class="large-12 large-centered columns">
		<h3>About Road Finder</h3>
		<div class="row">
			<div class="large-8 columns">
				<p>I've worked at Jefferson County Road and Bridge over the past three summers as a seasonal while finishing up my CIS degree at MSU-Denver. During my time here I felt that the process for filling out time-sheets was broken. Anytime we would work on a road we would have to document it in our time-sheets, but in order to find the road number we would have to sort through a booklet of 6000+ roads. While that wasn't a difficult task, it could be easier.</p>
				<p>Thats when I came up with the idea to make a simple application to make the process more efficient. So I asked my boss if I could get a copy of the excel file with all of the roads in it so I could play with the data. Initially, I was playing on learning Android and creating a native app, but that was more difficult than I expected.</p>
				<p>I put the idea aside for a while and didn't purse it tell as of late. Since I had a good understanding of PHP and MySQL, I went ahead and converted the excel file to an SQL database and went from there. After a couple hours and with the help of the PHP MVC framework {{ HTML::link('http://laravel.com/', 'Laravel') }} and the responsive CSS framework {{ HTML::link('http://foundation.zurb.com/', 'Foundation') }}, I had the application created!</p>
				<p>To view more of my work check out my projects on my {{ HTML::link('http://www.linkedin.com/pub/patrick-kremer/48/ab4/470', 'Linkedin Profile') }}.</p>
			</div>
		</div>
		
    </div>
    
@endsection