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
                <form action="<?php echo e(route('saveprofilesteptwo')); ?>" method="post" enctype="multipart/form-data" class="row">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e(session()->get('id')); ?>" name="row_id">

                    <div class="col-md-6">
                        <label class="control-label mt-3" for="ship_particulars">
                            Ship's Particulars
                        </label>
                        <input class="form-control" name="ship_particulars" type="file" />

                        <label class="control-label mt-3" for="cert_registry">
                            Certificate of Registry
                        </label>
                        <input class="form-control" name="cert_registry" type="file" />

                        <label class="control-label mt-3" for="eiapp_cert">
                            EIAPP Certificate
                        </label>
                        <input class="form-control" name="eiapp_cert" type="file" />

                        <label class="control-label mt-3" for="capacity_plan">
                            Capacity Plan
                        </label>
                        <input class="form-control" name="capacity_plan" type="file" />

                        <label class="control-label mt-3" for="sea_trial_report">
                            Sea Trial Report
                        </label>
                        <input class="form-control" name="sea_trial_report" type="file" />

                        <label class="control-label mt-3" for="ship_safety_cert">
                            Ship Safety Equipment Certificate
                        </label>
                        <input class="form-control" name="ship_safety_cert" type="file" />

                        <label class="control-label mt-3" for="nox_tech_file">
                            NOx Technical File
                        </label>
                        <input class="form-control" name="nox_tech_file" type="file" />

                        <label class="control-label mt-3" for="electric_power_table">
                            Electric Power Table for EEDI (if available)
                        </label>
                        <input class="form-control" name="electric_power_table" type="file" />

                    </div>


                    <div class="col-md-6">
                        <label class="control-label mt-3" for="iapp_cert">
                            IAPP Certificate
                        </label>
                        <input class="form-control" name="iapp_cert" type="file" />

                        <label class="control-label mt-3" for="iapp_record">
                            IAPP Record of Construction and Equipment
                        </label>
                        <input class="form-control" name="iapp_record" type="file" />

                        <label class="control-label mt-3" for="eiapp_cert">
                            EIAPP Certificate
                        </label>
                        <input class="form-control" name="eiapp_cert" type="file" />

                        <label class="control-label mt-3" for="machinery_particulars">
                            Machinery Particulars/Machinery Operating Manual
                        </label>
                        <input class="form-control" name="machinery_particulars" type="file" />

                        <label class="control-label mt-3" for="cert_classification">
                            Certificate of Classification
                        </label>
                        <input class="form-control" name="cert_classification" type="file" />

                        <label class="control-label mt-3" for="approved_cargo">
                            Record of Approved Cargo Ship Safety Equipment
                        </label>
                        <input class="form-control" name="approved_cargo" type="file" />

                        <label class="control-label mt-3" for="speedpower_curve">
                            Speed-power Curve
                        </label>
                        <input class="form-control" name="speedpower_curve" type="file" />

                    </div>

                    <input type="submit" class="btn btn-primary mt-5 pul-right" value="Submit Request">
                </form>
            </div>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/marianadash/resources/views/user/create-profile-step-two.blade.php ENDPATH**/ ?>