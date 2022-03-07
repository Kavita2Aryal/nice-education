<div class="row">
    <div class="col-md-12 tab-title">
        Post Study Work Visa Tab
    </div>

    <div class="form-group col-md-12">
        <label for="intake_title"> Work Visa - Section Title </label>
        <input id="work_visa_section_title" type="text" class="form-control" name="work_visa_section_title" value="{{old('work_visa_section_title')}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="intake_description">Work Visa - Section Description </label>
        <textarea name="work_visa_section_description" class="summernoteEditor" cols="30" rows="5" required>{!! old('work_visa_section_description') !!}</textarea>

    </div>

    <div class="form-group col-md-12">
        <label for="intake_description">Content for Yellow Section </label>
        <textarea name="yellow_section_content" class="summernoteEditor" cols="30" rows="5" required>{!! old('yellow_section_content') !!}</textarea>
        <br><br><br>
    </div>
    <div class="form-group col-lg-12">
        <h3 style="color: #d3d3d4"> <u> Content Below Yellow Section</u> </h3>
    </div>


    <div class="form-group col-lg-6">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload  Image ( Right Side)</h4>
                    <input type="file" name="image_below_yellow_section" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png' required/>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-6"></div>

    <div class="form-group col-md-12">
        <label for="first_intake_session"> Section Title ( Below yellow section ) </label>
        <input id="title_below_yellow_section" type="text" class="form-control" name="first_intake_session" value="{{old('first_intake_session')}}" required>
    </div>


    <div class="form-group col-md-12">
        <label for="intake_description"> Section Description ( Below yellow section ) </label>
        <textarea name="description_below_yellow_section" class="summernoteEditor" cols="30" rows="5" required>{!! old('intake_description') !!}</textarea>
    </div>

</div>



