@extends('layout')
@section('title', 'Tasks 管理')
@section('pageJs')<script src="{{ asset('js/task.js')}}"></script>@endsection
@section('content')
<div id="task-app">
    <h1>Task List</h1>
        {{ csrf_field() }}
        <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Task</label>
            <div class="col-sm-6">
                <input type="text" id="task-name" class="form-control" v-model="new_task">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default" v-on:click="addTask">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>

    <!-- Current Tasks -->
    <h2>Current Tasks</h2>
    <table class="table table-striped task-table">
        <thead>
          <th>Task Id</th><th>Task Name</th><th>&nbsp;</th>
        </thead>
        <tbody>
          <tr v-for="task in tasks" v-bind:key="task.id">
            <td>
                <div>@{{task.id}}</div>
            </td>
            <td>
                <div>@{{task.name}}</div>
            </td>
            <td>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button v-on:click="deleteTask(task.id)">Delete Task</button>
            </td>
          </tr>
          {{--
            @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td>
                        <div>{{ $task->name }}</div>
                    </td>
                    <td>
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button>Delete Task</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            --}}
        </tbody>
    </table>
    <table class="table mt-5">
        <thead>
            <th>ID</th><th>タスク</th><th>完了</th>
        </thead>
        <tbody>
            <tr v-for="todo in todos" v-bind:key="todo.id">
               <td>@{{todo.id}}</td>
               <td>@{{todo.title}}</td>
               <td><button class="btn btn-secondary" v-on:click="deleteTodo(todo.id)">完了</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
