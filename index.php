<!DOCTYPE html>
<html lang="en">

<head>
    <meta cahrset="UTF-8">
    <meta name="viewport" content="Width=device-width, initial-scale=1.0">
    <title>Full-stack login & regiser form with user & admin page | codehal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="form-box active" id="login-form">
        <from action="dashbord.html">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href='#' onclick="showForm('regiter-form')" onclick="startQuiz('dashboard')">Register</a></p>
        </from>
    </div>
    <div class="form-box" id="regiter-form">
                <from actiom="">
                    <h2>Login</h2>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <select name="role" required>
                        <option value="">--Select Role--</option>
                        <option value="User">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit" name="regiser">Register</button>
                    <p>Don't have an account? <a href='#' onclick="showForm('login-form')" onclick="startQuiz('dashboard')">Login</a></p>
        </from>


        <div class="form-box" id="language-selection-form" style="display: none;">
            <form action="">
                <h2>Select Programming Language for Quiz</h2>
                <select id="language" name="language" required>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="C++">C++</option>
                    <option value="JavaScript">JavaScript</option>
                </select>
                <button type="button" onclick="startQuiz()">Start Quiz</button>
            </form>
        </div>
    

    </div>
  </div>
  <script src="script.js"></script>
  <script src="quiz.js"></script>
  
</body>

</html>