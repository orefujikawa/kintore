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

var tops='/'
var topurl='localhost:8000';
var kintoremain='/kintoremain';
var access='/access';
var hostname=location.host;
var urls=location.pathname;
$('.bottons').on('click', function(){alert('ようこそ');console.log('対応');});
$('.ruletext').blur(function(){ if(mating()){console.log('対応');}else{console.log('数字３文字好きなのをつけて覚えておいて下さい');}});
$('.logout').on('click',function(){alert(urls);alert('動いている');sessionStorage.removeItem('session');alert('消えた');});
// history.replaceState(null,null,'http://localhost:8000');

