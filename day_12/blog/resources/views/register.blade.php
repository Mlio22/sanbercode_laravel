<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to registration form!</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign up form</h3>

    <form action="/register/create" method="POST">
        @csrf
        <p>First Name: </p>
        <input name="first_name" type="text">

        <p>Last Name: </p>
        <input name="last_name" type="text">

        <p>Gender: </p>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br>

        <p>Nationality: </p>
        <select name="origin">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Other">Other</option>
        </select>

        <br>

        <p>Language Spoken: </p>
        <input type="checkbox" name="Lang"> Bahasa Indonesia <br>
        <input type="checkbox" name="Lang"> English <br>
        <input type="checkbox" name="Lang"> Other <br>

        <p>Bio:</p>
        <textarea name="biodata" cols="30" rows="10"></textarea>

        <br>
        <button type="submit">Sign up</button>
    </form>
</body>

</html>