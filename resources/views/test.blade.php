<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        <h1> Hello, World.</h1>

        {{$user->name}}
        <br/><br/><br/>

        {{$data['name']}}
        <br/><br/><br/>

   		@if($mods)
    		<ul>
    			@foreach($mods as $item)
       	 		<li>{{ $item->name.' : '.$item->surname }}</li>
    			@endforeach
    		</ul>
		@endif
    </body>
</html>
