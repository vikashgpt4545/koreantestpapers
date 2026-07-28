/**
 * koreantestpapers.in - Interactive Live Test, Mobile Menu & Question Bank Search Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initLiveTestModule();
    initSearchFilter();
    initQuestionBankSearch();
});

// Mobile Hamburger Menu Toggle Logic
function initMobileMenu() {
    const menuToggle = document.getElementById('mobileMenuToggle');
    const siteNav = document.getElementById('siteNav');

    if (!menuToggle || !siteNav) return;

    menuToggle.addEventListener('click', function () {
        siteNav.classList.toggle('mobile-active');
        if (siteNav.classList.contains('mobile-active')) {
            this.textContent = '✕';
        } else {
            this.textContent = '☰';
        }
    });

    // Close mobile menu when clicking any nav link
    const navLinks = siteNav.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            siteNav.classList.remove('mobile-active');
            if (menuToggle) menuToggle.textContent = '☰';
        });
    });
}

// Live CBT Test State
let currentQuestionIndex = 0;
let userScore = 0;
let selectedOption = null;

function initLiveTestModule() {
    const optionBtns = document.querySelectorAll('.quiz-option-btn');
    const submitBtn = document.getElementById('btnSubmitAnswer');
    const nextBtn = document.getElementById('btnNextQuestion');
    const questionText = document.getElementById('liveQuestionText');
    const explanationBox = document.getElementById('liveExplanationBox');
    const timerDisplay = document.getElementById('liveTimerDisplay');

    if (!optionBtns.length) return;

    // Handle Option Selection
    optionBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            optionBtns.forEach(b => b.classList.remove('selected'));
            this.classList.add('selected');
            selectedOption = this.getAttribute('data-option');
            if (submitBtn) submitBtn.disabled = false;
        });
    });

    // Handle Answer Submission
    if (submitBtn) {
        submitBtn.addEventListener('click', function () {
            if (!selectedOption) {
                alert('Please select an option to submit!');
                return;
            }

            const currentQ = window.liveQuestions ? window.liveQuestions[currentQuestionIndex] : null;
            const correctOpt = currentQ ? currentQ.correct_option : 'A';
            const explanation = currentQ ? currentQ.explanation : 'Correct answer verified.';

            optionBtns.forEach(btn => {
                const optVal = btn.getAttribute('data-option');
                if (optVal === correctOpt) {
                    btn.style.backgroundColor = '#dcfce7';
                    btn.style.borderColor = '#16a34a';
                    btn.style.color = '#15803d';
                } else if (optVal === selectedOption && optVal !== correctOpt) {
                    btn.style.backgroundColor = '#fee2e2';
                    btn.style.borderColor = '#dc2626';
                    btn.style.color = '#b91c1c';
                }
            });

            if (selectedOption === correctOpt) {
                userScore += 10;
            }

            if (explanationBox) {
                explanationBox.style.display = 'block';
                explanationBox.innerHTML = `<strong>Explanation:</strong> ${explanation}`;
            }

            this.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'inline-block';
        });
    }

    // Handle Next Question
    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            if (!window.liveQuestions || window.liveQuestions.length === 0) return;

            currentQuestionIndex = (currentQuestionIndex + 1) % window.liveQuestions.length;
            const q = window.liveQuestions[currentQuestionIndex];

            // Reset UI
            selectedOption = null;
            if (questionText) questionText.textContent = q.question_text;
            
            const opts = document.querySelectorAll('.quiz-option-btn');
            if (opts.length >= 4) {
                opts[0].querySelector('.opt-text').textContent = q.option_a;
                opts[1].querySelector('.opt-text').textContent = q.option_b;
                opts[2].querySelector('.opt-text').textContent = q.option_c;
                opts[3].querySelector('.opt-text').textContent = q.option_d;

                opts.forEach(b => {
                    b.classList.remove('selected');
                    b.style.backgroundColor = '#ffffff';
                    b.style.borderColor = '#e2e8f0';
                    b.style.color = '#0f172a';
                });
            }

            if (explanationBox) explanationBox.style.display = 'none';
            if (submitBtn) {
                submitBtn.style.display = 'inline-block';
                submitBtn.disabled = true;
            }
            this.style.display = 'none';
        });
    }

    // Live Countdown Timer Simulation (25:00 min)
    let secondsLeft = 1500;
    setInterval(() => {
        if (!timerDisplay) return;
        secondsLeft--;
        if (secondsLeft <= 0) secondsLeft = 1500;
        const mins = Math.floor(secondsLeft / 60);
        const secs = secondsLeft % 60;
        timerDisplay.textContent = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    }, 1000);
}

// Live Search Filter for Master Exam Download Table
function initSearchFilter() {
    const searchInput = document.getElementById('searchExamPapersInput');
    if (!searchInput) return;

    searchInput.addEventListener('input', function () {
        const filter = this.value.toLowerCase().trim();
        const tableRows = document.querySelectorAll('.responsive-table tbody tr');

        tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(filter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
}

// Dedicated Real-Time Question Bank Search & Filter Widget Logic
function initQuestionBankSearch() {
    const qSearchInput = document.getElementById('questionBankSearchInput');
    if (!qSearchInput) return;

    qSearchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        const qCards = document.querySelectorAll('.qbank-search-item');

        qCards.forEach(card => {
            const text = card.textContent.toLowerCase();
            if (text.includes(query)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
}

/* Tab Switcher Logic */
function switchHeroTab(tabId, btnElement) {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-content-panel').forEach(panel => {
        panel.classList.remove('active');
        panel.style.display = 'none';
    });

    const activePanel = document.getElementById(tabId);
    if (activePanel) {
        activePanel.classList.add('active');
        activePanel.style.display = 'block';
    }

    if (btnElement) {
        btnElement.classList.add('active');
    } else if (window.event && window.event.target) {
        window.event.target.classList.add('active');
    }
}

