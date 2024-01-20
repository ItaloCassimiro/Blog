<div class="inputArea">
    <label for="<?php echo e($name); ?>">
        <?php echo e($label ?? ''); ?>

    </label>
    <textarea name="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>"
    <?php echo e(empty($required) ? '': 'required'); ?>><?php echo e($value ?? ''); ?></textarea>
</div><?php /**PATH C:\Laravel\blog\resources\views/components/form/textarea_input.blade.php ENDPATH**/ ?>