<h4>Funny List</h4>
<ul class="archive">
<?php foreach($funny_list as $funny):?>
<li>
    <div class="post-title">
        <a href="<?php echo '/funny/detail?fid='.$funny->id ;?>"><?php echo $funny->title ;?></a>
        </div>
        <div class="post-detail">
        post on <?php echo $funny->created_at. " by " . $funny->name  ;?>
        </div>
        </li>
        <?php endforeach;?>
    </ul>
<span style="float:right;"><?php echo $funny_list->links();?></span>
<br />
<form method="post" action="/funny/add" >
   <p> 
   <label>标题</label><br />
   <input type="text" name="title" class="input240" value="<?php echo Input::old('title');?>" /> <span class="redcolor">* <?php echo $errors->first('title');?></span>
   </p>
    
    <p> 
    <label>时间</label><br />
    <input type="text" name="happentime" id="happentime" class="input240" value="<?php echo Input::old('happentime');?>" />
    <span class="redcolor"> <?php echo $errors->first('happentime');?></span>
    </p> 
    <p> 
    <label>段子</label><br />
    <textarea name="funny" id="funny" cols="60" rows="20"><?php echo Input::old('funny');?></textarea> <span class="redcolor">* <?php echo $errors->first('funny');?></span>
    </p>
 
    <p> 
    <label>感言</label><br />
    <textarea type="text" name="conclusion" rows="3" cols="75" ><?php echo Input::old('conclusion');?></textarea><br /> 
    <span class="redcolor">* <?php echo $errors->first('conclusion');?></span>
    </p>

    <p class="no-border">&nbsp;&nbsp;
        <input class="button" type="submit" value="  发表  " />&nbsp;&nbsp;
        <input class="button" type="reset"  value="  重置  " />
    </p>
</form>
<p>
<code>
    <span class="redcolor">友情提示：</span>该板块添加目前仅开放给部分人，如有添加需求请联系博主，谢谢
</code>
</p>
<?php echo HTML::style('assets/kindeditor/themes/default/default.css'); ?>
<?php echo HTML::style('assets/jqueryui/css/redmond/jquery-ui-1.10.4.custom.css'); ?>
<?php echo HTML::script('assets/kindeditor/kindeditor-min.js'); ?>
<?php echo HTML::script('assets/kindeditor/lang/zh_CN.js'); ?>
<?php echo HTML::script('assets/js/jquery.min.js'); ?>
<?php echo HTML::script('assets/jqueryui/js/jquery-ui-1.10.4.custom.js'); ?>
<script type="text/javascript">
var editor;
$(function (){
    $("#happentime").datepicker({ dateFormat: "yy-mm-dd" });
});
KindEditor.ready(function(K) {
                editor = K.create('textarea[name="funny"]', {
                        uploadJson: '/upload/image',
                        allowFileManager:true,
                        resizeType : 0,
                        allowPreviewEmoticons : true,
                        allowImageRemote:false ,
                        items : [
                        'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                        'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                        'insertunorderedlist', '|', 'emoticons', 'image','code','link']
                        });
                });
</script>
