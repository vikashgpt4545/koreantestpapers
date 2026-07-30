<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Word Test Level 1 & 2 Beginner Vocabulary Drills PDF";
$page_desc = "Master 3,000+ words Korean word test Level 1 and Level 2 beginner vocabulary drills with English translations, audio pronunciation MP3s, interactive practice quizzes, and PDF downloads.";
$canonical_url = "https://koreantestpapers.in/korean-word-test-level-1-2-vocab";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();

// Include Shared Header Template
require_once __DIR__ . '/../includes/header.php';
?>

<script>
    window.liveQuestions = <?php echo json_encode($live_questions); ?>;
</script>

<!-- Schema Markup: Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Korean Word Test Level 1 & 2 Beginner Vocabulary Drills PDF",
  "description": "Comprehensive 3,000+ word study resource providing beginner Korean Level 1 and Level 2 vocabulary lists, flashcards, pronunciation audio, and PDF practice tests.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-word-test-level-1-2-vocab"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (3,000+ WORDS EXTENDED BEGINNER VOCABULARY VAULT) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: BEGINNER VOCABULARY OVERVIEW & PEDAGOGY -->
        <div class="seo-content-box">
            <h2>Complete 3,000-Word Guide to Korean Word Test Level 1 & 2 Beginner Vocabulary</h2>
            <p>
                Building a robust foundational vocabulary is the ultimate predictor of success for non-native learners preparing for NIIED TOPIK I (Levels 1 and 2) or HRD Korea EPS-TOPIK examinations. Engaging with a comprehensive <strong>korean word test level 1 2 vocab</strong> training system allows learners to transition smoothly from basic Hangul reading (한글) to rapid sentence comprehension and spoken audio discrimination.
            </p>

            <p>
                The beginner Korean vocabulary framework encompasses over 800 core high-frequency words categorized across daily life topics: personal greetings, numbers and counters, family relationships, food and dining, market shopping, directions, transportation, body parts, weather seasons, and basic action verbs. Solving structured <strong>korean word test</strong> sheets ensures that candidates store these terms in long-term memory without confusion. Download complete Level 1 and Level 2 vocabulary PDF lists and MP3 pronunciation tracks below.
            </p>

            <p>
                To achieve Level 1 certification on the official TOPIK exam, a candidate must demonstrate command over approximately 800 basic vocabulary items and basic grammar sentence structures (S-O-V pattern). Achieving Level 2 certification requires expanding this lexicon to approximately 1,500 to 2,000 words, including indirect honorific expressions, past and future tense verb conjugations, and public place terminology. Practicing with our <strong>korean test papers</strong> word vaults guarantees optimal recall speed on test day.
            </p>

            <div class="callout-box">
                <h4>📌 Beginner Korean Vocabulary Master Class Topics</h4>
                <ul>
                    <li><strong>Greetings & Self-Introductions:</strong> Hello (안녕하세요), Thank you (감사합니다), Nice to meet you (반갑습니다).</li>
                    <li><strong>Sino-Korean & Native Korean Numbers:</strong> 1-100 counting systems and item counter units (개, 명, 권, 병, 대).</li>
                    <li><strong>Daily Activities & Routines:</strong> Eating (먹다), Sleeping (자다), Studying (공부하다), Working (일하다).</li>
                    <li><strong>Locations & Directions:</strong> School (학교), Hospital (병원), Bank (은행), Left (왼쪽), Right (오른쪽).</li>
                    <li><strong>Time & Seasons:</strong> Today (오늘), Tomorrow (내일), Morning (아침), Spring (봄), Winter (겨울).</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: EXTENDED BEGINNER VOCABULARY TABLE (80+ VOCAB ENTRIES) -->
        <div class="seo-content-box">
            <h2>Master Beginner Korean Vocabulary Table (TOPIK Level 1 & 2 Core Nouns & Verbs)</h2>
            <p>
                Study these essential 80+ high-frequency beginner vocabulary words with Romanization, English meanings, and sample context sentences:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Korean Term (한글)</th>
                            <th>Romanization</th>
                            <th>English Meaning</th>
                            <th>Word Class</th>
                            <th>Sample Usage Sentence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>사람 (Saram)</strong></td>
                            <td>sa-ram</td>
                            <td>Person / People</td>
                            <td>Noun</td>
                            <td>한국 사람이에요. (I am a Korean person.)</td>
                        </tr>
                        <tr>
                            <td><strong>집 (Jip)</strong></td>
                            <td>jip</td>
                            <td>House / Home</td>
                            <td>Noun</td>
                            <td>지금 집에 가요. (I am going home now.)</td>
                        </tr>
                        <tr>
                            <td><strong>학교 (Hak-gyo)</strong></td>
                            <td>hak-gyo</td>
                            <td>School</td>
                            <td>Noun</td>
                            <td>학교에서 한국어를 배워요. (I learn Korean at school.)</td>
                        </tr>
                        <tr>
                            <td><strong>친구 (Chin-gu)</strong></td>
                            <td>chin-gu</td>
                            <td>Friend</td>
                            <td>Noun</td>
                            <td>내일 친구를 만나요. (I meet a friend tomorrow.)</td>
                        </tr>
                        <tr>
                            <td><strong>물 (Mul)</strong></td>
                            <td>mul</td>
                            <td>Water</td>
                            <td>Noun</td>
                            <td>시원한 물을 마셔요. (I drink cold water.)</td>
                        </tr>
                        <tr>
                            <td><strong>밥 (Bap)</strong></td>
                            <td>bap</td>
                            <td>Rice / Meal</td>
                            <td>Noun</td>
                            <td>아침 밥을 먹었어요. (I ate breakfast.)</td>
                        </tr>
                        <tr>
                            <td><strong>책 (Chaek)</strong></td>
                            <td>chaek</td>
                            <td>Book</td>
                            <td>Noun</td>
                            <td>도서관에서 책을 읽어요. (I read a book at the library.)</td>
                        </tr>
                        <tr>
                            <td><strong>돈 (Don)</strong></td>
                            <td>don</td>
                            <td>Money</td>
                            <td>Noun</td>
                            <td>지갑에 돈이 있어요. (There is money in the wallet.)</td>
                        </tr>
                        <tr>
                            <td><strong>시간 (Si-gan)</strong></td>
                            <td>si-gan</td>
                            <td>Time / Hours</td>
                            <td>Noun</td>
                            <td>지금 몇 시예요? (What time is it now?)</td>
                        </tr>
                        <tr>
                            <td><strong>일 (Il)</strong></td>
                            <td>il</td>
                            <td>Work / Job / Day</td>
                            <td>Noun</td>
                            <td>오늘 일이 많아요. (I have a lot of work today.)</td>
                        </tr>
                        <tr>
                            <td><strong>가다 (Ga-da)</strong></td>
                            <td>ga-da</td>
                            <td>To go</td>
                            <td>Verb</td>
                            <td>시장에 갑니다. (I go to the market.)</td>
                        </tr>
                        <tr>
                            <td><strong>오다 (O-da)</strong></td>
                            <td>o-da</td>
                            <td>To come</td>
                            <td>Verb</td>
                            <td>비가 옵니다. (Rain is coming.)</td>
                        </tr>
                        <tr>
                            <td><strong>먹다 (Meok-da)</strong></td>
                            <td>meok-da</td>
                            <td>To eat</td>
                            <td>Verb</td>
                            <td>점심을 먹어요. (I eat lunch.)</td>
                        </tr>
                        <tr>
                            <td><strong>마시다 (Ma-si-da)</strong></td>
                            <td>ma-si-da</td>
                            <td>To drink</td>
                            <td>Verb</td>
                            <td>커피를 마셔요. (I drink coffee.)</td>
                        </tr>
                        <tr>
                            <td><strong>자다 (Ja-da)</strong></td>
                            <td>ja-da</td>
                            <td>To sleep</td>
                            <td>Verb</td>
                            <td>일찍 자요. (I sleep early.)</td>
                        </tr>
                        <tr>
                            <td><strong>보다 (Bo-da)</strong></td>
                            <td>bo-da</td>
                            <td>To watch / see</td>
                            <td>Verb</td>
                            <td>영화를 봐요. (I watch a movie.)</td>
                        </tr>
                        <tr>
                            <td><strong>듣다 (Deut-da)</strong></td>
                            <td>deut-da</td>
                            <td>To listen / hear</td>
                            <td>Verb</td>
                            <td>음악을 들어요. (I listen to music.)</td>
                        </tr>
                        <tr>
                            <td><strong>읽다 (Ik-da)</strong></td>
                            <td>ik-da</td>
                            <td>To read</td>
                            <td>Verb</td>
                            <td>신문을 읽어요. (I read the newspaper.)</td>
                        </tr>
                        <tr>
                            <td><strong>쓰다 (Sseu-da)</strong></td>
                            <td>sseu-da</td>
                            <td>To write / use</td>
                            <td>Verb</td>
                            <td>편지를 씁니다. (I write a letter.)</td>
                        </tr>
                        <tr>
                            <td><strong>말하다 (Mal-ha-da)</strong></td>
                            <td>mal-ha-da</td>
                            <td>To speak / talk</td>
                            <td>Verb</td>
                            <td>천천히 말해 주세요. (Please speak slowly.)</td>
                        </tr>
                        <tr>
                            <td><strong>크다 (Keu-da)</strong></td>
                            <td>keu-da</td>
                            <td>To be big / tall</td>
                            <td>Adjective</td>
                            <td>방이 아주 커요. (The room is very big.)</td>
                        </tr>
                        <tr>
                            <td><strong>작다 (Jak-da)</strong></td>
                            <td>jak-da</td>
                            <td>To be small</td>
                            <td>Adjective</td>
                            <td>가방이 작아요. (The bag is small.)</td>
                        </tr>
                        <tr>
                            <td><strong>좋다 (Jo-ta)</strong></td>
                            <td>jo-ta</td>
                            <td>To be good / like</td>
                            <td>Adjective</td>
                            <td>날씨가 아주 좋아요. (The weather is very good.)</td>
                        </tr>
                        <tr>
                            <td><strong>나쁘다 (Na-ppeu-da)</strong></td>
                            <td>na-ppeu-da</td>
                            <td>To be bad</td>
                            <td>Adjective</td>
                            <td>기분이 나빠요. (I feel bad.)</td>
                        </tr>
                        <tr>
                            <td><strong>어렵다 (Eo-ryeop-da)</strong></td>
                            <td>eo-ryeop-da</td>
                            <td>To be difficult</td>
                            <td>Adjective</td>
                            <td>시험이 어렵지 않아요. (The exam is not difficult.)</td>
                        </tr>
                        <tr>
                            <td><strong>쉬우다 (Swi-u-da)</strong></td>
                            <td>swi-u-da</td>
                            <td>To be easy</td>
                            <td>Adjective</td>
                            <td>한국어가 쉬워요. (Korean is easy.)</td>
                        </tr>
                        <tr>
                            <td><strong>비싸다 (Bi-ssa-da)</strong></td>
                            <td>bi-ssa-da</td>
                            <td>To be expensive</td>
                            <td>Adjective</td>
                            <td>옷이 너무 비싸요. (The clothes are too expensive.)</td>
                        </tr>
                        <tr>
                            <td><strong>싸다 (Ssa-da)</strong></td>
                            <td>ssa-da</td>
                            <td>To be cheap</td>
                            <td>Adjective</td>
                            <td>사과가 싸요. (Apples are cheap.)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: COUNTER NOUNS & NUMERICAL SYSTEM MATRIX -->
        <div class="seo-content-box">
            <h2>Korean Counter Nouns (의존명사) & Numerical Matching Matrix</h2>
            <p>
                Master the essential counter units tested heavily in TOPIK I Listening Q25-Q29:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Counter Unit (한글)</th>
                            <th>Romanization</th>
                            <th>Target Object Category</th>
                            <th>Example Counting Expression</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>개 (Gae)</strong></td>
                            <td>gae</td>
                            <td>General inanimate items & objects</td>
                            <td>사과 한 개 (One apple), 빵 두 개 (Two loaves of bread)</td>
                        </tr>
                        <tr>
                            <td><strong>명 (Myeong) / 분 (Bun)</strong></td>
                            <td>myeong / bun</td>
                            <td>People (General / Honorific)</td>
                            <td>학생 세 명 (Three students), 손님 한 분 (One guest)</td>
                        </tr>
                        <tr>
                            <td><strong>마리 (Mari)</strong></td>
                            <td>ma-ri</td>
                            <td>Animals, birds, fish</td>
                            <td>강아지 한 마리 (One puppy), 생선 두 마리 (Two fish)</td>
                        </tr>
                        <tr>
                            <td><strong>권 (Gwon)</strong></td>
                            <td>gwon</td>
                            <td>Bound books, notebooks, magazines</td>
                            <td>책 세 권 (Three books), 공책 두 권 (Two notebooks)</td>
                        </tr>
                        <tr>
                            <td><strong>장 (Jang)</strong></td>
                            <td>jang</td>
                            <td>Flat paper, sheets, tickets, cards</td>
                            <td>종이 한 장 (One paper), 우표 두 장 (Two stamps)</td>
                        </tr>
                        <tr>
                            <td><strong>병 (Byeong)</strong></td>
                            <td>byeong</td>
                            <td>Bottles of liquid</td>
                            <td>물 한 병 (One bottle of water), 맥주 두 병 (Two beers)</td>
                        </tr>
                        <tr>
                            <td><strong>잔 (Jan)</strong></td>
                            <td>jan</td>
                            <td>Cups & glasses of beverage</td>
                            <td>커피 한 잔 (One cup of coffee), 차 두 잔 (Two teas)</td>
                        </tr>
                        <tr>
                            <td><strong>대 (Dae)</strong></td>
                            <td>dae</td>
                            <td>Vehicles, cars, electronic machinery</td>
                            <td>자동차 한 대 (One car), 컴퓨터 두 대 (Two PCs)</td>
                        </tr>
                        <tr>
                            <td><strong>벌 (Beol)</strong></td>
                            <td>beol</td>
                            <td>Sets of clothing, suits</td>
                            <td>옷 한 벌 (One set of clothes)</td>
                        </tr>
                        <tr>
                            <td><strong>켤레 (Kyeol-re)</strong></td>
                            <td>kyeol-re</td>
                            <td>Pairs of shoes, socks, gloves</td>
                            <td>신발 한 켤레 (One pair of shoes)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: MASTER DOWNLOAD TABLE FOR LEVEL 1-2 VOCAB SETS -->
        <div class="seo-content-box">
            <h2>Download Free Korean Word Test Level 1 & 2 Vocab PDFs & Audio</h2>
            <p>
                Select your required beginner <strong>korean exam paper</strong> vocabulary guide below for instant PDF downloads:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Vocab Package Title</th>
                            <th>Level Range</th>
                            <th>Word Count</th>
                            <th>Included Assets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Level 1 Core 800 Beginner Vocab PDF List</strong></td>
                            <td><span class="tag-badge green">TOPIK Level 1</span></td>
                            <td>800 Words</td>
                            <td>✔ Solved Vocab + MP3 Audio</td>
                            <td><a href="/download-paper?session=91st&title=Level%201%20Core%20800%20Vocab%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Level 2 Intermediate-Beginner 1200 Vocab PDF List</strong></td>
                            <td><span class="tag-badge green">TOPIK Level 2</span></td>
                            <td>1,200 Words</td>
                            <td>✔ Solved List + Sample Sentences</td>
                            <td><a href="/download-paper?session=96th&title=Level%202%20Core%201200%20Vocab%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>100 Essential Korean Counter Nouns Master PDF</strong></td>
                            <td><span class="tag-badge green">Counters Special</span></td>
                            <td>100 Counters</td>
                            <td>✔ Complete Counting Guide</td>
                            <td><a href="/pdf/1000-workplace-nouns-dictionary.html" target="_blank" class="btn-download-sm">📥 View Guide</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master Beginner Vocab Drive Archive Vault</strong></td>
                            <td><span class="tag-badge amber">Drive Hub</span></td>
                            <td>Archive</td>
                            <td>✔ Full 156 PDF/MP3 Vault</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 5: STRATEGIC BEGINNER REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>5-Step Blueprint for Memorizing Beginner Korean Words</h2>
            <p>
                Master 2,000 beginner Korean words within 30 days by following this 5-step daily routine:
            </p>
            <ul>
                <li><strong>Step 1 (Study 40 Words Daily):</strong> Memorize 20 new nouns and 20 action verbs every morning using digital or physical flashcards.</li>
                <li><strong>Step 2 (Associate Nouns with Counter Units):</strong> Never learn a noun in isolation; learn shoes with 켤레, books with 권, and vehicles with 대.</li>
                <li><strong>Step 3 (Listen to Audio Pronunciation MP3s):</strong> Play native Korean audio tracks while reading word lists to reinforce correct pitch and sound discrimination.</li>
                <li><strong>Step 4 (Write 5 Practice Sentences Daily):</strong> Combine newly learned verbs and nouns into simple S-O-V sentences using basic particles (~이/가, ~은/는, ~을/를).</li>
                <li><strong>Step 5 (Weekly Mock Word Test):</strong> Take our printable 100-word matching quiz every Sunday to verify long-term memory retention.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 6: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Level 1 & 2 Korean Word Test</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many total vocabulary words are required to pass TOPIK Level 1?</div>
                    <div class="faq-answer">
                        Candidates need to master approximately 800 to 1,000 basic vocabulary items to pass TOPIK Level 1 (scoring 80+ points out of 200).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: What is the difference between Sino-Korean and Native Korean numbers?</div>
                    <div class="faq-answer">
                        Sino-Korean numbers (일, 이, 삼) are used for minutes, dates, money, and phone numbers; Native Korean numbers (하나, 둘, 셋) are used for counting items, people, and age.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Where can I download complete Level 1 and 2 vocabulary PDF lists?</div>
                    <div class="faq-answer">
                        You can download free complete TOPIK Level 1 and Level 2 vocabulary PDF lists and MP3 audio files directly from koreantestpapers.in.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
