@extends('master') @section('content')

<div class="col-sm-8 blog-main">
	<h1>Create post</h1>
    <hr>
	<form method="POST" action="/posts">

    {{  csrf_field()  }}
		
        <div class="form-group">
			<label for="title">Post Title</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
		</div>
		
		<button type="submit" class="btn btn-default">Publish</button>
	
    </form>
</div>
@endsection