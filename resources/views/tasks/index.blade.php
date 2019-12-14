<!DOCTYPE html>
<html>
<head>
    @include('layouts.template')
    <title>Tasks</title>
</head>
<body>

   {{--  <div class="panel panel-default">
        <div class="panel-heading"><h1>Tasks</h1></div>
        <div class="panel-body">
            <div class="row">
                @foreach ($response as $task)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                               
                                <div class="caption">
                                    <h3>{{ $task->title }}</h3>
                                    
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

        </div> --}}
        <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('index') }}">Tasks</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('create') }}">Add Task</a>
            </ul>
        </nav>
        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                  type: 'success',
                  title: 'Success',
                  text: '{{$message}}',
                })
            </script>   
        @endif
        <table id='birdTable' class='display'>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($response as $test)
                <tr>
                    <td>{{$test->title}}</td>
                    <td>{{$test->description}}</td>
                    <td>
                        <form action="{{ route('test.destroy',$test->id) }}" method="POST">
           
                            <a class="btn btn-info" href="{{ route('test.show',$test->id) }}">Show</a>
            
                            {{-- <a class="btn btn-primary" href="{{ route('test.edit',$test->id) }}">Edit</a> --}}
                            
                            @csrf
                            @method('DELETE')

                            {{-- <a class="btn btn-danger confirmDelete" href="#" data-id="{{$prod->id}}">Delete</a> --}}
                            {{-- <input type="button" name="confirmDelete" value="Delete" class="btn btn-danger confirmDelete"> --}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#birdTable').DataTable();
    });
</script>