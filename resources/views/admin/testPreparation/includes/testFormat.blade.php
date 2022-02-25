<div class="row">
    <div class="col-md-12 tab-title">
        Format Tab
    </div>


    <div class="form-group col-md-12">
        <label for="format_title">Title </label>
        <input id="format_title" type="text" class="form-control" name="format_title" value="{{ old('format_title') }}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="summernoteEditor4">Description </label>
        <textarea name="format_description" id="summernoteEditor4" cols="30" rows="5" required>{!! old('format_description') !!}</textarea>
    </div>


</div>


<div class="row">
    <div class="col-md-12 tab-title">
        <br>
        Exam Pattern
        <br>
    </div>


    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label>Reading </label>
        <br>
        <label> Description Of Reading Pattern </label>
        <textarea name="reading_pattern" id="summernoteEditor5" class="form-control" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Listening </label>
        <br>
        <label> Description Of Listening Pattern </label>
        <textarea name="listening_pattern" id="summernoteEditor6" class="form-control" cols="30" rows="5"> </textarea>
    </div>

</div>


<div class="row">

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label> Writing </label>
        <br>
        <label> Description Of Writing Pattern </label>
        <textarea name="writing_pattern" id="summernoteEditor7" class="form-control" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group col-md-6 testSection" style="background-color: #FAFAFA">
        <label for="email"> Speaking </label>
        <br>
        <label for="email"> Description Of Speaking Pattern </label>
        <textarea name="speaking_pattern" id="summernoteEditor8" class="form-control" cols="30" rows="5"></textarea>
    </div>

</div>


