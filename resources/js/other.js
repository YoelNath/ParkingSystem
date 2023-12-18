document.addEventListener("DOMContentLoaded",function(){
    var button = document.querySelector("#btn-gen");
    button.addEventListener( "click",()=>{
        window.location.href = "{{ url('/admin/export-report') }}";
    });
});