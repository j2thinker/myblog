<div class="post">
    <div class="right">
        <h4><?php echo $detail->title ;?></h4>
        <p class="post-info">事发时间 :<?php echo $detail->happentime ;?></p>
        <?php echo $detail->joke ;?>
        <p>
            <code><span class="redcolor">段子感言：</span><?php echo $detail->conclusion ;?></code>
        </p>
    </div>

    <div class="left">
        <p class="dateinfo"><?php echo date('M' , strtotime($detail->created_at));?><span><?php echo date('d' , strtotime($detail->created_at));?></span></p>
        <div class="post-meta">
            <h4>Post Info</h4>
            <ul>
                <li class="user"><?php echo $author->name ;?></li>
                <li class="time"><?php echo date("H:i:s",strtotime($detail->created_at));?></li>
                <li class="comment">10 Comments</li>
                <li class="permalink">赞</li>
            </ul>
        </div>

    </div><!--End of left-->
</div><!--End of Post-->
<h4>发表评论</h4>
<form method="post" action="/guestbook/message">
        <p>
        <label for="message">您的评论：</label>
        <br />
        <textarea name="message" rows="8" cols="86"><?php echo Input::old('message');?></textarea>
        <br /><span class="redcolor"><?php echo $errors->first('nologin') . $errors->first('message');?></span>
        </p>
        <p class="no-border">
        <input class="button" type="submit" value=" Submit " />&nbsp;&nbsp;
        <input class="button" type="reset" value=" Reset " />
        </p>
</form>
<p>
<code>
<span class="redcolor">友情提示：</span>您需要登录后才可发表留言，点击这里<a href="<?php echo URL::to('user/login')?>">登录</a>或<a href="<?php echo URL::to('user/signup');?>">注册</a>
</code>
</p>