/* Hangul & Vocab Flashcard Mechanics */
const vocabList = [
    { kor: '안전모', eng: 'Safety Helmet', cat: 'Factory Safety' },
    { kor: '스패너', eng: 'Spanner / Wrench', cat: 'Hand Tools' },
    { kor: '손대지 마시오', eng: 'Do Not Touch', cat: 'Safety Signboard' },
    { kor: '의사', eng: 'Doctor', cat: 'Occupations' },
    { kor: '일어납니다', eng: 'To Wake Up', cat: 'Daily Verbs' },
    { kor: '안녕하세요', eng: 'Hello / Greetings', cat: 'Daily Conversation' },
    { kor: '감사합니다', eng: 'Thank You', cat: 'Polite Expressions' },
    { kor: '비상구', eng: 'Emergency Exit', cat: 'Safety Signboard' },
    { kor: '감전 주의', eng: 'Electric Shock Warning', cat: 'Workplace Safety' },
    { kor: '장갑', eng: 'Protective Gloves', cat: 'Safety Gear' },
    { kor: '망치', eng: 'Hammer', cat: 'Hand Tools' },
    { kor: '소화기', eng: 'Fire Extinguisher', cat: 'Emergency Tools' },
    { kor: '병원', eng: 'Hospital', cat: 'Essential Places' }
];
let currentVocabIdx = 0;

function nextVocabCard() {
    currentVocabIdx = (currentVocabIdx + 1) % vocabList.length;
    const item = vocabList[currentVocabIdx];
    document.querySelector('.flashcard-category').textContent = item.cat;
    document.getElementById('fcKorean').textContent = item.kor;
    document.getElementById('fcEnglish').textContent = item.eng;
}

function speakKorean(text) {
    if (!text) return;
    text = text.replace(/🔊/g, '').trim();
    if (!text) return;

    try {
        const audio = new Audio('https://api.streamelements.com/kappa/v2/speech?voice=Seoyeon&text=' + encodeURIComponent(text));
        const playPromise = audio.play();
        if (playPromise !== undefined) {
            playPromise.catch(() => {
                useSpeechSynthesisFallback(text);
            });
        }
    } catch (e) {
        useSpeechSynthesisFallback(text);
    }
}

function useSpeechSynthesisFallback(text) {
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'ko-KR';
        utterance.rate = 0.85;
        window.speechSynthesis.speak(utterance);
    }
}

function playHangulSound(char, name) {
    speakKorean(char);
}

function speakCurrentVocab() {
    const item = vocabList[currentVocabIdx];
    if (item && item.kor) {
        speakKorean(item.kor);
    } else {
        const korElem = document.getElementById('fcKorean');
        if (korElem) speakKorean(korElem.textContent);
    }
}

function toggleModuleBox(boxId, btn) {
    const content = document.getElementById(boxId);
    if (!content) return;
    if (content.style.display === 'none') {
        content.style.display = 'block';
        btn.textContent = '− Minimize';
        btn.style.background = '#334155';
    } else {
        content.style.display = 'none';
        btn.textContent = '+ Maximize';
        btn.style.background = '#2563eb';
    }
}

