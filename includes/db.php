<?php
// Core PHP MySQL Database Connection for koreantestpapers.in

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'koreantestpapers_db';

$conn = null;
$db_connected = false;

try {
    // Attempt PDO connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    $db_connected = true;
} catch (PDOException $e) {
    // Graceful fallback mode if MySQL database is not created yet
    $db_connected = false;
}

// Function to fetch Exam Categories
function get_exam_categories() {
    global $conn, $db_connected;
    if ($db_connected) {
        try {
            $stmt = $conn->query("SELECT * FROM exam_categories ORDER BY id ASC");
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            // Fallback
        }
    }
    return [
        ['id' => 1, 'category_name' => 'EPS-TOPIK General Reading & Listening', 'slug' => 'eps-topik-reading-korean-test-papers', 'description' => 'Official Employment Permit System Korean Test Papers for job seekers.'],
        ['id' => 2, 'category_name' => 'EPS-TOPIK Industry Specific (Manufacturing/Agri)', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'description' => 'Specialized sector Korean exam paper collections.'],
        ['id' => 3, 'category_name' => 'TOPIK I (Level 1 & Level 2 Beginner)', 'slug' => 'topik-1-level-1-korean-test-papers', 'description' => 'Beginner TOPIK test papers with answer keys.'],
        ['id' => 4, 'category_name' => 'TOPIK II (Level 3, 4, 5 & 6 Intermediate/Advanced)', 'slug' => 'topik-2-level-3-korean-test-papers', 'description' => 'Higher level TOPIK exam papers with audio scripts.'],
        ['id' => 5, 'category_name' => 'EPS TOPIK Special CBT & Re-entry Papers', 'slug' => 'eps-topik-special-cbt-korean-exam-paper', 'description' => 'Computer based Korean exam paper practice modules.'],
        ['id' => 6, 'category_name' => 'Year-Wise Past Papers (2015 - 2025 Archive)', 'slug' => '2025-eps-topik-korean-test-papers', 'description' => 'Yearly collections of solved Korean test papers.']
    ];
}

