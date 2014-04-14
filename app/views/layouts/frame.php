<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>天若有琼</title>
    <meta http-equiv="content-type" content="application/xhtml;charset=UTF-8" />
    <?php echo HTML::style('/assets/css/screen.css');?>
</head>

<body>
    <a name="top"></a>
    <!--header -->
        <?php echo View::make('layouts.header');?>
    <!--/header-->

    <!-- content-outer -->
    <div id="content-wrap" class="clear" >
        <!-- content -->
        <div id="content">
            <?php echo View::make('layouts.content')->with('content' , $content) ;?>
        </div>
        <!-- content -->
    </div>
    <!-- /content-out -->

    <!-- footer-bottom -->
    <?php echo View::make('layouts.footer');?>
    <!-- /footer-bottom-->
</body>
</html>

