<div class="row">
    <div class="col-md-12 tab-title">
         Preparation Tab
    </div>


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
        <textarea name="overview_description" id="summernoteEditor3" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group col-md-12">
        <label class="card-title"> Add Recommended Books </label>
        <br>
        <button type="button" class="btn btn-xs btn-success pull-right addBook"> <i class="ti-plus"></i> </button>
    </div>
</div>
<div class="appendHere">
    <div id="cloneBook" style="display: none">
        <br>
        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">

            <div class="form-group col-md-12">
                <label>Book Title</label>
                <input type="text" class="form-control" value=" " name="course_title[]">
            </div>

            <div class="form-group col-md-12">
                <label> Book Short Description </label>
                <textarea name="course_description[]" class="form-control" cols="30" rows="5"> Book short description here.....</textarea>
            </div>

            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>

            </div>


        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 tab-title">
        <br>
        Test Preparation - Practice Section
        <br>
    </div>


    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label for="email"> Title Of Reading Practice </label>
        <input type="text" class="form-control" name="overview_title">
        <br>
        <label for="email"> Description Of Reading Practice </label>
        <textarea name="course_description[]" class="form-control" cols="30" rows="5"></textarea>


    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">

        <label for="email"> Title Of Speaking Practice </label>
        <input type="text" class="form-control" name="overview_title">
        <br>
        <label for="email"> Description Of Speaking Practice </label>
        <textarea name="course_description[]" class="form-control" cols="30" rows="5"> </textarea>
    </div>

</div>


<div class="row">

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label for="email"> Title Of Listening Practice </label>
        <input type="text" class="form-control" name="overview_title">
        <br>
        <label for="email"> Description Of Listening Practice </label>
        <textarea name="course_description[]" class="form-control" cols="30" rows="5"></textarea>


    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">

        <label for="email"> Title Of Writing Practice </label>
        <input type="text" class="form-control" name="overview_title">
        <br>
        <label for="email"> Description Of Writing Practice </label>
        <textarea name="course_description[]" class="form-control" cols="30" rows="5"></textarea>
    </div>

</div>
