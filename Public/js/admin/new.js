//上传文件按钮
	$(function(){
				
		$("#routeimg").parents(".uploader").find(".filename").val("请选择景点图片文件...");

		$("#routeimg").change(function(){
			$(this).parents(".uploader").find(".filename").val($(this).val());
		});
				
	});

	$(function(){
				
		$("#liveimg").parents(".uploader").find(".filename").val("请选择居住图片文件...");

		$("#liveimg").change(function(){
			$(this).parents(".uploader").find(".filename").val($(this).val());
		});
				
	});

	$(function(){
				
		$(".dayimg").parents(".uploader").find(".filename").val("请选择行程图片文件...");

		$(".dayimg").change(function(){
			$(this).parents(".uploader").find(".filename").val($(this).val());
		});
				
	});


function adddays(){
	$("#days").text(" ");
	$count=parseInt($("#daynumber").val());


	for (var i = 1; i <= $count; i++) {
		$oneday=$("<div class='col-md-12 oneday'></div>");
		$("#days").append($oneday);

		$h4s=$("<h4 class='col-md-1'>第"+i+"天</h4>");
		$oneday.append($h4s);

		$onform1=$("<div class='col-md-12 oneform'></div>");
		$oneday.append($onform1);

		$label1=$("<label class='col-md-2'>行程图片:</label>");
		$onform1.append($label1);

		$frontpage=$("<div class='frontpage'></div>");
		$onform1.append($frontpage);

		$uploader=$("<div class='uploader white'></div>");
		$frontpage.append($uploader);
		
		$filename=$("<input type='text' class='filename' readonly/>");
		$button=$("<input type='button' name='file' class='button' value='上传...'/>");
		$travelimg=$("<input type='file' class='dayimg' size='30' name='routeimg[]' required />")
		$uploader.append($filename);
		$uploader.append($button);
		$uploader.append($travelimg);

		$oneform2=$("<div class='col-md-12 oneform'></div>");
		$oneday.append($oneform2);

		$label2=$("<label class='col-md-2'>行程介绍:</label>");
		$textarea1=$("<textarea rows='5' class='form-control' name='daydesc_"+i+"' ng-model='data.daydesc_"+i+"' required></textarea>")
		$oneform2.append($label2);
		$oneform2.append($textarea1);



	}
	
	
	$(".dayimg").parents(".uploader").find(".filename").val("请选择行程图片文件...");

		$(".dayimg").change(function(){
			$(this).parents(".uploader").find(".filename").val($(this).val());
		});


}