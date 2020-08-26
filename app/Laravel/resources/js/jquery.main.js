let Main = {};
$(function(){
  Utils.NaviWeapper.initialize();
  new Main._View();
});

Main._Model = Backbone.Model.extend({});
Main._Data = Backbone.Model.extend({});
Main._Collection = Backbone.Collection.extend({});
Main._View = Backbone.View.extend({
  el: "body",
  events: {
    'click .btn_add': 'addAction',
    'click .btn_del': 'delAction',
  },
  default: {},
  parame: {},
  initialize: function(){
    console.log("auto start");
    this.getItemsData();
  },
  getItemsData: function(){
    let that =this,
    _obj ={
      setData: {
        url: "/api/jquery-item-get",
        data: {},
      },
      doneResult: function(data){
        console.log("doneResult",data);
        var _itemData = data.item,
            _taskData = data.task,
            _todoData = data.todo,
            _targetId ="#contents",
            _templItem = that.itemTempl(_itemData),
            _templTask = that.taskTempl(_taskData),
            _templTodo = that.todoTempl(_todoData);
            _insertHtml =$("<div/>").attr({"class": "template"})
            _insertHtml = _insertHtml.append(_templItem.contents).append(_templTask.contents).append(_templTodo.contents);
        $(_targetId).append(_insertHtml.html());
      },
      failResult: function(data){
        console.log("failResult",data)
      },
      alwaysResult: function(data){
        console.log("alwaysResult",data)
      },
    };
    console.log("!", this.events);
    Utils.AjaxModule(_obj);
  },
  /**
  * item template
  */
  itemTempl: function(obj){
    var _targetId ="item",
        _result = new Array(),
        _templ =$("<div/>").attr({"id": _targetId}),
        _title =$("<h4/>").attr({"class": "fwB ttfC"}).text('item data'),
        _data ="";
        obj.forEach(function(value, index){
          _data += `<p>
          <span class="mx5">item_id:`+value.item_id+`</span>
          <span class="mx5">item_name:`+value.item_name+`</span>
          <span class="mx5">sell_price:`+value.sell_price+`</span>
          </p>`;
        });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },
  /**
  * task template
  */
  taskTempl: function(obj){
    var _targetId ="task",
        _result = new Array(),
        _templ =$("<div/>").attr({"id": _targetId}),
        _title =$("<h4/>").attr({"class": "fwB ttfC"}).text('task data'),
        _data ="";
        obj.forEach(function(value, index){
          _data += `<p>
          <span class="mx5">name:`+value.name+`</span>
          </p>`;
        });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },
  /**
  * todo template
  */
  todoTempl: function(obj){
    var _targetId ="todo",
        _result = new Array(),
        _templ =$("<div/>").attr({"id": _targetId}),
        _title =$("<h4/>").attr({"class": "fwB ttfC"}).text('todo data'),
        _data ="";
        obj.forEach(function(value, index){
          _data += `<p>
          <span class="mx5">title:`+value.title+`</span>
          </p>`;
        });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },
  /**
  * 追加処理
  */
  addAction: function(e){
    let that =this,
        _targetVal =$("#todo").val(),
        _obj ={
          setData: {
            _url: "/api/jquery-item-get",
            _data: {
              "title": _targetVal,
            },
          },
          doneResult: function(data){
            console.log("doneResult",data)
          },
          failResult: function(data){
            console.log("failResult",data)
          },
          alwaysResult: function(data){
            console.log("alwaysResult",data)
          },
        };
    //Utils.AjaxModule(_obj);
  },
  delAction: function(){
    console.log("delAction");
  },
});
