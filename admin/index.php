<?php
// Admin Login Gateway
require_once __DIR__ . '/../includes/db.php';

if (is_admin()) {
    header('Location: /admin/dashboard.php');
    exit;
}

$page_title = "Admin Portal Login - KoreanTestPapers.in";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="section-padding" style="background: #0f172a; min-height: 75vh; display: flex; align-items: center; justify-content: center;">
    <div class="container" style="max-width: 440px;">
        <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 36px 28px; box-shadow: 0 20px 40px rgba(0,0,0,0.4); text-align: center;">
            <div style="font-size: 3rem; margin-bottom: 12px;">🛡️</div>
            <h1 style="font-size: 1.6rem; color: #ffffff; margin-bottom: 8px;">System Admin Login</h1>
            <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 24px;">Enter administrative credentials to manage users & pricing.</p>

            <form action="/auth-handler.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div style="margin-bottom: 16px; text-align: left;">
                    <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Admin Email:</label>
                    <input type="email" name="email" value="admin@koreantestpapers.in" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; font-size: 0.95rem;">
                </div>

                <div style="margin-bottom: 24px; text-align: left;">
                    <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Password:</label>
                    <input type="password" name="password" placeholder="••••••••" required style="width: 100%; padding: 12px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; font-size: 0.95rem;">
                </div>

                <button type="submit" class="btn-primary-action" style="width: 100%; padding: 12px; font-weight: 800; background: #d97706; border-radius: 6px; color: white;">Log In to Admin Dashboard ▶</button>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
