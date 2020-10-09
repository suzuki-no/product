/*Vanilla JS*/
/*
const ReqBess = new XMLHttpRequest();
export class AjaxReq {
  constructor(a, b) {
        this.a = a;
        this.b = b;
  },
  ReqBess.onreadystatechange = function() {
    var result = document.getElementById('result');
    if (ReqBess.readyState == 4) { // 通信の完了時
      if (ReqBess.status == 200) { // 通信の成功時
        result.innerHTML = ReqBess.responseText;
      }
    }else{
      result.innerHTML = "通信中...";
    }
}
*/
const ReqBess = new XMLHttpRequest();
const xhr = function (obj){
  ReqBess.open("POST", "/api/jquery-item-get", true);
  ReqBess.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
  ReqBess.onload = function (event) {
    if (ReqBess.readyState === 4) {
      if (ReqBess.status === 200) {
        console.log(ReqBess.statusText); // => "OK"
        console.log('ReqBess',ReqBess.responseText); // => "OK"
        console.log('event',event); // => "OK
      }
    }
  };
  ReqBess.onerror = function (event) {
    console.log(event.type); // => "error"
  };
  ReqBess.send(null);
}