/* Game Mechanics & Paywall Trial Limit (5 Questions / Level 1 Limit) */
const gameQuestionBank = [
    {
        kor: "의사",
        eng: "Doctor",
        opts: ["A. Doctor", "B. Teacher", "C. Police Officer", "D. Chef"],
        ans: "A. Doctor"
    },
    {
        kor: "안전모",
        eng: "Safety Helmet",
        opts: ["A. Safety Helmet", "B. Safety Glasses", "C. Safety Boots", "D. Gloves"],
        ans: "A. Safety Helmet"
    },
    {
        kor: "손대지 마시오",
        eng: "Do Not Touch",
        opts: ["A. No Smoking", "B. Do Not Touch", "C. High Voltage Danger", "D. Emergency Exit"],
        ans: "B. Do Not Touch"
    },
    {
        kor: "스패너",
        eng: "Spanner / Wrench",
        opts: ["A. Hammer", "B. Screwdriver", "C. Spanner / Wrench", "D. Hand Saw"],
        ans: "C. Spanner / Wrench"
    },
    {
        kor: "사과",
        eng: "Apple",
        opts: ["A. Apple", "B. Banana", "C. Grape", "D. Watermelon"],
        ans: "A. Apple"
    }
];

let currentGameIdx = 0;
let gameAnswerCount = 0;
let gameCurrentScore = 0;
const gameMaxFreeQuestions = 5;

function renderCurrentGameQuestion() {
    const q = gameQuestionBank[currentGameIdx % gameQuestionBank.length];
    const qArea = document.getElementById('gameQuestionText');
    const qGrid = document.getElementById('gameOptionsGrid');

    if (qArea) {
        qArea.innerHTML = `What is the English / Hindi meaning of Korean word: <strong style="color: #60a5fa; font-size: 1.3rem;">"${q.kor}"</strong>?`;
    }

    if (qGrid) {
        qGrid.innerHTML = q.opts.map(opt => `
            <button class="game-opt-btn" onclick="checkGameAnswer('${opt.replace(/'/g, "\\'")}')">${opt}</button>
        `).join('');
    }
}

function checkGameAnswer(chosen) {
    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true' || localStorage.getItem('koreanTestProAccess') === 'true';

    gameAnswerCount++;
    if (gameAnswerCount >= gameMaxFreeQuestions && !isPro) {
        openProModal();
        return;
    }

    const currentQ = gameQuestionBank[currentGameIdx % gameQuestionBank.length];
    if (chosen === currentQ.ans) {
        gameCurrentScore += 10;
        alert(`✅ Correct Answer! [${currentQ.kor}] = ${currentQ.eng} (+10 Points)`);
    } else {
        alert(`❌ Incorrect! Correct answer for "${currentQ.kor}" was: ${currentQ.ans}`);
    }

    const scoreEl = document.getElementById('gameScore');
    const countEl = document.getElementById('gameQCount');
    if (scoreEl) scoreEl.textContent = gameCurrentScore;
    if (countEl) countEl.textContent = `${gameAnswerCount + 1} / 5`;

    currentGameIdx++;
    renderCurrentGameQuestion();
}

function selectGameMode(mode, btnElement) {
    document.querySelectorAll('.game-mode-btn').forEach(btn => btn.classList.remove('active'));
    if (btnElement) {
        btnElement.classList.add('active');
    } else if (window.event && window.event.target) {
        window.event.target.classList.add('active');
    }

    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true' || localStorage.getItem('koreanTestProAccess') === 'true';
    if ((mode === 'signboard' || mode === 'audio') && !isPro) {
        openProModal();
        return;
    }
    
    currentGameIdx = 0;
    renderCurrentGameQuestion();
}

/* Pro Paywall Modal Functions */
function openProModal() {
    const modal = document.getElementById('proPaywallModal');
    if (modal) modal.style.display = 'flex';
}

function closeProModal() {
    const modal = document.getElementById('proPaywallModal');
    if (modal) modal.style.display = 'none';
}

function selectPassPlan(planId, priceUSD) {
    window.location.href = `/subscription?plan=${planId}&price=${priceUSD}`;
}

function checkProAccessForNotes() {
    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true' || localStorage.getItem('koreanTestProAccess') === 'true';
    if (!isPro) {
        openProModal();
    } else {
        alert('🔓 Pro Note Unlocked! Downloading High-Yield Study Guide...');
    }
}

