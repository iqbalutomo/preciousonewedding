<script>
const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const modal = document.querySelectorAll('.modal');
M.Modal.init(modal);

const date = document.querySelectorAll('.datepicker');
M.Datepicker.init(date);

var addModal = M.Modal.getInstance('.modal');


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

/*$(document).ready(function(){
    get_career();	//call function show all product
    return false;
});

//get data career
function get_career(){
    $.ajax({
        type  : 'ajax',
        url   : '<?php echo site_url('admin/get_career')?>',
        dataType : 'json',
        success : function(data){
            var html = '';
            var no = 1;
            for(i=0; i<data.length; i++){
                html += '<tr>'+
                        '<td>'+no+'.</td>'+
                        '<td>'+data[i].job_name+'</td>'+
                        '<td>'+data[i].deadline+'</td>'+
                        '<td>'+data[i].location+'</td>'+
                        '<td style="text-align:right;">'+
                            '<a href="#edit" onclick="loadFormEdit('+data[i].id+')" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>&nbsp;&nbsp;'+
                            '<a onclick="deleteCareer('+data[i].id+')" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>'+
                        '</td>'+
                        '</tr>';
                no++;
            }
            $('#show_data').html(html);
        }

    });

}

//delete career
function deleteCareer(id){
    $.ajax({
            type : "POST",
            url  : "<?php echo site_url('admin/delete_career/')?>"+id,
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                get_career();
                alert('Berhasil menghapus data career.');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }
        });
}

//add career
function add_career(){
    var job_name = $('#add_job_name').val();
    var deadline = $('#add_deadline').val();
    var location = $('#add_location').val();
    var working_time = $('#add_working_time').val();
    var qualification = $('#add_qualification').val();
    var description = $('#add_description').val();
    
    if(job_name == ""){
        alert('Gagal menambahkan data career : Job Name kosong.');
    }else if(deadline == ""){
        alert('Gagal menambahkan data career : Deadline kosong.');
    }else if(location == ""){
        alert('Gagal menambahkan data career : Location kosong.');
    }else if(working_time == ""){
        alert('Gagal menambahkan data career : Working time kosong.');
    }else if(qualification == ""){
        alert('Gagal menambahkan data career : Qualification kosong.');
    }else if(description == ""){
        alert('Gagal menambahkan data career : Description kosong.');
    }else{
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('admin/add_career')?>",
            dataType : "JSON",
            data : {
                job_name:job_name,
                deadline:deadline,
                location:location,
                working_time:working_time,
                qualification:qualification,
                description:description
            },
            success: function(data){
                $('#add_job_name').val("");
                $('#add_deadline').val("");
                $('#add_location').val();
                $('#add_working_time').val("0");
                $('#add_qualification').val("");
                $('#add_description').val("");
                get_career();
                alert('Berhasil menambah data career.');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }
        });
    }
}*/
var add_qualification;
ClassicEditor
    .create( document.querySelector( '#add_qualification' ),{
        toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "|", "undo","redo" ]
    } )
    .then( editor => {
        console.log( Array.from( editor.ui.componentFactory.names ) );
        add_qualification = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

    var add_description;
    ClassicEditor
    .create( document.querySelector( '#add_description' ),{
        toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "|", "undo","redo" ]
    } )
    .then( editor => {
        console.log( Array.from( editor.ui.componentFactory.names ) );
        add_description = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

    var edit_qualification;
    ClassicEditor
    .create( document.querySelector( '#edit_qualification' ),{
        toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "|", "undo","redo" ]
    } )
    .then( editor => {
        console.log( Array.from( editor.ui.componentFactory.names ) );
        edit_qualification = editor;
    } )
    .catch( error => {
        console.error( error );
    } );

    var edit_description;
    ClassicEditor
    .create( document.querySelector( '#edit_description' ),{
        toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "|", "undo","redo" ]
    } )
    .then( editor => {
        console.log( Array.from( editor.ui.componentFactory.names ) );
        edit_description = editor;
    } )
    .catch( error => {
        console.error( error );
    } );
//get data career for edit
function loadFormEdit(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_career_one/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var id = ''
            var job_name = '';
            var deadline = '';
            var location = '';
            var working_time = '';
            var qualification = '';
            var description = '';
            var i;
            for(i=0;i<data.length;i++){
                if(data[i].working_time == "Full-time"){
                    id = data[i].id;
                    job_name = data[i].job_name;
                    deadline = data[i].deadline;
                    location = data[i].location;
                    working_time = '<option value="0" disabled>Working Time (Pilih salah satu)</option>'+
                                '<option value="Full-time" selected>Full-time</option>'+
                                '<option value="Part-time">Part-time</option>';
                    qualification = data[i].qualification;
                    description = data[i].description;             
                    }else if(data[i].working_time == "Part-time"){
                        id = data[i].id;
                    job_name = data[i].job_name;
                    deadline = data[i].deadline;
                    location = data[i].location;
                    working_time = '<option value="0" disabled>Working Time (Pilih salah satu)</option>'+
                                '<option value="Full-time">Full-time</option>'+
                                '<option value="Part-time" selected>Part-time</option>';
                    qualification = data[i].qualification;
                    description = data[i].description;    
                }
            }
            
            $('#edit_id').val(id);
            $('#edit_job_name').val(job_name);
            $('#edit_deadline').val(deadline);
            $('#edit_location').val(location);
            $('#edit_working_time').html(working_time);
            edit_qualification.data.set(qualification);
            edit_description.data.set(description);
        }
    });
}

//get data career for delete
function loadDeleteForm(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_career_one/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var id = '';
            var i;
            for(i=0;i<data.length;i++){
                id = '<a href="<?=site_url('admin/delete_career/');?>'+data[i].id+'" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>';
            }
            
            $('#btn_delete').html(id);
        }
    });
}

//edit career
/**function edit_career(){
    var id = $('#edit_id').val();
    var job_name = $('#edit_job_name').val();
    var deadline = $('#edit_deadline').val();
    var location = $('#edit_location').val();
    var working_time = $('#edit_working_time').val();
    var qualification = $('#edit_qualification').val();
    var description = $('#edit_description').val();

        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('admin/update_career/')?>",
            dataType : "JSON",
            data : {
                id:id,
                job_name:job_name,
                deadline:deadline,
                location:location,
                working_time:working_time,
                qualification:qualification,
                description:description
            },
            success: function(data){
                alert('Berhasil mengupdate data career.');
                get_career();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }
        });

}*/

// get the table element
var $table = document.getElementById("data-careers"),
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
</script>