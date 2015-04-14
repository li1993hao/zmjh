/*微博表情*/

var insertFace = function (obj) {
    $('.XT_insert').css('z-index', '1000');
    $('.XT_face').remove();
    var html = '<div class="XT_face  XT_insert"><div class="triangle sanjiao"></div><div class="triangle_up sanjiao"></div>' +
        '<div class="XT_face_main"><div class="XT_face_title"><span class="XT_face_bt" style="float: left">常用表情</span>' +
        '<a onclick="close_face()" class="XT_face_close">X</a></div><div id="face" style="padding: 10px;"></div></div></div>';
    obj.parents('.weibo_post_box').find('#emot_content').html(html);
    getFace(obj);
};

var face_chose = function (obj) {
    var textarea = obj.parents('.weibo_post_box').find('textarea');
    textarea.focus();
    //textarea.val(textarea.val()+'['+obj.attr('title')+']');

    var pos = getCursortPosition(textarea[0]);
    var s = textarea.val();


    if(obj.attr('data-type') == 'miniblog'){
        textarea.val(s.substring(0, pos) + '[' + obj.attr('title') + ']' + s.substring(pos));
        setCaretPosition(textarea[0], pos + 2 + obj.attr('title').length);
    }else{
        textarea.val(s.substring(0, pos) + '[' + obj.attr('title') + ':'+obj.attr('data-type')+']' + s.substring(pos));
        setCaretPosition(textarea[0], pos + 3 + obj.attr('title').length+obj.attr('data-type').length);
    }


}

var getFace = function (obj) {
    $.post(Think.U('Test/Index/getSmile'), {}, function (data) {
        var _imgHtml = '';
        for (var k in data) {
            _imgHtml += '<a href="javascript:void(0)" data-type="'+data[k].type+'" title="' + data[k].title + '" onclick="face_chose($(this))";><img src="' + data[k].src + '" width="24" height="24" /></a>';
        }
        _imgHtml += '<div class="c"></div>';
        obj.parents('.weibo_post_box').find('#emot_content').find('#face').html(_imgHtml);

    }, 'json');
}

var close_face = function () {
    $('.XT_face').remove();
}


function getCursortPosition(ctrl) {//获取光标位置函数

    var CaretPos = 0;	// IE Support
    if (document.selection) {
        ctrl.focus();
        var Sel = document.selection.createRange();
        Sel.moveStart('character', -ctrl.value.length);
        CaretPos = Sel.text.length;
    }
    // Firefox support
    else if (ctrl.selectionStart || ctrl.selectionStart == '0')
        CaretPos = ctrl.selectionStart;
    return (CaretPos);
}

function setCaretPosition(ctrl, pos) {//设置光标位置函数
    if (ctrl.setSelectionRange) {
        ctrl.focus();
        ctrl.setSelectionRange(pos, pos);
    }
    else if (ctrl.createTextRange) {
        var range = ctrl.createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
}
/*微博表情end*/

