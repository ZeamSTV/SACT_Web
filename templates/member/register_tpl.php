<div id="lc-plugin-wrap" class="page-wrapper">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f7f7f7;
      color: #333;
      line-height: 1.6;
      padding: 20px;
    }
    
    .page-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .container {
      background: #fff;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    
    .register-head {
      margin-bottom: 30px;
    }
    
    .register-head h1 {
      text-align: center;
      font-size: 32px;
      color: #022357;
      margin-bottom: 10px;
    }
    
    .register-form {
      width: 100%;
    }
    
    .form-item-wrap {
      margin-bottom: 30px;
    }
    
    .form-item-head h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #022357;
      border-bottom: 2px solid #022357;
      padding-bottom: 5px;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 700;
      color: #022357;
    }
    
    .form-group input, 
    .form-group select {
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }
    
    .form-group input:focus, 
    .form-group select:focus {
      border-color: #022357;
      outline: none;
    }
    
    /* Các phần cho upload ảnh */
    .identify-front, .identify-back {
      margin-bottom: 15px;
      
    }
    
    .identify-front label, .identify-back label {
      display: block;
      margin-bottom: 5px;
      font-weight: 700;
      color: #ffffff;
      width: 20%;
      text-align: center;
    }
    
    .identify-front img, .identify-back img {
      max-width: 200px;
      display: block;
      margin-bottom: 5px;
      
    }
    
    .identify-note p {
      font-size: 12px;
      color: #888;
      margin: 2px 0;
   
    }

    .input_Identify {
      display: none; 
   }
    
    /* Button */
    .btn {
      background-color: #022357;
      color: #fff;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .btn:hover {
      background-color: #011b4d;
    }
    
 
    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }
      
      .register-head h1 {
        font-size: 28px;
      }
      
      .form-item-head h3 {
        font-size: 18px;
      }
      
      .btn {
        font-size: 14px;
        padding: 10px 20px;
      }
    }
  </style>

   <section class="section" id="section-register">
      <div class="container">
         <div class="register-head">
            <h1>TẠO TÀI KHOẢN</h1>
         </div>
         <div class="register-form lc-form-wrap">
            <form class="lc-form-inner" method="post" action="dang-ky.html" id="form-register" enctype="multipart/form-data">
         
               <div class="form-item-wrap account-type-item active" id="accountPersonInfo">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Thông tin cá nhân</h3>
                     </div>
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Họ và tên" class="form-control" name="fullname">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Ngày tháng năm sinh (*)" class="form-control" name="birthday">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="email" placeholder="Email (*)" class="form-control" name="personal_email">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="password" placeholder="Mật khẩu đăng nhập (*)" class="form-control" name="personal_password">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Địa chỉ thường chú ( Nơi nhận hợp đồng ) (*)" class="form-control" name="personal_address">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="tel" placeholder="Điện thoại (*)" class="form-control" name="personal_phone">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-item-wrap" id="identifyInfo">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Thông tin xác thực</h3>
                     </div>
                  </div>
                  <div class="row-2">
                     <div class="form-group">
                        <label for="identify_type">Chọn loại CMND/CCCD/Hộ chiếu</label>
                        <select name="identify_type" id="identify_type" class="form-control valid" data-gtm-form-interact-field-id="2" aria-invalid="false">
                           <option value="cmnd">CMND</option>
                           <option value="cccd">CCCD</option>
                           <option value="hochieu">Hộ chiếu</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="identify_number">Số CMND/CCCD/Hộ chiếu</label>
                        <input type="text" class="form-control" id="identify_number" name="identify_number">
                     </div>
                     <div class="form-group">
                        <label for="identify_date">Ngày cấp</label>
                        <input type="text" class="form-control" id="identify_date" name="identify_date">
                     </div>
                     <div class="form-group">
                        <label for="identify_address">Tại</label>
                        <input type="text" class="form-control" id="identify_address" name="identify_address">
                     </div>
                     <div class="identify-front">
                        <label for="identify_image_front">Hình chụp CMND mặt trước</label>
                        <img class="identify-front-preview" src="https://2.bp.blogspot.com/-muVbmju-gkA/Vir94NirTeI/AAAAAAAAT9c/VoHzHZzQmR4/s1600/placeholder-image.jpg">
                        <input type="file" name="identify_image_front" data-preview="identify_preview_front" id="identify_image_front" data-type="front" class="input_Identify">
                        <label for="identify_image_front" class="btn   btnUploadIdentify btn-sm">UPLOAD ẢNH</label>
                     </div>
                     <div class="identify-back">
                        <label for="identify_image_back">Hình chụp CMND mặt sau</label>
                        <img class="identify-back-preview" src="https://2.bp.blogspot.com/-muVbmju-gkA/Vir94NirTeI/AAAAAAAAT9c/VoHzHZzQmR4/s1600/placeholder-image.jpg">
                        <input type="file" name="identify_image_back" data-preview="identify_preview_back" id="identify_image_back" data-type="back" class="input_Identify">
                        <label for="identify_image_back" class="btn   btnUploadIdentify btn-sm">UPLOAD ẢNH</label>
                        <!-- <button class="btn   btnUploadIdentify btn-sm" data-type="back">Upload ảnh</button> -->
                     </div>
                     <div class="identify-note">
                        <p>Ảnh tải lên dung lượng nhỏ hơn 2MB</p>
                        <p>Định dạng là ảnh png, jpeg, ...</p>
                     </div>
                  </div>
               </div>
               <div class="form-item-wrap" id="bankInfo">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Thông tin tài khoản ngân hàng ( chính chủ )</h3>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="row-2">
                        <div class="form-group">
                           <label for="bank_number">Số tài khoản ngân hàng</label>
                           <input type="number" class="form-control" id="bank_number" name="bank_number">
                        </div>
                        <div class="form-group">
                           <label for="bank_name">Tại ngân hàng</label>
                           <input type="text" class="form-control" id="bank_name" name="bank_name">
                        </div>
                     </div>
                  </div>
               
               </div>
               <button class="btn btn-primary" >Gửi thông tin</button>
            </form>
         </div>
      </div>
   </section>
</div>