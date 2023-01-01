<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Список статей</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3">Добавить статью</a>
                            <?php if(count($posts)): ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Фото</th>
                                            <th>Название статьи</th>
                                            <th>Дата создания</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td style="width: 80px;">
                                                    <img src="<?php echo e(asset('uploads/' . $post->img)); ?>" style="width: 100%; object-fit: cover" alt="">
                                                </td>
                                                <td><?php echo e($post->title); ?></td>
                                                <td><?php echo e($post->created_at); ?></td>
                                                <td style="display: flex;">
                                                    <a href="<?php echo e(route('posts.edit', ['post' => $post->id])); ?>" class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form action="<?php echo e(route('posts.destroy', ['post' => $post->id])); ?>" method="post" class="float-left">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i
                                                                class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                <p>Статей пока нет...</p>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <?php echo e($posts->links()); ?>


                            
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/height-rent/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>