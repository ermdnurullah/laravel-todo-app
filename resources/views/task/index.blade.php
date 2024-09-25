<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            <h1 class="text-center my-5">Laravel Todo App</h1>
            <form action="{{ !empty($task) ? route('update-task', ['id' => $task->id]) : route('create-task') }}" method="POST" class="mb-4">
            @csrf
            @if(!empty($task))
               @method('PATCH')
            @endif
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Taks Name" value="{{!empty($task) ? $task->name : ''}}">
                <button type="submit" class="btn btn-success">{{ !empty($task) ? 'Update Task' : 'Add Task' }}</button>
            </div>
        </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
      
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
               <h4>All Tasks</h4>
               <table class="table table-hover">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th  colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($tasks as $task)
      <tr>
        <td>1</td>
        <td>{{$task->name}}</td>
        <td><a href="{{ route('edit-task', ['id' => $task->id]) }}" class="text-success"><i class='fa fa-edit'></i></a></td>
        <td><a href="{{ route('delete-task', ['id' => $task->id]) }}" class="text-danger"><i class='fa fa-trash-o'></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
            
        
    </div>

    
</body>
</html>