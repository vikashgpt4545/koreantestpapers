<?php
// Admin Control Panel & User Management Center
require_once __DIR__ . '/../includes/db.php';

// Access Control Guard
if (!is_admin()) {
    header('Location: /admin/index.php');
    exit;
}

$msg = '';
$error = '';

// Handle Admin Actions (Pricing & User Status Overrides)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_action = $_POST['admin_action'] ?? '';

    // 1. Update Pricing & Settings
    if ($admin_action === 'update_pricing') {
        $new_price = trim($_POST['pro_price_usd'] ?? '8');
        $new_trial_days = trim($_POST['trial_duration_days'] ?? '5');

        set_setting('pro_price_usd', $new_price);
        set_setting('trial_duration_days', $new_trial_days);
        $msg = "Backend Settings Updated Successfully! 30-Day Pass Price: $$new_price USD | Free Trial: $new_trial_days Days.";
    }

    // 2. 1-Click User Status Override (Free / Trial / Pro)
    if ($admin_action === 'change_user_status') {
        $target_user_id = (int)($_POST['target_user_id'] ?? 0);
        $new_status = $_POST['new_status'] ?? 'free';

        if ($target_user_id > 0 && $db_connected) {
            try {
                if ($new_status === 'pro') {
                    $sub_ends = date('Y-m-d H:i:s', strtotime("+30 days"));
                    $stmt = $conn->prepare("UPDATE users SET status = 'pro', subscription_ends_at = :sub_ends WHERE id = :id");
                    $stmt->execute([':sub_ends' => $sub_ends, ':id' => $target_user_id]);
                    $msg = "User #$target_user_id successfully upgraded to Pro (30-Day Pass)! Unlocked Study Notes & PDF Vault.";
                } elseif ($new_status === 'trial') {
                    $trial_days = (int)get_setting('trial_duration_days', 5);
                    $trial_ends = date('Y-m-d H:i:s', strtotime("+$trial_days days"));
                    $stmt = $conn->prepare("UPDATE users SET status = 'trial', trial_ends_at = :trial_ends WHERE id = :id");
                    $stmt->execute([':trial_ends' => $trial_ends, ':id' => $target_user_id]);
                    $msg = "User #$target_user_id assigned a $trial_days-Day Free Trial.";
                } else {
                    $stmt = $conn->prepare("UPDATE users SET status = 'free' WHERE id = :id");
                    $stmt->execute([':id' => $target_user_id]);
                    $msg = "User #$target_user_id reset to Free plan.";
                }
            } catch (Exception $e) {
                $error = "Error updating user status: " . $e->getMessage();
            }
        }
    }
}

// Fetch Stats & User Data
$all_users = [];
$total_users_count = 0;
$trial_users_count = 0;
$pro_users_count = 0;

if ($db_connected) {
    try {
        $stmt = $conn->query("SELECT * FROM users ORDER BY id DESC");
        $all_users = $stmt->fetchAll();
        $total_users_count = count($all_users);

        foreach ($all_users as $u) {
            if ($u['status'] === 'pro') $pro_users_count++;
            elseif ($u['status'] === 'trial') $trial_users_count++;
        }
    } catch (Exception $e) {}
}

$current_price = get_setting('pro_price_usd', '8');
$current_trial_days = get_setting('trial_duration_days', '5');

