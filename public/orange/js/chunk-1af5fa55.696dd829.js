(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-1af5fa55"],{"1cb6":function(t,e,n){},3067:function(t,e,n){"use strict";n("1cb6")},a2f9:function(t,e,n){"use strict";n.r(e);var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"news"},t._l(t.info,(function(e){return n("v-card",{key:e.id},[n("v-card-text",[n("div",[t._v(t._s(t._f("moment")(e["created_at"])))]),n("p",{staticClass:"display-1 text--primary"},[t._v(" "+t._s(e["title"])+" ")]),n("v-list-item",[n("v-list-item-content",[n("div",{staticClass:"text--primary"},[t._v(" "+t._s(e["body"])+" ")])])],1)],1)],1)})),1)},i=[],r=(n("fb6a"),n("bc3a")),s=n.n(r),c=n("c1df"),o=n.n(c),f={data:function(){return{reveal:!1,info:null}},mounted:function(){var t=this;s.a.get("http://cocoahearts.xsrv.jp/api/letters").then((function(e){return t.info=e.data.slice().reverse()}))},filters:{moment:function(t){return o()(t).format("YYYY/MM/DD")}}},u=f,d=(n("3067"),n("2877")),l=n("6544"),v=n.n(l),m=n("b0af"),p=n("99d9"),_=n("da13"),b=n("5d23"),h=Object(d["a"])(u,a,i,!1,null,"99e0a29e",null);e["default"]=h.exports;v()(h,{VCard:m["a"],VCardText:p["b"],VListItem:_["a"],VListItemContent:b["a"]})}}]);
//# sourceMappingURL=chunk-1af5fa55.696dd829.js.map