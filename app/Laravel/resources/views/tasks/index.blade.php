@extends('layout')
@section('title', 'Task 管理')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="{{ asset('js/task.js')}}"></script>
@endsection
@section('content')
<div id="task-app">
    <div class="col_redo fsL b my5">1:<span>@{{operation_log}}</span></div>
    <div class="col_redo fsL b my5">2:<span v-text="operation_log"></span></div>
    <div class="col_redo fsL b my5">3:<span v-html="operation_log"></span></div>
    <task-heading class="col_redo fsL b my5"></task-heading>
    <div v-show="set_task_status">

      <div v-if="set_task">登録完了！</div>
      <div v-else>登録削除！</div>

    </div>
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
