<div id="header-wrap">
    <div id="header">
        <div  id="nav">
            <ul>
                <?php foreach(Config::get('navigator') as $link => $nav_name):?>
                    <?php if(Request::path() == $link):?>
                        <li id="current"><?php echo $nav_name ;?></li>
                    <?php else:?>
                        <li><a href="<?php echo URL::to($link);?>"><?php echo $nav_name ;?></a></li>
                    <?php endif;?>
                <?php endforeach ;?>
            </ul>
        </div>
        <div id="nav_right">
            <div class="nav_login">
                您好 &nbsp;
                <?php if(Auth::check()):?>
                    <?php echo Auth::user()->name ;?> &nbsp;&nbsp;<a href="<?php echo URL::to('user/logout');?>">退出</a>
                <?php else:?>
                    请 <a href="<?php echo URL::to('user/login');?>">登录</a>
                <?php endif;?>
            </div> 
            <div class="nav_rss"><a id="rss"></a></div>
        </div>
    </div>
</div>
