<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form {{ route('regis.simpanData') }} method="post">
    {{ csrf_field() }}
        <h1>Buat Account Baru</h1>
        <h2>Sign up form</h2>
        <label>First name:</label><br>
        <input type="text" name="firstName"><br><br>
        <label>Last name:</label><br>
        <input type="text" name="lastName"><br><br>
        <label>Gender</label>
        <br>
        <input type="radio" name="gender">Male
        <br>
        <input type="radio" name="gender">Female
        <br>
        <input type="radio" name="gender">other
        <br>
        <br>
        <label>Nationality</label>
        <select name="nationality">
            <option value="indonesian">indonesian</option>
        </select>
        <br>
        <br>
        <label>Language Spoken</label>
        <br>
        <input type="checkbox">Bahasa indonesian
        <br>
        <input type="checkbox">English
        <br>
        <input type="checkbox">Other
        <br>
        <br>
        <label>Bio :</label>
        <br>
        <textarea name="bio" rows="10" cols="30"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>