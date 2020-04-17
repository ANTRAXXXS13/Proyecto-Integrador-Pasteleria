<div id="popover_html" style="display:none;">
<p><img src="images/p_image" class="img-responsive img-thumbnail" /></p>
<p><label>Name :</label>p_name</p>
<p><label>Address : </label>p_address</p>
<p><label>Gender : </label>p_gender</p>
<p><label>Designation : </label>p_design</p>
<p><label>Age : </label>p_age</p>
</div>


jQuery(document).ready(function(){
    jQuery('.hover').popover({
    title: popoverContent,
    html: true,
    placement: 'top-end',
    trigger: 'hover'
});


function popoverContent() {
    var content = '';
    var element = $(this);
    var id = element.attr("id");
    $.ajax({
    url: "load_data.php",
    method: "POST",
    async: false,
    data:{
    id : id
    },
    dataType: "JSON",
    success:function(data){
    content = $("#popover_html").html();
    content = content.replace(/p_image/g, data.image);
    content = content.replace(/p_name/g, data.name);
    content = content.replace(/p_address/g, data.address);
    content = content.replace(/p_gender/g, data.gender);
    content = content.replace(/p_design/g, data.designation);
    content = content.replace(/p_age/g, data.age);
    }
    });
    return content;
    }
    