<?php echo $__env->make('frontend.layouts.headertwo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container mt-3">
<div  class="title"><h1><?php echo e($guide->title); ?></h1></div>
<div class="content">
        <?php echo $guide->content; ?>

</div>
</div>

<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/guidelines.blade.php ENDPATH**/ ?>