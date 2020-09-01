let Utils ={};
/**
* ajax model
*/
Utils.AjaxModuleMultiCheck=0;
Utils.AjaxModule = function(obj){
  if(Utils.AjaxModuleMultiCheck > 0){return false;}Utils.AjaxModuleMultiCheck;
  $.ajax({
   url: obj.setData.url,
   data: obj.setData.data,
   type: "POST",
   dataType:"json",
   timespan:1000,
 })
 // Ajaxリクエストが成功した時発動
 .done( function(data) {
     if(obj.doneResult){
       obj.doneResult(data)
     }
 })
 // Ajaxリクエストが失敗した時発動
 .fail( function(data) {
   if(obj.failResult){
     obj.failResult(data)
   }
 })
 // Ajaxリクエストが成功・失敗どちらでも発動
 .always( function(data) {
   if(obj.alwaysResult){
     obj.alwaysResult(data);
   }
   Utils.AjaxModuleMultiCheck = 0;
 });
};

/**
* navi weapper
*/
Utils.NaviWeapper = {
    naviAnker: [
      {
        'tag': 'ホーム',
        'class': 'home',
        'href': '/'
      },
      {
        'tag': 'tasks',
        'class': 'tasks',
        'href': '/tasks'
      },
      {
        'tag': 'todos',
        'class': 'todos',
        'href': '/todos'
      },
      {
        'tag': 'items',
        'class': 'items',
        'href': '/items'
      },
      {
        'tag': 'modal',
        'class': 'modal',
        'href': '/modal'
      },
      {
        'tag': 'jquerys',
        'class': 'jquerys',
        'href': '/jquerys'
      },
    ],
    initialize: function(){
        this.insertView();
        $("body").on("click", "#nav-button", function(){
          $(this).toggleClass('is_active');
          $('#navi-weapper').toggleClass('navi_open');
        });
    },
    insertView: function(){
      var _templ = $("<div/>").attr({"class": "template"}),
          _obj = this.naviAnker,
          _navi ="";
      _obj.forEach(function(value, index){
          _navi += `<div class="`+value.class+`">
            <a href="`+value.href+`" class="fsrXL fwB">`+value.tag+`</a>
          </div>
          `;
      });
      $('#navi-weapper').find(".navi_container").empty().append(_navi);
    },
};
