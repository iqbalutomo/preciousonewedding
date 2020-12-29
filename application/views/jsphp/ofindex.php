<script>
//get data career for edit
function loadFormPromo(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/home/set_promo/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var html = '';
            var i;
            for(i=0;i<data.length;i++){
                html = '<input value="'+data[i].nama_promo+'" id="price_booking" type="text" class="validate" required="" aria-required="true">';               

            }
            $('#nama_promo').html(html);
        }
    });
}
function loadFormPrice(id){
    $.ajax({
        type     : 'POST',
        url      : '<?=site_url()?>/home/set_pricelist/'+id,
        dataType : 'json',
        data     : ({id:id}),
        success : function(data){
            console.log(data);
            var html = '';
            var i;
            for(i=0;i<data.length;i++){
                html = '<input value="'+data[i].nama+'" id="price_booking" type="text" class="validate" required="" aria-required="true">';               

            }
            $('#nama_price').html(html);
        }
    });
}
</script>