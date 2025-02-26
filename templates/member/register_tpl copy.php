<div id="lc-plugin-wrap" class="page-wrapper">
   <section class="section" id="section-register">
      <div class="container">
         <div class="register-head">
            <h1>Tạo tài khoản thực</h1>
         </div>
         <div class="register-form lc-form-wrap">
            <form class="lc-form-inner" method="post" action="dang-ky.html" id="form-register" enctype="multipart/form-data">
              <!--  <div class="form-item-wrap" id="accountType">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Loại hình tài khoản</h3>
                     </div>
                     <div class="form-item-body d-flex">
                        <div class="form-group d-flex align-center">
                           <input type="radio" name="account_type" value="personal" id="input_AccountPerson" data-id="accountPersonInfo" class="h-5 w-5 acc_type_radio" checked="" data-gtm-form-interact-field-id="1">
                           <label for="input_AccountPerson">Tài khoản cá nhân</label>
                        </div>
                        <div class="form-group d-flex align-center">
                           <input type="radio" name="account_type" value="business" id="input_AccountBusiness" data-id="accountBusinessInfo" class="h-5 w-5 acc_type_radio" data-gtm-form-interact-field-id="0">
                           <label for="input_AccountBusiness">Tài khoản doanh nghiệp</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Mã ID môi giới ( tùy chọn )" class="form-control" name="signup_id" value="">
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="form-item-wrap account-type-item active" id="accountPersonInfo">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Thông tin cá nhân</h3>
                     </div>
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Họ và tên (*)" class="form-control" name="fullname">
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
          <!--      <div class="form-item-wrap account-type-item" id="accountBusinessInfo">
                  <div class="form-item">
                     <div class="form-item-head">
                        <h3>Thông tin doanh nghiệp</h3>
                     </div>
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Tên doanh nghiệp (*)" class="form-control" name="businness_name">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Đại diện doanh nghiệp (*)" class="form-control" name="businness_owner">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Địa chỉ (*)" class="form-control" name="businness_address">
                        </div>
                     </div>
                  </div>
                  <div class="row-2 row-mb-0">
                     <div class="form-item">
                        <div class="form-item-body">
                           <div class="form-group">
                              <input type="text" placeholder="Điện thoại (*)" class="form-control" name="businness_phone">
                           </div>
                        </div>
                     </div>
                     <div class="form-item">
                        <div class="form-item-body">
                           <div class="form-group">
                              <input type="text" placeholder="Fax (*)" class="form-control" name="businness_fax">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row-2 row-mb-0">
                     <div class="form-item">
                        <div class="form-item-body">
                           <div class="form-group">
                              <input type="text" placeholder="Email" class="form-control" name="businness_email">
                           </div>
                        </div>
                     </div>
                     <div class="form-item">
                        <div class="form-item-body">
                           <div class="form-group">
                              <input type="password" placeholder="Mật khẩu đăng nhập (*)" class="form-control" name="business_password">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Mã số thuế" class="form-control" name="businness_mst">
                        </div>
                     </div>
                  </div>
                  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group">
                           <input type="text" placeholder="Website" class="form-control" name="businness_website">
                        </div>
                     </div>
                  </div>
               </div> -->
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
                        <label for="identify_image_front" class="btn   btnUploadIdentify btn-sm">Upload ảnh</label>
                     </div>
                     <div class="identify-back">
                        <label for="identify_image_back">Hình chụp CMND mặt sau</label>
                        <img class="identify-back-preview" src="https://2.bp.blogspot.com/-muVbmju-gkA/Vir94NirTeI/AAAAAAAAT9c/VoHzHZzQmR4/s1600/placeholder-image.jpg">
                        <input type="file" name="identify_image_back" data-preview="identify_preview_back" id="identify_image_back" data-type="back" class="input_Identify">
                        <label for="identify_image_back" class="btn   btnUploadIdentify btn-sm">Upload ảnh</label>
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
                 <!--  <div class="form-item">
                     <div class="form-item-body">
                        <div class="form-group d-flex">
                           <input type="checkbox" name="is_bank" id="is_bank" value="0">
                           <label for="is_bank">Tài khoản ngân hàng khác ( chính chủ )</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-item" id="anotherBank">
                     <div class="row-2">
                        <div class="form-group">
                           <input type="text" name="businness_info_json[another_bank_number][1]" class="form-control" placeholder="Số tài khoản ngân hàng 1 ( chính chủ )">
                        </div>
                        <div class="form-group">
                           <input type="text" name="businness_info_json[another_bank_name][1]" class="form-control" placeholder="Tại ngân hàng">
                        </div>
                        <div class="form-group">
                           <input type="text" name="businness_info_json[another_bank_number][2]" class="form-control" placeholder="Số tài khoản ngân hàng 2 ( chính chủ )">
                        </div>
                        <div class="form-group">
                           <input type="text" name="businness_info_json[another_bank_name][2]" class="form-control" placeholder="Tại ngân hàng">
                        </div>
                     </div>
                  </div> -->
               </div>
               <button class="btn btn-primary" >Gửi thông tin</button>
            </form>
         </div>
      </div>
   </section>
</div>