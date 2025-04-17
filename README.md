# Sapientia Website - Sell Books

Đây là dự án website bán sách được xây dựng bằng PHP thuần, sử dụng mô hình MVC (Model-View-Controller). --github.com/nguyenquanghiep3404

## Cấu trúc dự án

```
├── controllers/     # Chứa các controller xử lý logic
├── models/         # Chứa các model tương tác với cơ sở dữ liệu
├── views/          # Chứa các file giao diện
├── commons/        # Chứa các file dùng chung
├── public/         # Chứa các file tĩnh (CSS, JS, images)
├── uploads/        # Thư mục lưu trữ file upload
├── vnpay_php/      # Tích hợp thanh toán qua VNPay
└── index.php       # File khởi chạy ứng dụng
```

## Yêu cầu hệ thống

- PHP >= 7.0
- MySQL/MariaDB
- Web server (Apache/Nginx)

## Cài đặt

1. Clone repository về máy local:
```bash
git clone [repository-url]
```

2. Cấu hình web server trỏ đến thư mục gốc của dự án

3. Import cơ sở dữ liệu từ file SQL (nếu có)

4. Cấu hình kết nối database trong file cấu hình

5. Truy cập website qua trình duyệt (If You need it running. You use run laragon or xammp)

## Tính năng chính

- Đăng ký/đăng nhập thành viên
- Xem danh sách sách
- Tìm kiếm sách
- Giỏ hàng
- Thanh toán qua VNPay
- Quản lý đơn hàng
- Upload và quản lý sách

# Thông tin thẻ test VNPAY

| #  | Thông tin thẻ | Ghi chú |
|----|----------------|--------|
| 1  | **Ngân hàng:** NCB  <br> **Số thẻ:** 9704198526191432198 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 07/15 <br> **Mật khẩu OTP:** 123456 | Thành công |
| 2  | **Ngân hàng:** NCB  <br> **Số thẻ:** 9704195798459170488 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 07/15 | Thẻ không đủ số dư |
| 3  | **Ngân hàng:** NCB  <br> **Số thẻ:** 9704192181368742 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 07/15 | Thẻ chưa kích hoạt |
| 4  | **Ngân hàng:** NCB  <br> **Số thẻ:** 9704193370791314 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 07/15 | Thẻ bị khóa |
| 5  | **Ngân hàng:** NCB  <br> **Số thẻ:** 9704194841945513 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 07/15 | Thẻ bị hết hạn |
| 6  | **Loại thẻ quốc tế:** VISA (No 3DS)  <br> **Số thẻ:** 4456530000001005 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/26 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 7  | **Loại thẻ quốc tế:** VISA (3DS)  <br> **Số thẻ:** 4456530000001096 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/26 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 8  | **Loại thẻ quốc tế:** MasterCard (No 3DS)  <br> **Số thẻ:** 5200000000001005 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/26 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 9  | **Loại thẻ quốc tế:** MasterCard (3DS)  <br> **Số thẻ:** 5200000000001096 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/26 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 10 | **Loại thẻ quốc tế:** JCB (No 3DS)  <br> **Số thẻ:** 3337000000000008 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/26 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 11 | **Loại thẻ quốc tế:** JCB (3DS)  <br> **Số thẻ:** 3337000000200004 <br> **CVC/CVV:** 123 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 12/24 <br> **Email:** test@gmail.com <br> **Địa chỉ:** 22 Lang Ha <br> **Thành phố:** Ha Noi | Thành công |
| 12 | **Loại thẻ ATM nội địa:** Nhóm Bank qua NAPAS  <br> **Số thẻ:** 9704000000000018 <br> **Số thẻ:** 9704020000000016 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày phát hành:** 03/07 <br> **OTP:** otp | Thành công |
| 13 | **Loại thẻ ATM nội địa:** EXIMBANK  <br> **Số thẻ:** 9704310005819191 <br> **Tên chủ thẻ:** NGUYEN VAN A <br> **Ngày hết hạn:** 10/26 | Thành công |


## Đóng góp

Mọi đóng góp đều được hoan nghênh. Vui lòng tạo issue hoặc pull request để đóng góp.

## Giấy phép

Dự án này được phân phối dưới giấy phép MIT. Xem file `LICENSE` để biết thêm chi tiết. 