// $('.rogu').ready(alert('あああ'));

var ka=111;
$('.kore').after('alert=','ここ');
function mating(){

    var textbox=$('.ruletext').val();
    var mat=new RegExp(/^[0-9]{3}$/);//\dでtrueになった
// var aa=textbox.match(mat);
    var matchn=mat.exec(textbox);
    console.log(mat.test(textbox));
    console.log(mat.exec(textbox));
// console.log(mat.match(textbox));
// var aa=mat.test(textbox);
    return matchn;
}
var url='/kintoremain?';
var urls=location.pathname;
history.replaceState(null,null,'http://localhost:8000');
$(window).on('load',function(e){var session=sessionStorage.getItem('login');if(!session==1){if(url==urls){alert('検知しました')}}});
    // console.log(paffect);
$('.bottons').on('click', function(){alert('クリック');console.log('対応');});
$('.ruletext').blur(function(){ if(mating()){console.log('対応');}else{console.log('数字３文字好きなのをつけて覚えておいて下さい');}});
$('.logout').on('click',function(){alert(urls);sessionStorage.removeItem('login');});
$(window).on('load',function(){localStorage.getItem("login");})

// history.pushState({}, "", new URL(window.location.href='http://localhost:8000'));
window.addEventListener('pageshow', function (event){if (event.persisted){window.location.reload();}});//Safariのwindow移動の互換性制御文
