<div class="row">
    <div class="col-md-12 tab-title">
        FAQ Tab
    </div>


    <div class="form-group col-md-12">
        <label for="email">Question </label>
        <input type="text" class="form-control" name="overview_title">
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor">Answer </label>
        <textarea name="overview_description" id="summernoteEditor9" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group col-md-12">

        <button type="button" class="btn btn-xs btn-success pull-right addFaq"> <i class="ti-plus"></i> </button>
    </div>
</div>
<div class="appendHereFaq">
    <div id="cloneFaq" style="display: none">
        <br>
        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">

            <div class="form-group col-md-12">
                <label>Enter Question</label>
                <input type="text" class="form-control" value=" " name="course_title[]">
            </div>

            <div class="form-group col-md-12">
                <label> Enter  Answer </label>
                <textarea name="course_description[]" id="summernoteEditor10" cols="30" rows="5"> </textarea>
            </div>

            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>

            </div>


        </div>
    </div>
</div>
