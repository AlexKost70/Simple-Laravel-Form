<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Main Page</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input name="name" type="name" id="name">
            @if($errors->has('name'))
                <p class="error">{{ $errors->first("name") }}</p>
            @endif
        </div>
        <div>
            <label for="surname">Surname</label>
            <input name="surname" type="surname" id="surname">
            @if($errors->has('surname'))
                <p class="error">{{ $errors->first("surname") }}</p>
            @endif
        </div>
        <div>
            <label for="username">Login</label>
            <input name="username" type="login" id="login">
            @if($errors->has('username'))
                <p class="error">{{ $errors->first("username") }}</p>
            @endif
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" type="password" id="password">
            @if($errors->has('password'))
                <p class="error">{{ $errors->first("password") }}</p>
            @endif
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>