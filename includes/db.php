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
        ['id' => 2, 'category_name' => 'EPS-TOPIK Industry Specific (Manufacturing/Agri/Construction)', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'description' => 'Specialized sector Korean exam paper collections.'],
        ['id' => 3, 'category_name' => 'TOPIK I (Level 1 & Level 2 Beginner)', 'slug' => 'topik-1-level-1-korean-test-papers', 'description' => 'Beginner TOPIK test papers with answer keys.'],
        ['id' => 4, 'category_name' => 'TOPIK II (Level 3, 4, 5 & 6 Intermediate/Advanced)', 'slug' => 'topik-2-level-3-korean-test-papers', 'description' => 'Higher level TOPIK exam papers with audio scripts.'],
        ['id' => 5, 'category_name' => 'EPS TOPIK Special CBT & Re-entry Papers', 'slug' => 'eps-topik-special-cbt-korean-exam-paper', 'description' => 'Computer based Korean exam paper practice modules.'],
        ['id' => 6, 'category_name' => 'Year-Wise Past Papers Archive (2015 - 2025)', 'slug' => '2025-eps-topik-korean-test-papers', 'description' => '10-Year historical collections of solved Korean test papers.']
    ];
}

// Function to fetch All Year & Category Test Papers linked to real PDFs
function get_featured_test_papers($limit = 50) {
    global $conn, $db_connected;
    if ($db_connected) {
        try {
            $stmt = $conn->prepare("SELECT * FROM test_papers ORDER BY year DESC, id ASC LIMIT :limit");
            $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetchAll();
            if (!empty($res)) return $res;
        } catch (Exception $ex) {
            // Fallback
        }
    }

    // Comprehensive multi-year & multi-exam dataset with real PDFs
    return [
        ['id' => 1, 'title' => 'EPS TOPIK Reading 2025 Model Korean Test Papers with Answer Keys PDF', 'slug' => 'eps-topik-reading-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Reading', 'pdf_filename' => 'eps-topik-reading-2025.pdf', 'total_questions' => 20, 'views' => 25420],
        ['id' => 2, 'title' => '2025 Model EPS TOPIK Full Mock Exam Paper (General CBT)', 'slug' => '2025-eps-topik-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Full Mock', 'pdf_filename' => 'eps-topik-2025-model.pdf', 'total_questions' => 40, 'views' => 19800],
        ['id' => 3, 'title' => 'Master EPS TOPIK 2000 Question Bank Korean Test Papers', 'slug' => 'eps-topik-question-bank-2000-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2025', 'skill_type' => 'Question Bank', 'pdf_filename' => 'eps-topik-official-question-bank.pdf', 'total_questions' => 2000, 'views' => 34200],
        ['id' => 4, 'title' => 'EPS TOPIK Listening 2024 Solved Korean Exam Paper with Audio Script', 'slug' => 'eps-topik-listening-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Listening', 'pdf_filename' => 'eps-topik-listening-2024.pdf', 'total_questions' => 20, 'views' => 28930],
        ['id' => 5, 'title' => 'TOPIK 1 Level 1 Beginner Korean Test Papers with Explanations', 'slug' => 'topik-1-level-1-korean-test-papers', 'exam_type' => 'TOPIK I', 'year' => '2024', 'skill_type' => 'General', 'pdf_filename' => 'topik-1-beginner-solved.pdf', 'total_questions' => 70, 'views' => 14240],
        ['id' => 6, 'title' => 'TOPIK 2 Level 3-6 Intermediate & Advanced Korean Exam Paper', 'slug' => 'topik-2-level-3-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Reading/Writing', 'pdf_filename' => 'topik-2-advanced-model.pdf', 'total_questions' => 104, 'views' => 18450],
        ['id' => 7, 'title' => 'EPS TOPIK Manufacturing Sector Special Korean Test Papers', 'slug' => 'eps-topik-manufacturing-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-manufacturing.pdf', 'total_questions' => 40, 'views' => 21200],
        ['id' => 8, 'title' => '91st Official TOPIK Past Korean Exam Paper with Answer Keys', 'slug' => 'topik-91st-official-korean-test-papers', 'exam_type' => 'TOPIK II', 'year' => '2024', 'skill_type' => 'Full Set', 'pdf_filename' => 'topik-91st-official-paper.pdf', 'total_questions' => 104, 'views' => 31100],
        ['id' => 9, 'title' => '2024 Real Shift Solved EPS TOPIK Korean Exam Paper PDF', 'slug' => '2024-eps-topik-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2024', 'skill_type' => 'Solved CBT', 'pdf_filename' => 'eps-topik-2024-solved.pdf', 'total_questions' => 40, 'views' => 27500],
        ['id' => 10, 'title' => 'EPS TOPIK Agriculture & Stockbreeding Korean Exam Paper', 'slug' => 'eps-topik-agriculture-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2023', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-agriculture.pdf', 'total_questions' => 40, 'views' => 12850],
        ['id' => 11, 'title' => 'EPS TOPIK Construction Field Safety Korean Test Papers', 'slug' => 'eps-topik-construction-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2023', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-construction.pdf', 'total_questions' => 40, 'views' => 11900],
        ['id' => 12, 'title' => '90th Official TOPIK Session Korean Exam Paper PDF Download', 'slug' => 'topik-90th-official-korean-exam-paper', 'exam_type' => 'TOPIK I & II', 'year' => '2023', 'skill_type' => 'Official Paper', 'pdf_filename' => 'topik-90th-official-paper.pdf', 'total_questions' => 104, 'views' => 24100],
        ['id' => 13, 'title' => '89th Official TOPIK Past Korean Test Papers with Answer Sheet', 'slug' => 'topik-89th-official-korean-test-papers', 'exam_type' => 'TOPIK I & II', 'year' => '2023', 'skill_type' => 'Official Paper', 'pdf_filename' => 'topik-89th-official-paper.pdf', 'total_questions' => 104, 'views' => 20300],
        ['id' => 14, 'title' => '2023 Official Previous Year EPS TOPIK Korean Test Papers', 'slug' => '2023-eps-topik-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2023', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2023-past.pdf', 'total_questions' => 40, 'views' => 22400],
        ['id' => 15, 'title' => 'EPS TOPIK Fishery Sector Korean Exam Paper PDF', 'slug' => 'eps-topik-fishery-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2022', 'skill_type' => 'Industry', 'pdf_filename' => 'eps-topik-fishery.pdf', 'total_questions' => 40, 'views' => 9800],
        ['id' => 16, 'title' => '2022 Previous Year Solved EPS TOPIK Korean Exam Paper', 'slug' => '2022-eps-topik-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2022', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2022-past.pdf', 'total_questions' => 40, 'views' => 18900],
        ['id' => 17, 'title' => '2021 Practice Set EPS TOPIK Korean Test Papers PDF', 'slug' => '2021-eps-topik-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2021', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2021-past.pdf', 'total_questions' => 40, 'views' => 16400],
        ['id' => 18, 'title' => '2020 Real Shift EPS TOPIK Korean Exam Paper PDF', 'slug' => '2020-eps-topik-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2020', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2020-past.pdf', 'total_questions' => 40, 'views' => 15100],
        ['id' => 19, 'title' => '2019 Past Year Solved EPS TOPIK Korean Test Papers', 'slug' => 'eps-topik-2019-past-papers-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2019', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2019-past.pdf', 'total_questions' => 40, 'views' => 14300],
        ['id' => 20, 'title' => '2018 Official EPS TOPIK Past Korean Exam Paper PDF', 'slug' => 'eps-topik-2018-past-papers-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2018', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2018-past.pdf', 'total_questions' => 40, 'views' => 13900],
        ['id' => 21, 'title' => '2017 Official EPS TOPIK Korean Test Papers with Key', 'slug' => 'eps-topik-2017-past-papers-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2017', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2017-past.pdf', 'total_questions' => 40, 'views' => 12400],
        ['id' => 22, 'title' => '2016 Official EPS TOPIK Korean Exam Paper PDF Archive', 'slug' => 'eps-topik-2016-past-papers-korean-test-papers', 'exam_type' => 'EPS-TOPIK', 'year' => '2016', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2016-past.pdf', 'total_questions' => 40, 'views' => 11200],
        ['id' => 23, 'title' => '2015 Foundation EPS TOPIK Korean Test Papers PDF', 'slug' => 'eps-topik-2015-past-papers-korean-exam-paper', 'exam_type' => 'EPS-TOPIK', 'year' => '2015', 'skill_type' => 'Archive', 'pdf_filename' => 'eps-topik-2015-past.pdf', 'total_questions' => 40, 'views' => 10800]
    ];
}

// Function to fetch Question Bank items for dynamic Question Search Widget
function get_question_bank_items() {
    return [
        [
            'id' => 101,
            'exam' => 'EPS-TOPIK 2025',
            'category' => 'Synonyms & Opposites',
            'korean' => '다음 단어의 반대말은 무엇입니까? [ 가깝다 ]',
            'english' => 'What is the opposite word of "가깝다" (Close/Near)?',
            'options' => '① 멀다 (Far / दूर)  ② 좁다 (Narrow)  ③ 크다 (Big)  ④ 무겁다 (Heavy)',
            'answer' => '① 멀다 (Far)',
            'explanation' => 'The opposite of near (가깝다) is far (멀다).'
        ],
        [
            'id' => 102,
            'exam' => 'EPS-TOPIK 2025',
            'category' => 'Fill in Blank Grammar',
            'korean' => '저는 매일 아침 7시에 _________.',
            'english' => 'Fill in the blank: "I _________ at 7:00 AM every morning."',
            'options' => '① 일어납니다 (Wake up)  ② 자 봅니다 (Try to sleep)  ③ 먹었습니다 (Ate)  ④ 마십니다 (Drink)',
            'answer' => '① 일어납니다',
            'explanation' => 'Ireonabnida means waking up at 7 AM.'
        ],
        [
            'id' => 103,
            'exam' => 'EPS-TOPIK 2024',
            'category' => 'Workplace Safety Signs',
            'korean' => '다음 표지판이 뜻하는 것은 무엇입니까? [ 🚫 손대지 마시오 ]',
            'english' => 'What does the safety signboard "손대지 마시오" mean?',
            'options' => '① 만지지 마십시오 (Do not touch)  ② 들어가지 마십시오 (No entry)  ③ 금연 (No smoking)  ④ 주차금지 (No parking)',
            'answer' => '① 만지지 마십시오',
            'explanation' => 'Son-dae-ji Ma-si-o and Manji-ji Ma-sip-si-o both command "Do not touch".'
        ],
        [
            'id' => 104,
            'exam' => 'TOPIK I Level 1',
            'category' => 'Occupations & Vocabulary',
            'korean' => '이 사람의 직업은 무엇입니까? "저는 병원에서 환자를 치료합니다."',
            'english' => 'What is this persons occupation? "I treat patients in a hospital."',
            'options' => '① 의사 (Doctor)  ② 선생님 (Teacher)  ③ 경찰관 (Police)  ④ 요리사 (Chef)',
            'answer' => '① 의사 (Doctor)',
            'explanation' => 'One who treats patients in a hospital is a Doctor (의사).'
        ],
        [
            'id' => 105,
            'exam' => 'EPS-TOPIK Manufacturing',
            'category' => 'Factory Hand Tools',
            'korean' => '다음 그림을 보고 맞는 단어를 고르십시오: [ 🔧 스패너 ]',
            'english' => 'Identify the hand tool shown in the image:',
            'options' => '① 스패너 (Spanner / Wrench)  ② 망치 (Hammer)  ③ 드라이버 (Screwdriver)  ④ 펜치 (Pliers)',
            'answer' => '① 스패너',
            'explanation' => 'Spanner (스패너) is used for tightening bolts and nuts in factory work.'
        ],
        [
            'id' => 106,
            'exam' => 'TOPIK II Level 3-4',
            'category' => 'Sentence Connectors',
            'korean' => '비가 오기 ________ 우산을 챙기세요.',
            'english' => 'Choose the correct connector: "Take an umbrella _____ it rains."',
            'options' => '① 전에 (Before)  ② 후에 (After)  ③ 동안 (While)  ④ 때문에 (Because)',
            'answer' => '① 전에',
            'explanation' => '-기 전에 expresses "before doing an action".'
        ]
    ];
}

// Function to fetch Live Test Questions with Bilingual English Explanations for Indian Learners
function get_live_questions() {
    global $conn, $db_connected;
    if ($db_connected) {
        try {
            $stmt = $conn->query("SELECT * FROM live_questions ORDER BY id ASC LIMIT 5");
            $res = $stmt->fetchAll();
            if (!empty($res)) return $res;
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
            'option_d' => '요리사 (Chef / र소इया)',
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
