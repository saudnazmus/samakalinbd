-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 04:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samakalindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `head` varchar(100) NOT NULL,
  `details` mediumtext NOT NULL,
  `image` int(11) NOT NULL,
  `category` int(2) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `publishtime` varchar(13) NOT NULL,
  `modifytime` varchar(13) NOT NULL,
  `createdby` int(2) NOT NULL,
  `writer` int(2) NOT NULL,
  `feature` int(1) NOT NULL,
  `breaking` int(1) NOT NULL,
  `position` int(2) NOT NULL,
  `metakeyword` varchar(100) NOT NULL,
  `metadescription` text NOT NULL,
  `orderid` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `head`, `details`, `image`, `category`, `createtime`, `publishtime`, `modifytime`, `createdby`, `writer`, `feature`, `breaking`, `position`, `metakeyword`, `metadescription`, `orderid`, `hits`, `status`) VALUES
(1, 'ডোনাল্ড ট্রাম্প সস্ত্রীক করোনায় আক্রান্ত', '<p>মার্কিন প্রেসিডেন্ট ডোনাল্ড ট্রাম্প এবং তার স্ত্রী মেলানিয়া ট্রাম্প করোনা ভাইরাসে আক্রান্ত হয়েছেন। শুক্রবার (০২ অক্টোবর) টুইটে ডোনাল্ড ট্রাম্প নিজেই এ তথ্য জানিয়েছেন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>এর আগে তাদের নিকটতম সহযোগী একজন করোনা ভাইরাসের আক্রান্ত হওয়ার পর তিনি এবং ফার্স্ট লেডি মেলানিয়া ট্রাম্প কোয়ারেন্টিনে চলে যান।</p>\r\n\r\n<p>ট্রাম্প টুইটে জানিয়েছেন, &lsquo;আমরা ইতোমধ্যেই কোয়ারেন্টিনে চলে গেছি। সংক্রমণ সেরে উঠতে শিগগিরই আমরা চিকিৎসা&nbsp;প্রক্রিয়া শুরু করব। এবং আশা করি আমরা শিগগিরই&nbsp;একসঙ্গে করোনা জয় করব। &rsquo;</p>\r\n\r\n<p>এর আগের টুইটে&nbsp;তিনি জানান,&nbsp;৩১ বছর বয়সী হোপ হিক্সের করোনা ভাইরাস পজিটিভ আসার পর তারা উভয়ই কোয়ারেন্টিনে চলে যান।</p>\r\n\r\n<p>হোপ হিক্স ডোনাল্ড ট্রাম্পের উপদেষ্টা। ট্রাম্পের সঙ্গে তার সংস্পর্শ ছিল। অর্থাৎ ট্রাম্পের নিকটতম সহায়ক তিনি। এছাড়া হোপ হিক্স এখনও করোনা ভাইরাস পজিটিভ বলেও জানিয়েছেন ট্রাম্প।</p>\r\n\r\n<p>বিবিসি জানিয়েছে, এই সপ্তাহের শুরুতে ওহিওতে একটি টিভি বিতর্কের জন্য এয়ার ফোর্স ওয়ানে ট্রাম্পের সঙ্গে ভ্রমণ করেছিলেন হোপ হিক্স। শুধু তা-ই নয়, ট্রাম্পের সঙ্গে মঙ্গলবার (২৯ সেপ্টেম্বর) প্লেন থেকে নামার সময় হিক্সকে মাস্ক পরা ছাড়াও দেখা গেছে ছবিতে।</p>\r\n\r\n<p>এছাড়া বুধবার (৩০ সেপ্টেম্বর) প্রেসিডেন্টের আরও সংস্পর্শে যেতে হয়েছিল হোপ হিক্সকে। সেদিন মিনেসোতাতে সমাবেশ করতে যাওয়ার সময় মেরিন ওয়ান হেলিকপ্টারে ট্রাম্পের সঙ্গে ছিলেন তিনি।</p>\r\n\r\n<p>বৃহস্পতিবার (০১ অক্টোবর) রাতে ট্রাম্প টুইটে বলেন, কঠোর পরিশ্রম করতে সক্ষম হোপ হিক্সের করোনা ভাইরাস পজিটিভ এসেছে। ভয়ানক!</p>\r\n', 2147483647, 3, '', '02/10/2020 00', '04/10/2020 04', 0, 1, 2, 2, 1, 'a', 'a', 1, 0, 1),
(2, 'শুক্রবার সৌদি এয়ারলাইন্সের টিকিট পাচ্ছেন ২০০ জন', '<p>শুক্রবার (০২ অক্টোবর) সৌদি অ্যারাবিয়ান এয়ারলাইন্সের টিকিট পাচ্ছেন ২০০ জন প্রবাসী বাংলাদেশি যাত্রী। তবে যারা সৌদি এয়ারলাইন্সের রিটার্ন টিকিট করে দেশে এসে করোনা ভাইরাসে আটকা পড়েছিলেন, শুধু তারাই পাবেন এই টিকিট।</p>\r\n\r\n<p>এ জন্য নতুন কোনো ফি দিতে হচ্ছে না প্রবাসীদের।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>সংশ্লিষ্টরা জানিয়েছেন, শুক্রবার সকাল ৯টার দিকে সৌদি এয়ারলাইন্সের টিকিট ইস্যু শুরু হয়। সি-১ থেকে ২০০ পর্যন্ত টোকেনধারী সৌদি আরব ফিরে যাওয়ার টিকিট পাবেন। টোকেনধারীরা নির্ধারিত লাইনে দাঁড়িয়ে অপেক্ষা করছেন।</p>\r\n\r\n<p>প্রবাসীরা জানিয়েছেন, টিকিট পেতে কোনো ভোগান্তি পেতে হচ্ছে না। নির্ধারিত নিয়ম মেনে লাইনে দাঁড়িয়ে টিকিট &lsquo;রি-ইস্যু&rsquo; করতে পারছেন তারা।</p>\r\n\r\n<p>কয়েকদিন আগে সৌদি আরবের ফ্লাইট ও টিকিট নিয়ে চরম দুর্ভোগ ও অনিশ্চয়তা ছিল। সে সংকট অনেকের জন্য সমাধান হলেও ফ্লাইট ও টিকিট সীমিত হওয়ায় প্রতিদিন শত শত সৌদি প্রবাসী এখনও সৌদি এয়ারলাইন্স ও বিমান বাংলাদেশ কার্যালয়ে ভিড় করেন।</p>\r\n', 0, 9, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 5, 'a', 'a', 2, 0, 1),
(3, 'গণমাধ্যমের বিরুদ্ধে পাকিস্তান সরকারের ‘যুদ্ধ’, সাংবাদিকদের নিন্দা', '<p>গণমাধ্যমের বিরুদ্ধে পাকিস্তান সরকারের &lsquo;যুদ্ধ&rsquo;, সাংবাদিকদের নিন্দা</p>\r\n', 0, 11, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 1, 'b', 'b', 3, 0, 1),
(4, 'সাথি ফসল মারফায় আগ্রহ বাড়ছে বান্দরবানের জুমচাষিদের ', '<p><a href=\"https://www.banglanews24.com/economics-business/news/bd/815266.details\">সাথি ফসল মারফায় আগ্রহ বাড়ছে বান্দরবানের জুমচাষিদের&nbsp;</a></p>\r\n', 0, 6, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 1, 'b', 'b', 4, 0, 1),
(5, 'কুয়েত দূতাবাসে শোক বইতে স্বাক্ষর করলেন বিএনপি নেতারা', '<ul>\r\n	<li>\r\n	<p><a href=\"https://www.banglanews24.com/politics/news/bd/815136.details\">কুয়েত দূতাবাসে শোক বইতে স্বাক্ষর করলেন বিএনপি নেতারা</a></p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 0, 1, '', '02/10/2020 21', '02/10/2020 21', 0, 1, 2, 2, 1, 'e', 'e', 5, 0, 1),
(6, 'লিভারপুলকে হারিয়ে কোয়ার্টার ফাইনালে আর্সেনাল', '<p>বৃহস্পতিবার (২ অক্টোবর) রাতে অ্যানফিল্ডে নির্ধারিত ৯০ মিনিট গোলশূন্য থাকার পর টাইব্রেকারে লিভারপুলের ডিভোক ওরিগি ও হ্যারি উইলসনের শট ঠেকিয়ে দেন গানার্স গোলরক্ষক বার্নড লেনো। এরপর স্পট-কিক থেকে আর্সেনালের জয়সূচক গোল করেন জো উইলোক।</p>\r\n\r\n<p>এর ৪ দিন আগে প্রিমিয়ার লিগের ম্যাচে এই লিভারপুলের কাছেই ৩-১ গোলে হেরে গিয়েছিল আর্সেনাল। এবার প্রিমিয়ার লিগে না হোক, শক্তিশালী &lsquo;অল রেডস&rsquo;দের ইএফএল কাপে হারিয়ে দেওয়ার স্বস্তি নিয়ে মাঠ ছেড়েছেন মিকেল আরতেতা। &nbsp;</p>\r\n\r\n<p>এমন জয়ে খুশি আরতেতা বলেন, &lsquo;ইউরোপের সেরা দলের বিপক্ষে ৮ সপ্তাহের মধ্যে তৃতীয়বারের দেখায় জয় পাওয়া, আমার মতে দলের জন্য এক ধাপ এগিয়ে যাওয়া। আমাদের আরও শেখার আছে, তবে আমরা সঠিক পথেই আছি। আমাদের কাছে সব প্রতিযোগিতাই শিরোপা জেতার সুযোগ। আমাদের ক্লাবের জন্যই এটা করতে হবে। &rsquo;</p>\r\n\r\n<p>গত মৌসুমেও একবার অ্যানফিল্ড এই দুই দলের মধ্যে ৫-৫ গোলের রোমাঞ্চকর ম্যাচ প্রত্যক্ষ করেছিল। সেবার অবশ্য টাইব্রেকারে জিতে গিয়েছিল লিভারপুল। তবে এবারের ম্যাচটি কিছুটা ম্যাড়ম্যাড়ে হয়েছে। কারণ দুই দলই ছন্দ খুঁজে পায়নি। তবে শেষ পর্যন্ত পেনাল্টিতে ভাগ্য ফিরিয়েছে আর্সেনাল।</p>\r\n', 0, 4, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 2, 'ggs', 'dshsd', 6, 0, 1),
(7, 'কোনো রাষ্ট্রনায়ককে হাসিনার মতো পরিস্থিতি মোকাবিলা করতে হয়নি', '<p>পৃথিবীর কোনো রাষ্ট্রনায়ককে শেখ হাসিনার মতো এতো কঠিন পরিস্থিতি মোকাবিলা করে চলতে হয়নি বলে মন্তব্য করেছেন আওয়ামী লীগের উপদেষ্টা পরিষদের সদস্য এবং ১৪ দলের সমন্বয়ক আমির হোসেন আমু।</p>\r\n\r\n<p>তিনি বলেন, প্রধানমন্ত্রী শেখ হাসিনাকে অত্যন্ত কণ্টকাকীর্ণ পথ বেয়ে সামনে এগুতে হয়েছে।</p>\r\n\r\n<p>তবু সবকিছু মোকাবিলা করে তিনি বাংলাদেশকে এই অবস্থানে আনতে সক্ষম হয়েছেন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>বুধবার (৩০ সেপ্টম্বর) আওয়ামী লীগ সভাপতি প্রধানমন্ত্রী শেখ হাসিনার জন্মদিন উপলক্ষে কেন্দ্রীয় ১৪ দল আয়োজিত ভার্চ্যুয়াল আলোচনা সভায় তিনি একথা বলেন।</p>\r\n\r\n<p>আমির হোসেন আমু বলেন, শেখ হাসিনা শুধু দেশকেই সারাবিশ্বে মর্যাদাশীল করেননি। তার এই অকল্পনীয় রাষ্ট্রনায়কোচিত কর্মকাণ্ডের মধ্য দিয়ে নিজেকেও বিশ্বের হাতেগোনা কয়েকজন সফল মর্যাদাশীল রাষ্ট্রনায়কের মধ্যে প্রতিষ্ঠিত করতে সক্ষম হয়েছেন।</p>\r\n\r\n<p>সভায় আওয়ামী লীগের উপদেষ্টা পরিষদের আরেক সদস্য তোফায়েল আহমেদ বলেন, বঙ্গবন্ধু কন্যা প্রধানমন্ত্রী শেখ হাসিনা শুধু বাংলাদেশের নেতা নন, তিনি আন্তর্জাতিক বিশ্বে একজন মর্যাদাশালী নেতা ৷ ২০১৩ সালে জাতিসংঘের অধিবেশনে গিয়ে দেখেছিলাম কিভাবে সারাবিশ্বের নেতারা তাকে সম্মান করেন। &nbsp;</p>\r\n\r\n<p>সভায় আরও বক্তব্য রাখেন- আওয়ামী লীগের সভাপতিমণ্ডলীর সদস্য জাহাঙ্গীর করিব নানক, যুগ্ম সাধারণ সম্পাদক মাহবুব উল আলম হানিফ, ড. হাছান মাহমুদ, &nbsp;মুক্তিযুদ্ধ বিষয়ক সম্পাদক অ্যাডভোকেট মৃনাল কান্তি দাস, ওয়ার্কার্স পার্টির সভাপতি রাশেদ খান মেনন, বাংলাদেশ জাসদের সভাপতি শরীফ নুরুল আম্বিয়া, জাসদের সাধারণ সম্পাদক শিরিন আকতার, সাম্যবাদি দলের সাধারণ সম্পাদক দিলীপ বড়ুয়া, ন্যাপের সাধারণ সম্পাদক ইসমাইল হোসেন, গণতান্ত্রিক মজদুর পার্টির সাধারণ সম্পাদক জাকির হোসেন, গণতন্ত্রী পার্টির নেতা অধ্যাপক ডা. শহিদুল্লাহ শিকদার প্রমুখ।</p>\r\n', 0, 2, '', '02/10/2020 21', '04/10/2020 04', 0, 1, 2, 2, 2, 'sags', 'saga', 7, 0, 1),
(8, 'বিয়ে-শাদি মানে পুরাটাই ‘ইয়ার্কি’', '<p>সারিকা সাবাহকে বিয়ে করে খুশি হয়েছিলেন শামীম হাসান সরকার। কিন্তু দিন যত যায়, বউয়ের শাসন আর অতিরিক্ত সতর্কতায় হাঁপিয়ে ওঠেন তিনি।</p>\r\n\r\n<p>এমন পরিস্থিতিতে পড়ে শামীম মনে করেন, &lsquo;বিয়েশাদি মানে পুরাটাই ইয়ার্কি/পাগলের কারখানা নয়তো আর কী!&rsquo; তার অনুভূতি এখন এমন, &lsquo;পাগল হইতে আর বেশি দেরি নাই/বিয়ের আগে ভাবছিলাম ভেরি নাইস। &rsquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>জনপ্রিয় নির্মাতা মুহাম্মদ মোস্তফা কামাল রাজের প্রযোজনা প্রতিষ্ঠান সিনেমাওয়ালার নতুন নাটক &lsquo;ওসিডি&rsquo;র গানের কথাগুলো এভাবেই হাস্যরসে সাজানো হয়েছে। ইউটিউব ও ফেসবুকে সিনেমাওয়ালার চ্যানেলে এটি মুক্তি পেয়েছে।</p>\r\n\r\n<p>&lsquo;ইয়ার্কি&rsquo; শিরোনামের গানটি লিখেছেন জনি হক। এতে কণ্ঠ দিয়েছেন আয়েশা মৌসুমী ও নূর নবী। সুর ও সংগীত পরিচালনায় আহমেদ সবুজ।</p>\r\n\r\n<p>গানটির চিত্রায়নে শামীম হাসান সরকার ও সারিকা সাবাহ ছাড়াও অংশ নিয়েছেন মনিরা মিঠু ও অহনা তাহসিন অপ্সরা। তাদের দেখা যাবে ননদ-শাশুড়ির ভূমিকায়।</p>\r\n\r\n<p>&lsquo;ওসিডি&rsquo; তথা অবসেসিভ কমপালসিভ ডিসঅর্ডার নাটকটির বিষয়বস্তু শুচিবাই রোগ। এটি লিখেছেন ও পরিচালনা করেছেন কেএম সোহাগ রানা। তিনি নির্মাতা রাজের সহকারী পরিচালক হিসেবে কাজ করে থাকেন। সম্প্রতি ঢাকার উত্তরায় এর শুটিং সম্পন্ন হয়েছে।</p>\r\n\r\n<p>ইউটিউবে সিনেমাওয়ালার চ্যানেলে বৃহস্পতিবার (১ অক্টোবর) মুক্তি পাচ্ছে&nbsp;&lsquo;ওসিডি&rsquo; নাটকটি।</p>\r\n', 0, 5, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 1, 'sdgs', 'sdgs', 8, 0, 1),
(9, 'বাদামের সঙ্গে কিশমিশও খান প্রতিদিন', '<p>আমরা জানি, প্রতিদিন আধা কাপ বাদাম খেলে শরীরের রক্ত চলাচল স্বাভাবিক থাকে, ক্যান্সার ও হৃদরোগের ঝুঁকি কমে। আর শুধুমাত্র মিষ্টি খাবারেই আমরা কিশমিশ ব্যবহার করি।</p>\r\n\r\n<p>তবে মিষ্টি স্বাদের ছোট এই ফলটি শুধু খাবারের স্বাদই বাড়ায় না, এর রয়েছে অনেকগুলো পুষ্টিগুণ।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>বাদামে যেমন রয়েছে কয়েক ধরনের ভিটামিন, ম্যাগনেশিয়াম, ফসফরাস, জিংক, ক্যালশিয়াম, ফাইবার, ওমেগা ৩ ফ্যাটি অ্যাসিড ও পর্যাপ্ত পরিমাণ প্রোটিন।</p>\r\n\r\n<p>জানেন কি কিশমিশেও রয়েছে ভিটামিন এ ও বিটা ক্যারোটিন। এছাড়া কিশমিশে পর্যাপ্ত পরিমাণে ম্যাগনেসিয়াম ও পটাশিয়াম রয়েছে। &nbsp;</p>\r\n\r\n<p>নিয়মিত কিশমিশ খেলে দৃষ্টিশক্তি বাড়ে। হজমশক্তি বাড়িয়ে কোষ্ঠাকাঠিন্য দূর করে আমাদের শরীর থেকে টক্সিন বের করে দেয়। এগুলো অ্যাসিডিটি কমায়, কিডনির পাথর দূর করে ও হৃদরোগর ঝুকিঁ কমায়।</p>\r\n\r\n<p>জ্বর, ঠাণ্ডা ও অন্য সংক্রামক রোগ থেকে সুরক্ষা দেয়। &nbsp;তাই করোনাকালে প্রতিদিন ১০০টি পর্যন্ত কিশমিশ খাওয়ার পরামর্শ দেন বিশেষজ্ঞরা। ১০০ কিশমিশ থেকে আমরা ১২৯ ক্যালরি ও ১.৩ গ্রাম প্রোটিন পেতে পারি। &nbsp;&nbsp;</p>\r\n\r\n<p>একমুঠ পরিমাণ বাদাম ও আধা কাপ কিসমিক খাওয়ার অভ্যাস গড়ে তুলুন। তবে এগুলো একসঙ্গে না রেখে আলাদা জারে রাখুন। নয়ত কিসকিসের ময়েশ্চারে বাদাম নরম হয়ে যাবে। &nbsp;<br />\r\nডায়াবেটিসে আক্রান্তরা কিশমিশ খাওয়ার বিষয়ে বিশেষজ্ঞ ডাক্তারের পরামর্শ নিয়ে নিতে হবে।&nbsp;</p>\r\n', 0, 10, '', '02/10/2020 21', '03/10/2020 16', 0, 1, 2, 2, 5, 'sdgs', 'dhs', 9, 0, 1),
(10, 'স্বাস্থ্য খাতে বরাদ্দ কোটি টাকা', '<p>স্বাস্থ্য খাতে বরাদ্দ কোটি টাকা</p>\r\n', 0, 8, '', '03/10/2020 16', '', 0, 1, 2, 2, 2, 'বি', 'বিবু', 10, 0, 1),
(11, 'আসছে নতুন শিক্ষা পদ্ধতি', '<p>আসছে নতুন শিক্ষা পদ্ধতি</p>\r\n', 0, 7, '', '03/10/2020 16', '', 0, 1, 2, 2, 2, '্িু', 'ুিবউ', 11, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `main_category` int(2) NOT NULL,
  `ordering` int(2) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `metadescription` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `main_category`, `ordering`, `keyword`, `metadescription`, `status`) VALUES
(1, 'জাতীয়', 0, 1, 'জাতীয়', 'জাতীয়', 0),
(2, 'রাজনীতি', 0, 0, 'রাজনীতি', 'রাজনীতি', 0),
(3, 'আন্তর্জাতিক', 0, 2, 'আন্তর্জাতিক', 'আন্তর্জাতিক', 0),
(4, 'খেলাধুলা', 0, 4, 'খেলাধুলা', 'খেলাধুলা', 0),
(5, 'বিনোদন', 0, 5, 'বিনোদন', 'বিনোদন', 0),
(6, 'জেলার খবর', 0, 7, 'জেলার খবর', 'জেলার খবর', 0),
(7, 'শিক্ষা', 0, 7, 'শিক্ষা', 'শিক্ষা', 0),
(8, 'স্বাস্থ্য', 0, 8, 'স্বাস্থ্য', 'স্বাস্থ্য', 0),
(9, 'অর্থনীতি', 0, 9, 'অর্থনীতি', 'অর্থনীতি', 0),
(10, 'লাইফস্টাইল', 0, 10, 'লাইফস্টাইল', 'লাইফস্টাইল', 0),
(11, 'তথ্যপ্রযুক্তি', 0, 11, 'তথ্যপ্রযুক্তি', 'তথ্যপ্রযুক্তি', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `yesorno` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `yesorno`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `articleid` int(11) NOT NULL,
  `slide` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imagename`, `articleid`, `slide`) VALUES
(1, '1601616758.jpg', 2, 0),
(2, '', 3, 0),
(3, 'order-page-001.jpg', 4, 0),
(4, 'order-page-0011.jpg', 5, 0),
(5, 'arsebnal.jpg', 6, 0),
(6, 'images-(3).jpg', 7, 0),
(7, 'Bgg.jpg', 8, 0),
(8, 'bgag.jpg', 9, 0),
(9, 'bg4.jpg', 10, 0),
(10, 'arsebnal6.jpg', 11, 0),
(11, '1601616758.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position_name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_name`) VALUES
(1, 'lead'),
(2, 'undefine'),
(3, 'bottom'),
(4, 'middle'),
(5, 'slead');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_position` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_position`) VALUES
(1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'publish'),
(2, 'unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `contact`, `role`, `status`) VALUES
(1, 'saud@gmail.com', '123456', 'saud', 'nazmus', '01932075363', 1, 1),
(2, '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `id` int(11) NOT NULL,
  `writername` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`id`, `writername`, `status`) VALUES
(1, 'সমকালীন বাংলাদেশ ডেস্ক', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
