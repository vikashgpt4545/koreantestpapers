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
let cbtTimerInterval = null;
let cbtTimeRemainingSeconds = 25 * 60;
let selectedOption = null;
let cbtQuestionsAnsweredCount = 0;

function setCbtExamTimer(minutes) {
    const mins = parseInt(minutes, 10) || 25;
    cbtTimeRemainingSeconds = mins * 60;
    
    const display = document.getElementById('liveTimerDisplay');
    if (display) {
        const m = Math.floor(cbtTimeRemainingSeconds / 60);
        const s = cbtTimeRemainingSeconds % 60;
        display.textContent = `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
    }

    clearInterval(cbtTimerInterval);
    cbtTimerInterval = setInterval(() => {
        if (cbtTimeRemainingSeconds > 0) {
            cbtTimeRemainingSeconds--;
            const m = Math.floor(cbtTimeRemainingSeconds / 60);
            const s = cbtTimeRemainingSeconds % 60;
            if (display) display.textContent = `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
        } else {
            clearInterval(cbtTimerInterval);
            if (display) display.textContent = '00:00 - Time Up!';
        }
    }, 1000);
}

function initLiveTestModule() {
    const optionBtns = document.querySelectorAll('.quiz-option-btn');
    const submitBtn = document.getElementById('btnSubmitAnswer');
    const nextBtn = document.getElementById('btnNextQuestion');
    const questionText = document.getElementById('liveQuestionText');
    const explanationBox = document.getElementById('liveExplanationBox');
    const timerDisplay = document.getElementById('liveTimerDisplay');

    if (!optionBtns.length) return;

    // Handle Option Selection with explicit active/selected styling
    optionBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            optionBtns.forEach(b => {
                b.classList.remove('selected');
                b.style.background = '#0f172a';
                b.style.borderColor = '#334155';
                b.style.color = '#ffffff';
            });
            this.classList.add('selected');
            this.style.background = '#1e3a8a';
            this.style.borderColor = '#2563eb';
            this.style.color = '#ffffff';
            selectedOption = this.getAttribute('data-option');
            
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                submitBtn.style.cursor = 'pointer';
                submitBtn.style.background = '#2563eb';
            }
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
            const explanation = currentQ ? currentQ.explanation : 'Correct answer verified by HRD Korea guidelines.';

            optionBtns.forEach(btn => {
                const optVal = btn.getAttribute('data-option');
                if (optVal === correctOpt) {
                    btn.style.setProperty('background', '#059669', 'important');
                    btn.style.setProperty('border-color', '#059669', 'important');
                    btn.style.setProperty('color', '#ffffff', 'important');
                } else if (optVal === selectedOption && optVal !== correctOpt) {
                    btn.style.setProperty('background', '#dc2626', 'important');
                    btn.style.setProperty('border-color', '#dc2626', 'important');
                    btn.style.setProperty('color', '#ffffff', 'important');
                }
            });

            if (explanationBox) {
                explanationBox.style.display = 'block';
                explanationBox.style.background = '#1e293b';
                explanationBox.style.border = '1px solid #334155';
                explanationBox.style.color = '#93c5fd';
                explanationBox.innerHTML = `<strong>Explanation:</strong> ${explanation}`;
            }

            cbtQuestionsAnsweredCount++;
            this.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'inline-block';
        });
    }

    // Handle Next Question with strict 3-Question Paywall Limit
    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            const hasAccess = window.userSession && (window.userSession.isPro || window.userSession.isTrial);
            
            if (!hasAccess && cbtQuestionsAnsweredCount >= 3) {
                const cbtCardBox = document.querySelector('#cbtTab .quiz-card-box');
                const actionBar = document.querySelector('#cbtTab .quiz-action-bar');

                if (cbtCardBox) {
                    cbtCardBox.style.background = '#1e293b';
                    cbtCardBox.style.border = '1px solid #f59e0b';
                    cbtCardBox.innerHTML = `
                        <div style="text-align: center; padding: 20px 10px;">
                            <div style="font-size: 2.2rem; margin-bottom: 6px;">🎁</div>
                            <div style="font-size: 0.85rem; color: #f59e0b; font-weight: 700; text-transform: uppercase; margin-bottom: 4px;">Free Teaser Preview Limit Reached (3/3 Questions)</div>
                            <div style="font-size: 1.1rem; color: #ffffff; font-weight: 800; margin-bottom: 6px;">Start Your 5-Day Free Trial</div>
                            <p style="font-size: 0.82rem; color: #94a3b8; margin-bottom: 14px;">Create a free candidate account to instantly unlock unlimited CBT mock test practice & interactive games for 5 full days!</p>
                            <button onclick="openAuthModal('register')" class="btn-primary-action" style="padding: 10px 20px; font-size: 0.88rem; font-weight: 800; background: #059669; color: #ffffff; border-radius: 6px; border: none; cursor: pointer;">
                                🎁 Start 5-Day Free Trial (Create Account) ▶
                            </button>
                        </div>
                    `;
                }

                if (actionBar) actionBar.style.display = 'none';
                if (typeof openAuthModal === 'function') openAuthModal('register');
                return;
            }

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
                    b.style.background = '#0f172a';
                    b.style.borderColor = '#334155';
                    b.style.color = '#ffffff';
                });
            }

            if (explanationBox) explanationBox.style.display = 'none';
            if (submitBtn) {
                submitBtn.style.display = 'inline-block';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.6';
                submitBtn.style.cursor = 'not-allowed';
                submitBtn.style.background = '#334155';
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

/* Hangul & Vocab Flashcard Mechanics (100+ EPS-TOPIK Words Deck) */
const vocabList = [
    // Factory Safety & Gear
    { kor: '안전모', eng: 'Safety Helmet', cat: 'Factory Safety' },
    { kor: '안전화', eng: 'Safety Boots / Steel-Toe Shoes', cat: 'Factory Safety' },
    { kor: '안전장갑', eng: 'Protective Safety Gloves', cat: 'Factory Safety' },
    { kor: '보안경', eng: 'Safety Goggles / Glasses', cat: 'Factory Safety' },
    { kor: '마스크', eng: 'Dust Respirator Mask', cat: 'Factory Safety' },
    { kor: '귀마개', eng: 'Earplugs / Noise Protectors', cat: 'Factory Safety' },
    { kor: '안전대', eng: 'Safety Harness / Belt', cat: 'Factory Safety' },
    { kor: '소화기', eng: 'Fire Extinguisher', cat: 'Emergency Equipment' },
    { kor: '비상구', eng: 'Emergency Exit', cat: 'Safety Signboard' },
    { kor: '구급함', eng: 'First Aid Kit', cat: 'Emergency Equipment' },
    { kor: '붕대', eng: 'Medical Bandage / Dressing', cat: 'First Aid Supplies' },

    // Safety Signs & Warnings
    { kor: '손대지 마시오', eng: 'Do Not Touch (Danger)', cat: 'Safety Signboard' },
    { kor: '감전 주의', eng: 'Electric Shock Warning', cat: 'Safety Signboard' },
    { kor: '낙하물 주의', eng: 'Falling Objects Danger', cat: 'Safety Signboard' },
    { kor: '화기 엄금', eng: 'No Flammable Materials / No Fire', cat: 'Safety Signboard' },
    { kor: '관계자 외 출입금지', eng: 'Authorized Personnel Only', cat: 'Safety Signboard' },
    { kor: '조심하십시오', eng: 'Caution / Be Careful', cat: 'Workplace Warnings' },
    { kor: '위험', eng: 'Danger / Hazard', cat: 'Workplace Warnings' },
    { kor: '금연', eng: 'No Smoking Area', cat: 'Safety Signboard' },
    { kor: '보호구 착용', eng: 'Wear Protective Equipment', cat: 'Safety Rules' },

    // Hand Tools & Construction Equipment
    { kor: '망치', eng: 'Hammer', cat: 'Hand Tools' },
    { kor: '스패너', eng: 'Spanner / Wrench', cat: 'Hand Tools' },
    { kor: '드라이버', eng: 'Screwdriver', cat: 'Hand Tools' },
    { kor: '펜치', eng: 'Pliers / Cutting Pliers', cat: 'Hand Tools' },
    { kor: '줄자', eng: 'Measuring Tape', cat: 'Measuring Tools' },
    { kor: '톱', eng: 'Hand Saw', cat: 'Cutting Tools' },
    { kor: '수평대', eng: 'Bubble Spirit Level', cat: 'Measuring Tools' },
    { kor: '볼트', eng: 'Bolt', cat: 'Fasteners' },
    { kor: '너트', eng: 'Nut', cat: 'Fasteners' },
    { kor: '못', eng: 'Nail', cat: 'Fasteners' },
    { kor: '사다리', eng: 'Ladder', cat: 'Work Tools' },
    { kor: '전동 드릴', eng: 'Electric Drill Machine', cat: 'Power Tools' },
    { kor: '절단기', eng: 'Cutting Machine / Grinder', cat: 'Power Tools' },
    { kor: '용접기', eng: 'Welding Machine', cat: 'Heavy Tools' },
    { kor: '지게차', eng: 'Forklift Vehicle', cat: 'Heavy Machinery' },
    { kor: '크레인', eng: 'Crane / Hoist', cat: 'Heavy Machinery' },
    { kor: '손수레', eng: 'Hand Cart / Wheelbarrow', cat: 'Transport Gear' },
    { kor: '밧줄', eng: 'Heavy Rope / Cable', cat: 'Workplace Materials' },

    // Workplace Actions & Operations
    { kor: '일하다', eng: 'To Work / Execute Job', cat: 'Workplace Action' },
    { kor: '쉬다', eng: 'To Take a Break / Rest', cat: 'Workplace Action' },
    { kor: '고치다', eng: 'To Repair / Fix Equipment', cat: 'Workplace Action' },
    { kor: '수리하다', eng: 'To Overhaul / Repair', cat: 'Workplace Action' },
    { kor: '운반하다', eng: 'To Carry / Transport Freight', cat: 'Workplace Action' },
    { kor: '포장하다', eng: 'To Pack / Wrap Goods', cat: 'Workplace Action' },
    { kor: '조립하다', eng: 'To Assemble / Put Together', cat: 'Workplace Action' },
    { kor: '분해하다', eng: 'To Disassemble / Take Apart', cat: 'Workplace Action' },
    { kor: '자르다', eng: 'To Cut / Trim Material', cat: 'Workplace Action' },
    { kor: '구부리다', eng: 'To Bend / Shape Metal', cat: 'Workplace Action' },
    { kor: '용접하다', eng: 'To Weld / Join Metals', cat: 'Workplace Action' },
    { kor: '청소하다', eng: 'To Clean / Tidy Workshop', cat: 'Maintenance' },
    { kor: '점검하다', eng: 'To Inspect / Check Safety', cat: 'Maintenance' },

    // Everyday Verbs
    { kor: '일어나다', eng: 'To Wake Up / Get Up', cat: 'Daily Verbs' },
    { kor: '자다', eng: 'To Sleep / Go to Bed', cat: 'Daily Verbs' },
    { kor: '먹다', eng: 'To Eat', cat: 'Daily Verbs' },
    { kor: '마시다', eng: 'To Drink', cat: 'Daily Verbs' },
    { kor: '가다', eng: 'To Go', cat: 'Daily Verbs' },
    { kor: '오다', eng: 'To Come', cat: 'Daily Verbs' },
    { kor: '사다', eng: 'To Buy / Purchase', cat: 'Daily Verbs' },
    { kor: '팔다', eng: 'To Sell', cat: 'Daily Verbs' },
    { kor: '만들다', eng: 'To Produce / Make', cat: 'Daily Verbs' },
    { kor: '운전하다', eng: 'To Drive Vehicle', cat: 'Daily Verbs' },
    { kor: '씻다', eng: 'To Wash Hands / Body', cat: 'Daily Verbs' },
    { kor: '전화하다', eng: 'To Make Phone Call', cat: 'Daily Verbs' },
    { kor: '공부하다', eng: 'To Study / Learn', cat: 'Daily Verbs' },
    { kor: '기다리다', eng: 'To Wait', cat: 'Daily Verbs' },
    { kor: '도와주다', eng: 'To Help / Assist', cat: 'Daily Verbs' },

    // Factory Nouns & Roles
    { kor: '공장', eng: 'Factory / Manufacturing Plant', cat: 'Workplace Terms' },
    { kor: '작업장', eng: 'Workshop / Workplace Area', cat: 'Workplace Terms' },
    { kor: '창고', eng: 'Warehouse / Storage Room', cat: 'Workplace Terms' },
    { kor: '사무실', eng: 'Administrative Office', cat: 'Workplace Terms' },
    { kor: '기숙사', eng: 'Dormitory / Living Quarters', cat: 'Workplace Terms' },
    { kor: '식당', eng: 'Cafeteria / Dining Hall', cat: 'Workplace Terms' },
    { kor: '화장실', eng: 'Restroom / Washroom', cat: 'Workplace Terms' },
    { kor: '사장님', eng: 'Company Director / Owner', cat: 'Workplace Roles' },
    { kor: '반장님', eng: 'Workplace Supervisor / Foreman', cat: 'Workplace Roles' },
    { kor: '동료', eng: 'Co-worker / Colleague', cat: 'Workplace Roles' },
    { kor: '월급', eng: 'Monthly Salary / Wages', cat: 'Labor Terms' },
    { kor: '출근', eng: 'Arrival at Work / Punching In', cat: 'Labor Terms' },
    { kor: '퇴근', eng: 'Leaving Work / Punching Out', cat: 'Labor Terms' },
    { kor: '잔업', eng: 'Overtime Shift Work', cat: 'Labor Terms' },
    { kor: '휴일', eng: 'Holiday / Day Off', cat: 'Labor Terms' },

    // Places & Transportation
    { kor: '병원', eng: 'Hospital / Medical Clinic', cat: 'Essential Places' },
    { kor: '약국', eng: 'Pharmacy / Drugstore', cat: 'Essential Places' },
    { kor: '은행', eng: 'Bank', cat: 'Essential Places' },
    { kor: '우체국', eng: 'Post Office', cat: 'Essential Places' },
    { kor: '마트', eng: 'Supermarket / Grocery Mart', cat: 'Essential Places' },
    { kor: '버스', eng: 'City / Express Bus', cat: 'Transportation' },
    { kor: '지하철', eng: 'Subway Train System', cat: 'Transportation' },
    { kor: '택시', eng: 'Taxi / Cab', cat: 'Transportation' },
    { kor: '기차', eng: 'Train / Railway', cat: 'Transportation' },
    { kor: '비행기', eng: 'Airplane / Flight', cat: 'Transportation' },

    // Useful Adjectives
    { kor: '크다', eng: 'Big / Large in Size', cat: 'Adjectives' },
    { kor: '작다', eng: 'Small / Compact in Size', cat: 'Adjectives' },
    { kor: '빠르다', eng: 'Fast / Quick Speed', cat: 'Adjectives' },
    { kor: '느리다', eng: 'Slow Speed', cat: 'Adjectives' },
    { kor: '무겁다', eng: 'Heavy Weight', cat: 'Adjectives' },
    { kor: '가볍다', eng: 'Light Weight', cat: 'Adjectives' },
    { kor: '뜨겁다', eng: 'Hot Temperature', cat: 'Adjectives' },
    { kor: '차갑다', eng: 'Cold Temperature', cat: 'Adjectives' },
    { kor: '깨끗하다', eng: 'Clean / Spotless', cat: 'Adjectives' },
    { kor: '더럽다', eng: 'Dirty / Unclean', cat: 'Adjectives' },
    { kor: '바쁘다', eng: 'Busy / Occupied', cat: 'Adjectives' },
    { kor: '피곤하다', eng: 'Tired / Exhausted', cat: 'Adjectives' },

    // Time & Days
    { kor: '오늘', eng: 'Today', cat: 'Time & Calendar' },
    { kor: '내일', eng: 'Tomorrow', cat: 'Time & Calendar' },
    { kor: '어제', eng: 'Yesterday', cat: 'Time & Calendar' },
    { kor: '지금', eng: 'Now / Right At This Moment', cat: 'Time & Calendar' },
    { kor: '시간', eng: 'Time / Hours', cat: 'Time & Calendar' },
    { kor: '주말', eng: 'Weekend (Saturday & Sunday)', cat: 'Time & Calendar' },
    { kor: '월요일', eng: 'Monday', cat: 'Days of the Week' },
    { kor: '화요일', eng: 'Tuesday', cat: 'Days of the Week' },
    { kor: '수요일', eng: 'Wednesday', cat: 'Days of the Week' },
    { kor: '목요일', eng: 'Thursday', cat: 'Days of the Week' },
    { kor: '금요일', eng: 'Friday', cat: 'Days of the Week' },
    { kor: '토요일', eng: 'Saturday', cat: 'Days of the Week' },
    { kor: '일요일', eng: 'Sunday', cat: 'Days of the Week' }
];

let currentVocabLinearIndex = 0;
let currentVocabItem = vocabList[0];
let vocabPreviewCount = 0;

function nextVocabCard() {
    if (!vocabList || vocabList.length === 0) return;
    
    const hasAccess = window.userSession && (window.userSession.isPro || window.userSession.isTrial);
    vocabPreviewCount++;

    if (!hasAccess && vocabPreviewCount >= 3) {
        const flashcardBox = document.getElementById('vocabFlashcard');
        if (flashcardBox) {
            flashcardBox.style.background = '#1e293b';
            flashcardBox.style.border = '1px solid #f59e0b';
            flashcardBox.innerHTML = `
                <div style="text-align: center; padding: 16px 8px;">
                    <div style="font-size: 2.2rem; margin-bottom: 6px;">🎁</div>
                    <div style="font-size: 0.85rem; color: #f59e0b; font-weight: 700; text-transform: uppercase; margin-bottom: 4px;">Free Teaser Preview Limit Reached (3/3 Words)</div>
                    <div style="font-size: 1.05rem; color: #ffffff; font-weight: 800; margin-bottom: 6px;">Start Your 5-Day Free Trial</div>
                    <p style="font-size: 0.82rem; color: #94a3b8; margin-bottom: 14px;">Create a free candidate account to unlock complete workplace vocabulary, flashcards & audio lessons!</p>
                    <button onclick="openAuthModal('register')" class="btn-primary-action" style="padding: 10px 20px; font-size: 0.88rem; font-weight: 800; background: #059669; color: #ffffff; border-radius: 6px; border: none; cursor: pointer;">
                        🎁 Start 5-Day Free Trial (Create Account) ▶
                    </button>
                </div>
            `;
        }
        if (typeof openAuthModal === 'function') {
            openAuthModal('register');
        }
        return;
    }

    currentVocabLinearIndex = (currentVocabLinearIndex + 1) % vocabList.length;
    currentVocabItem = vocabList[currentVocabLinearIndex];
    updateVocabCardDisplay();
}

function prevVocabCard() {
    if (!vocabList || vocabList.length === 0) return;
    
    currentVocabLinearIndex = (currentVocabLinearIndex - 1 + vocabList.length) % vocabList.length;
    currentVocabItem = vocabList[currentVocabLinearIndex];
    updateVocabCardDisplay();
}

function updateVocabCardDisplay() {
    if (!currentVocabItem) return;
    const totalWords = vocabList.length;
    const currentNum = currentVocabLinearIndex + 1;

    const catElems = document.querySelectorAll('.flashcard-category');
    const korElems = document.querySelectorAll('#fcKorean');
    const engElems = document.querySelectorAll('#fcEnglish');

    catElems.forEach(el => el.textContent = `${currentVocabItem.cat} • [Word ${currentNum} of ${totalWords}]`);
    korElems.forEach(el => el.innerHTML = currentVocabItem.kor + ' <span style="font-size: 1.1rem; vertical-align: middle;">🔊</span>');
    engElems.forEach(el => el.textContent = currentVocabItem.eng);
}

function speakCurrentVocab() {
    if (currentVocabItem && currentVocabItem.kor) {
        speakKorean(currentVocabItem.kor);
    } else {
        const korElem = document.getElementById('fcKorean');
        if (korElem) {
            let txt = korElem.textContent.replace(/🔊/g, '').trim();
            speakKorean(txt);
        }
    }
}

function renderMasterVocabTable() {
    const container = document.getElementById('masterVocabGridContainer');
    if (!container || container.children.length > 0) return;
    
    let html = '';
    vocabList.forEach(item => {
        html += `
        <div style="background: #1e293b; border: 1px solid #334155; padding: 10px 12px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: transform 0.15s ease;" onclick="speakKorean('${item.kor.replace(/'/g, "\\'")}')" title="Click to listen">
            <div>
                <div style="color: #60a5fa; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">${item.cat}</div>
                <div style="color: #ffffff; font-weight: 800; font-size: 0.95rem; margin-top: 2px;">${item.kor}</div>
                <div style="color: #cbd5e1; font-size: 0.8rem;">${item.eng}</div>
            </div>
            <div style="background: #0f172a; border: 1px solid #334155; border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; color: #38bdf8; flex-shrink: 0;">🔊</div>
        </div>`;
    });
    container.innerHTML = html;
}

function toggleVocabMasterList() {
    const box = document.getElementById('masterVocabBox');
    const btn = document.getElementById('toggleMasterVocabBtn');
    if (!box) return;
    if (box.style.display === 'none' || !box.style.display) {
        renderMasterVocabTable();
        box.style.display = 'block';
        if (btn) btn.textContent = '▲ Hide All Words List';
    } else {
        box.style.display = 'none';
        if (btn) btn.textContent = '📋 Browse All 125+ Words Master List ▶';
    }
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

/* Dynamic ⚡ Speed Word Match & 🚫 Safety Signboard Puzzle Engine */
const speedMatchVocabBank = [
    { kor: "의사", eng: "Doctor" },
    { kor: "선생님", eng: "Teacher" },
    { kor: "경찰관", eng: "Police Officer" },
    { kor: "요리사", eng: "Chef" },
    { kor: "안전모", eng: "Safety Helmet" },
    { kor: "안전화", eng: "Safety Boots" },
    { kor: "안전장갑", eng: "Safety Gloves" },
    { kor: "손대지 마시오", eng: "Do Not Touch" },
    { kor: "스패너", eng: "Spanner / Wrench" },
    { kor: "드라이버", eng: "Screwdriver" },
    { kor: "망치", eng: "Hammer" },
    { kor: "사과", eng: "Apple" },
    { kor: "바나나", eng: "Banana" },
    { kor: "포도", eng: "Grape" },
    { kor: "수박", eng: "Watermelon" },
    { kor: "병원", eng: "Hospital" },
    { kor: "약국", eng: "Pharmacy" },
    { kor: "공장", eng: "Factory" },
    { kor: "사무실", eng: "Office" },
    { kor: "화장실", eng: "Restroom" },
    { kor: "지하철", eng: "Subway" },
    { kor: "버스", eng: "Bus" },
    { kor: "비행기", eng: "Airplane" },
    { kor: "택시", eng: "Taxi" },
    { kor: "물", eng: "Water" },
    { kor: "밥", eng: "Rice / Meal" },
    { kor: "고기", eng: "Meat" },
    { kor: "빵", eng: "Bread" },
    { kor: "비상구", eng: "Emergency Exit" },
    { kor: "금연", eng: "No Smoking" },
    { kor: "고압 전원", eng: "High Voltage" },
    { kor: "위험", eng: "Danger" },
    { kor: "보안경", eng: "Safety Glasses" },
    { kor: "줄자", eng: "Tape Measure" },
    { kor: "니퍼", eng: "Cutting Pliers" },
    { kor: "절단기", eng: "Cutter / Shear" }
];

const signboardVocabBank = [
    { icon: "🚫", type: "sign", name: "출입 금지 (No Entry)", eng: "No Entry / Prohibited Area" },
    { icon: "🚭", type: "sign", name: "금연 (No Smoking)", eng: "No Smoking Area" },
    { icon: "⚡", type: "sign", name: "고압 전원 위험 (High Voltage Hazard)", eng: "High Voltage Hazard" },
    { icon: "⛑️", type: "sign", name: "안전모 착용 (Wear Safety Helmet)", eng: "Wear Safety Helmet Mandatory" },
    { icon: "🦺", type: "sign", name: "안전복 착용 (Wear Safety Vest)", eng: "Wear Protective Safety Vest" },
    { icon: "👢", type: "sign", name: "안전화 착용 (Wear Safety Boots)", eng: "Wear Safety Boots Mandatory" },
    { icon: "🧤", type: "sign", name: "안전장갑 착용 (Wear Safety Gloves)", eng: "Wear Protective Gloves" },
    { icon: "🧯", type: "sign", name: "소화기 위치 (Fire Extinguisher)", eng: "Fire Extinguisher Location" },
    { icon: "🏃", type: "sign", name: "비상구 대피로 (Emergency Exit)", eng: "Emergency Exit Escape Route" },
    { icon: "☣️", type: "sign", name: "생물학적 위험 (Biohazard Danger)", eng: "Biohazard Warning Sign" },
    { icon: "🛢️", type: "sign", name: "인화성 물질 위험 (Flammable Hazard)", eng: "Flammable Liquid Warning" },
    { icon: "🥽", type: "sign", name: "보안경 착용 (Wear Eye Protection)", eng: "Wear Eye Protection Goggles" },
    { icon: "🔇", type: "sign", name: "소음 주의 (High Noise Area)", eng: "High Noise Danger Zone" },
    { icon: "🛑", type: "sign", name: "일시 정지 (Stop Inspection)", eng: "Stop & Inspect Hazard" }
];

let currentGameIdx = 0;
let gameCurrentScore = 0;
let gameTimerInterval = null;
let gameTimeRemaining = 60;
let isGameProcessing = false;
let currentQuestionObj = null;
let currentActiveGameMode = 'speed';

function shuffleArray(array) {
    const arr = [...array];
    for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    return arr;
}

let lastPickedTargetIdx = -1;

function generateDynamicQuestion() {
    const bank = (currentActiveGameMode === 'signboard') ? signboardVocabBank : speedMatchVocabBank;
    if (!bank || bank.length < 4) return null;

    let targetIdx = Math.floor(Math.random() * bank.length);
    if (targetIdx === lastPickedTargetIdx && bank.length > 1) {
        targetIdx = (targetIdx + 1) % bank.length;
    }
    lastPickedTargetIdx = targetIdx;
    const target = bank[targetIdx];

    const distractors = [];
    while (distractors.length < 3) {
        const r = Math.floor(Math.random() * bank.length);
        if (r !== targetIdx && !distractors.includes(bank[r])) {
            distractors.push(bank[r]);
        }
    }

    const options = shuffleArray([target, ...distractors]);
    const labels = ['A', 'B', 'C', 'D'];
    let correctText = '';

    const optsWithLabels = options.map((opt, i) => {
        const displayLabel = opt.name || opt.eng;
        const txt = `${labels[i]}. ${displayLabel}`;
        if ((opt.icon && target.icon && opt.icon === target.icon) || 
            (opt.kor && target.kor && opt.kor === target.kor) ||
            (opt.name && target.name && opt.name === target.name)) {
            correctText = txt;
        }
        return txt;
    });

    return {
        mode: currentActiveGameMode,
        icon: target.icon || null,
        kor: target.kor || target.name,
        eng: target.eng,
        opts: optsWithLabels,
        ans: correctText
    };
}

function startGameTimer() {
    clearInterval(gameTimerInterval);
    gameTimeRemaining = 60;
    const timerEl = document.getElementById('gameTimer');
    if (timerEl) timerEl.textContent = '60s';

    gameTimerInterval = setInterval(() => {
        gameTimeRemaining--;
        if (timerEl) timerEl.textContent = `${gameTimeRemaining}s`;

        if (gameTimeRemaining <= 0) {
            clearInterval(gameTimerInterval);
            endGameRound();
        }
    }, 1000);
}

function endGameRound() {
    isGameProcessing = true;
    const qArea = document.getElementById('gameQuestionText');
    const qGrid = document.getElementById('gameOptionsGrid');

    if (qArea) {
        qArea.innerHTML = `⏱️ <strong style="color: #ef4444; font-size: 1.4rem;">Time Up! Game Over!</strong>`;
    }

    if (qGrid) {
        qGrid.innerHTML = `
            <div style="grid-column: 1 / -1; text-align: center; background: #0f172a; border: 1px solid #334155; padding: 20px; border-radius: 10px;">
                <h3 style="color: #ffffff; margin-bottom: 8px;">Final Score: <strong style="color: #10b981; font-size: 1.6rem;">${gameCurrentScore} Points</strong></h3>
                <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 16px;">Great practice session! Keep building your EPS-TOPIK vocabulary speed.</p>
                <button onclick="restartGameRound()" style="background: #2563eb; color: #ffffff; font-weight: 800; padding: 12px 24px; border-radius: 8px; font-size: 1rem; cursor: pointer;">🔄 Play Again</button>
            </div>
        `;
    }
}

function restartGameRound() {
    gameCurrentScore = 0;
    heroGameCount = 0;
    isGameProcessing = false;
    const scoreEl = document.getElementById('gameScore');
    if (scoreEl) scoreEl.textContent = '0';
    const qCountEl = document.getElementById('gameQCount');
    if (qCountEl) qCountEl.textContent = '1 / 5';
    startGameTimer();
    renderCurrentGameQuestion();
}

function renderCurrentGameQuestion() {
    isGameProcessing = false;
    currentQuestionObj = generateDynamicQuestion();
    if (!currentQuestionObj) return;

    const qArea = document.getElementById('gameQuestionText');
    const qGrid = document.getElementById('gameOptionsGrid');

    if (qArea) {
        if (currentQuestionObj.mode === 'signboard') {
            qArea.innerHTML = `
                <div style="text-align: center; margin-bottom: 8px;">
                    <div style="font-size: 3.5rem; line-height: 1; display: inline-block; background: #0f172a; border: 2px solid #ef4444; border-radius: 16px; padding: 14px 28px; margin-bottom: 10px; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.25);">
                        ${currentQuestionObj.icon}
                    </div>
                    <div style="color: #60a5fa; font-size: 1.1rem; font-weight: 700;">Identify Safety Signboard Rule / Meaning:</div>
                </div>
            `;
        } else if (currentQuestionObj.mode === 'audio') {
            qArea.innerHTML = `
                <div style="text-align: center; margin-bottom: 8px;">
                    <button onclick="speakKorean('${currentQuestionObj.kor.replace(/'/g, "\\'")}')" style="background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #ffffff; border: 1px solid #3b82f6; padding: 12px 24px; border-radius: 30px; font-size: 1.1rem; font-weight: 800; cursor: pointer; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4); display: inline-flex; align-items: center; gap: 10px; transition: transform 0.15s ease;">
                        <span style="font-size: 1.4rem;">🔊</span> Listen Audio (듣기) - Tap to Play
                    </button>
                    <div style="color: #94a3b8; font-size: 0.88rem; margin-top: 10px;">Listen to native Korean pronunciation and select the correct English meaning below:</div>
                </div>
            `;
            if (typeof speakKorean === 'function') {
                speakKorean(currentQuestionObj.kor);
            }
        } else {
            qArea.innerHTML = `What is the English meaning of Korean word: <strong style="color: #60a5fa; font-size: 1.4rem;">"${currentQuestionObj.kor}"</strong>?`;
        }
    }

    if (qGrid) {
        qGrid.innerHTML = currentQuestionObj.opts.map((opt, idx) => `
            <button class="game-opt-btn" onclick="checkGameAnswer(${idx}, this)" style="transition: background 0.2s ease, transform 0.1s ease; cursor: pointer;">${opt}</button>
        `).join('');
    }
}

function checkGameAnswer(optIdx, btnElem) {
        restartGameRound();
        return;
    }
    if (isGameProcessing) return;

    if (!currentQuestionObj) {
        renderCurrentGameQuestion();
        return;
    }
    isGameProcessing = true;

    if (!btnElem && window.event && window.event.target) {
        btnElem = window.event.target;
    }

    const allButtons = document.querySelectorAll('.game-opt-btn');
    allButtons.forEach(btn => btn.style.pointerEvents = 'none');

    const chosenText = typeof optIdx === 'number' ? (currentQuestionObj.opts[optIdx] || '') : (btnElem ? btnElem.textContent.trim() : '');
    const isCorrect = (chosenText.trim() === currentQuestionObj.ans.trim());

    if (isCorrect) {
        gameCurrentScore += 10;
        if (btnElem) {
            btnElem.style.setProperty('background', '#059669', 'important');
            btnElem.style.setProperty('color', '#ffffff', 'important');
            btnElem.style.setProperty('border-color', '#059669', 'important');
        }
    } else {
        if (btnElem) {
            btnElem.style.setProperty('background', '#dc2626', 'important');
            btnElem.style.setProperty('color', '#ffffff', 'important');
            btnElem.style.setProperty('border-color', '#dc2626', 'important');
        }
        allButtons.forEach(btn => {
            if (btn.textContent.trim() === currentQuestionObj.ans.trim()) {
                btn.style.setProperty('background', '#059669', 'important');
                btn.style.setProperty('color', '#ffffff', 'important');
                btn.style.setProperty('border-color', '#059669', 'important');
            }
        });
    }

    const scoreEl = document.getElementById('gameScore');
    if (scoreEl) scoreEl.textContent = gameCurrentScore;

    heroGameCount++;

    const qCountEl = document.getElementById('gameQCount');
    if (qCountEl) {
        qCountEl.textContent = `${Math.min(heroGameCount + 1, 5)} / 5`;
    }

    // Track Free Game Limit using server-side session state
    const hasAccess = window.userSession && (window.userSession.isPro || window.userSession.isTrial);
    if (!hasAccess && heroGameCount >= 3) {
        setTimeout(() => {
            isGameProcessing = false;
            const qArea = document.getElementById('gameQuestionText');
            const qGrid = document.getElementById('gameOptionsGrid');
            if (qArea) {
                qArea.innerHTML = `
                    <div style="text-align: center; padding: 10px;">
                        <div style="font-size: 2.2rem; margin-bottom: 4px;">🎁</div>
                        <div style="font-size: 0.85rem; color: #f59e0b; font-weight: 700; text-transform: uppercase; margin-bottom: 4px;">Free Teaser Preview Limit Reached (3/5 Questions)</div>
                        <div style="font-size: 1.1rem; color: #ffffff; font-weight: 800; margin-bottom: 6px;">Start Your 5-Day Free Trial</div>
                        <p style="font-size: 0.82rem; color: #94a3b8; margin-bottom: 12px;">Create a free candidate account to play unlimited practice games!</p>
                    </div>
                `;
            }
            if (qGrid) {
                qGrid.innerHTML = `
                    <div style="grid-column: 1 / -1; text-align: center;">
                        <button onclick="openAuthModal('register')" style="background: #059669; color: #ffffff; font-weight: 800; padding: 12px 24px; border-radius: 8px; font-size: 0.95rem; cursor: pointer; border: none;">
                            🎁 Start 5-Day Free Trial (Create Account) ▶
                        </button>
                    </div>
                `;
            }
            if (typeof openAuthModal === 'function') {
                openAuthModal('register');
            }
        }, 600);
    setTimeout(() => {
        isGameProcessing = false;
        renderCurrentGameQuestion();
    }, 850);
}

function selectGameMode(mode, btnElement) {
    document.querySelectorAll('.game-mode-btn').forEach(btn => btn.classList.remove('active'));
    if (btnElement) {
        btnElement.classList.add('active');
    } else if (window.event && window.event.target) {
        window.event.target.classList.add('active');
    }

    currentActiveGameMode = mode;
    isGameProcessing = false;

    const hasAccess = window.userSession && (window.userSession.isPro || window.userSession.isTrial);
    if (!hasAccess && heroGameCount >= 3) {
        if (typeof openAuthModal === 'function') {
            openAuthModal('register');
        }
        return;
    }

    startGameTimer();
    renderCurrentGameQuestion();
}

// Prepare initial question without auto-starting background timer on page load
document.addEventListener('DOMContentLoaded', () => {
    renderCurrentGameQuestion();
});

/* ==========================================================================
   HERO SECTION ENGINE & PAYWALL LIMITS
   ========================================================================== */

let heroVocabIndex = 0;
let heroVocabCount = 0;
let heroCbtCount = 0;

const heroVocabList = [
    { kor: '안전모', eng: 'Safety Helmet (सुरक्षा पेटी)', cat: 'Factory Safety' },
    { kor: '보안경', eng: 'Safety Goggles (सुरक्षा चश्मा)', cat: 'Factory Safety' },
    { kor: '귀마개', eng: 'Earplugs (कान के प्लग)', cat: 'Factory Safety' },
    { kor: '안전화', eng: 'Safety Shoes (सुरक्षा जूते)', cat: 'Factory Safety' },
    { kor: '장갑', eng: 'Work Gloves (दस्ताने)', cat: 'Factory Safety' },
    { kor: '망치', eng: 'Hammer (हथौड़ा)', cat: 'Tools & Equipment' },
    { kor: '줄자', eng: 'Measuring Tape (इंच टेप)', cat: 'Tools & Equipment' },
    { kor: '스패너', eng: 'Spanner / Wrench (पा나)', cat: 'Tools & Equipment' }
];

function switchHeroTab(tabId, btnElem) {
    document.querySelectorAll('.hero-tab-nav .tab-btn').forEach(btn => btn.classList.remove('active'));
    if (btnElem) btnElem.classList.add('active');

    document.querySelectorAll('.hero-left-box-70 .tab-content-panel').forEach(panel => {
        panel.style.display = 'none';
        panel.classList.remove('active');
    });

    const targetPanel = document.getElementById(tabId);
    if (targetPanel) {
        targetPanel.style.display = 'block';
        targetPanel.classList.add('active');
    }

    if (tabId === 'gamesTab') {
        isGameProcessing = false;
        if (gameTimeRemaining <= 0) {
            startGameTimer();
        }
        const hasAccess = window.userSession && (window.userSession.isPro || window.userSession.isTrial);
        if (!hasAccess && heroGameCount >= 3) {
            // Keep limit reached state displayed
        } else {
            renderCurrentGameQuestion();
        }
    }
}

function speakKorean(text) {
    if (!text) return;
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'ko-KR';
        utterance.rate = 0.85;
        window.speechSynthesis.speak(utterance);
    }
}

function downloadProNote(e, pdfUrl) {
    if (e) e.preventDefault();
    const isPro = window.userSession && window.userSession.isPro;
    const isLoggedIn = window.userSession && window.userSession.isLoggedIn;

    if (isPro) {
        window.open(pdfUrl, '_blank');
    } else if (!isLoggedIn) {
        if (typeof openAuthModal === 'function') openAuthModal('register');
    } else {
        openProModal();
    }
}

/* Pro Paywall Modal Functions */
function openProModal(featureName) {
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
    const isPro = window.userSession && window.userSession.isPro;
    const isLoggedIn = window.userSession && window.userSession.isLoggedIn;

    if (isPro) {
        alert('🔓 Pro Note Unlocked! Downloading High-Yield Study Guide...');
    } else if (!isLoggedIn) {
        if (typeof openAuthModal === 'function') openAuthModal('register');
    } else {
        openProModal();
    }
}
