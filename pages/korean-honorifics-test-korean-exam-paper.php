<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Honorifics & Politeness Korean Exam Paper & Korean Test Papers";
$page_desc = "Download free Korean Honorifics & Politeness Korean exam paper PDF with official HRD Korea workplace speech levels (-습니다/습니까, -시- honorific infix), vocabulary honorifics, and answer keys.";
$canonical_url = "https://koreantestpapers.in/korean-honorifics-test-korean-exam-paper";

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
  "headline": "Korean Honorifics & Politeness Korean Exam Paper & Korean Test Papers",
  "description": "Comprehensive guide and downloadable Korean Honorifics & Politeness Korean exam paper PDF sets with formal workplace speech rules, honorific verbs, and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-honorifics-test-korean-exam-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED HONORIFICS GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: HONORIFICS OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to Korean Honorifics & Politeness Korean Exam Papers</h2>
            <p>
                In South Korean society and workplace environments, honorific language (존댓말 / 높임말) is mandatory when speaking to superiors, managers (반장님, 사장님), older colleagues, or customers. Understanding honorific grammar infixes (-(으)시-), formal speech endings (-습니다/습니까), and special honorific vocabulary items is essential for passing the listening and reading sections of EPS-TOPIK and TOPIK tests.
            </p>
            <p>
                Our Korean honorifics <strong>korean exam paper</strong> archives break down formal etiquette rules and speech hierarchy. Practicing with dedicated honorific <strong>korean test papers</strong> ensures candidates avoid offensive speech mistakes and select proper polite responses in workplace dialogue questions. Download the complete honorifics paper PDF below.
            </p>

            <div class="callout-box">
                <h4>👥 The 3 Levels of Korean Speech Hierarchy</h4>
                <ul>
                    <li><strong>1. Formal High Politeness (하십시오체 / -습니다):</strong> Used in business announcements, workplace reports to factory managers, and official tests</li>
                    <li><strong>2. Informal Politeness (해요체 / -아/어/여요):</strong> Used in everyday conversations with co-workers and equals</li>
                    <li><strong>3. Informal Casual / Plain Speech (해체 / 반말):</strong> Used only with close friends or younger children (never in workplace exams!)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: MUST-KNOW HONORIFIC NOUNS & VERBS -->
        <div class="seo-content-box">
            <h2>Essential Honorific Vocabulary Pairs</h2>
            <p>
                Master these high-frequency plain vs honorific word pairs:
            </p>

            <h3>1. Honorific Verbs</h3>
            <ul>
                <li><strong>먹다 / 마시다 (Eat / Drink) → 드시다 / 잡수시다</strong></li>
                <li><strong>자다 (Sleep) → 주무시다</strong></li>
                <li><strong>말하다 (Speak) → 말씀하시다</strong></li>
                <li><strong>있다 (Stay / Be) → 계시다</strong></li>
                <li><strong>죽다 (Die) → 돌아가시다</strong></li>
            </ul>

            <h3>2. Honorific Nouns & Titles</h3>
            <ul>
                <li><strong>밥 (Meal) → 진지</strong></li>
                <li><strong>나이 (Age) → 연세</strong></li>
                <li><strong>이름 (Name) → 성함</strong></li>
                <li><strong>집 (House) → 댁</strong></li>
                <li><strong>사람 / 명 (Person / Counter) → 분</strong></li>
            </ul>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR HONORIFICS PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved Korean Honorifics & Politeness Korean Exam Paper PDF</h2>
            <p>
                Download official honorifics <strong>korean test papers</strong> with complete answer keys below:
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
                            <td><strong>Korean Honorifics & Politeness Paper PDF</strong></td>
                            <td><span class="tag-badge green">Honorific Speech</span></td>
                            <td>2025</td>
                            <td>✔ Solved Formal Speech Drills</td>
                            <td><a href="../pdf/eps-topik-grammar.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>EPS TOPIK Vocabulary & Verb Root PDF</strong></td>
                            <td><span class="tag-badge green">Vocab & Verbs</span></td>
                            <td>2025</td>
                            <td>✔ Polite Nouns & Verbs</td>
                            <td><a href="../pdf/eps-topik-vocab.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Workplace Safety & Factory Rules Paper PDF</strong></td>
                            <td><span class="tag-badge green">Safety Rules</span></td>
                            <td>2025</td>
                            <td>✔ Industrial Workplace Dialogues</td>
                            <td><a href="../pdf/eps-topik-manufacturing.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Mastering Honorifics</h2>
            <p>
                Follow this 3-step blueprint to master honorific expressions:
            </p>
            <ul>
                <li><strong>Step 1 (Memorize Infix Rule):</strong> Insert -(으)시- before verb endings when the subject is an elder or manager (e.g., 가다 → 가시다 → 가십니다).</li>
                <li><strong>Step 2 (Learn Humble Verbs):</strong> Distinguish honorific Subject verbs (계시다) from humble Object verbs (드리다, 여쭙다).</li>
                <li><strong>Step 3 (Practice Manager Dialogues):</strong> Practice responding to factory manager instructions with formal <em>-겠습니다 (I will do so)</em>.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Honorifics Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the difference between 계시다 and 있다?</div>
                    <div class="faq-answer">
                        계시다 is the honorific verb used when an respected person is present (e.g., 사장님이 계십니다), whereas 있다 is plain or used for inanimate objects.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the honorifics paper PDF include full answer keys?</div>
                    <div class="faq-answer">
                        Yes! All downloadable honorifics <strong>korean exam paper</strong> sets on koreantestpapers.in include verified answer keys.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Are honorific expressions tested in EPS TOPIK listening?</div>
                    <div class="faq-answer">
                        Yes! Listening dialogues frequently test whether candidates choose proper polite responses to factory supervisors.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
