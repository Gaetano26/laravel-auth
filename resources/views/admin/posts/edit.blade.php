@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="image">Image url</label>
            <input type="url" class="form-control" name="image" id="image">

        </div>
        <div class="mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="10" class="form-control"></textarea>

        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
