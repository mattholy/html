<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>打印结果</title>
<div id="search"><?php
@$fileInfo=$_FILES['files'];
@$printcopies=$_POST['copies'];
@$printername=$_POST['printername'];
$filename=$fileInfo['name'];
$type=$fileInfo['type'];
$tmp_name=$fileInfo['tmp_name'];
$size=$fileInfo['size'];
$error=$fileInfo['error'];
$maxSize=8388608;//文件大小限制(1024*1024*xMB)
$allowExt=array('pdf','txt');//文件扩展名限制
$printfile1 = 'lp -d ';
$printfile2 = ' /var/www/html/selfprint/';

//检查是否有选择文件
if ($error==UPLOAD_ERR_OK){
  //上传限制
        if ($fileInfo['size']>$maxSize) {
            exit('上传文件大小超过设定值。');
        }
        $ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
        if (!in_array($ext,$allowExt)) {
            exit('对不起，仅能打印pdf和txt文件。');
        }
        //检查是否通过HTTP POS方式上传
        if (!is_uploaded_file($fileInfo['tmp_name'])) {
            exit('上传错误！请使用HTTP POS方式上传文件。');
        }
        
    //输出提示
    if (move_uploaded_file($tmp_name, "/var/www/html/selfprint/".$filename)) {
        exec($printfile1.$printername.' -n '.$printcopies.$printfile2.$filename,$qwer,$statuscode);
        if ($statuscode == 0) {
        echo $filename.'成功打印到'.$printername.'！';
        }else{
        echo $filename.'打印失败，请稍候重试！';
        }
    }else{
        echo $filename.'上传失败！';          
    } 
  
}else{    
    //输出错误信息
    switch ($error){
        case 1:
            echo '文件上传失败，文件超过服务器设定大小！解决方法:更改PHP.ini设置中的dpload_max_filesize';
            break;
            
            case 2:
                echo '文件上传失败，文件超过服务器表设定！解决方法：更改PHP.ini设置中的MAX_FILE_SIZE';
                break;
                
                case 3:
                    echo '文件部分上传失败，请再试一次！';
                    break;
                    
                    case 4:
                        echo '没有选择文件！';
                        break;
                        
                        case 6:
                            echo '没有找到上传目录！';
                            break;
                        
                            case 7:
                            case 8:
                                echo '系统错误！';
                                break;
                    
    }
}
?>
</div>
<script src="js/jquery.min.js"></script>
</body>
</html>
