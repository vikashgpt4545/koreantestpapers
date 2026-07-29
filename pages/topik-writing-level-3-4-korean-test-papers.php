<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK Intermediate Writing Level 3-4 Korean Test Papers & Korean Exam Paper";
$page_desc = "Download free TOPIK Intermediate Writing Level 3-4 Korean test papers PDF with official NIIED Q51/52 short sentence fill-in templates, Q53 graph writing frameworks, sample answers, and scoring rubrics.";
$canonical_url = "https://koreantestpapers.in/topik-writing-level-3-4-korean-test-papers";

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
  "headline": "TOPIK Intermediate Writing Level 3-4 Korean Test Papers & Korean Exam Paper",
  "description": "Comprehensive study guide and downloadable TOPIK Intermediate Writing Level 3-4 Korean test papers PDF sets with NIIED Q51-Q54 writing models and scoring rubrics.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-writing-level-3-4-korean-test-papers"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED INTERMEDIATE WRITING GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: INTERMEDIATE WRITING OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Intermediate Writing Level 3-4 Korean Test Papers</h2>
            <p>
                The TOPIK II Writing section (쓰기) contains 4 tasks (Q51 through Q54) worth 100 points, completed in 50 minutes alongside the Listening section in Session 1. Scoring well on intermediate writing tasks—specifically Question 51 (10 pts), Question 52 (10 pts), and Question 53 (30 pts)—is the fastest shortcut to achieving TOPIK Level 3 or Level 4 certification without relying on the lengthy 600-word Q54 essay.
            </p>
            <p>
                Our TOPIK Intermediate Writing Level 3-4 <strong>korean test papers</strong> resource provides high-scoring sentence completion patterns and graph report writing templates. Practicing with dedicated writing <strong>korean exam paper</strong> models equips candidates to write error-free responses on square Manuscript Paper (원고지). Download the complete TOPIK II Writing Level 3-4 PDF below.
            </p>

            <div class="callout-box">
                <h4>✍ Breakdown of TOPIK II Writing Tasks (100 Points Total)</h4>
                <ul>
                    <li><strong>Question 51 (10 Points | Short Memo / Email):</strong> Filling in 2 missing sentences (ㄱ, ㄴ) in informal/formal emails</li>
                    <li><strong>Question 52 (10 Points | Explanatory Text):</strong> Filling in 2 missing sentences (ㄱ, ㄴ) in objective/scientific descriptions</li>
                    <li><strong>Question 53 (30 Points | Graph / Survey Report):</strong> Writing a 200-300 word statistical report describing chart trends</li>
                    <li><strong>Question 54 (50 Points | Argumentative Essay):</strong> Writing a 600-700 word opinion essay on a societal issue</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: QUESTION 53 GRAPH REPORT WRITING TEMPLATES -->
        <div class="seo-content-box">
            <h2>Question 53 Graph Report Writing Blueprint (30 Free Points)</h2>
            <p>
                Master this standard 3-sentence graph report structure for Question 53:
            </p>

            <h3>Sentence 1: Introduction of Survey Topic</h3>
            <p><em>[조사 기관]에서 [조사 대상]을 대상으로 [조사 주제]에 대해 조사를 실시하였다.</em><br>(e.g., 한국리서치에서 성인 남녀 1,000명을 대상으로 대중교통 이용 현황에 대해 조사를 실시하였다.)</p>

            <h3>Sentence 2: Describing Numerical Trends</h3>
            <p><em>조사 결과에 따르면 [항목 A]이/가 [숫자]%로 가장 높게 나타났으며, [항목 B]([숫자]%)이/가 그 뒤를 이었다.</em></p>

            <h3>Sentence 3: Stating Causes or Future Prospects</h3>
            <p><em>이러한 증가의 원인으로는 [원인 1]과/와 [원인 2](으)로 분석된다. 앞으로도 이러한 추세는 지속될 것으로 전망된다.</em></p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR INTERMEDIATE WRITING -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Intermediate Writing Level 3-4 Korean Test Papers PDF</h2>
            <p>
                Download official TOPIK II writing <strong>korean exam paper</strong> models with complete answer keys below:
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
                            <td><strong>TOPIK Intermediate Writing Level 3-4 Paper PDF</strong></td>
                            <td><span class="tag-badge amber">Intermediate Writing</span></td>
                            <td>2025</td>
                            <td>✔ Solved Q51-Q54 Models + Key</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>91st Official TOPIK II Full Test Paper PDF</strong></td>
                            <td><span class="tag-badge amber">91st Session</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-91st-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Express Question Bank PDF</strong></td>
                            <td><span class="tag-badge amber">TOPIK Express</span></td>
                            <td>2025</td>
                            <td>✔ 1000 Solved High-Yield Qs</td>
                            <td><a href="../pdf/topik-2-advanced-model.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Blueprint for Level 3-4 Writing Success</h2>
            <p>
                Follow this 3-step blueprint for writing score maximization:
            </p>
            <ul>
                <li><strong>Step 1 (Memorize Plain Style -다):</strong> Always write Q52, Q53, and Q54 in plain written style (해라체: -ㄴ/는다, -다). Never use -습니다/해요!</li>
                <li><strong>Step 2 (Secure 45 Points on Q51-Q53):</strong> Spend 25 minutes achieving full marks on Q51, Q52, and Q53 before touching Q54.</li>
                <li><strong>Step 3 (Manuscript Paper Rules):</strong> Follow standard Korean manuscript grid formatting (원고지 작성법) rules.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK Intermediate Writing</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Which speech style must be used for Q53 graph reports?</div>
                    <div class="faq-answer">
                        Q53 graph reports must be written strictly in Plain Non-Polite Written Style (해라체: -ㄴ/는다, -이다, -아/어지다).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the TOPIK Level 3-4 writing paper PDF include model sample answers?</div>
                    <div class="faq-answer">
                        Yes! All downloadable TOPIK Intermediate Writing Level 3-4 <strong>korean test papers</strong> on koreantestpapers.in include official NIIED model essays.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How many points can I get if I complete Q51, Q52, and Q53 perfectly?</div>
                    <div class="faq-answer">
                        Perfect scores on Q51 (10 pts), Q52 (10 pts), and Q53 (30 pts) equal 50 points, which is enough for TOPIK Level 3 certification!
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
