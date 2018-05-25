@extends('admins.main')
@section('content')
@section('title', 'History')

<div class="panel-body">
<ul class="nav nav-tabs nav-justified">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<br>
<ul>
     <div class="form-group">
      <input type="text" class="form-control" name="title" id="title" placeholder="Title" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
      <div class="validation"></div>
    </div>
</ul>

<div class="tab-content">
	<div class="tab-pane active" id="tablao">
		<textarea id="editor_tiny" class="editor" name="body"></textarea>
	</div>
	<div class="tab-pane" id="tabenglish">
		<textarea id="editor_tiny" class="editor" name="body"></textarea>
	</div>
</div>
 <div class="text-center"><button type="submit">Send Message</button></div>
</div>






@endsection