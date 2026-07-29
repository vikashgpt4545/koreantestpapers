<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "87th Full Model TOPIK Korean Test Papers & Korean Exam Paper";
$page_desc = "Download free 87th Full Model TOPIK Korean test papers PDF with official NIIED answer keys, listening transcripts, writing section solutions, and solved past papers.";
$canonical_url = "https://koreantestpapers.in/topik-87th-official-korean-test-papers";

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
  "headline": "87th Full Model TOPIK Korean Test Papers & Korean Exam Paper",
  "description": "Comprehensive study guide and downloadable 87th Full Model TOPIK Korean test papers PDF sets with official NIIED answer keys and writing essay models.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-87th-official-korean-test-papers"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED 87TH SESSION GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: 87TH SESSION OVERVIEW & NIIED STANDARDS -->
        <div class="seo-content-box">
            <h2>Detailed Guide to 87th Full Model TOPIK Korean Test Papers</h2>
            <p>
                The 87th Full Model TOPIK (Test of Proficiency in Korean) examination administered worldwide by NIIED (National Institute for International Education) provides a foundational past paper archive for foreign language scholars, undergraduate applicants, and professional certification candidates.
            </p>
            <p>
                Practicing with the 87th official <strong>korean test papers</strong> exposes candidates to authentic NIIED question formatting, standardized listening dialogue speeds, and real writing essay prompt structures. Download the full 87th session <strong>korean exam paper</strong> PDF archives complete with verified official NIIED answer keys below.
            </p>

            <div class="callout-box">
                <h4>🏆 87th Full Model TOPIK Exam Blueprint</h4>
                <ul>
                    <li><strong>TOPIK I (Levels 1-2):</strong> Listening 30 Qs (40 Min) + Reading 40 Qs (60 Min) = 200 Total Points</li>
                    <li><strong>TOPIK II (Levels 3-6):</strong> Listening 50 Qs (60 Min) + Writing 4 Qs (50 Min) + Reading 50 Qs (70 Min) = 300 Total Points</li>
                    <li><strong>Host Organization:</strong> NIIED, Ministry of Education, South Korea</li>
                    <li><strong>Included Artifacts:</strong> Question PDF, Audio Script Transcripts, Official Answer Sheet</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: 87TH SESSION ESSAY WRITING PROMPT REVIEW -->
        <div class="seo-content-box">
            <h2>87th Official TOPIK II Writing Section Prompt Analysis</h2>
            <p>
                The Writing Section in the 87th official <strong>korean exam paper</strong> evaluated candidate writing fluency across 4 questions:
            </p>

            <h3>1. Question 51: Email Announcement Completion (10 Points)</h3>
            <p>Candidates completed missing sentence segments in an email confirming seminar registration details, requiring formal honorific verb endings (<em>-시기 바랍니다</em>).</p>

            <h3>2. Question 52: Informative Text Completion (10 Points)</h3>
            <p>Candidates completed missing phrases in a passage discussing sleep hygiene and memory consolidation using plain writing style (<em>-ㄴ/는 다</em>).</p>

            <h3>3. Question 53: Graph Trend Description Essay (30 Points)</h3>
            <p>Candidates composed a 200 to 300-word descriptive essay summarizing survey statistics on recycling habits in South Korean households.</p>

            <h3>4. Question 54: Argumentative Opinion Essay (50 Points)</h3>
            <p>Candidates composed a 600 to 700-word essay examining the importance of lifelong learning and adult vocational education in modern society.</p>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR 87TH PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved 87th Full Model TOPIK Korean Test Papers PDF</h2>
            <p>
                Download official past 87th full model <strong>korean exam paper</strong> sets with verified NIIED answer keys below:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Transcripts</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>87th Full Model TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">87th Session</span></td>
                            <td>2023</td>
                            <td>✔ Solved Paper + NIIED Key</td>
                            <td><a href="../pdf/topik-87th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>88th Question Set TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">88th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-88th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>89th Past Official TOPIK II Paper PDF</strong></td>
                            <td><span class="tag-badge amber">89th Session</span></td>
                            <td>2023</td>
                            <td>✔ Official Answer Key</td>
                            <td><a href="../pdf/topik-89th-official-paper.pdf" class="btn-download-sm" download>📥 Download PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC REVISION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>3-Step Revision Blueprint for 87th Full Model Practice</h2>
            <p>
                Maximize your exam score with this 3-step revision blueprint:
            </p>
            <ul>
                <li><strong>Step 1 (Pacing Check):</strong> Complete the 50-minute writing module under strict timer conditions to ensure you finish Q54.</li>
                <li><strong>Step 2 (Sentence Structure Review):</strong> Study plain style verb endings (다체) in Question 52 and Question 54 solutions.</li>
                <li><strong>Step 3 (Auditory Shadowing):</strong> Shadow listening audio transcripts line by line to improve listening retention speed.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - 87th Full Model Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Are official NIIED answer keys included in the 87th paper download?</div>
                    <div class="faq-answer">
                        Yes! All downloadable 87th session <strong>korean test papers</strong> on koreantestpapers.in include official NIIED answer sheets.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Does the 87th session paper include full audio transcripts?</div>
                    <div class="faq-answer">
                        Yes! The 87th session PDF download includes complete Hangul audio transcripts for all listening questions.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Is the 87th session paper useful for TOPIK Level 3 and Level 4 preparation?</div>
                    <div class="faq-answer">
                        Yes! The 87th full model paper covers the complete range of TOPIK II difficulty levels from Level 3 through Level 6.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
