@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the Task</h1>

<form method="POST" action="/task/{{ $task->id }}">
    @csrf

    <div class="form-group">
        <textarea name="description" class='form-control'>{{$task->description }}   </textarea>
        @if($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
     </div>

	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>
    <div class="form-group">
    <button type="submit" name="back" class="btn btn-primary"><- back</button>
	</div>
</form>



</div>

@stop
