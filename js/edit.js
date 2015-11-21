$(function(){
    $('#text_main').xheditor({tools:'simple',width:'600',height:'400',upMultiple:10,upLinkUrl:'upload.php',upImgUrl:'upload.php?immediate=1',upFlashUrl:'upload.php',upMediaUrl:'upload.php'});
   $("#index_close").click(function(){
      $("#gray").hide();
      $("#set_index").hide();
   });
});