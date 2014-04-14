<h4>Login Website</h4>
<p class="redcolor"><?php echo $errors->first('invaliduser');?></p>
<form method="post" >
    <p>
    <label>UserName</label><br />
    <input type="text" name="username" class="input240" value="<?php echo Input::old('username');?>" />
    <?php echo $errors->first('username');?>
    </p>

    <p>
    <label>UserPass</label><br />
    <input type="password" name="userpass" class="input240"/>
    <?php echo $errors->first('userpass');?>
    </p>
    <p class="no-border">&nbsp;&nbsp;
        <input class="button" type="submit" value="  Login  " />&nbsp;&nbsp;
        <input class="button" type="reset"  value="  Reset  " />
    </p>
</form>
<p>
<code>
    <span class="redcolor">友情提示：</span>由于小站机器配置有限，如需评论和留言，请登录后再进行操作，谢谢配合
</code>
</p>
