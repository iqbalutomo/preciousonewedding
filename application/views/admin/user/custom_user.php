<script>
const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const modal = document.querySelectorAll('.modal');
M.Modal.init(modal);


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


// get the table element
var $table = document.getElementById("data-user"),
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

//fungsi ajax buat ngeload data user dari database
/**
 * sama kayak price list, 
 * form editnya harus digenerate pake ajax
 * kalo digenerate pake php, jadi kebanyakan
 * form modalnya, dan bisa potensi bentrok
 * antara tag modal satu dan lainnya
 */
function loadFormEdit(id) {
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/admin/get_user/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var html = '';
            var i;
            for(i=0;i<data.length;i++){
                if(data[i].role == 1){
                    html = '<input name="id" value="'+data[i].id+'" hidden>'+
                           '<input name="username" value="'+data[i].username+'" type="text" hidden>'+
                                '<div class="input-field">'+
                                    '<input id="password" name="password" type="password" class="validate">'+
                                    '<label for="password">Password (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="passconf" name="passconf" type="password" class="validate">'+
                                    '<label for="passconf">Password Confirmation (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="email" name="email" value="'+data[i].email+'" type="email" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="nama" name="nama" value="'+data[i].nama+'" type="text" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<select id="role" name="role" class="browser-default" required="" aria-required="true">'+
                                        '<option value="0" disabled>Role</option>'+
                                        '<option value="1" selected>Root</option>'+
                                        '<option value="2">Blog Admin</option>'+
                                    '</select>'+
                                '</div>'+
                            '<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>';
                }else if(data[i].role == 2){
                    html = '<input name="id" value="'+data[i].id+'" hidden>'+
                           '<!--input name="username" value="'+data[i].username+'" type="text" hidden-->'+
                                '<div class="input-field">'+
                                    '<input id="password" name="password" type="password" class="validate">'+
                                    '<label for="password">Password (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="passconf" name="passconf" type="password" class="validate">'+
                                    '<label for="passconf">Password Confirmation (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="email" name="email" value="'+data[i].email+'" type="email" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="nama" name="nama" value="'+data[i].nama+'" type="text" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<select id="role" name="role" class="browser-default" required="" aria-required="true">'+
                                        '<option value="0" disabled>Role</option>'+
                                        '<option value="1">Root</option>'+
                                        '<option value="2" selected>Blog Admin</option>'+
                                    '</select>'+
                                '</div>'+
                            '<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>';
                }else{
                    html = '<input name="id" value="'+data[i].id+'" hidden>'+
                           '<input name="username" value="'+data[i].username+'" type="text" hidden>'+
                                '<div class="input-field">'+
                                    '<input id="password" name="password" type="password" class="validate">'+
                                    '<label for="password">Password (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="passconf" name="passconf" type="password" class="validate">'+
                                    '<label for="passconf">Password Confirmation (Kosongkan jika tidak ingin mengubah password)</label>'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="email" name="email" value="'+data[i].email+'" type="email" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<input id="nama" name="nama" value="'+data[i].nama+'" type="text" class="validate" required="" aria-required="true">'+
                                '</div>'+
                                '<div class="input-field">'+
                                    '<select id="role" name="role" class="browser-default" required="" aria-required="true">'+
                                        '<option value="0" disabled selected>Role</option>'+
                                        '<option value="1">Root</option>'+
                                        '<option value="2">Blog Admin</option>'+
                                    '</select>'+
                                '</div>'+
                            '<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPDATE</button>';
                }
                
            }
            $('#form_edit').html(html);
        }
    });
}
</script>