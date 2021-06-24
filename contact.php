<strong>Feel free to send any questions or comments you have</strong>
<br>
<form action="action.php" method="post">
  <div class="container">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="Enter name" pattern=[A-Z\sa-z]{3,20} required>
    <hr>
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="Enter email" required>
    <hr>
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="Message" required></textarea>
    <hr>
    <button type="submit" class = "registerbtn">Send Message</button>
    </div>
</form>