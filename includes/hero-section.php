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
                            <div class="note-card-info">
                                <h4>1000 High-Yield EPS TOPIK Workplace Vocab</h4>
                                <p>Complete English & Hindi dictionary for factory work</p>
                            </div>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                        <div class="note-card-item">
                            <div class="note-card-info">
                                <h4>Complete Korean Grammar Particles Cheatsheet</h4>
                                <p>Master -은/는, -이/가, -을/를, -아/어서 rules in 10 minutes</p>
                            </div>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                        <div class="note-card-item">
                            <div class="note-card-info">
                                <h4>Industrial Safety Signboard Reference Guide</h4>
                                <p>High-resolution diagrams of all 50 HRD Korea warning signs</p>
                            </div>
                            <button onclick="checkProAccessForNotes()" class="btn-download-sm">View Notes</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN (30% Width — Master Archive Portal Hub Banner) -->
            <div class="hero-right-box-30">
                <div class="box-title-header" style="margin-bottom: 12px;">
                    <h3 style="color: #0f172a !important; font-size: 1.15rem; font-weight: 800; margin: 0;">📥 Free Exam Papers PDF</h3>
                    <span class="tag-badge green">100% Free Archive</span>
                </div>
                
                <p style="font-size: 0.85rem; color: #475569 !important; line-height: 1.5; margin-bottom: 16px;">
                    Access all official <strong>156+ Korean Test Papers</strong>, solved <strong>Korean Exam Paper</strong> PDFs, answer keys, and listening audio files directly from Google Drive.
                </p>

                <!-- Master Archive Stats Feature List -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px; margin-bottom: 16px;">
                    <div style="font-size: 0.85rem; color: #1e293b !important; font-weight: 700; margin-bottom: 8px;">
                        ✨ Master Archive Contents:
                    </div>
                    <ul style="font-size: 0.8rem; color: #475569 !important; padding-left: 18px; margin: 0; line-height: 1.6;">
                        <li>2015 – 2025 EPS TOPIK Reading & Listening</li>
                        <li>TOPIK I & II Full Model Practice Bundles</li>
                        <li>HRD Korea 2000 Question Bank</li>
                        <li>1-Click Direct Google Drive Cloud Access</li>
                    </ul>
                </div>

                <!-- Primary CTA Banner Button -->
                <div style="text-align: center;">
                    <a href="/korean-exam-paper-master-collection" class="btn-primary-action" style="display: block; width: 100%; text-align: center; padding: 12px 16px; font-size: 0.9rem; font-weight: 800; background: #2563eb; color: #ffffff !important; border-radius: 6px; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);">
                        Access Master Archive Hub (156 Papers) ▶
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Include Pro Paywall Modal Popup -->
<?php require_once __DIR__ . '/paywall-modal.php'; ?>
