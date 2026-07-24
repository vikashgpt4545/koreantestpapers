<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Traffic Sign & Safety Korean Exam Paper";
$page_desc = "Download free EPS TOPIK Traffic Sign & Safety Korean exam paper PDF with industrial warning signs, prohibition signs, traffic symbols, safety regulations, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-sign-board-korean-exam-paper";

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
  "headline": "EPS TOPIK Traffic Sign & Safety Korean Exam Paper",
  "description": "Comprehensive guide and downloadable EPS TOPIK Traffic Sign & Safety Korean exam paper PDF sets with industrial warning signs, traffic symbols, and answer sheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-sign-board-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Traffic Sign & Safety Korean Exam Paper</h1>
            <p class="hero-subtitle">
                Master industrial safety signboards and traffic symbols with official EPS TOPIK <strong>korean exam paper</strong> sets, complete with prohibition symbol guides, downloadable <strong>korean test papers</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Signboard Paper Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⚠️ Signboard & Safety Paper Archive</h3>
                    <span class="tag-badge green">Safety Signs</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Traffic Sign & Safety Signboard Exam Paper</h4>
                            <p>Full 100-signboard industrial safety & traffic test paper</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Picture & Image Test Paper PDF</h4>
                            <p>Full visual question bank (tools, actions & signboards)</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Workplace Safety & Factory Rules Exam Paper</h4>
                            <p>Industrial accident prevention & gear guide</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE SIGNBOARD QUIZ
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SIGNBOARD GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SIGNBOARD SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Traffic Sign & Safety Korean Exam Papers</h2>
            <p>
                Signboard questions constitute a mandatory section in the EPS-TOPIK examination under South Korea's Occupational Safety and Health Acts (산업안전보건법). Evaluated candidates must instantly recognize industrial warning graphics, prohibition symbols, mandatory safety gear signs, and public traffic icons.
            </p>
            <p>
                Our specialized safety signboard <strong>korean exam paper</strong> archives over 100 official signboards deployed across Korean factories, construction sites, and public roads. Practicing with dedicated signboard <strong>korean test papers</strong> ensures candidates identify danger warnings instantly and score high marks. Download the complete signboard paper PDF below.
            </p>

            <div class="callout-box">
                <h4>⚠️ 4 Main Categories of Signboards Tested in EPS-TOPIK</h4>
                <ul>
                    <li><strong>1. Prohibition Signs (금지 표지판 - Red Circle with Slash):</strong> 출입 금지 (No Entry), 금연 (No Smoking), 화기 금지 (No Open Flames), 사용 금지 (Do Not Use)</li>
                    <li><strong>2. Warning Signs (경고 표지판 - Yellow Triangle):</strong> 인화성 물질 경고 (Flammable Warning), 고압 전기 경고 (High Voltage), 낙하물 경고 (Falling Object)</li>
                    <li><strong>3. Mandatory Action Signs (지시 표지판 - Blue Circle):</strong> 안전모 착용 (Wear Hard Hat), 보안경 착용 (Wear Safety Glasses), 마스크 착용 (Wear Mask)</li>
                    <li><strong>4. Safety & Emergency Signs (안내 표지판 - Green Square):</strong> 비상구 (Emergency Exit), 응급 처치 (First Aid Station), 세안 장치 (Eye Wash Station)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: HIGH-FREQUENCY SIGNBOARD GRAMMAR PATTERNS -->
        <div class="seo-content-box">
            <h2>Grammar Formats Used in Signboard Questions</h2>
            <p>
                Signboard questions in <strong>korean exam paper</strong> sets rely on 3 specific grammar structures:
            </p>

            <h3>1. Prohibition Grammar: -지 마십시오 / -면 안 됩니다</h3>
            <p>Indicates prohibited actions (e.g., <em>이곳에서 담배를 피우면 안 됩니다 [You must not smoke here]</em>).</p>

            <h3>2. Mandatory Obligation Grammar: -아/어야 합니다 / -(으)십시오</h3>
            <p>Indicates required safety gear (e.g., <em>작업을 할 때는 반드시 안전모를 쓰십시오 [Must wear safety helmet when working]</em>).</p>

            <h3>3. Meaning Identification Grammar: -은/는 ~라는 뜻입니다</h3>
            <p>Explains symbol meaning (e.g., <em>이 표지판은 들어오지 말라는 뜻입니다 [This sign means do not enter]</em>).</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SIGNBOARD PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Traffic Sign & Safety Korean Exam Paper PDF</h2>
            <p>
                Download official safety signboard <strong>korean test papers</strong> with verified answer keys below:
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
                            <td><strong>Traffic Sign & Safety Signboard Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Signs</span></td>
                            <td>2025</td>
                            <td>✔ 100+ Signboards + Key</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Picture & Image Paper PDF</strong></td>
                            <td><span class="tag-badge green">Visual Questions</span></td>
                            <td>2025</td>
                            <td>✔ Solved Visual Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Workplace Rules</span></td>
                            <td>2025</td>
                            <td>✔ Industrial Safety Protocols</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION TIPS FOR SIGNBOARDS -->
        <div class="seo-content-box">
            <h2>3 Tactics for 100% Accuracy on Signboard Questions</h2>
            <p>
                Follow these 3 tactics to master Korean safety signboards:
            </p>
            <ul>
                <li><strong>Tactic 1 (Color Coding Mastery):</strong> Remember that Red = Prohibition, Yellow = Warning, Blue = Mandatory Action, Green = Emergency/Safety.</li>
                <li><strong>Tactic 2 (Recognize Universal Traffic Symbols):</strong> Learn Korean transport signs such as <em>일시 정지 (Stop)</em>, <em>서행 (Slow Down)</em>, and <em>횡단보도 (Crosswalk)</em>.</li>
                <li><strong>Tactic 3 (Flashcard Image Drilling):</strong> Test yourself on signboard images without reading the text caption to build instant recognition speed.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Signboard Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many signboard questions appear in the EPS-TOPIK exam?</div>
                    <div class="faq-answer">
                        There are typically 2 to 4 signboard and symbol questions in every 40-question EPS-TOPIK exam paper.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are traffic road signs included in the signboard PDF download?</div>
                    <div class="faq-answer">
                        Yes! The PDF covers both factory safety signboards and South Korean public road traffic signs.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Does the PDF include English translations for Korean signboard text?</div>
                    <div class="faq-answer">
                        Yes! Every signboard in our <strong>korean exam paper</strong> PDF features original Hangul text, English translations, and explanation notes.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
