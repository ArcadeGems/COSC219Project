<form action="index.php" id="join" method="post" action="">
            <label for="fname" >First name:</label>
            <input type="text" id="fname" name="fname" size = "8"  required><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" size = "8" required><br><br>
            <label for="email">Email:</label><br>
            <!-- This input field suggests either gmail.com, hotmail.com or outlook.com -->
            <input type="email" id="email" name="email" autocomplete="email" value="@myokanagan.bc.ca" required><br><br>
            <textarea name="message" rows="10" cols="20">Tell us what you think!</textarea>
              <br>
            <input type="submit" value="submit" name="submit">
</form>