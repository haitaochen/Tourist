//angular

var app=angular.module("myapp",[]);

app.controller("contentController",['$scope',function($scope){

}])




//jquery


$(function(){
	$("#form1").submit(function(){
		alert("注册信息已提交，跳转到主页则为注册成功");
		return true;
	})
})

