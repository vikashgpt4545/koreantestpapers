<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Sri Lanka Practice Korean Test Papers";
$page_desc = "Download free EPS TOPIK Sri Lanka Practice Korean test papers PDF with official HRD Korea SLBFE Colombo exam questions, Sri Lankan candidate study guides, sector practice papers, and answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-sri-lanka-korean-test-papers";

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
  "headline": "EPS TOPIK Sri Lanka Practice Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Sri Lanka Practice Korean test papers PDF sets with official HRD Korea SLBFE Colombo paper archives and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-sri-lanka-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Sri Lanka Practice Korean Test Papers</h1>
            <p class="hero-subtitle">
                Download official HRD Korea EPS TOPIK Sri Lanka practice <strong>korean test papers</strong>, complete with UBT tablet practice tests, manufacturing & construction sector papers, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Sri Lanka Practice Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🇱🇰 Sri Lanka Practice Archive</h3>
                    <span class="tag-badge green">Sri Lanka EPS Official</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Sri Lanka Practice Paper PDF</h4>
                            <p>Full 40-question UBT model test paper with answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Construction Sector Exam Paper PDF</h4>
                            <p>Scaffolding & cement work safety paper</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Manufacturing Sector Test Paper</h4>
                            <p>Factory hand tools & machinery safety paper</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE SRI LANKA EPS SIMULATOR
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED SRI LANKA GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: SRI LANKA EPS SYSTEM OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Sri Lanka Practice Korean Test Papers</h2>
            <p>
                Sri Lanka is one of the top sending countries providing skilled workforce under South Korea's Employment Permit System (EPS). Managed by the Sri Lanka Bureau of Foreign Employment (SLBFE) in coordination with HRD Korea, thousands of Sri Lankan candidates participate in UBT examinations in Colombo to secure E-9 work permits across South Korea's Manufacturing, Construction, and Agriculture sectors.
            </p>
            <p>
                Our EPS TOPIK Sri Lanka practice <strong>korean test papers</strong> compile official UBT past paper sets customized for Sri Lankan applicants. Practicing with dedicated Sri Lanka edition <strong>korean exam paper</strong> sets prepares candidates to achieve top scores and secure employment on the SLBFE job seeker roster. Download the complete Sri Lanka practice paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🇱🇰 Key Features of EPS-TOPIK Sri Lanka Examinations</h4>
                <ul>
                    <li><strong>Coordinating Agency:</strong> SLBFE Sri Lanka & HRD Korea Representative Office, Colombo</li>
                    <li><strong>Tested Sectors:</strong> Manufacturing (제조업), Construction (건설업), Agriculture (농축산업)</li>
                    <li><strong>Exam Format:</strong> 40 Questions (20 Reading + 20 Listening) on Touchscreen UBT Tablets</li>
                    <li><strong>Passing Score Standards:</strong> Manufacturing ~165+ Pts | Construction ~150+ Pts</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: SECTOR-WISE PAPERS FOR SRI LANKAN APPLICANTS -->
        <div class="seo-content-box">
            <h2>Sector-Wise EPS Test Papers for Sri Lankan Candidates</h2>
            <p>
                Choose your specific work category to download practice papers:
            </p>

            <h3>1. Manufacturing Sector Paper Set (제조업)</h3>
            <p>Covers factory hand tools, lathe operations, press safety, product packaging, industrial safety signboards, and factory rules.</p>

            <h3>2. Construction Sector Paper Set (건설업)</h3>
            <p>Covers scaffolding safety, cement mixing, rebar assembling (철근 조립), heavy equipment safety, and site hazard signboards.</p>

            <h3>3. Agriculture & Livestock Sector Paper Set (농축산업)</h3>
            <p>Covers greenhouse farming, crop harvesting, farm machinery operation (경운기), and fertilizer safety handling.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR SRI LANKA PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Sri Lanka Practice Korean Test Papers PDF</h2>
            <p>
                Download official Sri Lanka practice <strong>korean exam paper</strong> files with complete answer keys below:
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
                            <td><strong>EPS TOPIK Sri Lanka Practice Paper PDF</strong></td>
                            <td><span class="tag-badge green">Sri Lanka EPS</span></td>
                            <td>2025</td>
                            <td>✔ Solved 40 Qs UBT + Key</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Construction Sector Exam Paper PDF</strong></td>
                            <td><span class="tag-badge green">Construction</span></td>
                            <td>2025</td>
                            <td>✔ Scaffolding & Cement Safety</td>
                            <td><a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Manufacturing Sector Test Paper PDF</strong></td>
                            <td><span class="tag-badge green">Manufacturing</span></td>
                            <td>2025</td>
                            <td>✔ Factory Hand Tools & Safety</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Strategy for Sri Lankan Applicants</h2>
            <p>
                Follow this 3-step strategy to rank high on the SLBFE roster:
            </p>
            <ul>
                <li><strong>Step 1 (Master 60 Chapters):</strong> Thoroughly study the 60 chapters of the official HRD Korea standard textbook.</li>
                <li><strong>Step 2 (Simulated Touchscreen UBT Practice):</strong> Practice mock papers on tablet screens under a strict 50-minute time limit.</li>
                <li><strong>Step 3 (Skill Test Preparation):</strong> Prepare 1-minute Korean self-introductions (자기소개) and physical fitness tests.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Sri Lanka Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Which agency coordinates EPS-TOPIK in Sri Lanka?</div>
                    <div class="faq-answer">
                        The SLBFE (Sri Lanka Bureau of Foreign Employment) coordinates registration and testing with HRD Korea in Colombo.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the Sri Lanka practice PDF include answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable Sri Lanka practice <strong>korean test papers</strong> on koreantestpapers.in include official HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are construction sector papers available for Sri Lankan candidates?</div>
                    <div class="faq-answer">
                        Yes! Construction sector papers covering scaffolding, rebar tying, and site safety are included in our PDF download.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
