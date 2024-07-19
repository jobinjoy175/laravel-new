<!DOCTYPE html>
<html>
<head>
    <title>Master String Checker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Master String Check</h2>
    <form action="<?php echo e(route('checking')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="master_string">Master Strings</label>
            <input type="text" class="form-control" id="master_string" name="master_string" required>
        </div>
        <div class="form-group">
            <label for="string_1">String 1</label>
            <input type="text" class="form-control" id="string_1" name="string_1" required>
        </div>
        <div class="form-group">
            <label for="string_2">String 2</label>
            <input type="text" class="form-control" id="string_2" name="string_2" required>
        </div>
        <div class="form-group">
            <label for="string_3">String 3</label>
            <input type="text" class="form-control" id="string_3" name="string_3" required>
        </div>
        <div class="form-group">
            <label for="string_4">String 4</label>
            <input type="text" class="form-control" id="string_4" name="string_4" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Strings</button>
    </form>

    <?php if(isset($results)): ?>
        <div class="mt-5">
            <h4>Results:</h4>
            <ul>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $string => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($string); ?>: <?php echo e($result); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
</body>
</html><?php /**PATH D:\laravel\example-app\resources\views/index.blade.php ENDPATH**/ ?>