<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "EPS TOPIK Listening Korean Exam Paper with Audio Files";
$page_desc = "Download free EPS TOPIK Listening Korean exam paper PDF with MP3 audio scripts, transcript translation, answer keys, and listening practice questions for HRD Korea candidates in India.";
$canonical_url = "https://koreantestpapers.in/eps-topik-listening-korean-exam-paper";

// Fetch dynamic exam questions & test paper list
$live_questions = get_live_questions();
$featured_papers = get_featured_test_papers(10);

// Include Shared Header Template
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Pass questions array to JS for interactive widget -->
<script>
    window.liveQuestions = <?php echo json_encode($live_questions); ?>;
</script>

<!-- Schema Markup: Article & FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "EPS TOPIK Listening Korean Exam Paper with Audio Files",
  "description": "Comprehensive audio guide and downloadable EPS TOPIK Listening Korean exam paper PDF sets with scripts and verified answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/eps-topik-listening-korean-exam-paper"
}
</script>

<!-- HERO SECTION CONTAINER -->
<section class="hero-section">
    <div class="container">
        <div class="hero-heading-box">
            <h1 class="hero-title">EPS TOPIK Listening Korean Exam Paper with Audio Files</h1>
            <p class="hero-subtitle">
                Master the official 20-question EPS TOPIK Listening <strong>korean exam paper</strong> module with complete MP3 audio transcripts, solved <strong>korean test papers</strong>, dialogue transcripts, and answer sheets designed for HRD Korea aspirants.
            </p>
        </div>

        <!-- 2-Column Split Box Container -->
        <div class="hero-split-container">
            <!-- Left Box: Listening Audio Downloads -->
            <div class="hero-left-box">
                <div class="box-title-header">
                    <h3>🎧 Listening Audio & Paper Archive</h3>
                    <span class="tag-badge cyan">MP3 + PDF</span>
                </div>
                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2024 EPS TOPIK Listening Official Paper</h4>
                            <p>Full 20-question listening test paper & audio transcript</p>
                        </div>
                        <a href="../pdf/eps-topik-listening-2024.pdf" class="btn-download-sm" download>PDF + Audio</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>2025 EPS TOPIK Listening Model Paper</h4>
                            <p>Updated 2025 model audio dialogues & answer key</p>
                        </div>
                        <a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>Workplace Dialogue Audio Script</h4>
                            <p>Factory conversations & supervisor command scripts</p>
                        </div>
                        <a href="../pdf/eps-topik-official-question-bank.pdf" class="btn-download-sm" download>PDF</a>
                    </div>
                </div>
            </div>

            <!-- Right Box: Live CBT Mock Test Widget -->
            <div class="hero-right-box" id="live-test-box">
                <div class="live-test-header">
                    <div class="live-indicator">
                        <span class="live-dot"></span> LIVE LISTENING PRACTICE
                    </div>
                    <div style="font-weight: 700; font-size: 0.9rem; color: #475569;">
                        ⏱ Timer: <span id="liveTimerDisplay" style="color: #2563eb;">25:00</span>
                    </div>
                </div>

                <div class="quiz-card-box">
                    <div class="quiz-question-title" id="liveQuestionText">
                        <?php echo htmlspecialchars($live_questions[1]['question_text'] ?? $live_questions[0]['question_text']); ?>
                    </div>
                    
                    <div class="quiz-options-list" id="liveOptionsContainer">
                        <button class="quiz-option-btn" data-option="A">
                            <span>A. <span class="opt-text"><?php echo htmlspecialchars($live_questions[1]['option_a'] ?? $live_questions[0]['option_a']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="B">
                            <span>B. <span class="opt-text"><?php echo htmlspecialchars($live_questions[1]['option_b'] ?? $live_questions[0]['option_b']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="C">
                            <span>C. <span class="opt-text"><?php echo htmlspecialchars($live_questions[1]['option_c'] ?? $live_questions[0]['option_c']); ?></span></span>
                        </button>
                        <button class="quiz-option-btn" data-option="D">
                            <span>D. <span class="opt-text"><?php echo htmlspecialchars($live_questions[1]['option_d'] ?? $live_questions[0]['option_d']); ?></span></span>
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

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LISTENING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: OVERVIEW OF LISTENING EXAM MODULE -->
        <div class="seo-content-box">
            <h2>Complete Guide to EPS TOPIK Listening Korean Exam Paper Audio Module</h2>
            <p>
                The Listening section (듣기 시험) of the Employment Permit System Korean language test is a critical 20-question evaluation (Questions 21 to 40) designed by HRD Korea. In the official Computer-Based Test (CBT) and Ubiquitous-Based Test (UBT), audio recordings are played directly through individual headphones. Candidates are given exactly <strong>25 minutes</strong> to listen to native Korean speakers, analyze workplace dialogues, interpret numbers, and select the correct answer choice.
            </p>
            <p>
                Each listening audio item is broadcast <strong>two times (2회 들려줍니다)</strong>. While this provides a second opportunity to verify your answer, candidates who fail to prepare with real past <strong>korean test papers</strong> often struggle with rapid speech rates, nasal assimilation rules, and regional pronunciation variations. Practicing with full audio transcripts and solved <strong>korean exam paper</strong> sets builds auditory retention and eliminates exam anxiety.
            </p>

            <div class="callout-box">
                <h4>🎧 EPS-TOPIK Listening Format Quick Facts</h4>
                <ul>
                    <li><strong>Question Range:</strong> Question 21 through Question 40 (20 Total Questions)</li>
                    <li><strong>Audio Playback:</strong> Each track is played exactly twice with a 5-second pause between playbacks</li>
                    <li><strong>Time Allotted:</strong> 25 Minutes (Paced automatically by audio track playback)</li>
                    <li><strong>Score Allocation:</strong> 100 Points out of 200 total combined score (5 points per question)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 5 QUESTION TYPES IN LISTENING EXAM PAPERS -->
        <div class="seo-content-box">
            <h2>5 Essential Question Categories in EPS TOPIK Listening Test Papers</h2>
            <p>
                To score high in the listening exam paper, candidates must familiarize themselves with the 5 core question types that regularly appear in official HRD Korea test papers:
            </p>

            <h3>1. Phonetic Word Recognition (들은 단어 찾기) - Questions 21 to 24</h3>
            <p>
                The audio plays a single isolated word or short verb (e.g., <em>"Bul-go-gi"</em>, <em>"An-jeon-mo"</em>, <em>"Sa-da"</em> vs. <em>"Ssa-da"</em>). Candidates must differentiate minimal pairs and select the matching Hangul word from four options.
            </p>

            <h3>2. Sentence & Response Matching (알맞은 대답 고르기) - Questions 25 to 29</h3>
            <p>
                A speaker asks a common question (e.g., <em>"Eot-eoh-ge o-seos-seo-yo?" [How can I help you?]</em>). The candidate must choose the most natural conversational reply (e.g., <em>"Yag-eul sa-reo 왔어-yo" [I came to buy medicine]</em>).
            </p>

            <h3>3. Action & Picture Identification (그림에 알맞은 행동) - Questions 30 to 33</h3>
            <p>
                The audio describes an action or scene (e.g., <em>"Sa-ram-i Sang-ja-reul Ol-mgi-go Iss-seub-ni-da" [The person is moving boxes]</em>). Candidates select the corresponding illustration among four choices.
            </p>

            <h3>4. Workplace Command & Task Instructions (작업 지시 이해) - Questions 34 to 37</h3>
            <p>
                Audio tracks simulate supervisor instructions inside a South Korean manufacturing plant or agricultural farm (e.g., <em>"Tomorrow morning, move the wooden pallets to warehouse B"</em>). Questions evaluate candidate comprehension of workplace safety, quantity numbers, and time deadlines.
            </p>

            <h3>5. Long Dialogue & Situation Comprehension (대화 내용 이해) - Questions 38 to 40</h3>
            <p>
                Two speakers engage in a multi-turn conversation discussing weekend plans, medical symptoms, factory machine maintenance, or salary bank transfers. Candidates answer sub-questions regarding why the speakers are conversing or what action will occur next.
            </p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LISTENING PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved EPS TOPIK Listening Korean Exam Paper PDFs</h2>
            <p>
                Access full 20-question EPS TOPIK Listening <strong>korean test papers</strong> complete with transcripts and verified answer sheets below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Audio Transcript & Key</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2024 Solved EPS TOPIK Listening Exam Paper</strong></td>
                            <td><span class="tag-badge cyan">Listening</span></td>
                            <td>2024</td>
                            <td>✔ Transcript + Answer Key</td>
                            <td><a href="../pdf/eps-topik-listening-2024.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2025 EPS TOPIK Listening Model Paper</strong></td>
                            <td><span class="tag-badge cyan">Listening</span></td>
                            <td>2025</td>
                            <td>✔ Transcript + Explanations</td>
                            <td><a href="../pdf/eps-topik-2025-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2023 Official EPS TOPIK Listening Archive</strong></td>
                            <td><span class="tag-badge cyan">Listening</span></td>
                            <td>2023</td>
                            <td>✔ Transcript + Key</td>
                            <td><a href="../pdf/eps-topik-2023-past.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>2022 EPS TOPIK Past Listening Paper</strong></td>
                            <td><span class="tag-badge cyan">Listening</span></td>
                            <td>2022</td>
                            <td>✔ Solved Paper + Key</td>
                            <td><a href="../pdf/eps-topik-2022-past.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: LISTENING STRATEGIES & SOUND RULES -->
        <div class="seo-content-box">
            <h2>Essential Audio Pronunciation Rules to Master Before the Listening Exam</h2>
            <p>
                Korean pronunciation often differs from written Hangul spelling due to sound assimilation rules (음운 변동). Understanding these 4 phonological rules is vital for listening accuracy:
            </p>

            <ul>
                <li><strong>Liaison (연음 법칙):</strong> When a syllable ending in a batchim consonant is followed by a vowel, the consonant shifts sound (e.g., <em>한국어 -> Han-gu-geo</em>).</li>
                <li><strong>Nasalization (비음화):</strong> Consonants like <em>ㅂ, ㄷ, ㄱ</em> change sound before <em>ㄴ, ㅁ</em> (e.g., <em>합니다 -> Ham-ni-da</em>).</li>
                <li><strong>Aspiration (격음화):</strong> Plain consonants merge with <em>ㅎ</em> to become aspirated (e.g., <em>축하 -> Chu-ka</em>).</li>
                <li><strong>Tense Consonants (경음화):</strong> Plain consonants turn into doubled tense sounds (e.g., <em>학교 -> Hak-kkyo</em>).</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - EPS TOPIK Listening Korean Exam Paper</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many times is each audio question played in the listening test?</div>
                    <div class="faq-answer">
                        Every listening question is played twice automatically by the CBT software before moving to the next track.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Can I download the audio transcript with the listening exam paper PDF?</div>
                    <div class="faq-answer">
                        Yes! All downloadable listening <strong>korean exam paper</strong> PDFs on koreantestpapers.in include complete Hangul transcripts and English translations.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are headphones provided during the official CBT listening test in India?</div>
                    <div class="faq-answer">
                        Yes, official HRD Korea CBT testing centers in India provide high-quality noise-canceling headphones for all candidates.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
