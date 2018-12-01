@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{ $project->description }}
        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>
    </div>
    @if ($project->tasks->count())
        <div class="box">
            @foreach ($project->tasks as $task)
                {{-- Can be done also using /projects/id/tasks/id --}}
                <div>
                    <form method="POST" action="/completed-tasks/{{ $task->id }}">
                        @if ($task->completed)
                            {{ method_field('DELETE') }}
                        @endif
                        {{ csrf_field() }}
                        <label class="checkbox {{ $task->completed ? 'is-completed' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
                
            @endforeach
        </div>    
    @endif
    {{-- add a new task form --}}
    <form class="box" action="/projects/{{ $project->id }}/tasks" method="POST">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="">New Task</label>
            
            <div class="control">
                <input 
                    type="text" 
                    class="input" 
                    name="description" 
                    placeholder="New Task" 
                    required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
        @include('errors')
    </form>
    

@endsection