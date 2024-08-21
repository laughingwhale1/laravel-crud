<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Company</title>
</head>
<body>

<div class="container">
    <h1>Add New Company</h1>
    <a href="{{ route('companies.index') }}">Back to Companies List</a>

    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo" accept="image/*" required>
            @error('logo')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="website">Website:</label>
            <input type="url" id="website" name="website" value="{{ old('website') }}">
            @error('website')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Add Company</button>
        </div>
    </form>
</div>


</body>
</html>
