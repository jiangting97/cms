<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta rel="icon" href="">

    <title>内容管理平台</title>
    <link rel="stylesheet" href="/cms/Public/css/bootstrap.min.css">
    <style>
        .aa {
            margin-top:50px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->


</head>
<body>


<div class="aa">

</div>
<div class="container">
    <form class="form-horizontal" action="<?php echo U('Login/loginVolidate');?>">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </form>

</div>


</body>
</html>