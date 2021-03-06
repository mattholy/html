<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>文件打印</title>
    <style>
	input::-webkit-outer-spin-button,

	input::-webkit-inner-spin-button {

	    -webkit-appearance: none !important;

	}
    body {
        background: #eee;
        font: 12px 'Lucida sans', Arial, Helvetica;
        color: #333;
        text-align: center;
    }
    
    a {
        color: #2A679F;
    }
    .form-wrapper {
        width: 720px;
        padding: 8px;
        margin: 100px auto;
        overflow: hidden;
        border-width: 1px;
        border-style: solid;
        border-color: #dedede #bababa #aaa #bababa;
        -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;    
        background-color: #f6f6f6;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8)); 
        background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: linear-gradient(top, #f6f6f6, #eae8e8);
    }
    
    .form-wrapper #search {
        width: 300px;
        height: 20px;
        padding: 10px 5px;
        margin: 0px 5px;
        float: left;    
        font: bold 16px '微软雅黑', '黑体', '宋体';
        border: 1px solid #ccc;
        -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;      
    }

    .form-wrapper #copies {
        width: 37px;
        height: 20px;
        padding: 10px 5px;
	     margin: 0px 0px;
        float: left;    
        font: bold 30px '微软雅黑', '黑体', '宋体';
        border: 1px solid #ccc;
        -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;      
    }

   .form-wrapper #printernamesel {
        width: 250px;
        height: 20px;
        padding: 10px 5px;
	     margin: 0px 0px;
        float: left;    
        font: bold 30px '微软雅黑', '黑体', '宋体';
        border: 1px solid #ccc;
        -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;      
    }

	 .pick {
        float: left;
        padding: 5px 5px;
	     margin: 0px 5px; 
        height: 20px;   
        font: bold 24px '微软雅黑', '黑体', '宋体';    
    }
    
    .pick1 {
        float: left;
        padding: 5px 5px;
	     margin: 0px 5px; 
        height: 20px;   
        font: bold 24px '微软雅黑', '黑体', '宋体';   
        left:0px; 
    }

    .form-wrapper #search:focus {
        outline: 0; 
        border-color: #aaa;
        -moz-box-shadow: 0 1px 1px #bbb inset;
        -webkit-box-shadow: 0 1px 1px #bbb inset;
        box-shadow: 0 1px 1px #bbb inset;  
    }
    
    .form-wrapper #search::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
    }
    
    .form-wrapper #search:-moz-placeholder {
        color: #999;
        font-weight: normal;
    }
    
    .form-wrapper #search:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
    }    
    
    .form-wrapper #submit {
        float: right;    
        border: 1px solid #00748f;
        height: 42px;
        width: 100px;
        padding: 0;
        cursor: pointer;
        font: bold 15px 微软雅黑, 黑体;
        color: #fafafa;
        text-transform: uppercase;    
        background-color: #0483a0;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
        background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
        background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
        background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
        background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
        background-image: linear-gradient(top, #31b2c3, #0483a0);
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;      
        text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
        -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff;
        -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff;
    }
      
    .form-wrapper #submit:hover,
    .form-wrapper #submit:focus {		
        background-color: #31b2c3;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
        background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
        background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
        background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
        background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
        background-image: linear-gradient(top, #0483a0, #31b2c3);
    }	
      
    .form-wrapper #submit:active {
        outline: 0;    
        -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
        -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;    
    }
      
    .form-wrapper #submit::-moz-focus-inner {
        border: 0;
    }
    .form-wrapper1 {        width: 450px;
        padding: 8px;
        margin: 100px auto;
        overflow: hidden;
        border-width: 1px;
        border-style: solid;
        border-color: #dedede #bababa #aaa #bababa;
        -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;    
        background-color: #f6f6f6;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8)); 
        background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: linear-gradient(top, #f6f6f6, #eae8e8);
}
    .form-wrapper2 {
        width: 450px;
        padding: 8px;
        margin: 100px auto;
        overflow: hidden;
        border-width: 1px;
        border-style: solid;
        border-color: #dedede #bababa #aaa #bababa;
        -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;    
        background-color: #f6f6f6;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8)); 
        background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
        background-image: linear-gradient(top, #f6f6f6, #eae8e8);
}
.logo_div{
	width: 300px;
	height: 300px;
	top: 10px;
	margin: auto;
	background-image: url(img/printlogo.png);
   background-size:300px 300px;

   -moz-background-size:300px 300px;
	padding-top: 0px;
	}
.up_box{
	padding-top: 0px;
	margin-top: -50px;
	}
    </style>
</head>

<body>
<br /><br /><br /><div class="logo_div"></div>
  <div class="up_box">
  <form class="form-wrapper" action="upt.php" method="post" enctype="multipart/form-data">
    <div class="pick">打印机:</div>
    <input type="text" id="printernamesel" name="printername" list="printernamesel1" required autocomplete="off" value=""/>
    <datalist id="printernamesel1">
		<option value="">-</option>
		<option value="903">903检测部打印机</option>
	 </datalist>
    <div class="pick">打印份数:</div>
    <input type="number" name="copies" id="copies" value="1" min="1" max="20" autocomplete="off" required>
    <div class="pick1">打印文件:</div>	 
    <input type="file" name="files" id="search">
    <input type="submit" id="submit" value="打印">
  </form></div>
<script src="js/jquery.min.js"></script>
</body>
</html>
