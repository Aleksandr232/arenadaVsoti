<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Главная страница</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <?php if(count($posts)): ?>
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo e(count($posts)); ?></h3>

                                    <p>Всего статей</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo e(route('posts.index')); ?>" class="small-box-footer">Список статей <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        <?php else: ?>
                            <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Всего статей</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="<?php echo e(route('posts.index')); ?>" class="small-box-footer">Список статей <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        <?php endif; ?>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/height-rent/resources/views/admin/home/index.blade.php ENDPATH**/ ?>