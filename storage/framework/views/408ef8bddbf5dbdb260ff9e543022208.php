<aside class="sidebar" id="sidebar">

    
    <div class="logo_image">
        <img src="<?php echo e(asset('assets/admin/images/logo1.png')); ?>" alt="Temple Trust" onerror="this.style.display='none'">
        
    </div>

    <div class="sidebar-menu">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                   class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                    <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link">
                    <i class="bi bi-people"></i> <span>Member</span>
                </a>
            </li>

             <li class="nav-item">
                <a href="<?php echo e(route('admin.pooja.index')); ?>" class="nav-link">
                    <i class="bi bi-flower1"></i> <span>Pooja</span>
                </a>
            </li>

              <li class="nav-item">
                <a href="<?php echo e(route('admin.video.index')); ?>" class="nav-link">
                    <i class="bi bi-camera-video"></i> <span>Video</span>
                </a>
            </li>

             <li class="nav-item">
                <a href="<?php echo e(route('admin.puja-booking.index')); ?>" class="nav-link">
                    <i class="bi bi-calendar-check"></i> <span>Puja Bookings</span>
                </a>
            </li>

                <li class="nav-item">
                <a href="<?php echo e(route('admin.gallery.index')); ?>" class="nav-link">
                    <i class="bi bi-images"></i> <span>Gallery</span>
                </a>
            </li>


            

        </ul>
    </div>

</aside><?php /**PATH D:\gayatri_backend\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>