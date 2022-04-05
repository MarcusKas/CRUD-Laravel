<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@include('layouts.style')

<body>
    <div class="container p-5 bg-gray-500">
        <div class="card">
            <div class="card-header">Create a New Sale</div>
            <div class="card-body bg-gray-200">
                <form action="/sales" method="post">
                    @csrf
                 
                    <div class="mb-3">
                        <label id="title_label" for="title">Title</label>
                        <input id="title" name="title" type="text" class="form-control" value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                    </div>
                    <div class="form-check mb-3">
                        <label id="body_label" for="body" class="required">Body</label>
                        <textarea id="body" name="body" rows="5" class="form-control"></textarea>
                  @error('body')
                      <p class="text-danger text-sm"> {{ $message }} </p>
                  @enderror
                    </div>
                    <button class="btn btn-secondary" type="submit">Post Sale</button>
                <span><a href="{{ route('sales.index') }}">Cancel</a></span>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
