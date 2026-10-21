

<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Members List</h3>
            
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body">

            <table class="table table-hover align-middle" id="usersTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Status</th>
                        <th>Joined On</th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->mobile ?? '-'); ?></td>
                            <td><?php echo e($user->gender ?? '-'); ?></td>
                            <td>
                                <span class="badge bg-info-subtle text-info-emphasis">
                                    <?php echo e($user->marital_status ?? '-'); ?>

                                </span>
                            </td>
                            <td><?php echo e($user->city ?? '-'); ?></td>
                            <td><?php echo e($user->state ?? '-'); ?></td>
                            <td>
                                <?php if($user->status): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($user->created_at->format('d M Y')); ?></td>
                              <td class="text-center">
                                <a href="<?php echo e(route('admin.users.show', $user)); ?>"
                                   class="btn btn-sm btn-icon-action" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                              
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10" class="text-center py-5">
                                <i class="bi bi-inbox fs-1 text-muted d-block mb-2"></i>
                                No users found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function () {
    // Suppress DataTables alert popups globally
    $.fn.dataTable.ext.errMode = 'none';

    $('#usersTable').DataTable({
        pageLength: 10,
        responsive: true,
        language: {
            emptyTable: "No users found."
        }
    });
});
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/users/index.blade.php ENDPATH**/ ?>