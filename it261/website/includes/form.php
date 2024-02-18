<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
Sign up for our Mailing List
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span><?php echo $first_name_err ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span><?php echo $last_name_err ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span><?php echo $email_err ;?></span>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"' ;?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"' ;?>>Male</li>
<li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked"' ;?>>Neither</li>
</ul>
<span><?php echo $gender_err ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
<span><?php echo $phone_err ;?></span>

<label>Favorite Teas</label>
<ul>
<li><input type="checkbox" name="teas[]" value="earl" <?php if(isset($_POST['teas']) && in_array('earl', $teas)) echo 'checked = "checked"'  ;?>>Earl Grey Tea</li>

<li><input type="checkbox" name="teas[]" value="green" <?php if(isset($_POST['teas']) && in_array('green', $teas)) echo 'checked = "checked"'  ;?>>Green Tea</li>

<li><input type="checkbox" name="teas[]" value="chai" <?php if(isset($_POST['teas']) && in_array('chai', $teas)) echo 'checked = "checked"'  ;?>>Chai Tea</li>

<li><input type="checkbox" name="teas[]" value="oolong" <?php if(isset($_POST['teas']) && in_array('oolong', $teas)) echo 'checked = "checked"'  ;?>>Oolong Tea</li>

<li><input type="checkbox" name="teas[]" value="white" <?php if(isset($_POST['teas']) && in_array('white', $teas)) echo 'checked = "checked"'  ;?>>White Tea</li>

</ul>
<span><?php echo $teas_err ;?></span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"';?>>Select One!</option>

<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"';?>>Northwest</option>

<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"';?>>Southwest</option>

<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"';?>>Midwest</option>

<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"';?>>Northeast</option>

<option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"';?>>Southeast</option>

</select>
<span><?php echo $regions_err ;?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
<span><?php echo $comments_err ;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"' ;?>>Yes</li>
</ul>
<span><?php echo $privacy_err ;?></span>

<input type="submit" value="Send it!"> 

<p><a href="">Reset</a></p>
</fieldset>
</form>
