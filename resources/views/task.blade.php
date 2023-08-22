<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Tasks App</h1>
            <div class="row">
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>

                @endforeach
                <form method="post" action="/saveTask">
                    {{csrf_field()}}
                <input type="text" name="task" class="form-control" placeholder="Enter your task"/>
                </br>
                <input type="submit" class="btn btn-primary" value="Save"/>
                <input type="button" class="btn btn-warning" value="Clear"/>
                </form>
                </br>
</br>
                <table class="table table-dark">
                    <th>Task ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <th>Action</th>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            @if($task->iscompleted)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning"> Not Completed</button>
                            @endif
                        </td>
                       
                        <td>
                        @if(!$task->iscompleted)
                            <a  href="/markasdone/{{$task->id}}" class="btn btn-primary">Mark as Done</a>
                        @else
                            <a  href="/markasnotdone/{{$task->id}}" class="btn btn-danger">Mark as not Done</a>
                        @endif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/delete/{{$task->id}}" class="btn btn-warning">Remove</a>
                        <a href="/update/{{$task->id}}" class="btn btn-success">Update</a>
                        </td>

                        
                        

                    </tr>
                    @endforeach

                </table>


            </div>
            

        </div>
        

        </div>

    </div>
    
</body>
</html>