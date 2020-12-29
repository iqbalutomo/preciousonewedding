<script>
const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const modal = document.querySelectorAll('.modal');
M.Modal.init(modal);

ClassicEditor
.create( document.querySelector( '#add_konten' ), {
    /*ckfinder: {
            uploadUrl: <?="'".site_url('admin/uploadFiles?type=Images')."'" ;?>
        },*/
    toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "insertTable", "mediaEmbed", "|", "undo","redo" ]
} )
.then( editor => {
    console.log( Array.from( editor.ui.componentFactory.names ) );
} )
.catch( error => {
    console.error( error );
} );

var edit_konten;
ClassicEditor
.create( document.querySelector( '#edit_konten' ),{
    /*ckfinder: {
            uploadUrl: <?="'".site_url('admin/uploadFiles?type=Images')."'" ;?>
        },*/
    toolbar: [ 'bold', 'italic', 'link', 'numberedList', 'blockQuote', "insertTable", "mediaEmbed", "|", "undo","redo" ]
} )
.then( editor => {
    console.log( Array.from( editor.ui.componentFactory.names ) );
    edit_konten = editor;
} )
.catch( error => {
    console.error( error );
} );

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

/**
 * Tabel prep
 */
// get the table element
var $tablePrep = document.getElementById("data-prep"),
// number of rows per page
$nPrep = 4,
// number of rows of the table
$rowCountPrep = $tablePrep.rows.length,
// get the first cell's tag name (in the first row)
$firstRowPrep = $tablePrep.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHeadPrep = ($firstRowPrep === "TH"),
// an array to hold each row
$trPrep = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$iPrep,$iiPrep,$jPrep = ($hasHeadPrep)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$thPrep = ($hasHeadPrep?$tablePrep.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCountPrep = Math.ceil($rowCountPrep / $nPrep);
// if we had one page only, then we have nothing to do ..
if ($pageCountPrep > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for ($iPrep = $jPrep,$iiPrep = 0; $iPrep < $rowCountPrep; $iPrep++, $iiPrep++)
        $trPrep[$iiPrep] = $tablePrep.rows[$iPrep].outerHTML;
    // create a div block to hold the buttons
    $tablePrep.insertAdjacentHTML("afterend","<div id='buttonsPrep' class='center'></div");
    // the first sort, default page is the first one
    sortPrep(1);
}


// ($p) is the selected page number. it will be generated when a user clicks a button
function sortPrep($p) {
    /* create ($rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** ($s) the start point .. the first row in each page, Do The Math
    */
    var $rows = $thPrep,$s = (($nPrep * $p)-$nPrep);
    for ($i = $s; $i < ($s+$nPrep) && $i < $trPrep.length; $i++)
        $rows += $trPrep[$i];
    
    // now the table has a processed group of rows ..
    $tablePrep.innerHTML = $rows;
    // create the pagination buttons
    document.getElementById("buttonsPrep").innerHTML = pageButtonsPrep($pageCountPrep,$p);
    // CSS Stuff
    document.getElementById("idPrep"+$p).setAttribute("class","active");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtonsPrep($pCount,$cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var $prevDis = ($cur == 1)?"disabled":"",
        $nextDis = ($cur == $pCount)?"disabled":"",
        /* this ($buttons) will hold every single button needed
        ** it will creates each button and sets the onclick attribute
        ** to the "sort" function with a special ($p) number..
        */
        $buttonsPrep = "<input type='button' value='&lt;&lt; Prev' onclick='sortPrep("+($cur - 1)+")' "+$prevDis+">";
    for ($i=1; $i<=$pCount;$i++)
        $buttonsPrep += "<input type='button' id='idPrep"+$i+"'value='"+$i+"' onclick='sortPrep("+$i+")'>";
    $buttonsPrep += "<input type='button' value='Next &gt;&gt;' onclick='sortPrep("+($cur + 1)+")' "+$nextDis+">";
    return $buttonsPrep;
}
// end table


/**
 * Tabel ideas
 */
// get the table element
var $tableIdeas = document.getElementById("data-ideas"),
// number of rows per page
$nIdeas = 4,
// number of rows of the table
$rowCountIdeas = $tableIdeas.rows.length,
// get the first cell's tag name (in the first row)
$firstRowIdeas = $tableIdeas.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHeadIdeas = ($firstRowIdeas === "TH"),
// an array to hold each row
$trIdeas = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$iIdeas,$iiIdeas,$jIdeas = ($hasHeadIdeas)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$thIdeas = ($hasHeadIdeas?$tableIdeas.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCountIdeas = Math.ceil($rowCountIdeas / $nIdeas);
// if we had one page only, then we have nothing to do ..
if ($pageCountIdeas > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for ($iIdeas = $jIdeas,$iiIdeas = 0; $iIdeas < $rowCountIdeas; $iIdeas++, $iiIdeas++)
        $trIdeas[$iiIdeas] = $tableIdeas.rows[$iIdeas].outerHTML;
    // create a div block to hold the buttons
    $tableIdeas.insertAdjacentHTML("afterend","<div id='buttonsIdeas' class='center'></div");
    // the first sort, default page is the first one
    sortIdeas(1);
}

// ($p) is the selected page number. it will be generated when a user clicks a button
function sortIdeas($p) {
    /* create ($rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** ($s) the start point .. the first row in each page, Do The Math
    */
    var $rows = $thIdeas,$s = (($nIdeas * $p)-$nIdeas);
    for ($i = $s; $i < ($s+$nIdeas) && $i < $trIdeas.length; $i++)
        $rows += $trIdeas[$i];
    
    // now the table has a processed group of rows ..
    $tableIdeas.innerHTML = $rows;
    // create the pagination buttons
    document.getElementById("buttonsIdeas").innerHTML = pageButtonsIdeas($pageCountIdeas,$p);
    // CSS Stuff
    document.getElementById("idIdeas"+$p).setAttribute("class","active");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtonsIdeas($pCount,$cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var $prevDis = ($cur == 1)?"disabled":"",
        $nextDis = ($cur == $pCount)?"disabled":"",
        /* this ($buttons) will hold every single button needed
        ** it will creates each button and sets the onclick attribute
        ** to the "sort" function with a special ($p) number..
        */
        $buttonsIdeas = "<input type='button' value='&lt;&lt; Prev' onclick='sortIdeas("+($cur - 1)+")' "+$prevDis+">";
    for ($i=1; $i<=$pCount;$i++)
        $buttonsIdeas += "<input type='button' id='idIdeas"+$i+"'value='"+$i+"' onclick='sortIdeas("+$i+")'>";
    $buttonsIdeas += "<input type='button' value='Next &gt;&gt;' onclick='sortIdeas("+($cur + 1)+")' "+$nextDis+">";
    return $buttonsIdeas;
}
// end table


/**
 * Tabel honeymoon
 */
// get the table element
var $tableHM = document.getElementById("data-honeymoon"),
// number of rows per page
$nHM = 4,
// number of rows of the table
$rowCountHM = $tableHM.rows.length,
// get the first cell's tag name (in the first row)
$firstRowHM = $tableHM.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
$hasHeadHM = ($firstRowHM === "TH"),
// an array to hold each row
$trHM = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
$iHM,$iiHM,$jHM = ($hasHeadHM)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
$thHM = ($hasHeadHM?$tableHM.rows[(0)].outerHTML:"");
// count the number of pages
var $pageCountHM = Math.ceil($rowCountHM / $nHM);
// if we had one page only, then we have nothing to do ..
if ($pageCountHM > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for ($iHM = $jHM,$iiHM = 0; $iHM < $rowCountHM; $iHM++, $iiHM++)
        $trHM[$iiHM] = $tableHM.rows[$iHM].outerHTML;
    // create a div block to hold the buttons
    $tableHM.insertAdjacentHTML("afterend","<div id='buttonsHM' class='center'></div");
    // the first sort, default page is the first one
    sortHM(1);
}

// ($p) is the selected page number. it will be generated when a user clicks a button
function sortHM($p) {
    /* create ($rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** ($s) the start point .. the first row in each page, Do The Math
    */
    var $rows = $thHM,$s = (($nHM * $p)-$nHM);
    for ($i = $s; $i < ($s+$nHM) && $i < $trHM.length; $i++)
        $rows += $trHM[$i];
    
    // now the table has a processed group of rows ..
    $tableHM.innerHTML = $rows;
    // create the pagination buttons
    document.getElementById("buttonsHM").innerHTML = pageButtonsHM($pageCountHM,$p);
    // CSS Stuff
    document.getElementById("idHM"+$p).setAttribute("class","active");
}


// ($pCount) : number of pages,($cur) : current page, the selected one ..
function pageButtonsHM($pCount,$cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var $prevDis = ($cur == 1)?"disabled":"",
        $nextDis = ($cur == $pCount)?"disabled":"",
        /* this ($buttons) will hold every single button needed
        ** it will creates each button and sets the onclick attribute
        ** to the "sort" function with a special ($p) number..
        */
        $buttonsHM = "<input type='button' value='&lt;&lt; Prev' onclick='sortHM("+($cur - 1)+")' "+$prevDis+">";
    for ($i=1; $i<=$pCount;$i++)
        $buttonsHM += "<input type='button' id='idHM"+$i+"'value='"+$i+"' onclick='sortHM("+$i+")'>";
    $buttonsHM += "<input type='button' value='Next &gt;&gt;' onclick='sortHM("+($cur + 1)+")' "+$nextDis+">";
    return $buttonsHM;
}
// end table

//get data career for edit
function loadEditForm(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_blog_one/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var id = ''
            var judul = '';
            var type = '';
            var cover_image = '';
            var image_loc = '';
            var konten = '';
            var i;
            for(i=0;i<data.length;i++){
                if(data[i].type == 1){
                    id = data[i].ID;
                    judul = data[i].judul;
                    /*type = '<option disabled>Tipe (Pilih Satu)</option>'+
								'<option value="1" selected>Wedding Preparation</option>'+
								'<option value="2">Wedding Ideas</option>'+
								'<option value="3">Honey Moon</option>';*/
                    cover_image = data[i].cover_image;
                    image_loc = data[i].image_loc;
                    konten = data[i].konten;       
                }else if(data[i].type == 2){
                    id = data[i].ID;
                    judul = data[i].judul;
                    /*type = '<option disabled>Tipe (Pilih Satu)</option>'+
								'<option value="1">Wedding Preparation</option>'+
								'<option value="2" selected>Wedding Ideas</option>'+
								'<option value="3">Honey Moon</option>';*/
                    cover_image = data[i].cover_image;
                    image_loc = data[i].image_loc;
                    konten = data[i].konten;        
                }else if(data[i].type == 3){
                    id = data[i].ID;
                    judul = data[i].judul;
                    /*type = '<option disabled>Tipe (Pilih Satu)</option>'+
								'<option value="1">Wedding Preparation</option>'+
								'<option value="2">Wedding Ideas</option>'+
								'<option value="3" selected>Honey Moon</option>';*/
                    cover_image = data[i].cover_image;
                    image_loc = data[i].image_loc;
                    konten = data[i].konten;        
                }
            }
            
            $('#edit_id').val(id);
            $('#edit_judul').val(judul);
            //$('#edit_type').html(type);
            $('#edit_cover_image').val(cover_image);
            $('#edit_konten').val(konten);
            edit_konten.data.set(konten);
        }
    });
}

//get data career for delete
function loadDeleteForm(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_blog_one/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var id = '';
            var i;
            for(i=0;i<data.length;i++){
                id = data[i].ID;
            }
            
            $('#delete_id').val(id);
        }
    });
}


</script>