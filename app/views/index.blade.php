<html>
    <head>
        <title>App Name</title>
    </head>
    <body>

        <div class="container">
            @foreach ($news as $new)
			    <p><a href="{{ $new['link'] }}" target="_blank">{{ $new['title'] }}</a></p>
			@endforeach
        </div>

    </body>
</html>