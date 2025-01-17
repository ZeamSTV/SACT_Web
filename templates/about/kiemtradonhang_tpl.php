

<div class="about">

	<div class="container">
			<div class="row">

					<div class="tieudebaiviet">
							<h1><a>Kiểm tra đơn hàng</a></h1>
					</div>

					<div class="noidungbaiviet">

							<div class="noidungbaiviettrong">

									<div class="formdonhang">

											<div class="formdonhang1">
												
													
													<label>Nhập mã hóa đơn:</label>

													<input type="text" name="txtmahoadon" onkeypress="doEnter(event)" id="txtmahoadon" placeholder="Nhập mã hóa đơn">
												
											</div>
									</div>


									<div class="thongtindh">
											<div class="thongtindh1 table-responsive">

													

											</div>
									</div>
							</div>

					</div>

			</div>
	</div>

</div>


<script type="text/javascript">
	




		 function doEnter(evt)
			    {
			        var key;
			        if(evt.keyCode == 13 || evt.which == 13)
			        {
			            onSearch(evt);
			        }
			    }

		function onSearch(evt)
		{
				var mahd=$('#txtmahoadon').val();
			     $.ajax({
                  type: "POST",
                  url: "ajax/kiemtradonhang.php",
                 data: {'mahd':mahd},
                
                  success: function(data){
                          	

                  			$('.thongtindh1').html(data);
                  			$('#txtmahoadon').val('')

                          }
               });
		}

</script>