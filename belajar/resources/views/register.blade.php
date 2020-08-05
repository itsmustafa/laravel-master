<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
</head>

<body>
  <h2>Buat Account Baru!</h2>
  <h3>Sign Up Form</h3>
  <form action="/welcome" method="POST">
  @csrf
    <label for="fname">First Name:</label><br><br>
    <input type="text" name="nama_depan" id="fname" /><br><br>

    <label for="lname">Last Name:</label><br><br>
    <input type="text" name="nama_belakang" id="lname" /><br><br>

    <label for="gender">Gender:</label><br><br>
    <input type="radio" name="gender" id="male" value="male" />

    <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female" value="female" />
    <label for="female">Female</label><br>
    <input type="radio" name="gender" id="other" value="other" />
    <label for="other">Other</label><br><br>

    <label for="nationality">Nationality:</label><br><br>
    <select name="nationality">
      <option>Indonesian</option>
      <option>Singaporean</option>
      <option>Malaysian</option>
      <option>Australian</option>
    </select><br><br>

    <label for="language">Language Spoken:</label><br><br>

    <input type="checkbox" name="bahasa1" id="bahasa1" value="Bahasa Indonesia" />
    <label for="bahasa1">Bahasa Indonesia</label><br>
    <input type="checkbox" name="bahasa2" id="bahasa2" value="Bahasa Indonesia" />
    <label for="bahasa2">English</label><br>
    <input type="checkbox" name="bahasa3" id="bahasa3" value="Other" />
    <label for="bahasa3">Other</label><br><br>

    <label for="bio">Bio:</label><br><br>
    <textarea name="bio" cols="30" rows="10"></textarea><br>

    <input type="submit" value="Submit">
  </form>
</body>

</html>