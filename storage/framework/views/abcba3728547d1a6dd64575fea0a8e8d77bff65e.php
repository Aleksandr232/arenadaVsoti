<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование статьи</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- form start -->
                <form role="form" method="post" action="<?php echo e(route('posts.update', ['post' => $post->id])); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label>
                                <input type="hidden" name="old_img" value="<?php echo e($post->img); ?>">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="title">Заголовок статьи</label>
                            <input type="text" name="title" id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($post->title); ?>">
                        </div>
                        <div class="form-group">
                            <label for="content">Описание статьи</label>
                            <textarea name="content" id="content" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="10"><?php echo e($post->content); ?></textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="img">Фотография статьи</label>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="img" value="<?php echo e($post->img); ?>">
                                <label class="custom-file-label" for="file">Выберите фото</label>
                            </div>
                            <div style="margin-top: 40px; width: 280px;">
                                <img src="<?php echo e(asset('uploads/' . $post->img)); ?>" style="width: 100%; object-fit: cover" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="<?php echo e(route('posts.index')); ?>" type="button" class="btn btn-success">Назад</a>
                        <button type="submit" class="btn btn-primary">Сохранить статью</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/user76834/data/www/xn--80aagge2ckkol0hd.xn--p1ai/resources/views/admin/posts/edit.blade.php ENDPATH**/ ?>