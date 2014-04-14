<h4>User Message List</h4>
<ul class="archive">
    <?php foreach($message_list as $message):?>
    <li>
        <div class="post-title">
            <?php echo $message->message ;?>
        </div>
        <div class="post-detail">
            post on <?php echo $message->created_at. " by " . $message->name  ;?>
        </div>
    </li>
    <?php endforeach;?>
</ul>
<span style="float:right;"><?php echo $message_list->links();?></span>
<br />
<p>
<code>
    <span class="redcolor">友情提示：</span>您需要登录后才可发表留言，点击这里<a href="<?php echo URL::to('user/login')?>">登录</a>或<a href="<?php echo URL::to('user/signup');?>">注册</a>
</code>
</p>
<h4>Leave A Message</h4>
<form method="post" action="/guestbook/message">
<p>
    <label for="message">您的留言：</label>
    <br />
    <textarea name="message" rows="8" cols="86"><?php echo Input::old('message');?></textarea>
    <br /><span class="redcolor"><?php echo $errors->first('nologin') . $errors->first('message');?></span>
</p>
<p class="no-border">
    <input class="button" type="submit" value=" Submit " />&nbsp;&nbsp;
    <input class="button" type="reset" value=" Reset " />
</p>
</form>
