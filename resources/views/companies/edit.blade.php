<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Company</title>
</head>
<body>

<div class="container">
    <h1>Edit Company</h1>
    <a href="{{ route('companies.index') }}">Back to Companies List</a>

    <form action="{{ route('companies.update', $company) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $company->name) }}" required>
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $company->email) }}" required>
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo" accept="image/*">
            @if ($company->logo)
                <p>Current Logo:</p>
                <img src="{{ asset('storage/' . $company->logo) }}" alt="Current Logo" width="100">
            @endif
            @error('logo')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="website">Website:</label>
            <input type="url" id="website" name="website" value="{{ old('website', $company->website) }}">
            @error('website')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Update Company</button>
        </div>
    </form>
</div>


</body>
</html>
