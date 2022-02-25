<div class="row">
    <div class="col-md-12 tab-title">
        FAQ Tab
    </div>

    <div class="form-group col-md-12">
        <label for="email">Question </label>
        <input type="text" class="form-control" name="question[]">
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor">Answer </label>
        <textarea name="answer[]" id="summernoteEditor9" cols="30" rows="5"></textarea>
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
                <input type="text" name="question[]" class="form-control">
            </div>

            <div class="form-group col-md-12">
                <label> Enter  Answer </label>
                <textarea name="answer[]"  cols="30" rows="5"> </textarea>
            </div>

            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>

            </div>
        </div>
    </div>

    <div class="addFaqHere">

    </div>

</div>



@push('custom-scripts')
    <script>
        $(document).ready(function(){

            //Add item
            var countFaq = 1;
            // add ckeditor
            $(".addFaq").click(function(){

                event.preventDefault();

                var $fieldHTMLFaq = $('<div>',
                    {
                        'html': $("#cloneFaq").html()
                    });
                // insert new group after last one
                $('.addFaqHere').append($fieldHTMLFaq);
                // instantiate ckeditor on new textarea

                $fieldHTMLFaq.find('textarea').summernote(
                    {
                        height: 150,
                    }
                );
                countFaq++;
            });

            //remove content
            $("body").on("click",".remove-section",function(){
                event.preventDefault();
                $(this).closest('.row').parent().remove();
            });
        });
    </script>

@endpush

