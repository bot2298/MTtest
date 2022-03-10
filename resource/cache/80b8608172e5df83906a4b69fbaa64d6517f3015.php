<?php $__env->startSection('content'); ?>
        <div class="container">
                <div class="pt-5">
                        <form>
                                <div class="row justify-content-md-center">
                                        <div class="col-4">
                                                <input class="form-control form-control" type="file" name="file" id="file" accept=".csv"><br>
                                        </div>
                                        <div class="col-2">
                                                <input class="btn btn-primary" type="button" id="btn" value="Send" />
                                        </div>
                                </div>
                        </form>

                        <br>

                        <div id="cards" class="row"></div>
                </div>

        </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/MTtest/resource/views/index.blade.php ENDPATH**/ ?>