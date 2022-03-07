<div class="row">
    <div class="col-md-12 tab-title">
        Intakes Tab
    </div>

    <div class="form-group col-md-12">
        <label for="intake_title"> Intake - Section Title </label>
        <input id="intake_title" type="text" class="form-control" name="intake_title" value="{{old('intake_title')}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="intake_description">Intake - Section Description </label>
        <textarea name="intake_description" class="summernoteEditor" cols="30" rows="5" required>{!! old('intake_description') !!}</textarea>
    </div>

    <div class="form-group col-lg-6">
        <br><br>
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload Background Image For First Intake</h4>
                    <input type="file" name="first_intake_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png' required/>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-6">
        <br><br>
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex"> Upload Background Image For Second Intake </h4>
                    <input type="file" name="second_intake_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png' required/>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="first_intake_session"> First Intake Session </label>
        <input id="first_intake_session" type="text" class="form-control" name="first_intake_session" value="{{old('first_intake_session')}}" required>
    </div>


    <div class="form-group col-md-6">
        <label for="second_intake_session"> Second Intake Session </label>
        <input id="second_intake_session" type="text" class="form-control" name="second_intake_session" value="{{old('second_intake_session')}}" required>
    </div>






</div>



