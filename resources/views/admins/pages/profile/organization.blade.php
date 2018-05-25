@extends('admins.main')
@section('content')
@section('title', 'Organization Chart')

<div class="panel-body">
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="tablao">
		<textarea id="editor_tiny" class="editor" name="body"></textarea>
	</div>
	<div class="tab-pane" id="tabenglish">
		<textarea id="editor_tiny" class="editor" name="body"></textarea>
	</div>
</div>
</div>

@endsection