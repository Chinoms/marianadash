<?php $__env->startSection('pagecontent'); ?>
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">

                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
                <?php endif; ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ship Name</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(Auth::user()->hasPermission('admin')): ?>
                        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($profile->ship_name); ?></td>
                            <td><?php echo e($profile->contact_fname); ?> <?php echo e($profile->contact_lname); ?></td>
                            <td><?php echo e($profile->contact_email); ?> </td>
                            <td><a href="view-profile/<?php echo e($profile->id); ?>"><button class="btn btn-primary">View Profile</button></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php if(!Auth::user()->hasPermission('admin')): ?>
                        <?php $__currentLoopData = $my_profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($my_profile->ship_name); ?></td>
                            <td><?php echo e($my_profile->contact_fname); ?> <?php echo e($profile->contact_lname); ?></td>
                            <td><?php echo e($my_profile->contact_email); ?> </td>
                            <td><a href="view-profile/<?php echo e($profile->id); ?>"><button class="btn btn-primary">View Profile</button></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/marianadash/resources/views/admin/list-profiles.blade.php ENDPATH**/ ?>