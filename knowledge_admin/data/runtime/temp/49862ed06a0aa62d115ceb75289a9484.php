<?php /*a:2:{s:101:"D:\My_project\wanyue_education_web_local\education_web/themes/admin_simpleboot3/admin\users\edit.html";i:1603507940;s:98:"D:\My_project\wanyue_education_web_local\education_web/themes/admin_simpleboot3/public\header.html";i:1602491837;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo app('request')->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container:'body',
                html:true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li ><a href="<?php echo url('users/index',['type'=>$data['type']]); ?>">列表</a></li>
			<li class="active"><a ><?php echo lang('EDIT'); ?></a></li>
		</ul>
		<form method="post" class="form-horizontal js-ajax-form margin-top-20" action="<?php echo url('users/editPost'); ?>">
            <div class="form-group">
				<label for="input-user_login" class="col-sm-2 control-label"><span class="form-required">*</span>用户名</label>
				<div class="col-md-6 col-sm-10" style="padding-top:7px;">
					<?php echo $data['user_login']; ?>
				</div>
			</div>
            
            <div class="form-group">
				<label for="input-user_pass" class="col-sm-2 control-label"><span class="form-required">*</span>密码</label>
				<div class="col-md-6 col-sm-10">
					<input type="password" class="form-control" id="input-user_pass" name="user_pass" value="" > 不修改留空  6-12位字母数字组合
				</div>
			</div>
            
            <div class="form-group">
				<label for="input-user_nickname" class="col-sm-2 control-label"><span class="form-required">*</span>昵称</label>
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" id="input-user_nickname" name="user_nickname" value="<?php echo $data['user_nickname']; ?>">
				</div>
			</div>            
            
            <div class="form-group">
				<label for="input-user_login" class="col-sm-2 control-label"><span class="form-required">*</span>头像</label>
				<div class="col-md-6 col-sm-10">
					<input type="hidden" name="avatar" id="thumbnail" value="<?php echo $data['avatar']; ?>">
                    <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                        <?php if(empty($data['avatar'])): ?>
                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                 id="thumbnail-preview"
                                 style="cursor: pointer;max-width:100px;max-height:100px;"/>
                        <?php else: ?>
                        <img src="<?php echo cmf_get_image_preview_url($data['avatar']); ?>"
                             id="thumbnail-preview"
                             style="cursor: pointer;max-width:100px;max-height:100px;"/>
                        <?php endif; ?>
                    </a>
                    <input type="button" class="btn btn-sm btn-cancel-thumbnail" value="取消图片"> 建议尺寸： 600 X 600
				</div>
			</div>

            <div class="form-group" id="">
				<label for="input-avatar_thumb" class="col-sm-2 control-label"><span class="form-required">*</span>头像小图</label>
				<div class="col-md-6 col-sm-10">
                    <input type="hidden" name="avatar_thumb" id="thumbnail2" value="<?php echo $data['avatar_thumb']; ?>">
                    <a href="javascript:uploadOneImage('图片上传','#thumbnail2');">
                        <?php if(empty($data['avatar_thumb'])): ?>
                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                 id="thumbnail2-preview"
                                 style="cursor: pointer;max-width:100px;max-height:100px;"/>
                        <?php else: ?>
                        <img src="<?php echo cmf_get_image_preview_url($data['avatar_thumb']); ?>"
                             id="thumbnail2-preview"
                             style="cursor: pointer;max-width:100px;max-height:100px;"/>
                        <?php endif; ?>
                    </a>
                    <input type="button" class="btn btn-sm btn-cancel-thumbnail2" value="取消图片"> 分享用 建议尺寸： 100 X 100  必须小于 200 X 200
				</div>
			</div>
            
           <div class="form-group">
                <label for="input-maintain_switch" class="col-sm-2 control-label">性别</label>
                <div class="col-md-6 col-sm-10">
                    <select class="form-control" name="sex">
                        <option value="1">男</option>
                        <option value="2" <?php if($data['sex'] == '2'): ?>selected<?php endif; ?>>女</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
				<label for="input-mobile" class="col-sm-2 control-label"><span class="form-required">*</span>手机号</label>
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" id="input-mobile" name="mobile" value="<?php echo $data['mobile']; ?>">
				</div>
			</div> 
            
            <?php if($data['type'] == 1): ?>
            <div class="form-group">
				<label for="input-school" class="col-sm-2 control-label">学校</label>
				<div class="col-md-6 col-sm-10">
					<textarea class="form-control" id="input-school" name="school" ><?php echo $data['school']; ?></textarea>
				</div>
			</div>
            
            <div class="form-group">
				<label for="input-experience" class="col-sm-2 control-label">教育经历</label>
				<div class="col-md-6 col-sm-10">
					<textarea class="form-control" id="input-experience" name="experience" ><?php echo $data['experience']; ?></textarea>
				</div>
			</div>
            
            <div class="form-group">
				<label for="input-feature" class="col-sm-2 control-label">教育特点</label>
				<div class="col-md-6 col-sm-10">
					<textarea class="form-control" id="input-feature" name="feature" ><?php echo $data['feature']; ?></textarea>
				</div>
			</div>
            <?php endif; ?>

            <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
					<button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('EDIT'); ?></button>
					<a class="btn btn-default" href="javascript:history.back(-1);"><?php echo lang('BACK'); ?></a>
				</div>
			</div>

		</form>
	</div>
	<script src="/static/js/admin.js"></script>
    <script type="text/javascript">
        (function(){
            $('.btn-cancel-thumbnail').click(function () {
                $('#thumbnail-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
                $('#thumbnail').val('');
            });
            
            $('.btn-cancel-thumbnail2').click(function () {
                $('#thumbnail2-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
                $('#thumbnail2').val('');
            });
        })()

    </script>
</body>
</html>