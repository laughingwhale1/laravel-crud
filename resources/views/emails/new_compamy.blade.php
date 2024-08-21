<!DOCTYPE html>
<html>
<head>
    <title>Company Created</title>
</head>
<body>
<h1>New Company Created!</h1>
<p>A new company has been added to admin panel:</p>
<p><strong>Name:</strong> {{ $company->name }}</p>
<p><strong>Email:</strong> {{ $company?->email }}</p>
<p><strong>Website:</strong> {{ $company?->website }}</p>
</body>
</html>
