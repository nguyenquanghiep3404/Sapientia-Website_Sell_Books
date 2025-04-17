-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2025 at 10:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variant_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`, `status`) VALUES
(22, 'VĂN HỌC', 'Sách văn học', 1),
(23, 'CÔNG NGHỆ THÔNG TIN', 'Sách công nghệ thông tin', 1),
(24, 'LẬP TRÌNH', 'Sách lập trình', 1),
(25, 'KINH TẾ', 'Sách kinh tế', 1),
(26, 'TÂM LÝ - KỸ NĂNG SỐNG', 'Sách tâm lý kỹ năng', 1),
(27, 'NGOẠI NGỮ', 'Sách học ngoại ngữ', 1),
(28, 'Thiếu nhi', 'truyện thiếu nhi mọi lứa tuổi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `create_at` datetime NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `rating` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `user_id`, `product_id`, `create_at`, `name`, `email`, `rating`) VALUES
(11, 'kuil;oi', 9, 135, '2025-04-12 02:09:04', 'hiep', 'hiep@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variant_id` int DEFAULT NULL,
  `order_detail_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `variant_id`, `order_detail_id`, `quantity`, `price`, `created_at`, `updated_at`, `total`) VALUES
(245, 10, 120, 156, 298, 999, 899.00, NULL, NULL, 898101.00),
(246, 10, 109, 145, 299, 15, 500.00, NULL, NULL, 7500.00),
(247, 10, 104, 140, 301, 9, 500.00, NULL, NULL, 4500.00),
(248, 10, 104, 140, 302, 9, 500.00, NULL, NULL, 4500.00),
(249, 9, 135, 172, 303, 6, 43000.00, NULL, NULL, 258000.00),
(250, 9, 135, 171, 304, 4, 49000.00, NULL, NULL, 196000.00),
(251, 9, 135, 171, 305, 4, 49000.00, NULL, NULL, 196000.00),
(252, 9, 135, 172, 305, 5, 43000.00, NULL, NULL, 215000.00),
(253, 9, 115, 151, 306, 1, 2000.00, NULL, NULL, 2000.00),
(254, 9, 115, 151, 307, 1, 2000.00, NULL, NULL, 2000.00),
(255, 9, 115, 151, 308, 1, 2000.00, NULL, NULL, 2000.00),
(256, 9, 115, 151, 309, 1, 2000.00, NULL, NULL, 2000.00),
(257, 9, 115, 151, 310, 1, 2000.00, NULL, NULL, 2000.00),
(258, 9, 135, 171, 311, 2, 49000.00, NULL, NULL, 98000.00),
(259, 9, 135, 171, 312, 2, 49000.00, NULL, NULL, 98000.00),
(260, 9, 135, 171, 313, 2, 49000.00, NULL, NULL, 98000.00),
(261, 9, 135, 171, 314, 2, 49000.00, NULL, NULL, 98000.00),
(262, 9, 136, 174, 314, 4, 9.00, NULL, NULL, 36.00),
(263, 9, 135, 171, 315, 2, 49000.00, NULL, NULL, 98000.00),
(264, 9, 136, 174, 315, 4, 9.00, NULL, NULL, 36.00),
(265, 9, 135, 171, 316, 2, 49000.00, NULL, NULL, 98000.00),
(266, 9, 136, 174, 316, 4, 9.00, NULL, NULL, 36.00),
(267, 9, 135, 171, 317, 1, 49000.00, NULL, NULL, 49000.00),
(268, 9, 135, 171, 318, 1, 49000.00, NULL, NULL, 49000.00),
(269, 9, 135, 171, 319, 1, 49000.00, NULL, NULL, 49000.00),
(270, 9, 135, 171, 320, 1, 49000.00, NULL, NULL, 49000.00),
(271, 9, 135, 171, 321, 1, 49000.00, NULL, NULL, 49000.00),
(272, 9, 135, 171, 322, 1, 49000.00, NULL, NULL, 49000.00),
(273, 9, 135, 171, 323, 1, 49000.00, NULL, NULL, 49000.00),
(274, 9, 135, 171, 324, 1, 49000.00, NULL, NULL, 49000.00),
(275, 9, 135, 171, 325, 1, 49000.00, NULL, NULL, 49000.00),
(276, 9, 135, 171, 326, 1, 49000.00, NULL, NULL, 49000.00),
(277, 9, 135, 171, 327, 1, 49000.00, NULL, NULL, 49000.00),
(278, 9, 135, 171, 328, 1, 49000.00, NULL, NULL, 49000.00),
(279, 9, 135, 171, 329, 1, 49000.00, NULL, NULL, 49000.00),
(280, 9, 135, 172, 330, 1, 43000.00, NULL, NULL, 43000.00),
(281, 9, 135, 171, 331, 3, 49000.00, NULL, NULL, 147000.00),
(282, 9, 135, 171, 332, 1, 49000.00, NULL, NULL, 49000.00),
(283, 9, 135, 171, 333, 1, 49000.00, NULL, NULL, 49000.00),
(284, 9, 135, 172, 334, 4, 43000.00, NULL, NULL, 172000.00),
(285, 9, 135, 171, 335, 3, 49000.00, NULL, NULL, 147000.00),
(286, 9, 135, 171, 336, 16, 49000.00, NULL, NULL, 784000.00),
(287, 9, 135, 171, 337, 2, 49000.00, NULL, NULL, 98000.00),
(288, 9, 136, 174, 337, 4, 9.00, NULL, NULL, 36.00),
(289, 11, 135, 171, 338, 5, 49000.00, NULL, NULL, 245000.00),
(290, 11, 135, 172, 338, 6, 43000.00, NULL, NULL, 258000.00),
(291, 11, 135, 171, 339, 5, 49000.00, NULL, NULL, 245000.00),
(292, 11, 135, 172, 339, 6, 43000.00, NULL, NULL, 258000.00),
(293, 11, 135, 171, 340, 1, 49000.00, NULL, NULL, 49000.00),
(294, 11, 135, 171, 341, 1, 49000.00, NULL, NULL, 49000.00),
(295, 11, 135, 171, 342, 1, 49000.00, NULL, NULL, 49000.00),
(296, 12, 135, 171, 344, 3, 49000.00, NULL, NULL, 147000.00),
(297, 12, 135, 172, 344, 6, 43000.00, NULL, NULL, 258000.00),
(298, 12, 135, 172, 345, 4, 43000.00, NULL, NULL, 172000.00),
(299, 12, 135, 171, 346, 3, 49000.00, NULL, NULL, 147000.00),
(300, 9, 135, 172, 347, 4, 43000.00, NULL, NULL, 172000.00),
(301, 9, 145, 192, 348, 2, 80000.00, NULL, NULL, 160000.00),
(302, 9, 147, 195, 348, 1, 24000.00, NULL, NULL, 24000.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int NOT NULL,
  `coupon_id` int DEFAULT NULL,
  `shipping_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0. Chờ xác nhận 1.Đã hủy 2. Đã xác nhận 3. Đang vận chuyển 4. Hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `name`, `email`, `phone`, `address`, `note`, `user_id`, `coupon_id`, `shipping_id`, `created_at`, `updated_at`, `status`) VALUES
