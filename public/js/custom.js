$(function () {
    //loader before page load
    $(".preload").fadeOut(800, function() {
        $(".content").fadeIn(500);
    });

    $('#parsleyValidationForm').parsley();

    /*Summernote editor*/
    if ($("#summernoteEditor").length) {
        $('#summernoteEditor').summernote({
            height: 200,
            tabsize: 2
        });
    }
});

function convertToSlug(title)
{
    return title
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/&/g,'and')
        .replace(/[^\w-]+/g,'');
}

$('#title').on('keyup',function(){
    var title=$(this).val();
    var slug=convertToSlug(title);
    $('#slug').val(slug);
});


//FOR sweet alert  (toast)

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})


// for multi-step form wizard validation
$(function () {
    var $sections = $('.form-section');

    function navigateTo(index) {
        // Mark the current section with the class 'current'
        $sections
            .removeClass('current')
            .eq(index)
            .addClass('current');
        // Show only the navigation buttons that make sense for the current section:
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);
    }

    function curIndex() {
        // Return the current index by looking at which section has the class 'current'
        return $sections.index($sections.filter('.current'));
    }

    // Previous button is easy, just go back
    $('.form-navigation .previous').click(function() {
        navigateTo(curIndex() - 1);
    });

    // Next button goes forward iff current block validates
    $('.form-navigation .next').click(function() {
        $('.demo-form').parsley().whenValidate({
            group: 'block-' + curIndex()
        }).done(function() {
            navigateTo(curIndex() + 1);
        });
    });

    // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });
    navigateTo(0); // Start at the beginning
});


$(document).ready(function(){


    // for format tab
    $('#summernoteEditor4').summernote({
        height: 150,
    });

    $('#summernoteEditor5').summernote({
        height: 150,
    });
    $('#summernoteEditor6').summernote({
        height: 150,
    });
    $('#summernoteEditor7').summernote({
        height: 150,
    });
    $('#summernoteEditor8').summernote({
        height: 150,
    });

    /// Faq tab

    $('#summernoteEditor9').summernote({
        height: 150,
    });

});


