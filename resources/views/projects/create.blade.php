@extends('layout')
@section('content')
    <h1 class="title"> Create a New Project </h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="field">
                <label for="title" class="label">Title</label>
    
                <div class="control">
                    <input name="title" type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Title" value="{{ old('title') }}" required>
                </div>

                <div class="field">
                    <label for="description" class="label">Description</label>
    
                    <div class="control">
                        <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" value="{{ old('description') }}" required></textarea>
                    </div>
                </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>    
        @endif
    </form> 
@endsection