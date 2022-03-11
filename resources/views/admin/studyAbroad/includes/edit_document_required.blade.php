<div class="row">
    <div class="col-md-12 tab-title">
        Documents Required Tab
    </div>

    <div class="form-group col-md-12">
        <label for="document_required_title"> Document Required - Section Title </label>
        <input id="document_required_title" type="text" class="form-control" name="document_required_title" value="{{$study->document_required_title}}" required>
    </div>

    <div class="form-group col-md-12">
        <label for="document_required_description"> Document Required - Section Description </label>
        <textarea name="document_required_description" class="summernoteEditor"  cols="30" rows="5" required> {{$study->document_required_description}}</textarea>
    </div>

    <div class="form-group col-md-12">
        <span style="font-size: 14px;font-weight: bold"> <a href="{{route('document-required.index')}}" target="_blank"> <i class="icon-arrow-right"></i> Manage Required Document </a> </span>
    </div>


</div>



