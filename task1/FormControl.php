<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Form Control</title>
</head>
<body>
 <div class="control text-center">
 <h1 class="bg-success">Form Control Task</h1>
   <form action="Result.php" method="Get">
   <label for="name">Name:</label>
   <input type="text" name="name" required>

   <label for="password">Password:</label>
   <input type="password" name="password">
<br>
   <label for="age">Age:</label>
   <input type="date" name="age" required>
<br>
   <label for="e-mail">E-Mail:</label>
   <input type="e-mail" name="e-mail" required>
<br>
   <label for="phone">Phone Number:</label>
   <input type="text" name="phone">
<br>
   <label for="gender">Gender:</label>
   <select name="gender" required>
   <option value="male">Male</option>
   <option value="female">Female</option>
   </select>
   <br>
   <label for="terms">Do you agree to our terms?</label>
   <input type="checkbox" value="terms" name="terms" required>
   <br>
   <textarea name="textarea" cols="50" rows="5" placeholder="Write About Yourself"></textarea>
   <br>
   <input type="reset" class="btn btn-primary">
   <button class="btn btn-danger">Sumbit</button>
   </form>
 </div>
</body>
</html>