/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jquery.main.js":
/*!*************************************!*\
  !*** ./resources/js/jquery.main.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var Main = {};
$(function () {
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
    'click .btn_del': 'delAction'
  },
  "default": {},
  parame: {},
  initialize: function initialize() {
    console.log("auto start");
    this.getItemsData();
  },
  getItemsData: function getItemsData() {
    var that = this,
        _obj = {
      setData: {
        url: "/api/jquery-item-get",
        data: {}
      },
      doneResult: function doneResult(data) {
        console.log("doneResult", data);

        var _itemData = data.item,
            _taskData = data.task,
            _todoData = data.todo,
            _targetId = "#contents",
            _templItem = that.itemTempl(_itemData),
            _templTask = that.taskTempl(_taskData),
            _templTodo = that.todoTempl(_todoData);

        _insertHtml = $("<div/>").attr({
          "class": "template"
        });
        _insertHtml = _insertHtml.append(_templItem.contents).append(_templTask.contents).append(_templTodo.contents);
        $(_targetId).append(_insertHtml.html());
      },
      failResult: function failResult(data) {
        console.log("failResult", data);
      },
      alwaysResult: function alwaysResult(data) {
        console.log("alwaysResult", data);
      }
    };
    console.log("!", this.events);
    Utils.AjaxModule(_obj);
  },

  /**
  * item template
  */
  itemTempl: function itemTempl(obj) {
    var _targetId = "item",
        _result = new Array(),
        _templ = $("<div/>").attr({
      "id": _targetId
    }),
        _title = $("<h4/>").attr({
      "class": "fwB ttfC"
    }).text('item data'),
        _data = "";

    obj.forEach(function (value, index) {
      _data += "<p>\n          <span class=\"mx5\">item_id:" + value.item_id + "</span>\n          <span class=\"mx5\">item_name:" + value.item_name + "</span>\n          <span class=\"mx5\">sell_price:" + value.sell_price + "</span>\n          </p>";
    });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },

  /**
  * task template
  */
  taskTempl: function taskTempl(obj) {
    var _targetId = "task",
        _result = new Array(),
        _templ = $("<div/>").attr({
      "id": _targetId
    }),
        _title = $("<h4/>").attr({
      "class": "fwB ttfC"
    }).text('task data'),
        _data = "";

    obj.forEach(function (value, index) {
      _data += "<p>\n          <span class=\"mx5\">name:" + value.name + "</span>\n          </p>";
    });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },

  /**
  * todo template
  */
  todoTempl: function todoTempl(obj) {
    var _targetId = "todo",
        _result = new Array(),
        _templ = $("<div/>").attr({
      "id": _targetId
    }),
        _title = $("<h4/>").attr({
      "class": "fwB ttfC"
    }).text('todo data'),
        _data = "";

    obj.forEach(function (value, index) {
      _data += "<p>\n          <span class=\"mx5\">title:" + value.title + "</span>\n          </p>";
    });
    _templ = _templ.append(_title).append(_data);
    _result['id'] = _targetId;
    _result['contents'] = _templ;
    return _result;
  },

  /**
  * 追加処理
  */
  addAction: function addAction(e) {
    var that = this,
        _targetVal = $("#todo").val(),
        _obj = {
      setData: {
        _url: "/api/jquery-item-get",
        _data: {
          "title": _targetVal
        }
      },
      doneResult: function doneResult(data) {
        console.log("doneResult", data);
      },
      failResult: function failResult(data) {
        console.log("failResult", data);
      },
      alwaysResult: function alwaysResult(data) {
        console.log("alwaysResult", data);
      }
    }; //Utils.AjaxModule(_obj);

  },
  delAction: function delAction() {
    console.log("delAction");
  }
});

/***/ }),

/***/ 4:
/*!*******************************************!*\
  !*** multi ./resources/js/jquery.main.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/vagrant/code/Laravel/resources/js/jquery.main.js */"./resources/js/jquery.main.js");


/***/ })

/******/ });