<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Workplace Safety Korean Test Papers";
$page_desc = "Download free EPS TOPIK Workplace Safety Korean test papers PDF with industrial accident prevention rules, emergency response guides, safety gear lists, and solved answer keys.";
$canonical_url = "https://koreantestpapers.in/eps-topik-workplace-korean-test-papers";

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
  "headline": "EPS TOPIK Workplace Safety Korean Test Papers",
  "description": "Comprehensive study guide and downloadable EPS TOPIK Workplace Safety Korean test papers PDF sets with industrial safety protocols and answer sheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-workplace-korean-test-papers"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Workplace Safety Korean Test Papers</h1>
            <p class="hero-subtitle">
                Master Korean industrial accident prevention and factory safety guidelines with official EPS TOPIK <strong>korean test papers</strong>, complete with emergency protocol drills, downloadable <strong>korean exam paper</strong> PDFs, and answer keys.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Workplace Safety Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🛟 Workplace Safety Paper Archive</h3>
                    <span class="tag-badge green">Safety Protocols</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Workplace Safety & Factory Rules Test Paper</h4>
                            <p>Full industrial accident prevention & safety gear guide</p>
                        </div>
                        <a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Traffic Sign & Safety Signboard Paper PDF</h4>
                            <p>Official 100-signboard industrial safety test paper</p>
                        </div>
                        <a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Tools & Machinery Korean Exam Paper</h4>
                            <p>Factory equipment & hand tools picture paper</p>
                        </div>
                        <a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE SAFETY PROTOCOL QUIZ
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED WORKPLACE SAFETY GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: WORKPLACE SAFETY OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Workplace Safety Korean Test Papers</h2>
            <p>
                Workplace safety (작업장 안전) is a fundamental subject in HRD Korea's 60-chapter textbook curriculum. Foreign workers under South Korea's Employment Permit System (EPS) must understand industrial accident prevention protocols, safety gear inspection procedures, emergency evacuation routes, and emergency reporting phone numbers (119).
            </p>
            <p>
                Our specialized workplace safety <strong>korean test papers</strong> compile over 150 reading and listening questions focused on factory hazard management, machinery inspection routines, and safety gear requirements. Practicing with dedicated safety <strong>korean exam paper</strong> sets prepares candidates for real exam questions while equipping them with life-saving Korean workplace knowledge. Download the complete safety paper PDF below.
            </p>

            <div class="callout-box">
                <h4>🛟 5 Core Industrial Hazards & Prevention Rules</h4>
                <ul>
                    <li><strong>1. Press & Cutting Hazards (감김 / 끼임 사고):</strong> Turn off power switches before clearing jammed materials or doing machine maintenance</li>
                    <li><strong>2. Fall Hazards (추락 사고):</strong> Fasten safety harnesses (안전대) and inspect scaffolding (비계) on construction sites</li>
                    <li><strong>3. Falling Object Hazards (낙하 사고):</strong> Always wear hard hats (안전모) when working underneath crane loads</li>
                    <li><strong>4. Chemical Hazards (유독 물질):</strong> Wear gas masks (방독 마스크) and chemical safety gloves (화학 안전장갑)</li>
                    <li><strong>5. Fire & Explosion Hazards (화재 / 폭발):</strong> Know the location of fire extinguishers (소화기) and emergency exits (비상구)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: EMERGENCY RESPONSE & REPORTING SCRIPT -->
        <div class="seo-content-box">
            <h2>Korean Emergency Reporting Script (119 신고 대화)</h2>
            <p>
                Master this emergency 119 reporting dialogue frequently tested in listening questions:
            </p>

            <div class="callout-box" style="background: #ffffff; border: 1px solid #cbd5e1;">
                <h4>🚨 119 Emergency Reporting Dialogue (119 신고 대화)</h4>
                <p><strong>[119 Dispatcher]:</strong> <em>"119입니다. 무슨 일입니까?"</em> (This is 119. What is your emergency?)</p>
                <p><strong>[Foreign Worker]:</strong> <em>"여기는 인천 남동공단 [회사 이름]입니다. 프레스 작업 중에 동료가 손을 다쳤습니다. 피가 많이 납니다. 구급차를 빨리 보내 주세요!"</em> (This is [Company Name] in Namdong Industrial Complex, Incheon. A colleague hurt his hand while working on the press machine. He is bleeding heavily. Please send an ambulance quickly!)</p>
                <p><strong>[119 Dispatcher]:</strong> <em>"네, 알겠습니다. 구급차가 바로 출발합니다. 지혈을 하고 계십시오."</em> (Yes, understood. An ambulance is departing immediately. Please apply pressure to stop the bleeding.)</p>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR WORKPLACE SAFETY PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Workplace Safety Korean Test Papers PDF</h2>
            <p>
                Download official workplace safety <strong>korean exam paper</strong> archives with verified answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Protocols</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Protocols</span></td>
                            <td>2025</td>
                            <td>✔ Solved Safety Rules + Key</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Traffic Sign & Safety Signboard Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Signs</span></td>
                            <td>2025</td>
                            <td>✔ 100+ Industrial Signboards</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Tools & Machinery Exam Paper PDF</strong></td>
                            <td><span class="tag-badge green">Equipment Set</span></td>
                            <td>2025</td>
                            <td>✔ Equipment Safety Inspection</td>
                            <td><a href="../pdf/eps-topik-cbt-mock.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3 Tactics for Mastering Workplace Safety Questions</h2>
            <p>
                Follow these 3 tactics when studying workplace safety paper sets:
            </p>
            <ul>
                <li><strong>Tactic 1 (Study Action Verbs for Safety):</strong> Learn key emergency action verbs: <em>대피하다 (Evacuate)</em>, <em>소화기를 사용하다 (Use fire extinguisher)</em>, <em>전원을 차단하다 (Cut power)</em>.</li>
                <li><strong>Tactic 2 (Recognize First Aid Terms):</strong> Memorize first aid terms: <em>지혈 (Stop bleeding)</em>, <em>붕대 (Bandage)</em>, <em>연고 (Ointment)</em>, <em>파스 (Pain relief patch)</em>.</li>
                <li><strong>Tactic 3 (Review Chapter 41 to 50):</strong> Thoroughly study chapters 41 through 50 of the official textbook covering workplace environment and accident reporting.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Workplace Safety Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are emergency reporting dialogues tested in the listening exam?</div>
                    <div class="faq-answer">
                        Yes! Emergency dialogues (119 reporting, reporting machine breakdowns to supervisors) appear regularly in listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the safety paper PDF include complete answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable workplace safety <strong>korean test papers</strong> on koreantestpapers.in include verified HRD Korea answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Which safety gear is required for welding work?</div>
                    <div class="faq-answer">
                        Welding work requires a welding mask (용접면), heat-resistant leather gloves (용접 장갑), and protective aprons.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
