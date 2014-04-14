<div class="post-bottom-section">
   <h4>Sign Up</h4>
   <div class="right">
       <form method="post" >
            <p>
                <label for="username">UserName</label>&nbsp;&nbsp;<span class="redcolor">*</span><br />
                <input type="text" name="username" class="input240" value="<?php echo Input::old('username');?>" />
                <span class="redcolor"><?php echo $errors->first('username');?></span>
            </p>
            
            <p>
                <label for="email">Email</label>&nbsp;&nbsp;<span class="redcolor">*</span><br />
                <input type="text" name="email" class="input240" value="<?php echo Input::old('email');?>"/>
                <span class="redcolor"><?php echo $errors->first('email');?><?php echo $errors->first('existuser');?></span>
            </p>
            
            <p>
                <label for="userpass">Password</label>&nbsp;&nbsp;<span class="redcolor">*</span><br />
                <input type="password" name="userpass_comfirmation" class="input240" />
                <span class="redcolor"><?php echo $errors->first('userpass_confirmation');?></span>
            </p>
            
            <p>
                <label for="reuserpass">Password Confirm</label>&nbsp;&nbsp;<span class="redcolor">*</span><br />
                <input type="password" name="userpass" class="input240" />
                <span class="redcolor"> <?php echo $errors->first('userpass');?></span>
            </p>

            <p class="no-border">&nbsp;&nbsp;
                <input class="button" type="submit" value=" Sign Up " />&nbsp;&nbsp;
                <input class="button" type="reset"  value="  Reset  " />
            </p>
        </form>
    </div>
</div>
