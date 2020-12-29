<script>
const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const modal = document.querySelectorAll('.modal');
M.Modal.init(modal);

const date = document.querySelectorAll('.datepicker');
M.Datepicker.init(date);



// table
// table
/*      =================================
**      ==== Simple Table Controller ====
**      =================================
**
**
**          With Pure JavaScript .. 
**   
**
**      No Libraries or Frameworks needed!
**
**
**              fb.com/bastony
**  
*/

//call function data_client

// get the table element
var $table = document.getElementById("data-client"),
// number of rows per page
$n = 5,
// number of rows of the table
$rowCount = $table.rows.length,
// get the first cell's tag name (in the first row)
$firstRow = $table.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHead = ($firstRow === "TH"),
// an array to hold each row
$tr = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$i,$ii,$j = ($hasHead)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$th = ($hasHead?$table.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCount = Math.ceil($rowCount / $n);
// if we had one page only, then we have nothing to do ..
if ($pageCount > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
        $tr[$ii] = $table.rows[$i].outerHTML;
    // create a div block to hold the buttons
    $table.insertAdjacentHTML("afterend","<div id='buttons' class='center'></div");
    // the first sort, default page is the first one
    sort(1);
}

// ($p) is the selected page number. it will be generated when a user clicks a button
function sort($p) {
    /* create ($rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** ($s) the start point .. the first row in each page, Do The Math
    */
    var $rows = $th,$s = (($n * $p)-$n);
    for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
        $rows += $tr[$i];
    
    // now the table has a processed group of rows ..
    $table.innerHTML = $rows;
    // create the pagination buttons
    document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
    // CSS Stuff
    document.getElementById("id"+$p).setAttribute("class","active");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtons($pCount,$cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var $prevDis = ($cur == 1)?"disabled":"",
        $nextDis = ($cur == $pCount)?"disabled":"",
        /* this ($buttons) will hold every single button needed
        ** it will creates each button and sets the onclick attribute
        ** to the "sort" function with a special ($p) number..
        */
        $buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
    for ($i=1; $i<=$pCount;$i++)
        $buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
    $buttons += "<input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
    return $buttons;
}
// end table

//loadFormEdit
function loadFormEdit(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_client/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var html = '';
            var i;
            for(i=0;i<data.length;i++){
                html = '<div class="input-field">'+
                        '<input name="id" value="'+data[i].id+'" hidden>'+            
                        '<input id="client_name" name="client_name" type="text" value="'+data[i].client_name+'" class="validate" required="" aria-required="true">'+
			        '</div>'+
			        '<div class="input-field">'+
                      '<input id="wedding_date" name="wedding_date" type="text" value="'+data[i].wedding_date+'" class="validate datepicker" required="" aria-required="true">'+
			        '</div>'+
			        '<div class="input-field">'+
			          '<input id="lokasi" name="lokasi" type="text" value="'+data[i].lokasi+'" class="validate" required="" aria-required="true">'+
			        '</div>'+
			        '<div class="input-field">'+
			          '<textarea id="testimonial" name="testimonial" class="materialize-textarea validate" required="" aria-required="true">'+data[i].testimonial+'</textarea>'+
			        '</div>'+
			        '<div class="input-field">'+
			          '<input id="embed_youtube" name="embed_youtube" type="text" value="'+data[i].embed_youtube+'" class="validate" required="" aria-required="true">'+
			        '</div>'+
							'<div class="file-field input-field">'+
								'<div class="btn precious-bgcolor">'+
									'<span>COVER IMAGE</span>'+
									'<input type="file" name="cover_image">'+
								'</div>'+
								'<div class="file-path-wrapper">'+
									'<input class="file-path validate" type="text" value="'+data[i].cover_image+'" required="" aria-required="true">'+
								'</div>'+
							'</div>'+
			        '<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>';
            }
            $('#form_edit').html(html);
        }
    });
}

function loadFormGallery(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_gallery/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var html = '';
            var i;
            for(i=0;i<data.length;i++){
                html += '<tr>'+
							'<td><img src="<?=base_url()?>'+data[i].image_loc+'/'+data[i].image_name+'" width="200" alt=""></td>'+
                            '<td>'+
                            '<form action="<?=site_url('admin/update_gallery');?>" method="post" enctype="multipart/form-data">'+
                                '<input type="text" name="id" value="'+data[i].id+'" hidden>'+
								'<div class="file-field input-field">'+
                                    '<div class="btn precious-bgcolor">'+
										'<span>File</span>'+
										'<input type="file" name="image_name">'+
									'</div>'+
									'<div class="file-path-wrapper">'+
										'<input value="'+data[i].image_name+'" class="file-path validate" type="text" required="" aria-required="true">'+
                                    '</div>'+
                                    '<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE IMAGE</button>'+
								'</div>'+
                            '</td>'+
                            '</form>'+
                        '</tr>';
            }
            $('#form_gallery').html(html);
        }
    });
}
</script>