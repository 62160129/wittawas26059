

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `article` (
  `id` int(20) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `head_img` varchar(100) DEFAULT '',
  `descript` mediumtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '1=public,2=private',
  `created` date DEFAULT curdate(),
  `view` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `article` (`id`, `name`, `head_img`, `descript`, `status`, `created`, `view`) VALUES
(1, 'addd', '', 'wow zxa', 0, '2021-03-25', 0),
(2, 'นี่คือสุดยอดของบทความที่น่าทึ่งที่สุดในโลก', '', 'ว้าวซ่าโอ้มายก็อด ว้าวๆๆ นี่ๆๆๆ', 0, '2021-03-25', 0);


ALTER TABLE `article`
  ADD PRIMARY KEY (`id`) USING BTREE;


ALTER TABLE `article`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

