

<?php $__env->startSection('title', isset($pooja) ? 'Edit Pooja' : 'Add Pooja'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-1">
            <?php echo e(isset($pooja) ? 'Edit Pooja' : 'Add New Pooja'); ?>

        </h3>

        <p class="text-muted mb-0">
            <?php echo e(isset($pooja) ? 'Update pooja information' : 'Create a new pooja'); ?>

        </p>
    </div>

    <a href="<?php echo e(route('admin.pooja.index')); ?>" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>


<form
    action="<?php echo e(isset($pooja)
        ? route('admin.pooja.update', $pooja->id)
        : route('admin.pooja.store')); ?>"
    method="POST"
    enctype="multipart/form-data"
>

    <?php echo csrf_field(); ?>

    <?php if(isset($pooja)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                Basic Information
            </h5>
        </div>

        <div class="card-body px-4">

            <div class="row g-3">

                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Pooja Name <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('name', $pooja->name ?? '')); ?>"
                        placeholder="Enter pooja name"
                    >

                    <?php $__errorArgs = ['name'];
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
                        Slug
                    </label>

                    <input
                        type="text"
                        name="slug"
                        class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('slug', $pooja->slug ?? '')); ?>"
                        placeholder="maha-shiv-puja"
                    >

                    <?php $__errorArgs = ['slug'];
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


                
                <div class="col-12">

                    <label class="form-label fw-semibold">
                        Short Description
                    </label>

                    <textarea
                        name="short_description"
                        rows="2"
                        class="form-control <?php $__errorArgs = ['short_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Short description about this pooja"
                    ><?php echo e(old('short_description', $pooja->short_description ?? '')); ?></textarea>

                    <?php $__errorArgs = ['short_description'];
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


                
                <div class="col-12">

                    <label class="form-label fw-semibold">
                        Description <span class="text-danger">*</span>
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Detailed description of the pooja"
                    ><?php echo e(old('description', $pooja->description ?? '')); ?></textarea>

                    <?php $__errorArgs = ['description'];
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
                Price & Schedule
            </h5>
        </div>

        <div class="card-body px-4">

            <div class="row g-3">

                
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Original Price <span class="text-danger">*</span>
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('price', $pooja->price ?? '')); ?>"
                        placeholder="5100"
                    >

                    <?php $__errorArgs = ['price'];
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


                
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Offer Price
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="offer_price"
                        class="form-control <?php $__errorArgs = ['offer_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('offer_price', $pooja->offer_price ?? '')); ?>"
                        placeholder="2100"
                    >

                    <?php $__errorArgs = ['offer_price'];
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


                
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Duration <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="duration"
                        class="form-control <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('duration', $pooja->duration ?? '')); ?>"
                        placeholder="2 Hours"
                    >

                    <?php $__errorArgs = ['duration'];
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


                
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Sort Order
                    </label>

                    <input
                        type="number"
                        name="sort_order"
                        class="form-control"
                        value="<?php echo e(old('sort_order', $pooja->sort_order ?? 0)); ?>"
                        min="0"
                    >

                </div>


                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Timings
                    </label>

                    <input
                        type="text"
                        name="timings"
                        class="form-control"
                        value="<?php echo e(old('timings', $pooja->timings ?? '')); ?>"
                        placeholder="7:00 AM - 9:00 AM"
                    >

                </div>


                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Location
                    </label>

                    <input
                        type="text"
                        name="location"
                        class="form-control"
                        value="<?php echo e(old('location', $pooja->location ?? '')); ?>"
                        placeholder="Temple"
                    >

                </div>

            </div>

        </div>
    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                Benefits & Samagri
            </h5>
        </div>

        <div class="card-body px-4">

            <div class="row g-4">

                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Benefits
                    </label>

                    <div id="benefitsWrapper">

                        <?php
                            $benefits = old(
                                'benefits',
                                $pooja->benefits ?? ['']
                            );
                        ?>

                        <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="input-group mb-2 benefit-row">

                                <input
                                    type="text"
                                    name="benefits[]"
                                    class="form-control"
                                    value="<?php echo e($benefit); ?>"
                                    placeholder="Enter benefit"
                                >

                                <button
                                    type="button"
                                    class="btn btn-outline-danger remove-row"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-primary"
                        id="addBenefit"
                    >
                        <i class="bi bi-plus"></i> Add Benefit
                    </button>

                </div>


                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Samagri
                    </label>

                    <div id="samagriWrapper">

                        <?php
                            $samagri = old(
                                'samagri',
                                $pooja->samagri ?? ['']
                            );
                        ?>

                        <?php $__currentLoopData = $samagri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="input-group mb-2 samagri-row">

                                <input
                                    type="text"
                                    name="samagri[]"
                                    class="form-control"
                                    value="<?php echo e($item); ?>"
                                    placeholder="Enter samagri"
                                >

                                <button
                                    type="button"
                                    class="btn btn-outline-danger remove-row"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-primary"
                        id="addSamagri"
                    >
                        <i class="bi bi-plus"></i> Add Samagri
                    </button>

                </div>

            </div>

        </div>
    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                Puja Process
            </h5>
        </div>

        <div class="card-body px-4">

            <textarea
                name="process"
                rows="5"
                class="form-control"
                placeholder="Explain the pooja process..."
            ><?php echo e(old('process', $pooja->process ?? '')); ?></textarea>

        </div>
    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                Images
            </h5>
        </div>

        <div class="card-body px-4">

            <div class="row g-4">

                
                <div class="col-md-6">

                    <label class="form-label fw-semibold">
                        Main Photo
                    </label>

                    <input
                        type="file"
                        name="photo"
                        class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <?php if(isset($pooja) && $pooja->photo): ?>

                        <div class="mt-3">
                            <img
                                src="<?php echo e(asset('storage/' . $pooja->photo)); ?>"
                                width="150"
                                class="rounded-3 border"
                            >
                        </div>

                    <?php endif; ?>

                    <?php $__errorArgs = ['photo'];
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
                        Gallery Images
                    </label>

                    <input
                        type="file"
                        name="gallery[]"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                        multiple
                    >

                    <small class="text-muted">
                        You can select multiple images.
                    </small>

                </div>

            </div>

        </div>
    </div>


    
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                Settings
            </h5>
        </div>

        <div class="card-body px-4">

            <div class="row">

                <div class="col-md-6">

                    <div class="form-check form-switch">

                        <input
                            type="checkbox"
                            name="is_featured"
                            value="1"
                            class="form-check-input"
                            id="isFeatured"
                            <?php echo e(old('is_featured', $pooja->is_featured ?? false) ? 'checked' : ''); ?>

                        >

                        <label class="form-check-label" for="isFeatured">
                            Featured Pooja
                        </label>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="form-check form-switch">

                        <input
                            type="checkbox"
                            name="status"
                            value="1"
                            class="form-check-input"
                            id="status"
                            <?php echo e(old('status', $pooja->status ?? true) ? 'checked' : ''); ?>

                        >

                        <label class="form-check-label" for="status">
                            Active
                        </label>

                    </div>

                </div>

            </div>

        </div>
    </div>


    
    <div class="d-flex justify-content-end gap-2 mb-5">

        <a
            href="<?php echo e(route('admin.pooja.index')); ?>"
            class="btn btn-light border"
        >
            Cancel
        </a>

        <button
            type="submit"
            class="btn btn-primary px-4"
        >
            <i class="bi bi-check-lg"></i>

            <?php echo e(isset($pooja) ? 'Update Pooja' : 'Create Pooja'); ?>


        </button>

    </div>

