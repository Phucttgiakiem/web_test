<footer class="bg-primary text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Thông tin liên hệ -->
            <div class="col-md-6 ps-5">
                <h4 class="fw-bold">TÂM AN</h4>
                <p><i class="bi bi-geo-alt"></i> Địa chỉ: 378 Trần Hưng Đạo, P. Dĩ An, TP. Dĩ An, tỉnh Bình Dương</p>
                <p><i class="bi bi-telephone"></i> Số điện thoại: <a href="tel:0917319839" class="text-white">0917319839 (Zalo)</a></p>
                
                <h5 class="fw-bold mt-3">THỜI GIAN LÀM VIỆC</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-calendar"></i> T2 - T6 (Trừ T4)</li>
                    <li><i class="bi bi-clock"></i> Giờ khám bệnh: 17h00 - 21h00</li>
                    <li><i class="bi bi-clock"></i> Các dịch vụ khác: 8h00 - 21h00</li>
                </ul>
            </div>

            <!-- Đặt cuộc hẹn -->
            <div class="col-md-6 pe-5">
                <div class="bg-white text-dark p-4 rounded">
                    <h5 class="fw-bold text-primary">LIÊN HỆ NGAY</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-2">
                            <input type="text" name="name" class="form-control" placeholder="Họ và tên" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="mb-2">
                            <textarea name="note" class="form-control" rows="2" placeholder="Ghi chú"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đặt lịch</button>
                    </form>
                </div>
            </div>
        </div>

        <hr class="border-light">
        <div class="text-center">
            <p class="mb-0">&copy; 2024 Thiết kế bởi <a href="https://sikido.vn" class="text-white fw-bold">Sikido.vn</a></p>
        </div>
    </div>
</footer>