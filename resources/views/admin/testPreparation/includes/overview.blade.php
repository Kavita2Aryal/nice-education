<div class="row">
    <div class="col-md-12 tab-title">
        Overview Tab
    </div>

    <div class="col-lg-3"></div>
    <div class="form-group col-lg-6">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload Image For Exam Type Section</h4>
                    <input type="file" name="overview_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png' required/>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>

    <div class="form-group col-md-12">
        <label for="overview_title">Title </label>
        <input id="overview_title" type="text" class="form-control" name="overview_title" value="{{old('overview_title')}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor">Description </label>
        <textarea name="overview_description" id="summernoteEditor" cols="30" rows="5" required>{!! old('overview_description') !!}</textarea>
    </div>

    <div class="form-group col-md-12">
        <label class="card-title"> Add Exam Type </label>
        <br>
        <button type="button" name="addTest" class="btn btn-xs btn-success pull-right addTest"> <i class="ti-plus"></i> </button>
    </div>
</div>
<div class="appendHere">
    <div id="clone" style="display: none">
        <br>
        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">

            <div class="form-group col-md-12">
                <label>Exam Title</label>
                <input type="text" class="form-control"   name="exam_title[]">
            </div>

            <div class="form-group col-md-12">
                <label> Exam Description </label>
                <textarea name="exam_detail[]" class="summernoteEditor2" cols="30" rows="5">  </textarea>
            </div>

            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>

            </div>
        </div>
    </div>

    <div class="addHere">

    </div>


</div>


@push('custom-scripts')
    <script>
        $(document).ready(function(){

            //Add item
            var count = 1;
            // add ckeditor
            $(".addTest").click(function(){
                event.preventDefault();

                var $fieldHTML = $('<div>',
                    {
                        'html': $("#clone").html()
                    });
                // insert new group after last one
                $('.addHere').append($fieldHTML);
                // instantiate ckeditor on new textarea

                $fieldHTML.find('input').attr("data-parsley-trigger","keyup");
                $fieldHTML.find('input').attr("required","");
                $fieldHTML.find('textarea').attr("data-parsley-trigger","keyup");
                $fieldHTML.find('textarea').attr("data-parsley-errors-container","#cell-phone-validation-error-block"+count);
                $fieldHTML.find('textarea').attr("data-parsley-error-message","This field is required");
                $fieldHTML.find('textarea').after(`<div class="margin-top10" id="cell-phone-validation-error-block${count}"></div>`);

                $fieldHTML.find('textarea').summernote(
                    {
                        height: 150,
                    }
                );
                count++;
            });

            //remove content
            $("body").on("click",".remove-section",function(){
                event.preventDefault();
                $(this).closest('.row').parent().remove();
            });
        });
    </script>

@endpush

