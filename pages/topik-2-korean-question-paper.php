<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "TOPIK 2 Korean Question Paper with Writing Essay Solutions";
$page_desc = "Download free TOPIK 2 Korean question paper PDF sets with NIIED answer keys, TOPIK II Listening, Reading, and Q51-Q54 Writing essay scoring rubrics for Level 3 to Level 6.";
$canonical_url = "https://koreantestpapers.in/topik-2-korean-question-paper";

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
  "headline": "TOPIK 2 Korean Question Paper with Writing Essay Solutions",
  "description": "Comprehensive guide and downloadable TOPIK 2 Korean question paper PDF sets for Level 3, 4, 5, and 6 candidates featuring writing model essays and answer keys.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/topik-2-korean-question-paper"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED TOPIK 2 GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: TOPIK 2 QUESTION PAPER OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK 2 Korean Question Paper & Writing Essay Rubrics</h2>
            <p>
                The TOPIK II examination is NIIED's comprehensive Korean language proficiency test designed for intermediate and advanced candidates aiming for Level 3, Level 4, Level 5, or Level 6 certification. Solving authentic <strong>topik 2 korean question paper</strong> PDF archives is essential for mastering complex academic reading passages, rapid listening dialogues, and the demanding 4-question Writing section (쓰기).
            </p>

            <p>
                A complete TOPIK II <strong>korean question paper</strong> contains 104 questions distributed across three core modules: 50 Listening questions (60 minutes), 4 Writing tasks (50 minutes), and 50 Reading questions (70 minutes) for a total possible score of 300 points. Downloading solved <strong>korean exam paper</strong> archives helps students master high-level academic vocabulary, complex grammar connectors, and structured essay writing techniques. Download complete TOPIK 2 question papers below.
            </p>

            <div class="callout-box">
                <h4>🎓 TOPIK 2 Level Cut-off Score Breakdown (Max: 300 Points)</h4>
                <ul>
                    <li><strong>Level 3 (중급 3급):</strong> 120 / 300 Points (Intermediate Basics)</li>
                    <li><strong>Level 4 (중급 4급):</strong> 150 / 300 Points (Intermediate Business & News)</li>
                    <li><strong>Level 5 (고급 5급):</strong> 190 / 300 Points (Advanced Academic & Research)</li>
                    <li><strong>Level 6 (고급 6급):</strong> 230 / 300 Points (Master Professional Level)</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: TOPIK 2 WRITING SECTION Q51-Q54 RUBRICS TABLE -->
        <div class="seo-content-box">
            <h2>TOPIK II Writing Section (Q51-Q54) Task Structure & Scoring</h2>
            <p>
                The Writing module accounts for 100 out of 300 total points in TOPIK II. Analyze the exact question breakdown below:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Question Number</th>
                            <th>Task Type & Title</th>
                            <th>Word Limit & Format</th>
                            <th>Point Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Question 51</strong></td>
                            <td>Fill-in-the-Blanks (Short Informal Notice / Email)</td>
                            <td>2 Sentences (~10-20 words)</td>
                            <td>10 Points (5 Pts per blank)</td>
                        </tr>
                        <tr>
                            <td><strong>Question 52</strong></td>
                            <td>Fill-in-the-Blanks (Short Explanatory / Scientific Text)</td>
                            <td>2 Sentences (~10-20 words)</td>
                            <td>10 Points (5 Pts per blank)</td>
                        </tr>
                        <tr>
                            <td><strong>Question 53</strong></td>
                            <td>Data & Chart Description Essay (그래프 설명문)</td>
                            <td>200 - 300 Words (Won-gong-ji Manuscript)</td>
                            <td>30 Points</td>
                        </tr>
                        <tr>
                            <td><strong>Question 54</strong></td>
                            <td>Opinion & Argumentative Essay (논술형 에세이)</td>
                            <td>600 - 700 Words (Won-gong-ji Manuscript)</td>
                            <td>50 Points</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR TOPIK 2 PAPERS -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK 2 Korean Question Paper PDF Sets</h2>
            <p>
                Select your required TOPIK II <strong>korean test papers</strong> session below for full PDF and writing essay model downloads:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Exam Set Title</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Answer Key & Writing Rubrics</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>91st Official TOPIK 2 Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">TOPIK 2</span></td>
                            <td>2024</td>
                            <td>✔ Solved Paper + Writing Model</td>
                            <td><a href="/download-paper?session=91st&title=91st%20TOPIK%202%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>83rd Official TOPIK 2 Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">TOPIK 2</span></td>
                            <td>2023</td>
                            <td>✔ Solved Paper + Audio Script</td>
                            <td><a href="/download-paper?session=83rd&title=83rd%20TOPIK%202%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>64th Official TOPIK 2 Question Paper PDF</strong></td>
                            <td><span class="tag-badge green">TOPIK 2</span></td>
                            <td>2019</td>
                            <td>✔ Full Solved NIIED Paper</td>
                            <td><a href="/download-paper?session=64th&title=64th%20TOPIK%202%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master TOPIK 2 PDF Vault (Google Drive)</strong></td>
                            <td><span class="tag-badge amber">All TOPIK 2</span></td>
                            <td>Archive</td>
                            <td>✔ Full Audio & Answer Pack</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC ADVANCED PREPARATION BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for Scoring Level 5 & Level 6 in TOPIK 2</h2>
            <p>
                Follow these 4 strategic steps to maximize your TOPIK II score:
            </p>
            <ul>
                <li><strong>Step 1 (Master Data Description for Q53):</strong> Memorize standard chart transition phrases (e.g., ~에 따르면, ~은/는 것으로 나타났다) to secure easy points on Question 53.</li>
                <li><strong>Step 2 (Practice Won-gong-ji Manuscript Rules):</strong> Write essays on official 400-grid writing paper to practice correct spacing, punctuation, and paragraphing rules.</li>
                <li><strong>Step 3 (Solve Reading Q1 to Q30 First):</strong> Secure full points in intermediate reading questions before tackling dense scientific or philosophical literature in Q31-Q50.</li>
                <li><strong>Step 4 (Grade Writing Against Rubrics):</strong> Self-evaluate essay practice attempts against official NIIED partial point allocation tables.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - TOPIK 2 Question Papers</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: What is the passing score required to achieve Level 5 on TOPIK II?</div>
                    <div class="faq-answer">
                        Candidates must score 190 or higher out of 300 total points across Listening, Writing, and Reading to achieve Level 5 certification.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: Are penalty points deducted for incorrect answers in TOPIK II reading?</div>
                    <div class="faq-answer">
                        No! TOPIK II does not use negative marking. Candidates should answer every question even if guessing.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: How much time should be allocated for Question 54 essay writing?</div>
                    <div class="faq-answer">
                        Educators recommend spending 10 minutes on Questions 51 & 52, 12-15 minutes on Question 53, and reserving 25 minutes for the 600-700 word Question 54 essay.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
