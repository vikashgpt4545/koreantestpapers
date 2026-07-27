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
function switchHeroTab(tabId) {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-content-panel').forEach(panel => panel.classList.remove('active'));

    const activePanel = document.getElementById(tabId);
    if (activePanel) activePanel.classList.add('active');

    // Set active button
    event.target.classList.add('active');
}

/* Hangul & Vocab Flashcard Mechanics */
const vocabList = [
    { kor: '안전모', eng: 'Safety Helmet (सुरक्षा पेटी)', cat: 'Factory Safety' },
    { kor: '스패너', eng: 'Spanner / Wrench (पाना)', cat: 'Hand Tools' },
    { kor: '손대지 마시오', eng: 'Do Not Touch (छूना मना है)', cat: 'Safety Signboard' },
    { kor: '의사', eng: 'Doctor (डॉक्टर)', cat: 'Occupations' },
    { kor: '일어납니다', eng: 'Wake Up (उठना)', cat: 'Daily Verbs' }
];
let currentVocabIdx = 0;

function nextVocabCard() {
    currentVocabIdx = (currentVocabIdx + 1) % vocabList.length;
    const item = vocabList[currentVocabIdx];
    document.querySelector('.flashcard-category').textContent = item.cat;
    document.getElementById('fcKorean').textContent = item.kor;
    document.getElementById('fcEnglish').textContent = item.eng;
}

function playHangulSound(char, name) {
    alert(`Pronunciation: [${char}] - ${name}`);
}

/* Game Mechanics & Paywall Trial Limit (5 Questions / Level 1 Limit) */
let gameAnswerCount = 0;
let gameCurrentScore = 0;
const gameMaxFreeQuestions = 5;

function checkGameAnswer(chosen) {
    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true';

    gameAnswerCount++;
    if (gameAnswerCount >= gameMaxFreeQuestions && !isPro) {
        openProModal();
        return;
    }

    if (chosen === '의사') {
        gameCurrentScore += 10;
        alert('✅ Correct Answer! +10 Points');
    } else {
        alert('❌ Incorrect! Correct option was 의사 (Doctor)');
    }

    document.getElementById('gameScore').textContent = gameCurrentScore;
    document.getElementById('gameQCount').textContent = `${gameAnswerCount + 1} / 5`;
}

function selectGameMode(mode) {
    document.querySelectorAll('.game-mode-btn').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true';
    if ((mode === 'signboard' || mode === 'audio') && !isPro) {
        openProModal();
    }
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
    const isPro = localStorage.getItem('koreantestpapers_pro') === 'true';
    if (!isPro) {
        openProModal();
    } else {
        alert('🔓 Pro Note Unlocked! Downloading High-Yield Study Guide...');
    }
}

