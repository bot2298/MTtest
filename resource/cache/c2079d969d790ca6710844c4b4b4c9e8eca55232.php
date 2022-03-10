<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card  col-md-6">
            <h5 class="card-header">CustomerId: #<?php echo e($item['id']); ?></h5>
            <div class="card-body">
                <p class="card-text">Number of calls within the same continent: <?php echo e($item['totalCallsContinent']); ?></p>
                <p class="card-text">Total Duration of calls within the same continent: <?php echo e($item['totalDurationContinent']); ?></p>
                <p class="card-text">Total number of all calls: <?php echo e($item['totalCalls']); ?></p>
                <p class="card-text">The total duration of all calls: <?php echo e($item['totalDuration']); ?></p>
            </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Applications/MAMP/htdocs/MTtest/resource/views/card.blade.php ENDPATH**/ ?>