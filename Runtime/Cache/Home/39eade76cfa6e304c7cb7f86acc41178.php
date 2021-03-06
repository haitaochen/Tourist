<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="/tourist/Public/css/bootstrap.min.css" rel="stylesheet">
	<script src="/tourist/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/tourist/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/tourist/Public/css/select/index.css">
</head>
<body alt="<?php echo ($routeid); ?>">
	
	<header>
		<ul>
			<?php if(($_SESSION['username'] == NULL)): ?><a data-toggle="modal" data-target="#myModal"><li class="navtitle">登陆</li>
            <?php else: ?>
                <form action="<?php echo U('Home/Index/Sessionuse','','');?>" id="sessionuse">
                    <a onclick="change()"><li class="navtitle"><?php echo ($_SESSION['username']); ?></li></a>
                </form><?php endif; ?>
			</a>
			<a href="#"><li class="navtitle">
				旅游路线
				<ul class="secnav">
					<li>热门游</li>
					<li>周边游</li>
					<li>国内游</li>
					<li>港澳台游</li>
					<li>日韩游</li>
					<li>欧美游</li>
					<li>边境游</li>
					<li>澳新非游</li>
				</ul>
			</li>
			</a>
			<a href="<?php echo U('Home/Index/index','','');?>"><li class="navtitle">主页</li></a>
		</ul>
	</header>

	<!-- 模态框（Modal） -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
               aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog" style="width:300px;">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                           aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                           用户登录
                        </h4>
                     </div>
                     <form action="#" method="post">
                       <div class="modal-body">

                          <div class="form-group">
                            <input id="user" name="user"  class="form-control" type="text" placeholder="请输入用户名"> 
                          </div>
                          <div class="form-group">
                            <input id="pasd" name="pasd"  class="form-control" type="password" placeholder="请输入密码"> 
                          </div>
                       </div>
                       <div class="modal-footer">
                          <a class="btn btn-default" target="_blank" 
                              href="<?php echo U('Home/User/index','','');?>">
                             注册
                          </a>
                          <input type="button" id="login"  class="btn btn-primary" value="登陆">
                       </div>
                      </form>
                  </div><!-- /.modal-content -->
               </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

	<section ng-app="myapp" ng-controller="contentController" id="container" class="col-md-10 col-md-offset-1">
		<div id="desc" class="col-md-12">
			<img src="/tourist/Public/routepic/{{routes.image}}" class="col-md-5">
			<div class="col-md-7 desc_msg">
				<h3>{{routes.name}}</h3>
				<p>
					{{routes.traveldesc}}
				</p>
			</div>
		</div>
		<div id="content" class="col-md-12">
			<div id="content-top" class="col-md-12">
				<div class="content-title">
					行程信息
				</div>
				<div class="content-notitle"></div>
			</div>
			<div id="contentmsg" class="col-md-12">
				<h4>单人价格：￥{{routes.price}}/人</h4>
				<h4>交通：{{routes.traffic}}</h4>
				<h4>行程天数：{{routes.daynumber}}天</h4>
				<h4>行程日期：{{routes.daytimes}}</h4>
				<div class="oneday col-md-12">
					<img src="/tourist/Public/images/welfare/pic1.jpg">
					<div class="onedaymsg">
						<h4>第一天</h4>
						<p>西藏以其雄伟壮观、神奇瑰丽的自然风光闻名。它地域辽阔，地貌壮观、资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。</p>
					</div>
				</div>
				<div class="oneday col-md-12">
					<img src="/tourist/Public/images/welfare/pic1.jpg">
					<div class="onedaymsg">
						<h4>第二天</h4>
						<p>西藏以其雄伟壮观、神奇瑰丽的自然风光闻名。它地域辽阔，地貌壮观、资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。</p>
					</div>
				</div>
				<div class="oneday col-md-12">
					<img src="/tourist/Public/images/welfare/pic1.jpg">
					<div class="onedaymsg">
						<h4>第三天</h4>
						<p>西藏以其雄伟壮观、神奇瑰丽的自然风光闻名。它地域辽阔，地貌壮观、资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。自古以来，这片土地上的人们创造了丰富灿烂的民族文化。资源丰富。</p>
					</div>
				</div>
				
				<h4>食宿条件</h4>
				<div class="oneday col-md-12">
					<img src="/tourist/Public/routepic/{{routes.liveimg}}">
					<div class="onedaymsg">
						<h4>住宿：{{routes.livedesc}}</h4>
						<h4>餐食：{{routes.fooddesc}}</h4>
					</div>
				</div>


				<a href="<?php echo U('Home/Select/pay','','');?>"><button class="btn btn-success">我要参加</button></a>
			</div>

		</div>
	</section>

<script src="/tourist/Public/js/angular.min.js"></script>
<script>
	var app=angular.module("myapp",[]);

	//contentcontroller
	app.controller("contentController",['$scope','$http',function($scope,$http){

		$scope.id=$("body").attr("alt");
	
		$http.get("<?php echo U('Home/Select/getroutemsg','','');?>",
			{
				params:{
					routeid : $scope.id
				}
				
			}

			).success(function(data){

				
				 data=data.split('"');
				 allroutes=eval(data[1]);
				 $scope.routes=allroutes[0];
				 

				// $scope.x=1
				
		});

		
			

	}])

</script>


<script type="text/javascript">
   function change(){
      if(confirm("您确定退出登陆状态吗？")){
        document.getElementById("sessionuse").submit();
      }
   }
</script>

<script type="text/javascript">
$(function(){
  $("#login").click(function(){
      var user = $("#user").val();
      var password =$("#pasd").val();

      $.post("<?php echo U('Home/Index/login','','');?>",{
          user : user,
          pasd : password
      },function(data){
        if (data==1) {
           window.location.reload(true);
            
        }
        else if(data==2){
          alert("用户名或密码错误");
        }
        else
        {
          alert("系统异常，请稍后再试");
        }
      })
  })
})
</script>
	
</body>
</html>