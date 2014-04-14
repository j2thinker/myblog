<div id="sidebar">
    <div class="about-me">
        <h3>关于博主</h3>
        <p>
            <a href="#"><?php echo HTML::image('/assets/images/gravatar.jpg','',array('class'=>'float-left'));?></a>
        </p>
        <p>
            <b>ZaiFeng</b>
            <br />码农一枚
            <br />就职于360导航事业部
            <br /><a href="<?php echo URL::to('about/me');?>" >更多</a>
        </p>
    </div>

    <div class="sidemenu">
        <h3>分类</h3>
        <ul>
            <li><a href="#">PHP</a></li>
            <li><a href="##TemplateInfo">Linux</a></li>
            <li><a href="style.html">Nginx</a></li>
            <li><a href="blog.html">Mysql</a></li>
            <li><a href="archives.html">Laravel</a></li>
            <li><a href="#" title="Web Templates">Codeigniter</a></li>
        </ul>
    </div>

    <div class="sidemenu">
    <h3>友情链接</h3>
        <ul>
            <?php foreach($friend_link_list as $link):?>
            <li>
                <a href="<?php echo $link->link_url ;?>" title="<?php echo $link->link_url ;?>" target="_blank">
                    <?php echo $link->link_name ;?>
                </a><br />
                <span><?php echo $link->link_desc?></span>
            </li>
            <?php endforeach ;?> 
        </ul>
    </div>

    <div class="popular">
    <h3>站点功能</h3>
        <ul>
        <?php foreach($action_list as $action): ?>
        <li><a href="<?php echo $action->action_url;?>"><?php echo $action->action ;?></a></li>
        <?php endforeach ;?>
        </ul>
    </div>
</div>
