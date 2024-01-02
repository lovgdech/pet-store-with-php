-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `mega_accounts`
--

CREATE TABLE `mega_accounts` (
  `id` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mega_accounts`
--

INSERT INTO `mega_accounts` (`id`, `email`, `password`, `username`, `img`, `enable`) VALUES
('1702886490', 'test@test.com', '123456', 'Nguyễn Đặng Long', '', 1),
('1703572035', 'test2@test.com', '123456', 'Nguyễn Đặng Long', '', 1),
('1703747545', 'test3@test.com', '123456', 'test', '', 1),
('1703747823', 'test5@gmail.com', 'test5@gmail.com', 'Nguyễn Đặng Long', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mega_carts`
--

CREATE TABLE `mega_carts` (
  `id` varchar(13) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mega_carts`
--

INSERT INTO `mega_carts` (`id`, `user_id`, `product_id`, `quantity`, `note`) VALUES
('1703646737', '1703572035', '1702218159', 2, ''),
('1703747973', '1703747823', '1702217811', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `mega_products`
--

CREATE TABLE `mega_products` (
  `id` varchar(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `product_group_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quanlity` int(11) NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mega_products`
--

INSERT INTO `mega_products` (`id`, `product_id`, `product_group_id`, `name`, `title`, `description`, `image`, `price`, `quanlity`, `enable`, `note`) VALUES
('1702200960', 'p_001', 'pg_001', 'Combo Pate chó Plaisir Complete Terrine', 'Combo Pate chó Plaisir Complete Terrine 300g - 24 hộp - Mix vị Petmall', 'Pate chó Plaisir với hương vị thơm ngon, mang đến nguồn dinh dưỡng cân bằng.\r\nBổ sung các Vitamin và khoáng chất\r\nVitamin E: Chất chống oxy hóa giúp bảo vệ cơ thể, chống lại các gốc tự do trong da và các tế bào khác. Tốt cho hệ thống miễn dịch, cơ bắp, sức khỏe của tim, gan, màng tế bào thần kinh cũng như làn da và bộ lông khỏe mạnh của chó.\r\nVitamin B1: (Thiamine) cần thiết cho hoạt động của hệ thần kinh.\r\nVitamin B6: (Pyridoxyne) đóng vai trò quan trọng trong quá trình tổng hợp lipid và protein. Góp phần vào nhiều chức năng khác trong cơ thể, bao gồm sự hình thành các tế bào hồng cầu, điều chỉnh lượng đường trong máu và duy trì hệ thống miễn dịch.\r\n\r\nThương hiệu: Palisir\r\nTrọng lượng: 300g x 24 hộp                                                                                                                                                ', '1703748142_n_cho_the_real_grain_free_oven_baked_beef_adult_6kg_-_thit_bo_nuong_01_f2ac3c50dc384f13babf006d08fa16b0_master.png', 1387000, 2, 1, ''),
('1702217811', 'p_002', 'pg_001', 'Thức ăn chó Royal Canin Mini Starter Mother & Baby', 'Thức ăn chó Royal Canin Mini Starter Mother & BabyDog 1kg - Chó mẹ mang thai & chó con < 2 tháng Petmall', 'Công thức của ROYAL CANIN MINI STARTER MOTHER & BABYDOG là một giải pháp dinh dưỡng độc đáo đáp ứng được nhu cầu của chó mẹ và chó con trong 5 giai đoạn đầu của cuộc đời: mang thai, sinh nở, cho con bú, cai sữa và chó con tăng trưởng đến 2 tháng. \r\nHỗ trợ dinh dưỡng cho những bà mẹ và các chú chó đang phát triển.\r\nHỗ trợ nhu cầu năng lượng cao của chó mẹ đang cho con bú.\r\nHỗ trợ quá trình chuyển đổi từ sữa mẹ sang thức ăn đặc.\r\nHạt dễ dàng hấp thu cho các con chó con 100% dinh dưỡng cân bằng 100% đảm bảo an toàn \r\n\r\nLợi ích \r\nHỗ trợ thời kỳ mang thai và cho con bú\r\nĐặc điểm dinh dưỡng đặc biệt phù hợp với nhu cầu năng lượng cao của chó mẹ cuối giai đoạn mang thai và trong thời gian cho con bú.\r\n\r\nLý tưởng cho quá trình cai sữa \r\nCông thức dinh dưỡng đặc biệt giúp chó con dễ dàng chuyển từ sữa mẹ sang thức ăn khô.\r\n\r\nDễ hấp thu nước \r\nCác hạt thức ăn dễ dàng hấp thu nước để trở nên mềm hơn, ngon miệng hơn và thu hút chó mẹ cũng như chó con đang cai sữa. \r\n\r\nBắt đầu hoàn thiện sức khỏe tiêu hóa – Phòng ngừa tự nhiên \r\nROYAL CANIN STARTER MOTHER & BABYDOG là sự kết hợp của các yếu tố dinh dưỡng có trong sữa mẹ giúp tăng cường sức khoẻ tiêu hóa và giúp duy trì bảo vệ tự nhiên của chó con. \r\n \r\nNguyên liệu\r\nBột ngô, bột mỳ gà, gluten lúa mì, ngô, bột củ cải đường khô, hương vị tự nhiên, dầu cá, natri silic aluminat, dầu thực vật, phosphat kali, muối, canxi cacbonat, L-lysin, fructooligosaccharides, men thủy phân, cholin clorua , Taurine, kali clorua, L-tyrosine, vitamin [DL-alpha tocopherol acetate (nguồn vitamin E), L-ascorbyl-2-polyphosphate (nguồn vitamin C), biotin, D-calcium pantothenate, vitamin A acetate , Bổ sung niacin, pyridoxin hydrochloride (vitamin B6), thiamine mononitrat (vitamin B1), bổ sung riboflavin (vitamin B2), axit folic, bổ sung vitamin B12, bổ sung vitamin D3), chiết xuất từ hoa voi (Tagetes erecta L.) Proteinate, oxit kẽm, sắt sulfate, protein mangan, đồng proteinat, đồng sulfat, oxit mangan, canxi iodat, selenit natri), L-carnitine, betacarotene, rosemary, bảo quản với tocopherols hỗn hợp tự nhiên và axit xitric. \r\n\r\nThương hiệu: Royal Canin \r\nKhối lượng: 1kg', '1702217811_1_fe7445fd6af241ccaa254eba8aa4f497_master.webp', 309000, 999, 1, ''),
('1702217955', 'p_003', 'pg_001', 'Combo Sữa SONICE Milk Replacer Formula for Dogs & ', 'Combo Sữa SONICE Milk Replacer Formula for Dogs & Cats 200ml - 12 gói - Bổ sung dinh dưỡng cho Chó và Mèo Petmall', 'Sữa thú cưng tách Lactose tươi không chứa kháng sinh.\r\nBổ sung các chất dinh dưỡng như nam việt quất glucosamine taurine.\r\nHỗ trợ sức khỏe thận.\r\nCải thiện lượng nước uống.\r\nThích hợp cho chó và mèo ở mọi lứa tuổi. \r\n\r\nThành phần\r\nSữa tươi không kháng sinh loại 1A (nội địa), Taurine, Glucosamine, Canxi rong biển, Vitamin E, Chiết xuất nam việt quất, Omega 3, Co-enzym Q10, Lactase, Protein thô 3,0% trở lên, Chất béo thô 3,7% trở lên, Chất xơ thô 1,0% trở xuống, Tro thô 1,0% trở xuống, Canxi 0,12%.\r\n\r\nThương hiệu: SONICE\r\nThể tích: 200ml x 12 gói', '1702217955_1_db5aa8d1655e4cf29861dd121a7ff60c_master.webp', 1080000, 999, 1, ''),
('1702218034', 'p_004', 'pg_001', 'Combo Pate chó Royal Canin Urinary Canine S/O Grav', 'Combo Pate chó Royal Canin Urinary Canine S/O Gravy 100g - 36 gói - Hỗ trợ trị sỏi bàng quang Petmall', 'Pate cho chó Royal Canin Urinary S/O là thức ăn dinh dưỡng hoàn chỉnh cho chó, được sản xuất bởi thương hiệu Royal Canin nổi tiếng thế giới. \r\nVới công thức đặc biệt, Royal Canin Urinary giúp hỗ trợ hòa tan sỏi Struvite và giảm tái phát nhờ các thành phần có thể axit hóa nước tiểu, ít chứa phân tử Magie (thành phần chính của sỏi Struvite).\r\n\r\nLợi ích\r\nHỗ trợ hòa tan sỏi Struvite\r\nGiảm nguy cơ tái phát sỏi thận Struvite\r\nDuy trì cân bằng chất điện giải\r\nCung cấp đầy đủ dinh dưỡng cho chó trưởng thành\r\n\r\nThành phần\r\nThịt gà, gạo, gluten bắp, mỡ gà, protein động vật thủy phân, chất xơ thực vật, dầu cá, khoáng chất, men bia, chiết xuất men,...\r\n\r\nThương hiệu: Royal Canin\r\nTrọng lượng: 100g x 36 gói', '1702218034_1_bbf075d8a71c4fa8a14e3a9f4c58f55c_master.png', 1758000, 999, 1, ''),
('1702218090', 'p_005', 'pg_001', 'Combo Pate Royal Canin RECOVERY Canine Feline', 'Combo Pate Royal Canin RECOVERY Canine Feline 195g - 6 lon - Thức ăn phục hồi sức khoẻ chó mèo Petmall', 'Hàm lượng năng lượng của ROYAL CANIN RECOVERY giúp bù đắp sự sụt giảm lượng thức ăn đối với vật nuôi kén chọn ăn uống.\r\nKết cấu của ROYAL CANIN RECOVERY giúp việc cho ăn bằng ống tiêm hoặc ống truyền dễ dàng hơn rất nhiều.\r\nEPA/DHA, Axit béo Omega-3 chuỗi dài hỗ trợ hệ tiêu hóa khỏe mạnh\r\nSự kết hợp các dưỡng chất chống oxy hóa (Vitamin E, C, tuarine, lutein) làm giảm tác động oxy hóa và giúp trung hòa các tế bào tự do.\r\n\r\nChỉ định:\r\nBiếng ăn – suy dinh dưỡng;\r\nHỗ trợ dinh dưỡng hậu phẫu thuật và chăm sóc đặc biệt;\r\nĐiều dưỡng;\r\nĂn bằng tube;\r\nRối loạn chuyển hóa lipid gan ở mèo;\r\nMang thai, cho con bú, tăng trưởng.\r\n\r\nChống chỉ định:\r\nBệnh não do gan;\r\nViêm tụy cấp;\r\nHyperlipidaemia.\r\n\r\nThương hiệu: Royal Canin\r\nTrọng lượng: 195g x 6 lon', '1702218090_1_33be59e6d485490299a24ead57458948_master.png', 465000, 999, 1, ''),
('1702218159', 'p_006', 'pg_001', 'Thức ăn chó Taste Of The Wild Wetlands 500g - Wild', '[-15% nhập mã WILD] Thức ăn chó Taste Of The Wild Wetlands 500g - Wild Fowl, Chim cút nướng, vịt nướng & gà tây xông khói, mọi lứa tuổi - nhập USA Pet', 'Dành cho chó mọi độ tuổi\r\nVới 32% protein, Wetlands chứa nhiều năng lượng dễ tiêu hóa từ vịt, chim cút và gà tây, cùng với các loại rau, đậu và trái cây giàu chất dinh dưỡng. Sự kết hợp độc đáo giữa những loài gia cầm này mang đến cho những chú chó hương vị của hoang dã mà chúng không thể cưỡng lại đi kèm chế độ dinh dưỡng cân bằng qua nhiều nghiên cứu rõ ràng và chính xác.\r\n\r\nChim cút nướng, vịt nướng & gà tây xông khói: \r\nBộ ba gia cầm có hương vị phong phú cung cấp protein dễ tiêu hóa và hương vị tuyệt vời mà chú chó của bạn sẽ thèm muốn.\r\n\r\nNguồn men vi sinh riêng biệt: \r\nChế phẩm sinh học K9 độc quyền của Taste Of The Wild được phát triển đặc biệt cho các giống chó. Mỗi pound thức ăn chứa 80 triệu men vi sinh sống (1kg thức ăn chứa 176 triệu) giúp hệ tiêu hóa luôn ổn định và hệ miễn dịch khỏe mạnh.\r\n\r\nHỗn hợp dinh dưỡng cân bằng: \r\nNhiều nguồn protein kết hợp đảm bảo cung cấp đủ lượng dinh dưỡng để xây dựng cho chó một cơ thể hoàn hảo.\r\n\r\nSự cân bằng lý tưởng: \r\nCông thức này được thiết kế đặc biệt để cung cấp đầy đủ dinh dưỡng và giúp duy trì thể trạng khỏe mạnh cho chó ở mọi giai đoạn.\r\n\r\nRễ rau diếp xoăn khô: \r\nNguồn chất xơ chứa men vi sinh này là nguồn cung nguyên liệu cho các vi khuẩn có lợi trong hệ tiêu hóa.\r\n\r\nChống oxy hóa: \r\nCác loại đậu và trái cây đặc biệt như đậu Hà Lan, đậu Lăng, cà chua, việt quất, mâm xôi,… cung cấp dinh dưỡng hỗ trợ tổng thể cơ địa của chó, đồng thời đảm bảo cân bằng lượng khoáng Zn, Se, và Vitamin E hỗ trợ hệ miễn dịch.\r\n\r\nThành phần: \r\nThịt vịt (12,5%), bột thịt vịt (12,5%), bột thịt gà tây (12,5%), khoai lang, đậu Hà Lan, khoai tây, mỡ gà (được bảo quản bằng tocopherols hỗn hợp), sản phẩm trứng, hương vị tự nhiên, bột cá biển, protein khoai tây, chim cút nướng, vịt nướng, gà tây xông khói (1%), bã cà chua, muối, choline clorua, taurine, rễ rau diếp xoăn khô, cà chua, quả việt quất, quả mâm xôi, chiết xuất yucca schidigera, sản phẩm lên men Lactobacillus plantarum khô, sản phẩm lên men Bacillus subtilis khô, sản phẩm lên men Lactobacillus acidophilus khô, sản phẩm lên men Enterococcus faecium khô, sản phẩm lên men Bifidobacterium animalis khô, vitamin E, proteinat sắt, proteinat kẽm, proteinat đồng, sulfat sắt, sulfat kẽm, sulfat đồng, kali iốt, thiamine mononitrat (vitamin B1), proteinat mangan, oxit manga, axit ascorbic (vitamin C), vitamin A, biotin (vitamin B7/H), niacin (vitamin B3), canxi pantothenate, mangan sulfat, natri selen, pyridoxine hydrochloride (vitamin B6), vitamin B12, riboflavin (vitamin B2), vitamin D, axit folic (vitamin B9).\r\n\r\nChứa nguồn vi sinh vật sống (tồn tại) tự nhiên.\r\n\r\nThương hiệu: Taste Of The Wild\r\nKhối lượng: 500g', '1702218159__chim_cut_nuong__vit_nuong___ga_tay_xong_khoi__moi_lua_tuoi_-_nhap_usa_c8d7536d0034453d852d3ad9ff5746ad_master.webp', 198000, 999, 1, ''),
('1702218216', 'p_007', 'pg_001', 'Combo Pate chó Plaisir Complete Chunks in Gravy 10', 'Combo Pate chó Plaisir Complete Chunks in Gravy 100g - 48 gói - Mix vị Petmall', 'Thức ăn hỗn hợp hoán chỉnh cho chó trưởng thành vị bò và rau củ.\r\n\r\nLợi ích\r\nVitamin E: Chất chống oxy hóa giúp bảo vệ cơ thể, chống lại các gốc tự do trong da và các tế bào khác. Tốt cho hệ thống miễn dịch, cơ bắp, sức khỏe của tim, gan, màng tế bào thần kinh cũng như làn da và bộ lông khỏe mạnh của chó. \r\nVitamin B1: (Thiamine) cần thiết cho hoạt động của hệ thần kinh. \r\nVitamin B6: (Pyridoxyne) đóng vai trò quan trọng trong quá trình tổng hợp lipid và protein. Góp phần vào nhiều chức năng khác trong cơ thể, bao gồm sự hình thành các tế bào hồng cầu, điều chỉnh lượng đường trong máu và duy trì hệ thống miễn dịch. \r\n \r\nHướng dẫn sử dụng\r\nĐối với chó con đang hoạt động bình thường, hãy cho chó ăn nhiều bữa trong ngày với số lượng đã chỉ định. \r\nNên điều chỉnh lượng thức ăn phù hợp với hoạt động, giống và độ tuổi của chó. \r\nKhẩu phần ăn khuyến nghị hằng ngày:\r\nTrọng lượng chó con (kg) Khẩu phần ăn khuyến nghị hằng ngày (g) \r\n3kg - 300g \r\n5kg - 425g \r\n7kg - 550g \r\n10kg - 725g \r\n\r\nHướng dẫn bảo quản\r\nBảo quản ở nhiệt độ phòng\r\nSau khi mở, bảo quản trong tủ lạnh (+4°C). \r\n\r\nThương hiệu: Plaisir\r\nTrọng lượng: 100g x 48 gói', '1702218216_1_3add0eef27b742348c6d21ad1c2a8f6c_master.png', 498000, 999, 1, ''),
('1702218270', 'p_008', 'pg_001', 'Combo Pate chó LoveEat Chicken & Beef 90g - 6 lon ', 'Combo Pate chó LoveEat Chicken & Beef 90g - 6 lon - Thị gà và thịt bò Petmall', 'Sản phẩm là món ăn nhẹ giàu chất xơ. \r\nGiàu chất dinh dưỡng bao gồm các protein có ít và các axit béo không bão hoà. \r\nKích hoạt các tế bào soma để tăng độ ẩm. \r\n \r\nThành phần: \r\nThịt gà, Thịt bò, Carrageenan, Vitamin E, Nước tinh khiết. \r\n \r\nChỉ số dinh dưỡng: \r\n- Độ ẩm ≤ 84%. \r\n- Protein ≥ 10%. \r\n- Béo thô ≥ 0.5%. \r\n- Xơ thô ≤ 2.0%. \r\n- Khoáng tổng số ≤ 2.0% \r\n \r\nThương hiệu: LoveEat \r\nTrọng lượng: 90g x 6 lon', '1702218270_1_29208915508b49f5aa0ec3dd5d44dbe4_master.webp', 234000, 999, 1, ''),
('1702218314', 'p_009', 'pg_001', 'Thức ăn chó KEOS Chicken & Vegetables Adult Dog 1.', 'Thức ăn chó KEOS Chicken & Vegetables Adult Dog 1.5kg - Vị Gà & Rau củ, dành cho chó trưởng thành Petmall', 'Thức ăn chó vị thịt gà kết hợp với rau củ giàu dinh dưỡng cho thú cưng. \r\nNguyên liệu thô có khả năng tiêu hóa cao giúp thú cưng của bạn có hệ tiêu hóa khỏe mạnh. \r\nXương chắc khỏe, khớp khỏe mạnh với tỷ lệ cân bằng Canxi, Phốt pho và Vitamin D. \r\nChiết xuất Yucca để giảm mùi phân. \r\nLàn da khỏe mạnh và bộ lông sáng bóng với Omega 3, 6 và Vitamin A. \r\nGiúp giảm mảng bám và cao răng với Vitamin C. \r\n \r\nThành phần: \r\nSản phẩm ngũ cốc (Lúa mì, Ngô, Gạo), Bột đậu nành, Bột gia cầm, Mỡ gia cầm, Rau khô, Khoáng chất (Sắt, Đồng, Mangan, Kẽm, Iốt, Selen), Vitamin (A, D3, C, K3, B1, B2 , B6, B12, PP, E (Tocopherol), Canxi D-Pantothenate, Biotin, Axit Folic, Choline), Dicalcium Phosphate, Canxi Carbonate, Natri Clorua, Chất bảo quản, Chất chống oxy hóa, Chất tạo bọt, Axit amin (L-Lysine, DL Methionine) , Chiết xuất Yucca schidigera. \r\n \r\nThành phần phân tích: \r\n- Độ ẩm (max): 10,0% \r\n- Protein thô (min): 20,0% \r\n- Chất béo thô (min): 10,0 % \r\n- Tro thô (max): 12,0 % \r\n- Chất xơ (max): 4.0% \r\n- Canxi: 1,0 – 1,7 % \r\n- Phốt pho: 0,8 – 1,5 % \r\n \r\nThương hiệu: Keos \r\nKhối lượng: 1.5kg', '1702218314_1_1d164553bc574f4f84dcfa6a79815edc_master.png', 129000, 999, 1, ''),
('1702218382', 'p_010', 'pg_001', 'Combo Pate chó DoggyMan Chicken, Tuna, Pork & Vege', 'Combo Pate chó DoggyMan Chicken, Tuna, Pork & Vegetable 70g - 48 gói - Mix vị Petmall', 'Pate dành cho chó với nhiều hương vị thơm ngon, giàu dinh dưỡng.\r\nThành phần chính từ Thịt ức gà kết hợp với các nguyên liệu như Thịt bò, Thit heo, Cá thu, Cá ngừ... và các loại rau củ quả giàu vitamin và chất xơ.\r\n- Tăng cường sức khoẻ đường ruột, ngăn ngừa táo bón nhờ thành phần rau củ có trong thức ăn và giúp cơ thể đào thải độc tố ra ngoài.\r\n- Hàm lượng protein có trong thịt ức gà giúp cơ bắp phát triển.\r\n- Giàu vitamin, canxi, khoáng chất và axit béo không bão hoà (DHA) hỗ trợ tăng cường khả năng miễn dịch, cung cấp năng lượng hằng ngày.\r\n- Bổ sung hợp chất polyphenol có trong trà xanh giúp hạn chế mùi hôi phân. \r\n\r\nPate bao gồm các hương vị: \r\n- Chicken, Liver & Vegetable - Thịt gà, Gan gà và Rau củ.\r\n- Chicken, Cartilage & Vegetable - Thịt gà, Sụn gà và Rau củ.\r\n- Chicken, Tuna, Bonito & Vegetable - Thịt gà, Cá ngừ, Cá thu và Rau củ.\r\n- Chicken, Pork & Carrot - Thịt gà, Thịt heo và Cà rốt.\r\n- Chicken, Beef & Sweet Potato - Thịt gà, Thịt bò và Khoai lang. \r\n\r\nThương hiệu: DoggyMan\r\nTrọng lượng: 70g x 48 gói', '1702218382_1_bc9273815ea44027a2d3f234b7b16b08_master.png', 875000, 999, 1, ''),
('1702218498', 'p_011', 'pg_002', 'Sữa thú cưng tách Lactose tươi', 'Sữa thú cưng tách Lactose tươi không chứa kháng sinh. Bổ sung các chất dinh dưỡng như nam việt quất glucosamine taurine. Hỗ trợ sứ', 'Sữa thú cưng tách Lactose tươi không chứa kháng sinh.\r\nBổ sung các chất dinh dưỡng như nam việt quất glucosamine taurine.\r\nHỗ trợ sức khỏe thận.\r\nCải thiện lượng nước uống.\r\nThích hợp cho chó và mèo ở mọi lứa tuổi. \r\n\r\nThành phần\r\nSữa tươi không kháng sinh loại 1A (nội địa), Taurine, Glucosamine, Canxi rong biển, Vitamin E, Chiết xuất nam việt quất, Omega 3, Co-enzym Q10, Lactase, Protein thô 3,0% trở lên, Chất béo thô 3,7% trở lên, Chất xơ thô 1,0% trở xuống, Tro thô 1,0% trở xuống, Canxi 0,12%.\r\n\r\nThương hiệu: SONICE\r\nThể tích: 200ml x 12 gói            ', '1702218498_1_db5aa8d1655e4cf29861dd121a7ff60c_master.webp', 999000, 999, 1, ''),
('1702218549', 'p_012', 'pg_002', 'Thức ăn mèo Duolight Cat All Stage Salmon, Chicken', 'Thức ăn mèo Duolight Cat All Stage Salmon, Chicken & Vegetable 5kg - Vị Cá hồi, thịt gà và rau củ Petmall', 'Thức ăn hỗn hợp hoàn chỉnh dành cho mèo mọi lứa tuổi Duolight Cat All Stage.\r\nThức ăn dùng được cho mèo ở mọi giai đoạn.\r\nNhờ Omga-3 & 6 giúp cho mèo có làn da khỏe mạnh và bộ lông sáng bóng.\r\nVitamin A tăng cường thị lực, cho đôi mắt sáng tinh anh.\r\nKiểm soát và ngăn ngừa búi lông hình thành, hỗ trợ sức khỏe đường tiết niệu cho mèo. \r\n\r\nThành phần:  \r\nHỗn hợp protein động vật (thịt gà, cá hồi, thịt heo), ngô, gluten ngô, bột mì, dầu gà, bột củ cải đường, hương vị thủy phân, monocalcium phosphate, canxi cacbonat, lysine sulfat, cellulose, dl-methionine, muối, kali clorua, choline clorua, taurine, axit citric, hỗn hợp vitamin (Vitamin A, hỗ hợp Vitamin B, Vitamin D, Vitamin K, biotin, axit folic,...), hỗn hợp khoáng chất (Zn, Cu, Fe, Selen,...), chiết xuất Yucca, hỗn hợp rau củ.  \r\n\r\nChỉ số dinh dưỡng:  \r\nĐộ ẩm (min): 12% Protein (max): 32% Chất béo (max): 12% Xơ thô (min): 4% Khoáng tổng (min): 9%  \r\n\r\nThương hiệu: Duolight Cat \r\nKhối lượng: 5kg', '1702218549_1_083c8f2d123a48a5b31df7b883fab811_master.webp', 549000, 999, 1, ''),
('1702218626', 'p_013', 'pg_002', '[GIẢM 25%] Combo Pate mèo PURINA Felix Sensations ', '[GIẢM 25%] Combo Pate mèo PURINA Felix Sensations Jellies Chicken & Spinach in Jelly 85g - 48 gói Petmall', 'Thức ăn ướt hỗn hợp hoàn chỉnh và dinh dưỡng cân bằng vị thịt gà và rau chân vịt dạng thạch dành cho mèo trưởng thành.\r\n\r\nThành phần\r\nGà, protein lúa mì, gan cừu, axit amin, khoáng chất, vitamin, bột phụ phẩm gia cầm, cá ngừ, chất ổn định, mỡ gia cầm, đường, màu thực phẩm. \r\n\r\nHướng dẫn sử dụng\r\nCó thể cho ăn trực tiếp và chỉ cần bổ sung thêm nước là có thể duy trì sức khoẻ bình thường. \r\nBảo quản nhiệt độ phòng, để ngăn mát và nên dùng hết trong 48 tiếng sau khi mở nắp. \r\n\r\nHướng dẫn cho ăn\r\nCó thể dùng trực tiếp hoặc trộn với thức ăn khô. Đối với mèo trưởng thành (trung bình 4kg), cho ăn 3 đến 4 túi pate PURINA mỗi ngày trong ít nhất 2 bữa ăn riêng biệt. Luôn chuẩn bị nước sạch cho mèo uống sau khi ăn \r\n\r\nThương hiệu: Purina\r\nTrọng lượng: 85g x 48 gói            ', '1702218626_1__1__1b52b6d81ce347a7b5909469330dbc8b_master.webp', 860000, 999, 1, ''),
('1702218681', 'p_014', 'pg_002', 'Thức ăn mèo CAT EYE Premium 1.5kg - Dành cho mèo m', 'Thức ăn mèo CAT EYE Premium 1.5kg - Dành cho mèo mọi lứa tuổi Petmall', 'Với công thức chứa chất xơ tự nhiên và bột củ cải đường giúp kiểm soát chứng rụng lông.\r\nVitamin A và taurine giúp cho đôi mắt sáng, khỏe và thị lực tốt.\r\nDinh dưỡng hoàn chỉnh với chất chống oxy hóa và giàu đạm chất lượng cao.\r\nDễ tiêu hóa, giúp mèo hấp thụ tối đa dinh dưỡng từ các thực phẩm có ích, tránh lãng phí thức ăn.\r\nThịt gà chất lượng cao giúp mèo ăn ngon miệng hơn.\r\nKhông màu và hương liệu nhân tạo.\r\nĐược phối trộn đặc biệt dành cho mèo mọi lứa tuổi (3 tháng trở lên).\r\n \r\nThương hiệu: CAT EYE \r\nKhối lượng: 1.5kg            ', '1702218681_1_86ece6e6e6fe4274a28cdc2a92e45f35_master.png', 219000, 999, 1, ''),
('1702218729', 'p_015', 'pg_002', 'Combo Pate mèo WHISKAS 85g Mix vị - 24 gói Petmall', 'Combo Pate mèo WHISKAS 85g Mix vị - 24 gói Petmall', 'Sản phẩm chứa dầu thực vật cùng các vitamin, khoáng chất, đồng thời không có chất bảo quản, đem lại một giá trị dinh dưỡng lớn cung cấp cho các hoạt động trong cơ thể mèo, giúp mèo phát triển khỏe mạnh và đẩy lùi các loại bệnh tật.\r\nSản phẩm với nhiều hương vị thơm ngon, sẽ khiến các chú mèo thích thú, ăn được nhiều thực hơn.\r\n\r\nThành phần: \r\nCá biển, cá ngừ, cá thu, dầu thực vật, vitamin và khoáng chất\r\n\r\nHướng dẫn sử dụng\r\nDùng cho mèo ở các lứa tuổi, phù hợp với mọi trọng lượng.\r\nBảo quản nơi khô mát, tránh ánh nắng mặt trời chiếu trực tiếp.\r\n\r\nThương hiệu: WHISKAS\r\nTrọng lượng: 85g x 24 gói            ', '1702218729_1_4fc911e9738c4381a1be7549d275744c_master.webp', 386000, 999, 1, ''),
('1702218953', 'p_016', 'pg_002', 'Gel dinh dưỡng Richard is Organics Hairball Remedy', 'Gel dinh dưỡng Richard is Organics Hairball Remedy Chicken Flavor 120ml - Hỗ trợ búi lông ở mèo, vị Gà Petmall', 'Sản phẩm giúp hỗ trợ loại bỏ và ngăn ngừa búi lông thường gặp ở mèo.\r\nCông thức gel dễ dàng sử dụng với hương vị gà thơm ngon, giúp mèo kích thích khi ăn, có thể trộn trực tiếp với hạt.\r\nĐược làm bằng lecithin, sáp ong giúp bôi trơn lông và đào thải ra bên ngoài dễ dàng hơn.\r\n\r\nThành phần\r\nDầu đậu nành & dầu thực vật hydro hóa, Dextrose, Fructose, Dầu gan cá tuyết, Dầu hạt lanh, Hương gà tự nhiên, Lecithin, Vitamin E, Chiết xuất Calendula, Chiết xuất hương thảo, Silica.\r\n\r\nHướng dẫn cho ăn\r\nMèo trưởng thành: 1/2 thìa cà phê mỗi ngày hoặc khi cần thiết. \r\nSử dụng hai lần mỗi tuần, thường xuyên chải lông cho mèo.\r\n\r\nThương hiệu: Richard is Organics\r\nThể tích: 120ml            ', '1702218953_1_d5d297ae38694c2683e5d96403855808_master.png', 154444, 999, 1, ''),
('1702219001', 'p_017', 'pg_002', 'Pate mèo MARIA Chicken with Salmon in Gravy Kitten', 'Pate mèo MARIA Chicken with Salmon in Gravy Kitten 70g - Hộp 12 gói - Vị Thịt gà và Cá hồi, dành cho mèo con Petmall', 'Pate mèo MARIA Chicken with Salmon in Gravy được làm từ 100% thịt sống được lựa chọn cẩn thận. \r\nSản phẩm bổ sung axit béo omega-3 để cải thiện các chức năng của hàng rào bảo vệ não và da cũng như prebiotics giúp cải thiện sức khỏe hệ tiêu hóa của thú cưng. \r\nDành cho mèo con dưới 12 tháng tuổi.\r\n \r\nThành phần: \r\nThịt gà, Cá hồi, tinh bột mì biến tính, chất nhũ hoá Gôm Gua, hương liệu, dầu cá ngừ, Fructo-oligosaccharide\r\n \r\nHướng dẫn sử dụng: \r\nCho chó ăn trực tiếp. Số lượng thức ăn mà mèo yêu cầu phụ thuộc vào kích thước, độ tuổi, mức độ hoạt động và môi trường. \r\n \r\nThương hiệu: MARIA \r\nTrọng lượng: 70g x 12 gói            ', '1702219001_1_845a2750c0ef4a20a7538ed762b35a24_master.webp', 454500, 999, 1, ''),
('1702219037', 'p_018', 'pg_002', 'Thức ăn mèo KEOS+ Urinary Care Ocean Fish Adult Ca', 'Thức ăn mèo KEOS+ Urinary Care Ocean Fish Adult Cat 1.5kg - Vị Cá biển, hỗ trợ tiết niệu Petmall', 'Thức ăn cho mèo vị cá biển thơm ngon với công thức đặc biệt để hỗ trợ mèo gặp các vấn đề về đường tiết niệu thông thường.\r\nHỗn hợp axit và chiết xuất quế của chúng tôi giúp ngăn ngừa sỏi tiết niệu, cải thiện sự thoải mái khi đi tiểu nhưng cũng hỗ trợ chức năng gan và thận.\r\nLàn da khỏe mạnh và bộ lông sáng bóng với Omega 3 và 6 kết hợp với kẽm hữu cơ.\r\nHỗ trợ sức khỏe tiêu hóa và cân bằng hệ thực vật đường ruột nhờ protein, chất xơ và prebiotic chất lượng cao góp phần tạo nên chất lượng phân tốt.\r\nTăng sức đề kháng và phát triển hệ miễn dịch mạnh mẽ với sự hỗ trợ của Natural Shield.\r\nChứa taurine cho mắt và tim khỏe mạnh. \r\n\r\nThành phần: \r\nBột gia cầm, Gạo, Sản phẩm lúa mì, Protein thực vật cô đặc, Bột đậu nành, Mỡ gia cầm, Bột cá biển, Vỏ đậu nành (nguồn chất xơ), Dầu cá, Taurine, Khoáng chất (Sắt, Đồng, Mangan, Kẽm, Kẽm hữu cơ, Iốt, Selen, Selen hữu cơ), Vitamin (A, D3, C, K3, B1, B2, B6, B12, PP, E (Tocopherol), Canxi D-Pantothenate, Biotin, Axit Folic, Choline), Natri Disulfate, Kali Clorua, Monocalcium Phosphate, Canxi Carbonate, Natri Clorua, Chất bảo quản, Chất chống oxy hóa, Chất làm ngon, Men bất hoạt Saccharomyces Cerevisiae (prebiotic), Chất axit hóa, Chiết xuất quế, Axit amin (L-Lysine, DL Methionine), Chiết xuất thực vật (Citrus (prebiotic), Lá trà, Lá Moringa, hạt Camellia, Yucca schidigera). \r\n\r\nThành phần phân tích: \r\n- Độ ẩm (max): 10,0%\r\n- Protein thô (min) 32,0%\r\n- Chất béo thô (min): 12,0%\r\n- Tro thô (max): 9,0%\r\n- Chất xơ (max): 5,0%\r\n- Canxi: 1,0 – 1,7%\r\n- Phốt pho: 0,8 – 1,5% \r\n\r\nThương hiệu: Keos \r\nKhối lượng: 1.5kg                                    ', '1702253291_1_86ece6e6e6fe4274a28cdc2a92e45f35_master.png', 165000, 999, 1, ''),
('1702219094', 'p_019', 'pg_002', 'Pate mèo Bellotta Tuna 85g - Hộp 12 gói Petmall', 'Pate mèo Bellotta Tuna 85g - Hộp 12 gói Petmall', 'Pate Bellotta dạng gói cho Mèo đủ vị - Bellotta \r\nChứa Axit amin, Taurine cùng các loại Vitamin và Khoáng chất thiết yếu. \r\nSản phẩm tốt cho sự phát triển của mèo, đặc biệt là hỗ trợ chức năng tim và não bộ. \r\nBellotta không chứa chất bảo quản, đặc biệt an toàn cho sức khỏe của mèo. \r\n \r\nPate Bellotta hiện có sẵn 6 hương vị:\r\nTuna & Salmon: Cá ngừ & Cá hồi \r\nTuna: Cá ngừ \r\nTuna & Chicken: Cá ngừ & Gà \r\nTuna topping Anchovy in Jelly: Cá ngừ phủ topping Cá cơm dạng thạch \r\nTuna topping Shrimp in Jelly: Cá ngừ phủ topping Tôm dạng thạch \r\nTuna topping Saba in Jelly: Cá ngừ phủ topping cá Saba dạng thạch \r\nTuna topping Shirasu in Jelly: Cá ngừ phủ topping Shirasu dạng thạch \r\n \r\nThương hiệu: Bellotta \r\nTrọng lượng: 85g x 12 gói            ', '1702219094_1_d4959fa60c1b4bcda1e452a709653fad_master.webp', 228000, 999, 1, ''),
('1702219149', 'p_020', 'pg_002', 'Thịt hộp Meow Mix Seafood Selects Chunks in Gravy ', 'Thịt hộp Meow Mix Seafood Selects Chunks in Gravy with Tuna & Crab 78g - 1 hộp - Vị Cá ngừ và Cua Petmall', 'Pate dành cho mèo hương vị thơm ngon hấp dẫn từ cá ngừ và thịt cua. \r\nBổ sung đầy đủ dinh dưỡng, vitamin và khoáng chất cần thiết cho mèo. \r\nKích thích vị giác, tạo cảm giác ngon miệng cho mèo khi ăn. \r\n \r\nThành phần: \r\nNước dùng cá, Thịt gà, Cá ngừ, Gluten lúa mì, Gan gà, Tinh bột sapioca, Cua, Cá Trắng, Gia cầm, Trứng sấy khô, đường, Tricalcium phosphate tự nhiên, muối, tinh bột lúa mì natri tripolyphosphate, tinh bột khoai tây, kali clorua, Vitamin (vitamin esuppination, thiamine mononitrate, vitamin A bổ sung, niacin, d-calcium pantothenate, bổ sung riboflavin, bổ sung Vitamin B12, Pyridoxine Hydrochloride, axit FOUC, Menadione phức hợp natri bisuletie (nguồn Vitamin kactivity), Biotin, dầu cọ, đậu nành, protein phân lập, taurine, khoáng chất (ferrous sulfate, Kẽm oxit mangan sulfate, Copperamino Acid Complex, Natri Selenite), Choline cloruam magie sulfate, carrageena, lòng trắng trứng khô, natri phosphate. \r\n \r\nThành phần phân tích: \r\n- Protein thô (min): 8% \r\n- Chất béo thô (min): 2% \r\n- Chất xơ (max): 1,5% \r\n- Độ ẩm (max): 82% \r\n- Tro thô (max): 3% \r\n- Taurine (min): 0,05% \r\n \r\nHàm lượng Calo: 902 kcal/ kg, 72 kcal/ 2,75 OZ Cup. \r\n \r\nThương hiệu: Meow Mix\r\nTrọng lượng: 78g                                    ', '1702219149_1_091f804e0c2742cfb7cbd303dc855dda_master.webp', 169000, 999, 1, ''),
('1702359028', 'p_021', 'pg_001', 'Thức ăn chó Purina PRO PLAN Medium Adult Chicken', 'Thức ăn chó Purina PRO PLAN Medium Adult Chicken 10kg - Dành cho chó trưởng thành giống vừa vị gà Petmall 2023', 'Với thành phần dinh dưỡng cải tiến giàu chất xơ, khoáng chất và men vi sinh giúp quá trình tiêu hoá trở nên dễ dàng, giúp kéo dài tuổi thọ.\r\nCung cấp vitamin A, D, omega 3 & 6 giúp làn da và bộ lông khoẻ mạnh.\r\nChất chống oxy hoá giúp tăng cường sức khoẻ, duy trì hệ miễn dịch chống lại các bệnh cơ bản cho chó.\r\nCải thiện tình trạng xương khớp cho chó khi trưởng thành, bảo vệ các mô sụn hoạt động khoẻ mạnh.\r\n\r\nNguyên liệu: Gà (gà khử nước - nguồn glucosamine tự nhiên, thịt gà); tấm ủ bia, lúa mì nguyên hạt; yến mạch; lúa mạch; chất béo động vật được bảo quản bằng hỗn hợp tocopherols (dạng của vitamin E); đạm động vật tiêu hóa, khoáng, vitamin, axit amin, axit hữu cơ và chất tạo mùi tự nhiên (bao gồm canxi, phốt pho, natri, clorua, kali, magiê, vitamin E, vitamin B12, kẽm, sắt, vitamin B3, vitamin C, vitamin D, choline, mangan, vitamin B5, đồng, vitamin B1, vitamin B2, vitamin B6, axit folic, vitamin A, iốt, aluminosilicate, selen); bột củ cải đường; dầu cá và chất chống oxy hóa tự nhiên.\r\n\r\nChỉ tiêu chất lượng: Độ ẩm (max): 11,0 %, Protein thô (min): 23,0 %, Béo thô (min): 14,0 %, Xơ thô (max): 3,0 %, khoáng tổng số (max): 8,5%\r\nThương hiệu: Purina\r\nKhối lượng: 10kg', '1702359028_30_6928cd5b50d44f8a9dad1a36c942be9c_master.webp', 1921000, 999, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `mega_product_groups`
--

CREATE TABLE `mega_product_groups` (
  `id` varchar(11) NOT NULL,
  `product_group_id` varchar(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mega_product_groups`
--

INSERT INTO `mega_product_groups` (`id`, `product_group_id`, `name`, `note`) VALUES
('1702195948', 'pg_001', 'Thức ăn cho cún', 'Thức ăn dành cho cún con'),
('1702195980', 'pg_002', 'Thức ăn cho mèo', 'Thức ăn dành cho mèo con');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_long` text DEFAULT NULL,
  `description_short` varchar(255) DEFAULT NULL,
  `unitprice` decimal(6,2) NOT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `productweight` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `imagename` varchar(300) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `userrole` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mega_accounts`
--
ALTER TABLE `mega_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `mega_carts`
--
ALTER TABLE `mega_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mega_products`
--
ALTER TABLE `mega_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `mega_product_groups`
--
ALTER TABLE `mega_product_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_group_id` (`product_group_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`imagename`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
