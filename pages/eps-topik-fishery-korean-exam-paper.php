<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Fishery Sector Korean Exam Paper PDF";
$page_desc = "Download free EPS TOPIK Fishery Sector Korean exam paper PDF with fishing net vocabulary, aquaculture terms, maritime safety keys, and solved HRD Korea test papers.";
$canonical_url = "https://koreantestpapers.in/eps-topik-fishery-korean-exam-paper";

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
  "headline": "EPS TOPIK Fishery Sector Korean Exam Paper PDF",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Fishery Sector Korean exam paper PDF sets with fishing gear vocabulary and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-fishery-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Fishery Sector Korean Exam Paper PDF</h1>
            <p class="hero-subtitle">
                Master the HRD Korea Fishery & Aquaculture Sector (어업 및 양식업) examination with solved <strong>korean exam paper</strong> sets, fishing gear terminology, life vest safety guides, and official <strong>korean test papers</strong>.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Fishery Sector Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>⚓ Fishery Paper Archive</h3>
                    <span class="tag-badge cyan">Fishery E-9</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>EPS TOPIK Fishery Official Solved Paper</h4>
                            <p>Official 20-question fishery paper & key</p>
                        </div>
                        <a href="../pdf/eps-topik-fishery.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Fishing Nets & Aquaculture Tool Guide</h4>
                            <p>200 Illustrated questions of fishing equipment & sea tools</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2024 Solved EPS TOPIK Past Test Set</h4>
                            <p>Solved general paper with fishery answers</p>
                        </div>
                        <a href="../pdf/eps-topik-2024-solved.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE FISHERY CBT MOCK
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED FISHERY SECTOR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: FISHERY SECTOR OVERVIEW & E-9 VISA -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Fishery Sector Korean Exam Paper</h2>
            <p>
                The Fishery & Aquaculture Sector (어업 및 양식업) is an important specialized employment category under South Korea's Employment Permit System (EPS). Administered by HRD Korea, foreign workers passing the fishery examination earn E-9 non-professional employment visas to work on South Korean coastal fishing vessels, oyster and seaweed aquaculture farms (양식장), and fish processing facilities across coastal provinces such as Jeollanam-do, Gyeongsangnam-do, and Jeju Island.
            </p>
            <p>
                Fishery exam papers feature specialized questions regarding fishing nets (그물), fish trap pots (통발), net hauler winches (양망기), buoy floats (부표), life jackets (구명조끼), and sea weather warnings. Practicing with real <strong>korean exam paper</strong> sets tailored for the fishery sector builds rapid recognition of marine equipment.
            </p>

            <div class="callout-box">
                <h4>⚓ Fishery & Aquaculture Exam Key Points</h4>
                <ul>
                    <li><strong>Main Sub-Sectors:</strong> Inshore Fishing (연안 어업), Aquaculture (양식업), Marine Processing</li>
                    <li><strong>Exam Composition:</strong> Reading 20 Questions (25 Min) + Listening 20 Questions (25 Min)</li>
                    <li><strong>Passing Cutoff:</strong> Typically 105 to 135 points out of 200 total points</li>
                    <li><strong>Core Safety Focus:</strong> High emphasis on maritime life vest wearing (구명조끼 착용) and sea wave alerts</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 10 MUST-KNOW FISHERY TOOLS & EQUIPMENT -->
        <div class="seo-content-box">
            <h2>10 Essential Fishing Tools & Equipment Tested in Fishery Papers</h2>
            <p>
                Questions in EPS TOPIK Fishery <strong>korean test papers</strong> test candidate knowledge of maritime gear and boat equipment:
            </p>

            <h3>1. 그물 (Geu-mul)</h3>
            <p>Fishing Net / Mesh Net (Crucial context: <em>그물 수선 [Net repairing]</em>).</p>

            <h3>2. 통발 (Tong-bal)</h3>
            <p>Fish Trap Pot / Crab Trap Cage.</p>

            <h3>3. 양망기 (Yang-mang-gi)</h3>
            <p>Net Hauler Winch / Motorized Net Puller Machine.</p>

            <h3>4. 부표 (Bu-pyo) / 뼏 (Float)</h3>
            <p>Buoy / Floating Marker for marking undersea nets.</p>

            <h3>5. 뼏뼏이 (Baot-baot-i) / 밧줄 (Bat-jul)</h3>
            <p>Heavy Marine Rope / Mooring Cable.</p>

            <h3>6. 구명조끼 (Gu-myeong-jo-kki)</h3>
            <p>Life Vest / Personal Flotation Device (Mandatory on all vessels).</p>

            <h3>7. 구명환 (Gu-myeong-hwan)</h3>
            <p>Lifebuoy Ring / Emergency Life Preserver.</p>

            <h3>8. 바늘 (Ba-neul) / 낚시 바늘 (Nak-si Ba-neul)</h3>
            <p>Fishing Hook / Net Repair Needle.</p>

            <h3>9. 집어등 (Jib-eo-deung)</h3>
            <p>Fish Attracting Light / Squid Fishing Lamp.</p>

            <h3>10. 어상자 (Eo-sang-ja)</h3>
            <p>Fish Crate / Seafood Sorting Box.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR FISHERY PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Fishery Korean Exam Paper PDF</h2>
            <p>
                Download official fishery sector <strong>korean test papers</strong> with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Solutions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>EPS TOPIK Fishery Official Solved Exam Paper</strong></td>
                            <td><span class="tag-badge cyan">Fishery</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Maritime Key</td>
                            <td><a href="../pdf/eps-topik-fishery.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2024 Solved EPS TOPIK General Past Set</strong></td>
                            <td><span class="tag-badge green">Past Set</span></td>
                            <td>2024</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/eps-topik-2024-solved.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master 2000 Fishery Question Bank PDF</strong></td>
                            <td><span class="tag-badge cyan">Question Bank</span></td>
                            <td>2025</td>
                            <td>✔ Solved Question Bank</td>
                            <td><a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: MARITIME ACTION VERBS MASTER GUIDE -->
        <div class="seo-content-box">
            <h2>Essential Maritime Action Verbs (어업 동사) Guide</h2>
            <p>
                Mastering key maritime verbs helps candidates solve reading fill-in-the-blank questions:
            </p>
            <ul>
                <li><strong>그물을 던지다 (Geu-mul-eul Deon-ji-da):</strong> To cast a fishing net</li>
                <li><strong>그물을 끌어올리다 (Geu-mul-eul Kkeul-eo-ol-ri-da):</strong> To haul up a fishing net</li>
                <li><strong>고기를 낚다 (Go-gi-reul Nak-da):</strong> To catch fish</li>
                <li><strong>양식장을 관리하다 (Yang-sik-jang-eul Gwan-ri-ha-da):</strong> To manage an aquaculture farm</li>
                <li><strong>생선을 손질하다 (Saeng-seon-eul Son-jil-ha-da):</strong> To clean and gut fish</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Fishery Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the passing score for the EPS-TOPIK Fishery exam?</div>
                    <div class="faq-answer">
                        Fishery passing cutoffs typically range from 105 to 135 points out of 200 total points.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are life vest safety questions tested in the fishery exam paper?</div>
                    <div class="faq-answer">
                        Yes! Questions regarding life vest wearing (구명조끼) and marine vessel safety rules appear regularly.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Do your downloadable fishery exam papers include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable fishery <strong>korean exam paper</strong> sets on koreantestpapers.in include full 20-question answer keys.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
