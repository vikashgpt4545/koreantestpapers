/**
 * koreantestpapers.in - Interactive Live Test & Question Bank Search Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    initLiveTestModule();
    initSearchFilter();
    initQuestionBankSearch();
});

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
