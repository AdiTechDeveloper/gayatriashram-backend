

<?php $__env->startSection('title', 'Puja Bookings'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">Puja Bookings</h3>

        <p class="text-muted mb-0">
            Manage all puja bookings received from devotees.
        </p>
    </div>

</div>


<?php if(session('success')): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        <i class="bi bi-check-circle me-2"></i>

        <?php echo e(session('success')); ?>


        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>

<?php endif; ?>


<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body">

        <div class="table-responsive">

            <table
                class="table table-hover align-middle"
                id="bookingsTable"
                style="width:100%;"
            >

                <thead>

                    <tr>
                        <th>#</th>
                        <th>Booking ID</th>
                        <th>Devotee</th>
                        <th>Mobile</th>
                        <th>Puja</th>
                        <th>Booking Date</th>
                        <th>Time Slot</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Booked On</th>
                        <th>Action</th>
                    </tr>

                </thead>

                <tbody>

                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td>
                                <?php echo e($loop->iteration); ?>

                            </td>


                            <td>
                                <strong>
                                    #<?php echo e($booking->id); ?>

                                </strong>
                            </td>


                            <td>

                                <strong>
                                    <?php echo e($booking->user?->name ?? 'Guest'); ?>

                                </strong>

                                <?php if($booking->user?->email): ?>

                                    <small class="d-block text-muted">
                                        <?php echo e($booking->user->email); ?>

                                    </small>

                                <?php endif; ?>

                            </td>


                            <td>
                                <?php echo e($booking->user?->mobile ?? '-'); ?>

                            </td>


                            <td>
                                <?php echo e($booking->puja?->name ?? '-'); ?>

                            </td>


                            <td>
                                <?php echo e($booking->booking_date?->format('d M Y') ?? '-'); ?>

                            </td>


                            <td>
                                <?php echo e($booking->time_slot ?? '-'); ?>

                            </td>


                            <td>

                                <strong>
                                    ₹<?php echo e(number_format($booking->amount, 2)); ?>

                                </strong>

                            </td>


                            <td>

                                <?php if($booking->payment_status === 'paid'): ?>

                                    <span class="badge bg-success">
                                        Paid
                                    </span>

                                <?php elseif($booking->payment_status === 'pending'): ?>

                                    <span class="badge bg-warning text-dark">
                                        Pending
                                    </span>

                                <?php elseif($booking->payment_status === 'failed'): ?>

                                    <span class="badge bg-danger">
                                        Failed
                                    </span>

                                <?php else: ?>

                                    <span class="badge bg-secondary">
                                        <?php echo e(ucfirst($booking->payment_status ?? 'Unknown')); ?>

                                    </span>

                                <?php endif; ?>

                            </td>


                            <td>
                                <?php echo e($booking->created_at?->format('d M Y, h:i A') ?? '-'); ?>

                            </td>


                            <td>

                                <a
                                    href="<?php echo e(route('admin.puja-booking.show', $booking->id)); ?>"
                                    class="btn btn-sm btn-outline-info"
                                    title="View Booking"
                                >
                                    <i class="bi bi-eye"></i>
                                </a>

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

        $('#bookingsTable').DataTable({

            pageLength: 10,

            responsive: true,

            ordering: true,

            searching: true,

            lengthChange: true,

            order: [[9, 'desc']]

        });

    });

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/puja-bookings/index.blade.php ENDPATH**/ ?>