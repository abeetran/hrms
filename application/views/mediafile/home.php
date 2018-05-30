<div class="content-wrapper">
<iframe frameborder="0" style="background-color:#fff;height:100%;width:100%;margin:0;padding:0" src="<?php echo base_url('filemanager/dialog.php?type=0');?>"></iframe>
</div>
<script>
    $(function(){
        var body = $('html').height();
        var top = $('header').height();
        $('iframe').height(body-top*2.15);
    });
</script>
