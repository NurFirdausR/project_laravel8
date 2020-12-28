
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <form action="{{route('welcome.submit')}}" method="POST">

        @csrf
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <label for="firstname">First name:</label>
    <br>
    <br>
    <input type="text" id="firstname" name="firstname">
    <br>
    <br>
    <label for="lastname">Last name:</label>
    <br>
    <br>
    <input type="text" id="lastname" name="lastname">
    <br>
    <p>Gender:</p>
    <input type="radio" name="gender" id="gender" value="male">
    <label for="male">Male</label>
    <br>
    <input type="radio" name="gender" id="gender" value="female">
    <label for="female">Female</label>
    <br>
    <input type="radio" name="gender" id="gender" value="other">
    <label for="other">Other</label>
    <br>
    <p>Nationality:</p>
    <select name="country" id="country">
        <option value="Indonesia">Indonesia</option>
        <option value="Singapura">Singapura</option>
        <option value="Malasyia">Malaysia</option>
        <option value="Australia">Australian</option>
    </select>
    <p>Language Spoken:</p>
    <input type="checkbox" id="idn" name="idn">
    <label for="idn">Bahasa Indonesia</label>
    <br>
    <input type="checkbox" id="english" name="english">
    <label for="english">English</label>
    <br>
    <input type="checkbox" id="dont">
    <label for="dont">Other</label>
    <p>Bio:</p>
    <textarea cols="30" rows="10"></textarea>
    <br>
    <button type="submit" value="Sign Up">Pencet </button>

    </form>
</body>
</html>