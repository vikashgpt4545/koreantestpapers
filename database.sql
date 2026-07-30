-- KoreanTestPapers.in Database Schema & Initial Data
-- Safe for direct import into phpMyAdmin (Hostinger / cPanel)

-- Table 1: Exam Categories & Names
CREATE TABLE IF NOT EXISTS `exam_categories` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `category_name` VARCHAR(100) NOT NULL,
    `slug` VARCHAR(100) NOT NULL UNIQUE,
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table 2: Test Papers & PDFs
CREATE TABLE IF NOT EXISTS `test_papers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `category_id` INT,
    `title` VARCHAR(255) NOT NULL,
    `slug` VARCHAR(255) NOT NULL UNIQUE,
    `exam_type` VARCHAR(100) NOT NULL, -- EPS TOPIK, TOPIK I, TOPIK II
    `year` VARCHAR(10) NOT NULL,
    `skill_type` VARCHAR(50) NOT NULL, -- Reading, Listening, Writing, General
    `pdf_filename` VARCHAR(255) DEFAULT 'sample-paper.pdf',
    `has_answer_key` TINYINT(1) DEFAULT 1,
    `total_questions` INT DEFAULT 40,
    `views` INT DEFAULT 0,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`category_id`) REFERENCES `exam_categories`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table 3: Live CBT Test Questions
CREATE TABLE IF NOT EXISTS `live_questions` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `exam_type` VARCHAR(50) NOT NULL,
    `question_text` TEXT NOT NULL,
    `option_a` VARCHAR(255) NOT NULL,
    `option_b` VARCHAR(255) NOT NULL,
    `option_c` VARCHAR(255) NOT NULL,
    `option_d` VARCHAR(255) NOT NULL,
    `correct_option` CHAR(1) NOT NULL,
    `explanation` TEXT,
    `category` VARCHAR(50) DEFAULT 'Reading'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -- Sample Category Insertions
INSERT IGNORE INTO `exam_categories` (`id`, `category_name`, `slug`, `description`) VALUES
(1, 'EPS-TOPIK General Reading & Listening', 'eps-topik-general', 'Official Employment Permit System Korean Test Papers for job seekers in South Korea.'),
(2, 'EPS-TOPIK Industry Specific Papers', 'eps-topik-industry', 'Specialized exam papers for Manufacturing, Agriculture, Construction, and Fishing.'),
(3, 'TOPIK I (Level 1 & Level 2)', 'topik-1-beginner', 'Beginner level Korean language proficiency test papers with official answer keys.'),
(4, 'TOPIK II (Level 3, 4, 5 & 6)', 'topik-2-advanced', 'Intermediate and Advanced TOPIK exam papers including Reading, Listening, and Writing.');

-- Sample Test Paper Insertions
INSERT IGNORE INTO `test_papers` (`category_id`, `title`, `slug`, `exam_type`, `year`, `skill_type`, `has_answer_key`, `total_questions`, `views`) VALUES
(1, 'EPS TOPIK Reading Korean Test Papers with Answer Keys', 'eps-topik-reading-korean-test-papers', 'EPS-TOPIK', '2025', 'Reading', 1, 20, 15420),
(1, 'EPS TOPIK Listening Korean Exam Paper with Audio Transcripts', 'eps-topik-listening-korean-exam-paper', 'EPS-TOPIK', '2024', 'Listening', 1, 20, 18930),
(3, 'TOPIK 1 Level 1 Beginner Korean Exam Paper Solved PDF', 'topik-1-level-1-korean-test-papers', 'TOPIK I', '2024', 'General', 1, 70, 9240),
(3, 'TOPIK 1 Level 2 Practice Korean Test Papers with Solutions', 'topik-1-level-2-korean-exam-paper', 'TOPIK I', '2023', 'General', 1, 70, 8110),
(4, 'TOPIK 2 Level 3 & 4 Intermediate Korean Exam Paper', 'topik-2-level-3-korean-test-papers', 'TOPIK II', '2024', 'Reading/Writing', 1, 104, 11450),
(2, 'EPS TOPIK Manufacturing Sector Korean Test Papers PDF', 'eps-topik-manufacturing-korean-test-papers', 'EPS-TOPIK', '2024', 'Industry', 1, 40, 14200),
(2, 'EPS TOPIK Agriculture Korean Exam Paper with Answer Sheet', 'eps-topik-agriculture-korean-exam-paper', 'EPS-TOPIK', '2023', 'Industry', 1, 40, 7850),
(1, '91st Official TOPIK Korean Exam Paper PDF Download', 'topik-91st-official-korean-test-papers', 'TOPIK II', '2024', 'Full Set', 1, 104, 22100);

-- Sample Live CBT Questions
INSERT IGNORE INTO `live_questions` (`exam_type`, `question_text`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `explanation`, `category`) VALUES
('EPS-TOPIK', '다음 단어와 관계있는 것은 무엇입니까? [ 사과, 배, 수박, 포도 ]', '과일 (Fruit)', '채소 (Vegetable)', '고기 (Meat)', '생선 (Fish)', 'A', '사과(Apple), 배(Pear), 수박(Watermelon), 포도(Grape) are all fruits (과일).', 'Reading'),
('EPS-TOPIK', '다음 문장의 빈칸에 들어갈 가장 알맞은 것을 고르십시오: "저는 매일 아침 7시에 _________."', '일어납니다 (Wake up)', '자 봅니다 (Try to sleep)', '먹었습니다 (Ate)', '마십니다 (Drink)', 'A', '7시에 일어납니다 (I wake up at 7 oclock every morning) fits naturally.', 'Reading'),
('TOPIK I', '이 사람의 직업은 무엇입니까? "저는 병원에서 환자를 치료합니다."', '의사 (Doctor)', '선생님 (Teacher)', '경찰관 (Police Officer)', '요리사 (Chef)', 'A', 'A person who treats patients in a hospital is a doctor (의사).', 'Reading');

-- Table 4: Users & Authentication
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('user', 'admin') DEFAULT 'user',
    `status` ENUM('free', 'trial', 'pro') DEFAULT 'trial',
    `trial_ends_at` DATETIME NULL,
    `trial_extended` TINYINT(1) DEFAULT 0,
    `subscription_ends_at` DATETIME NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `last_login` DATETIME DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table 5: Dynamic Site Settings (Pricing & Trial Config)
CREATE TABLE IF NOT EXISTS `site_settings` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `setting_key` VARCHAR(100) NOT NULL UNIQUE,
    `setting_value` TEXT NOT NULL,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Default Settings Insertions
INSERT IGNORE INTO `site_settings` (`setting_key`, `setting_value`) VALUES
('pro_price_usd', '8'),
('pro_plan_duration_days', '30'),
('trial_duration_days', '5');

-- Default Accounts (Admin, Pro Member, Trial Candidate)
INSERT IGNORE INTO `users` (`name`, `email`, `password`, `role`, `status`, `trial_ends_at`, `subscription_ends_at`) VALUES
('System Admin', 'admin@koreantestpapers.in', '$2y$10$e.w2pUvQxL.rB4X/B.1z0.bV0.bV0.bV0.bV0.bV0.bV0.bV0.bV0', 'admin', 'pro', NULL, DATE_ADD(NOW(), INTERVAL 365 DAY)),
('Pro Candidate', 'pro@koreantestpapers.in', '$2y$10$e.w2pUvQxL.rB4X/B.1z0.bV0.bV0.bV0.bV0.bV0.bV0.bV0.bV0', 'user', 'pro', NULL, DATE_ADD(NOW(), INTERVAL 30 DAY)),
('Free Trial Candidate', 'trial@koreantestpapers.in', '$2y$10$e.w2pUvQxL.rB4X/B.1z0.bV0.bV0.bV0.bV0.bV0.bV0.bV0.bV0', 'user', 'trial', DATE_ADD(NOW(), INTERVAL 5 DAY), NULL);

