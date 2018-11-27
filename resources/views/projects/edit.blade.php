@extends('layout')
@section('content')
    <h1 class="title">Edit Project</h1>
    <form method="POST" action="/projects/{{$project->id}}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input name="title" type="text" class="input" placeholder="Title" value="{{$project->title}}">
            </div>
            <div class="field">
                <label for="description" class="label">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea">{{$project->description}}</textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Project</button>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div class="control">
            <div class="field">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
    
@endsection