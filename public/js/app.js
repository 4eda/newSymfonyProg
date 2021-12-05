

$('#id_btn_diff').click(
    function (e){
        e.preventDefault();
        $('#id_diff_sear').removeClass('diff-search');
        $('id_lite_sear').addClass('diff-search');
    }
);