<div class="row">
    <div class="col-md-12 tab-title">
        Popular Courses Tab
    </div>



    <div class="form-group col-md-12">
        <label for="popular_course_title"> Popular Course - Section Title </label>
        <input id="popular_course_title" type="text" class="form-control" name="popular_course_title" value="{{old('popular_course_title')}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="popular_course_description"> Popular Course - Section Description </label>
        <textarea name="popular_course_description" class="summernoteEditor"  cols="30" rows="5" required>{!! old('popular_course_description') !!}</textarea>
    </div>


    <div class="form-group col-md-12">
         <span style="font-size: 14px;font-weight: bold"> <a href="{{route('course.index')}}"> <i class="icon-arrow-right"></i> Manage Course</a> </span>
    </div>


</div>



