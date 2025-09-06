<?php
class user_forms{
    public function signup_form(){
        ?>
        <h2>Signup Form</h2>
        <form action='submit_signup.php' method='post'>
            Username: <input type='text' name='username'><br>
            Password: <input type='password' name='password'><br>
            <input type='submit' value='Sign Up'>
    </form>
    <?php
    }
}