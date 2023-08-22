<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <br>
        <br>

        <br>

        <form action="/updatedata" method="post">
            {{csrf_field()}}
            <input type="text" value="{{$taskdata->task}}" class="form-control" name="task"/>
            <input type="hidden" value="{{$taskdata->id}}" name="id"/>
            <br>
            
            <input type="submit" class="btn btn-warning" value="Update"/>
            <input type="button" class="btn btn-danger" value="Cancel"/>

        </form>

    </div>
</body>
</html>