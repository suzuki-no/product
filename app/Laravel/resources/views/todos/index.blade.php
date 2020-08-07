@extends('layout')
@section('title', 'Todo 管理')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="{{ asset('js/todo.js')}}"></script>
@endsection
@section('content')
<div id="todo-app">
    <div class="container">
        <h3 class="mt-5">Todo 管理システム</h3>

            <div class="form-group mt-4">
                <label for="todo">新規Todo</label>
                <input type="text" class="form-control" id="todo" v-model="new_todo">
            </div>

            <button type="submit" class="btn btn-primary" v-on:click="addTodo">登録</button>

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
</div>
@endsection
