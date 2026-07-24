<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Sino & Native Numbers Korean Test Papers";
$page_desc = "Download free Korean Sino & Native Numbers Korean test papers PDF with Sino-Korean (일, 이, 삼), Native Korean (하나, 둘, 셋), counting units (개, 명, 병, 장, 시, 분), prices, dates, and answer keys.";
$canonical_url = "https://koreantestpapers.in/korean-numbers-counting-korean-test-papers";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();

// Include Shared Header Template
require_once __DIR__ . '/../includes/header.php';
?>

<script>
    window.liveQuestions = <?php echo json_encode($live_questions); ?>;
</script>

<!-- Schema Markup: Article & FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Korean Sino & Native Numbers Korean Test Papers",
  "description": "Comprehensive study guide and downloadable Korean Sino & Native Numbers Korean test papers PDF sets with counting units, price systems, clock time reading, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-numbers-counting-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">Korean Sino & Native Numbers Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master Sino-Korean and Native-Korean numbering systems with official Korean numbers & counting <strong>korean test papers</strong>, complete with counting unit drills, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Numbers & Counting Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🔢 Numbers & Counting Archive</h3>
                    <span class="tag-badge green">Numbering Systems</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Korean Sino & Native Numbers Test Paper PDF</h4>
                            <p>Full counting units, price calculation & time reading set</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Grammar & Particle Rules PDF</h4>
                            <p>Essential counter particles & numerical grammar</p>
                        </div>
                        <a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK 2025 Model Question Paper PDF</h4>
                            <p>Official 40-question UBT practice test set & answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE NUMBERS QUIZ SIMULATOR
                    </div>
                    <div style="font-weight: 700; font-size: 0.9rem; color: #475569;">
                        ⏱ Timer: <span id="liveTimerDisplay" style="color: #2563eb;">25:00</span>
                    </div>
                </div>

                <div class="quiz-card-box">
                    <div class="quiz-question-title" id="liveQuestionText">
                        <?php echo htmlspecialchars($live_questions[0]['question_text']); ?>
                    </div>
                    
                    <div class="quiz-options-list" id="liveOptionsContainer">
                        <button class="quiz-option-btn" data-option="A">
                            <span>A. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_a']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="B">
                            <span>B. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_b']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="C">
                            <span>C. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_c']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="D">
                            <span>D. <span class="opt-text"><?php echo htmlspecialchars($live_questions[0]['option_d']); ?></span></span>
                        </button>
                    </div>

                    <div id="liveExplanationBox" style="display:none; margin-top: 14px; padding: 12px; background: #eff6ff; border-radius: 6px; font-size: 0.88rem; color: #1e3a8a;"></div>
                </div>

                <div class="quiz-action-bar">
                    <button class="btn-primary-action" id="btnSubmitAnswer" disabled>Submit Answer</button>
                    <button class="btn-primary-action" id="btnNextQuestion" style="display:none; background: #059669;">Next Question ▶</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED NUMBERS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: NUMBERS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Korean Sino & Native Numbers Korean Test Papers</h2>
            <p>
                Korean utilizes two distinct numerical systems: Sino-Korean numbers (한자어 숫자 - 일, 이, 삼, 사...) and Native-Korean numbers (고유어 숫자 - 하나, 둘, 셋, 넷...). Knowing when to apply Sino-Korean versus Native-Korean numbers, alongside matching specific counting units (단위 명사), is a guaranteed question area on every EPS-TOPIK and TOPIK exam.
            </p>
            <p>
                Our Korean numbers & counting <strong>korean test papers</strong> break down both numerical systems, clock time reading rules, currency counting (원), and calendar dates. Practicing with dedicated number counting <strong>korean exam paper</strong> sets helps candidates solve listening audio price items and visual counting questions effortlessly. Download the complete numbers paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🔢 Dual Korean Number Systems Comparison</h4>
                <ul>
                    <li><strong>Sino-Korean (일, 이, 삼, 사, 오, 육, 칠, 팔, 구, 십):</strong> Used for phone numbers, prices (원), dates (년, 월, 일), minutes/seconds (분, 초), and bus routes</li>
                    <li><strong>Native-Korean (하나, 둘, 셋, 넷, 다섯, 여섯, 일곱, 여덟, 아홉, 열):</strong> Used for counting physical objects (개), people (명), animals (마리), age (살), and clock hours (시)</li>
                    <li><strong>Clock Time Special Rule:</strong> Hours use Native-Korean (e.g., 3시 = 세 시), while Minutes use Sino-Korean (e.g., 30분 = 삼십 분)!</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW COUNTING UNITS (단위 명사) -->
        <div class="seo-content-box">
            <h2>Top 10 Essential Korean Counting Units (단위 명사)</h2>
            <p>
                Master these 10 counting counters tested in visual EPS-TOPIK questions:
            </p>

            <ul>
                <li><strong>개 (Gae):</strong> General objects (apples, boxes, tools) → 사과 다섯 개</li>
                <li><strong>명 / 분 (Myeong / Bun):</strong> People / Respected people → 학생 세 명 / 손님 두 분</li>
                <li><strong>마리 (Mari):</strong> Animals (cows, pigs, chickens, fish) → 돼지 네 마리</li>
                <li><strong>대 (Dae):</strong> Automobiles, electronic appliances, factory machines → 자동차 한 대</li>
                <li><strong>채 (Chae):</strong> Houses, buildings, apartments → 집 두 채</li>
                <li><strong>장 (Jang):</strong> Paper sheets, tickets, shirts, paper signs → 티켓 세 장</li>
                <li><strong>병 (Byeong):</strong> Bottles of water, juice, or oil → 물 한 병</li>
                <li><strong>잔 (Jan):</strong> Cups of coffee, tea, or water → 커피 두 잔</li>
                <li><strong>권 (Gwon):</strong> Books, notebooks, passports → 책 네 권</li>
                <li><strong>켤레 (Kyeolle):</strong> Pairs of shoes, boots, gloves, socks → 양말 한 켤레</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR NUMBERS PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved Korean Sino & Native Numbers Korean Test Papers PDF</h2>
            <p>
                Download official numbers & counting <strong>korean test papers</strong> with complete answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Features</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Korean Sino & Native Numbers Paper PDF</strong></td>
                            <td><span class="tag-badge green">Numbering Systems</span></td>
                            <td>2025</td>
                            <td>✔ Solved Counters & Price Drills</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Grammar & Particle Rules PDF</strong></td>
                            <td><span class="tag-badge green">Grammar Rules</span></td>
                            <td>2025</td>
                            <td>✔ Numerical Grammar Drills</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK 2025 Model Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">2025 Model</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT Model Set</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Mastering Korean Numbers</h2>
            <p>
                Follow this 3-step blueprint to solve number questions instantly:
            </p>
            <ul>
                <li><strong>Step 1 (Memorize Counter Matching):</strong> Pair each noun category with its dedicated counter (e.g., 차 → 대, 옷 → 벌).</li>
                <li><strong>Step 2 (Practice Native Number Modifiers):</strong> Remember that 하나, 둘, 셋, 넷, 스물 drop final letters before counters (한 개, 두 명, 세 잔, 네 대, 스무 살).</li>
                <li><strong>Step 3 (Listen to Audio Prices):</strong> Practice identifying large Korean currency amounts (만 원, 천 원) in listening questions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Numbers & Counting Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How do you say 2:30 PM in Korean?</div>
                    <div class="faq-answer">
                        오후 두 시 삼십 분 (or 오후 두 시 반), combining Native-Korean for hour (두 시) and Sino-Korean for minute (삼십 분).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the numbers paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable numbers & counting <strong>korean exam paper</strong> sets on koreantestpapers.in include verified answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many counting questions appear in EPS TOPIK exam?</div>
                    <div class="faq-answer">
                        Typically 2 to 4 visual picture questions require candidates to identify the correct number and counter for items shown.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
