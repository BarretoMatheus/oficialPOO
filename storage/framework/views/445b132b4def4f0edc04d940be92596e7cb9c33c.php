<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                    <?php $__currentLoopData = $coordenadors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coordenador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($coordenador->id); ?></li>
                    <li><?php echo e($coordenador->nome); ?></li>
                    <li><?php echo e($coordenador->sobrenome); ?></li>
                    <li><?php echo e($coordenador->email); ?></li>
                    <li><?php echo e($coordenador->telefone); ?></li>
                    <li><?php echo e($coordenador->cursos_id); ?></li>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aluno09\oficialPOO\resources\views/coordenadors.blade.php ENDPATH**/ ?>