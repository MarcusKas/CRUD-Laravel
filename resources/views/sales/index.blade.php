<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    @extends('layouts.style')
</head>

<body>
    <div class="container p-5">
        <div class="card ">
            <div class="card-header">CRUD Applictaion</div>
            <div class="card-body">
                <h3 class="text-center text-bold">CRUD Application</h3>
                <hr>
                @if (session('status'))
                
                    <p class="text-center text-bold text-info">{{ session('status') }}</p>
                
                    
                @endif
                <div class="float-end"><a class="btn btn-info" href="{{ route('sales.create') }}"> New Sale +</a>
                </div>
                
                <div class="table">
                    <table class="table table-responsive table-hover table-stipped">
                       
                        <thead>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            
                            @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->body }}</td>
                                <td>
                                    <form action="{{ route('sales.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-warning "
                                            href="{{ route('sales.edit', $item->id) }}">Edit</a> <span> <a
                                                class="btn btn-info"
                                                href="{{ route('sales.show', $item->id) }}">View</a></span>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>

                                </td>

                            @empty
                                <p class="text-bold text-danger">No Data Records Found</p>
                            </tr>
                                @endforelse
                            
                        </tbody>
                        {{ $data->links() }}
                    </table>
                    
                </div>

            </div>
        </div>
    </div>

</body>

</html>