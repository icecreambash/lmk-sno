import './bootstrap';



$(document).ready(function() {
    setTimeout(function (){
        $('#preloader').attr('hidden','hidden');
        $('#content').removeAttr('hidden');
    },500)
});
