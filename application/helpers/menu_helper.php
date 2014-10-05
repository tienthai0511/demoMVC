<script>
$(document).ready(function(){
$('.forms,.tables').click(function(e){
		//e.preventDefault();
	if($(this).children(".exp").hasClass('inactive')){
		$(this).children('.sub').slideDown();
		$(this).children(".exp").removeClass('inactive').addClass('active');
	} else {
		$(this).children('.sub').slideUp('blind');
		$(this).children(".exp").removeClass('active').addClass('inactive');
	}
		
	});
	
	$(".sub").click(function(event) {

    event.stopPropagation();

    alert('child clicked');
});
});
	
</script>
<div id="leftSide">
	<ul id="menu" class="nav">
        <li class="dash"><a href="#" title=""><span>Dashboard</span></a></li>
        <li class="charts"><a href="#" title=""><span>Statistics and charts</span></a></li>
        <li class="forms"><a href="#" title="" class="exp inactive"><span>Forms stuff</span><strong>4</strong></a>
            <ul class="sub" style="display: none;">
                <li><a href="#" title="">Form elements</a></li>
                <li><a href="#" title="">Validation</a></li>
                <li><a href="#" title="">WYSIWYG and file uploader</a></li>
                <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
            </ul>
        </li>
        <li class="ui"><a href="ui_elements.html" title="" class="active"><span>Interface elements</span></a></li>
        <li class="tables"><a href="#" title="" class="exp inactive"><span>Tables</span><strong>3</strong></a>
            <ul class="sub" style="display: none;">
                <li><a href="#" title="">Static tables</a></li>
                <li><a href="#" title="">Dynamic table</a></li>
                <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
            </ul>
        </li>
        <li class="widgets"><a href="#" title="" class="exp inactive"><span>Widgets and grid</span><strong>2</strong></a>
            <ul class="sub" style="display: none;">
                <li><a href="widgets.html" title="">Widgets</a></li>
                <li class="last"><a href="grid.html" title="">Grid</a></li>
            </ul>
        </li>
        <li class="errors"><a href="#" title="" class="exp inactive"><span>Error pages</span><strong>6</strong></a>
            <ul class="sub" style="display: none;">
                <li><a href="403.html" title="">403 page</a></li>
                <li><a href="404.html" title="">404 page</a></li>
                <li><a href="405.html" title="">405 page</a></li>
                <li><a href="500.html" title="">500 page</a></li>
                <li><a href="503.html" title="">503 page</a></li>
                <li class="last"><a href="offline.html" title="">Website is offline</a></li>
            </ul>
        </li>
        <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
        <li class="typo"><a href="#" title="" class="exp inactive"><span>Other pages</span><strong>3</strong></a>
            <ul class="sub" style="display: none;">
                <li><a href="typography.html" title="">Typography</a></li>
                <li><a href="calendar.html" title="">Calendar</a></li>
                <li class="last"><a href="gallery.html" title="">Gallery</a></li>
            </ul>
        </li>
    </ul>
</div>