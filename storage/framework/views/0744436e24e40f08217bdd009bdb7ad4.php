


<?php $__env->startSection('title', 'Pooja List'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Pooja List</h3>
            <p class="text-muted mb-0">
                Manage all poojas available in the temple.
            </p>
        </div>

        <a href="<?php echo e(route('admin.pooja.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Add Pooja
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-hover align-middle" id="poojasTable" style="width:100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Pooja Name</th>
                            <th>Price</th>
                            <th>Offer Price</th>
                            <th>Duration</th>
                            <th>Timings</th>
                            <th>Location</th>
                            <th>Featured</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $pooja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                <td><?php echo e($loop->iteration); ?></td>

                                
                                <td>
                                    <?php if($item->photo): ?>
                                        <img
                                            src="<?php echo e(asset('storage/' . $item->photo)); ?>"
                                            alt="<?php echo e($item->name); ?>"
                                            width="60"
                                            height="60"
                                            style="object-fit: cover; border-radius: 10px;"
                                        >
                                    <?php else: ?>
                                        <div
                                            class="bg-light d-flex align-items-center justify-content-center"
                                            style="width:60px; height:60px; border-radius:10px;"
                                        >
                                            <i class="bi bi-image text-muted"></i>
                                        </div>
                                    <?php endif; ?>
                                </td>

                                
                                <td>
                                    <strong><?php echo e($item->name); ?></strong>

                                    <?php if($item->short_description): ?>
                                        <small class="d-block text-muted">
                                            <?php echo e(Str::limit($item->short_description, 50)); ?>

                                        </small>
                                    <?php endif; ?>
                                </td>

                                
                                <td>
                                    <span class="text-muted text-decoration-line-through">
                                        ₹<?php echo e(number_format($item->price, 2)); ?>

                                    </span>
                                </td>

                                
                                <td>
                                    <?php if($item->offer_price): ?>
                                        <strong class="text-success">
                                            ₹<?php echo e(number_format($item->offer_price, 2)); ?>

                                        </strong>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </td>

                                
                                <td><?php echo e($item->duration ?? '-'); ?></td>

                                
                                <td><?php echo e($item->timings ?? '-'); ?></td>

                                
                                <td><?php echo e($item->location ?? '-'); ?></td>

                                
                                <td>
                                    <?php if($item->is_featured): ?>
                                        <span class="badge bg-warning text-dark">
                                            Featured
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-light text-dark">
                                            No
                                        </span>
                                    <?php endif; ?>
                                </td>

                                
                                <td>
                                    <?php if($item->status): ?>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">
                                            Inactive
                                        </span>
                                    <?php endif; ?>
                                </td>

                                
                                <td>
                                    <div class="d-flex gap-2">

                                        
                                        <a
                                            href="<?php echo e(route('admin.pooja.show', $item->id)); ?>"
                                            class="btn btn-sm btn-outline-info"
                                            title="Preview"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        
                                        <a
                                            href="<?php echo e(route('admin.pooja.edit', $item->id)); ?>"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit"
                                        >
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        
                                        <form
                                            action="<?php echo e(route('admin.pooja.destroy', $item->id)); ?>"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this pooja?');"
                                        >
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Delete"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css"
    >
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#poojasTable').DataTable({
                pageLength: 10,
                responsive: true,
                ordering: true,
                searching: true,
                lengthChange: true,
                order: [[2, 'asc']],

                language: {
                    emptyTable: 'No rows found',
                    zeroRecords: 'No matching records found'
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/pooja/index.blade.php ENDPATH**/ ?>