<form action="" method="POST">
<fieldset>
<legend>Signup</legend>
<?=$error?>
<p>Signup to use TestSwarm. If you already have an account you may <a href="/login/">Login Here</a>.</p>
<label>Username: <input type="text" name="username"/></label>
<label>Password: <input type="password" name="password"/></label>
<label>Email: <input type="text" name="email"/></label>
<label>Request Auth Code:<br/>
If you run an Open Source project and wish to submit jobs to be run on TestSwarm please provide a URL and description of the project below. Your auth code will be emailed to you, pending approval.<textarea cols="40" rows="6" name="request"></textarea></label>
<input type="submit" value="Signup"/>
</fieldset>
</form>
