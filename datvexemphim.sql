-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 09:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datvexemphim`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `TenDM` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `TenDM`) VALUES
(1, 'Phim Đang Chiếu'),
(2, 'Phim Sắp Chiếu');

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `tenphim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dm` int(11) DEFAULT NULL,
  `ChiTiet` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `tenphim`, `image`, `video`, `id_dm`, `ChiTiet`, `TomTat`) VALUES
(1, 'SPIDER-MAN:INTO THE SPIDER-VERSE\r\n\r\n', 'nguoinhen.jpg ', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201811/10063_301_100002.mp4', 1, 'Ngày phát hành: 14/12/2018 <br /><br />\r\nThông tin cơ bản: Animation USA (120Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound | Lồng tiếng,Phụ đề', 'Người Nhện: Vũ Trụ Mới xoay quanh cuộc sống thường nhật của Miles Morales, khi cậu vừa phải tập làm quen với mội trường học đường, vừa phải đối mặt với những xung đột trong cuộc sống. Tuy nhiên, không ai biết rằng cậu chính là Người Nhện, người anh hùng bí ẩn bảo vệ cho Brooklyn khỏi bọn trộm cướp. Trong lần gặp gỡ “tiền bối” Peter Parker, Miles Morales phát hiện ra thế giới mà cậu đang sống đang phải đối mặt với những kẻ thù mới đến từ một thực tại song song mang tên Spider-Verse. Liệu các Người Nhện có thể cứu lấy thế giới của mình?'),
(2, 'Ralph breaks the internet', 'Ralph breaks the internet.jpg', 'https://youtu.be/TCcH56toP3Q', 1, 'Ngày phát hành: 23/12/2018 <br /><br />\r\n\r\nThông tin cơ bản: Animation USA (115Phút) <br /><br /> \r\n\r\nLoại: 2D | Normal | Normal sound | Lồng tiếng,Phụ đề', 'Trở lại sau 6 năm, anh chàng hậu đậu Ralph và người bạn đồng hành Vanelllope rời khỏi thế giới game thùng nhỏ bé để khám phá thế giới Internet rộng lớn. Mục đích duy nhất của cả hai là tìm cách cứu lấy trò chơi Sugar Rush của Vanellope khỏi nguy cơ bị huỷ hoại. Thế nhưng, Vanellope nhận ra đây mới chính là nơi dành cho cô, trong khi đó Ralph lại lo sợ liệu anh có đánh mất người bạn duy nhất của mình'),
(3, 'Cỗ máy tử thần', 'comaytuthan.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201811/10061_301_100002.mp4', 1, 'Ngày phát hành: 7/12/2018 <br /><br />\r\nThông tin cơ bản: Action/Adventure/SF USA (130Phút) <br /><br />\r\nLoại: 2D,3D | Normal | Normal sound | Phụ đề <br />', 'Cỗ Máy Tử Thần lấy bối cảnh thế giới hậu tận thế khi các thành phố bắt đầu tàn lụi, con người phải tập thích nghi để tồn tại trong hoàn cảnh các nguồn tài nguyên đã cạn kiệt. Tại Traction City, anh chàng Tom Natsworthy gặp gỡ một cô gái ngoại lai bí ẩn tên Hester Shaw. Hai nhân vật với hai nét tính cách hoàn toàn đối lập vô tình bị đẩy vào cuộc hành trình đương đầu với các thế lực nguy hiểm để giành lấy quyền lực và tiếp tục sự sống.'),
(4, 'hunter killer', 'hunter killer.jpg', 'https://youtu.be/5KQNnA3Bu5U', 1, 'Ngày phát hành: 30/11/2018 <br /><br />\r\nThông tin cơ bản: Action USA (122Phút)<br /> <br />\r\nLoại: 2D | Normal | Normal sound | Lồng tiếng,Phụ đề <br />', '“Mật Vụ Giải Cứu” xoay quanh Joe Glass (Gerard Butler ) – một thuyền trưởng tàu ngầm Mỹ, phát hiện ra một âm mưu đảo chính quân sự và bắt cóc tổng thống Nga, được khởi sướng bởi một vị tướng phản trắc Sergi Àndropoyov (Michael Nyqvist). Vì sao Sergi Àndropoyov lại Những tình huống bất ngờ đầy kịch tính cùng những pha hành động gay cấn sẽ mang lại cho khán giả những cung bậc cảm xúc khó tả trong Hunter Killer: Mật Vụ Giải Cứu.'),
(5, 'Gái già lắm chiêu', 'gaigialamchieu.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201811/10064_301_100001.mp4', 1, 'Ngày phát hành: 7/12/2018 <br /> <br />\r\nThông tin cơ bản: Comedy Vietnam (105Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound | Phụ đề tiếng Anh ', 'Bộ phim xoay quanh hành trình tìm kiếm sự cân bằng trong công việc và tình yêu của gái già Ms. Q 34 tuổi (Ninh Dương Lan Ngọc đóng) – một mẫu phụ nữ độc lập, sang chảnh với phong cách sống thành thị. Cô rơi vào cuộc chơi “phi công trẻ - máy bay bà già” với anh chàng male escort bảnh bao, có thân hình vạm vỡ tên Jack, 25 tuổi (Lê Xuân Tiền đóng). Từ đó xảy ra nhiều câu chuyện dở khóc dở cười khiến cuộc sống và sự nghiệp của gái già Ms. Q thay đổi hoàn toàn.'),
(6, 'Hồn papa, da con gái ', 'honpapa.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10069_301_100002.mp4', 1, 'Ngày phát hành: 28/12/2018 <br /><br />\r\nThông tin cơ bản: Comedy Vietnam (100Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound | Phụ đề tiếng Anh', 'Trong Hồn Papa Da Con Gái, Thái Hòa vào vai Hải – một ông bố đơn thân khó chiều, tính tình có phần trẻ con, ham chơi và mê ngủ nướng. Phương châm sống của Hải là: “Vừa làm vừa chơi. Mà thôi, để mai Hải tính”, kết quả, trong mắt con gái, Hải trở thành một ông bố thất bại, mãi không chịu trưởng thành. Hơn 1 năm sau ngày tạo nên cơn sốt phòng vé mang tên Em Chưa 18, rốt cuộc Kaity Nguyễn cũng chịu tái xuất với một vai diễn vô cùng thú vị trong Hồn Papa Da Con Gái. Khác hẳn với cô nàng “chưa 18” Linh Đan, Kaity Nguyễn phiên bản Châu “ballet” là một nữ sinh mang tâm hồn “cụ non”, vô cùng kĩ tính, khó chiều, coi trọng việc học nhưng sở trường lại là múa ba lê và có một niềm đam mê mãnh liệt với make up. HỒN PAPA DA CON GÁI khởi chiếu từ 28.12.2018 trên toàn quốc.'),
(7, 'PARK HANG SEO', 'parkhangseo.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10081_301_100001.mp4', 1, 'Ngày phát hành: 11/12/2018 <br /><br />\r\nThông tin cơ bản: Korea (70Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound |Phụ đề', '\r\nHòa cùng giải AFF Cup 2018 và không khí bóng đá cuồng nhiệt trên cả nước, đây quả là một tin vui cho các tín đồ túc cầu khi bộ phim tài liệu “Park Hang Seo - Người Truyền Lửa” sẽ được trình chiếu tại các rạp chiếu phim trên toàn quốc từ ngày 14.12.2018. Đặc biệt, suất chiếu sớm ~ 1 suất duy nhất ngày 11.12.2018 từ 18:15 tới 19:45 tại 40 rạp trên toàn quốc. Giá vé đồng hạng 50,000 VNĐ, tặng kèm bắp smile miễn phí và dụng cụ cổ vũ bóng đá ~ sẵn sàng cho các fan hâm mộ quẩy hết mình cùng đội tuyển Việt Nam ngay tại rạp. Ngay sau đó, Lotte Cinema sẽ chiếu miễn phí trực tiếp tại rạp trận chung kết lượt đ1 AFF Cup: Việt Nam vs Malaysia ~ các fan hâm mộ hãy tới rạp cùng ủng hộ đội tuyển Việt Nam nhé.'),
(8, 'Mary poppins returns', 'marypoppins.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10077_301_100001.mp4', 2, 'Ngày phát hành: 28/12/2018 <br /><br />\r\nThông tin cơ bản: Drama USA (120Phút) <br /> <br />\r\nLoại: 2D | Normal | Normal sound | Phụ đề', 'Trong bối cảnh ở thời hậu đại suy thoái của London - nước Anh, Marry Popins, cô bảo mẫu với khả năng phép thuật bí ẩn, quay trở về để giúp đỡ thế hệ sau của gia đình Banks tìm thấy niềm vui và điều kì diệu trong cuộc sống mà họ đang dần đánh mất.'),
(9, 'Bumblebee', 'bumblebee.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10059_301_100002.mp4', 2, 'Ngày phát hành: 21/12/2018 <br /><br />\r\nThông tin cơ bản: Action/Adventure/SF USA (115Phút) <br /><br />\r\nLoại: 2D,3D | Normal | Normal sound | Phụ đề', '\r\nChuyện phim lấy bối cảnh vào năm 1987, khi chú “robot ong nghệ” Bumblebee đang tìm nơi ẩn náu tại một bãi rác ở thị trấn thuộc bờ biển ở California, Mỹ. Cô bạn Charlie, khi đó đang sắp sang 18 tuổi đã tình cờ phát hiện được Bumblebee trong tình trạng bị hư hại và vỡ thành nhiều mảnh sau khi đánh nhau và họ đã có một cuộc phiêu lưu thú vị sau đó.'),
(10, 'How to train your Dragon', 'dragon.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10065_301_100001.mp4', 2, '\r\nNgày phát hành: 22/02/2019 <br /><br />\r\nThông tin cơ bản: Animation USA (120Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound | Lồng tiếng,Phụ đề', 'Loạt phim How To Train Your Dragon có nội dung về tình bạn giữa một cậu bé Viking có tên là Hiccup và một con rồng thuộc loài Quỷ Bóng Đêm (Night Fury) được Hiccup đặt tên là Răng Sún. Trong phần đầu tiên, hai nhân vật chính đã cùng nhau phá bỏ định kiến của người Viking về loài rồng, giúp người và rồng có thể sống bên nhau hòa thuận, vui vẻ. Cuộc “lột xác” khi cả hai đã trưởng thành khi Hiccup và Răng Sún đã khám phá ra định mệnh của đời họ: Hiccup trở thành tộc trưởng của làng và Răng Sún là chú rồng đứng đầu loài. Câu chuyện về thế giới loài rồng tiếp tục tiếp diễn cho đến một hôm, khi cặp đôi đi vào một khu rừng nọ thì bắt gặp một nhân vật hoàn toàn mới: một cô rồng trắng xinh đẹp với đôi mắt biếc xanh như màu trời giống hệt Răng Sún, trừ màu da. Nếu như Răng Sún mang một màu da đen tuyền thì cô nàng rồng lại sở hữu làn da trắng muốt, khiến 2 chú rồng khi đứng cạnh nhau tựa như 2 nửa trọn vẹn của bóng đêm và ánh sáng. Gặp được tình yêu sét đánh, Răng Sún trở nên phấn khích tột độ và sẵn sàng làm mọi thứ để có thể được ở bên cô nàng đỏm dáng này. Thế nhưng trong quá trình “thả thính” ấy, “chàng thanh niên này” cũng gặp phải không ít tình huống “éo le”. Nội dung phần 3 kể về cuộc sống sau khi Hiccup tạo ra một thế giới hòa bình cho loài rồng, Răng Sún phát hiện ra một người bạn mới đầy bí hiểm. Lúc này Hiccup đã trở thành người lãnh đạo của cả làng gánh trên vai trọng trách gìn giữ sự an nguy cho mọi người. Vì vậy, cậu không thể mãi bị cuốn theo những cuộc phiêu lưu bất tận với Răng Sún. Và khi nguy hiểm ập đến ngôi làng, cả Hiccup và Răng Sún đều đã đứng lên, anh dũng bảo vệ giống loài của mình.\r\n\r\n'),
(11, 'Captain Marvel', 'captain.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10068_301_100002.mp4', 2, 'Ngày phát hành: 08/03/2019 <br /><br />\r\nThông tin cơ bản: Action/Adventure/SF USA (120Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound |Phụ đề', '\r\nKhông chỉ từng là một người người lính thuộc quân đội Mỹ, Carol Denvers còn chính là Captain Marvel. Liệu bộ phim đầu tiên về nữ chiến binh đầy quyền uy và sức mạnh của vũ trụ điện ảnh Marvel có đáp ứng được mong đợi của khán giả? Cao hơn, xa hơn, nhanh hơn! Siêu phẩm Đại Uý Marvel của Marvel Studios dự kiến sẽ công phá các phòng vé tại Việt Nam vào tháng 03.2019.'),
(12, 'Iceman 2', 'iceman2.jpg', 'http://www.lottecinemavn.com/Media/MovieFile/MovieMedia/201812/10070_301_100001.mp4', 2, 'Ngày phát hành: 14/12/2018 <br /><br />\r\nThông tin cơ bản: Action/Adventure/SF China (90Phút) <br /><br />\r\nLoại: 2D | Normal | Normal sound | Lồng tiếng,Phụ đề', '\r\nNgười Băng 2 tiếp nối chuyến phiêu lưu của Hạ Anh (Chân Tử Đan) - một Cẩm y vệ đời nhà Minh, sau khi được giải thoát khỏi lớp băng từ một trận đánh gần 4 thế kỷ trước. Tại Hồng Kông, Người Băng được hồi sinh, gặp gỡ và thân thiết với Tiểu Mỹ. Là người duy nhất nắm giữ bí mật du hành vượt thời gian, anh bị truy lùng bởi cảnh sát và truyền thông khi đang trên đường về lại Minh triều . Liệu anh có thể thay đổi lịch sử để bảo vệ những người thân yêu của mình?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `ngaysinh`) VALUES
(1, 'ngocha98', '12345678', 'Vũ Ngọc Hà', 'hatr@gmail.com', ''),
(4, 'vuthingocha', '12345678', 'Ha Vu Ngoc', 'dior@gmail.com', '1998-Oct-11'),
(3, 'ngocha12', 'dẻ', 'hung', 'dyt', '1999-May-16'),
(5, 'mynguyen', '12345678', 'Nguyen Thi My', 'mynguyen@gmail.com', '1998-Mar-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rk_1` (`id_dm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `khuyenmai` (
  `IdKM` int(15) NOT NULL,
  `TenKM` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChitietKM` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `khuyenmai` (`IdKM`, `TenKM`, `Image`, `ChitietKM`, `hinhanh`) VALUES
(1, 'Móc Khóa Cực Cool Chào Bumbleb', 'km1.png', 'Ngay từ khi mới xuất hiện trong Transformers, người máy Bumblebee đã nhanh chóng chiếm lấy trái tim người hâm mộ loạt phim <br/> <br/>\r\n             bom tấn này và trở thành một trong những cái tên đình đám nhất. Năm nay, Bumblebee sẽ “xuất trận” mà không có người bạn <br/> <br/>\r\n              Optimus Prime bên cạnh trong bộ phim của riêng cậu chàng. <br/> <br/>\r\n\r\n            Quay ngược thời gian, trở về với tuổi thơ của “chú ong nghệ”, HM Cinema dành tặng các Stars những móc khóa Bumblebee vô  <br/> <br/>\r\n            cùng đặc sắc chỉ 79.000 VNĐ. Đặc biệt, khi mua 01 móc khóa Bumblebee, các Stars sẽ được giảm 15.000 VNĐ khi mua Combo 1 <br/> <br/>\r\n             hoặc Combo 2. <br/> <br/>\r\n\r\n            *Giá áp dụng cho các rạp tại Tp.HCM <br/> <br/>\r\n\r\n            Móc khóa Bumblebee sẽ có mặt tại HM Cinema từ 07.12.2018. Chương trình sẽ kết thúc ngay khi lượng Combo được bán hết, tất  <br/> <br/>\r\n            nhiên kèm theo các ưu đãi: <br/> <br/>\r\n\r\n            •    Mỗi Combo sẽ đượ', 'km11.jpg'),
(2, 'Đón Giáng Sinh – Nhận Quà Xinh', 'km2.png', 'Những ngày tháng 12 bận rộn, các Stars đừng quên ghé rạp để thưởng thức loạt bom tấn trong và ngoài nước\r\n             dịp cuối năm và nhận ngay một phần quà đủ-dùng-cả-2019 từ HM Cinema nhé.<br/><br/>\r\n\r\n            Từ 01.12 – 31.12.2018, các Stars sẽ có cơ hội nhận được một quyển lịch để bàn xinh xắn với thiết kế độc đáo<\r\n             và ấn tượng khi mua từ 02 vé xem phim + combo 2/combo 2 extra/combo 3/combo 3 extra/combo phim.<br/><br/>\r\n            Điều kiện chương trình:<br/><br/>\r\n\r\n            Áp dụng cho khách hàng có thẻ thành viên HM Cinema.<br/>\r\n            Không áp dụng cho giao dịch sử dụng movie voucher.<br/>\r\n            Không áp dụng song song với các chương trình khuyến mãi khác.<br/>\r\n            Chương trình có thể kết thúc sớm nếu số lượng quà tặng được phát hết.<br/>\r\n            Trong mọi trường hợp, quyết định của HM Cinema là quyết định cuối cùng.<br/>', 'km11.jpg'),
(3, 'Ngày Tri Ân Của HM Cinema - Ng', 'km3.png', 'Từ lâu, chương trình Ngày Tri Ân Nhằm tạo điều kiện thuận lợi hơn cho các khách hàng thả ga xem phim đã trở nên quen thuộc<br/> <br/>\r\n             với các khách hàng thân yêu của HM Cinema.<br/> <br/>\r\nVậy là, ngày 03/12/2018, các Stars sẽ được xem phim thả ga với giá vé đồng nhất 45.000 đ cho tất cả các phim 2D. Ngoài ra, <br/> <br/>\r\n        trong Ngày Tri Ân này, khách hàng còn được nhận một ưu đãi đặc biệt - thoải mái thưởng thức bắp nước khi được 01 lần Refill <br/> <br/>\r\n        miễn phí với tất cả các phần bắp và nước ngọt dạng ly (Pepsi, 7Up, Mirinda Cam/Mirinda Sarsi) và Combo đang bán tại rạp.\r\n        <br/> <br/>\r\n        Điều kiện chương trình:\r\n        <br/> <br/>\r\n        1. Áp dụng cho ngày thứ 2 ĐẦU TIÊN của mỗi tháng \r\n        <br/> <br/>\r\n        2. Áp dụng cho mọi loại ghế & suất chiếu (Không áp dụng cho suất chiếu đặc biệt & suất chiếu sớm) \r\n        <br/> <br/> \r\n        3. Trong mọi trường hợp, quyết định của HM Cinema là quyế', 'km22.jpg'),
(4, 'Sở Hữu Quyển Sách Phép Thuật V', 'km4.png', 'Ra mắt từ năm 1997, bộ tiểu thuyết về cậu bé phù thủy Harry Potter đã làm mưa làm gió toàn cầu, bán được hơn 500 triệu bản và <br/> <br/>\r\n    dịch ra hơn 80 ngôn ngữ. Loạt phim chuyển thể từ tác phẩm này cũng thu về hơn 7,7 tỷ $. Được sự yêu mến của công chúng, dù Harry <br/> <br/>\r\n    Potter đã kết thúc, nhà văn J.K. Rowling lại tiếp tục mở ra thế giới phép thuật trong Fantastic Beasts.<br/> <br/>\r\n    Sau khi làm quen với loạt sinh vật huyền bí của thế giới phù thủy ở phần 1, loạt phim sẽ gay cấn hơn bao giờ hết khi cuộc chiến giữa <br/> <br/>\r\n    hai thế lực chính nghĩa và hắc ám được đẩy lên tới cao trào trong phần 2 mang tên The Crime Of Grindelwald.<br/> <br/>\r\n    Mừng sự trở lại của Newt Scamander và dàn “thú cưng”, HM Cinema dành tặng cho các Stars Combo Fantastic Beasts 2 độc-<br/> <br/>\r\n    đáo-nhất-từ-trước-đến-nay, mang hình dáng một quyển sách.<br/> <br/>\r\n    Từ 16/11/2018, nhanh chân đến HM Cinema và sở hữu Combo Fantastic Beasts 2 gồm 01 Tin Book đầy ắp bắp ngon và', 'km22.jpg'),
(5, 'Đăng Ký Nhận Quà - Xem Phim Th', 'km5.png', 'Từ 01.12.2018 - 31/01/2019, khi đăng ký thẻ tín dụng ACB, SCB, Standard Chartered và HSBC   <br> <br>\r\n    bạn sẽ nhận được voucher xem phim miễn phí từ HM Cinema.', 'km33.jpg'),
(6, 'Săn Vé Rinh Quà Liền Tay Cùng ', '\r\nkm6.png', 'Mọt phim” không thể bỏ qua cơ hội luyện phim không giới hạn cùng chương trình ưu đãi siêu cấp hấp dẫn nhất<br> <br>\r\n     từ HM Cinema và FIM+ ngay hôm nay!\r\n     <br/> <br/>\r\nTừ 24/11 – 28/01/2019, khi mua 02 vé phim 2D, các Stars sẽ nhận ngay 2 tháng xem phim thả ga hàng ngàn phim <br/> <br/>\r\n     trong kho phim Chuẩn tại ứng dụng xem phim bản quyền số 1 Việt Nam FIM+.<br/> <br/>\r\n\r\n     Điều kiện chương trình:<br/> <br/>\r\n\r\n    Ap dụng cho khách hàng mua 02 vé Online tại website: www.galaxycine.vn hoặc mua vé tại quầy vé của hệ thống Galaxy trên<br/> <br/>\r\n     toàn quốc.<br/> <br/>\r\n    Chương trình sẽ kết thúc vào ngày 28/01/2019 hoặc khi phát hết số lượng voucher tùy điều kiện nào đến trước<br/> <br/>\r\n    Trong mọi trường hợp quyết định của HM Cinema là quyết định cuối cùng<br/> <br/>\r\n    Thông tin chi tiết về ứng dụng FIM+ xin liên hệ hotline: 1800 9090', 'km55.jpg');

