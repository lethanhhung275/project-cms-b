<div class="input-container">
    <div class="input-group button-input-group">

        <?php echo $__env->make('form-items.partials.single-button', [
            'text'          => $isLanguagesAvailable ? _wpcc('Refresh languages') : _wpcc('Load languages'),
            'buttonClass'   => "load-languages {$class}",
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php echo $__env->make('partials/test-result-container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project-cms-b\wp-content\plugins\wp-content-crawler\app\views/form-items/partials/button-load-languages.blade.php ENDPATH**/ ?>