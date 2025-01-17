<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="REFRESH" content="3; url=<?=$page_transfer?>" />


<title>::  Administration ::</title>

<style type="text/css">
    
html,body{
       width: 100%;
       height: 100%;
}

 body {
     background: #0d161f!important;
}

#circle {
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%,-50%);
    width: 150px;
    height: 150px;  
}

.loader {
    width: calc(100% - 0px);
    height: calc(100% - 0px);
    border: 8px solid #162534;
    border-top: 8px solid #09f;
    border-radius: 50%;
    animation: rotate 5s linear infinite;
}

@keyframes rotate {
100% {transform: rotate(360deg);}
} 

#noidung
{
    width: 50%;
    float: left;
    text-align: center;
    position: absolute;
    top: 45%;
    right: 20%;
}
#noidung h2
{
    font-size: 30px;
    color: #f39c12 ;
    font-weight: 700;
    border-bottom: 1px solid #fff;
    padding-bottom: 20px;
}
#noidung p
{
    color: #fff;
    font-size: 18px;
}@media only screen and (max-width: 768px){

    #noidung 
    {
        width: 100%;
        right: 0;
        padding: 0 20px;
        top: 10%;
    }
    #circle
    {
        left: 50%;
    }
}
</style>

</head>

<body>    
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <div id='noidung'> 

        <h2><?=$showtext?></h2>

        <hr size='1' />

        <p>( <a href="<?=$page_transfer?>">Click vào đây nếu bạn không muốn đợi lâu </a> )</p>

    </div>
<div id="circle">
  <div class="loader">
    <div class="loader">
        <div class="loader">
           <div class="loader">

           </div>
        </div>
    </div>
  </div>
</div> 
</body>
</html>