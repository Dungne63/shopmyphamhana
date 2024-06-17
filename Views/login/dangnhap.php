<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>ĐĂNG NHẬP</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							<p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
							<?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } ?>
							<form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
								<input type="text" name="taikhoan" placeholder="Tài khoản" />
								<input type="password" name="matkhau" placeholder="Mật khẩu" />
								<a class="forget" href="#">Quên mật khẩu?</a>
								<div class="submit-text">
									<button name="submit" type="submit" form="form1">Đăng nhập</button>
									<button style=" margin-left: 10px"><a href="?act=taikhoan&dk" >Đăng ký</a></button>
								</div>
							</form>
						</div>
					</div>
				</div>