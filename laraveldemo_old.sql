-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `discripsion` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_discripsion` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tags`)),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `tags`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Leading Website Designing Company in Delhi', 'website-design', '<p>Transform your business with our award-winning website designing company in Delhi. Specializing in&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#ecommercesolution\">eCommerce</a>&nbsp;development,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#landingpagedesign\">landing</a>&nbsp;pages,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#cmsdevelopment\">CMS</a>&nbsp;Website,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#bespokeorportal\">Bespoke</a>&nbsp;Solutuion, and more, we create digital masterpieces tailored to your needs.Elevate your brand with a stunning website designed for success. Partner with us for exceptional online solutions!</p>', '1741354265.jpg', 'Leading Website Designing Company in Delhi, India', 'Transform your business with our award-winning website designing company in Delhi. Specializing in eCommerce development,', 'Website Designing', '[\"test\",\"test\"]', 0, 1, '2025-02-28 06:11:15', '2025-03-07 08:01:05'),
(2, 'Leading Website Designing Company in Delhi, India', 'website-design-company', '<p>Transform your business with our award-winning website designing company in Delhi. Specializing in&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#ecommercesolution\">eCommerce</a>&nbsp;development,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#landingpagedesign\">landing</a>&nbsp;pages,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#cmsdevelopment\">CMS</a>&nbsp;Website,&nbsp;<a href=\"https://www.artisticbird.com/website-design-company#bespokeorportal\">Bespoke</a>&nbsp;Solutuion, and more, we create digital masterpieces tailored to your needs.Elevate your brand with a stunning website designed for success. Partner with us for exceptional online solutions!</p>\r\n\r\n<p>&nbsp;</p>', '1740827389.jpg', 'Leading Website Designing Company in Delhi, India', 'Transform your business with our award-winning website designing company in Delhi. Specializing in eCommerce development, landing pages, CMS Website, Bespoke Solutuion, and more, we create digital masterpieces tailored to your needs.Elevate your brand with a stunning website designed for success. Partner with us for exceptional online solutions!', 'Website Designing', '[null,null]', 0, 1, '2025-03-01 05:05:52', '2025-03-01 05:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'web design', 'web-design', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems. It empowers us to turn ideas\r\n\r\nSoftware developers', '1716725484 . jpg', 'web design', 'Software development is the stab process of designing', 'web design', 0, 0, 1, '2024-05-26 06:41:24', '2024-05-26 06:41:24'),
(4, 'Html', 'html', '<p>Ready to stand out online? Let\'s talk about making your website awesome! Reach out to us now to chat about your website ideas and design wishes. We\'re here to turn your online dreams into a digital reality.<br></p>', '1719128373 . jpg', 'Main-fashion', 'Ready to stand out online? Let\'s talk about making your website awesome!', 'making your website', 1, 0, 1, '2024-06-23 02:09:33', '2025-03-02 07:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `orders` int(11) NOT NULL DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `lang` varchar(10) NOT NULL DEFAULT 'en',
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `subtitle`, `details`, `slug`, `meta`, `img`, `extra`, `orders`, `parent`, `status`, `lang`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Poyatos', '<section class=\'breid\' id=\'service\'>\n<div class=\'secIn\'>\n<div class=\'grew\'><h2>Web Development Services\n</h2></div>\n<div class=\'bow\'>\n\n  @if(!$all_categories->isEmpty())\n    @foreach ($all_categories as $service_cate)\n\n\n<div class=\'breedum section\' id=\'feature-left-details\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML21\'>\n<div class=\'widget-content\'>\n<div class=\'dring wow fadeInUp\' data-wow-delay=\'0s\'>\n<svg class=\'b-gradient\' viewbox=\"0 0 1200 1200\">\n<path d=\"M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z\"></path>\n</svg>\n    <div class=\'text-box\'>\n  \n    <h4><a href=\"{{url(\'view-category/\'.$service_cate->slug)}}\" class=\"text-secondary\">{{ $service_cate->name }}</a></h4>\n\n\n    <p>{!! $service_cate->description !!}</p>\n    </div>\n    </div>\n\n</div>\n</div></div>\n\n@endforeach\n\n@else\n    <p>No categories available.</p>\n@endif\n\n\n</div><!-- contained -->\n</div><!-- bow -->\n</section>\n\n\n\n\n\n<section class=\'dreid\' id=\"about\">\n<div class=\'secIn\'>\n<div class=\'grew\'><h2>Best Web Designing Company In Delhi</h2></div>\n<div class=\'bow\'>\n<div class=\'ts-left wow fadeInLeft section\' id=\'lazyload-video\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML41\'>\n<div class=\'widget-content\'>\n<div class=\"lazyYt\" data-embed=\"OHt3Vu0LV8o\">\n<img class=\"lazy loaded\" data-src=\"wp-content/uploads/2020/08/20181008074614-shutterstock-1041718081.jpg\" src=\"wp-content/uploads/2020/08/20181008074614-shutterstock-1041718081.jpg\" alt=\"Youtube video\" lazied=\"\" /></div>\n</div>\n</div></div>\n<div class=\'ts-right yape wow fadeInRight section\' id=\'company-detail\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML97\'>\n<h3 class=\'title\'>\nAre You Ready To Take Your Business Online\n</h3>\n<div class=\'widget-content\'>\n<p>Ready to stand out online? Let\'s talk about making your website awesome! Reach out to us now to chat about your website ideas and design wishes. We\'re here to turn your online dreams into a digital reality.</p>\n<a href=\'{{url(\'blog\')}}\' class=\'zbutton Gu\'><i class=\'icon dl\'></i>Read More</a>\n</div>\n</div></div>\n</div>\n</div><!-- contained -->\n</section>\n<section class=\'ts-wrapper\' id=\'services\'>\n<div class=\'secIn\'>\n<div class=\'bow\'>\n<div class=\'ts-left yape rot-top wow fadeInLeft section\' id=\'desc-feature\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML57\'>\n<h3 class=\'title\'>\nWe Offer A Variety Of Industry Specific Marketing Solutions\n</h3>\n<div class=\'widget-content\'>\n<p>We help business owners and startups better serve more clients through digital enabled tools and strategies that increase market reach. We speciliaze in serving business owners through our practical experience and passion.</p>\n<a href=\'#\' class=\'zbutton Gu\'><i class=\'icon dl\'></i>Try it free</a>\n</div>\n</div></div>\n<div class=\'ts-right section\' id=\'three-text-feature\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML13\'>\n<div class=\'widget-content\'>\n<div class=\'gs-feature-list slideone s2-grean wow fadeInUp\' data-wow-delay=\'0s\'>\n<div class=\'icon-list text-center relative-position\'><svg viewbox=\"0 0 339.411 339.411\"><polygon points=\"339.411,21.213 318.198,0 226.274,91.924 176.022,41.672 176.022,163.596 297.946,163.596 247.487,113.137  \"></polygon>\n	<polygon points=\"163.595,176.022 41.672,176.022 91.924,226.275 0,318.198 21.213,339.411 113.137,247.488 163.596,297.947  \"></polygon></svg></div>\n<div class=\'gs-text headline-list content-list\'>\n<h4>Digital Strategy</h4>\n<p>Create stunning, effective sales documents with custom-designed theme & template.</p>\n</div>\n</div>\n<div class=\'gs-feature-list slidetwo s2-grean wow fadeInUp\' data-wow-delay=\'0.2s\'>\n<div class=\'icon-list text-center relative-position\'><svg viewbox=\"0 0 1200 1200\">\n<path d=\"M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z\"/>\n</path></svg></div>\n<div class=\'gs-text headline-list content-list\'>\n<h4>Content Creation</h4>\n<p>Create stunning, effective sales documents with custom-designed theme & template.</p>\n</div>\n</div>\n<div class=\'gs-feature-list slidetree s2-grean wow fadeInUp\' data-wow-delay=\'0.3s\'>\n<div class=\'icon-list text-center relative-position\'><svg viewbox=\"0 0 24 24\"><path d=\"M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z\"/></path></svg></div>\n<div class=\'gs-text headline-list content-list\'>\n<h4>Premium Support</h4>\n<p>Create stunning, effective sales documents with custom-designed theme & template.</p>\n</div>\n</div>\n</div>\n</div></div>\n</div><!-- bow -->\n</div><!-- contained -->\n</section>\n<!--[ Content section ]-->\n<div class=\'mainIn\'>\n<!--[ Blog content ]-->\n<div class=\'blogCont\' id=\'blogCont\'>\n<div class=\'secIn\'>\n<!--[ Ad content ]-->\n<!--Hide ads <b:tag class=\'blogAd\' name=\'div\'> <b:section id=\'horizontal-ad\' maxwidgets=\'3\' showaddelement=\'true\'> <b:widget id=\'HTML91\' locked=\'true\' title=\'\' type=\'HTML\' version=\'2\' visible=\'true\'> <b:widget-settings> <b:widget-setting name=\'content\'><![CDATA[<div class=\"mt-ad\" data-text=\"Ads go here\"></div>]]></b:widget-setting> </b:widget-settings> <b:includable id=\'main\'> <b:if cond=\'data:content != &quot;&quot;\'> <data:content/> <b:else/> <div class=\'mt-ad\' expr:data-text=\'data:messages.adsGoHere\'/> </b:if> </b:includable> </b:widget> </b:section> </b:tag>-->\n<div class=\'blogM\'>\n<!--[ Main content ]-->\n<main class=\'blogItm mainbar\'>\n<div class=\'grew\'><h2 class=\'title\'>Our Recent Projects</h2></div>\n<div class=\'section\' id=\'main-widget\'><div class=\'widget Blog\' data-version=\'2\' id=\'Blog1\'>\n\n\n</div>\n\n\n\n</div>\n\n\n\n\n\n</main>\n</div>\n</div>\n</div>\n</div>\n\n\n<section class=\'b-client b-gradient\'>\n  <div class=\'secIn\'>\n  <div class=\'drill section\' id=\'client-counter\'><div class=\'widget HTML\' data-version=\'2\' id=\'HTML43\'>\n  <h3 class=\'title\'>\n  Some Numbers that Matter to Us\n  </h3>\n  <div class=\'widget-content\'>\n  <div class=\'baflo bow\'><div class=\"counter wow fadeInUp\" data-wow-delay=\'0ms\'>\n  <svg viewbox=\"0 0 24 24\"><path d=\"M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z\"/></path></svg>\n  <span>2945</span>\n  <p>Days Worked</p>\n    </div>\n  <div class=\"counter wow fadeInUp\" data-wow-delay=\'300ms\'>\n  <svg viewbox=\"0 0 512 512\">\n  <path d=\"M437.016,74.984c-99.979-99.979-262.075-99.979-362.033,0.002c-99.978,99.978-99.978,262.073,0.004,362.031     c99.954,99.978,262.05,99.978,362.029-0.002C536.995,337.059,536.995,174.964,437.016,74.984z M406.848,406.844     c-83.318,83.318-218.396,83.318-301.691,0.004c-83.318-83.299-83.318-218.377-0.002-301.693     c83.297-83.317,218.375-83.317,301.691,0S490.162,323.549,406.848,406.844z\"/>\n              <path d=\"M368.911,155.586L234.663,289.834l-70.248-70.248c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17     l85.333,85.333c8.331,8.331,21.839,8.331,30.17,0l149.333-149.333c8.331-8.331,8.331-21.839,0-30.17     S377.242,147.255,368.911,155.586z\"/></path></path></svg>\n  <span>422</span>\n  <p>Project Finished</p>\n    </div>\n  <div class=\"counter wow fadeInUp\" data-wow-delay=\'600ms\'>\n  <svg viewbox=\"0 0 296.001 296.001\">\n      <path d=\"M290.664,148.038c-5.78-10.667-15.653-18.438-27.799-21.882c-4.126-1.17-8.375-1.764-12.629-1.764   c-7.386,0-14.474,1.792-20.789,4.997c0.021-3.326,0.004-6.442-0.013-9.328c-0.01-1.766-0.02-3.454-0.02-5.061c0-4.418-3.582-8-8-8   H8.042c-4.418,0-8,3.582-8,8c0,1.606-0.01,3.295-0.02,5.061c-0.179,31.228-0.512,89.354,50.826,150.104   c1.521,1.798,3.756,2.836,6.11,2.836h115.539c2.355,0,4.59-1.038,6.11-2.836c4.799-5.678,9.145-11.334,13.083-16.946   c10.572-1.611,85.224-14.84,101.98-68.771C297.602,171.8,296.533,158.869,290.664,148.038z M60.71,257.001   c-43.783-53.478-44.84-103.064-44.703-134H213.45c0.137,30.935-0.92,80.522-44.703,134H60.71z M278.393,179.699   c-10.523,33.866-52.082,48.877-74.857,54.675c17.735-31.75,23.395-61.319,25.152-84.879c5.563-5.662,13.268-9.103,21.548-9.103   c2.778,0,5.559,0.39,8.264,1.156c7.962,2.258,14.389,7.27,18.097,14.112C280.449,162.77,281.07,171.082,278.393,179.699z\"/>\n      <path d=\"M72.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C74.324,72.571,72.729,75.963,72.729,82.001z\"/>\n      <path d=\"M104.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C106.324,72.571,104.729,75.963,104.729,82.001z\"/>\n      <path d=\"M136.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C138.324,72.571,136.729,75.963,136.729,82.001z\"/>\n  </path></path></path></path></svg>\n  <span>1621</span>\n  <p>Coffee Cup</p>\n    </div>\n  <div class=\"counter wow fadeInUp\" data-wow-delay=\'900ms\'>\n  <svg viewbox=\"0 0 16 16\"><path d=\"M4.111 2.18a7 7 0 1 1 7.778 11.64A7 7 0 0 1 4.11 2.18zm.556 10.809a6 6 0 1 0 6.666-9.978 6 6 0 0 0-6.666 9.978zM6.5 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm5 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM8 11a3 3 0 0 1-2.65-1.58l-.87.48a4 4 0 0 0 7.12-.16l-.9-.43A3 3 0 0 1 8 11z\"/></path></svg>\n  <span>865</span>\n  <p>Client Satisfied</p>\n    </div></div>\n  </div>\n  </div></div>\n  </div><!-- contained -->\n  </section>\n<!--[ Bottom blog section ]-->\n\n  <div class=\'mainIn\'>\n    <!--[ Blog content ]-->\n    <div class=\'blogCont\' id=\'blogCont\'>\n    <div class=\'secIn\'>\n    <div class=\'blogM\'>\n<main class=\'blogItm mainbar\'>\n<div class=\'grew\'><h2 class=\'title\'>Our Recent Blog</h2></div>\n\n\n\n<div class=\"bow\">\n\n\n    \n\n\n\n  @foreach ($blog as $blogitem)\n\n  <div class=\"breedum section\" id=\"feature-left-details\"><div class=\"widget HTML\" data-version=\"2\" id=\"HTML21\">\n  <div class=\"widget-content\">\n  <div class=\"dring wow fadeInUp\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-delay: 0s; animation-name: fadeInUp;\">\n  <svg class=\"b-gradient\" viewBox=\"0 0 1200 1200\">\n  <path d=\"M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z\"></path>\n  </svg>\n      <div class=\"text-box\">\n      \n      <h2><a href=\"{{url(\'blog/\'.$blogitem->slug)}}\" class=\"text-secondary\"> {{$blogitem->name}}</a></h2>\n        \n    </div>\n      </div>\n  \n  </div>\n  </div></div>\n  \n  @endforeach\n  \n  \n  \n  </div>\n\n\n\n</main>\n</div>\n</div>\n</div>\n</div>\n<!--[ Bottom Homepage section ]-->', 'home', '{\"title\":null,\"key\":null,\"description\":null}', 'uploads/service/1740742205.jpg', '{\"banner\":null,\"css\":null,\"js\":null,\"howtotitle\":null,\"estimatedCost\":null,\"totalTime\":null,\"howtodetails\":null,\"tools\":null,\"supplies\":null,\"howto\":[{\"que\":null}]}', 0, 0, 1, 'en', NULL, '2025-02-28 06:00:05', '2025-04-01 13:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2024_02_16_105707_create_categories_table', 1),
(25, '2024_02_21_104730_create_services_table', 1),
(26, '2024_02_28_132557_create_contact_table', 1),
(27, '2024_05_25_105627_create_about_table', 1),
(28, '2025_02_27_113741_create_contents_create', 2),
(29, '2025_02_27_114001_create_contents_table', 3),
(30, '2025_02_27_123419_create_shortcodes_table', 4),
(31, '2025_02_28_103645_create_blogs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `m_ser_title` varchar(255) NOT NULL,
  `m_ser_des` mediumtext NOT NULL,
  `ser_list_title` varchar(255) NOT NULL,
  `ser_list_des` mediumtext NOT NULL,
  `yt_ifranme` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `m_ser_title`, `m_ser_des`, `ser_list_title`, `ser_list_des`, `yt_ifranme`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'Web developer', 'web-developer', '<p><b>Software</b> development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems.&nbsp;<br></p>', '1716726332 . jpg', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems.', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems.', 'Our Mission', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems.', 'https://time.com/6359181/trump-criminal-trials-colorado-supreme-court/', 'Ram temple ceremony m', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems.', 'Software development', 0, 1, '2024-05-26 06:55:32', '2025-03-03 08:28:15'),
(3, 2, 'saumya mishra', 'makeup-products', '<p><b>Software development</b> is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems. It empowers us to turn ideas</p><p><br></p>', '1716729314 . jpg', 'Our Mission', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems. It empowers us to turn ideas', 'Our Mission', 'Software development is the stab process of designing', 'https://www.youtube.com/watch?v=oFRCWsnt9yA', 'Ram temple ceremony m', 'Software development is the stab process of designing, programming, solids to testing, and maintaining software as the applications and systems. It empowers us to turn ideas', 'Software development is the stab process of designing', 0, 1, '2024-05-26 07:45:14', '2025-03-03 08:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo`, `favicon`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Affiliate website dashboard', '1741006308 . png', '1741006503 . png', 'werwerwerwer', 'New Age - Start Gaming', 'Launch your mobile app landing page faster with this free', 'Launch your mobile app landing page faster with this free', '2025-02-03 05:52:57', '2025-03-03 07:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `shortcodes`
--

CREATE TABLE `shortcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `sortcode` varchar(255) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `lang` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role_as`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'gk790521@gmail.com', NULL, 1, '$2y$12$AUvs/FPZm4aMK0.HbW/xYeAMsIpy.ZYygpDw4/t4arG9ngrd1cLpC', 'SKYJOZjcBm5OEa16R8w2AuGS024glR9JmawxiryocH6VfpzRgNnl25DhypH8', '2024-05-25 08:14:38', '2024-05-25 08:14:38'),
(2, 'mahesh', 'admin@gmail.com', NULL, 0, '$2y$12$Mxfd8GGLvdM2xWjZeWBr4ugdk6AuHuqoGEy4PQJgBTRTKWHD2ZczC', NULL, '2024-06-23 13:18:42', '2024-06-23 13:18:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortcodes`
--
ALTER TABLE `shortcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shortcodes`
--
ALTER TABLE `shortcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
