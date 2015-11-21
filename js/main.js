

function login(){
var browser=navigator.appName

        var b_version=navigator.appVersion
        
        var version=b_version.split(";");
        
        var trim_Version=version[1].replace(/[ ]/g,"");
         if(browser=="Microsoft Internet Explorer" && (trim_Version=="MSIE7.0"||browser=="Microsoft Internet Explorer" && trim_Version=="MSIE6.0"))

{

    alert("非常抱歉，由于您的浏览器版本过低，将无法使用管理员界面中的部分功能，请使用基于IE8及以上版本核心的浏览器，或使用chrome，firefox浏览器，方可进入！");


}
else{
    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    if(!name||!password){
        document.getElementById('false_n').innerHTML='请输入账号';
        document.getElementById('false_p').innerHTML='请输入密码';
    }
    else document.getElementById('login_form').submit()
}

    
}
function SetHome(url){
 
        if (document.all) {
 
            document.body.style.behavior='url(#default#homepage)';
 
               document.body.setHomePage(url);
 
        }else{
 
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
 
        }
 
    }

function text_submit(){
   document.getElementById('text_val').value = $('#text_main').val(); 
    var check_id= document.getElementById('text_id').value
    var text_title = document.getElementById('text_title').value;
   if(text_title==""){document.getElementById("text_title_false").innerHTML="没有填写标题";var check1=0}
    else{document.getElementById("text_title_false").innerHTML="";check1=1}
    var text_type = document.getElementById('text_type').value;
   if(text_type==""){document.getElementById("text_type_false").innerHTML="没有选择类型";var check2=0}
   else{document.getElementById("text_type_false").innerHTML="";check2=1}
    var text_main = document.getElementById('text_val').value;
   if(text_main==""){document.getElementById("text_main_false").innerHTML="没有填写内容";var check3=0}
   else{
    var reg=/<img([^)]*?)\/>/
    var img_src=text_main.match(reg);
    img_src=img_src[0]. toString()
    
    document.getElementById("text_main_false").innerHTML="";check3=1}
    if(check1&&check2&&check3){
        img_src=img_src.replace('alt=""','alt="'+text_title+'"');
    document.getElementById("text_img").value=img_src;
        document.getElementById("text_submit").submit();
    }
}

function change(a){
    document.getElementById('change_model').innerHTML='目前为修改文章模式&nbsp;<a style="color:green" onclick="change_model()">返回添加文章模式</a>'
    document.getElementById('text_id').value=a;
    document.getElementById('text_title').value=document.getElementById('res_title'+a).innerHTML;
    var type=document.getElementById('res_type'+a).innerHTML;
    if(type=="产品")type="1";
        else type="2";
    $("#text_type").val(type);
    var text_s=document.getElementById('res_main'+a).innerHTML;
    $('#text_main').val(text_s);
}
function change_model(){
    document.getElementById('text_id').value='';
    document.getElementById('change_model').innerHTML='目前为增加文章模式';
}

function del(l){
        if (confirm("确认要删除？")) {
           document.getElementById('del_'+l).submit();
        }
}
function put_index(q,c){

       $("#gray").show();
       $("#set_index").show();
    
    if(!c){
        document.getElementById('insert_show').style.display=""
        document.getElementById('sort0').value=q;
        document.getElementById('res_title_n').innerHTML=document.getElementById('res_title'+q).innerHTML;
    document.getElementById('res_type_n').innerHTML=document.getElementById('res_type'+q).innerHTML;
    document.getElementById('res_time_n').innerHTML=document.getElementById('res_time'+q).innerHTML;
}
else{
    document.getElementById('sort0').value="";
    document.getElementById('insert_show').style.display="none"
}
    
}

function edit_index_sub(d){
    var num_check;
    var pas=1;var valu;
    var arr = [1,2,3,4,5,6];
for(num_check=0;num_check<d;num_check++){
   valu = document.getElementById('sort_'+num_check).value;
     if(valu==''||!(arr.toString().indexOf(valu) > -1))pas=0;
}
if(pas)document.getElementById('edit_index').submit();
else alert("填写出错或有未填项！")
}
function y_check(){
    var ch1;var ch2=1;var ch3=1;var ch4=1;var ch5;
  var y_name=document.getElementById('y_name').value;
    if(y_name){ch1=1;document.getElementById('y_name_f').innerHTML=""}
    else {ch1=0;document.getElementById('y_name_f').innerHTML="请输入对您的称呼"}
  var y_phone=document.getElementById('y_phone').value;
    
    if((y_phone)&&!/^[0-9]*$/.test(y_phone))
        {ch2=0;
            document.getElementById('y_phone_f').innerHTML="输入的不是数字"
        }

    else if(!y_phone){ch2=1;document.getElementById('y_phone_f').innerHTML="";}
    else{ch2=1;document.getElementById('y_phone_f').innerHTML="";}
  var y_mail=document.getElementById('y_mail').value;
  if(y_mail&&!/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/.test(y_mail))
    {ch3=0;
            document.getElementById('y_mail_f').innerHTML="输入的不是邮箱格式"
        }
    else if(!y_mail){ch3=1;document.getElementById('y_mail_f').innerHTML="";}
    else{ch3=1;document.getElementById('y_mail_f').innerHTML="";}
    var y_text=document.getElementById('y_text').value;
    if(!y_text){ch5=0;
        document.getElementById('y_text_f').innerHTML="请输入内容";}
        else{document.getElementById('y_text_f').innerHTML="";ch5=1;
    }
    if(ch1&&(ch2&&ch3&&ch4)&&ch5){
      
        document.getElementById('tel_f').submit();
    }
     // if(!(ch2&&ch3&&ch4)){
     //     alert('请输入至少一种联系方式！')
     // }    
}

function comm_tog(){
    $(".comm_tel").toggle();
}

    function os_check(){
//         var browser=navigator.appName

// if(browser!="Netscape"){
//         var b_version=navigator.appVersion;
//         var version=b_version.split(";");    
//         var trim_Version=version[1].replace(/[ ]/g,"");
//          if(trim_Version=="MSIE7.0"||trim_Version=="MSIE6.0")

// {

//     alert("非常抱歉，由于您的浏览器版本过低，将无法查看本页面中的“实时监测数据曲线图”，请使用基于IE8及以上版本核心的浏览器，或使用chrome，firefox浏览器，方可查看！");


// }
// else{
//      window.location.href ="kedingmap/index.php"
// }
// }
// else{
     window.location.href ="kedingmap/index.php"
}
// }
function togg(h){
     $("#topic"+h).toggle();
         var html_h=parseInt($(window).height());
         var body_h=parseInt($("body").height());
         if(html_h>=body_h){
         $('#foot').css({'position':'absolute'});
    }
    else{$('#foot').css({'position':'relative'});}
}

function shenhe_sub(p){
    var text_su=document.getElementById("re_area"+p).value;
    if(!text_su){
        document.getElementById("re_area_fal"+p).innerHTML="您没有输入回复内容"
    }
    else{
       document.getElementById("shenhe_nf"+p).submit();
    }
}
function shenhe_sub2(e){
    var text_su=document.getElementById("re_are"+e).value;
    if(!text_su){
        document.getElementById("re_are_fal"+e).innerHTML="您没有输入回复内容"
    }
    else{
       document.getElementById("shenhe_hf"+e).submit();
    }
}
function href(v){
    location.href=v+".php"
}
function shenhe_del(z){
    if (confirm("确认要删除？")) {
           document.getElementById('shen_del_form'+z).submit();
        }
}