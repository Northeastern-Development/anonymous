<div id="form-messages"></div>


 <form  id="neu__ajax" method="POST" action="_scripts/php/mailer.php">

     <input type="hidden" name="token" value="<?php echo $token; ?>" />

     <p class="antispam">Leave this empty:
     <br /><input name="url" /></p>

     <p>What should our department <span class="mc__red">start,</span><span class="mc__red">stop</span> or <span class="mc__red">continue</span> doing?<br />

    <div>

     Please Choose One
     <select id="subject" name="subject" required >
       <option disabled="" selected="" value=""> --  -- </option>
       <option value="Keep">Keep</option>
       <option value="Change">Change</option>
       <option value="Start">Start</option>
       <option value="Stop">Stop</option>
     </select>

     <textarea required id="message" name="message" rows="10" cols="60" lines="20"></textarea></p>

     <input type="submit" name="send" value="Send">
    </div>


  </form>
