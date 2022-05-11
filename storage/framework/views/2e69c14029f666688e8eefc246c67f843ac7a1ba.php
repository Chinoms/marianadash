<?php $__env->startSection('pagecontent'); ?>
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">

                <?php if(Auth::user()->hasRole('admin')): ?>
                dddsfs
                <?php endif; ?>

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
<br>
                <div class="accordion col" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ship's Info & Contact Info
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ship's Name</td>
                                            <td><?php echo e($oneProfile->ship_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ship Type</td>
                                            <td><?php echo e($oneProfile->ship_type); ?> </td>
                                        </tr>
                                        <tr>
                                            <td>IMO Number</td>
                                            <td><?php echo e($oneProfile->imo_number); ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Company Name</td>
                                            <td><?php echo e($oneProfile->company_name); ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Contact's Name</td>
                                            <td><?php echo e($oneProfile->contact_fname); ?> <?php echo e($oneProfile->contact_lname); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Email</td>
                                            <td><?php echo e($oneProfile->contact_email); ?> </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Files For Evaluation
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Document Name</th>
                                            <th scope="col">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ship's Particulars</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->ship_particulars)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Certificate of Registry</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->cert_registry)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>EIAPP Certificate</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->eiapp_cert)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Capacity Plan</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->capacity_plan)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sea Trial Report</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->sea_trial_report)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ship Safety Certificate</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->ship_safety_cert)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>NOx Tech File</td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->nox_tech_file)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Electric Power Table </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->electric_power_table)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>IAPP Certificate </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->iapp_cert)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>IAPP Record </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->iapp_record)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Marchinery Particulars </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->machinery_particulars)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Certificate of Classification </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->cert_classification)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Approved Cargo </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->approved_cargo)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Speedpower Curve </td>
                                            <td><a href="<?php echo e(asset('storage/'.$oneProfile->speedpower_curve)); ?>" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Other Files
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="<?php echo e(route('uploadotherfiles')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <p>The following files can be uploaded from here and can also be found here after uploads:</p>
                                        <br>
                                        <ul>
                                            <li>Proof of initial payment</li>
                                            <li>EEXI Initial Assessment</li>
                                            <li>Proof of Compliance with Required EEXI</li>
                                            <li>Proof of final payment</li>
                                            <li>EEXI Technical File</li>
                                        </ul>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label>File Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="hidden" value="<?php echo e($id); ?>" name="id">
                                            <label>Select File</label>
                                            <input type="file" class="form-control" name="other_file_upload">
                                            <input type="submit" value="Save" class="btn btn-primary mt-3">
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Document Name</th>
                                            <th scope="col">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $other_files_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other_file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($other_file->description); ?></td>
                                            <td><a href="<?php echo e(asset('storage/'.$other_file->other_file_upload)); ?>"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/marianadash/resources/views/admin/view-profile.blade.php ENDPATH**/ ?>