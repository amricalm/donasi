<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
        <div id="popup" class="popper bg-green-200 fixed text-green-700 rounded border border-green-400 py-2 px-4" x-placement="top" style="position: absolute; display: none; will-change: transform; top: 0px; left: 0px;"><span>Berhasil disalin!</span></div>
        <script src="<?php echo e(asset('js/clipboard.min.js')); ?>"></script>
        <script>
            var btnCopy = new ClipboardJS('.btn-copy');
            var popup = $('#popup');
            var popper = new Popper(btnCopy, popup,{placement: 'top',});
            popup.hide();
            btnCopy.on('success', function(e){
                popup.show();
                setTimeout(function(){popup.hide(); }, 2000);
                e.clearSelection();
            });
        </script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

