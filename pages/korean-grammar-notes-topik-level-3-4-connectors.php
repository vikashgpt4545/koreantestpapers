<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

// Page SEO Meta Configuration
$page_title = "Korean Grammar Notes TOPIK Level 1 & 2 Beginner PDF Rules";
$page_desc = "Master TOPIK Level 1 and Level 2 beginner Korean grammar notes with particle guides, sentence structures, honorific verbs, audio examples, and downloadable PDF summaries.";
$canonical_url = "https://koreantestpapers.in/korean-grammar-notes-topik-level-3-4-connectors";

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
  "headline": "Korean Grammar Notes TOPIK Level 1 & 2 Beginner PDF Rules",
  "description": "Comprehensive resource providing beginner TOPIK Level 1 and Level 2 Korean grammar notes, particle tables, basic conjugations, and PDF practice worksheets.",
  "publisher": {
    "@type": "Organization",
    "name": "KoreanTestPapers.in",
    "logo": "https://koreantestpapers.in/images/logo.png"
  },
  "mainEntityOfPage": "https://koreantestpapers.in/korean-grammar-notes-topik-level-3-4-connectors"
}
</script>

<!-- HERO SECTION COMPONENT -->
<?php require_once __DIR__ . '/../includes/hero-section.php'; ?>

<!-- MAIN CONTENT CONTAINER (2,000+ WORDS DETAILED LEVEL 1-2 GRAMMAR GUIDE) -->
<section class="section-padding">
    <div class="container">
        
        <!-- ARTICLE BOX 1: LEVEL 1-2 GRAMMAR OVERVIEW -->
        <div class="seo-content-box">
            <h2>Complete Guide to TOPIK Level 1 & 2 Beginner Korean Grammar Notes</h2>
            <p>
                Beginner Korean grammar establishes the foundational rules required for constructing basic S-O-V (Subject-Object-Verb) sentences, asking daily questions, expressing desires, and navigating simple public interactions. Studying structured <strong>korean grammar notes topik level 1 2</strong> enables candidates preparing for NIIED TOPIK I or EPS-TOPIK assessments to master basic verb conjugations and particle usage with absolute confidence.
            </p>

            <p>
                The beginner <strong>korean grammar notes</strong> curriculum covers core grammar categories: copula verbs (~이다 / ~아니다), informal polite speech endings (~아/어 요), basic past tense (~았/었 어요), future intention (~을/ㄹ 거예요), continuous actions (~고 있다), and essential modal verbs (~수 있다/없다). Solving solved <strong>korean exam paper</strong> exercises solidifies these rules. Download complete Level 1 and Level 2 grammar PDF guides below.
            </p>

            <div class="callout-box">
                <h4>📌 Beginner TOPIK Level 1 & 2 Essential Grammar Categories</h4>
                <ul>
                    <li><strong>Basic Copula & Negation:</strong> To be (~이다), To not be (~가/이 아니다), To exist (~있다), To not exist (~없다).</li>
                    <li><strong>Polite Informal Endings:</strong> Present tense (~아/어 요), Past tense (~았/었 어요), Honorific (~으세요).</li>
                    <li><strong>Ability & Possibility:</strong> Can do (~을/ㄹ 수 있다), Cannot do (~을/ㄹ 수 없다).</li>
                    <li><strong>Desire & Intent:</strong> Want to (~고 싶다), Plan to (~을/ㄹ 거예요), Shall we (~을/ㄹ까요?).</li>
                </ul>
            </div>
        </div>

        <!-- ARTICLE BOX 2: LEVEL 1-2 DETAILED GRAMMAR PATTERNS TABLE -->
        <div class="seo-content-box">
            <h2>TOPIK Level 1 & 2 Core Grammar Patterns & Conjugation Table</h2>
            <p>
                Examine essential beginner grammar patterns with formulas and usage examples:
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
                            <td><strong>~아/어 요</strong></td>
                            <td>Polite Present Tense</td>
                            <td>Verb stem + 아요 (Bright Vowel) / 어요 (Dark)</td>
                            <td>사과를 먹어요. (I eat an apple.)</td>
                        </tr>
                        <tr>
                            <td><strong>~았/었 어요</strong></td>
                            <td>Polite Past Tense</td>
                            <td>Verb stem + 았어요 (Bright) / 었어요 (Dark)</td>
                            <td>영화표를 샀어요. (I bought a movie ticket.)</td>
                        </tr>
                        <tr>
                            <td><strong>~을/ㄹ 거예요</strong></td>
                            <td>Future Intention</td>
                            <td>Verb stem + 을 거예요 (Consonant) / ㄹ (Vowel)</td>
                            <td>내일 한국에 갈 거예요. (I will go to Korea tomorrow.)</td>
                        </tr>
                        <tr>
                            <td><strong>~고 싶다</strong></td>
                            <td>Expressing Desire ("Want to")</td>
                            <td>Verb stem + 고 싶어요</td>
                            <td>커피를 마시고 싶어요. (I want to drink coffee.)</td>
                        </tr>
                        <tr>
                            <td><strong>~을/ㄹ 수 있다/없다</strong></td>
                            <td>Ability / Capability ("Can/Cannot")</td>
                            <td>Verb stem + 을 수 있다 (Consonant) / ㄹ (Vowel)</td>
                            <td>운전을 할 수 있어요. (I can drive.)</td>
                        </tr>
                        <tr>
                            <td><strong>~아/어 주세요</strong></td>
                            <td>Polite Request ("Please do")</td>
                            <td>Verb stem + 아/어 주세요</td>
                            <td>문 문을 닫아 주세요. (Please close the door.)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 3: MASTER DOWNLOAD TABLE FOR LEVEL 1-2 GUIDES -->
        <div class="seo-content-box">
            <h2>Download Solved TOPIK Level 1 & 2 Grammar Notes PDF</h2>
            <p>
                Select your required beginner <strong>korean test papers</strong> grammar guide below for instant PDF downloads:
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
                            <td><strong>TOPIK Level 1 Essential Grammar PDF Guide</strong></td>
                            <td><span class="tag-badge green">Level 1</span></td>
                            <td>2025</td>
                            <td>✔ Solved Rules + Practice Exercises</td>
                            <td><a href="/pdf/korean-grammar-pdf-download.html" target="_blank" class="btn-download-sm">📥 View Guide</a></td>
                        </tr>
                        <tr>
                            <td><strong>TOPIK Level 2 Intermediate-Beginner Grammar PDF</strong></td>
                            <td><span class="tag-badge green">Level 2</span></td>
                            <td>2024</td>
                            <td>✔ Solved Patterns + Sentence Drills</td>
                            <td><a href="/download-paper?session=96th&title=TOPIK%20Level%202%20Grammar%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>100 Essential Beginner Particle Rules PDF Summary</strong></td>
                            <td><span class="tag-badge green">Particles</span></td>
                            <td>2024</td>
                            <td>✔ Complete Particle Summary Table</td>
                            <td><a href="/download-paper?session=91st&title=Beginner%20Particle%20Rules%20PDF" class="btn-download-sm">📥 Download PDF</a></td>
                        </tr>
                        <tr>
                            <td><strong>Master Level 1-2 Grammar Drive Archive Vault</strong></td>
                            <td><span class="tag-badge amber">Drive Hub</span></td>
                            <td>Archive</td>
                            <td>✔ Full 156 PDF/MP3 Vault</td>
                            <td><a href="https://drive.google.com/drive/folders/1jXwvNp4L_3x7CUu3glBdiHfZIb6WI9jB?usp=sharing" target="_blank" class="btn-download-sm">📥 Open Drive Vault</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ARTICLE BOX 4: STRATEGIC BEGINNER GRAMMAR BLUEPRINT -->
        <div class="seo-content-box">
            <h2>4-Step Blueprint for Beginner Grammar Mastery</h2>
            <p>
                Master beginner Korean grammar within 30 days by following these 4 study steps:
            </p>
            <ul>
                <li><strong>Step 1 (Memorize Vowel Harmony Rules):</strong> Understand bright vowels (아, 오) vs dark vowels (어, 우, 이) to conjugate ~아/어 요 endings without error.</li>
                <li><strong>Step 2 (Practice Irregular Verb Roots):</strong> Master ㅂ irregulars (돕다→도와요), ㄷ irregulars (듣다→들어요), and ㅡ irregulars (바쁘다→바빠요).</li>
                <li><strong>Step 3 (Combine Grammar with Nouns):</strong> Form full sentences daily combining newly learned vocabulary with ~고 싶다 and ~을/ㄹ 수 있다.</li>
                <li><strong>Step 4 (Solve TOPIK I Past Papers):</strong> Grade your ability on Reading Q31-Q40 fill-in-the-blank items to verify grammar retention.</li>
            </ul>
        </div>

        <!-- ARTICLE BOX 5: FAQ SECTION -->
        <div class="seo-content-box" id="faq-section">
            <h2>Frequently Asked Questions (FAQ) - Level 1 & 2 Grammar Notes</h2>
            <div class="faq-grid-box" style="margin-top: 20px;">
                <div class="faq-item-box">
                    <div class="faq-question">Q1: How many grammar patterns are needed to achieve TOPIK Level 2 certification?</div>
                    <div class="faq-answer">
                        Candidates should master approximately 80 to 100 core beginner grammar patterns to comfortably achieve TOPIK Level 2 certification (140+ points).
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q2: What is the difference between ~아/어 보다 and ~고 싶다?</div>
                    <div class="faq-answer">
                        ~아/어 보다 means to try or experience doing something ("try eating"), whereas ~고 싶다 means to express a personal desire to do something ("want to eat").
                    </div>
                </div>

                <div class="faq-item-box">
                    <div class="faq-question">Q3: Where can I download complete TOPIK Level 1 and 2 grammar PDF summaries?</div>
                    <div class="faq-answer">
                        You can view and download free complete TOPIK Level 1 and 2 beginner grammar PDF summaries directly from koreantestpapers.in.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Shared Footer Template -->
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
