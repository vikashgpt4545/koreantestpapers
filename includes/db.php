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
        ['id' => 1, 'category_name' => 'EPS-TOPIK General Reading & Listening', 'slug' => 'eps-topik-reading-korean-test-papers', 'description' => 'Official Employment Permit System Korean Test Papers for Indian job seekers.'],
        ['id' => 2, 'category_name' => 'EPS-TOPIK Industry Specific (Manufacturing/Agri)', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'description' => 'Specialized sector Korean exam paper collections.'],
        ['id' => 3, 'category_name' => 'TOPIK I (Level 1 & Level 2 Beginner)', 'slug' => 'topik-1-level-1-korean-test-papers', 'description' => 'Beginner TOPIK test papers with answer keys.'],
        ['id' => 4, 'category_name' => 'TOPIK II (Level 3, 4, 5 & 6 Intermediate/Advanced)', 'slug' => 'topik-2-level-3-korean-test-papers', 'description' => 'Higher level TOPIK exam papers with audio scripts.'],
        ['id' => 5, 'category_name' => 'EPS TOPIK Special CBT & Re-entry Papers', 'slug' => 'eps-topik-special-cbt-korean-exam-paper', 'description' => 'Computer based Korean exam paper practice modules.'],
        ['id' => 6, 'category_name' => 'Year-Wise Past Papers (2015 - 2025 Archive)', 'slug' => '2025-eps-topik-korean-test-papers', 'description' => 'Yearly collections of solved Korean test papers.']
    ];
}

// Function to fetch Featured Test Papers linked to real PDFs
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
        ['id' => 1, 'title' => 'EPS TOPIK Reading Korean Test Papers with Answer Keys PDF', 'slug' => 'eps-topik-reading-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Reading', 'pdf_filename' => 'eps-topik-reading-2025.pdf', 'total_questions' => 20, 'views' => 15420],
        ['id' => 2, 'title' => 'EPS TOPIK Listening Korean Exam Paper with Audio Files', 'slug' => 'eps-topik-listening-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Listening', 'pdf_filename' => 'eps-topik-listening-2024.pdf', 'total_questions' => 20, 'views' => 18930],
        ['id' => 3, 'title' => 'TOPIK 1 Level 1 Korean Test Papers for Beginners', 'slug' => 'topik-1-level-1-korean-test-papers', 'exam_type' => 'TOPIK I', 'year' => '2024', 'skill_type' => 'General', 'pdf_filename' => 'topik-1-beginner-solved.pdf', 'total_questions' => 70, 'views' => 9240],
        ['id' => 4, 'title' => 'TOPIK 1 Level 2 Korean Exam Paper and Solutions', 'slug' => 'topik-1-level-2-korean-exam-paper', 'exam_type' => 'TOPIK I', 'year' => '2023', 'skill_type' => 'General', 'pdf_filename' => 'topik-1-beginner-solved.pdf', 'total_questions' => 70, 'views' => 8110],
        ['id' => 5, 'title' => 'TOPIK 2 Level 3 Intermediate Korean Test Papers', 'slug' => 'topik-2-level-3-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Reading/Writing', 'pdf_filename' => 'topik-2-advanced-model.pdf', 'total_questions' => 104, 'views' => 11450],
        ['id' => 6, 'title' => 'EPS TOPIK Manufacturing Sector Korean Test Papers', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-manufacturing.pdf', 'total_questions' => 40, 'views' => 14200],
        ['id' => 7, 'title' => 'EPS TOPIK Agriculture Korean Exam Paper with Keys', 'slug' => 'eps-topik-agriculture-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2023', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-agriculture.pdf', 'total_questions' => 40, 'views' => 7850],
        ['id' => 8, 'title' => '91st Official TOPIK Korean Test Papers with Answer Keys', 'slug' => 'topik-91st-official-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Full Set', 'pdf_filename' => 'topik-91st-official-paper.pdf', 'total_questions' => 104, 'views' => 22100],
        ['id' => 9, 'title' => 'Master EPS TOPIK 2000 Question Bank Korean Test Papers', 'slug' => 'eps-topik-question-bank-2000-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Question Bank', 'pdf_filename' => 'eps-topik-official-question-bank.pdf', 'total_questions' => 2000, 'views' => 31200]
    ];
}

// Function to fetch Live Test Questions with Bilingual English Explanations for Indian Learners
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
            'question_text' => '다음 단어와 관계있는 것은 무엇입니까? (What is related to the following words?) [ 사과 (Apple), 배 (Pear), 수박 (Watermelon), 포도 (Grape) ]',
            'option_a' => '과일 (Fruit / फल)',
            'option_b' => '채소 (Vegetable / सब्जी)',
            'option_c' => '고기 (Meat / मांस)',
            'option_d' => '생선 (Fish / मछली)',
            'correct_option' => 'A',
            'explanation' => 'Korean: 사과(Apple), 배(Pear), 수박(Watermelon), 포도(Grape) are all fruits. English Meaning: 과일 means Fruit. Option A is correct.'
        ],
        [
            'id' => 2,
            'exam_type' => 'EPS-TOPIK',
            'question_text' => '다음 문장의 빈칸에 들어갈 가장 알맞은 것을 고르십시오 (Choose the best answer for the blank): "저는 매일 아침 7시에 _________."',
            'option_a' => '일어납니다 (Wake up / उठना)',
            'option_b' => '자 봅니다 (Try to sleep / सोने की कोशिश)',
            'option_c' => '먹었습니다 (Ate / खाया)',
            'option_d' => '마십니다 (Drink / पीना)',
            'correct_option' => 'A',
            'explanation' => 'Korean Context: "저는 매일 아침 7시에 일어납니다" translates to "I wake up at 7 oclock every morning in English". Option A is correct.'
        ],
        [
            'id' => 3,
            'exam_type' => 'TOPIK I',
            'question_text' => '이 사람의 직업은 무엇입니까? (What is this persons occupation?): "저는 병원에서 환자를 치료합니다. (I treat patients in a hospital.)"',
            'option_a' => '의사 (Doctor / डॉक्टर)',
            'option_b' => '선생님 (Teacher / शिक्षक)',
            'option_c' => '경찰관 (Police Officer / पुलिस अधिकारी)',
            'option_d' => '요리사 (Chef / रसोइया)',
            'correct_option' => 'A',
            'explanation' => 'English Meaning: "병원" = Hospital, "환자" = Patient, "치료하다" = To treat. A person who treats patients in a hospital is a Doctor (의사).'
        ],
        [
            'id' => 4,
            'exam_type' => 'EPS-TOPIK',
            'question_text' => '다음 안전 표지판이 뜻하는 것은 무엇입니까? (What does this workplace safety sign mean?): [ 🚫 손대지 마시오 ]',
            'option_a' => '만지지 마십시오 (Do not touch / छूना मना है)',
            'option_b' => '들어가지 마십시오 (Do not enter / प्रवेश वर्जित)',
            'option_c' => '담배를 피우지 마십시오 (No smoking / धूम्रपान निषेध)',
            'option_d' => '주차하지 마십시오 (No parking / पार्किंग मना है)',
            'correct_option' => 'A',
            'explanation' => 'English Explanation: "손대지 마시오" and "만지지 마십시오" both mean "Do not touch". Crucial safety sign question in EPS-TOPIK.'
        ]
    ];
}
?>
