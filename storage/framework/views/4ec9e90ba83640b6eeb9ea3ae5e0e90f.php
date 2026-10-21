<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/admin/images/logo3.png')); ?>">

    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> | Temple Trust Admin</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/custom.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/admin.css')); ?>">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

   <?php if(session('success') || session('error') || $errors->any()): ?>

    <div class="custom-toast-container">

        <?php if(session('success')): ?>
            <div class="custom-toast custom-toast-success">
                <div class="toast-icon">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <div class="toast-message">
                    <?php echo e(session('success')); ?>

                </div>

                <button type="button" class="toast-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        <?php endif; ?>


        <?php if(session('error')): ?>
            <div class="custom-toast custom-toast-error">
                <div class="toast-icon">
                    <i class="bi bi-exclamation-circle-fill"></i>
                </div>

                <div class="toast-message">
                    <?php echo e(session('error')); ?>

                </div>

                <button type="button" class="toast-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        <?php endif; ?>


        <?php if($errors->any()): ?>
            <div class="custom-toast custom-toast-error">
                <div class="toast-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

                <div class="toast-message">
                    <?php echo e($errors->first()); ?>

                </div>

                <button type="button" class="toast-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        <?php endif; ?>

    </div>

<?php endif; ?>

    <div class="admin-wrapper">

        
        <?php echo $__env->make('layouts.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="main-content">

            
            <?php echo $__env->make('layouts.partials.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            
            <div class="page-content">

                

                <?php echo $__env->yieldContent('content'); ?>

            </div>

            <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    
    <script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <script>
document.addEventListener('DOMContentLoaded', function () {

    const toasts = document.querySelectorAll('.custom-toast');

    toasts.forEach(function (toast) {

        // Close button
        const closeButton = toast.querySelector('.toast-close');

        closeButton.addEventListener('click', function () {
            removeToast(toast);
        });


        // Auto close after 4 seconds
        setTimeout(function () {
            removeToast(toast);
        }, 3000);

    });


    function removeToast(toast) {

        toast.style.animation = 'toastSlideOut 0.35s ease forwards';

        setTimeout(function () {
            toast.remove();
        }, 350);

    }

});
</script>

</body>
</html>
<?php /**PATH D:\gayatri_backend\resources\views/layouts/app.blade.php ENDPATH**/ ?>