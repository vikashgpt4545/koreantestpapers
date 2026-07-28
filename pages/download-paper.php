<?php
// Core PHP & Database Setup
require_once __DIR__ . '/../includes/db.php';

$paper_title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : "Official Korean Test Paper PDF";
$drive_link = "https://drive.google.com/drive/folders/1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv";

// Page SEO Meta
$page_title = "Preparing PDF Download - KoreanTestPapers.in";
$page_desc = "Your official Korean exam paper PDF download is being prepared from Google Drive cloud storage.";
$canonical_url = "https://koreantestpapers.in/download-paper";

require_once __DIR__ . '/../includes/header.php';
?>

<div class="section-padding" style="background: #0f172a; min-height: 70vh; display: flex; align-items: center; justify-content: center;">
    <div class="container" style="max-width: 650px; text-align: center;">
        
        <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 40px 28px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);">
            
            <div style="font-size: 3rem; margin-bottom: 16px; animation: bounce 1.5s infinite;">⚡</div>
            
            <h1 style="font-size: 1.6rem; color: #ffffff; font-weight: 800; margin-bottom: 12px;">
                Preparing Your PDF Download
            </h1>
            
            <p style="font-size: 1rem; color: #94a3b8; margin-bottom: 24px;">
                Paper Title: <strong style="color: #60a5fa;"><?php echo $paper_title; ?></strong>
            </p>

            <!-- Animated Progress Bar -->
            <div style="background: #0f172a; border-radius: 20px; overflow: hidden; height: 16px; width: 100%; margin-bottom: 20px; border: 1px solid #334155;">
                <div id="downloadProgressBar" style="background: linear-gradient(90deg, #2563eb, #059669); height: 100%; width: 0%; transition: width 0.1s linear;"></div>
            </div>

            <!-- Countdown Timer Status -->
            <div id="countdownStatusBox" style="font-size: 1.1rem; font-weight: 700; color: #fbbf24; margin-bottom: 24px;">
                ⏳ Please wait <span id="countdownTimer">5</span> seconds while we generate your secure cloud link...
            </div>

            <!-- Download Button (Hidden until countdown finishes) -->
            <div id="downloadActionBox" style="display: none;">
                <a href="<?php echo $drive_link; ?>" target="_blank" class="btn-primary-action" style="display: inline-block; padding: 14px 28px; font-size: 1.05rem; font-weight: 800; background: #059669; color: #ffffff; border-radius: 8px; box-shadow: 0 4px 14px rgba(5, 150, 105, 0.4); text-decoration: none;">
                    📥 Click Here to Download PDF from Google Drive Cloud
                </a>
                <p style="font-size: 0.82rem; color: #64748b; margin-top: 14px;">
                    Having trouble? The link will open directly in Google Drive in a new browser tab.
                </p>
            </div>

            <!-- Hub Back Link -->
            <div style="margin-top: 28px; border-top: 1px solid #334155; padding-top: 20px;">
                <a href="/korean-exam-paper-master-collection" style="color: #94a3b8; font-size: 0.88rem; text-decoration: underline;">
                    ← Return to Master Archive Hub (156 Papers)
                </a>
            </div>

        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let timeLeft = 5;
    const timerElem = document.getElementById("countdownTimer");
    const progressBar = document.getElementById("downloadProgressBar");
    const statusBox = document.getElementById("countdownStatusBox");
    const actionBox = document.getElementById("downloadActionBox");

    const totalTime = 5;
    const interval = setInterval(function() {
        timeLeft -= 0.1;
        const percentage = ((totalTime - timeLeft) / totalTime) * 100;
        progressBar.style.width = percentage + "%";

        if (timerElem) {
            timerElem.innerText = Math.ceil(timeLeft);
        }

        if (timeLeft <= 0) {
            clearInterval(interval);
            progressBar.style.width = "100%";
            statusBox.style.display = "none";
            actionBox.style.display = "block";
            // Auto open Google Drive folder after countdown
            window.open("<?php echo $drive_link; ?>", "_blank");
        }
    }, 100);
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
