<div class="row">
    <div class="col-md-12 tab-title">
        Overview Tab
    </div>

    <div class="col-lg-3"></div>
    <div class="form-group col-lg-6">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload Image

                    </h4>
                    <input type="file" name="test_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>

    <div class="form-group col-md-12">
        <label for="email">Title </label>
        <input type="text" class="form-control" name="overview_title">
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor">Description </label>
        <textarea name="overview_description" id="summernoteEditor" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group col-md-12">
        <label class="card-title"> Add Exam Type </label>
        <br>
        <button type="button" class="btn btn-xs btn-success pull-right addTest"> <i class="ti-plus"></i> </button>
    </div>
</div>
<div class="appendHere">
    <div id="clone" style="display: none">
        <br>
        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">

            <div class="form-group col-md-12">
                <label>Exam Title</label>
                <input type="text" class="form-control" value=" " name="course_title[]">
            </div>

            <div class="form-group col-md-12">
                <label> Exam Description </label>
                <textarea name="course_description[]" id="summernoteEditor2" cols="30" rows="5"> Enter exam Detail Here.....</textarea>
            </div>

            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>

            </div>


        </div>
    </div>
</div>
