<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



	<!-- Logo Start -->

    <a href="index.php">

      <div class="logo-container">

        <h1>ADMIN</h1>

      </div>

    </a>

    <!-- Logo End -->    

	

    <!-- Sidebar -->

    <div class="responsive-menu">

      <a href="#" onclick="return false;"><i class="fa fa-bars"></i></a>

    </div>

    <!-- Sidebar End -->   



    <!-- Menu Start -->

    <div class="tocify-nav-container">

    <ul class="menu tocify-box">      

		

    

      

		 <li class="parent purple <?=($com=='product')?'active':''?>" >

        <a href="product" class="menu_click <?=($_SESSION['menu']['product']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-align-justify"></i></span>

          <span class="menu-text">SẢN PHẨM</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['product']==2)?' style="display: none;"':' style="display: block;"'?>>

		

          <li <?=($com=='product' && $act=='man_cat')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man_cat">Danh mục cấp 1</a></li>

    <li <?=($com=='product' && $act=='man_cat1')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man_cat1">Danh mục cấp 2</a></li>




<!-- 
 

       <li <?=($com=='product' && $act=='man_cat2')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man_cat2">Danh mục cấp 3</a></li> -->

 <!--           <li <?=($com=='product' && $act=='man_cat3')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man_cat3">Danh mục cấp 4</a></li>

                <li <?=($com=='product' && $act=='man_cat4')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man_cat4">Danh mục cấp 5</a></li> -->

      <li <?=($com=='product' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product&act=man">Sản phẩm</a></li>   

		 


			 		  

             

        <!--   <li <?=($com=='product1' && $act=='man_ptthanhtoan')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product1&act=man_ptthanhtoan">Phương thức thanh toán</a></li>  
		  

          <li <?=($com=='product1' && $act=='man_ptgiaonhan')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product1&act=man_ptgiaonhan">Phương thức vận chuyển</a></li> 

		  		
   <li <?=($com=='donhang')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=donhang&act=man">Đơn hàng</a></li> -->


 <!--      <li <?=($com=='khuyenmai' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=khuyenmai&act=man">Khuyến mãi</a></li>   

       <li <?=($com=='magiamgia' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=magiamgia&act=man">Mã giảm giá</a></li>    -->

 <!--     <li <?=($com=='tinnho' && $act=='man16')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=tinnho&act=man16">Kích thước</a></li>

       


 -->
         

    <!--

		  <li <?=($com=='product1' && $act=='man_quatang')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=product1&act=man_quatang">Quà tặng</a></li> 

			<li <?=($com=='about' && $act=='capnhap')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=about&act=capnhap">Số % giảm cho thành viên</a></li>  

	-->

        </ul>

      </li>



	  

	<!-- 

	    <li class="parent purple <?=($com=='about')?'active':''?>">

        <a href="about" class="menu_click <?=($_SESSION['menu']['about']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-file-text-o"></i></span>

          <span class="menu-text">BÌNH LUẬN PHẢN HỒI</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['about']==2)?' style="display: none;"':' style="display: block;"'?>>

          



             <li <?=($com=='binhluan' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=binhluan&act=man">Danh sách bình luận</a></li> 

          

              <li <?=($com=='danhgia' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=danhgia&act=man">Danh sách đánh giá sản phẩm</a></li> 

              <li <?=($com=='cauhoi' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=cauhoi&act=man">Danh sách câu hỏi</a></li> 

               <li <?=($com=='traloi' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=traloi&act=man">Danh sách phản hồi</a></li>

		

        </ul>

      </li>



	  -->

	

	

   <li class="parent purple <?=($com=='about')?'active':''?>">

        <a href="about" class="menu_click <?=($_SESSION['menu']['about']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-file-text-o"></i></span>

          <span class="menu-text">GIỚI THIỆU</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['about']==2)?' style="display: none;"':' style="display: block;"'?>>



  

          <li <?=($com=='about' && $act=='capnhap3')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=about&act=capnhap3">Giới thiệu</a></li>
             <li <?=($com=='about' && $act=='capnhap2')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=about&act=capnhap2">Mô tả lý do</a></li>
       <li <?=($com=='tinnho' && $act=='man1')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=tinnho&act=man1">Lý do</a></li>

        </ul>

      </li>





	  <li class="parent hidden purple <?=($com=='tinnho')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">Chính sách</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['tinnho']==2)?' style="display: none;"':' style="display: block;"'?>>





             <li <?=($com=='tinnho' && $act=='man7')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=tinnho&act=man7">Bài viết</a></li>  

      

        </ul>

      </li>

<!--     <li class="parent purple <?=($com=='tinnho')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">BÀI VIẾT</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['tinnho']==2)?' style="display: none;"':' style="display: block;"'?>>





             <li <?=($com=='tinnho' && $act=='man6')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=tinnho&act=man6">Bài viết</a></li>  

      

        </ul>

      </li>
 -->

    <li class="parent  purple <?=($com=='tin3cap')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">BÀI VIẾT</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['tin3cap']==2)?' style="display: none;"':' style="display: block;"'?>>


            <li <?=($com=='tin3cap' && $act=='man_cat')?' class="active"':''?>><i class="fa fa-check"></i> 

        <a href="index.php?com=tin3cap&act=man_cat">Danh mục cấp 1</a></li> 
         <li <?=($com=='tin3cap' && $act=='man_cat1')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=tin3cap&act=man_cat1">Danh mục cấp 2</a></li>  
   <!--    

       
      



         

       <li <?=($com=='tin3cap' && $act=='man_cat2')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=tin3cap&act=man_cat2">Danh mục cấp 3</a></li> -->
 




          <li <?=($com=='tin3cap' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=tin3cap&act=man">Bài viết</a></li>                    

        </ul>

      </li>


<!--     <li class="parent purple <?=($com=='tinnho')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">HỖ TRỢ KỸ THUẬT</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['tinnho']==2)?' style="display: none;"':' style="display: block;"'?>>

       



<li <?=($com=='tinnho' && $act=='man6')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=tinnho&act=man6">Bài viết</a></li> 





      

        </ul>

      </li>
 -->





    

<!--       <li class="parent purple <?=($com=='about')?'active':''?>">

        <a href="about" class="menu_click <?=($_SESSION['menu']['about']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-file-text-o"></i></span>

          <span class="menu-text">QUẢN LÝ TIN</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['about']==2)?' style="display: none;"':' style="display: block;"'?>>

          <li <?=($com=='quanlytin' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=quanlytin&act=man">Danh sách tin</a></li>    
          
   

        

    

        </ul>

      </li> -->




<!--     

      <li class="parent purple <?=($com=='about')?'active':''?>">

        <a href="about" class="menu_click <?=($_SESSION['menu']['about']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-file-text-o"></i></span>

          <span class="menu-text">MODULE THÀNH VIÊN</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['about']==2)?' style="display: none;"':' style="display: block;"'?>>

          <li <?=($com=='member' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=member&act=man">Danh sách thành viên</a></li>    

   

        

    

        </ul>

      </li> -->

	 

<!-- 	  <li class="parent purple <?=($com=='congtrinh')?'active':''?>" >

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">BẢNG GIÁ</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['congtrinh']==2)?' style="display: none;"':' style="display: block;"'?>>

           <li <?=($com=='congtrinh' && $act=='man_cat')?' class="active"':''?>><i class="fa fa-check"></i> 

        <a href="index.php?com=congtrinh&act=man_cat">Danh mục cấp 1</a></li>    

	

          <li <?=($com=='congtrinh' && $act=='man_cat1')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=congtrinh&act=man_cat1">Danh mục cấp 2</a></li>    

          <li <?=($com=='congtrinh' && $act=='man_cat2')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=congtrinh&act=man_cat2">Danh mục cấp 3</a></li>



          <li <?=($com=='congtrinh' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=congtrinh&act=man">Danh sách </a></li>                    

        </ul>

      </li> -->



<!-- 

      <li class="parent purple <?=($com=='congtrinh')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">Hệ thống trung tâm </span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['hethong']==2)?' style="display: none;"':' style="display: block;"'?>>

           <li <?=($com=='hethong' && $act=='man_cat')?' class="active"':''?>><i class="fa fa-check"></i> 

        <a href="index.php?com=hethong&act=man_cat">Danh mục cấp 1</a></li>    

 

          <li <?=($com=='hethong' && $act=='man_cat1')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=hethong&act=man_cat1">Danh mục cấp 2</a></li>    

          <li <?=($com=='hethong' && $act=='man_cat2')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=hethong&act=man_cat2">Danh mục cấp 3</a></li>



          <li <?=($com=='hethong' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> 

          <a href="index.php?com=hethong&act=man">Danh sách trung tâm</a></li>                    

        </ul>

      </li> -->
<!--  <li class="parent purple <?=($com=='congtrinh')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['congtrinh']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">Quản lý TIN TỨC</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['hethong']==2)?' style="display: none;"':' style="display: block;"'?>>

           <li <?=($com=='mucmedia' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> 

        <a href="index.php?com=mucmedia&act=man">Cấp 1</a></li>    

          <li <?=($com=='media' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> 

        <a href="index.php?com=media&act=man">Danh sách tin tức</a></li>   

                 

        </ul>

      </li>  -->



	

<!--

	  <li class="parent purple <?=($com=='images')?'active':''?>">

        <a href="about" class="menu_click <?=($_SESSION['menu']['images']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-file-text-o"></i></span>

          <span class="menu-text">MODULE HÌNH ẢNH</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['images']==2)?' style="display: none;"':' style="display: block;"'?>>



          <li <?=($com=='images')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=images&act=man_cat">Hình ảnh</a></li>                               

		  

        </ul>

      </li>

-->















<!--       <li class="parent purple <?=($com=='tinnho' || $com=='tracking')?'active':''?>">

        <a href="tinnho" class="menu_click <?=($_SESSION['menu']['tinnho']==2 || $_SESSION['menu']['tracking']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-clipboard"></i></span>

          <span class="menu-text">MODULE TRANG TINH</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['tinnho']==2 || $_SESSION['menu']['tracking']==2)?' style="display: none;"':' style="display: block;"'?>>

       

  

      <li <?=($com=='trangtinh' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=trangtinh&act=man">Danh sách trang tĩnh</a></li>







          

      

        </ul>

      </li> 

       -->



      

      <li class="parent purple <?=($com=='photo')?'active':''?>">

        <a href="photo" class="menu_click <?=($_SESSION['menu']['photo']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-th"></i></span>

          <span class="menu-text">MODULE KHÁC</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['photo']==2)?' style="display: none;"':' style="display: block;"'?>>          



                  <li <?=($com=='photo' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man">Quản lý SlideShow</a></li> 	 


                  <!--      <li <?=($com=='photo' && $act=='man_video')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_video">Video</a></li>   -->
<!--      <li <?=($com=='photo' && $act=='man1')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man1">Quản lý  đối tác</a></li> -->


      <li <?=($com=='photo' && $act=='man_chiase')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_chiase">MXH </a></li> 
         

     <!--      <li <?=($com=='photo' && $act=='man_lkweb')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_lkweb">Liên kết web</a></li>   -->      
         <!--          <li <?=($com=='photo' && $act=='man2')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man2">Quản lý đánh giá </a></li>  -->

              <!--  


                     <li <?=($com=='photo' && $act=='man_hotline')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_hotline">Câu hỏi thường gặp</a></li>



           -->
 <!--
     	  

    

 


          <li class="likc"></li>



        

		 

           

             
 -->
    

        



		

<!--         <li <?=($com=='photo' && $act=='man_quangcao2ben')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_quangcao2ben">POPUP </a></li>  -->
<!-- 



  
  <li <?=($com=='photo' && $act=='capnhap_background')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=capnhap_background">Logo đóng dấu </a></li>
 -->
<!--           <li <?=($com=='photo' && $act=='man_quangcao2ben')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_quangcao2ben">Banner QC LEFT</a></li> -->
<!-- 
          <li <?=($com=='photo' && $act=='man_quangcao2ben1')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=man_quangcao2ben1">Quản lý 2 ảnh bên cạnh slider</a></li> -->

<!--   <li <?=($com=='photo' && $act=='capnhap_banner')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=photo&act=capnhap_banner">Banner quảng cáo </a></li> -->


        </ul>

      </li>     

      

      <li class="parent purple <?=($com=='company')?'active':''?>">

        <a href="photo" class="menu_click <?=($_SESSION['menu']['company']==2)?'':' close-child'?>">

          <span class="menu-icon"><i class="fa fa-th"></i></span>

          <span class="menu-text">THÔNG TIN CÔNG TY</span>

        </a>

        <ul class="child" <?=($_SESSION['menu']['company']==2)?' style="display: none;"':' style="display: block;"'?>>          

          <li <?=($com=='company' && $act=='capnhap')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=company&act=capnhap">Thông Tin Công Ty</a></li>

         <!-- <li <?=($com=='company' && $act=='man1')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=company&act=man1">Bản đồ</a></li>   -->   



    <!--         <li <?=($com=='com1' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=com1&act=man">Thêm bảng phân quyền</a></li> -->
<!-- 
                 <li <?=($com=='phanquyen' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=phanquyen&act=man">Phân quyền</a></li>

                              <li <?=($com=='user' && $act=='man')?' class="active"':''?>><i class="fa fa-check"></i> <a href="index.php?com=user&act=man">Thêm user</a></li>      
 -->
        </ul>

      </li>     

                  

            

    </ul>   

    </div>     

    <!-- Menu End -->        