(303, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 17:18:23', '2025-04-11 17:18:39', 1),
(304, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:05:09', NULL, 0),
(305, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:09:38', NULL, 0),
(306, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:15:26', NULL, 0),
(307, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:17:06', NULL, 0),
(308, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:20:14', NULL, 0),
(309, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:20:19', NULL, 0),
(310, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:28:45', NULL, 0),
(311, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 18:39:24', NULL, 0),
(312, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:09:46', NULL, 0),
(313, 'hiep', 'hiep@gmail.com', '0971647692', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:16:48', NULL, 0),
(314, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:32:49', NULL, 0),
(315, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:40:24', NULL, 0),
(316, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:41:02', NULL, 0),
(317, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:43:25', NULL, 0),
(318, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:51:41', NULL, 0),
(319, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:52:10', NULL, 0),
(320, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:52:24', NULL, 0),
(321, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:56:14', NULL, 0),
(322, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:56:57', NULL, 0),
(323, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:57:36', NULL, 0),
(324, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:58:02', NULL, 0),
(325, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:58:24', NULL, 0),
(326, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 19:58:36', NULL, 0),
(327, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:01:54', NULL, 0),
(328, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:06:02', NULL, 0),
(329, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:15:58', NULL, 0),
(330, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:17:29', NULL, 0),
(331, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:18:21', NULL, 0),
(332, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:19:30', NULL, 0),
(333, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:22:03', '2025-04-11 20:30:04', 3),
(334, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:23:40', '2025-04-11 20:28:38', 2),
(335, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 20:25:43', '2025-04-11 20:27:47', 1),
(336, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 21:22:04', NULL, 0),
(337, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-11 22:23:09', NULL, 0),
(338, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:38:23', NULL, 0),
(339, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:38:34', NULL, 0),
(340, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:39:14', NULL, 0),
(341, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:45:32', NULL, 0),
(342, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:46:21', NULL, 0),
(343, 'Sang', 'admin@gmail.com', '0987658799', 'Hà Nội', '', 11, NULL, NULL, '2025-04-11 22:48:12', NULL, 0),
(344, 'test', 'parker.gaston@example.com', '0987658799', 'hhhh@gmail.com', '', 12, NULL, NULL, '2025-04-12 05:32:18', '2025-04-12 05:33:59', 1),
(345, 'test', 'parker.gaston@example.com', '0987658799', 'hhhh@gmail.com', '', 12, NULL, NULL, '2025-04-12 05:32:42', NULL, 0),
(346, 'test', 'parker.gaston@example.com', '0987658799', 'hhhh@gmail.com', '', 12, NULL, NULL, '2025-04-12 05:33:50', '2025-04-12 05:34:38', 4),
(347, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-17 07:00:06', '2025-04-17 07:00:27', 1),
(348, 'hiep', 'hiep@gmail.com', '0971647693', 'ninh binh', '', 9, NULL, NULL, '2025-04-17 21:03:32', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `description`, `category_id`, `created_at`, `updated_at`, `gallery`, `status`) VALUES
(137, ' Ma Pháp Thiếu Nữ - Tập 9 - Bản Đặc Biệt - Tặng Kèm Bookmark Nhân Vật + Postcard + Sổ Xé Nhân Vật', './uploads/product/b_a_1_ma_ph_p_thi_u_n_t_p_9_3.webp', 'Ma Pháp Thiếu Nữ - Tập 9  Ma pháp thiếu nữ - Eposides Φ  Đây là tuyển tập câu chuyện về các ma pháp thiếu nữ, xuất hiện từ tập đầu cho tới tập ACES. Những câu chuyện không thể bỏ lỡ về ngày tháng êm đềm và vui vẻ trong cuộc sống thường ngày chưa được biết đến của họ, những góc khuất không ngờ phía sau những sự kiện phát sinh trong tập chính, tất cả đều được ghi lại trong mười một truyện ngắn này.  Một cuốn sách nhất định phải có nếu bạn muốn chìm đắm trong thế giới của các ma pháp thiếu nữ. Mời các bạn cùng thưởng thức!', 22, '2025-04-17 08:57:31', NULL, '[\"./uploads/product_gallery/bm_ma_ph_p_thi_u_n_t_p_9_3.webp\", \"./uploads/product_gallery/cbb_ma_ph_p_thi_u_n_t_p_9.webp\", \"./uploads/product_gallery/pc_ma_ph_p_thi_u_n_t_p_9_3.webp\", \"./uploads/product_gallery/s_x__ma_ph_p_thi_u_n_t_p_9_1.webp\", \"./uploads/product_gallery/z6511101130965_6c667a9a87d30fdc24012fc7f87c8ff9.webp\"]', 1),
(138, 'Tội Ác Có Thật', './uploads/product/bia-1-toi-ac-co-that_1.webp', 'Tội Ác Có Thật  Tuyển tập các sự thật hấp dẫn và giật gân về những kẻ sát nhân hàng loạt, thủ lĩnh giáo phái và bậc thầy lừa đảo khét tiếng.  Bao gồm những thủ pháp từ hình kỳ quặc, những vụ ám sát lạnh gáy, những tên tội phạm lùng danh, những vụ vượt ngục liều lĩnh, những tội ác chấn động lịch sử, những vũ khí giết người lạ thường...  Bạn đã bao giờ nghe nói đến tra tấn bằng tiếng ồn trắng chưa? Lăng trì có phải là hình thức xử tử cổ đại tàn ác nhất? Cuộc đời Billy the Kid có thật sự giống như hình tượng huyền thoại Viễn Tây về hắn hay không?  “Tảng băng trôi” của chủ đề “tội phạm có thật” đầy giật gân và không kém phần lý thú đang chờ bạn khám phá trong cuốn sách này:  Những kẻ sát nhân hàng loạt ít được biết đến  Những vụ vượt ngục táo bạo  Những vũ khí giết người kỳ lạ  Những hình tượng sát nhân trên màn ảnh rộng  Và nhiều hơn thế nữa!  Tuyển tập hoàn hảo này chứa đựng những thông tin hy hữu và lạ lùng đến nỗi cả những người đam mê nghiên cứu tội ác có thật cũng phải sửng sốt!', 22, '2025-04-17 09:02:47', '2025-04-17 09:03:17', '[\"./uploads/product_gallery/bia-1-toi-ac-co-that_1.webp\", \"./uploads/product_gallery/bookmark_toi_ac_co_that.webp\", \"./uploads/product_gallery/mockup_toi_ac_co_that.webp\"]', 1),
(139, 'Tomorrow Will Be Better - Bình Minh Trên Phố Brooklyn', './uploads/product/binh_minh_tren_pho_brooklyn_bia_1.webp', 'Bình minh trên phố Brooklyn là câu chuyện của Margy Shannon, một cô gái trẻ nhút nhát nhưng lạc quan, sống với cha mẹ và chứng kiến cuộc đời nghèo đói và đau khổ đã khiến họ kiệt quệ như thế nào. Sự oán giận của mẹ cô trong vai trò một bà nội trợ và sự bất lực của cha cô trong việc thể hiện cảm xúc của ông đã dẫn đến một cuộc sống gia đình căng thẳng, nơi Margy không có tiếng nói. Không thể lên tiếng chống lại người mẹ độc đoán của mình, Margy ẩn náu trong giấc mơ về một cuộc sống tốt đẹp hơn.  Mục tiêu của cô rất đơn giản - tìm một người chồng, sinh con và sống trong một ngôi nhà đẹp đẽ - nơi con cái cô sẽ không bao giờ biết đến nỗi kinh hoàng của sự thiếu thốn hoặc nhu cầu trốn tránh cha mẹ hay cãi vã… Và liệu giấc mơ ấy của cô có trở thành hiện thực?  Mang đậm hương vị của bối cảnh Brooklyn, tràn ngập niềm vui và nỗi đau của cuộc sống gia đình, Bình minh trên phố Brooklyn được kể bằng sự giản dị, dịu dàng và sự hài hước ấm áp mà chỉ Betty Smith mới có thể làm được.  Về tác giả  Betty Smith (1896 – 1972) là một tiểu thuyết gia người Mỹ. Bà sinh ra trong một gia đình người Đức nhập cư, lớn lên trong cảnh nghèo khó ở khu Williamsburg, New York. Những trải nghiệm tuổi thơ khốn khó là chất liệu để bà vẽ lên những bức tranh tuyệt đẹp như Cây Brooklyn xanh biếc hay Bình minh trên phố Brooklyn.  Trích dẫn hay trong sách:  “Đó là mùi và vẻ đẹp của hoa loa kèn Madonna, mỗi bông giá 25 xu và mỗi nụ 10 xu, được bày bán trên vỉa vẻ trước một cửa hàng hoa trong những chiếc chậu quá nhỏ. (Ngày xưa mình ước ao được làm việc trong cửa hàng hoa!) Đó là mùi đất sét của những chậu hoa mới, và nếu cuộc sống có mùi, chắc chắn đó sẽ là mùi của những chậu đất mới.”', 22, '2025-04-17 09:06:01', NULL, '[\"./uploads/product_gallery/binh_minh_tren_pho_brooklyn_bookmark.webp\", \"./uploads/product_gallery/binh-minh-tren-pho-brooklyn-bia-1.webp\"]', 1),
(140, 'The Surgeon - Gã Đồ Tể', './uploads/product/bia_1_ga_do_te.webp', 'Giữa màn đêm thành phố Boston, hắn nhẹ nhàng lẻn vào nhà những người phụ nữ đang say ngủ, rồi biến đêm đó thành cơn ác mộng kinh hoành nhất cuộc đời họ: hắn sẽ trói chặt rồi mổ xẻ nạn nhân, lấy đi tử cung và cuối cùng là cắt cổ họ. Từ phương thức gây án quá đỗi kinh hoàng, giới báo chí gọi hắn bằng cái tên Gã Đồ Tể.  Một cuộc điều tra mở ra dưới sự chỉ huy của Thomas Moore và Jane Rizzoli, hai thanh tra có suy nghĩ trái ngược nhưng sở hữu cùng một mục tiêu: bắt giữ được tên sát nhân này. Họ nhanh chóng nhận ra cách hắn ra tay giống với một tên sát nhân khác đến đáng ngạc nhiên, nhưng tên sát nhân kia đã chết từ hai năm trước.  Hai năm trước tại Savannah, bác sĩ Catherine Cordell đã chống trả và giết chết kẻ tấn công mình trước khi hắn có thể giết cô. Những tưởng cơn ác mộng ấy đã chấm dứt, nhưng hai năm sau, cô tiếp tục bị một tên sát nhân khác với cách thức gây án giống hệt chọn làm con mồi. Để điều tra và bảo vệ Cordell, Moore và Rizzoli đã lần lượt phát hiện ra những liên kết với vụ án trong quá khứ, lật mở hàng loạt những chi tiết từng bị bỏ qua, từ đó tìm tới chân tướng cuối cùng.  Về tác giả  TESS GERRITSEN Là một bác sĩ chuyên nghiệp, Tess Gerritsen vốn mang trong mình tình yêu với những con chữ. Trong quá trình nghỉ thai sản, Tess đã viết truyện ngắn đầu tay của mình và giành giải nhất của một cuộc thi viết trên tạp chí Honolulu. Từ đó, bà quyết định theo đuổi đam mê viết lách.  Vốn là một bác sĩ lành nghề, các tác phẩm của Tess Gerritsen nổi bật với những tình tiết với kiến thức y học chính xác, cốt truyện chặt chẽ và tập trung vào chủ đề trinh thám – kinh dị.  Trích dẫn hay trong sách:  “Tôi đã học được bài học đó. Quỷ dữ có thể trông hoàn toàn bình thường. Nó có thể là người đàn ông mà tôi gặp gỡ, chào hỏi hàng ngày. Nó có thể mỉm cười đáp lại tôi, trong khi suy nghĩ mọi phương cách để giết tôi.”', 22, '2025-04-17 09:08:38', NULL, '[\"./uploads/product_gallery/bia-1-ga-do-te.webp\"]', 1),
(141, 'D. Trump - Nghệ Thuật Đàm Phán (Tái Bản 2020)', './uploads/product/2020_09_07_16_48_59_1-390x510.webp', 'Quyển sách cho chúng ta thấy cách Trump làm việc mỗi ngày - cách ông điều hành công việc kinh doanh và cuộc sống - cũng như cách ông trò chuyện với bạn bè và gia đình, làm ăn với đối thủ, mua thành công những sòng bạc hàng đầu ở thành phố Atlantic, thay đổi bộ mặt của những cao ốc ở thành phố New York… và xây dựng những tòa nhà chọc trời trên thế giới.  Quyển sách đi sâu vào đầu óc của một doanh nhân xuất sắc và khám phá một cách khoa học chưa từng thấy về cách đàm phán một thương vụ thành công. Đây là một cuốn sách thú vị về đàm phán và kinh doanh – và là một cuốn sách nên đọc cho bất kỳ ai quan tâm đến đầu tư, bất động sản và thành công.', 25, '2025-04-17 09:14:34', '2025-04-17 09:26:11', '[\"./uploads/product_gallery/2020_09_07_16_45_26_1-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_45_26_2-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_45_26_6-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_45_26_11-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_45_26_12-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_48_59_1-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_48_59_3-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_48_59_5-390x510.webp\", \"./uploads/product_gallery/2020_09_07_16_48_59_8-390x510.webp\", \"./uploads/product_gallery/combo-8935251407761-8934974165705_1.webp\", \"./uploads/product_gallery/image_195509_1_49918.webp\"]', 1),
(142, 'Chiến Tranh Tiền Tệ', './uploads/product/bia-truoc-chien-tranh-tien-te-phan-1.webp', 'Một khi đọc “Chiến tranh tiền tệ - Ai thật sự là người giàu nhất thế giới” bạn sẽ phải giật mình nhận ra một điều kinh khủng rằng, đằng sau những tờ giấy bạc chúng ta chi tiêu hàng ngày là cả một thế lực ngầm đáng sợ - một thế lực bí ẩn với quyền lực siêu nhiên có thể điều khiển cả thế giới rộng lớn này.  “Chiến tranh tiền tệ - Ai thật sự là người giàu nhất thế giới” đề cập đến một cuộc chiến khốc liệt, không khoan nhượng và dai dẳng giữa một nhóm nhỏ các ông trùm tài chính – đứng đầu là gia tộc Rothschild – với các thể chế tài chính của nhiều quốc gia. Đó là một cuộc chiến mà đồng tiền là súng đạn và mức sát thương thật sự ghê gớm.  Đồng thời, “Chiến tranh tiền tệ - Ai thật sự là người giàu nhất thế giới” còn giúp bạn hiểu thêm nhiều điều, rằng Bill Gates chưa phải là người giàu nhất hành tinh, rằng tỉ lệ tử vong của các tổng thống Mỹ lại cao hơn tỉ lệ tử trận của binh lính Mỹ ngoài chiến trường, hay vì sao phố Wall lại mạo hiểm đổ hết vốn liếng của mình cho việc “đầu tư” vào Hitler.  Là một cuốn sách làm sửng sốt những ai muốn tìm hiểu về bản chất của tiền tệ, để từ đó nhận ra những hiểm họa tài chính tiềm ẩn nhằm chuẩn bị tâm lý cho một cuộc chiến tiền tệ “không đổ máu”, “Chiến tranh tiền tệ - Ai thật sự là người giàu nhất thế giới” còn phơi bày những âm mưu của các nhà tài phiệt thế giới trong việc tạo ra những cơn “hạn hán”, “bão lũ” về tiền tệ để thu lợi nhuận. Cuốn sách cũng đề cập đến sự phát triển của các định chế tài chính – những cơ cấu được xây dựng nhằm đáp ứng nhu cầu phát triển vũ bão của nền kinh tế toàn cầu.  Gấp cuốn sách lại, có thể bạn đọc sẽ có nhiều tâm trạng khác nhau. Đối với một số người, đó có thể là sự sợ hãi thế lực tài chính quốc tế và cảm giác bất an về sự chi phối của thế lực này. Với số khác thì đó có thể là một cảm giác thú vị khi khám phá ra sự thật trần trụi để từ đó có cách nhìn nhận khác nhằm xây dựng cho mình những kế hoạch đầu tư một cách hiệu quả nhất. Và cho dù bạn có lo sợ hay cảm thấy tò mò, thú vị thì “Chiến tranh tiền tệ - Ai thật sự là người giàu nhất thế giới” cũng là một cuốn sách đáng đọc. Một cuốn sách bổ ích cho các chuyên gia quản lý tài chính, các nhà quản trị doanh nghiệp, các nhà đầu tư nhỏ, các giáo viên giảng dạy về tài chính – ngân hàng cũng như sinh viên các trường kinh tế.', 25, '2025-04-17 09:46:03', NULL, '[\"./uploads/product_gallery/9786043603590.webp\", \"./uploads/product_gallery/9786043606492.webp\", \"./uploads/product_gallery/bia_sau_chien_tranh_tien_te_phan_1.webp\", \"./uploads/product_gallery/bia-truoc-chientrangtiente-2-tb-jpg.webp\", \"./uploads/product_gallery/bia-truoc-chien-tranh-tien-te-phan-1.webp\", \"./uploads/product_gallery/bia-truoc-chien-tranh-tien-te-phan-1-1.webp\", \"./uploads/product_gallery/image_200687.webp\"]', 1),
(143, 'Từ Tốt Đến Vĩ Đại - Jim Collins (Tái Bản 2021)', './uploads/product/2021_05_14_14_13_53_1-390x510.webp', 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. Mỗi kết luận của nhóm nghiên cứu đều hữu ích, vượt thời gian, ý nghĩa vô cùng to lớn đối với mọi lãnh đạo và quản lý ở mọi loại hình công ty (từ công ty có nền tảng và xuất phát tốt đến những công ty mới khởi nghiệp), và mọi lĩnh vực ngành nghề. Đây là cuốn sách nên đọc đối với bất kỳ lãnh đạo hay quản lý nào!', 25, '2025-04-17 09:50:19', NULL, '[\"./uploads/product_gallery/2021_05_14_14_13_53_1-390x510.webp\", \"./uploads/product_gallery/nxbtre_full_09462021_024609.webp\", \"./uploads/product_gallery/nxbtre_full_09462021_024609_1 (1).webp\", \"./uploads/product_gallery/nxbtre_full_09462021_024609_1.webp\"]', 1),
(144, 'Sóng Thần Công Nghệ - The Coming Wave', './uploads/product/8936219420303.webp', 'Cuốn sách như lời cảnh báo khẩn cấp từ người đồng sáng lập công ty trí tuệ nhân tạo tiên phong DeepMind, một phần của Google, Mustafa Suleyman, về những rủi ro chưa từng có mà AI và các công nghệ phát triển nhanh khác gây ra cho trật tự toàn cầu và cơ hội chúng ta có thể ngăn chặn chúng.  Chúng ta đang tiến tới một ngưỡng quan trọng trong lịch sử loài người. Chẳng bao lâu nữa bạn sẽ sống được bao quanh bởi AI, máy in DNA và máy tính lượng tử, mầm bệnh được thiết kế và vũ khí tự động, trợ lý robot, Chúng sẽ tổ chức cuộc sống của bạn, điều hành doanh nghiệp của bạn và điều hành các dịch vụ cốt lõi của Chính phủ.  Không ai trong chúng ta được chuẩn bị cho điều này cả.  Trong Sóng thần công nghệ, Suleyman cho thấy làn sóng công nghệ mới mạnh mẽ và tân tiến này sẽ tạo ra sự thịnh vượng to lớn nhưng cũng đe dọa tới nền tảng của trật tự toàn cầu; xác định thách thức tất yếu của thời đại chúng ta đang sống, chính là: “vấn đề ngăn chặn” - nhiệm vụ duy trì quyền kiểm soát các công nghệ mạnh mẽ.', 25, '2025-04-17 09:52:52', NULL, '[\"./uploads/product_gallery/8936219420303.webp\"]', 1),
(145, 'Tuổi Thơ Dữ Dội - Tập 1 (Tái Bản 2019)', './uploads/product/2021_07_29_16_46_46_1-390x510.webp', '“Tuổi Thơ Dữ Dội” là một câu chuyện hay, cảm động viết về tuổi thơ. Sách dày 404 trang mà người đọc không bao giờ muốn ngừng lại, bị lôi cuốn vì những nhân vật ngây thơ có, khôn ranh có, anh hùng có, vì những sự việc khi thì ly kỳ, khi thì hài hước, khi thì gây xúc động đến ứa nước mắt...  \"Tuổi Thơ Dữ Dội” không phải chỉ là một câu chuyện cổ tích, mà là một câu chuyện có thật ở trần gian, ở đó, những con người tuổi nhỏ đã tham gia vào cuộc kháng chiến chống xâm lược bảo vệ Tổ quốc với một chuỗi những chiến công đầy ắp li kì và hấp dẫn. Đọc Tuổi Thơ Dữ Dội chính là đọc lại một phần lịch sử tuổi thơ Việt, thấm đẫm xúc động, cảm phục và tự hào...\"  Nhà thơ - nhạc sĩ Nguyễn Trọng Tạo  \"Có một viên ngọc quý thời gian dành riêng để ban tặng con người, đó là Tuổi thơ. Viên ngọc màu nhiệm, trong sáng nhưng quá mong manh, không thể tìm thấy lần thứ hai trong đời. Và có một thế hệ người Việt chưa bao giờ được cầm viên ngọc trên tay, “Tuổi thơ dữ dội” của Phùng Quán được viết cho thế hệ đó. Hãy đọc để nhớ lại, để tự hào, và để cầu nguyện cho những Tuổi thơ sắp ra đời…”  Nhà văn Hoàng Phủ Ngọc Tường', 28, '2025-04-17 10:01:24', NULL, '[\"./uploads/product_gallery/2021_07_29_16_46_46_1-390x510.webp\", \"./uploads/product_gallery/2021_07_29_16_46_46_2-390x510.webp\", \"./uploads/product_gallery/2021_07_29_16_46_46_4-390x510.webp\", \"./uploads/product_gallery/2021_07_29_16_46_46_5-390x510.webp\", \"./uploads/product_gallery/image_187162.webp\"]', 1),
(146, '100 Kỹ Năng Sinh Tồn', './uploads/product/2021_02_25_16_03_44_1-390x510.webp', 'Bạn sẽ làm gì nếu như một ngày bị mắc kẹt giữa vùng lãnh thổ có dịch bệnh hoành hành, lạc ở nơi hoang dã, bị móc túi khi đi du lịch ở đất nước xa lạ, hay phải thoát ngay khỏi một vụ hỏa hoạn ở nhà cao tầng… ? Clint Emerson – một cựu Đặc vụ SEAL, lực lượng tác chiến đặc biệt của Hải quân Hoa Kỳ – muốn bạn có được sự chuẩn bị tốt nhất trong cuốn sách 100 kỹ năng sinh tồn này.  Rõ ràng, chi tiết và được trình bày dễ hiểu, cuốn sách này phác thảo chi tiết nhiều chiến lược giúp bảo vệ bạn và những người bạn yêu thương, dạy bạn cách suy nghĩ và hành động như một thành viên của lực lượng quân đội tinh nhuệ Hoa Kỳ. 100 kỹ năng sinh tồn thực sự là cuốn cẩm nang vô giá. Bởi lẽ, khi nguy hiểm xảy ra, bạn chẳng có nhiều thời gian cho những chỉ dẫn phức tạp đâu.', 28, '2025-04-17 10:03:28', NULL, '[\"./uploads/product_gallery/2021_02_25_16_03_44_1-390x510.webp\", \"./uploads/product_gallery/2021_02_25_16_03_44_2-390x510.webp\", \"./uploads/product_gallery/2021_02_25_16_03_44_3-390x510.webp\", \"./uploads/product_gallery/2021_02_25_16_03_44_5-390x510.webp\", \"./uploads/product_gallery/2021_02_25_16_03_44_7-390x510.webp\"]', 1),
(147, 'EQ - IQ Giúp Trẻ Làm Chủ Cảm Xúc', './uploads/product/8935212357494.webp', 'Đối với nhiều bậc phụ huynh, hướng dẫn trẻ từ 3-9 tuổi biểu lộ cảm xúc một cách lành mạnh, đúng mực, không cư xử ích kỷ, hờn dỗi, quậy phá là một thử thách thật sự. Liệu có cách nào hiệu quả để giúp các em hiểu rõ những cảm xúc hết sức tự nhiên đang xuất hiện trong lòng, từng bước điều hòa và bày tỏ chúng theo cách có lợi nhất cho sức khỏe tinh thần của mình?  Để trả lời câu hỏi đó, Đinh Tị Books xin giới thiệu với bạn đọc bộ sách EQ-IQ giúp trẻ làm chủ cảm xúc được tác giả người Pháp Audrey Bouquet viết theo phương pháp tâm thể (sophrology) rất phổ biến ở châu Âu. Bộ sách gồm 8 cuốn với minh họa dễ thương sẽ kể cho các em nghe câu chuyện của bạn Mèo con ngộ nghĩnh, lồng ghép vào đó những bài học, lời khuyên và giải pháp để các em biết cách đối diện với nỗi sợ, nỗi lo lắng, cơn giận, niềm vui cũng như nhiều cảm xúc khác nữa.', 28, '2025-04-17 10:05:53', NULL, '[\"./uploads/product_gallery/2023_03_13_15_34_17_1-390x510.jpg\", \"./uploads/product_gallery/2023_03_13_15_34_17_4-390x510.jpg\", \"./uploads/product_gallery/2023_03_13_15_34_17_7-390x510.jpg\", \"./uploads/product_gallery/2023_03_13_15_34_17_8-390x510.jpg\", \"./uploads/product_gallery/2023_03_13_15_34_17_10-390x510.jpg\", \"./uploads/product_gallery/8935212357494.webp\", \"./uploads/product_gallery/8935212357500.jpg\", \"./uploads/product_gallery/8935212357531.jpg\"]', 1),
(148, 'Tiểu Sử Các Quốc Gia Qua Góc Nhìn Lầy Lội', './uploads/product/image_229833.webp', 'Iceland dân số ít ỏi mà dám đọ sức với Anh? Na Uy in hình con cá ướp muối lên tờ tiền? Anh có thật là đế quốc mặt trời không bao giờ lặn? Đan Mạch là vương quốc mộng ảo còn Hà Lan là đất nước của tự do thực sự? Bỉ từng được giải cứu nhờ bãi nước tiểu của một cậu bé? Thụy Sĩ siêu giàu có nhờ trung lập, Ý chỉ quan tâm tận hưởng cuộc sống? Ai Cập thích xây kim tự tháp, Nam Phi nằm ở châu Phi nhưng lại từng kỳ thị người da đen, Argentina mê bóng đá hơn kiếm tiền…?', 28, '2025-04-17 10:08:25', NULL, '[\"./uploads/product_gallery/2024_06_01_11_37_36_2-390x510.jpg\", \"./uploads/product_gallery/2024_06_01_11_37_36_5-390x510.jpg\", \"./uploads/product_gallery/2024_06_01_11_37_36_6-390x510.jpg\", \"./uploads/product_gallery/2024_06_01_11_37_36_7-390x510.jpg\", \"./uploads/product_gallery/image_229833.webp\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_variant`
--

CREATE TABLE `product_variant` (
  `product_variant_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT NULL,
  `format` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product_variant`
--

INSERT INTO `product_variant` (`product_variant_id`, `product_id`, `quantity`, `price`, `sale_price`, `format`) VALUES
(140, 104, 10, 500, NULL, ''),
(141, 105, 10, 900, NULL, ''),
(142, 106, 9, 999, NULL, ''),
(143, 107, 10, 987, NULL, ''),
(144, 108, 10, 789, NULL, ''),
(145, 109, 95, 500, NULL, ''),
(146, 110, 59, 768, NULL, ''),
(147, 111, 9, 999, NULL, ''),
(148, 112, 77, 765, NULL, ''),
(149, 113, 55, 500, NULL, ''),
(150, 114, 100, 765, 2000, ''),
(151, 115, 100, 2000, 2000, ''),
(152, 116, 10, 879, 200, ''),
(153, 117, 54, 567, NULL, ''),
(154, 118, 19, 675, NULL, ''),
(155, 119, 15, 765, NULL, ''),
(156, 120, 55, 899, NULL, ''),
(157, 121, 18, 545, NULL, ''),
(158, 122, 59, 876, NULL, ''),
(159, 123, 99, 999, NULL, ''),
(160, 124, 65, 987, NULL, ''),
(161, 125, 10, 765, NULL, ''),
(162, 126, 7, 999, NULL, ''),
(163, 127, 100, 567, NULL, ''),
(164, 128, 67, 987, NULL, ''),
(165, 129, 9, 999, NULL, ''),
(166, 130, 100, 657, NULL, ''),
(167, 131, 76, 987, NULL, ''),
(168, 132, 75, 876, NULL, ''),
(169, 133, 68, 697, NULL, ''),
(170, 134, 93, 976, NULL, ''),
(171, 135, 16, 60000, 49000, 'Bìa mềm'),
(172, 135, 15, 50000, 43000, 'Bìa cứng'),
(173, 136, 17, 15, 13, 'Bìa mềm'),
(174, 136, 67, 11, 9, 'Bìa cứng'),
(175, 137, 200, 179000, 153100, 'Bìa cứng'),
(176, 137, 320, 159000, 143100, 'Bìa mềm'),
(177, 138, 60, 159000, 136100, 'Bìa cứng'),
(178, 138, 20, 129000, 116100, 'Bìa mềm'),
(179, 139, 40, 295000, 195500, 'Bìa cứng'),
(180, 139, 70, 195000, 175500, 'Bìa mềm'),
(181, 140, 16, 239000, 215100, 'Bìa cứng'),
(182, 140, 789, 219000, 195100, 'Bìa mềm'),
(183, 141, 68, 129000, 102650, 'Bìa cứng'),
(184, 141, 789, 109000, 92650, 'Bìa mềm'),
(185, 142, 38, 165000, 128700, 'Bìa mềm'),
(186, 142, 80, 195000, 168700, 'Bìa cứng'),
(187, 143, 678, 130000, 110500, 'Bìa mềm'),
(188, 143, 6789, 160000, 120500, 'Bìa cứng'),
(189, 144, 56, 299000, 224250, 'Bìa mềm'),
(190, 144, 45, 399000, 284250, 'Bìa mềm'),
(191, 145, 8954, 80000, 60000, 'Bìa mềm'),
(192, 145, 67, 100000, 80000, 'Bìa cứng'),
(193, 146, 674, 199000, 154250, 'Bìa cứng'),
(194, 146, 567, 99000, 74250, 'Bìa mềm'),
(195, 147, 67, 32000, 24000, 'Bìa mềm'),
(196, 147, 6789, 46000, 32000, 'Bìa cứng'),
(197, 148, 67, 215000, 172000, 'Bìa mềm'),
(198, 148, 90, 275000, 192000, 'Bìa cứng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role_id` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `avatar`, `address`, `email`, `phone`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(9, 'hiep', NULL, 'ninh binh', 'hiep@gmail.com', '0971647693', '12345', 1, NULL, NULL),
(11, 'Sang', NULL, 'Hà Nội', 'admin@gmail.com', '0987658799', '987789', 1, NULL, NULL),
(12, 'test', NULL, 'hhhh@gmail.com', 'parker.gaston@example.com', '0987658799', '12345', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `variant_id` (`variant_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `unique_user_product` (`user_id`,`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `variant_id` (`variant_id`),
  ADD KEY `order_detail_id` (`order_detail_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `coupon_id` (`coupon_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`product_variant_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `product_variant_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