</form>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

<script>

    // ADD BENEFIT
    document.getElementById('addBenefit').addEventListener('click', function () {

        const wrapper = document.getElementById('benefitsWrapper');

        const row = document.createElement('div');

        row.className = 'input-group mb-2 benefit-row';

        row.innerHTML = `
            <input
                type="text"
                name="benefits[]"
                class="form-control"
                placeholder="Enter benefit"
            >

            <button
                type="button"
                class="btn btn-outline-danger remove-row"
            >
                <i class="bi bi-trash"></i>
            </button>
        `;

        wrapper.appendChild(row);

    });


    // ADD SAMAGRI
    document.getElementById('addSamagri').addEventListener('click', function () {

        const wrapper = document.getElementById('samagriWrapper');

        const row = document.createElement('div');

        row.className = 'input-group mb-2 samagri-row';

        row.innerHTML = `
            <input
                type="text"
                name="samagri[]"
                class="form-control"
                placeholder="Enter samagri"
            >

            <button
                type="button"
                class="btn btn-outline-danger remove-row"
            >
                <i class="bi bi-trash"></i>
            </button>
        `;

        wrapper.appendChild(row);

    });


    // REMOVE ROW
    document.addEventListener('click', function (e) {

        const button = e.target.closest('.remove-row');

        if (!button) return;

        const row = button.closest('.input-group');

        if (row) {
            row.remove();
        }

    });

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/pooja/form.blade.php ENDPATH**/ ?>