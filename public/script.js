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
    // console.log(paffect);
$('.bottons').on('click', function(){alert('クリック');console.log('対応');});
$('.ruletext').blur(function(){ if(mating()){console.log('対応');}else{console.log('数字３文字好きなのをつけて覚えておいて下さい');}});