// Function to fetch Featured Test Papers
function get_featured_test_papers($limit = 10) {
    global $conn, $db_connected;
    if ($db_connected) {
        try {
            $stmt = $conn->prepare("SELECT * FROM test_papers ORDER BY views DESC LIMIT :limit");
            $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            // Fallback
        }
    }
    return [
        ['id' => 1, 'title' => 'EPS TOPIK Reading Korean Test Papers with Answer Keys PDF', 'slug' => 'eps-topik-reading-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Reading', 'total_questions' => 20, 'views' => 15420],
        ['id' => 2, 'title' => 'EPS TOPIK Listening Korean Exam Paper with Audio Files', 'slug' => 'eps-topik-listening-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Listening', 'total_questions' => 20, 'views' => 18930],
        ['id' => 3, 'title' => 'TOPIK 1 Level 1 Korean Test Papers for Beginners', 'slug' => 'topik-1-level-1-korean-test-papers', 'exam_type' => 'TOPIK I', 'year' => '2024', 'skill_type' => 'General', 'total_questions' => 70, 'views' => 9240],
        ['id' => 4, 'title' => 'TOPIK 1 Level 2 Korean Exam Paper and Solutions', 'slug' => 'topik-1-level-2-korean-exam-paper', 'exam_type' => 'TOPIK I', 'year' => '2023', 'skill_type' => 'General', 'total_questions' => 70, 'views' => 8110],
        ['id' => 5, 'title' => 'TOPIK 2 Level 3 Intermediate Korean Test Papers', 'slug' => 'topik-2-level-3-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Reading/Writing', 'total_questions' => 104, 'views' => 11450],
        ['id' => 6, 'title' => 'EPS TOPIK Manufacturing Sector Korean Test Papers', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Industry', 'total_questions' => 40, 'views' => 14200],
        ['id' => 7, 'title' => 'EPS TOPIK Agriculture Korean Exam Paper with Keys', 'slug' => 'eps-topik-agriculture-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2023', 'skill_type' => 'Industry', 'total_questions' => 40, 'views' => 7850],
        ['id' => 8, 'title' => '91st Official TOPIK Korean Test Papers with Answer Keys', 'slug' => 'topik-91st-official-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Full Set', 'total_questions' => 104, 'views' => 22100]
    ];
}

// Function to fetch Live Test Questions
function get_live_questions() {
    global $conn, $db_connected;
    if ($db_connected) {
        try {
            $stmt = $conn->query("SELECT * FROM live_questions ORDER BY id ASC LIMIT 5");
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            // Fallback
        }
    }
    return [
        [
            'id' => 1,
            'exam_type' => 'EPS-TOPIK',
            'question_text' => '다음 단어와 관계있는 것은 무엇입니까? [ 사과, 배, 수박, 포도 ]',
            'option_a' => '과일 (Fruit)',
            'option_b' => '채소 (Vegetable)',
            'option_c' => '고기 (Meat)',
            'option_d' => '생선 (Fish)',
            'correct_option' => 'A',
            'explanation' => '사과(Apple), 배(Pear), 수박(Watermelon), 포도(Grape) are all fruits (과일).'
        ],
        [
            'id' => 2,
            'exam_type' => 'EPS-TOPIK',
            'question_text' => '다음 문장의 빈칸에 들어갈 가장 알맞은 것을 고르십시오: "저는 매일 아침 7시에 _________."',
            'option_a' => '일어납니다 (Wake up)',
            'option_b' => '자 봅니다 (Try to sleep)',
            'option_c' => '먹었습니다 (Ate)',
            'option_d' => '마십니다 (Drink)',
            'correct_option' => 'A',
            'explanation' => '일어납니다 (I wake up at 7 oclock) is grammatically and logically correct.'
        ],
        [
            'id' => 3,
            'exam_type' => 'TOPIK I',
            'question_text' => '이 사람의 직업은 무엇입니까? "저는 병원에서 환자를 치료합니다."',
            'option_a' => '의사 (Doctor)',
            'option_b' => '선생님 (Teacher)',
            'option_c' => '경찰관 (Police)',
            'option_d' => '요리사 (Chef)',
            'correct_option' => 'A',
            'explanation' => 'One who treats patients in a hospital is a doctor (의사).'
        ],
        [
            'id' => 4,
            'exam_type' => 'EPS-TOPIK',
            'question_text' => '다음 그림을 보고 맞는 단어를 고르십시오. [ 📖 ]',
            'option_a' => '책 (Book)',
            'option_b' => '공책 (Notebook)',
            'option_c' => '연필 (Pencil)',
            'option_d' => '지우개 (Eraser)',
            'correct_option' => 'A',
            'explanation' => 'The icon shows a book (책).'
        ]
    ];
}

// Automatically create database tables if connected but tables don't exist
if ($db_connected && $conn) {
    try {
        $conn->exec("
            CREATE TABLE IF NOT EXISTS `exam_categories` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `category_name` VARCHAR(100) NOT NULL,
                `slug` VARCHAR(100) NOT NULL UNIQUE,
                `description` TEXT,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `test_papers` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `category_id` INT,
                `title` VARCHAR(255) NOT NULL,
                `slug` VARCHAR(255) NOT NULL UNIQUE,
                `exam_type` VARCHAR(100) NOT NULL,
                `year` VARCHAR(10) NOT NULL,
                `skill_type` VARCHAR(50) NOT NULL,
                `pdf_filename` VARCHAR(255) DEFAULT 'sample-paper.pdf',
                `has_answer_key` TINYINT(1) DEFAULT 1,
                `total_questions` INT DEFAULT 40,
                `views` INT DEFAULT 0,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
        ");
    } catch (Exception $e) {
        // Table creation warning ignored cleanly
    }
}
?>
