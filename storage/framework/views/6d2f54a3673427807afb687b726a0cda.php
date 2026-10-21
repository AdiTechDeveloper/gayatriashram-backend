

<?php $__env->startSection('title', isset($gallery) ? 'Edit Gallery Image' : 'Add Gallery Image'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            <?php echo e(isset($gallery) ? 'Edit Gallery Image' : 'Add Gallery Image'); ?>

        </h3>

        <p class="text-muted mb-0">
            <?php echo e(isset($gallery)
                ? 'Update gallery image details.'
                : 'Upload a new image to the temple gallery.'); ?>

        </p>
    </div>

    <a
        href="<?php echo e(route('admin.gallery.index')); ?>"
        class="btn btn-outline-secondary rounded-3"
    >
        <i class="bi bi-arrow-left"></i>
        Back to Gallery
    </a>

</div>



<?php if($errors->any()): ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <strong>Please fix the following errors:</strong>

        <ul class="mb-0 mt-2">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>

<?php endif; ?>


<form
    action="<?php echo e(isset($gallery)
        ? route('admin.gallery.update', $gallery->id)
        : route('admin.gallery.store')); ?>"
    method="POST"
    enctype="multipart/form-data"
>

    <?php echo csrf_field(); ?>

    <?php if(isset($gallery)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">

            <h5 class="fw-bold mb-0">
                Gallery Information
            </h5>

        </div>

        <div class="card-body p-4">

            <div class="row g-3">

                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Title <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="title"
                        class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('title', $gallery->title ?? '')); ?>"
                        placeholder="Mahashivratri Celebration"
                    >

                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Category <span class="text-danger">*</span>
                    </label>

                    <select
                        name="category"
                        class="form-select <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >

                        <option value="">
                            Select Category
                        </option>

                        <?php $__currentLoopData = [
                            'Temple',
                            'Events',
                            'Aarti',
                            'Festivals',
                            'Puja',
                            'Gau Seva',
                            'Annadaan',
                            'Other'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option
                                value="<?php echo e($category); ?>"
                                <?php echo e(old('category', $gallery->category ?? '') === $category ? 'selected' : ''); ?>

                            >
                                <?php echo e($category); ?>

                            </option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

            </div>

        </div>

    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">

            <h5 class="fw-bold mb-0">
                Gallery Image
            </h5>

        </div>

        <div class="card-body p-4">

            <div class="row g-4">

                
                <div class="col-md-7">

                    <label class="form-label fw-semibold">
                        Image
                        <?php if(!isset($gallery)): ?>
                            <span class="text-danger">*</span>
                        <?php endif; ?>
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <small class="text-muted d-block mt-2">
                        JPG, JPEG, PNG or WEBP. Maximum size: 5 MB.
                    </small>

                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                
                <?php if(isset($gallery) && $gallery->image): ?>

                    <div class="col-md-5">

                        <label class="form-label fw-semibold">
                            Current Image
                        </label>

                        <div>

                            <img
                                src="<?php echo e(asset('storage/' . $gallery->image)); ?>"
                                alt="<?php echo e($gallery->title); ?>"
                                class="img-fluid rounded-3"
                                style="
                                    width:220px;
                                    height:140px;
                                    object-fit:cover;
                                "
                            >

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">

            <h5 class="fw-bold mb-0">
                Settings
            </h5>

        </div>

        <div class="card-body p-4">

            <div class="row g-4">

                
                <div class="col-md-4">

                    <div class="form-check form-switch">

                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="featured"
                            id="featured"
                            value="1"
                            <?php echo e(old('featured', $gallery->featured ?? false) ? 'checked' : ''); ?>

                        >

                        <label
                            class="form-check-label"
                            for="featured"
                        >
                            Featured Image
                        </label>

                    </div>

                </div>


                
                <div class="col-md-4">

                    <div class="form-check form-switch">

                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="status"
                            id="status"
                            value="1"
                            <?php echo e(old('status', $gallery->status ?? true) ? 'checked' : ''); ?>

                        >

                        <label
                            class="form-check-label"
                            for="status"
                        >
                            Active
                        </label>

                    </div>

                </div>


                
                <div class="col-md-4">

                    <label class="form-label fw-semibold">
                        Sort Order
                    </label>

                    <input
                        type="number"
                        name="sort_order"
                        min="0"
                        class="form-control <?php $__errorArgs = ['sort_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('sort_order', $gallery->sort_order ?? 0)); ?>"
                    >

                    <?php $__errorArgs = ['sort_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

            </div>

        </div>

    </div>


    
    <div class="d-flex justify-content-end gap-2 mb-5">

        <a
            href="<?php echo e(route('admin.gallery.index')); ?>"
            class="btn btn-light border"
        >
            Cancel
        </a>

        <button
            type="submit"
            class="btn btn-primary px-4"
        >

            <i class="bi bi-check-lg"></i>

            <?php echo e(isset($gallery) ? 'Update Image' : 'Upload Image'); ?>


        </button>

    </div>

</form>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/gallery/form.blade.php ENDPATH**/ ?>