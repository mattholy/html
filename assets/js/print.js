function filepick(){
	$("#files").click();
}

function getFileName(o){
    var pos=o.lastIndexOf("\\");
    return o.substring(pos+1);  
}

function fileback(){
	$("#fileshow").val(getFileName($("#files").val()));
}

function qwer(){
	$(window).attr('location','#printpage1');
}

var fn = function(){
	$("#jg").val($("#printresult").contents().find("#search").html())
}
     
setInterval(fn,1000);

function printready(){
	$("#printform").click()
}