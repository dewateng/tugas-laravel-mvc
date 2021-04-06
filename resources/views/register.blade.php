<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method = "POST">
        @csrf
        <label>First Name:</label><br>
        <br>
        <input type="text" name="nama1"><br>
        <br>
        <label>Last Name:</label><br>
        <br>
        <input type="text" name="nama2"><br>
        <br>

        <label>Gender: </label><br>
        <br>
        <input type="radio" name="kelamin">Male
        <br>
        <input type="radio" name="kelamin">Female
        <br>
        <input type="radio" name="kelamin">Other
        <br>

        <br>
        <label>Nationality</label>
        <br>
        <select name="wn">
            <option value="dalam"> Indonesian </option>
            <option value="luar"> Non-Indonesian </option>
        </select> 
        <br>

        <br>
        <label>Language Spoken:</label><br>
        <br>
        <input type="checkbox" name="indo">Bahasa Indonesia<br>
        <input type="checkbox" name="inggris">English<br>
        <input type="checkbox" name="lainnya">Other<br>
        <br>
        
        <label> Bio </label><br>
        <br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br>

        <input type="submit">
    </form>
</body>
</html>