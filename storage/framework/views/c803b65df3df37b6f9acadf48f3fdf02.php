

<?php $__env->startSection('title', 'Videos'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-0">Videos</h3>
            <p class="text-muted mb-0">
                Manage temple videos, events, aartis and spiritual content.
            </p>
        </div>

        <a href="<?php echo e(route('admin.video.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Add Video
        </a>

    </div>


    
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="bi bi-check-circle me-2"></i>
            <?php echo e(session('success')); ?>


            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>


    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle" id="videosTable" style="width:100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Language</th>
                            <th>Duration</th>
                            <th>Featured</th>
                            <th>Status</th>
                            <th>Published</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td>
                                    <?php echo e($loop->iteration); ?>

                                </td>

                                <td>
                                    <?php if($video->thumbnail): ?>
                                        <img src="<?php echo e(asset('storage/' . $video->thumbnail)); ?>" alt="<?php echo e($video->title); ?>"
                                            width="90" height="55" style="object-fit: cover; border-radius: 8px;">
                                    <?php else: ?>
                                        <div class="bg-light d-flex align-items-center justify-content-center"
                                            style="
                            width:90px;
                            height:55px;
                            border-radius:8px;
                        ">
                                            <i class="bi bi-play-btn fs-4 text-muted"></i>
                                        </div>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <strong><?php echo e($video->title); ?></strong>

                                    <?php if($video->description): ?>
                                        <small class="d-block text-muted">
                                            <?php echo e(Str::limit($video->description, 50)); ?>

                                        </small>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php echo e($video->category ?? '-'); ?>

                                </td>

                                <td>
                                    <?php echo e($video->language ?? '-'); ?>

                                </td>

                                <td>
                                    <?php echo e($video->duration ?? '-'); ?>

                                </td>

                                <td>
                                    <?php if($video->featured): ?>
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
                                    <?php if($video->status): ?>
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
                                    <?php echo e($video->published_at?->format('d M Y') ?? '-'); ?>

                                </td>

                                <td>
                                    <div class="d-flex gap-2">

                                        <a href="<?php echo e(route('admin.video.show', $video->id)); ?>"
                                            class="btn btn-sm btn-outline-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="<?php echo e(route('admin.video.edit', $video->id)); ?>"
                                            class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="<?php echo e(route('admin.video.destroy', $video->id)); ?>" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this video?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
<?php $__env->stopPush(); ?>


<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#videosTable').DataTable({

                pageLength: 10,

                responsive: true,

                ordering: true,

                searching: true,

                lengthChange: true,

                order: [
                    [2, 'asc']
                ],

                language: {
                    emptyTable: "No videos found."
                }

            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\gayatri_backend\resources\views/admin/video/index.blade.php ENDPATH**/ ?>