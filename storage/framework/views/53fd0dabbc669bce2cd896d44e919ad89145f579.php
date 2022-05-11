<?php $__env->startSection('pagecontent'); ?>
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">
                <div col-lg-12>
                    <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('message')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                    <div class="">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(Auth::user()->hasRole('admin')): ?>  
                    dddsfs
                <?php endif; ?>
                <form action="<?php echo e(route('saveprofile')); ?>" method="post" enctype="multipart/form-data" class="row">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-6">
                        <label class="control-label mt-3" for="ship_name">
                            Ship's Name
                        </label>
                        <input class="form-control" name="ship_name" value="<?php echo e(old('ship_name')); ?>" type="text" />

                        <label class="control-label mt-3" for="imo_number">
                            IMO Number
                        </label>
                        <input class="form-control" name="imo_number" value="<?php echo e(old('imo_number')); ?>" type="text" />

                        <label class="control-label mt-3" for="ship_type">
                            Ship Type
                        </label>
                        <input class="form-control" name="ship_type" value="<?php echo e(old('ship_type')); ?>" type="text" />

                        <label class="control-label mt-3" for="company_name">
                            Company Name
                        </label>
                        <input class="form-control" name="company_name" value="<?php echo e(old('company_name')); ?>" type="text" />


                    </div>

                    <div class="col-md-6">
                        <label class="control-label mt-3" for="contact_fname">
                            Contact Person's First Name
                        </label>
                        <input class="form-control" name="contact_fname" value="<?php echo e(old('contact_fname')); ?>" type="text" />

                        <label class="control-label mt-3" for="contact_lname">
                            Contact Person's Surname
                        </label>
                        <input class="form-control" name="contact_lname" value="<?php echo e(old('contact_lname')); ?>" type="text" />


                        <label class="control-label mt-3" for="contact_email">
                            Email Address
                        </label>
                        <input class="form-control" name="contact_email" value="<?php echo e(old('contact_email')); ?>" type="text" />



                    </div>
                    
                    <input type="submit" class="btn btn-primary mt-5 pul-right" value="Submit Request">
                </form>
            </div>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/marianadash/resources/views/user/create-profile.blade.php ENDPATH**/ ?>