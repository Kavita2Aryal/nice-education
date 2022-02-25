<div class="row">
    <div class="col-md-12 tab-title">
         Preparation Tab
    </div>


    <div class="form-group col-lg-6">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload Image Left

                    </h4>
                    <input type="file" name="preparation_left_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-6">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex">Upload Image Right

                    </h4>
                    <input type="file" name="preparation_right_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-3"></div>

    <div class="form-group col-md-12">
        <label for="preparation_title">Title </label>
        <input id="preparation_title" type="text" class="form-control" name="preparation_title" value="{{old('preparation_title')}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor3">Description </label>
        <textarea name="preparation_description" id="summernoteEditor3" cols="30" rows="5" required> {!! old('preparation_description') !!}</textarea>
    </div>

    <div class="form-group col-md-12">
        <label class="card-title"> Add Recommended Books </label>
        <br>
        <button type="button" class="btn btn-xs btn-success pull-right addBook"> <i class="ti-plus"></i> </button>
    </div>
</div>
<div class="appendHereCourse">
    <div id="cloneBook" style="display: none">
        <br>
        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">
            <div class="form-group col-md-12">
                <label>Book Title</label>
                <input type="text" class="form-control"  name="book_title[]">
            </div>
            <div class="form-group col-md-12">
                <label> Book Short Description </label>
                <textarea name="book_description[]" class="form-control" cols="30" rows="5"> </textarea>
            </div>
            <div class="form-group col-md-12">
                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>
            </div>
        </div>
    </div>
    <div class="addHereBook">

    </div>
</div>


<div class="row">
    <div class="col-md-12 tab-title">
        <br>
        Test Preparation - Practice Section
        <br>
    </div>


    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Title Of Reading Practice </label>
        <input type="text" name="reading_practice_title" class="form-control" required>
        <br>
        <label> Description Of Reading Practice </label>
        <textarea name="reading_practice" class="form-control" cols="30" rows="5" required></textarea>
    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Title Of Speaking Practice </label>
        <input type="text" name="speaking_practice_title" class="form-control" required>
        <br>
        <label> Description Of Speaking Practice </label>
        <textarea name="speaking_practice" class="form-control" cols="30" rows="5" required> </textarea>
    </div>

</div>
<div class="row">

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Title Of Listening Practice </label>
        <input type="text" name="listening_practice_title" class="form-control" required>
        <br>
        <label> Description Of Listening Practice </label>
        <textarea name="listening_practice" class="form-control" cols="30" rows="5" required></textarea>
    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Title Of Writing Practice </label>
        <input type="text" name="writing_practice_title" class="form-control" required>
        <br>
        <label> Description Of Writing Practice </label>
        <textarea name="writing_practice" class="form-control" cols="30" rows="5" required></textarea>
    </div>

</div>

@push('custom-scripts')
    <script>
        $(document).ready(function(){
            $('#summernoteEditor3').summernote({
                height: 150,
            });
            //Add item
            var countBook = 1;
            // add ckeditor
            $(".addBook").click(function(){

                event.preventDefault();

                var $fieldHTMLBook = $('<div>',
                    {
                        'html': $("#cloneBook").html()
                    });
                // insert new group after last one
                $('.addHereBook').append($fieldHTMLBook);
                // instantiate ckeditor on new textarea

                $fieldHTMLBook.find('textarea').summernote(
                    {
                        height: 150,
                    }
                );
                countBook++;
            });

            //remove content
            $("body").on("click",".remove-section",function(){
                event.preventDefault();
                $(this).closest('.row').parent().remove();
            });
        });
    </script>

@endpush
