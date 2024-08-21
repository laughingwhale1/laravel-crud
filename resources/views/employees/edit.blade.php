<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <!-- Add any additional CSS styles here -->
</head>
<body>

<div class="container">
    <h1>Edit Employee</h1>
    <a href="{{ route('employees.index') }}">Back to Employees List</a>

    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- First Name -->
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $employee->first_name) }}" required>
            @error('first_name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $employee->last_name) }}" required>
            @error('last_name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <!-- Company -->
        <div>
            <label for="company_id">Company:</label>
            <select id="company_id" name="company_id" required>
                <option value="">Select a company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ old('company_id', $employee->company_id) == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
            @error('company_id')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone -->
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}">
            @error('phone')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit">Update Employee</button>
        </div>
    </form>
</div>

<!-- Add any additional JavaScript here -->

</body>
</html>
