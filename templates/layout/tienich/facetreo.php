

<style type="text/css">
	

	#facetreo {
    width: 300px;
    padding-left: 0px;
    height: auto;
    min-height: 350px;
    position: fixed;
    right: -300px;
    top: 20%;
    z-index: 111;
    transition: 0.7s;
    -moz-transition: 0.7s;
    -ms-transition: 0.7s;
    -o-transition: 0.7s;
    -webkit-transition: 0.7s;
}
#facetreo:hover{right:0px}
#hinhcotreo {
    background: url(img/facetreo.png)no-repeat top center;
    /* -webkit-transform: rotate(-90deg); */
    /* transform: rotate(-90deg); */
    text-align: center;
    margin: 0px;
    position: absolute;
    width: 105px;
    /* padding: 10px 20px; */
    text-transform: uppercase;
    height: 132px;
    left: -100px;
    z-index: 1;
    top: -25px;
}
#noidungface{width:300px;height:auto;float:right}
</style>
<div id="facetreo">
	<div id="hinhcotreo"> </div>
	
	<div id="noidungface"><?php include_once _template."layout/tienich/facebook/fanpage1.php"; ?></div>
</div>