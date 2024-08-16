<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
<h1>Create Contact</h1>

<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    @error('name') <p>{{ $message }}</p> @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    @error('email') <p>{{ $message }}</p> @enderror

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone') }}">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="{{ old('address') }}">

    <button type="submit">Save</button>
</form>
</body>
</html>
