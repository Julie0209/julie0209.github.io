


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
	<meta charset="UTF-8">
	<title>討論區</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<style type="text/css">

        .bg {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -999;
       		}
        .bg img {
            min-height: 100%;
            min-width: 1000px;
            width: 100%;
        	}

        @media screen and (max-width: 1000px) {
            img.bg {
                left: 50%;
                margin-left: -500px;
            }
        }    


 #sitebody{
    
    padding: 0;
    margin: 0 auto;　
    text-align: center;

    }

#head{
    
    margin: 0 auto;
    width: 100%;
    height:800px;　
    text-align: 160px;
    line-height:200px; 

    }

#sidebar{
    
    background-color: #ffd382;
    width:100%;　
    height:500px;　
    text-align:left;　
    line-height:400px;
    font-size:20px;
    font-weight:bold;
    border-color:#cccc00;
    border-top-style: dotted;
    border-bottom-style: dotted; 
    
    }

#content{

    height:400px;　
    width: 100%;
    text-align:center;　
    line-height:400px;

    }

#footer{

    width: 100%;
    bottom: 0; 
    background-color:#FFD1A1; 
    padding:0.5px; 
    text-align:center;　
    line-height:80px; 
    position: fixed;
    font-size: 13px;

    }


#button{
 
 position: relative; z-index: 1;
    border: 2px solid #555555; 
    border-radius: 10px ; 
    background-color: #fff0d4; 
    padding-left: 40px;
    padding-right: 8px;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
    float: left;    
    margin-left: 50px: 

}



#pic{

	float: left;
	text-align: center;
	position: relative;
	z-index: 2;
	left: 40px;
	top: -10px;

}



a:link{
    
    color:#805300;
    text-decoration:none;
    font-family: Microsoft JhengHei;
}

a:visited{

    color:#ffac12;

}

a:hover {

    text-decoration:none;
    color:#ff1c1c;

}

a:active {

    text-decoration:none;
    color:#000000;

}


 .container{
  margin:auto;
  background-color:#f5f5f5;
  width:800px;
  padding-bottom: 20px;
 }
 .but{
  text-align:center;
  padding:20px 0;
 }
 .topping h3{
  font-family:微軟正黑體;
  text-align:center;
  padding:10px 0;
 }
 .form-group{
  font-family:微軟正黑體;
  font-size:16px;
 }

</style>



</head>
<body>


<div class="bg">
	<img src= "websitetry/objectpicture/pic0.jpg" id="bg-img" style= " padding:0px; " >
</div>


<div id="sitebody">

<div id="header" style="background-color:#bd7b00; font-family: chalkduster; font-size:60px; color:#ffffff; bottom:o; ">

	<div style="float: left; height: 230px;  padding:20px 0px 0px 20px; "> <img src="websitetry/word/圖片1.png" style="height: 220px;"> </div>

	<div style="float: left; height: 200px; width: 600px; text-align: center; "> <br><br>New treat ion</div>

	<div style="clear: both;"></div>


</div>

<div id="sidebar" style="text-align: center;">

<div style="float: left;"><a href="index.php"> <img src="websitetry/word/4.gif"></a> </div>

<br>
 
 
 <div id="pic"><img src="websitetry/word/2.gif" style="width: : 30px;"></div>
 <div id="button"><a href="rank.php" target="_blank">熱銷排行榜</a></div> 
 
 <div id="pic" style="top:-20px; left: 50px;"><img src="websitetry/word/5.gif"></div>
 <div id="button" ><a href="howto.php" target="_blank">如何選購與保存</a></div>
 
 <div id="pic" style="top:-15px; left: 50px;"><img src="websitetry/word/1.gif" style="width: 55px;"></div>
 <div id="button" ><a href="intro.php" target="_blank">食品標章介紹</a></div>
 
 <div id="pic"><img src="websitetry/word/3.gif" style="width: : 30px;"></div>
 <div id="button" ><a href="typeandintro.php" target="_blank">種類與介紹</a></div>
 
 <div id="pic" style="top:-2px; left: 45px;"><img src="websitetry/word/6.png"></div>
 <div id="button" ><a href="qa.php" target="_blank">保健食品Q&A</a></div>
 
 <div id="pic" style="top:-2px; left: 45px;"><img src="websitetry/word/6.png"></div>
 <div id="button" ><a href="talk.php" target="_blank">討論區</a></div>


<br><br>


 </div>


<div id="content"> 

<br><br><br>

<center>
    







 <div class="container">
 <div class="topping">
    <h3>新增留言</h3>
    </div>
    <form method="post" action="testing.php" class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-4 control-label">暱稱：</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="您的暱稱" name="name" id="name" />
            </div>
        </div>

        <div class="form-group">
          <label for="content" class="col-sm-4 control-label">留言內容：</label>
          <div class="col-sm-6">
              <textarea class="form-control" id="content" name="content" rows="5"></textarea>
          </div>
        </div>
        <div class="but">
            <input type="submit" name="button" id="but" value="送出" class="btn"/>
        </div>
    </form>
</div>
      
<p>&nbsp;</p>
<p>&nbsp;</p>





<?php

$sql = "SELECT * FROM `talk`";

$con=mysqli_connect("localhost","root","root","contact") or die('Error with MySQL connection');

mysqli_select_db($con,"contact") or  die("Unable to select database!"); 

mysqli_query($con,"SET NAMES utf8");

$result=mysqli_query($con,$sql);

$list=mysqli_fetch_assoc($result);


$data=mysqli_query($con,"select * from `talk` order by ID");



for($i=1 ; $i <= @mysqli_num_rows($data) ; $i++ ) { $rs= mysqli_fetch_assoc($data) ;

?>


<table style="border:3px #FFAC55 double ;padding:5px; font-size: 30px;" rules="all" cellpadding='5' >
<tr style=" background-color: #ffddaa;"><td width="5%">暱稱</td><td width="35%"> <?php echo @$rs[name];?> </td></tr>
<tr style=" background-color: #ffc8b4;"><td width="5%">留言內容</td><td width="35%"> <?php echo @$rs[content];?> </td></tr>
</table>
<br>

<?php } ?>


</center>

<br><br>





</div>

<div id="footer"> Copyright  ©  2019 Chung Shan Medical University.<br>進階程式語言Semester 2nd 第一組</div>

</div>


</body>
</html>