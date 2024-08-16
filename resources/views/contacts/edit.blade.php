<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
<h1>Edit Contact</h1>

<form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
    @error('name') <p>{{ $message }}</p> @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
    @error('email') <p>{{ $message }}</p> @enderror

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="{{ old('address', $contact->address) }}">

    <button type="submit">Update</button>
</form>
</body>
</html>
