/*
打印相关js
*/

function filepick() {
	$("#files").click();
}

function getFileName(o) {
	var pos = o.lastIndexOf("\\");
	return o.substring(pos + 1);
}

function fileback() {
	$("#fileshow").val(getFileName($("#files").val()));
}

//定向到打印结果
function qwer() {
	$(window).attr('location', '#printpage1');
}

//同步打印结果
var printlast = $("#printresult");
$(printlast).load(function () {
	$("#jg").val($("#printresult").contents().find("#search").html());
});

function printready() {
	$("#printform").click();
}


/*
文件列表相关js
*/

//获取文件
function getfilelist() {
	$("#contentarea").html("");
	$("#filearea").submit();

}

//同步文件列表
var updatelist = $("#filelistarea");
$(updatelist).load(function () {
	$("#filelistcontent").html($("#filelistarea").contents().find("#contentlist").html());
});
