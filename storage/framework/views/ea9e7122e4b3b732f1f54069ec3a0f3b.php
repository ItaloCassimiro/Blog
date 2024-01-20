<div class="inputArea">
    <label for="<?php echo e($name); ?>">
        <?php echo e($label ?? ''); ?>

    </label>
    <input 
    type="<?php echo e(empty($type) ? 'text' : $type); ?>"
    id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>"
        <?php echo e(empty($required) ? '': 'required'); ?>

        value="<?php echo e($value ?? ''); ?>"
    />
</div><?php /**PATH C:\Laravel\blog\resources\views/components/form/text_input.blade.php ENDPATH**/ ?>