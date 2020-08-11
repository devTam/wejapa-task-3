<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./media.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="heading">
            <h1>Sign Up</h1>
            <p>Please fill the form if you would like to see a magic trick &#128513;</p>
        </div>

        <form action="./process.php" method="POST" id="form">
            <div class="name">
                <input type="text" name="firstName" placeholder="First Name" id="first-name">
                <input type="text" name="lastName" placeholder="Last Name" id="last-name">
            </div>
            <input type="text" name="email" placeholder="Email" id="email">
            <input type="password" name="password" placeholder="Password" id="password">
            <div class="passbox"></div>
            <div class="dob">
                <label for="dob">Date of birth:</label>
                <input type="date" name="dob" id="dob" id="dob">
            </div>
            <div class="gender">
                <span>Gender: </span>
                <div class="check">
                    <div class="sex">
                        <label for="male">Male</label>
                        <input type="checkbox" name="male" id="male">
                    </div>

                    <div class="sex">
                        <label for="female">Female</label>
                        <input type="checkbox" name="female" id="female">

                    </div>

                </div>
            </div>
            <div id="genderbox"></div>
            <div class="color">
                <label for="color">Favourite color:</label>
                <input type="color" name="color" id="color">
            </div>
            <div class="dept">
                <label for="dept">Department:</label>
                <select name="dept" id="dept">
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="submit">
                <input type="submit" value="Submit" id="submit">
            </div>

        </form>
    </div>

    <script src="script.js"></script>

</body>
</html>











