-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chishti_chats`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'web development', 'web-development', '2023-11-22 01:38:17', '2023-11-22 01:38:17', NULL),
(13, 'app development', 'app-development', '2023-11-22 01:38:27', '2023-11-22 01:38:27', NULL),
(14, 'software development', 'software-development', '2023-11-22 01:38:38', '2023-11-22 01:38:38', NULL),
(15, 'search engine optimization', 'search-engine-optimization', '2023-11-22 01:38:53', '2023-11-22 01:38:53', NULL),
(16, 'data science', 'data-science', '2023-11-22 01:39:06', '2023-11-22 01:39:06', NULL),
(18, 'cyber security', 'cyber-security', '2023-11-22 01:39:29', '2023-11-22 01:39:29', NULL),
(19, 'machine learning', 'machine-learning', '2023-11-22 01:40:45', '2023-11-22 01:40:45', NULL),
(20, 'ui ux', 'ui-ux', '2023-11-22 01:44:49', '2023-11-22 01:44:49', NULL),
(21, 'pwa', 'pwa', '2023-11-22 01:45:02', '2023-11-22 01:45:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '04DE64DB56111381', 18, 'sdfds', '2023-11-21 13:37:11', '2023-11-21 13:37:11', NULL),
(2, '04DE64DB56111381', 19, 'It is very good app development forum', '2023-11-22 02:00:14', '2023-11-22 02:00:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_email` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `role`, `user_id`, `email`, `phone`, `password`, `two_fa_email`, `two_fa_phone`, `created_at`, `updated_at`) VALUES
(2, 'ADMIN', '123443', 'admin@gmail.com', '123456789', '$2y$10$Z0JhIN84CCP5q1cCAdv5tuzKN.Ocnz3/lkIruWjZFurlbPcknglbW', 'NO', ' NO', '2022-11-27 23:47:05', '2022-11-27 23:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `img_name`, `title`, `caption`, `alt`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(419, '175c6c45783096.webp', NULL, NULL, NULL, NULL, NULL, '2023-11-17 12:05:40', '2023-11-17 12:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_topic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_img_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js_schema` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_16_000000_create_users_table', 1),
(3, '2023_11_16_000001_create_password_reset_tokens_table', 1),
(4, '2023_11_16_000002_create_failed_jobs_table', 1),
(5, '2023_11_16_000004_create_categories_table', 1),
(6, '2023_11_16_000005_create_posts_table', 1),
(7, '2023_11_16_000006_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[{"file_id":"419"}]',
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `content`, `file`, `tags`, `short_des`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, '04DE64DB56111381', 13, 'How to create android app', 'how-to-create-android-app', '&lt;p&gt;Creating an Android app involves several steps. Here&amp;rsquo;s a simplified overview of the process:&lt;/p&gt;\r\n\r\n&lt;p&gt;### 1. Define your Idea:&lt;br /&gt;\r\nIdentify what your app will do, its target audience, and its key features.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 2. Set Up Development Environment:&lt;br /&gt;\r\nDownload and install Android Studio, the official IDE for Android development. Ensure you have the Java Development Kit (JDK) installed.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 3. Learn the Basics:&lt;br /&gt;\r\nFamiliarize yourself with Java/Kotlin (the primary languages for Android development) and XML (for designing layouts).&lt;/p&gt;\r\n\r\n&lt;p&gt;### 4. Design the User Interface (UI):&lt;br /&gt;\r\nUse XML in Android Studio to create layouts for your app. This involves defining the appearance and structure of your app&amp;rsquo;s screens.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 5. Code the Functionality:&lt;br /&gt;\r\nWrite the code that makes your app work. This involves implementing features, handling user interactions, and connecting the UI with the app&amp;rsquo;s logic.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 6. Test Your App:&lt;br /&gt;\r\nUse emulators or connect an Android device to test your app for bugs, usability, and performance.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 7. Debug and Refine:&lt;br /&gt;\r\nIdentify and fix any issues that arise during testing. Continuously refine your app based on feedback.&lt;/p&gt;\r\n\r\n&lt;p&gt;### 8. Prepare for Release:&lt;br /&gt;\r\nOptimize your app, create necessary assets (icons, images, etc.), and set up necessary accounts (e.g., Google Play Developer Console).&lt;/p&gt;\r\n\r\n&lt;p&gt;### 9. Publish Your App:&lt;br /&gt;\r\nSubmit your app to the Google Play Store. Follow the guidelines and provide all required information.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Tips:&lt;br /&gt;\r\n- **Documentation &amp;amp; Resources:** Refer to Android&amp;rsquo;s official documentation and online tutorials. Many resources are available to assist in learning Android development.&lt;br /&gt;\r\n- **Version Control:** Use version control systems like Git to manage your codebase.&lt;br /&gt;\r\n- **Stay Updated:** Android development evolves, so stay updated with the latest tools and best practices.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Resources:&lt;br /&gt;\r\n- Android Developer Documentation: [developer.android.com](https://developer.android.com/)&lt;br /&gt;\r\n- Android Studio: [developer.android.com/studio](https://developer.android.com/studio)&lt;/p&gt;\r\n\r\n&lt;p&gt;Remember, app development can be complex and might require persistence and patience, especially when encountering challenges. It&amp;rsquo;s a great skill to learn and can lead to creating amazing products!&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'app development can be complex and might require persistence and patience, especially when encountering challenges. It&rsquo;s a great skill to learn and can lead to creating amazing products!', '2023-11-22 01:58:05', '2023-11-22 01:58:05', NULL),
(20, '04DE64DB56111381', 18, 'Cybersecurity in the Digital Age: Protecting Your Online Presence', 'cybersecurity-in-the-digital-age-protecting-your-online-presence', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;In today&amp;#39;s hyper-connected world, safeguarding your digital life has never been more critical. Cybersecurity stands as the gatekeeper against a myriad of threats lurking in the digital realm. Here are some key insights to fortify your online defenses:&lt;/p&gt;\r\n\r\n&lt;p&gt;### Understanding the Risks&lt;/p&gt;\r\n\r\n&lt;p&gt;Cyber threats come in various forms, from data breaches and malware attacks to phishing attempts and identity theft. Recognizing these risks is the first step toward securing your digital footprint.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Importance of Strong Passwords&lt;/p&gt;\r\n\r\n&lt;p&gt;Crafting robust, unique passwords for each online account significantly bolsters your defenses. Consider using password managers to generate and store complex passwords securely.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing Two-Factor Authentication (2FA)&lt;/p&gt;\r\n\r\n&lt;p&gt;Implementing 2FA adds an extra layer of security by requiring two forms of identification before granting access, making it harder for unauthorized users to breach your accounts.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Regular Software Updates&lt;/p&gt;\r\n\r\n&lt;p&gt;Keeping your devices and software up to date patches vulnerabilities, minimizing the chances of exploitation by cybercriminals.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Vigilance Against Phishing Attacks&lt;/p&gt;\r\n\r\n&lt;p&gt;Stay wary of suspicious emails, messages, or websites aiming to trick you into revealing sensitive information. Verify sources before sharing any personal data.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Securing Your Network&lt;/p&gt;\r\n\r\n&lt;p&gt;Utilize secure connections and encryption protocols, such as VPNs, especially when accessing sensitive information over public Wi-Fi networks.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Backing Up Your Data&lt;/p&gt;\r\n\r\n&lt;p&gt;Frequent backups ensure that even if your system is compromised, your essential data remains intact, reducing the impact of potential attacks.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Educating Yourself and Others&lt;/p&gt;\r\n\r\n&lt;p&gt;Continuously educate yourself and those around you about cybersecurity best practices. Awareness is a powerful tool in the fight against online threats.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Seeking Professional Assistance&lt;/p&gt;\r\n\r\n&lt;p&gt;When in doubt or facing a potential breach, seek help from cybersecurity professionals or IT experts to assess and mitigate risks effectively.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;Cybersecurity is a shared responsibility. By adopting proactive measures and staying informed, you take significant strides in safeguarding your digital presence against evolving cyber threats.&lt;/p&gt;\r\n\r\n&lt;p&gt;Remember, being cautious and proactive in your online practices is key to staying secure in an ever-evolving digital landscape. Stay vigilant, stay informed, and stay secure.&lt;/p&gt;\r\n\r\n&lt;p&gt;#CyberSecurity #OnlineSafety #DataProtection #StaySafeOnline&lt;/p&gt;\r\n\r\n&lt;p&gt;---&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to adapt or modify this post to suit the tone and style of your platform or audience.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Cybersecurity is a shared responsibility. By adopting proactive measures and staying informed, you take significant strides in safeguarding your digital presence against evolving cyber threats.', '2023-11-22 02:02:24', '2023-11-22 02:02:24', NULL),
(21, '04DE64DB56111381', 16, 'Unleashing the Power of Data Science: Transforming Insights into Action', 'unleashing-the-power-of-data-science-transforming-insights-into-action', '&lt;p&gt;Title: &amp;quot;Unleashing the Power of Data Science: Transforming Insights into Action&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Data science, the art of extracting meaningful insights from vast datasets, continues to revolutionize industries, driving innovation and informed decision-making. Here&amp;#39;s a dive into the world of data science and its transformative capabilities:&lt;/p&gt;\r\n\r\n&lt;p&gt;### Understanding the Data Science Landscape&lt;/p&gt;\r\n\r\n&lt;p&gt;Data science combines statistical analysis, machine learning, and domain expertise to uncover patterns, trends, and valuable insights hidden within data, enabling organizations to make data-driven decisions.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Role of Data Scientists&lt;/p&gt;\r\n\r\n&lt;p&gt;Data scientists are the architects of this revolution, employing their expertise to wrangle complex datasets, create predictive models, and derive actionable insights to solve real-world problems.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Power of Big Data&lt;/p&gt;\r\n\r\n&lt;p&gt;The exponential growth of data from various sources presents both challenges and opportunities. Data scientists harness this wealth of information to derive valuable insights that drive business strategies and innovations.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Machine Learning and Predictive Analytics&lt;/p&gt;\r\n\r\n&lt;p&gt;Machine learning algorithms empower data scientists to build predictive models that forecast future trends, behaviors, and outcomes, revolutionizing industries such as healthcare, finance, and marketing.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Ethical Data Handling and Privacy&lt;/p&gt;\r\n\r\n&lt;p&gt;As data becomes increasingly valuable, ethical considerations and privacy concerns become paramount. Data scientists play a crucial role in ensuring ethical data practices and safeguarding user privacy.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Data Visualization for Impactful Communication&lt;/p&gt;\r\n\r\n&lt;p&gt;Visualizing data through graphs, charts, and interactive dashboards simplifies complex insights, making them accessible and compelling for stakeholders to comprehend and act upon.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Continuous Learning in Data Science&lt;/p&gt;\r\n\r\n&lt;p&gt;The field of data science is dynamic, with new tools and techniques constantly emerging. Continuous learning and upskilling are essential to stay at the forefront of this rapidly evolving domain.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Democratizing Data Science&lt;/p&gt;\r\n\r\n&lt;p&gt;Efforts to make data science accessible to a broader audience through user-friendly tools and platforms democratize the process, allowing more individuals to leverage data for informed decision-making.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;Data science stands as a beacon of innovation, transforming raw data into actionable intelligence, driving efficiency, and fostering growth across industries. Embrace the power of data science to unlock a world of possibilities!&lt;/p&gt;\r\n\r\n&lt;p&gt;#DataScience #Analytics #MachineLearning #BigData #Innovation&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to tailor this post to suit your audience or platform, adding specific examples or case studies that highlight the impact of data science in a particular industry or context.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Data science, the art of extracting meaningful insights from vast datasets, continues to revolutionize industries, driving innovation and informed decision-making.', '2023-11-22 02:03:59', '2023-11-22 02:03:59', NULL),
(22, '04DE64DB56111381', 19, 'Unraveling the Power of Machine Learning: A Journey into Intelligent Technologies', 'unraveling-the-power-of-machine-learning-a-journey-into-intelligent-technologies', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Embark on a voyage through the realm of machine learning, where innovation meets intelligence. Here&amp;rsquo;s a glimpse into the captivating world of this transformative technology:&lt;/p&gt;\r\n\r\n&lt;p&gt;### What is Machine Learning?&lt;/p&gt;\r\n\r\n&lt;p&gt;Machine learning, a subset of artificial intelligence, empowers computers to learn and improve from experience without explicit programming. It&amp;rsquo;s the backbone behind various intelligent applications shaping our digital landscape.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Diving into its Capabilities&lt;/p&gt;\r\n\r\n&lt;p&gt;From recommendation systems and natural language processing to image recognition and autonomous vehicles, machine learning fuels innovations that redefine possibilities.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Key Concepts Unveiled&lt;/p&gt;\r\n\r\n&lt;p&gt;- **Supervised Learning:** Teaching models with labeled data to predict outcomes.&lt;br /&gt;\r\n- **Unsupervised Learning:** Unearthing patterns from unlabeled data for insights.&lt;br /&gt;\r\n- **Reinforcement Learning:** Empowering systems to learn through trial and error.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Impact Across Industries&lt;/p&gt;\r\n\r\n&lt;p&gt;Discover how machine learning revolutionizes industries:&lt;br /&gt;\r\n- Healthcare: Personalized treatment plans and disease prediction.&lt;br /&gt;\r\n- Finance: Fraud detection and algorithmic trading.&lt;br /&gt;\r\n- Marketing: Targeted advertising and customer segmentation.&lt;br /&gt;\r\n- Transportation: Route optimization and autonomous vehicles.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Future Unfolds&lt;/p&gt;\r\n\r\n&lt;p&gt;As machine learning continues to evolve, its potential seems boundless. Advancements in deep learning, neural networks, and quantum computing herald a future brimming with unparalleled possibilities.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing the Journey&lt;/p&gt;\r\n\r\n&lt;p&gt;Whether you&amp;rsquo;re a beginner or an enthusiast, learning about machine learning opens doors to new horizons. Online courses, workshops, and communities foster an environment ripe for exploration and growth.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;Machine learning isn&amp;rsquo;t just a technology; it&amp;rsquo;s a transformative force reshaping how we perceive and interact with the world. Join the journey, embrace the possibilities, and witness the magic of intelligent technologies shaping our future.&lt;/p&gt;\r\n\r\n&lt;p&gt;#MachineLearning #AI #DataScience #Innovation #FutureTech&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to adjust this post according to your audience or platform&amp;rsquo;s preferences. The world of machine learning is vast and endlessly fascinating!&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Machine learning, a subset of artificial intelligence, empowers computers to learn and improve from experience without explicit programming. It&rsquo;s the backbone behind various intelligent applications shaping our digital landscape.', '2023-11-22 02:05:00', '2023-11-22 02:05:00', NULL),
(23, '04DE64DB56111381', 21, 'Unlocking the Power of Progressive Web Apps (PWAs)', 'unlocking-the-power-of-progressive-web-apps-pwas', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;In the age of seamless digital experiences, Progressive Web Apps (PWAs) stand at the forefront, revolutionizing the way we interact with the web. Here&amp;#39;s a glimpse into the world of PWAs and their transformative potential:&lt;/p&gt;\r\n\r\n&lt;p&gt;### What Are PWAs?&lt;/p&gt;\r\n\r\n&lt;p&gt;Progressive Web Apps are web applications that leverage modern web capabilities to deliver an app-like experience to users, blurring the lines between traditional websites and native mobile apps.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Key Features and Benefits&lt;/p&gt;\r\n\r\n&lt;p&gt;- **Cross-platform Compatibility:** PWAs work seamlessly across devices and platforms, providing a consistent experience.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Offline Functionality:** They can function offline or with limited connectivity, ensuring uninterrupted access to content.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Fast Loading:** PWAs load instantly, offering a swift and engaging user experience.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Engagement and Retention:** With features like push notifications, PWAs enhance user engagement and retention rates.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Security:** PWAs are served via HTTPS, ensuring data security and user trust.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing PWAs for Businesses&lt;/p&gt;\r\n\r\n&lt;p&gt;- **Enhanced User Experience:** PWAs offer a smooth, app-like interface, encouraging user interaction and engagement.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Cost-Effective Development:** Building PWAs often involves less investment compared to developing separate native apps for different platforms.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Broader Reach:** PWAs transcend device and OS limitations, reaching a wider audience with a consistent experience.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Implementing PWAs&lt;/p&gt;\r\n\r\n&lt;p&gt;- **Service Workers:** These scripts enable PWAs to work offline by caching essential resources.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **App Manifests:** Defining metadata through manifests allows users to install PWAs on their devices like native apps.&lt;br /&gt;\r\n&amp;nbsp;&amp;nbsp;&lt;br /&gt;\r\n- **Responsive Design:** Creating PWAs with responsive design ensures they adapt seamlessly to various screen sizes and orientations.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Future of Web Experiences&lt;/p&gt;\r\n\r\n&lt;p&gt;PWAs represent a paradigm shift in how we consume digital content. Their ability to combine the best of web and app experiences opens doors to innovative possibilities for businesses and users alike.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embrace the Evolution&lt;/p&gt;\r\n\r\n&lt;p&gt;In a world driven by user experience, PWAs emerge as a game-changer, offering speed, reliability, and engagement. Embrace this evolution in web technology to deliver immersive experiences and stay ahead in the digital landscape.&lt;/p&gt;\r\n\r\n&lt;p&gt;#PWAs #WebApps #UserExperience #DigitalTransformation&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to customize this post according to your platform&amp;#39;s style and audience preferences, highlighting specific features or benefits relevant to your audience.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'In the age of seamless digital experiences, Progressive Web Apps (PWAs) stand at the forefront, revolutionizing the way we interact with the web.', '2023-11-22 02:05:58', '2023-11-22 02:05:58', NULL),
(24, '04DE64DB56111381', 15, 'Mastering SEO: Elevate Your Online Visibility', 'mastering-seo-elevate-your-online-visibility', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;In the digital age, standing out amidst the online noise is a challenge. Search Engine Optimization (SEO) is the compass guiding your content toward higher visibility and better ranking in search engines. Here are some pivotal tips to optimize your online presence:&lt;/p&gt;\r\n\r\n&lt;p&gt;### Understanding Keywords&lt;/p&gt;\r\n\r\n&lt;p&gt;Identify and leverage relevant keywords that resonate with your audience. Use tools like Google Keyword Planner or SEMrush to discover high-traffic keywords in your niche.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Quality Content is King&lt;/p&gt;\r\n\r\n&lt;p&gt;Craft engaging, informative, and valuable content that addresses your audience&amp;#39;s needs. Strive for originality, depth, and readability, keeping both users and search engines in mind.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Optimizing On-Page Elements&lt;/p&gt;\r\n\r\n&lt;p&gt;Fine-tune meta titles, meta descriptions, headers, and URLs to incorporate your targeted keywords. Ensure readability and relevance while maintaining a natural flow.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Enhancing User Experience (UX)&lt;/p&gt;\r\n\r\n&lt;p&gt;Focus on creating a seamless and intuitive user experience. Fast-loading pages, mobile responsiveness, and easy navigation are vital factors that affect SEO.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Building Quality Backlinks&lt;/p&gt;\r\n\r\n&lt;p&gt;Forge relationships and earn backlinks from reputable sites within your industry. Quality backlinks signal credibility and authority to search engines, boosting your rankings.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Harnessing the Power of Multimedia&lt;/p&gt;\r\n\r\n&lt;p&gt;Incorporate diverse media formats like images, videos, and infographics. Optimize these elements with descriptive filenames and alt tags to enhance accessibility and SEO.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing Local SEO&lt;/p&gt;\r\n\r\n&lt;p&gt;For businesses targeting local audiences, optimize your online presence for local searches. Claim your Google My Business listing and ensure consistency in NAP (Name, Address, Phone number) information across platforms.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Monitoring and Analytics&lt;/p&gt;\r\n\r\n&lt;p&gt;Regularly track your website&amp;#39;s performance using tools like Google Analytics. Analyze data to understand user behavior, refine strategies, and capitalize on what works best.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Evolving with Algorithm Changes&lt;/p&gt;\r\n\r\n&lt;p&gt;Stay updated with search engine algorithm updates and adapt your SEO strategies accordingly. Flexibility and agility are crucial in the ever-evolving landscape of SEO.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;SEO isn&amp;rsquo;t just about ranking higher; it&amp;rsquo;s about delivering value to your audience. By consistently optimizing your content and adapting to search engine trends, you pave the way for increased visibility and organic growth.&lt;/p&gt;\r\n\r\n&lt;p&gt;Keep learning, experimenting, and refining your SEO tactics to ensure your online presence remains at the forefront of search engine results.&lt;/p&gt;\r\n\r\n&lt;p&gt;#SEO #SearchEngineOptimization #DigitalMarketing #OnlineVisibility&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to tailor this post to match your audience&amp;rsquo;s preferences and the platforms you&amp;rsquo;ll be sharing it on. SEO is an ongoing journey, so staying informed and adaptable is key to long-term success!&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'In the digital age, standing out amidst the online noise is a challenge. Search Engine Optimization (SEO) is the compass guiding your content toward higher visibility and better ranking in search engines.', '2023-11-22 02:07:24', '2023-11-22 02:07:24', NULL),
(25, '04DE64DB56111381', 14, 'Unveiling the Art and Science of Software Development', 'unveiling-the-art-and-science-of-software-development', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Software development, at its core, is the craft of transforming ideas into functional, innovative realities. Here&amp;rsquo;s a glimpse into the world where creativity meets technology:&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Creative Journey&lt;/p&gt;\r\n\r\n&lt;p&gt;From concept to code, software development encapsulates creativity, problem-solving, and relentless innovation. It&amp;rsquo;s where ideas take shape and evolve into solutions that redefine possibilities.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Iterative Process&lt;/p&gt;\r\n\r\n&lt;p&gt;Developing software is akin to sculpting a masterpiece. It involves continuous refinement, iteration, and collaboration between developers, designers, and stakeholders.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing Technologies&lt;/p&gt;\r\n\r\n&lt;p&gt;The landscape of software development is ever-expanding. Embrace languages, frameworks, and tools that empower developers to build robust, scalable, and user-centric applications.&lt;/p&gt;\r\n\r\n&lt;p&gt;### User-Centric Design&lt;/p&gt;\r\n\r\n&lt;p&gt;Beyond lines of code, software development revolves around enhancing user experiences. Prioritizing usability and intuitive design ensures that technology serves people seamlessly.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Agile Methodologies&lt;/p&gt;\r\n\r\n&lt;p&gt;Agile methodologies revolutionized software development by fostering adaptability, collaboration, and customer-centricity. Agile teams pivot swiftly, responding to changing requirements and feedback.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Testing and Quality Assurance&lt;/p&gt;\r\n\r\n&lt;p&gt;Thorough testing is the bedrock of reliable software. Quality assurance ensures that products meet standards and exceed expectations, mitigating risks and bugs.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Continuous Learning&lt;/p&gt;\r\n\r\n&lt;p&gt;In this dynamic field, continuous learning is indispensable. Developers constantly acquire new skills, explore emerging technologies, and stay abreast of industry trends.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Collaboration and Communication&lt;/p&gt;\r\n\r\n&lt;p&gt;Effective collaboration and clear communication are pillars of successful software development. Teamwork, transparency, and shared goals drive projects toward success.&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Future of Software&lt;/p&gt;\r\n\r\n&lt;p&gt;As technology evolves, software development continues to shape our future. Emerging trends like AI, machine learning, and IoT offer boundless opportunities for innovation.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;Software development embodies a fusion of creativity and technology, paving the way for digital transformations that redefine industries and enhance human experiences.&lt;/p&gt;\r\n\r\n&lt;p&gt;Whether you&amp;#39;re a seasoned developer or a curious enthusiast, the journey of software development promises a tapestry of challenges, growth, and endless possibilities.&lt;/p&gt;\r\n\r\n&lt;p&gt;#SoftwareDevelopment #TechInnovation #CodingLife #DigitalTransformation&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to tailor this post to resonate with your audience or platform. Software development is an exciting and vast field, and this post aims to capture its essence.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Software development embodies a fusion of creativity and technology, paving the way for digital transformations that redefine industries and enhance human experiences.', '2023-11-22 02:08:33', '2023-11-22 02:08:33', NULL),
(26, '04DE64DB56111381', 20, 'Crafting Seamless User Experiences: The Power of UI/UX Design', 'crafting-seamless-user-experiences-the-power-of-ui-ux-design', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;User Interface (UI) and User Experience (UX) design play pivotal roles in shaping how users interact and engage with digital products. Here&amp;#39;s a dive into the world of UI/UX and its impact on creating exceptional user journeys:&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Fusion of Functionality and Aesthetics&lt;/p&gt;\r\n\r\n&lt;p&gt;UI focuses on the look and feel of a product, emphasizing visual elements, while UX delves into the overall user journey and satisfaction. Together, they harmonize functionality with aesthetics, elevating user satisfaction and engagement.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Understanding User-Centric Design&lt;/p&gt;\r\n\r\n&lt;p&gt;At the core of UI/UX lies the concept of user-centric design. It involves empathizing with users, understanding their needs, and designing interfaces that seamlessly align with their behaviors and expectations.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Simplicity as a Key Principle&lt;/p&gt;\r\n\r\n&lt;p&gt;Simplicity is a fundamental principle in UI/UX. Clean interfaces, intuitive navigation, and clear information hierarchy enhance usability, making it easier for users to achieve their goals effortlessly.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Consistency Across Platforms&lt;/p&gt;\r\n\r\n&lt;p&gt;Maintaining consistency in design elements and interactions across different platforms and devices fosters familiarity and ease of use for users transitioning between various interfaces.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Accessibility and Inclusivity&lt;/p&gt;\r\n\r\n&lt;p&gt;Designing for accessibility ensures that everyone, regardless of abilities or disabilities, can access and use digital products. It involves creating interfaces that are perceivable, operable, and understandable to a wide range of users.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Continuous Iteration and Improvement&lt;/p&gt;\r\n\r\n&lt;p&gt;UI/UX design is an iterative process. Collecting user feedback, analyzing metrics, and refining designs based on insights leads to continual improvements, ensuring that the product evolves to meet user needs.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Collaboration between Design and Development&lt;/p&gt;\r\n\r\n&lt;p&gt;A harmonious collaboration between designers and developers is crucial. This synergy ensures that the envisioned design translates seamlessly into a functional and visually appealing product.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Impact on Brand Perception&lt;/p&gt;\r\n\r\n&lt;p&gt;A well-crafted UI/UX design not only enhances usability but also shapes the perception of a brand. A positive user experience fosters trust, loyalty, and positive brand associations.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;UI/UX design isn&amp;rsquo;t just about creating visually appealing interfaces; it&amp;rsquo;s about crafting memorable experiences that resonate with users. By prioritizing user needs, embracing simplicity, and fostering continual improvement, UI/UX designers pave the way for delightful and impactful digital interactions.&lt;/p&gt;\r\n\r\n&lt;p&gt;#UIUXDesign #UserExperience #DigitalDesign #UserCentric #DesignThinking&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to tailor this post to your specific audience or platform. Highlight examples, visuals, or case studies to amplify the message and showcase the importance of UI/UX in today&amp;#39;s digital landscape.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'UI/UX design isn&rsquo;t just about creating visually appealing interfaces; it&rsquo;s about crafting memorable experiences that resonate with users.', '2023-11-22 02:09:40', '2023-11-22 02:09:40', NULL),
(27, '04DE64DB56111381', 12, 'Unveiling the Art and Science of Web Development: Crafting Digital Experiences', 'unveiling-the-art-and-science-of-web-development-crafting-digital-experiences', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;In an era where digital landscapes are the canvas for innovation, web development stands as the architect of captivating online experiences. Here&amp;#39;s a glimpse into the realm of web development:&lt;/p&gt;\r\n\r\n&lt;p&gt;### The Blend of Creativity and Technology&lt;/p&gt;\r\n\r\n&lt;p&gt;Web development is an intricate dance between creativity and technology. It marries design aesthetics with coding prowess to breathe life into websites and web applications.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Frontend Magic&lt;/p&gt;\r\n\r\n&lt;p&gt;The frontend, the face of the digital world, is crafted with HTML, CSS, and JavaScript. It&amp;#39;s where designs come to life, captivating users with intuitive interfaces and seamless interactions.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Backend Mastery&lt;/p&gt;\r\n\r\n&lt;p&gt;Behind the scenes, the backend, powered by languages like Python, Ruby, Node.js, or PHP, orchestrates the functionality of websites, managing databases, handling user requests, and ensuring smooth operations.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Full-Stack Wizardry&lt;/p&gt;\r\n\r\n&lt;p&gt;The rare breed of developers versed in both frontend and backend, the full-stack developers, weave together the complete tapestry of web development, seamlessly integrating all elements.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Embracing Frameworks and Libraries&lt;/p&gt;\r\n\r\n&lt;p&gt;Frameworks like React, Angular, or Vue.js, and libraries such as jQuery and Bootstrap, empower developers to expedite development while maintaining quality and scalability.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Responsive Design and User Experience&lt;/p&gt;\r\n\r\n&lt;p&gt;Creating experiences that transcend devices, responsive design ensures seamless functionality across smartphones, tablets, and desktops, while user experience (UX) design focuses on intuitive navigation and engagement.&lt;/p&gt;\r\n\r\n&lt;p&gt;### SEO and Accessibility&lt;/p&gt;\r\n\r\n&lt;p&gt;Incorporating SEO strategies and ensuring accessibility compliance enriches web content, making it discoverable and inclusive for all users.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Continuous Learning and Innovation&lt;/p&gt;\r\n\r\n&lt;p&gt;Web development is a dynamic field, requiring constant learning and adaptation to new tools, technologies, and trends to stay ahead in the digital curve.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Collaborative Ecosystem&lt;/p&gt;\r\n\r\n&lt;p&gt;Collaboration among developers, designers, content creators, and stakeholders fuels the creative process, resulting in dynamic and impactful web solutions.&lt;/p&gt;\r\n\r\n&lt;p&gt;### Conclusion&lt;/p&gt;\r\n\r\n&lt;p&gt;Web development is the artistry of the digital age, combining technical expertise with creative ingenuity to sculpt immersive online experiences that resonate with users worldwide.&lt;/p&gt;\r\n\r\n&lt;p&gt;Join the journey of web development, where innovation knows no bounds, and every line of code paints a new possibility in the vast canvas of the internet.&lt;/p&gt;\r\n\r\n&lt;p&gt;#WebDevelopment #CodeMagic #DigitalExperience #Innovation&lt;/p&gt;\r\n\r\n&lt;p&gt;---&lt;/p&gt;\r\n\r\n&lt;p&gt;Feel free to personalize or adapt this post to resonate with your audience or platform.&lt;/p&gt;', '[{\"file_id\":\"419\"}]', NULL, 'Web development is the artistry of the digital age, combining technical expertise with creative ingenuity to sculpt immersive online experiences that resonate with users worldwide.', '2023-11-22 02:10:39', '2023-11-22 02:10:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(7, 7, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(8, 6, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(9, 9, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(10, 8, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(11, 10, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(12, 4, 11, '2023-11-20 12:52:09', '2023-11-20 12:52:09'),
(13, 7, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39'),
(14, 6, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39'),
(15, 9, 12, '2023-11-20 12:52:39', '2023-11-20 12:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'web development', 'web-development', '2023-03-23 11:24:23', '2023-03-23 11:24:23'),
(5, 'web development tutorial', 'web-development-tutorial', '2023-03-23 11:24:41', '2023-03-23 11:24:41'),
(6, 'html', 'html', '2023-03-23 11:24:53', '2023-03-23 11:24:53'),
(7, 'css', 'css', '2023-03-23 11:25:02', '2023-03-23 11:25:02'),
(8, 'php', 'php', '2023-03-23 11:25:07', '2023-03-23 11:25:07'),
(9, 'laravel', 'laravel', '2023-03-23 11:25:20', '2023-03-23 11:25:20'),
(10, 'social media marketing', 'social-media-marketing', '2023-03-25 13:36:03', '2023-03-25 13:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text DEFAULT NULL,
  `avtar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `user_id`, `name`, `email`, `phone`, `address`, `avtar`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user', '04DE64DB56111381', 'Vaibhav Goswami', 'goswamivaibhav72@gmail.com', '07518445857', 'Singh Vila, Ali Nagar sunehra, near new deep tant house, Lucknow', NULL, '$2y$12$VkN7sjEpFktdUhOi53Y6BuWV5VjZVFh0rRpxHjaR.imEq6itTNA02', 'tZgtDSV8j9VwxfJAHuZ0pSGTUaVmIQEo', '1', '2023-11-21 10:03:47', '2023-11-21 11:31:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_unique` (`tag`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
