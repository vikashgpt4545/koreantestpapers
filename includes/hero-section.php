<?php
// Unified 70%/30% Hero Section Component for KoreanTestPapers.in
require_once __DIR__ . '/media_catalog.php';

$live_questions = get_live_questions();
?>

<!-- HERO SECTION CONTAINER (70% / 30% SPLIT BOX LAYOUT) -->
<section class="hero-section">
    <div class="container">
        
        <!-- Hero Header Notice Bar -->
        <div class="hero-heading-box">
            <h1 class="hero-title"><?php echo htmlspecialchars($page_title ?? 'Download Korean Test Papers and Korean Exam Paper with Answer Keys'); ?></h1>
            <p class="hero-subtitle">
                Practice interactive level-based games, learn daily vocabulary, take randomized CBT mock tests, and download 100% free official <strong>korean test papers</strong> & <strong>korean exam paper</strong> PDFs directly from Google Drive!
            </p>
        </div>

        <!-- 70% / 30% Split Hero Grid -->
        <div class="hero-split-container-7030">
            
            <!-- LEFT COLUMN (70% Width — Immersive Learn, Gaming & CBT Hub) -->
            <div class="hero-left-box-70">
                
                <!-- Tab Navigation Header -->
                <div class="hero-tab-nav">
                    <button class="tab-btn active" onclick="switchHeroTab('learnTab', this)">📚 Learn Korean</button>
                    <button class="tab-btn" onclick="switchHeroTab('gamesTab', this)">🎮 Play Games</button>
                    <button class="tab-btn" onclick="switchHeroTab('cbtTab', this)">⏱️ CBT Mock Test</button>
                    <button class="tab-btn" onclick="switchHeroTab('notesTab', this)">📝 Pro Study Notes</button>
                </div>

                <!-- TAB 1: LEARN KOREAN -->
                <div id="learnTab" class="tab-content-panel active" style="display: block;">
                    <div class="panel-header-box">
                        <h3>한글 & 어휘 학습 — Basic Hangul & Vocab Lessons</h3>
                        <span class="tag-badge green">Free Lessons</span>
                    </div>

                    <!-- Hangul Interactive Quick Chart -->
                    <div class="hangul-chart-grid">
                        <div class="hangul-card" onclick="playHangulSound('ㄱ', 'Giyeok (k/g)')">
                            <span class="kor-char">ㄱ</span>
                            <span class="rom-char">g / k</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㄴ', 'Nieun (n)')">
                            <span class="kor-char">ㄴ</span>
                            <span class="rom-char">n</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㄷ', 'Digeut (d/t)')">
                            <span class="kor-char">ㄷ</span>
                            <span class="rom-char">d / t</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㄹ', 'Rieul (r/l)')">
                            <span class="kor-char">ㄹ</span>
                            <span class="rom-char">r / l</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㅁ', 'Mieum (m)')">
                            <span class="kor-char">ㅁ</span>
                            <span class="rom-char">m</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㅂ', 'Bieup (b/p)')">
                            <span class="kor-char">ㅂ</span>
                            <span class="rom-char">b / p</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㅅ', 'Siot (s)')">
                            <span class="kor-char">ㅅ</span>
                            <span class="rom-char">s</span>
                        </div>
                        <div class="hangul-card" onclick="playHangulSound('ㅇ', 'Ieung (ng)')">
                            <span class="kor-char">ㅇ</span>
                            <span class="rom-char">ng</span>
                        </div>
                    </div>

                    <!-- Flashcard Quick Vocab Viewer -->
                    <div class="vocab-flashcard-box" id="vocabFlashcard">
                        <div class="flashcard-category">Factory Safety & Tools</div>
                        <div class="flashcard-kor" id="fcKorean">안전모</div>
                        <div class="flashcard-eng" id="fcEnglish">Safety Helmet (सुरक्षा पेटी)</div>
                        <button class="btn-sm-action" onclick="nextVocabCard()">Next Word ▶</button>
                    </div>
                </div>

                <!-- TAB 2: PLAY GAMES FOR TEST & LEARN -->
                <div id="gamesTab" class="tab-content-panel" style="display: none;">
                    <div class="panel-header-box">
                        <h3>🎮 Level-Based Korean Practice Games</h3>
                        <div class="level-indicator-badge">Level 1 (Free Trial)</div>
                    </div>

                    <!-- Game Mode Selection -->
                    <div class="game-select-buttons">
                        <button class="game-mode-btn active" onclick="selectGameMode('speed')">⚡ Speed Word Match</button>
                        <button class="game-mode-btn" onclick="selectGameMode('signboard')">🚫 Safety Signboard Puzzle</button>
                        <button class="game-mode-btn" onclick="selectGameMode('audio')">🎧 Audio Challenge</button>
                    </div>

                    <!-- Interactive Game Canvas Box -->
                    <div class="game-playground-box">
                        <div class="game-score-bar">
                            <span>Score: <strong id="gameScore">0</strong></span>
                            <span>Question: <strong id="gameQCount">1 / 5</strong></span>
                            <span>Timer: <strong id="gameTimer" style="color: #ef4444;">60s</strong></span>
                        </div>

                        <div class="game-question-area" id="gameQuestionText">
                            What is the English / Hindi meaning of Korean word: <strong style="color: #60a5fa; font-size: 1.3rem;">"의사"</strong>?
                        </div>

                        <div class="game-options-grid" id="gameOptionsGrid">
                            <button class="game-opt-btn" onclick="checkGameAnswer('A. Doctor (डॉक्टर)')">A. Doctor (डॉक्टर)</button>
                            <button class="game-opt-btn" onclick="checkGameAnswer('B. Teacher (शिक्षक)')">B. Teacher (शिक्षक)</button>
                            <button class="game-opt-btn" onclick="checkGameAnswer('C. Police (पुलिस)')">C. Police (पुलिस)</button>
                            <button class="game-opt-btn" onclick="checkGameAnswer('D. Chef (रसोइया)')">D. Chef (रसोइ야)</button>
                        </div>
                    </div>
                </div>

                <!-- TAB 3: FULL CBT MOCK TEST -->
                <div id="cbtTab" class="tab-content-panel" style="display: none;">
                    <div class="panel-header-box">
                        <h3>⏱️ Dynamic Random CBT Mock Simulator</h3>
                        <span class="tag-badge blue">Dynamic Question Engine</span>
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

                <!-- TAB 4: PRO STUDY NOTES -->
                <div id="notesTab" class="tab-content-panel" style="display: none;">
                    <div class="panel-header-box">
                        <h3>📝 Exclusive Pro Study Notes & Cheatsheets</h3>
                        <span class="tag-badge amber">Pro Vault</span>
                    </div>

                    <div class="notes-list-grid">
                        <div class="note-card-item">
                            <h4>1000 High-Yield EPS TOPIK Workplace Vocab</h4>
                            <p>Complete English & Hindi dictionary for factory work</p>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                        <div class="note-card-item">
                            <h4>Complete Korean Grammar Particles Cheatsheet</h4>
                            <p>Master -은/는, -이/가, -을/를, -아/어서 rules in 10 minutes</p>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                        <div class="note-card-item">
                            <h4>Industrial Safety Signboard Reference Guide</h4>
                            <p>High-resolution diagrams of all 50 HRD Korea warning signs</p>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN (30% Width — 100% Free PDF Downloads Box) -->
            <div class="hero-right-box-30">
                <div class="box-title-header">
                    <h3>📥 Free Exam Papers PDF</h3>
                    <span class="tag-badge green">100% Free Downloads</span>
                </div>
                
                <p style="font-size: 0.82rem; color: #64748b; margin-bottom: 12px;">
                    Download official past test papers, answer keys, and audio files directly from Google Drive:
                </p>

                <div class="exam-nav-list">
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>102nd TOPIK I Listening Paper</h4>
                            <p>Official PDF paper & audio MP3</p>
                        </div>
                        <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-download-sm">PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>96th TOPIK II Solved Paper PDF</h4>
                            <p>Reading, Writing & Answer sheet</p>
                        </div>
                        <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-download-sm">PDF</a>
                    </div>
                    <div class="exam-item-card">
                        <div class="exam-item-info">
                            <h4>91st Official TOPIK Past Set</h4>
                            <p>Complete multi-level test bundle</p>
                        </div>
                        <a href="https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv" target="_blank" class="btn-download-sm">PDF</a>
                    </div>
                </div>

                <!-- Callout Banner to Master Collection Page -->
                <div class="master-hub-callout-card" style="margin-top: 18px; padding: 14px; background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; text-align: center;">
                    <strong style="font-size: 0.88rem; color: #1e3a8a; display: block; margin-bottom: 6px;">Looking for all 156 Past Papers?</strong>
                    <a href="/korean-exam-paper-master-collection" class="btn-primary-action" style="font-size: 0.8rem; padding: 8px 12px; display: inline-block;">Access Master Archive Hub ▶</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Include Pro Paywall Modal Popup -->
<?php require_once __DIR__ . '/paywall-modal.php'; ?>
