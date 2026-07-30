<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Grammar Notes TOPIK Level 3 & 4 Intermediate PDF Rules";
$page_desc = "Master TOPIK Level 3 and Level 4 intermediate Korean grammar notes with academic connective endings, passive/causative verbs, essay writing structures, and PDF downloads.";
$canonical_url = "https://koreantestpapers.in/korean-grammar-notes-topik-level-5-6-advanced";

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
  "headline": "Korean Grammar Notes TOPIK Level 3 & 4 Intermediate PDF Rules",
  "description": "Comprehensive resource providing intermediate TOPIK Level 3 and Level 4 Korean grammar notes, passive/causative verbs, TOPIK II essay connectors, and PDF downloads.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-grammar-notes-topik-level-5-6-advanced"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LEVEL 3-4 GRAMMAR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LEVEL 3-4 GRAMMAR OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Level 3 & 4 Intermediate Korean Grammar Notes</h2>
            <p>
                Intermediate Korean grammar bridges basic conversational ability and professional/academic fluency. Studying structured <strong>korean grammar notes topik level 3 4</strong> equips candidates preparing for NIIED TOPIK II examinations with the advanced connective clauses, indirect speech transformations (간접화법), passive/causative verb constructions (피동/사동), and formal essay transition structures required to achieve Level 3 (120+ points) or Level 4 (150+ points) certification.
            </p>

            <p>
                The intermediate <strong>korean grammar notes</strong> syllabus focuses heavily on structures tested in TOPIK II Writing Questions 51-54 and Reading Questions 1-4: indirect speech (~다고 하다, ~냐고 하다, ~자고 하다, ~라고 하다), cause and result clauses (~는 바람에, ~느라고, ~기 마련이다), and degree/extent expressions (~을/ㄹ 뿐만 아니라, ~에 비해서). Studying solved <strong>korean exam paper</strong> grammar guides guarantees maximum point acquisition. Download full Level 3 and 4 grammar PDF bundles below.
            </p>

            <div class="callout-box">
                <h4>🏛️ Core Modules Covered in Intermediate Level 3 & 4 Grammar Notes</h4>
                <ul>
                    <li><strong>Indirect Quotations (간접화법):</strong> Plain statement (~다고 하다), Question (~냐고 하다), Suggestion (~자고 하다), Imperative (~라고 하다).</li>
                    <li><strong>Passive & Causative Verbs (피동/사동):</strong> Subject receiving action (~이/히/리/기~) or causing action (~우/구/추~).</li>
                    <li><strong>Formal Connective Endings:</strong> Addition (~을/ㄹ 뿐만 아니라), High Probability (~기 마련이다), Regret (~을/ㄹ 걸 그랬다).</li>
                    <li><strong>TOPIK II Essay Transition Connectors:</strong> Furthermore (게다가), Conversely (반면에), Therefore (따라서).</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: LEVEL 3-4 DETAILED GRAMMAR PATTERNS TABLE -->
        <div class="seo-content-box">
            <h2>TOPIK Level 3 & 4 Core Grammar Patterns & Conjugation Table</h2>
            <p>
                Examine essential intermediate grammar patterns with formulas and usage examples:
            </p>

            <div class="table-box-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Grammar Pattern</th>
                            <th>Target Meaning</th>
                            <th>Conjugation Formula</th>
                            <th>Sample Usage Sentence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>~다고 하다</strong></td>
                            <td>Indirect Statement ("He/She said that...")</td>
                            <td>Verb stem + ㄴ/는다고 하다 / Adj + 다고 하다</td>
                            <td>친구는 내일 유학을 간다고 했어요. (Friend said he goes abroad to study tomorrow.)</td>
                        </tr>
                        <tr>
                            <td><strong>~는 바람에</strong></td>
                            <td>Negative Unintended Cause ("Because of...")</td>
                            <td>Verb stem + 는 바람에</td>
                            <td>늦잠을 자는 바람에 지각했어요. (Lated because I overslept.)</td>
                        </tr>
                        <tr>
                            <td><strong>~을/ㄹ 뿐만 아니라</strong></td>
                            <td>Addition ("Not only... but also...")</td>
                            <td>Verb stem + 을 뿐만 아니라 (Cons) / ㄹ (Vowel)</td>
                            <td>싸고 좋을 뿐만 아니라 가볍습니다. (Not only cheap and good but also light.)</td>
                        </tr>
                        <tr>
                            <td><strong>~기 마련이다</strong></td>
                            <td>Natural Inevitability ("Bound to happen")</td>
                            <td>Verb stem + 기 마련이다</td>
                            <td>열심히 공부하면 성적이 오르기 마련이다. (Grades are bound to rise if studying hard.)</td>
                        </tr>
                        <tr>
                            <td><strong>~는 대신에</strong></td>
                            <td>Substitution ("Instead of...")</td>
                            <td>Verb stem + 는 대신에 / Noun + 대신에</td>
                            <td>커피 대신에 차를 마셔요. (Drink tea instead of coffee.)</td>
                        </tr>
                        <tr>
                            <td><strong>~을/ㄹ 정도이다</strong></td>
                            <td>Degree / Extent ("To the extent that...")</td>
                            <td>Verb stem + 을 정도이다</td>
                            <td>눈물이 날 정도로 기뻐요. (Happy to the extent of shedding tears.)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LEVEL 3-4 GUIDES -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Level 3 & 4 Grammar Notes PDF</h2>
            <p>
                Select your required intermediate <strong>korean test papers</strong> grammar guide below for instant PDF downloads:
            </p>

            <div class="table-box-container" style="margin-top: 18px;">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Guide Title</th>
                            <th>Target Level</th>
                            <th>Year</th>
                            <th>Included Assets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>TOPIK Level 3 Essential Academic Grammar PDF Guide</strong></td>
                            <td><span class="tag-badge green">Level 3</span></td>
                            <td>2025</td>
                            <td>✔ Solved Rules + Indirect Speech Matrix</td>
                            <td><a href="/download-paper?session=91st&title=TOPIK%20Level%203%20Grammar%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Level 4 Advanced Intermediate Grammar PDF</strong></td>
                            <td><span class="tag-badge green">Level 4</span></td>
                            <td>2024</td>
                            <td>✔ Solved Patterns + Essay Connectors</td>
                            <td><a href="/download-paper?session=96th&title=TOPIK%20Level%204%20Grammar%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Indirect Speech (간접화법) Master Transformation PDF</strong></td>
                            <td><span class="tag-badge green">Indirect Speech</span></td>
                            <td>2024</td>
                            <td>✔ Complete 4-Type Transformation Chart</td>
                            <td><a href="/download-paper?session=83rd&title=Indirect%20Speech%20Master%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master Level 3-4 Grammar Drive Archive Vault</strong></td>
                            <td><span class="tag-badge amber">Drive Hub</span></td>
                            <td>Archive</td>
                            <td>✔ Full 156 PDF/MP3 Vault</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC INTERMEDIATE GRAMMAR BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for Intermediate Grammar Mastery</h2>
            <p>
                Master intermediate TOPIK II grammar effectively by following these 4 study steps:
            </p>
            <ul>
                <li><strong>Step 1 (Master Indirect Speech Short Forms):</strong> Practice transforming quoted statements (~대요), questions (~냬요), and commands (~래 요) into rapid conversational forms.</li>
                <li><strong>Step 2 (Differentiate Cause Expressions):</strong> Understand that ~느라고 requires same subject & negative outcome, while ~는 바람에 requires unexpected external cause.</li>
                <li><strong>Step 3 (Apply Essay Transition Connectors):</strong> Use 게다가 (furthermore) and 따라서 (therefore) in TOPIK II Question 53 and 54 manuscript writing drills.</li>
                <li><strong>Step 4 (Solve TOPIK II Q1-Q4 Grammar Items):</strong> Practice matching synonymous grammar patterns (e.g., ~을 뿐만 아니라 ↔ ~는데다가) under timed conditions.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Level 3 & 4 Grammar Notes</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: Why is indirect speech (간접화법) so heavily tested in TOPIK II?</div>
                    <div class="faq-answer">
                        Indirect speech is tested in TOPIK II Listening and Reading because intermediate candidates must understand secondhand news reports, survey results, and multi-speaker dialogues.
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: How many total grammar patterns are required to pass TOPIK Level 4?</div>
                    <div class="faq-answer">
                        Candidates should master approximately 150 to 200 intermediate grammar patterns to achieve Level 4 certification (150+ points out of 300).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Where can I download the complete TOPIK Level 3 and 4 grammar PDF notes?</div>
                    <div class="faq-answer">
                        You can download free complete TOPIK Level 3 and Level 4 intermediate grammar PDF notes directly from koreantestpapers.in.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
