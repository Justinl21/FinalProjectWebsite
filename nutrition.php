<img class="home" src="images/food.jpg" title="food">
<h2>Sign up today for a Nutrition Plan</h2>
<p>Nutrition plays a critical role in health. By maintaining a healthy diet, your fitness goals can be achieved!</p>
<p>Sign up today and I will reach out to make a personalized nutritional program depending on your needs</p>
<form action="register.php" method = "post">
  <div class="container">
    <p>Please fill in this form to create an account.</p>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <hr>
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" id="user" pattern=[A-Z\sa-z]{3,20} required>
    <hr>
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>