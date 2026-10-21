<header class="topbar">

    <div class="topbar-left">
        
        <button class="btn-toggle" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>

        
        
    </div>

    <div class="topbar-right">

        
        <button class="btn-icon" id="themeToggle" title="Toggle Theme">
            <i class="bi bi-moon-stars" id="themeIcon"></i>
        </button>

        
        <div class="dropdown">
            <button class="btn-icon position-relative" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="notif-badge">3</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end notif-dropdown">
                <li class="dropdown-header">Notifications</li>
                <li><a class="dropdown-item" href="#">🎂 2 Birthdays today</a></li>
                <li><a class="dropdown-item" href="#">💰 New donation received</a></li>
                <li><a class="dropdown-item" href="#">📋 New membership application</a></li>
            </ul>
        </div>

        
        <div class="dropdown">
            <!-- Inside your topbar/navbar section -->
            <button class="profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if(auth()->check() && auth()->user()->profile_photo): ?>
                    <img src="<?php echo e(asset('storage/' . auth()->user()->profile_photo)); ?>"
                        class="profile-img rounded-circle" alt="Profile" width="35" height="35"
                        style="object-fit: cover;">
                <?php else: ?>
                    <img src="https://ui-avatars.com/api/?name=<?php echo e(auth()->check() ? urlencode(auth()->user()->name) : 'Admin'); ?>&background=D4A017&color=fff"
                        class="profile-img rounded-circle" alt="Profile" width="35" height="35">
                <?php endif; ?>
                <span class="d-none d-md-inline ms-1"><?php echo e(auth()->check() ? auth()->user()->name : 'Admin'); ?></span>
            </button>

            
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo e(url('admin/profile/edit')); ?>"><i
                            class="bi bi-person me-2"></i>Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('admin/password/edit')); ?>"><i class="bi bi-key me-2"></i>Change Password</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="<?php echo e(route('admin.logout')); ?>" method="GET">
                        <?php echo csrf_field(); ?>

                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </div>

</header>
<?php /**PATH D:\gayatri_backend\resources\views/layouts/partials/topbar.blade.php ENDPATH**/ ?>