$page_title = "Admin Dashboard & User Control Panel - KoreanTestPapers.in";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="section-padding" style="background: #0f172a; min-height: 85vh; color: #ffffff;">
    <div class="container">
        
        <!-- DASHBOARD HEADER -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 28px; border-bottom: 1px solid #334155; padding-bottom: 20px;">
            <div>
                <h1 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 0;">🛡️ System Admin Control Panel</h1>
                <p style="color: #94a3b8; margin-top: 4px; font-size: 0.95rem;">Manage registered candidate accounts, 1-click Pro upgrades, and backend pricing.</p>
            </div>
            <div>
                <a href="/auth-handler.php?action=logout" style="background: #dc2626; color: white; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 700; font-size: 0.9rem;">Logout Admin</a>
            </div>
        </div>

        <!-- NOTIFICATION ALERTS -->
        <?php if (!empty($msg)): ?>
            <div style="background: #f0fdf4; border-left: 4px solid #22c55e; color: #166534; padding: 14px 18px; border-radius: 6px; font-weight: 700; margin-bottom: 24px;">
                🎉 <?php echo htmlspecialchars($msg); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div style="background: #fef2f2; border-left: 4px solid #ef4444; color: #991b1b; padding: 14px 18px; border-radius: 6px; font-weight: 700; margin-bottom: 24px;">
                ⚠️ <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <!-- ANALYTICS SUMMARY CARDS -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 32px;">
            <div style="background: #1e293b; border: 1px solid #334155; padding: 20px; border-radius: 10px;">
                <div style="font-size: 0.85rem; color: #94a3b8; font-weight: 700; text-transform: uppercase;">Total Registered Accounts</div>
                <div style="font-size: 2.2rem; font-weight: 800; color: #38bdf8; margin-top: 6px;"><?php echo $total_users_count; ?></div>
            </div>

            <div style="background: #1e293b; border: 1px solid #334155; padding: 20px; border-radius: 10px;">
                <div style="font-size: 0.85rem; color: #94a3b8; font-weight: 700; text-transform: uppercase;">Active 5-Day Trial Users</div>
                <div style="font-size: 2.2rem; font-weight: 800; color: #fbbf24; margin-top: 6px;"><?php echo $trial_users_count; ?></div>
            </div>

            <div style="background: #1e293b; border: 1px solid #334155; padding: 20px; border-radius: 10px;">
                <div style="font-size: 0.85rem; color: #94a3b8; font-weight: 700; text-transform: uppercase;">Paid Pro Members ($8 Pass)</div>
                <div style="font-size: 2.2rem; font-weight: 800; color: #4ade80; margin-top: 6px;"><?php echo $pro_users_count; ?></div>
            </div>

            <div style="background: #1e293b; border: 1px solid #334155; padding: 20px; border-radius: 10px;">
                <div style="font-size: 0.85rem; color: #94a3b8; font-weight: 700; text-transform: uppercase;">Current 30-Day Price</div>
                <div style="font-size: 2.2rem; font-weight: 800; color: #f43f5e; margin-top: 6px;">$<?php echo htmlspecialchars($current_price); ?> <span style="font-size: 1rem; color: #94a3b8;">USD</span></div>
            </div>
        </div>

        <!-- BACKEND PRICING & TRIAL SETTINGS CONTROLLER -->
        <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px; margin-bottom: 32px;">
            <h3 style="color: #ffffff; margin-bottom: 14px; font-size: 1.2rem; font-weight: 800;">⚙️ Backend Price & Trial Duration Controller</h3>
            <form action="" method="POST" style="display: flex; gap: 16px; flex-wrap: wrap; align-items: flex-end;">
                <input type="hidden" name="admin_action" value="update_pricing">
                
                <div>
                    <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 6px; font-weight: 700;">30-Day Pro Pass Price ($ USD):</label>
                    <input type="number" step="1" min="1" name="pro_price_usd" value="<?php echo htmlspecialchars($current_price); ?>" required style="padding: 10px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; font-weight: 700; font-size: 1rem; width: 160px;">
                </div>

                <div>
                    <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 6px; font-weight: 700;">Default Free Trial Duration (Days):</label>
                    <input type="number" step="1" min="1" name="trial_duration_days" value="<?php echo htmlspecialchars($current_trial_days); ?>" required style="padding: 10px 14px; background: #0f172a; border: 1px solid #334155; border-radius: 6px; color: #ffffff; font-weight: 700; font-size: 1rem; width: 160px;">
                </div>

                <button type="submit" class="btn-primary-action" style="padding: 11px 24px; background: #2563eb; color: white; border-radius: 6px; font-weight: 800; font-size: 0.95rem;">Save Backend Settings 💾</button>
            </form>
        </div>

        <!-- COMPLETE USER MANAGEMENT DATA TABLE -->
        <div style="background: #1e293b; border: 1px solid #334155; border-radius: 12px; padding: 24px;">
            <h3 style="color: #ffffff; margin-bottom: 16px; font-size: 1.2rem; font-weight: 800;">👥 Candidate User Directory & 1-Click Status Controls</h3>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem;">
                    <thead>
                        <tr style="background: #0f172a; color: #cbd5e1; border-bottom: 2px solid #334155;">
                            <th style="padding: 12px;">ID</th>
                            <th style="padding: 12px;">Candidate Name</th>
                            <th style="padding: 12px;">Email Address</th>
                            <th style="padding: 12px;">Role</th>
                            <th style="padding: 12px;">Plan Status</th>
                            <th style="padding: 12px;">Signup Date</th>
                            <th style="padding: 12px;">Last Login / IP</th>
                            <th style="padding: 12px; text-align: center;">1-Click Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($all_users)): ?>
                            <tr>
                                <td colspan="8" style="padding: 20px; text-align: center; color: #94a3b8;">No registered candidates found in the database.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($all_users as $user): ?>
                                <tr style="border-bottom: 1px solid #334155;">
                                    <td style="padding: 12px; font-weight: 700; color: #94a3b8;">#<?php echo $user['id']; ?></td>
                                    <td style="padding: 12px; font-weight: 700; color: #ffffff;"><?php echo htmlspecialchars($user['name']); ?></td>
                                    <td style="padding: 12px; color: #60a5fa;"><?php echo htmlspecialchars($user['email']); ?></td>
                                    <td style="padding: 12px;"><span style="background: #334155; color: #cbd5e1; padding: 2px 8px; border-radius: 4px; font-size: 0.75rem; text-transform: uppercase;"><?php echo htmlspecialchars($user['role']); ?></span></td>
                                    <td style="padding: 12px;">
                                        <?php if ($user['status'] === 'pro'): ?>
                                            <span style="background: #059669; color: white; padding: 4px 10px; border-radius: 12px; font-weight: 800; font-size: 0.8rem;">💎 PAID PRO ($8)</span>
                                        <?php elseif ($user['status'] === 'trial'): ?>
                                            <span style="background: #2563eb; color: white; padding: 4px 10px; border-radius: 12px; font-weight: 800; font-size: 0.8rem;">🎁 5-DAY TRIAL</span>
                                        <?php else: ?>
                                            <span style="background: #64748b; color: white; padding: 4px 10px; border-radius: 12px; font-weight: 800; font-size: 0.8rem;">FREE</span>
                                        <?php endif; ?>
                                    </td>
                                    <td style="padding: 12px; color: #cbd5e1; font-size: 0.85rem;"><?php echo date('M d, Y', strtotime($user['created_at'])); ?></td>
                                    <td style="padding: 12px; color: #94a3b8; font-size: 0.8rem;">
                                        <?php echo !empty($user['last_login']) ? date('M d H:i', strtotime($user['last_login'])) : 'Never'; ?><br>
                                        <span style="color: #64748b;"><?php echo htmlspecialchars($user['ip_address'] ?? '127.0.0.1'); ?></span>
                                    </td>
                                    <td style="padding: 12px; text-align: center;">
                                        <form action="" method="POST" style="display: inline-flex; gap: 6px; justify-content: center;">
                                            <input type="hidden" name="admin_action" value="change_user_status">
                                            <input type="hidden" name="target_user_id" value="<?php echo $user['id']; ?>">
                                            
                                            <?php if ($user['status'] !== 'pro'): ?>
                                                <button type="submit" name="new_status" value="pro" class="btn-sm-action" style="background: #059669; color: white; border: none; padding: 6px 12px; border-radius: 4px; font-weight: 800; cursor: pointer;" title="1-Click Pro Upgrade (Unlocks Notes & PDF Vault)">
                                                    ⚡ Switch to Pro
                                                </button>
                                            <?php else: ?>
                                                <button type="submit" name="new_status" value="free" class="btn-sm-action" style="background: #dc2626; color: white; border: none; padding: 6px 12px; border-radius: 4px; font-weight: 800; cursor: pointer;" title="Revoke Pro Access">
                                                    🔄 Reset to Free
                                                </button>
                                            <?php endif; ?>

                                            <?php if ($user['status'] !== 'trial'): ?>
                                                <button type="submit" name="new_status" value="trial" class="btn-sm-action" style="background: #d97706; color: white; border: none; padding: 6px 12px; border-radius: 4px; font-weight: 700; cursor: pointer;" title="Give 5-Day Free Trial">
                                                    🎁 5-Day Trial
                                                </button>
                                            <?php endif; ?>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
