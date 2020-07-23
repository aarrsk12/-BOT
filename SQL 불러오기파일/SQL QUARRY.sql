-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-04-13 17:12
-- 서버 버전: 5.5.59-log
-- PHP 버전: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `iamhawill`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_attendance`
--

CREATE TABLE `g5_attendance` (
  `id` int(11) NOT NULL,
  `mb_id` varchar(50) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `rank` varchar(2) NOT NULL DEFAULT '',
  `day` int(11) NOT NULL DEFAULT '0',
  `sumday` int(11) NOT NULL DEFAULT '0',
  `reset` int(11) NOT NULL DEFAULT '0',
  `reset2` int(11) NOT NULL DEFAULT '0',
  `reset3` int(11) NOT NULL DEFAULT '0',
  `point` int(11) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_attendance_setup`
--

CREATE TABLE `g5_attendance_setup` (
  `att_start_time` varchar(8) NOT NULL,
  `att_end_time` varchar(8) NOT NULL,
  `att_day_point` int(3) NOT NULL,
  `att_week_point` int(4) NOT NULL,
  `att_month_point` int(4) NOT NULL,
  `att_year_point` int(4) NOT NULL,
  `att_first_point` int(4) NOT NULL,
  `att_second_point` int(4) NOT NULL,
  `att_third_point` int(4) NOT NULL,
  `att_check_day` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_auth`
--

CREATE TABLE `g5_auth` (
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `au_menu` varchar(20) NOT NULL DEFAULT '',
  `au_auth` set('r','w','d') NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_autosave`
--

CREATE TABLE `g5_autosave` (
  `as_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL,
  `as_uid` bigint(20) UNSIGNED NOT NULL,
  `as_subject` varchar(255) NOT NULL,
  `as_content` text NOT NULL,
  `as_datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_autosave`
--

INSERT INTO `g5_autosave` (`as_id`, `mb_id`, `as_uid`, `as_subject`, `as_content`, `as_datetime`) VALUES
(61, 'admin', 19022015133335, '\다\운로드내\용', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(258, 258, 258); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(258, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">&nbsp;모든 \제품 \파일\은 \텔레그\램 \실\시�\�� \알림방에서 받을 \수 \있습\니다.</b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp;&nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255); line-height: 1.5;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp;&nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\">\저희 \피그샵\는 고�\��님들께 PC\전용 \텔레그\램�\� \텔레그\램 \어\플 \설치를 권장\합\니다.</span></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255); line-height: 1.5;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp; &nbsp;\어\플의 경우 검색해\도 \안나올 경우 Telegram \이\라고 검색하시면 \됩\니다.</span></b><br style=\"box-sizing: border-box;\"></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255);\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\">&nbsp;</p></div></td><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 0px;\"></td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">\텔레그\램\을 \설치해주세\요.</b></span></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; font-weight: bold; font-size: 14pt;\">&nbsp; &nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp;</span></span><a href=\"https://telegram.org/dl/desktop/win\" target=\"_blank\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration-line: none;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><b style=\"box-sizing: border-box;\">\다\운로​드</b></span></a>&nbsp;<span style=\"box-sizing: border-box; font-weight: bold; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp;\← \클릭하여 \다\운로드 \하시�\�� \설치해주세\요.</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp; &nbsp;\설치를 \하셨\다�\� \회원�\��입을 \해주세\요.</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\">&nbsp;</p></div></td><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 0px;\"></td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;<b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">\회원�\��입을 \하셨\다�\� \텔레그\램 \알림방에서 \제품 \다\운로드할수있습\니다.&nbsp;</span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp; &nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box; font-size: 14pt; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box; font-size: 14pt; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><b style=\"box-sizing: border-box;\">&nbsp; &nbsp;<a href=\"https://t.me/pig797979\" target=\"_blank\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration-line: none;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\">\텔레그\램 \알림�\� \접속하기</span></a></b></span><span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp;</span><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp;\← \클�\� \후 \접속해주세\요.</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(258, 258, 258);\"><br style=\"box-sizing: border-box;\"></span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(258, 258, 258);\"><br style=\"box-sizing: border-box;\"></span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(258, 258, 258);\">&nbsp;</span></b></span></p></div></td></tr></tbody></table>', '2019-02-20 15:14:34');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_ben`
--

CREATE TABLE `g5_ben` (
  `be_id` int(255) NOT NULL,
  `be_ip` varchar(255) DEFAULT NULL,
  `be_datetime` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board`
--

CREATE TABLE `g5_board` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `bo_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `bo_admin` varchar(255) NOT NULL DEFAULT '',
  `bo_list_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_read_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_write_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_reply_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_comment_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_upload_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_download_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_html_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_link_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_count_delete` tinyint(4) NOT NULL DEFAULT '0',
  `bo_count_modify` tinyint(4) NOT NULL DEFAULT '0',
  `bo_read_point` int(11) NOT NULL DEFAULT '0',
  `bo_write_point` int(11) NOT NULL DEFAULT '0',
  `bo_comment_point` int(11) NOT NULL DEFAULT '0',
  `bo_download_point` int(11) NOT NULL DEFAULT '0',
  `bo_use_category` tinyint(4) NOT NULL DEFAULT '0',
  `bo_category_list` text NOT NULL,
  `bo_use_sideview` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_file_content` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_secret` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_dhtml_editor` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_rss_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_good` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_nogood` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_name` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_signature` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_ip_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_file` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_content` tinyint(4) NOT NULL DEFAULT '0',
  `bo_table_width` int(11) NOT NULL DEFAULT '0',
  `bo_subject_len` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_subject_len` int(11) NOT NULL DEFAULT '0',
  `bo_page_rows` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `bo_new` int(11) NOT NULL DEFAULT '0',
  `bo_hot` int(11) NOT NULL DEFAULT '0',
  `bo_image_width` int(11) NOT NULL DEFAULT '0',
  `bo_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_include_head` varchar(255) NOT NULL DEFAULT '',
  `bo_include_tail` varchar(255) NOT NULL DEFAULT '',
  `bo_content_head` text NOT NULL,
  `bo_mobile_content_head` text NOT NULL,
  `bo_content_tail` text NOT NULL,
  `bo_mobile_content_tail` text NOT NULL,
  `bo_insert_content` text NOT NULL,
  `bo_gallery_cols` int(11) NOT NULL DEFAULT '0',
  `bo_gallery_width` int(11) NOT NULL DEFAULT '0',
  `bo_gallery_height` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_gallery_width` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_gallery_height` int(11) NOT NULL DEFAULT '0',
  `bo_upload_size` int(11) NOT NULL DEFAULT '0',
  `bo_reply_order` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_search` tinyint(4) NOT NULL DEFAULT '0',
  `bo_order` int(11) NOT NULL DEFAULT '0',
  `bo_count_write` int(11) NOT NULL DEFAULT '0',
  `bo_count_comment` int(11) NOT NULL DEFAULT '0',
  `bo_write_min` int(11) NOT NULL DEFAULT '0',
  `bo_write_max` int(11) NOT NULL DEFAULT '0',
  `bo_comment_min` int(11) NOT NULL DEFAULT '0',
  `bo_comment_max` int(11) NOT NULL DEFAULT '0',
  `bo_notice` text NOT NULL,
  `bo_upload_count` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_email` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_cert` enum('','cert','adult','hp-cert','hp-adult') NOT NULL DEFAULT '',
  `bo_use_sns` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_captcha` tinyint(4) NOT NULL DEFAULT '0',
  `bo_sort_field` varchar(255) NOT NULL DEFAULT '',
  `bo_1_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_2_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_3_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_4_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_5_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_6_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_7_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_8_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_9_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_10_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_1` varchar(255) NOT NULL DEFAULT '',
  `bo_2` varchar(255) NOT NULL DEFAULT '',
  `bo_3` varchar(255) NOT NULL DEFAULT '',
  `bo_4` varchar(255) NOT NULL DEFAULT '',
  `bo_5` varchar(255) NOT NULL DEFAULT '',
  `bo_6` varchar(255) NOT NULL DEFAULT '',
  `bo_7` varchar(255) NOT NULL DEFAULT '',
  `bo_8` varchar(255) NOT NULL DEFAULT '',
  `bo_9` varchar(255) NOT NULL DEFAULT '',
  `bo_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_board`
--

INSERT INTO `g5_board` (`bo_table`, `gr_id`, `bo_subject`, `bo_mobile_subject`, `bo_device`, `bo_admin`, `bo_list_level`, `bo_read_level`, `bo_write_level`, `bo_reply_level`, `bo_comment_level`, `bo_upload_level`, `bo_download_level`, `bo_html_level`, `bo_link_level`, `bo_count_delete`, `bo_count_modify`, `bo_read_point`, `bo_write_point`, `bo_comment_point`, `bo_download_point`, `bo_use_category`, `bo_category_list`, `bo_use_sideview`, `bo_use_file_content`, `bo_use_secret`, `bo_use_dhtml_editor`, `bo_use_rss_view`, `bo_use_good`, `bo_use_nogood`, `bo_use_name`, `bo_use_signature`, `bo_use_ip_view`, `bo_use_list_view`, `bo_use_list_file`, `bo_use_list_content`, `bo_table_width`, `bo_subject_len`, `bo_mobile_subject_len`, `bo_page_rows`, `bo_mobile_page_rows`, `bo_new`, `bo_hot`, `bo_image_width`, `bo_skin`, `bo_mobile_skin`, `bo_include_head`, `bo_include_tail`, `bo_content_head`, `bo_mobile_content_head`, `bo_content_tail`, `bo_mobile_content_tail`, `bo_insert_content`, `bo_gallery_cols`, `bo_gallery_width`, `bo_gallery_height`, `bo_mobile_gallery_width`, `bo_mobile_gallery_height`, `bo_upload_size`, `bo_reply_order`, `bo_use_search`, `bo_order`, `bo_count_write`, `bo_count_comment`, `bo_write_min`, `bo_write_max`, `bo_comment_min`, `bo_comment_max`, `bo_notice`, `bo_upload_count`, `bo_use_email`, `bo_use_cert`, `bo_use_sns`, `bo_use_captcha`, `bo_sort_field`, `bo_1_subj`, `bo_2_subj`, `bo_3_subj`, `bo_4_subj`, `bo_5_subj`, `bo_6_subj`, `bo_7_subj`, `bo_8_subj`, `bo_9_subj`, `bo_10_subj`, `bo_1`, `bo_2`, `bo_3`, `bo_4`, `bo_5`, `bo_6`, `bo_7`, `bo_8`, `bo_9`, `bo_10`) VALUES
('buyol', 'community', '구매\후기', '구매\후기', 'both', '', 1, 1, 3, 10, 10, 1, 1, 1, 10, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'buyol', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 23, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('download', '', '\다\운로드', '\다\운로드', 'both', '', 3, 3, 10, 10, 10, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'download', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 15, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, 'wr_good asc, wr_num, wr_reply', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('shop', '', '\제품상점', '\제품상점', 'both', '', 1, 1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'shop', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, 'wr_good asc, wr_num, wr_reply', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('notice', '', '공�\��사\항', '공�\��사\항', 'both', '', 1, 1, 10, 10, 10, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'notice', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 2, 0, 0, 0, 0, 0, '13', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('memo', '', '\사\용법', '\사\용법', 'both', '', 1, 1, 10, 10, 10, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'test', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 11, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, 'wr_good asc, wr_num, wr_reply', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('shoplog', '', '구매 기�\��', '구매 기�\��', 'both', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'basic', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('memos', '', '\동영상', '', 'both', '', 1, 1, 10, 10, 10, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'test2', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 1, 0, 3, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_file`
--

CREATE TABLE `g5_board_file` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `bf_no` int(11) NOT NULL DEFAULT '0',
  `bf_source` varchar(255) NOT NULL DEFAULT '',
  `bf_file` varchar(255) NOT NULL DEFAULT '',
  `bf_download` int(11) NOT NULL,
  `bf_content` text NOT NULL,
  `bf_filesize` int(11) NOT NULL DEFAULT '0',
  `bf_width` int(11) NOT NULL DEFAULT '0',
  `bf_height` smallint(6) NOT NULL DEFAULT '0',
  `bf_type` tinyint(4) NOT NULL DEFAULT '0',
  `bf_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_good`
--

CREATE TABLE `g5_board_good` (
  `bg_id` int(11) NOT NULL,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bg_flag` varchar(255) NOT NULL DEFAULT '',
  `bg_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_new`
--

CREATE TABLE `g5_board_new` (
  `bn_id` int(11) NOT NULL,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `bn_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_id` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_cert_history`
--

CREATE TABLE `g5_cert_history` (
  `cr_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `cr_company` varchar(255) NOT NULL DEFAULT '',
  `cr_method` varchar(255) NOT NULL DEFAULT '',
  `cr_ip` varchar(255) NOT NULL DEFAULT '',
  `cr_date` date NOT NULL DEFAULT '0000-00-00',
  `cr_time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_charge`
--

CREATE TABLE `g5_charge` (
  `ch_num` int(11) NOT NULL,
  `ch_buy` varchar(255) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `ch_point` varchar(255) NOT NULL,
  `ch_datetime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_coin`
--

CREATE TABLE `g5_coin` (
  `co_no` int(11) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `mb_coin` varchar(255) NOT NULL,
  `co_subject` varchar(255) NOT NULL,
  `co_datetime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_config`
--

CREATE TABLE `g5_config` (
  `cf_title` varchar(255) NOT NULL DEFAULT '',
  `cf_theme` varchar(255) NOT NULL DEFAULT '',
  `cf_admin` varchar(255) NOT NULL DEFAULT '',
  `cf_admin_email` varchar(255) NOT NULL DEFAULT '',
  `cf_admin_email_name` varchar(255) NOT NULL DEFAULT '',
  `cf_add_script` text NOT NULL,
  `cf_use_point` tinyint(4) NOT NULL DEFAULT '0',
  `cf_point_term` int(11) NOT NULL DEFAULT '0',
  `cf_use_copy_log` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_email_certify` tinyint(4) NOT NULL DEFAULT '0',
  `cf_login_point` int(11) NOT NULL DEFAULT '0',
  `cf_cut_name` tinyint(4) NOT NULL DEFAULT '0',
  `cf_nick_modify` int(11) NOT NULL DEFAULT '0',
  `cf_new_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_new_rows` int(11) NOT NULL DEFAULT '0',
  `cf_search_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_connect_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_faq_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_read_point` int(11) NOT NULL DEFAULT '0',
  `cf_write_point` int(11) NOT NULL DEFAULT '0',
  `cf_comment_point` int(11) NOT NULL DEFAULT '0',
  `cf_download_point` int(11) NOT NULL DEFAULT '0',
  `cf_write_pages` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_pages` int(11) NOT NULL DEFAULT '0',
  `cf_link_target` varchar(255) NOT NULL DEFAULT '',
  `cf_delay_sec` int(11) NOT NULL DEFAULT '0',
  `cf_filter` text NOT NULL,
  `cf_possible_ip` text NOT NULL,
  `cf_intercept_ip` text NOT NULL,
  `cf_analytics` text NOT NULL,
  `cf_add_meta` text NOT NULL,
  `cf_syndi_token` varchar(255) NOT NULL,
  `cf_syndi_except` text NOT NULL,
  `cf_member_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_use_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_tel` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_tel` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_hp` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_hp` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_addr` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_addr` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_signature` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_signature` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_profile` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_profile` tinyint(4) NOT NULL DEFAULT '0',
  `cf_register_level` tinyint(4) NOT NULL DEFAULT '0',
  `cf_register_point` int(11) NOT NULL DEFAULT '0',
  `cf_icon_level` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_recommend` tinyint(4) NOT NULL DEFAULT '0',
  `cf_recommend_point` int(11) NOT NULL DEFAULT '0',
  `cf_leave_day` int(11) NOT NULL DEFAULT '0',
  `cf_search_part` int(11) NOT NULL DEFAULT '0',
  `cf_email_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_group_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_board_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_write` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_comment_all` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_mb_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_mb_member` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_po_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_prohibit_id` text NOT NULL,
  `cf_prohibit_email` text NOT NULL,
  `cf_new_del` int(11) NOT NULL DEFAULT '0',
  `cf_memo_del` int(11) NOT NULL DEFAULT '0',
  `cf_visit_del` int(11) NOT NULL DEFAULT '0',
  `cf_popular_del` int(11) NOT NULL DEFAULT '0',
  `cf_optimize_date` date NOT NULL DEFAULT '0000-00-00',
  `cf_use_member_icon` tinyint(4) NOT NULL DEFAULT '0',
  `cf_member_icon_size` int(11) NOT NULL DEFAULT '0',
  `cf_member_icon_width` int(11) NOT NULL DEFAULT '0',
  `cf_member_icon_height` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_size` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_width` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_height` int(11) NOT NULL DEFAULT '0',
  `cf_login_minutes` int(11) NOT NULL DEFAULT '0',
  `cf_image_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_flash_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_movie_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_formmail_is_member` tinyint(4) NOT NULL DEFAULT '0',
  `cf_page_rows` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `cf_visit` varchar(255) NOT NULL DEFAULT '',
  `cf_max_po_id` int(11) NOT NULL DEFAULT '0',
  `cf_stipulation` text NOT NULL,
  `cf_privacy` text NOT NULL,
  `cf_open_modify` int(11) NOT NULL DEFAULT '0',
  `cf_memo_send_point` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_new_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_mobile_search_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_mobile_connect_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_mobile_faq_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_mobile_member_skin` varchar(255) NOT NULL DEFAULT '',
  `cf_captcha_mp3` varchar(255) NOT NULL DEFAULT '',
  `cf_editor` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_cert_ipin` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_hp` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kcb_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kcp_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_lg_mid` varchar(255) NOT NULL DEFAULT '',
  `cf_lg_mert_key` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_limit` int(11) NOT NULL DEFAULT '0',
  `cf_cert_req` tinyint(4) NOT NULL DEFAULT '0',
  `cf_sms_use` varchar(255) NOT NULL DEFAULT '',
  `cf_sms_type` varchar(10) NOT NULL DEFAULT '',
  `cf_icode_id` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_pw` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_server_ip` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_server_port` varchar(255) NOT NULL DEFAULT '',
  `cf_googl_shorturl_apikey` varchar(255) NOT NULL DEFAULT '',
  `cf_social_login_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_social_servicelist` varchar(255) NOT NULL DEFAULT '',
  `cf_payco_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_payco_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_facebook_appid` varchar(255) NOT NULL,
  `cf_facebook_secret` varchar(255) NOT NULL,
  `cf_twitter_key` varchar(255) NOT NULL,
  `cf_twitter_secret` varchar(255) NOT NULL,
  `cf_google_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_google_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_rest_key` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_client_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_js_apikey` varchar(255) NOT NULL,
  `cf_captcha` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_site_key` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_secret_key` varchar(100) NOT NULL DEFAULT '',
  `cf_1_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_2_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_3_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_4_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_5_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_6_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_7_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_8_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_9_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_10_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_1` varchar(255) NOT NULL DEFAULT '',
  `cf_2` varchar(255) NOT NULL DEFAULT '',
  `cf_3` varchar(255) NOT NULL DEFAULT '',
  `cf_4` varchar(255) NOT NULL DEFAULT '',
  `cf_5` varchar(255) NOT NULL DEFAULT '',
  `cf_6` varchar(255) NOT NULL DEFAULT '',
  `cf_7` varchar(255) NOT NULL DEFAULT '',
  `cf_8` varchar(255) NOT NULL DEFAULT '',
  `cf_9` varchar(255) NOT NULL DEFAULT '',
  `cf_10` varchar(255) NOT NULL DEFAULT '',
  `cf_11` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_config`
--

INSERT INTO `g5_config` (`cf_title`, `cf_theme`, `cf_admin`, `cf_admin_email`, `cf_admin_email_name`, `cf_add_script`, `cf_use_point`, `cf_point_term`, `cf_use_copy_log`, `cf_use_email_certify`, `cf_login_point`, `cf_cut_name`, `cf_nick_modify`, `cf_new_skin`, `cf_new_rows`, `cf_search_skin`, `cf_connect_skin`, `cf_faq_skin`, `cf_read_point`, `cf_write_point`, `cf_comment_point`, `cf_download_point`, `cf_write_pages`, `cf_mobile_pages`, `cf_link_target`, `cf_delay_sec`, `cf_filter`, `cf_possible_ip`, `cf_intercept_ip`, `cf_analytics`, `cf_add_meta`, `cf_syndi_token`, `cf_syndi_except`, `cf_member_skin`, `cf_use_homepage`, `cf_req_homepage`, `cf_use_tel`, `cf_req_tel`, `cf_use_hp`, `cf_req_hp`, `cf_use_addr`, `cf_req_addr`, `cf_use_signature`, `cf_req_signature`, `cf_use_profile`, `cf_req_profile`, `cf_register_level`, `cf_register_point`, `cf_icon_level`, `cf_use_recommend`, `cf_recommend_point`, `cf_leave_day`, `cf_search_part`, `cf_email_use`, `cf_email_wr_super_admin`, `cf_email_wr_group_admin`, `cf_email_wr_board_admin`, `cf_email_wr_write`, `cf_email_wr_comment_all`, `cf_email_mb_super_admin`, `cf_email_mb_member`, `cf_email_po_super_admin`, `cf_prohibit_id`, `cf_prohibit_email`, `cf_new_del`, `cf_memo_del`, `cf_visit_del`, `cf_popular_del`, `cf_optimize_date`, `cf_use_member_icon`, `cf_member_icon_size`, `cf_member_icon_width`, `cf_member_icon_height`, `cf_member_img_size`, `cf_member_img_width`, `cf_member_img_height`, `cf_login_minutes`, `cf_image_extension`, `cf_flash_extension`, `cf_movie_extension`, `cf_formmail_is_member`, `cf_page_rows`, `cf_mobile_page_rows`, `cf_visit`, `cf_max_po_id`, `cf_stipulation`, `cf_privacy`, `cf_open_modify`, `cf_memo_send_point`, `cf_mobile_new_skin`, `cf_mobile_search_skin`, `cf_mobile_connect_skin`, `cf_mobile_faq_skin`, `cf_mobile_member_skin`, `cf_captcha_mp3`, `cf_editor`, `cf_cert_use`, `cf_cert_ipin`, `cf_cert_hp`, `cf_cert_kcb_cd`, `cf_cert_kcp_cd`, `cf_lg_mid`, `cf_lg_mert_key`, `cf_cert_limit`, `cf_cert_req`, `cf_sms_use`, `cf_sms_type`, `cf_icode_id`, `cf_icode_pw`, `cf_icode_server_ip`, `cf_icode_server_port`, `cf_googl_shorturl_apikey`, `cf_social_login_use`, `cf_social_servicelist`, `cf_payco_clientid`, `cf_payco_secret`, `cf_facebook_appid`, `cf_facebook_secret`, `cf_twitter_key`, `cf_twitter_secret`, `cf_google_clientid`, `cf_google_secret`, `cf_naver_clientid`, `cf_naver_secret`, `cf_kakao_rest_key`, `cf_kakao_client_secret`, `cf_kakao_js_apikey`, `cf_captcha`, `cf_recaptcha_site_key`, `cf_recaptcha_secret_key`, `cf_1_subj`, `cf_2_subj`, `cf_3_subj`, `cf_4_subj`, `cf_5_subj`, `cf_6_subj`, `cf_7_subj`, `cf_8_subj`, `cf_9_subj`, `cf_10_subj`, `cf_1`, `cf_2`, `cf_3`, `cf_4`, `cf_5`, `cf_6`, `cf_7`, `cf_8`, `cf_9`, `cf_10`, `cf_11`) VALUES
('', 'basic', 'admin', 'admin@domain.com', '그누보\드5', '', 1, 0, 1, 0, 0, 15, 60, 'basic', 15, 'basic', 'basic', 'basic', 0, 0, 0, 0, 10, 5, '_blank', 30, '18\아,18\놈,18\새끼,18\뇬,18\노,18것,18\넘,개년,개놈,개뇬,개새,개색끼,개세\끼,개세\이,개쉐이,개쉑,개쉽,개시키,개자식,개�\��,게색기,게색끼,광뇬,\뇬,\눈�\��,\뉘미\럴,\니�\��미,\니기�\�,\니미,\도촬,\되�\��래,\뒈져\라,\뒈�\��다,\디져\라,\디�\��다,\디�\��래,병쉰,병신,뻐큐,뻑큐,뽁큐,\삐리\넷,\새�\��,\쉬발,\쉬�\�,\쉬\팔,\쉽\알,\스\패\킹,\스\팽,\시�\��,\시�\��랄,\시�\��럴,\시�\��리,\시�\��,\시�\��랄,\시팍,\시팔,\시펄,\실�\�,\십8,\십\쌔,\십�\�,\싶\알,\쌉년,\썅놈,\쌔끼,\쌩\쑈,\썅,\써벌,\썩\을년,\쎄�\��,\쎄엑,\쓰바,\쓰발,\쓰벌,\쓰\팔,\씨8,\씨\댕,\씨바,\씨발,\씨뱅,\씨봉알,\씨부랄,\씨부럴,\씨부렁,\씨부리,\씨불,\씨브랄,\씨빠,\씨�\�,\씨뽀랄,\씨\팍,\씨\팔,\씨\펄,\씹,\아�\��리,\아�\��이,\엄창,\접년,\잡\놈,\재\랄,\저주글,조�\��,조�\��,조쟁이,조�\��냐,조�\��다,조�\��래,존나,존니,좀물,좁년,좃,좆,좇,쥐랄,쥐롤,쥬디,지랄,지럴,지롤,지미\랄,쫍빱,\凸,\퍽\큐,뻑큐,빠큐,\ㅅㅂㄹ\ㅁ', '', '', '', '', '', '', 'basic', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 2, 0, 0, 30, 10000, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'admin,administrator,관리\자,\운\영자,\어\드민,주인\장,webmaster,\웹마스\터,sysop,\시삽,\시샵,manager,매니저,메니저,root,루트,su,guest,방문객', '', 30, 180, 180, 180, '2019-04-13', 2, 5000, 22, 22, 50000, 60, 60, 10, 'gif|jpg|jpeg|png', 'swf', 'asx|asf|wmv|wma|mpg|mpeg|mov|avi|mp3', 1, 15, 15, '\오\늘:2,\어\제:,최대:2,\전체:2', 0, '\해\당 \홈페이지에 맞는 \회원�\��입약관을 \입력\합\니다.', '\해\당 \홈페이지에 맞는 개인\정보처리방침\을 \입력\합\니다.', 0, 500, 'basic', 'basic', 'basic', 'basic', 'basic', 'basic', 'smarteditor2', 0, '', '', '', '', '', '', 2, 0, '', '', '', '', '211.172.232.124', '7295', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kcaptcha', '', '', '', '', '', 'https://cdn.discordapp.com/attachments/544763551341084683/566453658250903566/-1.png', 'https://cdn.discordapp.com/attachments/544763551341084683/566453658250903566/-1.png', '1', '0', '', 'HALID#7777', '', '', '', '', '500000', '500000', '0', '0', '', '', '1000', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_content`
--

CREATE TABLE `g5_content` (
  `co_id` varchar(20) NOT NULL DEFAULT '',
  `co_html` tinyint(4) NOT NULL DEFAULT '0',
  `co_subject` varchar(255) NOT NULL DEFAULT '',
  `co_content` longtext NOT NULL,
  `co_mobile_content` longtext NOT NULL,
  `co_skin` varchar(255) NOT NULL DEFAULT '',
  `co_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `co_tag_filter_use` tinyint(4) NOT NULL DEFAULT '0',
  `co_hit` int(11) NOT NULL DEFAULT '0',
  `co_include_head` varchar(255) NOT NULL,
  `co_include_tail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_faq`
--

CREATE TABLE `g5_faq` (
  `fa_id` int(11) NOT NULL,
  `fm_id` int(11) NOT NULL DEFAULT '0',
  `fa_subject` text NOT NULL,
  `fa_content` text NOT NULL,
  `fa_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_faq_master`
--

CREATE TABLE `g5_faq_master` (
  `fm_id` int(11) NOT NULL,
  `fm_subject` varchar(255) NOT NULL DEFAULT '',
  `fm_head_html` text NOT NULL,
  `fm_tail_html` text NOT NULL,
  `fm_mobile_head_html` text NOT NULL,
  `fm_mobile_tail_html` text NOT NULL,
  `fm_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_group`
--

CREATE TABLE `g5_group` (
  `gr_id` varchar(10) NOT NULL DEFAULT '',
  `gr_subject` varchar(255) NOT NULL DEFAULT '',
  `gr_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `gr_admin` varchar(255) NOT NULL DEFAULT '',
  `gr_use_access` tinyint(4) NOT NULL DEFAULT '0',
  `gr_order` int(11) NOT NULL DEFAULT '0',
  `gr_1_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_2_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_3_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_4_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_5_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_6_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_7_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_8_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_9_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_10_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_1` varchar(255) NOT NULL DEFAULT '',
  `gr_2` varchar(255) NOT NULL DEFAULT '',
  `gr_3` varchar(255) NOT NULL DEFAULT '',
  `gr_4` varchar(255) NOT NULL DEFAULT '',
  `gr_5` varchar(255) NOT NULL DEFAULT '',
  `gr_6` varchar(255) NOT NULL DEFAULT '',
  `gr_7` varchar(255) NOT NULL DEFAULT '',
  `gr_8` varchar(255) NOT NULL DEFAULT '',
  `gr_9` varchar(255) NOT NULL DEFAULT '',
  `gr_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_group_member`
--

CREATE TABLE `g5_group_member` (
  `gm_id` int(11) NOT NULL,
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `gm_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_login`
--

CREATE TABLE `g5_login` (
  `lo_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `lo_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lo_location` text NOT NULL,
  `lo_url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_login_data`
--

CREATE TABLE `g5_login_data` (
  `idx` int(11) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `mb_ip` varchar(255) NOT NULL,
  `mb_time` varchar(255) NOT NULL,
  `mb_success` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_mail`
--

CREATE TABLE `g5_mail` (
  `ma_id` int(11) NOT NULL,
  `ma_subject` varchar(255) NOT NULL DEFAULT '',
  `ma_content` mediumtext NOT NULL,
  `ma_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ma_ip` varchar(255) NOT NULL DEFAULT '',
  `ma_last_option` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_member`
--

CREATE TABLE `g5_member` (
  `mb_no` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `mb_password` varchar(255) NOT NULL DEFAULT '',
  `mb_name` varchar(255) NOT NULL DEFAULT '',
  `mb_nick` varchar(255) NOT NULL DEFAULT '',
  `mb_nick_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_email` varchar(255) NOT NULL DEFAULT '',
  `mb_homepage` varchar(255) NOT NULL DEFAULT '',
  `mb_level` tinyint(4) NOT NULL DEFAULT '0',
  `mb_sex` char(1) NOT NULL DEFAULT '',
  `mb_birth` varchar(255) NOT NULL DEFAULT '',
  `mb_tel` varchar(255) NOT NULL DEFAULT '',
  `mb_hp` varchar(255) NOT NULL DEFAULT '',
  `mb_certify` varchar(20) NOT NULL DEFAULT '',
  `mb_adult` tinyint(4) NOT NULL DEFAULT '0',
  `mb_dupinfo` varchar(255) NOT NULL DEFAULT '',
  `mb_zip1` char(3) NOT NULL DEFAULT '',
  `mb_zip2` char(3) NOT NULL DEFAULT '',
  `mb_addr1` varchar(255) NOT NULL DEFAULT '',
  `mb_addr2` varchar(255) NOT NULL DEFAULT '',
  `mb_addr3` varchar(255) NOT NULL DEFAULT '',
  `mb_addr_jibeon` varchar(255) NOT NULL DEFAULT '',
  `mb_signature` text NOT NULL,
  `mb_recommend` varchar(255) NOT NULL DEFAULT '',
  `mb_point` int(11) NOT NULL DEFAULT '0',
  `mb_today_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_login_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_leave_date` varchar(8) NOT NULL DEFAULT '',
  `mb_intercept_date` varchar(8) NOT NULL DEFAULT '',
  `mb_email_certify` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_email_certify2` varchar(255) NOT NULL DEFAULT '',
  `mb_memo` text NOT NULL,
  `mb_lost_certify` varchar(255) NOT NULL,
  `mb_mailling` tinyint(4) NOT NULL DEFAULT '0',
  `mb_sms` tinyint(4) NOT NULL DEFAULT '0',
  `mb_open` tinyint(4) NOT NULL DEFAULT '0',
  `mb_open_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_profile` text NOT NULL,
  `mb_memo_call` varchar(255) NOT NULL DEFAULT '',
  `mb_1` varchar(255) NOT NULL DEFAULT '',
  `mb_2` varchar(255) NOT NULL DEFAULT '',
  `mb_3` varchar(255) NOT NULL DEFAULT '',
  `mb_4` varchar(255) NOT NULL DEFAULT '',
  `mb_5` varchar(255) NOT NULL DEFAULT '',
  `mb_6` varchar(255) NOT NULL DEFAULT '',
  `mb_7` varchar(255) NOT NULL DEFAULT '',
  `mb_8` varchar(255) NOT NULL DEFAULT '',
  `mb_9` varchar(255) NOT NULL DEFAULT '',
  `mb_10` varchar(255) NOT NULL DEFAULT '',
  `mb_money` varchar(255) NOT NULL,
  `mb_coin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_member`
--

INSERT INTO `g5_member` (`mb_no`, `mb_id`, `mb_password`, `mb_name`, `mb_nick`, `mb_nick_date`, `mb_email`, `mb_homepage`, `mb_level`, `mb_sex`, `mb_birth`, `mb_tel`, `mb_hp`, `mb_certify`, `mb_adult`, `mb_dupinfo`, `mb_zip1`, `mb_zip2`, `mb_addr1`, `mb_addr2`, `mb_addr3`, `mb_addr_jibeon`, `mb_signature`, `mb_recommend`, `mb_point`, `mb_today_login`, `mb_login_ip`, `mb_datetime`, `mb_ip`, `mb_leave_date`, `mb_intercept_date`, `mb_email_certify`, `mb_email_certify2`, `mb_memo`, `mb_lost_certify`, `mb_mailling`, `mb_sms`, `mb_open`, `mb_open_date`, `mb_profile`, `mb_memo_call`, `mb_1`, `mb_2`, `mb_3`, `mb_4`, `mb_5`, `mb_6`, `mb_7`, `mb_8`, `mb_9`, `mb_10`, `mb_money`, `mb_coin`) VALUES
(203, 'admin', '*3D3B92F242033365AE5BC6A8E6FC3E1679F4140A', '0', 'admin', '2019-02-20', '', '', 10, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0', 0, '2019-04-13 12:06:26', '119.207.238.177', '2019-02-20 17:08:26', '185.92.26.76', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, 0, '2019-02-20', '', '', '', '', '', '', '', '', '', '', '', '', '0', '1000');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_member_social_profiles`
--

CREATE TABLE `g5_member_social_profiles` (
  `mp_no` int(11) NOT NULL,
  `mb_id` varchar(255) NOT NULL DEFAULT '',
  `provider` varchar(50) NOT NULL DEFAULT '',
  `object_sha` varchar(45) NOT NULL DEFAULT '',
  `identifier` varchar(255) NOT NULL DEFAULT '',
  `profileurl` varchar(255) NOT NULL DEFAULT '',
  `photourl` varchar(255) NOT NULL DEFAULT '',
  `displayname` varchar(150) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `mp_register_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mp_latest_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_memo`
--

CREATE TABLE `g5_memo` (
  `me_id` int(11) NOT NULL DEFAULT '0',
  `me_recv_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_read_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_memo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_menu`
--

CREATE TABLE `g5_menu` (
  `me_id` int(11) NOT NULL,
  `me_code` varchar(255) NOT NULL DEFAULT '',
  `me_name` varchar(255) NOT NULL DEFAULT '',
  `me_link` varchar(255) NOT NULL DEFAULT '',
  `me_target` varchar(255) NOT NULL DEFAULT '',
  `me_order` int(11) NOT NULL DEFAULT '0',
  `me_use` tinyint(4) NOT NULL DEFAULT '0',
  `me_mobile_use` tinyint(4) NOT NULL DEFAULT '0',
  `me_level` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_menu`
--

INSERT INTO `g5_menu` (`me_id`, `me_code`, `me_name`, `me_link`, `me_target`, `me_order`, `me_use`, `me_mobile_use`, `me_level`) VALUES
(1, 'shop', '구매\상점', '/bbs/board.php?bo_table=shop', '_self', 2, 1, 1, 2),
(2, 'notice', '공�\��사\항', '/bbs/board.php?bo_table=notice&wr_id=14', '_self', 1, 1, 1, 2),
(3, 'buyol', '구매\후기', '/bbs/board.php?bo_table=buyol', '_self', 6, 0, 1, 2),
(5, 'memos', '\사\용법', '/bbs/board.php?bo_table=memos', '_self', 2, 1, 1, 2),
(6, 'download', '\다\운로드', '/bbs/board.php?bo_table=notice&wr_id=16', '_self', 3, 1, 1, 2),
(7, 'code_log', '구매기�\��', '/shop/code_log.php', '_self', 2, 1, 1, 2),
(9, '', '\제품설명', '/bbs/board.php?bo_table=memo', '_self', 5, 1, 0, 2);

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_money`
--

CREATE TABLE `g5_money` (
  `mo_no` int(255) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `mb_name` varchar(255) NOT NULL,
  `mb_money` varchar(255) NOT NULL,
  `mo_date` varchar(255) NOT NULL,
  `mo_clodate` varchar(255) NOT NULL,
  `mo_chk` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_munsang`
--

CREATE TABLE `g5_munsang` (
  `num` int(255) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `munsang` varchar(255) NOT NULL,
  `buy` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_music`
--

CREATE TABLE `g5_music` (
  `mu_no` int(11) NOT NULL,
  `mu_name` varchar(255) DEFAULT NULL,
  `mu_url` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_new_win`
--

CREATE TABLE `g5_new_win` (
  `nw_id` int(11) NOT NULL,
  `nw_device` varchar(10) NOT NULL DEFAULT 'both',
  `nw_begin_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_disable_hours` int(11) NOT NULL DEFAULT '0',
  `nw_left` int(11) NOT NULL DEFAULT '0',
  `nw_top` int(11) NOT NULL DEFAULT '0',
  `nw_height` int(11) NOT NULL DEFAULT '0',
  `nw_width` int(11) NOT NULL DEFAULT '0',
  `nw_subject` text NOT NULL,
  `nw_content` text NOT NULL,
  `nw_content_html` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_new_win`
--

INSERT INTO `g5_new_win` (`nw_id`, `nw_device`, `nw_begin_time`, `nw_end_time`, `nw_disable_hours`, `nw_left`, `nw_top`, `nw_height`, `nw_width`, `nw_subject`, `nw_content`, `nw_content_html`) VALUES
(4, 'both', '2019-04-13 00:00:00', '2019-04-20 23:59:59', 1000000, 10, 10, 500, 450, '\테스\트\팝업', '<p>\테스\트 \팝업입니다.</p>', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_point`
--

CREATE TABLE `g5_point` (
  `po_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `po_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `po_content` varchar(255) NOT NULL DEFAULT '',
  `po_point` int(11) NOT NULL DEFAULT '0',
  `po_use_point` int(11) NOT NULL DEFAULT '0',
  `po_expired` tinyint(4) NOT NULL DEFAULT '0',
  `po_expire_date` date NOT NULL DEFAULT '0000-00-00',
  `po_mb_point` int(11) NOT NULL DEFAULT '0',
  `po_rel_table` varchar(20) NOT NULL DEFAULT '',
  `po_rel_id` varchar(20) NOT NULL DEFAULT '',
  `po_rel_action` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_point_change`
--

CREATE TABLE `g5_point_change` (
  `po_no` int(11) NOT NULL,
  `mb_id` varchar(255) NOT NULL,
  `mb_point` varchar(255) NOT NULL,
  `po_datetime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_poll`
--

CREATE TABLE `g5_poll` (
  `po_id` int(11) NOT NULL,
  `po_subject` varchar(255) NOT NULL DEFAULT '',
  `po_poll1` varchar(255) NOT NULL DEFAULT '',
  `po_poll2` varchar(255) NOT NULL DEFAULT '',
  `po_poll3` varchar(255) NOT NULL DEFAULT '',
  `po_poll4` varchar(255) NOT NULL DEFAULT '',
  `po_poll5` varchar(255) NOT NULL DEFAULT '',
  `po_poll6` varchar(255) NOT NULL DEFAULT '',
  `po_poll7` varchar(255) NOT NULL DEFAULT '',
  `po_poll8` varchar(255) NOT NULL DEFAULT '',
  `po_poll9` varchar(255) NOT NULL DEFAULT '',
  `po_cnt1` int(11) NOT NULL DEFAULT '0',
  `po_cnt2` int(11) NOT NULL DEFAULT '0',
  `po_cnt3` int(11) NOT NULL DEFAULT '0',
  `po_cnt4` int(11) NOT NULL DEFAULT '0',
  `po_cnt5` int(11) NOT NULL DEFAULT '0',
  `po_cnt6` int(11) NOT NULL DEFAULT '0',
  `po_cnt7` int(11) NOT NULL DEFAULT '0',
  `po_cnt8` int(11) NOT NULL DEFAULT '0',
  `po_cnt9` int(11) NOT NULL DEFAULT '0',
  `po_etc` varchar(255) NOT NULL DEFAULT '',
  `po_level` tinyint(4) NOT NULL DEFAULT '0',
  `po_point` int(11) NOT NULL DEFAULT '0',
  `po_date` date NOT NULL DEFAULT '0000-00-00',
  `po_ips` mediumtext NOT NULL,
  `mb_ids` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_poll_etc`
--

CREATE TABLE `g5_poll_etc` (
  `pc_id` int(11) NOT NULL DEFAULT '0',
  `po_id` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `pc_name` varchar(255) NOT NULL DEFAULT '',
  `pc_idea` varchar(255) NOT NULL DEFAULT '',
  `pc_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_popular`
--

CREATE TABLE `g5_popular` (
  `pp_id` int(11) NOT NULL,
  `pp_word` varchar(50) NOT NULL DEFAULT '',
  `pp_date` date NOT NULL DEFAULT '0000-00-00',
  `pp_ip` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_qa_config`
--

CREATE TABLE `g5_qa_config` (
  `qa_title` varchar(255) NOT NULL DEFAULT '',
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_use_email` tinyint(4) NOT NULL DEFAULT '0',
  `qa_req_email` tinyint(4) NOT NULL DEFAULT '0',
  `qa_use_hp` tinyint(4) NOT NULL DEFAULT '0',
  `qa_req_hp` tinyint(4) NOT NULL DEFAULT '0',
  `qa_use_sms` tinyint(4) NOT NULL DEFAULT '0',
  `qa_send_number` varchar(255) NOT NULL DEFAULT '0',
  `qa_admin_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_admin_email` varchar(255) NOT NULL DEFAULT '',
  `qa_use_editor` tinyint(4) NOT NULL DEFAULT '0',
  `qa_subject_len` int(11) NOT NULL DEFAULT '0',
  `qa_mobile_subject_len` int(11) NOT NULL DEFAULT '0',
  `qa_page_rows` int(11) NOT NULL DEFAULT '0',
  `qa_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `qa_image_width` int(11) NOT NULL DEFAULT '0',
  `qa_upload_size` int(11) NOT NULL DEFAULT '0',
  `qa_insert_content` text NOT NULL,
  `qa_include_head` varchar(255) NOT NULL DEFAULT '',
  `qa_include_tail` varchar(255) NOT NULL DEFAULT '',
  `qa_content_head` text NOT NULL,
  `qa_content_tail` text NOT NULL,
  `qa_mobile_content_head` text NOT NULL,
  `qa_mobile_content_tail` text NOT NULL,
  `qa_1_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_2_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_3_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_4_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_5_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_qa_content`
--

CREATE TABLE `g5_qa_content` (
  `qa_id` int(11) NOT NULL,
  `qa_num` int(11) NOT NULL DEFAULT '0',
  `qa_parent` int(11) NOT NULL DEFAULT '0',
  `qa_related` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `qa_name` varchar(255) NOT NULL DEFAULT '',
  `qa_email` varchar(255) NOT NULL DEFAULT '',
  `qa_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_type` tinyint(4) NOT NULL DEFAULT '0',
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_email_recv` tinyint(4) NOT NULL DEFAULT '0',
  `qa_sms_recv` tinyint(4) NOT NULL DEFAULT '0',
  `qa_html` tinyint(4) NOT NULL DEFAULT '0',
  `qa_subject` varchar(255) NOT NULL DEFAULT '',
  `qa_content` text NOT NULL,
  `qa_status` tinyint(4) NOT NULL DEFAULT '0',
  `qa_file1` varchar(255) NOT NULL DEFAULT '',
  `qa_source1` varchar(255) NOT NULL DEFAULT '',
  `qa_file2` varchar(255) NOT NULL DEFAULT '',
  `qa_source2` varchar(255) NOT NULL DEFAULT '',
  `qa_ip` varchar(255) NOT NULL DEFAULT '',
  `qa_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_scrap`
--

CREATE TABLE `g5_scrap` (
  `ms_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` varchar(15) NOT NULL DEFAULT '',
  `ms_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_uniqid`
--

CREATE TABLE `g5_uniqid` (
  `uq_id` bigint(20) UNSIGNED NOT NULL,
  `uq_ip` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_visit`
--

CREATE TABLE `g5_visit` (
  `vi_id` int(11) NOT NULL DEFAULT '0',
  `vi_ip` varchar(255) NOT NULL DEFAULT '',
  `vi_date` date NOT NULL DEFAULT '0000-00-00',
  `vi_time` time NOT NULL DEFAULT '00:00:00',
  `vi_referer` text NOT NULL,
  `vi_agent` varchar(255) NOT NULL DEFAULT '',
  `vi_browser` varchar(255) NOT NULL DEFAULT '',
  `vi_os` varchar(255) NOT NULL DEFAULT '',
  `vi_device` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_visit_sum`
--

CREATE TABLE `g5_visit_sum` (
  `vs_date` date NOT NULL DEFAULT '0000-00-00',
  `vs_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_visit_sum`
--

INSERT INTO `g5_visit_sum` (`vs_date`, `vs_count`) VALUES
('2019-04-13', 2);

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_buyol`
--

CREATE TABLE `g5_write_buyol` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_code`
--

CREATE TABLE `g5_write_code` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_code_shop`
--

CREATE TABLE `g5_write_code_shop` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_code_shop`
--

INSERT INTO `g5_write_code_shop` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(50, -1, '0', 0, 0, 0, '', '0', 'html1', '44', '1', '0', '0', 0, 0, 0, 0, 0, 'admin', '*3D3B92F242033365AE5BC6A8E6FC3E1679F4140A', 'admin', '1', '1', '2019-04-13 12:38:00', 0, '2019-04-13 12:38:00', '119.207.238.177', '', '', '1', '1000', '1', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_download`
--

CREATE TABLE `g5_write_download` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_download`
--

INSERT INTO `g5_write_download` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(25, -1, '0', 0, 0, 0, '', '0', 'html1', '\다\운로드내\용', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">&nbsp;모든 \제품 \파일\은 \텔레그\램 \실\시�\�� \알림방에서 받을 \수 \있습\니다.</b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp;&nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255); line-height: 1.5;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp;&nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\">\저희 \피그샵\는 고�\��님들께 PC\전용 \텔레그\램�\� \텔레그\램 \어\플 \설치를 권장\합\니다.</span></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255); line-height: 1.5;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp; &nbsp;\어\플의 경우 검색해\도 \안나올 경우 Telegram \이\라고 검색하시면 \됩\니다.</span></b><br style=\"box-sizing: border-box;\"></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255);\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\">&nbsp;</p></div></td><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 0px;\"></td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">\텔레그\램\을 \설치해주세\요.</b></span></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 2;\"><span style=\"box-sizing: border-box; font-weight: bold; font-size: 14pt;\">&nbsp; &nbsp;<span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp;</span></span><a href=\"https://telegram.org/dl/desktop/win\" target=\"_blank\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration-line: none;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><b style=\"box-sizing: border-box;\">\다\운로​드</b></span></a>&nbsp;<span style=\"box-sizing: border-box; font-weight: bold; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp;\← \클릭하여 \다\운로드 \하시�\�� \설치해주세\요.</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp; &nbsp;\설치를 \하셨\다�\� \회원�\��입을 \해주세\요.</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\">&nbsp;</p></div></td><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 0px;\"></td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;<b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt;\">\회원�\��입을 \하셨\다�\� \텔레그\램 \알림방에서 \제품 \다\운로드할수있습\니다.&nbsp;</span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;&nbsp;</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp; &nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box; font-size: 14pt; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><br style=\"box-sizing: border-box;\"></span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><b style=\"box-sizing: border-box; font-size: 14pt; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\"><b style=\"box-sizing: border-box;\">&nbsp; &nbsp;<a href=\"https://t.me/pig797979\" target=\"_blank\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration-line: none;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 0, 0);\">\텔레그\램 \알림�\� \접속하기</span></a></b></span><span style=\"box-sizing: border-box; font-size: 18pt;\">&nbsp;</span><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp;\← \클�\� \후 \접속해주세\요.</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"></span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"></span></b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; line-height: 16.8px;\"><span style=\"box-sizing: border-box; text-align: center; font-size: 14pt;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 255, 255);\">&nbsp;</span></b></span></p></div></td></tr></tbody></table>', '', '0', 0, 0, 24, 1, 0, 'admin', '*3D3B92F242033365AE5BC6A8E6FC3E1679F4140A', 'admin', '1', '1', '2019-01-04 16:49:21', 0, '2019-01-04 16:17:44', '162.158.178.20', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_free`
--

CREATE TABLE `g5_write_free` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_gallery`
--

CREATE TABLE `g5_write_gallery` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_memo`
--

CREATE TABLE `g5_write_memo` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_memo`
--

INSERT INTO `g5_write_memo` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(18, -1, '', 18, 0, 0, '', '', 'html1', '\제품 공�\��', '<p>모든 \제품 \설명은 \디스코드에서 \필독 부탁드립\니다.<br>\디스코드 링크:&nbsp;<a tabindex=\"0\" title=\"https://discord.gg/edYZtyG\" class=\"anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB\" href=\"https://discord.gg/edYZtyG\" rel=\"noreferrer noopener\" target=\"_blank\" role=\"button\" style=\"border: 0px; font-family: Whitney, &quot;Apple SD Gothic Neo&quot;, NanumBarunGothic, &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;, Gulim, 굴림, Dotum, \돋움, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(0, 150, 207); cursor: pointer; text-decoration-line: none; transition: all 0.05s ease 0s; outline: 0px; direction: ltr; unicode-bidi: bidi-override; word-break: break-word; white-space: pre-wrap; background-color: rgba(250, 166, 26, 0.1);\">https://discord.gg/edYZtyG</a></p>', '', '', 0, 0, 20, 0, 0, 'admin', '*556A1819C902459389465119AFDEF298638C520B', 'admin', '', '', '2019-02-21 11:03:32', 0, '2019-02-21 11:03:32', '71.63.236.124', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_memos`
--

CREATE TABLE `g5_write_memos` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_memos`
--

INSERT INTO `g5_write_memos` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(31, -1, '0', 0, 0, 0, '', '', 'html1', '', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"padding-top: 10px; padding-bottom: 10px; box-sizing: border-box; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">&nbsp;\사\용법 모음</b></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; margin-left: 40px;\"><span style=\"font-size: 14pt; font-weight: bold; color: rgb(255, 255, 255);\">\디스코드 참여\시 모든 \사\용법 \있습\니다.</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; margin-left: 40px;\"><span style=\"font-size: 14pt; font-weight: bold; color: rgb(255, 255, 255);\">\디스코드 링크:&nbsp;</span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\">&nbsp;</p></div></td></tr></tbody></table>', '', '0', 0, 0, 24, 0, 0, 'admin', '*556A1819C902459389465119AFDEF298638C520B', 'admin', '', '', '2019-04-13 12:07:46', 0, '2019-02-21 11:02:32', '71.63.236.124', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_notice`
--

CREATE TABLE `g5_write_notice` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_notice`
--

INSERT INTO `g5_write_notice` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(14, -1, '0', 0, 0, 0, '', '0', 'html1', '공�\��사\항', '<table width=\"100%\" style=\"font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 5px; width: 1620px; text-align: center; vertical-align: top;\"><div class=\"down_box\" style=\"background: rgba(0, 0, 0, 0.8); border-radius: 5px; border: 1px solid rgb(61, 183, 204); border-image: none; width: 1620px; margin-top: 1px; display: inline-block;\"><p align=\"left\" class=\"down_title\" style=\"background: rgb(61, 183, 204); text-align: left; color: rgb(255, 255, 255); padding-top: 10px; padding-bottom: 10px; font-family: Hanna; font-size: 24px;\">&nbsp;<span style=\"color: rgb(0, 0, 0); font-size: 18pt;\"><b>구매방�\�� &amp; \다\운로드/\사\용법 관련</b></span></p><p align=\"left\" style=\"text-align: left;\"><br></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"font-size: 18pt;\">&nbsp; &nbsp; <span style=\"color: rgb(255, 255, 255);\">1. \사\이\트 \상단\에 \있는 <span style=\"color: rgb(255, 0, 0);\">\"충전하기\"</span> �\� \눌러\서 충전페이지 창을 \열\어주세\요.</span></span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; 2. \입�\��자�\��을 �\� \정확히 \입력\해주세\요. [ \잘못 \입력\했을 경우 \사\이\트 \재가입 \해주세\요. ]</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; 3. 계�\���\��호�\� \따로 메모 \해\두시�\�� 충전요청\을 \눌러주신 \후 \입�\��해주시면 \됩\니다.</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; 4. \입�\��과 \동시에 1분 \안에 \자동으로 충전�\��리 \되오\니 참�\��하시면 \됩\니다.</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><br></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; \※ <span style=\"color: rgb(255, 0, 0);\">\제품을 구매\하면 구매\자�\�� \자동 \등\업 \되며 \다\운로드 / \사\용방�\�� 메뉴가 \오\픈됩\니다.</span>&nbsp;</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; \※ 충전을 \하더라\도 \제품을 구매\하�\�� \않으�\� 구매\자�\�� \자동 \등\업되�\�� \않습\니다.&nbsp;</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; \※ <span style=\"color: rgb(255, 0, 0);\">계�\��이�\�</span>만 가능\합\니다.</span></b></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"color: rgb(255, 255, 255); font-size: 18pt;\">&nbsp; &nbsp; \※ \제품소�\��를 \잘 \안읽고 구매\하여 \호\환성 문제 \때문\에 교환이\나 \환�\��은 \절대 불�\��능\합\니다.</span></b></p></div></td><td style=\"padding: 5px; width: 0px; text-align: center; vertical-align: top;\"></td></tr><tr><td style=\"padding: 5px; width: 1620px; text-align: center; vertical-align: top;\"><div class=\"down_box\" style=\"background: rgba(0, 0, 0, 0.8); border-radius: 5px; border: 1px solid rgb(61, 183, 204); border-image: none; width: 1620px; margin-top: 1px; display: inline-block;\"><p align=\"left\" class=\"down_title\" style=\"background: rgb(61, 183, 204); text-align: left; color: rgb(0, 0, 0); padding-top: 10px; padding-bottom: 10px; font-family: Hanna; font-size: 24px;\"><br></p></div></td><td style=\"padding: 5px; width: 0px; text-align: center; vertical-align: top;\"></td></tr><tr><td style=\"padding: 5px; width: 1620px; text-align: center; vertical-align: top;\"></td></tr></tbody></table><br><table width=\"100%\" style=\"font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 5px; width: 1620px; text-align: center; vertical-align: top;\"><div class=\"down_box\" style=\"background: rgba(0, 0, 0, 0.8); border-radius: 5px; border: 1px solid rgb(61, 183, 204); border-image: none; width: 1620px; margin-top: 1px; display: inline-block;\"><p align=\"left\" class=\"down_title\" style=\"background: rgb(61, 183, 204); text-align: left; color: rgb(255, 255, 255); padding-top: 10px; padding-bottom: 10px; font-family: Hanna; font-size: 24px;\"><b><span style=\"color: rgb(0, 0, 0);\">\★구매전필독 \사\항\★</span></b></p><p align=\"left\" style=\"text-align: left;\"><br></p><p align=\"left\" style=\"text-align: left;\"><b><span style=\"font-size: 18pt;\">&nbsp;&nbsp;</span></b><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;; font-size: 18pt;\"><b>1.&nbsp; (<span style=\"color: rgb(255, 0, 0);\">*</span>)</b></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 32px;\"><b><br></b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 18pt;\"><b>&nbsp; &nbsp;2.&nbsp;</b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 32px;\"><b><br></b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 18pt;\"><b>&nbsp; &nbsp;3.&nbsp;</b></span></span></p><p align=\"left\" style=\"text-align: left;\"><span style=\"font-size: 18pt;\">&nbsp;</span></p></div></td><td style=\"padding: 5px; width: 0px; text-align: center; vertical-align: top;\"></td></tr><tr><td style=\"padding: 5px; width: 1620px; text-align: center; vertical-align: top;\"><div class=\"down_box\" style=\"background: rgba(0, 0, 0, 0.8); border-radius: 5px; border: 1px solid rgb(61, 183, 204); border-image: none; width: 1620px; margin-top: 1px; display: inline-block;\"><p align=\"left\" class=\"down_title\" style=\"background: rgb(61, 183, 204); text-align: left; padding-top: 10px; padding-bottom: 10px; font-family: Hanna; font-size: 24px;\"><span style=\"font-size: 18pt;\">&nbsp;<b>&nbsp;</b></span></p><p align=\"left\" style=\"text-align: left;\"><br></p><p align=\"left\" style=\"text-align: left;\"><span style=\"font-size: 18pt;\"><b>&nbsp;<span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\">1.&nbsp;</span></b></span></p><p align=\"left\" style=\"text-align: left;\"><span style=\"font-size: 18pt;\"><b><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><br></span></b></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 18pt;\"><b>&nbsp;2.&nbsp;</b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><br></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 18pt;\"><b>&nbsp;3.&nbsp;</b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><br></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;\"><span style=\"font-size: 18pt;\"><b>&nbsp;4.<span style=\"color: rgb(255, 0, 0);\">&nbsp;</span></b></span></span></p><p align=\"left\" style=\"text-align: left; font-family: \돋움, Dotum, Helvetica, sans-serif;\">&nbsp;</p></div></td></tr></tbody></table>', '', '0', 0, 0, 634, 0, 0, 'admin', '*3D3B92F242033365AE5BC6A8E6FC3E1679F4140A', 'admin', '1', '1', '2019-04-13 12:38:53', 0, '2018-12-14 00:25:41', '104.143.95.23', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, -2, '0', 0, 0, 0, '', '0', 'html1', '\다\운로드', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: &quot;Noto Sans KR&quot;, sans-serif; background-color: rgb(0, 0, 0);\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; text-align: center; vertical-align: top; padding: 5px; width: 1620px;\"><div class=\"down_box\" style=\"box-sizing: border-box; border: 1px solid rgb(251, 115, 151); margin-top: 1px; width: 1620px; background: rgba(0, 0, 0, 0.8);\"><p class=\"down_title\" style=\"box-sizing: border-box; padding-top: 10px; padding-bottom: 10px; word-break: break-all; background: rgb(251, 115, 151); font-family: Hanna; font-size: 24px; text-align: left;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><b style=\"box-sizing: border-box;\">&nbsp;</b><span style=\"box-sizing: border-box;\"><b>최신파일</b></span></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\"><b style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp;&nbsp;</span></b></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left; color: rgb(255, 255, 255); line-height: 1.5;\"><span style=\"box-sizing: border-box;\"><span style=\"font-weight: bold; box-sizing: border-box; font-size: 14pt;\">&nbsp; &nbsp; \다\운로드 링크</span><span style=\"font-weight: bold; box-sizing: border-box; font-size: 24px;\">&nbsp;:&nbsp;</span></span></p><p style=\"box-sizing: border-box; word-break: break-all; text-align: left;\">&nbsp;</p></div></td><td style=\"box-sizing: border-;\"></td></tr></tbody></table>', '', '0', 0, 0, 62, 0, 0, 'admin', '*556A1819C902459389465119AFDEF298638C520B', 'admin', '1', '1', '2019-04-13 12:07:24', 0, '2019-02-20 15:46:32', '112.167.182.50', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_qa`
--

CREATE TABLE `g5_write_qa` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_shop`
--

CREATE TABLE `g5_write_shop` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) DEFAULT NULL,
  `wr_12` varchar(255) DEFAULT NULL,
  `wr_13` varchar(255) DEFAULT NULL,
  `wr_14` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_name2` varchar(255) NOT NULL,
  `shop_name3` varchar(255) NOT NULL,
  `wr_15` varchar(255) NOT NULL,
  `wr_16` varchar(255) NOT NULL,
  `wr_17` varchar(255) NOT NULL,
  `wr_18` varchar(255) NOT NULL,
  `wr_19` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `g5_write_shop`
--

INSERT INTO `g5_write_shop` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`, `wr_11`, `wr_12`, `wr_13`, `wr_14`, `shop_name`, `shop_name2`, `shop_name3`, `wr_15`, `wr_16`, `wr_17`, `wr_18`, `wr_19`) VALUES
(44, -1, '0', 0, 0, 0, '', '0', 'html1', '\테스\트 1번', '1', '0', '0', 0, 0, 0, 1, 0, 'admin', '*3D3B92F242033365AE5BC6A8E6FC3E1679F4140A', 'admin', '1', '1', '2019-04-13 12:37:47', 0, '2019-04-13 12:37:47', '119.207.238.177', '', '', '1', '1', '1', '1', '1000', '0', '0', '0', '0', '1000', '0', '0', '0', '0', '\상품1', '\상품2', '\상품3', '1000', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_shoplog`
--

CREATE TABLE `g5_write_shoplog` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `g5_attendance`
--
ALTER TABLE `g5_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`mb_id`,`day`,`datetime`);

--
-- 테이블의 인덱스 `g5_auth`
--
ALTER TABLE `g5_auth`
  ADD PRIMARY KEY (`mb_id`,`au_menu`);

--
-- 테이블의 인덱스 `g5_autosave`
--
ALTER TABLE `g5_autosave`
  ADD PRIMARY KEY (`as_id`),
  ADD UNIQUE KEY `as_uid` (`as_uid`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_ben`
--
ALTER TABLE `g5_ben`
  ADD PRIMARY KEY (`be_id`);

--
-- 테이블의 인덱스 `g5_board`
--
ALTER TABLE `g5_board`
  ADD PRIMARY KEY (`bo_table`);

--
-- 테이블의 인덱스 `g5_board_file`
--
ALTER TABLE `g5_board_file`
  ADD PRIMARY KEY (`bo_table`,`wr_id`,`bf_no`);

--
-- 테이블의 인덱스 `g5_board_good`
--
ALTER TABLE `g5_board_good`
  ADD PRIMARY KEY (`bg_id`),
  ADD UNIQUE KEY `fkey1` (`bo_table`,`wr_id`,`mb_id`);

--
-- 테이블의 인덱스 `g5_board_new`
--
ALTER TABLE `g5_board_new`
  ADD PRIMARY KEY (`bn_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_cert_history`
--
ALTER TABLE `g5_cert_history`
  ADD PRIMARY KEY (`cr_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_charge`
--
ALTER TABLE `g5_charge`
  ADD PRIMARY KEY (`ch_num`),
  ADD UNIQUE KEY `ch_num` (`ch_num`);

--
-- 테이블의 인덱스 `g5_coin`
--
ALTER TABLE `g5_coin`
  ADD PRIMARY KEY (`co_no`);

--
-- 테이블의 인덱스 `g5_content`
--
ALTER TABLE `g5_content`
  ADD PRIMARY KEY (`co_id`);

--
-- 테이블의 인덱스 `g5_faq`
--
ALTER TABLE `g5_faq`
  ADD PRIMARY KEY (`fa_id`),
  ADD KEY `fm_id` (`fm_id`);

--
-- 테이블의 인덱스 `g5_faq_master`
--
ALTER TABLE `g5_faq_master`
  ADD PRIMARY KEY (`fm_id`);

--
-- 테이블의 인덱스 `g5_group`
--
ALTER TABLE `g5_group`
  ADD PRIMARY KEY (`gr_id`);

--
-- 테이블의 인덱스 `g5_group_member`
--
ALTER TABLE `g5_group_member`
  ADD PRIMARY KEY (`gm_id`),
  ADD KEY `gr_id` (`gr_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_login`
--
ALTER TABLE `g5_login`
  ADD PRIMARY KEY (`lo_ip`);

--
-- 테이블의 인덱스 `g5_login_data`
--
ALTER TABLE `g5_login_data`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `g5_mail`
--
ALTER TABLE `g5_mail`
  ADD PRIMARY KEY (`ma_id`);

--
-- 테이블의 인덱스 `g5_member`
--
ALTER TABLE `g5_member`
  ADD PRIMARY KEY (`mb_no`),
  ADD UNIQUE KEY `mb_id` (`mb_id`),
  ADD KEY `mb_today_login` (`mb_today_login`),
  ADD KEY `mb_datetime` (`mb_datetime`);

--
-- 테이블의 인덱스 `g5_member_social_profiles`
--
ALTER TABLE `g5_member_social_profiles`
  ADD UNIQUE KEY `mp_no` (`mp_no`),
  ADD KEY `mb_id` (`mb_id`),
  ADD KEY `provider` (`provider`);

--
-- 테이블의 인덱스 `g5_memo`
--
ALTER TABLE `g5_memo`
  ADD PRIMARY KEY (`me_id`),
  ADD KEY `me_recv_mb_id` (`me_recv_mb_id`);

--
-- 테이블의 인덱스 `g5_menu`
--
ALTER TABLE `g5_menu`
  ADD PRIMARY KEY (`me_id`);

--
-- 테이블의 인덱스 `g5_money`
--
ALTER TABLE `g5_money`
  ADD PRIMARY KEY (`mo_no`);

--
-- 테이블의 인덱스 `g5_munsang`
--
ALTER TABLE `g5_munsang`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `g5_music`
--
ALTER TABLE `g5_music`
  ADD PRIMARY KEY (`mu_no`);

--
-- 테이블의 인덱스 `g5_new_win`
--
ALTER TABLE `g5_new_win`
  ADD PRIMARY KEY (`nw_id`);

--
-- 테이블의 인덱스 `g5_point`
--
ALTER TABLE `g5_point`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `index1` (`mb_id`,`po_rel_table`,`po_rel_id`,`po_rel_action`),
  ADD KEY `index2` (`po_expire_date`);

--
-- 테이블의 인덱스 `g5_point_change`
--
ALTER TABLE `g5_point_change`
  ADD PRIMARY KEY (`po_no`);

--
-- 테이블의 인덱스 `g5_poll`
--
ALTER TABLE `g5_poll`
  ADD PRIMARY KEY (`po_id`);

--
-- 테이블의 인덱스 `g5_poll_etc`
--
ALTER TABLE `g5_poll_etc`
  ADD PRIMARY KEY (`pc_id`);

--
-- 테이블의 인덱스 `g5_popular`
--
ALTER TABLE `g5_popular`
  ADD PRIMARY KEY (`pp_id`),
  ADD UNIQUE KEY `index1` (`pp_date`,`pp_word`,`pp_ip`);

--
-- 테이블의 인덱스 `g5_qa_content`
--
ALTER TABLE `g5_qa_content`
  ADD PRIMARY KEY (`qa_id`),
  ADD KEY `qa_num_parent` (`qa_num`,`qa_parent`);

--
-- 테이블의 인덱스 `g5_scrap`
--
ALTER TABLE `g5_scrap`
  ADD PRIMARY KEY (`ms_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_uniqid`
--
ALTER TABLE `g5_uniqid`
  ADD PRIMARY KEY (`uq_id`);

--
-- 테이블의 인덱스 `g5_visit`
--
ALTER TABLE `g5_visit`
  ADD PRIMARY KEY (`vi_id`),
  ADD UNIQUE KEY `index1` (`vi_ip`,`vi_date`),
  ADD KEY `index2` (`vi_date`);

--
-- 테이블의 인덱스 `g5_visit_sum`
--
ALTER TABLE `g5_visit_sum`
  ADD PRIMARY KEY (`vs_date`),
  ADD KEY `index1` (`vs_count`);

--
-- 테이블의 인덱스 `g5_write_buyol`
--
ALTER TABLE `g5_write_buyol`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_code`
--
ALTER TABLE `g5_write_code`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`),
  ADD KEY `wr_id` (`wr_id`),
  ADD KEY `wr_id_2` (`wr_id`);

--
-- 테이블의 인덱스 `g5_write_code_shop`
--
ALTER TABLE `g5_write_code_shop`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`),
  ADD KEY `wr_id` (`wr_id`),
  ADD KEY `wr_id_2` (`wr_id`);

--
-- 테이블의 인덱스 `g5_write_download`
--
ALTER TABLE `g5_write_download`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_free`
--
ALTER TABLE `g5_write_free`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_gallery`
--
ALTER TABLE `g5_write_gallery`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_memo`
--
ALTER TABLE `g5_write_memo`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_memos`
--
ALTER TABLE `g5_write_memos`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_notice`
--
ALTER TABLE `g5_write_notice`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_qa`
--
ALTER TABLE `g5_write_qa`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_shop`
--
ALTER TABLE `g5_write_shop`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_shoplog`
--
ALTER TABLE `g5_write_shoplog`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `g5_attendance`
--
ALTER TABLE `g5_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_autosave`
--
ALTER TABLE `g5_autosave`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- 테이블의 AUTO_INCREMENT `g5_ben`
--
ALTER TABLE `g5_ben`
  MODIFY `be_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `g5_board_good`
--
ALTER TABLE `g5_board_good`
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_board_new`
--
ALTER TABLE `g5_board_new`
  MODIFY `bn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- 테이블의 AUTO_INCREMENT `g5_cert_history`
--
ALTER TABLE `g5_cert_history`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_charge`
--
ALTER TABLE `g5_charge`
  MODIFY `ch_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `g5_coin`
--
ALTER TABLE `g5_coin`
  MODIFY `co_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- 테이블의 AUTO_INCREMENT `g5_faq`
--
ALTER TABLE `g5_faq`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_faq_master`
--
ALTER TABLE `g5_faq_master`
  MODIFY `fm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_group_member`
--
ALTER TABLE `g5_group_member`
  MODIFY `gm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_login_data`
--
ALTER TABLE `g5_login_data`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=726;

--
-- 테이블의 AUTO_INCREMENT `g5_mail`
--
ALTER TABLE `g5_mail`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_member`
--
ALTER TABLE `g5_member`
  MODIFY `mb_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- 테이블의 AUTO_INCREMENT `g5_member_social_profiles`
--
ALTER TABLE `g5_member_social_profiles`
  MODIFY `mp_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_menu`
--
ALTER TABLE `g5_menu`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `g5_money`
--
ALTER TABLE `g5_money`
  MODIFY `mo_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 테이블의 AUTO_INCREMENT `g5_munsang`
--
ALTER TABLE `g5_munsang`
  MODIFY `num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 테이블의 AUTO_INCREMENT `g5_music`
--
ALTER TABLE `g5_music`
  MODIFY `mu_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 테이블의 AUTO_INCREMENT `g5_new_win`
--
ALTER TABLE `g5_new_win`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `g5_point`
--
ALTER TABLE `g5_point`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- 테이블의 AUTO_INCREMENT `g5_point_change`
--
ALTER TABLE `g5_point_change`
  MODIFY `po_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_poll`
--
ALTER TABLE `g5_poll`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_popular`
--
ALTER TABLE `g5_popular`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_qa_content`
--
ALTER TABLE `g5_qa_content`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_scrap`
--
ALTER TABLE `g5_scrap`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_buyol`
--
ALTER TABLE `g5_write_buyol`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `g5_write_code`
--
ALTER TABLE `g5_write_code`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- 테이블의 AUTO_INCREMENT `g5_write_code_shop`
--
ALTER TABLE `g5_write_code_shop`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 테이블의 AUTO_INCREMENT `g5_write_download`
--
ALTER TABLE `g5_write_download`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 테이블의 AUTO_INCREMENT `g5_write_free`
--
ALTER TABLE `g5_write_free`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_gallery`
--
ALTER TABLE `g5_write_gallery`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_memo`
--
ALTER TABLE `g5_write_memo`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 테이블의 AUTO_INCREMENT `g5_write_memos`
--
ALTER TABLE `g5_write_memos`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 테이블의 AUTO_INCREMENT `g5_write_notice`
--
ALTER TABLE `g5_write_notice`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 테이블의 AUTO_INCREMENT `g5_write_qa`
--
ALTER TABLE `g5_write_qa`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_shop`
--
ALTER TABLE `g5_write_shop`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 테이블의 AUTO_INCREMENT `g5_write_shoplog`
--
ALTER TABLE `g5_write_shoplog`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
