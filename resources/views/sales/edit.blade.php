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
                <form action="{{ route('sales.update', $sale->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label id="title_label" for="title">Title</label>
                        <input id="title" name="title" type="text" class="form-control" value="{{ $sale->title }}" />
                        @error('title')
                            <p>{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <label id="body_label" for="body" class="required">Body</label>
                        <textarea id="body" name="body" rows="5" class="form-control"> {{ $sale->body }}</textarea>
                        @error('body')
                            <p class="text-danger text-sm"> {{ $message }} </p>
                        @enderror
                    </div>
                    <button class="btn btn-secondary" type="submit">Update Sale</button>
                    <span><a href="{{ route('sales.index') }}">Cancel</a></span>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
