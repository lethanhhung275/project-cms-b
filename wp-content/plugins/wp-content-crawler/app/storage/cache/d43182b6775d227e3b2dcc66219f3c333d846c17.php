<?php if(isset($_GET["success"])): ?>
    <?php $message = isset($_GET["message"]) && $_GET["message"] ? urldecode($_GET["message"]) : null; ?>
    <?php echo $__env->make('partials/alert', [
        'type'      =>  $_GET["success"] == 'true' ? 'success' : 'error',
        'message'   =>  $_GET["success"] == 'true' ?
                        ($message ?: _wpcc('Done')) :
                        ($message ?: _wpcc("An error occurred."))
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\project-cms-b\wp-content\plugins\wp-content-crawler\app\views/partials/success-alert.blade.php ENDPATH**/ ?>