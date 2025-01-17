! function (a, b) {
   "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function (a) {
      if (!a.document) throw new Error("jQuery requires a window with a document");
      return b(a)
   } : b(a)
}("undefined" != typeof window ? window : this, function (a, b) {
   function r(a) {
      var b = a.length,
         c = m.type(a);
      return "function" !== c && !m.isWindow(a) && (!(1 !== a.nodeType || !b) || ("array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a))
   }

   function w(a, b, c) {
      if (m.isFunction(b)) return m.grep(a, function (a, d) {
         return !!b.call(a, d, a) !== c
      });
      if (b.nodeType) return m.grep(a, function (a) {
         return a === b !== c
      });
      if ("string" == typeof b) {
         if (v.test(b)) return m.filter(b, a, c);
         b = m.filter(b, a)
      }
      return m.grep(a, function (a) {
         return m.inArray(a, b) >= 0 !== c
      })
   }

   function D(a, b) {
      do {
         a = a[b]
      } while (a && 1 !== a.nodeType);
      return a
   }

   function G(a) {
      var b = F[a] = {};
      return m.each(a.match(E) || [], function (a, c) {
         b[c] = !0
      }), b
   }

   function I() {
      y.addEventListener ? (y.removeEventListener("DOMContentLoaded", J, !1), a.removeEventListener("load", J, !1)) : (y.detachEvent("onreadystatechange", J), a.detachEvent("onload", J))
   }

   function J() {
      (y.addEventListener || "load" === event.type || "complete" === y.readyState) && (I(), m.ready())
   }

   function O(a, b, c) {
      if (void 0 === c && 1 === a.nodeType) {
         var d = "data-" + b.replace(N, "-$1").toLowerCase();
         if ("string" == typeof (c = a.getAttribute(d))) {
            try {
               c = "true" === c || "false" !== c && ("null" === c ? null : +c + "" === c ? +c : M.test(c) ? m.parseJSON(c) : c)
            } catch (a) {}
            m.data(a, b, c)
         } else c = void 0
      }
      return c
   }

   function P(a) {
      var b;
      for (b in a)
         if (("data" !== b || !m.isEmptyObject(a[b])) && "toJSON" !== b) return !1;
      return !0
   }

   function Q(a, b, d, e) {
      if (m.acceptData(a)) {
         var f, g, h = m.expando,
            i = a.nodeType,
            j = i ? m.cache : a,
            k = i ? a[h] : a[h] && h;
         if (k && j[k] && (e || j[k].data) || void 0 !== d || "string" != typeof b) return k || (k = i ? a[h] = c.pop() || m.guid++ : h), j[k] || (j[k] = i ? {} : {
            toJSON: m.noop
         }), ("object" == typeof b || "function" == typeof b) && (e ? j[k] = m.extend(j[k], b) : j[k].data = m.extend(j[k].data, b)), g = j[k], e || (g.data || (g.data = {}), g = g.data), void 0 !== d && (g[m.camelCase(b)] = d), "string" == typeof b ? null == (f = g[b]) && (f = g[m.camelCase(b)]) : f = g, f
      }
   }

   function R(a, b, c) {
      if (m.acceptData(a)) {
         var d, e, f = a.nodeType,
            g = f ? m.cache : a,
            h = f ? a[m.expando] : m.expando;
         if (g[h]) {
            if (b && (d = c ? g[h] : g[h].data)) {
               m.isArray(b) ? b = b.concat(m.map(b, m.camelCase)) : b in d ? b = [b] : (b = m.camelCase(b), b = b in d ? [b] : b.split(" ")), e = b.length;
               for (; e--;) delete d[b[e]];
               if (c ? !P(d) : !m.isEmptyObject(d)) return
            }(c || (delete g[h].data, P(g[h]))) && (f ? m.cleanData([a], !0) : k.deleteExpando || g != g.window ? delete g[h] : g[h] = null)
         }
      }
   }

   function aa() {
      return !0
   }

   function ba() {
      return !1
   }

   function ca() {
      try {
         return y.activeElement
      } catch (a) {}
   }

   function da(a) {
      var b = ea.split("|"),
         c = a.createDocumentFragment();
      if (c.createElement)
         for (; b.length;) c.createElement(b.pop());
      return c
   }

   function ua(a, b) {
      var c, d, e = 0,
         f = typeof a.getElementsByTagName !== K ? a.getElementsByTagName(b || "*") : typeof a.querySelectorAll !== K ? a.querySelectorAll(b || "*") : void 0;
      if (!f)
         for (f = [], c = a.childNodes || a; null != (d = c[e]); e++) !b || m.nodeName(d, b) ? f.push(d) : m.merge(f, ua(d, b));
      return void 0 === b || b && m.nodeName(a, b) ? m.merge([a], f) : f
   }

   function va(a) {
      W.test(a.type) && (a.defaultChecked = a.checked)
   }

   function wa(a, b) {
      return m.nodeName(a, "table") && m.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
   }

   function xa(a) {
      return a.type = (null !== m.find.attr(a, "type")) + "/" + a.type, a
   }

   function ya(a) {
      var b = pa.exec(a.type);
      return b ? a.type = b[1] : a.removeAttribute("type"), a
   }

   function za(a, b) {
      for (var c, d = 0; null != (c = a[d]); d++) m._data(c, "globalEval", !b || m._data(b[d], "globalEval"))
   }

   function Aa(a, b) {
      if (1 === b.nodeType && m.hasData(a)) {
         var c, d, e, f = m._data(a),
            g = m._data(b, f),
            h = f.events;
         if (h) {
            delete g.handle, g.events = {};
            for (c in h)
               for (d = 0, e = h[c].length; e > d; d++) m.event.add(b, c, h[c][d])
         }
         g.data && (g.data = m.extend({}, g.data))
      }
   }

   function Ba(a, b) {
      var c, d, e;
      if (1 === b.nodeType) {
         if (c = b.nodeName.toLowerCase(), !k.noCloneEvent && b[m.expando]) {
            e = m._data(b);
            for (d in e.events) m.removeEvent(b, d, e.handle);
            b.removeAttribute(m.expando)
         }
         "script" === c && b.text !== a.text ? (xa(b).text = a.text, ya(b)) : "object" === c ? (b.parentNode && (b.outerHTML = a.outerHTML), k.html5Clone && a.innerHTML && !m.trim(b.innerHTML) && (b.innerHTML = a.innerHTML)) : "input" === c && W.test(a.type) ? (b.defaultChecked = b.checked = a.checked, b.value !== a.value && (b.value = a.value)) : "option" === c ? b.defaultSelected = b.selected = a.defaultSelected : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
      }
   }

   function Ea(b, c) {
      var d, e = m(c.createElement(b)).appendTo(c.body),
         f = a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0])) ? d.display : m.css(e[0], "display");
      return e.detach(), f
   }

   function Fa(a) {
      var b = y,
         c = Da[a];
      return c || (c = Ea(a, b), "none" !== c && c || (Ca = (Ca || m("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = (Ca[0].contentWindow || Ca[0].contentDocument).document, b.write(), b.close(), c = Ea(a, b), Ca.detach()), Da[a] = c), c
   }

   function La(a, b) {
      return {
         get: function () {
            var c = a();
            if (null != c) return c ? void delete this.get : (this.get = b).apply(this, arguments)
         }
      }
   }

   function Ua(a, b) {
      if (b in a) return b;
      for (var c = b.charAt(0).toUpperCase() + b.slice(1), d = b, e = Ta.length; e--;)
         if ((b = Ta[e] + c) in a) return b;
      return d
   }

   function Va(a, b) {
      for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) d = a[g], d.style && (f[g] = m._data(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && U(d) && (f[g] = m._data(d, "olddisplay", Fa(d.nodeName)))) : (e = U(d), (c && "none" !== c || !e) && m._data(d, "olddisplay", e ? c : m.css(d, "display"))));
      for (g = 0; h > g; g++) d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
      return a
   }

   function Wa(a, b, c) {
      var d = Pa.exec(b);
      return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
   }

   function Xa(a, b, c, d, e) {
      for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) "margin" === c && (g += m.css(a, c + T[f], !0, e)), d ? ("content" === c && (g -= m.css(a, "padding" + T[f], !0, e)), "margin" !== c && (g -= m.css(a, "border" + T[f] + "Width", !0, e))) : (g += m.css(a, "padding" + T[f], !0, e), "padding" !== c && (g += m.css(a, "border" + T[f] + "Width", !0, e)));
      return g
   }

   function Ya(a, b, c) {
      var d = !0,
         e = "width" === b ? a.offsetWidth : a.offsetHeight,
         f = Ia(a),
         g = k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, f);
      if (0 >= e || null == e) {
         if (e = Ja(a, b, f), (0 > e || null == e) && (e = a.style[b]), Ha.test(e)) return e;
         d = g && (k.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
      }
      return e + Xa(a, b, c || (g ? "border" : "content"), d, f) + "px"
   }

   function Za(a, b, c, d, e) {
      return new Za.prototype.init(a, b, c, d, e)
   }

   function fb() {
      return setTimeout(function () {
         $a = void 0
      }), $a = m.now()
   }

   function gb(a, b) {
      var c, d = {
            height: a
         },
         e = 0;
      for (b = b ? 1 : 0; 4 > e; e += 2 - b) c = T[e], d["margin" + c] = d["padding" + c] = a;
      return b && (d.opacity = d.width = a), d
   }

   function hb(a, b, c) {
      for (var d, e = (eb[b] || []).concat(eb["*"]), f = 0, g = e.length; g > f; f++)
         if (d = e[f].call(c, b, a)) return d
   }

   function ib(a, b, c) {
      var d, e, f, g, h, i, j, n = this,
         o = {},
         p = a.style,
         q = a.nodeType && U(a),
         r = m._data(a, "fxshow");
      c.queue || (h = m._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function () {
         h.unqueued || i()
      }), h.unqueued++, n.always(function () {
         n.always(function () {
            h.unqueued--, m.queue(a, "fx").length || h.empty.fire()
         })
      })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [p.overflow, p.overflowX, p.overflowY], j = m.css(a, "display"), "inline" === ("none" === j ? m._data(a, "olddisplay") || Fa(a.nodeName) : j) && "none" === m.css(a, "float") && (k.inlineBlockNeedsLayout && "inline" !== Fa(a.nodeName) ? p.zoom = 1 : p.display = "inline-block")), c.overflow && (p.overflow = "hidden", k.shrinkWrapBlocks() || n.always(function () {
         p.overflow = c.overflow[0], p.overflowX = c.overflow[1], p.overflowY = c.overflow[2]
      }));
      for (d in b)
         if (e = b[d], ab.exec(e)) {
            if (delete b[d], f = f || "toggle" === e, e === (q ? "hide" : "show")) {
               if ("show" !== e || !r || void 0 === r[d]) continue;
               q = !0
            }
            o[d] = r && r[d] || m.style(a, d)
         } else j = void 0;
      if (m.isEmptyObject(o)) "inline" === ("none" === j ? Fa(a.nodeName) : j) && (p.display = j);
      else {
         r ? "hidden" in r && (q = r.hidden) : r = m._data(a, "fxshow", {}), f && (r.hidden = !q), q ? m(a).show() : n.done(function () {
            m(a).hide()
         }), n.done(function () {
            var b;
            m._removeData(a, "fxshow");
            for (b in o) m.style(a, b, o[b])
         });
         for (d in o) g = hb(q ? r[d] : 0, d, n), d in r || (r[d] = g.start, q && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
      }
   }

   function jb(a, b) {
      var c, d, e, f, g;
      for (c in a)
         if (d = m.camelCase(c), e = b[d], f = a[c], m.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), (g = m.cssHooks[d]) && "expand" in g) {
            f = g.expand(f), delete a[d];
            for (c in f) c in a || (a[c] = f[c], b[c] = e)
         } else b[d] = e
   }

   function kb(a, b, c) {
      var d, e, f = 0,
         g = db.length,
         h = m.Deferred().always(function () {
            delete i.elem
         }),
         i = function () {
            if (e) return !1;
            for (var b = $a || fb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) j.tweens[g].run(f);
            return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
         },
         j = h.promise({
            elem: a,
            props: m.extend({}, b),
            opts: m.extend(!0, {
               specialEasing: {}
            }, c),
            originalProperties: b,
            originalOptions: c,
            startTime: $a || fb(),
            duration: c.duration,
            tweens: [],
            createTween: function (b, c) {
               var d = m.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
               return j.tweens.push(d), d
            },
            stop: function (b) {
               var c = 0,
                  d = b ? j.tweens.length : 0;
               if (e) return this;
               for (e = !0; d > c; c++) j.tweens[c].run(1);
               return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
            }
         }),
         k = j.props;
      for (jb(k, j.opts.specialEasing); g > f; f++)
         if (d = db[f].call(j, a, k, j.opts)) return d;
      return m.map(k, hb, j), m.isFunction(j.opts.start) && j.opts.start.call(a, j), m.fx.timer(m.extend(i, {
         elem: a,
         anim: j,
         queue: j.opts.queue
      })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
   }

   function Kb(a) {
      return function (b, c) {
         "string" != typeof b && (c = b, b = "*");
         var d, e = 0,
            f = b.toLowerCase().match(E) || [];
         if (m.isFunction(c))
            for (; d = f[e++];) "+" === d.charAt(0) ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
      }
   }

   function Lb(a, b, c, d) {
      function g(h) {
         var i;
         return e[h] = !0, m.each(a[h] || [], function (a, h) {
            var j = h(b, c, d);
            return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
         }), i
      }
      var e = {},
         f = a === Ib;
      return g(b.dataTypes[0]) || !e["*"] && g("*")
   }

   function Mb(a, b) {
      var c, d, e = m.ajaxSettings.flatOptions || {};
      for (d in b) void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
      return c && m.extend(!0, a, c), a
   }

   function Nb(a, b, c) {
      for (var d, e, f, g, h = a.contents, i = a.dataTypes;
         "*" === i[0];) i.shift(), void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
      if (e)
         for (g in h)
            if (h[g] && h[g].test(e)) {
               i.unshift(g);
               break
            } if (i[0] in c) f = i[0];
      else {
         for (g in c) {
            if (!i[0] || a.converters[g + " " + i[0]]) {
               f = g;
               break
            }
            d || (d = g)
         }
         f = f || d
      }
      return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
   }

   function Ob(a, b, c, d) {
      var e, f, g, h, i, j = {},
         k = a.dataTypes.slice();
      if (k[1])
         for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
      for (f = k.shift(); f;)
         if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift())
            if ("*" === f) f = i;
            else if ("*" !== i && i !== f) {
         if (!(g = j[i + " " + f] || j["* " + f]))
            for (e in j)
               if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                  !0 === g ? g = j[e] : !0 !== j[e] && (f = h[0], k.unshift(h[1]));
                  break
               } if (!0 !== g)
            if (g && a.throws) b = g(b);
            else try {
               b = g(b)
            } catch (a) {
               return {
                  state: "parsererror",
                  error: g ? a : "No conversion from " + i + " to " + f
               }
            }
      }
      return {
         state: "success",
         data: b
      }
   }

   function Ub(a, b, c, d) {
      var e;
      if (m.isArray(b)) m.each(b, function (b, e) {
         c || Qb.test(a) ? d(a, e) : Ub(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
      });
      else if (c || "object" !== m.type(b)) d(a, b);
      else
         for (e in b) Ub(a + "[" + e + "]", b[e], c, d)
   }

   function Yb() {
      try {
         return new a.XMLHttpRequest
      } catch (a) {}
   }

   function Zb() {
      try {
         return new a.ActiveXObject("Microsoft.XMLHTTP")
      } catch (a) {}
   }

   function cc(a) {
      return m.isWindow(a) ? a : 9 === a.nodeType && (a.defaultView || a.parentWindow)
   }
   var c = [],
      d = c.slice,
      e = c.concat,
      f = c.push,
      g = c.indexOf,
      h = {},
      i = h.toString,
      j = h.hasOwnProperty,
      k = {},
      l = "1.11.1",
      m = function (a, b) {
         return new m.fn.init(a, b)
      },
      n = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
      o = /^-ms-/,
      p = /-([\da-z])/gi,
      q = function (a, b) {
         return b.toUpperCase()
      };
   m.fn = m.prototype = {
      jquery: l,
      constructor: m,
      selector: "",
      length: 0,
      toArray: function () {
         return d.call(this)
      },
      get: function (a) {
         return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
      },
      pushStack: function (a) {
         var b = m.merge(this.constructor(), a);
         return b.prevObject = this, b.context = this.context, b
      },
      each: function (a, b) {
         return m.each(this, a, b)
      },
      map: function (a) {
         return this.pushStack(m.map(this, function (b, c) {
            return a.call(b, c, b)
         }))
      },
      slice: function () {
         return this.pushStack(d.apply(this, arguments))
      },
      first: function () {
         return this.eq(0)
      },
      last: function () {
         return this.eq(-1)
      },
      eq: function (a) {
         var b = this.length,
            c = +a + (0 > a ? b : 0);
         return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
      },
      end: function () {
         return this.prevObject || this.constructor(null)
      },
      push: f,
      sort: c.sort,
      splice: c.splice
   }, m.extend = m.fn.extend = function () {
      var a, b, c, d, e, f, g = arguments[0] || {},
         h = 1,
         i = arguments.length,
         j = !1;
      for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || m.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++)
         if (null != (e = arguments[h]))
            for (d in e) a = g[d], c = e[d], g !== c && (j && c && (m.isPlainObject(c) || (b = m.isArray(c))) ? (b ? (b = !1, f = a && m.isArray(a) ? a : []) : f = a && m.isPlainObject(a) ? a : {}, g[d] = m.extend(j, f, c)) : void 0 !== c && (g[d] = c));
      return g
   }, m.extend({
      expando: "jQuery" + (l + Math.random()).replace(/\D/g, ""),
      isReady: !0,
      error: function (a) {
         throw new Error(a)
      },
      noop: function () {},
      isFunction: function (a) {
         return "function" === m.type(a)
      },
      isArray: Array.isArray || function (a) {
         return "array" === m.type(a)
      },
      isWindow: function (a) {
         return null != a && a == a.window
      },
      isNumeric: function (a) {
         return !m.isArray(a) && a - parseFloat(a) >= 0
      },
      isEmptyObject: function (a) {
         var b;
         for (b in a) return !1;
         return !0
      },
      isPlainObject: function (a) {
         var b;
         if (!a || "object" !== m.type(a) || a.nodeType || m.isWindow(a)) return !1;
         try {
            if (a.constructor && !j.call(a, "constructor") && !j.call(a.constructor.prototype, "isPrototypeOf")) return !1
         } catch (a) {
            return !1
         }
         if (k.ownLast)
            for (b in a) return j.call(a, b);
         for (b in a);
         return void 0 === b || j.call(a, b)
      },
      type: function (a) {
         return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(a)] || "object" : typeof a
      },
      globalEval: function (b) {
         b && m.trim(b) && (a.execScript || function (b) {
            a.eval.call(a, b)
         })(b)
      },
      camelCase: function (a) {
         return a.replace(o, "ms-").replace(p, q)
      },
      nodeName: function (a, b) {
         return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
      },
      each: function (a, b, c) {
         var e = 0,
            f = a.length,
            g = r(a);
         if (c) {
            if (g)
               for (; f > e && !1 !== b.apply(a[e], c); e++);
            else
               for (e in a)
                  if (!1 === b.apply(a[e], c)) break
         } else if (g)
            for (; f > e && !1 !== b.call(a[e], e, a[e]); e++);
         else
            for (e in a)
               if (!1 === b.call(a[e], e, a[e])) break;
         return a
      },
      trim: function (a) {
         return null == a ? "" : (a + "").replace(n, "")
      },
      makeArray: function (a, b) {
         var c = b || [];
         return null != a && (r(Object(a)) ? m.merge(c, "string" == typeof a ? [a] : a) : f.call(c, a)), c
      },
      inArray: function (a, b, c) {
         var d;
         if (b) {
            if (g) return g.call(b, a, c);
            for (d = b.length, c = c ? 0 > c ? Math.max(0, d + c) : c : 0; d > c; c++)
               if (c in b && b[c] === a) return c
         }
         return -1
      },
      merge: function (a, b) {
         for (var c = +b.length, d = 0, e = a.length; c > d;) a[e++] = b[d++];
         if (c !== c)
            for (; void 0 !== b[d];) a[e++] = b[d++];
         return a.length = e, a
      },
      grep: function (a, b, c) {
         for (var e = [], f = 0, g = a.length, h = !c; g > f; f++) !b(a[f], f) !== h && e.push(a[f]);
         return e
      },
      map: function (a, b, c) {
         var d, f = 0,
            g = a.length,
            h = r(a),
            i = [];
         if (h)
            for (; g > f; f++) null != (d = b(a[f], f, c)) && i.push(d);
         else
            for (f in a) null != (d = b(a[f], f, c)) && i.push(d);
         return e.apply([], i)
      },
      guid: 1,
      proxy: function (a, b) {
         var c, e, f;
         return "string" == typeof b && (f = a[b], b = a, a = f), m.isFunction(a) ? (c = d.call(arguments, 2), e = function () {
            return a.apply(b || this, c.concat(d.call(arguments)))
         }, e.guid = a.guid = a.guid || m.guid++, e) : void 0
      },
      now: function () {
         return +new Date
      },
      support: k
   }), m.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (a, b) {
      h["[object " + b + "]"] = b.toLowerCase()
   });
   var s = function (a) {
      function ea(a, b, d, e) {
         var f, h, j, k, l, o, r, s, w, x;
         if ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, d = d || [], !a || "string" != typeof a) return d;
         if (1 !== (k = b.nodeType) && 9 !== k) return [];
         if (p && !e) {
            if (f = _.exec(a))
               if (j = f[1]) {
                  if (9 === k) {
                     if (!(h = b.getElementById(j)) || !h.parentNode) return d;
                     if (h.id === j) return d.push(h), d
                  } else if (b.ownerDocument && (h = b.ownerDocument.getElementById(j)) && t(b, h) && h.id === j) return d.push(h), d
               } else {
                  if (f[2]) return I.apply(d, b.getElementsByTagName(a)), d;
                  if ((j = f[3]) && c.getElementsByClassName && b.getElementsByClassName) return I.apply(d, b.getElementsByClassName(j)), d
               } if (c.qsa && (!q || !q.test(a))) {
               if (s = r = u, w = b, x = 9 === k && a, 1 === k && "object" !== b.nodeName.toLowerCase()) {
                  for (o = g(a), (r = b.getAttribute("id")) ? s = r.replace(ba, "\\$&") : b.setAttribute("id", s), s = "[id='" + s + "'] ", l = o.length; l--;) o[l] = s + pa(o[l]);
                  w = aa.test(a) && na(b.parentNode) || b, x = o.join(",")
               }
               if (x) try {
                  return I.apply(d, w.querySelectorAll(x)), d
               } catch (a) {} finally {
                  r || b.removeAttribute("id")
               }
            }
         }
         return i(a.replace(R, "$1"), b, d, e)
      }

      function fa() {
         function b(c, e) {
            return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
         }
         var a = [];
         return b
      }

      function ga(a) {
         return a[u] = !0, a
      }

      function ha(a) {
         var b = n.createElement("div");
         try {
            return !!a(b)
         } catch (a) {
            return !1
         } finally {
            b.parentNode && b.parentNode.removeChild(b), b = null
         }
      }

      function ia(a, b) {
         for (var c = a.split("|"), e = a.length; e--;) d.attrHandle[c[e]] = b
      }

      function ja(a, b) {
         var c = b && a,
            d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || D) - (~a.sourceIndex || D);
         if (d) return d;
         if (c)
            for (; c = c.nextSibling;)
               if (c === b) return -1;
         return a ? 1 : -1
      }

      function ka(a) {
         return function (b) {
            return "input" === b.nodeName.toLowerCase() && b.type === a
         }
      }

      function la(a) {
         return function (b) {
            var c = b.nodeName.toLowerCase();
            return ("input" === c || "button" === c) && b.type === a
         }
      }

      function ma(a) {
         return ga(function (b) {
            return b = +b, ga(function (c, d) {
               for (var e, f = a([], c.length, b), g = f.length; g--;) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
            })
         })
      }

      function na(a) {
         return a && typeof a.getElementsByTagName !== C && a
      }

      function oa() {}

      function pa(a) {
         for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
         return d
      }

      function qa(a, b, c) {
         var d = b.dir,
            e = c && "parentNode" === d,
            f = x++;
         return b.first ? function (b, c, f) {
            for (; b = b[d];)
               if (1 === b.nodeType || e) return a(b, c, f)
         } : function (b, c, g) {
            var h, i, j = [w, f];
            if (g) {
               for (; b = b[d];)
                  if ((1 === b.nodeType || e) && a(b, c, g)) return !0
            } else
               for (; b = b[d];)
                  if (1 === b.nodeType || e) {
                     if (i = b[u] || (b[u] = {}), (h = i[d]) && h[0] === w && h[1] === f) return j[2] = h[2];
                     if (i[d] = j, j[2] = a(b, c, g)) return !0
                  }
         }
      }

      function ra(a) {
         return a.length > 1 ? function (b, c, d) {
            for (var e = a.length; e--;)
               if (!a[e](b, c, d)) return !1;
            return !0
         } : a[0]
      }

      function sa(a, b, c) {
         for (var d = 0, e = b.length; e > d; d++) ea(a, b[d], c);
         return c
      }

      function ta(a, b, c, d, e) {
         for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++)(f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
         return g
      }

      function ua(a, b, c, d, e, f) {
         return d && !d[u] && (d = ua(d)), e && !e[u] && (e = ua(e, f)), ga(function (f, g, h, i) {
            var j, k, l, m = [],
               n = [],
               o = g.length,
               p = f || sa(b || "*", h.nodeType ? [h] : h, []),
               q = !a || !f && b ? p : ta(p, m, a, h, i),
               r = c ? e || (f ? a : o || d) ? [] : g : q;
            if (c && c(q, r, h, i), d)
               for (j = ta(r, n), d(j, [], h, i), k = j.length; k--;)(l = j[k]) && (r[n[k]] = !(q[n[k]] = l));
            if (f) {
               if (e || a) {
                  if (e) {
                     for (j = [], k = r.length; k--;)(l = r[k]) && j.push(q[k] = l);
                     e(null, r = [], j, i)
                  }
                  for (k = r.length; k--;)(l = r[k]) && (j = e ? K.call(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
               }
            } else r = ta(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : I.apply(g, r)
         })
      }

      function va(a) {
         for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = qa(function (a) {
               return a === b
            }, h, !0), l = qa(function (a) {
               return K.call(b, a) > -1
            }, h, !0), m = [function (a, c, d) {
               return !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d))
            }]; f > i; i++)
            if (c = d.relative[a[i].type]) m = [qa(ra(m), c)];
            else {
               if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                  for (e = ++i; f > e && !d.relative[a[e].type]; e++);
                  return ua(i > 1 && ra(m), i > 1 && pa(a.slice(0, i - 1).concat({
                     value: " " === a[i - 2].type ? "*" : ""
                  })).replace(R, "$1"), c, e > i && va(a.slice(i, e)), f > e && va(a = a.slice(e)), f > e && pa(a))
               }
               m.push(c)
            } return ra(m)
      }

      function wa(a, b) {
         var c = b.length > 0,
            e = a.length > 0,
            f = function (f, g, h, i, k) {
               var l, m, o, p = 0,
                  q = "0",
                  r = f && [],
                  s = [],
                  t = j,
                  u = f || e && d.find.TAG("*", k),
                  v = w += null == t ? 1 : Math.random() || .1,
                  x = u.length;
               for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
                  if (e && l) {
                     for (m = 0; o = a[m++];)
                        if (o(l, g, h)) {
                           i.push(l);
                           break
                        } k && (w = v)
                  }
                  c && ((l = !o && l) && p--, f && r.push(l))
               }
               if (p += q, c && q !== p) {
                  for (m = 0; o = b[m++];) o(r, s, g, h);
                  if (f) {
                     if (p > 0)
                        for (; q--;) r[q] || s[q] || (s[q] = G.call(i));
                     s = ta(s)
                  }
                  I.apply(i, s), k && !f && s.length > 0 && p + b.length > 1 && ea.uniqueSort(i)
               }
               return k && (w = v, j = t), r
            };
         return c ? ga(f) : f
      }
      var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + -new Date,
         v = a.document,
         w = 0,
         x = 0,
         y = fa(),
         z = fa(),
         A = fa(),
         B = function (a, b) {
            return a === b && (l = !0), 0
         },
         C = "undefined",
         D = 1 << 31,
         E = {}.hasOwnProperty,
         F = [],
         G = F.pop,
         H = F.push,
         I = F.push,
         J = F.slice,
         K = F.indexOf || function (a) {
            for (var b = 0, c = this.length; c > b; b++)
               if (this[b] === a) return b;
            return -1
         },
         L = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
         M = "[\\x20\\t\\r\\n\\f]",
         N = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
         O = N.replace("w", "w#"),
         P = "\\[" + M + "*(" + N + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + O + "))|)" + M + "*\\]",
         Q = ":(" + N + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + P + ")*)|.*)\\)|)",
         R = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
         S = new RegExp("^" + M + "*," + M + "*"),
         T = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
         U = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
         V = new RegExp(Q),
         W = new RegExp("^" + O + "$"),
         X = {
            ID: new RegExp("^#(" + N + ")"),
            CLASS: new RegExp("^\\.(" + N + ")"),
            TAG: new RegExp("^(" + N.replace("w", "w*") + ")"),
            ATTR: new RegExp("^" + P),
            PSEUDO: new RegExp("^" + Q),
            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
            bool: new RegExp("^(?:" + L + ")$", "i"),
            needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
         },
         Y = /^(?:input|select|textarea|button)$/i,
         Z = /^h\d$/i,
         $ = /^[^{]+\{\s*\[native \w/,
         _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
         aa = /[+~]/,
         ba = /'|\\/g,
         ca = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
         da = function (a, b, c) {
            var d = "0x" + b - 65536;
            return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
         };
      try {
         I.apply(F = J.call(v.childNodes), v.childNodes), F[v.childNodes.length].nodeType
      } catch (a) {
         I = {
            apply: F.length ? function (a, b) {
               H.apply(a, J.call(b))
            } : function (a, b) {
               for (var c = a.length, d = 0; a[c++] = b[d++];);
               a.length = c - 1
            }
         }
      }
      c = ea.support = {}, f = ea.isXML = function (a) {
         var b = a && (a.ownerDocument || a).documentElement;
         return !!b && "HTML" !== b.nodeName
      }, m = ea.setDocument = function (a) {
         var b, e = a ? a.ownerDocument || a : v,
            g = e.defaultView;
         return e !== n && 9 === e.nodeType && e.documentElement ? (n = e, o = e.documentElement, p = !f(e), g && g !== g.top && (g.addEventListener ? g.addEventListener("unload", function () {
            m()
         }, !1) : g.attachEvent && g.attachEvent("onunload", function () {
            m()
         })), c.attributes = ha(function (a) {
            return a.className = "i", !a.getAttribute("className")
         }), c.getElementsByTagName = ha(function (a) {
            return a.appendChild(e.createComment("")), !a.getElementsByTagName("*").length
         }), c.getElementsByClassName = $.test(e.getElementsByClassName) && ha(function (a) {
            return a.innerHTML = "<div class='a'></div><div class='a i'></div>", a.firstChild.className = "i", 2 === a.getElementsByClassName("i").length
         }), c.getById = ha(function (a) {
            return o.appendChild(a).id = u, !e.getElementsByName || !e.getElementsByName(u).length
         }), c.getById ? (d.find.ID = function (a, b) {
            if (typeof b.getElementById !== C && p) {
               var c = b.getElementById(a);
               return c && c.parentNode ? [c] : []
            }
         }, d.filter.ID = function (a) {
            var b = a.replace(ca, da);
            return function (a) {
               return a.getAttribute("id") === b
            }
         }) : (delete d.find.ID, d.filter.ID = function (a) {
            var b = a.replace(ca, da);
            return function (a) {
               var c = typeof a.getAttributeNode !== C && a.getAttributeNode("id");
               return c && c.value === b
            }
         }), d.find.TAG = c.getElementsByTagName ? function (a, b) {
            return typeof b.getElementsByTagName !== C ? b.getElementsByTagName(a) : void 0
         } : function (a, b) {
            var c, d = [],
               e = 0,
               f = b.getElementsByTagName(a);
            if ("*" === a) {
               for (; c = f[e++];) 1 === c.nodeType && d.push(c);
               return d
            }
            return f
         }, d.find.CLASS = c.getElementsByClassName && function (a, b) {
            return typeof b.getElementsByClassName !== C && p ? b.getElementsByClassName(a) : void 0
         }, r = [], q = [], (c.qsa = $.test(e.querySelectorAll)) && (ha(function (a) {
            a.innerHTML = "<select msallowclip=''><option selected=''></option></select>", a.querySelectorAll("[msallowclip^='']").length && q.push("[*^$]=" + M + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + M + "*(?:value|" + L + ")"), a.querySelectorAll(":checked").length || q.push(":checked")
         }), ha(function (a) {
            var b = e.createElement("input");
            b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + M + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
         })), (c.matchesSelector = $.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ha(function (a) {
            c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", Q)
         }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = $.test(o.compareDocumentPosition), t = b || $.test(o.contains) ? function (a, b) {
            var c = 9 === a.nodeType ? a.documentElement : a,
               d = b && b.parentNode;
            return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
         } : function (a, b) {
            if (b)
               for (; b = b.parentNode;)
                  if (b === a) return !0;
            return !1
         }, B = b ? function (a, b) {
            if (a === b) return l = !0, 0;
            var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
            return d || (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === e || a.ownerDocument === v && t(v, a) ? -1 : b === e || b.ownerDocument === v && t(v, b) ? 1 : k ? K.call(k, a) - K.call(k, b) : 0 : 4 & d ? -1 : 1)
         } : function (a, b) {
            if (a === b) return l = !0, 0;
            var c, d = 0,
               f = a.parentNode,
               g = b.parentNode,
               h = [a],
               i = [b];
            if (!f || !g) return a === e ? -1 : b === e ? 1 : f ? -1 : g ? 1 : k ? K.call(k, a) - K.call(k, b) : 0;
            if (f === g) return ja(a, b);
            for (c = a; c = c.parentNode;) h.unshift(c);
            for (c = b; c = c.parentNode;) i.unshift(c);
            for (; h[d] === i[d];) d++;
            return d ? ja(h[d], i[d]) : h[d] === v ? -1 : i[d] === v ? 1 : 0
         }, e) : n
      }, ea.matches = function (a, b) {
         return ea(a, null, null, b)
      }, ea.matchesSelector = function (a, b) {
         if ((a.ownerDocument || a) !== n && m(a), b = b.replace(U, "='$1']"), !(!c.matchesSelector || !p || r && r.test(b) || q && q.test(b))) try {
            var d = s.call(a, b);
            if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
         } catch (a) {}
         return ea(b, n, null, [a]).length > 0
      }, ea.contains = function (a, b) {
         return (a.ownerDocument || a) !== n && m(a), t(a, b)
      }, ea.attr = function (a, b) {
         (a.ownerDocument || a) !== n && m(a);
         var e = d.attrHandle[b.toLowerCase()],
            f = e && E.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
         return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
      }, ea.error = function (a) {
         throw new Error("Syntax error, unrecognized expression: " + a)
      }, ea.uniqueSort = function (a) {
         var b, d = [],
            e = 0,
            f = 0;
         if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
            for (; b = a[f++];) b === a[f] && (e = d.push(f));
            for (; e--;) a.splice(d[e], 1)
         }
         return k = null, a
      }, e = ea.getText = function (a) {
         var b, c = "",
            d = 0,
            f = a.nodeType;
         if (f) {
            if (1 === f || 9 === f || 11 === f) {
               if ("string" == typeof a.textContent) return a.textContent;
               for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
            } else if (3 === f || 4 === f) return a.nodeValue
         } else
            for (; b = a[d++];) c += e(b);
         return c
      }, d = ea.selectors = {
         cacheLength: 50,
         createPseudo: ga,
         match: X,
         attrHandle: {},
         find: {},
         relative: {
            ">": {
               dir: "parentNode",
               first: !0
            },
            " ": {
               dir: "parentNode"
            },
            "+": {
               dir: "previousSibling",
               first: !0
            },
            "~": {
               dir: "previousSibling"
            }
         },
         preFilter: {
            ATTR: function (a) {
               return a[1] = a[1].replace(ca, da), a[3] = (a[3] || a[4] || a[5] || "").replace(ca, da), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
            },
            CHILD: function (a) {
               return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || ea.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && ea.error(a[0]), a
            },
            PSEUDO: function (a) {
               var b, c = !a[6] && a[2];
               return X.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && V.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
            }
         },
         filter: {
            TAG: function (a) {
               var b = a.replace(ca, da).toLowerCase();
               return "*" === a ? function () {
                  return !0
               } : function (a) {
                  return a.nodeName && a.nodeName.toLowerCase() === b
               }
            },
            CLASS: function (a) {
               var b = y[a + " "];
               return b || (b = new RegExp("(^|" + M + ")" + a + "(" + M + "|$)")) && y(a, function (a) {
                  return b.test("string" == typeof a.className && a.className || typeof a.getAttribute !== C && a.getAttribute("class") || "")
               })
            },
            ATTR: function (a, b, c) {
               return function (d) {
                  var e = ea.attr(d, a);
                  return null == e ? "!=" === b : !b || (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e + " ").indexOf(c) > -1 : "|=" === b && (e === c || e.slice(0, c.length + 1) === c + "-"))
               }
            },
            CHILD: function (a, b, c, d, e) {
               var f = "nth" !== a.slice(0, 3),
                  g = "last" !== a.slice(-4),
                  h = "of-type" === b;
               return 1 === d && 0 === e ? function (a) {
                  return !!a.parentNode
               } : function (b, c, i) {
                  var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling",
                     q = b.parentNode,
                     r = h && b.nodeName.toLowerCase(),
                     s = !i && !h;
                  if (q) {
                     if (f) {
                        for (; p;) {
                           for (l = b; l = l[p];)
                              if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) return !1;
                           o = p = "only" === a && !o && "nextSibling"
                        }
                        return !0
                     }
                     if (o = [g ? q.firstChild : q.lastChild], g && s) {
                        for (k = q[u] || (q[u] = {}), j = k[a] || [], n = j[0] === w && j[1], m = j[0] === w && j[2], l = n && q.childNodes[n]; l = ++n && l && l[p] || (m = n = 0) || o.pop();)
                           if (1 === l.nodeType && ++m && l === b) {
                              k[a] = [w, n, m];
                              break
                           }
                     } else if (s && (j = (b[u] || (b[u] = {}))[a]) && j[0] === w) m = j[1];
                     else
                        for (;
                           (l = ++n && l && l[p] || (m = n = 0) || o.pop()) && ((h ? l.nodeName.toLowerCase() !== r : 1 !== l.nodeType) || !++m || (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l !== b)););
                     return (m -= e) === d || m % d == 0 && m / d >= 0
                  }
               }
            },
            PSEUDO: function (a, b) {
               var c, e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || ea.error("unsupported pseudo: " + a);
               return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ga(function (a, c) {
                  for (var d, f = e(a, b), g = f.length; g--;) d = K.call(a, f[g]), a[d] = !(c[d] = f[g])
               }) : function (a) {
                  return e(a, 0, c)
               }) : e
            }
         },
         pseudos: {
            not: ga(function (a) {
               var b = [],
                  c = [],
                  d = h(a.replace(R, "$1"));
               return d[u] ? ga(function (a, b, c, e) {
                  for (var f, g = d(a, null, e, []), h = a.length; h--;)(f = g[h]) && (a[h] = !(b[h] = f))
               }) : function (a, e, f) {
                  return b[0] = a, d(b, null, f, c), !c.pop()
               }
            }),
            has: ga(function (a) {
               return function (b) {
                  return ea(a, b).length > 0
               }
            }),
            contains: ga(function (a) {
               return function (b) {
                  return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
               }
            }),
            lang: ga(function (a) {
               return W.test(a || "") || ea.error("unsupported lang: " + a), a = a.replace(ca, da).toLowerCase(),
                  function (b) {
                     var c;
                     do {
                        if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return (c = c.toLowerCase()) === a || 0 === c.indexOf(a + "-")
                     } while ((b = b.parentNode) && 1 === b.nodeType);
                     return !1
                  }
            }),
            target: function (b) {
               var c = a.location && a.location.hash;
               return c && c.slice(1) === b.id
            },
            root: function (a) {
               return a === o
            },
            focus: function (a) {
               return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
            },
            enabled: function (a) {
               return !1 === a.disabled
            },
            disabled: function (a) {
               return !0 === a.disabled
            },
            checked: function (a) {
               var b = a.nodeName.toLowerCase();
               return "input" === b && !!a.checked || "option" === b && !!a.selected
            },
            selected: function (a) {
               return a.parentNode && a.parentNode.selectedIndex, !0 === a.selected
            },
            empty: function (a) {
               for (a = a.firstChild; a; a = a.nextSibling)
                  if (a.nodeType < 6) return !1;
               return !0
            },
            parent: function (a) {
               return !d.pseudos.empty(a)
            },
            header: function (a) {
               return Z.test(a.nodeName)
            },
            input: function (a) {
               return Y.test(a.nodeName)
            },
            button: function (a) {
               var b = a.nodeName.toLowerCase();
               return "input" === b && "button" === a.type || "button" === b
            },
            text: function (a) {
               var b;
               return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
            },
            first: ma(function () {
               return [0]
            }),
            last: ma(function (a, b) {
               return [b - 1]
            }),
            eq: ma(function (a, b, c) {
               return [0 > c ? c + b : c]
            }),
            even: ma(function (a, b) {
               for (var c = 0; b > c; c += 2) a.push(c);
               return a
            }),
            odd: ma(function (a, b) {
               for (var c = 1; b > c; c += 2) a.push(c);
               return a
            }),
            lt: ma(function (a, b, c) {
               for (var d = 0 > c ? c + b : c; --d >= 0;) a.push(d);
               return a
            }),
            gt: ma(function (a, b, c) {
               for (var d = 0 > c ? c + b : c; ++d < b;) a.push(d);
               return a
            })
         }
      }, d.pseudos.nth = d.pseudos.eq;
      for (b in {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
         }) d.pseudos[b] = ka(b);
      for (b in {
            submit: !0,
            reset: !0
         }) d.pseudos[b] = la(b);
      return oa.prototype = d.filters = d.pseudos, d.setFilters = new oa, g = ea.tokenize = function (a, b) {
         var c, e, f, g, h, i, j, k = z[a + " "];
         if (k) return b ? 0 : k.slice(0);
         for (h = a, i = [], j = d.preFilter; h;) {
            (!c || (e = S.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = T.exec(h)) && (c = e.shift(), f.push({
               value: c,
               type: e[0].replace(R, " ")
            }), h = h.slice(c.length));
            for (g in d.filter) !(e = X[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
               value: c,
               type: g,
               matches: e
            }), h = h.slice(c.length));
            if (!c) break
         }
         return b ? h.length : h ? ea.error(a) : z(a, i).slice(0)
      }, h = ea.compile = function (a, b) {
         var c, d = [],
            e = [],
            f = A[a + " "];
         if (!f) {
            for (b || (b = g(a)), c = b.length; c--;) f = va(b[c]), f[u] ? d.push(f) : e.push(f);
            f = A(a, wa(e, d)), f.selector = a
         }
         return f
      }, i = ea.select = function (a, b, e, f) {
         var i, j, k, l, m, n = "function" == typeof a && a,
            o = !f && g(a = n.selector || a);
         if (e = e || [], 1 === o.length) {
            if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
               if (!(b = (d.find.ID(k.matches[0].replace(ca, da), b) || [])[0])) return e;
               n && (b = b.parentNode), a = a.slice(j.shift().value.length)
            }
            for (i = X.needsContext.test(a) ? 0 : j.length; i-- && (k = j[i], !d.relative[l = k.type]);)
               if ((m = d.find[l]) && (f = m(k.matches[0].replace(ca, da), aa.test(j[0].type) && na(b.parentNode) || b))) {
                  if (j.splice(i, 1), !(a = f.length && pa(j))) return I.apply(e, f), e;
                  break
               }
         }
         return (n || h(a, o))(f, b, !p, e, aa.test(a) && na(b.parentNode) || b), e
      }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ha(function (a) {
         return 1 & a.compareDocumentPosition(n.createElement("div"))
      }), ha(function (a) {
         return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
      }) || ia("type|href|height|width", function (a, b, c) {
         return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
      }), c.attributes && ha(function (a) {
         return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
      }) || ia("value", function (a, b, c) {
         return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
      }), ha(function (a) {
         return null == a.getAttribute("disabled")
      }) || ia(L, function (a, b, c) {
         var d;
         return c ? void 0 : !0 === a[b] ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
      }), ea
   }(a);
   m.find = s, m.expr = s.selectors, m.expr[":"] = m.expr.pseudos, m.unique = s.uniqueSort, m.text = s.getText, m.isXMLDoc = s.isXML, m.contains = s.contains;
   var t = m.expr.match.needsContext,
      u = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
      v = /^.[^:#\[\.,]*$/;
   m.filter = function (a, b, c) {
      var d = b[0];
      return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? m.find.matchesSelector(d, a) ? [d] : [] : m.find.matches(a, m.grep(b, function (a) {
         return 1 === a.nodeType
      }))
   }, m.fn.extend({
      find: function (a) {
         var b, c = [],
            d = this,
            e = d.length;
         if ("string" != typeof a) return this.pushStack(m(a).filter(function () {
            for (b = 0; e > b; b++)
               if (m.contains(d[b], this)) return !0
         }));
         for (b = 0; e > b; b++) m.find(a, d[b], c);
         return c = this.pushStack(e > 1 ? m.unique(c) : c), c.selector = this.selector ? this.selector + " " + a : a, c
      },
      filter: function (a) {
         return this.pushStack(w(this, a || [], !1))
      },
      not: function (a) {
         return this.pushStack(w(this, a || [], !0))
      },
      is: function (a) {
         return !!w(this, "string" == typeof a && t.test(a) ? m(a) : a || [], !1).length
      }
   });
   var x, y = a.document,
      z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
   (m.fn.init = function (a, b) {
      var c, d;
      if (!a) return this;
      if ("string" == typeof a) {
         if (!(c = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a, null] : z.exec(a)) || !c[1] && b) return !b || b.jquery ? (b || x).find(a) : this.constructor(b).find(a);
         if (c[1]) {
            if (b = b instanceof m ? b[0] : b, m.merge(this, m.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : y, !0)), u.test(c[1]) && m.isPlainObject(b))
               for (c in b) m.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
            return this
         }
         if ((d = y.getElementById(c[2])) && d.parentNode) {
            if (d.id !== c[2]) return x.find(a);
            this.length = 1, this[0] = d
         }
         return this.context = y, this.selector = a, this
      }
      return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : m.isFunction(a) ? void 0 !== x.ready ? x.ready(a) : a(m) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), m.makeArray(a, this))
   }).prototype = m.fn, x = m(y);
   var B = /^(?:parents|prev(?:Until|All))/,
      C = {
         children: !0,
         contents: !0,
         next: !0,
         prev: !0
      };
   m.extend({
      dir: function (a, b, c) {
         for (var d = [], e = a[b]; e && 9 !== e.nodeType && (void 0 === c || 1 !== e.nodeType || !m(e).is(c));) 1 === e.nodeType && d.push(e), e = e[b];
         return d
      },
      sibling: function (a, b) {
         for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
         return c
      }
   }), m.fn.extend({
      has: function (a) {
         var b, c = m(a, this),
            d = c.length;
         return this.filter(function () {
            for (b = 0; d > b; b++)
               if (m.contains(this, c[b])) return !0
         })
      },
      closest: function (a, b) {
         for (var c, d = 0, e = this.length, f = [], g = t.test(a) || "string" != typeof a ? m(a, b || this.context) : 0; e > d; d++)
            for (c = this[d]; c && c !== b; c = c.parentNode)
               if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && m.find.matchesSelector(c, a))) {
                  f.push(c);
                  break
               } return this.pushStack(f.length > 1 ? m.unique(f) : f)
      },
      index: function (a) {
         return a ? "string" == typeof a ? m.inArray(this[0], m(a)) : m.inArray(a.jquery ? a[0] : a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
      },
      add: function (a, b) {
         return this.pushStack(m.unique(m.merge(this.get(), m(a, b))))
      },
      addBack: function (a) {
         return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
      }
   }), m.each({
      parent: function (a) {
         var b = a.parentNode;
         return b && 11 !== b.nodeType ? b : null
      },
      parents: function (a) {
         return m.dir(a, "parentNode")
      },
      parentsUntil: function (a, b, c) {
         return m.dir(a, "parentNode", c)
      },
      next: function (a) {
         return D(a, "nextSibling")
      },
      prev: function (a) {
         return D(a, "previousSibling")
      },
      nextAll: function (a) {
         return m.dir(a, "nextSibling")
      },
      prevAll: function (a) {
         return m.dir(a, "previousSibling")
      },
      nextUntil: function (a, b, c) {
         return m.dir(a, "nextSibling", c)
      },
      prevUntil: function (a, b, c) {
         return m.dir(a, "previousSibling", c)
      },
      siblings: function (a) {
         return m.sibling((a.parentNode || {}).firstChild, a)
      },
      children: function (a) {
         return m.sibling(a.firstChild)
      },
      contents: function (a) {
         return m.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : m.merge([], a.childNodes)
      }
   }, function (a, b) {
      m.fn[a] = function (c, d) {
         var e = m.map(this, b, c);
         return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = m.filter(d, e)), this.length > 1 && (C[a] || (e = m.unique(e)), B.test(a) && (e = e.reverse())), this.pushStack(e)
      }
   });
   var E = /\S+/g,
      F = {};
   m.Callbacks = function (a) {
      a = "string" == typeof a ? F[a] || G(a) : m.extend({}, a);
      var b, c, d, e, f, g, h = [],
         i = !a.once && [],
         j = function (l) {
            for (c = a.memory && l, d = !0, f = g || 0, g = 0, e = h.length, b = !0; h && e > f; f++)
               if (!1 === h[f].apply(l[0], l[1]) && a.stopOnFalse) {
                  c = !1;
                  break
               } b = !1, h && (i ? i.length && j(i.shift()) : c ? h = [] : k.disable())
         },
         k = {
            add: function () {
               if (h) {
                  var d = h.length;
                  ! function b(c) {
                     m.each(c, function (c, d) {
                        var e = m.type(d);
                        "function" === e ? a.unique && k.has(d) || h.push(d) : d && d.length && "string" !== e && b(d)
                     })
                  }(arguments), b ? e = h.length : c && (g = d, j(c))
               }
               return this
            },
            remove: function () {
               return h && m.each(arguments, function (a, c) {
                  for (var d;
                     (d = m.inArray(c, h, d)) > -1;) h.splice(d, 1), b && (e >= d && e--, f >= d && f--)
               }), this
            },
            has: function (a) {
               return a ? m.inArray(a, h) > -1 : !(!h || !h.length)
            },
            empty: function () {
               return h = [], e = 0, this
            },
            disable: function () {
               return h = i = c = void 0, this
            },
            disabled: function () {
               return !h
            },
            lock: function () {
               return i = void 0, c || k.disable(), this
            },
            locked: function () {
               return !i
            },
            fireWith: function (a, c) {
               return !h || d && !i || (c = c || [], c = [a, c.slice ? c.slice() : c], b ? i.push(c) : j(c)), this
            },
            fire: function () {
               return k.fireWith(this, arguments), this
            },
            fired: function () {
               return !!d
            }
         };
      return k
   }, m.extend({
      Deferred: function (a) {
         var b = [
               ["resolve", "done", m.Callbacks("once memory"), "resolved"],
               ["reject", "fail", m.Callbacks("once memory"), "rejected"],
               ["notify", "progress", m.Callbacks("memory")]
            ],
            c = "pending",
            d = {
               state: function () {
                  return c
               },
               always: function () {
                  return e.done(arguments).fail(arguments), this
               },
               then: function () {
                  var a = arguments;
                  return m.Deferred(function (c) {
                     m.each(b, function (b, f) {
                        var g = m.isFunction(a[b]) && a[b];
                        e[f[1]](function () {
                           var a = g && g.apply(this, arguments);
                           a && m.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments)
                        })
                     }), a = null
                  }).promise()
               },
               promise: function (a) {
                  return null != a ? m.extend(a, d) : d
               }
            },
            e = {};
         return d.pipe = d.then, m.each(b, function (a, f) {
            var g = f[2],
               h = f[3];
            d[f[1]] = g.add, h && g.add(function () {
               c = h
            }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function () {
               return e[f[0] + "With"](this === e ? d : this, arguments), this
            }, e[f[0] + "With"] = g.fireWith
         }), d.promise(e), a && a.call(e, e), e
      },
      when: function (a) {
         var i, j, k, b = 0,
            c = d.call(arguments),
            e = c.length,
            f = 1 !== e || a && m.isFunction(a.promise) ? e : 0,
            g = 1 === f ? a : m.Deferred(),
            h = function (a, b, c) {
               return function (e) {
                  b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
               }
            };
         if (e > 1)
            for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) c[b] && m.isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject).progress(h(b, j, i)) : --f;
         return f || g.resolveWith(k, c), g.promise()
      }
   });
   var H;
   m.fn.ready = function (a) {
      return m.ready.promise().done(a), this
   }, m.extend({
      isReady: !1,
      readyWait: 1,
      holdReady: function (a) {
         a ? m.readyWait++ : m.ready(!0)
      },
      ready: function (a) {
         if (!0 === a ? !--m.readyWait : !m.isReady) {
            if (!y.body) return setTimeout(m.ready);
            m.isReady = !0, !0 !== a && --m.readyWait > 0 || (H.resolveWith(y, [m]), m.fn.triggerHandler && (m(y).triggerHandler("ready"), m(y).off("ready")))
         }
      }
   }), m.ready.promise = function (b) {
      if (!H)
         if (H = m.Deferred(), "complete" === y.readyState) setTimeout(m.ready);
         else if (y.addEventListener) y.addEventListener("DOMContentLoaded", J, !1), a.addEventListener("load", J, !1);
      else {
         y.attachEvent("onreadystatechange", J), a.attachEvent("onload", J);
         var c = !1;
         try {
            c = null == a.frameElement && y.documentElement
         } catch (a) {}
         c && c.doScroll && function a() {
            if (!m.isReady) {
               try {
                  c.doScroll("left")
               } catch (b) {
                  return setTimeout(a, 50)
               }
               I(), m.ready()
            }
         }()
      }
      return H.promise(b)
   };
   var L, K = "undefined";
   for (L in m(k)) break;
   k.ownLast = "0" !== L, k.inlineBlockNeedsLayout = !1, m(function () {
         var a, b, c, d;
         (c = y.getElementsByTagName("body")[0]) && c.style && (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), typeof b.style.zoom !== K && (b.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", k.inlineBlockNeedsLayout = a = 3 === b.offsetWidth, a && (c.style.zoom = 1)), c.removeChild(d))
      }),
      function () {
         var a = y.createElement("div");
         if (null == k.deleteExpando) {
            k.deleteExpando = !0;
            try {
               delete a.test
            } catch (a) {
               k.deleteExpando = !1
            }
         }
         a = null
      }(), m.acceptData = function (a) {
         var b = m.noData[(a.nodeName + " ").toLowerCase()],
            c = +a.nodeType || 1;
         return (1 === c || 9 === c) && (!b || !0 !== b && a.getAttribute("classid") === b)
      };
   var M = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
      N = /([A-Z])/g;
   m.extend({
      cache: {},
      noData: {
         "applet ": !0,
         "embed ": !0,
         "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
      },
      hasData: function (a) {
         return !!(a = a.nodeType ? m.cache[a[m.expando]] : a[m.expando]) && !P(a)
      },
      data: function (a, b, c) {
         return Q(a, b, c)
      },
      removeData: function (a, b) {
         return R(a, b)
      },
      _data: function (a, b, c) {
         return Q(a, b, c, !0)
      },
      _removeData: function (a, b) {
         return R(a, b, !0)
      }
   }), m.fn.extend({
      data: function (a, b) {
         var c, d, e, f = this[0],
            g = f && f.attributes;
         if (void 0 === a) {
            if (this.length && (e = m.data(f), 1 === f.nodeType && !m._data(f, "parsedAttrs"))) {
               for (c = g.length; c--;) g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = m.camelCase(d.slice(5)), O(f, d, e[d])));
               m._data(f, "parsedAttrs", !0)
            }
            return e
         }
         return "object" == typeof a ? this.each(function () {
            m.data(this, a)
         }) : arguments.length > 1 ? this.each(function () {
            m.data(this, a, b)
         }) : f ? O(f, a, m.data(f, a)) : void 0
      },
      removeData: function (a) {
         return this.each(function () {
            m.removeData(this, a)
         })
      }
   }), m.extend({
      queue: function (a, b, c) {
         var d;
         return a ? (b = (b || "fx") + "queue", d = m._data(a, b), c && (!d || m.isArray(c) ? d = m._data(a, b, m.makeArray(c)) : d.push(c)), d || []) : void 0
      },
      dequeue: function (a, b) {
         b = b || "fx";
         var c = m.queue(a, b),
            d = c.length,
            e = c.shift(),
            f = m._queueHooks(a, b),
            g = function () {
               m.dequeue(a, b)
            };
         "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
      },
      _queueHooks: function (a, b) {
         var c = b + "queueHooks";
         return m._data(a, c) || m._data(a, c, {
            empty: m.Callbacks("once memory").add(function () {
               m._removeData(a, b + "queue"), m._removeData(a, c)
            })
         })
      }
   }), m.fn.extend({
      queue: function (a, b) {
         var c = 2;
         return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? m.queue(this[0], a) : void 0 === b ? this : this.each(function () {
            var c = m.queue(this, a, b);
            m._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && m.dequeue(this, a)
         })
      },
      dequeue: function (a) {
         return this.each(function () {
            m.dequeue(this, a)
         })
      },
      clearQueue: function (a) {
         return this.queue(a || "fx", [])
      },
      promise: function (a, b) {
         var c, d = 1,
            e = m.Deferred(),
            f = this,
            g = this.length,
            h = function () {
               --d || e.resolveWith(f, [f])
            };
         for ("string" != typeof a && (b = a, a = void 0), a = a || "fx"; g--;)(c = m._data(f[g], a + "queueHooks")) && c.empty && (d++, c.empty.add(h));
         return h(), e.promise(b)
      }
   });
   var S = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
      T = ["Top", "Right", "Bottom", "Left"],
      U = function (a, b) {
         return a = b || a, "none" === m.css(a, "display") || !m.contains(a.ownerDocument, a)
      },
      V = m.access = function (a, b, c, d, e, f, g) {
         var h = 0,
            i = a.length,
            j = null == c;
         if ("object" === m.type(c)) {
            e = !0;
            for (h in c) m.access(a, b, h, c[h], !0, f, g)
         } else if (void 0 !== d && (e = !0, m.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function (a, b, c) {
               return j.call(m(a), c)
            })), b))
            for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
         return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
      },
      W = /^(?:checkbox|radio)$/i;
   ! function () {
      var a = y.createElement("input"),
         b = y.createElement("div"),
         c = y.createDocumentFragment();
      if (b.innerHTML = " <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", k.leadingWhitespace = 3 === b.firstChild.nodeType, k.tbody = !b.getElementsByTagName("tbody").length, k.htmlSerialize = !!b.getElementsByTagName("link").length, k.html5Clone = "<:nav></:nav>" !== y.createElement("nav").cloneNode(!0).outerHTML, a.type = "checkbox", a.checked = !0, c.appendChild(a), k.appendChecked = a.checked, b.innerHTML = "<textarea>x</textarea>", k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue, c.appendChild(b), b.innerHTML = "<input type='radio' checked='checked' name='t'/>", k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, k.noCloneEvent = !0, b.attachEvent && (b.attachEvent("onclick", function () {
            k.noCloneEvent = !1
         }), b.cloneNode(!0).click()), null == k.deleteExpando) {
         k.deleteExpando = !0;
         try {
            delete b.test
         } catch (a) {
            k.deleteExpando = !1
         }
      }
   }(),
   function () {
      var b, c, d = y.createElement("div");
      for (b in {
            submit: !0,
            change: !0,
            focusin: !0
         }) c = "on" + b, (k[b + "Bubbles"] = c in a) || (d.setAttribute(c, "t"), k[b + "Bubbles"] = !1 === d.attributes[c].expando);
      d = null
   }();
   var X = /^(?:input|select|textarea)$/i,
      Y = /^key/,
      Z = /^(?:mouse|pointer|contextmenu)|click/,
      $ = /^(?:focusinfocus|focusoutblur)$/,
      _ = /^([^.]*)(?:\.(.+)|)$/;
   m.event = {
      global: {},
      add: function (a, b, c, d, e) {
         var f, g, h, i, j, k, l, n, o, p, q, r = m._data(a);
         if (r) {
            for (c.handler && (i = c, c = i.handler, e = i.selector), c.guid || (c.guid = m.guid++), (g = r.events) || (g = r.events = {}), (k = r.handle) || (k = r.handle = function (a) {
                  return typeof m === K || a && m.event.triggered === a.type ? void 0 : m.event.dispatch.apply(k.elem, arguments)
               }, k.elem = a), b = (b || "").match(E) || [""], h = b.length; h--;) f = _.exec(b[h]) || [], o = q = f[1], p = (f[2] || "").split(".").sort(), o && (j = m.event.special[o] || {}, o = (e ? j.delegateType : j.bindType) || o, j = m.event.special[o] || {}, l = m.extend({
               type: o,
               origType: q,
               data: d,
               handler: c,
               guid: c.guid,
               selector: e,
               needsContext: e && m.expr.match.needsContext.test(e),
               namespace: p.join(".")
            }, i), (n = g[o]) || (n = g[o] = [], n.delegateCount = 0, j.setup && !1 !== j.setup.call(a, d, p, k) || (a.addEventListener ? a.addEventListener(o, k, !1) : a.attachEvent && a.attachEvent("on" + o, k))), j.add && (j.add.call(a, l), l.handler.guid || (l.handler.guid = c.guid)), e ? n.splice(n.delegateCount++, 0, l) : n.push(l), m.event.global[o] = !0);
            a = null
         }
      },
      remove: function (a, b, c, d, e) {
         var f, g, h, i, j, k, l, n, o, p, q, r = m.hasData(a) && m._data(a);
         if (r && (k = r.events)) {
            for (b = (b || "").match(E) || [""], j = b.length; j--;)
               if (h = _.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                  for (l = m.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, n = k[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), i = f = n.length; f--;) g = n[f], !e && q !== g.origType || c && c.guid !== g.guid || h && !h.test(g.namespace) || d && d !== g.selector && ("**" !== d || !g.selector) || (n.splice(f, 1), g.selector && n.delegateCount--, l.remove && l.remove.call(a, g));
                  i && !n.length && (l.teardown && !1 !== l.teardown.call(a, p, r.handle) || m.removeEvent(a, o, r.handle), delete k[o])
               } else
                  for (o in k) m.event.remove(a, o + b[j], c, d, !0);
            m.isEmptyObject(k) && (delete r.handle, m._removeData(a, "events"))
         }
      },
      trigger: function (b, c, d, e) {
         var f, g, h, i, k, l, n, o = [d || y],
            p = j.call(b, "type") ? b.type : b,
            q = j.call(b, "namespace") ? b.namespace.split(".") : [];
         if (h = l = d = d || y, 3 !== d.nodeType && 8 !== d.nodeType && !$.test(p + m.event.triggered) && (p.indexOf(".") >= 0 && (q = p.split("."), p = q.shift(), q.sort()), g = p.indexOf(":") < 0 && "on" + p, b = b[m.expando] ? b : new m.Event(p, "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = q.join("."), b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null == c ? [b] : m.makeArray(c, [b]), k = m.event.special[p] || {}, e || !k.trigger || !1 !== k.trigger.apply(d, c))) {
            if (!e && !k.noBubble && !m.isWindow(d)) {
               for (i = k.delegateType || p, $.test(i + p) || (h = h.parentNode); h; h = h.parentNode) o.push(h), l = h;
               l === (d.ownerDocument || y) && o.push(l.defaultView || l.parentWindow || a)
            }
            for (n = 0;
               (h = o[n++]) && !b.isPropagationStopped();) b.type = n > 1 ? i : k.bindType || p, f = (m._data(h, "events") || {})[b.type] && m._data(h, "handle"), f && f.apply(h, c), (f = g && h[g]) && f.apply && m.acceptData(h) && (b.result = f.apply(h, c), !1 === b.result && b.preventDefault());
            if (b.type = p, !e && !b.isDefaultPrevented() && (!k._default || !1 === k._default.apply(o.pop(), c)) && m.acceptData(d) && g && d[p] && !m.isWindow(d)) {
               l = d[g], l && (d[g] = null), m.event.triggered = p;
               try {
                  d[p]()
               } catch (a) {}
               m.event.triggered = void 0, l && (d[g] = l)
            }
            return b.result
         }
      },
      dispatch: function (a) {
         a = m.event.fix(a);
         var b, c, e, f, g, h = [],
            i = d.call(arguments),
            j = (m._data(this, "events") || {})[a.type] || [],
            k = m.event.special[a.type] || {};
         if (i[0] = a, a.delegateTarget = this, !k.preDispatch || !1 !== k.preDispatch.call(this, a)) {
            for (h = m.event.handlers.call(this, a, j), b = 0;
               (f = h[b++]) && !a.isPropagationStopped();)
               for (a.currentTarget = f.elem, g = 0;
                  (e = f.handlers[g++]) && !a.isImmediatePropagationStopped();)(!a.namespace_re || a.namespace_re.test(e.namespace)) && (a.handleObj = e, a.data = e.data, void 0 !== (c = ((m.event.special[e.origType] || {}).handle || e.handler).apply(f.elem, i)) && !1 === (a.result = c) && (a.preventDefault(), a.stopPropagation()));
            return k.postDispatch && k.postDispatch.call(this, a), a.result
         }
      },
      handlers: function (a, b) {
         var c, d, e, f, g = [],
            h = b.delegateCount,
            i = a.target;
         if (h && i.nodeType && (!a.button || "click" !== a.type))
            for (; i != this; i = i.parentNode || this)
               if (1 === i.nodeType && (!0 !== i.disabled || "click" !== a.type)) {
                  for (e = [], f = 0; h > f; f++) d = b[f], c = d.selector + " ", void 0 === e[c] && (e[c] = d.needsContext ? m(c, this).index(i) >= 0 : m.find(c, this, null, [i]).length), e[c] && e.push(d);
                  e.length && g.push({
                     elem: i,
                     handlers: e
                  })
               } return h < b.length && g.push({
            elem: this,
            handlers: b.slice(h)
         }), g
      },
      fix: function (a) {
         if (a[m.expando]) return a;
         var b, c, d, e = a.type,
            f = a,
            g = this.fixHooks[e];
         for (g || (this.fixHooks[e] = g = Z.test(e) ? this.mouseHooks : Y.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new m.Event(f), b = d.length; b--;) c = d[b], a[c] = f[c];
         return a.target || (a.target = f.srcElement || y), 3 === a.target.nodeType && (a.target = a.target.parentNode), a.metaKey = !!a.metaKey, g.filter ? g.filter(a, f) : a
      },
      props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
      fixHooks: {},
      keyHooks: {
         props: "char charCode key keyCode".split(" "),
         filter: function (a, b) {
            return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
         }
      },
      mouseHooks: {
         props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
         filter: function (a, b) {
            var c, d, e, f = b.button,
               g = b.fromElement;
            return null == a.pageX && null != b.clientX && (d = a.target.ownerDocument || y, e = d.documentElement, c = d.body, a.pageX = b.clientX + (e && e.scrollLeft || c && c.scrollLeft || 0) - (e && e.clientLeft || c && c.clientLeft || 0), a.pageY = b.clientY + (e && e.scrollTop || c && c.scrollTop || 0) - (e && e.clientTop || c && c.clientTop || 0)), !a.relatedTarget && g && (a.relatedTarget = g === a.target ? b.toElement : g), a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), a
         }
      },
      special: {
         load: {
            noBubble: !0
         },
         focus: {
            trigger: function () {
               if (this !== ca() && this.focus) try {
                  return this.focus(), !1
               } catch (a) {}
            },
            delegateType: "focusin"
         },
         blur: {
            trigger: function () {
               return this === ca() && this.blur ? (this.blur(), !1) : void 0
            },
            delegateType: "focusout"
         },
         click: {
            trigger: function () {
               return m.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0
            },
            _default: function (a) {
               return m.nodeName(a.target, "a")
            }
         },
         beforeunload: {
            postDispatch: function (a) {
               void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
            }
         }
      },
      simulate: function (a, b, c, d) {
         var e = m.extend(new m.Event, c, {
            type: a,
            isSimulated: !0,
            originalEvent: {}
         });
         d ? m.event.trigger(e, null, b) : m.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
      }
   }, m.removeEvent = y.removeEventListener ? function (a, b, c) {
      a.removeEventListener && a.removeEventListener(b, c, !1)
   } : function (a, b, c) {
      var d = "on" + b;
      a.detachEvent && (typeof a[d] === K && (a[d] = null), a.detachEvent(d, c))
   }, m.Event = function (a, b) {
      return this instanceof m.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && !1 === a.returnValue ? aa : ba) : this.type = a, b && m.extend(this, b), this.timeStamp = a && a.timeStamp || m.now(), void(this[m.expando] = !0)) : new m.Event(a, b)
   }, m.Event.prototype = {
      isDefaultPrevented: ba,
      isPropagationStopped: ba,
      isImmediatePropagationStopped: ba,
      preventDefault: function () {
         var a = this.originalEvent;
         this.isDefaultPrevented = aa, a && (a.preventDefault ? a.preventDefault() : a.returnValue = !1)
      },
      stopPropagation: function () {
         var a = this.originalEvent;
         this.isPropagationStopped = aa, a && (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0)
      },
      stopImmediatePropagation: function () {
         var a = this.originalEvent;
         this.isImmediatePropagationStopped = aa, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation()
      }
   }, m.each({
      mouseenter: "mouseover",
      mouseleave: "mouseout",
      pointerenter: "pointerover",
      pointerleave: "pointerout"
   }, function (a, b) {
      m.event.special[a] = {
         delegateType: b,
         bindType: b,
         handle: function (a) {
            var c, d = this,
               e = a.relatedTarget,
               f = a.handleObj;
            return (!e || e !== d && !m.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
         }
      }
   }), k.submitBubbles || (m.event.special.submit = {
      setup: function () {
         return !m.nodeName(this, "form") && void m.event.add(this, "click._submit keypress._submit", function (a) {
            var b = a.target,
               c = m.nodeName(b, "input") || m.nodeName(b, "button") ? b.form : void 0;
            c && !m._data(c, "submitBubbles") && (m.event.add(c, "submit._submit", function (a) {
               a._submit_bubble = !0
            }), m._data(c, "submitBubbles", !0))
         })
      },
      postDispatch: function (a) {
         a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && m.event.simulate("submit", this.parentNode, a, !0))
      },
      teardown: function () {
         return !m.nodeName(this, "form") && void m.event.remove(this, "._submit")
      }
   }), k.changeBubbles || (m.event.special.change = {
      setup: function () {
         return X.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (m.event.add(this, "propertychange._change", function (a) {
            "checked" === a.originalEvent.propertyName && (this._just_changed = !0)
         }), m.event.add(this, "click._change", function (a) {
            this._just_changed && !a.isTrigger && (this._just_changed = !1), m.event.simulate("change", this, a, !0)
         })), !1) : void m.event.add(this, "beforeactivate._change", function (a) {
            var b = a.target;
            X.test(b.nodeName) && !m._data(b, "changeBubbles") && (m.event.add(b, "change._change", function (a) {
               !this.parentNode || a.isSimulated || a.isTrigger || m.event.simulate("change", this.parentNode, a, !0)
            }), m._data(b, "changeBubbles", !0))
         })
      },
      handle: function (a) {
         var b = a.target;
         return this !== b || a.isSimulated || a.isTrigger || "radio" !== b.type && "checkbox" !== b.type ? a.handleObj.handler.apply(this, arguments) : void 0
      },
      teardown: function () {
         return m.event.remove(this, "._change"), !X.test(this.nodeName)
      }
   }), k.focusinBubbles || m.each({
      focus: "focusin",
      blur: "focusout"
   }, function (a, b) {
      var c = function (a) {
         m.event.simulate(b, a.target, m.event.fix(a), !0)
      };
      m.event.special[b] = {
         setup: function () {
            var d = this.ownerDocument || this,
               e = m._data(d, b);
            e || d.addEventListener(a, c, !0), m._data(d, b, (e || 0) + 1)
         },
         teardown: function () {
            var d = this.ownerDocument || this,
               e = m._data(d, b) - 1;
            e ? m._data(d, b, e) : (d.removeEventListener(a, c, !0), m._removeData(d, b))
         }
      }
   }), m.fn.extend({
      on: function (a, b, c, d, e) {
         var f, g;
         if ("object" == typeof a) {
            "string" != typeof b && (c = c || b, b = void 0);
            for (f in a) this.on(f, b, c, a[f], e);
            return this
         }
         if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" == typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), !1 === d) d = ba;
         else if (!d) return this;
         return 1 === e && (g = d, d = function (a) {
            return m().off(a), g.apply(this, arguments)
         }, d.guid = g.guid || (g.guid = m.guid++)), this.each(function () {
            m.event.add(this, a, d, c, b)
         })
      },
      one: function (a, b, c, d) {
         return this.on(a, b, c, d, 1)
      },
      off: function (a, b, c) {
         var d, e;
         if (a && a.preventDefault && a.handleObj) return d = a.handleObj, m(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
         if ("object" == typeof a) {
            for (e in a) this.off(e, b, a[e]);
            return this
         }
         return (!1 === b || "function" == typeof b) && (c = b, b = void 0), !1 === c && (c = ba), this.each(function () {
            m.event.remove(this, a, c, b)
         })
      },
      trigger: function (a, b) {
         return this.each(function () {
            m.event.trigger(a, b, this)
         })
      },
      triggerHandler: function (a, b) {
         var c = this[0];
         return c ? m.event.trigger(a, b, c, !0) : void 0
      }
   });
   var ea = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
      fa = / jQuery\d+="(?:null|\d+)"/g,
      ga = new RegExp("<(?:" + ea + ")[\\s/>]", "i"),
      ha = /^\s+/,
      ia = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
      ja = /<([\w:]+)/,
      ka = /<tbody/i,
      la = /<|&#?\w+;/,
      ma = /<(?:script|style|link)/i,
      na = /checked\s*(?:[^=]|=\s*.checked.)/i,
      oa = /^$|\/(?:java|ecma)script/i,
      pa = /^true\/(.*)/,
      qa = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
      ra = {
         option: [1, "<select multiple='multiple'>", "</select>"],
         legend: [1, "<fieldset>", "</fieldset>"],
         area: [1, "<map>", "</map>"],
         param: [1, "<object>", "</object>"],
         thead: [1, "<table>", "</table>"],
         tr: [2, "<table><tbody>", "</tbody></table>"],
         col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
         td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
         _default: k.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
      },
      sa = da(y),
      ta = sa.appendChild(y.createElement("div"));
   ra.optgroup = ra.option, ra.tbody = ra.tfoot = ra.colgroup = ra.caption = ra.thead, ra.th = ra.td, m.extend({
      clone: function (a, b, c) {
         var d, e, f, g, h, i = m.contains(a.ownerDocument, a);
         if (k.html5Clone || m.isXMLDoc(a) || !ga.test("<" + a.nodeName + ">") ? f = a.cloneNode(!0) : (ta.innerHTML = a.outerHTML, ta.removeChild(f = ta.firstChild)), !(k.noCloneEvent && k.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || m.isXMLDoc(a)))
            for (d = ua(f), h = ua(a), g = 0; null != (e = h[g]); ++g) d[g] && Ba(e, d[g]);
         if (b)
            if (c)
               for (h = h || ua(a), d = d || ua(f), g = 0; null != (e = h[g]); g++) Aa(e, d[g]);
            else Aa(a, f);
         return d = ua(f, "script"), d.length > 0 && za(d, !i && ua(a, "script")), d = h = e = null, f
      },
      buildFragment: function (a, b, c, d) {
         for (var e, f, g, h, i, j, l, n = a.length, o = da(b), p = [], q = 0; n > q; q++)
            if ((f = a[q]) || 0 === f)
               if ("object" === m.type(f)) m.merge(p, f.nodeType ? [f] : f);
               else if (la.test(f)) {
            for (h = h || o.appendChild(b.createElement("div")), i = (ja.exec(f) || ["", ""])[1].toLowerCase(), l = ra[i] || ra._default, h.innerHTML = l[1] + f.replace(ia, "<$1></$2>") + l[2], e = l[0]; e--;) h = h.lastChild;
            if (!k.leadingWhitespace && ha.test(f) && p.push(b.createTextNode(ha.exec(f)[0])), !k.tbody)
               for (f = "table" !== i || ka.test(f) ? "<table>" !== l[1] || ka.test(f) ? 0 : h : h.firstChild, e = f && f.childNodes.length; e--;) m.nodeName(j = f.childNodes[e], "tbody") && !j.childNodes.length && f.removeChild(j);
            for (m.merge(p, h.childNodes), h.textContent = ""; h.firstChild;) h.removeChild(h.firstChild);
            h = o.lastChild
         } else p.push(b.createTextNode(f));
         for (h && o.removeChild(h), k.appendChecked || m.grep(ua(p, "input"), va), q = 0; f = p[q++];)
            if ((!d || -1 === m.inArray(f, d)) && (g = m.contains(f.ownerDocument, f), h = ua(o.appendChild(f), "script"), g && za(h), c))
               for (e = 0; f = h[e++];) oa.test(f.type || "") && c.push(f);
         return h = null, o
      },
      cleanData: function (a, b) {
         for (var d, e, f, g, h = 0, i = m.expando, j = m.cache, l = k.deleteExpando, n = m.event.special; null != (d = a[h]); h++)
            if ((b || m.acceptData(d)) && (f = d[i], g = f && j[f])) {
               if (g.events)
                  for (e in g.events) n[e] ? m.event.remove(d, e) : m.removeEvent(d, e, g.handle);
               j[f] && (delete j[f], l ? delete d[i] : typeof d.removeAttribute !== K ? d.removeAttribute(i) : d[i] = null, c.push(f))
            }
      }
   }), m.fn.extend({
      text: function (a) {
         return V(this, function (a) {
            return void 0 === a ? m.text(this) : this.empty().append((this[0] && this[0].ownerDocument || y).createTextNode(a))
         }, null, a, arguments.length)
      },
      append: function () {
         return this.domManip(arguments, function (a) {
            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
               wa(this, a).appendChild(a)
            }
         })
      },
      prepend: function () {
         return this.domManip(arguments, function (a) {
            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
               var b = wa(this, a);
               b.insertBefore(a, b.firstChild)
            }
         })
      },
      before: function () {
         return this.domManip(arguments, function (a) {
            this.parentNode && this.parentNode.insertBefore(a, this)
         })
      },
      after: function () {
         return this.domManip(arguments, function (a) {
            this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
         })
      },
      remove: function (a, b) {
         for (var c, d = a ? m.filter(a, this) : this, e = 0; null != (c = d[e]); e++) b || 1 !== c.nodeType || m.cleanData(ua(c)), c.parentNode && (b && m.contains(c.ownerDocument, c) && za(ua(c, "script")), c.parentNode.removeChild(c));
         return this
      },
      empty: function () {
         for (var a, b = 0; null != (a = this[b]); b++) {
            for (1 === a.nodeType && m.cleanData(ua(a, !1)); a.firstChild;) a.removeChild(a.firstChild);
            a.options && m.nodeName(a, "select") && (a.options.length = 0)
         }
         return this
      },
      clone: function (a, b) {
         return a = null != a && a, b = null == b ? a : b, this.map(function () {
            return m.clone(this, a, b)
         })
      },
      html: function (a) {
         return V(this, function (a) {
            var b = this[0] || {},
               c = 0,
               d = this.length;
            if (void 0 === a) return 1 === b.nodeType ? b.innerHTML.replace(fa, "") : void 0;
            if (!("string" != typeof a || ma.test(a) || !k.htmlSerialize && ga.test(a) || !k.leadingWhitespace && ha.test(a) || ra[(ja.exec(a) || ["", ""])[1].toLowerCase()])) {
               a = a.replace(ia, "<$1></$2>");
               try {
                  for (; d > c; c++) b = this[c] || {}, 1 === b.nodeType && (m.cleanData(ua(b, !1)), b.innerHTML = a);
                  b = 0
               } catch (a) {}
            }
            b && this.empty().append(a)
         }, null, a, arguments.length)
      },
      replaceWith: function () {
         var a = arguments[0];
         return this.domManip(arguments, function (b) {
            a = this.parentNode, m.cleanData(ua(this)), a && a.replaceChild(b, this)
         }), a && (a.length || a.nodeType) ? this : this.remove()
      },
      detach: function (a) {
         return this.remove(a, !0)
      },
      domManip: function (a, b) {
         a = e.apply([], a);
         var c, d, f, g, h, i, j = 0,
            l = this.length,
            n = this,
            o = l - 1,
            p = a[0],
            q = m.isFunction(p);
         if (q || l > 1 && "string" == typeof p && !k.checkClone && na.test(p)) return this.each(function (c) {
            var d = n.eq(c);
            q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
         });
         if (l && (i = m.buildFragment(a, this[0].ownerDocument, !1, this), c = i.firstChild, 1 === i.childNodes.length && (i = c), c)) {
            for (g = m.map(ua(i, "script"), xa), f = g.length; l > j; j++) d = i, j !== o && (d = m.clone(d, !0, !0), f && m.merge(g, ua(d, "script"))), b.call(this[j], d, j);
            if (f)
               for (h = g[g.length - 1].ownerDocument, m.map(g, ya), j = 0; f > j; j++) d = g[j], oa.test(d.type || "") && !m._data(d, "globalEval") && m.contains(h, d) && (d.src ? m._evalUrl && m._evalUrl(d.src) : m.globalEval((d.text || d.textContent || d.innerHTML || "").replace(qa, "")));
            i = c = null
         }
         return this
      }
   }), m.each({
      appendTo: "append",
      prependTo: "prepend",
      insertBefore: "before",
      insertAfter: "after",
      replaceAll: "replaceWith"
   }, function (a, b) {
      m.fn[a] = function (a) {
         for (var c, d = 0, e = [], g = m(a), h = g.length - 1; h >= d; d++) c = d === h ? this : this.clone(!0), m(g[d])[b](c), f.apply(e, c.get());
         return this.pushStack(e)
      }
   });
   var Ca, Da = {};
   ! function () {
      var a;
      k.shrinkWrapBlocks = function () {
         if (null != a) return a;
         a = !1;
         var b, c, d;
         return c = y.getElementsByTagName("body")[0], c && c.style ? (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), typeof b.style.zoom !== K && (b.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", b.appendChild(y.createElement("div")).style.width = "5px", a = 3 !== b.offsetWidth), c.removeChild(d), a) : void 0
      }
   }();
   var Ia, Ja, Ga = /^margin/,
      Ha = new RegExp("^(" + S + ")(?!px)[a-z%]+$", "i"),
      Ka = /^(top|right|bottom|left)$/;
   a.getComputedStyle ? (Ia = function (a) {
      return a.ownerDocument.defaultView.getComputedStyle(a, null)
   }, Ja = function (a, b, c) {
      var d, e, f, g, h = a.style;
      return c = c || Ia(a), g = c ? c.getPropertyValue(b) || c[b] : void 0, c && ("" !== g || m.contains(a.ownerDocument, a) || (g = m.style(a, b)), Ha.test(g) && Ga.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 === g ? g : g + ""
   }) : y.documentElement.currentStyle && (Ia = function (a) {
      return a.currentStyle
   }, Ja = function (a, b, c) {
      var d, e, f, g, h = a.style;
      return c = c || Ia(a), g = c ? c[b] : void 0, null == g && h && h[b] && (g = h[b]), Ha.test(g) && !Ka.test(b) && (d = h.left, e = a.runtimeStyle, f = e && e.left, f && (e.left = a.currentStyle.left), h.left = "fontSize" === b ? "1em" : g, g = h.pixelLeft + "px", h.left = d, f && (e.left = f)), void 0 === g ? g : g + "" || "auto"
   }), ! function () {
      function i() {
         var b, c, d, i;
         (c = y.getElementsByTagName("body")[0]) && c.style && (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), b.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", e = f = !1, h = !0, a.getComputedStyle && (e = "1%" !== (a.getComputedStyle(b, null) || {}).top, f = "4px" === (a.getComputedStyle(b, null) || {
            width: "4px"
         }).width, i = b.appendChild(y.createElement("div")), i.style.cssText = b.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", b.style.width = "1px", h = !parseFloat((a.getComputedStyle(i, null) || {}).marginRight)), b.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", i = b.getElementsByTagName("td"), i[0].style.cssText = "margin:0;border:0;padding:0;display:none", g = 0 === i[0].offsetHeight, g && (i[0].style.display = "", i[1].style.display = "none", g = 0 === i[0].offsetHeight), c.removeChild(d))
      }
      var b, c, d, e, f, g, h;
      b = y.createElement("div"), b.innerHTML = " <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", d = b.getElementsByTagName("a")[0], (c = d && d.style) && (c.cssText = "float:left;opacity:.5", k.opacity = "0.5" === c.opacity, k.cssFloat = !!c.cssFloat, b.style.backgroundClip = "content-box", b.cloneNode(!0).style.backgroundClip = "", k.clearCloneStyle = "content-box" === b.style.backgroundClip, k.boxSizing = "" === c.boxSizing || "" === c.MozBoxSizing || "" === c.WebkitBoxSizing, m.extend(k, {
         reliableHiddenOffsets: function () {
            return null == g && i(), g
         },
         boxSizingReliable: function () {
            return null == f && i(), f
         },
         pixelPosition: function () {
            return null == e && i(), e
         },
         reliableMarginRight: function () {
            return null == h && i(), h
         }
      }))
   }(), m.swap = function (a, b, c, d) {
      var e, f, g = {};
      for (f in b) g[f] = a.style[f], a.style[f] = b[f];
      e = c.apply(a, d || []);
      for (f in b) a.style[f] = g[f];
      return e
   };
   var Ma = /alpha\([^)]*\)/i,
      Na = /opacity\s*=\s*([^)]*)/,
      Oa = /^(none|table(?!-c[ea]).+)/,
      Pa = new RegExp("^(" + S + ")(.*)$", "i"),
      Qa = new RegExp("^([+-])=(" + S + ")", "i"),
      Ra = {
         position: "absolute",
         visibility: "hidden",
         display: "block"
      },
      Sa = {
         letterSpacing: "0",
         fontWeight: "400"
      },
      Ta = ["Webkit", "O", "Moz", "ms"];
   m.extend({
      cssHooks: {
         opacity: {
            get: function (a, b) {
               if (b) {
                  var c = Ja(a, "opacity");
                  return "" === c ? "1" : c
               }
            }
         }
      },
      cssNumber: {
         columnCount: !0,
         fillOpacity: !0,
         flexGrow: !0,
         flexShrink: !0,
         fontWeight: !0,
         lineHeight: !0,
         opacity: !0,
         order: !0,
         orphans: !0,
         widows: !0,
         zIndex: !0,
         zoom: !0
      },
      cssProps: {
         float: k.cssFloat ? "cssFloat" : "styleFloat"
      },
      style: function (a, b, c, d) {
         if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
            var e, f, g, h = m.camelCase(b),
               i = a.style;
            if (b = m.cssProps[h] || (m.cssProps[h] = Ua(i, h)), g = m.cssHooks[b] || m.cssHooks[h], void 0 === c) return g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b];
            if (f = typeof c, "string" === f && (e = Qa.exec(c)) && (c = (e[1] + 1) * e[2] + parseFloat(m.css(a, b)), f = "number"), null != c && c === c && ("number" !== f || m.cssNumber[h] || (c += "px"), k.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), !(g && "set" in g && void 0 === (c = g.set(a, c, d))))) try {
               i[b] = c
            } catch (a) {}
         }
      },
      css: function (a, b, c, d) {
         var e, f, g, h = m.camelCase(b);
         return b = m.cssProps[h] || (m.cssProps[h] = Ua(a.style, h)), g = m.cssHooks[b] || m.cssHooks[h], g && "get" in g && (f = g.get(a, !0, c)), void 0 === f && (f = Ja(a, b, d)), "normal" === f && b in Sa && (f = Sa[b]), "" === c || c ? (e = parseFloat(f), !0 === c || m.isNumeric(e) ? e || 0 : f) : f
      }
   }), m.each(["height", "width"], function (a, b) {
      m.cssHooks[b] = {
         get: function (a, c, d) {
            return c ? Oa.test(m.css(a, "display")) && 0 === a.offsetWidth ? m.swap(a, Ra, function () {
               return Ya(a, b, d)
            }) : Ya(a, b, d) : void 0
         },
         set: function (a, c, d) {
            var e = d && Ia(a);
            return Wa(a, c, d ? Xa(a, b, d, k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, e), e) : 0)
         }
      }
   }), k.opacity || (m.cssHooks.opacity = {
      get: function (a, b) {
         return Na.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : b ? "1" : ""
      },
      set: function (a, b) {
         var c = a.style,
            d = a.currentStyle,
            e = m.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
            f = d && d.filter || c.filter || "";
         c.zoom = 1, (b >= 1 || "" === b) && "" === m.trim(f.replace(Ma, "")) && c.removeAttribute && (c.removeAttribute("filter"), "" === b || d && !d.filter) || (c.filter = Ma.test(f) ? f.replace(Ma, e) : f + " " + e)
      }
   }), m.cssHooks.marginRight = La(k.reliableMarginRight, function (a, b) {
      return b ? m.swap(a, {
         display: "inline-block"
      }, Ja, [a, "marginRight"]) : void 0
   }), m.each({
      margin: "",
      padding: "",
      border: "Width"
   }, function (a, b) {
      m.cssHooks[a + b] = {
         expand: function (c) {
            for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) e[a + T[d] + b] = f[d] || f[d - 2] || f[0];
            return e
         }
      }, Ga.test(a) || (m.cssHooks[a + b].set = Wa)
   }), m.fn.extend({
      css: function (a, b) {
         return V(this, function (a, b, c) {
            var d, e, f = {},
               g = 0;
            if (m.isArray(b)) {
               for (d = Ia(a), e = b.length; e > g; g++) f[b[g]] = m.css(a, b[g], !1, d);
               return f
            }
            return void 0 !== c ? m.style(a, b, c) : m.css(a, b)
         }, a, b, arguments.length > 1)
      },
      show: function () {
         return Va(this, !0)
      },
      hide: function () {
         return Va(this)
      },
      toggle: function (a) {
         return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
            U(this) ? m(this).show() : m(this).hide()
         })
      }
   }), m.Tween = Za, Za.prototype = {
      constructor: Za,
      init: function (a, b, c, d, e, f) {
         this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (m.cssNumber[c] ? "" : "px")
      },
      cur: function () {
         var a = Za.propHooks[this.prop];
         return a && a.get ? a.get(this) : Za.propHooks._default.get(this)
      },
      run: function (a) {
         var b, c = Za.propHooks[this.prop];
         return this.pos = b = this.options.duration ? m.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Za.propHooks._default.set(this), this
      }
   }, Za.prototype.init.prototype = Za.prototype, Za.propHooks = {
      _default: {
         get: function (a) {
            var b;
            return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = m.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
         },
         set: function (a) {
            m.fx.step[a.prop] ? m.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[m.cssProps[a.prop]] || m.cssHooks[a.prop]) ? m.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
         }
      }
   }, Za.propHooks.scrollTop = Za.propHooks.scrollLeft = {
      set: function (a) {
         a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
      }
   }, m.easing = {
      linear: function (a) {
         return a
      },
      swing: function (a) {
         return .5 - Math.cos(a * Math.PI) / 2
      }
   }, m.fx = Za.prototype.init, m.fx.step = {};
   var $a, _a, ab = /^(?:toggle|show|hide)$/,
      bb = new RegExp("^(?:([+-])=|)(" + S + ")([a-z%]*)$", "i"),
      cb = /queueHooks$/,
      db = [ib],
      eb = {
         "*": [function (a, b) {
            var c = this.createTween(a, b),
               d = c.cur(),
               e = bb.exec(b),
               f = e && e[3] || (m.cssNumber[a] ? "" : "px"),
               g = (m.cssNumber[a] || "px" !== f && +d) && bb.exec(m.css(c.elem, a)),
               h = 1,
               i = 20;
            if (g && g[3] !== f) {
               f = f || g[3], e = e || [], g = +d || 1;
               do {
                  h = h || ".5", g /= h, m.style(c.elem, a, g + f)
               } while (h !== (h = c.cur() / d) && 1 !== h && --i)
            }
            return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
         }]
      };
   m.Animation = m.extend(kb, {
         tweener: function (a, b) {
            m.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
            for (var c, d = 0, e = a.length; e > d; d++) c = a[d], eb[c] = eb[c] || [], eb[c].unshift(b)
         },
         prefilter: function (a, b) {
            b ? db.unshift(a) : db.push(a)
         }
      }), m.speed = function (a, b, c) {
         var d = a && "object" == typeof a ? m.extend({}, a) : {
            complete: c || !c && b || m.isFunction(a) && a,
            duration: a,
            easing: c && b || b && !m.isFunction(b) && b
         };
         return d.duration = m.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in m.fx.speeds ? m.fx.speeds[d.duration] : m.fx.speeds._default, (null == d.queue || !0 === d.queue) && (d.queue = "fx"), d.old = d.complete, d.complete = function () {
            m.isFunction(d.old) && d.old.call(this), d.queue && m.dequeue(this, d.queue)
         }, d
      }, m.fn.extend({
         fadeTo: function (a, b, c, d) {
            return this.filter(U).css("opacity", 0).show().end().animate({
               opacity: b
            }, a, c, d)
         },
         animate: function (a, b, c, d) {
            var e = m.isEmptyObject(a),
               f = m.speed(b, c, d),
               g = function () {
                  var b = kb(this, m.extend({}, a), f);
                  (e || m._data(this, "finish")) && b.stop(!0)
               };
            return g.finish = g, e || !1 === f.queue ? this.each(g) : this.queue(f.queue, g)
         },
         stop: function (a, b, c) {
            var d = function (a) {
               var b = a.stop;
               delete a.stop, b(c)
            };
            return "string" != typeof a && (c = b, b = a, a = void 0), b && !1 !== a && this.queue(a || "fx", []), this.each(function () {
               var b = !0,
                  e = null != a && a + "queueHooks",
                  f = m.timers,
                  g = m._data(this);
               if (e) g[e] && g[e].stop && d(g[e]);
               else
                  for (e in g) g[e] && g[e].stop && cb.test(e) && d(g[e]);
               for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
               (b || !c) && m.dequeue(this, a)
            })
         },
         finish: function (a) {
            return !1 !== a && (a = a || "fx"), this.each(function () {
               var b, c = m._data(this),
                  d = c[a + "queue"],
                  e = c[a + "queueHooks"],
                  f = m.timers,
                  g = d ? d.length : 0;
               for (c.finish = !0, m.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
               for (b = 0; g > b; b++) d[b] && d[b].finish && d[b].finish.call(this);
               delete c.finish
            })
         }
      }), m.each(["toggle", "show", "hide"], function (a, b) {
         var c = m.fn[b];
         m.fn[b] = function (a, d, e) {
            return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(gb(b, !0), a, d, e)
         }
      }), m.each({
         slideDown: gb("show"),
         slideUp: gb("hide"),
         slideToggle: gb("toggle"),
         fadeIn: {
            opacity: "show"
         },
         fadeOut: {
            opacity: "hide"
         },
         fadeToggle: {
            opacity: "toggle"
         }
      }, function (a, b) {
         m.fn[a] = function (a, c, d) {
            return this.animate(b, a, c, d)
         }
      }), m.timers = [], m.fx.tick = function () {
         var a, b = m.timers,
            c = 0;
         for ($a = m.now(); c < b.length; c++)(a = b[c])() || b[c] !== a || b.splice(c--, 1);
         b.length || m.fx.stop(), $a = void 0
      }, m.fx.timer = function (a) {
         m.timers.push(a), a() ? m.fx.start() : m.timers.pop()
      }, m.fx.interval = 13, m.fx.start = function () {
         _a || (_a = setInterval(m.fx.tick, m.fx.interval))
      }, m.fx.stop = function () {
         clearInterval(_a), _a = null
      }, m.fx.speeds = {
         slow: 600,
         fast: 200,
         _default: 400
      }, m.fn.delay = function (a, b) {
         return a = m.fx ? m.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function (b, c) {
            var d = setTimeout(b, a);
            c.stop = function () {
               clearTimeout(d)
            }
         })
      },
      function () {
         var a, b, c, d, e;
         b = y.createElement("div"), b.setAttribute("className", "t"), b.innerHTML = " <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", d = b.getElementsByTagName("a")[0], c = y.createElement("select"), e = c.appendChild(y.createElement("option")), a = b.getElementsByTagName("input")[0], d.style.cssText = "top:1px", k.getSetAttribute = "t" !== b.className, k.style = /top/.test(d.getAttribute("style")), k.hrefNormalized = "/a" === d.getAttribute("href"), k.checkOn = !!a.value, k.optSelected = e.selected, k.enctype = !!y.createElement("form").enctype, c.disabled = !0, k.optDisabled = !e.disabled, a = y.createElement("input"), a.setAttribute("value", ""), k.input = "" === a.getAttribute("value"), a.value = "t", a.setAttribute("type", "radio"), k.radioValue = "t" === a.value
      }();
   var lb = /\r/g;
   m.fn.extend({
      val: function (a) {
         var b, c, d, e = this[0];
         return arguments.length ? (d = m.isFunction(a), this.each(function (c) {
            var e;
            1 === this.nodeType && (e = d ? a.call(this, c, m(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : m.isArray(e) && (e = m.map(e, function (a) {
               return null == a ? "" : a + ""
            })), (b = m.valHooks[this.type] || m.valHooks[this.nodeName.toLowerCase()]) && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
         })) : e ? (b = m.valHooks[e.type] || m.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(lb, "") : null == c ? "" : c)) : void 0
      }
   }), m.extend({
      valHooks: {
         option: {
            get: function (a) {
               var b = m.find.attr(a, "value");
               return null != b ? b : m.trim(m.text(a))
            }
         },
         select: {
            get: function (a) {
               for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++)
                  if (c = d[i], !(!c.selected && i !== e || (k.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && m.nodeName(c.parentNode, "optgroup"))) {
                     if (b = m(c).val(), f) return b;
                     g.push(b)
                  } return g
            },
            set: function (a, b) {
               for (var c, d, e = a.options, f = m.makeArray(b), g = e.length; g--;)
                  if (d = e[g], m.inArray(m.valHooks.option.get(d), f) >= 0) try {
                     d.selected = c = !0
                  } catch (a) {
                     d.scrollHeight
                  } else d.selected = !1;
               return c || (a.selectedIndex = -1), e
            }
         }
      }
   }), m.each(["radio", "checkbox"], function () {
      m.valHooks[this] = {
         set: function (a, b) {
            return m.isArray(b) ? a.checked = m.inArray(m(a).val(), b) >= 0 : void 0
         }
      }, k.checkOn || (m.valHooks[this].get = function (a) {
         return null === a.getAttribute("value") ? "on" : a.value
      })
   });
   var mb, nb, ob = m.expr.attrHandle,
      pb = /^(?:checked|selected)$/i,
      qb = k.getSetAttribute,
      rb = k.input;
   m.fn.extend({
      attr: function (a, b) {
         return V(this, m.attr, a, b, arguments.length > 1)
      },
      removeAttr: function (a) {
         return this.each(function () {
            m.removeAttr(this, a)
         })
      }
   }), m.extend({
      attr: function (a, b, c) {
         var d, e, f = a.nodeType;
         if (a && 3 !== f && 8 !== f && 2 !== f) return typeof a.getAttribute === K ? m.prop(a, b, c) : (1 === f && m.isXMLDoc(a) || (b = b.toLowerCase(), d = m.attrHooks[b] || (m.expr.match.bool.test(b) ? nb : mb)), void 0 === c ? d && "get" in d && null !== (e = d.get(a, b)) ? e : (e = m.find.attr(a, b), null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void m.removeAttr(a, b))
      },
      removeAttr: function (a, b) {
         var c, d, e = 0,
            f = b && b.match(E);
         if (f && 1 === a.nodeType)
            for (; c = f[e++];) d = m.propFix[c] || c, m.expr.match.bool.test(c) ? rb && qb || !pb.test(c) ? a[d] = !1 : a[m.camelCase("default-" + c)] = a[d] = !1 : m.attr(a, c, ""), a.removeAttribute(qb ? c : d)
      },
      attrHooks: {
         type: {
            set: function (a, b) {
               if (!k.radioValue && "radio" === b && m.nodeName(a, "input")) {
                  var c = a.value;
                  return a.setAttribute("type", b), c && (a.value = c), b
               }
            }
         }
      }
   }), nb = {
      set: function (a, b, c) {
         return !1 === b ? m.removeAttr(a, c) : rb && qb || !pb.test(c) ? a.setAttribute(!qb && m.propFix[c] || c, c) : a[m.camelCase("default-" + c)] = a[c] = !0, c
      }
   }, m.each(m.expr.match.bool.source.match(/\w+/g), function (a, b) {
      var c = ob[b] || m.find.attr;
      ob[b] = rb && qb || !pb.test(b) ? function (a, b, d) {
         var e, f;
         return d || (f = ob[b], ob[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, ob[b] = f), e
      } : function (a, b, c) {
         return c ? void 0 : a[m.camelCase("default-" + b)] ? b.toLowerCase() : null
      }
   }), rb && qb || (m.attrHooks.value = {
      set: function (a, b, c) {
         return m.nodeName(a, "input") ? void(a.defaultValue = b) : mb && mb.set(a, b, c)
      }
   }), qb || (mb = {
      set: function (a, b, c) {
         var d = a.getAttributeNode(c);
         return d || a.setAttributeNode(d = a.ownerDocument.createAttribute(c)), d.value = b += "", "value" === c || b === a.getAttribute(c) ? b : void 0
      }
   }, ob.id = ob.name = ob.coords = function (a, b, c) {
      var d;
      return c ? void 0 : (d = a.getAttributeNode(b)) && "" !== d.value ? d.value : null
   }, m.valHooks.button = {
      get: function (a, b) {
         var c = a.getAttributeNode(b);
         return c && c.specified ? c.value : void 0
      },
      set: mb.set
   }, m.attrHooks.contenteditable = {
      set: function (a, b, c) {
         mb.set(a, "" !== b && b, c)
      }
   }, m.each(["width", "height"], function (a, b) {
      m.attrHooks[b] = {
         set: function (a, c) {
            return "" === c ? (a.setAttribute(b, "auto"), c) : void 0
         }
      }
   })), k.style || (m.attrHooks.style = {
      get: function (a) {
         return a.style.cssText || void 0
      },
      set: function (a, b) {
         return a.style.cssText = b + ""
      }
   });
   var sb = /^(?:input|select|textarea|button|object)$/i,
      tb = /^(?:a|area)$/i;
   m.fn.extend({
      prop: function (a, b) {
         return V(this, m.prop, a, b, arguments.length > 1)
      },
      removeProp: function (a) {
         return a = m.propFix[a] || a, this.each(function () {
            try {
               this[a] = void 0, delete this[a]
            } catch (a) {}
         })
      }
   }), m.extend({
      propFix: {
         for: "htmlFor",
         class: "className"
      },
      prop: function (a, b, c) {
         var d, e, f, g = a.nodeType;
         if (a && 3 !== g && 8 !== g && 2 !== g) return f = 1 !== g || !m.isXMLDoc(a), f && (b = m.propFix[b] || b, e = m.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
      },
      propHooks: {
         tabIndex: {
            get: function (a) {
               var b = m.find.attr(a, "tabindex");
               return b ? parseInt(b, 10) : sb.test(a.nodeName) || tb.test(a.nodeName) && a.href ? 0 : -1
            }
         }
      }
   }), k.hrefNormalized || m.each(["href", "src"], function (a, b) {
      m.propHooks[b] = {
         get: function (a) {
            return a.getAttribute(b, 4)
         }
      }
   }), k.optSelected || (m.propHooks.selected = {
      get: function (a) {
         var b = a.parentNode;
         return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null
      }
   }), m.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
      m.propFix[this.toLowerCase()] = this
   }), k.enctype || (m.propFix.enctype = "encoding");
   var ub = /[\t\r\n\f]/g;
   m.fn.extend({
      addClass: function (a) {
         var b, c, d, e, f, g, h = 0,
            i = this.length,
            j = "string" == typeof a && a;
         if (m.isFunction(a)) return this.each(function (b) {
            m(this).addClass(a.call(this, b, this.className))
         });
         if (j)
            for (b = (a || "").match(E) || []; i > h; h++)
               if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ub, " ") : " ")) {
                  for (f = 0; e = b[f++];) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                  g = m.trim(d), c.className !== g && (c.className = g)
               } return this
      },
      removeClass: function (a) {
         var b, c, d, e, f, g, h = 0,
            i = this.length,
            j = 0 === arguments.length || "string" == typeof a && a;
         if (m.isFunction(a)) return this.each(function (b) {
            m(this).removeClass(a.call(this, b, this.className))
         });
         if (j)
            for (b = (a || "").match(E) || []; i > h; h++)
               if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ub, " ") : "")) {
                  for (f = 0; e = b[f++];)
                     for (; d.indexOf(" " + e + " ") >= 0;) d = d.replace(" " + e + " ", " ");
                  g = a ? m.trim(d) : "", c.className !== g && (c.className = g)
               } return this
      },
      toggleClass: function (a, b) {
         var c = typeof a;
         return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(m.isFunction(a) ? function (c) {
            m(this).toggleClass(a.call(this, c, this.className, b), b)
         } : function () {
            if ("string" === c)
               for (var b, d = 0, e = m(this), f = a.match(E) || []; b = f[d++];) e.hasClass(b) ? e.removeClass(b) : e.addClass(b);
            else(c === K || "boolean" === c) && (this.className && m._data(this, "__className__", this.className), this.className = this.className || !1 === a ? "" : m._data(this, "__className__") || "")
         })
      },
      hasClass: function (a) {
         for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++)
            if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(ub, " ").indexOf(b) >= 0) return !0;
         return !1
      }
   }), m.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
      m.fn[b] = function (a, c) {
         return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
      }
   }), m.fn.extend({
      hover: function (a, b) {
         return this.mouseenter(a).mouseleave(b || a)
      },
      bind: function (a, b, c) {
         return this.on(a, null, b, c)
      },
      unbind: function (a, b) {
         return this.off(a, null, b)
      },
      delegate: function (a, b, c, d) {
         return this.on(b, a, c, d)
      },
      undelegate: function (a, b, c) {
         return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
      }
   });
   var vb = m.now(),
      wb = /\?/,
      xb = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
   m.parseJSON = function (b) {
      if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");
      var c, d = null,
         e = m.trim(b + "");
      return e && !m.trim(e.replace(xb, function (a, b, e, f) {
         return c && b && (d = 0), 0 === d ? a : (c = e || b, d += !f - !e, "")
      })) ? Function("return " + e)() : m.error("Invalid JSON: " + b)
   }, m.parseXML = function (b) {
      var c, d;
      if (!b || "string" != typeof b) return null;
      try {
         a.DOMParser ? (d = new DOMParser, c = d.parseFromString(b, "text/xml")) : (c = new ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(b))
      } catch (a) {
         c = void 0
      }
      return c && c.documentElement && !c.getElementsByTagName("parsererror").length || m.error("Invalid XML: " + b), c
   };
   var yb, zb, Ab = /#.*$/,
      Bb = /([?&])_=[^&]*/,
      Cb = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
      Db = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
      Eb = /^(?:GET|HEAD)$/,
      Fb = /^\/\//,
      Gb = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
      Hb = {},
      Ib = {},
      Jb = "*/".concat("*");
   try {
      zb = location.href
   } catch (a) {
      zb = y.createElement("a"), zb.href = "", zb = zb.href
   }
   yb = Gb.exec(zb.toLowerCase()) || [], m.extend({
      active: 0,
      lastModified: {},
      etag: {},
      ajaxSettings: {
         url: zb,
         type: "GET",
         isLocal: Db.test(yb[1]),
         global: !0,
         processData: !0,
         async: !0,
         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
         accepts: {
            "*": Jb,
            text: "text/plain",
            html: "text/html",
            xml: "application/xml, text/xml",
            json: "application/json, text/javascript"
         },
         contents: {
            xml: /xml/,
            html: /html/,
            json: /json/
         },
         responseFields: {
            xml: "responseXML",
            text: "responseText",
            json: "responseJSON"
         },
         converters: {
            "* text": String,
            "text html": !0,
            "text json": m.parseJSON,
            "text xml": m.parseXML
         },
         flatOptions: {
            url: !0,
            context: !0
         }
      },
      ajaxSetup: function (a, b) {
         return b ? Mb(Mb(a, m.ajaxSettings), b) : Mb(m.ajaxSettings, a)
      },
      ajaxPrefilter: Kb(Hb),
      ajaxTransport: Kb(Ib),
      ajax: function (a, b) {
         function w(a, b, c, d) {
            var j, r, s, u, w, x = b;
            2 !== t && (t = 2, g && clearTimeout(g), i = void 0, f = d || "", v.readyState = a > 0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, c && (u = Nb(k, v, c)), u = Ob(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader("Last-Modified"), w && (m.lastModified[e] = w), (w = v.getResponseHeader("etag")) && (m.etag[e] = w)), 204 === a || "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]), v.statusCode(q), q = void 0, h && n.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), h && (n.trigger("ajaxComplete", [v, k]), --m.active || m.event.trigger("ajaxStop")))
         }
         "object" == typeof a && (b = a, a = void 0), b = b || {};
         var c, d, e, f, g, h, i, j, k = m.ajaxSetup({}, b),
            l = k.context || k,
            n = k.context && (l.nodeType || l.jquery) ? m(l) : m.event,
            o = m.Deferred(),
            p = m.Callbacks("once memory"),
            q = k.statusCode || {},
            r = {},
            s = {},
            t = 0,
            u = "canceled",
            v = {
               readyState: 0,
               getResponseHeader: function (a) {
                  var b;
                  if (2 === t) {
                     if (!j)
                        for (j = {}; b = Cb.exec(f);) j[b[1].toLowerCase()] = b[2];
                     b = j[a.toLowerCase()]
                  }
                  return null == b ? null : b
               },
               getAllResponseHeaders: function () {
                  return 2 === t ? f : null
               },
               setRequestHeader: function (a, b) {
                  var c = a.toLowerCase();
                  return t || (a = s[c] = s[c] || a, r[a] = b), this
               },
               overrideMimeType: function (a) {
                  return t || (k.mimeType = a), this
               },
               statusCode: function (a) {
                  var b;
                  if (a)
                     if (2 > t)
                        for (b in a) q[b] = [q[b], a[b]];
                     else v.always(a[v.status]);
                  return this
               },
               abort: function (a) {
                  var b = a || u;
                  return i && i.abort(b), w(0, b), this
               }
            };
         if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a || k.url || zb) + "").replace(Ab, "").replace(Fb, yb[1] + "//"), k.type = b.method || b.type || k.method || k.type, k.dataTypes = m.trim(k.dataType || "*").toLowerCase().match(E) || [""], null == k.crossDomain && (c = Gb.exec(k.url.toLowerCase()), k.crossDomain = !(!c || c[1] === yb[1] && c[2] === yb[2] && (c[3] || ("http:" === c[1] ? "80" : "443")) === (yb[3] || ("http:" === yb[1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k.data && (k.data = m.param(k.data, k.traditional)), Lb(Hb, k, b, v), 2 === t) return v;
         h = k.global, h && 0 == m.active++ && m.event.trigger("ajaxStart"), k.type = k.type.toUpperCase(), k.hasContent = !Eb.test(k.type), e = k.url, k.hasContent || (k.data && (e = k.url += (wb.test(e) ? "&" : "?") + k.data, delete k.data), !1 === k.cache && (k.url = Bb.test(e) ? e.replace(Bb, "$1_=" + vb++) : e + (wb.test(e) ? "&" : "?") + "_=" + vb++)), k.ifModified && (m.lastModified[e] && v.setRequestHeader("If-Modified-Since", m.lastModified[e]), m.etag[e] && v.setRequestHeader("If-None-Match", m.etag[e])), (k.data && k.hasContent && !1 !== k.contentType || b.contentType) && v.setRequestHeader("Content-Type", k.contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k.dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ? ", " + Jb + "; q=0.01" : "") : k.accepts["*"]);
         for (d in k.headers) v.setRequestHeader(d, k.headers[d]);
         if (k.beforeSend && (!1 === k.beforeSend.call(l, v, k) || 2 === t)) return v.abort();
         u = "abort";
         for (d in {
               success: 1,
               error: 1,
               complete: 1
            }) v[d](k[d]);
         if (i = Lb(Ib, k, b, v)) {
            v.readyState = 1, h && n.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (g = setTimeout(function () {
               v.abort("timeout")
            }, k.timeout));
            try {
               t = 1, i.send(r, w)
            } catch (a) {
               if (!(2 > t)) throw a;
               w(-1, a)
            }
         } else w(-1, "No Transport");
         return v
      },
      getJSON: function (a, b, c) {
         return m.get(a, b, c, "json")
      },
      getScript: function (a, b) {
         return m.get(a, void 0, b, "script")
      }
   }), m.each(["get", "post"], function (a, b) {
      m[b] = function (a, c, d, e) {
         return m.isFunction(c) && (e = e || d, d = c, c = void 0), m.ajax({
            url: a,
            type: b,
            dataType: e,
            data: c,
            success: d
         })
      }
   }), m.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
      m.fn[b] = function (a) {
         return this.on(b, a)
      }
   }), m._evalUrl = function (a) {
      return m.ajax({
         url: a,
         type: "GET",
         dataType: "script",
         async: !1,
         global: !1,
         throws: !0
      })
   }, m.fn.extend({
      wrapAll: function (a) {
         if (m.isFunction(a)) return this.each(function (b) {
            m(this).wrapAll(a.call(this, b))
         });
         if (this[0]) {
            var b = m(a, this[0].ownerDocument).eq(0).clone(!0);
            this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
               for (var a = this; a.firstChild && 1 === a.firstChild.nodeType;) a = a.firstChild;
               return a
            }).append(this)
         }
         return this
      },
      wrapInner: function (a) {
         return this.each(m.isFunction(a) ? function (b) {
            m(this).wrapInner(a.call(this, b))
         } : function () {
            var b = m(this),
               c = b.contents();
            c.length ? c.wrapAll(a) : b.append(a)
         })
      },
      wrap: function (a) {
         var b = m.isFunction(a);
         return this.each(function (c) {
            m(this).wrapAll(b ? a.call(this, c) : a)
         })
      },
      unwrap: function () {
         return this.parent().each(function () {
            m.nodeName(this, "body") || m(this).replaceWith(this.childNodes)
         }).end()
      }
   }), m.expr.filters.hidden = function (a) {
      return a.offsetWidth <= 0 && a.offsetHeight <= 0 || !k.reliableHiddenOffsets() && "none" === (a.style && a.style.display || m.css(a, "display"))
   }, m.expr.filters.visible = function (a) {
      return !m.expr.filters.hidden(a)
   };
   var Pb = /%20/g,
      Qb = /\[\]$/,
      Rb = /\r?\n/g,
      Sb = /^(?:submit|button|image|reset|file)$/i,
      Tb = /^(?:input|select|textarea|keygen)/i;
   m.param = function (a, b) {
      var c, d = [],
         e = function (a, b) {
            b = m.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
         };
      if (void 0 === b && (b = m.ajaxSettings && m.ajaxSettings.traditional), m.isArray(a) || a.jquery && !m.isPlainObject(a)) m.each(a, function () {
         e(this.name, this.value)
      });
      else
         for (c in a) Ub(c, a[c], b, e);
      return d.join("&").replace(Pb, "+")
   }, m.fn.extend({
      serialize: function () {
         return m.param(this.serializeArray())
      },
      serializeArray: function () {
         return this.map(function () {
            var a = m.prop(this, "elements");
            return a ? m.makeArray(a) : this
         }).filter(function () {
            var a = this.type;
            return this.name && !m(this).is(":disabled") && Tb.test(this.nodeName) && !Sb.test(a) && (this.checked || !W.test(a))
         }).map(function (a, b) {
            var c = m(this).val();
            return null == c ? null : m.isArray(c) ? m.map(c, function (a) {
               return {
                  name: b.name,
                  value: a.replace(Rb, "\r\n")
               }
            }) : {
               name: b.name,
               value: c.replace(Rb, "\r\n")
            }
         }).get()
      }
   }), m.ajaxSettings.xhr = void 0 !== a.ActiveXObject ? function () {
      return !this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && Yb() || Zb()
   } : Yb;
   var Vb = 0,
      Wb = {},
      Xb = m.ajaxSettings.xhr();
   a.ActiveXObject && m(a).on("unload", function () {
      for (var a in Wb) Wb[a](void 0, !0)
   }), k.cors = !!Xb && "withCredentials" in Xb, (Xb = k.ajax = !!Xb) && m.ajaxTransport(function (a) {
      if (!a.crossDomain || k.cors) {
         var b;
         return {
            send: function (c, d) {
               var e, f = a.xhr(),
                  g = ++Vb;
               if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields)
                  for (e in a.xhrFields) f[e] = a.xhrFields[e];
               a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
               for (e in c) void 0 !== c[e] && f.setRequestHeader(e, c[e] + "");
               f.send(a.hasContent && a.data || null), b = function (c, e) {
                  var h, i, j;
                  if (b && (e || 4 === f.readyState))
                     if (delete Wb[g], b = void 0, f.onreadystatechange = m.noop, e) 4 !== f.readyState && f.abort();
                     else {
                        j = {}, h = f.status, "string" == typeof f.responseText && (j.text = f.responseText);
                        try {
                           i = f.statusText
                        } catch (a) {
                           i = ""
                        }
                        h || !a.isLocal || a.crossDomain ? 1223 === h && (h = 204) : h = j.text ? 200 : 404
                     } j && d(h, i, j, f.getAllResponseHeaders())
               }, a.async ? 4 === f.readyState ? setTimeout(b) : f.onreadystatechange = Wb[g] = b : b()
            },
            abort: function () {
               b && b(void 0, !0)
            }
         }
      }
   }), m.ajaxSetup({
      accepts: {
         script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
      },
      contents: {
         script: /(?:java|ecma)script/
      },
      converters: {
         "text script": function (a) {
            return m.globalEval(a), a
         }
      }
   }), m.ajaxPrefilter("script", function (a) {
      void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1)
   }), m.ajaxTransport("script", function (a) {
      if (a.crossDomain) {
         var b, c = y.head || m("head")[0] || y.documentElement;
         return {
            send: function (d, e) {
               b = y.createElement("script"), b.async = !0, a.scriptCharset && (b.charset = a.scriptCharset), b.src = a.url, b.onload = b.onreadystatechange = function (a, c) {
                  (c || !b.readyState || /loaded|complete/.test(b.readyState)) && (b.onload = b.onreadystatechange = null, b.parentNode && b.parentNode.removeChild(b), b = null, c || e(200, "success"))
               }, c.insertBefore(b, c.firstChild)
            },
            abort: function () {
               b && b.onload(void 0, !0)
            }
         }
      }
   });
   var $b = [],
      _b = /(=)\?(?=&|$)|\?\?/;
   m.ajaxSetup({
      jsonp: "callback",
      jsonpCallback: function () {
         var a = $b.pop() || m.expando + "_" + vb++;
         return this[a] = !0, a
      }
   }), m.ajaxPrefilter("json jsonp", function (b, c, d) {
      var e, f, g, h = !1 !== b.jsonp && (_b.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && _b.test(b.data) && "data");
      return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = m.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(_b, "$1" + e) : !1 !== b.jsonp && (b.url += (wb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
         return g || m.error(e + " was not called"), g[0]
      }, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
         g = arguments
      }, d.always(function () {
         a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, $b.push(e)), g && m.isFunction(f) && f(g[0]), g = f = void 0
      }), "script") : void 0
   }), m.parseHTML = function (a, b, c) {
      if (!a || "string" != typeof a) return null;
      "boolean" == typeof b && (c = b, b = !1), b = b || y;
      var d = u.exec(a),
         e = !c && [];
      return d ? [b.createElement(d[1])] : (d = m.buildFragment([a], b, e), e && e.length && m(e).remove(), m.merge([], d.childNodes))
   };
   var ac = m.fn.load;
   m.fn.load = function (a, b, c) {
      if ("string" != typeof a && ac) return ac.apply(this, arguments);
      var d, e, f, g = this,
         h = a.indexOf(" ");
      return h >= 0 && (d = m.trim(a.slice(h, a.length)), a = a.slice(0, h)), m.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (f = "POST"), g.length > 0 && m.ajax({
         url: a,
         type: f,
         dataType: "html",
         data: b
      }).done(function (a) {
         e = arguments, g.html(d ? m("<div>").append(m.parseHTML(a)).find(d) : a)
      }).complete(c && function (a, b) {
         g.each(c, e || [a.responseText, b, a])
      }), this
   }, m.expr.filters.animated = function (a) {
      return m.grep(m.timers, function (b) {
         return a === b.elem
      }).length
   };
   var bc = a.document.documentElement;
   m.offset = {
      setOffset: function (a, b, c) {
         var d, e, f, g, h, i, j, k = m.css(a, "position"),
            l = m(a),
            n = {};
         "static" === k && (a.style.position = "relative"), h = l.offset(), f = m.css(a, "top"), i = m.css(a, "left"), j = ("absolute" === k || "fixed" === k) && m.inArray("auto", [f, i]) > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), m.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (n.top = b.top - h.top + g), null != b.left && (n.left = b.left - h.left + e), "using" in b ? b.using.call(a, n) : l.css(n)
      }
   }, m.fn.extend({
      offset: function (a) {
         if (arguments.length) return void 0 === a ? this : this.each(function (b) {
            m.offset.setOffset(this, a, b)
         });
         var b, c, d = {
               top: 0,
               left: 0
            },
            e = this[0],
            f = e && e.ownerDocument;
         return f ? (b = f.documentElement, m.contains(b, e) ? (typeof e.getBoundingClientRect !== K && (d = e.getBoundingClientRect()), c = cc(f), {
            top: d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0),
            left: d.left + (c.pageXOffset || b.scrollLeft) - (b.clientLeft || 0)
         }) : d) : void 0
      },
      position: function () {
         if (this[0]) {
            var a, b, c = {
                  top: 0,
                  left: 0
               },
               d = this[0];
            return "fixed" === m.css(d, "position") ? b = d.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), m.nodeName(a[0], "html") || (c = a.offset()), c.top += m.css(a[0], "borderTopWidth", !0), c.left += m.css(a[0], "borderLeftWidth", !0)), {
               top: b.top - c.top - m.css(d, "marginTop", !0),
               left: b.left - c.left - m.css(d, "marginLeft", !0)
            }
         }
      },
      offsetParent: function () {
         return this.map(function () {
            for (var a = this.offsetParent || bc; a && !m.nodeName(a, "html") && "static" === m.css(a, "position");) a = a.offsetParent;
            return a || bc
         })
      }
   }), m.each({
      scrollLeft: "pageXOffset",
      scrollTop: "pageYOffset"
   }, function (a, b) {
      var c = /Y/.test(b);
      m.fn[a] = function (d) {
         return V(this, function (a, d, e) {
            var f = cc(a);
            return void 0 === e ? f ? b in f ? f[b] : f.document.documentElement[d] : a[d] : void(f ? f.scrollTo(c ? m(f).scrollLeft() : e, c ? e : m(f).scrollTop()) : a[d] = e)
         }, a, d, arguments.length, null)
      }
   }), m.each(["top", "left"], function (a, b) {
      m.cssHooks[b] = La(k.pixelPosition, function (a, c) {
         return c ? (c = Ja(a, b), Ha.test(c) ? m(a).position()[b] + "px" : c) : void 0
      })
   }), m.each({
      Height: "height",
      Width: "width"
   }, function (a, b) {
      m.each({
         padding: "inner" + a,
         content: b,
         "": "outer" + a
      }, function (c, d) {
         m.fn[d] = function (d, e) {
            var f = arguments.length && (c || "boolean" != typeof d),
               g = c || (!0 === d || !0 === e ? "margin" : "border");
            return V(this, function (b, c, d) {
               var e;
               return m.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? m.css(b, c, g) : m.style(b, c, d, g)
            }, b, f ? d : void 0, f, null)
         }
      })
   }), m.fn.size = function () {
      return this.length
   }, m.fn.andSelf = m.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
      return m
   });
   var dc = a.jQuery,
      ec = a.$;
   return m.noConflict = function (b) {
      return a.$ === m && (a.$ = ec), b && a.jQuery === m && (a.jQuery = dc), m
   }, typeof b === K && (a.jQuery = a.$ = m), m
});

function modalNotify(text) {
   $("#popup-notify").find(".modal-body").html(text);
   $('#popup-notify').modal('show');
}

function ValidationFormSelf(ele) {
   if (ele) {
      $("." + ele).find("input[type=submit]").removeAttr("disabled");
      var forms = document.getElementsByClassName(ele);
      var validation = Array.prototype.filter.call(forms, function (form) {
         form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
            }
            form.classList.add('was-validated');
         }, false);
      });
   }
}

function loadPagingAjax(url, eShow) {
   if ($(eShow).length && url) {
      $.ajax({
         url: url,
         type: "GET",
         data: {
            eShow: eShow
         },
         success: function (result) {
            $(eShow).html(result);
         }
      });
   }
   return false;
}

function doEnter(event, obj) {
   if (event.keyCode == 13 || event.which == 13) onSearch(obj);
}

function onSearch(obj) {
   var keyword = $("#" + obj).val();
   if (keyword = '') {
      modalNotify(LANG['no_keywords']);
      return false;
   } else {
      location.href = "tim-kiem?keyword=" + encodeURI(keyword);
      loadPage(document.location);
   }
}

function goToByScroll(id) {
   var offsetMenu = 0;
   id = id.replace("#", "");
   if ($(".menu").length) offsetMenu = $(".menu").height();
   $('html,body').animate({
      scrollTop: $("#" + id).offset().top - (offsetMenu * 2)
   }, 'slow');
}

function update_cart(id, code, quantity) {
   if (id) {
      var ship = $(".price-ship").val();
      $.ajax({
         type: "POST",
         url: "ajax/ajax_cart.php",
         dataType: 'json',
         data: {
            cmd: 'update-cart',
            id: id,
            code: code,
            quantity: quantity,
            ship: ship
         },
         success: function (result) {
            if (result) {
               $('.load-price-' + code).html(result.gia);
               $('.load-price-new-' + code).html(result.giamoi);
               $('.price-temp').val(result.temp);
               $('.load-price-temp').html(result.tempText);
               $('.price-total').val(result.total);
               $('.load-price-total').html(result.totalText);
            }
         }
      });
   }
}

function load_district(id) {
   $.ajax({
      type: 'post',
      url: 'ajax/ajax_district.php',
      data: {
         id_city: id
      },
      success: function (result) {
         $(".select-district").html(result);
         $(".select-wards").html('<option value="">' + LANG['wards'] + '</option>');
      }
   });
}

function load_wards(id) {
   $.ajax({
      type: 'post',
      url: 'ajax/ajax_wards.php',
      data: {
         id_district: id
      },
      success: function (result) {
         $(".select-wards").html(result);
      }
   });
}

function load_ship(id) {
   if (SHIP_CART) {
      $.ajax({
         type: "POST",
         url: "ajax/ajax_cart.php",
         dataType: 'json',
         data: {
            cmd: 'ship-cart',
            id: id
         },
         success: function (result) {
            if (result) {
               $('.load-price-ship').html(result.shipText);
               $('.load-price-total').html(result.totalText);
               $('.price-ship').val(result.ship);
               $('.price-total').val(result.total);
            }
         }
      });
   }
}! function (i) {
   "use strict";
   "function" == typeof define && define.amd ? define(["jquery"], i) : "undefined" != typeof exports ? module.exports = i(require("jquery")) : i(jQuery)
}(function (i) {
   "use strict";
   var e = window.Slick || {};
   (e = function () {
      var e = 0;
      return function (t, o) {
         var s, n = this;
         n.defaults = {
            accessibility: !0,
            adaptiveHeight: !1,
            appendArrows: i(t),
            appendDots: i(t),
            arrows: !0,
            asNavFor: null,
            prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
            nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
            autoplay: !1,
            autoplaySpeed: 3e3,
            centerMode: !1,
            centerPadding: "50px",
            cssEase: "ease",
            customPaging: function (e, t) {
               return i('<button type="button" />').text(t + 1)
            },
            dots: !1,
            dotsClass: "slick-dots",
            draggable: !0,
            easing: "linear",
            edgeFriction: .35,
            fade: !1,
            focusOnSelect: !1,
            focusOnChange: !1,
            infinite: !0,
            initialSlide: 0,
            lazyLoad: "ondemand",
            mobileFirst: !1,
            pauseOnHover: !0,
            pauseOnFocus: !0,
            pauseOnDotsHover: !1,
            respondTo: "window",
            responsive: null,
            rows: 1,
            rtl: !1,
            slide: "",
            slidesPerRow: 1,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            swipe: !0,
            swipeToSlide: !1,
            touchMove: !0,
            touchThreshold: 5,
            useCSS: !0,
            useTransform: !0,
            variableWidth: !1,
            vertical: !1,
            verticalSwiping: !1,
            waitForAnimate: !0,
            zIndex: 1e3
         }, n.initials = {
            animating: !1,
            dragging: !1,
            autoPlayTimer: null,
            currentDirection: 0,
            currentLeft: null,
            currentSlide: 0,
            direction: 1,
            $dots: null,
            listWidth: null,
            listHeight: null,
            loadIndex: 0,
            $nextArrow: null,
            $prevArrow: null,
            scrolling: !1,
            slideCount: null,
            slideWidth: null,
            $slideTrack: null,
            $slides: null,
            sliding: !1,
            slideOffset: 0,
            swipeLeft: null,
            swiping: !1,
            $list: null,
            touchObject: {},
            transformsEnabled: !1,
            unslicked: !1
         }, i.extend(n, n.initials), n.activeBreakpoint = null, n.animType = null, n.animProp = null, n.breakpoints = [], n.breakpointSettings = [], n.cssTransitions = !1, n.focussed = !1, n.interrupted = !1, n.hidden = "hidden", n.paused = !0, n.positionProp = null, n.respondTo = null, n.rowCount = 1, n.shouldClick = !0, n.$slider = i(t), n.$slidesCache = null, n.transformType = null, n.transitionType = null, n.visibilityChange = "visibilitychange", n.windowWidth = 0, n.windowTimer = null, s = i(t).data("slick") || {}, n.options = i.extend({}, n.defaults, o, s), n.currentSlide = n.options.initialSlide, n.originalSettings = n.options, void 0 !== document.mozHidden ? (n.hidden = "mozHidden", n.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (n.hidden = "webkitHidden", n.visibilityChange = "webkitvisibilitychange"), n.autoPlay = i.proxy(n.autoPlay, n), n.autoPlayClear = i.proxy(n.autoPlayClear, n), n.autoPlayIterator = i.proxy(n.autoPlayIterator, n), n.changeSlide = i.proxy(n.changeSlide, n), n.clickHandler = i.proxy(n.clickHandler, n), n.selectHandler = i.proxy(n.selectHandler, n), n.setPosition = i.proxy(n.setPosition, n), n.swipeHandler = i.proxy(n.swipeHandler, n), n.dragHandler = i.proxy(n.dragHandler, n), n.keyHandler = i.proxy(n.keyHandler, n), n.instanceUid = e++, n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, n.registerBreakpoints(), n.init(!0)
      }
   }()).prototype.activateADA = function () {
      this.$slideTrack.find(".slick-active").attr({
         "aria-hidden": "false"
      }).find("a, input, button, select").attr({
         tabindex: "0"
      })
   }, e.prototype.addSlide = e.prototype.slickAdd = function (e, t, o) {
      var s = this;
      if ("boolean" == typeof t) o = t, t = null;
      else if (t < 0 || t >= s.slideCount) return !1;
      s.unload(), "number" == typeof t ? 0 === t && 0 === s.$slides.length ? i(e).appendTo(s.$slideTrack) : o ? i(e).insertBefore(s.$slides.eq(t)) : i(e).insertAfter(s.$slides.eq(t)) : !0 === o ? i(e).prependTo(s.$slideTrack) : i(e).appendTo(s.$slideTrack), s.$slides = s.$slideTrack.children(this.options.slide), s.$slideTrack.children(this.options.slide).detach(), s.$slideTrack.append(s.$slides), s.$slides.each(function (e, t) {
         i(t).attr("data-slick-index", e)
      }), s.$slidesCache = s.$slides, s.reinit()
   }, e.prototype.animateHeight = function () {
      var i = this;
      if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
         var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
         i.$list.animate({
            height: e
         }, i.options.speed)
      }
   }, e.prototype.animateSlide = function (e, t) {
      var o = {},
         s = this;
      s.animateHeight(), !0 === s.options.rtl && !1 === s.options.vertical && (e = -e), !1 === s.transformsEnabled ? !1 === s.options.vertical ? s.$slideTrack.animate({
         left: e
      }, s.options.speed, s.options.easing, t) : s.$slideTrack.animate({
         top: e
      }, s.options.speed, s.options.easing, t) : !1 === s.cssTransitions ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft), i({
         animStart: s.currentLeft
      }).animate({
         animStart: e
      }, {
         duration: s.options.speed,
         easing: s.options.easing,
         step: function (i) {
            i = Math.ceil(i), !1 === s.options.vertical ? (o[s.animType] = "translate(" + i + "px, 0px)", s.$slideTrack.css(o)) : (o[s.animType] = "translate(0px," + i + "px)", s.$slideTrack.css(o))
         },
         complete: function () {
            t && t.call()
         }
      })) : (s.applyTransition(), e = Math.ceil(e), !1 === s.options.vertical ? o[s.animType] = "translate3d(" + e + "px, 0px, 0px)" : o[s.animType] = "translate3d(0px," + e + "px, 0px)", s.$slideTrack.css(o), t && setTimeout(function () {
         s.disableTransition(), t.call()
      }, s.options.speed))
   }, e.prototype.getNavTarget = function () {
      var e = this,
         t = e.options.asNavFor;
      return t && null !== t && (t = i(t).not(e.$slider)), t
   }, e.prototype.asNavFor = function (e) {
      var t = this.getNavTarget();
      null !== t && "object" == typeof t && t.each(function () {
         var t = i(this).slick("getSlick");
         t.unslicked || t.slideHandler(e, !0)
      })
   }, e.prototype.applyTransition = function (i) {
      var e = this,
         t = {};
      !1 === e.options.fade ? t[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : t[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase, !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
   }, e.prototype.autoPlay = function () {
      var i = this;
      i.autoPlayClear(), i.slideCount > i.options.slidesToShow && (i.autoPlayTimer = setInterval(i.autoPlayIterator, i.options.autoplaySpeed))
   }, e.prototype.autoPlayClear = function () {
      var i = this;
      i.autoPlayTimer && clearInterval(i.autoPlayTimer)
   }, e.prototype.autoPlayIterator = function () {
      var i = this,
         e = i.currentSlide + i.options.slidesToScroll;
      i.paused || i.interrupted || i.focussed || (!1 === i.options.infinite && (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1 ? i.direction = 0 : 0 === i.direction && (e = i.currentSlide - i.options.slidesToScroll, i.currentSlide - 1 == 0 && (i.direction = 1))), i.slideHandler(e))
   }, e.prototype.buildArrows = function () {
      var e = this;
      !0 === e.options.arrows && (e.$prevArrow = i(e.options.prevArrow).addClass("slick-arrow"), e.$nextArrow = i(e.options.nextArrow).addClass("slick-arrow"), e.slideCount > e.options.slidesToShow ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows), e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows), !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
         "aria-disabled": "true",
         tabindex: "-1"
      }))
   }, e.prototype.buildDots = function () {
      var e, t, o = this;
      if (!0 === o.options.dots) {
         for (o.$slider.addClass("slick-dotted"), t = i("<ul />").addClass(o.options.dotsClass), e = 0; e <= o.getDotCount(); e += 1) t.append(i("<li />").append(o.options.customPaging.call(this, o, e)));
         o.$dots = t.appendTo(o.options.appendDots), o.$dots.find("li").first().addClass("slick-active")
      }
   }, e.prototype.buildOut = function () {
      var e = this;
      e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), e.slideCount = e.$slides.length, e.$slides.each(function (e, t) {
         i(t).attr("data-slick-index", e).data("originalStyling", i(t).attr("style") || "")
      }), e.$slider.addClass("slick-slider"), e.$slideTrack = 0 === e.slideCount ? i('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent(), e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent(), e.$slideTrack.css("opacity", 0), !0 !== e.options.centerMode && !0 !== e.options.swipeToSlide || (e.options.slidesToScroll = 1), i("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"), e.setupInfinite(), e.buildArrows(), e.buildDots(), e.updateDots(), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), !0 === e.options.draggable && e.$list.addClass("draggable")
   }, e.prototype.buildRows = function () {
      var i, e, t, o, s, n, r, l = this;
      if (o = document.createDocumentFragment(), n = l.$slider.children(), l.options.rows > 1) {
         for (r = l.options.slidesPerRow * l.options.rows, s = Math.ceil(n.length / r), i = 0; i < s; i++) {
            var d = document.createElement("div");
            for (e = 0; e < l.options.rows; e++) {
               var a = document.createElement("div");
               for (t = 0; t < l.options.slidesPerRow; t++) {
                  var c = i * r + (e * l.options.slidesPerRow + t);
                  n.get(c) && a.appendChild(n.get(c))
               }
               d.appendChild(a)
            }
            o.appendChild(d)
         }
         l.$slider.empty().append(o), l.$slider.children().children().children().css({
            width: 100 / l.options.slidesPerRow + "%",
            display: "inline-block"
         })
      }
   }, e.prototype.checkResponsive = function (e, t) {
      var o, s, n, r = this,
         l = !1,
         d = r.$slider.width(),
         a = window.innerWidth || i(window).width();
      if ("window" === r.respondTo ? n = a : "slider" === r.respondTo ? n = d : "min" === r.respondTo && (n = Math.min(a, d)), r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
         s = null;
         for (o in r.breakpoints) r.breakpoints.hasOwnProperty(o) && (!1 === r.originalSettings.mobileFirst ? n < r.breakpoints[o] && (s = r.breakpoints[o]) : n > r.breakpoints[o] && (s = r.breakpoints[o]));
         null !== s ? null !== r.activeBreakpoint ? (s !== r.activeBreakpoint || t) && (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : null !== r.activeBreakpoint && (r.activeBreakpoint = null, r.options = r.originalSettings, !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e), l = s), e || !1 === l || r.$slider.trigger("breakpoint", [r, l])
      }
   }, e.prototype.changeSlide = function (e, t) {
      var o, s, n, r = this,
         l = i(e.currentTarget);
      switch (l.is("a") && e.preventDefault(), l.is("li") || (l = l.closest("li")), n = r.slideCount % r.options.slidesToScroll != 0, o = n ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, e.data.message) {
         case "previous":
            s = 0 === o ? r.options.slidesToScroll : r.options.slidesToShow - o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - s, !1, t);
            break;
         case "next":
            s = 0 === o ? r.options.slidesToScroll : o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + s, !1, t);
            break;
         case "index":
            var d = 0 === e.data.index ? 0 : e.data.index || l.index() * r.options.slidesToScroll;
            r.slideHandler(r.checkNavigable(d), !1, t), l.children().trigger("focus");
            break;
         default:
            return
      }
   }, e.prototype.checkNavigable = function (i) {
      var e, t;
      if (e = this.getNavigableIndexes(), t = 0, i > e[e.length - 1]) i = e[e.length - 1];
      else
         for (var o in e) {
            if (i < e[o]) {
               i = t;
               break
            }
            t = e[o]
         }
      return i
   }, e.prototype.cleanUpEvents = function () {
      var e = this;
      e.options.dots && null !== e.$dots && (i("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", i.proxy(e.interrupt, e, !0)).off("mouseleave.slick", i.proxy(e.interrupt, e, !1)), !0 === e.options.accessibility && e.$dots.off("keydown.slick", e.keyHandler)), e.$slider.off("focus.slick blur.slick"), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide), e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler), e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))), e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler), e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler), e.$list.off("touchend.slick mouseup.slick", e.swipeHandler), e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler), e.$list.off("click.slick", e.clickHandler), i(document).off(e.visibilityChange, e.visibility), e.cleanUpSlideEvents(), !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().off("click.slick", e.selectHandler), i(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange), i(window).off("resize.slick.slick-" + e.instanceUid, e.resize), i("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault), i(window).off("load.slick.slick-" + e.instanceUid, e.setPosition)
   }, e.prototype.cleanUpSlideEvents = function () {
      var e = this;
      e.$list.off("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", i.proxy(e.interrupt, e, !1))
   }, e.prototype.cleanUpRows = function () {
      var i, e = this;
      e.options.rows > 1 && ((i = e.$slides.children().children()).removeAttr("style"), e.$slider.empty().append(i))
   }, e.prototype.clickHandler = function (i) {
      !1 === this.shouldClick && (i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault())
   }, e.prototype.destroy = function (e) {
      var t = this;
      t.autoPlayClear(), t.touchObject = {}, t.cleanUpEvents(), i(".slick-cloned", t.$slider).detach(), t.$dots && t.$dots.remove(), t.$prevArrow && t.$prevArrow.length && (t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()), t.$nextArrow && t.$nextArrow.length && (t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()), t.$slides && (t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function () {
         i(this).attr("style", i(this).data("originalStyling"))
      }), t.$slideTrack.children(this.options.slide).detach(), t.$slideTrack.detach(), t.$list.detach(), t.$slider.append(t.$slides)), t.cleanUpRows(), t.$slider.removeClass("slick-slider"), t.$slider.removeClass("slick-initialized"), t.$slider.removeClass("slick-dotted"), t.unslicked = !0, e || t.$slider.trigger("destroy", [t])
   }, e.prototype.disableTransition = function (i) {
      var e = this,
         t = {};
      t[e.transitionType] = "", !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
   }, e.prototype.fadeSlide = function (i, e) {
      var t = this;
      !1 === t.cssTransitions ? (t.$slides.eq(i).css({
         zIndex: t.options.zIndex
      }), t.$slides.eq(i).animate({
         opacity: 1
      }, t.options.speed, t.options.easing, e)) : (t.applyTransition(i), t.$slides.eq(i).css({
         opacity: 1,
         zIndex: t.options.zIndex
      }), e && setTimeout(function () {
         t.disableTransition(i), e.call()
      }, t.options.speed))
   }, e.prototype.fadeSlideOut = function (i) {
      var e = this;
      !1 === e.cssTransitions ? e.$slides.eq(i).animate({
         opacity: 0,
         zIndex: e.options.zIndex - 2
      }, e.options.speed, e.options.easing) : (e.applyTransition(i), e.$slides.eq(i).css({
         opacity: 0,
         zIndex: e.options.zIndex - 2
      }))
   }, e.prototype.filterSlides = e.prototype.slickFilter = function (i) {
      var e = this;
      null !== i && (e.$slidesCache = e.$slides, e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(i).appendTo(e.$slideTrack), e.reinit())
   }, e.prototype.focusHandler = function () {
      var e = this;
      e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function (t) {
         t.stopImmediatePropagation();
         var o = i(this);
         setTimeout(function () {
            e.options.pauseOnFocus && (e.focussed = o.is(":focus"), e.autoPlay())
         }, 0)
      })
   }, e.prototype.getCurrent = e.prototype.slickCurrentSlide = function () {
      return this.currentSlide
   }, e.prototype.getDotCount = function () {
      var i = this,
         e = 0,
         t = 0,
         o = 0;
      if (!0 === i.options.infinite)
         if (i.slideCount <= i.options.slidesToShow) ++o;
         else
            for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
      else if (!0 === i.options.centerMode) o = i.slideCount;
      else if (i.options.asNavFor)
         for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
      else o = 1 + Math.ceil((i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll);
      return o - 1
   }, e.prototype.getLeft = function (i) {
      var e, t, o, s, n = this,
         r = 0;
      return n.slideOffset = 0, t = n.$slides.first().outerHeight(!0), !0 === n.options.infinite ? (n.slideCount > n.options.slidesToShow && (n.slideOffset = n.slideWidth * n.options.slidesToShow * -1, s = -1, !0 === n.options.vertical && !0 === n.options.centerMode && (2 === n.options.slidesToShow ? s = -1.5 : 1 === n.options.slidesToShow && (s = -2)), r = t * n.options.slidesToShow * s), n.slideCount % n.options.slidesToScroll != 0 && i + n.options.slidesToScroll > n.slideCount && n.slideCount > n.options.slidesToShow && (i > n.slideCount ? (n.slideOffset = (n.options.slidesToShow - (i - n.slideCount)) * n.slideWidth * -1, r = (n.options.slidesToShow - (i - n.slideCount)) * t * -1) : (n.slideOffset = n.slideCount % n.options.slidesToScroll * n.slideWidth * -1, r = n.slideCount % n.options.slidesToScroll * t * -1))) : i + n.options.slidesToShow > n.slideCount && (n.slideOffset = (i + n.options.slidesToShow - n.slideCount) * n.slideWidth, r = (i + n.options.slidesToShow - n.slideCount) * t), n.slideCount <= n.options.slidesToShow && (n.slideOffset = 0, r = 0), !0 === n.options.centerMode && n.slideCount <= n.options.slidesToShow ? n.slideOffset = n.slideWidth * Math.floor(n.options.slidesToShow) / 2 - n.slideWidth * n.slideCount / 2 : !0 === n.options.centerMode && !0 === n.options.infinite ? n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2) - n.slideWidth : !0 === n.options.centerMode && (n.slideOffset = 0, n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2)), e = !1 === n.options.vertical ? i * n.slideWidth * -1 + n.slideOffset : i * t * -1 + r, !0 === n.options.variableWidth && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, !0 === n.options.centerMode && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow + 1), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, e += (n.$list.width() - o.outerWidth()) / 2)), e
   }, e.prototype.getOption = e.prototype.slickGetOption = function (i) {
      return this.options[i]
   }, e.prototype.getNavigableIndexes = function () {
      var i, e = this,
         t = 0,
         o = 0,
         s = [];
      for (!1 === e.options.infinite ? i = e.slideCount : (t = -1 * e.options.slidesToScroll, o = -1 * e.options.slidesToScroll, i = 2 * e.slideCount); t < i;) s.push(t), t = o + e.options.slidesToScroll, o += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
      return s
   }, e.prototype.getSlick = function () {
      return this
   }, e.prototype.getSlideCount = function () {
      var e, t, o = this;
      return t = !0 === o.options.centerMode ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0, !0 === o.options.swipeToSlide ? (o.$slideTrack.find(".slick-slide").each(function (s, n) {
         if (n.offsetLeft - t + i(n).outerWidth() / 2 > -1 * o.swipeLeft) return e = n, !1
      }), Math.abs(i(e).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll
   }, e.prototype.goTo = e.prototype.slickGoTo = function (i, e) {
      this.changeSlide({
         data: {
            message: "index",
            index: parseInt(i)
         }
      }, e)
   }, e.prototype.init = function (e) {
      var t = this;
      i(t.$slider).hasClass("slick-initialized") || (i(t.$slider).addClass("slick-initialized"), t.buildRows(), t.buildOut(), t.setProps(), t.startLoad(), t.loadSlider(), t.initializeEvents(), t.updateArrows(), t.updateDots(), t.checkResponsive(!0), t.focusHandler()), e && t.$slider.trigger("init", [t]), !0 === t.options.accessibility && t.initADA(), t.options.autoplay && (t.paused = !1, t.autoPlay())
   }, e.prototype.initADA = function () {
      var e = this,
         t = Math.ceil(e.slideCount / e.options.slidesToShow),
         o = e.getNavigableIndexes().filter(function (i) {
            return i >= 0 && i < e.slideCount
         });
      e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
         "aria-hidden": "true",
         tabindex: "-1"
      }).find("a, input, button, select").attr({
         tabindex: "-1"
      }), null !== e.$dots && (e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function (t) {
         var s = o.indexOf(t);
         i(this).attr({
            role: "tabpanel",
            id: "slick-slide" + e.instanceUid + t,
            tabindex: -1
         }), -1 !== s && i(this).attr({
            "aria-describedby": "slick-slide-control" + e.instanceUid + s
         })
      }), e.$dots.attr("role", "tablist").find("li").each(function (s) {
         var n = o[s];
         i(this).attr({
            role: "presentation"
         }), i(this).find("button").first().attr({
            role: "tab",
            id: "slick-slide-control" + e.instanceUid + s,
            "aria-controls": "slick-slide" + e.instanceUid + n,
            "aria-label": s + 1 + " of " + t,
            "aria-selected": null,
            tabindex: "-1"
         })
      }).eq(e.currentSlide).find("button").attr({
         "aria-selected": "true",
         tabindex: "0"
      }).end());
      for (var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++) e.$slides.eq(s).attr("tabindex", 0);
      e.activateADA()
   }, e.prototype.initArrowEvents = function () {
      var i = this;
      !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.off("click.slick").on("click.slick", {
         message: "previous"
      }, i.changeSlide), i.$nextArrow.off("click.slick").on("click.slick", {
         message: "next"
      }, i.changeSlide), !0 === i.options.accessibility && (i.$prevArrow.on("keydown.slick", i.keyHandler), i.$nextArrow.on("keydown.slick", i.keyHandler)))
   }, e.prototype.initDotEvents = function () {
      var e = this;
      !0 === e.options.dots && (i("li", e.$dots).on("click.slick", {
         message: "index"
      }, e.changeSlide), !0 === e.options.accessibility && e.$dots.on("keydown.slick", e.keyHandler)), !0 === e.options.dots && !0 === e.options.pauseOnDotsHover && i("li", e.$dots).on("mouseenter.slick", i.proxy(e.interrupt, e, !0)).on("mouseleave.slick", i.proxy(e.interrupt, e, !1))
   }, e.prototype.initSlideEvents = function () {
      var e = this;
      e.options.pauseOnHover && (e.$list.on("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", i.proxy(e.interrupt, e, !1)))
   }, e.prototype.initializeEvents = function () {
      var e = this;
      e.initArrowEvents(), e.initDotEvents(), e.initSlideEvents(), e.$list.on("touchstart.slick mousedown.slick", {
         action: "start"
      }, e.swipeHandler), e.$list.on("touchmove.slick mousemove.slick", {
         action: "move"
      }, e.swipeHandler), e.$list.on("touchend.slick mouseup.slick", {
         action: "end"
      }, e.swipeHandler), e.$list.on("touchcancel.slick mouseleave.slick", {
         action: "end"
      }, e.swipeHandler), e.$list.on("click.slick", e.clickHandler), i(document).on(e.visibilityChange, i.proxy(e.visibility, e)), !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), i(window).on("orientationchange.slick.slick-" + e.instanceUid, i.proxy(e.orientationChange, e)), i(window).on("resize.slick.slick-" + e.instanceUid, i.proxy(e.resize, e)), i("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault), i(window).on("load.slick.slick-" + e.instanceUid, e.setPosition), i(e.setPosition)
   }, e.prototype.initUI = function () {
      var i = this;
      !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.show(), i.$nextArrow.show()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.show()
   }, e.prototype.keyHandler = function (i) {
      var e = this;
      i.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === i.keyCode && !0 === e.options.accessibility ? e.changeSlide({
         data: {
            message: !0 === e.options.rtl ? "next" : "previous"
         }
      }) : 39 === i.keyCode && !0 === e.options.accessibility && e.changeSlide({
         data: {
            message: !0 === e.options.rtl ? "previous" : "next"
         }
      }))
   }, e.prototype.lazyLoad = function () {
      function e(e) {
         i("img[data-lazy]", e).each(function () {
            var e = i(this),
               t = i(this).attr("data-lazy"),
               o = i(this).attr("data-srcset"),
               s = i(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
               r = document.createElement("img");
            r.onload = function () {
               e.animate({
                  opacity: 0
               }, 100, function () {
                  o && (e.attr("srcset", o), s && e.attr("sizes", s)), e.attr("src", t).animate({
                     opacity: 1
                  }, 200, function () {
                     e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")
                  }), n.$slider.trigger("lazyLoaded", [n, e, t])
               })
            }, r.onerror = function () {
               e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), n.$slider.trigger("lazyLoadError", [n, e, t])
            }, r.src = t
         })
      }
      var t, o, s, n = this;
      if (!0 === n.options.centerMode ? !0 === n.options.infinite ? s = (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) + n.options.slidesToShow + 2 : (o = Math.max(0, n.currentSlide - (n.options.slidesToShow / 2 + 1)), s = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide) : (o = n.options.infinite ? n.options.slidesToShow + n.currentSlide : n.currentSlide, s = Math.ceil(o + n.options.slidesToShow), !0 === n.options.fade && (o > 0 && o--, s <= n.slideCount && s++)), t = n.$slider.find(".slick-slide").slice(o, s), "anticipated" === n.options.lazyLoad)
         for (var r = o - 1, l = s, d = n.$slider.find(".slick-slide"), a = 0; a < n.options.slidesToScroll; a++) r < 0 && (r = n.slideCount - 1), t = (t = t.add(d.eq(r))).add(d.eq(l)), r--, l++;
      e(t), n.slideCount <= n.options.slidesToShow ? e(n.$slider.find(".slick-slide")) : n.currentSlide >= n.slideCount - n.options.slidesToShow ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow)) : 0 === n.currentSlide && e(n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow))
   }, e.prototype.loadSlider = function () {
      var i = this;
      i.setPosition(), i.$slideTrack.css({
         opacity: 1
      }), i.$slider.removeClass("slick-loading"), i.initUI(), "progressive" === i.options.lazyLoad && i.progressiveLazyLoad()
   }, e.prototype.next = e.prototype.slickNext = function () {
      this.changeSlide({
         data: {
            message: "next"
         }
      })
   }, e.prototype.orientationChange = function () {
      var i = this;
      i.checkResponsive(), i.setPosition()
   }, e.prototype.pause = e.prototype.slickPause = function () {
      var i = this;
      i.autoPlayClear(), i.paused = !0
   }, e.prototype.play = e.prototype.slickPlay = function () {
      var i = this;
      i.autoPlay(), i.options.autoplay = !0, i.paused = !1, i.focussed = !1, i.interrupted = !1
   }, e.prototype.postSlide = function (e) {
      var t = this;
      t.unslicked || (t.$slider.trigger("afterChange", [t, e]), t.animating = !1, t.slideCount > t.options.slidesToShow && t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && (t.initADA(), t.options.focusOnChange && i(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()))
   }, e.prototype.prev = e.prototype.slickPrev = function () {
      this.changeSlide({
         data: {
            message: "previous"
         }
      })
   }, e.prototype.preventDefault = function (i) {
      i.preventDefault()
   }, e.prototype.progressiveLazyLoad = function (e) {
      e = e || 1;
      var t, o, s, n, r, l = this,
         d = i("img[data-lazy]", l.$slider);
      d.length ? (t = d.first(), o = t.attr("data-lazy"), s = t.attr("data-srcset"), n = t.attr("data-sizes") || l.$slider.attr("data-sizes"), (r = document.createElement("img")).onload = function () {
         s && (t.attr("srcset", s), n && t.attr("sizes", n)), t.attr("src", o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"), !0 === l.options.adaptiveHeight && l.setPosition(), l.$slider.trigger("lazyLoaded", [l, t, o]), l.progressiveLazyLoad()
      }, r.onerror = function () {
         e < 3 ? setTimeout(function () {
            l.progressiveLazyLoad(e + 1)
         }, 500) : (t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), l.$slider.trigger("lazyLoadError", [l, t, o]), l.progressiveLazyLoad())
      }, r.src = o) : l.$slider.trigger("allImagesLoaded", [l])
   }, e.prototype.refresh = function (e) {
      var t, o, s = this;
      o = s.slideCount - s.options.slidesToShow, !s.options.infinite && s.currentSlide > o && (s.currentSlide = o), s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0), t = s.currentSlide, s.destroy(!0), i.extend(s, s.initials, {
         currentSlide: t
      }), s.init(), e || s.changeSlide({
         data: {
            message: "index",
            index: t
         }
      }, !1)
   }, e.prototype.registerBreakpoints = function () {
      var e, t, o, s = this,
         n = s.options.responsive || null;
      if ("array" === i.type(n) && n.length) {
         s.respondTo = s.options.respondTo || "window";
         for (e in n)
            if (o = s.breakpoints.length - 1, n.hasOwnProperty(e)) {
               for (t = n[e].breakpoint; o >= 0;) s.breakpoints[o] && s.breakpoints[o] === t && s.breakpoints.splice(o, 1), o--;
               s.breakpoints.push(t), s.breakpointSettings[t] = n[e].settings
            } s.breakpoints.sort(function (i, e) {
            return s.options.mobileFirst ? i - e : e - i
         })
      }
   }, e.prototype.reinit = function () {
      var e = this;
      e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide"), e.slideCount = e.$slides.length, e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll), e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0), e.registerBreakpoints(), e.setProps(), e.setupInfinite(), e.buildArrows(), e.updateArrows(), e.initArrowEvents(), e.buildDots(), e.updateDots(), e.initDotEvents(), e.cleanUpSlideEvents(), e.initSlideEvents(), e.checkResponsive(!1, !0), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), e.setPosition(), e.focusHandler(), e.paused = !e.options.autoplay, e.autoPlay(), e.$slider.trigger("reInit", [e])
   }, e.prototype.resize = function () {
      var e = this;
      i(window).width() !== e.windowWidth && (clearTimeout(e.windowDelay), e.windowDelay = window.setTimeout(function () {
         e.windowWidth = i(window).width(), e.checkResponsive(), e.unslicked || e.setPosition()
      }, 50))
   }, e.prototype.removeSlide = e.prototype.slickRemove = function (i, e, t) {
      var o = this;
      if (i = "boolean" == typeof i ? !0 === (e = i) ? 0 : o.slideCount - 1 : !0 === e ? --i : i, o.slideCount < 1 || i < 0 || i > o.slideCount - 1) return !1;
      o.unload(), !0 === t ? o.$slideTrack.children().remove() : o.$slideTrack.children(this.options.slide).eq(i).remove(), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slidesCache = o.$slides, o.reinit()
   }, e.prototype.setCSS = function (i) {
      var e, t, o = this,
         s = {};
      !0 === o.options.rtl && (i = -i), e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px", t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px", s[o.positionProp] = i, !1 === o.transformsEnabled ? o.$slideTrack.css(s) : (s = {}, !1 === o.cssTransitions ? (s[o.animType] = "translate(" + e + ", " + t + ")", o.$slideTrack.css(s)) : (s[o.animType] = "translate3d(" + e + ", " + t + ", 0px)", o.$slideTrack.css(s)))
   }, e.prototype.setDimensions = function () {
      var i = this;
      !1 === i.options.vertical ? !0 === i.options.centerMode && i.$list.css({
         padding: "0px " + i.options.centerPadding
      }) : (i.$list.height(i.$slides.first().outerHeight(!0) * i.options.slidesToShow), !0 === i.options.centerMode && i.$list.css({
         padding: i.options.centerPadding + " 0px"
      })), i.listWidth = i.$list.width(), i.listHeight = i.$list.height(), !1 === i.options.vertical && !1 === i.options.variableWidth ? (i.slideWidth = Math.ceil(i.listWidth / i.options.slidesToShow), i.$slideTrack.width(Math.ceil(i.slideWidth * i.$slideTrack.children(".slick-slide").length))) : !0 === i.options.variableWidth ? i.$slideTrack.width(5e3 * i.slideCount) : (i.slideWidth = Math.ceil(i.listWidth), i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0) * i.$slideTrack.children(".slick-slide").length)));
      var e = i.$slides.first().outerWidth(!0) - i.$slides.first().width();
      !1 === i.options.variableWidth && i.$slideTrack.children(".slick-slide").width(i.slideWidth - e)
   }, e.prototype.setFade = function () {
      var e, t = this;
      t.$slides.each(function (o, s) {
         e = t.slideWidth * o * -1, !0 === t.options.rtl ? i(s).css({
            position: "relative",
            right: e,
            top: 0,
            zIndex: t.options.zIndex - 2,
            opacity: 0
         }) : i(s).css({
            position: "relative",
            left: e,
            top: 0,
            zIndex: t.options.zIndex - 2,
            opacity: 0
         })
      }), t.$slides.eq(t.currentSlide).css({
         zIndex: t.options.zIndex - 1,
         opacity: 1
      })
   }, e.prototype.setHeight = function () {
      var i = this;
      if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
         var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
         i.$list.css("height", e)
      }
   }, e.prototype.setOption = e.prototype.slickSetOption = function () {
      var e, t, o, s, n, r = this,
         l = !1;
      if ("object" === i.type(arguments[0]) ? (o = arguments[0], l = arguments[1], n = "multiple") : "string" === i.type(arguments[0]) && (o = arguments[0], s = arguments[1], l = arguments[2], "responsive" === arguments[0] && "array" === i.type(arguments[1]) ? n = "responsive" : void 0 !== arguments[1] && (n = "single")), "single" === n) r.options[o] = s;
      else if ("multiple" === n) i.each(o, function (i, e) {
         r.options[i] = e
      });
      else if ("responsive" === n)
         for (t in s)
            if ("array" !== i.type(r.options.responsive)) r.options.responsive = [s[t]];
            else {
               for (e = r.options.responsive.length - 1; e >= 0;) r.options.responsive[e].breakpoint === s[t].breakpoint && r.options.responsive.splice(e, 1), e--;
               r.options.responsive.push(s[t])
            } l && (r.unload(), r.reinit())
   }, e.prototype.setPosition = function () {
      var i = this;
      i.setDimensions(), i.setHeight(), !1 === i.options.fade ? i.setCSS(i.getLeft(i.currentSlide)) : i.setFade(), i.$slider.trigger("setPosition", [i])
   }, e.prototype.setProps = function () {
      var i = this,
         e = document.body.style;
      i.positionProp = !0 === i.options.vertical ? "top" : "left", "top" === i.positionProp ? i.$slider.addClass("slick-vertical") : i.$slider.removeClass("slick-vertical"), void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition || !0 === i.options.useCSS && (i.cssTransitions = !0), i.options.fade && ("number" == typeof i.options.zIndex ? i.options.zIndex < 3 && (i.options.zIndex = 3) : i.options.zIndex = i.defaults.zIndex), void 0 !== e.OTransform && (i.animType = "OTransform", i.transformType = "-o-transform", i.transitionType = "OTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.MozTransform && (i.animType = "MozTransform", i.transformType = "-moz-transform", i.transitionType = "MozTransition", void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (i.animType = !1)), void 0 !== e.webkitTransform && (i.animType = "webkitTransform", i.transformType = "-webkit-transform", i.transitionType = "webkitTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.msTransform && (i.animType = "msTransform", i.transformType = "-ms-transform", i.transitionType = "msTransition", void 0 === e.msTransform && (i.animType = !1)), void 0 !== e.transform && !1 !== i.animType && (i.animType = "transform", i.transformType = "transform", i.transitionType = "transition"), i.transformsEnabled = i.options.useTransform && null !== i.animType && !1 !== i.animType
   }, e.prototype.setSlideClasses = function (i) {
      var e, t, o, s, n = this;
      if (t = n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), n.$slides.eq(i).addClass("slick-current"), !0 === n.options.centerMode) {
         var r = n.options.slidesToShow % 2 == 0 ? 1 : 0;
         e = Math.floor(n.options.slidesToShow / 2), !0 === n.options.infinite && (i >= e && i <= n.slideCount - 1 - e ? n.$slides.slice(i - e + r, i + e + 1).addClass("slick-active").attr("aria-hidden", "false") : (o = n.options.slidesToShow + i, t.slice(o - e + 1 + r, o + e + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === i ? t.eq(t.length - 1 - n.options.slidesToShow).addClass("slick-center") : i === n.slideCount - 1 && t.eq(n.options.slidesToShow).addClass("slick-center")), n.$slides.eq(i).addClass("slick-center")
      } else i >= 0 && i <= n.slideCount - n.options.slidesToShow ? n.$slides.slice(i, i + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : t.length <= n.options.slidesToShow ? t.addClass("slick-active").attr("aria-hidden", "false") : (s = n.slideCount % n.options.slidesToShow, o = !0 === n.options.infinite ? n.options.slidesToShow + i : i, n.options.slidesToShow == n.options.slidesToScroll && n.slideCount - i < n.options.slidesToShow ? t.slice(o - (n.options.slidesToShow - s), o + s).addClass("slick-active").attr("aria-hidden", "false") : t.slice(o, o + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
      "ondemand" !== n.options.lazyLoad && "anticipated" !== n.options.lazyLoad || n.lazyLoad()
   }, e.prototype.setupInfinite = function () {
      var e, t, o, s = this;
      if (!0 === s.options.fade && (s.options.centerMode = !1), !0 === s.options.infinite && !1 === s.options.fade && (t = null, s.slideCount > s.options.slidesToShow)) {
         for (o = !0 === s.options.centerMode ? s.options.slidesToShow + 1 : s.options.slidesToShow, e = s.slideCount; e > s.slideCount - o; e -= 1) t = e - 1, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t - s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");
         for (e = 0; e < o + s.slideCount; e += 1) t = e, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t + s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");
         s.$slideTrack.find(".slick-cloned").find("[id]").each(function () {
            i(this).attr("id", "")
         })
      }
   }, e.prototype.interrupt = function (i) {
      var e = this;
      i || e.autoPlay(), e.interrupted = i
   }, e.prototype.selectHandler = function (e) {
      var t = this,
         o = i(e.target).is(".slick-slide") ? i(e.target) : i(e.target).parents(".slick-slide"),
         s = parseInt(o.attr("data-slick-index"));
      s || (s = 0), t.slideCount <= t.options.slidesToShow ? t.slideHandler(s, !1, !0) : t.slideHandler(s)
   }, e.prototype.slideHandler = function (i, e, t) {
      var o, s, n, r, l, d = null,
         a = this;
      if (e = e || !1, !(!0 === a.animating && !0 === a.options.waitForAnimate || !0 === a.options.fade && a.currentSlide === i))
         if (!1 === e && a.asNavFor(i), o = i, d = a.getLeft(o), r = a.getLeft(a.currentSlide), a.currentLeft = null === a.swipeLeft ? r : a.swipeLeft, !1 === a.options.infinite && !1 === a.options.centerMode && (i < 0 || i > a.getDotCount() * a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function () {
            a.postSlide(o)
         }) : a.postSlide(o));
         else if (!1 === a.options.infinite && !0 === a.options.centerMode && (i < 0 || i > a.slideCount - a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function () {
         a.postSlide(o)
      }) : a.postSlide(o));
      else {
         if (a.options.autoplay && clearInterval(a.autoPlayTimer), s = o < 0 ? a.slideCount % a.options.slidesToScroll != 0 ? a.slideCount - a.slideCount % a.options.slidesToScroll : a.slideCount + o : o >= a.slideCount ? a.slideCount % a.options.slidesToScroll != 0 ? 0 : o - a.slideCount : o, a.animating = !0, a.$slider.trigger("beforeChange", [a, a.currentSlide, s]), n = a.currentSlide, a.currentSlide = s, a.setSlideClasses(a.currentSlide), a.options.asNavFor && (l = (l = a.getNavTarget()).slick("getSlick")).slideCount <= l.options.slidesToShow && l.setSlideClasses(a.currentSlide), a.updateDots(), a.updateArrows(), !0 === a.options.fade) return !0 !== t ? (a.fadeSlideOut(n), a.fadeSlide(s, function () {
            a.postSlide(s)
         })) : a.postSlide(s), void a.animateHeight();
         !0 !== t ? a.animateSlide(d, function () {
            a.postSlide(s)
         }) : a.postSlide(s)
      }
   }, e.prototype.startLoad = function () {
      var i = this;
      !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.hide(), i.$nextArrow.hide()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.hide(), i.$slider.addClass("slick-loading")
   }, e.prototype.swipeDirection = function () {
      var i, e, t, o, s = this;
      return i = s.touchObject.startX - s.touchObject.curX, e = s.touchObject.startY - s.touchObject.curY, t = Math.atan2(e, i), (o = Math.round(180 * t / Math.PI)) < 0 && (o = 360 - Math.abs(o)), o <= 45 && o >= 0 ? !1 === s.options.rtl ? "left" : "right" : o <= 360 && o >= 315 ? !1 === s.options.rtl ? "left" : "right" : o >= 135 && o <= 225 ? !1 === s.options.rtl ? "right" : "left" : !0 === s.options.verticalSwiping ? o >= 35 && o <= 135 ? "down" : "up" : "vertical"
   }, e.prototype.swipeEnd = function (i) {
      var e, t, o = this;
      if (o.dragging = !1, o.swiping = !1, o.scrolling) return o.scrolling = !1, !1;
      if (o.interrupted = !1, o.shouldClick = !(o.touchObject.swipeLength > 10), void 0 === o.touchObject.curX) return !1;
      if (!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe) {
         switch (t = o.swipeDirection()) {
            case "left":
            case "down":
               e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount(), o.currentDirection = 0;
               break;
            case "right":
            case "up":
               e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount(), o.currentDirection = 1
         }
         "vertical" != t && (o.slideHandler(e), o.touchObject = {}, o.$slider.trigger("swipe", [o, t]))
      } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), o.touchObject = {})
   }, e.prototype.swipeHandler = function (i) {
      var e = this;
      if (!(!1 === e.options.swipe || "ontouchend" in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))) switch (e.touchObject.fingerCount = i.originalEvent && void 0 !== i.originalEvent.touches ? i.originalEvent.touches.length : 1, e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold, !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold), i.data.action) {
         case "start":
            e.swipeStart(i);
            break;
         case "move":
            e.swipeMove(i);
            break;
         case "end":
            e.swipeEnd(i)
      }
   }, e.prototype.swipeMove = function (i) {
      var e, t, o, s, n, r, l = this;
      return n = void 0 !== i.originalEvent ? i.originalEvent.touches : null, !(!l.dragging || l.scrolling || n && 1 !== n.length) && (e = l.getLeft(l.currentSlide), l.touchObject.curX = void 0 !== n ? n[0].pageX : i.clientX, l.touchObject.curY = void 0 !== n ? n[0].pageY : i.clientY, l.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(l.touchObject.curX - l.touchObject.startX, 2))), r = Math.round(Math.sqrt(Math.pow(l.touchObject.curY - l.touchObject.startY, 2))), !l.options.verticalSwiping && !l.swiping && r > 4 ? (l.scrolling = !0, !1) : (!0 === l.options.verticalSwiping && (l.touchObject.swipeLength = r), t = l.swipeDirection(), void 0 !== i.originalEvent && l.touchObject.swipeLength > 4 && (l.swiping = !0, i.preventDefault()), s = (!1 === l.options.rtl ? 1 : -1) * (l.touchObject.curX > l.touchObject.startX ? 1 : -1), !0 === l.options.verticalSwiping && (s = l.touchObject.curY > l.touchObject.startY ? 1 : -1), o = l.touchObject.swipeLength, l.touchObject.edgeHit = !1, !1 === l.options.infinite && (0 === l.currentSlide && "right" === t || l.currentSlide >= l.getDotCount() && "left" === t) && (o = l.touchObject.swipeLength * l.options.edgeFriction, l.touchObject.edgeHit = !0), !1 === l.options.vertical ? l.swipeLeft = e + o * s : l.swipeLeft = e + o * (l.$list.height() / l.listWidth) * s, !0 === l.options.verticalSwiping && (l.swipeLeft = e + o * s), !0 !== l.options.fade && !1 !== l.options.touchMove && (!0 === l.animating ? (l.swipeLeft = null, !1) : void l.setCSS(l.swipeLeft))))
   }, e.prototype.swipeStart = function (i) {
      var e, t = this;
      if (t.interrupted = !0, 1 !== t.touchObject.fingerCount || t.slideCount <= t.options.slidesToShow) return t.touchObject = {}, !1;
      void 0 !== i.originalEvent && void 0 !== i.originalEvent.touches && (e = i.originalEvent.touches[0]), t.touchObject.startX = t.touchObject.curX = void 0 !== e ? e.pageX : i.clientX, t.touchObject.startY = t.touchObject.curY = void 0 !== e ? e.pageY : i.clientY, t.dragging = !0
   }, e.prototype.unfilterSlides = e.prototype.slickUnfilter = function () {
      var i = this;
      null !== i.$slidesCache && (i.unload(), i.$slideTrack.children(this.options.slide).detach(), i.$slidesCache.appendTo(i.$slideTrack), i.reinit())
   }, e.prototype.unload = function () {
      var e = this;
      i(".slick-cloned", e.$slider).remove(), e.$dots && e.$dots.remove(), e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(), e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(), e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
   }, e.prototype.unslick = function (i) {
      var e = this;
      e.$slider.trigger("unslick", [e, i]), e.destroy()
   }, e.prototype.updateArrows = function () {
      var i = this;
      Math.floor(i.options.slidesToShow / 2), !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && !i.options.infinite && (i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === i.currentSlide ? (i.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - i.options.slidesToShow && !1 === i.options.centerMode ? (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - 1 && !0 === i.options.centerMode && (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
   }, e.prototype.updateDots = function () {
      var i = this;
      null !== i.$dots && (i.$dots.find("li").removeClass("slick-active").end(), i.$dots.find("li").eq(Math.floor(i.currentSlide / i.options.slidesToScroll)).addClass("slick-active"))
   }, e.prototype.visibility = function () {
      var i = this;
      i.options.autoplay && (document[i.hidden] ? i.interrupted = !0 : i.interrupted = !1)
   }, i.fn.slick = function () {
      var i, t, o = this,
         s = arguments[0],
         n = Array.prototype.slice.call(arguments, 1),
         r = o.length;
      for (i = 0; i < r; i++)
         if ("object" == typeof s || void 0 === s ? o[i].slick = new e(o[i], s) : t = o[i].slick[s].apply(o[i].slick, n), void 0 !== t) return t;
      return o
   }
});
(function () {
   var a, b, c, d, e, f = function (a, b) {
         return function () {
            return a.apply(b, arguments)
         }
      },
      g = [].indexOf || function (a) {
         for (var b = 0, c = this.length; c > b; b++)
            if (b in this && this[b] === a) return b;
         return -1
      };
   b = function () {
      function a() {}
      return a.prototype.extend = function (a, b) {
         var c, d;
         for (c in b) d = b[c], null == a[c] && (a[c] = d);
         return a
      }, a.prototype.isMobile = function (a) {
         return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
      }, a.prototype.createEvent = function (a, b, c, d) {
         var e;
         return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e
      }, a.prototype.emitEvent = function (a, b) {
         return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0
      }, a.prototype.addEvent = function (a, b, c) {
         return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c
      }, a.prototype.removeEvent = function (a, b, c) {
         return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b]
      }, a.prototype.innerHeight = function () {
         return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight
      }, a
   }(), c = this.WeakMap || this.MozWeakMap || (c = function () {
      function a() {
         this.keys = [], this.values = []
      }
      return a.prototype.get = function (a) {
         var b, d, e, f;
         for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)
            if (f[b] === a) return this.values[b]
      }, a.prototype.set = function (a, b) {
         var c, e, f, g;
         for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)
            if (g[c] === a) return void(this.values[c] = b);
         return this.keys.push(a), this.values.push(b)
      }, a
   }()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () {
      function a() {
         "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")
      }
      return a.notSupported = !0, a.prototype.observe = function () {}, a
   }()), d = this.getComputedStyle || function (a) {
      return this.getPropertyValue = function (b) {
         var c;
         return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) {
            return b.toUpperCase()
         }), (null != (c = a.currentStyle) ? c[b] : void 0) || null
      }, this
   }, e = /(\-([a-z]){1})/g, this.WOW = function () {
      function e(a) {
         null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)), this.animationNameCache = new c, this.wowEvent = this.util().createEvent(this.config.boxClass)
      }
      return e.prototype.defaults = {
         boxClass: "wow",
         animateClass: "animated",
         offset: 0,
         mobile: !0,
         live: !0,
         callback: null,
         scrollContainer: null
      }, e.prototype.init = function () {
         var a;
         return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = []
      }, e.prototype.start = function () {
         var b, c, d, e;
         if (this.stopped = !1, this.boxes = function () {
               var a, c, d, e;
               for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
               return e
            }.call(this), this.all = function () {
               var a, c, d, e;
               for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
               return e
            }.call(this), this.boxes.length)
            if (this.disabled()) this.resetStyle();
            else
               for (e = this.boxes, c = 0, d = e.length; d > c; c++) b = e[c], this.applyStyle(b, !0);
         return this.disabled() || (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function (a) {
            return function (b) {
               var c, d, e, f, g;
               for (g = [], c = 0, d = b.length; d > c; c++) f = b[c], g.push(function () {
                  var a, b, c, d;
                  for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++) e = c[a], d.push(this.doSync(e));
                  return d
               }.call(a));
               return g
            }
         }(this)).observe(document.body, {
            childList: !0,
            subtree: !0
         }) : void 0
      }, e.prototype.stop = function () {
         return this.stopped = !0, this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0
      }, e.prototype.sync = function () {
         return a.notSupported ? this.doSync(this.element) : void 0
      }, e.prototype.doSync = function (a) {
         var b, c, d, e, f;
         if (null == a && (a = this.element), 1 === a.nodeType) {
            for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++) b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
            return f
         }
      }, e.prototype.show = function (a) {
         return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a
      }, e.prototype.applyStyle = function (a, b) {
         var c, d, e;
         return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) {
            return function () {
               return f.customStyle(a, b, d, c, e)
            }
         }(this))
      }, e.prototype.animate = function () {
         return "requestAnimationFrame" in window ? function (a) {
            return window.requestAnimationFrame(a)
         } : function (a) {
            return a()
         }
      }(), e.prototype.resetStyle = function () {
         var a, b, c, d, e;
         for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) a = d[b], e.push(a.style.visibility = "visible");
         return e
      }, e.prototype.resetAnimation = function (a) {
         var b;
         return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0
      }, e.prototype.customStyle = function (a, b, c, d, e) {
         return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {
            animationDuration: c
         }), d && this.vendorSet(a.style, {
            animationDelay: d
         }), e && this.vendorSet(a.style, {
            animationIterationCount: e
         }), this.vendorSet(a.style, {
            animationName: b ? "none" : this.cachedAnimationName(a)
         }), a
      }, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) {
         var c, d, e, f;
         d = [];
         for (c in b) e = b[c], a["" + c] = e, d.push(function () {
            var b, d, g, h;
            for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++) f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e);
            return h
         }.call(this));
         return d
      }, e.prototype.vendorCSS = function (a, b) {
         var c, e, f, g, h, i;
         for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++) i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b);
         return g
      }, e.prototype.animationName = function (a) {
         var b;
         try {
            b = this.vendorCSS(a, "animation-name").cssText
         } catch (c) {
            b = d(a).getPropertyValue("animation-name")
         }
         return "none" === b ? "" : b
      }, e.prototype.cacheAnimationName = function (a) {
         return this.animationNameCache.set(a, this.animationName(a))
      }, e.prototype.cachedAnimationName = function (a) {
         return this.animationNameCache.get(a)
      }, e.prototype.scrollHandler = function () {
         return this.scrolled = !0
      }, e.prototype.scrollCallback = function () {
         var a;
         return !this.scrolled || (this.scrolled = !1, this.boxes = function () {
            var b, c, d, e;
            for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)(a = d[b]) && (this.isVisible(a) ? this.show(a) : e.push(a));
            return e
         }.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop()
      }, e.prototype.offsetTop = function (a) {
         for (var b; void 0 === a.offsetTop;) a = a.parentNode;
         for (b = a.offsetTop; a = a.offsetParent;) b += a.offsetTop;
         return b
      }, e.prototype.isVisible = function (a) {
         var b, c, d, e, f;
         return c = a.getAttribute("data-wow-offset") || this.config.offset, f = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f
      }, e.prototype.util = function () {
         return null != this._util ? this._util : this._util = new b
      }, e.prototype.disabled = function () {
         return !this.config.mobile && this.util().isMobile(navigator.userAgent)
      }, e
   }()
}).call(this);

function _extends() {
   return (_extends = Object.assign || function (t) {
      for (var e = 1; e < arguments.length; e++) {
         var n = arguments[e];
         for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o])
      }
      return t
   }).apply(this, arguments)
}

function _typeof(t) {
   return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
      return typeof t
   } : function (t) {
      return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
   })(t)
}! function (t, e) {
   "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e()
}(this, function () {
   "use strict";
   var t = "undefined" != typeof window,
      e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
      n = t && "IntersectionObserver" in window,
      o = t && "classList" in document.createElement("p"),
      r = {
         elements_selector: "img",
         container: e || t ? document : null,
         threshold: 300,
         thresholds: null,
         data_src: "src",
         data_srcset: "srcset",
         data_sizes: "sizes",
         data_bg: "bg",
         class_loading: "loading",
         class_loaded: "loaded",
         class_error: "error",
         load_delay: 0,
         auto_unobserve: !0,
         callback_enter: null,
         callback_exit: null,
         callback_reveal: null,
         callback_loaded: null,
         callback_error: null,
         callback_finish: null
      },
      a = function (t, e) {
         return t.getAttribute("data-" + e)
      },
      s = function (t, e, n) {
         var o = "data-" + e;
         null !== n ? t.setAttribute(o, n) : t.removeAttribute(o)
      },
      i = function (t) {
         return "true" === a(t, "was-processed")
      },
      c = function (t, e) {
         return s(t, "ll-timeout", e)
      },
      l = function (t) {
         return a(t, "ll-timeout")
      },
      u = function (t, e) {
         var n, o = new t(e);
         try {
            n = new CustomEvent("LazyLoad::Initialized", {
               detail: {
                  instance: o
               }
            })
         } catch (t) {
            (n = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, {
               instance: o
            })
         }
         window.dispatchEvent(n)
      };
   var d = function (t, e) {
         t && t(e)
      },
      f = function (t, e) {
         t._loadingCount += e, 0 === t._elements.length && 0 === t._loadingCount && d(t._settings.callback_finish)
      },
      _ = function (t) {
         for (var e, n = [], o = 0; e = t.children[o]; o += 1) "SOURCE" === e.tagName && n.push(e);
         return n
      },
      v = function (t, e, n) {
         n && t.setAttribute(e, n)
      },
      b = function (t, e) {
         v(t, "sizes", a(t, e.data_sizes)), v(t, "srcset", a(t, e.data_srcset)), v(t, "src", a(t, e.data_src))
      },
      g = {
         IMG: function (t, e) {
            var n = t.parentNode;
            n && "PICTURE" === n.tagName && _(n).forEach(function (t) {
               b(t, e)
            });
            b(t, e)
         },
         IFRAME: function (t, e) {
            v(t, "src", a(t, e.data_src))
         },
         VIDEO: function (t, e) {
            _(t).forEach(function (t) {
               v(t, "src", a(t, e.data_src))
            }), v(t, "src", a(t, e.data_src)), t.load()
         }
      },
      m = function (t, e) {
         var n, o, r = e._settings,
            s = t.tagName,
            i = g[s];
         if (i) return i(t, r), f(e, 1), void(e._elements = (n = e._elements, o = t, n.filter(function (t) {
            return t !== o
         })));
         ! function (t, e) {
            var n = a(t, e.data_src),
               o = a(t, e.data_bg);
            n && (t.style.backgroundImage = 'url("'.concat(n, '")')), o && (t.style.backgroundImage = o)
         }(t, r)
      },
      h = function (t, e) {
         o ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
      },
      p = function (t, e, n) {
         t.addEventListener(e, n)
      },
      y = function (t, e, n) {
         t.removeEventListener(e, n)
      },
      E = function (t, e, n) {
         y(t, "load", e), y(t, "loadeddata", e), y(t, "error", n)
      },
      w = function (t, e, n) {
         var r = n._settings,
            a = e ? r.class_loaded : r.class_error,
            s = e ? r.callback_loaded : r.callback_error,
            i = t.target;
         ! function (t, e) {
            o ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
         }(i, r.class_loading), h(i, a), d(s, i), f(n, -1)
      },
      k = function (t, e) {
         var n = function n(r) {
               w(r, !0, e), E(t, n, o)
            },
            o = function o(r) {
               w(r, !1, e), E(t, n, o)
            };
         ! function (t, e, n) {
            p(t, "load", e), p(t, "loadeddata", e), p(t, "error", n)
         }(t, n, o)
      },
      I = ["IMG", "IFRAME", "VIDEO"],
      L = function (t, e) {
         var n = e._observer;
         z(t, e), n && e._settings.auto_unobserve && n.unobserve(t)
      },
      x = function (t) {
         var e = l(t);
         e && (clearTimeout(e), c(t, null))
      },
      A = function (t, e) {
         var n = e._settings.load_delay,
            o = l(t);
         o || (o = setTimeout(function () {
            L(t, e), x(t)
         }, n), c(t, o))
      },
      z = function (t, e, n) {
         var o = e._settings;
         !n && i(t) || (I.indexOf(t.tagName) > -1 && (k(t, e), h(t, o.class_loading)), m(t, e), function (t) {
            s(t, "was-processed", "true")
         }(t), d(o.callback_reveal, t), d(o.callback_set, t))
      },
      O = function (t) {
         return !!n && (t._observer = new IntersectionObserver(function (e) {
            e.forEach(function (e) {
               return function (t) {
                  return t.isIntersecting || t.intersectionRatio > 0
               }(e) ? function (t, e) {
                  var n = e._settings;
                  d(n.callback_enter, t), n.load_delay ? A(t, e) : L(t, e)
               }(e.target, t) : function (t, e) {
                  var n = e._settings;
                  d(n.callback_exit, t), n.load_delay && x(t)
               }(e.target, t)
            })
         }, {
            root: (e = t._settings).container === document ? null : e.container,
            rootMargin: e.thresholds || e.threshold + "px"
         }), !0);
         var e
      },
      N = function (t, e) {
         this._settings = function (t) {
            return _extends({}, r, t)
         }(t), this._loadingCount = 0, O(this), this.update(e)
      };
   return N.prototype = {
      update: function (t) {
         var n = this,
            o = this._settings,
            r = t || o.container.querySelectorAll(o.elements_selector);
         this._elements = function (t) {
            return t.filter(function (t) {
               return !i(t)
            })
         }(Array.prototype.slice.call(r)), !e && this._observer ? this._elements.forEach(function (t) {
            n._observer.observe(t)
         }) : this.loadAll()
      },
      destroy: function () {
         var t = this;
         this._observer && (this._elements.forEach(function (e) {
            t._observer.unobserve(e)
         }), this._observer = null), this._elements = null, this._settings = null
      },
      load: function (t, e) {
         z(t, this, e)
      },
      loadAll: function () {
         var t = this;
         this._elements.forEach(function (e) {
            L(e, t)
         })
      }
   }, t && function (t, e) {
      if (e)
         if (e.length)
            for (var n, o = 0; n = e[o]; o += 1) u(t, n);
         else u(t, e)
   }(N, window.lazyLoadOptions), N
});
! function (e) {
   var t = {};

   function n(i) {
      if (t[i]) return t[i].exports;
      var s = t[i] = {
         i: i,
         l: !1,
         exports: {}
      };
      return e[i].call(s.exports, s, s.exports, n), s.l = !0, s.exports
   }
   n.m = e, n.c = t, n.d = function (e, t, i) {
      n.o(e, t) || Object.defineProperty(e, t, {
         enumerable: !0,
         get: i
      })
   }, n.r = function (e) {
      "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
         value: "Module"
      }), Object.defineProperty(e, "__esModule", {
         value: !0
      })
   }, n.t = function (e, t) {
      if (1 & t && (e = n(e)), 8 & t) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var i = Object.create(null);
      if (n.r(i), Object.defineProperty(i, "default", {
            enumerable: !0,
            value: e
         }), 2 & t && "string" != typeof e)
         for (var s in e) n.d(i, s, function (t) {
            return e[t]
         }.bind(null, s));
      return i
   }, n.n = function (e) {
      var t = e && e.__esModule ? function () {
         return e.default
      } : function () {
         return e
      };
      return n.d(t, "a", t), t
   }, n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t)
   }, n.p = "", n(n.s = 1)
}([function (e) {
   e.exports = JSON.parse('{"a":"8.5.20"}')
}, function (e, t, n) {
   "use strict";
   n.r(t);
   var i = n(0),
      s = {
         hooks: {},
         extensions: [],
         wrappers: [],
         navbar: {
            add: !0,
            sticky: !0,
            title: "Menu",
            titleLink: "parent"
         },
         onClick: {
            close: null,
            preventDefault: null,
            setSelected: !0
         },
         slidingSubmenus: !0
      },
      a = {
         classNames: {
            inset: "Inset",
            nolistview: "NoListview",
            nopanel: "NoPanel",
            panel: "Panel",
            selected: "Selected",
            vertical: "Vertical"
         },
         language: null,
         openingInterval: 25,
         panelNodetype: ["ul", "ol", "div"],
         transitionDuration: 400
      };

   function o(e, t) {
      for (var n in "object" != r(e) && (e = {}), "object" != r(t) && (t = {}), t) t.hasOwnProperty(n) && (void 0 === e[n] ? e[n] = t[n] : "object" == r(e[n]) && o(e[n], t[n]));
      return e
   }

   function r(e) {
      return {}.toString.call(e).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
   }

   function c(e, t, n) {
      if ("function" == typeof t) {
         var i = t.call(e);
         if (void 0 !== i) return i
      }
      return null !== t && "function" != typeof t && void 0 !== t || void 0 === n ? t : n
   }

   function m(e, t, n) {
      var i = !1,
         s = function (n) {
            void 0 !== n && n.target !== e || (i || (e.removeEventListener("transitionend", s), e.removeEventListener("webkitTransitionEnd", s), t.call(e)), i = !0)
         };
      e.addEventListener("transitionend", s), e.addEventListener("webkitTransitionEnd", s), setTimeout(s, 1.1 * n)
   }

   function l() {
      return "mm-" + d++
   }
   var d = 0;

   function p(e) {
      return "mm-" == e.slice(0, 3) ? e.slice(3) : e
   }
   var u = {};

   function f(e, t) {
      void 0 === u[t] && (u[t] = {}), o(u[t], e)
   }
   var h = {
         Menu: "Ù…Ù†Ùˆ"
      },
      v = {
         Menu: "MenĂ¼"
      },
      b = {
         Menu: "ĐœĐµĐ½Ñ"
      };

   function g(e) {
      var t = e.split("."),
         n = document.createElement(t.shift());
      return t.forEach((function (e) {
         n.classList.add(e)
      })), n
   }

   function _(e, t) {
      return Array.prototype.slice.call(e.querySelectorAll(t))
   }

   function y(e, t) {
      var n = Array.prototype.slice.call(e.children);
      return t ? n.filter((function (e) {
         return e.matches(t)
      })) : n
   }

   function L(e, t) {
      for (var n = [], i = e.parentElement; i;) n.push(i), i = i.parentElement;
      return t ? n.filter((function (e) {
         return e.matches(t)
      })) : n
   }

   function w(e) {
      return e.filter((function (e) {
         return !e.matches(".mm-hidden")
      }))
   }

   function E(e) {
      var t = [];
      return w(e).forEach((function (e) {
         t.push.apply(t, y(e, "a.mm-listitem__text"))
      })), t.filter((function (e) {
         return !e.matches(".mm-btn_next")
      }))
   }

   function x(e, t, n) {
      e.matches("." + t) && (e.classList.remove(t), e.classList.add(n))
   }
   var P = {};

   function k(e, t, n) {
      "number" == typeof e && (e = "(min-width: " + e + "px)"), P[e] = P[e] || [], P[e].push({
         yes: t,
         no: n
      })
   }

   function S(e, t) {
      for (var n = t.matches ? "yes" : "no", i = 0; i < P[e].length; i++) P[e][i][n]()
   }
   f({
      Menu: "Menu"
   }, "nl"), f(h, "fa"), f(v, "de"), f(b, "ru");
   var M = function () {
         function e(t, n, i) {
            return this.opts = o(n, e.options), this.conf = o(i, e.configs), this._api = ["bind", "initPanel", "initListview", "openPanel", "closePanel", "closeAllPanels", "setSelected"], this.node = {}, this.vars = {}, this.hook = {}, this.clck = [], this.node.menu = "string" == typeof t ? document.querySelector(t) : t, "function" == typeof this._deprecatedWarnings && this._deprecatedWarnings(), this._initWrappers(), this._initAddons(), this._initExtensions(), this._initHooks(), this._initAPI(), this._initMenu(), this._initPanels(), this._initOpened(), this._initAnchors(),
               function () {
                  var e = function (e) {
                     var t = window.matchMedia(e);
                     S(e, t), t.onchange = function (n) {
                        S(e, t)
                     }
                  };
                  for (var t in P) e(t)
               }(), this
         }
         return e.prototype.openPanel = function (e, t) {
            var n = this;
            if (this.trigger("openPanel:before", [e]), e && (e.matches(".mm-panel") || (e = e.closest(".mm-panel")), e)) {
               if ("boolean" != typeof t && (t = !0), e.parentElement.matches(".mm-listitem_vertical")) {
                  L(e, ".mm-listitem_vertical").forEach((function (e) {
                     e.classList.add("mm-listitem_opened"), y(e, ".mm-panel").forEach((function (e) {
                        e.classList.remove("mm-hidden")
                     }))
                  }));
                  var i = L(e, ".mm-panel").filter((function (e) {
                     return !e.parentElement.matches(".mm-listitem_vertical")
                  }));
                  this.trigger("openPanel:start", [e]), i.length && this.openPanel(i[0]), this.trigger("openPanel:finish", [e])
               } else {
                  if (e.matches(".mm-panel_opened")) return;
                  var s = y(this.node.pnls, ".mm-panel"),
                     a = y(this.node.pnls, ".mm-panel_opened")[0];
                  s.filter((function (t) {
                     return t !== e
                  })).forEach((function (e) {
                     e.classList.remove("mm-panel_opened-parent")
                  }));
                  for (var o = e.mmParent; o;)(o = o.closest(".mm-panel")) && (o.parentElement.matches(".mm-listitem_vertical") || o.classList.add("mm-panel_opened-parent"), o = o.mmParent);
                  s.forEach((function (e) {
                     e.classList.remove("mm-panel_highest")
                  })), s.filter((function (e) {
                     return e !== a
                  })).filter((function (t) {
                     return t !== e
                  })).forEach((function (e) {
                     e.classList.add("mm-hidden")
                  })), e.classList.remove("mm-hidden");
                  var r = function () {
                        a && a.classList.remove("mm-panel_opened"), e.classList.add("mm-panel_opened"), e.matches(".mm-panel_opened-parent") ? (a && a.classList.add("mm-panel_highest"), e.classList.remove("mm-panel_opened-parent")) : (a && a.classList.add("mm-panel_opened-parent"), e.classList.add("mm-panel_highest")), n.trigger("openPanel:start", [e])
                     },
                     c = function () {
                        a && (a.classList.remove("mm-panel_highest"), a.classList.add("mm-hidden")), e.classList.remove("mm-panel_highest"), n.trigger("openPanel:finish", [e])
                     };
                  t && !e.matches(".mm-panel_noanimation") ? setTimeout((function () {
                     m(e, (function () {
                        c()
                     }), n.conf.transitionDuration), r()
                  }), this.conf.openingInterval) : (r(), c())
               }
               this.trigger("openPanel:after", [e])
            }
         }, e.prototype.closePanel = function (e) {
            this.trigger("closePanel:before", [e]);
            var t = e.parentElement;
            t.matches(".mm-listitem_vertical") && (t.classList.remove("mm-listitem_opened"), e.classList.add("mm-hidden"), this.trigger("closePanel", [e])), this.trigger("closePanel:after", [e])
         }, e.prototype.closeAllPanels = function (e) {
            this.trigger("closeAllPanels:before"), this.node.pnls.querySelectorAll(".mm-listitem").forEach((function (e) {
               e.classList.remove("mm-listitem_selected"), e.classList.remove("mm-listitem_opened")
            }));
            var t = y(this.node.pnls, ".mm-panel"),
               n = e || t[0];
            y(this.node.pnls, ".mm-panel").forEach((function (e) {
               e !== n && (e.classList.remove("mm-panel_opened"), e.classList.remove("mm-panel_opened-parent"), e.classList.remove("mm-panel_highest"), e.classList.add("mm-hidden"))
            })), this.openPanel(n, !1), this.trigger("closeAllPanels:after")
         }, e.prototype.togglePanel = function (e) {
            var t = e.parentElement;
            t.matches(".mm-listitem_vertical") && this[t.matches(".mm-listitem_opened") ? "closePanel" : "openPanel"](e)
         }, e.prototype.setSelected = function (e) {
            this.trigger("setSelected:before", [e]), _(this.node.menu, ".mm-listitem_selected").forEach((function (e) {
               e.classList.remove("mm-listitem_selected")
            })), e.classList.add("mm-listitem_selected"), this.trigger("setSelected:after", [e])
         }, e.prototype.bind = function (e, t) {
            this.hook[e] = this.hook[e] || [], this.hook[e].push(t)
         }, e.prototype.trigger = function (e, t) {
            if (this.hook[e])
               for (var n = 0, i = this.hook[e].length; n < i; n++) this.hook[e][n].apply(this, t)
         }, e.prototype._initAPI = function () {
            var e = this,
               t = this;
            this.API = {}, this._api.forEach((function (n) {
               e.API[n] = function () {
                  var e = t[n].apply(t, arguments);
                  return void 0 === e ? t.API : e
               }
            })), this.node.menu.mmApi = this.API
         }, e.prototype._initHooks = function () {
            for (var e in this.opts.hooks) this.bind(e, this.opts.hooks[e])
         }, e.prototype._initWrappers = function () {
            this.trigger("initWrappers:before");
            for (var t = 0; t < this.opts.wrappers.length; t++) {
               var n = e.wrappers[this.opts.wrappers[t]];
               "function" == typeof n && n.call(this)
            }
            this.trigger("initWrappers:after")
         }, e.prototype._initAddons = function () {
            for (var t in this.trigger("initAddons:before"), e.addons) e.addons[t].call(this);
            this.trigger("initAddons:after")
         }, e.prototype._initExtensions = function () {
            var e = this;
            this.trigger("initExtensions:before"), "array" == r(this.opts.extensions) && (this.opts.extensions = {
               all: this.opts.extensions
            }), Object.keys(this.opts.extensions).forEach((function (t) {
               var n = e.opts.extensions[t].map((function (e) {
                  return "mm-menu_" + e
               }));
               n.length && k(t, (function () {
                  n.forEach((function (t) {
                     e.node.menu.classList.add(t)
                  }))
               }), (function () {
                  n.forEach((function (t) {
                     e.node.menu.classList.remove(t)
                  }))
               }))
            })), this.trigger("initExtensions:after")
         }, e.prototype._initMenu = function () {
            var e = this;
            this.trigger("initMenu:before"), this.node.wrpr = this.node.wrpr || this.node.menu.parentElement, this.node.wrpr.classList.add("mm-wrapper"), this.node.menu.id = this.node.menu.id || l();
            var t = g("div.mm-panels");
            y(this.node.menu).forEach((function (n) {
               e.conf.panelNodetype.indexOf(n.nodeName.toLowerCase()) > -1 && t.append(n)
            })), this.node.menu.append(t), this.node.pnls = t, this.node.menu.classList.add("mm-menu"), this.trigger("initMenu:after")
         }, e.prototype._initPanels = function () {
            var e = this;
            this.trigger("initPanels:before"), this.clck.push((function (t, n) {
               if (n.inMenu) {
                  var i = t.getAttribute("href");
                  if (i && i.length > 1 && "#" == i.slice(0, 1)) try {
                     var s = _(e.node.menu, i)[0];
                     if (s && s.matches(".mm-panel")) return t.parentElement.matches(".mm-listitem_vertical") ? e.togglePanel(s) : e.openPanel(s), !0
                  } catch (e) {}
               }
            })), y(this.node.pnls).forEach((function (t) {
               e.initPanel(t)
            })), this.trigger("initPanels:after")
         }, e.prototype.initPanel = function (e) {
            var t = this,
               n = this.conf.panelNodetype.join(", ");
            if (e.matches(n) && (e.matches(".mm-panel") || (e = this._initPanel(e)), e)) {
               var i = [];
               i.push.apply(i, y(e, "." + this.conf.classNames.panel)), y(e, ".mm-listview").forEach((function (e) {
                  y(e, ".mm-listitem").forEach((function (e) {
                     i.push.apply(i, y(e, n))
                  }))
               })), i.forEach((function (e) {
                  t.initPanel(e)
               }))
            }
         }, e.prototype._initPanel = function (e) {
            var t = this;
            if (this.trigger("initPanel:before", [e]), x(e, this.conf.classNames.panel, "mm-panel"), x(e, this.conf.classNames.nopanel, "mm-nopanel"), x(e, this.conf.classNames.inset, "mm-listview_inset"), e.matches(".mm-listview_inset") && e.classList.add("mm-nopanel"), e.matches(".mm-nopanel")) return null;
            var n = e.id || l(),
               i = e.matches("." + this.conf.classNames.vertical) || !this.opts.slidingSubmenus;
            if (e.classList.remove(this.conf.classNames.vertical), e.matches("ul, ol")) {
               e.removeAttribute("id");
               var s = g("div");
               e.before(s), s.append(e), e = s
            }
            e.id = n, e.classList.add("mm-panel"), e.classList.add("mm-hidden");
            var a = [e.parentElement].filter((function (e) {
               return e.matches("li")
            }))[0];
            if (i ? a && a.classList.add("mm-listitem_vertical") : this.node.pnls.append(e), a && (a.mmChild = e, e.mmParent = a, a && a.matches(".mm-listitem") && !y(a, ".mm-btn").length)) {
               var o = y(a, ".mm-listitem__text")[0];
               if (o) {
                  var r = g("a.mm-btn.mm-btn_next.mm-listitem__btn");
                  r.setAttribute("href", "#" + e.id), o.matches("span") ? (r.classList.add("mm-listitem__text"), r.innerHTML = o.innerHTML, a.insertBefore(r, o.nextElementSibling), o.remove()) : a.insertBefore(r, y(a, ".mm-panel")[0])
               }
            }
            return this._initNavbar(e), y(e, "ul, ol").forEach((function (e) {
               t.initListview(e)
            })), this.trigger("initPanel:after", [e]), e
         }, e.prototype._initNavbar = function (e) {
            if (this.trigger("initNavbar:before", [e]), !y(e, ".mm-navbar").length) {
               var t = null,
                  n = null;
               if (e.getAttribute("data-mm-parent") ? n = _(this.node.pnls, e.getAttribute("data-mm-parent"))[0] : (t = e.mmParent) && (n = t.closest(".mm-panel")), !t || !t.matches(".mm-listitem_vertical")) {
                  var i = g("div.mm-navbar");
                  if (this.opts.navbar.add ? this.opts.navbar.sticky && i.classList.add("mm-navbar_sticky") : i.classList.add("mm-hidden"), n) {
                     var s = g("a.mm-btn.mm-btn_prev.mm-navbar__btn");
                     s.setAttribute("href", "#" + n.id), i.append(s)
                  }
                  var a = null;
                  t ? a = y(t, ".mm-listitem__text")[0] : n && (a = _(n, 'a[href="#' + e.id + '"]')[0]);
                  var o = g("a.mm-navbar__title"),
                     r = g("span");
                  switch (o.append(r), r.innerHTML = e.getAttribute("data-mm-title") || (a ? a.textContent : "") || this.i18n(this.opts.navbar.title) || this.i18n("Menu"), this.opts.navbar.titleLink) {
                     case "anchor":
                        a && o.setAttribute("href", a.getAttribute("href"));
                        break;
                     case "parent":
                        n && o.setAttribute("href", "#" + n.id)
                  }
                  i.append(o), e.prepend(i), this.trigger("initNavbar:after", [e])
               }
            }
         }, e.prototype.initListview = function (e) {
            var t = this;
            this.trigger("initListview:before", [e]), x(e, this.conf.classNames.nolistview, "mm-nolistview"), e.matches(".mm-nolistview") || (e.classList.add("mm-listview"), y(e).forEach((function (e) {
               e.classList.add("mm-listitem"), x(e, t.conf.classNames.selected, "mm-listitem_selected"), y(e, "a, span").forEach((function (e) {
                  e.matches(".mm-btn") || e.classList.add("mm-listitem__text")
               }))
            }))), this.trigger("initListview:after", [e])
         }, e.prototype._initOpened = function () {
            this.trigger("initOpened:before");
            var e = this.node.pnls.querySelectorAll(".mm-listitem_selected"),
               t = null;
            e.forEach((function (e) {
               t = e, e.classList.remove("mm-listitem_selected")
            })), t && t.classList.add("mm-listitem_selected");
            var n = t ? t.closest(".mm-panel") : y(this.node.pnls, ".mm-panel")[0];
            this.openPanel(n, !1), this.trigger("initOpened:after")
         }, e.prototype._initAnchors = function () {
            var e = this;
            this.trigger("initAnchors:before"), document.addEventListener("click", (function (t) {
               var n = t.target.closest("a[href]");
               if (n) {
                  for (var i = {
                        inMenu: n.closest(".mm-menu") === e.node.menu,
                        inListview: n.matches(".mm-listitem > a"),
                        toExternal: n.matches('[rel="external"]') || n.matches('[target="_blank"]')
                     }, s = {
                        close: null,
                        setSelected: null,
                        preventDefault: "#" == n.getAttribute("href").slice(0, 1)
                     }, a = 0; a < e.clck.length; a++) {
                     var m = e.clck[a].call(e, n, i);
                     if (m) {
                        if ("boolean" == typeof m) return void t.preventDefault();
                        "object" == r(m) && (s = o(m, s))
                     }
                  }
                  i.inMenu && i.inListview && !i.toExternal && (c(n, e.opts.onClick.setSelected, s.setSelected) && e.setSelected(n.parentElement), c(n, e.opts.onClick.preventDefault, s.preventDefault) && t.preventDefault(), c(n, e.opts.onClick.close, s.close) && e.opts.offCanvas && "function" == typeof e.close && e.close())
               }
            }), !0), this.trigger("initAnchors:after")
         }, e.prototype.i18n = function (e) {
            return function (e, t) {
               return "string" == typeof t && void 0 !== u[t] && u[t][e] || e
            }(e, this.conf.language)
         }, e.version = i.a, e.options = s, e.configs = a, e.addons = {}, e.wrappers = {}, e.node = {}, e.vars = {}, e
      }(),
      A = {
         blockUI: !0,
         moveBackground: !0
      };
   var T = {
      clone: !1,
      menu: {
         insertMethod: "prepend",
         insertSelector: "body"
      },
      page: {
         nodetype: "div",
         selector: null,
         noSelector: []
      }
   };

   function C(e) {
      return e ? e.charAt(0).toUpperCase() + e.slice(1) : ""
   }

   function N(e, t, n) {
      var i = t.split(".");
      e[t = "mmEvent" + C(i[0]) + C(i[1])] = e[t] || [], e[t].push(n), e.addEventListener(i[0], n)
   }

   function H(e, t) {
      var n = t.split(".");
      t = "mmEvent" + C(n[0]) + C(n[1]), (e[t] || []).forEach((function (t) {
         e.removeEventListener(n[0], t)
      }))
   }
   M.options.offCanvas = A, M.configs.offCanvas = T;
   M.prototype.open = function () {
      var e = this;
      this.trigger("open:before"), this.vars.opened || (this._openSetup(), setTimeout((function () {
         e._openStart()
      }), this.conf.openingInterval), this.trigger("open:after"))
   }, M.prototype._openSetup = function () {
      var e = this,
         t = this.opts.offCanvas;
      this.closeAllOthers(),
         function (e, t, n) {
            var i = t.split(".");
            (e[t = "mmEvent" + C(i[0]) + C(i[1])] || []).forEach((function (e) {
               e(n || {})
            }))
         }(window, "resize.page", {
            force: !0
         });
      var n = ["mm-wrapper_opened"];
      t.blockUI && n.push("mm-wrapper_blocking"), "modal" == t.blockUI && n.push("mm-wrapper_modal"), t.moveBackground && n.push("mm-wrapper_background"), n.forEach((function (t) {
         e.node.wrpr.classList.add(t)
      })), setTimeout((function () {
         e.vars.opened = !0
      }), this.conf.openingInterval), this.node.menu.classList.add("mm-menu_opened")
   }, M.prototype._openStart = function () {
      var e = this;
      m(M.node.page, (function () {
         e.trigger("open:finish")
      }), this.conf.transitionDuration), this.trigger("open:start"), this.node.wrpr.classList.add("mm-wrapper_opening")
   }, M.prototype.close = function () {
      var e = this;
      this.trigger("close:before"), this.vars.opened && (m(M.node.page, (function () {
         e.node.menu.classList.remove("mm-menu_opened");
         ["mm-wrapper_opened", "mm-wrapper_blocking", "mm-wrapper_modal", "mm-wrapper_background"].forEach((function (t) {
            e.node.wrpr.classList.remove(t)
         })), e.vars.opened = !1, e.trigger("close:finish")
      }), this.conf.transitionDuration), this.trigger("close:start"), this.node.wrpr.classList.remove("mm-wrapper_opening"), this.trigger("close:after"))
   }, M.prototype.closeAllOthers = function () {
      var e = this;
      _(document.body, ".mm-menu_offcanvas").forEach((function (t) {
         if (t !== e.node.menu) {
            var n = t.mmApi;
            n && n.close && n.close()
         }
      }))
   }, M.prototype.setPage = function (e) {
      this.trigger("setPage:before", [e]);
      var t = this.conf.offCanvas;
      if (!e) {
         var n = "string" == typeof t.page.selector ? _(document.body, t.page.selector) : y(document.body, t.page.nodetype);
         if (n = n.filter((function (e) {
               return !e.matches(".mm-menu, .mm-wrapper__blocker")
            })), t.page.noSelector.length && (n = n.filter((function (e) {
               return !e.matches(t.page.noSelector.join(", "))
            }))), n.length > 1) {
            var i = g("div");
            n[0].before(i), n.forEach((function (e) {
               i.append(e)
            })), n = [i]
         }
         e = n[0]
      }
      e.classList.add("mm-page"), e.classList.add("mm-slideout"), e.id = e.id || l(), M.node.page = e, this.trigger("setPage:after", [e])
   };
   var j = function () {
         var e = this;
         H(document.body, "keydown.tabguard"), N(document.body, "keydown.tabguard", (function (t) {
            9 == t.keyCode && e.node.wrpr.matches(".mm-wrapper_opened") && t.preventDefault()
         }))
      },
      D = function () {
         var e = this;
         this.trigger("initBlocker:before");
         var t = this.opts.offCanvas,
            n = this.conf.offCanvas;
         if (t.blockUI) {
            if (!M.node.blck) {
               var i = g("div.mm-wrapper__blocker.mm-slideout");
               i.innerHTML = "<a></a>", document.querySelector(n.menu.insertSelector).append(i), M.node.blck = i
            }
            var s = function (t) {
               t.preventDefault(), t.stopPropagation(), e.node.wrpr.matches(".mm-wrapper_modal") || e.close()
            };
            M.node.blck.addEventListener("mousedown", s), M.node.blck.addEventListener("touchstart", s), M.node.blck.addEventListener("touchmove", s), this.trigger("initBlocker:after")
         }
      },
      O = {
         aria: !0,
         text: !0
      };
   var I = {
         text: {
            closeMenu: "Close menu",
            closeSubmenu: "Close submenu",
            openSubmenu: "Open submenu",
            toggleSubmenu: "Toggle submenu"
         }
      },
      q = {
         "Close menu": "Ø¨Ø³ØªÙ†Ù…Ù†Ùˆ",
         "Close submenu": "Ø¨Ø³ØªÙ†Ø²ÛŒØ±Ù…Ù†Ùˆ",
         "Open submenu": "Ø¨Ø§Ø²Ú©Ø±Ø¯Ù†Ø²ÛŒØ±Ù…Ù†Ùˆ",
         "Toggle submenu": "Ø³ÙˆÛŒÛŒÚ†Ø²ÛŒØ±Ù…Ù†Ùˆ"
      },
      B = {
         "Close menu": "MenĂ¼ schlieĂŸen",
         "Close submenu": "UntermenĂ¼ schlieĂŸen",
         "Open submenu": "UntermenĂ¼Ă¶ffnen",
         "Toggle submenu": "UntermenĂ¼ wechseln"
      },
      z = {
         "Close menu": "Đ—Đ°ĐºÑ€Ñ‹Ñ‚ÑŒĐ¼ĐµĐ½Ñ",
         "Close submenu": "Đ—Đ°ĐºÑ€Ñ‹Ñ‚ÑŒĐ¿Đ¾Đ´Đ¼ĐµĐ½Ñ",
         "Open submenu": "ĐÑ‚ĐºÑ€Ñ‹Ñ‚ÑŒĐ¿Đ¾Đ´Đ¼ĐµĐ½Ñ",
         "Toggle submenu": "ĐŸĐµÑ€ĐµĐºĐ»ÑÑ‡Đ¸Ñ‚ÑŒĐ¿Đ¾Đ´Đ¼ĐµĐ½Ñ"
      };
   f({
      "Close menu": "Menu sluiten",
      "Close submenu": "Submenu sluiten",
      "Open submenu": "Submenu openen",
      "Toggle submenu": "Submenu wisselen"
   }, "nl"), f(q, "fa"), f(B, "de"), f(z, "ru"), M.options.screenReader = O, M.configs.screenReader = I;
   var R;
   R = function (e, t, n) {
      e[t] = n, n ? e.setAttribute(t, n.toString()) : e.removeAttribute(t)
   }, M.sr_aria = function (e, t, n) {
      R(e, "aria-" + t, n)
   }, M.sr_role = function (e, t) {
      R(e, "role", t)
   }, M.sr_text = function (e) {
      return '<span class="mm-sronly">' + e + "</span>"
   };
   var U = {
      fix: !0
   };
   var W = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1;
   M.options.scrollBugFix = U;
   var Y = {
      height: "default"
   };
   M.options.autoHeight = Y;
   var F = {
      close: !1,
      open: !1
   };
   M.options.backButton = F;
   var X = {
      add: !1,
      visible: {
         min: 1,
         max: 3
      }
   };
   M.options.columns = X;
   var V = {
      add: !1,
      addTo: "panels",
      count: !1
   };
   M.options.counters = V, M.configs.classNames.counters = {
      counter: "Counter"
   };
   var Z = {
      add: !1,
      addTo: "panels"
   };
   M.options.dividers = Z, M.configs.classNames.divider = "Divider";
   var G = {
      open: !1,
      node: null
   };
   var J = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1,
      K = {
         top: 0,
         right: 0,
         bottom: 0,
         left: 0
      },
      Q = {
         start: 15,
         swipe: 15
      },
      $ = {
         x: ["Right", "Left"],
         y: ["Down", "Up"]
      },
      ee = 0,
      te = 1,
      ne = 2,
      ie = function (e, t) {
         return "string" == typeof e && "%" == e.slice(-1) && (e = t * ((e = parseInt(e.slice(0, -1), 10)) / 100)), e
      },
      se = function () {
         function e(e, t, n) {
            this.surface = e, this.area = o(t, K), this.treshold = o(n, Q), this.surface.mmHasDragEvents || (this.surface.addEventListener(J ? "touchstart" : "mousedown", this.start.bind(this)), this.surface.addEventListener(J ? "touchend" : "mouseup", this.stop.bind(this)), this.surface.addEventListener(J ? "touchleave" : "mouseleave", this.stop.bind(this)), this.surface.addEventListener(J ? "touchmove" : "mousemove", this.move.bind(this))), this.surface.mmHasDragEvents = !0
         }
         return e.prototype.start = function (e) {
            this.currentPosition = {
               x: e.touches ? e.touches[0].pageX : e.pageX || 0,
               y: e.touches ? e.touches[0].pageY : e.pageY || 0
            };
            var t = this.surface.clientWidth,
               n = this.surface.clientHeight,
               i = ie(this.area.top, n);
            if (!("number" == typeof i && this.currentPosition.y < i)) {
               var s = ie(this.area.right, t);
               if (!("number" == typeof s && (s = t - s, this.currentPosition.x > s))) {
                  var a = ie(this.area.bottom, n);
                  if (!("number" == typeof a && (a = n - a, this.currentPosition.y > a))) {
                     var o = ie(this.area.left, t);
                     "number" == typeof o && this.currentPosition.x < o || (this.startPosition = {
                        x: this.currentPosition.x,
                        y: this.currentPosition.y
                     }, this.state = te)
                  }
               }
            }
         }, e.prototype.stop = function (e) {
            if (this.state == ne) {
               var t = this._dragDirection(),
                  n = this._eventDetail(t);
               if (this._dispatchEvents("drag*End", n), Math.abs(this.movement[this.axis]) > this.treshold.swipe) {
                  var i = this._swipeDirection();
                  n.direction = i, this._dispatchEvents("swipe*", n)
               }
            }
            this.state = ee
         }, e.prototype.move = function (e) {
            switch (this.state) {
               case te:
               case ne:
                  var t = {
                     x: e.changedTouches ? e.touches[0].pageX : e.pageX || 0,
                     y: e.changedTouches ? e.touches[0].pageY : e.pageY || 0
                  };
                  this.movement = {
                     x: t.x - this.currentPosition.x,
                     y: t.y - this.currentPosition.y
                  }, this.distance = {
                     x: t.x - this.startPosition.x,
                     y: t.y - this.startPosition.y
                  }, this.currentPosition = {
                     x: t.x,
                     y: t.y
                  }, this.axis = Math.abs(this.distance.x) > Math.abs(this.distance.y) ? "x" : "y";
                  var n = this._dragDirection(),
                     i = this._eventDetail(n);
                  this.state == te && Math.abs(this.distance[this.axis]) > this.treshold.start && (this._dispatchEvents("drag*Start", i), this.state = ne), this.state == ne && this._dispatchEvents("drag*Move", i)
            }
         }, e.prototype._eventDetail = function (e) {
            var t = this.distance.x,
               n = this.distance.y;
            return "x" == this.axis && (t -= t > 0 ? this.treshold.start : 0 - this.treshold.start), "y" == this.axis && (n -= n > 0 ? this.treshold.start : 0 - this.treshold.start), {
               axis: this.axis,
               direction: e,
               movementX: this.movement.x,
               movementY: this.movement.y,
               distanceX: t,
               distanceY: n
            }
         }, e.prototype._dispatchEvents = function (e, t) {
            var n = new CustomEvent(e.replace("*", ""), {
               detail: t
            });
            this.surface.dispatchEvent(n);
            var i = new CustomEvent(e.replace("*", this.axis.toUpperCase()), {
               detail: t
            });
            this.surface.dispatchEvent(i);
            var s = new CustomEvent(e.replace("*", t.direction), {
               detail: t
            });
            this.surface.dispatchEvent(s)
         }, e.prototype._dragDirection = function () {
            return $[this.axis][this.distance[this.axis] > 0 ? 0 : 1]
         }, e.prototype._swipeDirection = function () {
            return $[this.axis][this.movement[this.axis] > 0 ? 0 : 1]
         }, e
      }(),
      ae = null,
      oe = null,
      re = 0,
      ce = function (e) {
         var t = this,
            n = {},
            i = !1,
            s = function () {
               var e = Object.keys(t.opts.extensions);
               e.length ? (k(e.join(", "), (function () {}), (function () {
                  n = me(n, [], t.node.menu)
               })), e.forEach((function (e) {
                  k(e, (function () {
                     n = me(n, t.opts.extensions[e], t.node.menu)
                  }), (function () {}))
               }))) : n = me(n, [], t.node.menu)
            };
         oe && (H(oe, "dragStart"), H(oe, "dragMove"), H(oe, "dragEnd")), ae = new se(oe = e), s(), s = function () {}, oe && (N(oe, "dragStart", (function (e) {
            e.detail.direction == n.direction && (i = !0, t.node.wrpr.classList.add("mm-wrapper_dragging"), t._openSetup(), t.trigger("open:start"), re = t.node.menu["x" == n.axis ? "clientWidth" : "clientHeight"])
         })), N(oe, "dragMove", (function (e) {
            if (e.detail.axis == n.axis && i) {
               var t = e.detail["distance" + n.axis.toUpperCase()];
               switch (n.position) {
                  case "right":
                  case "bottom":
                     t = Math.min(Math.max(t, -re), 0);
                     break;
                  default:
                     t = Math.max(Math.min(t, re), 0)
               }
               if ("front" == n.zposition) switch (n.position) {
                  case "right":
                  case "bottom":
                     t += re;
                     break;
                  default:
                     t -= re
               }
               n.slideOutNodes.forEach((function (e) {
                  e.style.transform = "translate" + n.axis.toUpperCase() + "(" + t + "px)"
               }))
            }
         })), N(oe, "dragEnd", (function (e) {
            if (e.detail.axis == n.axis && i) {
               i = !1, t.node.wrpr.classList.remove("mm-wrapper_dragging"), n.slideOutNodes.forEach((function (e) {
                  e.style.transform = ""
               }));
               var s = Math.abs(e.detail["distance" + n.axis.toUpperCase()]) >= .75 * re;
               if (!s) {
                  var a = e.detail["movement" + n.axis.toUpperCase()];
                  switch (n.position) {
                     case "right":
                     case "bottom":
                        s = a <= 0;
                        break;
                     default:
                        s = a >= 0
                  }
               }
               s ? t._openStart() : t.close()
            }
         })))
      },
      me = function (e, t, n) {
         switch (e.position = "left", e.zposition = "back", ["right", "top", "bottom"].forEach((function (n) {
               t.indexOf("position-" + n) > -1 && (e.position = n)
            })), ["front", "top", "bottom"].forEach((function (n) {
               t.indexOf("position-" + n) > -1 && (e.zposition = "front")
            })), ae.area = {
               top: "bottom" == e.position ? "75%" : 0,
               right: "left" == e.position ? "75%" : 0,
               bottom: "top" == e.position ? "75%" : 0,
               left: "right" == e.position ? "75%" : 0
            }, e.position) {
            case "top":
            case "bottom":
               e.axis = "y";
               break;
            default:
               e.axis = "x"
         }
         switch (e.position) {
            case "top":
               e.direction = "Down";
               break;
            case "right":
               e.direction = "Left";
               break;
            case "bottom":
               e.direction = "Up";
               break;
            default:
               e.direction = "Right"
         }
         switch (e.zposition) {
            case "front":
               e.slideOutNodes = [n];
               break;
            default:
               e.slideOutNodes = _(document.body, ".mm-slideout")
         }
         return e
      };
   M.options.drag = G;
   var le = {
      drop: !1,
      fitViewport: !0,
      event: "click",
      position: {},
      tip: !0
   };
   var de = {
      offset: {
         button: {
            x: -5,
            y: 5
         },
         viewport: {
            x: 20,
            y: 20
         }
      },
      height: {
         max: 880
      },
      width: {
         max: 440
      }
   };
   M.options.dropdown = le, M.configs.dropdown = de;
   var pe = {
      insertMethod: "append",
      insertSelector: "body"
   };
   M.configs.fixedElements = pe, M.configs.classNames.fixedElements = {
      fixed: "Fixed"
   };
   var ue = {
      use: !1,
      top: [],
      bottom: [],
      position: "left",
      type: "default"
   };
   M.options.iconbar = ue;
   var fe = {
      add: !1,
      blockPanel: !0,
      hideDivider: !1,
      hideNavbar: !0,
      visible: 3
   };
   M.options.iconPanels = fe;
   var he = {
      enable: !1,
      enhance: !1
   };
   M.options.keyboardNavigation = he;
   var ve = function (e) {
         var t = this;
         H(document.body, "keydown.tabguard"), H(document.body, "focusin.tabguard"), N(document.body, "focusin.tabguard", (function (e) {
            if (t.node.wrpr.matches(".mm-wrapper_opened")) {
               var n = e.target;
               if (n.matches(".mm-tabend")) {
                  var i = void 0;
                  n.parentElement.matches(".mm-menu") && M.node.blck && (i = M.node.blck), n.parentElement.matches(".mm-wrapper__blocker") && (i = _(document.body, ".mm-menu_offcanvas.mm-menu_opened")[0]), i || (i = n.parentElement), i && y(i, ".mm-tabstart")[0].focus()
               }
            }
         })), H(document.body, "keydown.navigate"), N(document.body, "keydown.navigate", (function (t) {
            var n = t.target,
               i = n.closest(".mm-menu");
            if (i) {
               i.mmApi;
               if (!n.matches("input, textarea")) switch (t.keyCode) {
                  case 13:
                     (n.matches(".mm-toggle") || n.matches(".mm-check")) && n.dispatchEvent(new Event("click"));
                     break;
                  case 32:
                  case 37:
                  case 38:
                  case 39:
                  case 40:
                     t.preventDefault()
               }
               if (e)
                  if (n.matches("input")) switch (t.keyCode) {
                     case 27:
                        n.value = ""
                  } else {
                     var s = i.mmApi;
                     switch (t.keyCode) {
                        case 8:
                           var a = _(i, ".mm-panel_opened")[0].mmParent;
                           a && s.openPanel(a.closest(".mm-panel"));
                           break;
                        case 27:
                           i.matches(".mm-menu_offcanvas") && s.close()
                     }
                  }
            }
         }))
      },
      be = {
         load: !1
      };
   M.options.lazySubmenus = be;
   var ge = [];
   var _e = {
      breadcrumbs: {
         separator: "/",
         removeFirst: !1
      }
   };

   function ye() {
      var e = this,
         t = this.opts.navbars;
      if (void 0 !== t) {
         t instanceof Array || (t = [t]);
         var n = {};
         t.length && (t.forEach((function (t) {
            if (!(t = function (e) {
                  return "boolean" == typeof e && e && (e = {}), "object" != typeof e && (e = {}), void 0 === e.content && (e.content = ["prev", "title"]), e.content instanceof Array || (e.content = [e.content]), void 0 === e.use && (e.use = !0), "boolean" == typeof e.use && e.use && (e.use = !0), e
               }(t)).use) return !1;
            var i = g("div.mm-navbar"),
               s = t.position;
            "bottom" !== s && (s = "top"), n[s] || (n[s] = g("div.mm-navbars_" + s)), n[s].append(i);
            for (var a = 0, o = t.content.length; a < o; a++) {
               var r, c = t.content[a];
               if ("string" == typeof c)
                  if ("function" == typeof (r = ye.navbarContents[c])) r.call(e, i);
                  else {
                     var m = g("span");
                     m.innerHTML = c;
                     var l = y(m);
                     1 == l.length && (m = l[0]), i.append(m)
                  }
               else i.append(c)
            }
            "string" == typeof t.type && ("function" == typeof (r = ye.navbarTypes[t.type]) && r.call(e, i));
            "boolean" != typeof t.use && k(t.use, (function () {
               i.classList.remove("mm-hidden"), M.sr_aria(i, "hidden", !1)
            }), (function () {
               i.classList.add("mm-hidden"), M.sr_aria(i, "hidden", !0)
            }))
         })), this.bind("initMenu:after", (function () {
            for (var t in n) e.node.menu["bottom" == t ? "append" : "prepend"](n[t])
         })))
      }
   }
   M.options.navbars = ge, M.configs.navbars = _e, M.configs.classNames.navbars = {
      panelPrev: "Prev",
      panelTitle: "Title"
   }, ye.navbarContents = {
      breadcrumbs: function (e) {
         var t = this,
            n = g("div.mm-navbar__breadcrumbs");
         e.append(n), this.bind("initNavbar:after", (function (e) {
            if (!e.querySelector(".mm-navbar__breadcrumbs")) {
               y(e, ".mm-navbar")[0].classList.add("mm-hidden");
               for (var n = [], i = g("span.mm-navbar__breadcrumbs"), s = e, a = !0; s;) {
                  if (!(s = s.closest(".mm-panel")).parentElement.matches(".mm-listitem_vertical")) {
                     var o = _(s, ".mm-navbar__title span")[0];
                     if (o) {
                        var r = o.textContent;
                        r.length && n.unshift(a ? "<span>" + r + "</span>" : '<a href="#' + s.id + '">' + r + "</a>")
                     }
                     a = !1
                  }
                  s = s.mmParent
               }
               t.conf.navbars.breadcrumbs.removeFirst && n.shift(), i.innerHTML = n.join('<span class="mm-separator">' + t.conf.navbars.breadcrumbs.separator + "</span>"), y(e, ".mm-navbar")[0].append(i)
            }
         })), this.bind("openPanel:start", (function (e) {
            var t = e.querySelector(".mm-navbar__breadcrumbs");
            n.innerHTML = t ? t.innerHTML : ""
         })), this.bind("initNavbar:after:sr-aria", (function (e) {
            _(e, ".mm-breadcrumbs a").forEach((function (e) {
               M.sr_aria(e, "owns", e.getAttribute("href").slice(1))
            }))
         }))
      },
      close: function (e) {
         var t = this,
            n = g("a.mm-btn.mm-btn_close.mm-navbar__btn");
         e.append(n), this.bind("setPage:after", (function (e) {
            n.setAttribute("href", "#" + e.id)
         })), this.bind("setPage:after:sr-text", (function () {
            n.innerHTML = M.sr_text(t.i18n(t.conf.screenReader.text.closeMenu))
         }))
      },
      prev: function (e) {
         var t, n, i, s = this,
            a = g("a.mm-btn.mm-btn_prev.mm-navbar__btn");
         e.append(a), this.bind("initNavbar:after", (function (e) {
            y(e, ".mm-navbar")[0].classList.add("mm-hidden")
         })), this.bind("openPanel:start", (function (e) {
            e.parentElement.matches(".mm-listitem_vertical") || ((t = e.querySelector("." + s.conf.classNames.navbars.panelPrev)) || (t = e.querySelector(".mm-navbar__btn.mm-btn_prev")), n = t ? t.getAttribute("href") : "", i = t ? t.innerHTML : "", n ? a.setAttribute("href", n) : a.removeAttribute("href"), a.classList[n || i ? "remove" : "add"]("mm-hidden"), a.innerHTML = i)
         })), this.bind("initNavbar:after:sr-aria", (function (e) {
            M.sr_aria(e.querySelector(".mm-navbar"), "hidden", !0)
         })), this.bind("openPanel:start:sr-aria", (function (e) {
            M.sr_aria(a, "hidden", a.matches(".mm-hidden")), M.sr_aria(a, "owns", (a.getAttribute("href") || "").slice(1))
         }))
      },
      searchfield: function (e) {
         "object" != r(this.opts.searchfield) && (this.opts.searchfield = {});
         var t = g("div.mm-navbar__searchfield");
         e.append(t), this.opts.searchfield.add = !0, this.opts.searchfield.addTo = [t]
      },
      title: function (e) {
         var t, n, i, s, a = this,
            o = g("a.mm-navbar__title"),
            r = g("span");
         o.append(r), e.append(o), this.bind("openPanel:start", (function (e) {
            e.parentElement.matches(".mm-listitem_vertical") || ((i = e.querySelector("." + a.conf.classNames.navbars.panelTitle)) || (i = e.querySelector(".mm-navbar__title span")), (t = i && i.closest("a") ? i.closest("a").getAttribute("href") : "") ? o.setAttribute("href", t) : o.removeAttribute("href"), n = i ? i.innerHTML : "", r.innerHTML = n)
         })), this.bind("openPanel:start:sr-aria", (function (e) {
            if (a.opts.screenReader.text) {
               if (!s) y(a.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach((function (e) {
                  var t = e.querySelector(".mm-btn_prev");
                  t && (s = t)
               }));
               if (s) {
                  var t = !0;
                  "parent" == a.opts.navbar.titleLink && (t = !s.matches(".mm-hidden")), M.sr_aria(o, "hidden", t)
               }
            }
         }))
      }
   }, ye.navbarTypes = {
      tabs: function (e) {
         var t = this;
         e.classList.add("mm-navbar_tabs"), e.parentElement.classList.add("mm-navbars_has-tabs");
         var n = y(e, "a");
         e.addEventListener("click", (function (e) {
            var n = e.target;
            if (n.matches("a"))
               if (n.matches(".mm-navbar__tab_selected")) e.stopImmediatePropagation();
               else try {
                  t.openPanel(t.node.menu.querySelector(n.getAttribute("href")), !1), e.stopImmediatePropagation()
               } catch (e) {}
         })), this.bind("openPanel:start", (function e(t) {
            n.forEach((function (e) {
               e.classList.remove("mm-navbar__tab_selected")
            }));
            var i = n.filter((function (e) {
               return e.matches('[href="#' + t.id + '"]')
            }))[0];
            if (i) i.classList.add("mm-navbar__tab_selected");
            else {
               var s = t.mmParent;
               s && e.call(this, s.closest(".mm-panel"))
            }
         }))
      }
   };
   var Le = {
      scroll: !1,
      update: !1
   };
   var we = {
      scrollOffset: 0,
      updateOffset: 50
   };
   M.options.pageScroll = Le, M.configs.pageScroll = we;
   var Ee = {
      add: !1,
      addTo: "panels",
      cancel: !1,
      noResults: "No results found.",
      placeholder: "Search",
      panel: {
         add: !1,
         dividers: !0,
         fx: "none",
         id: null,
         splash: null,
         title: "Search"
      },
      search: !0,
      showTextItems: !1,
      showSubPanels: !0
   };
   var xe = {
         clear: !1,
         form: !1,
         input: !1,
         submit: !1
      },
      Pe = {
         Search: "Ø¬Ø³ØªØ¬Ùˆ",
         "No results found.": "Ù†ØªÛŒØ¬Ù‡â€ŒØ§ÛŒÛŒØ§ÙØªÙ†Ø´Ø¯.",
         cancel: "Ø§Ù†ØµØ±Ø§Ù"
      },
      ke = {
         Search: "Suche",
         "No results found.": "Keine Ergebnisse gefunden.",
         cancel: "beenden"
      },
      Se = {
         Search: "ĐĐ°Đ¹Ñ‚Đ¸",
         "No results found.": "ĐĐ¸Ñ‡ĐµĐ³Đ¾Đ½ĐµĐ½Đ°Đ¹Đ´ĐµĐ½Đ¾.",
         cancel: "Đ¾Ñ‚Đ¼ĐµĐ½Đ¸Ñ‚ÑŒ"
      },
      Me = function () {
         for (var e = 0, t = 0, n = arguments.length; t < n; t++) e += arguments[t].length;
         var i = Array(e),
            s = 0;
         for (t = 0; t < n; t++)
            for (var a = arguments[t], o = 0, r = a.length; o < r; o++, s++) i[s] = a[o];
         return i
      };
   f({
      Search: "Zoeken",
      "No results found.": "Geen resultaten gevonden.",
      cancel: "annuleren"
   }, "nl"), f(Pe, "fa"), f(ke, "de"), f(Se, "ru"), M.options.searchfield = Ee, M.configs.searchfield = xe;
   var Ae = function () {
         var e = this.opts.searchfield,
            t = (this.conf.searchfield, y(this.node.pnls, ".mm-panel_search")[0]);
         if (t) return t;
         t = g("div.mm-panel.mm-panel_search.mm-hidden"), e.panel.id && (t.id = e.panel.id), e.panel.title && t.setAttribute("data-mm-title", e.panel.title);
         var n = g("ul");
         switch (t.append(n), this.node.pnls.append(t), this.initListview(n), this._initNavbar(t), e.panel.fx) {
            case !1:
               break;
            case "none":
               t.classList.add("mm-panel_noanimation");
               break;
            default:
               t.classList.add("mm-panel_fx-" + e.panel.fx)
         }
         if (e.panel.splash) {
            var i = g("div.mm-panel__content");
            i.innerHTML = e.panel.splash, t.append(i)
         }
         return t.classList.add("mm-panel"), t.classList.add("mm-hidden"), this.node.pnls.append(t), t
      },
      Te = function (e) {
         var t = this.opts.searchfield,
            n = this.conf.searchfield;
         if (e.parentElement.matches(".mm-listitem_vertical")) return null;
         if (a = _(e, ".mm-searchfield")[0]) return a;

         function i(e, t) {
            if (t)
               for (var n in t) e.setAttribute(n, t[n])
         }
         var s, a = g((n.form ? "form" : "div") + ".mm-searchfield"),
            o = g("div.mm-searchfield__input"),
            r = g("input");
         (r.type = "text", r.autocomplete = "off", r.placeholder = this.i18n(t.placeholder), o.append(r), a.append(o), e.prepend(a), i(r, n.input), n.clear) && ((s = g("a.mm-btn.mm-btn_close.mm-searchfield__btn")).setAttribute("href", "#"), o.append(s));
         (i(a, n.form), n.form && n.submit && !n.clear) && ((s = g("a.mm-btn.mm-btn_next.mm-searchfield__btn")).setAttribute("href", "#"), o.append(s));
         t.cancel && ((s = g("a.mm-searchfield__cancel")).setAttribute("href", "#"), s.textContent = this.i18n("cancel"), a.append(s));
         return a
      },
      Ce = function (e) {
         var t = this,
            n = this.opts.searchfield,
            i = (this.conf.searchfield, {});
         e.closest(".mm-panel_search") ? (i.panels = _(this.node.pnls, ".mm-panel"), i.noresults = [e.closest(".mm-panel")]) : e.closest(".mm-panel") ? (i.panels = [e.closest(".mm-panel")], i.noresults = i.panels) : (i.panels = _(this.node.pnls, ".mm-panel"), i.noresults = [this.node.menu]), i.panels = i.panels.filter((function (e) {
            return !e.matches(".mm-panel_search")
         })), i.panels = i.panels.filter((function (e) {
            return !e.parentElement.matches(".mm-listitem_vertical")
         })), i.listitems = [], i.dividers = [], i.panels.forEach((function (e) {
            var t, n;
            (t = i.listitems).push.apply(t, _(e, ".mm-listitem")), (n = i.dividers).push.apply(n, _(e, ".mm-divider"))
         }));
         var s = y(this.node.pnls, ".mm-panel_search")[0],
            a = _(e, "input")[0],
            o = _(e, ".mm-searchfield__cancel")[0];
         a.mmSearchfield = i, n.panel.add && n.panel.splash && (H(a, "focus.splash"), N(a, "focus.splash", (function (e) {
            t.openPanel(s)
         }))), n.cancel && (H(a, "focus.cancel"), N(a, "focus.cancel", (function (e) {
            o.classList.add("mm-searchfield__cancel-active")
         })), H(o, "click.splash"), N(o, "click.splash", (function (e) {
            if (e.preventDefault(), o.classList.remove("mm-searchfield__cancel-active"), s.matches(".mm-panel_opened")) {
               var n = y(t.node.pnls, ".mm-panel_opened-parent");
               n.length && t.openPanel(n[n.length - 1])
            }
         }))), n.panel.add && "panel" == n.addTo && this.bind("openPanel:finish", (function (e) {
            e === s && a.focus()
         })), H(a, "input.search"), N(a, "input.search", (function (e) {
            switch (e.keyCode) {
               case 9:
               case 16:
               case 17:
               case 18:
               case 37:
               case 38:
               case 39:
               case 40:
                  break;
               default:
                  t.search(a)
            }
         })), this.search(a)
      },
      Ne = function (e) {
         if (e) {
            var t = this.opts.searchfield;
            this.conf.searchfield;
            if (e.closest(".mm-panel") || (e = y(this.node.pnls, ".mm-panel")[0]), !y(e, ".mm-panel__noresultsmsg").length) {
               var n = g("div.mm-panel__noresultsmsg.mm-hidden");
               n.innerHTML = this.i18n(t.noResults), e.append(n)
            }
         }
      };
   M.prototype.search = function (e, t) {
      var n, i = this,
         s = this.opts.searchfield;
      this.conf.searchfield;
      t = (t = t || "" + e.value).toLowerCase().trim();
      var a = e.mmSearchfield,
         o = _(e.closest(".mm-searchfield"), ".mm-btn"),
         r = y(this.node.pnls, ".mm-panel_search")[0],
         c = a.panels,
         m = a.noresults,
         l = a.listitems,
         d = a.dividers;
      if (l.forEach((function (e) {
            e.classList.remove("mm-listitem_nosubitems"), e.classList.remove("mm-listitem_onlysubitems"), e.classList.remove("mm-hidden")
         })), r && (y(r, ".mm-listview")[0].innerHTML = ""), c.forEach((function (e) {
            e.scrollTop = 0
         })), t.length) {
         d.forEach((function (e) {
            e.classList.add("mm-hidden")
         })), l.forEach((function (e) {
            var n, i = y(e, ".mm-listitem__text")[0],
               a = !1;
            i && (n = i, Array.prototype.slice.call(n.childNodes).filter((function (e) {
               return 3 == e.nodeType
            })).map((function (e) {
               return e.textContent
            })).join(" ")).toLowerCase().indexOf(t) > -1 && (i.matches(".mm-listitem__btn") ? s.showSubPanels && (a = !0) : (i.matches("a") || s.showTextItems) && (a = !0)), a || e.classList.add("mm-hidden")
         }));
         var p = l.filter((function (e) {
            return !e.matches(".mm-hidden")
         })).length;
         if (s.panel.add) {
            var u = [];
            c.forEach((function (e) {
               var t = w(_(e, ".mm-listitem"));
               if ((t = t.filter((function (e) {
                     return !e.matches(".mm-hidden")
                  }))).length) {
                  if (s.panel.dividers) {
                     var n = g("li.mm-divider"),
                        i = _(e, ".mm-navbar__title")[0];
                     i && (n.innerHTML = i.innerHTML, u.push(n))
                  }
                  t.forEach((function (e) {
                     u.push(e.cloneNode(!0))
                  }))
               }
            })), u.forEach((function (e) {
               e.querySelectorAll(".mm-toggle, .mm-check").forEach((function (e) {
                  e.remove()
               }))
            })), (n = y(r, ".mm-listview")[0]).append.apply(n, u), this.openPanel(r)
         } else s.showSubPanels && c.forEach((function (e) {
            w(_(e, ".mm-listitem")).forEach((function (e) {
               var t = e.mmChild;
               t && _(t, ".mm-listitem").forEach((function (e) {
                  e.classList.remove("mm-hidden")
               }))
            }))
         })), Me(c).reverse().forEach((function (t, n) {
            var s = t.mmParent;
            s && (w(_(t, ".mm-listitem")).length ? (s.matches(".mm-hidden") && s.classList.remove("mm-hidden"), s.classList.add("mm-listitem_onlysubitems")) : e.closest(".mm-panel") || ((t.matches(".mm-panel_opened") || t.matches(".mm-panel_opened-parent")) && setTimeout((function () {
               i.openPanel(s.closest(".mm-panel"))
            }), (n + 1) * (1.5 * i.conf.openingInterval)), s.classList.add("mm-listitem_nosubitems")))
         })), c.forEach((function (e) {
            w(_(e, ".mm-listitem")).forEach((function (e) {
               L(e, ".mm-listitem_vertical").forEach((function (e) {
                  e.matches(".mm-hidden") && (e.classList.remove("mm-hidden"), e.classList.add("mm-listitem_onlysubitems"))
               }))
            }))
         })), c.forEach((function (e) {
            w(_(e, ".mm-listitem")).forEach((function (e) {
               var t = function (e, t) {
                  for (var n = [], i = e.previousElementSibling; i;) t && !i.matches(t) || n.push(i), i = i.previousElementSibling;
                  return n
               }(e, ".mm-divider")[0];
               t && t.classList.remove("mm-hidden")
            }))
         }));
         o.forEach((function (e) {
            return e.classList.remove("mm-hidden")
         })), m.forEach((function (e) {
            _(e, ".mm-panel__noresultsmsg").forEach((function (e) {
               return e.classList[p ? "add" : "remove"]("mm-hidden")
            }))
         })), s.panel.add && (s.panel.splash && _(r, ".mm-panel__content").forEach((function (e) {
            return e.classList.add("mm-hidden")
         })), l.forEach((function (e) {
            return e.classList.remove("mm-hidden")
         })), d.forEach((function (e) {
            return e.classList.remove("mm-hidden")
         })))
      } else if (l.forEach((function (e) {
            return e.classList.remove("mm-hidden")
         })), d.forEach((function (e) {
            return e.classList.remove("mm-hidden")
         })), o.forEach((function (e) {
            return e.classList.add("mm-hidden")
         })), m.forEach((function (e) {
            _(e, ".mm-panel__noresultsmsg").forEach((function (e) {
               return e.classList.add("mm-hidden")
            }))
         })), s.panel.add)
         if (s.panel.splash) _(r, ".mm-panel__content").forEach((function (e) {
            return e.classList.remove("mm-hidden")
         }));
         else if (!e.closest(".mm-panel_search")) {
         var f = y(this.node.pnls, ".mm-panel_opened-parent");
         this.openPanel(f.slice(-1)[0])
      }
      this.trigger("updateListview")
   };
   var He = {
      add: !1,
      addTo: "panels"
   };
   M.options.sectionIndexer = He;
   var je = {
      current: !0,
      hover: !1,
      parent: !1
   };
   M.options.setSelected = je;
   var De = {
      collapsed: {
         use: !1,
         blockMenu: !0,
         hideDivider: !1,
         hideNavbar: !0
      },
      expanded: {
         use: !1,
         initial: "open"
      }
   };
   M.options.sidebar = De;
   M.configs.classNames.toggles = {
      toggle: "Toggle",
      check: "Check"
   };
   M.addons = {
      offcanvas: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t = function (e) {
               return "object" != typeof e && (e = {}), e
            }(this.opts.offCanvas);
            this.opts.offCanvas = o(t, M.options.offCanvas);
            var n = this.conf.offCanvas;
            this._api.push("open", "close", "setPage"), this.vars.opened = !1, this.bind("initMenu:before", (function () {
               n.clone && (e.node.menu = e.node.menu.cloneNode(!0), e.node.menu.id && (e.node.menu.id = "mm-" + e.node.menu.id), _(e.node.menu, "[id]").forEach((function (e) {
                  e.id = "mm-" + e.id
               }))), e.node.wrpr = document.body, document.querySelector(n.menu.insertSelector)[n.menu.insertMethod](e.node.menu)
            })), this.bind("initMenu:after", (function () {
               D.call(e), e.setPage(M.node.page), j.call(e), e.node.menu.classList.add("mm-menu_offcanvas");
               var t = window.location.hash;
               if (t) {
                  var n = p(e.node.menu.id);
                  n && n == t.slice(1) && setTimeout((function () {
                     e.open()
                  }), 1e3)
               }
            })), this.bind("setPage:after", (function (e) {
               M.node.blck && y(M.node.blck, "a").forEach((function (t) {
                  t.setAttribute("href", "#" + e.id)
               }))
            })), this.bind("open:start:sr-aria", (function () {
               M.sr_aria(e.node.menu, "hidden", !1)
            })), this.bind("close:finish:sr-aria", (function () {
               M.sr_aria(e.node.menu, "hidden", !0)
            })), this.bind("initMenu:after:sr-aria", (function () {
               M.sr_aria(e.node.menu, "hidden", !0)
            })), this.bind("initBlocker:after:sr-text", (function () {
               y(M.node.blck, "a").forEach((function (t) {
                  t.innerHTML = M.sr_text(e.i18n(e.conf.screenReader.text.closeMenu))
               }))
            })), this.clck.push((function (t, n) {
               var i = p(e.node.menu.id);
               if (i && t.matches('[href="#' + i + '"]')) {
                  if (n.inMenu) return e.open(), !0;
                  var s = t.closest(".mm-menu");
                  if (s) {
                     var a = s.mmApi;
                     if (a && a.close) return a.close(), m(s, (function () {
                        e.open()
                     }), e.conf.transitionDuration), !0
                  }
                  return e.open(), !0
               }
               if ((i = M.node.page.id) && t.matches('[href="#' + i + '"]')) return e.close(), !0
            }))
         }
      },
      screenReader: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  aria: e,
                  text: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.screenReader);
         this.opts.screenReader = o(t, M.options.screenReader);
         var n = this.conf.screenReader;
         t.aria && (this.bind("initAddons:after", (function () {
            e.bind("initMenu:after", (function () {
               this.trigger("initMenu:after:sr-aria", [].slice.call(arguments))
            })), e.bind("initNavbar:after", (function () {
               this.trigger("initNavbar:after:sr-aria", [].slice.call(arguments))
            })), e.bind("openPanel:start", (function () {
               this.trigger("openPanel:start:sr-aria", [].slice.call(arguments))
            })), e.bind("close:start", (function () {
               this.trigger("close:start:sr-aria", [].slice.call(arguments))
            })), e.bind("close:finish", (function () {
               this.trigger("close:finish:sr-aria", [].slice.call(arguments))
            })), e.bind("open:start", (function () {
               this.trigger("open:start:sr-aria", [].slice.call(arguments))
            })), e.bind("initOpened:after", (function () {
               this.trigger("initOpened:after:sr-aria", [].slice.call(arguments))
            }))
         })), this.bind("updateListview", (function () {
            e.node.pnls.querySelectorAll(".mm-listitem").forEach((function (e) {
               M.sr_aria(e, "hidden", e.matches(".mm-hidden"))
            }))
         })), this.bind("openPanel:start", (function (t) {
            var n = _(e.node.pnls, ".mm-panel").filter((function (e) {
                  return e !== t
               })).filter((function (e) {
                  return !e.parentElement.matches(".mm-panel")
               })),
               i = [t];
            _(t, ".mm-listitem_vertical .mm-listitem_opened").forEach((function (e) {
               i.push.apply(i, y(e, ".mm-panel"))
            })), n.forEach((function (e) {
               M.sr_aria(e, "hidden", !0)
            })), i.forEach((function (e) {
               M.sr_aria(e, "hidden", !1)
            }))
         })), this.bind("closePanel", (function (e) {
            M.sr_aria(e, "hidden", !0)
         })), this.bind("initPanel:after", (function (e) {
            _(e, ".mm-btn").forEach((function (e) {
               M.sr_aria(e, "haspopup", !0);
               var t = e.getAttribute("href");
               t && M.sr_aria(e, "owns", t.replace("#", ""))
            }))
         })), this.bind("initNavbar:after", (function (e) {
            var t = y(e, ".mm-navbar")[0],
               n = t.matches(".mm-hidden");
            M.sr_aria(t, "hidden", n)
         })), t.text && "parent" == this.opts.navbar.titleLink && this.bind("initNavbar:after", (function (e) {
            var t = y(e, ".mm-navbar")[0],
               n = !!t.querySelector(".mm-btn_prev");
            M.sr_aria(_(t, ".mm-navbar__title")[0], "hidden", n)
         }))), t.text && (this.bind("initAddons:after", (function () {
            e.bind("setPage:after", (function () {
               this.trigger("setPage:after:sr-text", [].slice.call(arguments))
            })), e.bind("initBlocker:after", (function () {
               this.trigger("initBlocker:after:sr-text", [].slice.call(arguments))
            }))
         })), this.bind("initNavbar:after", (function (t) {
            var i = y(t, ".mm-navbar")[0];
            if (i) {
               var s = y(i, ".mm-btn_prev")[0];
               s && (s.innerHTML = M.sr_text(e.i18n(n.text.closeSubmenu)))
            }
         })), this.bind("initListview:after", (function (t) {
            var i = t.closest(".mm-panel").mmParent;
            if (i) {
               var s = y(i, ".mm-btn_next")[0];
               if (s) {
                  var a = e.i18n(n.text[s.parentElement.matches(".mm-listitem_vertical") ? "toggleSubmenu" : "openSubmenu"]);
                  s.innerHTML += M.sr_text(a)
               }
            }
         })))
      },
      scrollBugFix: function () {
         var e = this;
         if (W && this.opts.offCanvas && this.opts.offCanvas.blockUI) {
            var t = function (e) {
               return "boolean" == typeof e && (e = {
                  fix: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.scrollBugFix);
            if (this.opts.scrollBugFix = o(t, M.options.scrollBugFix), t.fix) {
               var n, i, s = (n = this.node.menu, i = "", n.addEventListener("touchmove", (function (e) {
                  i = "", e.movementY > 0 ? i = "down" : e.movementY < 0 && (i = "up")
               })), {
                  get: function () {
                     return i
                  }
               });
               this.node.menu.addEventListener("scroll", a, {
                  passive: !1
               }), this.node.menu.addEventListener("touchmove", (function (e) {
                  var t = e.target.closest(".mm-panel, .mm-iconbar__top, .mm-iconbar__bottom");
                  t && t.closest(".mm-listitem_vertical") && (t = L(t, ".mm-panel").pop()), t ? (t.scrollHeight === t.offsetHeight || 0 == t.scrollTop && "down" == s.get() || t.scrollHeight == t.scrollTop + t.offsetHeight && "up" == s.get()) && a(e) : a(e)
               }), {
                  passive: !1
               }), this.bind("open:start", (function () {
                  var t = y(e.node.pnls, ".mm-panel_opened")[0];
                  t && (t.scrollTop = 0)
               })), window.addEventListener("orientationchange", (function (t) {
                  var n = y(e.node.pnls, ".mm-panel_opened")[0];
                  n && (n.scrollTop = 0, n.style["-webkit-overflow-scrolling"] = "auto", n.style["-webkit-overflow-scrolling"] = "touch")
               }))
            }
         }

         function a(e) {
            e.preventDefault(), e.stopPropagation()
         }
      },
      autoHeight: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && e && (e = {
                  height: "auto"
               }), "string" == typeof e && (e = {
                  height: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.autoHeight);
         if (this.opts.autoHeight = o(t, M.options.autoHeight), "auto" == t.height || "highest" == t.height) {
            var n, i = (n = function (e) {
               return e.parentElement.matches(".mm-listitem_vertical") && (e = L(e, ".mm-panel").filter((function (e) {
                  return !e.parentElement.matches(".mm-listitem_vertical")
               }))[0]), e
            }, function () {
               if (!e.opts.offCanvas || e.vars.opened) {
                  var i, s, a = 0,
                     o = e.node.menu.offsetHeight - e.node.pnls.offsetHeight;
                  e.node.menu.classList.add("mm-menu_autoheight-measuring"), "auto" == t.height ? ((s = y(e.node.pnls, ".mm-panel_opened")[0]) && (s = n(s)), s || (s = y(e.node.pnls, ".mm-panel")[0]), a = s.scrollHeight) : "highest" == t.height && (i = 0, y(e.node.pnls, ".mm-panel").forEach((function (e) {
                     e = n(e), i = Math.max(i, e.scrollHeight)
                  })), a = i), e.node.menu.style.height = a + o + "px", e.node.menu.classList.remove("mm-menu_autoheight-measuring")
               }
            });
            this.bind("initMenu:after", (function () {
               e.node.menu.classList.add("mm-menu_autoheight")
            })), this.opts.offCanvas && this.bind("open:start", i), "highest" == t.height && this.bind("initPanels:after", i), "auto" == t.height && (this.bind("updateListview", i), this.bind("openPanel:start", i))
         }
      },
      backButton: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t = function (e) {
               return "boolean" == typeof e && (e = {
                  close: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.backButton);
            this.opts.backButton = o(t, M.options.backButton);
            var n = "#" + this.node.menu.id;
            if (t.close) {
               var i = [],
                  s = function () {
                     i = [n], y(e.node.pnls, ".mm-panel_opened, .mm-panel_opened-parent").forEach((function (e) {
                        i.push("#" + e.id)
                     }))
                  };
               this.bind("open:finish", (function () {
                  history.pushState(null, document.title, n)
               })), this.bind("open:finish", s), this.bind("openPanel:finish", s), this.bind("close:finish", (function () {
                  i = [], history.back(), history.pushState(null, document.title, location.pathname + location.search)
               })), window.addEventListener("popstate", (function (t) {
                  if (e.vars.opened && i.length) {
                     var s = (i = i.slice(0, -1))[i.length - 1];
                     s == n ? e.close() : (e.openPanel(e.node.menu.querySelector(s)), history.pushState(null, document.title, n))
                  }
               }))
            }
            t.open && window.addEventListener("popstate", (function (t) {
               e.vars.opened || location.hash != n || e.open()
            }))
         }
      },
      columns: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e
               }), "number" == typeof e && (e = {
                  add: !0,
                  visible: e
               }), "object" != typeof e && (e = {}), "number" == typeof e.visible && (e.visible = {
                  min: e.visible,
                  max: e.visible
               }), e
            }(this.opts.columns);
         if (this.opts.columns = o(t, M.options.columns), t.add) {
            t.visible.min = Math.max(1, Math.min(6, t.visible.min)), t.visible.max = Math.max(t.visible.min, Math.min(6, t.visible.max));
            for (var n = [], i = [], s = ["mm-panel_opened", "mm-panel_opened-parent", "mm-panel_highest"], a = 0; a <= t.visible.max; a++) n.push("mm-menu_columns-" + a), i.push("mm-panel_columns-" + a);
            s.push.apply(s, i), this.bind("openPanel:before", (function (t) {
               var n;
               if (t && (n = t.mmParent), n && !n.classList.contains("mm-listitem_vertical") && (n = n.closest(".mm-panel"))) {
                  var i = n.className;
                  if (i.length && (i = i.split("mm-panel_columns-")[1]))
                     for (var a = parseInt(i.split(" ")[0], 10) + 1; a > 0;) {
                        if (!(t = y(e.node.pnls, ".mm-panel_columns-" + a)[0])) {
                           a = -1;
                           break
                        }
                        a++, t.classList.add("mm-hidden"), s.forEach((function (e) {
                           t.classList.remove(e)
                        }))
                     }
               }
            })), this.bind("openPanel:start", (function (s) {
               if (s) {
                  var a = s.mmParent;
                  if (a && a.classList.contains("mm-listitem_vertical")) return
               }
               var o = y(e.node.pnls, ".mm-panel_opened-parent").length;
               s.matches(".mm-panel_opened-parent") || o++, o = Math.min(t.visible.max, Math.max(t.visible.min, o)), n.forEach((function (t) {
                  e.node.menu.classList.remove(t)
               })), e.node.menu.classList.add("mm-menu_columns-" + o);
               var r = [];
               y(e.node.pnls, ".mm-panel").forEach((function (e) {
                  i.forEach((function (t) {
                     e.classList.remove(t)
                  })), e.matches(".mm-panel_opened-parent") && r.push(e)
               })), r.push(s), r.slice(-t.visible.max).forEach((function (e, t) {
                  e.classList.add("mm-panel_columns-" + t)
               }))
            }))
         }
      },
      counters: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e,
                  addTo: "panels",
                  count: e
               }), "object" != typeof e && (e = {}), "panels" == e.addTo && (e.addTo = ".mm-listview"), e
            }(this.opts.counters);
         if (this.opts.counters = o(t, M.options.counters), this.bind("initListview:after", (function (t) {
               var n = e.conf.classNames.counters.counter;
               _(t, "." + n).forEach((function (e) {
                  x(e, n, "mm-counter")
               }))
            })), t.add && this.bind("initListview:after", (function (e) {
               if (e.matches(t.addTo)) {
                  var n = e.closest(".mm-panel").mmParent;
                  if (n && !_(n, ".mm-counter").length) {
                     var i = y(n, ".mm-btn")[0];
                     i && i.prepend(g("span.mm-counter"))
                  }
               }
            })), t.count) {
            var n = function (t) {
               (t ? [t.closest(".mm-panel")] : y(e.node.pnls, ".mm-panel")).forEach((function (e) {
                  var t = e.mmParent;
                  if (t) {
                     var n = _(t, ".mm-counter")[0];
                     if (n) {
                        var i = [];
                        y(e, ".mm-listview").forEach((function (e) {
                           i.push.apply(i, y(e))
                        })), n.innerHTML = w(i).length.toString()
                     }
                  }
               }))
            };
            this.bind("initListview:after", n), this.bind("updateListview", n)
         }
      },
      dividers: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e
               }), "object" != typeof e && (e = {}), "panels" == e.addTo && (e.addTo = ".mm-listview"), e
            }(this.opts.dividers);
         this.opts.dividers = o(t, M.options.dividers), this.bind("initListview:after", (function (t) {
            y(t).forEach((function (t) {
               x(t, e.conf.classNames.divider, "mm-divider"), t.matches(".mm-divider") && t.classList.remove("mm-listitem")
            }))
         })), t.add && this.bind("initListview:after", (function (e) {
            if (e.matches(t.addTo)) {
               _(e, ".mm-divider").forEach((function (e) {
                  e.remove()
               }));
               var n = "";
               w(y(e)).forEach((function (t) {
                  var i = y(t, ".mm-listitem__text")[0].textContent.trim().toLowerCase()[0];
                  if (i.length && i != n) {
                     n = i;
                     var s = g("li.mm-divider");
                     s.textContent = i, e.insertBefore(s, t)
                  }
               }))
            }
         }))
      },
      drag: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t = function (e) {
               return "boolean" == typeof e && (e = {
                  open: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.drag);
            this.opts.drag = o(t, M.options.drag), t.open && this.bind("setPage:after", (function (n) {
               ce.call(e, t.node || n)
            }))
         }
      },
      dropdown: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t = function (e) {
               return "boolean" == typeof e && e && (e = {
                  drop: e
               }), "object" != typeof e && (e = {}), "string" == typeof e.position && (e.position = {
                  of: e.position
               }), e
            }(this.opts.dropdown);
            this.opts.dropdown = o(t, M.options.dropdown);
            var n = this.conf.dropdown;
            if (t.drop) {
               var i;
               this.bind("initMenu:after", (function () {
                  if (e.node.menu.classList.add("mm-menu_dropdown"), "string" != typeof t.position.of) {
                     var n = p(e.node.menu.id);
                     n && (t.position.of = '[href="#' + n + '"]')
                  }
                  if ("string" == typeof t.position.of) {
                     i = _(document.body, t.position.of)[0];
                     var s = t.event.split(" ");
                     1 == s.length && (s[1] = s[0]), "hover" == s[0] && i.addEventListener("mouseenter", (function () {
                        e.open()
                     }), {
                        passive: !0
                     }), "hover" == s[1] && e.node.menu.addEventListener("mouseleave", (function () {
                        e.close()
                     }), {
                        passive: !0
                     })
                  }
               })), this.bind("open:start", (function () {
                  e.node.menu.mmStyle = e.node.menu.getAttribute("style"), e.node.wrpr.classList.add("mm-wrapper_dropdown")
               })), this.bind("close:finish", (function () {
                  e.node.menu.setAttribute("style", e.node.menu.mmStyle), e.node.wrpr.classList.remove("mm-wrapper_dropdown")
               }));
               var s = function (e, s) {
                  var a, o, r, c = s[0],
                     m = s[1],
                     l = "x" == e ? "offsetWidth" : "offsetHeight",
                     d = "x" == e ? "left" : "top",
                     p = "x" == e ? "right" : "bottom",
                     u = "x" == e ? "width" : "height",
                     f = "x" == e ? "innerWidth" : "innerHeight",
                     h = "x" == e ? "maxWidth" : "maxHeight",
                     v = null,
                     b = (a = d, i.getBoundingClientRect()[a] + document.body["left" === a ? "scrollLeft" : "scrollTop"]),
                     g = b + i[l],
                     _ = window[f],
                     y = n.offset.button[e] + n.offset.viewport[e];
                  if (t.position[e]) switch (t.position[e]) {
                     case "left":
                     case "bottom":
                        v = "after";
                        break;
                     case "right":
                     case "top":
                        v = "before"
                  }
                  return null === v && (v = b + (g - b) / 2 < _ / 2 ? "after" : "before"), "after" == v ? (r = _ - ((o = "x" == e ? b : g) + y), c[d] = o + n.offset.button[e] + "px", c[p] = "auto", t.tip && m.push("mm-menu_tip-" + ("x" == e ? "left" : "top"))) : (r = (o = "x" == e ? g : b) - y, c[p] = "calc( 100% - " + (o - n.offset.button[e]) + "px )", c[d] = "auto", t.tip && m.push("mm-menu_tip-" + ("x" == e ? "right" : "bottom"))), t.fitViewport && (c[h] = Math.min(n[u].max, r) + "px"), [c, m]
               };
               this.bind("open:start", a), window.addEventListener("resize", (function (t) {
                  a.call(e)
               }), {
                  passive: !0
               }), this.opts.offCanvas.blockUI || window.addEventListener("scroll", (function (t) {
                  a.call(e)
               }), {
                  passive: !0
               })
            }
         }

         function a() {
            var e = this;
            if (this.vars.opened) {
               this.node.menu.setAttribute("style", this.node.menu.mmStyle);
               var n = [{},
                  []
               ];
               for (var i in n = s.call(this, "y", n), (n = s.call(this, "x", n))[0]) this.node.menu.style[i] = n[0][i];
               if (t.tip) {
                  ["mm-menu_tip-left", "mm-menu_tip-right", "mm-menu_tip-top", "mm-menu_tip-bottom"].forEach((function (t) {
                     e.node.menu.classList.remove(t)
                  })), n[1].forEach((function (t) {
                     e.node.menu.classList.add(t)
                  }))
               }
            }
         }
      },
      fixedElements: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t, n, i = this.conf.fixedElements;
            this.bind("setPage:after", (function (s) {
               t = e.conf.classNames.fixedElements.fixed, n = _(document, i.insertSelector)[0], _(s, "." + t).forEach((function (e) {
                  x(e, t, "mm-slideout"), n[i.insertMethod](e)
               }))
            }))
         }
      },
      iconbar: function () {
         var e, t = this,
            n = function (e) {
               return "array" == r(e) && (e = {
                  use: !0,
                  top: e
               }), "object" != r(e) && (e = {}), void 0 === e.use && (e.use = !0), "boolean" == typeof e.use && e.use && (e.use = !0), e
            }(this.opts.iconbar);
         if ((this.opts.iconbar = o(n, M.options.iconbar), n.use) && (["top", "bottom"].forEach((function (t, i) {
               var s = n[t];
               "array" != r(s) && (s = [s]);
               for (var a = g("div.mm-iconbar__" + t), o = 0, c = s.length; o < c; o++) "string" == typeof s[o] ? a.innerHTML += s[o] : a.append(s[o]);
               a.children.length && (e || (e = g("div.mm-iconbar")), e.append(a))
            })), e)) {
            this.bind("initMenu:after", (function () {
               t.node.menu.prepend(e)
            }));
            var i = "mm-menu_iconbar-" + n.position,
               s = function () {
                  t.node.menu.classList.add(i), M.sr_aria(e, "hidden", !1)
               };
            if ("boolean" == typeof n.use ? this.bind("initMenu:after", s) : k(n.use, s, (function () {
                  t.node.menu.classList.remove(i), M.sr_aria(e, "hidden", !0)
               })), "tabs" == n.type) {
               e.classList.add("mm-iconbar_tabs"), e.addEventListener("click", (function (e) {
                  var n = e.target;
                  if (n.matches("a"))
                     if (n.matches(".mm-iconbar__tab_selected")) e.stopImmediatePropagation();
                     else try {
                        var i = t.node.menu.querySelector(n.getAttribute("href"))[0];
                        i && i.matches(".mm-panel") && (e.preventDefault(), e.stopImmediatePropagation(), t.openPanel(i, !1))
                     } catch (e) {}
               }));
               var a = function (t) {
                  _(e, "a").forEach((function (e) {
                     e.classList.remove("mm-iconbar__tab_selected")
                  }));
                  var n = _(e, '[href="#' + t.id + '"]')[0];
                  if (n) n.classList.add("mm-iconbar__tab_selected");
                  else {
                     var i = t.mmParent;
                     i && a(i.closest(".mm-panel"))
                  }
               };
               this.bind("openPanel:start", a)
            }
         }
      },
      iconPanels: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e
               }), "number" != typeof e && "string" != typeof e || (e = {
                  add: !0,
                  visible: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.iconPanels);
         this.opts.iconPanels = o(t, M.options.iconPanels);
         var n = !1;
         if ("first" == t.visible && (n = !0, t.visible = 1), t.visible = Math.min(3, Math.max(1, t.visible)), t.visible++, t.add) {
            this.bind("initMenu:after", (function () {
               var n = ["mm-menu_iconpanel"];
               t.hideNavbar && n.push("mm-menu_hidenavbar"), t.hideDivider && n.push("mm-menu_hidedivider"), n.forEach((function (t) {
                  e.node.menu.classList.add(t)
               }))
            }));
            var i = [];
            if (!n)
               for (var s = 0; s <= t.visible; s++) i.push("mm-panel_iconpanel-" + s);
            this.bind("openPanel:start", (function (s) {
               var a = y(e.node.pnls, ".mm-panel");
               if (!(s = s || a[0]).parentElement.matches(".mm-listitem_vertical"))
                  if (n) a.forEach((function (e, t) {
                     e.classList[0 == t ? "add" : "remove"]("mm-panel_iconpanel-first")
                  }));
                  else {
                     a.forEach((function (e) {
                        i.forEach((function (t) {
                           e.classList.remove(t)
                        }))
                     })), a = a.filter((function (e) {
                        return e.matches(".mm-panel_opened-parent")
                     }));
                     var o = !1;
                     a.forEach((function (e) {
                        s === e && (o = !0)
                     })), o || a.push(s), a.forEach((function (e) {
                        e.classList.remove("mm-hidden")
                     })), (a = a.slice(-t.visible)).forEach((function (e, t) {
                        e.classList.add("mm-panel_iconpanel-" + t)
                     }))
                  }
            })), this.bind("initPanel:after", (function (e) {
               if (t.blockPanel && !e.parentElement.matches(".mm-listitem_vertical") && !y(e, ".mm-panel__blocker")[0]) {
                  var n = g("a.mm-panel__blocker");
                  n.setAttribute("href", "#" + e.closest(".mm-panel").id), e.prepend(n)
               }
            }))
         }
      },
      keyboardNavigation: function () {
         var e = this;
         if (!W) {
            var t = function (e) {
               return "boolean" != typeof e && "string" != typeof e || (e = {
                  enable: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.keyboardNavigation);
            if (this.opts.keyboardNavigation = o(t, M.options.keyboardNavigation), t.enable) {
               var n = g("button.mm-tabstart.mm-sronly"),
                  i = g("button.mm-tabend.mm-sronly"),
                  s = g("button.mm-tabend.mm-sronly");
               this.bind("initMenu:after", (function () {
                  t.enhance && e.node.menu.classList.add("mm-menu_keyboardfocus"), ve.call(e, t.enhance)
               })), this.bind("initOpened:before", (function () {
                  e.node.menu.prepend(n), e.node.menu.append(i), y(e.node.menu, ".mm-navbars-top, .mm-navbars-bottom").forEach((function (e) {
                     e.querySelectorAll(".mm-navbar__title").forEach((function (e) {
                        e.setAttribute("tabindex", "-1")
                     }))
                  }))
               })), this.bind("initBlocker:after", (function () {
                  M.node.blck.append(s), y(M.node.blck, "a")[0].classList.add("mm-tabstart")
               }));
               var a = "input, select, textarea, button, label, a[href]",
                  r = function (n) {
                     n = n || y(e.node.pnls, ".mm-panel_opened")[0];
                     var i = null,
                        s = document.activeElement.closest(".mm-navbar");
                     if (!s || s.closest(".mm-menu") != e.node.menu) {
                        if ("default" == t.enable && ((i = _(n, ".mm-listview a[href]:not(.mm-hidden)")[0]) || (i = _(n, a + ":not(.mm-hidden)")[0]), !i)) {
                           var o = [];
                           y(e.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach((function (e) {
                              o.push.apply(o, _(e, a + ":not(.mm-hidden)"))
                           })), i = o[0]
                        }
                        i || (i = y(e.node.menu, ".mm-tabstart")[0]), i && i.focus()
                     }
                  };
               this.bind("open:finish", r), this.bind("openPanel:finish", r), this.bind("initOpened:after:sr-aria", (function () {
                  [e.node.menu, M.node.blck].forEach((function (e) {
                     y(e, ".mm-tabstart, .mm-tabend").forEach((function (e) {
                        M.sr_aria(e, "hidden", !0), M.sr_role(e, "presentation")
                     }))
                  }))
               }))
            }
         }
      },
      lazySubmenus: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  load: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.lazySubmenus);
         this.opts.lazySubmenus = o(t, M.options.lazySubmenus), t.load && (this.bind("initPanels:before", (function () {
            var t = [];
            _(e.node.pnls, "li").forEach((function (n) {
               t.push.apply(t, y(n, e.conf.panelNodetype.join(", ")))
            })), t.filter((function (e) {
               return !e.matches(".mm-listview_inset")
            })).filter((function (e) {
               return !e.matches(".mm-nolistview")
            })).filter((function (e) {
               return !e.matches(".mm-nopanel")
            })).forEach((function (e) {
               ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach((function (t) {
                  e.classList.add(t)
               }))
            }))
         })), this.bind("initPanels:before", (function () {
            var t = [];
            _(e.node.pnls, "." + e.conf.classNames.selected).forEach((function (e) {
               t.push.apply(t, L(e, ".mm-panel_lazysubmenu"))
            })), t.length && t.forEach((function (e) {
               console.log(e);
               ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach((function (t) {
                  e.classList.remove(t)
               }))
            }))
         })), this.bind("openPanel:before", (function (t) {
            var n = _(t, ".mm-panel_lazysubmenu").filter((function (e) {
               return !e.matches(".mm-panel_lazysubmenu .mm-panel_lazysubmenu")
            }));
            t.matches(".mm-panel_lazysubmenu") && n.unshift(t), n.forEach((function (t) {
               ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach((function (e) {
                  t.classList.remove(e)
               })), e.initPanel(t)
            }))
         })))
      },
      navbars: ye,
      pageScroll: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  scroll: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.pageScroll);
         this.opts.pageScroll = o(t, M.options.pageScroll);
         var n, i = this.conf.pageScroll;

         function s() {
            n && window.scrollTo({
               top: n.getBoundingClientRect().top + document.scrollingElement.scrollTop - i.scrollOffset,
               behavior: "smooth"
            }), n = null
         }

         function a(e) {
            try {
               return "#" != e && "#" == e.slice(0, 1) ? M.node.page.querySelector(e) : null
            } catch (e) {
               return null
            }
         }
         if (t.scroll && this.bind("close:finish", (function () {
               s()
            })), this.opts.offCanvas && t.scroll && this.clck.push((function (t, i) {
               if (n = null, i.inMenu) {
                  var o = t.getAttribute("href");
                  if (n = a(o)) return e.node.menu.matches(".mm-menu_sidebar-expanded") && e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") ? void s() : {
                     close: !0
                  }
               }
            })), t.update) {
            var r = [];
            this.bind("initListview:after", (function (e) {
               E(y(e, ".mm-listitem")).forEach((function (e) {
                  var t = a(e.getAttribute("href"));
                  t && r.unshift(t)
               }))
            }));
            var c = -1;
            window.addEventListener("scroll", (function (t) {
               for (var n = window.scrollY, s = 0; s < r.length; s++)
                  if (r[s].offsetTop < n + i.updateOffset) {
                     if (c !== s) {
                        c = s;
                        var a = E(_(y(e.node.pnls, ".mm-panel_opened")[0], ".mm-listitem"));
                        (a = a.filter((function (e) {
                           return e.matches('[href="#' + r[s].id + '"]')
                        }))).length && e.setSelected(a[0].parentElement)
                     }
                     break
                  }
            }))
         }
      },
      searchfield: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e
               }), "object" != typeof e && (e = {}), "boolean" == typeof e.panel && (e.panel = {
                  add: e.panel
               }), "object" != typeof e.panel && (e.panel = {}), "panel" == e.addTo && (e.panel.add = !0), e.panel.add && (e.showSubPanels = !1, e.panel.splash && (e.cancel = !0)), e
            }(this.opts.searchfield);
         this.opts.searchfield = o(t, M.options.searchfield);
         this.conf.searchfield;
         t.add && (this.bind("close:start", (function () {
            _(e.node.menu, ".mm-searchfield").forEach((function (e) {
               e.blur()
            }))
         })), this.bind("initPanel:after", (function (n) {
            var i = null;
            t.panel.add && (i = Ae.call(e));
            var s = null;
            switch (t.addTo) {
               case "panels":
                  s = [n];
                  break;
               case "panel":
                  s = [i];
                  break;
               default:
                  "string" == typeof t.addTo ? s = _(e.node.menu, t.addTo) : "array" == r(t.addTo) && (s = t.addTo)
            }
            s.forEach((function (n) {
               n = Te.call(e, n), t.search && n && Ce.call(e, n)
            })), t.noResults && Ne.call(e, t.panel.add ? i : n)
         })), this.clck.push((function (t, n) {
            if (n.inMenu && t.matches(".mm-searchfield__btn")) {
               if (t.matches(".mm-btn_close")) {
                  var i = _(s = t.closest(".mm-searchfield"), "input")[0];
                  return i.value = "", e.search(i), !0
               }
               var s;
               if (t.matches(".mm-btn_next")) return (s = t.closest("form")) && s.submit(), !0
            }
         })))
      },
      sectionIndexer: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  add: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.sectionIndexer);
         this.opts.sectionIndexer = o(t, M.options.sectionIndexer), t.add && this.bind("initPanels:after", (function () {
            if (!e.node.indx) {
               var t = "";
               "abcdefghijklmnopqrstuvwxyz".split("").forEach((function (e) {
                  t += '<a href="#">' + e + "</a>"
               }));
               var n = g("div.mm-sectionindexer");
               n.innerHTML = t, e.node.pnls.prepend(n), e.node.indx = n, e.node.indx.addEventListener("click", (function (e) {
                  e.target.matches("a") && e.preventDefault()
               }));
               var i = function (t) {
                  if (t.target.matches("a")) {
                     var n = t.target.textContent,
                        i = y(e.node.pnls, ".mm-panel_opened")[0],
                        s = -1,
                        a = i.scrollTop;
                     i.scrollTop = 0, _(i, ".mm-divider").filter((function (e) {
                        return !e.matches(".mm-hidden")
                     })).forEach((function (e) {
                        s < 0 && n == e.textContent.trim().slice(0, 1).toLowerCase() && (s = e.offsetTop)
                     })), i.scrollTop = s > -1 ? s : a
                  }
               };
               W ? (e.node.indx.addEventListener("touchstart", i), e.node.indx.addEventListener("touchmove", i)) : e.node.indx.addEventListener("mouseover", i)
            }
            e.bind("openPanel:start", (function (t) {
               var n = _(t, ".mm-divider").filter((function (e) {
                  return !e.matches(".mm-hidden")
               })).length;
               e.node.indx.classList[n ? "add" : "remove"]("mm-sectionindexer_active")
            }))
         }))
      },
      setSelected: function () {
         var e = this,
            t = function (e) {
               return "boolean" == typeof e && (e = {
                  hover: e,
                  parent: e
               }), "object" != typeof e && (e = {}), e
            }(this.opts.setSelected);
         if (this.opts.setSelected = o(t, M.options.setSelected), "detect" == t.current) {
            var n = function (t) {
               t = t.split("?")[0].split("#")[0];
               var i = e.node.menu.querySelector('a[href="' + t + '"], a[href="' + t + '/"]');
               if (i) e.setSelected(i.parentElement);
               else {
                  var s = t.split("/").slice(0, -1);
                  s.length && n(s.join("/"))
               }
            };
            this.bind("initMenu:after", (function () {
               n.call(e, window.location.href)
            }))
         } else t.current || this.bind("initListview:after", (function (e) {
            y(e, ".mm-listitem_selected").forEach((function (e) {
               e.classList.remove("mm-listitem_selected")
            }))
         }));
         t.hover && this.bind("initMenu:after", (function () {
            e.node.menu.classList.add("mm-menu_selected-hover")
         })), t.parent && (this.bind("openPanel:finish", (function (t) {
            _(e.node.pnls, ".mm-listitem_selected-parent").forEach((function (e) {
               e.classList.remove("mm-listitem_selected-parent")
            }));
            for (var n = t.mmParent; n;) n.matches(".mm-listitem_vertical") || n.classList.add("mm-listitem_selected-parent"), n = (n = n.closest(".mm-panel")).mmParent
         })), this.bind("initMenu:after", (function () {
            e.node.menu.classList.add("mm-menu_selected-parent")
         })))
      },
      sidebar: function () {
         var e = this;
         if (this.opts.offCanvas) {
            var t = function (e) {
               return ("string" == typeof e || "boolean" == typeof e && e || "number" == typeof e) && (e = {
                  expanded: e
               }), "object" != typeof e && (e = {}), "boolean" == typeof e.collapsed && e.collapsed && (e.collapsed = {
                  use: !0
               }), "string" != typeof e.collapsed && "number" != typeof e.collapsed || (e.collapsed = {
                  use: e.collapsed
               }), "object" != typeof e.collapsed && (e.collapsed = {}), "boolean" == typeof e.expanded && e.expanded && (e.expanded = {
                  use: !0
               }), "string" != typeof e.expanded && "number" != typeof e.expanded || (e.expanded = {
                  use: e.expanded
               }), "object" != typeof e.expanded && (e.expanded = {}), e
            }(this.opts.sidebar);
            if (this.opts.sidebar = o(t, M.options.sidebar), t.collapsed.use) {
               this.bind("initMenu:after", (function () {
                  if (e.node.menu.classList.add("mm-menu_sidebar-collapsed"), t.collapsed.blockMenu && e.opts.offCanvas && !y(e.node.menu, ".mm-menu__blocker")[0]) {
                     var n = g("a.mm-menu__blocker");
                     n.setAttribute("href", "#" + e.node.menu.id), e.node.menu.prepend(n)
                  }
                  t.collapsed.hideNavbar && e.node.menu.classList.add("mm-menu_hidenavbar"), t.collapsed.hideDivider && e.node.menu.classList.add("mm-menu_hidedivider")
               }));
               var n = function () {
                     e.node.wrpr.classList.add("mm-wrapper_sidebar-collapsed")
                  },
                  i = function () {
                     e.node.wrpr.classList.remove("mm-wrapper_sidebar-collapsed")
                  };
               "boolean" == typeof t.collapsed.use ? this.bind("initMenu:after", n) : k(t.collapsed.use, n, i)
            }
            if (t.expanded.use) {
               this.bind("initMenu:after", (function () {
                  e.node.menu.classList.add("mm-menu_sidebar-expanded")
               }));
               n = function () {
                  e.node.wrpr.classList.add("mm-wrapper_sidebar-expanded"), e.node.wrpr.matches(".mm-wrapper_sidebar-closed") || e.open()
               }, i = function () {
                  e.node.wrpr.classList.remove("mm-wrapper_sidebar-expanded"), e.close()
               };
               "boolean" == typeof t.expanded.use ? this.bind("initMenu:after", n) : k(t.expanded.use, n, i), this.bind("close:start", (function () {
                  e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") && (e.node.wrpr.classList.add("mm-wrapper_sidebar-closed"), "remember" == t.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "closed"))
               })), this.bind("open:start", (function () {
                  e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") && (e.node.wrpr.classList.remove("mm-wrapper_sidebar-closed"), "remember" == t.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "open"))
               }));
               var s = t.expanded.initial;
               if ("remember" == t.expanded.initial) {
                  var a = window.localStorage.getItem("mmenuExpandedState");
                  switch (a) {
                     case "open":
                     case "closed":
                        s = a
                  }
               }
               "closed" == s && this.bind("initMenu:after", (function () {
                  e.node.wrpr.classList.add("mm-wrapper_sidebar-closed")
               })), this.clck.push((function (n, i) {
                  if (i.inMenu && i.inListview && e.node.wrpr.matches(".mm-wrapper_sidebar-expanded")) return {
                     close: "closed" == t.expanded.initial
                  }
               }))
            }
         }
      },
      toggles: function () {
         var e = this;
         this.bind("initPanel:after", (function (t) {
            _(t, "input").forEach((function (t) {
               x(t, e.conf.classNames.toggles.toggle, "mm-toggle"), x(t, e.conf.classNames.toggles.check, "mm-check")
            }))
         }))
      }
   }, M.wrappers = {
      angular: function () {
         this.opts.onClick = {
            close: !0,
            preventDefault: !1,
            setSelected: !0
         }
      },
      bootstrap: function () {
         var e = this;
         if (this.node.menu.matches(".navbar-collapse")) {
            this.conf.offCanvas && (this.conf.offCanvas.clone = !1);
            var t = g("nav"),
               n = g("div");
            t.append(n), y(this.node.menu).forEach((function (t) {
               switch (!0) {
                  case t.matches(".navbar-nav"):
                     n.append(function (e) {
                        var t = g("ul");
                        return _(e, ".nav-item").forEach((function (e) {
                           var n = g("li");
                           if (e.matches(".active") && n.classList.add("Selected"), !e.matches(".nav-link")) {
                              var i = y(e, ".dropdown-menu")[0];
                              i && n.append(o(i)), e = y(e, ".nav-link")[0]
                           }
                           n.prepend(a(e)), t.append(n)
                        })), t
                     }(t));
                     break;
                  case t.matches(".dropdown-menu"):
                     n.append(o(t));
                     break;
                  case t.matches(".form-inline"):
                     e.conf.searchfield.form = {
                        action: t.getAttribute("action") || null,
                        method: t.getAttribute("method") || null
                     }, e.conf.searchfield.input = {
                        name: t.querySelector("input").getAttribute("name") || null
                     }, e.conf.searchfield.clear = !1, e.conf.searchfield.submit = !0;
                     break;
                  default:
                     n.append(t.cloneNode(!0))
               }
            })), this.bind("initMenu:before", (function () {
               document.body.prepend(t), e.node.menu = t
            }));
            var i = this.node.menu.parentElement;
            if (i) {
               var s = i.querySelector(".navbar-toggler");
               s && (s.removeAttribute("data-target"), s.removeAttribute("aria-controls"), s.outerHTML = s.outerHTML, (s = i.querySelector(".navbar-toggler")).addEventListener("click", (function (t) {
                  t.preventDefault(), t.stopImmediatePropagation(), e[e.vars.opened ? "close" : "open"]()
               })))
            }
         }

         function a(e) {
            for (var t = g(e.matches("a") ? "a" : "span"), n = ["href", "title", "target"], i = 0; i < n.length; i++) e.getAttribute(n[i]) && t.setAttribute(n[i], e.getAttribute(n[i]));
            return t.innerHTML = e.innerHTML, _(t, ".sr-only").forEach((function (e) {
               e.remove()
            })), t
         }

         function o(e) {
            var t = g("ul");
            return y(e).forEach((function (e) {
               var n = g("li");
               e.matches(".dropdown-divider") ? n.classList.add("Divider") : e.matches(".dropdown-item") && n.append(a(e)), t.append(n)
            })), t
         }
      },
      olark: function () {
         this.conf.offCanvas.page.noSelector.push("#olark")
      },
      turbolinks: function () {
         var e;
         document.addEventListener("turbolinks:before-visit", (function (t) {
            e = document.querySelector(".mm-wrapper").className.split(" ").filter((function (e) {
               return /mm-/.test(e)
            }))
         })), document.addEventListener("turbolinks:load", (function (t) {
            void 0 !== e && (document.querySelector(".mm-wrapper").className = e)
         }))
      },
      wordpress: function () {
         this.conf.classNames.selected = "current-menu-item";
         var e = document.getElementById("wpadminbar");
         e && (e.style.position = "fixed", e.classList.add("mm-slideout"))
      }
   };
   var Oe;
   t.default = M;
   window && (window.Mmenu = M), (Oe = window.jQuery || window.Zepto || null) && (Oe.fn.mmenu = function (e, t) {
      var n = Oe();
      return this.each((function (i, s) {
         if (!s.mmApi) {
            var a = new M(s, e, t),
               o = Oe(a.node.menu);
            o.data("mmenu", a.API), n = n.add(o)
         }
      })), n
   })
}]);
! function (i, h, m, e, d, k, f) {
   new(function () {});
   var c = {
      q: m.PI,
      l: m.max,
      j: m.min,
      H: m.ceil,
      G: m.floor,
      P: m.abs,
      eb: m.sin,
      Gb: m.cos,
      qe: m.tan,
      sh: m.atan,
      zh: m.atan2,
      Hb: m.sqrt,
      z: m.pow,
      Tc: m.random,
      $Round: m.round,
      Y: function (d, b) {
         var a = c.z(10, b || 0);
         return c.$Round(d * a) / a
      }
   };

   function r(a) {
      return function (b) {
         return c.$Round(b * a) / a
      }
   }
   var g = i.$Jease$ = {
      $Swing: function (a) {
         return -c.Gb(a * c.q) / 2 + .5
      },
      $Linear: function (a) {
         return a
      },
      $InQuad: function (a) {
         return a * a
      },
      $OutQuad: function (a) {
         return -a * (a - 2)
      },
      $InOutQuad: function (a) {
         return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
      },
      $InCubic: function (a) {
         return a * a * a
      },
      $OutCubic: function (a) {
         return (a -= 1) * a * a + 1
      },
      $InOutCubic: function (a) {
         return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
      },
      $InQuart: function (a) {
         return a * a * a * a
      },
      $OutQuart: function (a) {
         return -((a -= 1) * a * a * a - 1)
      },
      $InOutQuart: function (a) {
         return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
      },
      $InQuint: function (a) {
         return a * a * a * a * a
      },
      $OutQuint: function (a) {
         return (a -= 1) * a * a * a * a + 1
      },
      $InOutQuint: function (a) {
         return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
      },
      $InSine: function (a) {
         return 1 - c.Gb(c.q / 2 * a)
      },
      $OutSine: function (a) {
         return c.eb(c.q / 2 * a)
      },
      $InOutSine: function (a) {
         return -1 / 2 * (c.Gb(c.q * a) - 1)
      },
      $InExpo: function (a) {
         return a == 0 ? 0 : c.z(2, 10 * (a - 1))
      },
      $OutExpo: function (a) {
         return a == 1 ? 1 : -c.z(2, -10 * a) + 1
      },
      $InOutExpo: function (a) {
         return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.z(2, 10 * (a - 1)) : 1 / 2 * (-c.z(2, -10 * --a) + 2)
      },
      $InCirc: function (a) {
         return -(c.Hb(1 - a * a) - 1)
      },
      $OutCirc: function (a) {
         return c.Hb(1 - (a -= 1) * a)
      },
      $InOutCirc: function (a) {
         return (a *= 2) < 1 ? -1 / 2 * (c.Hb(1 - a * a) - 1) : 1 / 2 * (c.Hb(1 - (a -= 2) * a) + 1)
      },
      $InElastic: function (a) {
         if (!a || a == 1) return a;
         var b = .3,
            d = .075;
         return -(c.z(2, 10 * (a -= 1)) * c.eb((a - d) * 2 * c.q / b))
      },
      $OutElastic: function (a) {
         if (!a || a == 1) return a;
         var b = .3,
            d = .075;
         return c.z(2, -10 * a) * c.eb((a - d) * 2 * c.q / b) + 1
      },
      $InOutElastic: function (a) {
         if (!a || a == 1) return a;
         var b = .45,
            d = .1125;
         return (a *= 2) < 1 ? -.5 * c.z(2, 10 * (a -= 1)) * c.eb((a - d) * 2 * c.q / b) : c.z(2, -10 * (a -= 1)) * c.eb((a - d) * 2 * c.q / b) * .5 + 1
      },
      $InBack: function (a) {
         var b = 1.70158;
         return a * a * ((b + 1) * a - b)
      },
      $OutBack: function (a) {
         var b = 1.70158;
         return (a -= 1) * a * ((b + 1) * a + b) + 1
      },
      $InOutBack: function (a) {
         var b = 1.70158;
         return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
      },
      $InBounce: function (a) {
         return 1 - g.$OutBounce(1 - a)
      },
      $OutBounce: function (a) {
         return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
      },
      $InOutBounce: function (a) {
         return a < 1 / 2 ? g.$InBounce(a * 2) * .5 : g.$OutBounce(a * 2 - 1) * .5 + .5
      },
      $GoBack: function (a) {
         return 1 - c.P(2 - 1)
      },
      $InWave: function (a) {
         return 1 - c.Gb(a * c.q * 2)
      },
      $OutWave: function (a) {
         return c.eb(a * c.q * 2)
      },
      $OutJump: function (a) {
         return 1 - ((a *= 2) < 1 ? (a = 1 - a) * a * a : (a -= 1) * a * a)
      },
      $InJump: function (a) {
         return (a *= 2) < 1 ? a * a * a : (a = 2 - a) * a * a
      },
      $Early: c.H,
      $Late: c.G,
      $Mid: c.$Round,
      $Mid2: r(2),
      $Mid3: r(3),
      $Mid4: r(4),
      $Mid5: r(5),
      $Mid6: r(6)
   };

   function v(k, l, p) {
      var d = this,
         f = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, k || 0, l || 0, p || 0, 1],
         j = c.eb,
         i = c.Gb,
         n = c.qe;

      function h(a) {
         return a * c.q / 180
      }

      function o(b, c, f, g, i, l, n, o, q, t, u, w, y, A, C, F, a, d, e, h, j, k, m, p, r, s, v, x, z, B, D, E) {
         return [b * a + c * j + f * r + g * z, b * d + c * k + f * s + g * B, b * e + c * m + f * v + g * D, b * h + c * p + f * x + g * E, i * a + l * j + n * r + o * z, i * d + l * k + n * s + o * B, i * e + l * m + n * v + o * D, i * h + l * p + n * x + o * E, q * a + t * j + u * r + w * z, q * d + t * k + u * s + w * B, q * e + t * m + u * v + w * D, q * h + t * p + u * x + w * E, y * a + A * j + C * r + F * z, y * d + A * k + C * s + F * B, y * e + A * m + C * v + F * D, y * h + A * p + C * x + F * E]
      }

      function g(b, a) {
         return o.apply(e, (a || f).concat(b))
      }
      d.$Scale = function (a, b, c) {
         if (a != 1 || b != 1 || c != 1) f = g([a, 0, 0, 0, 0, b, 0, 0, 0, 0, c, 0, 0, 0, 0, 1])
      };
      d.$Move = function (a, b, c) {
         f[12] += a || 0;
         f[13] += b || 0;
         f[14] += c || 0
      };
      d.$RotateX = function (b) {
         if (b) {
            a = h(b);
            var c = i(a),
               d = j(a);
            f = g([1, 0, 0, 0, 0, c, d, 0, 0, -d, c, 0, 0, 0, 0, 1])
         }
      };
      d.$RotateY = function (b) {
         if (b) {
            a = h(b);
            var c = i(a),
               d = j(a);
            f = g([c, 0, -d, 0, 0, 1, 0, 0, d, 0, c, 0, 0, 0, 0, 1])
         }
      };
      d.gf = function (a) {
         d.ef(h(a))
      };
      d.ef = function (a) {
         if (a) {
            var b = i(a),
               c = j(a);
            f = g([b, c, 0, 0, -c, b, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
         }
      };
      d.kf = function (a, b) {
         if (a || b) {
            k = h(a);
            l = h(b);
            f = g([1, n(l), 0, 0, n(k), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
         }
      };
      d.yf = function () {
         return "matrix3d(" + f.join(",") + ")"
      };
      d.Cf = function () {
         return "matrix(" + [f[0], f[1], f[4], f[5], f[12], f[13]].join(",") + ")"
      }
   }
   var b = i.$Jssor$ = new function () {
      var a = this,
         Eb = /\S+/g,
         R = 1,
         mb = 2,
         qb = 3,
         pb = 4,
         tb = 5,
         T, t = 0,
         n = 0,
         I = 0,
         M = navigator,
         Ab = M.appName,
         o = M.userAgent,
         r = parseFloat;

      function w(c, a, b) {
         return c.indexOf(a, b)
      }

      function Qb() {
         if (!T) {
            T = {
               wd: "ontouchstart" in i || "createTouch" in h
            };
            var a;
            if (M.pointerEnabled || (a = M.msPointerEnabled)) T.Pe = a ? "msTouchAction" : "touchAction"
         }
         return T
      }

      function y(g) {
         if (!t) {
            t = -1;
            if (Ab == "Microsoft Internet Explorer" && !!i.attachEvent && !!i.ActiveXObject) {
               var e = w(o, "MSIE");
               t = R;
               n = r(o.substring(e + 5, w(o, ";", e)))
            } else if (Ab == "Netscape" && !!i.addEventListener) {
               var d = w(o, "Firefox"),
                  b = w(o, "Safari"),
                  f = w(o, "Chrome"),
                  c = w(o, "AppleWebKit");
               if (d >= 0) {
                  t = mb;
                  n = r(o.substring(d + 8))
               } else if (b >= 0) {
                  var h = o.substring(0, b).lastIndexOf("/");
                  t = f >= 0 ? pb : qb;
                  n = r(o.substring(h + 1, b))
               } else {
                  var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                  if (a) {
                     t = R;
                     n = r(a[1])
                  }
               }
               if (c >= 0) I = r(o.substring(c + 12))
            } else {
               var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
               if (a) {
                  t = tb;
                  n = r(a[2])
               }
            }
         }
         return g == t
      }

      function F() {
         return y(R)
      }

      function ob() {
         return y(qb)
      }

      function sb() {
         return y(tb)
      }

      function B() {
         y();
         return I > 537 || n > 42 || t == R && n >= 11
      }

      function U(a) {
         var b;
         return function (d) {
            if (!b) {
               var c = a.substr(0, 1).toUpperCase() + a.substr(1);
               b = j(["", "WebKit", "ms", "Moz", "O", "webkit"], function (b) {
                  var e = b + (b ? c : a);
                  return d.style[e] != f && e
               }) || a
            }
            return b
         }
      }
      var O = l("transform", 8);

      function J(a) {
         return a
      }

      function P(a) {
         return i.SVGElement && a instanceof i.SVGElement
      }

      function Ob(a) {
         return {}.toString.call(a)
      }
      var S = Array.isArray || function (a) {
            return N(a) == "array"
         },
         wb = {};
      j(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function (a) {
         wb["[object " + a + "]"] = a.toLowerCase()
      });

      function j(b, d) {
         var a, c;
         if (S(b)) {
            for (a = 0; a < m(b); a++)
               if (c = d(b[a], a, b)) return c
         } else
            for (a in b)
               if (c = d(b[a], a, b)) return c
      }

      function N(a) {
         return a == e ? String(a) : wb[Ob(a)] || "object"
      }

      function Z(a) {
         for (var b in a) return d
      }

      function D(a) {
         try {
            return N(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
         } catch (b) {}
      }

      function Db(a, b) {
         return {
            x: a,
            y: b
         }
      }

      function Rb(b, a) {
         setTimeout(b, a || 0)
      }

      function q(a, b) {
         return a === f ? b : a
      }
      a.Ad = Qb;
      a.Ue = F;
      a.Ve = ob;
      a.th = B;
      a.Zc = function () {
         return n
      };
      a.$Delay = Rb;
      a.mc = q;
      a.V = function (a, b) {
         b.call(a);
         return x({}, a)
      };

      function bb(a) {
         a.constructor === bb.caller && a.F && a.F.apply(a, bb.caller.arguments)
      }
      a.F = bb;
      a.$GetElement = function (b) {
         if (a.jh(b)) b = h.getElementById(b);
         return b
      };
      a.oc = function (c) {
         var b = [];
         j(c, function (d) {
            var c = a.$GetElement(d);
            c && b.push(c)
         });
         return b
      };

      function u(a) {
         return a || i.event
      }
      a.kh = u;
      a.$EvtSrc = function (c) {
         c = u(c);
         var b = c.target || c.srcElement || h;
         if (b.nodeType == 3) b = a.Mb(b);
         return b
      };
      a.Ee = function (a) {
         a = u(a);
         return a.relatedTarget || a.toElement
      };
      a.Be = function (a) {
         a = u(a);
         return a.which || ([0, 1, 3, 0, 2])[a.button] || a.charCode || a.keyCode
      };
      a.bd = function (a) {
         a = u(a);
         return {
            x: a.clientX || 0,
            y: a.clientY || 0
         }
      };
      a.Le = function (a, b) {
         return Db(a.x - b.x, a.y - b.y)
      };
      a.ph = function (a, b) {
         return a.x >= b.x && a.x <= b.t && a.y >= b.y && a.y <= b.m
      };
      a.Te = function (d, f) {
         var c = b.mh(f),
            e = b.bd(d);
         return a.ph(e, c)
      };
      a.Vb = function (b) {
         return P(a.Mb(b))
      };

      function A(c, d, a) {
         if (a !== f) c.style[d] = a == f ? "" : a;
         else {
            var b = c.currentStyle || c.style;
            a = b[d];
            if (a == "" && i.getComputedStyle) {
               b = c.ownerDocument.defaultView.getComputedStyle(c, e);
               b && (a = b.getPropertyValue(d) || b[d])
            }
            return a
         }
      }

      function fb(b, c, a, d) {
         if (a === f) {
            a = r(A(b, c));
            isNaN(a) && (a = e);
            return a
         }
         d && a != e && (a += d);
         A(b, c, a)
      }

      function l(g, a, b, d) {
         var c;
         if (a & 2) c = "px";
         if (a & 4) c = "%";
         if (a & 16) c = "em";
         var f = a & 8 && U(g);
         a &= -9;
         d = d || (a ? fb : A);
         return function (i, h) {
            b && h && (h *= b);
            var a = d(i, f ? f(i) : g, h, c);
            return b && a != e ? a / b : a
         }
      }

      function C(a) {
         return function (c, b) {
            s(c, a, b)
         }
      }
      var hb = {
         r: ["rotate"],
         sX: ["scaleX", 2],
         sY: ["scaleY", 2],
         tX: ["translateX", 1],
         tY: ["translateY", 1],
         kX: ["skewX"],
         kY: ["skewY"]
      };

      function jb(a) {
         var b = "";
         if (a) {
            j(a, function (d, c) {
               var a = hb[c];
               if (a) {
                  var e = a[1] || 0;
                  if (ib[c] != d) b += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
               }
            });
            if (B())
               if (a.tX || a.tY || a.tZ != f) b += " translate3d(" + (a.tX || 0) + "px," + (a.tY || 0) + "px," + (a.tZ || 0) + "px)"
         }
         return b
      }

      function nb(a) {
         return "rect(" + a.y + "px " + a.t + "px " + a.m + "px " + a.x + "px)"
      }
      a.Nh = l("transformOrigin", 8);
      a.Sh = l("backfaceVisibility", 8);
      a.jc = l("transformStyle", 8);
      a.Th = l("perspective", 10);
      a.Eh = l("perspectiveOrigin", 8);
      a.He = function (b, a) {
         O(b, a == 1 ? "" : "scale(" + a + ")")
      };
      a.$AddEvent = function (b, c, d, e) {
         b = a.$GetElement(b);
         b.addEventListener(c, d, e)
      };
      a.$RemoveEvent = function (b, c, d, e) {
         b = a.$GetElement(b);
         b.removeEventListener(c, d, e)
      };
      a.$CancelEvent = function (a) {
         a = u(a);
         a.preventDefault && a.preventDefault();
         a.cancel = d;
         a.returnValue = k
      };
      a.$StopEvent = function (a) {
         a = u(a);
         a.stopPropagation && a.stopPropagation();
         a.cancelBubble = d
      };
      a.Z = function (d, c) {
         var a = [].slice.call(arguments, 2),
            b = function () {
               var b = a.concat([].slice.call(arguments, 0));
               return c.apply(d, b)
            };
         return b
      };
      a.Uc = function (b, c) {
         if (c == f) return b.textContent || b.innerText;
         var d = h.createTextNode(c);
         a.Ob(b);
         b.appendChild(d)
      };
      a.xg = function (a, b) {
         if (b == f) return a.innerHTML;
         a.innerHTML = b
      };
      a.mh = function (b) {
         var a = b.getBoundingClientRect();
         return {
            x: a.left,
            y: a.top,
            w: a.right - a.left,
            h: a.bottom - a.top,
            t: a.right,
            m: a.bottom
         }
      };
      a.fb = function (d, c) {
         for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
         return b
      };

      function zb(a, c, f, b) {
         b = b || "u";
         for (a = a ? a.firstChild : e; a; a = a.nextSibling)
            if (a.nodeType == 1) {
               if (K(a, b) == c) return a;
               if (!f) {
                  var d = zb(a, c, f, b);
                  if (d) return d
               }
            }
      }
      a.$FindChild = zb;

      function Y(a, d, h, b) {
         b = b || "u";
         var c = [];
         for (a = a ? a.firstChild : e; a; a = a.nextSibling)
            if (a.nodeType == 1) {
               (d == f || K(a, b) == d) && c.push(a);
               if (!h) {
                  var g = Y(a, d, h, b);
                  if (m(g)) c = c.concat(g)
               }
            } return c
      }
      a.fh = function (b, a) {
         return b.getElementsByTagName(a)
      };
      a.gb = function (a, f, d, g) {
         d = d || "u";
         var e;
         do {
            if (a.nodeType == 1) {
               var c;
               d && (c = K(a, d));
               if (c && c == q(f, c) || g == a.tagName) {
                  e = a;
                  break
               }
            }
            a = b.Mb(a)
         } while (a && a != h.body);
         return e
      };
      a.Ge = function (a) {
         return db(["INPUT", "TEXTAREA", "SELECT"])[a.tagName]
      };

      function x() {
         for (var d = arguments, h = 1 & d[0], e = 1 + h, g = d[e - 1] || {}, c, b, a; e < m(d); e++)
            if (c = d[e])
               for (b in c) {
                  a = c[b];
                  if (a !== f) {
                     a = c[b];
                     var i = g[b];
                     g[b] = h && (D(i) || D(a)) ? x(h, {}, i, a) : a
                  }
               }
         return g
      }
      a.B = x;

      function cb(f, g) {
         var d = {},
            c, a, b;
         for (c in f) {
            a = f[c];
            b = g[c];
            if (a !== b) {
               var e = k;
               if (D(a) && D(b)) {
                  a = cb(a, b);
                  e = !Z(a)
               }!e && (d[c] = a)
            }
         }
         return d
      }
      a.ch = cb;
      a.Ze = function (a, c) {
         if (a) {
            var b;
            j(c, function (c) {
               if (a[c] != f)(b = b || {})[c] = a[c];
               delete a[c]
            });
            return b
         }
      };
      a.Pg = function (a) {
         return N(a) == "function"
      };
      a.Ye = S;
      a.jh = function (a) {
         return N(a) == "string"
      };
      a.We = function (a) {
         return !S(a) && !isNaN(r(a)) && isFinite(a)
      };
      a.f = j;
      a.Ug = Z;
      a.Tg = D;

      function W(a) {
         return h.createElement(a)
      }
      a.Lb = function () {
         return W("DIV")
      };
      a.Vd = function () {
         return W("SPAN")
      };
      a.Sc = function (a) {
         return function () {
            return a
         }
      };
      a.Cc = function () {};
      a.Sc(d);
      a.Sc(k);
      a.Sc(e);

      function s(b, c, a, d) {
         if (a === f) return b.getAttribute(c);
         a = a == e ? "" : d ? a + d : a;
         b.setAttribute(c, a)
      }

      function K(a, b) {
         return s(a, b) || s(a, "data-" + b)
      }
      a.g = s;
      a.cb = K;
      a.s = function (e, c, d) {
         var b = a.Oc(K(e, c));
         if (isNaN(b)) b = d;
         return b
      };
      a.Ec = function (b, c, a) {
         return eb(s(b, c), a)
      };

      function G(b, a) {
         return s(b, "class", a) || ""
      }

      function db(b) {
         var a = {};
         j(b, function (b) {
            if (b != f) a[b] = b
         });
         return a
      }

      function eb(a, b) {
         return a && a.match(b || Eb) || e
      }

      function V(b, a) {
         return db(eb(b || "", a))
      }
      a.Od = db;
      a.Wd = eb;
      a.Wg = function (a) {
         a && (a = a.toLowerCase());
         return a
      };

      function gb(b, c) {
         var a = "";
         j(c, function (c) {
            a && (a += b);
            a += c
         });
         return a
      }

      function Q(a, c, b) {
         G(a, gb(" ", x(cb(V(G(a)), V(c)), V(b))))
      }
      a.Xd = gb;
      a.Mb = function (a) {
         return a.parentNode
      };
      a.vc = function (b) {
         a.vb(b, "none")
      };
      a.tb = function (b, c) {
         a.vb(b, q(c, d) ? "" : "none")
      };
      a.Zg = function (b, a) {
         b.removeAttribute(a)
      };
      a.Cg = function (b, a) {
         b.style.clip = nb(a)
      };
      a.Ub = function () {
         return +new Date
      };
      a.O = function (b, a) {
         b.appendChild(a)
      };
      a.Jg = function (c, b) {
         j(b, function (b) {
            a.O(c, b)
         })
      };
      a.ub = function (b, a, c) {
         (c || a.parentNode).insertBefore(b, a)
      };
      a.Mg = function (b, a, c) {
         b.insertAdjacentHTML(a, c)
      };
      a.ib = function (b, a) {
         a = a || b.parentNode;
         a && a.removeChild(b)
      };
      a.Eg = function (b, c) {
         j(b, function (b) {
            a.ib(b, c)
         })
      };
      a.Ob = function (b) {
         a.Eg(a.fb(b, d), b)
      };

      function Bb() {
         j([].slice.call(arguments, 0), function (b) {
            if (a.Ye(b)) Bb.apply(e, b);
            else b && b.$Destroy && b.$Destroy()
         })
      }
      a.$Destroy = Bb;
      a.ad = function (b, c) {
         var d = a.Mb(b);
         if (c & 1) {
            a.U(b, (a.I(d) - a.I(b)) / 2);
            a.te(b, e)
         }
         if (c & 2) {
            a.T(b, (a.J(d) - a.J(b)) / 2);
            a.re(b, e)
         }
      };
      var X = {
         $Top: e,
         $Right: e,
         $Bottom: e,
         $Left: e,
         Cb: e,
         yb: e
      };
      a.Bh = function (b) {
         var c = a.Lb();
         L(c, {
            ye: "block",
            Rb: a.db(b),
            $Top: 0,
            $Left: 0,
            Cb: 0,
            yb: 0
         });
         var e = a.Ae(b, X);
         a.ub(c, b);
         a.O(c, b);
         var f = a.Ae(b, X),
            d = {};
         j(e, function (b, a) {
            if (b == f[a]) d[a] = b
         });
         L(c, X);
         L(c, d);
         L(b, {
            $Top: 0,
            $Left: 0
         });
         return d
      };
      a.Rh = function (b, a) {
         return parseInt(b, a || 10)
      };
      a.Oc = r;
      a.Qe = function (b, a) {
         var c = h.body;
         while (a && b !== a && c !== a) a = a.parentNode;
         return b === a
      };

      function ab(e, d, c) {
         var b = e.cloneNode(!d);
         !c && a.Zg(b, "id");
         return b
      }
      a.bb = ab;
      a.Yb = function (f, g) {
         var b = new Image;

         function c(f, d) {
            a.$RemoveEvent(b, "load", c);
            a.$RemoveEvent(b, "abort", e);
            a.$RemoveEvent(b, "error", e);
            g && g(b, d)
         }

         function e(a) {
            c(a, d)
         }
         if (sb() && n < 11.6 || !f) c(!f);
         else {
            a.$AddEvent(b, "load", c);
            a.$AddEvent(b, "abort", e);
            a.$AddEvent(b, "error", e);
            b.src = f
         }
      };
      a.Qh = function (g, c, f) {
         var d = 1;

         function e(a) {
            d--;
            if (c && a && a.src == c.src) c = a;
            !d && f && f(c)
         }
         j(g, function (f) {
            var c = b.cb(f, "src");
            if (c) {
               d++;
               a.Yb(c, e)
            }
         });
         e()
      };
      a.ve = function (a, g, i, h) {
         if (h) a = ab(a);
         var c = Y(a, g);
         if (!m(c)) c = b.fh(a, g);
         for (var f = m(c) - 1; f > -1; f--) {
            var d = c[f],
               e = ab(i);
            G(e, G(d));
            b.Lh(e, d.style.cssText);
            b.ub(e, d);
            b.ib(d)
         }
         return a
      };

      function Lb() {
         var c = this;
         b.V(c, p);
         var e, q = "",
            t = ["av", "pv", "ds", "dn"],
            g = [],
            r, n = 0,
            l = 0,
            k = 0;

         function m() {
            Q(e, r, (g[k || l & 2 || l] || "") + " " + (g[n] || ""));
            a.ic(e, k ? "none" : "")
         }

         function d() {
            n = 0;
            c.W(i, "mouseup", d);
            c.W(h, "mouseup", d);
            c.W(h, "touchend", d);
            c.W(h, "touchcancel", d);
            c.W(i, "blur", d);
            m()
         }

         function o() {
            n = 4;
            m();
            c.a(i, "mouseup", d);
            c.a(h, "mouseup", d);
            c.a(h, "touchend", d);
            c.a(h, "touchcancel", d);
            c.a(i, "blur", d)
         }
         c.fe = function (a) {
            if (a === f) return l;
            l = a & 2 || a & 1;
            m()
         };
         c.$Enable = function (a) {
            if (a === f) return !k;
            k = a ? 0 : 3;
            m()
         };
         c.F = function (f) {
            c.$Elmt = e = a.$GetElement(f);
            s(e, "data-jssor-button", "1");
            var d = b.Wd(G(e));
            if (d) q = d.shift();
            j(t, function (a) {
               g.push(q + a)
            });
            r = gb(" ", g);
            g.unshift("");
            c.a(e, "mousedown", o);
            c.a(e, "touchstart", o)
         };
         b.F(c)
      }
      a.pc = function (a) {
         return new Lb(a)
      };
      a.oh = function (a, b) {
         return c.Hb(a * a + b * b)
      };
      a.Q = A;
      l("backgroundColor");
      a.Bb = l("overflow");
      a.ic = l("pointerEvents");
      a.T = l("top", 2);
      a.U = l("left", 2);
      a.hb = l("opacity", 1);
      a.N = l("zIndex", 1);

      function yb(m, n, a, k, b, g, f) {
         if (b) {
            var h = b[0],
               d = b[1];
            if (f) {
               var e = c.l(d * 2, 1),
                  l = e * (f - 1) + 1;
               a = (a * l - h) / e;
               if (a > 0) {
                  d /= e;
                  h = 0;
                  var j = c.H(a) - 1;
                  a = a - j;
                  if (a > d && j < f - 1) a = 1 - a
               }
            }
            a = (a - h) / d;
            a = c.j(c.l(a, 0), 1)
         }
         if (g) {
            a = a * g;
            var i = c.G(a);
            a - i && (a -= i);
            a = c.j(c.l(a, 0), 1)
         }
         if (b || g) a = c.Y(a, 3);
         return m + n * k(a)
      }

      function kb(d, e, h, i) {
         d = d || {};
         var g = {},
            b = {};

         function n(a) {
            b[a] = d[a]
         }

         function l() {
            b.Nb = d.x;
            h && !e && (b.Nb -= h)
         }

         function m() {
            b.ec = d.y;
            i && !e && (b.ec -= i)
         }
         var k = {
               Nb: 0,
               ec: 0,
               sX: 1,
               sY: 1,
               r: 0,
               rX: 0,
               rY: 0,
               tX: 0,
               tY: 0,
               tZ: 0,
               kX: 0,
               kY: 0
            },
            c = {};
         if (!B() || e) {
            c.tZ = a.Cc;
            c.tX = a.Cc;
            c.tY = a.Cc
         }
         if (B() || e) {
            c.x = l;
            c.y = m
         }
         j(d, function (b, a) {
            (c[a] || n)(a)
         });
         j(b, function (c, a) {
            if (k[a] != f) {
               g[a] = c;
               delete b[a]
            }
         });
         Z(g) && (b.me = g);
         return b
      }

      function vb(f, e) {
         var b = [],
            h = e & 1;
         e & 2 && (h = !h);
         for (var k = c.H(f / 2), a = 0; a < f; a++) {
            var d = a;
            if (e & 4) {
               var g = c.G(c.Tc() * f);
               d = q(b[a], a);
               b[a] = q(b[g], g);
               b[g] = d
            } else {
               if (e & 2) {
                  d = a < k ? a * 2 : (f - a - 1) * 2 + 1;
                  b[d] = a
               }
               if (e & 32) d = c.G(a / 2) + (a % 2 ? c.H(k) : 0);
               b[d] = a
            }
         }
         h && b.reverse();
         var i = [];
         j(b, function (b, a) {
            i[b] = a
         });
         return i
      }

      function xb(b, h, e, d) {
         for (var g = [], i = e ? c.H((b + d) / 2) : b, f = 1 / (h * (i - 1) + 1), a = 0; a < b; a++) {
            var j = e ? c.G((a + d) / 2) : a;
            g[a] = [j * h * f, f]
         }
         return g
      }

      function Jb(h, u, e) {
         h = h || {
            d: e.$Elmt ? s(e.$Elmt, "d") : ""
         };
         var E = e.$Easing,
            k = e.Yc || {},
            g = k.r,
            z = g == 0,
            F = k.dl || 0;

         function x(c, a) {
            var d = c[0],
               o = c[1],
               e = c[2],
               p = c[3],
               g = c[4],
               q = c[5],
               h = c[6],
               r = c[7];
            if (a === f) a = .5;
            var b = 1 - a,
               i = b * d + a * e,
               s = b * o + a * p,
               j = b * e + a * g,
               t = b * p + a * q,
               k = b * g + a * h,
               u = b * q + a * r,
               l = b * i + a * j,
               v = b * s + a * t,
               m = b * j + a * k,
               w = b * t + a * u,
               n = b * l + a * m,
               x = b * v + a * w;
            return [
               [d, o, i, s, l, v, n, x],
               [n, x, m, w, k, u, h, r]
            ]
         }

         function w(c, g) {
            for (var d = 0, e = 0, a = 0, b = g ? 6 : 0; b < m(c); b += 6) {
               d += c[b];
               e += c[b + 1];
               a++
            }
            return {
               x: a ? d / a : f,
               y: a ? e / a : f
            }
         }

         function b(b) {
            var l = m(b),
               j = b[0] == b[l - 2] && b[1] == b[l - 1],
               g = w(b, j),
               k = [],
               h = [];

            function e(a) {
               return {
                  x: b[a],
                  y: b[a + 1]
               }
            }

            function f(j, f, b) {
               var d = a.Le(j, f);
               h[b] = a.oh(d.x, d.y);
               if (!h[b] && b % 6) {
                  var g = b % 6 < 3 ? 2 : -2;
                  d = a.Le(e(b + g), f)
               }
               var i = c.zh(d.y, d.x);
               k[b] = i
            }
            for (var d = 0; d < m(b); d += 6) {
               var i = e(d);
               f(i, g, d);
               f(e(d - 2), i, d - 2);
               f(e(d + 2), i, d + 2)
            }
            return {
               kb: b,
               sb: (m(b) - 2) / 6,
               qc: g.x,
               lc: g.y,
               Rc: k,
               Qc: h,
               Hc: j
            }
         }

         function n(o) {
            function i(a) {
               return a.replace(/[\^\s]*([mhvlzcsqta]|\-?\d*\.?\d+)[,\$\s]*/gi, " $1").replace(/([mhvlzcsqta])/gi, " $1").trim().split(" ").map(l)
            }

            function l(a) {
               return a.split(" ").map(k)
            }

            function k(a, b) {
               return b === 0 ? a : +a
            }
            var h = [],
               a, n = i(o || ""),
               d, e, f, g;

            function c(b) {
               f = b[m(b) - 2];
               g = b[m(b) - 1];
               a = a.concat(b)
            }
            j(n, function (i) {
               var j = i.shift();
               switch (j) {
                  case "M":
                     a && h.push(b(a));
                     a = [];
                     d = i[0];
                     e = i[1];
                     c(i);
                     break;
                  case "L":
                     c([f, g, i[0], i[1], i[0], i[1]]);
                     break;
                  case "C":
                     c(i);
                     break;
                  case "Z":
                  case "z":
                     (f != d || g != e) && c([f, g, d, e, d, e])
               }
            });
            a && h.push(b(a));
            return h
         }

         function d(a, b) {
            return c.Y(a, 2) + "," + c.Y(b, 2)
         }

         function A(a) {
            for (var c = "M" + d(a[0], a[1]), b = 2; b < m(a) - 2; b += 6) {
               c += "C";
               c += d(a[b], a[b + 1]) + " ";
               c += d(a[b + 2], a[b + 3]) + " ";
               c += d(a[b + 4], a[b + 5])
            }
            return c
         }

         function y(b) {
            var a = "";
            j(b, function (b) {
               a += A(b)
            });
            return a
         }

         function D(d) {
            for (var c = [], a = 0; a < m(d) - 2; a += 6) c.push(b(d.slice(a, a + 8)));
            return c
         }

         function B(c) {
            var a = [];
            j(c, function (c, d) {
               var b = c.kb;
               !d && a.push(b[0], b[1]);
               a = a.concat(b.slice(2))
            });
            return b(a)
         }

         function l(d, a) {
            var p = a.uh = [],
               q = a.Bf = [],
               e = a.sb + (!d.Hc || !d.Hc);

            function n(b) {
               return a.Rc[b] - d.Rc[b]
            }

            function h(b, a) {
               a = a || 0;
               return c.Y((b - a + c.q * 101) % (c.q * 2) - c.q + a, 8)
            }

            function i(b, f) {
               var e = d.Qc[b],
                  g = a.Qc[b],
                  i = g - e,
                  c = n(b);
               c = h(c, f);
               p[b] = i;
               q[b] = c;
               return c
            }
            for (var l = 0, b = 0; b < e; b++) l += h(n(b * 6));
            var f = h(l / e);
            if (g) {
               var j = g > 0 ? 1 : -1;
               f = (f + c.q * 2 * j) % (c.q * 2) || c.q * 2 * j;
               f += c.q * 2 * (g - j)
            }
            for (var b = 0; b < m(d.kb); b += 6) {
               var o = i(b, f);
               i(b - 2, o);
               i(b + 2, o)
            }
            var s = xb(e, F),
               r = vb(e, k.o);
            a.Dd = function (b, c) {
               if (b >= 0 && b <= a.sb) return yb(0, 1, c, E, s[r[b % e]])
            }
         }

         function t(d, a, s, n, i) {
            function q(d) {
               for (var a = [0, .2, 0, .09, .09, 0, .2, 0, .31, 0, .4, .09, .4, .2, .4, .31, .31, .4, .2, .4, .09, .4, 0, .31, 0, .2], c = 0; c < m(a); c += 2) {
                  a[c] += d.qc - .2;
                  a[c + 1] += d.lc - .2
               }
               var e = b(a);
               e.Hc = d.Hc;
               return e
            }
            d = s[i] = d || q(a);
            a = n[i] = a || q(d);
            var h = d.sb,
               g = a && a.sb;
            if (h < g) return t(a, d, n, s, i);
            if (g < h) {
               for (var r = D(a.kb), u = h / g, o = h - g, f = 0, p = 0; p < 10 && f < o; p++) {
                  var v = u + u * p / 10,
                     e = 0;
                  j(r, function (d, g) {
                     e += d.sb;
                     var b = c.$Round((g + 1) * v);
                     if (e < b) {
                        var a = c.j(b - e, o - f);
                        d.sb += a;
                        f += a;
                        e += a
                     }
                     return o < f
                  })
               }
               var k = [];
               j(r, function (d) {
                  var a = d.sb,
                     c = d.kb;
                  while (a - 1) {
                     var e = x(c, 1 / a);
                     k.push(b(e[0]));
                     c = e[1];
                     a--
                  }
                  k.push(b(c))
               });
               a = n[i] = B(k)
            }
            l(d, a);
            l(a, d)
         }

         function r(b, a) {
            if (m(b) < m(a)) return r(a, b);
            j(b, function (d, c) {
               t(d, a[c], b, a, c)
            })
         }
         var o = n(h.d),
            p = n(u.d);
         r(o, p);

         function i(b, h, i, e, a, l) {
            var d = b.kb;
            if (a >= 0 && a < m(b.kb)) {
               var k = h.kb,
                  f, g;
               if (z) {
                  f = d[a] + (k[a] - d[a]) * e;
                  g = d[a + 1] + (k[a + 1] - d[a + 1]) * e
               } else {
                  var o = b.Qc[a],
                     p = h.uh[a],
                     q = b.Rc[a],
                     r = h.Bf[a],
                     j = o + p * e,
                     n = q + r * e;
                  f = j * c.Gb(n) + i.x;
                  g = j * c.eb(n) + i.y
               }
               l[a] = f;
               l[a + 1] = g;
               return {
                  x: f,
                  y: g
               }
            }
         }
         var v = {
            E: function (a) {
               if (!a) return h;
               if (a == 1) return u;
               var b = [];
               j(o, function (c, n) {
                  for (var g = [], d = p[n], e = 0; e < m(c.kb); e += 6) {
                     var f = d.Dd(e / 6, a),
                        l = q(d.Dd(e / 6 - 1, a), f),
                        k = q(d.Dd(e / 6 + 1, a), f),
                        j = {
                           x: c.qc + (d.qc - c.qc) * f,
                           y: c.lc + (d.lc - c.lc) * f
                        },
                        h = i(c, d, j, f, e, g);
                     i(c, d, h, (f + l) / 2, e - 2, g);
                     i(c, d, h, (f + k) / 2, e + 2, g)
                  }
                  b.push(g)
               });
               return {
                  d: y(b)
               }
            },
            ab: function (a) {
               return a && a.d || ""
            },
            mb: C("d")
         };
         return v
      }

      function Hb(b) {
         return x({
            mc: a.Pg(b) ? b : g.$Linear
         }, b)
      }

      function z(i, u, h, M, o) {
         i = i || {};
         h = x({}, h);
         var ab = h.$Elmt,
            p = {},
            W = {},
            w, y, r = h.je,
            P = h.Vb,
            F = k(Hb(h.$Easing)),
            V = k(h.Yc),
            X = k(h.$During),
            Z = k(h.$Round),
            Y = k(h.zd, E),
            G = S(u);
         i = k(i, f, d);
         u = k(u, f, d);
         var U = B(),
            K = o ? {
               c: R,
               me: L,
               pt: Jb,
               bl: Q,
               da: H,
               fc: n(C("fill"), [0, 0, 0, 1]),
               sc: n(C("stroke")),
               cl: n(l("color"), [0, 0, 0, 1]),
               bgc: n(l("backgroundColor")),
               bdc: n(l("borderColor")),
               rp: N
            } : {},
            s = h.td || o && {
               o: 4,
               so: 4,
               me: 4,
               ls: 4,
               lh: 4,
               sX: 4,
               sY: 4
            };

         function T(c) {
            var d = V[c] || {};
            return b.B({}, h, {
               $Easing: F[c] || F.mc || e,
               zd: Y[c] || e,
               Yc: d,
               $During: X[c] || e,
               $Round: Z[c] || e,
               mf: d.rd,
               td: a.We(s) ? s : s && s[c],
               je: 0
            })
         }

         function t(a) {
            return m(a) % 2 ? a.concat(a) : a
         }

         function k(a, c, b) {
            a = M ? kb(a, P, b && h.lf, b && h.of) : a || {};
            return o ? x({}, c, a) : a
         }

         function n(f, d) {
            function c(a) {
               return a == "transparent" ? e : a || d
            }

            function a(a, b) {
               a = c(a);
               b = c(b);
               if (!a && b) {
                  a = b.slice(0);
                  a[3] = 0
               }
               return a || [0, 0, 0, 0]
            }
            return function (c, d, g) {
               d = a(d, c);
               c = a(c, d);
               var e = z(c, d, b.B({
                  td: [0, 0, 0, 4]
               }, g));
               return {
                  E: function (a) {
                     return e.E(a)
                  },
                  ab: function (a) {
                     return "rgba(" + a.join(",") + ")"
                  },
                  mb: f
               }
            }
         }

         function I(b, k, a) {
            b = b || 0;
            var f = a.$Easing || g.$Linear,
               e = a.$During,
               i = a.$Round,
               h = a.mf,
               j = k - b,
               d = q(a.td, 2);
            return {
               E: function (a) {
                  return c.Y(yb(b, j, a, f, e, i, h), d)
               },
               ab: J,
               mb: a.zd
            }
         }

         function A(c, d, a, b) {
            return {
               E: z(c, d, a).E,
               ab: function (a) {
                  return a.join(",")
               },
               mb: b
            }
         }

         function Q(b, c, a) {
            return A(t(b || [0]), t(c), a, C("stdDeviation"))
         }

         function H(a, c, h) {
            var e = m(c);
            c = t(c);
            if (!a) {
               a = c.slice(0);
               j(a, function (c, b) {
                  b % 2 && (a[b] = 0)
               })
            }
            a = t(a);
            for (var d = m(a), f, b = 1; b <= d && b <= e; b++)
               if (!(d % b) && !(e % b)) f = b;

            function g(b) {
               var a = b;
               while (m(a) < d * e / f) a = a.concat(b);
               return a
            }
            return A(g(a), g(c), h, C("stroke-dasharray"))
         }

         function R(b, c, a) {
            return {
               E: z(b, c, a).E,
               ab: function (b) {
                  return (b.y || b.x || b.m - a.$OriginalHeight || b.t - a.$OriginalWidth) && nb(b) || ""
               },
               mb: l("clip")
            }
         }

         function L(e, f, c) {
            var a = c.Af,
               b;

            function d(b) {
               var d = (b.rX || 0) % 360,
                  e = (b.rY || 0) % 360,
                  f = (b.r || 0) % 360,
                  g = q(b.sX, 1),
                  h = q(b.sY, 1),
                  i = q(b.sZ, 1),
                  c = new v(b.tX, b.tY, b.tZ || 0);
               a && c.$Move(-a.x, -a.y);
               c.$Scale(g, h, i);
               c.kf(b.kX, b.kY);
               c.$RotateX(d);
               c.$RotateY(e);
               c.gf(f);
               a && c.$Move(a.x, a.y);
               c.$Move(b.Nb, b.ec);
               return c
            }
            if (c.Vb) {
               y = C("transform");
               b = function (a) {
                  return d(a).Cf()
               }
            } else {
               y = O;
               if (U) b = function (a) {
                  return d(a).yf()
               };
               else b = jb
            }
            return {
               E: z(e, f, c).E,
               mb: y,
               ab: b || J
            }
         }

         function N() {
            var b = 1e-5;
            return {
               E: J,
               ab: J,
               mb: function (d) {
                  b *= -1;
                  a.hb(d, c.Y(a.hb(d), 4) + b)
               }
            }
         }
         j(u, function (b, a) {
            var c = i && i[a] || 0;
            if (G || b !== c) {
               var d = o && K[a] || (D(b) ? z : I);
               p[a] = d(c, b, T(a))
            }
         });
         w = function (b) {
            var a;
            j(p, function (c, e) {
               var d = c.E(b);
               c.mb(c.$Elmt || ab, c.ab(d));
               e == "o" && (a = d)
            });
            return a
         };
         r && b.f(p, function (a, e) {
            for (var d = [], b = 0; b < r + 1; b++) d[b] = a.ab(a.E(b / r));
            W[e] = d;
            a.E = function (a) {
               return d[c.$Round(a * r)]
            };
            a.ab = J
         });
         w.E = function (c) {
            var a = x(d, G ? [] : {}, i);
            b.f(p, function (b, d) {
               a[d] = b.E(c)
            });
            return a
         };
         return w
      }
      a.zf = z;
      a.ke = vb;
      a.I = l("width", 2);
      a.J = l("height", 2);
      a.te = l("right", 2);
      a.re = l("bottom", 2);
      l("marginLeft", 2);
      l("marginTop", 2);
      a.db = l("position");
      a.vb = l("display");
      a.Lh = function (a, b) {
         if (b != f) a.style.cssText = b;
         else return a.style.cssText
      };
      a.xf = function (b, a) {
         if (a === f) {
            a = A(b, "backgroundImage") || "";
            var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || [];
            return c[1]
         }
         A(b, "backgroundImage", a ? "url('" + a + "')" : "")
      };
      var E;
      a.wf = E = {
         $Opacity: a.hb,
         $Top: a.T,
         $Right: a.te,
         $Bottom: a.re,
         $Left: a.U,
         Cb: a.I,
         yb: a.J,
         Rb: a.db,
         ye: a.vb,
         $ZIndex: a.N,
         o: a.hb,
         x: a.U,
         y: a.T,
         i: a.N,
         dO: l("stroke-dashoffset", 1),
         ls: l("letterSpacing", 16),
         lh: l("lineHeight", 1),
         so: l("startOffset", 4, 100, s)
      };
      a.Ae = function (c, b) {
         var a = {};
         j(b, function (d, b) {
            if (E[b]) a[b] = E[b](c)
         });
         return a
      };

      function L(b, a) {
         j(a, function (c, a) {
            E[a] && E[a](b, c)
         })
      }
      a.rb = L;
      var ib = {
            Nb: 0,
            ec: 0,
            sX: 1,
            sY: 1,
            r: 0,
            rX: 0,
            rY: 0,
            tX: 0,
            tY: 0,
            tZ: 0,
            kX: 0,
            kY: 0
         },
         Pb = [g.$Linear, g.$Swing, g.$InQuad, g.$OutQuad, g.$InOutQuad, g.$InCubic, g.$OutCubic, g.$InOutCubic, g.$InQuart, g.$OutQuart, g.$InOutQuart, g.$InQuint, g.$OutQuint, g.$InOutQuint, g.$InSine, g.$OutSine, g.$InOutSine, g.$InExpo, g.$OutExpo, g.$InOutExpo, g.$InCirc, g.$OutCirc, g.$InOutCirc, g.$InElastic, g.$OutElastic, g.$InOutElastic, g.$InBack, g.$OutBack, g.$InOutBack, g.$InBounce, g.$OutBounce, g.$InOutBounce, g.$Early, g.$Late, g.$Mid, g.$Mid2, g.$Mid3, g.$Mid4, g.$Mid5, g.$Mid6];

      function ub(a) {
         var c;
         if (b.We(a)) c = Pb[a];
         else if (b.Tg(a)) {
            c = {};
            j(a, function (a, b) {
               c[b] = ub(a)
            })
         }
         return c || a
      }
      a.ce = ub;

      function m(a) {
         return a.length
      }
      a.u = m;
      a.be = w;
      a.cf = function (l, j, k, p, q) {
         b.hb(l, 1);
         var n = {
               o: {
                  j: 0,
                  l: 1
               }
            },
            e = {
               x: 0,
               y: 0,
               o: 1,
               r: 0,
               rX: 0,
               rY: 0,
               sX: 1,
               sY: 1,
               tZ: 0,
               kX: 0,
               kY: 0
            };

         function o(c, d, e) {
            var a = b.Vd();
            b.vb(a, "inline-block");
            b.db(a, "relative");
            d ? b.xg(a, c) : b.Uc(a, c);
            b.ub(a, e);
            b.hb(a, k);
            return a
         }

         function h(e) {
            var a = [],
               c = b.fb(e, d);
            b.f(c, function (e) {
               if (e.nodeType == 3) {
                  for (var l = b.Uc(e), g, f, i = 0; i <= b.u(l); i++) {
                     var k, m;
                     if (i == b.u(l)) m = d;
                     else {
                        var c = l[i];
                        k = /\s/.test(c);
                        c = c == " " ? "&nbsp;" : c;
                        m = !j || f != k
                     }
                     if (m) {
                        if (g) {
                           var n = o(g, f, e);
                           (!j || !f) && a.push(n)
                        }
                        g = c
                     } else g += c;
                     f = k
                  }
                  b.ib(e)
               } else a = a.concat(h(e))
            });
            return a
         }

         function m(n) {
            var j = this,
               h = b.ke(a, 4),
               e = b.Ze(n, ["b", "d", "e", "p", "dr"]) || {},
               g = {};

            function i(d, g, f) {
               var b = f ? a : g,
                  e = 0;
               if (d.ae & 2) {
                  b = c.H(b / 2);
                  if (!d.$Reverse) {
                     e = (b + 1) % 2 * d.dd;
                     b += e
                  }
               }
               return b
            }

            function d(d) {
               var g = d & 1,
                  i = d & 2 || 1,
                  e = 0;
               if (d & 2) e = a % 2;
               var f = d == 68 ? h : b.ke(a, d);
               return {
                  ae: d,
                  dd: e,
                  $Reverse: g,
                  we: f,
                  ue: function (a) {
                     return c.G((f[a] + e * !g) / i)
                  }
               }
            }

            function l(a, b, f, d) {
               var e = i(a, b, f),
                  c = 1 / (d * (e - 1) + 1);
               return {
                  hc: function (e) {
                     return a.we[e] < b && [a.ue(e) * d * c, c]
                  }
               }
            }

            function m(a) {
               return {
                  xe: function (b) {
                     return a.we[b] % 2 ? 1 : -1
                  }
               }
            }

            function k(b, g, k, h, j) {
               var d = i(b, g, k),
                  e = 0;

               function f(a) {
                  return c.z(1 - a / d, h)
               }
               if (b.ae & 2) {
                  d = c.H(a / 2) - b.dd;
                  e = f(d - 1) / 2 * !b.dd
               }
               return {
                  ze: function (a) {
                     a = b.ue(a);
                     j && (a = d - a - 1);
                     return f(a) - e
                  }
               }
            }
            j.Zf = e;
            j.bg = function (o) {
               var i = g[o];
               if (!i) {
                  var h = e.p && e.p[o] || {},
                     y = b.mc(h.dl, .5),
                     x = h.o || 0,
                     z = h.r || 1,
                     p = h.c,
                     r = h.d,
                     n = b.mc(h.dO, 8),
                     q = c.$Round(a * z),
                     j = d(x),
                     w = l(j, q, h.dlc, y),
                     t = p & 8 ? j : d(p),
                     v = m(t),
                     s = n & 8 ? j : d(n),
                     u = k(s, q, h.dc, r, n == 9);
                  i = g[o] = {
                     hc: w.hc,
                     dg: function (a) {
                        return (p != f ? v.xe(a) : 1) * (r ? u.ze(a) : 1)
                     }
                  }
               }
               return i
            }
         }
         var i = h(l),
            a = b.u(i),
            g = [];
         b.f(i, function (i, h) {
            var a = [],
               d = b.B({}, e),
               f = b.B({}, e, {
                  o: k
               });
            b.f(p, function (j, l) {
               var i = {},
                  o = {},
                  k = g[l] = g[l] || new m(j);
               b.f(j, function (l, b) {
                  var m = k.bg(b),
                     p = m.hc(h);
                  if (p) {
                     var a, g = c.Y(l - d[b], 8);
                     if (g) {
                        g = c.Y(l - e[b], 8);
                        g *= m.dg(h);
                        a = c.Y(g + e[b], 4);
                        var j = n[b];
                        if (j) {
                           a = c.l(a, j.j);
                           a = c.j(a, j.l)
                        }
                     } else a = l;
                     if (a - f[b]) {
                        i[b] = a;
                        o[b] = p
                     }
                  }
               });
               b.B(d, j);
               b.B(f, i);
               if (b.Ug(i)) {
                  b.B(i, k.Zf);
                  i.dr = o;
                  a.push(i)
               }
            });
            b.u(a) && q(i, a)
         })
      }
   };

   function p() {
      var a = this,
         f, e = [],
         c = [];

      function k(a, b) {
         e.push({
            Qb: a,
            Pb: b
         })
      }

      function j(a, c) {
         b.f(e, function (b, d) {
            b.Qb == a && b.Pb === c && e.splice(d, 1)
         })
      }

      function h() {
         e = []
      }

      function g() {
         b.f(c, function (a) {
            b.$RemoveEvent(a.pe, a.Qb, a.Pb, a.oe)
         });
         c = []
      }
      a.ld = function () {
         return f
      };
      a.a = function (f, d, e, a) {
         b.$AddEvent(f, d, e, a);
         c.push({
            pe: f,
            Qb: d,
            Pb: e,
            oe: a
         })
      };
      a.W = function (f, d, e, a) {
         b.f(c, function (g, h) {
            if (g.pe === f && g.Qb == d && g.Pb === e && g.oe == a) {
               b.$RemoveEvent(f, d, e, a);
               c.splice(h, 1)
            }
         })
      };
      a.se = g;
      a.$On = a.addEventListener = k;
      a.$Off = a.removeEventListener = j;
      a.k = function (a) {
         var c = [].slice.call(arguments, 1);
         b.f(e, function (b) {
            b.Qb == a && b.Pb.apply(i, c)
         })
      };
      a.$Destroy = function () {
         if (!f) {
            f = d;
            g();
            h()
         }
      }
   }
   var l = function (C, F, l, m, L, M) {
      C = C || 0;
      var a = this,
         t, p, n, o, v, D = 0,
         O = 1,
         E, B = 0,
         h = 0,
         r = 0,
         A, j, e, g, u, z, s = [],
         I = k,
         J, H = k;

      function R(a) {
         e += a;
         g += a;
         j += a;
         h += a;
         r += a;
         B += a
      }

      function y(C) {
         var k = C;
         if (u)
            if (!z && (k >= g || k < e) || z && k >= e) k = ((k - e) % u + u) % u + e;
         if (!A || v || h != k) {
            var i = c.j(k, g);
            i = c.l(i, e);
            if (l.$Reverse) i = g - i + e;
            if (!A || v || i != r) {
               if (t) {
                  var y = (i - j) / (F || 1),
                     x = t(y),
                     n;
                  if (J) {
                     var o = i > e && i < g;
                     if (o != H) n = H = o
                  }
                  if (!n && x != f) {
                     var p = !x;
                     if (p != I) n = I = p
                  }
                  if (n != f) {
                     n && b.ic(m, "none");
                     !n && b.ic(m, b.g(m, "data-events"))
                  }
               }
               var w = r,
                  q = r = i;
               b.f(s, function (c, d) {
                  var a = !A && z || k <= h ? s[b.u(s) - d - 1] : c;
                  a.M(i - B)
               });
               h = k;
               A = d;
               a.md(w - j, q - j);
               a.Mc(w, q)
            }
         }
      }

      function G(a, b, d) {
         b && a.$Shift(g);
         if (!d) {
            e = c.j(e, a.Lc() + B);
            g = c.l(g, a.qb() + B)
         }
         s.push(a)
      }
      var w = i.requestAnimationFrame || i.webkitRequestAnimationFrame || i.mozRequestAnimationFrame || i.msRequestAnimationFrame;
      if (b.Ve() && b.Zc() < 7 || !w) w = function (a) {
         b.$Delay(a, l.$Interval)
      };

      function N() {
         if (p) {
            var c = b.Ub(),
               d = c - D;
            D = c;
            var a = h + d * o * O;
            if (a * o >= n * o) a = n;
            y(a);
            if (!v && a * o >= n * o) P(E);
            else w(N)
         }
      }

      function x(f, i, j) {
         if (!p) {
            p = d;
            v = j;
            E = i;
            f = c.l(f, e);
            f = c.j(f, g);
            n = f;
            o = n < h ? -1 : 1;
            a.od();
            D = b.Ub();
            w(N)
         }
      }

      function P(b) {
         if (p) {
            v = p = E = k;
            a.sd();
            b && b()
         }
      }
      a.$Play = function (a, b, c) {
         x(a ? h + a : g, b, c)
      };
      a.xc = x;
      a.If = function (a, b) {
         x(g, a, b)
      };
      a.S = P;
      a.Ud = function () {
         return h
      };
      a.Td = function () {
         return n
      };
      a.A = function () {
         return r
      };
      a.M = y;
      a.Vf = function () {
         y(g, d)
      };
      a.$IsPlaying = function () {
         return p
      };
      a.Pd = function (a) {
         O = a
      };
      a.$Shift = R;
      a.Xd = G;
      a.L = function (a, b) {
         G(a, 0, b)
      };
      a.vd = function (a) {
         G(a, 1)
      };
      a.ud = function (a) {
         g += a
      };
      a.Lc = function () {
         return e
      };
      a.qb = function () {
         return g
      };
      a.Mc = a.od = a.sd = a.md = b.Cc;
      b.Ub();
      a.Mh = function () {
         return t && t.E(1)
      };
      l = b.B({
         $Interval: 16
      }, l);
      m && (J = b.g(m, "data-inactive"));
      u = l.rc;
      z = l.Ah;
      e = j = C;
      g = C + F;
      l.$Elmt = m;
      m && (t = b.zf(L, M, l, d, d))
   };
   var u = i.$JssorSlideshowFormations$ = new function () {
      var i = this,
         e = 0,
         a = 1,
         g = 2,
         f = 3,
         t = 1,
         s = 2,
         u = 4,
         r = 8,
         x = 256,
         y = 512,
         w = 1024,
         v = 2048,
         k = v + t,
         j = v + s,
         p = y + t,
         n = y + s,
         o = x + u,
         l = x + r,
         m = w + u,
         q = w + r;

      function z(a) {
         return (a & s) == s
      }

      function A(a) {
         return (a & u) == u
      }

      function h(b, a, c) {
         c.push(a);
         b[a] = b[a] || [];
         b[a].push(c)
      }
      i.$FormationStraight = function (f) {
         for (var d = f.$Cols, e = f.$Rows, s = f.$Assembly, t = f.uc, r = [], a = 0, b = 0, i = d - 1, q = e - 1, g = t - 1, c, b = 0; b < e; b++)
            for (a = 0; a < d; a++) {
               switch (s) {
                  case k:
                     c = g - (a * e + (q - b));
                     break;
                  case m:
                     c = g - (b * d + (i - a));
                     break;
                  case p:
                     c = g - (a * e + b);
                  case o:
                     c = g - (b * d + a);
                     break;
                  case j:
                     c = a * e + b;
                     break;
                  case l:
                     c = b * d + (i - a);
                     break;
                  case n:
                     c = a * e + (q - b);
                     break;
                  default:
                     c = b * d + a
               }
               h(r, c, [b, a])
            }
         return r
      };
      i.$FormationSwirl = function (r) {
         var y = r.$Cols,
            z = r.$Rows,
            C = r.$Assembly,
            x = r.uc,
            B = [],
            A = [],
            v = 0,
            c = 0,
            i = 0,
            s = y - 1,
            t = z - 1,
            u, q, w = 0;
         switch (C) {
            case k:
               c = s;
               i = 0;
               q = [g, a, f, e];
               break;
            case m:
               c = 0;
               i = t;
               q = [e, f, a, g];
               break;
            case p:
               c = s;
               i = t;
               q = [f, a, g, e];
               break;
            case o:
               c = s;
               i = t;
               q = [a, f, e, g];
               break;
            case j:
               c = 0;
               i = 0;
               q = [g, e, f, a];
               break;
            case l:
               c = s;
               i = 0;
               q = [a, g, e, f];
               break;
            case n:
               c = 0;
               i = t;
               q = [f, e, g, a];
               break;
            default:
               c = 0;
               i = 0;
               q = [e, g, a, f]
         }
         v = 0;
         while (v < x) {
            u = i + "," + c;
            if (c >= 0 && c < y && i >= 0 && i < z && !A[u]) {
               A[u] = d;
               h(B, v++, [i, c])
            } else switch (q[w++ % b.u(q)]) {
               case e:
                  c--;
                  break;
               case g:
                  i--;
                  break;
               case a:
                  c++;
                  break;
               case f:
                  i++
            }
            switch (q[w % b.u(q)]) {
               case e:
                  c++;
                  break;
               case g:
                  i++;
                  break;
               case a:
                  c--;
                  break;
               case f:
                  i--
            }
         }
         return B
      };
      i.$FormationZigZag = function (q) {
         var x = q.$Cols,
            y = q.$Rows,
            A = q.$Assembly,
            w = q.uc,
            u = [],
            v = 0,
            c = 0,
            d = 0,
            r = x - 1,
            s = y - 1,
            z, i, t = 0;
         switch (A) {
            case k:
               c = r;
               d = 0;
               i = [g, a, f, a];
               break;
            case m:
               c = 0;
               d = s;
               i = [e, f, a, f];
               break;
            case p:
               c = r;
               d = s;
               i = [f, a, g, a];
               break;
            case o:
               c = r;
               d = s;
               i = [a, f, e, f];
               break;
            case j:
               c = 0;
               d = 0;
               i = [g, e, f, e];
               break;
            case l:
               c = r;
               d = 0;
               i = [a, g, e, g];
               break;
            case n:
               c = 0;
               d = s;
               i = [f, e, g, e];
               break;
            default:
               c = 0;
               d = 0;
               i = [e, g, a, g]
         }
         v = 0;
         while (v < w) {
            z = d + "," + c;
            if (c >= 0 && c < x && d >= 0 && d < y && typeof u[z] == "undefined") {
               h(u, v++, [d, c]);
               switch (i[t % b.u(i)]) {
                  case e:
                     c++;
                     break;
                  case g:
                     d++;
                     break;
                  case a:
                     c--;
                     break;
                  case f:
                     d--
               }
            } else {
               switch (i[t++ % b.u(i)]) {
                  case e:
                     c--;
                     break;
                  case g:
                     d--;
                     break;
                  case a:
                     c++;
                     break;
                  case f:
                     d++
               }
               switch (i[t++ % b.u(i)]) {
                  case e:
                     c++;
                     break;
                  case g:
                     d++;
                     break;
                  case a:
                     c--;
                     break;
                  case f:
                     d--
               }
            }
         }
         return u
      };
      i.$FormationStraightStairs = function (i) {
         var u = i.$Cols,
            v = i.$Rows,
            e = i.$Assembly,
            t = i.uc,
            r = [],
            s = 0,
            c = 0,
            d = 0,
            f = u - 1,
            g = v - 1,
            x = t - 1;
         switch (e) {
            case k:
            case n:
            case p:
            case j:
               var a = 0,
                  b = 0;
               break;
            case l:
            case m:
            case o:
            case q:
               var a = f,
                  b = 0;
               break;
            default:
               e = q;
               var a = f,
                  b = 0
         }
         c = a;
         d = b;
         while (s < t) {
            if (A(e) || z(e)) h(r, x - s++, [d, c]);
            else h(r, s++, [d, c]);
            switch (e) {
               case k:
               case n:
                  c--;
                  d++;
                  break;
               case p:
               case j:
                  c++;
                  d--;
                  break;
               case l:
               case m:
                  c--;
                  d--;
                  break;
               case q:
               case o:
               default:
                  c++;
                  d++
            }
            if (c < 0 || d < 0 || c > f || d > g) {
               switch (e) {
                  case k:
                  case n:
                     a++;
                     break;
                  case l:
                  case m:
                  case p:
                  case j:
                     b++;
                     break;
                  case q:
                  case o:
                  default:
                     a--
               }
               if (a < 0 || b < 0 || a > f || b > g) {
                  switch (e) {
                     case k:
                     case n:
                        a = f;
                        b++;
                        break;
                     case p:
                     case j:
                        b = g;
                        a++;
                        break;
                     case l:
                     case m:
                        b = g;
                        a--;
                        break;
                     case q:
                     case o:
                     default:
                        a = 0;
                        b++
                  }
                  if (b > g) b = g;
                  else if (b < 0) b = 0;
                  else if (a > f) a = f;
                  else if (a < 0) a = 0
               }
               d = b;
               c = a
            }
         }
         return r
      };
      i.$FormationRectangle = function (f) {
         var d = f.$Cols || 1,
            e = f.$Rows || 1,
            g = [],
            a, b, i;
         i = c.$Round(c.j(d / 2, e / 2)) + 1;
         for (a = 0; a < d; a++)
            for (b = 0; b < e; b++) h(g, i - c.j(a + 1, b + 1, d - a, e - b), [b, a]);
         return g
      };
      i.$FormationRandom = function (d) {
         for (var e = [], a, b = 0; b < d.$Rows; b++)
            for (a = 0; a < d.$Cols; a++) h(e, c.H(1e5 * c.Tc()) % 13, [b, a]);
         return e
      };
      i.$FormationCircle = function (d) {
         for (var e = d.$Cols || 1, f = d.$Rows || 1, g = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
            for (a = 0; a < f; a++) h(g, c.$Round(c.Hb(c.z(b - i, 2) + c.z(a - j, 2))), [a, b]);
         return g
      };
      i.$FormationCross = function (d) {
         for (var e = d.$Cols || 1, f = d.$Rows || 1, g = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
            for (a = 0; a < f; a++) h(g, c.$Round(c.j(c.P(b - i), c.P(a - j))), [a, b]);
         return g
      };
      i.$FormationRectangleCross = function (f) {
         for (var g = f.$Cols || 1, i = f.$Rows || 1, j = [], a, d = g / 2 - .5, e = i / 2 - .5, k = c.l(d, e) + 1, b = 0; b < g; b++)
            for (a = 0; a < i; a++) h(j, c.$Round(k - c.l(d - c.P(b - d), e - c.P(a - e))) - 1, [a, b]);
         return j
      }
   };
   i.$JssorSlideshowRunner$ = function (n, q, o, r, w, v) {
      var a = this,
         f, m, i, t = 0,
         s = r.$TransitionsOrder;

      function h(a) {
         var c = {
            $Left: "x",
            $Top: "y",
            $Bottom: "m",
            $Right: "t",
            $Rotate: "r",
            $ScaleX: "sX",
            $ScaleY: "sY",
            $TranslateX: "tX",
            $TranslateY: "tY",
            $SkewX: "kX",
            $SkewY: "kY",
            $Opacity: "o",
            $ZIndex: "i",
            $Clip: "c"
         };
         b.f(a, function (e, d) {
            var b = c[d];
            if (b) {
               a[b] = e;
               delete a[d];
               b == "c" && h(e)
            }
         });
         if (a.$Zoom) a.sX = a.sY = a.$Zoom
      }

      function j(f, e) {
         var a = {
            $Duration: 1,
            $Delay: 0,
            $Cols: 1,
            $Rows: 1,
            $Opacity: 0,
            $Zoom: 0,
            $Clip: 0,
            $Move: k,
            $SlideOut: k,
            $Reverse: k,
            $Formation: u.$FormationRandom,
            $Assembly: 1032,
            $ChessMode: {
               $Column: 0,
               $Row: 0
            },
            $Easing: g.$Linear,
            $Round: {},
            Dc: [],
            $During: {}
         };
         b.B(a, f);
         if (a.$Rows == 0) a.$Rows = c.$Round(a.$Cols * e);
         a.$Easing = b.ce(a.$Easing);
         h(a);
         h(a.$Easing);
         h(a.$During);
         h(a.$Round);
         a.uc = a.$Cols * a.$Rows;
         a.Uf = function (c, b) {
            c /= a.$Cols;
            b /= a.$Rows;
            var f = c + "x" + b;
            if (!a.Dc[f]) {
               a.Dc[f] = {
                  w: c,
                  h: b
               };
               for (var d = 0; d < a.$Cols; d++)
                  for (var e = 0; e < a.$Rows; e++) a.Dc[f][e + "," + d] = {
                     y: e * b,
                     t: d * c + c,
                     m: e * b + b,
                     x: d * c
                  }
            }
            return a.Dc[f]
         };
         if (a.$Brother) {
            a.$Brother = j(a.$Brother, e);
            a.$SlideOut = d
         }
         return a
      }

      function p(s, g, a, t, o, n) {
         var h, e, j = a.$ChessMode.$Column || 0,
            m = a.$ChessMode.$Row || 0,
            i = a.Uf(o, n),
            p = a.$Formation(a),
            r = a.$SlideOut;
         g = b.bb(g);
         b.N(g, 1);
         b.Bb(g, "hidden");
         b.db(g, "absolute");
         v(g, 0, 0);
         !a.$Reverse && p.reverse();
         var f = {
               x: a.c & 1,
               t: a.c & 2,
               y: a.c & 4,
               m: a.c & 8
            },
            q = new l(0, 0);
         b.f(p, function (w, v) {
            if (r) v = b.u(p) - v - 1;
            var x = a.$Delay * v;
            b.f(w, function (G) {
               var J = G[0],
                  I = G[1],
                  O = J + "," + I,
                  v = k,
                  w = k,
                  z = k;
               if (j && I % 2) {
                  if (j & 3) v = !v;
                  if (j & 12) w = !w;
                  if (j & 16) z = !z
               }
               if (m && J % 2) {
                  if (m & 3) v = !v;
                  if (m & 12) w = !w;
                  if (m & 16) z = !z
               }
               var E = w ? f.m : f.y,
                  B = w ? f.y : f.m,
                  D = v ? f.t : f.x,
                  C = v ? f.x : f.t,
                  H = E || B || D || C,
                  A = b.bb(g);
               e = {
                  x: 0,
                  y: 0,
                  o: 1
               };
               h = b.B({}, e);
               if (a.o) e.o = 2 - a.o;
               var N = a.$Cols * a.$Rows > 1 || H;
               if (a.sX || a.r) {
                  var M = d;
                  if (M) {
                     e.sX = e.sY = a.sX ? a.sX - 1 : 1;
                     h.sX = h.sY = 1;
                     var T = a.r || 0;
                     e.r = T * 360 * (z ? -1 : 1);
                     h.r = 0
                  }
               }
               if (N) {
                  var F = i[O];
                  if (H) {
                     var p = {},
                        y = a.$ScaleClip || 1;
                     if (E && B) {
                        p.y = i.h / 2 * y;
                        p.m = -p.y
                     } else if (E) p.m = -i.h * y;
                     else if (B) p.y = i.h * y;
                     if (D && C) {
                        p.x = i.w / 2 * y;
                        p.t = -p.x
                     } else if (D) p.t = -i.w * y;
                     else if (C) p.x = i.w * y;
                     if (a.$Move) {
                        var R = (p.x || 0) + (p.t || 0),
                           S = (p.y || 0) + (p.m || 0);
                        e.x += R;
                        e.y += S
                     }
                     h.c = F;
                     b.f(p, function (b, a) {
                        p[a] = F[a] + b
                     });
                     e.c = p
                  } else b.Cg(A, F)
               }
               var P = v ? 1 : -1,
                  Q = w ? 1 : -1;
               if (a.x) e.x += o * a.x * P;
               if (a.y) e.y += n * a.y * Q;
               var K = {
                  $Elmt: A,
                  $Easing: a.$Easing,
                  $During: a.$During,
                  $Round: a.$Round,
                  $Move: a.$Move,
                  Cb: o,
                  yb: n,
                  je: c.$Round(a.$Duration / 4),
                  $Reverse: !r
               };
               e = b.ch(e, h);
               var L = new l(t + x, a.$Duration, K, A, h, e);
               q.L(L);
               s.Ff(A)
            })
         });
         q.M(-1);
         return q
      }
      a.Mf = function () {
         var a = 0,
            d = r.$Transitions,
            e = b.u(d);
         if (s) a = t++ % e;
         else a = c.G(c.Tc() * e);
         d[a] && (d[a].ac = a);
         return d[a]
      };
      a.Zb = function () {
         n.Zb();
         m = e;
         i = e
      };
      a.vg = function (v, y, w, x, s, k) {
         f = j(s, k);
         var h = x.Ne,
            d = w.Ne,
            e = h,
            g = d,
            r = f,
            b = f.$Brother || j({}, k);
         if (!f.$SlideOut) {
            e = d;
            g = h
         }
         var l = b.$Shift || 0,
            u = c.l(l, 0),
            t = c.l(-l, 0);
         m = p(n, g, b, u, q, o);
         i = p(n, e, r, t, q, o);
         a.ac = v
      };
      a.Sg = function () {
         var a = e;
         if (i) {
            a = new l(0, 0);
            a.L(i);
            a.L(m);
            a.ge = f
         }
         return a
      }
   };
   var o = {
         wh: "data-scale",
         zb: "data-autocenter",
         qd: "data-nofreeze",
         Rd: "data-nodrag"
      },
      q = new function () {
         var a = this;
         a.Bc = function (c, a, e, d) {
            (d || !b.g(c, a)) && b.g(c, a, e)
         };
         a.Ac = function (a) {
            var c = b.s(a, o.zb);
            b.ad(a, c)
         }
      },
      s = {
         Fc: 1
      };
   i.$JssorBulletNavigator$ = function () {
      var a = this,
         E = b.V(a, p),
         h, v, C, B, m, l = 0,
         g, r, n, z, A, i, k, u, t, x, j;

      function y(a) {
         j[a] && j[a].fe(a == l)
      }

      function w(b) {
         a.k(s.Fc, b * r)
      }
      a.Ed = function (a) {
         if (a != m) {
            var d = l,
               b = c.G(a / r);
            l = b;
            m = a;
            y(d);
            y(b)
         }
      };
      a.ed = function (a) {
         b.tb(h, !a)
      };
      a.jd = function (J) {
         b.$Destroy(j);
         m = f;
         a.se();
         x = [];
         j = [];
         b.Ob(h);
         v = c.H(J / r);
         l = 0;
         var F = u + z,
            G = t + A,
            s = c.H(v / n) - 1;
         C = u + F * (!i ? s : n - 1);
         B = t + G * (i ? s : n - 1);
         b.I(h, C);
         b.J(h, B);
         for (var o = 0; o < v; o++) {
            var H = b.Vd();
            b.Uc(H, o + 1);
            var p = b.ve(k, "numbertemplate", H, d);
            b.db(p, "absolute");
            var E = o % (s + 1),
               I = c.G(o / (s + 1)),
               y = g.Jb && !i ? s - E : E;
            b.U(p, (!i ? y : I) * F);
            b.T(p, (i ? y : I) * G);
            b.O(h, p);
            x[o] = p;
            g.$ActionMode & 1 && a.a(p, "click", b.Z(e, w, o));
            g.$ActionMode & 2 && a.a(p, "mouseenter", b.Z(e, w, o));
            j[o] = b.pc(p)
         }
         q.Ac(h)
      };
      a.F = function (d, c) {
         a.$Elmt = h = b.$GetElement(d);
         a.id = g = b.B({
            $SpacingX: 10,
            $SpacingY: 10,
            $ActionMode: 1
         }, c);
         k = b.$FindChild(h, "prototype");
         u = b.I(k);
         t = b.J(k);
         b.ib(k, h);
         r = g.$Steps || 1;
         n = g.$Rows || 1;
         z = g.$SpacingX;
         A = g.$SpacingY;
         i = g.$Orientation & 2;
         g.$AutoCenter && q.Bc(h, o.zb, g.$AutoCenter)
      };
      a.$Destroy = function () {
         b.$Destroy(j, E)
      };
      b.F(a)
   };
   i.$JssorArrowNavigator$ = function () {
      var a = this,
         v = b.V(a, p),
         f, c, g, l, r, k, h, m, j, i;

      function n(b) {
         a.k(s.Fc, b, d)
      }

      function u(a) {
         b.tb(f, !a);
         b.tb(c, !a)
      }

      function t() {
         j.$Enable((g.$Loop || !l.hh(h)) && k > 1);
         i.$Enable((g.$Loop || !l.ih(h)) && k > 1)
      }
      a.Ed = function (c, a, b) {
         h = a;
         !b && t()
      };
      a.ed = u;
      a.jd = function (g) {
         k = g;
         h = 0;
         if (!r) {
            a.a(f, "click", b.Z(e, n, -m));
            a.a(c, "click", b.Z(e, n, m));
            j = b.pc(f);
            i = b.pc(c);
            b.g(f, o.qd, 1);
            b.g(c, o.qd, 1);
            r = d
         }
      };
      a.F = function (e, d, h, i) {
         a.id = g = b.B({
            $Steps: 1
         }, h);
         f = e;
         c = d;
         if (g.Jb) {
            f = d;
            c = e
         }
         m = g.$Steps;
         l = i;
         if (g.$AutoCenter) {
            q.Bc(f, o.zb, g.$AutoCenter);
            q.Bc(c, o.zb, g.$AutoCenter)
         }
         q.Ac(f);
         q.Ac(c)
      };
      a.$Destroy = function () {
         b.$Destroy(j, i, v)
      };
      b.F(a)
   };
   i.$JssorThumbnailNavigator$ = function () {
      var i = this,
         E = b.V(i, p),
         h, B, a, y, C, m, l = [],
         A, z, g, n, r, w, v, x, t, u;

      function D() {
         var c = this;
         b.V(c, p);
         var h, f, n, l;

         function o() {
            n.fe(m == h)
         }

         function j(e) {
            if (e || !t.$LastDragSucceeded()) {
               var c = g - h % g,
                  a = t.Kd((h + c) / g - 1),
                  b = a * g + g - c;
               if (a < 0) b += y % g;
               if (a >= C) b -= y % g;
               i.k(s.Fc, b, k, d)
            }
         }
         c.Md = o;
         c.F = function (g, i) {
            c.ac = h = i;
            l = g.ug || g.Bg || b.Lb();
            c.Xc = f = b.ve(u, "thumbnailtemplate", l, d);
            n = b.pc(f);
            a.$ActionMode & 1 && c.a(f, "click", b.Z(e, j, 0));
            a.$ActionMode & 2 && c.a(f, "mouseenter", b.Z(e, j, 1))
         };
         b.F(c)
      }
      i.Ed = function (a, e, d) {
         if (a != m) {
            var b = m;
            m = a;
            b != -1 && l[b].Md();
            l[a] && l[a].Md()
         }!d && t.$PlayTo(t.Kd(c.G(a / g)))
      };
      i.ed = function (a) {
         b.tb(h, !a)
      };
      i.jd = function (I, J) {
         b.$Destroy(t, l);
         m = f;
         l = [];
         var K = b.bb(B);
         b.Ob(h);
         a.Jb && b.g(h, "dir", "rtl");
         b.Jg(h, b.fb(K));
         var i = b.$FindChild(h, "slides", d);
         y = I;
         C = c.H(y / g);
         m = -1;
         var e = a.$Orientation & 1,
            s = w + (w + n) * (g - 1) * (1 - e),
            p = v + (v + r) * (g - 1) * e,
            E = (e ? c.l : c.j)(A, s),
            u = (e ? c.j : c.l)(z, p);
         x = c.H((A - n) / (w + n) * e + (z - r) / (v + r) * (1 - e));
         var G = s + (s + n) * (x - 1) * e,
            F = p + (p + r) * (x - 1) * (1 - e);
         E = c.j(E, G);
         u = c.j(u, F);
         b.I(i, E);
         b.J(i, u);
         b.ad(i, 3);
         var o = [];
         b.f(J, function (k, f) {
            var h = new D(k, f),
               d = h.Xc,
               a = c.G(f / g),
               j = f % g;
            b.U(d, (w + n) * j * (1 - e));
            b.T(d, (v + r) * j * e);
            if (!o[a]) {
               o[a] = b.Lb();
               b.O(i, o[a])
            }
            b.O(o[a], d);
            l.push(h)
         });
         var H = b.B({
            $AutoPlay: 0,
            $NaviQuitDrag: k,
            $SlideWidth: s,
            $SlideHeight: p,
            $SlideSpacing: n * e + r * (1 - e),
            $MinDragOffsetToSlide: 12,
            $SlideDuration: 200,
            $PauseOnHover: 1,
            $Cols: x,
            $PlayOrientation: a.$Orientation,
            $DragOrientation: a.$NoDrag || a.$DisableDrag ? 0 : a.$Orientation
         }, a);
         t = new j(h, H);
         q.Ac(h)
      };
      i.F = function (j, f, e) {
         h = j;
         i.id = a = b.B({
            $SpacingX: 0,
            $SpacingY: 0,
            $Orientation: 1,
            $ActionMode: 1
         }, f);
         A = b.I(h);
         z = b.J(h);
         var c = b.$FindChild(h, "slides", d);
         u = b.$FindChild(c, "prototype");
         e = b.bb(e);
         b.ub(e, c);
         w = b.I(u);
         v = b.J(u);
         b.ib(u, c);
         b.db(c, "absolute");
         b.Bb(c, "hidden");
         g = a.$Rows || 1;
         n = a.$SpacingX;
         r = a.$SpacingY;
         a.$AutoCenter &= a.$Orientation;
         a.$AutoCenter && q.Bc(h, o.zb, a.$AutoCenter);
         B = b.bb(h)
      };
      i.$Destroy = function () {
         b.$Destroy(t, l, E)
      };
      b.F(i)
   };

   function n(e, d, c) {
      var a = this;
      b.V(a, p);
      l.call(a, 0, c.$Idle);
      a.zc = 0;
      a.cd = c.$Idle
   }
   n.yc = 21;
   n.Wb = 24;
   var t = i.$JssorCaptionSlideo$ = function () {
         var a = this,
            db = b.V(a, p);
         l.call(a, 0, 0);
         var f, j, B, C, w = new l(0, 0),
            L = [],
            u = [],
            F, q = 0;

         function H(c, f) {
            var a = L[c];
            if (a == e) {
               a = L[c] = {
                  nb: c,
                  Vc: [],
                  Ce: []
               };
               var d = 0;
               !b.f(u, function (a, b) {
                  d = b;
                  return a.nb > c
               }) && d++;
               u.splice(d, 0, a)
            }
            return a
         }

         function Q(f, v) {
            var s = b.I(f),
               r = b.J(f),
               m = b.Vb(f),
               j = {
                  x: m ? 0 : b.U(f),
                  y: m ? 0 : b.T(f),
                  Nb: 0,
                  ec: 0,
                  o: b.hb(f),
                  i: b.N(f) || 0,
                  r: 0,
                  rX: 0,
                  rY: 0,
                  sX: 1,
                  sY: 1,
                  tX: 0,
                  tY: 0,
                  tZ: 0,
                  kX: 0,
                  kY: 0,
                  ls: 0,
                  lh: 1,
                  so: 0,
                  c: {
                     y: 0,
                     t: s,
                     m: r,
                     x: 0
                  }
               },
               a, g;
            if (C) {
               var o = C[b.s(f, "c")];
               if (o) {
                  a = H(o.r, 0);
                  a.Ih = o.e || 0
               }
            }
            var h = b.g(f, "data-to");
            if (h && m) {
               h = b.Wd(h);
               h = {
                  x: b.Oc(h[0]),
                  y: b.Oc(h[1])
               }
            }
            var u = {
               $Elmt: f,
               $OriginalWidth: s,
               $OriginalHeight: r,
               Af: h,
               lf: j.x,
               of: j.y,
               Vb: m
            };
            b.f(v, function (e) {
               var m = b.B({
                     $Easing: b.ce(e.e),
                     $During: e.dr,
                     Yc: e.p
                  }, u),
                  i = b.B(d, {}, e);
               b.Ze(i, ["b", "d", "e", "p", "dr"]);
               var h = new l(e.b, e.d, m, f, j, i);
               q = c.l(q, e.b + e.d);
               if (a) {
                  if (!g) g = new l(e.b, 0);
                  g.L(h)
               } else {
                  var k = H(e.b, e.b + e.d);
                  k.Vc.push(h)
               }
               j = h.Mh()
            });
            if (a && g) {
               g.Vf();
               var i = g,
                  n, k = g.Lc(),
                  p = g.qb(),
                  t = c.l(p, a.Ih);
               if (a.nb < p) {
                  if (a.nb > k) {
                     i = new l(k, a.nb - k);
                     i.L(g, d)
                  } else i = e;
                  n = new l(a.nb, t - k, {
                     rc: t - a.nb,
                     Ah: d
                  });
                  n.L(g, d)
               }
               i && a.Vc.push(i);
               n && a.Ce.push(n)
            }
            return j
         }

         function N(d, c) {
            b.f(d, function (d) {
               var f = b.s(d, "play");
               if (c && f) {
                  var e = new t(d, j, {
                     Fe: f
                  });
                  E.push(e);
                  a.a(e, n.yc, I);
                  a.a(e, n.Wb, G)
               } else {
                  N(b.fb(d).concat(b.oc(b.Ec(d, "data-tchd"))), c + 1);
                  var g = b.oc(b.Ec(d, "data-tsep"));
                  g.push(d);
                  b.f(g, function (c) {
                     var a = B[b.s(c, "t")];
                     a && Q(c, a)
                  })
               }
            })
         }

         function cb(f, e, g) {
            var c = f.b - e;
            if (c) {
               var b = new l(e, c);
               b.L(w, d);
               b.$Shift(g);
               a.L(b)
            }
            a.ud(f.d);
            return c
         }

         function bb(e) {
            var c = w.Lc(),
               d = 0;
            b.f(e, function (e, f) {
               e = b.B({
                  d: 3e3
               }, e);
               cb(e, c, d);
               c = e.b;
               d += e.d;
               if (!f || e.t == 2) {
                  a.zc = c;
                  a.cd = c + e.d
               }
            })
         }

         function A(i, d, e) {
            var f = b.u(d);
            if (f > 4)
               for (var j = c.H(f / 4), a = 0; a < j; a++) {
                  var g = d.slice(a * 4, c.j(a * 4 + 4, f)),
                     h = new l(g[0].nb, 0);
                  A(h, g, e);
                  i.L(h)
               } else b.f(d, function (a) {
                  b.f(e ? a.Ce : a.Vc, function (a) {
                     e && a.ud(q - a.qb());
                     i.L(a)
                  })
               })
         }
         var i, M, y = 0,
            g, x, S, R, z, E = [],
            O = [],
            r, D, m;

         function v(a) {
            return a & 2 || a & 4 && b.Ad().wd
         }

         function Z() {
            if (!z) {
               g & 8 && a.a(h, "keydown", J);
               if (g & 32) {
                  a.a(h, "mousedown", s);
                  a.a(h, "touchstart", s)
               }
               z = d
            }
         }

         function Y() {
            a.W(h, "keydown", J);
            a.W(h, "mousedown", s);
            a.W(h, "touchstart", s);
            z = k
         }

         function T(b) {
            if (!r || b) {
               r = d;
               a.S();
               b && y && a.M(0);
               a.Pd(1);
               a.If();
               Z();
               a.k(n.yc, a)
            }
         }

         function o() {
            if (!D && (r || a.A())) {
               D = d;
               a.S();
               a.Ud() > a.zc && a.M(a.zc);
               a.Pd(S || 1);
               a.xc(0)
            }
         }

         function V() {
            !m && o()
         }

         function U(c) {
            var b = c;
            if (c < 0 && a.A()) b = 1;
            if (b != y) {
               y = b;
               M && a.k(n.Wb, a, y)
            }
         }

         function J(a) {
            g & 8 && b.Be(a) == 27 && o()
         }

         function X(a) {
            if (m && b.Ee(a) !== e) {
               m = k;
               g & 16 && b.$Delay(V, 160)
            }
         }

         function s(a) {
            g & 32 && !b.Qe(f, b.$EvtSrc(a)) && o()
         }

         function W(a) {
            if (!m) {
               m = d;
               if (i & 1) b.Te(a, f) && T()
            }
         }

         function ab(j) {
            var h = b.$EvtSrc(j),
               a = b.gb(h, e, e, "A"),
               c = a && (b.Ge(a) || a === f || b.Qe(f, a));
            if (r && v(g)) !c && o();
            else if (v(i)) !c && T(d)
         }

         function I(b) {
            var c = b.Dh(),
               a = O[c];
            a !== b && a && a.Ph();
            O[c] = b
         }

         function G(b, c) {
            a.k(n.Wb, b, c)
         }
         a.Dh = function () {
            return R || ""
         };
         a.Ph = o;
         a.od = function () {
            U(1)
         };
         a.sd = function () {
            r = k;
            D = k;
            U(-1);
            !a.A() && Y()
         };
         a.Mc = function () {
            !m && x && a.Ud() > a.cd && o()
         };
         a.F = function (m, k, e) {
            f = m;
            j = k;
            i = e.Fe;
            F = e.nh;
            B = j.$Transitions;
            C = j.$Controls;
            N([f], 0);
            A(w, u);
            if (i) {
               a.L(w);
               F = d;
               x = b.s(f, "idle");
               g = b.s(f, "rollback");
               S = b.s(f, "speed", 1);
               R = b.cb(f, "group");
               (v(i) || v(g)) && a.a(f, "click", ab);
               if ((i & 1 || x) && !b.Ad().wd) {
                  a.a(f, "mouseenter", W);
                  a.a(f, "mouseleave", X)
               }
               M = b.s(f, "pause")
            }
            var l = j.$Breaks || [],
               c = l[b.s(f, "b")] || [],
               h = {
                  b: q,
                  d: b.u(c) ? 0 : e.$Idle || x || 0
               };
            c = c.concat([h]);
            bb(c);
            a.qb();
            F && a.ud(1e8);
            q = a.qb();
            A(a, u, d);
            a.M(-1);
            a.M(b.s(f, "initial") || 0)
         };
         a.$Destroy = function () {
            b.$Destroy(db, E);
            a.S();
            a.M(-1)
         };
         b.F(a)
      },
      j = i.$JssorSlider$ = (i.module || {}).exports = function () {
         var a = this,
            Gc = b.V(a, p),
            Ob = "data-jssor-slider",
            ic = "data-jssor-thumb",
            u, m, S, Cb, kb, jb, X, J, O, M, Zb, Cc, Hc = 1,
            Bc = 1,
            kc = 1,
            sc = 1,
            nc = {},
            w, R, Mb, bc, Yb, wb, zb, yb, ab, H = [],
            Rb, r = -1,
            tc, q, I, G, P, ob, pb, E, N, lb, T, z, W, nb, Z = [],
            vc, xc, oc, t, vb, Hb, qb, eb, Y, Kb, Gb, Qb, Sb, F, Lb = 0,
            cb = 0,
            Q = Number.MAX_VALUE,
            K = Number.MIN_VALUE,
            C, mb, db, U = 1,
            Xb = 0,
            fb, y, Fb, Eb, L, Ab, Db, B, V, rb, A, Bb, cc = b.Ad(),
            Vb = cc.wd,
            x = [],
            D, hb, bb, Nb, hc, mc, ib;

         function Jb() {
            return !U && Y & 12
         }

         function Ic() {
            return Xb || !U && Y & 3
         }

         function Ib() {
            return !y && !Jb() && !A.$IsPlaying()
         }

         function Wc() {
            return !Ic() && Ib()
         }

         function jc() {
            return z || S
         }

         function Pc() {
            return jc() & 2 ? pb : ob
         }

         function lc(a, c, d) {
            b.U(a, c);
            b.T(a, d)
         }

         function Fc(c, b) {
            var a = jc(),
               d = (ob * b + Lb) * (a & 1),
               e = (pb * b + Lb) * (a & 2) / 2;
            lc(c, d, e)
         }

         function dc(b, f) {
            if (y && !(C & 1)) {
               var e = b,
                  d;
               if (b < K) {
                  e = K;
                  d = -1
               }
               if (b > Q) {
                  e = Q;
                  d = 1
               }
               if (d) {
                  var a = b - e;
                  if (f) {
                     a = c.sh(a) * 2 / c.q;
                     a = c.z(a * d, 1.6)
                  } else {
                     a = c.z(a * d, .625);
                     a = c.qe(a * c.q / 2)
                  }
                  b = e + a * d
               }
            }
            return b
         }

         function qc(a) {
            return dc(a, d)
         }

         function Nc(a) {
            return dc(a)
         }

         function xb(a, b) {
            if (!(C & 1)) {
               var c = a - Q + (b || 0),
                  d = K - a + (b || 0);
               if (c > 0 && c > d) a = Q;
               else if (d > 0) a = K
            }
            return a
         }

         function yc(a) {
            return !(C & 1) && a - K < .0001
         }

         function wc(a) {
            return !(C & 1) && Q - a < .0001
         }

         function sb(a) {
            return !(C & 1) && (a - K < .0001 || Q - a < .0001)
         }

         function Tb(c, a, d) {
            !ib && b.f(Z, function (b) {
               b.Ed(c, a, d)
            })
         }

         function ec(b) {
            var a = b,
               d = sb(b);
            if (d) a = xb(a);
            else {
               b = v(b);
               a = b
            }
            a = c.G(a);
            a = c.l(a, 0);
            return a
         }

         function fd(a) {
            x[r];
            Rb = r;
            r = a;
            tc = x[r]
         }

         function zc() {
            z = 0;
            var b = B.A(),
               d = ec(b);
            Tb(d, b);
            if (sb(b) || b == c.G(b)) {
               if (t & 2 && (eb > 0 && d == q - 1 || eb < 0 && !d)) t = 0;
               fd(d);
               a.k(j.$EVT_PARK, r, Rb)
            }
         }

         function pc(a, b) {
            if (q && (!b || !A.$IsPlaying())) {
               A.S();
               realPosition = qc(a);
               V.M(realPosition);
               zc()
            }
         }

         function ub(a) {
            if (q) {
               a = xb(a);
               a = v(a);
               fb = k;
               _IsStandBy = k;
               y = k;
               pc(a)
            } else Tb(0, 0)
         }

         function Zc() {
            var b = j.Se || 0,
               a = mb;
            j.Se |= a;
            return W = a & ~b
         }

         function Uc() {
            if (W) {
               j.Se &= ~mb;
               W = 0
            }
         }

         function Dc(c) {
            var a = b.Lb();
            b.rb(a, ab);
            c && b.Bb(a, "hidden");
            return a
         }

         function v(b, a) {
            a = a || q || 1;
            return (b % a + a) % a
         }

         function fc(c, a, b) {
            t & 8 && (t = 0);
            tb(c, Gb, a, b)
         }

         function Ub() {
            b.f(Z, function (a) {
               a.ed(a.id.$ChanceToShow <= U)
            })
         }

         function Mc(c) {
            if (!U && (b.Ee(c) || !b.Te(c, u))) {
               U = 1;
               Ub();
               if (!y) {
                  Y & 12 && Jc();
                  x[r] && x[r].kc()
               }
               a.k(j.$EVT_MOUSE_LEAVE)
            }
         }

         function Lc() {
            if (U) {
               U = 0;
               Ub();
               y || !(Y & 12) || Kc()
            }
            a.k(j.$EVT_MOUSE_ENTER)
         }

         function Wb(b, a) {
            tb(b, a, d)
         }

         function tb(g, h, l, p) {
            if (q && (!y || m.$NaviQuitDrag) && !Jb() && !isNaN(g)) {
               var e = B.A(),
                  a = g;
               if (l) {
                  a = e + g;
                  if (C & 2) {
                     if (yc(e) && g < 0) a = Q;
                     if (wc(e) && g > 0) a = K
                  }
               }
               if (!(C & 1))
                  if (p) a = v(a);
                  else a = xb(a, .5);
               if (l && !sb(a)) a = c.$Round(a);
               var i = (a - e) % q;
               a = e + i;
               if (h == f) h = Gb;
               var b = c.P(i),
                  j = 0;
               if (b) {
                  if (b < 1) b = c.z(b, .5);
                  if (b > 1) {
                     var o = Pc(),
                        n = (S & 1 ? zb : yb) / o;
                     b = c.j(b, n * 1.5)
                  }
                  j = h * b
               }
               ib = d;
               A.S();
               ib = k;
               A.Re(e, a, j)
            }
         }

         function Rc(e, h, n) {
            var l = this,
               i = {
                  $Top: 2,
                  $Right: 1,
                  $Bottom: 2,
                  $Left: 1
               },
               m = {
                  $Top: "top",
                  $Right: "right",
                  $Bottom: "bottom",
                  $Left: "left"
               },
               g, a, f, j, k = {};
            l.$Elmt = e;
            l.$ScaleSize = function (q, p, t) {
               var l, s = q,
                  r = p;
               if (!f) {
                  f = b.Bh(e);
                  g = e.parentNode;
                  j = {
                     $Scale: b.s(e, o.wh, 1),
                     $AutoCenter: b.s(e, o.zb)
                  };
                  b.f(m, function (c, a) {
                     k[a] = b.s(e, "data-scale-" + c, 1)
                  });
                  a = e;
                  if (h) {
                     a = b.bb(g, d);
                     b.rb(a, {
                        $Top: 0,
                        $Left: 0
                     });
                     b.O(a, e);
                     b.O(g, a)
                  }
               }
               if (n) {
                  l = c.l(q, p);
                  if (h)
                     if (t >= 0 && t < 1) {
                        var v = c.j(q, p);
                        l = c.j(l / v, 1 / (1 - t)) * v
                     }
               } else s = r = l = c.z(O < M ? p : q, j.$Scale);
               l *= h && (l != 1 || b.Ve()) ? 1.001 : 1;
               h && (sc = l);
               b.He(a, l);
               b.I(g, f.Cb * s);
               b.J(g, f.yb * r);
               var u = b.Ue() && b.Zc() < 9 ? l : 1,
                  w = (s - u) * f.Cb / 2,
                  x = (r - u) * f.yb / 2;
               b.U(a, w);
               b.T(a, x);
               b.f(f, function (d, a) {
                  if (i[a] && d) {
                     var e = (i[a] & 1) * c.z(q, k[a]) * d + (i[a] & 2) * c.z(p, k[a]) * d / 2;
                     b.wf[a](g, e)
                  }
               });
               b.ad(g, j.$AutoCenter)
            }
         }

         function dd() {
            var a = this;
            l.call(a, 0, 0, {
               rc: q
            });
            b.f(x, function (b) {
               a.vd(b);
               b.$Shift(F / E)
            })
         }

         function cd() {
            var a = this,
               b = Bb.$Elmt;
            l.call(a, -1, 2, {
               $Easing: g.$Linear,
               zd: {
                  Rb: Fc
               },
               rc: q,
               $Reverse: Hb
            }, b, {
               Rb: 1
            }, {
               Rb: -1
            });
            a.Xc = b
         }

         function ed() {
            var b = this;
            l.call(b, -1e8, 2e8);
            b.Mc = function (e, b) {
               if (c.P(b - e) > 1e-5) {
                  var g = b,
                     f = b;
                  if (c.G(b) != b && b > e && (C & 1 || b > cb)) f++;
                  var h = ec(f);
                  Tb(h, g, d);
                  a.k(j.$EVT_POSITION_CHANGE, v(g), v(e), b, e)
               }
            }
         }

         function Tc(o, n) {
            var b = this,
               g, i, f, c, h;
            l.call(b, -1e8, 2e8, {});
            b.od = function () {
               fb = d;
               a.k(j.$EVT_SWIPE_START, v(B.A()), V.A())
            };
            b.sd = function () {
               fb = k;
               c = k;
               a.k(j.$EVT_SWIPE_END, v(B.A()), V.A());
               !y && zc()
            };
            b.Mc = function (e, b) {
               var a = b;
               if (c) a = h;
               else if (f) {
                  var d = b / f;
                  a = m.$SlideEasing(d) * (i - g) + g
               }
               a = qc(a);
               V.M(a)
            };
            b.Re = function (a, c, h, e) {
               y = k;
               f = h || 1;
               g = a;
               i = c;
               ib = d;
               V.M(a);
               ib = k;
               b.M(0);
               b.xc(f, e)
            };
            b.nf = function () {
               c = d;
               c && b.$Play(e, e, d)
            };
            b.vf = function (a) {
               h = a
            };
            V = new ed;
            V.L(o);
            Sb && V.L(n)
         }

         function Qc() {
            var c = this,
               a = Dc();
            b.N(a, 0);
            c.$Elmt = a;
            c.Ff = function (c) {
               b.O(a, c);
               b.tb(a)
            };
            c.Zb = function () {
               b.vc(a);
               b.Ob(a)
            }
         }

         function bd(w, h) {
            var g = this,
               hb = b.V(g, p),
               z, H = 0,
               V, y, u, F, K, o, E = [],
               U, M, J, i, s, A, S;
            l.call(g, -N, N + 1, {
               rc: C & 1 ? q : f,
               $Reverse: Hb
            });

            function Q() {
               z && z.$Destroy();
               Xb -= H;
               H = 0;
               z = new kb.$Class(y, kb, {
                  $Idle: b.s(y, "idle", Kb),
                  nh: !t
               });
               z.$On(n.Wb, X)
            }

            function X(b, a) {
               H += a;
               Xb += a;
               if (h == r) !H && g.kc()
            }

            function P(p, s, n) {
               if (!M) {
                  M = d;
                  if (o && n) {
                     var q = b.s(o, "data-expand", 0) * 2,
                        f = n.width,
                        e = n.height,
                        l = f,
                        i = e;
                     if (f && e) {
                        if (F) {
                           if (F & 3 && (!(F & 4) || f > I || e > G)) {
                              var m = k,
                                 r = I / G * e / f;
                              if (F & 1) m = r > 1;
                              else if (F & 2) m = r < 1;
                              l = m ? f * G / e : I;
                              i = m ? G : e * I / f
                           }
                           b.I(o, l);
                           b.J(o, i);
                           b.T(o, (G - i) / 2);
                           b.U(o, (I - l) / 2)
                        }
                        b.He(o, c.l((l + q) / l, (i + q) / i))
                     }
                     b.db(o, "absolute")
                  }
                  a.k(j.$EVT_LOAD_END, h)
               }
               s.Ie(k);
               p && p(g)
            }

            function W(f, b, c, e) {
               if (e == A && r == h && t && Ib() && !g.ld()) {
                  var a = v(f);
                  D.vg(a, h, b, g, c, G / I);
                  rb.$Shift(a - rb.Lc() - 1);
                  rb.M(a);
                  b.hf();
                  pc(a, d)
               }
            }

            function Z(b) {
               if (b == A && r == h && Ib() && !g.ld()) {
                  if (!i) {
                     var a = e;
                     if (D)
                        if (D.ac == h) a = D.Sg();
                        else D.Zb();
                     i = new ad(w, h, a, z);
                     i.eg(s)
                  }!i.$IsPlaying() && i.kd()
               }
            }

            function L(a, d, k) {
               if (a == h) {
                  if (a != d) x[d] && x[d].Xe();
                  else !k && i && i.gg();
                  s && s.$Enable();
                  A = b.Ub();
                  g.Yb(b.Z(e, Z, A))
               } else {
                  var j = c.j(h, a),
                     f = c.l(h, a),
                     n = c.j(f - j, j + q - f),
                     l = N + m.$LazyLoading - 1;
                  (!J || n <= l) && g.Yb()
               }
            }

            function bb() {
               if (r == h && i) {
                  i.S();
                  s && s.$Quit();
                  s && s.$Disable();
                  i.Me()
               }
            }

            function fb() {
               r == h && i && i.S()
            }

            function Y(b) {
               !db && a.k(j.$EVT_CLICK, h, b)
            }
            g.Ie = function (a) {
               if (S != a) {
                  S = a;
                  a && b.O(w, K);
                  !a && b.ib(K)
               }
            };
            g.Yb = function (f, c) {
               c = c || g;
               if (b.u(E) && !M) {
                  c.Ie(d);
                  if (!U) {
                     U = d;
                     a.k(j.$EVT_LOAD_START, h);
                     b.f(E, function (a) {
                        var c = b.g(a, "data-load") || "src",
                           d = !b.be(c, "data-") ? c.substring(5) : c;
                        if (!b.g(a, d)) {
                           var e = b.cb(a, d) || b.cb(a, "src2");
                           if (e) {
                              b.g(a, d, e);
                              b.vb(a, b.g(a, "data-display"))
                           }
                        }
                     })
                  }
                  b.Qh(E, o, b.Z(e, P, f, c))
               } else P(f, c)
            };
            g.og = function () {
               if (Wc())
                  if (q == 1) {
                     g.Xe();
                     L(h, h)
                  } else {
                     var a;
                     if (D) a = D.Mf(q);
                     if (a) {
                        A = b.Ub();
                        var c = h + eb,
                           d = x[v(c)];
                        return d.Yb(b.Z(e, W, c, d, a, A), g)
                     } else(C || !sb(B.A()) || !sb(B.A() + eb)) && Wb(eb)
                  }
            };
            g.kc = function () {
               L(h, h, d)
            };
            g.Xe = function () {
               s && s.$Quit();
               s && s.$Disable();
               g.Ke();
               i && i.qg();
               i = e;
               Q()
            };
            g.hf = function () {
               b.vc(w)
            };
            g.Ke = function () {
               b.tb(w)
            };

            function T(a, h) {
               if (!h) {
                  u = b.$FindChild(a, "bg");
                  y = u && b.Mb(u)
               }
               if (!b.g(a, Ob) && (h || !u)) {
                  var l = b.s(a, "data-arr");
                  if (l != f) {
                     function k(d, c) {
                        b.g(d, c, b.g(a, c))
                     }
                     var j = kb && kb.$Transitions || {};
                     b.cf(a, b.g(a, "data-arr").endsWith(";"), b.hb(a), j[l], function (a, c) {
                        b.g(a, "data-t", b.u(j));
                        j.push(c);
                        k(a, "data-to");
                        k(a, "data-bf");
                        k(a, "data-c")
                     });
                     b.g(a, "data-arr", "")
                  }
                  var c = b.fb(a);
                  if (!u) {
                     y = a;
                     u = Dc(d);
                     b.g(u, "data-u", "bg");
                     var g = "background";
                     b.Q(u, g + "Color", b.Q(y, g + "Color"));
                     b.Q(u, g + "Image", b.Q(y, g + "Image"));
                     b.Q(y, g, e);
                     b.u(c) ? b.ub(u, c[0]) : b.O(y, u)
                  }
                  c = c.concat(b.oc(b.Ec(a, "data-tchd")));
                  b.f(c, function (c) {
                     if (h < 3 && !o)
                        if (b.cb(c, "u") == "image") {
                           o = c;
                           o.border = 0;
                           b.rb(o, ab);
                           b.rb(a, ab);
                           b.Q(o, "maxWidth", "10000px");
                           b.O(u, o)
                        } T(c, h + 1)
                  });
                  if (h) {
                     b.g(a, "data-events", b.ic(a));
                     b.g(a, "data-display", b.vb(a));
                     !b.Vb(a) && b.Nh(a, b.g(a, "data-to"));
                     b.Sh(a, b.g(a, "data-bf"));
                     if (a.tagName == "IMG") {
                        E.push(a);
                        if (!b.g(a, "src")) {
                           J = d;
                           b.vc(a)
                        }
                     }
                     var i = b.g(a, "data-load");
                     i && E.push(a) && (J = J || !b.be(i, "data-"));
                     var m = i && b.g(a, i) || b.xf(a);
                     if (m) {
                        var n = new Image;
                        b.g(n, "data-src", m);
                        E.push(n)
                     }
                     b.N(a, (b.N(a) || 0) + 1)
                  }
                  b.Th(a, b.s(a, "data-p"));
                  b.Eh(a, b.cb(a, "po"));
                  b.jc(a, b.g(a, "data-ts"))
               }
            }
            g.md = function (c, b) {
               var a = N - b;
               Fc(V, a)
            };
            g.ac = h;
            T(w, 0);
            b.rb(w, ab);
            b.Bb(w, "hidden");
            b.jc(w, "flat");
            F = b.s(y, "data-fillmode", m.$FillMode);
            var O = b.$FindChild(y, "thumb", d);
            if (O) {
               g.ug = b.bb(O);
               b.vc(O)
            }
            b.tb(w);
            K = b.bb(R);
            b.N(K, 1e3);
            g.a(w, "click", Y);
            Q();
            g.Bg = o;
            g.Ne = w;
            g.Xc = V = w;
            g.a(a, 203, L);
            g.a(a, 28, fb);
            g.a(a, 24, bb);
            g.$Destroy = function () {
               b.$Destroy(hb, z, i)
            }
         }

         function ad(F, h, q, s) {
            var c = this,
               E = b.V(c, p),
               i = 0,
               u = 0,
               g, m, f, e, o, w, v, z = x[h];
            l.call(c, 0, 0);

            function B() {
               c.kd()
            }

            function C(a) {
               v = a;
               c.S();
               c.kd()
            }

            function A() {}
            c.kd = function () {
               if (!y && !fb && !v && r == h && !c.ld()) {
                  var k = c.A();
                  if (!k)
                     if (g && !o) {
                        o = d;
                        c.Me(d);
                        a.k(j.$EVT_SLIDESHOW_START, h, u, i, u, g, e)
                     } a.k(j.$EVT_STATE_CHANGE, h, k, i, m, f, e);
                  if (!Jb()) {
                     var l;
                     if (k == e) t && b.$Delay(z.og, 20);
                     else {
                        if (k == f) l = e;
                        else if (!k) l = f;
                        else l = c.Td();
                        (k != f || !Ic()) && c.xc(l, B)
                     }
                  }
               }
            };
            c.gg = function () {
               f == e && f == c.A() && c.M(m)
            };
            c.qg = function () {
               D && D.ac == h && D.Zb();
               var b = c.A();
               b < e && a.k(j.$EVT_STATE_CHANGE, h, -b - 1, i, m, f, e)
            };
            c.Me = function (a) {
               q && b.Bb(T, a && q.ge.$Outside ? "" : "hidden")
            };
            c.md = function (c, b) {
               if (o && b >= g) {
                  o = k;
                  z.Ke();
                  D.Zb();
                  a.k(j.$EVT_SLIDESHOW_END, h, g, i, u, g, e)
               }
               a.k(j.$EVT_PROGRESS_CHANGE, h, b, i, m, f, e)
            };
            c.eg = function (a) {
               if (a && !w) {
                  w = a;
                  a.$On($JssorPlayer$.sg, C)
               }
            };
            c.a(s, n.yc, A);
            q && c.vd(q);
            g = c.qb();
            c.vd(s);
            m = g + s.zc;
            e = c.qb();
            f = t ? g + s.cd : e;
            c.$Destroy = function () {
               E.$Destroy();
               c.S()
            }
         }

         function rc() {
            Nb = fb;
            hc = A.Td();
            bb = B.A();
            hb = Nc(bb)
         }

         function Kc() {
            rc();
            if (y || Jb()) {
               A.S();
               a.k(j.Yf)
            }
         }

         function Jc(f) {
            if (Ib()) {
               var b = B.A(),
                  a = hb,
                  e = 0;
               if (f && c.P(L) >= m.$MinDragOffsetToSlide) {
                  a = b;
                  e = Db
               }
               a = c.H(a);
               a = xb(a + e, .5);
               var d = c.P(a - b);
               if (d < 1 && m.$SlideEasing != g.$Linear) d = c.z(d, .5);
               if ((!db || !f) && Nb) A.xc(hc);
               else if (b == a) tc.kc();
               else A.Re(b, a, d * Gb)
            }
         }

         function gc(a) {
            !b.gb(b.$EvtSrc(a), f, o.Rd) && b.$CancelEvent(a)
         }

         function Ac(b) {
            Fb = k;
            y = d;
            Kc();
            if (!Nb) z = 0;
            a.k(j.$EVT_DRAG_START, v(bb), bb, b)
         }

         function Yc(a) {
            Ec(a, 1)
         }

         function Ec(c, d) {
            L = 0;
            Ab = 0;
            Db = 0;
            kc = sc;
            if (d) {
               var i = c.touches[0];
               Eb = {
                  x: i.clientX,
                  y: i.clientY
               }
            } else Eb = b.bd(c);
            var e = b.$EvtSrc(c),
               g = b.gb(e, "1", ic);
            if ((!g || g === u) && !W && (!d || b.u(c.touches) == 1)) {
               nb = b.gb(e, f, o.Rd) || !mb || !Zc();
               a.a(h, d ? "touchmove" : "mousemove", ac);
               Fb = !nb && b.gb(e, f, o.qd);
               !Fb && !nb && Ac(c, d)
            }
         }

         function ac(a) {
            var e, f;
            a = b.kh(a);
            if (a.type != "mousemove")
               if (b.u(a.touches) == 1) {
                  f = a.touches[0];
                  e = {
                     x: f.clientX,
                     y: f.clientY
                  }
               } else gb();
            else e = b.bd(a);
            if (e) {
               var i = e.x - Eb.x,
                  j = e.y - Eb.y,
                  g = c.P(i),
                  h = c.P(j);
               if (z || g > 1.5 || h > 1.5)
                  if (Fb) Ac(a, f);
                  else {
                     if (c.G(hb) != hb) z = z || S & W;
                     if ((i || j) && !z) {
                        if (W == 3)
                           if (h > g) z = 2;
                           else z = 1;
                        else z = W;
                        if (Vb && z == 1 && h > g * 2.4) nb = d
                     }
                     var l = i,
                        k = ob;
                     if (z == 2) {
                        l = j;
                        k = pb
                     }(L - Ab) * qb < -1.5 && (Db = 0);
                     (L - Ab) * qb > 1.5 && (Db = -1);
                     Ab = L;
                     L = l;
                     mc = hb - L * qb / k / kc * m.$DragRatio;
                     if (L && z && !nb) {
                        b.$CancelEvent(a);
                        A.nf(d);
                        A.vf(mc)
                     }
                  }
            }
         }

         function gb() {
            Uc();
            a.W(h, "mousemove", ac);
            a.W(h, "touchmove", ac);
            db = L;
            if (y) {
               db && t & 8 && (t = 0);
               A.S();
               y = k;
               var b = B.A();
               a.k(j.$EVT_DRAG_END, v(b), b, v(bb), bb);
               Y & 12 && rc();
               Jc(d)
            }
         }

         function Oc(c) {
            var e = b.$EvtSrc(c),
               a = b.gb(e, "1", Ob);
            if (u === a)
               if (db) {
                  b.$StopEvent(c);
                  a = b.gb(e, f, "data-jssor-button", "A");
                  a && b.$CancelEvent(c)
               } else {
                  t & 4 && (t = 0);
                  a = b.gb(e, f, "data-jssor-click");
                  if (a) {
                     b.$CancelEvent(c);
                     hitValues = (b.g(a, "data-jssor-click") || "").split(":");
                     var g = b.Rh(hitValues[1]);
                     hitValues[0] == "to" && tb(g - 1);
                     hitValues[0] == "next" && tb(g, f, d)
                  }
               }
         }
         a.$SlidesCount = function () {
            return q
         };
         a.$CurrentIndex = function () {
            return r
         };
         a.$CurrentPosition = function () {
            return B.A()
         };
         a.$Idle = function (a) {
            if (a == f) return Kb;
            Kb = a
         };
         a.$AutoPlay = function (a) {
            if (a == f) return t;
            if (a != t) {
               t = a;
               t && x[r] && x[r].kc()
            }
         };
         a.$IsDragging = function () {
            return y
         };
         a.$IsSliding = function () {
            return fb
         };
         a.$IsMouseOver = function () {
            return !U
         };
         a.$LastDragSucceeded = function () {
            return db
         };
         a.$OriginalWidth = function () {
            return O
         };
         a.$OriginalHeight = function () {
            return M
         };
         a.$ScaleHeight = function (b) {
            if (b == f) return Cc || M;
            a.$ScaleSize(b / M * O, b)
         };
         a.$ScaleWidth = function (b) {
            if (b == f) return Zb || O;
            a.$ScaleSize(b, b / O * M)
         };
         a.$ScaleSize = function (c, a, d) {
            b.I(u, c);
            b.J(u, a);
            Hc = c / O;
            Bc = a / M;
            b.f(nc, function (a) {
               a.$ScaleSize(Hc, Bc, d)
            });
            if (!Zb) {
               b.ub(T, w);
               b.T(T, 0);
               b.U(T, 0)
            }
            Zb = c;
            Cc = a
         };
         a.hh = yc;
         a.ih = wc;
         a.$PlayTo = tb;
         a.$GoTo = ub;
         a.$Next = function () {
            Wb(1)
         };
         a.$Prev = function () {
            Wb(-1)
         };
         a.$Pause = function () {
            t = 0
         };
         a.$Play = function () {
            a.$AutoPlay(t || 1)
         };
         a.$SetSlideshowTransitions = function (a) {
            m.$SlideshowOptions.$Transitions = a
         };
         a.Kd = function (a) {
            a = v(a);
            if (C & 1) {
               var d = F / E,
                  b = v(B.A()),
                  e = v(a - b + d),
                  f = v(c.P(a - b));
               if (e >= N) {
                  if (f > q / 2)
                     if (a > b) a -= q;
                     else a += q
               } else if (a > b && e < d) a -= q;
               else if (a < b && e > d) a += q
            }
            return a
         };

         function Xc() {
            cc.Pe && b.Q(w, cc.Pe, ([e, "pan-y", "pan-x", "auto"])[mb] || "");
            a.a(u, "click", Oc, d);
            a.a(u, "mouseleave", Mc);
            a.a(u, "mouseenter", Lc);
            a.a(u, "mousedown", Ec);
            a.a(u, "touchstart", Yc);
            a.a(u, "dragstart", gc);
            a.a(u, "selectstart", gc);
            a.a(i, "mouseup", gb);
            a.a(h, "mouseup", gb);
            a.a(h, "touchend", gb);
            a.a(h, "touchcancel", gb);
            a.a(i, "blur", gb);
            m.$ArrowKeyNavigation && a.a(h, "keydown", function (c) {
               if (!b.Ge(b.$EvtSrc(c))) {
                  var a = b.Be(c);
                  if (a == 37 || a == 39) {
                     t & 8 && (t = 0);
                     fc(m.$ArrowKeyNavigation * (a - 38) * qb, d)
                  }
               }
            })
         }

         function uc(d) {
            Gc.se();
            H = [];
            x = [];
            var e = b.fb(w),
               g = b.Od(["DIV", "A", "LI"]);
            b.f(e, function (a) {
               var c = a;
               if (g[a.tagName.toUpperCase()] && !b.cb(a, "u") && b.vb(a) != "none") {
                  b.jc(a, "flat");
                  b.rb(a, ab);
                  H.push(a)
               }
               b.N(c, (b.N(c) || 0) + 1)
            });
            q = b.u(H);
            if (q) {
               var a = S & 1 ? zb : yb;
               b.rb(R, ab);
               F = m.$Align;
               if (F == f) F = (a - E + P) / 2;
               lb = a / E;
               N = c.j(q, m.$Cols || q, c.H(lb));
               C = N < q ? m.$Loop : 0;
               if (q * E - P <= a) {
                  lb = q - P / E;
                  F = (a - E + P) / 2;
                  Lb = (a - E * q + P) / 2
               }
               if (Cb) {
                  Qb = Cb.$Class;
                  Sb = !F && N == 1 && q > 1 && Qb && (!b.Ue() || b.Zc() >= 9)
               }
               if (!(C & 1)) {
                  cb = F / E;
                  if (cb > q - 1) {
                     cb = q - 1;
                     F = cb * E
                  }
                  K = cb;
                  Q = K + q - lb - P / E
               }
               mb = (N > 1 || F ? S : -1) & m.$DragOrientation;
               if (Sb) D = new Qb(Bb, I, G, Cb, Vb, lc);
               b.f(H, function (a, b) {
                  x.push(new bd(a, b))
               });
               rb = new cd;
               B = new dd;
               A = new Tc(B, rb);
               Xc()
            }
            b.f(Z, function (a) {
               a.jd(q, x);
               d && a.$On(s.Fc, fc)
            })
         }

         function Pb(a, d, g) {
            b.Ye(a) && (a = b.Xd("", a));
            var c, e;
            if (q) {
               if (d == f) d = q;
               e = "beforebegin";
               c = H[d];
               if (!c) {
                  e = "afterend";
                  c = H[q - 1]
               }
            }
            b.$Destroy(x);
            a && b.Mg(c || w, e || "afterbegin", a);
            b.f(g, function (a) {
               b.ib(a)
            });
            uc()
         }
         a.$AppendSlides = function (e, a) {
            if (a == f) a = r + 1;
            var d = H[r];
            Pb(e, a);
            var c = 0;
            b.f(H, function (a, b) {
               a == d && (c = b)
            });
            ub(c)
         };
         a.$ReloadSlides = function (a) {
            Pb(a, e, H);
            ub(0)
         };
         a.$RemoveSlides = function (f) {
            var a = r,
               d = [];
            b.f(f, function (b) {
               if (b < q && b >= 0) {
                  d.push(H[b]);
                  b < r && a--
               }
            });
            Pb(e, e, d);
            a = c.j(a, q - 1);
            ub(a)
         };
         a.F = function (i, e) {
            a.$Elmt = u = b.$GetElement(i);
            O = b.I(u);
            M = b.J(u);
            m = b.B({
               $FillMode: 0,
               $LazyLoading: 1,
               $ArrowKeyNavigation: 1,
               $StartIndex: 0,
               $AutoPlay: 0,
               $Loop: 1,
               $HWA: d,
               $NaviQuitDrag: d,
               $AutoPlaySteps: 1,
               $Idle: 3e3,
               $PauseOnHover: 1,
               $SlideDuration: 500,
               $SlideEasing: g.$OutQuad,
               $MinDragOffsetToSlide: 20,
               $DragRatio: 1,
               $SlideSpacing: 0,
               $UISearchMode: 1,
               $PlayOrientation: 1,
               $DragOrientation: 1
            }, e);
            m.$HWA = m.$HWA && b.th();
            if (m.$DisplayPieces != f) m.$Cols = m.$DisplayPieces;
            if (m.$ParkingPosition != f) m.$Align = m.$ParkingPosition;
            t = m.$AutoPlay & 63;
            !m.$UISearchMode;
            eb = m.$AutoPlaySteps;
            Y = m.$PauseOnHover;
            Y &= Vb ? 10 : 5;
            Kb = m.$Idle;
            Gb = m.$SlideDuration;
            S = m.$PlayOrientation & 3;
            vb = b.Wg(b.g(u, "dir")) == "rtl";
            Hb = vb && (S == 1 || m.$DragOrientation & 1);
            qb = Hb ? -1 : 1;
            Cb = m.$SlideshowOptions;
            kb = b.B({
               $Class: n
            }, m.$CaptionSliderOptions);
            jb = m.$BulletNavigatorOptions;
            X = m.$ArrowNavigatorOptions;
            J = m.$ThumbnailNavigatorOptions;
            var c = b.fb(u);
            b.f(c, function (a, d) {
               var c = b.cb(a, "u");
               if (c == "loading") R = a;
               else {
                  if (c == "slides") {
                     w = a;
                     b.Q(w, "margin", 0);
                     b.Q(w, "padding", 0);
                     b.jc(w, "flat")
                  }
                  if (c == "navigator") Mb = a;
                  if (c == "arrowleft") bc = a;
                  if (c == "arrowright") Yb = a;
                  if (c == "thumbnavigator") wb = a;
                  if (a.tagName != "STYLE" && a.tagName != "SCRIPT") nc[c || d] = new Rc(a, c == "slides", b.Od(["slides", "thumbnavigator"])[c])
               }
            });
            R && b.ib(R);
            R = R || b.Lb(h);
            zb = b.I(w);
            yb = b.J(w);
            I = m.$SlideWidth || zb;
            G = m.$SlideHeight || yb;
            ab = {
               Cb: I,
               yb: G,
               $Top: 0,
               $Left: 0,
               ye: "block",
               Rb: "absolute"
            };
            P = m.$SlideSpacing;
            ob = I + P;
            pb = G + P;
            E = S & 1 ? ob : pb;
            Bb = new Qc;
            b.g(u, Ob, "1");
            b.N(w, b.N(w) || 0);
            b.db(w, "absolute");
            T = b.bb(w, d);
            b.Q(T, "pointerEvents", "none");
            b.ub(T, w);
            b.O(T, Bb.$Elmt);
            b.Bb(w, "hidden");
            if (Mb && jb) {
               jb.Jb = vb;
               vc = new jb.$Class(Mb, jb, O, M);
               Z.push(vc)
            }
            if (X && bc && Yb) {
               X.Jb = vb;
               X.$Loop = m.$Loop;
               xc = new X.$Class(bc, Yb, X, a);
               Z.push(xc)
            }
            if (wb && J) {
               J.$StartIndex = m.$StartIndex;
               J.$ArrowKeyNavigation = J.$ArrowKeyNavigation || 0;
               J.Jb = vb;
               oc = new J.$Class(wb, J, R);
               !J.$NoDrag && b.g(wb, ic, "1");
               Z.push(oc)
            }
            uc(d);
            a.$ScaleSize(O, M);
            Ub();
            ub(m.$StartIndex);
            b.Q(u, "visibility", "visible")
         };
         a.$Destroy = function () {
            t = 0;
            b.$Destroy(x, Z, Gc);
            b.Ob(u)
         };
         b.F(a)
      };
   j.$EVT_CLICK = 21;
   j.$EVT_DRAG_START = 22;
   j.$EVT_DRAG_END = 23;
   j.$EVT_SWIPE_START = 24;
   j.$EVT_SWIPE_END = 25;
   j.$EVT_LOAD_START = 26;
   j.$EVT_LOAD_END = 27;
   j.Yf = 28;
   j.$EVT_MOUSE_ENTER = 31;
   j.$EVT_MOUSE_LEAVE = 32;
   j.$EVT_POSITION_CHANGE = 202;
   j.$EVT_PARK = 203;
   j.$EVT_SLIDESHOW_START = 206;
   j.$EVT_SLIDESHOW_END = 207;
   j.$EVT_PROGRESS_CHANGE = 208;
   j.$EVT_STATE_CHANGE = 209
}(window, document, Math, null, true, false);
window.MagicZoom = function () {
   var e, c;
   (function (o) {
      if (!o) throw "MagicJS not found";
      var n = o.$,
         s = window.URL || window.webkitURL || null;
      e.ImageLoader = new o.Class({
         img: null,
         ready: !1,
         options: {
            onprogress: o.$F,
            onload: o.$F,
            onabort: o.$F,
            onerror: o.$F,
            oncomplete: o.$F,
            onxhrerror: o.$F,
            xhr: !1,
            progressiveLoad: !0
         },
         size: null,
         _timer: null,
         loadedBytes: 0,
         _handlers: {
            onprogress: function (t) {
               t.target && (200 === t.target.status || 304 === t.target.status) && t.lengthComputable && (this.options.onprogress.jBind(null, (t.loaded - (this.options.progressiveLoad ? this.loadedBytes : 0)) / t.total).jDelay(1), this.loadedBytes = t.loaded)
            },
            onload: function (t) {
               t && n(t).stop(), this._unbind(), this.ready || (this.ready = !0, this._cleanup(), this.options.xhr || this.options.onprogress.jBind(null, 1).jDelay(1), this.options.onload.jBind(null, this).jDelay(1), this.options.oncomplete.jBind(null, this).jDelay(1))
            },
            onabort: function (t) {
               t && n(t).stop(), this._unbind(), this.ready = !1, this._cleanup(), this.options.onabort.jBind(null, this).jDelay(1), this.options.oncomplete.jBind(null, this).jDelay(1)
            },
            onerror: function (t) {
               t && n(t).stop(), this._unbind(), this.ready = !1, this._cleanup(), this.options.onerror.jBind(null, this).jDelay(1), this.options.oncomplete.jBind(null, this).jDelay(1)
            }
         },
         _bind: function () {
            n(["load", "abort", "error"]).jEach(function (t) {
               this.img.jAddEvent(t, this._handlers["on" + t].jBindAsEvent(this).jDefer(1))
            }, this)
         },
         _unbind: function () {
            if (this._timer) {
               try {
                  clearTimeout(this._timer)
               } catch (t) {}
               this._timer = null
            }
            n(["load", "abort", "error"]).jEach(function (t) {
               this.img.jRemoveEvent(t)
            }, this)
         },
         _cleanup: function () {
            if (this.jGetSize(), this.img.jFetch("new")) {
               var t = this.img.parentNode;
               this.img.jRemove().jDel("new").jSetCss({
                  position: "static",
                  top: "auto"
               }), t.kill()
            }
         },
         loadBlob: function (t) {
            var e, i = new XMLHttpRequest;
            n(["abort", "progress"]).jEach(function (e) {
               i["on" + e] = n(function (t) {
                  this._handlers["on" + e].call(this, t)
               }).jBind(this)
            }, this), i.onerror = n(function () {
               this.options.onxhrerror.jBind(null, this).jDelay(1), this.options.xhr = !1, this._bind(), this.img.src = t
            }).jBind(this), i.onload = n(function () {
               200 === i.status || 304 === i.status ? (e = i.response, this._bind(), !s || o.browser.trident || "ios" === o.browser.platform && o.browser.version < 537 ? this.img.src = t : this.img.setAttribute("src", s.createObjectURL(e))) : this._handlers.onerror.call(this)
            }).jBind(this), i.open("GET", t), i.responseType = "blob", i.send()
         },
         init: function (t, e) {
            if (this.options = o.extend(this.options, e), this.img = n(t) || o.$new("img", {}, {
                  "max-width": "none",
                  "max-height": "none"
               }).jAppendTo(o.$new("div").jAddClass("magic-temporary-img").jSetCss({
                  position: "absolute",
                  top: -1e4,
                  width: 10,
                  height: 10,
                  overflow: "hidden"
               }).jAppendTo(document.body)).jStore("new", !0), o.browser.features.xhr2 && this.options.xhr && "string" == o.jTypeOf(t)) this.loadBlob(t);
            else {
               var i = function () {
                  this.isReady() ? this._handlers.onload.call(this) : this._handlers.onerror.call(this), i = null
               }.jBind(this);
               this._bind(), "string" == o.jTypeOf(t) ? this.img.src = t : (o.browser.trident && 5 == o.browser.version && o.browser.ieMode < 9 && (this.img.onreadystatechange = function () {
                  /loaded|complete/.test(this.img.readyState) && (this.img.onreadystatechange = null, i && i())
               }.jBind(this)), this.img.src = t.getAttribute("src")), this.img && this.img.complete && i && (this._timer = i.jDelay(100))
            }
         },
         destroy: function () {
            return this._unbind(), this._cleanup(), this.ready = !1, this
         },
         isReady: function () {
            var t = this.img;
            return t.naturalWidth ? 0 < t.naturalWidth : t.readyState ? "complete" == t.readyState : 0 < t.width
         },
         jGetSize: function () {
            return this.size || (this.size = {
               width: this.img.naturalWidth || this.img.width,
               height: this.img.naturalHeight || this.img.height
            })
         }
      })
   })(e = c = function () {
      var e, t = {
            version: "v3.3.4",
            UUID: 0,
            storage: {},
            $uuid: function (t) {
               return t.$J_UUID || (t.$J_UUID = ++d.UUID)
            },
            getStorage: function (t) {
               return d.storage[t] || (d.storage[t] = {})
            },
            $F: function () {},
            $false: function () {
               return !1
            },
            $true: function () {
               return !0
            },
            stylesId: "mjs-" + Math.floor(Math.random() * (new Date).getTime()),
            defined: function (t) {
               return null != t
            },
            ifndef: function (t, e) {
               return null != t ? t : e
            },
            exists: function (t) {
               return !!t
            },
            jTypeOf: function (t) {
               if (!d.defined(t)) return !1;
               if (t.$J_TYPE) return t.$J_TYPE;
               if (t.nodeType) {
                  if (1 == t.nodeType) return "element";
                  if (3 == t.nodeType) return "textnode"
               }
               if (t.length && t.item) return "collection";
               if (t.length && t.callee) return "arguments";
               if ((t instanceof window.Object || t instanceof window.Function) && t.constructor === d.Class) return "class";
               if (t instanceof window.Array) return "array";
               if (t instanceof window.Function) return "function";
               if (t instanceof window.String) return "string";
               if (d.browser.trident) {
                  if (d.defined(t.cancelBubble)) return "event"
               } else if (t === window.event || t.constructor == window.Event || t.constructor == window.MouseEvent || t.constructor == window.UIEvent || t.constructor == window.KeyboardEvent || t.constructor == window.KeyEvent) return "event";
               return t instanceof window.Date ? "date" : t instanceof window.RegExp ? "regexp" : t === window ? "window" : t === document ? "document" : typeof t
            },
            extend: function (t, e) {
               if (t instanceof window.Array || (t = [t]), !e) return t[0];
               for (var i = 0, o = t.length; i < o; i++)
                  if (d.defined(t))
                     for (var n in e)
                        if (Object.prototype.hasOwnProperty.call(e, n)) try {
                           t[i][n] = e[n]
                        } catch (t) {}
               return t[0]
            },
            implement: function (t, e) {
               t instanceof window.Array || (t = [t]);
               for (var i = 0, o = t.length; i < o; i++)
                  if (d.defined(t[i]) && t[i].prototype)
                     for (var n in e || {}) t[i].prototype[n] || (t[i].prototype[n] = e[n]);
               return t[0]
            },
            nativize: function (t, e) {
               if (!d.defined(t)) return t;
               for (var i in e || {}) t[i] || (t[i] = e[i]);
               return t
            },
            $try: function () {
               for (var t = 0, e = arguments.length; t < e; t++) try {
                  return arguments[t]()
               } catch (t) {}
               return null
            },
            $A: function (t) {
               if (!d.defined(t)) return d.$([]);
               if (t.toArray) return d.$(t.toArray());
               if (t.item) {
                  for (var e = t.length || 0, i = new Array(e); e--;) i[e] = t[e];
                  return d.$(i)
               }
               return d.$(Array.prototype.slice.call(t))
            },
            now: function () {
               return (new Date).getTime()
            },
            detach: function (t) {
               var e;
               switch (d.jTypeOf(t)) {
                  case "object":
                     for (var i in e = {}, t) e[i] = d.detach(t[i]);
                     break;
                  case "array":
                     e = [];
                     for (var o = 0, n = t.length; o < n; o++) e[o] = d.detach(t[o]);
                     break;
                  default:
                     return t
               }
               return d.$(e)
            },
            $: function (t) {
               var e = !0;
               if (!d.defined(t)) return null;
               if (t.$J_EXT) return t;
               switch (d.jTypeOf(t)) {
                  case "array":
                     return (t = d.nativize(t, d.extend(d.Array, {
                        $J_EXT: d.$F
                     }))).jEach = t.forEach, t.contains = d.Array.contains, t;
                  case "string":
                     var i = document.getElementById(t);
                     return d.defined(i) ? d.$(i) : null;
                  case "window":
                  case "document":
                     d.$uuid(t), t = d.extend(t, d.Doc);
                     break;
                  case "element":
                     d.$uuid(t), t = d.extend(t, d.Element);
                     break;
                  case "event":
                     t = d.extend(t, d.Event);
                     break;
                  case "textnode":
                  case "function":
                  case "array":
                  case "date":
                  default:
                     e = !1
               }
               return e ? d.extend(t, {
                  $J_EXT: d.$F
               }) : t
            },
            $new: function (t, e, i) {
               return d.$(d.doc.createElement(t)).setProps(e || {}).jSetCss(i || {})
            },
            addCSS: function (t, e, i) {
               var o, n, s = [],
                  a = -1;
               if (i = i || d.stylesId, n = (o = d.$(i) || d.$new("style", {
                     id: i,
                     type: "text/css"
                  }).jAppendTo(document.head || document.body, "top")).sheet || o.styleSheet, "string" != d.jTypeOf(e)) {
                  for (var h in e) s.push(h + ":" + e[h]);
                  e = s.join(";")
               }
               if (n.insertRule) a = n.insertRule(t + " {" + e + "}", n.cssRules.length);
               else try {
                  a = n.addRule(t, e, n.rules.length)
               } catch (t) {}
               return a
            },
            removeCSS: function (t, e) {
               var i, o;
               i = d.$(t), "element" === d.jTypeOf(i) && ((o = i.sheet || i.styleSheet).deleteRule ? o.deleteRule(e) : o.removeRule && o.removeRule(e))
            },
            generateUUID: function () {
               return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (t) {
                  var e = 16 * Math.random() | 0;
                  return ("x" == t ? e : 3 & e | 8).toString(16)
               }).toUpperCase()
            },
            getAbsoluteURL: function (t) {
               return (e = e || document.createElement("a")).setAttribute("href", t), ("!!" + e.href).replace("!!", "")
            },
            getHashCode: function (t) {
               for (var e = 0, i = t.length, o = 0; o < i; ++o) e = 31 * e + t.charCodeAt(o), e %= 4294967296;
               return e
            }
         },
         d = t;
      t.$;
      window.magicJS || (window.magicJS = t, window.$mjs = t.$), d.Array = {
         $J_TYPE: "array",
         indexOf: function (t, e) {
            this.length;
            for (var i = this.length, o = e < 0 ? Math.max(0, i + e) : e || 0; o < i; o++)
               if (this[o] === t) return o;
            return -1
         },
         contains: function (t, e) {
            return -1 != this.indexOf(t, e)
         },
         forEach: function (t, e) {
            for (var i = 0, o = this.length; i < o; i++) i in this && t.call(e, this[i], i, this)
         },
         filter: function (t, e) {
            for (var i = [], o = 0, n = this.length; o < n; o++)
               if (o in this) {
                  var s = this[o];
                  t.call(e, this[o], o, this) && i.push(s)
               } return i
         },
         map: function (t, e) {
            for (var i = [], o = 0, n = this.length; o < n; o++) o in this && (i[o] = t.call(e, this[o], o, this));
            return i
         }
      }, d.implement(String, {
         $J_TYPE: "string",
         jTrim: function () {
            return this.replace(/^\s+|\s+$/g, "")
         },
         eq: function (t, e) {
            return e ? this.toString() === t.toString() : this.toLowerCase().toString() === t.toLowerCase().toString()
         },
         jCamelize: function () {
            return this.replace(/-\D/g, function (t) {
               return t.charAt(1).toUpperCase()
            })
         },
         dashize: function () {
            return this.replace(/[A-Z]/g, function (t) {
               return "-" + t.charAt(0).toLowerCase()
            })
         },
         jToInt: function (t) {
            return parseInt(this, t || 10)
         },
         toFloat: function () {
            return parseFloat(this)
         },
         jToBool: function () {
            return !this.replace(/true/i, "").jTrim()
         },
         has: function (t, e) {
            return -1 < ((e = e || "") + this + e).indexOf(e + t + e)
         }
      }), t.implement(Function, {
         $J_TYPE: "function",
         jBind: function () {
            var t = d.$A(arguments),
               e = this,
               i = t.shift();
            return function () {
               return e.apply(i || null, t.concat(d.$A(arguments)))
            }
         },
         jBindAsEvent: function () {
            var e = d.$A(arguments),
               i = this,
               o = e.shift();
            return function (t) {
               return i.apply(o || null, d.$([t || (d.browser.ieMode ? window.event : null)]).concat(e))
            }
         },
         jDelay: function () {
            var t = d.$A(arguments),
               e = this,
               i = t.shift();
            return window.setTimeout(function () {
               return e.apply(e, t)
            }, i || 0)
         },
         jDefer: function () {
            var t = d.$A(arguments),
               e = this;
            return function () {
               return e.jDelay.apply(e, t)
            }
         },
         interval: function () {
            var t = d.$A(arguments),
               e = this,
               i = t.shift();
            return window.setInterval(function () {
               return e.apply(e, t)
            }, i || 0)
         }
      });
      var l = {},
         i = navigator.userAgent.toLowerCase(),
         o = i.match(/(webkit|gecko|trident|presto)\/(\d+\.?\d*)/i),
         n = i.match(/(edge|opr)\/(\d+\.?\d*)/i) || i.match(/(crios|chrome|safari|firefox|opera|opr)\/(\d+\.?\d*)/i),
         s = i.match(/version\/(\d+\.?\d*)/i),
         a = document.documentElement.style;

      function h(t) {
         var e = t.charAt(0).toUpperCase() + t.slice(1);
         return t in a || "Webkit" + e in a || "Moz" + e in a || "ms" + e in a || "O" + e in a
      }
      d.browser = {
            features: {
               xpath: !!document.evaluate,
               air: !!window.runtime,
               query: !!document.querySelector,
               fullScreen: !!(document.fullscreenEnabled || document.msFullscreenEnabled || document.exitFullscreen || document.cancelFullScreen || document.webkitexitFullscreen || document.webkitCancelFullScreen || document.mozCancelFullScreen || document.oCancelFullScreen || document.msCancelFullScreen),
               xhr2: !!window.ProgressEvent && !!window.FormData && window.XMLHttpRequest && "withCredentials" in new XMLHttpRequest,
               transition: h("transition"),
               transform: h("transform"),
               perspective: h("perspective"),
               animation: h("animation"),
               requestAnimationFrame: !1,
               multibackground: !1,
               cssFilters: !1,
               canvas: !1,
               svg: document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")
            },
            touchScreen: "ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch || 0 < navigator.maxTouchPoints || 0 < navigator.msMaxTouchPoints,
            mobile: !!i.match(/(android|bb\d+|meego).+|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/),
            engine: o && o[1] ? o[1].toLowerCase() : window.opera ? "presto" : window.ActiveXObject ? "trident" : void 0 !== document.getBoxObjectFor || null !== window.mozInnerScreenY ? "gecko" : null === window.WebKitPoint && navigator.taintEnabled ? "unknown" : "webkit",
            version: o && o[2] ? parseFloat(o[2]) : 0,
            uaName: n && n[1] ? n[1].toLowerCase() : "",
            uaVersion: n && n[2] ? parseFloat(n[2]) : 0,
            cssPrefix: "",
            cssDomPrefix: "",
            domPrefix: "",
            ieMode: 0,
            platform: i.match(/ip(?:ad|od|hone)/) ? "ios" : (i.match(/(?:webos|android)/) || navigator.platform.match(/mac|win|linux/i) || ["other"])[0].toLowerCase(),
            backCompat: document.compatMode && "backcompat" === document.compatMode.toLowerCase(),
            scrollbarsWidth: 0,
            getDoc: function () {
               return document.compatMode && "backcompat" === document.compatMode.toLowerCase() ? document.body : document.documentElement
            },
            requestAnimationFrame: window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || void 0,
            cancelAnimationFrame: window.cancelAnimationFrame || window.mozCancelAnimationFrame || window.mozCancelAnimationFrame || window.oCancelAnimationFrame || window.msCancelAnimationFrame || window.webkitCancelRequestAnimationFrame || void 0,
            ready: !1,
            onready: function () {
               if (!d.browser.ready) {
                  var t, e, i;
                  d.browser.ready = !0, d.body = d.$(document.body), d.win = d.$(window);
                  try {
                     var o = d.$new("div").jSetCss({
                        width: 100,
                        height: 100,
                        overflow: "scroll",
                        position: "absolute",
                        top: -9999
                     }).jAppendTo(document.body);
                     d.browser.scrollbarsWidth = o.offsetWidth - o.clientWidth, o.jRemove()
                  } catch (t) {}
                  try {
                     (e = (t = d.$new("div")).style).cssText = "background:url(https://),url(https://),red url(https://)", d.browser.features.multibackground = /(url\s*\(.*?){3}/.test(e.background), t = e = null
                  } catch (t) {}
                  d.browser.cssTransformProp || (d.browser.cssTransformProp = d.normalizeCSS("transform").dashize());
                  try {
                     (t = d.$new("div")).style.cssText = d.normalizeCSS("filter").dashize() + ":blur(2px);", d.browser.features.cssFilters = !!t.style.length && (!d.browser.ieMode || 9 < d.browser.ieMode), t = null
                  } catch (t) {}
                  d.browser.features.cssFilters || d.$(document.documentElement).jAddClass("no-cssfilters-magic");
                  try {
                     d.browser.features.canvas = !(!(i = d.$new("canvas")).getContext || !i.getContext("2d"))
                  } catch (t) {}
                  void 0 === window.TransitionEvent && void 0 !== window.WebKitTransitionEvent && (l.transitionend = "webkitTransitionEnd"), d.Doc.jCallEvent.call(d.$(document), "domready")
               }
            }
         },
         function () {
            var t, e, i, o = [];
            switch (d.browser.engine) {
               case "trident":
                  d.browser.version || (d.browser.version = window.XMLHttpRequest ? 3 : 2);
                  break;
               case "gecko":
                  d.browser.version = n && n[2] ? parseFloat(n[2]) : 0
            }
            if (d.browser[d.browser.engine] = !0, n && "crios" === n[1] && (d.browser.uaName = "chrome"), window.chrome && (d.browser.chrome = !0), n && "opr" === n[1] && (d.browser.uaName = "opera", d.browser.opera = !0), "safari" === d.browser.uaName && s && s[1] && (d.browser.uaVersion = parseFloat(s[1])), "android" === d.browser.platform && d.browser.webkit && s && s[1] && (d.browser.androidBrowser = !0), t = {
                  gecko: ["-moz-", "Moz", "moz"],
                  webkit: ["-webkit-", "Webkit", "webkit"],
                  trident: ["-ms-", "ms", "ms"],
                  presto: ["-o-", "O", "o"]
               } [d.browser.engine] || ["", "", ""], d.browser.cssPrefix = t[0], d.browser.cssDomPrefix = t[1], d.browser.domPrefix = t[2], d.browser.ieMode = d.browser.trident ? document.documentMode ? document.documentMode : function () {
                  var t = 0;
                  if (d.browser.backCompat) return 5;
                  switch (d.browser.version) {
                     case 2:
                        t = 6;
                        break;
                     case 3:
                        t = 7
                  }
                  return t
               }() : void 0, !d.browser.mobile && "mac" === d.browser.platform && d.browser.touchScreen && (d.browser.mobile = !0, d.browser.platform = "ios"), o.push(d.browser.platform + "-magic"), d.browser.mobile && o.push("mobile-magic"), d.browser.androidBrowser && o.push("android-browser-magic"), d.browser.ieMode)
               for (d.browser.uaName = "ie", d.browser.uaVersion = d.browser.ieMode, o.push("ie" + d.browser.ieMode + "-magic"), e = 11; e > d.browser.ieMode; e--) o.push("lt-ie" + e + "-magic");
            d.browser.webkit && d.browser.version < 536 && (d.browser.features.fullScreen = !1), d.browser.requestAnimationFrame && d.browser.requestAnimationFrame.call(window, function () {
               d.browser.features.requestAnimationFrame = !0
            }), d.browser.features.svg ? o.push("svg-magic") : o.push("no-svg-magic"), i = (document.documentElement.className || "").match(/\S+/g) || [], document.documentElement.className = d.$(i).concat(o).join(" ");
            try {
               document.documentElement.setAttribute("data-magic-ua", d.browser.uaName), document.documentElement.setAttribute("data-magic-ua-ver", d.browser.uaVersion), document.documentElement.setAttribute("data-magic-engine", d.browser.engine), document.documentElement.setAttribute("data-magic-engine-ver", d.browser.version)
            } catch (t) {}
            d.browser.ieMode && d.browser.ieMode < 9 && (document.createElement("figure"), document.createElement("figcaption")), window.navigator.pointerEnabled || d.$(["Down", "Up", "Move", "Over", "Out"]).jEach(function (t) {
               l["pointer" + t.toLowerCase()] = window.navigator.msPointerEnabled ? "MSPointer" + t : -1
            })
         }(), d.browser.fullScreen = {
            capable: d.browser.features.fullScreen,
            enabled: function () {
               return !!(document.fullscreenElement || document[d.browser.domPrefix + "FullscreenElement"] || document.fullScreen || document.webkitIsFullScreen || document[d.browser.domPrefix + "FullScreen"])
            },
            request: function (t, e) {
               e = e || {}, this.capable ? (d.$(document).jAddEvent(this.changeEventName, this.onchange = function (t) {
                  this.enabled() ? e.onEnter && e.onEnter() : (d.$(document).jRemoveEvent(this.changeEventName, this.onchange), e.onExit && e.onExit())
               }.jBindAsEvent(this)), d.$(document).jAddEvent(this.errorEventName, this.onerror = function (t) {
                  e.fallback && e.fallback(), d.$(document).jRemoveEvent(this.errorEventName, this.onerror)
               }.jBindAsEvent(this)), (t.requestFullscreen || t[d.browser.domPrefix + "RequestFullscreen"] || t[d.browser.domPrefix + "RequestFullScreen"] || function () {}).call(t)) : e.fallback && e.fallback()
            },
            cancel: (document.exitFullscreen || document.cancelFullScreen || document[d.browser.domPrefix + "ExitFullscreen"] || document[d.browser.domPrefix + "CancelFullScreen"] || function () {}).jBind(document),
            changeEventName: document.msExitFullscreen ? "MSFullscreenChange" : (document.exitFullscreen ? "" : d.browser.domPrefix) + "fullscreenchange",
            errorEventName: document.msExitFullscreen ? "MSFullscreenError" : (document.exitFullscreen ? "" : d.browser.domPrefix) + "fullscreenerror",
            prefix: d.browser.domPrefix,
            activeElement: null
         };
      var r, m, c, u, p, g, v, f = /\S+/g,
         x = /^(border(Top|Bottom|Left|Right)Width)|((padding|margin)(Top|Bottom|Left|Right))$/,
         w = {
            float: void 0 === a.styleFloat ? "cssFloat" : "styleFloat"
         },
         z = {
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            zIndex: !0,
            zoom: !0
         },
         b = window.getComputedStyle ? function (t, e) {
            var i = window.getComputedStyle(t, null);
            return i ? i.getPropertyValue(e) || i[e] : null
         } : function (t, e) {
            var i = t.currentStyle,
               o = null;
            return null == (o = i ? i[e] : null) && t.style && t.style[e] && (o = t.style[e]), o
         };

      function j(t) {
         var e;
         return !((!d.browser.webkit || "filter" != t) && t in a) && (e = d.browser.cssDomPrefix + t.charAt(0).toUpperCase() + t.slice(1)) in a ? e : t
      }

      function y(t, e) {
         var i = e.x - t.x,
            o = e.y - t.y;
         return Math.sqrt(i * i + o * o)
      }

      function C(t, e) {
         var i;
         return t.targetTouches && t.changedTouches ? (i = t.targetTouches ? t.targetTouches : t.changedTouches, i = Array.prototype.slice.call(i)) : (i = [], e && e.forEach(function (t) {
            i.push(t)
         })), i
      }

      function S(t, e, i) {
         var o = !1;
         return !t.pointerId || "touch" !== t.pointerType || i && !e.has(t.pointerId) || (e.set(t.pointerId, t), o = !0), o
      }

      function E(t) {
         return t.pointerId && "touch" === t.pointerType ? t.pointerId : t.identifier
      }

      function B(t, e) {
         var i, o, n = !1;
         for (i = 0; i < t.length && 2 !== e.length; i++) o = E(t[i]), e.contains(o) || (e.push(o), n = !0);
         return n
      }

      function T(t, e) {
         var i, o, n, s, a = !1;
         if (e)
            for (n = t, s = g([]), n.forEach(function (t) {
                  s.push(E(t))
               }), o = s, i = 0; i < e.length; i++)
               if (!o.contains(e[i])) {
                  e.splice(i, 1), a = !0;
                  break
               } return a
      }

      function A(t, e) {
         var i, o = g([]);
         for (i = 0; i < t.length && (!e.contains(E(t[i])) || (o.push(t[i]), 2 !== o.length)); i++);
         return o
      }
      return d.normalizeCSS = j, d.Element = {
            jHasClass: function (t) {
               return !(t || "").has(" ") && (this.className || "").has(t, " ")
            },
            jAddClass: function (t) {
               for (var e = (this.className || "").match(f) || [], i = (t || "").match(f) || [], o = i.length, n = 0; n < o; n++) d.$(e).contains(i[n]) || e.push(i[n]);
               return this.className = e.join(" "), this
            },
            jRemoveClass: function (t) {
               for (var e, i = (this.className || "").match(f) || [], o = (t || "").match(f) || [], n = o.length, s = 0; s < n; s++) - 1 < (e = d.$(i).indexOf(o[s])) && i.splice(e, 1);
               return this.className = t ? i.join(" ") : "", this
            },
            jToggleClass: function (t) {
               return this.jHasClass(t) ? this.jRemoveClass(t) : this.jAddClass(t)
            },
            jGetCss: function (t) {
               var e = t.jCamelize(),
                  i = null;
               if (t = w[e] || (w[e] = j(e)), "auto" === (i = b(this, t)) && (i = null), null !== i) {
                  if ("opacity" == t) return d.defined(i) ? parseFloat(i) : 1;
                  x.test(t) && (i = parseInt(i, 10) ? i : "0px")
               }
               return i
            },
            jSetCssProp: function (t, e) {
               var i = t.jCamelize();
               try {
                  if ("opacity" == t) return this.jSetOpacity(e), this;
                  t = w[i] || (w[i] = j(i)), this.style[t] = e + ("number" != d.jTypeOf(e) || z[i] ? "" : "px")
               } catch (t) {}
               return this
            },
            jSetCss: function (t) {
               for (var e in t) this.jSetCssProp(e, t[e]);
               return this
            },
            jGetStyles: function () {
               var e = {};
               return d.$A(arguments).jEach(function (t) {
                  e[t] = this.jGetCss(t)
               }, this), e
            },
            jSetOpacity: function (t, e) {
               return e = e || !1, this.style.opacity = t, t = parseInt(100 * parseFloat(t)), e && (0 === t ? "hidden" != this.style.visibility && (this.style.visibility = "hidden") : "visible" != this.style.visibility && (this.style.visibility = "visible")), d.browser.ieMode && d.browser.ieMode < 9 && (isNaN(t) ? (this.style.filter = this.style.filter.replace(/progid:DXImageTransform.Microsoft.Alpha\(Opacity=\d*\)/i, "").jTrim(), "" === this.style.filter && this.style.removeAttribute("filter")) : ~this.style.filter.indexOf("Alpha") ? this.style.filter = this.style.filter.replace(/Opacity=\d*/i, "Opacity=" + t) : this.style.filter += " progid:DXImageTransform.Microsoft.Alpha(Opacity=" + t + ")"), this
            },
            setProps: function (t) {
               for (var e in t) "class" === e ? this.jAddClass("" + t[e]) : this.setAttribute(e, "" + t[e]);
               return this
            },
            jGetTransitionDuration: function () {
               var t = 0,
                  e = 0;
               return t = this.jGetCss("transition-duration"), e = this.jGetCss("transition-delay"), (t = -1 < t.indexOf("ms") ? parseFloat(t) : -1 < t.indexOf("s") ? 1e3 * parseFloat(t) : 0) + (e = -1 < e.indexOf("ms") ? parseFloat(e) : -1 < e.indexOf("s") ? 1e3 * parseFloat(e) : 0)
            },
            hide: function () {
               return this.jSetCss({
                  display: "none",
                  visibility: "hidden"
               })
            },
            show: function () {
               return this.jSetCss({
                  display: "",
                  visibility: "visible"
               })
            },
            jGetSize: function () {
               return {
                  width: this.offsetWidth,
                  height: this.offsetHeight
               }
            },
            getInnerSize: function (t) {
               var e = this.jGetSize();
               return e.width -= parseFloat(this.jGetCss("border-left-width") || 0) + parseFloat(this.jGetCss("border-right-width") || 0), e.height -= parseFloat(this.jGetCss("border-top-width") || 0) + parseFloat(this.jGetCss("border-bottom-width") || 0), t || (e.width -= parseFloat(this.jGetCss("padding-left") || 0) + parseFloat(this.jGetCss("padding-right") || 0), e.height -= parseFloat(this.jGetCss("padding-top") || 0) + parseFloat(this.jGetCss("padding-bottom") || 0)), e
            },
            jGetScroll: function () {
               return {
                  top: this.scrollTop,
                  left: this.scrollLeft
               }
            },
            jGetFullScroll: function () {
               for (var t = this, e = {
                     top: 0,
                     left: 0
                  }; e.left += t.scrollLeft || 0, e.top += t.scrollTop || 0, t = t.parentNode;);
               return e
            },
            jGetPosition: function () {
               var t = this,
                  e = 0,
                  i = 0;
               if (d.defined(document.documentElement.getBoundingClientRect)) {
                  var o = this.getBoundingClientRect(),
                     n = d.$(document).jGetScroll(),
                     s = d.browser.getDoc();
                  return {
                     top: o.top + n.y - s.clientTop,
                     left: o.left + n.x - s.clientLeft
                  }
               }
               for (; e += t.offsetLeft || 0, i += t.offsetTop || 0, (t = t.offsetParent) && !/^(?:body|html)$/i.test(t.tagName););
               return {
                  top: i,
                  left: e
               }
            },
            jGetRect: function () {
               var t = this.jGetPosition(),
                  e = this.jGetSize();
               return {
                  top: t.top,
                  bottom: t.top + e.height,
                  left: t.left,
                  right: t.left + e.width
               }
            },
            changeContent: function (e) {
               try {
                  this.innerHTML = e
               } catch (t) {
                  this.innerText = e
               }
               return this
            },
            jRemove: function () {
               return this.parentNode ? this.parentNode.removeChild(this) : this
            },
            kill: function () {
               return d.$A(this.childNodes).jEach(function (t) {
                  3 != t.nodeType && 8 != t.nodeType && d.$(t).kill()
               }), this.jRemove(), this.jClearEvents(), this.$J_UUID && (d.storage[this.$J_UUID] = null, delete d.storage[this.$J_UUID]), null
            },
            append: function (t, e) {
               e = e || "bottom";
               var i = this.firstChild;
               return "top" == e && i ? this.insertBefore(t, i) : this.appendChild(t), this
            },
            jAppendTo: function (t, e) {
               d.$(t).append(this, e);
               return this
            },
            enclose: function (t) {
               return this.append(t.parentNode.replaceChild(this, t)), this
            },
            hasChild: function (t) {
               return "element" === d.jTypeOf("string" == d.jTypeOf(t) ? t = document.getElementById(t) : t) && (this != t && (this.contains && !d.browser.webkit419 ? this.contains(t) : this.compareDocumentPosition ? !!(16 & this.compareDocumentPosition(t)) : d.$A(this.byTag(t.tagName)).contains(t)))
            }
         }, d.Element.jGetStyle = d.Element.jGetCss, d.Element.jSetStyle = d.Element.jSetCss, window.Element || (window.Element = d.$F, d.browser.engine.webkit && window.document.createElement("iframe"), window.Element.prototype = d.browser.engine.webkit ? window["[[DOMElement.prototype]]"] : {}), d.implement(window.Element, {
            $J_TYPE: "element"
         }), d.Doc = {
            jGetSize: function () {
               return d.browser.touchScreen || d.browser.presto925 || d.browser.webkit419 ? {
                  width: window.innerWidth,
                  height: window.innerHeight
               } : {
                  width: d.browser.getDoc().clientWidth,
                  height: d.browser.getDoc().clientHeight
               }
            },
            jGetScroll: function () {
               return {
                  x: window.pageXOffset || d.browser.getDoc().scrollLeft,
                  y: window.pageYOffset || d.browser.getDoc().scrollTop
               }
            },
            jGetFullSize: function () {
               var t = this.jGetSize();
               return {
                  width: Math.max(d.browser.getDoc().scrollWidth, t.width),
                  height: Math.max(d.browser.getDoc().scrollHeight, t.height)
               }
            }
         }, d.extend(document, {
            $J_TYPE: "document"
         }), d.extend(window, {
            $J_TYPE: "window"
         }), d.extend([d.Element, d.Doc], {
            jFetch: function (t, e) {
               var i = d.getStorage(this.$J_UUID),
                  o = i[t];
               return void 0 !== e && void 0 === o && (o = i[t] = e), d.defined(o) ? o : null
            },
            jStore: function (t, e) {
               return d.getStorage(this.$J_UUID)[t] = e, this
            },
            jDel: function (t) {
               return delete d.getStorage(this.$J_UUID)[t], this
            }
         }), window.HTMLElement && window.HTMLElement.prototype && window.HTMLElement.prototype.getElementsByClassName || d.extend([d.Element, d.Doc], {
            getElementsByClassName: function (e) {
               return d.$A(this.getElementsByTagName("*")).filter(function (t) {
                  try {
                     return 1 == t.nodeType && t.className.has(e, " ")
                  } catch (t) {}
               })
            }
         }), d.extend([d.Element, d.Doc], {
            byClass: function () {
               return this.getElementsByClassName(arguments[0])
            },
            byTag: function () {
               return this.getElementsByTagName(arguments[0])
            }
         }), d.browser.fullScreen.capable && !document.requestFullScreen && (d.Element.requestFullScreen = function () {
            d.browser.fullScreen.request(this)
         }), d.Event = {
            $J_TYPE: "event",
            isQueueStopped: d.$false,
            stop: function () {
               return this.stopDistribution().stopDefaults()
            },
            stopDistribution: function () {
               return this.stopPropagation ? this.stopPropagation() : this.cancelBubble = !0, this
            },
            stopDefaults: function () {
               return this.preventDefault ? this.preventDefault() : this.returnValue = !1, this
            },
            stopQueue: function () {
               return this.isQueueStopped = d.$true, this
            },
            getClientXY: function () {
               var t = /touch/i.test(this.type) ? this.changedTouches[0] : this;
               return d.defined(t) ? {
                  x: t.clientX,
                  y: t.clientY
               } : {
                  x: 0,
                  y: 0
               }
            },
            jGetPageXY: function () {
               var t = /touch/i.test(this.type) ? this.changedTouches[0] : this;
               return d.defined(t) ? {
                  x: t.pageX || t.clientX + d.browser.getDoc().scrollLeft,
                  y: t.pageY || t.clientY + d.browser.getDoc().scrollTop
               } : {
                  x: 0,
                  y: 0
               }
            },
            getTarget: function () {
               for (var t = this.target || this.srcElement; t && 3 === t.nodeType;) t = t.parentNode;
               return t
            },
            getRelated: function () {
               var e = null;
               switch (this.type) {
                  case "mouseover":
                  case "pointerover":
                  case "MSPointerOver":
                     e = this.relatedTarget || this.fromElement;
                     break;
                  case "mouseout":
                  case "pointerout":
                  case "MSPointerOut":
                     e = this.relatedTarget || this.toElement;
                     break;
                  default:
                     return e
               }
               try {
                  for (; e && 3 === e.nodeType;) e = e.parentNode
               } catch (t) {
                  e = null
               }
               return e
            },
            getButton: function () {
               return this.which || void 0 === this.button ? this.which : 1 & this.button ? 1 : 2 & this.button ? 3 : 4 & this.button ? 2 : 0
            },
            isTouchEvent: function () {
               return this.pointerType && ("touch" === this.pointerType || this.pointerType === this.MSPOINTER_TYPE_TOUCH) || /touch/i.test(this.type)
            },
            isPrimaryTouch: function () {
               return this.pointerType ? ("touch" === this.pointerType || this.MSPOINTER_TYPE_TOUCH === this.pointerType) && this.isPrimary : this instanceof window.TouchEvent && (1 === this.changedTouches.length && (!this.targetTouches.length || 1 === this.targetTouches.length && this.targetTouches[0].identifier === this.changedTouches[0].identifier))
            },
            getPrimaryTouch: function () {
               return this.pointerType ? !this.isPrimary || "touch" !== this.pointerType && this.MSPOINTER_TYPE_TOUCH !== this.pointerType ? null : this : this instanceof window.TouchEvent ? this.changedTouches[0] : null
            },
            getPrimaryTouchId: function () {
               return this.pointerType ? !this.isPrimary || "touch" !== this.pointerType && this.MSPOINTER_TYPE_TOUCH !== this.pointerType ? null : this.pointerId : this instanceof window.TouchEvent ? this.changedTouches[0].identifier : null
            }
         }, d._event_add_ = "addEventListener", d._event_del_ = "removeEventListener", d._event_prefix_ = "", document.addEventListener || (d._event_add_ = "attachEvent", d._event_del_ = "detachEvent", d._event_prefix_ = "on"), d.Event.Custom = {
            type: "",
            x: null,
            y: null,
            timeStamp: null,
            button: null,
            target: null,
            relatedTarget: null,
            $J_TYPE: "event.custom",
            isQueueStopped: d.$false,
            events: d.$([]),
            pushToEvents: function (t) {
               var e = t;
               this.events.push(e)
            },
            stop: function () {
               return this.stopDistribution().stopDefaults()
            },
            stopDistribution: function () {
               return this.events.jEach(function (t) {
                  try {
                     t.stopDistribution()
                  } catch (t) {}
               }), this
            },
            stopDefaults: function () {
               return this.events.jEach(function (t) {
                  try {
                     t.stopDefaults()
                  } catch (t) {}
               }), this
            },
            stopQueue: function () {
               return this.isQueueStopped = d.$true, this
            },
            getClientXY: function () {
               return {
                  x: this.clientX,
                  y: this.clientY
               }
            },
            jGetPageXY: function () {
               return {
                  x: this.x,
                  y: this.y
               }
            },
            getTarget: function () {
               return this.target
            },
            getRelated: function () {
               return this.relatedTarget
            },
            getButton: function () {
               return this.button
            },
            getOriginalTarget: function () {
               return 0 < this.events.length ? this.events[0].getTarget() : void 0
            },
            isTouchEvent: function () {
               return this.pointerType && ("touch" === this.pointerType || this.pointerType === this.MSPOINTER_TYPE_TOUCH) || /touch/i.test(this.type)
            },
            isPrimaryTouch: function () {
               return this.pointerType ? ("touch" === this.pointerType || this.MSPOINTER_TYPE_TOUCH === this.pointerType) && this.isPrimary : this instanceof window.TouchEvent && (1 === this.changedTouches.length && (!this.targetTouches.length || this.targetTouches[0].identifier === this.changedTouches[0].identifier))
            },
            getPrimaryTouch: function () {
               return this.pointerType ? !this.isPrimary || "touch" !== this.pointerType && this.MSPOINTER_TYPE_TOUCH !== this.pointerType ? null : this : this instanceof window.TouchEvent ? this.changedTouches[0] : null
            },
            getPrimaryTouchId: function () {
               return this.pointerType ? !this.isPrimary || "touch" !== this.pointerType && this.MSPOINTER_TYPE_TOUCH !== this.pointerType ? null : this.pointerId : this instanceof window.TouchEvent ? this.changedTouches[0].identifier : null
            }
         }, d.extend([d.Element, d.Doc], {
            jAddEvent: function (e, t, i, o) {
               var n, s, a, h, r;
               return "string" === d.jTypeOf(e) && 1 < (r = e.split(" ")).length && (e = r), "array" === d.jTypeOf(e) ? d.$(e).jEach(this.jAddEvent.jBindAsEvent(this, t, i, o)) : (e = l[e] || e) && t && "string" === d.jTypeOf(e) && "function" === d.jTypeOf(t) && ("domready" === e && d.browser.ready ? t.call(this) : (i = parseInt(i || 50, 10), t.$J_EUID || (t.$J_EUID = Math.floor(Math.random() * d.now())), (s = (n = d.Doc.jFetch.call(this, "_EVENTS_", {}))[e]) || (n[e] = s = d.$([]), a = this, d.Event.Custom[e] ? d.Event.Custom[e].handler.add.call(this, o) : (s.handle = function (t) {
                  t = d.extend(t || window.e, {
                     $J_TYPE: "event"
                  }), d.Doc.jCallEvent.call(a, e, d.$(t))
               }, this[d._event_add_](d._event_prefix_ + e, s.handle, !1))), h = {
                  type: e,
                  fn: t,
                  priority: i,
                  euid: t.$J_EUID
               }, s.push(h), s.sort(function (t, e) {
                  return t.priority - e.priority
               }))), this
            },
            jRemoveEvent: function (t) {
               var e, i, o, n, s, a = d.Doc.jFetch.call(this, "_EVENTS_", {});
               if (n = 1 < arguments.length ? arguments[1] : -100, "string" === d.jTypeOf(t) && 1 < (s = t.split(" ")).length && (t = s), "array" === d.jTypeOf(t)) return d.$(t).jEach(this.jRemoveEvent.jBindAsEvent(this, n)), this;
               if (!(t = l[t] || t) || "string" !== d.jTypeOf(t) || !a || !a[t]) return this;
               for (e = a[t] || [], o = 0; o < e.length; o++) i = e[o], (-100 === n || n && n.$J_EUID === i.euid) && e.splice(o--, 1);
               return 0 === e.length && (d.Event.Custom[t] ? d.Event.Custom[t].handler.jRemove.call(this) : this[d._event_del_](d._event_prefix_ + t, e.handle, !1), delete a[t]), this
            },
            jCallEvent: function (t, e) {
               var i, o, n = d.Doc.jFetch.call(this, "_EVENTS_", {});
               if (!(t = l[t] || t) || "string" !== d.jTypeOf(t) || !n || !n[t]) return this;
               try {
                  e = d.extend(e || {}, {
                     type: t
                  })
               } catch (t) {}
               for (void 0 === e.timeStamp && (e.timeStamp = d.now()), i = n[t] || [], o = 0; o < i.length && (!e.isQueueStopped || !e.isQueueStopped()); o++) i[o].fn.call(this, e)
            },
            jRaiseEvent: function (t, e) {
               var i, o = "domready" !== t,
                  n = this;
               return t = l[t] || t, o ? (n === document && document.createEvent && !n.dispatchEvent && (n = document.documentElement), document.createEvent ? (i = document.createEvent(t)).initEvent(e, !0, !0) : (i = document.createEventObject()).eventType = t, document.createEvent ? n.dispatchEvent(i) : n.fireEvent("on" + e, i), i) : (d.Doc.jCallEvent.call(this, t), this)
            },
            jClearEvents: function () {
               var t = d.Doc.jFetch.call(this, "_EVENTS_");
               if (!t) return this;
               for (var e in t) d.Doc.jRemoveEvent.call(this, e);
               return d.Doc.jDel.call(this, "_EVENTS_"), this
            }
         }),
         function (t) {
            if ("complete" === document.readyState) return t.browser.onready.jDelay(1);
            t.browser.webkit && t.browser.version < 420 ? function () {
               t.$(["loaded", "complete"]).contains(document.readyState) ? t.browser.onready() : arguments.callee.jDelay(50)
            }() : t.browser.trident && t.browser.ieMode < 9 && window === top ? function () {
               t.$try(function () {
                  return t.browser.getDoc().doScroll("left"), !0
               }) ? t.browser.onready() : arguments.callee.jDelay(50)
            }() : (t.Doc.jAddEvent.call(t.$(document), "DOMContentLoaded", t.browser.onready), t.Doc.jAddEvent.call(t.$(window), "load", t.browser.onready))
         }(t), d.Class = function () {
            var t = null,
               e = d.$A(arguments);
            "class" == d.jTypeOf(e[0]) && (t = e.shift());

            function i() {
               for (var t in this) this[t] = d.detach(this[t]);
               if (this.constructor.$parent) {
                  this.$parent = {};
                  var e = this.constructor.$parent;
                  for (var i in e) {
                     var o = e[i];
                     switch (d.jTypeOf(o)) {
                        case "function":
                           this.$parent[i] = d.Class.wrap(this, o);
                           break;
                        case "object":
                        case "array":
                           this.$parent[i] = d.detach(o)
                     }
                  }
               }
               var n = this.init ? this.init.apply(this, arguments) : this;
               return delete this.caller, n
            }
            if (i.prototype.init || (i.prototype.init = d.$F), t) {
               function o() {}
               for (var n in o.prototype = t.prototype, i.prototype = new o, i.$parent = {}, t.prototype) i.$parent[n] = t.prototype[n]
            } else i.$parent = null;
            return i.constructor = d.Class, i.prototype.constructor = i, d.extend(i.prototype, e[0]), d.extend(i, {
               $J_TYPE: "class"
            }), i
         }, t.Class.wrap = function (t, e) {
            return function () {
               this.caller;
               return e.apply(t, arguments)
            }
         },
         function (n) {
            n.$;
            n.Event.Custom.btnclick = new n.Class(n.extend(n.Event.Custom, {
               type: "btnclick",
               init: function (t, e) {
                  var i = e.jGetPageXY();
                  this.x = i.x, this.y = i.y, this.clientX = e.clientX, this.clientY = e.clientY, this.timeStamp = e.timeStamp, this.button = e.getButton(), this.target = t, this.pushToEvents(e)
               }
            })), n.Event.Custom.btnclick.handler = {
               options: {
                  threshold: 300,
                  button: 1
               },
               add: function (t) {
                  this.jStore("event:btnclick:options", n.extend(n.detach(n.Event.Custom.btnclick.handler.options), t || {})), this.jAddEvent("mousedown", n.Event.Custom.btnclick.handler.handle, 1), this.jAddEvent("mouseup", n.Event.Custom.btnclick.handler.handle, 1), this.jAddEvent("click", n.Event.Custom.btnclick.handler.onclick, 1), n.browser.trident && n.browser.ieMode < 9 && this.jAddEvent("dblclick", n.Event.Custom.btnclick.handler.handle, 1)
               },
               jRemove: function () {
                  this.jRemoveEvent("mousedown", n.Event.Custom.btnclick.handler.handle), this.jRemoveEvent("mouseup", n.Event.Custom.btnclick.handler.handle), this.jRemoveEvent("click", n.Event.Custom.btnclick.handler.onclick), n.browser.trident && n.browser.ieMode < 9 && this.jRemoveEvent("dblclick", n.Event.Custom.btnclick.handler.handle)
               },
               onclick: function (t) {
                  t.stopDefaults()
               },
               handle: function (t) {
                  var e, i, o;
                  if (i = this.jFetch("event:btnclick:options"), "dblclick" == t.type || t.getButton() == i.button)
                     if (this.jFetch("event:btnclick:ignore")) this.jDel("event:btnclick:ignore");
                     else if ("mousedown" == t.type) e = new n.Event.Custom.btnclick(this, t), this.jStore("event:btnclick:btnclickEvent", e);
                  else if ("mouseup" == t.type) {
                     if (!(e = this.jFetch("event:btnclick:btnclickEvent"))) return;
                     o = t.jGetPageXY(), this.jDel("event:btnclick:btnclickEvent"), e.pushToEvents(t), t.timeStamp - e.timeStamp <= i.threshold && Math.sqrt(Math.pow(o.x - e.x, 2) + Math.pow(o.y - e.y, 2)) <= 5 && this.jCallEvent("btnclick", e), document.jCallEvent("mouseup", t)
                  } else "dblclick" == t.type && (e = new n.Event.Custom.btnclick(this, t), this.jCallEvent("btnclick", e))
               }
            }
         }(t), m = (r = t).$, r.Event.Custom.mousedrag = new r.Class(r.extend(r.Event.Custom, {
            type: "mousedrag",
            state: "dragstart",
            dragged: !1,
            init: function (t, e, i) {
               var o = e.jGetPageXY();
               this.x = o.x, this.y = o.y, this.clientX = e.clientX, this.clientY = e.clientY, this.timeStamp = e.timeStamp, this.button = e.getButton(), this.target = t, this.pushToEvents(e), this.state = i
            }
         })), r.Event.Custom.mousedrag.handler = {
            add: function () {
               var t = r.Event.Custom.mousedrag.handler.handleMouseMove.jBindAsEvent(this),
                  e = r.Event.Custom.mousedrag.handler.handleMouseUp.jBindAsEvent(this);
               this.jAddEvent("mousedown", r.Event.Custom.mousedrag.handler.handleMouseDown, 1), this.jAddEvent("mouseup", r.Event.Custom.mousedrag.handler.handleMouseUp, 1), document.jAddEvent("mousemove", t, 1), document.jAddEvent("mouseup", e, 1), this.jStore("event:mousedrag:listeners:document:move", t), this.jStore("event:mousedrag:listeners:document:end", e)
            },
            jRemove: function () {
               this.jRemoveEvent("mousedown", r.Event.Custom.mousedrag.handler.handleMouseDown), this.jRemoveEvent("mouseup", r.Event.Custom.mousedrag.handler.handleMouseUp), m(document).jRemoveEvent("mousemove", this.jFetch("event:mousedrag:listeners:document:move") || r.$F), m(document).jRemoveEvent("mouseup", this.jFetch("event:mousedrag:listeners:document:end") || r.$F), this.jDel("event:mousedrag:listeners:document:move"), this.jDel("event:mousedrag:listeners:document:end")
            },
            handleMouseDown: function (t) {
               var e;
               1 === t.getButton() && (e = new r.Event.Custom.mousedrag(this, t, "dragstart"), this.jStore("event:mousedrag:dragstart", e))
            },
            handleMouseUp: function (t) {
               var e;
               (e = this.jFetch("event:mousedrag:dragstart")) && (e.dragged && t.stopDefaults(), e = new r.Event.Custom.mousedrag(this, t, "dragend"), this.jDel("event:mousedrag:dragstart"), this.jCallEvent("mousedrag", e))
            },
            handleMouseMove: function (t) {
               var e;
               (e = this.jFetch("event:mousedrag:dragstart")) && (t.stopDefaults(), e.dragged || (e.dragged = !0, this.jCallEvent("mousedrag", e)), e = new r.Event.Custom.mousedrag(this, t, "dragmove"), this.jCallEvent("mousedrag", e))
            }
         },
         function (o) {
            o.$;
            o.Event.Custom.dblbtnclick = new o.Class(o.extend(o.Event.Custom, {
               type: "dblbtnclick",
               timedout: !1,
               tm: null,
               init: function (t, e) {
                  var i = e.jGetPageXY();
                  this.x = i.x, this.y = i.y, this.clientX = e.clientX, this.clientY = e.clientY, this.timeStamp = e.timeStamp, this.button = e.getButton(), this.target = t, this.pushToEvents(e)
               }
            })), o.Event.Custom.dblbtnclick.handler = {
               options: {
                  threshold: 200
               },
               add: function (t) {
                  this.jStore("event:dblbtnclick:options", o.extend(o.detach(o.Event.Custom.dblbtnclick.handler.options), t || {})), this.jAddEvent("btnclick", o.Event.Custom.dblbtnclick.handler.handle, 1)
               },
               jRemove: function () {
                  this.jRemoveEvent("btnclick", o.Event.Custom.dblbtnclick.handler.handle)
               },
               handle: function (t) {
                  var e, i;
                  e = this.jFetch("event:dblbtnclick:event"), i = this.jFetch("event:dblbtnclick:options"), e ? (clearTimeout(e.tm), this.jDel("event:dblbtnclick:event"), e.timedout || (e.pushToEvents(t), t.stopQueue().stop(), this.jCallEvent("dblbtnclick", e))) : ((e = new o.Event.Custom.dblbtnclick(this, t)).tm = setTimeout(function () {
                     e.timedout = !0, t.isQueueStopped = o.$false, this.jCallEvent("btnclick", t), this.jDel("event:dblbtnclick:event")
                  }.jBind(this), i.threshold + 10), this.jStore("event:dblbtnclick:event", e), t.stopQueue())
               }
            }
         }(t),
         function (i) {
            i.$;
            i.Event.Custom.tap = new i.Class(i.extend(i.Event.Custom, {
               type: "tap",
               id: null,
               init: function (t, e) {
                  var i = e.getPrimaryTouch();
                  this.id = i.pointerId || i.identifier, this.x = i.pageX, this.y = i.pageY, this.pageX = i.pageX, this.pageY = i.pageY, this.clientX = i.clientX, this.clientY = i.clientY, this.timeStamp = e.timeStamp, this.button = 0, this.target = t, this.pushToEvents(e)
               }
            })), i.Event.Custom.tap.handler = {
               add: function (t) {
                  this.jAddEvent(["touchstart", "pointerdown"], i.Event.Custom.tap.handler.onTouchStart, 1), this.jAddEvent(["touchend", "pointerup"], i.Event.Custom.tap.handler.onTouchEnd, 1), this.jAddEvent("click", i.Event.Custom.tap.handler.onClick, 1)
               },
               jRemove: function () {
                  this.jRemoveEvent(["touchstart", "pointerdown"], i.Event.Custom.tap.handler.onTouchStart), this.jRemoveEvent(["touchend", "pointerup"], i.Event.Custom.tap.handler.onTouchEnd), this.jRemoveEvent("click", i.Event.Custom.tap.handler.onClick)
               },
               onClick: function (t) {
                  t.stopDefaults()
               },
               onTouchStart: function (t) {
                  t.isPrimaryTouch() ? (this.jStore("event:tap:event", new i.Event.Custom.tap(this, t)), this.jStore("event:btnclick:ignore", !0)) : this.jDel("event:tap:event")
               },
               onTouchEnd: function (t) {
                  i.now();
                  var e = this.jFetch("event:tap:event");
                  this.jFetch("event:tap:options");
                  e && t.isPrimaryTouch() && (this.jDel("event:tap:event"), e.id === t.getPrimaryTouchId() && t.timeStamp - e.timeStamp <= 200 && Math.sqrt(Math.pow(t.getPrimaryTouch().pageX - e.x, 2) + Math.pow(t.getPrimaryTouch().pageY - e.y, 2)) <= 10 && (this.jDel("event:btnclick:btnclickEvent"), t.stop(), e.pushToEvents(t), this.jCallEvent("tap", e)))
               }
            }
         }(t), d.Event.Custom.dbltap = new d.Class(d.extend(d.Event.Custom, {
            type: "dbltap",
            timedout: !1,
            tm: null,
            init: function (t, e) {
               this.x = e.x, this.y = e.y, this.clientX = e.clientX, this.clientY = e.clientY, this.timeStamp = e.timeStamp, this.button = 0, this.target = t, this.pushToEvents(e)
            }
         })), d.Event.Custom.dbltap.handler = {
            options: {
               threshold: 300
            },
            add: function (t) {
               this.jStore("event:dbltap:options", d.extend(d.detach(d.Event.Custom.dbltap.handler.options), t || {})), this.jAddEvent("tap", d.Event.Custom.dbltap.handler.handle, 1)
            },
            jRemove: function () {
               this.jRemoveEvent("tap", d.Event.Custom.dbltap.handler.handle)
            },
            handle: function (t) {
               var e, i;
               e = this.jFetch("event:dbltap:event"), i = this.jFetch("event:dbltap:options"), e ? (clearTimeout(e.tm), this.jDel("event:dbltap:event"), e.timedout || (e.pushToEvents(t), t.stopQueue().stop(), this.jCallEvent("dbltap", e))) : ((e = new d.Event.Custom.dbltap(this, t)).tm = setTimeout(function () {
                  e.timedout = !0, t.isQueueStopped = d.$false, this.jCallEvent("tap", t)
               }.jBind(this), i.threshold + 10), this.jStore("event:dbltap:event", e), t.stopQueue())
            }
         }, u = (c = t).$, c.Event.Custom.touchdrag = new c.Class(c.extend(c.Event.Custom, {
            type: "touchdrag",
            state: "dragstart",
            id: null,
            dragged: !1,
            init: function (t, e, i) {
               var o = e.getPrimaryTouch();
               this.id = o.pointerId || o.identifier, this.clientX = o.clientX, this.clientY = o.clientY, this.pageX = o.pageX, this.pageY = o.pageY, this.x = o.pageX, this.y = o.pageY, this.timeStamp = e.timeStamp, this.button = 0, this.target = t, this.pushToEvents(e), this.state = i
            }
         })), c.Event.Custom.touchdrag.handler = {
            add: function () {
               var t = c.Event.Custom.touchdrag.handler.onTouchMove.jBind(this),
                  e = c.Event.Custom.touchdrag.handler.onTouchEnd.jBind(this);
               this.jAddEvent(["touchstart", "pointerdown"], c.Event.Custom.touchdrag.handler.onTouchStart, 1), this.jAddEvent(["touchend", "pointerup"], c.Event.Custom.touchdrag.handler.onTouchEnd, 1), this.jAddEvent(["touchmove", "pointermove"], c.Event.Custom.touchdrag.handler.onTouchMove, 1), this.jStore("event:touchdrag:listeners:document:move", t), this.jStore("event:touchdrag:listeners:document:end", e), u(document).jAddEvent("pointermove", t, 1), u(document).jAddEvent("pointerup", e, 1)
            },
            jRemove: function () {
               this.jRemoveEvent(["touchstart", "pointerdown"], c.Event.Custom.touchdrag.handler.onTouchStart), this.jRemoveEvent(["touchend", "pointerup"], c.Event.Custom.touchdrag.handler.onTouchEnd), this.jRemoveEvent(["touchmove", "pointermove"], c.Event.Custom.touchdrag.handler.onTouchMove), u(document).jRemoveEvent("pointermove", this.jFetch("event:touchdrag:listeners:document:move") || c.$F, 1), u(document).jRemoveEvent("pointerup", this.jFetch("event:touchdrag:listeners:document:end") || c.$F, 1), this.jDel("event:touchdrag:listeners:document:move"), this.jDel("event:touchdrag:listeners:document:end")
            },
            onTouchStart: function (t) {
               var e;
               t.isPrimaryTouch() && (e = new c.Event.Custom.touchdrag(this, t, "dragstart"), this.jStore("event:touchdrag:dragstart", e))
            },
            onTouchEnd: function (t) {
               var e;
               (e = this.jFetch("event:touchdrag:dragstart")) && e.dragged && e.id === t.getPrimaryTouchId() && (e = new c.Event.Custom.touchdrag(this, t, "dragend"), this.jDel("event:touchdrag:dragstart"), this.jCallEvent("touchdrag", e))
            },
            onTouchMove: function (t) {
               var e;
               (e = this.jFetch("event:touchdrag:dragstart")) && t.isPrimaryTouch() && (e.id === t.getPrimaryTouchId() ? (!e.dragged && 10 < Math.sqrt(Math.pow(t.getPrimaryTouch().pageX - e.x, 2) + Math.pow(t.getPrimaryTouch().pageY - e.y, 2)) && (e.dragged = !0, this.jCallEvent("touchdrag", e)), e.dragged && (e = new c.Event.Custom.touchdrag(this, t, "dragmove"), this.jCallEvent("touchdrag", e))) : this.jDel("event:touchdrag:dragstart"))
            }
         }, g = (p = t).$, v = null, p.Event.Custom.pinch = new p.Class(p.extend(p.Event.Custom, {
            type: "pinch",
            state: "pinchstart",
            init: function (t, e, i, o) {
               this.target = t, this.state = i, this.x = o.x, this.y = o.y, this.timeStamp = e.timeStamp, this.scale = o.scale, this.space = o.space, this.zoom = o.zoom, this.state = i, this.centerPoint = o.centerPoint, this.points = o.points, this.pushToEvents(e)
            }
         })), p.Event.Custom.pinch.handler = {
            variables: {
               x: 0,
               y: 0,
               space: 0,
               scale: 1,
               zoom: 0,
               startSpace: 0,
               startScale: 1,
               started: !1,
               dragged: !1,
               points: [],
               centerPoint: {
                  x: 0,
                  y: 0
               }
            },
            add: function (t) {
               var e;
               v || ((e = g(window).jGetSize()).width = Math.min(e.width, e.height), e.height = e.width, v = Math.pow(y({
                  x: 0,
                  y: 0
               }, {
                  x: e.width,
                  y: e.height
               }), 2));
               var i = p.Event.Custom.pinch.handler.onTouchMove.jBind(this),
                  o = p.Event.Custom.pinch.handler.onTouchEnd.jBind(this);
               this.jAddEvent(["click", "tap"], p.Event.Custom.pinch.handler.onClick, 1), this.jAddEvent(["touchstart", "pointerdown"], p.Event.Custom.pinch.handler.onTouchStart, 1), this.jAddEvent(["touchend", "pointerup"], p.Event.Custom.pinch.handler.onTouchEnd, 1), this.jAddEvent(["touchmove", "pointermove"], p.Event.Custom.pinch.handler.onTouchMove, 1), this.jStore("event:pinch:listeners:touchmove", i), this.jStore("event:pinch:listeners:touchend", o), p.doc.jAddEvent("pointermove", i, 1), p.doc.jAddEvent("pointerup", o, 1)
            },
            jRemove: function () {
               this.jRemoveEvent(["click", "tap"], p.Event.Custom.pinch.handler.onClick), this.jRemoveEvent(["touchstart", "pointerdown"], p.Event.Custom.pinch.handler.onTouchStart), this.jRemoveEvent(["touchend", "pointerup"], p.Event.Custom.pinch.handler.onTouchEnd), this.jRemoveEvent(["touchmove", "pointermove"], p.Event.Custom.pinch.handler.onTouchMove), p.doc.jRemoveEvent("pointermove", this.jFetch("event:pinch:listeners:touchmove")), p.doc.jRemoveEvent("pointerup", this.jFetch("event:pinch:listeners:touchend")), this.jDel("event:pinch:listeners:touchmove"), this.jDel("event:pinch:listeners:touchend"), this.jDel("event:pinch:pinchstart"), this.jDel("event:pinch:variables"), this.jDel("event:pinch:activepoints");
               var t = this.jFetch("event:pinch:cache");
               t && t.clear(), this.jDel("event:pinch:cache")
            },
            onClick: function (t) {
               t.stop()
            },
            setVariables: function (t, e) {
               var i, o, n, s, a, h, r, d, l = e.space;
               1 < t.length ? (e.space = (i = t, o = e, s = Array.prototype.slice.call(i), a = Math.abs(s[1].pageX - s[0].pageX), h = Math.abs(s[1].pageY - s[0].pageY), r = Math.min(s[1].pageX, s[0].pageX) + a / 2, d = Math.min(s[1].pageY, s[0].pageY) + h / 2, o.points = [s[0], s[1]], n = Math.pow(y({
                  x: s[0].pageX,
                  y: s[0].pageY
               }, {
                  x: s[1].pageX,
                  y: s[1].pageY
               }), 2), o.centerPoint = {
                  x: r,
                  y: d
               }, o.x = o.centerPoint.x, o.y = o.centerPoint.y, n), e.startSpace || (e.startSpace = e.space), l > e.space ? e.zoom = -1 : l < e.space ? e.zoom = 1 : e.zoom = 0, e.scale = e.space / v) : e.points = Array.prototype.slice.call(t, 0, 2)
            },
            onTouchMove: function (t) {
               var e, i = this.jFetch("event:pinch:cache"),
                  o = this.jFetch("event:pinch:variables") || p.extend({}, p.Event.Custom.pinch.handler.variables),
                  n = this.jFetch("event:pinch:activepoints");
               if (o.started) {
                  if (t.pointerId && !S(t, i, !0)) return;
                  t.stop(), p.Event.Custom.pinch.handler.setVariables(A(C(t, i), n), o), e = new p.Event.Custom.pinch(this, t, "pinchmove", o), this.jCallEvent("pinch", e)
               }
            },
            onTouchStart: function (t) {
               var e, i, o, n = this.jFetch("event:pinch:cache"),
                  s = this.jFetch("event:pinch:activepoints");
               "mouse" !== t.pointerType && (s || (s = g([]), this.jStore("event:pinch:activepoints", s)), s.length || g(t.target).jAddEvent(["touchend", "pointerup"], this.jFetch("event:pinch:listeners:touchend"), 1), n || (n = new Map, this.jStore("event:pinch:cache", n)), S(t, n), B(o = C(t, n), s), 2 === o.length && (e = this.jFetch("event:pinch:pinchstart"), i = this.jFetch("event:pinch:variables") || p.extend({}, p.Event.Custom.pinch.handler.variables), p.Event.Custom.pinch.handler.setVariables(A(o, s), i), e || (e = new p.Event.Custom.pinch(this, t, "pinchstart", i), this.jStore("event:pinch:pinchstart", e), this.jStore("event:pinch:variables", i), v = i.space, this.jCallEvent("pinch", e), i.started = !0)))
            },
            onTouchEnd: function (t) {
               var e, i, o, n, s, a, h, r, d = this.jFetch("event:pinch:cache");
               "mouse" !== t.pointerType && (!t.pointerId || d && d.has(t.pointerId)) && (i = this.jFetch("event:pinch:pinchstart"), o = this.jFetch("event:pinch:variables"), s = this.jFetch("event:pinch:activepoints"), e = C(t, d), r = d, (h = t).pointerId && "touch" === h.pointerType && r && r.has(h.pointerId) && r.delete(h.pointerId), a = T(e, s), i && o && o.started && a && s && (a && B(e, s), n = "pinchend", 1 < e.length ? n = "pinchresize" : (t.target.jRemoveEvent(["touchend", "pointerup"], this.jFetch("event:pinch:listeners:touchend")), d && d.clear(), this.jDel("event:pinch:pinchstart"), this.jDel("event:pinch:variables"), this.jDel("event:pinch:cache"), this.jDel("event:pinch:activepoints")), p.Event.Custom.pinch.handler.setVariables(A(e, s), o), i = new p.Event.Custom.pinch(this, t, n, o), this.jCallEvent("pinch", i)))
            }
         },
         function (d) {
            var l, m;
            d.$;

            function c() {
               l = null
            }
            d.Event.Custom.mousescroll = new d.Class(d.extend(d.Event.Custom, {
               type: "mousescroll",
               init: function (t, e, i, o, n, s, a) {
                  var h = e.jGetPageXY();
                  this.x = h.x, this.y = h.y, this.timeStamp = e.timeStamp, this.target = t, this.delta = i || 0, this.deltaX = o || 0, this.deltaY = n || 0, this.deltaZ = s || 0, this.deltaFactor = a || 0, this.deltaMode = e.deltaMode || 0, this.isMouse = !1, this.pushToEvents(e)
               }
            })), d.Event.Custom.mousescroll.handler = {
               eventType: "onwheel" in document || 8 < d.browser.ieMode ? "wheel" : "mousewheel",
               add: function () {
                  this.jAddEvent(d.Event.Custom.mousescroll.handler.eventType, d.Event.Custom.mousescroll.handler.handle, 1)
               },
               jRemove: function () {
                  this.jRemoveEvent(d.Event.Custom.mousescroll.handler.eventType, d.Event.Custom.mousescroll.handler.handle, 1)
               },
               handle: function (t) {
                  var e, i, o, n, s, a = 0,
                     h = 0,
                     r = 0;
                  t.detail && (r = -1 * t.detail), void 0 !== t.wheelDelta && (r = t.wheelDelta), void 0 !== t.wheelDeltaY && (r = t.wheelDeltaY), void 0 !== t.wheelDeltaX && (h = -1 * t.wheelDeltaX), t.deltaY && (r = -1 * t.deltaY), t.deltaX && (h = t.deltaX), 0 === r && 0 === h || (a = 0 === r ? h : r, e = Math.max(Math.abs(r), Math.abs(h)), (!l || e < l) && (l = e), i = 0 < a ? "floor" : "ceil", a = Math[i](a / l), h = Math[i](h / l), r = Math[i](r / l), m && clearTimeout(m), m = setTimeout(c, 200), (o = new d.Event.Custom.mousescroll(this, t, a, h, r, 0, l)).isMouse = (n = l, s = t.deltaMode || 0, 50 < n || 1 === s && !("win" == d.browser.platform && n < 1) || 0 == n % 12 || 0 == n % 4.000244140625), this.jCallEvent("mousescroll", o))
               }
            }
         }(t), d.win = d.$(window), d.doc = d.$(document), t
   }()),
   function (n) {
      if (!n) throw "MagicJS not found";
      if (!n.FX) {
         var o = n.$;
         n.FX = new n.Class({
            init: function (t, e) {
               var i;
               this.el = n.$(t), this.options = n.extend(this.options, e), this.timer = !1, this.easeFn = this.cubicBezierAtTime, i = n.FX.Transition[this.options.transition] || this.options.transition, "function" === n.jTypeOf(i) ? this.easeFn = i : this.cubicBezier = this.parseCubicBezier(i) || this.parseCubicBezier("ease"), "string" == n.jTypeOf(this.options.cycles) && (this.options.cycles = "infinite" === this.options.cycles ? 1 / 0 : parseInt(this.options.cycles) || 1)
            },
            options: {
               fps: 60,
               duration: 600,
               transition: "ease",
               cycles: 1,
               direction: "normal",
               onStart: n.$F,
               onComplete: n.$F,
               onBeforeRender: n.$F,
               onAfterRender: n.$F,
               forceAnimation: !1,
               roundCss: !1
            },
            styles: null,
            cubicBezier: null,
            easeFn: null,
            setTransition: function (t) {
               this.options.transition = t, t = n.FX.Transition[this.options.transition] || this.options.transition, "function" === n.jTypeOf(t) ? this.easeFn = t : (this.easeFn = this.cubicBezierAtTime, this.cubicBezier = this.parseCubicBezier(t) || this.parseCubicBezier("ease"))
            },
            start: function (t) {
               var e, i = /\%$/;
               for (e in this.styles = t || {}, this.cycle = 0, this.state = 0, this.curFrame = 0, this.pStyles = {}, this.alternate = "alternate" === this.options.direction || "alternate-reverse" === this.options.direction, this.continuous = "continuous" === this.options.direction || "continuous-reverse" === this.options.direction, this.styles) i.test(this.styles[e][0]) && (this.pStyles[e] = !0), "reverse" !== this.options.direction && "alternate-reverse" !== this.options.direction && "continuous-reverse" !== this.options.direction || this.styles[e].reverse();
               return this.startTime = n.now(), this.finishTime = this.startTime + this.options.duration, this.options.onStart.call(), 0 === this.options.duration ? (this.render(1), this.options.onComplete.call()) : (this.loopBind = this.loop.jBind(this), !this.options.forceAnimation && n.browser.features.requestAnimationFrame ? this.timer = n.browser.requestAnimationFrame.call(window, this.loopBind) : this.timer = this.loopBind.interval(Math.round(1e3 / this.options.fps))), this
            },
            stopAnimation: function () {
               this.timer && (!this.options.forceAnimation && n.browser.features.requestAnimationFrame && n.browser.cancelAnimationFrame ? n.browser.cancelAnimationFrame.call(window, this.timer) : clearInterval(this.timer), this.timer = !1)
            },
            stop: function (t) {
               return t = !!n.defined(t) && t, this.stopAnimation(), t && (this.render(1), this.options.onComplete.jDelay(10)), this
            },
            calc: function (t, e, i) {
               return t = parseFloat(t), ((e = parseFloat(e)) - t) * i + t
            },
            loop: function () {
               var t = n.now(),
                  e = (t - this.startTime) / this.options.duration,
                  i = Math.floor(e);
               if (t >= this.finishTime && i >= this.options.cycles) return this.stopAnimation(), this.render(1), this.options.onComplete.jDelay(10), this;
               if (this.alternate && this.cycle < i)
                  for (var o in this.styles) this.styles[o].reverse();
               this.cycle = i, !this.options.forceAnimation && n.browser.features.requestAnimationFrame && (this.timer = n.browser.requestAnimationFrame.call(window, this.loopBind)), this.render((this.continuous ? i : 0) + this.easeFn(e % 1))
            },
            render: function (t) {
               var e = {};
               for (var i in this.styles) "opacity" === i ? e[i] = Math.round(100 * this.calc(this.styles[i][0], this.styles[i][1], t)) / 100 : (e[i] = this.calc(this.styles[i][0], this.styles[i][1], t), this.pStyles[i] && (e[i] += "%"));
               this.options.onBeforeRender(e, this.el), this.set(e), this.options.onAfterRender(e, this.el)
            },
            set: function (t) {
               return this.el.jSetCss(t)
            },
            parseCubicBezier: function (t) {
               var e, i = null;
               if ("string" !== n.jTypeOf(t)) return null;
               switch (t) {
                  case "linear":
                     i = o([0, 0, 1, 1]);
                     break;
                  case "ease":
                     i = o([.25, .1, .25, 1]);
                     break;
                  case "ease-in":
                     i = o([.42, 0, 1, 1]);
                     break;
                  case "ease-out":
                     i = o([0, 0, .58, 1]);
                     break;
                  case "ease-in-out":
                     i = o([.42, 0, .58, 1]);
                     break;
                  case "easeInSine":
                     i = o([.47, 0, .745, .715]);
                     break;
                  case "easeOutSine":
                     i = o([.39, .575, .565, 1]);
                     break;
                  case "easeInOutSine":
                     i = o([.445, .05, .55, .95]);
                     break;
                  case "easeInQuad":
                     i = o([.55, .085, .68, .53]);
                     break;
                  case "easeOutQuad":
                     i = o([.25, .46, .45, .94]);
                     break;
                  case "easeInOutQuad":
                     i = o([.455, .03, .515, .955]);
                     break;
                  case "easeInCubic":
                     i = o([.55, .055, .675, .19]);
                     break;
                  case "easeOutCubic":
                     i = o([.215, .61, .355, 1]);
                     break;
                  case "easeInOutCubic":
                     i = o([.645, .045, .355, 1]);
                     break;
                  case "easeInQuart":
                     i = o([.895, .03, .685, .22]);
                     break;
                  case "easeOutQuart":
                     i = o([.165, .84, .44, 1]);
                     break;
                  case "easeInOutQuart":
                     i = o([.77, 0, .175, 1]);
                     break;
                  case "easeInQuint":
                     i = o([.755, .05, .855, .06]);
                     break;
                  case "easeOutQuint":
                     i = o([.23, 1, .32, 1]);
                     break;
                  case "easeInOutQuint":
                     i = o([.86, 0, .07, 1]);
                     break;
                  case "easeInExpo":
                     i = o([.95, .05, .795, .035]);
                     break;
                  case "easeOutExpo":
                     i = o([.19, 1, .22, 1]);
                     break;
                  case "easeInOutExpo":
                     i = o([1, 0, 0, 1]);
                     break;
                  case "easeInCirc":
                     i = o([.6, .04, .98, .335]);
                     break;
                  case "easeOutCirc":
                     i = o([.075, .82, .165, 1]);
                     break;
                  case "easeInOutCirc":
                     i = o([.785, .135, .15, .86]);
                     break;
                  case "easeInBack":
                     i = o([.6, -.28, .735, .045]);
                     break;
                  case "easeOutBack":
                     i = o([.175, .885, .32, 1.275]);
                     break;
                  case "easeInOutBack":
                     i = o([.68, -.55, .265, 1.55]);
                     break;
                  default:
                     if ((t = t.replace(/\s/g, "")).match(/^cubic-bezier\((?:-?[0-9\.]{0,}[0-9]{1,},){3}(?:-?[0-9\.]{0,}[0-9]{1,})\)$/))
                        for (e = (i = t.replace(/^cubic-bezier\s*\(|\)$/g, "").split(",")).length - 1; 0 <= e; e--) i[e] = parseFloat(i[e])
               }
               return o(i)
            },
            cubicBezierAtTime: function (t) {
               var e, l = 0,
                  m = 0,
                  c = 0,
                  i = 0,
                  o = 0,
                  n = 0,
                  s = this.options.duration;

               function u(t) {
                  return ((l * t + m) * t + c) * t
               }
               return c = 3 * this.cubicBezier[0], m = 3 * (this.cubicBezier[2] - this.cubicBezier[0]) - c, l = 1 - c - m, n = 3 * this.cubicBezier[1], o = 3 * (this.cubicBezier[3] - this.cubicBezier[1]) - n, i = 1 - n - o, e = function (t, e) {
                  var i, o, n, s, a, h, r;

                  function d(t) {
                     return 0 <= t ? t : 0 - t
                  }
                  for (n = t, h = 0; h < 8; h++) {
                     if (d(s = u(n) - t) < e) return n;
                     if (d(a = (3 * l * (r = n) + 2 * m) * r + c) < 1e-6) break;
                     n -= s / a
                  }
                  if (o = 1, (n = t) < (i = 0)) return i;
                  if (o < n) return o;
                  for (; i < o;) {
                     if (d((s = u(n)) - t) < e) return n;
                     s < t ? i = n : o = n, n = .5 * (o - i) + i
                  }
                  return n
               }(t, 1 / (200 * s)), ((i * e + o) * e + n) * e
            }
         }), n.FX.Transition = {
            linear: "linear",
            sineIn: "easeInSine",
            sineOut: "easeOutSine",
            expoIn: "easeInExpo",
            expoOut: "easeOutExpo",
            quadIn: "easeInQuad",
            quadOut: "easeOutQuad",
            cubicIn: "easeInCubic",
            cubicOut: "easeOutCubic",
            backIn: "easeInBack",
            backOut: "easeOutBack",
            elasticIn: function (t, e) {
               return e = e || [], Math.pow(2, 10 * --t) * Math.cos(20 * t * Math.PI * (e[0] || 1) / 3)
            },
            elasticOut: function (t, e) {
               return 1 - n.FX.Transition.elasticIn(1 - t, e)
            },
            bounceIn: function (t) {
               for (var e = 0, i = 1;; e += i, i /= 2)
                  if ((7 - 4 * e) / 11 <= t) return i * i - Math.pow((11 - 6 * e - 11 * t) / 4, 2)
            },
            bounceOut: function (t) {
               return 1 - n.FX.Transition.bounceIn(1 - t)
            },
            none: function (t) {
               return 0
            }
         }
      }
   }(e),
   function (i) {
      if (!i) throw "MagicJS not found";
      if (!i.PFX) {
         i.$;
         i.PFX = new i.Class(i.FX, {
            init: function (t, e) {
               this.el_arr = t, this.options = i.extend(this.options, e), this.timer = !1, this.$parent.init()
            },
            start: function (t) {
               var e, i, o = /\%$/,
                  n = t.length;
               for (this.styles_arr = t, this.pStyles_arr = new Array(n), i = 0; i < n; i++)
                  for (e in this.pStyles_arr[i] = {}, t[i]) o.test(t[i][e][0]) && (this.pStyles_arr[i][e] = !0), "reverse" !== this.options.direction && "alternate-reverse" !== this.options.direction && "continuous-reverse" !== this.options.direction || this.styles_arr[i][e].reverse();
               return this.$parent.start({}), this
            },
            render: function (t) {
               for (var e = 0; e < this.el_arr.length; e++) this.el = i.$(this.el_arr[e]), this.styles = this.styles_arr[e], this.pStyles = this.pStyles_arr[e], this.$parent.render(t)
            }
         })
      }
   }(e),
   function (h) {
      if (!h) throw "MagicJS not found";
      if (!h.Tooltip) {
         h.$;
         h.Tooltip = function (t, e) {
            var a = this.tooltip = h.$new("div", null, {
               position: "absolute",
               "z-index": 999
            }).jAddClass("MagicToolboxTooltip");
            h.$(t).jAddEvent("mouseover", function () {
               a.jAppendTo(document.body)
            }), h.$(t).jAddEvent("mouseout", function () {
               a.jRemove()
            }), h.$(t).jAddEvent("mousemove", function (t) {
               var e = h.$(t).jGetPageXY(),
                  i = a.jGetSize(),
                  o = h.$(window).jGetSize(),
                  n = h.$(window).jGetScroll();

               function s(t, e, i) {
                  return i < (t - e) / 2 ? i : (t + e) / 2 < i ? i - e : (t - e) / 2
               }
               a.jSetCss({
                  left: n.x + s(o.width, i.width + 40, e.x - n.x) + 20,
                  top: n.y + s(o.height, i.height + 40, e.y - n.y) + 20
               })
            }), this.text(e)
         }, h.Tooltip.prototype.text = function (t) {
            this.tooltip.firstChild && this.tooltip.removeChild(this.tooltip.firstChild), this.tooltip.append(document.createTextNode(t))
         }
      }
   }(e),
   function (n) {
      if (!n) throw "MagicJS not found";
      if (!n.MessageBox) {
         n.$;
         n.Message = function (t, e, i, o) {
            this.hideTimer = null, this.messageBox = n.$new("span", null, {
               position: "absolute",
               "z-index": 999,
               visibility: "hidden",
               opacity: .8
            }).jAddClass(o || "").jAppendTo(i || document.body), this.setMessage(t), this.show(e)
         }, n.Message.prototype.show = function (t) {
            this.messageBox.show(), this.hideTimer = this.hide.jBind(this).jDelay(n.ifndef(t, 5e3))
         }, n.Message.prototype.hide = function (t) {
            clearTimeout(this.hideTimer), this.hideTimer = null, this.messageBox && !this.hideFX && (this.hideFX = new e.FX(this.messageBox, {
               duration: n.ifndef(t, 500),
               onComplete: function () {
                  this.messageBox.kill(), delete this.messageBox, this.hideFX = null
               }.jBind(this)
            }).start({
               opacity: [this.messageBox.jGetCss("opacity"), 0]
            }))
         }, n.Message.prototype.setMessage = function (t) {
            this.messageBox.firstChild && this.tooltip.removeChild(this.messageBox.firstChild), this.messageBox.append(document.createTextNode(t))
         }
      }
   }(e),
   function (a) {
      if (!a) throw "MagicJS not found";
      if (!a.Options) {
         function n(t, e, i) {
            var o;
            if (o = t.hasOwnProperty("oneOf") ? t.oneOf : [t], "array" != a.jTypeOf(o)) return !1;
            for (var n = 0, s = o.length - 1; n <= s; n++)
               if (l[o[n].type](o[n], e, i)) return !0;
            return !1
         }

         function o(t) {
            var e, i, o, n;
            if (t.hasOwnProperty("oneOf"))
               for (o = t.oneOf.length, e = 0; e < o; e++)
                  for (i = e + 1; i < o; i++) d[t.oneOf[e].type] > d[t.oneOf[i].type] && (n = t.oneOf[e], t.oneOf[e] = t.oneOf[i], t.oneOf[i] = n);
            return t
         }

         function s(t) {
            var e;
            if (e = t.hasOwnProperty("oneOf") ? t.oneOf : [t], "array" != a.jTypeOf(e)) return !1;
            for (var i = e.length - 1; 0 <= i; i--) {
               if (!e[i].type || !d.hasOwnProperty(e[i].type)) return !1;
               if (a.defined(e[i].enum)) {
                  if ("array" !== a.jTypeOf(e[i].enum)) return !1;
                  for (var o = e[i].enum.length - 1; 0 <= o; o--)
                     if (!l[e[i].type]({
                           type: e[i].type
                        }, e[i].enum[o], !0)) return !1
               }
            }
            return !(t.hasOwnProperty("default") && !n(t, t.default, !0))
         }

         function t(t) {
            this.schema = {}, this.options = {}, this.parseSchema(t)
         }
         var h = a.$,
            r = null,
            d = {
               boolean: 1,
               array: 2,
               number: 3,
               function: 4,
               string: 100
            },
            l = {
               boolean: function (t, e, i) {
                  if ("boolean" != a.jTypeOf(e)) {
                     if (i || "string" != a.jTypeOf(e)) return !1;
                     if (!/^(true|false)$/.test(e)) return !1;
                     e = e.jToBool()
                  }
                  return !(t.hasOwnProperty("enum") && !h(t.enum).contains(e)) && (r = e, !0)
               },
               string: function (t, e, i) {
                  return "string" === a.jTypeOf(e) && (!(t.hasOwnProperty("enum") && !h(t.enum).contains(e)) && (r = "" + e, !0))
               },
               number: function (t, e, i) {
                  var o = "string" == a.jTypeOf(e) && /%$/.test(e);
                  return (!i || 0 != typeof e) && (e = parseFloat(e), !isNaN(e) && (isNaN(t.minimum) && (t.minimum = Number.NEGATIVE_INFINITY), isNaN(t.maximum) && (t.maximum = Number.POSITIVE_INFINITY), !(t.hasOwnProperty("enum") && !h(t.enum).contains(e)) && (!(t.minimum > e || e > t.maximum) && (r = o ? e + "%" : e, !0))))
               },
               array: function (t, e, i) {
                  if ("string" === a.jTypeOf(e)) try {
                     e = window.JSON.parse(e)
                  } catch (t) {
                     return !1
                  }
                  return "array" === a.jTypeOf(e) && (r = e, !0)
               },
               function: function (t, e, i) {
                  return "function" === a.jTypeOf(e) && (r = e, !0)
               }
            };
         a.extend(t.prototype, {
            parseSchema: function (t) {
               var e, i;
               for (e in t)
                  if (t.hasOwnProperty(e) && (i = (e + "").jTrim().jCamelize(), !this.schema.hasOwnProperty(i))) {
                     if (this.schema[i] = o(t[e]), !s(this.schema[i])) throw "Incorrect definition of the '" + e + "' parameter in " + t;
                     this.options[i] = void 0
                  }
            },
            set: function (t, e) {
               t = (t + "").jTrim().jCamelize(), "string" == a.jTypeOf(e) && (e = e.jTrim()), this.schema.hasOwnProperty(t) && (r = e, n(this.schema[t], e) && (this.options[t] = r), r = null)
            },
            get: function (t) {
               if (t = (t + "").jTrim().jCamelize(), this.schema.hasOwnProperty(t)) return a.defined(this.options[t]) ? this.options[t] : this.schema[t].default
            },
            fromJSON: function (t) {
               for (var e in t) this.set(e, t[e])
            },
            getJSON: function () {
               var t = a.extend({}, this.options);
               for (var e in t) void 0 === t[e] && void 0 !== this.schema[e].default && (t[e] = this.schema[e].default);
               return t
            },
            fromString: function (t) {
               h(t.split(";")).jEach(h(function (t) {
                  t = t.split(":"), this.set(t.shift().jTrim(), t.join(":"))
               }).jBind(this))
            },
            exists: function (t) {
               return t = (t + "").jTrim().jCamelize(), this.schema.hasOwnProperty(t)
            },
            isset: function (t) {
               return t = (t + "").jTrim().jCamelize(), this.exists(t) && a.defined(this.options[t])
            },
            jRemove: function (t) {
               t = (t + "").jTrim().jCamelize(), this.exists(t) && (delete this.options[t], delete this.schema[t])
            }
         }), a.Options = t
      }
   }(e),
   function (t) {
      if (!t) throw "MagicJS not found";
      var e = t.$;
      if (!t.SVGImage) {
         function i(t) {
            this.filters = {}, this.originalImage = e(t), this.canvas = e(document.createElementNS(o, "svg")), this.canvas.setAttribute("width", this.originalImage.naturalWidth || this.originalImage.width), this.canvas.setAttribute("height", this.originalImage.naturalHeight || this.originalImage.height), this.image = e(document.createElementNS(o, "image")), this.image.setAttributeNS("http://www.w3.org/1999/xlink", "href", this.originalImage.getAttribute("src")), this.image.setAttribute("width", "100%"), this.image.setAttribute("height", "100%"), this.image.jAppendTo(this.canvas)
         }
         var o = "http://www.w3.org/2000/svg";
         i.prototype.getNode = function () {
            return this.canvas
         }, i.prototype.blur = function (t) {
            if (!(Math.round(t) < 1)) return this.filters.blur ? this.filters.blur.firstChild.setAttribute("stdDeviation", t) : (this.filters.blur = e(document.createElementNS(o, "filter")), this.filters.blur.setAttribute("id", "filterBlur"), this.filters.blur.appendChild(e(document.createElementNS(o, "feGaussianBlur")).setProps({
               in: "SourceGraphic",
               stdDeviation: t
            })), this.filters.blur.jAppendTo(this.canvas), this.image.setAttribute("filter", "url(#filterBlur)")), this
         }, t.SVGImage = i
      }
   }(e);
   var p, g, i = (g = (p = e).$, t.prototype = {
      setupContent: function () {
         this.root = p.$new("div").jAddClass(this.rootCSS).jAddClass(this.rootCSS + "-" + this.settings.orientation).jSetCss({
            visibility: "hidden"
         }), this.wrapper = p.$new("div").jAddClass(this.rootCSS + "-wrapper").jAppendTo(this.root), this.root.jAppendTo(this.parent), g(["prev", "next"]).jEach(function (t) {
            this.buttons[t] = p.$new("button").jAddClass(this.rootCSS + "-button").jAddClass(this.rootCSS + "-button-" + t).jAppendTo(this.root).jAddEvent("btnclick tap", function (t, e) {
               g(t).events[0].stop().stopQueue(), g(t).stopDistribution(), this.scroll(e)
            }.jBindAsEvent(this, t))
         }.jBind(this)), this.buttons.prev.jAddClass(this.rootCSS + "-button-disabled"), this.context = p.$new("ul").jAddEvent("btnclick tap", function (t) {
            t.stop()
         })
      },
      addItem: function (t) {
         var e = p.$new("li").jAddClass(this.itemCSS).append(t).jAppendTo(this.context);
         return new p.ImageLoader(t, {
            oncomplete: this.reflow.jBind(this)
         }), this.items.push(e), e
      },
      selectItem: function (t) {
         var e = this.selectedItem || this.context.byClass(this.itemCSS + "-selected")[0];
         e && g(e).jRemoveClass(this.itemCSS + "-selected"), this.selectedItem = g(t), this.selectedItem && (this.selectedItem.jAddClass(this.itemCSS + "-selected"), this.scroll(this.selectedItem))
      },
      run: function () {
         if (this.wrapper !== this.context.parentNode) return g(this.context).jAppendTo(this.wrapper), this.initDrag(), g(window).jAddEvent("resize", this.resizeCallback = this.reflow.jBind(this)), void this.run.jBind(this).jDelay(1);
         var t = this.parent.jGetSize();
         0 < t.height && t.height > t.width ? this.setOrientation("vertical") : this.setOrientation("horizontal"), this.reflow(), this.root.jSetCss({
            visibility: ""
         })
      },
      stop: function () {
         this.resizeCallback && g(window).jRemoveEvent("resize", this.resizeCallback), this.root.kill()
      },
      scroll: function (t, e) {
         var i, o, n, s, a = {
               x: 0,
               y: 0
            },
            h = "vertical" == this.settings.orientation ? "top" : "left",
            r = "vertical" == this.settings.orientation ? "height" : "width",
            d = "vertical" == this.settings.orientation ? "y" : "x",
            l = this.context.parentNode.jGetSize()[r],
            m = this.context.parentNode.jGetPosition(),
            c = this.context.jGetSize()[r],
            u = [];
         if (this.scrollFX ? this.scrollFX.stop() : this.context.jSetCss("transition", p.browser.cssTransformProp + String.fromCharCode(32) + "0s"), void 0 === e && (e = 600), i = this.context.jGetPosition(), "string" == p.jTypeOf(t)) a[d] = "next" == t ? Math.max(i[h] - m[h] - l, l - c) : Math.min(i[h] - m[h] + l, 0);
         else {
            if ("element" != p.jTypeOf(t)) return;
            o = t.jGetSize(), n = t.jGetPosition(), a[d] = Math.min(0, Math.max(l - c, i[h] + l / 2 - n[h] - o[r] / 2))
         }
         0 <= (s = p.browser.gecko && "android" == p.browser.platform || p.browser.ieMode && p.browser.ieMode < 10 ? ("string" == p.jTypeOf(t) && a[d] == i[h] - m[h] && (i[h] += 0 == i[h] - m[h] ? 30 : -30), a["margin-" + h] = [c <= l ? 0 : i[h] - m[h], a[d]], delete a.x, delete a.y, this.selectorsMoveFX || (this.selectorsMoveFX = new p.PFX([this.context], {
            duration: 500
         })), u.push(a), this.selectorsMoveFX.start(u), a["margin-" + h][1]) : (this.context.jSetCss({
            transition: p.browser.cssTransformProp + String.fromCharCode(32) + e + "ms ease",
            transform: "translate3d(" + a.x + "px, " + a.y + "px, 0)"
         }), a[d])) ? (this.buttons.prev.jAddClass(this.rootCSS + "-button-disabled"), this.buttons.prev.disabled = !0) : (this.buttons.prev.jRemoveClass(this.rootCSS + "-button-disabled"), this.buttons.prev.disabled = !1), s <= l - c ? (this.buttons.next.jAddClass(this.rootCSS + "-button-disabled"), this.buttons.next.disabled = !0) : (this.buttons.next.jRemoveClass(this.rootCSS + "-button-disabled"), this.buttons.next.disabled = !1), s = null
      },
      initDrag: function () {
         var e, i, o, t, n, s, a, h, r, d, l, m, c, u = {
            x: 0,
            y: 0
         };
         t = g(function (t) {
            if (u = {
                  x: 0,
                  y: 0
               }, this.settings.orientation, c = "vertical" == this.settings.orientation ? "height" : "width", e = "vertical" == this.settings.orientation ? "y" : "x", l = this.context.parentNode.jGetSize()[c], d = this.context.jGetSize()[c], !(0 <= (i = l - d)))
               if ("dragstart" == t.state) void 0 === m && (m = 0), this.context.jSetCssProp("transition", p.browser.cssTransformProp + String.fromCharCode(32) + "0ms"), n = t[e], h = t.y, a = t.x, r = !1;
               else {
                  if ("dragend" == t.state) {
                     if (r) return;
                     s = function (t) {
                        var e, i = 0;
                        for (e = 1.5; e <= 90; e += 1.5) i += t * Math.cos(e / Math.PI / 2);
                        return o < 0 && (i *= -1), i
                     }(Math.abs(o)), (m += s) <= i && (m = i), 0 <= m && (m = 0), u[e] = m, this.context.jSetCssProp("transition", p.browser.cssTransformProp + String.fromCharCode(32) + 300 + "ms cubic-bezier(.0, .0, .0, 1)"), this.context.jSetCssProp("transform", "translate3d(" + u.x + "px, " + u.y + "px, 0px)"), o = 0
                  } else {
                     if (r) return;
                     "horizontal" == this.settings.orientation && Math.abs(t.x - a) > Math.abs(t.y - h) || "vertical" == this.settings.orientation && Math.abs(t.x - a) < Math.abs(t.y - h) ? (t.stop(), o = t[e] - n, m += o, u[e] = m, this.context.jSetCssProp("transform", "translate3d(" + u.x + "px, " + u.y + "px, 0px)"), 0 <= m ? this.buttons.prev.jAddClass(this.rootCSS + "-button-disabled") : this.buttons.prev.jRemoveClass(this.rootCSS + "-button-disabled"), m <= i ? this.buttons.next.jAddClass(this.rootCSS + "-button-disabled") : this.buttons.next.jRemoveClass(this.rootCSS + "-button-disabled")) : r = !0
                  }
                  n = t[e]
               }
         }).jBind(this), this.context.jAddEvent("touchdrag", t)
      },
      reflow: function () {
         var t, e = this.parent.jGetSize();
         0 < e.height && e.height > e.width ? this.setOrientation("vertical") : this.setOrientation("horizontal"), t = "vertical" == this.settings.orientation ? "height" : "width", this.context.jGetSize()[t] <= this.root.jGetSize()[t] ? (this.root.jAddClass("no-buttons"), this.context.jSetCssProp("transition", "").jGetSize(), this.context.jSetCssProp("transform", "translate3d(0,0,0)"), this.buttons.prev.jAddClass(this.rootCSS + "-button-disabled"), this.buttons.next.jRemoveClass(this.rootCSS + "-button-disabled")) : this.root.jRemoveClass("no-buttons"), this.selectedItem && this.scroll(this.selectedItem, 0)
      },
      setOrientation: function (t) {
         "vertical" !== t && "horizontal" !== t || t == this.settings.orientation || (this.root.jRemoveClass(this.rootCSS + "-" + this.settings.orientation), this.settings.orientation = t, this.root.jAddClass(this.rootCSS + "-" + this.settings.orientation), this.context.jSetCssProp("transition", "none").jGetSize(), this.context.jSetCssProp("transform", "").jSetCssProp("margin", ""))
      }
   }, t);

   function t(t, e) {
      this.settings = {
         cssPrefix: "magic",
         orientation: "horizontal",
         position: "bottom",
         size: {
            units: "px",
            width: "auto",
            height: "auto"
         },
         sides: ["height", "width"]
      }, this.parent = t, this.root = null, this.wrapper = null, this.context = null, this.buttons = {}, this.items = [], this.selectedItem = null, this.scrollFX = null, this.resizeCallback = null, this.settings = p.extend(this.settings, e), this.rootCSS = this.settings.cssPrefix + "-thumbs", this.itemCSS = this.settings.cssPrefix + "-thumb", this.setupContent()
   }
   var u = c.$;
   "function" != typeof Object.assign && (Object.assign = function (t) {
      if (null == t) throw new TypeError("Cannot convert undefined or null to object");
      t = Object(t);
      for (var e = 1; e < arguments.length; e++) {
         var i = arguments[e];
         if (null != i)
            for (var o in i) Object.prototype.hasOwnProperty.call(i, o) && (t[o] = i[o])
      }
      return t
   }), c.browser.cssTransform || (c.browser.cssTransform = c.normalizeCSS("transform").dashize());
   var o, h, n, s, a = {
         zoomOn: {
            type: "string",
            enum: ["click", "hover"],
            default: "hover"
         },
         zoomMode: {
            oneOf: [{
               type: "string",
               enum: ["zoom", "magnifier", "preview", "off"],
               default: "zoom"
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "zoom"
         },
         zoomWidth: {
            oneOf: [{
               type: "string",
               enum: ["auto"]
            }, {
               type: "number",
               minimum: 1
            }],
            default: "auto"
         },
         zoomHeight: {
            oneOf: [{
               type: "string",
               enum: ["auto"]
            }, {
               type: "number",
               minimum: 1
            }],
            default: "auto"
         },
         zoomPosition: {
            type: "string",
            default: "right"
         },
         zoomDistance: {
            type: "number",
            minimum: 0,
            default: 15
         },
         zoomCaption: {
            oneOf: [{
               type: "string",
               enum: ["bottom", "top", "off"],
               default: "off"
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "off"
         },
         expand: {
            oneOf: [{
               type: "string",
               enum: ["window", "fullscreen", "off"]
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "window"
         },
         expandZoomMode: {
            oneOf: [{
               type: "string",
               enum: ["zoom", "magnifier", "off"],
               default: "zoom"
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "zoom"
         },
         expandZoomOn: {
            type: "string",
            enum: ["click", "always"],
            default: "click"
         },
         expandCaption: {
            type: "boolean",
            default: !0
         },
         closeOnClickOutside: {
            type: "boolean",
            default: !0
         },
         history: {
            type: "boolean",
            default: !0
         },
         hint: {
            oneOf: [{
               type: "string",
               enum: ["once", "always", "off"]
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "once"
         },
         smoothing: {
            type: "boolean",
            default: !0
         },
         upscale: {
            type: "boolean",
            default: !0
         },
         variableZoom: {
            type: "boolean",
            default: !1
         },
         lazyZoom: {
            type: "boolean",
            default: !1
         },
         autostart: {
            type: "boolean",
            default: !0
         },
         rightClick: {
            type: "boolean",
            default: !1
         },
         transitionEffect: {
            type: "boolean",
            default: !0
         },
         selectorTrigger: {
            type: "string",
            enum: ["click", "hover"],
            default: "click"
         },
         cssClass: {
            type: "string"
         },
         forceTouch: {
            type: "boolean",
            default: !1
         },
         textHoverZoomHint: {
            type: "string",
            default: "Hover to zoom"
         },
         textClickZoomHint: {
            type: "string",
            default: "Click to zoom"
         },
         textBtnNext: {
            type: "string",
            default: "Next"
         },
         textBtnPrev: {
            type: "string",
            default: "Previous"
         },
         textBtnClose: {
            type: "string",
            default: "Close"
         },
         textExpandHint: {
            type: "string",
            default: "Click to expand"
         }
      },
      r = {
         zoomMode: {
            oneOf: [{
               type: "string",
               enum: ["zoom", "magnifier", "off"],
               default: "zoom"
            }, {
               type: "boolean",
               enum: [!1]
            }],
            default: "zoom"
         },
         expandZoomOn: {
            type: "string",
            enum: ["click", "always"],
            default: "click"
         },
         textExpandHint: {
            type: "string",
            default: "Tap or pinch to expand"
         },
         textHoverZoomHint: {
            type: "string",
            default: "Touch to zoom"
         },
         textClickZoomHint: {
            type: "string",
            default: "Double tap or pinch to zoom"
         }
      },
      d = ["onZoomReady", "onUpdate", "onZoomIn", "onZoomOut", "onExpandOpen", "onExpandClose"],
      l = {},
      m = u([]),
      v = window.devicePixelRatio || 1,
      f = !0,
      x = c.browser.features.perspective ? "translate3d(" : "translate(",
      w = c.browser.features.perspective ? ",0)" : ")",
      z = null,
      b = function () {
         return "mgctlbxN$MZ" + "p".toUpperCase() + " mgctlbxV$" + "v5.3.4".replace("v", "") + " mgctlbxL$" + "t".toUpperCase() + (window.mgctlbx$Pltm && "string" === c.jTypeOf(window.mgctlbx$Pltm) ? " mgctlbxP$" + window.mgctlbx$Pltm.toLowerCase() : "")
      };

   function j(t) {
      var e = [],
         i = null;
      return t && (i = u(t)) && (e = m.filter(function (t) {
         return t.placeholder === i
      })), e.length ? e[0] : null
   }

   function y(t) {
      return Object.assign({}, t, {
         type: t.type,
         pageX: t.pageX,
         pageY: t.pageY,
         screenX: t.screenX,
         screenY: t.screenY,
         clientX: t.clientX,
         clientY: t.clientY,
         cloned: !0
      })
   }

   function C() {
      var t = c.$A(arguments),
         e = t.shift(),
         i = l[e];
      if (i)
         for (var o = 0; o < i.length; o++) i[o].apply(null, t)
   }

   function S(t, e, i, o, n) {
      this.small = {
         src: null,
         url: null,
         dppx: 1,
         node: null,
         state: 0,
         size: {
            width: 0,
            height: 0
         },
         loaded: !1
      }, this.zoom = {
         src: null,
         url: null,
         dppx: 1,
         node: null,
         state: 0,
         size: {
            width: 0,
            height: 0
         },
         loaded: !1
      }, "object" === c.jTypeOf(t) ? this.small = t : "string" === c.jTypeOf(t) && (this.small.url = c.getAbsoluteURL(t)), "object" === c.jTypeOf(e) ? this.zoom = e : "string" === c.jTypeOf(e) && (this.zoom.url = c.getAbsoluteURL(e)), this.caption = i, this.options = o, this.origin = n, this.callback = null, this.link = null, this.node = null
   }
   S.prototype = {
      parseNode: function (t, e, i) {
         var o = t.byTag("img")[0];
         return i && (this.small.node = o || c.$new("img").jAppendTo(t)), 1 < v && (this.small.url = t.getAttribute("data-image-2x"), this.small.url && (this.small.dppx = 2), this.zoom.url = t.getAttribute("data-zoom-image-2x"), this.zoom.url && (this.zoom.dppx = 2)), this.small.src = t.getAttribute("data-image") || t.getAttribute("rev") || (o ? o.currentSrc || o.getAttribute("src") : null), this.small.src && (this.small.src = c.getAbsoluteURL(this.small.src)), this.small.url = this.small.url || this.small.src, this.small.url && (this.small.url = c.getAbsoluteURL(this.small.url)), this.zoom.src = t.getAttribute("data-zoom-image") || t.getAttribute("href"), this.zoom.src && (this.zoom.src = c.getAbsoluteURL(this.zoom.src)), this.zoom.url = this.zoom.url || this.zoom.src, this.zoom.url && (this.zoom.url = c.getAbsoluteURL(this.zoom.url)), this.caption = t.getAttribute("data-caption") || t.getAttribute("title") || e, this.link = t.getAttribute("data-link"), this.origin = t, this
      },
      loadImg: function (e) {
         var i = null;
         1 < arguments.length && "function" === c.jTypeOf(arguments[1]) && (i = arguments[1]), 0 === this[e].state ? (this[e].url && this[e].node && !this[e].node.getAttribute("src") && !this[e].node.getAttribute("srcset") && this[e].node.setAttribute("src", this[e].url), this[e].state = 1, new c.ImageLoader(this[e].node || this[e].url, {
            oncomplete: u(function (t) {
               this[e].loaded = !0, this[e].state = t.ready ? 2 : -1, t.ready && (0 === this[e].size.width && 0 === this[e].size.height && (this[e].size = t.jGetSize()), this[e].node ? (this[e].node.jSetCss({
                  maxWidth: this[e].size.width,
                  maxHeight: this[e].size.height
               }), this[e].node.currentSrc && this[e].node.currentSrc !== this[e].node.src ? this[e].url = this[e].node.currentSrc : c.getAbsoluteURL(this[e].node.getAttribute("src") || "") !== this[e].url && this[e].node.setAttribute("src", this[e].url)) : (this[e].node = u(t.img), this[e].node.getAttribute("style"), this[e].node.removeAttribute("style"), this[e].size.width /= this[e].dppx, this[e].size.height /= this[e].dppx)), this.onload(i)
            }).jBind(this)
         })) : this[e].loaded && this.onload(i)
      },
      loadSmall: function () {
         this.loadImg("small", arguments[0])
      },
      loadZoom: function () {
         this.loadImg("zoom", arguments[0])
      },
      load: function () {
         this.callback = null, 0 < arguments.length && "function" === c.jTypeOf(arguments[0]) && (this.callback = arguments[0]), this.loadSmall(), this.loadZoom()
      },
      onload: function (t) {
         if (t && t.call(null, this), this.callback && this.small.loaded && this.zoom.loaded) return this.callback.call(null, this), void(this.callback = null)
      },
      loaded: function () {
         return this.small.loaded && this.zoom.loaded
      },
      ready: function () {
         return 2 === this.small.state && 2 === this.zoom.state
      },
      getURL: function (t) {
         var e = "small" === t ? "zoom" : "small";
         return !this[t].loaded || this[t].loaded && 2 === this[t].state ? this[t].url : !this[e].loaded || this[e].loaded && 2 === this[e].state ? this[e].url : null
      },
      getNode: function (t) {
         var e = "small" === t ? "zoom" : "small";
         return !this[t].loaded || this[t].loaded && 2 === this[t].state ? this[t].node : !this[e].loaded || this[e].loaded && 2 === this[e].state ? this[e].node : null
      },
      jGetSize: function (t) {
         var e = "small" === t ? "zoom" : "small";
         return !this[t].loaded || this[t].loaded && 2 === this[t].state ? this[t].size : !this[e].loaded || this[e].loaded && 2 === this[e].state ? this[e].size : {
            width: 0,
            height: 0
         }
      },
      setSize: function (t, e) {
         this[t].size = e
      },
      getRatio: function (t) {
         var e = "small" === t ? "zoom" : "small";
         return !this[t].loaded || this[t].loaded && 2 === this[t].state ? this[t].dppx : !this[e].loaded || this[e].loaded && 2 === this[e].state ? this[e].dppx : 1
      },
      setCurNode: function (t) {
         this.node = this.getNode(t)
      }
   };

   function E(t, e) {
      this.options = new c.Options(a), this.option = u(function () {
         return 1 < arguments.length ? this.set(arguments[0], arguments[1]) : this.get(arguments[0])
      }).jBind(this.options), this.touchOptions = new c.Options(r), this.additionalImages = [], this.image = null, this.primaryImage = null, this.placeholder = u(t).jAddEvent("dragstart selectstart click", function (t) {
         t.stop()
      }), this.id = null, this.node = null, this.stubNode = null, this.originalImg = null, this.originalImgSrc = null, this.originalTitle = null, this.normalSize = {
         width: 0,
         height: 0
      }, this.size = {
         width: 0,
         height: 0
      }, this.zoomSize = {
         width: 0,
         height: 0
      }, this.zoomSizeOrigin = {
         width: 0,
         height: 0
      }, this.boundaries = {
         top: 0,
         left: 0,
         bottom: 0,
         right: 0
      }, this.ready = !1, this.expanded = !1, this.activateTimer = null, this.resizeTimer = null, this.resizeCallback = u(function () {
         this.expanded && (s && this.expandBox.jSetCss({
            height: window.innerHeight,
            top: Math.abs(s.getBoundingClientRect().top)
         }), this.image.node.jSetCss({
            "max-height": Math.min(this.image.jGetSize("zoom").height, this.expandMaxHeight())
         }), this.image.node.jSetCss({
            "max-width": Math.min(this.image.jGetSize("zoom").width, this.expandMaxWidth())
         })), this.reflowZoom(arguments[0])
      }).jBind(this), this.onResize = u(function (t) {
         clearTimeout(this.resizeTimer), this.resizeTimer = u(this.resizeCallback).jDelay(10, "scroll" === t.type)
      }).jBindAsEvent(this), this.onHistoryStateChange = u(function (t) {
         !t.state && this.expanded && this.close(), t.state && t.state.mzId === this.id && !this.expanded && this.expand()
      }).jBindAsEvent(this), b && (h.append(c.$new("div", {}, {
         display: "none",
         visibility: "hidden"
      }).append(document.createTextNode(b))), b = void 0), this.lens = null, this.zoomBox = null, this.hint = null, this.hintMessage = null, this.hintRuns = 0, this.mobileZoomHint = !0, this.loadingBox = null, this.loadTimer = null, this.thumb = null, this.expandBox = null, this.expandBg = null, this.expandCaption = null, this.expandStage = null, this.expandImageStage = null, this.expandFigure = null, this.navControlsLayer = null, this.expandNav = null, this.expandThumbs = null, this.expandGallery = [], this.buttons = {}, this.startAttempts = 0, this.startTimer = null, this.start(e)
   }
   return E.prototype = {
      loadOptions: function (t) {
         switch (this.options.fromJSON(window.mzOptions || {}), this.options.fromString(this.placeholder.getAttribute("data-options") || ""), c.browser.touchScreen || this.option("forceTouch", !1), (c.browser.mobile || this.option("forceTouch")) && (this.options.fromJSON(this.touchOptions.getJSON()), this.options.fromJSON(window.mzMobileOptions || {}), this.options.fromString(this.placeholder.getAttribute("data-mobile-options") || "")), "string" === c.jTypeOf(t) ? this.options.fromString(t || "") : this.options.fromJSON(t || {}), this.option("cssClass") && this.option("cssClass", this.option("cssClass").replace(",", " ")), !1 === this.option("zoomCaption") && this.option("zoomCaption", "off"), !1 === this.option("hint") && this.option("hint", "off"), this.option("hint")) {
            case "off":
               this.hintRuns = 0;
               break;
            case "always":
               this.hintRuns = 1 / 0;
               break;
            case "once":
            default:
               this.hintRuns = 2
         }
         "off" === this.option("zoomMode") && this.option("zoomMode", !1), "off" === this.option("expand") && this.option("expand", !1), "off" === this.option("expandZoomMode") && this.option("expandZoomMode", !1), c.browser.mobile && "zoom" === this.option("zoomMode") && "inner" === this.option("zoomPosition") && (this.option("expand") ? this.option("zoomMode", !1) : this.option("zoomOn", "click"))
      },
      start: function (t) {
         var e, i, o = this;
         if (this.startAttempts < 1) {
            if (this.loadOptions(t), f && !this.option("autostart")) return;
            if (this.originalImg = this.placeholder.querySelector("img"), this.originalImgSrc = this.originalImg ? this.originalImg.getAttribute("src") : null, this.originalTitle = u(this.placeholder).getAttribute("title"), u(this.placeholder).removeAttribute("title"), this.originalImg && "PICTURE" === this.originalImg.parentNode.tagName) {
               this.originalImgSrc = null;
               var n = c.$new("div").jAddClass("magic-temporary-img").jAppendTo(document.body),
                  s = this.originalImg.parentNode.cloneNode(!0);
               s.getAttribute("style"), s.removeAttribute("style");
               var a = s.querySelector("img");
               return a.getAttribute("style"), a.removeAttribute("style"), u(a).jAddEvent("load", function () {
                  o.size = u(a).jGetSize(), n.kill();
                  var t = o.originalImg.cloneNode(!1);
                  u(t).jSetCss({
                     maxWidth: o.size.width,
                     maxHeight: o.size.height
                  }).setAttribute("src", o.originalImg.currentSrc || o.originalImg.src), o.originalImg = o.placeholder.replaceChild(t, o.originalImg.parentNode), o.start()
               }), n.append(s), void++this.startAttempts
            }
         }(i = (new S).parseNode(this.placeholder, this.originalTitle, !0)).setSize("small", this.size), i.small.url ? (this.primaryImage = i, this.image = this.primaryImage, function (t) {
            var e, i, o = t,
               n = [];
            try {
               for (; i = o.tagName, /^[A-Za-z]*$/.test(i) && ((e = o.getAttribute("id")) && /^[A-Za-z][-A-Za-z0-9_]*/.test(e) && (i += "#" + e), n.push(i)), (o = o.parentNode) && o !== document.documentElement;);
               n = n.reverse(), c.addCSS(n.join(" ") + "> .mz-figure > img", {
                  transition: "none",
                  transform: "none"
               }, "mz-runtime-css", !0), c.addCSS(n.join(" ") + ":not(.mz-no-rt-width-css)> .mz-figure:not(.mz-no-rt-width-css) > img", {
                  width: "100% !important;"
               }, "mz-runtime-css", !0)
            } catch (t) {}
         }(this.placeholder), this.id = this.placeholder.getAttribute("id") || "mz-" + Math.floor(Math.random() * c.now()), this.placeholder.setAttribute("id", this.id), this.node = c.$new("figure").jAddClass("mz-figure"), this.node.enclose(this.image.small.node).jAddClass(this.option("cssClass")), !0 !== this.option("rightClick") && this.node.jAddEvent("contextmenu", function (t) {
            return t.stop(), !1
         }), this.node.jAddClass("mz-" + this.option("zoomOn") + "-zoom"), this.option("expand") || this.node.jAddClass("mz-no-expand"), this.lens = {
            node: c.$new("div", {
               class: "mz-lens"
            }, {
               top: 0
            }).jAppendTo(this.node),
            image: c.$new("img", {
               src: "data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            }, {
               position: "absolute",
               top: 0,
               left: 0
            }),
            width: 0,
            height: 0,
            pos: {
               x: 0,
               y: 0
            },
            spos: {
               x: 0,
               y: 0
            },
            size: {
               width: 0,
               height: 0
            },
            border: {
               x: 0,
               y: 0
            },
            dx: 0,
            dy: 0,
            innertouch: !1,
            hide: function () {
               c.browser.features.transform ? this.node.jSetCss({
                  transform: "translate(-10000px, -10000px)"
               }) : this.node.jSetCss({
                  top: -1e4
               })
            }
         }, this.lens.hide(), this.lens.node.append(this.lens.image), this.zoomBox = {
            node: c.$new("div", {
               class: "mz-zoom-window"
            }, {
               top: -1e5
            }).jAddClass(this.option("cssClass")).jAppendTo(h),
            image: c.$new("img", {
               src: "data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            }, {
               position: "absolute"
            }),
            aspectRatio: 0,
            width: 0,
            height: 0,
            innerWidth: 0,
            innerHeight: 0,
            size: {
               width: "auto",
               wunits: "px",
               height: "auto",
               hunits: "px"
            },
            mode: this.option("zoomMode"),
            position: this.option("zoomPosition"),
            trigger: this.option("zoomOn"),
            custom: !1,
            active: !1,
            activating: !1,
            enabled: !1,
            enable: u(function () {
               this.zoomBox.enabled = !1 !== arguments[0], this.node[this.zoomBox.enabled ? "jRemoveClass" : "jAddClass"]("mz-no-zoom")
            }).jBind(this),
            hide: u(function () {
               var t = u(this.node).jFetch("cr");
               this.zoomBox.node.jRemoveEvent("transitionend"), this.zoomBox.node.jSetCss({
                  top: -1e5
               }).jAppendTo(h), this.zoomBox.node.jRemoveClass("mz-deactivating mz-p-" + ("zoom" === this.zoomBox.mode ? this.zoomBox.position : this.zoomBox.mode)), !this.expanded && t && t.jRemove(), this.zoomBox.image.getAttribute("style"), this.zoomBox.image.removeAttribute("style")
            }).jBind(this),
            setMode: u(function (t) {
               this.node[!1 === t ? "jAddClass" : "jRemoveClass"]("mz-no-zoom"), this.node["magnifier" === t ? "jAddClass" : "jRemoveClass"]("mz-magnifier-zoom"), this.zoomBox.node["magnifier" === t ? "jAddClass" : "jRemoveClass"]("mz-magnifier"), this.zoomBox.node["preview" === t ? "jAddClass" : "jRemoveClass"]("mz-preview"), "zoom" !== t && (this.node.jRemoveClass("mz-inner-zoom"), this.zoomBox.node.jRemoveClass("mz-inner")), !1 === (this.zoomBox.mode = t) && this.zoomBox.enable(!1)
            }).jBind(this)
         }, this.zoomBox.node.append(this.zoomBox.image), this.zoomBox.setMode(this.option("zoomMode")), this.zoomBox.image.removeAttribute("width"), this.zoomBox.image.removeAttribute("height"), (e = ("" + this.option("zoomWidth")).match(/^([0-9]+)?(px|%)?$/)) && (this.zoomBox.size.wunits = e[2] || "px", this.zoomBox.size.width = parseFloat(e[1]) || "auto"), (e = ("" + this.option("zoomHeight")).match(/^([0-9]+)?(px|%)?$/)) && (this.zoomBox.size.hunits = e[2] || "px", this.zoomBox.size.height = parseFloat(e[1]) || "auto"), "magnifier" === this.zoomBox.mode ? (this.node.jAddClass("mz-magnifier-zoom"), this.zoomBox.node.jAddClass("mz-magnifier"), "auto" === this.zoomBox.size.width && (this.zoomBox.size.wunits = "%", this.zoomBox.size.width = 70), "auto" === this.zoomBox.size.height && (this.zoomBox.size.hunits = "%")) : (this.option("zoom-position").match(/^#/) && ((this.zoomBox.custom = u(this.option("zoom-position").replace(/^#/, ""))) ? 50 < u(this.zoomBox.custom).jGetSize().height && ("auto" === this.zoomBox.size.width && (this.zoomBox.size.wunits = "%", this.zoomBox.size.width = 100), "auto" === this.zoomBox.size.height && (this.zoomBox.size.hunits = "%", this.zoomBox.size.height = 100)) : this.option("zoom-position", "right")), "preview" === this.zoomBox.mode && ("auto" === this.zoomBox.size.width && (this.zoomBox.size.wunits = "px"), "auto" === this.zoomBox.size.height && (this.zoomBox.size.hunits = "px")), "zoom" === this.zoomBox.mode && ("auto" !== this.zoomBox.size.width && "inner" !== this.option("zoom-position") || (this.zoomBox.size.wunits = "%", this.zoomBox.size.width = 100), "auto" !== this.zoomBox.size.height && "inner" !== this.option("zoom-position") || (this.zoomBox.size.hunits = "%", this.zoomBox.size.height = 100)), "inner" === this.option("zoom-position") && this.node.jAddClass("mz-inner-zoom")), this.zoomBox.position = this.zoomBox.custom ? "custom" : this.option("zoom-position"), this.lens.border.x = parseFloat(this.lens.node.jGetCss("border-left-width") || "0"), this.lens.border.y = parseFloat(this.lens.node.jGetCss("border-top-width") || "0"), this.image.loadSmall(function () {
            2 === this.image.small.state && (this.image.setCurNode("small"), this.size = this.image.node.jGetSize(), this.registerEvents(), (this.ready = !0) === this.option("lazyZoom") && (C("onZoomReady", this.id), c.browser.mobile ? this.reflowZoom() : this.showHint()))
         }.jBind(this)), !0 === this.option("lazyZoom") && "always" !== this.option("zoomOn") || (this.image.load(u(function (t) {
            this.setupZoom(t, !0)
         }).jBind(this)), this.loadTimer = u(this.showLoading).jBind(this).jDelay(400)), this.setupSelectors(), this.setupButtons()) : ++this.startAttempts <= 600 && (this.startTimer = setTimeout(function () {
            o.start()
         }, 100))
      },
      stop: function () {
         clearTimeout(this.startTimer), this.unregisterEvents(), this.zoomBox && this.zoomBox.node.kill(), this.expandThumbs && (this.expandThumbs.stop(), this.expandThumbs = null), this.expandBox && this.expandBox.kill(), this.expanded && u(c.browser.getDoc()).jSetCss({
            overflow: ""
         }), u(this.additionalImages).jEach(function (t) {
            u(t.origin).jRemoveClass("mz-thumb-selected").jRemoveClass(this.option("cssClass") || "mz-$dummy-css-class-to-jRemove$")
         }, this), this.originalImg && (this.placeholder.append(this.originalImg), this.originalImgSrc && this.originalImg.setAttribute("src", this.originalImgSrc)), this.originalTitle && this.placeholder.setAttribute("title", this.originalTitle), this.node && this.node.kill()
      },
      setupZoom: function (t, i) {
         var o = this.image;
         if (2 !== t.zoom.state) return this.image = t, this.ready = !0, void this.zoomBox.enable(!1);
         this.image = t, this.image.setCurNode(this.expanded ? "zoom" : "small"), this.zoomBox.image.src = this.image.getURL("zoom"), this.zoomBox.node.jRemoveClass("mz-preview"), this.zoomBox.image.getAttribute("style"), this.zoomBox.image.removeAttribute("style"), this.zoomBox.node.jGetSize(), setTimeout(u(function () {
            var t, e = this.zoomBox.image.jGetSize();
            this.zoomSizeOrigin = this.image.jGetSize("zoom"), 1 < e.width * e.height && e.width * e.height < this.zoomSizeOrigin.width * this.zoomSizeOrigin.height && (this.zoomSizeOrigin = e), this.zoomSize = c.detach(this.zoomSizeOrigin), "preview" === this.zoomBox.mode && this.zoomBox.node.jAddClass("mz-preview"), this.setCaption(), this.lens.image.src = this.image.node.currentSrc || this.image.node.src, this.zoomBox.enable(this.zoomBox.mode && !(this.expanded && "preview" === this.zoomBox.mode)), this.ready = !0, this.activateTimer = null, this.resizeCallback(), this.node.jAddClass("mz-ready"), this.hideLoading(), o !== this.image ? (C("onUpdate", this.id, o.origin, this.image.origin), this.nextImage && (t = this.nextImage, this.nextImage = null, this.update(t.image, t.onswipe))) : i && C("onZoomReady", this.id), this.initEvent ? this.node.jCallEvent(this.initEvent.type, this.initEvent) : this.expanded && "always" === this.option("expandZoomOn") ? this.activate() : i && this.showHint()
         }).jBind(this), 256)
      },
      setupSelectors: function () {
         var t, e, i = this.id;
         e = new RegExp("zoom\\-id(\\s+)?:(\\s+)?" + i + "($|;)"), t = c.browser.features.query ? (t = c.$A(document.querySelectorAll('[data-zoom-id="' + this.id + '"]')), u(t).concat(c.$A(document.querySelectorAll('[rel*="zoom-id"]')).filter(function (t) {
            return e.test(t.getAttribute("rel") || "")
         }))) : c.$A(document.getElementsByTagName("A")).filter(function (t) {
            return i === t.getAttribute("data-zoom-id") || e.test(t.getAttribute("rel") || "")
         }), u(t).jEach(function (t) {
            var e, i;
            u(t).jAddEvent("click", function (t) {
               t.stopDefaults()
            }), e = (new S).parseNode(t, this.originalTitle), (this.image.zoom.src.has(e.zoom.url) || this.image.zoom.url.has(e.zoom.url)) && (this.image.small.src.has(e.small.url) || this.image.small.url.has(e.small.url)) && (u(e.origin).jAddClass("mz-thumb-selected"), (e = this.image).origin = t), !e.link && this.image.link && (e.link = this.image.link), i = u(function () {
               this.update(e)
            }).jBind(this), u(t).jAddEvent("mousedown", function (t) {
               "stopImmediatePropagation" in t && t.stopImmediatePropagation()
            }, 5), u(t).jAddEvent("tap " + ("hover" === this.option("selectorTrigger") ? "mouseover mouseout" : "btnclick"), u(function (t, e) {
               this.updateTimer && clearTimeout(this.updateTimer), this.updateTimer = !1, "mouseover" === t.type ? this.updateTimer = u(i).jDelay(e) : "tap" !== t.type && "btnclick" !== t.type || i()
            }).jBindAsEvent(this, 60)).jAddClass(this.option("cssClass")).jAddClass("mz-thumb"), !0 !== this.option("lazyZoom") && (e.loadSmall(), e.loadZoom()), this.additionalImages.push(e)
         }, this)
      },
      update: function (t, r) {
         if (this.ready) {
            if (!t || t === this.image) return !1;
            this.deactivate(null, !0), this.ready = !1, this.node.jRemoveClass("mz-ready"), this.loadTimer = u(this.showLoading).jBind(this).jDelay(400);
            var e = u(function (t) {
               var e, i, o, n, s, a, h = c.browser.ieMode < 10 ? "jGetSize" : "getBoundingClientRect";
               if (this.hideLoading(), t.setCurNode("small"), !t.node) return this.ready = !0, void this.node.jAddClass("mz-ready");
               this.setActiveThumb(t), e = this.image.node[h](), this.expanded && (t.setCurNode("zoom"), o = c.$new("div").jAddClass("mz-expand-bg"), c.browser.features.cssFilters || c.browser.ieMode < 10 ? o.append(c.$new("img", {
                  srcset: t.getURL("zoom") + " " + t.getRatio("zoom") + "x",
                  src: t.getURL("zoom")
               }).jSetCss({
                  opacity: 0
               })) : o.append(new c.SVGImage(t.node).blur(20).getNode().jSetCss({
                  opacity: 0
               })), u(o).jSetCss({
                  "z-index": -99
               }).jAppendTo(this.expandBox)), this.expanded && "zoom" === this.zoomBox.mode && "always" === this.option("expandZoomOn") ? (u(t.node).jSetCss({
                  opacity: 0
               }).jAppendTo(this.node), i = e, s = [t.node, this.image.node], a = [{
                  opacity: [0, 1]
               }, {
                  opacity: [1, 0]
               }], u(t.node).jSetCss({
                  "max-width": Math.min(t.jGetSize("zoom").width, this.expandMaxWidth()),
                  "max-height": Math.min(t.jGetSize("zoom").height, this.expandMaxHeight())
               })) : (this.node.jSetCss({
                  height: this.node[h]().height
               }), this.image.node.jSetCss({
                  position: "absolute",
                  top: 0,
                  left: 0,
                  bottom: 0,
                  right: 0,
                  width: "100%",
                  height: "100%",
                  "max-width": "",
                  "max-height": ""
               }), u(t.node).jSetCss({
                  "max-width": Math.min(t.jGetSize(this.expanded ? "zoom" : "small").width, this.expanded ? this.expandMaxWidth() : 1 / 0),
                  "max-height": Math.min(t.jGetSize(this.expanded ? "zoom" : "small").height, this.expanded ? this.expandMaxHeight() : 1 / 0),
                  position: "relative",
                  top: 0,
                  left: 0,
                  opacity: 0,
                  transform: ""
               }).jAppendTo(this.node), i = u(t.node)[h](), r || u(t.node).jSetCss({
                  "min-width": e.width,
                  height: e.height,
                  "max-width": e.width,
                  "max-height": ""
               }), this.node.jSetCss({
                  height: "",
                  overflow: ""
               }).jGetSize(), u(t.node).jGetSize(), s = [t.node, this.image.node], a = [c.extend({
                  opacity: [0, 1]
               }, r ? {
                  scale: [.6, 1]
               } : {
                  "min-width": [e.width, i.width],
                  "max-width": [e.width, i.width],
                  height: [e.height, i.height]
               }), {
                  opacity: [1, 0]
               }]), this.expanded && this.expandBg.firstChild && o.firstChild && (n = u(this.expandBg.firstChild).jGetCss("opacity"), a = c.browser.gecko ? (s = s.concat([o.firstChild]), a.concat([{
                  opacity: [1e-4, n]
               }])) : (s = s.concat([o.firstChild, this.expandBg.firstChild]), a.concat([{
                  opacity: [1e-4, n]
               }, {
                  opacity: [n, 1e-4]
               }]))), new c.PFX(s, {
                  duration: r || this.option("transitionEffect") ? r ? 160 : 350 : 0,
                  transition: r ? "cubic-bezier(0.175, 0.885, 0.320, 1)" : e.width === i.width ? "linear" : "cubic-bezier(0.25, .1, .1, 1)",
                  onComplete: u(function () {
                     this.image.node.jRemove().getAttribute("style"), this.image.node.removeAttribute("style"), u(t.node).jSetCss(this.expanded ? {
                        width: "auto",
                        height: "auto"
                     } : {
                        width: "",
                        height: ""
                     }).jSetCss({
                        "min-width": "",
                        "min-height": "",
                        opacity: "",
                        "max-width": Math.min(t.jGetSize(this.expanded ? "zoom" : "small").width, this.expanded ? this.expandMaxWidth() : 1 / 0),
                        "max-height": Math.min(t.jGetSize(this.expanded ? "zoom" : "small").height, this.expanded ? this.expandMaxHeight() : 1 / 0)
                     }), this.expanded && (this.expandBg.jRemove(), this.expandBg = void 0, this.expandBg = o.jSetCssProp("z-index", -100), u(this.expandBg.firstChild).jSetCss({
                        opacity: ""
                     }), this.expandCaption && (t.caption ? t.link ? this.expandCaption.changeContent("").append(c.$new("a", {
                        href: t.link
                     }).jAddEvent("tap btnclick", this.openLink.jBind(this)).changeContent(t.caption)) : this.expandCaption.changeContent(t.caption).jAddClass("mz-show") : this.expandCaption.jRemoveClass("mz-show"))), this.setupZoom(t)
                  }).jBind(this),
                  onBeforeRender: u(function (t, e) {
                     void 0 !== t.scale && e.jSetCssProp("transform", "scale(" + t.scale + ")")
                  })
               }).start(a)
            }).jBind(this);
            this.expanded ? t.load(e) : t.loadSmall(e)
         } else this.nextImage = {
            image: t,
            onswipe: r
         }
      },
      setActiveThumb: function (e) {
         var i = !1;
         u(this.additionalImages).jEach(function (t) {
            u(t.origin).jRemoveClass("mz-thumb-selected"), t === e && (i = !0)
         }), i && e.origin && u(e.origin).jAddClass("mz-thumb-selected"), this.expandThumbs && this.expandThumbs.selectItem(e.selector)
      },
      setCaption: function (t) {
         this.image.caption && "off" !== this.option("zoomCaption") && "magnifier" !== this.zoomBox.mode && (this.zoomBox.caption || (this.zoomBox.caption = c.$new("div", {
            class: "mz-caption"
         }).jAppendTo(this.zoomBox.node.jAddClass("caption-" + this.option("zoomCaption")))), this.zoomBox.caption.changeContent(this.image.caption))
      },
      showHint: function (t, e, i) {
         var o;
         if (!this.expanded) {
            if (this.hintRuns <= 0) return;
            !0 !== i && this.hintRuns--
         }
         null == e && (this.zoomBox.active || this.zoomBox.activating || !this.option("zoomMode") || !this.zoomBox.enabled && this.image.loaded() || c.browser.mobile && this.option("expand") && "zoom" === this.zoomBox.mode && "inner" === this.zoomBox.position ? e = this.option("expand") ? this.option("textExpandHint") : "" : "hover" === this.zoomBox.trigger ? e = this.option("textHoverZoomHint") : "click" === this.zoomBox.trigger && (e = this.option("textClickZoomHint"))), e ? (o = this.node, this.hint ? u(this.hintMessage).changeContent(e) : (this.hint = c.$new("div", {
            class: "mz-hint"
         }), this.hintMessage = c.$new("span", {
            class: "mz-hint-message"
         }).append(document.createTextNode(e)).jAppendTo(this.hint), u(this.hint).jAppendTo(this.node)), this.hint.jSetCss({
            "transition-delay": ""
         }).jRemoveClass("mz-hint-hidden"), this.expanded ? o = this.expandFigure : (this.zoomBox.active || this.zoomBox.activating) && "magnifier" !== this.zoomBox.mode && "inner" === this.zoomBox.position && (o = this.zoomBox.node), !0 === t && setTimeout(u(function () {
            this.hint.jAddClass("mz-hint-hidden")
         }).jBind(this), 16), this.hint.jAppendTo(o)) : this.hideHint()
      },
      hideHint: function () {
         this.hint && this.hint.jSetCss({
            "transition-delay": "0ms"
         }).jAddClass("mz-hint-hidden")
      },
      showLoading: function () {
         this.loadingBox || (this.loadingBox = c.$new("div", {
            class: "mz-loading"
         }), this.node.append(this.loadingBox), this.loadingBox.jGetSize()), this.loadingBox.jAddClass("shown")
      },
      hideLoading: function () {
         clearTimeout(this.loadTimer), this.loadTimer = null, this.loadingBox && u(this.loadingBox).jRemoveClass("shown")
      },
      setSize: function (t, e) {
         var i, o, n = c.detach(this.zoomBox.size),
            s = !this.expanded && this.zoomBox.custom ? u(this.zoomBox.custom).jGetSize() : {
               width: 0,
               height: 0
            },
            a = this.size,
            h = {
               x: 0,
               y: 0
            };
         e = e || this.zoomBox.position, this.normalSize = this.image.node.jGetSize(), this.size = this.image.node.jGetSize(), this.boundaries = this.image.node.getBoundingClientRect(), s.height || (s = this.size), !1 !== this.option("upscale") && !1 !== this.zoomBox.mode && "preview" !== this.zoomBox.mode || (t = !1), "preview" === this.zoomBox.mode && ("auto" === n.width && (n.width = this.zoomSizeOrigin.width), "auto" === n.height && (n.height = this.zoomSizeOrigin.height)), this.expanded && "magnifier" === this.zoomBox.mode && (n.width = 70, n.height = "auto"), "magnifier" === this.zoomBox.mode && "auto" === n.height ? (this.zoomBox.width = parseFloat(n.width / 100) * Math.min(s.width, s.height), this.zoomBox.height = this.zoomBox.width) : "zoom" === this.zoomBox.mode && "inner" === e ? (this.size = this.node.jGetSize(), s = this.size, this.boundaries = this.node.getBoundingClientRect(), this.zoomBox.width = s.width, this.zoomBox.height = s.height) : (this.zoomBox.width = "%" === n.wunits ? parseFloat(n.width / 100) * s.width : parseInt(n.width), this.zoomBox.height = "%" === n.hunits ? parseFloat(n.height / 100) * s.height : parseInt(n.height)), "preview" === this.zoomBox.mode && (o = Math.min(Math.min(this.zoomBox.width / this.zoomSizeOrigin.width, this.zoomBox.height / this.zoomSizeOrigin.height), 1), this.zoomBox.width = this.zoomSizeOrigin.width * o, this.zoomBox.height = this.zoomSizeOrigin.height * o), this.zoomBox.width = Math.ceil(this.zoomBox.width), this.zoomBox.height = Math.ceil(this.zoomBox.height), this.zoomBox.aspectRatio = this.zoomBox.width / this.zoomBox.height, this.zoomBox.node.jSetCss({
            width: this.zoomBox.width,
            height: this.zoomBox.height
         }), t && (s = this.expanded ? this.expandBox.jGetSize() : this.zoomBox.node.jGetSize(), !this.expanded && .8 < this.normalSize.width * this.normalSize.height / (this.zoomSizeOrigin.width * this.zoomSizeOrigin.height) ? (this.zoomSize.width = 1.5 * this.zoomSizeOrigin.width, this.zoomSize.height = 1.5 * this.zoomSizeOrigin.height) : this.zoomSize = c.detach(this.zoomSizeOrigin)), !1 === this.zoomBox.mode || this.zoomBox.active || this.expanded && "always" === this.option("expandZoomOn") || (.8 < this.normalSize.width * this.normalSize.height / (this.zoomSize.width * this.zoomSize.height) ? (this.zoomSize = c.detach(this.zoomSizeOrigin), this.zoomBox.enable(!1)) : this.zoomBox.enable(!0)), this.zoomBox.image.jSetCss({
            width: this.zoomSize.width,
            height: this.zoomSize.height
         }), this.zoomSize.maxWidth = this.zoomSize.width, this.zoomSize.maxHeight = this.zoomSize.height, i = this.zoomBox.node.getInnerSize(), this.zoomBox.innerWidth = Math.ceil(i.width), this.zoomBox.innerHeight = Math.ceil(i.height), this.lens.width = Math.ceil(this.zoomBox.innerWidth / (this.zoomSize.width / this.size.width)), this.lens.height = Math.ceil(this.zoomBox.innerHeight / (this.zoomSize.height / this.size.height)), this.lens.node.jSetCss({
            width: this.lens.width,
            height: this.lens.height
         }), this.lens.image.jSetCss(this.size), c.extend(this.lens, this.lens.node.jGetSize()), this.zoomBox.active && (clearTimeout(this.moveTimer), this.moveTimer = null, this.lens.innertouch ? (this.lens.pos.x *= this.size.width / a.width, this.lens.pos.y *= this.size.height / a.height, h.x = this.lens.spos.x, h.y = this.lens.spos.y) : (h.x = this.boundaries.left + this.lens.width / 2 + this.lens.pos.x * (this.size.width / a.width), h.y = this.boundaries.top + this.lens.height / 2 + this.lens.pos.y * (this.size.height / a.height)), this.animate(null, h))
      },
      reflowZoom: function (t) {
         var e, i, o, n, s, a, h, r, d = u(this.node).jFetch("cr");
         if (a = 5, h = u(window).jGetSize(), r = u(window).jGetScroll(), o = {
               left: a = a || 0,
               right: h.width - a,
               top: a,
               bottom: h.height - a,
               x: r.x,
               y: r.y
            }, this.zoomBox.position, n = this.expanded ? "inner" : this.zoomBox.custom ? "custom" : this.option("zoom-position"), s = this.expanded && "zoom" === this.zoomBox.mode ? this.expandImageStage : document.body, this.expanded && (o.y = 0, o.x = 0), t || this.setSize(!0, n), e = this.boundaries.top, "magnifier" !== this.zoomBox.mode) {
            if (t) return void this.setSize(!1);
            switch (n) {
               case "inner":
               case "custom":
                  i = e = 0;
                  break;
               case "top":
                  e = this.boundaries.top - this.zoomBox.height - this.option("zoom-distance"), o.top > e && (e = this.boundaries.bottom + this.option("zoom-distance"), n = "bottom"), i = this.boundaries.left;
                  break;
               case "bottom":
                  e = this.boundaries.bottom + this.option("zoom-distance"), o.bottom < e + this.zoomBox.height && (e = this.boundaries.top - this.zoomBox.height - this.option("zoom-distance"), n = "top"), i = this.boundaries.left;
                  break;
               case "left":
                  i = this.boundaries.left - this.zoomBox.width - this.option("zoom-distance"), o.left > i && o.right >= this.boundaries.right + this.option("zoom-distance") + this.zoomBox.width && (i = this.boundaries.right + this.option("zoom-distance"), n = "right");
                  break;
               case "right":
               default:
                  i = this.boundaries.right + this.option("zoom-distance"), o.right < i + this.zoomBox.width && o.left <= this.boundaries.left - this.zoomBox.width - this.option("zoom-distance") && (i = this.boundaries.left - this.zoomBox.width - this.option("zoom-distance"), n = "left")
            }
            switch (this.option("zoom-position")) {
               case "top":
               case "bottom":
                  (o.top > e || o.bottom < e + this.zoomBox.height) && (n = "inner");
                  break;
               case "left":
               case "right":
                  (o.left > i || o.right < i + this.zoomBox.width) && (n = "inner")
            }
            if (this.zoomBox.position = n, !this.zoomBox.activating && !this.zoomBox.active) return void(c.browser.mobile && !this.expanded && ("zoom" === this.zoomBox.mode || !1 === this.zoomBox.mode && this.option("expand")) && (this.option("expand") ? this.zoomBox.enable("inner" !== n) : "click" !== this.option("zoomOn") && (this.zoomBox.trigger = "inner" === n ? "click" : this.option("zoomOn"), this.unregisterActivateEvent(), this.unregisterDeactivateEvent(), this.registerActivateEvent("click" === this.zoomBox.trigger), this.registerDeactivateEvent("click" === this.zoomBox.trigger && !this.option("expand"))), this.showHint(!1, null, !this.image.loaded())));
            if (this.setSize(!1), t) return;
            "custom" === n && (s = this.zoomBox.custom, o.y = 0, o.x = 0), "inner" === n ? ("preview" !== this.zoomBox.mode && (this.zoomBox.node.jAddClass("mz-inner"), this.node.jAddClass("mz-inner-zoom")), this.lens.hide(), e = this.boundaries.top + o.y, i = this.boundaries.left + o.x, i = e = 0, this.expanded || (s = this.node)) : (e += o.y, i += o.x, this.node.jRemoveClass("mz-inner-zoom"), this.zoomBox.node.jRemoveClass("mz-inner")), this.zoomBox.node.jSetCss({
               top: e,
               left: i
            })
         } else this.setSize(!1), s = this.node, !c.browser.mobile || this.expanded || this.zoomBox.activating || this.zoomBox.active || this.showHint(!1, null, !(this.option("lazyZoom") && this.image.loaded()));
         this.zoomBox.node[this.expanded ? "jAddClass" : "jRemoveClass"]("mz-expanded"), !this.expanded && d && d.jAppendTo("zoom" === this.zoomBox.mode && "inner" === n ? this.zoomBox.node : this.node, (Math.floor(101 * Math.random()) + 1) % 2 ? "top" : "bottom"), this.zoomBox.node.jAppendTo(s)
      },
      changeZoomLevel: function (t) {
         var e, i, o, n, s = !1,
            a = t.isMouse ? 5 : 3 / 54;
         if (this.zoomBox.active) {
            if (u(t).stop(), a = (100 + a * Math.abs(t.deltaY)) / 100, t.deltaY < 0 && (a = 1 / a), "magnifier" === this.zoomBox.mode) i = Math.max(100, Math.round(this.zoomBox.width * a)), o = (i = Math.min(i, .9 * this.size.width)) / this.zoomBox.aspectRatio, this.zoomBox.width = Math.ceil(i), this.zoomBox.height = Math.ceil(o), this.zoomBox.node.jSetCss({
               width: this.zoomBox.width,
               height: this.zoomBox.height
            }), e = this.zoomBox.node.getInnerSize(), this.zoomBox.innerWidth = Math.ceil(e.width), this.zoomBox.innerHeight = Math.ceil(e.height), s = !0;
            else {
               if (this.expanded || "zoom" !== this.zoomBox.mode) return;
               i = Math.max(this.size.width, Math.round(this.zoomSize.width * a)), o = (i = Math.min(i, this.zoomSize.maxWidth)) / (this.zoomSize.maxWidth / this.zoomSize.maxHeight), this.zoomSize.width = Math.ceil(i), this.zoomSize.height = Math.ceil(o)
            }
            n = u(window).jGetScroll(), this.lens.width = this.zoomBox.innerWidth / (this.zoomSize.width / this.size.width), this.lens.height = this.zoomBox.innerHeight / (this.zoomSize.height / this.size.height), this.lens.node.jSetCss({
               width: this.lens.width,
               height: this.lens.height
            }), c.extend(this.lens, this.lens.node.jGetSize()), this.zoomBox.active && (clearTimeout(this.moveTimer), this.moveTimer = null, s && (this.moveTimer = !0), this.animate(null, {
               x: t.x - n.x,
               y: t.y - n.y
            }), s && (this.moveTimer = null))
         }
      },
      registerActivateEvent: function (t) {
         var e, i = t ? "dbltap btnclick" : "touchstart" + (window.navigator.pointerEnabled ? " pointerdown" : window.navigator.msPointerEnabled ? " MSPointerDown" : "") + (window.navigator.pointerEnabled ? " pointermove" : window.navigator.msPointerEnabled ? " MSPointerMove" : " mousemove"),
            o = this.node.jFetch("mz:handlers:activate:fn", t ? u(this.activate).jBindAsEvent(this) : u(function (t) {
               t.isTouchEvent() && !t.isPrimaryTouch() || t && "touch" === t.pointerType && "pointerdown" !== t.type || (e = c.browser.ieMode < 9 ? c.extend({}, t) : t, this.activateTimer || (clearTimeout(this.activateTimer), this.activateTimer = setTimeout(u(function () {
                  this.activate(e)
               }).jBind(this), 120)))
            }).jBindAsEvent(this));
         this.node.jStore("mz:handlers:activate:event", i).jAddEvent(i, o, 10)
      },
      unregisterActivateEvent: function () {
         var t = this.node.jFetch("mz:handlers:activate:event"),
            e = this.node.jFetch("mz:handlers:activate:fn");
         this.node.jRemoveEvent(t, e), this.node.jDel("mz:handlers:activate:fn")
      },
      registerDeactivateEvent: function (t) {
         var e = "touchend";
         window.navigator.pointerEnabled ? e += " pointerup pointerout pointermove" : window.navigator.msPointerEnabled ? e += " MSPointerUp MSPointerOut MSPointerMove" : e += " mouseout mousemove", t && (this.expanded || c.browser.mobile ? e = "dbltap btnclick" : e += " dbltap btnclick");
         var i = this.node.jFetch("mz:handlers:deactivate:fn", u(function (t) {
            if ((!t.isTouchEvent() || t.isPrimaryTouch()) && (!t || "pointerup" !== t.type || "touch" === t.pointerType))
               if (!t || "pointermove" !== t.type && "MSPointerMove" !== t.type && "mousemove" !== t.type) {
                  if (this.zoomBox.node !== t.getRelated() && ("inner" !== this.zoomBox.position && "magnifier" !== this.zoomBox.mode || !this.zoomBox.node.hasChild(t.getRelated())) && !this.node.hasChild(t.getRelated())) return void this.deactivate(t)
               } else {
                  if (!this.ready || !this.zoomBox.enabled || !this.zoomBox.active) return;
                  var e = t.getClientXY();
                  if (e.x < this.boundaries.left || e.x > this.boundaries.right || e.y < this.boundaries.top || e.y > this.boundaries.bottom) return void this.deactivate(t)
               }
         }).jBindAsEvent(this));
         this.node.jStore("mz:handlers:deactivate:event", e).jAddEvent(e, i, 20)
      },
      unregisterDeactivateEvent: function () {
         var t = this.node.jFetch("mz:handlers:deactivate:event"),
            e = this.node.jFetch("mz:handlers:deactivate:fn");
         this.node.jRemoveEvent(t, e), this.node.jDel("mz:handlers:deactivate:fn")
      },
      registerAnimateEvent: function () {
         var t = "touchmove";
         "android" !== c.browser.platform && (window.navigator.pointerEnabled ? t += " pointermove" : window.navigator.msPointerEnabled ? t += " MSPointerMove" : t += " mousemove");
         var e = this.node.jFetch("mz:handlers:animate:fn", u(this.animate).jBindAsEvent(this));
         this.node.jStore("mz:handlers:animate:event", t).jAddEvent(t, e)
      },
      unregisterAnimateEvent: function () {
         var t = this.node.jFetch("mz:handlers:animate:event"),
            e = this.node.jFetch("mz:handlers:animate:fn");
         this.node.jRemoveEvent(t, e)
      },
      registerEvents: function () {
         this.moveBind = this.move.jBind(this), this.node.jAddEvent(["touchstart", window.navigator.pointerEnabled ? "pointerdown" : "MSPointerDown"], u(function (t) {
            c.browser.androidBrowser && this.option("zoomMode") && "click" !== this.option("zoomOn") && "touchstart" === t.type && (t.stopDefaults(), c.browser.gecko && t.stopDistribution()), this.zoomBox.active && "inner" === this.zoomBox.position && t.isPrimaryTouch() && (this.lens.spos = t.getClientXY())
         }).jBindAsEvent(this), 10), this.node.jAddEvent(["touchend", window.navigator.pointerEnabled ? "pointerup" : "MSPointerUp"], u(function (t) {
            t.isTouchEvent() && t.isPrimaryTouch() && (this.lens.touchmovement = !1)
         }).jBindAsEvent(this), 10), this.registerAnimateEvent(), this.option("zoomMode") && (this.registerActivateEvent("click" === this.option("zoomOn")), this.registerDeactivateEvent("click" === this.option("zoomOn"))), this.node.jAddEvent("mousedown", function (t) {
            t.stopDistribution()
         }, 10).jAddEvent("btnclick", u(function (t) {
            this.node.jRaiseEvent("MouseEvent", "click"), this.expanded && this.expandBox.jCallEvent("btnclick", t)
         }).jBind(this), 15), this.option("expand") ? this.node.jAddEvent("tap btnclick", u(this.expand).jBindAsEvent(this), 15) : this.node.jAddEvent("tap btnclick", u(this.openLink).jBindAsEvent(this), 15), 1 < this.additionalImages.length && this.swipe(), !c.browser.mobile && this.option("variableZoom") && this.node.jAddEvent("mousescroll", this.changeZoomLevel.jBindAsEvent(this)), c.browser.mobile && this.pinchToZoom(), u(window).jAddEvent(c.browser.mobile ? "resize" : "resize scroll", this.onResize), this.option("history") && u(window).jAddEvent("popstate", this.onHistoryStateChange)
      },
      unregisterEvents: function () {
         this.node && this.node.jRemoveEvent("mousescroll"), u(window).jRemoveEvent("resize scroll", this.onResize), this.option("history") && u(window).jRemoveEvent("popstate", this.onHistoryStateChange), u(this.additionalImages).jEach(function (t) {
            u(t.origin).jClearEvents()
         })
      },
      activate: function (t) {
         var e, i, o, n, s, a = 0,
            h = 0;
         this.image.loaded() && this.ready && this.zoomBox.enabled && !this.zoomBox.active && !this.zoomBox.activating ? t && "pointermove" === t.type && "touch" === t.pointerType || (this.option("zoomMode") || !this.option("expand") || this.expanded ? (this.zoomBox.activating = !0, this.expanded && "zoom" === this.zoomBox.mode && (n = this.image.node.jGetRect(), this.expandStage.jAddClass("mz-zoom-in"), s = this.expandFigure.jGetRect(), h = (n.left + n.right) / 2 - (s.left + s.right) / 2, a = (n.top + n.bottom) / 2 - (s.top + s.bottom) / 2), this.zoomBox.image.jRemoveEvent("transitionend"), this.zoomBox.node.jRemoveClass("mz-deactivating").jRemoveEvent("transitionend"), this.zoomBox.node.jAddClass("mz-activating"), this.node.jAddClass("mz-activating"), this.reflowZoom(), i = "zoom" === this.zoomBox.mode ? this.zoomBox.position : this.zoomBox.mode, !c.browser.features.transition || this.expanded && "always" === this.option("expandZoomOn") ? (this.zoomBox.node.jRemoveClass("mz-activating"), this.zoomBox.activating = !1, this.zoomBox.active = !0) : "inner" === i ? (o = this.image.node.jGetSize(), this.zoomBox.image.jSetCss({
            transform: "translate3d(0," + a + "px, 0) scale(" + o.width / this.zoomSize.width + ", " + o.height / this.zoomSize.height + ")"
         }).jGetSize(), this.zoomBox.image.jAddEvent("transitionend", u(function () {
            this.zoomBox.image.jRemoveEvent("transitionend"), this.zoomBox.node.jRemoveClass("mz-activating mz-p-" + i), this.zoomBox.activating = !1, this.zoomBox.active = !0
         }).jBind(this)), this.zoomBox.node.jAddClass("mz-p-" + i).jGetSize(), c.browser.mobile || !c.browser.chrome || "chrome" !== c.browser.uaName && "opera" !== c.browser.uaName || (this.zoomBox.activating = !1, this.zoomBox.active = !0)) : (this.zoomBox.node.jAddEvent("transitionend", u(function () {
            this.zoomBox.node.jRemoveEvent("transitionend"), this.zoomBox.node.jRemoveClass("mz-activating mz-p-" + i)
         }).jBind(this)), this.zoomBox.node.jSetCss({
            transition: "none"
         }), this.zoomBox.node.jAddClass("mz-p-" + i).jGetSize(), this.zoomBox.node.jSetCss({
            transition: ""
         }).jGetSize(), this.zoomBox.node.jRemoveClass("mz-p-" + i), this.zoomBox.activating = !1, this.zoomBox.active = !0), this.expanded || this.showHint(!0), t ? (t.stop().stopQueue(), e = t.getClientXY(), "magnifier" === this.zoomBox.mode && /tap/i.test(t.type) && (e.y -= this.zoomBox.height / 2 + 10), "inner" === i && (/tap/i.test(t.type) || t.isTouchEvent()) && (this.lens.pos = {
            x: 0,
            y: 0
         }, e.x = -(e.x - this.boundaries.left - this.size.width / 2) * (this.zoomSize.width / this.size.width), e.y = -(e.y - this.boundaries.top - this.size.height / 2) * (this.zoomSize.height / this.size.height))) : (e = {
            x: this.boundaries.left + (this.boundaries.right - this.boundaries.left) / 2,
            y: this.boundaries.top + (this.boundaries.bottom - this.boundaries.top) / 2
         }, c.browser.mobile && this.expanded && "always" === this.option("expandZoomOn") && (this.lens.innertouch = !0, this.lens.pos = {
            x: 0,
            y: 0
         }, e.x = -(e.x - this.boundaries.left - this.size.width / 2) * (this.zoomSize.width / this.size.width), e.y = -(e.y - this.boundaries.top - this.size.height / 2) * (this.zoomSize.height / this.size.height))), this.node.jRemoveClass("mz-activating").jAddClass("mz-active"), e.x += -h, e.y += -a, this.lens.spos = {
            x: 0,
            y: 0
         }, this.lens.dx = 0, this.lens.dy = 0, this.animate(t, e, !0), C("onZoomIn", this.id)) : this.zoomBox.active = !0) : this.image.loaded() || this.initEvent || (t && (this.initEvent = y(t), t.stopQueue()), this.image.load(this.setupZoom.jBind(this)), this.loadTimer || (this.loadTimer = u(this.showLoading).jBind(this).jDelay(400)))
      },
      deactivate: function (t, e) {
         var i, o, n, s, a = 0,
            h = this.zoomBox.active;
         this.initEvent = null, this.ready && (t && "pointerout" === t.type && "touch" === t.pointerType || (clearTimeout(this.moveTimer), this.moveTimer = null, clearTimeout(this.activateTimer), this.activateTimer = null, this.zoomBox.activating = !1, !(this.zoomBox.active = !1) === e || this.expanded || h && (c.browser.mobile && !this.expanded && "zoom" === this.zoomBox.mode ? this.reflowZoom() : this.showHint()), this.zoomBox.enabled && (t && t.stop(), this.zoomBox.image.jRemoveEvent("transitionend"), this.zoomBox.node.jRemoveClass("mz-activating").jRemoveEvent("transitionend"), this.expanded && (s = this.expandFigure.jGetRect(), "always" !== this.option("expandZoomOn") && this.expandStage.jRemoveClass("mz-zoom-in"), this.image.node.jSetCss({
            "max-height": this.expandMaxHeight()
         }), (n = this.image.node.jGetRect()).left, n.right, s.left, s.right, a = (n.top + n.bottom) / 2 - (s.top + s.bottom) / 2), i = "zoom" === this.zoomBox.mode ? this.zoomBox.position : this.zoomBox.mode, !c.browser.features.transition || !t || this.expanded && "always" === this.option("expandZoomOn") ? (this.zoomBox.hide(), this.node.jRemoveClass("mz-active")) : "inner" === i ? (this.zoomBox.image.jAddEvent("transitionend", u(function () {
            this.zoomBox.image.jRemoveEvent("transitionend"), this.node.jRemoveClass("mz-active"), setTimeout(u(function () {
               this.zoomBox.hide()
            }).jBind(this), 32)
         }).jBind(this)), o = this.image.node.jGetSize(), this.zoomBox.node.jAddClass("mz-deactivating mz-p-" + i).jGetSize(), this.zoomBox.image.jSetCss({
            transform: "translate3d(0," + a + "px,0) scale(" + o.width / this.zoomSize.maxWidth + ", " + o.height / this.zoomSize.maxHeight + ")"
         })) : (this.zoomBox.node.jAddEvent("transitionend", u(function () {
            this.zoomBox.hide(), this.node.jRemoveClass("mz-active")
         }).jBind(this)), this.zoomBox.node.jGetCss("opacity"), this.zoomBox.node.jAddClass("mz-deactivating mz-p-" + i), this.node.jRemoveClass("mz-active")), this.lens.dx = 0, this.lens.dy = 0, this.lens.spos = {
            x: 0,
            y: 0
         }, this.lens.hide(), h && C("onZoomOut", this.id))))
      },
      animate: function (t, e, i) {
         var o, n, s, a, h = e,
            r = 0,
            d = 0,
            l = !1;
         if (this.zoomBox.active || i) {
            if (t) {
               if (u(t).stopDefaults().stopDistribution(), t.isTouchEvent() && !t.isPrimaryTouch()) return;
               (l = /tap/i.test(t.type) || t.isTouchEvent()) && !this.lens.touchmovement && (this.lens.touchmovement = l), h = h || t.getClientXY()
            }
            "preview" !== this.zoomBox.mode && ("zoom" === this.zoomBox.mode && "inner" === this.zoomBox.position && (t && l || !t && this.lens.innertouch) ? (this.lens.innertouch = !0, o = this.lens.pos.x + (h.x - this.lens.spos.x), n = this.lens.pos.y + (h.y - this.lens.spos.y), this.lens.spos = h, s = -(r = Math.min(0, this.zoomBox.innerWidth - this.zoomSize.width) / 2), a = -(d = Math.min(0, this.zoomBox.innerHeight - this.zoomSize.height) / 2)) : (this.lens.innertouch = !1, "magnifier" === this.zoomBox.mode && (h.y = Math.max(this.boundaries.top, Math.min(h.y, this.boundaries.bottom)), h.x = Math.max(this.boundaries.left, Math.min(h.x, this.boundaries.right))), o = h.x - this.boundaries.left, n = h.y - this.boundaries.top, s = this.size.width - this.lens.width, a = this.size.height - this.lens.height, o -= this.lens.width / 2, n -= this.lens.height / 2), "magnifier" !== this.zoomBox.mode && (o = Math.max(r, Math.min(o, s)), n = Math.max(d, Math.min(n, a))), this.lens.pos.x = o, this.lens.pos.y = n, "zoom" === this.zoomBox.mode && (c.browser.features.transform ? (this.lens.node.jSetCss({
               transform: "translate(" + this.lens.pos.x + "px," + this.lens.pos.y + "px)"
            }), this.lens.image.jSetCss({
               transform: "translate(" + -(this.lens.pos.x + this.lens.border.x) + "px, " + -(this.lens.pos.y + this.lens.border.y) + "px)"
            })) : (this.lens.node.jSetCss({
               top: this.lens.pos.y,
               left: this.lens.pos.x
            }), this.lens.image.jSetCss({
               top: -(this.lens.pos.y + this.lens.border.y),
               left: -(this.lens.pos.x + this.lens.border.x)
            }))), "magnifier" === this.zoomBox.mode && (!this.lens.touchmovement || t && "dbltap" === t.type || (h.y -= this.zoomBox.height / 2 + 10), this.zoomBox.node.jSetCss({
               top: h.y - this.boundaries.top - this.zoomBox.height / 2,
               left: h.x - this.boundaries.left - this.zoomBox.width / 2
            })), this.moveTimer || (this.lens.dx = 0, this.lens.dy = 0, this.move(1)))
         }
      },
      move: function (t) {
         var e, i, o, n, s, a;
         isFinite(t) || (t = this.lens.innertouch ? this.lens.touchmovement ? .4 : .16 : this.option("smoothing") ? .2 : this.lens.touchmovement ? .4 : .8), e = (this.lens.pos.x - this.lens.dx) * t, i = (this.lens.pos.y - this.lens.dy) * t, this.lens.dx += e, this.lens.dy += i, (!this.moveTimer || 1e-6 < Math.abs(e) || 1e-6 < Math.abs(i)) && (n = this.lens.innertouch ? (o = this.lens.dx, this.lens.dy) : (o = this.lens.dx * (this.zoomSize.width / this.size.width) - Math.max(0, this.zoomSize.width - this.zoomBox.innerWidth) / 2, n = this.lens.dy * (this.zoomSize.height / this.size.height) - Math.max(0, this.zoomSize.height - this.zoomBox.innerHeight) / 2, "magnifier" === this.zoomBox.mode && (o = Math.round(o), n = Math.round(n)), o = -o, -n), s = this.zoomSize.width / this.zoomSize.maxWidth, a = this.zoomSize.height / this.zoomSize.maxHeight, this.zoomBox.image.jSetCss(c.browser.features.transform ? {
            transform: x + o + "px," + n + "px" + w + " scale(" + s + "," + a + ")"
         } : {
            width: this.zoomSize.width,
            height: this.zoomSize.height,
            left: -(this.lens.dx * (this.zoomSize.width / this.size.width) + Math.min(0, this.zoomSize.width - this.zoomBox.innerWidth) / 2),
            top: -(this.lens.dy * (this.zoomSize.height / this.size.height) + Math.min(0, this.zoomSize.height - this.zoomBox.innerHeight) / 2)
         })), "magnifier" !== this.zoomBox.mode && (this.moveTimer = setTimeout(this.moveBind, 16))
      },
      swipe: function () {
         var e, i, o, n, s, a, h, r = "",
            d = {},
            l = 0,
            m = {
               transition: c.browser.cssTransform + String.fromCharCode(32) + "300ms cubic-bezier(.18,.35,.58,1)"
            },
            t = u(function (t) {
               if (this.ready && !this.zoomBox.active)
                  if ("dragstart" === t.state) clearTimeout(this.activateTimer), this.activateTimer = null, l = 0, d = {
                     x: t.x,
                     y: t.y,
                     ts: t.timeStamp
                  }, e = this.size.width, i = e / 2, this.image.node.jRemoveEvent("transitionend"), this.image.node.jSetCssProp("transition", ""), this.image.node.jSetCssProp("transform", "translate3d(0, 0, 0)"), h = null;
                  else {
                     if (n = t.x - d.x, s = {
                           x: 0,
                           y: 0,
                           z: 0
                        }, null === h && (h = Math.abs(t.x - d.x) < Math.abs(t.y - d.y)), h) return;
                     if (t.stop(), "dragend" === t.state) return l = 0, a = null, o = t.timeStamp - d.ts, (Math.abs(n) > i || o < 201 && 30 < Math.abs(n)) && (r = 0 < n ? "backward" : n <= 0 ? "forward" : "") && ("backward" === r ? (a = this.getPrev(), l += 10 * e) : (a = this.getNext(), l -= 10 * e)), s.x = l, s.deg = s.x / e * -90, this.image.node.jAddEvent("transitionend", u(function (t) {
                        this.image.node.jRemoveEvent("transitionend"), this.image.node.jSetCssProp("transition", ""), a && (this.image.node.jSetCss({
                           transform: "translate3d(" + s.x + "px, 0px, 0px)"
                        }), this.update(a, !0))
                     }).jBind(this)), this.image.node.jSetCss(m), this.image.node.jSetCss({
                        "transition-duration": s.x ? "100ms" : "300ms",
                        opacity: 1 - .2 * Math.abs(s.x / e),
                        transform: "translate3d(" + s.x + "px, 0px, 0px)"
                     }), void(n = 0);
                     s.x = n, s.z = -50 * Math.abs(s.x / i), s.deg = s.x / i * -60, this.image.node.jSetCss({
                        opacity: 1 - .2 * Math.abs(s.x / i),
                        transform: "translate3d(" + s.x + "px, 0px, " + s.z + "px)"
                     })
                  }
            }).jBind(this);
         this.node.jAddEvent("touchdrag", t)
      },
      pinchToZoom: function () {
         var a, h = {
               width: 0,
               height: 0
            },
            n = !1,
            s = u(function (t, e, i) {
               var o, n;
               if (this.zoomBox.active || i) {
                  var s = c.detach(this.zoomSize);
                  o = Math.max(a.width, Math.round(h.width * t)), n = (o = Math.min(o, this.zoomSize.maxWidth)) / (this.zoomSize.maxWidth / this.zoomSize.maxHeight), this.zoomSize.width = Math.floor(o), this.zoomSize.height = Math.floor(n), this.lens.width = Math.ceil(this.zoomBox.innerWidth / (this.zoomSize.width / a.width)), this.lens.height = Math.ceil(this.zoomBox.innerHeight / (this.zoomSize.height / a.height)), this.lens.node.jSetCss({
                     width: this.lens.width,
                     height: this.lens.height
                  }), c.extend(this.lens, this.lens.node.jGetSize()), clearTimeout(this.moveTimer), this.moveTimer = null, e.x = this.lens.spos.x * (this.zoomSize.width / s.width) + (e.x - this.boundaries.left - this.size.width / 2) * (1 - this.zoomSize.width / s.width), e.y = this.lens.spos.y * (this.zoomSize.height / s.height) + (e.y - this.boundaries.top - this.size.height / 2) * (1 - this.zoomSize.height / s.height), this.lens.spos = {
                     x: 0,
                     y: 0
                  }, this.lens.pos = {
                     x: 0,
                     y: 0
                  }, this.lens.innertouch = !0, this.animate(null, {
                     x: e.x,
                     y: e.y
                  }), clearTimeout(this.moveTimer), this.moveTimer = null
               }
            }).jBind(this),
            t = u(function (t) {
               if (n || "pinchstart" === t.state || t.cloned) {
                  t.stop();
                  var e = u(window).jGetScroll(),
                     i = !1,
                     o = {
                        x: t.centerPoint.x - e.x,
                        y: t.centerPoint.y - e.y
                     };
                  switch (t.state) {
                     case "pinchstart":
                        this.unregisterAnimateEvent(), h = c.detach(this.zoomSize), a = this.expanded ? this.image.node.jGetSize() : this.size, clearTimeout(this.moveTimer), this.moveTimer = null, this.zoomBox.active && (this.lens.spos = c.detach(this.lens.pos)), n = !0;
                        break;
                     case "pinchend":
                        n = !1, this.zoomBox.active && ("always" !== this.option("expandZoomOn") && this.zoomSize.width <= a.width && this.zoomSize.height <= a.height ? (n = !1, this.deactivate(null)) : 0 < t.points.length && (this.lens.spos = {
                           x: t.points[0].clientX,
                           y: t.points[0].clientY
                        })), this.registerAnimateEvent();
                        break;
                     case "pinchresize":
                        break;
                     case "pinchmove":
                        if (!this.expanded || -1 !== t.zoom || this.zoomBox.active && "always" !== this.option("expandZoomOn")) {
                           if (!this.expanded || 1 !== t.zoom || "always" !== this.option("expandZoomOn"))
                              if (this.option("expand") && !this.expanded) {
                                 if (1.1 < t.scale) return n = !1, this.registerAnimateEvent(), void this.expand(t)
                              } else {
                                 if (1 === t.zoom && !this.zoomBox.active) {
                                    if (!this.image.loaded() || !this.ready || !this.zoomBox.enabled) return void(this.image.loaded() || this.initEvent || (t && (this.initEvent = y(t), t.stopQueue()), this.image.load(this.setupZoom.jBind(this)), this.loadTimer || (this.loadTimer = u(this.showLoading).jBind(this).jDelay(400))));
                                    this.zoomBox.activating = !0, this.expanded && "zoom" === this.zoomBox.mode && this.expandStage.jAddClass("mz-zoom-in"), this.zoomBox.image.jRemoveEvent("transitionend"), this.zoomBox.node.jRemoveClass("mz-deactivating").jRemoveEvent("transitionend"), this.zoomBox.node.jAddClass("mz-activating"), this.node.jAddClass("mz-activating"), this.reflowZoom(), this.zoomSize.width = a.width, this.zoomSize.height = a.height, this.zoomBox.activating = !1, this.zoomBox.active = !0, h = c.detach(this.zoomSize), this.zoomBox.node.jRemoveClass("mz-activating"), this.node.jRemoveClass("mz-activating").jAddClass("mz-active"), this.lens.spos = {
                                       x: 0,
                                       y: 0
                                    }, this.lens.pos = {
                                       x: 0,
                                       y: 0
                                    }, i = !0
                                 }
                                 s(t.scale, o, i), i && C("onZoomIn", this.id)
                              }
                        } else t.scale < .5 && this.close()
                  }
               }
            }).jBind(this);
         this.node.jAddEvent("pinch", t)
      },
      setupButtons: function () {
         var i = document.createDocumentFragment();
         u(["prev", "next", "close"]).jEach(function (t) {
            var e = "mz-button";
            switch (this.buttons[t] = c.$new("button", {
                  type: "button",
                  title: this.option("text-btn-" + t)
               }).jAddClass(e).jAddClass(e + "-" + t), i.appendChild(this.buttons[t]), t) {
               case "prev":
                  this.buttons[t].jAddEvent("tap btnclick", function (t) {
                     t.stop(), this.update(this.getPrev())
                  }.jBindAsEvent(this));
                  break;
               case "next":
                  this.buttons[t].jAddEvent("tap btnclick", function (t) {
                     t.stop(), this.update(this.getNext())
                  }.jBindAsEvent(this));
                  break;
               case "close":
                  this.buttons[t].jAddEvent("tap btnclick", function (t) {
                     t.stop(), this.close()
                  }.jBindAsEvent(this)).hide()
            }
         }, this), this.toggleNavButtons(1 < this.additionalImages.length), this.navControlsLayer = c.$new("div").jAddClass("mz-nav-controls").append(i).jAppendTo(this.node)
      },
      toggleNavButtons: function (t) {
         t ? (this.buttons.next.show(), this.buttons.prev.show()) : (this.buttons.next.hide(), this.buttons.prev.hide())
      },
      setupExpandGallery: function () {
         var e, t;
         this.additionalImages.length ? this.expandGallery = this.additionalImages : (e = this.placeholder.getAttribute("data-gallery")) && (t = c.browser.features.query ? c.$A(document.querySelectorAll('.MagicZoom[data-gallery="' + e + '"], .MagicZoomPlus[data-gallery="' + e + '"]')) : c.$A(document.getElementsByTagName("A")).filter(function (t) {
            return e === t.getAttribute("data-gallery")
         }), u(t).jEach(function (t) {
            var e, i;
            (e = j(t)) && 0 < e.additionalImages.length || (e ? (i = new S(e.image.small.url, e.image.zoom.url, e.image.caption, null, e.image.origin)).link = e.image.link : i = (new S).parseNode(t, e ? e.originalTitle : null), (this.image.zoom.src.has(i.zoom.url) || this.image.zoom.url.has(i.zoom.url)) && (this.image.small.src.has(i.small.url) || this.image.small.url.has(i.small.url)) && (i = this.image), this.expandGallery.push(i))
         }, this), this.primaryImage = this.image), this.expandedViewId || (this.expandedViewId = Math.floor(Math.random() * c.now())), 1 < this.expandGallery.length ? (this.expandStage.jAddClass("with-thumbs"), this.expandNav = c.$new("div", {
            class: "mz-expand-thumbnails"
         }).jAppendTo(this.expandStage), this.expandThumbs = new i(this.expandNav), u(this.expandGallery).jEach(function (e) {
            var i = u(function (t) {
               this.setActiveThumb(e), this.update(e)
            }).jBind(this);
            e.selector = this.expandThumbs.addItem(c.$new("img", {
               src: e.getURL("small")
            }).jAddEvent("tap btnclick", function (t) {
               t.stop()
            }).jAddEvent("tap " + ("hover" === this.option("selectorTrigger") ? "mouseover mouseout" : "btnclick"), u(function (t, e) {
               this.updateTimer && clearTimeout(this.updateTimer), this.updateTimer = !1, "mouseover" === t.type ? this.updateTimer = u(i).jDelay(e) : "tap" !== t.type && "btnclick" !== t.type || i()
            }).jBindAsEvent(this, 60)))
         }, this)) : this.expandStage.jRemoveClass("with-thumbs"), this.toggleNavButtons(1 < this.expandGallery.length), this.buttons.close.show()
      },
      destroyExpandGallery: function () {
         var t;
         if (this.expandThumbs && (this.expandThumbs.stop(), this.expandThumbs = null), this.expandNav && (this.expandNav.jRemove(), this.expandNav = null), this.toggleNavButtons(1 < this.additionalImages.length), this.buttons.close.hide(), 1 < this.expandGallery.length && !this.additionalImages.length)
            for (this.node.jRemoveEvent("touchdrag"), this.image.node.jRemove().getAttribute("style"), this.image.node.removeAttribute("style"), this.primaryImage.node.jAppendTo(this.node), this.setupZoom(this.primaryImage); t = this.expandGallery.pop();) t !== this.primaryImage && (t.small.node && (t.small.node.kill(), t.small.node = null), t.zoom.node && (t.zoom.node.kill(), t.zoom.node = null), t = null);
         this.expandGallery = []
      },
      close: function () {
         this.ready && this.expanded && ("ios" === c.browser.platform && "safari" === c.browser.uaName && 7 === parseInt(c.browser.uaVersion) && (clearInterval(z), z = null), u(document).jRemoveEvent("keydown", this.keyboardCallback), this.deactivate(null, !0), this.ready = !1, c.browser.fullScreen.capable && c.browser.fullScreen.enabled() ? c.browser.fullScreen.cancel() : c.browser.features.transition ? (this.node.jRemoveEvent("transitionend").jSetCss({
            transition: ""
         }), this.node.jAddEvent("transitionend", this.onClose), c.browser.webkit && setTimeout(u(function () {
            this.onClose()
         }).jBind(this), 260), this.expandBg.jRemoveEvent("transitionend").jSetCss({
            transition: ""
         }), this.expandBg.jSetCss({
            transition: "all 0.6s cubic-bezier(0.895, 0.030, 0.685, 0.220) 0.0s"
         }).jGetSize(), this.node.jSetCss({
            transition: "all .3s cubic-bezier(0.600, 0, 0.735, 0.045) 0s"
         }).jGetSize(), !1 !== this.zoomBox.mode && "always" === this.option("expandZoomOn") && "magnifier" !== this.option("expandZoomMode") && (this.image.node.jSetCss({
            "max-height": this.image.jGetSize("zoom").height
         }), this.image.node.jSetCss({
            "max-width": this.image.jGetSize("zoom").width
         })), this.expandBg.jSetCss({
            opacity: .4
         }), this.node.jSetCss({
            opacity: .01,
            transform: "scale(0.4)"
         })) : this.onClose())
      },
      expand: function (t) {
         if (this.image.loaded() && this.ready && !this.expanded) {
            t && t.stopQueue();
            var e = u(this.node).jFetch("cr");
            this.hideHint(), this.hintRuns--, this.deactivate(null, !0), this.unregisterActivateEvent(), this.unregisterDeactivateEvent(), this.ready = !1, this.expandBox || (this.expandBox = c.$new("div").jAddClass("mz-expand").jAddClass(this.option("cssClass")).jSetCss({
               opacity: 0
            }), this.expandStage = c.$new("div").jAddClass("mz-expand-stage").jAppendTo(this.expandBox), this.expandBox.jAddEvent("mousescroll touchstart dbltap", u(function (t) {
               u(t).stop()
            })), this.option("closeOnClickOutside") && this.expandBox.jAddEvent("tap btnclick", function (t) {
               var e = t.jGetPageXY(),
                  i = u("magnifier" === this.option("expandZoomMode") ? this.zoomBox.node : this.zoomBox.image).jGetRect();
               if ("always" !== this.option("expandZoomOn") && i.top <= e.y && e.y <= i.bottom && i.left <= e.x && e.x <= i.right) return t.stopQueue(), void this.deactivate(t);
               "always" !== this.option("expandZoomOn") && this.node.hasChild(t.getOriginalTarget()) || (t.stop(), this.close())
            }.jBindAsEvent(this)), this.keyboardCallback = u(function (t) {
               var e = null;
               27 !== t.keyCode && 37 !== t.keyCode && 39 !== t.keyCode || (u(t).stop(), 27 === t.keyCode ? this.close() : (e = 37 === t.keyCode ? this.getPrev() : this.getNext()) && this.update(e))
            }).jBindAsEvent(this), this.onExpand = u(function () {
               if (this.node.jRemoveEvent("transitionend").jSetCss({
                     transition: "",
                     transform: "translate3d(0, 0, 0)"
                  }), !this.expanded) {
                  if (this.expanded = !0, this.option("history")) try {
                     var t = "#mz-expanded-view-" + this.expandedViewId;
                     window.location.hash !== t && (history.state && history.state.expandedView && history.state.mzId ? history.replaceState({
                        expandedView: this.expandedViewId,
                        mzId: this.id
                     }, document.title, t) : history.pushState({
                        expandedView: this.expandedViewId,
                        mzId: this.id
                     }, document.title, t))
                  } catch (t) {}
                  var o;
                  this.expandBox.jRemoveClass("mz-expand-opening").jSetCss({
                     opacity: 1
                  }), this.zoomBox.setMode(this.option("expandZoomMode")), this.zoomSize = c.detach(this.zoomSizeOrigin), this.resizeCallback(), this.expandCaption && this.image.caption && this.expandCaption.jAddClass("mz-show"), "always" !== this.option("expandZoomOn") && (this.registerActivateEvent(!0), this.registerDeactivateEvent(!0)), this.ready = !0, "always" === this.option("expandZoomOn") && (!1 !== this.zoomBox.mode && this.zoomBox.enable(!0), c.browser.mobile && this.mobileZoomHint && (this.mobileZoomHint = !1), this.activate()), (c.browser.mobile || this.option("forceTouch")) && this.mobileZoomHint && this.zoomBox.enabled && (this.showHint(!0, this.option("textClickZoomHint")), this.hintRuns !== 1 / 0 && (this.mobileZoomHint = !1)), this.navControlsLayer.jRemoveClass("mz-hidden").jAddClass("mz-fade mz-visible"), this.expandNav && this.expandNav.jRemoveClass("mz-hidden").jAddClass("mz-fade mz-visible"), this.expandThumbs && (this.expandThumbs.run(), this.setActiveThumb(this.image)), e && e.jAppendTo(this.expandBox, (Math.floor(101 * Math.random()) + 1) % 2 ? "top" : "bottom"), 1 < this.expandGallery.length && !this.additionalImages.length && this.swipe(), u(document).jAddEvent("keydown", this.keyboardCallback), "ios" === c.browser.platform && "safari" === c.browser.uaName && 7 === parseInt(c.browser.uaVersion) && (o = null, z = setInterval(function () {
                     var t = 90 === window.orientation || -90 === window.orientation,
                        e = window.innerHeight,
                        i = .85 * (t ? screen.availWidth : screen.availHeight);
                     null !== o && !1 !== o || !(t && e < i || !t && e < i) ? null !== o && !0 !== o || !(t && i < e || !t && i < e) || (o = !1, n()) : (o = !0, n())
                  }, 250)), C("onExpandOpen", this.id)
               }

               function n() {
                  window.scrollTo(document.body.scrollLeft, document.body.scrollTop), window.dispatchEvent(new Event("resize"))
               }
            }).jBind(this), this.onClose = u(function () {
               this.node.jRemoveEvent("transitionend"), this.expanded && (this.expanded && (u(document).jRemoveEvent("keydown", this.keyboardCallback), this.deactivate(null, !0)), this.setSize(!0), this.destroyExpandGallery(), this.expanded = !1, this.option("history") && window.location.hash === "#mz-expanded-view-" + this.expandedViewId && history.back(), this.zoomBox.setMode(this.option("zoomMode")), this.node.replaceChild(this.image.getNode("small"), this.image.node), this.image.setCurNode("small"), u(this.image.node).jSetCss({
                  width: "",
                  height: "",
                  "max-width": Math.min(this.image.jGetSize("small").width),
                  "max-height": Math.min(this.image.jGetSize("small").height)
               }), this.lens.image.src = this.image.getURL("small"), this.node.jSetCss({
                  opacity: "",
                  transition: ""
               }), this.node.jSetCss({
                  transform: "translate3d(0, 0, 0)"
               }), u(this.placeholder).replaceChild(this.node, this.stubNode), this.navControlsLayer.jRemoveClass("mz-expand-controls").jRemoveClass("mz-hidden").jAddClass("mz-fade mz-visible").jAppendTo(this.node), this.setSize(!0), this.expandCaption && (this.expandCaption.jRemove(), this.expandCaption = null), this.unregisterActivateEvent(), this.unregisterDeactivateEvent(), "always" === this.option("zoomOn") ? this.activate() : !1 !== this.option("zoomMode") && (this.registerActivateEvent("click" === this.option("zoomOn")), this.registerDeactivateEvent("click" === this.option("zoomOn"))), this.showHint(), this.expandBg.jRemoveEvent("transitionend"), this.expandBox.jRemove(), this.expandBg.jRemove(), this.expandBg = null, s && s.jRemove(), u(c.browser.getDoc()).jRemoveClass("mz-expanded-view-open"), this.ready = !0, c.browser.ieMode < 10 ? this.resizeCallback() : u(window).jRaiseEvent("UIEvent", "resize"), C("onExpandClose", this.id))
            }).jBind(this), this.expandImageStage = c.$new("div", {
               class: "mz-image-stage"
            }).jAppendTo(this.expandStage), this.expandFigure = c.$new("figure").jAppendTo(this.expandImageStage), this.stubNode = this.node.cloneNode(!1)), this.navControlsLayer.jAddClass("mz-expand-controls").jAppendTo(this.expandImageStage), this.setupExpandGallery(), s && s.jAppendTo(document.body), u(c.browser.getDoc()).jAddClass("mz-expanded-view-open"), u(document.body).jGetSize(), "fullscreen" === this.option("expand") ? (this.prepareExpandedView(), c.browser.fullScreen.request(this.expandBox, {
               onEnter: u(function () {
                  this.onExpand()
               }).jBind(this),
               onExit: this.onClose,
               fallback: u(function () {
                  this.expandToWindow()
               }).jBind(this)
            })) : setTimeout(u(function () {
               this.prepareExpandedView(), this.expandToWindow()
            }).jBind(this), 96)
         } else this.image.loaded() || this.initEvent || (t && (this.initEvent = y(t), t.stopQueue(), "tap" === t.type && t.events[1].stopQueue()), this.image.load(this.setupZoom.jBind(this)), this.loadTimer || (this.loadTimer = u(this.showLoading).jBind(this).jDelay(400)))
      },
      prepareExpandedView: function () {
         var t, e;
         t = c.$new("img", {
            srcset: this.image.getURL("zoom") + " " + this.image.getRatio("zoom") + "x",
            src: this.image.getURL("zoom")
         }), this.expandBg = c.$new("div").jAddClass("mz-expand-bg").append(c.browser.features.cssFilters || c.browser.ieMode < 10 ? t : new c.SVGImage(t).blur(20).getNode()).jAppendTo(this.expandBox), "always" === this.option("expandZoomOn") && !1 !== this.option("expandZoomMode") && this.expandStage.jAddClass("mz-always-zoom" + ("zoom" === this.option("expandZoomMode") ? " mz-zoom-in" : "")).jGetSize(), e = u(this.node)[c.browser.ieMode < 10 ? "jGetSize" : "getBoundingClientRect"](), u(this.stubNode).jSetCss({
            width: e.width,
            height: e.height
         }), this.node.replaceChild(this.image.getNode("zoom"), this.image.node), this.image.setCurNode("zoom"), this.expandBox.jAppendTo(document.body), s && this.expandBox.jSetCss({
            height: window.innerHeight,
            maxHeight: "100vh",
            top: Math.abs(s.getBoundingClientRect().top)
         }), this.expandMaxWidth = function () {
            var t = this.expandImageStage;
            return 50 < u(this.expandFigure).jGetSize().width && (t = this.expandFigure),
               function () {
                  return "always" === this.option("expandZoomOn") && !1 !== this.option("expandZoomMode") && "magnifier" !== this.option("expandZoomMode") ? 1 / 0 : Math.round(u(t).getInnerSize().width)
               }
         }.call(this), this.expandMaxHeight = function () {
            var t = this.expandImageStage;
            return 50 < u(this.expandFigure).jGetSize().height && (t = this.expandFigure),
               function () {
                  return "always" === this.option("expandZoomOn") && !1 !== this.option("expandZoomMode") && "magnifier" !== this.option("expandZoomMode") ? 1 / 0 : Math.round(u(t).getInnerSize().height)
               }
         }.call(this), this.navControlsLayer.jRemoveClass("mz-fade mz-visible").jAddClass("mz-hidden"), this.expandNav && this.expandNav.jRemoveClass("mz-fade mz-visible").jAddClass("mz-hidden"), this.option("expandCaption") && (this.expandCaption = c.$new("figcaption", {
            class: "mz-caption"
         }).jAppendTo(this.expandImageStage), this.expandCaption && this.image.caption && (this.image.link ? this.expandCaption.append(c.$new("a", {
            href: this.image.link
         }).jAddEvent("tap btnclick", this.openLink.jBind(this)).changeContent(this.image.caption)) : this.expandCaption.changeContent(this.image.caption))), this.image.node.jSetCss({
            "max-height": Math.min(this.image.jGetSize("zoom").height, this.expandMaxHeight())
         }), this.image.node.jSetCss({
            "max-width": Math.min(this.image.jGetSize("zoom").width, this.expandMaxWidth())
         }), this.expandFigure.append(u(this.placeholder).replaceChild(this.stubNode, this.node))
      },
      expandToWindow: function () {
         this.node.jSetCss({
            transition: ""
         }), this.node.jSetCss({
            transform: "scale(0.6)"
         }).jGetSize(), this.node.jSetCss({
            transition: c.browser.cssTransform + " 0.4s cubic-bezier(0.175, 0.885, 0.320, 1) 0s"
         }), c.browser.features.transition ? (this.node.jAddEvent("transitionend", this.onExpand), !c.browser.chrome || "chrome" !== c.browser.uaName && "opera" !== c.browser.uaName || setTimeout(u(function () {
            this.onExpand()
         }).jBind(this), 500)) : this.onExpand.jDelay(16, this), this.expandBox.jSetCss({
            opacity: 1
         }), this.node.jSetCss({
            transform: "scale(1)"
         })
      },
      openLink: function () {
         this.image.link && window.open(this.image.link, "_self")
      },
      getNext: function () {
         var t = (this.expanded ? this.expandGallery : this.additionalImages).filter(function (t) {
               return -1 !== t.small.state || -1 !== t.zoom.state
            }),
            e = t.length,
            i = u(t).indexOf(this.image) + 1;
         return e <= 1 ? null : t[e <= i ? 0 : i]
      },
      getPrev: function () {
         var t = (this.expanded ? this.expandGallery : this.additionalImages).filter(function (t) {
               return -1 !== t.small.state || -1 !== t.zoom.state
            }),
            e = t.length,
            i = u(t).indexOf(this.image) - 1;
         return e <= 1 ? null : t[i < 0 ? e - 1 : i]
      },
      imageByURL: function (e, i) {
         return (this.additionalImages.filter(function (t) {
            return (t.zoom.src.has(e) || t.zoom.url.has(e)) && (t.small.src.has(i) || t.small.url.has(i))
         }) || [])[0] || (i && e && "string" === c.jTypeOf(i) && "string" === c.jTypeOf(e) ? new S(i, e) : null)
      },
      imageByOrigin: function (e) {
         return (this.additionalImages.filter(function (t) {
            return t.origin === e
         }) || [])[0]
      },
      imageByIndex: function (t) {
         return this.additionalImages[t]
      }
   }, o = {
      version: "v5.3.4 (Plus) DEMO",
      start: function (t, e) {
         var i = null,
            o = [];
         return c.$A(t ? [u(t)] : c.$A(document.byClass("MagicZoom")).concat(c.$A(document.byClass("MagicZoomPlus")))).jEach(u(function (t) {
            u(t) && (j(t) || (i = new E(t, e), f && !i.option("autostart") ? (i.stop(), i = null) : (m.push(i), o.push(i))))
         }).jBind(this)), t ? o[0] : o
      },
      stop: function (t) {
         var e, i;
         if (t)(i = j(t)) && (i = m.splice(m.indexOf(i), 1)) && i[0].stop() && delete i[0];
         else
            for (; e = m.length;)(i = m.splice(e - 1, 1))[0].stop(), delete i[0]
      },
      refresh: function (t) {
         return this.stop(t), this.start(t)
      },
      update: function (t, e, i, o) {
         var n, s = j(t);
         s && (n = "element" === c.jTypeOf(e) ? s.imageByOrigin(e) : s.imageByURL(e, i)) && s.update(n)
      },
      switchTo: function (t, e) {
         var i, o = j(t);
         if (o) {
            switch (c.jTypeOf(e)) {
               case "element":
                  i = o.imageByOrigin(e);
                  break;
               case "number":
                  i = o.imageByIndex(e)
            }
            i && o.update(i)
         }
      },
      prev: function (t) {
         var e;
         (e = j(t)) && e.update(e.getPrev())
      },
      next: function (t) {
         var e;
         (e = j(t)) && e.update(e.getNext())
      },
      zoomIn: function (t) {
         var e;
         (e = j(t)) && e.activate()
      },
      zoomOut: function (t) {
         var e;
         (e = j(t)) && e.deactivate()
      },
      expand: function (t) {
         var e;
         (e = j(t)) && e.expand()
      },
      close: function (t) {
         var e;
         (e = j(t)) && e.close()
      },
      registerCallback: function (t, e) {
         l[t] || (l[t] = []), "function" === c.jTypeOf(e) && l[t].push(e)
      },
      running: function (t) {
         return !!j(t)
      }
   }, u(document).jAddEvent("domready", function () {
      var t = window.mzOptions || {};
      b = b(), c.addCSS(".magic-hidden-wrapper, .magic-temporary-img", {
         display: "block !important",
         "min-height": "0 !important",
         "min-width": "0 !important",
         "max-height": "none !important",
         "max-width": "none !important",
         width: "10px !important",
         height: "10px !important",
         position: "absolute !important",
         top: "-10000px !important",
         left: "0 !important",
         overflow: "hidden !important",
         "-webkit-transform": "none !important",
         transform: "none !important",
         "-webkit-transition": "none !important",
         transition: "none !important"
      }, "magiczoom-reset-css"), c.addCSS(".magic-temporary-img img, .magic-temporary-img picture", {
         display: "inline-block !important",
         border: "0 !important",
         padding: "0 !important",
         "min-height": "0 !important",
         "min-width": "0 !important",
         "max-height": "none !important",
         "max-width": "none !important",
         "-webkit-transform": "none !important",
         transform: "none !important",
         "-webkit-transition": "none !important",
         transition: "none !important"
      }, "magiczoom-reset-css"), c.addCSS(".magic-temporary-img picture, .magic-temporary-img picture > img", {
         width: "auto !important",
         height: "auto !important"
      }, "magiczoom-reset-css"), c.browser.androidBrowser && c.addCSS(".mobile-magic .mz-expand .mz-expand-bg", {
         display: "none !important"
      }, "magiczoom-reset-css"), !c.browser.androidBrowser || "chrome" === c.browser.uaName && 44 !== c.browser.uaVersion || c.addCSS(".mobile-magic .mz-zoom-window.mz-magnifier, .mobile-magic .mz-zoom-window.mz-magnifier:before", {
         "border-radius": "0 !important"
      }, "magiczoom-reset-css"), h = c.$new("div", {
         class: "magic-hidden-wrapper"
      }).jAppendTo(document.body), n = c.browser.mobile && window.matchMedia && window.matchMedia("(max-device-width: 767px), (max-device-height: 767px)").matches, c.browser.mobile && c.extend(a, r), n && "ios" === c.browser.platform && (s = c.$new("div").jSetCss({
         position: "fixed",
         top: 0,
         width: 0,
         height: "100vh"
      }));
      for (var e = 0; e < d.length; e++) t[d[e]] && c.$F !== t[d[e]] && o.registerCallback(d[e], t[d[e]]);
      o.start(), f = !1
   }), window.MagicZoomPlus = window.MagicZoomPlus || {}, o
}();
! function (t, e, n, i) {
   "use strict";
   if (n)
      if (n.fn.fancybox) n.error("fancyBox already initialized");
      else {
         var o, s = {
               loop: !1,
               margin: [44, 0],
               gutter: 50,
               keyboard: !0,
               arrows: !0,
               infobar: !1,
               toolbar: !0,
               buttons: ["slideShow", "fullScreen", "thumbs", "close"],
               idleTime: 4,
               smallBtn: "auto",
               protect: !1,
               modal: !1,
               image: {
                  preload: "auto"
               },
               ajax: {
                  settings: {
                     data: {
                        fancybox: !0
                     }
                  }
               },
               iframe: {
                  tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                  preload: !0,
                  css: {},
                  attr: {
                     scrolling: "auto"
                  }
               },
               animationEffect: "zoom",
               animationDuration: 366,
               zoomOpacity: "auto",
               transitionEffect: "fade",
               transitionDuration: 366,
               slideClass: "",
               baseClass: "",
               baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><button data-fancybox-prev title="{{PREV}}" class="fancybox-button fancybox-button--left"></button><div class="fancybox-infobar__body"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><button data-fancybox-next title="{{NEXT}}" class="fancybox-button fancybox-button--right"></button></div><div class="fancybox-toolbar">{{BUTTONS}}</div><div class="fancybox-navigation"><button data-fancybox-prev title="{{PREV}}" class="fancybox-arrow fancybox-arrow--left" /><button data-fancybox-next title="{{NEXT}}" class="fancybox-arrow fancybox-arrow--right" /></div><div class="fancybox-stage"></div><div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div></div></div>',
               spinnerTpl: '<div class="fancybox-loading"></div>',
               errorTpl: '<div class="fancybox-error"><p>{{ERROR}}<p></div>',
               btnTpl: {
                  slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"></button>',
                  fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fullscreen" title="{{FULL_SCREEN}}"></button>',
                  thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"></button>',
                  close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"></button>',
                  smallBtn: '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"></button>'
               },
               parentEl: "body",
               autoFocus: !0,
               backFocus: !0,
               trapFocus: !0,
               fullScreen: {
                  autoStart: !1
               },
               touch: {
                  vertical: !0,
                  momentum: !0
               },
               hash: null,
               media: {},
               slideShow: {
                  autoStart: !1,
                  speed: 4e3
               },
               thumbs: {
                  autoStart: !1,
                  hideOnClose: !0
               },
               onInit: n.noop,
               beforeLoad: n.noop,
               afterLoad: n.noop,
               beforeShow: n.noop,
               afterShow: n.noop,
               beforeClose: n.noop,
               afterClose: n.noop,
               onActivate: n.noop,
               onDeactivate: n.noop,
               clickContent: function (t, e) {
                  return "image" === t.type && "zoom"
               },
               clickSlide: "close",
               clickOutside: "close",
               dblclickContent: !1,
               dblclickSlide: !1,
               dblclickOutside: !1,
               mobile: {
                  clickContent: function (t, e) {
                     return "image" === t.type && "toggleControls"
                  },
                  clickSlide: function (t, e) {
                     return "image" === t.type ? "toggleControls" : "close"
                  },
                  dblclickContent: function (t, e) {
                     return "image" === t.type && "zoom"
                  },
                  dblclickSlide: function (t, e) {
                     return "image" === t.type && "zoom"
                  }
               },
               lang: "en",
               i18n: {
                  en: {
                     CLOSE: "Close",
                     NEXT: "Next",
                     PREV: "Previous",
                     ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                     PLAY_START: "Start slideshow",
                     PLAY_STOP: "Pause slideshow",
                     FULL_SCREEN: "Full screen",
                     THUMBS: "Thumbnails"
                  },
                  de: {
                     CLOSE: "Schliessen",
                     NEXT: "Weiter",
                     PREV: "ZurĂ¼ck",
                     ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es spĂ¤ter nochmal.",
                     PLAY_START: "Diaschau starten",
                     PLAY_STOP: "Diaschau beenden",
                     FULL_SCREEN: "Vollbild",
                     THUMBS: "Vorschaubilder"
                  }
               }
            },
            a = n(t),
            r = n(e),
            c = 0,
            l = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
               return t.setTimeout(e, 1e3 / 60)
            },
            h = function () {
               var t, n = e.createElement("fakeelement"),
                  i = {
                     transition: "transitionend",
                     OTransition: "oTransitionEnd",
                     MozTransition: "transitionend",
                     WebkitTransition: "webkitTransitionEnd"
                  };
               for (t in i)
                  if (void 0 !== n.style[t]) return i[t]
            }(),
            u = function (t) {
               return t && t.length && t[0].offsetHeight
            },
            d = function (t, i, o) {
               this.opts = n.extend(!0, {
                  index: o
               }, s, i || {}), i && n.isArray(i.buttons) && (this.opts.buttons = i.buttons), this.id = this.opts.id || ++c, this.group = [], this.currIndex = parseInt(this.opts.index, 10) || 0, this.prevIndex = null, this.prevPos = null, this.currPos = 0, this.firstRun = null, this.createGroup(t), this.group.length && (this.$lastFocus = n(e.activeElement).blur(), this.slides = {}, this.init(t))
            };
         n.extend(d.prototype, {
            init: function () {
               var t, e, i, o = this,
                  s = o.group[o.currIndex].opts;
               o.scrollTop = r.scrollTop(), o.scrollLeft = r.scrollLeft(), n.fancybox.getInstance() || n.fancybox.isMobile || "hidden" === n("body").css("overflow") || (t = n("body").width(), n("html").addClass("fancybox-enabled"), (t = n("body").width() - t) > 1 && n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar, .fancybox-enabled body { margin-right: ' + t + "px; }</style>")), i = "", n.each(s.buttons, function (t, e) {
                  i += s.btnTpl[e] || ""
               }), e = n(o.translate(o, s.baseTpl.replace("{{BUTTONS}}", i))).addClass("fancybox-is-hidden").attr("id", "fancybox-container-" + o.id).addClass(s.baseClass).data("FancyBox", o).prependTo(s.parentEl), o.$refs = {
                  container: e
               }, ["bg", "inner", "infobar", "toolbar", "stage", "caption"].forEach(function (t) {
                  o.$refs[t] = e.find(".fancybox-" + t)
               }), (!s.arrows || o.group.length < 2) && e.find(".fancybox-navigation").remove(), s.infobar || o.$refs.infobar.remove(), s.toolbar || o.$refs.toolbar.remove(), o.trigger("onInit"), o.activate(), o.jumpTo(o.currIndex)
            },
            translate: function (t, e) {
               var n = t.opts.i18n[t.opts.lang];
               return e.replace(/\{\{(\w+)\}\}/g, function (t, e) {
                  var i = n[e];
                  return void 0 === i ? t : i
               })
            },
            createGroup: function (t) {
               var e = this,
                  i = n.makeArray(t);
               n.each(i, function (t, i) {
                  var o, s, a, r, c = {},
                     l = {},
                     h = [];
                  n.isPlainObject(i) ? (c = i, l = i.opts || i) : "object" === n.type(i) && n(i).length ? (o = n(i), h = o.data(), l = "options" in h ? h.options : {}, l = "object" === n.type(l) ? l : {}, c.src = "src" in h ? h.src : l.src || o.attr("href"), ["width", "height", "thumb", "type", "filter"].forEach(function (t) {
                     t in h && (l[t] = h[t])
                  }), "srcset" in h && (l.image = {
                     srcset: h.srcset
                  }), l.$orig = o, c.type || c.src || (c.type = "inline", c.src = i)) : c = {
                     type: "html",
                     src: i + ""
                  }, c.opts = n.extend(!0, {}, e.opts, l), n.fancybox.isMobile && (c.opts = n.extend(!0, {}, c.opts, c.opts.mobile)), s = c.type || c.opts.type, a = c.src || "", !s && a && (a.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? s = "image" : a.match(/\.(pdf)((\?|#).*)?$/i) ? s = "pdf" : "#" === a.charAt(0) && (s = "inline")), c.type = s, c.index = e.group.length, c.opts.$orig && !c.opts.$orig.length && delete c.opts.$orig, !c.opts.$thumb && c.opts.$orig && (c.opts.$thumb = c.opts.$orig.find("img:first")), c.opts.$thumb && !c.opts.$thumb.length && delete c.opts.$thumb, "function" === n.type(c.opts.caption) ? c.opts.caption = c.opts.caption.apply(i, [e, c]) : "caption" in h && (c.opts.caption = h.caption), c.opts.caption = void 0 === c.opts.caption ? "" : c.opts.caption + "", "ajax" === s && (r = a.split(/\s+/, 2)).length > 1 && (c.src = r.shift(), c.opts.filter = r.shift()), "auto" == c.opts.smallBtn && (n.inArray(s, ["html", "inline", "ajax"]) > -1 ? (c.opts.toolbar = !1, c.opts.smallBtn = !0) : c.opts.smallBtn = !1), "pdf" === s && (c.type = "iframe", c.opts.iframe.preload = !1), c.opts.modal && (c.opts = n.extend(!0, c.opts, {
                     infobar: 0,
                     toolbar: 0,
                     smallBtn: 0,
                     keyboard: 0,
                     slideShow: 0,
                     fullScreen: 0,
                     thumbs: 0,
                     touch: 0,
                     clickContent: !1,
                     clickSlide: !1,
                     clickOutside: !1,
                     dblclickContent: !1,
                     dblclickSlide: !1,
                     dblclickOutside: !1
                  })), e.group.push(c)
               })
            },
            addEvents: function () {
               var i = this;
               i.removeEvents(), i.$refs.container.on("click.fb-close", "[data-fancybox-close]", function (t) {
                  t.stopPropagation(), t.preventDefault(), i.close(t)
               }).on("click.fb-prev touchend.fb-prev", "[data-fancybox-prev]", function (t) {
                  t.stopPropagation(), t.preventDefault(), i.previous()
               }).on("click.fb-next touchend.fb-next", "[data-fancybox-next]", function (t) {
                  t.stopPropagation(), t.preventDefault(), i.next()
               }), a.on("orientationchange.fb resize.fb", function (t) {
                  t && t.originalEvent && "resize" === t.originalEvent.type ? l(function () {
                     i.update()
                  }) : (i.$refs.stage.hide(), setTimeout(function () {
                     i.$refs.stage.show(), i.update()
                  }, 500))
               }), r.on("focusin.fb", function (t) {
                  var o = n.fancybox ? n.fancybox.getInstance() : null;
                  o.isClosing || !o.current || !o.current.opts.trapFocus || n(t.target).hasClass("fancybox-container") || n(t.target).is(e) || o && "fixed" !== n(t.target).css("position") && !o.$refs.container.has(t.target).length && (t.stopPropagation(), o.focus(), a.scrollTop(i.scrollTop).scrollLeft(i.scrollLeft))
               }), r.on("keydown.fb", function (t) {
                  var e = i.current,
                     o = t.keyCode || t.which;
                  if (e && e.opts.keyboard && !n(t.target).is("input") && !n(t.target).is("textarea")) return 8 === o || 27 === o ? (t.preventDefault(), void i.close(t)) : 37 === o || 38 === o ? (t.preventDefault(), void i.previous()) : 39 === o || 40 === o ? (t.preventDefault(), void i.next()) : void i.trigger("afterKeydown", t, o)
               }), i.group[i.currIndex].opts.idleTime && (i.idleSecondsCounter = 0, r.on("mousemove.fb-idle mouseenter.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function () {
                  i.idleSecondsCounter = 0, i.isIdle && i.showControls(), i.isIdle = !1
               }), i.idleInterval = t.setInterval(function () {
                  i.idleSecondsCounter++, i.idleSecondsCounter >= i.group[i.currIndex].opts.idleTime && (i.isIdle = !0, i.idleSecondsCounter = 0, i.hideControls())
               }, 1e3))
            },
            removeEvents: function () {
               a.off("orientationchange.fb resize.fb"), r.off("focusin.fb keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), this.idleInterval && (t.clearInterval(this.idleInterval), this.idleInterval = null)
            },
            previous: function (t) {
               return this.jumpTo(this.currPos - 1, t)
            },
            next: function (t) {
               return this.jumpTo(this.currPos + 1, t)
            },
            jumpTo: function (t, e, i) {
               var o, s, a, r, c, l, h, d = this,
                  f = d.group.length;
               if (!(d.isSliding || d.isClosing || d.isAnimating && d.firstRun)) {
                  if (t = parseInt(t, 10), !(s = d.current ? d.current.opts.loop : d.opts.loop) && (t < 0 || t >= f)) return !1;
                  if (o = d.firstRun = null === d.firstRun, !(f < 2 && !o && d.isSliding)) {
                     if (r = d.current, d.prevIndex = d.currIndex, d.prevPos = d.currPos, a = d.createSlide(t), f > 1 && ((s || a.index > 0) && d.createSlide(t - 1), (s || a.index < f - 1) && d.createSlide(t + 1)), d.current = a, d.currIndex = a.index, d.currPos = a.pos, d.trigger("beforeShow", o), d.updateControls(), l = n.fancybox.getTranslate(a.$slide), a.isMoved = (0 !== l.left || 0 !== l.top) && !a.$slide.hasClass("fancybox-animated"), a.forcedDuration = void 0, n.isNumeric(e) ? a.forcedDuration = e : e = a.opts[o ? "animationDuration" : "transitionDuration"], e = parseInt(e, 10), o) return a.opts.animationEffect && e && d.$refs.container.css("transition-duration", e + "ms"), d.$refs.container.removeClass("fancybox-is-hidden"), u(d.$refs.container), d.$refs.container.addClass("fancybox-is-open"), a.$slide.addClass("fancybox-slide--current"), d.loadSlide(a), void d.preload();
                     n.each(d.slides, function (t, e) {
                        n.fancybox.stop(e.$slide)
                     }), a.$slide.removeClass("fancybox-slide--next fancybox-slide--previous").addClass("fancybox-slide--current"), a.isMoved ? (c = Math.round(a.$slide.width()), n.each(d.slides, function (t, i) {
                        var o = i.pos - a.pos;
                        n.fancybox.animate(i.$slide, {
                           top: 0,
                           left: o * c + o * i.opts.gutter
                        }, e, function () {
                           i.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"), i.pos === d.currPos && (a.isMoved = !1, d.complete())
                        })
                     })) : d.$refs.stage.children().removeAttr("style"), a.isLoaded ? d.revealContent(a) : d.loadSlide(a), d.preload(), r.pos !== a.pos && (h = "fancybox-slide--" + (r.pos > a.pos ? "next" : "previous"), r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current fancybox-slide--next fancybox-slide--previous"), r.isComplete = !1, e && (a.isMoved || a.opts.transitionEffect) && (a.isMoved ? r.$slide.addClass(h) : (h = "fancybox-animated " + h + " fancybox-fx-" + a.opts.transitionEffect, n.fancybox.animate(r.$slide, h, e, function () {
                        r.$slide.removeClass(h).removeAttr("style")
                     }))))
                  }
               }
            },
            createSlide: function (t) {
               var e, i;
               return i = (i = t % this.group.length) < 0 ? this.group.length + i : i, !this.slides[t] && this.group[i] && (e = n('<div class="fancybox-slide"></div>').appendTo(this.$refs.stage), this.slides[t] = n.extend(!0, {}, this.group[i], {
                  pos: t,
                  $slide: e,
                  isLoaded: !1
               }), this.updateSlide(this.slides[t])), this.slides[t]
            },
            scaleToActual: function (t, e, i) {
               var o, s, a, r, c, l = this,
                  h = l.current,
                  u = h.$content,
                  d = parseInt(h.$slide.width(), 10),
                  f = parseInt(h.$slide.height(), 10),
                  p = h.width,
                  g = h.height;
               "image" != h.type || h.hasError || !u || l.isAnimating || (n.fancybox.stop(u), l.isAnimating = !0, t = void 0 === t ? .5 * d : t, e = void 0 === e ? .5 * f : e, r = p / (o = n.fancybox.getTranslate(u)).width, c = g / o.height, s = .5 * d - .5 * p, a = .5 * f - .5 * g, p > d && ((s = o.left * r - (t * r - t)) > 0 && (s = 0), s < d - p && (s = d - p)), g > f && ((a = o.top * c - (e * c - e)) > 0 && (a = 0), a < f - g && (a = f - g)), l.updateCursor(p, g), n.fancybox.animate(u, {
                  top: a,
                  left: s,
                  scaleX: r,
                  scaleY: c
               }, i || 330, function () {
                  l.isAnimating = !1
               }), l.SlideShow && l.SlideShow.isActive && l.SlideShow.stop())
            },
            scaleToFit: function (t) {
               var e, i = this,
                  o = i.current,
                  s = o.$content;
               "image" != o.type || o.hasError || !s || i.isAnimating || (n.fancybox.stop(s), i.isAnimating = !0, e = i.getFitPos(o), i.updateCursor(e.width, e.height), n.fancybox.animate(s, {
                  top: e.top,
                  left: e.left,
                  scaleX: e.width / s.width(),
                  scaleY: e.height / s.height()
               }, t || 330, function () {
                  i.isAnimating = !1
               }))
            },
            getFitPos: function (t) {
               var e, i, o, s, r, c = t.$content,
                  l = t.width,
                  h = t.height,
                  u = t.opts.margin;
               return !(!c || !c.length || !l && !h) && ("number" === n.type(u) && (u = [u, u]), 2 == u.length && (u = [u[0], u[1], u[0], u[1]]), a.width() < 800 && (u = [0, 0, 0, 0]), e = parseInt(this.$refs.stage.width(), 10) - (u[1] + u[3]), i = parseInt(this.$refs.stage.height(), 10) - (u[0] + u[2]), o = Math.min(1, e / l, i / h), s = Math.floor(o * l), r = Math.floor(o * h), {
                  top: Math.floor(.5 * (i - r)) + u[0],
                  left: Math.floor(.5 * (e - s)) + u[3],
                  width: s,
                  height: r
               })
            },
            update: function () {
               var t = this;
               n.each(t.slides, function (e, n) {
                  t.updateSlide(n)
               })
            },
            updateSlide: function (t) {
               var e = t.$content;
               e && (t.width || t.height) && (n.fancybox.stop(e), n.fancybox.setTranslate(e, this.getFitPos(t)), t.pos === this.currPos && this.updateCursor()), t.$slide.trigger("refresh"), this.trigger("onUpdate", t)
            },
            updateCursor: function (t, e) {
               var n = this.$refs.container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-drag fancybox-can-zoomOut");
               this.current && !this.isClosing && (this.isZoomable() ? (n.addClass("fancybox-is-zoomable"), (void 0 !== t && void 0 !== e ? t < this.current.width && e < this.current.height : this.isScaledDown()) ? n.addClass("fancybox-can-zoomIn") : this.current.opts.touch ? n.addClass("fancybox-can-drag") : n.addClass("fancybox-can-zoomOut")) : this.current.opts.touch && n.addClass("fancybox-can-drag"))
            },
            isZoomable: function () {
               var t, e = this.current;
               if (e && !this.isClosing) return !!("image" === e.type && e.isLoaded && !e.hasError && ("zoom" === e.opts.clickContent || n.isFunction(e.opts.clickContent) && "zoom" === e.opts.clickContent(e)) && (t = this.getFitPos(e), e.width > t.width || e.height > t.height))
            },
            isScaledDown: function () {
               var t = this.current,
                  e = t.$content,
                  i = !1;
               return e && (i = (i = n.fancybox.getTranslate(e)).width < t.width || i.height < t.height), i
            },
            canPan: function () {
               var t = this.current,
                  e = t.$content,
                  n = !1;
               return e && (n = this.getFitPos(t), n = Math.abs(e.width() - n.width) > 1 || Math.abs(e.height() - n.height) > 1), n
            },
            loadSlide: function (t) {
               var e, i, o, s = this;
               if (!t.isLoading && !t.isLoaded) {
                  switch (t.isLoading = !0, s.trigger("beforeLoad", t), e = t.type, (i = t.$slide).off("refresh").trigger("onReset").addClass("fancybox-slide--" + (e || "unknown")).addClass(t.opts.slideClass), e) {
                     case "image":
                        s.setImage(t);
                        break;
                     case "iframe":
                        s.setIframe(t);
                        break;
                     case "html":
                        s.setContent(t, t.src || t.content);
                        break;
                     case "inline":
                        n(t.src).length ? s.setContent(t, n(t.src)) : s.setError(t);
                        break;
                     case "ajax":
                        s.showLoading(t), o = n.ajax(n.extend({}, t.opts.ajax.settings, {
                           url: t.src,
                           success: function (e, n) {
                              "success" === n && s.setContent(t, e)
                           },
                           error: function (e, n) {
                              e && "abort" !== n && s.setError(t)
                           }
                        })), i.one("onReset", function () {
                           o.abort()
                        });
                        break;
                     default:
                        s.setError(t)
                  }
                  return !0
               }
            },
            setImage: function (e) {
               var i, o, s, a, r = this,
                  c = e.opts.image.srcset;
               if (c) {
                  s = t.devicePixelRatio || 1, a = t.innerWidth * s, (o = c.split(",").map(function (t) {
                     var e = {};
                     return t.trim().split(/\s+/).forEach(function (t, n) {
                        var i = parseInt(t.substring(0, t.length - 1), 10);
                        if (0 === n) return e.url = t;
                        i && (e.value = i, e.postfix = t[t.length - 1])
                     }), e
                  })).sort(function (t, e) {
                     return t.value - e.value
                  });
                  for (var l = 0; l < o.length; l++) {
                     var h = o[l];
                     if ("w" === h.postfix && h.value >= a || "x" === h.postfix && h.value >= s) {
                        i = h;
                        break
                     }
                  }!i && o.length && (i = o[o.length - 1]), i && (e.src = i.url, e.width && e.height && "w" == i.postfix && (e.height = e.width / e.height * i.value, e.width = i.value))
               }
               e.$content = n('<div class="fancybox-image-wrap"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide), !1 !== e.opts.preload && e.opts.width && e.opts.height && (e.opts.thumb || e.opts.$thumb) ? (e.width = e.opts.width, e.height = e.opts.height, e.$ghost = n("<img />").one("error", function () {
                  n(this).remove(), e.$ghost = null, r.setBigImage(e)
               }).one("load", function () {
                  r.afterLoad(e), r.setBigImage(e)
               }).addClass("fancybox-image").appendTo(e.$content).attr("src", e.opts.thumb || e.opts.$thumb.attr("src"))) : r.setBigImage(e)
            },
            setBigImage: function (t) {
               var e = this,
                  i = n("<img />");
               t.$image = i.one("error", function () {
                  e.setError(t)
               }).one("load", function () {
                  clearTimeout(t.timouts), t.timouts = null, e.isClosing || (t.width = this.naturalWidth, t.height = this.naturalHeight, t.opts.image.srcset && i.attr("sizes", "100vw").attr("srcset", t.opts.image.srcset), e.hideLoading(t), t.$ghost ? t.timouts = setTimeout(function () {
                     t.timouts = null, t.$ghost.hide()
                  }, Math.min(300, Math.max(1e3, t.height / 1600))) : e.afterLoad(t))
               }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content), (i[0].complete || "complete" == i[0].readyState) && i[0].naturalWidth && i[0].naturalHeight ? i.trigger("load") : i[0].error ? i.trigger("error") : t.timouts = setTimeout(function () {
                  i[0].complete || t.hasError || e.showLoading(t)
               }, 100)
            },
            setIframe: function (t) {
               var e, i = this,
                  o = t.opts.iframe,
                  s = t.$slide;
               t.$content = n('<div class="fancybox-content' + (o.preload ? " fancybox-is-hidden" : "") + '"></div>').css(o.css).appendTo(s), e = n(o.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(o.attr).appendTo(t.$content), o.preload ? (i.showLoading(t), e.on("load.fb error.fb", function (e) {
                  this.isReady = 1, t.$slide.trigger("refresh"), i.afterLoad(t)
               }), s.on("refresh.fb", function () {
                  var n, i, s = t.$content,
                     a = o.css.width,
                     r = o.css.height;
                  if (1 === e[0].isReady) {
                     try {
                        i = e.contents().find("body")
                     } catch (t) {}
                     i && i.length && (void 0 === a && (n = e[0].contentWindow.document.documentElement.scrollWidth, a = Math.ceil(i.outerWidth(!0) + (s.width() - n)), a += s.outerWidth() - s.innerWidth()), void 0 === r && (r = Math.ceil(i.outerHeight(!0)), r += s.outerHeight() - s.innerHeight()), a && s.width(a), r && s.height(r)), s.removeClass("fancybox-is-hidden")
                  }
               })) : this.afterLoad(t), e.attr("src", t.src), !0 === t.opts.smallBtn && t.$content.prepend(i.translate(t, t.opts.btnTpl.smallBtn)), s.one("onReset", function () {
                  try {
                     n(this).find("iframe").hide().attr("src", "//about:blank")
                  } catch (t) {}
                  n(this).empty(), t.isLoaded = !1
               })
            },
            setContent: function (t, e) {
               var i;
               this.isClosing || (this.hideLoading(t), t.$slide.empty(), (i = e) && i.hasOwnProperty && i instanceof n && e.parent().length ? (e.parent(".fancybox-slide--inline").trigger("onReset"), t.$placeholder = n("<div></div>").hide().insertAfter(e), e.css("display", "inline-block")) : t.hasError || ("string" === n.type(e) && 3 === (e = n("<div>").append(n.trim(e)).contents())[0].nodeType && (e = n("<div>").html(e)), t.opts.filter && (e = n("<div>").html(e).find(t.opts.filter))), t.$slide.one("onReset", function () {
                  t.$placeholder && (t.$placeholder.after(e.hide()).remove(), t.$placeholder = null), t.$smallBtn && (t.$smallBtn.remove(), t.$smallBtn = null), t.hasError || (n(this).empty(), t.isLoaded = !1)
               }), t.$content = n(e).appendTo(t.$slide), t.opts.smallBtn && !t.$smallBtn && (t.$smallBtn = n(this.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content.filter("div").first())), this.afterLoad(t))
            },
            setError: function (t) {
               t.hasError = !0, t.$slide.removeClass("fancybox-slide--" + t.type), this.setContent(t, this.translate(t, t.opts.errorTpl))
            },
            showLoading: function (t) {
               (t = t || this.current) && !t.$spinner && (t.$spinner = n(this.opts.spinnerTpl).appendTo(t.$slide))
            },
            hideLoading: function (t) {
               (t = t || this.current) && t.$spinner && (t.$spinner.remove(), delete t.$spinner)
            },
            afterLoad: function (t) {
               this.isClosing || (t.isLoading = !1, t.isLoaded = !0, this.trigger("afterLoad", t), this.hideLoading(t), t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function (t) {
                  return 2 == t.button && t.preventDefault(), !0
               }), "image" === t.type && n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)), this.revealContent(t))
            },
            revealContent: function (t) {
               var e, i, o, s, a, r = this,
                  c = t.$slide,
                  l = !1;
               return e = t.opts[r.firstRun ? "animationEffect" : "transitionEffect"], o = t.opts[r.firstRun ? "animationDuration" : "transitionDuration"], o = parseInt(void 0 === t.forcedDuration ? o : t.forcedDuration, 10), !t.isMoved && t.pos === r.currPos && o || (e = !1), "zoom" !== e || t.pos === r.currPos && o && "image" === t.type && !t.hasError && (l = r.getThumbPos(t)) || (e = "fade"), "zoom" === e ? ((a = r.getFitPos(t)).scaleX = a.width / l.width, a.scaleY = a.height / l.height, delete a.width, delete a.height, "auto" == (s = t.opts.zoomOpacity) && (s = Math.abs(t.width / t.height - l.width / l.height) > .1), s && (l.opacity = .1, a.opacity = 1), n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), l), u(t.$content), void n.fancybox.animate(t.$content, a, o, function () {
                  r.complete()
               })) : (r.updateSlide(t), e ? (n.fancybox.stop(c), i = "fancybox-animated fancybox-slide--" + (t.pos > r.prevPos ? "next" : "previous") + " fancybox-fx-" + e, c.removeAttr("style").removeClass("fancybox-slide--current fancybox-slide--next fancybox-slide--previous").addClass(i), t.$content.removeClass("fancybox-is-hidden"), u(c), void n.fancybox.animate(c, "fancybox-slide--current", o, function (e) {
                  c.removeClass(i).removeAttr("style"), t.pos === r.currPos && r.complete()
               }, !0)) : (u(c), t.$content.removeClass("fancybox-is-hidden"), void(t.pos === r.currPos && r.complete())))
            },
            getThumbPos: function (i) {
               var o, s = !1,
                  a = i.opts.$thumb,
                  r = a ? a.offset() : 0;
               return r && a[0].ownerDocument === e && function (e) {
                  for (var i = e[0], o = i.getBoundingClientRect(), s = []; null !== i.parentElement;) "hidden" !== n(i.parentElement).css("overflow") && "auto" !== n(i.parentElement).css("overflow") || s.push(i.parentElement.getBoundingClientRect()), i = i.parentElement;
                  return s.every(function (t) {
                     var e = Math.min(o.right, t.right) - Math.max(o.left, t.left),
                        n = Math.min(o.bottom, t.bottom) - Math.max(o.top, t.top);
                     return e > 0 && n > 0
                  }) && o.bottom > 0 && o.right > 0 && o.left < n(t).width() && o.top < n(t).height()
               }(a) && (o = this.$refs.stage.offset(), s = {
                  top: r.top - o.top + parseFloat(a.css("border-top-width") || 0),
                  left: r.left - o.left + parseFloat(a.css("border-left-width") || 0),
                  width: a.width(),
                  height: a.height(),
                  scaleX: 1,
                  scaleY: 1
               }), s
            },
            complete: function () {
               var t = this,
                  i = t.current,
                  o = {};
               i.isMoved || !i.isLoaded || i.isComplete || (i.isComplete = !0, i.$slide.siblings().trigger("onReset"), u(i.$slide), i.$slide.addClass("fancybox-slide--complete"), n.each(t.slides, function (e, i) {
                  i.pos >= t.currPos - 1 && i.pos <= t.currPos + 1 ? o[i.pos] = i : i && (n.fancybox.stop(i.$slide), i.$slide.off().remove())
               }), t.slides = o, t.updateCursor(), t.trigger("afterShow"), (n(e.activeElement).is("[disabled]") || i.opts.autoFocus && "image" != i.type && "iframe" !== i.type) && t.focus())
            },
            preload: function () {
               var t, e;
               this.group.length < 2 || (t = this.slides[this.currPos + 1], e = this.slides[this.currPos - 1], t && "image" === t.type && this.loadSlide(t), e && "image" === e.type && this.loadSlide(e))
            },
            focus: function () {
               var t, e = this.current;
               this.isClosing || (e && e.isComplete && ((t = e.$slide.find("input[autofocus]:enabled:visible:first")).length || (t = e.$slide.find("button,:input,[tabindex],a").filter(":enabled:visible:first"))), (t = t && t.length ? t : this.$refs.container).focus())
            },
            activate: function () {
               var t = this;
               n(".fancybox-container").each(function () {
                  var e = n(this).data("FancyBox");
                  e && e.uid !== t.uid && !e.isClosing && e.trigger("onDeactivate")
               }), t.current && (t.$refs.container.index() > 0 && t.$refs.container.prependTo(e.body), t.updateControls()), t.trigger("onActivate"), t.addEvents()
            },
            close: function (t, e) {
               var i, o, s, a, r, c, u = this,
                  d = u.current,
                  f = function () {
                     u.cleanUp(t)
                  };
               return !u.isClosing && (u.isClosing = !0, !1 === u.trigger("beforeClose", t) ? (u.isClosing = !1, l(function () {
                  u.update()
               }), !1) : (u.removeEvents(), d.timouts && clearTimeout(d.timouts), s = d.$content, i = d.opts.animationEffect, o = n.isNumeric(e) ? e : i ? d.opts.animationDuration : 0, d.$slide.off(h).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"), d.$slide.siblings().trigger("onReset").remove(), o && u.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"), u.hideLoading(d), u.hideControls(), u.updateCursor(), "zoom" !== i || !0 !== t && s && o && "image" === d.type && !d.hasError && (c = u.getThumbPos(d)) || (i = "fade"), "zoom" === i ? (n.fancybox.stop(s), (r = n.fancybox.getTranslate(s)).width = r.width * r.scaleX, r.height = r.height * r.scaleY, "auto" == (a = d.opts.zoomOpacity) && (a = Math.abs(d.width / d.height - c.width / c.height) > .1), a && (c.opacity = 0), r.scaleX = r.width / c.width, r.scaleY = r.height / c.height, r.width = c.width, r.height = c.height, n.fancybox.setTranslate(d.$content, r), n.fancybox.animate(d.$content, c, o, f), !0) : (i && o ? !0 === t ? setTimeout(f, o) : n.fancybox.animate(d.$slide.removeClass("fancybox-slide--current"), "fancybox-animated fancybox-slide--previous fancybox-fx-" + i, o, f) : f(), !0)))
            },
            cleanUp: function (t) {
               var e;
               this.current.$slide.trigger("onReset"), this.$refs.container.empty().remove(), this.trigger("afterClose", t), this.$lastFocus && this.current.opts.backFocus && this.$lastFocus.focus(), this.current = null, (e = n.fancybox.getInstance()) ? e.activate() : (a.scrollTop(this.scrollTop).scrollLeft(this.scrollLeft), n("html").removeClass("fancybox-enabled"), n("#fancybox-style-noscroll").remove())
            },
            trigger: function (t, e) {
               var i, o = Array.prototype.slice.call(arguments, 1),
                  s = e && e.opts ? e : this.current;
               if (s ? o.unshift(s) : s = this, o.unshift(this), n.isFunction(s.opts[t]) && (i = s.opts[t].apply(s, o)), !1 === i) return i;
               "afterClose" === t ? r.trigger(t + ".fb", o) : this.$refs.container.trigger(t + ".fb", o)
            },
            updateControls: function (t) {
               var e = this.current,
                  i = e.index,
                  o = e.opts,
                  s = o.caption,
                  a = this.$refs.caption;
               e.$slide.trigger("refresh"), this.$caption = s && s.length ? a.html(s) : null, this.isHiddenControls || this.showControls(), n("[data-fancybox-count]").html(this.group.length), n("[data-fancybox-index]").html(i + 1), n("[data-fancybox-prev]").prop("disabled", !o.loop && i <= 0), n("[data-fancybox-next]").prop("disabled", !o.loop && i >= this.group.length - 1)
            },
            hideControls: function () {
               this.isHiddenControls = !0, this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav")
            },
            showControls: function () {
               var t = this.current ? this.current.opts : this.opts,
                  e = this.$refs.container;
               this.isHiddenControls = !1, this.idleSecondsCounter = 0, e.toggleClass("fancybox-show-toolbar", !(!t.toolbar || !t.buttons)).toggleClass("fancybox-show-infobar", !!(t.infobar && this.group.length > 1)).toggleClass("fancybox-show-nav", !!(t.arrows && this.group.length > 1)).toggleClass("fancybox-is-modal", !!t.modal), this.$caption ? e.addClass("fancybox-show-caption ") : e.removeClass("fancybox-show-caption")
            },
            toggleControls: function () {
               this.isHiddenControls ? this.showControls() : this.hideControls()
            }
         }), n.fancybox = {
            version: "3.1.28",
            defaults: s,
            getInstance: function (t) {
               var e = n('.fancybox-container:not(".fancybox-is-closing"):first').data("FancyBox"),
                  i = Array.prototype.slice.call(arguments, 1);
               return e instanceof d && ("string" === n.type(t) ? e[t].apply(e, i) : "function" === n.type(t) && t.apply(e, i), e)
            },
            open: function (t, e, n) {
               return new d(t, e, n)
            },
            close: function (t) {
               var e = this.getInstance();
               e && (e.close(), !0 === t && this.close())
            },
            destroy: function () {
               this.close(!0), r.off("click.fb-start")
            },
            isMobile: void 0 !== e.createTouch && /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent),
            use3d: (o = e.createElement("div"), t.getComputedStyle && t.getComputedStyle(o).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)),
            getTranslate: function (t) {
               var e;
               if (!t || !t.length) return !1;
               if ((e = (e = t.eq(0).css("transform")) && -1 !== e.indexOf("matrix") ? (e = (e = e.split("(")[1]).split(")")[0]).split(",") : []).length) e = (e = e.length > 10 ? [e[13], e[12], e[0], e[5]] : [e[5], e[4], e[0], e[3]]).map(parseFloat);
               else {
                  e = [0, 0, 1, 1];
                  var n = /\.*translate\((.*)px,(.*)px\)/i.exec(t.eq(0).attr("style"));
                  n && (e[0] = parseFloat(n[2]), e[1] = parseFloat(n[1]))
               }
               return {
                  top: e[0],
                  left: e[1],
                  scaleX: e[2],
                  scaleY: e[3],
                  opacity: parseFloat(t.css("opacity")),
                  width: t.width(),
                  height: t.height()
               }
            },
            setTranslate: function (t, e) {
               var n = "",
                  i = {};
               if (t && e) return void 0 === e.left && void 0 === e.top || (n = (void 0 === e.left ? t.position().left : e.left) + "px, " + (void 0 === e.top ? t.position().top : e.top) + "px", n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")"), void 0 !== e.scaleX && void 0 !== e.scaleY && (n = (n.length ? n + " " : "") + "scale(" + e.scaleX + ", " + e.scaleY + ")"), n.length && (i.transform = n), void 0 !== e.opacity && (i.opacity = e.opacity), void 0 !== e.width && (i.width = e.width), void 0 !== e.height && (i.height = e.height), t.css(i)
            },
            animate: function (t, e, i, o, s) {
               var a = h || "transitionend";
               n.isFunction(i) && (o = i, i = null), n.isPlainObject(e) || t.removeAttr("style"), t.on(a, function (i) {
                  (!i || !i.originalEvent || t.is(i.originalEvent.target) && "z-index" != i.originalEvent.propertyName) && (t.off(a), n.isPlainObject(e) ? void 0 !== e.scaleX && void 0 !== e.scaleY && (t.css("transition-duration", "0ms"), e.width = Math.round(t.width() * e.scaleX), e.height = Math.round(t.height() * e.scaleY), e.scaleX = 1, e.scaleY = 1, n.fancybox.setTranslate(t, e)) : !0 !== s && t.removeClass(e), n.isFunction(o) && o(i))
               }), n.isNumeric(i) && t.css("transition-duration", i + "ms"), n.isPlainObject(e) ? n.fancybox.setTranslate(t, e) : t.addClass(e), t.data("timer", setTimeout(function () {
                  t.trigger("transitionend")
               }, i + 16))
            },
            stop: function (t) {
               clearTimeout(t.data("timer")), t.off(h)
            }
         }, n.fn.fancybox = function (t) {
            var e;
            return (e = (t = t || {}).selector || !1) ? n("body").off("click.fb-start", e).on("click.fb-start", e, {
               options: t
            }, f) : this.off("click.fb-start").on("click.fb-start", {
               items: this,
               options: t
            }, f), this
         }, r.on("click.fb-start", "[data-fancybox]", f)
      }
   function f(t) {
      var e = t.currentTarget,
         i = t.data ? t.data.options : {},
         o = i.selector ? n(i.selector) : t.data ? t.data.items : [],
         s = n(e).attr("data-fancybox") || "",
         a = 0,
         r = n.fancybox.getInstance();
      t.preventDefault(), r && r.current.opts.$orig.is(e) || (s ? (a = (o = o.length ? o.filter('[data-fancybox="' + s + '"]') : n('[data-fancybox="' + s + '"]')).index(e)) < 0 && (a = 0) : o = [e], n.fancybox.open(o, i, a))
   }
}(window, document, window.jQuery || jQuery),
function (t) {
   "use strict";
   var e = function (e, n, i) {
         if (e) return i = i || "", "object" === t.type(i) && (i = t.param(i, !0)), t.each(n, function (t, n) {
            e = e.replace("$" + t, n || "")
         }), i.length && (e += (e.indexOf("?") > 0 ? "&" : "?") + i), e
      },
      n = {
         youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {
               autoplay: 1,
               autohide: 1,
               fs: 1,
               rel: 0,
               hd: 1,
               wmode: "transparent",
               enablejsapi: 1,
               html5: 1
            },
            paramPlace: 8,
            type: "iframe",
            url: "//www.youtube.com/embed/$4",
            thumb: "//img.youtube.com/vi/$4/hqdefault.jpg"
         },
         vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {
               autoplay: 1,
               hd: 1,
               show_title: 1,
               show_byline: 1,
               show_portrait: 0,
               fullscreen: 1,
               api: 1
            },
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
         },
         metacafe: {
            matcher: /metacafe.com\/watch\/(\d+)\/(.*)?/,
            type: "iframe",
            url: "//www.metacafe.com/embed/$1/?ap=1"
         },
         dailymotion: {
            matcher: /dailymotion.com\/video\/(.*)\/?(.*)/,
            params: {
               additionalInfos: 0,
               autoStart: 1
            },
            type: "iframe",
            url: "//www.dailymotion.com/embed/video/$1"
         },
         vine: {
            matcher: /vine.co\/v\/([a-zA-Z0-9\?\=\-]+)/,
            type: "iframe",
            url: "//vine.co/v/$1/embed/simple"
         },
         instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
         },
         gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function (t) {
               return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12]) + "&output=" + (t[12] && t[12].indexOf("layer=c") > 0 ? "svembed" : "embed")
            }
         },
         gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function (t) {
               return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
         }
      };
   t(document).on("onInit.fb", function (i, o) {
      t.each(o.group, function (i, o) {
         var s, a, r, c, l, h, u, d = o.src || "",
            f = !1;
         o.type || (s = t.extend(!0, {}, n, o.opts.media), t.each(s, function (n, i) {
            if (r = d.match(i.matcher), h = {}, u = n, r) {
               if (f = i.type, i.paramPlace && r[i.paramPlace]) {
                  "?" == (l = r[i.paramPlace])[0] && (l = l.substring(1)), l = l.split("&");
                  for (var s = 0; s < l.length; ++s) {
                     var p = l[s].split("=", 2);
                     2 == p.length && (h[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " ")))
                  }
               }
               return c = t.extend(!0, {}, i.params, o.opts[n], h), d = "function" === t.type(i.url) ? i.url.call(this, r, c, o) : e(i.url, r, c), a = "function" === t.type(i.thumb) ? i.thumb.call(this, r, c, o) : e(i.thumb, r), "vimeo" === u && (d = d.replace("&%23", "#")), !1
            }
         }), f ? (o.src = d, o.type = f, o.opts.thumb || o.opts.$thumb && o.opts.$thumb.length || (o.opts.thumb = a), "iframe" === f && (t.extend(!0, o.opts, {
            iframe: {
               preload: !1,
               attr: {
                  scrolling: "no"
               }
            }
         }), o.contentProvider = u, o.opts.slideClass += " fancybox-slide--" + ("gmap_place" == u || "gmap_search" == u ? "map" : "video"))) : o.type = "image")
      })
   })
}(window.jQuery),
function (t, e, n) {
   "use strict";
   var i = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
         return t.setTimeout(e, 1e3 / 60)
      },
      o = t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function (e) {
         t.clearTimeout(e)
      },
      s = function (e) {
         var n = [];
         for (var i in e = (e = e.originalEvent || e || t.e).touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e]) e[i].pageX ? n.push({
            x: e[i].pageX,
            y: e[i].pageY
         }) : e[i].clientX && n.push({
            x: e[i].clientX,
            y: e[i].clientY
         });
         return n
      },
      a = function (t, e, n) {
         return e && t ? "x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
      },
      r = function (t) {
         if (t.is("a,button,input,select,textarea,label") || n.isFunction(t.get(0).onclick) || t.data("selectable")) return !0;
         for (var e = 0, i = t[0].attributes, o = i.length; e < o; e++)
            if ("data-fancybox-" === i[e].nodeName.substr(0, 14)) return !0;
         return !1
      },
      c = function (e) {
         for (var n, i, o, s, a, r = !1; n = e.get(0), i = void 0, o = void 0, s = void 0, a = void 0, i = t.getComputedStyle(n)["overflow-y"], o = t.getComputedStyle(n)["overflow-x"], s = ("scroll" === i || "auto" === i) && n.scrollHeight > n.clientHeight, a = ("scroll" === o || "auto" === o) && n.scrollWidth > n.clientWidth, !(r = s || a) && (e = e.parent()).length && !e.hasClass("fancybox-stage") && !e.is("body"););
         return r
      },
      l = function (t) {
         this.instance = t, this.$bg = t.$refs.bg, this.$stage = t.$refs.stage, this.$container = t.$refs.container, this.destroy(), this.$container.on("touchstart.fb.touch mousedown.fb.touch", n.proxy(this, "ontouchstart"))
      };
   l.prototype.destroy = function () {
      this.$container.off(".fb.touch")
   }, l.prototype.ontouchstart = function (i) {
      var o = n(i.target),
         l = this.instance,
         h = l.current,
         u = h.$content,
         d = "touchstart" == i.type;
      if (d && this.$container.off("mousedown.fb.touch"), !h || this.instance.isAnimating || this.instance.isClosing) return i.stopPropagation(), void i.preventDefault();
      i.originalEvent && 2 == i.originalEvent.button || !o.length || r(o) || r(o.parent()) || i.originalEvent.clientX > o[0].clientWidth + o.offset().left || (this.startPoints = s(i), !this.startPoints || this.startPoints.length > 1 && l.isSliding || (this.$target = o, this.$content = u, this.canTap = !0, n(e).off(".fb.touch"), n(e).on(d ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", n.proxy(this, "ontouchend")), n(e).on(d ? "touchmove.fb.touch" : "mousemove.fb.touch", n.proxy(this, "ontouchmove")), (l.current.opts.touch || l.canPan()) && (o.is(this.$stage) || this.$stage.find(o).length) ? (i.stopPropagation(), n.fancybox.isMobile && (c(this.$target) || c(this.$target.parent())) || i.preventDefault(), this.canvasWidth = Math.round(h.$slide[0].clientWidth), this.canvasHeight = Math.round(h.$slide[0].clientHeight), this.startTime = (new Date).getTime(), this.distanceX = this.distanceY = this.distance = 0, this.isPanning = !1, this.isSwiping = !1, this.isZooming = !1, this.sliderStartPos = this.sliderLastPos || {
         top: 0,
         left: 0
      }, this.contentStartPos = n.fancybox.getTranslate(this.$content), this.contentLastPos = null, 1 !== this.startPoints.length || this.isZooming || (this.canTap = !l.isSliding, "image" === h.type && (this.contentStartPos.width > this.canvasWidth + 1 || this.contentStartPos.height > this.canvasHeight + 1) ? (n.fancybox.stop(this.$content), this.$content.css("transition-duration", "0ms"), this.isPanning = !0) : this.isSwiping = !0, this.$container.addClass("fancybox-controls--isGrabbing")), 2 !== this.startPoints.length || l.isAnimating || h.hasError || "image" !== h.type || !h.isLoaded && !h.$ghost || (this.isZooming = !0, this.isSwiping = !1, this.isPanning = !1, n.fancybox.stop(this.$content), this.$content.css("transition-duration", "0ms"), this.centerPointStartX = .5 * (this.startPoints[0].x + this.startPoints[1].x) - n(t).scrollLeft(), this.centerPointStartY = .5 * (this.startPoints[0].y + this.startPoints[1].y) - n(t).scrollTop(), this.percentageOfImageAtPinchPointX = (this.centerPointStartX - this.contentStartPos.left) / this.contentStartPos.width, this.percentageOfImageAtPinchPointY = (this.centerPointStartY - this.contentStartPos.top) / this.contentStartPos.height, this.startDistanceBetweenFingers = a(this.startPoints[0], this.startPoints[1]))) : o.is("img") && i.preventDefault()))
   }, l.prototype.ontouchmove = function (t) {
      if (this.newPoints = s(t), n.fancybox.isMobile && (c(this.$target) || c(this.$target.parent()))) return t.stopPropagation(), void(this.canTap = !1);
      if ((this.instance.current.opts.touch || this.instance.canPan()) && this.newPoints && this.newPoints.length && (this.distanceX = a(this.newPoints[0], this.startPoints[0], "x"), this.distanceY = a(this.newPoints[0], this.startPoints[0], "y"), this.distance = a(this.newPoints[0], this.startPoints[0]), this.distance > 0)) {
         if (!this.$target.is(this.$stage) && !this.$stage.find(this.$target).length) return;
         t.stopPropagation(), t.preventDefault(), this.isSwiping ? this.onSwipe() : this.isPanning ? this.onPan() : this.isZooming && this.onZoom()
      }
   }, l.prototype.onSwipe = function () {
      var e, s = this,
         a = s.isSwiping,
         r = s.sliderStartPos.left || 0;
      !0 === a ? Math.abs(s.distance) > 10 && (s.canTap = !1, s.instance.group.length < 2 && s.instance.opts.touch.vertical ? s.isSwiping = "y" : s.instance.isSliding || !1 === s.instance.opts.touch.vertical || "auto" === s.instance.opts.touch.vertical && n(t).width() > 800 ? s.isSwiping = "x" : (e = Math.abs(180 * Math.atan2(s.distanceY, s.distanceX) / Math.PI), s.isSwiping = e > 45 && e < 135 ? "y" : "x"), s.instance.isSliding = s.isSwiping, s.startPoints = s.newPoints, n.each(s.instance.slides, function (t, e) {
         n.fancybox.stop(e.$slide), e.$slide.css("transition-duration", "0ms"), e.inTransition = !1, e.pos === s.instance.current.pos && (s.sliderStartPos.left = n.fancybox.getTranslate(e.$slide).left)
      }), s.instance.SlideShow && s.instance.SlideShow.isActive && s.instance.SlideShow.stop()) : ("x" == a && (s.distanceX > 0 && (s.instance.group.length < 2 || 0 === s.instance.current.index && !s.instance.current.opts.loop) ? r += Math.pow(s.distanceX, .8) : s.distanceX < 0 && (s.instance.group.length < 2 || s.instance.current.index === s.instance.group.length - 1 && !s.instance.current.opts.loop) ? r -= Math.pow(-s.distanceX, .8) : r += s.distanceX), s.sliderLastPos = {
         top: "x" == a ? 0 : s.sliderStartPos.top + s.distanceY,
         left: r
      }, s.requestId && (o(s.requestId), s.requestId = null), s.requestId = i(function () {
         s.sliderLastPos && (n.each(s.instance.slides, function (t, e) {
            var i = e.pos - s.instance.currPos;
            n.fancybox.setTranslate(e.$slide, {
               top: s.sliderLastPos.top,
               left: s.sliderLastPos.left + i * s.canvasWidth + i * e.opts.gutter
            })
         }), s.$container.addClass("fancybox-is-sliding"))
      }))
   }, l.prototype.onPan = function () {
      var t, e, s, a = this;
      a.canTap = !1, t = a.contentStartPos.width > a.canvasWidth ? a.contentStartPos.left + a.distanceX : a.contentStartPos.left, e = a.contentStartPos.top + a.distanceY, (s = a.limitMovement(t, e, a.contentStartPos.width, a.contentStartPos.height)).scaleX = a.contentStartPos.scaleX, s.scaleY = a.contentStartPos.scaleY, a.contentLastPos = s, a.requestId && (o(a.requestId), a.requestId = null), a.requestId = i(function () {
         n.fancybox.setTranslate(a.$content, a.contentLastPos)
      })
   }, l.prototype.limitMovement = function (t, e, n, i) {
      var o, s, a, r, c = this.canvasWidth,
         l = this.canvasHeight,
         h = this.contentStartPos.left,
         u = this.contentStartPos.top,
         d = this.distanceX,
         f = this.distanceY;
      return o = Math.max(0, .5 * c - .5 * n), s = Math.max(0, .5 * l - .5 * i), a = Math.min(c - n, .5 * c - .5 * n), r = Math.min(l - i, .5 * l - .5 * i), n > c && (d > 0 && t > o && (t = o - 1 + Math.pow(-o + h + d, .8) || 0), d < 0 && t < a && (t = a + 1 - Math.pow(a - h - d, .8) || 0)), i > l && (f > 0 && e > s && (e = s - 1 + Math.pow(-s + u + f, .8) || 0), f < 0 && e < r && (e = r + 1 - Math.pow(r - u - f, .8) || 0)), {
         top: e,
         left: t
      }
   }, l.prototype.limitPosition = function (t, e, n, i) {
      var o = this.canvasWidth,
         s = this.canvasHeight;
      return t = n > o ? (t = t > 0 ? 0 : t) < o - n ? o - n : t : Math.max(0, o / 2 - n / 2), {
         top: e = i > s ? (e = e > 0 ? 0 : e) < s - i ? s - i : e : Math.max(0, s / 2 - i / 2),
         left: t
      }
   }, l.prototype.onZoom = function () {
      var e = this,
         s = e.contentStartPos.width,
         r = e.contentStartPos.height,
         c = e.contentStartPos.left,
         l = e.contentStartPos.top,
         h = a(e.newPoints[0], e.newPoints[1]) / e.startDistanceBetweenFingers,
         u = Math.floor(s * h),
         d = Math.floor(r * h),
         f = (s - u) * e.percentageOfImageAtPinchPointX,
         p = (r - d) * e.percentageOfImageAtPinchPointY,
         g = (e.newPoints[0].x + e.newPoints[1].x) / 2 - n(t).scrollLeft(),
         b = (e.newPoints[0].y + e.newPoints[1].y) / 2 - n(t).scrollTop(),
         m = g - e.centerPointStartX,
         y = {
            top: l + (p + (b - e.centerPointStartY)),
            left: c + (f + m),
            scaleX: e.contentStartPos.scaleX * h,
            scaleY: e.contentStartPos.scaleY * h
         };
      e.canTap = !1, e.newWidth = u, e.newHeight = d, e.contentLastPos = y, e.requestId && (o(e.requestId), e.requestId = null), e.requestId = i(function () {
         n.fancybox.setTranslate(e.$content, e.contentLastPos)
      })
   }, l.prototype.ontouchend = function (t) {
      var i = Math.max((new Date).getTime() - this.startTime, 1),
         a = this.isSwiping,
         r = this.isPanning,
         c = this.isZooming;
      if (this.endPoints = s(t), this.$container.removeClass("fancybox-controls--isGrabbing"), n(e).off(".fb.touch"), this.requestId && (o(this.requestId), this.requestId = null), this.isSwiping = !1, this.isPanning = !1, this.isZooming = !1, this.canTap) return this.onTap(t);
      this.speed = 366, this.velocityX = this.distanceX / i * .5, this.velocityY = this.distanceY / i * .5, this.speedX = Math.max(.5 * this.speed, Math.min(1.5 * this.speed, 1 / Math.abs(this.velocityX) * this.speed)), r ? this.endPanning() : c ? this.endZooming() : this.endSwiping(a)
   }, l.prototype.endSwiping = function (t) {
      var e = !1;
      this.instance.isSliding = !1, this.sliderLastPos = null, "y" == t && Math.abs(this.distanceY) > 50 ? (n.fancybox.animate(this.instance.current.$slide, {
         top: this.sliderStartPos.top + this.distanceY + 150 * this.velocityY,
         opacity: 0
      }, 150), e = this.instance.close(!0, 300)) : "x" == t && this.distanceX > 50 && this.instance.group.length > 1 ? e = this.instance.previous(this.speedX) : "x" == t && this.distanceX < -50 && this.instance.group.length > 1 && (e = this.instance.next(this.speedX)), !1 !== e || "x" != t && "y" != t || this.instance.jumpTo(this.instance.current.index, 150), this.$container.removeClass("fancybox-is-sliding")
   }, l.prototype.endPanning = function () {
      var t, e, i;
      this.contentLastPos && (!1 === this.instance.current.opts.touch.momentum ? (t = this.contentLastPos.left, e = this.contentLastPos.top) : (t = this.contentLastPos.left + this.velocityX * this.speed, e = this.contentLastPos.top + this.velocityY * this.speed), (i = this.limitPosition(t, e, this.contentStartPos.width, this.contentStartPos.height)).width = this.contentStartPos.width, i.height = this.contentStartPos.height, n.fancybox.animate(this.$content, i, 330))
   }, l.prototype.endZooming = function () {
      var t, e, i, o, s = this.instance.current,
         a = this.newWidth,
         r = this.newHeight;
      this.contentLastPos && (t = this.contentLastPos.left, o = {
         top: e = this.contentLastPos.top,
         left: t,
         width: a,
         height: r,
         scaleX: 1,
         scaleY: 1
      }, n.fancybox.setTranslate(this.$content, o), a < this.canvasWidth && r < this.canvasHeight ? this.instance.scaleToFit(150) : a > s.width || r > s.height ? this.instance.scaleToActual(this.centerPointStartX, this.centerPointStartY, 150) : (i = this.limitPosition(t, e, a, r), n.fancybox.setTranslate(this.content, n.fancybox.getTranslate(this.$content)), n.fancybox.animate(this.$content, i, 150)))
   }, l.prototype.onTap = function (t) {
      var e, i = this,
         o = n(t.target),
         a = i.instance,
         r = a.current,
         c = t && s(t) || i.startPoints,
         l = c[0] ? c[0].x - i.$stage.offset().left : 0,
         h = c[0] ? c[0].y - i.$stage.offset().top : 0,
         u = function (e) {
            var o = r.opts[e];
            if (n.isFunction(o) && (o = o.apply(a, [r, t])), o) switch (o) {
               case "close":
                  a.close(i.startEvent);
                  break;
               case "toggleControls":
                  a.toggleControls(!0);
                  break;
               case "next":
                  a.next();
                  break;
               case "nextOrClose":
                  a.group.length > 1 ? a.next() : a.close(i.startEvent);
                  break;
               case "zoom":
                  "image" == r.type && (r.isLoaded || r.$ghost) && (a.canPan() ? a.scaleToFit() : a.isScaledDown() ? a.scaleToActual(l, h) : a.group.length < 2 && a.close(i.startEvent))
            }
         };
      if (!(t.originalEvent && 2 == t.originalEvent.button || a.isSliding || l > o[0].clientWidth + o.offset().left)) {
         if (o.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) e = "Outside";
         else if (o.is(".fancybox-slide")) e = "Slide";
         else {
            if (!a.current.$content || !a.current.$content.has(t.target).length) return;
            e = "Content"
         }
         if (i.tapped) {
            if (clearTimeout(i.tapped), i.tapped = null, Math.abs(l - i.tapX) > 50 || Math.abs(h - i.tapY) > 50 || a.isSliding) return this;
            u("dblclick" + e)
         } else i.tapX = l, i.tapY = h, r.opts["dblclick" + e] && r.opts["dblclick" + e] !== r.opts["click" + e] ? i.tapped = setTimeout(function () {
            i.tapped = null, u("click" + e)
         }, 300) : u("click" + e);
         return this
      }
   }, n(e).on("onActivate.fb", function (t, e) {
      e && !e.Guestures && (e.Guestures = new l(e))
   }), n(e).on("beforeClose.fb", function (t, e) {
      e && e.Guestures && e.Guestures.destroy()
   })
}(window, document, window.jQuery),
function (t, e) {
   "use strict";
   var n = function (t) {
      this.instance = t, this.init()
   };
   e.extend(n.prototype, {
      timer: null,
      isActive: !1,
      $button: null,
      speed: 3e3,
      init: function () {
         var t = this;
         t.$button = t.instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function () {
            t.toggle()
         }), (t.instance.group.length < 2 || !t.instance.group[t.instance.currIndex].opts.slideShow) && t.$button.hide()
      },
      set: function () {
         var t = this;
         t.instance && t.instance.current && (t.instance.current.opts.loop || t.instance.currIndex < t.instance.group.length - 1) ? t.timer = setTimeout(function () {
            t.instance.next()
         }, t.instance.current.opts.slideShow.speed || t.speed) : (t.stop(), t.instance.idleSecondsCounter = 0, t.instance.showControls())
      },
      clear: function () {
         clearTimeout(this.timer), this.timer = null
      },
      start: function () {
         var t = this.instance.current;
         this.instance && t && (t.opts.loop || t.index < this.instance.group.length - 1) && (this.isActive = !0, this.$button.attr("title", t.opts.i18n[t.opts.lang].PLAY_STOP).addClass("fancybox-button--pause"), t.isComplete && this.set())
      },
      stop: function () {
         var t = this.instance.current;
         this.clear(), this.$button.attr("title", t.opts.i18n[t.opts.lang].PLAY_START).removeClass("fancybox-button--pause"), this.isActive = !1
      },
      toggle: function () {
         this.isActive ? this.stop() : this.start()
      }
   }), e(t).on({
      "onInit.fb": function (t, e) {
         e && !e.SlideShow && (e.SlideShow = new n(e))
      },
      "beforeShow.fb": function (t, e, n, i) {
         var o = e && e.SlideShow;
         i ? o && n.opts.slideShow.autoStart && o.start() : o && o.isActive && o.clear()
      },
      "afterShow.fb": function (t, e, n) {
         var i = e && e.SlideShow;
         i && i.isActive && i.set()
      },
      "afterKeydown.fb": function (n, i, o, s, a) {
         var r = i && i.SlideShow;
         !r || !o.opts.slideShow || 80 !== a && 32 !== a || e(t.activeElement).is("button,a,input") || (s.preventDefault(), r.toggle())
      },
      "beforeClose.fb onDeactivate.fb": function (t, e) {
         var n = e && e.SlideShow;
         n && n.stop()
      }
   }), e(t).on("visibilitychange", function () {
      var n = e.fancybox.getInstance(),
         i = n && n.SlideShow;
      i && i.isActive && (t.hidden ? i.clear() : i.set())
   })
}(document, window.jQuery),
function (t, e) {
   "use strict";
   var n = function () {
      var e, n, i, o = [
            ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
            ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
            ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
            ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
            ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]
         ],
         s = {};
      for (n = 0; n < o.length; n++)
         if ((e = o[n]) && e[1] in t) {
            for (i = 0; i < e.length; i++) s[o[0][i]] = e[i];
            return s
         } return !1
   }();
   if (n) {
      var i = {
         request: function (e) {
            (e = e || t.documentElement)[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)
         },
         exit: function () {
            t[n.exitFullscreen]()
         },
         toggle: function (e) {
            e = e || t.documentElement, this.isFullscreen() ? this.exit() : this.request(e)
         },
         isFullscreen: function () {
            return Boolean(t[n.fullscreenElement])
         },
         enabled: function () {
            return Boolean(t[n.fullscreenEnabled])
         }
      };
      e(t).on({
         "onInit.fb": function (t, e) {
            var n, o = e.$refs.toolbar.find("[data-fancybox-fullscreen]");
            e && !e.FullScreen && e.group[e.currIndex].opts.fullScreen ? ((n = e.$refs.container).on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function (t) {
               t.stopPropagation(), t.preventDefault(), i.toggle(n[0])
            }), e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && i.request(n[0]), e.FullScreen = i) : o.hide()
         },
         "afterKeydown.fb": function (t, e, n, i, o) {
            e && e.FullScreen && 70 === o && (i.preventDefault(), e.FullScreen.toggle(e.$refs.container[0]))
         },
         "beforeClose.fb": function (t) {
            t && t.FullScreen && i.exit()
         }
      }), e(t).on(n.fullscreenchange, function () {
         var t = e.fancybox.getInstance();
         t.current && "image" === t.current.type && t.isAnimating && (t.current.$content.css("transition", "none"), t.isAnimating = !1, t.update(!0, !0, 0)), t.trigger("onFullscreenChange", i.isFullscreen())
      })
   } else e && e.fancybox && (e.fancybox.defaults.btnTpl.fullScreen = !1)
}(document, window.jQuery),
function (t, e) {
   "use strict";
   var n = function (t) {
      this.instance = t, this.init()
   };
   e.extend(n.prototype, {
      $button: null,
      $grid: null,
      $list: null,
      isVisible: !1,
      init: function () {
         var t = this,
            e = t.instance.group[0],
            n = t.instance.group[1];
         t.$button = t.instance.$refs.toolbar.find("[data-fancybox-thumbs]"), t.instance.group.length > 1 && t.instance.group[t.instance.currIndex].opts.thumbs && ("image" == e.type || e.opts.thumb || e.opts.$thumb) && ("image" == n.type || n.opts.thumb || n.opts.$thumb) ? (t.$button.on("click", function () {
            t.toggle()
         }), t.isActive = !0) : (t.$button.hide(), t.isActive = !1)
      },
      create: function () {
         var t, n, i = this.instance;
         this.$grid = e('<div class="fancybox-thumbs"></div>').appendTo(i.$refs.container), t = "<ul>", e.each(i.group, function (e, i) {
            (n = i.opts.thumb || (i.opts.$thumb ? i.opts.$thumb.attr("src") : null)) || "image" !== i.type || (n = i.src), n && n.length && (t += '<li data-index="' + e + '" tabindex="0" class="fancybox-thumbs-loading"><img data-src="' + n + '" /></li>')
         }), t += "</ul>", this.$list = e(t).appendTo(this.$grid).on("click", "li", function () {
            i.jumpTo(e(this).data("index"))
         }), this.$list.find("img").hide().one("load", function () {
            var t, n, i, o, s = e(this).parent().removeClass("fancybox-thumbs-loading"),
               a = s.outerWidth(),
               r = s.outerHeight();
            t = this.naturalWidth || this.width, o = (n = this.naturalHeight || this.height) / r, (i = t / a) >= 1 && o >= 1 && (i > o ? (t /= o, n = r) : (t = a, n /= i)), e(this).css({
               width: Math.floor(t),
               height: Math.floor(n),
               "margin-top": Math.min(0, Math.floor(.3 * r - .3 * n)),
               "margin-left": Math.min(0, Math.floor(.5 * a - .5 * t))
            }).show()
         }).each(function () {
            this.src = e(this).data("src")
         })
      },
      focus: function () {
         this.instance.current && this.$list.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + this.instance.current.index + '"]').addClass("fancybox-thumbs-active").focus()
      },
      close: function () {
         this.$grid.hide()
      },
      update: function () {
         this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible), this.isVisible ? (this.$grid || this.create(), this.instance.trigger("onThumbsShow"), this.focus()) : this.$grid && this.instance.trigger("onThumbsHide"), this.instance.update()
      },
      hide: function () {
         this.isVisible = !1, this.update()
      },
      show: function () {
         this.isVisible = !0, this.update()
      },
      toggle: function () {
         this.isVisible = !this.isVisible, this.update()
      }
   }), e(t).on({
      "onInit.fb": function (t, e) {
         e && !e.Thumbs && (e.Thumbs = new n(e))
      },
      "beforeShow.fb": function (t, e, n, i) {
         var o = e && e.Thumbs;
         if (o && o.isActive) {
            if (n.modal) return o.$button.hide(), void o.hide();
            i && !0 === n.opts.thumbs.autoStart && o.show(), o.isVisible && o.focus()
         }
      },
      "afterKeydown.fb": function (t, e, n, i, o) {
         var s = e && e.Thumbs;
         s && s.isActive && 71 === o && (i.preventDefault(), s.toggle())
      },
      "beforeClose.fb": function (t, e) {
         var n = e && e.Thumbs;
         n && n.isVisible && !1 !== e.opts.thumbs.hideOnClose && n.close()
      }
   })
}(document, window.jQuery),
function (t, e, n) {
   "use strict";
   n.escapeSelector || (n.escapeSelector = function (t) {
      return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function (t, e) {
         return e ? "\0" === t ? "ï¿½" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
      })
   });
   var i = !0,
      o = null,
      s = null;

   function a() {
      var t = e.location.hash.substr(1),
         n = t.split("-"),
         i = n.length > 1 && /^\+?\d+$/.test(n[n.length - 1]) && parseInt(n.pop(-1), 10) || 1;
      return i < 1 && (i = 1), {
         hash: t,
         index: i,
         gallery: n.join("-")
      }
   }

   function r(t) {
      var e;
      "" !== t.gallery && ((e = n("[data-fancybox='" + n.escapeSelector(t.gallery) + "']").eq(t.index - 1)).length || (e = n("#" + n.escapeSelector(t.gallery))), e.length && (i = !1, e.trigger("click")))
   }

   function c(t) {
      var e;
      return !!t && ((e = t.current ? t.current.opts : t.opts).hash || (e.$orig ? e.$orig.data("fancybox") : ""))
   }
   n(function () {
      setTimeout(function () {
         !1 !== n.fancybox.defaults.hash && (n(t).on({
            "onInit.fb": function (t, e) {
               var n, i;
               !1 !== e.group[e.currIndex].opts.hash && (n = a(), (i = c(e)) && n.gallery && i == n.gallery && (e.currIndex = n.index - 1))
            },
            "beforeShow.fb": function (n, a, r) {
               var l;
               r && !1 !== r.opts.hash && (l = c(a)) && "" !== l && (e.location.hash.indexOf(l) < 0 && (a.opts.origHash = e.location.hash), o = l + (a.group.length > 1 ? "-" + (r.index + 1) : ""), "replaceState" in e.history ? (s && clearTimeout(s), s = setTimeout(function () {
                  e.history[i ? "pushState" : "replaceState"]({}, t.title, e.location.pathname + e.location.search + "#" + o), s = null, i = !1
               }, 300)) : e.location.hash = o)
            },
            "beforeClose.fb": function (i, a, r) {
               var l, h;
               s && clearTimeout(s), !1 !== r.opts.hash && (l = c(a), h = a && a.opts.origHash ? a.opts.origHash : "", l && "" !== l && ("replaceState" in history ? e.history.replaceState({}, t.title, e.location.pathname + e.location.search + h) : (e.location.hash = h, n(e).scrollTop(a.scrollTop).scrollLeft(a.scrollLeft))), o = null)
            }
         }), n(e).on("hashchange.fb", function () {
            var t = a();
            n.fancybox.getInstance() ? !o || o === t.gallery + "-" + t.index || 1 === t.index && o == t.gallery || (o = null, n.fancybox.close()) : "" !== t.gallery && r(t)
         }), r(a()))
      }, 50)
   })
}(document, window, window.jQuery);
! function (t, e) {
   "function" == typeof define && define.amd ? define("jquery-bridget/jquery-bridget", ["jquery"], function (i) {
      return e(t, i)
   }) : "object" == typeof module && module.exports ? module.exports = e(t, require("jquery")) : t.jQueryBridget = e(t, t.jQuery)
}(window, function (t, e) {
   "use strict";

   function i(i, r, a) {
      function h(t, e, n) {
         var o, r = "$()." + i + '("' + e + '")';
         return t.each(function (t, h) {
            var u = a.data(h, i);
            if (!u) return void s(i + " not initialized. Cannot call methods, i.e. " + r);
            var d = u[e];
            if (!d || "_" == e.charAt(0)) return void s(r + " is not a valid method");
            var l = d.apply(u, n);
            o = void 0 === o ? l : o
         }), void 0 !== o ? o : t
      }

      function u(t, e) {
         t.each(function (t, n) {
            var o = a.data(n, i);
            o ? (o.option(e), o._init()) : (o = new r(n, e), a.data(n, i, o))
         })
      }
      a = a || e || t.jQuery, a && (r.prototype.option || (r.prototype.option = function (t) {
         a.isPlainObject(t) && (this.options = a.extend(!0, this.options, t))
      }), a.fn[i] = function (t) {
         if ("string" == typeof t) {
            var e = o.call(arguments, 1);
            return h(this, t, e)
         }
         return u(this, t), this
      }, n(a))
   }

   function n(t) {
      !t || t && t.bridget || (t.bridget = i)
   }
   var o = Array.prototype.slice,
      r = t.console,
      s = "undefined" == typeof r ? function () {} : function (t) {
         r.error(t)
      };
   return n(e || t.jQuery), i
}),
function (t, e) {
   "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
}("undefined" != typeof window ? window : this, function () {
   function t() {}
   var e = t.prototype;
   return e.on = function (t, e) {
      if (t && e) {
         var i = this._events = this._events || {},
            n = i[t] = i[t] || [];
         return -1 == n.indexOf(e) && n.push(e), this
      }
   }, e.once = function (t, e) {
      if (t && e) {
         this.on(t, e);
         var i = this._onceEvents = this._onceEvents || {},
            n = i[t] = i[t] || {};
         return n[e] = !0, this
      }
   }, e.off = function (t, e) {
      var i = this._events && this._events[t];
      if (i && i.length) {
         var n = i.indexOf(e);
         return -1 != n && i.splice(n, 1), this
      }
   }, e.emitEvent = function (t, e) {
      var i = this._events && this._events[t];
      if (i && i.length) {
         i = i.slice(0), e = e || [];
         for (var n = this._onceEvents && this._onceEvents[t], o = 0; o < i.length; o++) {
            var r = i[o],
               s = n && n[r];
            s && (this.off(t, r), delete n[r]), r.apply(this, e)
         }
         return this
      }
   }, e.allOff = function () {
      delete this._events, delete this._onceEvents
   }, t
}),
function (t, e) {
   "function" == typeof define && define.amd ? define("get-size/get-size", e) : "object" == typeof module && module.exports ? module.exports = e() : t.getSize = e()
}(window, function () {
   "use strict";

   function t(t) {
      var e = parseFloat(t),
         i = -1 == t.indexOf("%") && !isNaN(e);
      return i && e
   }

   function e() {}

   function i() {
      for (var t = {
            width: 0,
            height: 0,
            innerWidth: 0,
            innerHeight: 0,
            outerWidth: 0,
            outerHeight: 0
         }, e = 0; u > e; e++) {
         var i = h[e];
         t[i] = 0
      }
      return t
   }

   function n(t) {
      var e = getComputedStyle(t);
      return e || a("Style returned " + e + ". Are you running this code in a hidden iframe on Firefox? See https://bit.ly/getsizebug1"), e
   }

   function o() {
      if (!d) {
         d = !0;
         var e = document.createElement("div");
         e.style.width = "200px", e.style.padding = "1px 2px 3px 4px", e.style.borderStyle = "solid", e.style.borderWidth = "1px 2px 3px 4px", e.style.boxSizing = "border-box";
         var i = document.body || document.documentElement;
         i.appendChild(e);
         var o = n(e);
         s = 200 == Math.round(t(o.width)), r.isBoxSizeOuter = s, i.removeChild(e)
      }
   }

   function r(e) {
      if (o(), "string" == typeof e && (e = document.querySelector(e)), e && "object" == typeof e && e.nodeType) {
         var r = n(e);
         if ("none" == r.display) return i();
         var a = {};
         a.width = e.offsetWidth, a.height = e.offsetHeight;
         for (var d = a.isBorderBox = "border-box" == r.boxSizing, l = 0; u > l; l++) {
            var c = h[l],
               f = r[c],
               m = parseFloat(f);
            a[c] = isNaN(m) ? 0 : m
         }
         var p = a.paddingLeft + a.paddingRight,
            g = a.paddingTop + a.paddingBottom,
            y = a.marginLeft + a.marginRight,
            v = a.marginTop + a.marginBottom,
            _ = a.borderLeftWidth + a.borderRightWidth,
            z = a.borderTopWidth + a.borderBottomWidth,
            E = d && s,
            b = t(r.width);
         b !== !1 && (a.width = b + (E ? 0 : p + _));
         var x = t(r.height);
         return x !== !1 && (a.height = x + (E ? 0 : g + z)), a.innerWidth = a.width - (p + _), a.innerHeight = a.height - (g + z), a.outerWidth = a.width + y, a.outerHeight = a.height + v, a
      }
   }
   var s, a = "undefined" == typeof console ? e : function (t) {
         console.error(t)
      },
      h = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"],
      u = h.length,
      d = !1;
   return r
}),
function (t, e) {
   "use strict";
   "function" == typeof define && define.amd ? define("desandro-matches-selector/matches-selector", e) : "object" == typeof module && module.exports ? module.exports = e() : t.matchesSelector = e()
}(window, function () {
   "use strict";
   var t = function () {
      var t = window.Element.prototype;
      if (t.matches) return "matches";
      if (t.matchesSelector) return "matchesSelector";
      for (var e = ["webkit", "moz", "ms", "o"], i = 0; i < e.length; i++) {
         var n = e[i],
            o = n + "MatchesSelector";
         if (t[o]) return o
      }
   }();
   return function (e, i) {
      return e[t](i)
   }
}),
function (t, e) {
   "function" == typeof define && define.amd ? define("fizzy-ui-utils/utils", ["desandro-matches-selector/matches-selector"], function (i) {
      return e(t, i)
   }) : "object" == typeof module && module.exports ? module.exports = e(t, require("desandro-matches-selector")) : t.fizzyUIUtils = e(t, t.matchesSelector)
}(window, function (t, e) {
   var i = {};
   i.extend = function (t, e) {
      for (var i in e) t[i] = e[i];
      return t
   }, i.modulo = function (t, e) {
      return (t % e + e) % e
   };
   var n = Array.prototype.slice;
   i.makeArray = function (t) {
      if (Array.isArray(t)) return t;
      if (null === t || void 0 === t) return [];
      var e = "object" == typeof t && "number" == typeof t.length;
      return e ? n.call(t) : [t]
   }, i.removeFrom = function (t, e) {
      var i = t.indexOf(e); - 1 != i && t.splice(i, 1)
   }, i.getParent = function (t, i) {
      for (; t.parentNode && t != document.body;)
         if (t = t.parentNode, e(t, i)) return t
   }, i.getQueryElement = function (t) {
      return "string" == typeof t ? document.querySelector(t) : t
   }, i.handleEvent = function (t) {
      var e = "on" + t.type;
      this[e] && this[e](t)
   }, i.filterFindElements = function (t, n) {
      t = i.makeArray(t);
      var o = [];
      return t.forEach(function (t) {
         if (t instanceof HTMLElement) {
            if (!n) return void o.push(t);
            e(t, n) && o.push(t);
            for (var i = t.querySelectorAll(n), r = 0; r < i.length; r++) o.push(i[r])
         }
      }), o
   }, i.debounceMethod = function (t, e, i) {
      i = i || 100;
      var n = t.prototype[e],
         o = e + "Timeout";
      t.prototype[e] = function () {
         var t = this[o];
         clearTimeout(t);
         var e = arguments,
            r = this;
         this[o] = setTimeout(function () {
            n.apply(r, e), delete r[o]
         }, i)
      }
   }, i.docReady = function (t) {
      var e = document.readyState;
      "complete" == e || "interactive" == e ? setTimeout(t) : document.addEventListener("DOMContentLoaded", t)
   }, i.toDashed = function (t) {
      return t.replace(/(.)([A-Z])/g, function (t, e, i) {
         return e + "-" + i
      }).toLowerCase()
   };
   var o = t.console;
   return i.htmlInit = function (e, n) {
      i.docReady(function () {
         var r = i.toDashed(n),
            s = "data-" + r,
            a = document.querySelectorAll("[" + s + "]"),
            h = document.querySelectorAll(".js-" + r),
            u = i.makeArray(a).concat(i.makeArray(h)),
            d = s + "-options",
            l = t.jQuery;
         u.forEach(function (t) {
            var i, r = t.getAttribute(s) || t.getAttribute(d);
            try {
               i = r && JSON.parse(r)
            } catch (a) {
               return void(o && o.error("Error parsing " + s + " on " + t.className + ": " + a))
            }
            var h = new e(t, i);
            l && l.data(t, n, h)
         })
      })
   }, i
}),
function (t, e) {
   "function" == typeof define && define.amd ? define("outlayer/item", ["ev-emitter/ev-emitter", "get-size/get-size"], e) : "object" == typeof module && module.exports ? module.exports = e(require("ev-emitter"), require("get-size")) : (t.Outlayer = {}, t.Outlayer.Item = e(t.EvEmitter, t.getSize))
}(window, function (t, e) {
   "use strict";

   function i(t) {
      for (var e in t) return !1;
      return e = null, !0
   }

   function n(t, e) {
      t && (this.element = t, this.layout = e, this.position = {
         x: 0,
         y: 0
      }, this._create())
   }

   function o(t) {
      return t.replace(/([A-Z])/g, function (t) {
         return "-" + t.toLowerCase()
      })
   }
   var r = document.documentElement.style,
      s = "string" == typeof r.transition ? "transition" : "WebkitTransition",
      a = "string" == typeof r.transform ? "transform" : "WebkitTransform",
      h = {
         WebkitTransition: "webkitTransitionEnd",
         transition: "transitionend"
      } [s],
      u = {
         transform: a,
         transition: s,
         transitionDuration: s + "Duration",
         transitionProperty: s + "Property",
         transitionDelay: s + "Delay"
      },
      d = n.prototype = Object.create(t.prototype);
   d.constructor = n, d._create = function () {
      this._transn = {
         ingProperties: {},
         clean: {},
         onEnd: {}
      }, this.css({
         position: "absolute"
      })
   }, d.handleEvent = function (t) {
      var e = "on" + t.type;
      this[e] && this[e](t)
   }, d.getSize = function () {
      this.size = e(this.element)
   }, d.css = function (t) {
      var e = this.element.style;
      for (var i in t) {
         var n = u[i] || i;
         e[n] = t[i]
      }
   }, d.getPosition = function () {
      var t = getComputedStyle(this.element),
         e = this.layout._getOption("originLeft"),
         i = this.layout._getOption("originTop"),
         n = t[e ? "left" : "right"],
         o = t[i ? "top" : "bottom"],
         r = parseFloat(n),
         s = parseFloat(o),
         a = this.layout.size; - 1 != n.indexOf("%") && (r = r / 100 * a.width), -1 != o.indexOf("%") && (s = s / 100 * a.height), r = isNaN(r) ? 0 : r, s = isNaN(s) ? 0 : s, r -= e ? a.paddingLeft : a.paddingRight, s -= i ? a.paddingTop : a.paddingBottom, this.position.x = r, this.position.y = s
   }, d.layoutPosition = function () {
      var t = this.layout.size,
         e = {},
         i = this.layout._getOption("originLeft"),
         n = this.layout._getOption("originTop"),
         o = i ? "paddingLeft" : "paddingRight",
         r = i ? "left" : "right",
         s = i ? "right" : "left",
         a = this.position.x + t[o];
      e[r] = this.getXValue(a), e[s] = "";
      var h = n ? "paddingTop" : "paddingBottom",
         u = n ? "top" : "bottom",
         d = n ? "bottom" : "top",
         l = this.position.y + t[h];
      e[u] = this.getYValue(l), e[d] = "", this.css(e), this.emitEvent("layout", [this])
   }, d.getXValue = function (t) {
      var e = this.layout._getOption("horizontal");
      return this.layout.options.percentPosition && !e ? t / this.layout.size.width * 100 + "%" : t + "px"
   }, d.getYValue = function (t) {
      var e = this.layout._getOption("horizontal");
      return this.layout.options.percentPosition && e ? t / this.layout.size.height * 100 + "%" : t + "px"
   }, d._transitionTo = function (t, e) {
      this.getPosition();
      var i = this.position.x,
         n = this.position.y,
         o = t == this.position.x && e == this.position.y;
      if (this.setPosition(t, e), o && !this.isTransitioning) return void this.layoutPosition();
      var r = t - i,
         s = e - n,
         a = {};
      a.transform = this.getTranslate(r, s), this.transition({
         to: a,
         onTransitionEnd: {
            transform: this.layoutPosition
         },
         isCleaning: !0
      })
   }, d.getTranslate = function (t, e) {
      var i = this.layout._getOption("originLeft"),
         n = this.layout._getOption("originTop");
      return t = i ? t : -t, e = n ? e : -e, "translate3d(" + t + "px, " + e + "px, 0)"
   }, d.goTo = function (t, e) {
      this.setPosition(t, e), this.layoutPosition()
   }, d.moveTo = d._transitionTo, d.setPosition = function (t, e) {
      this.position.x = parseFloat(t), this.position.y = parseFloat(e)
   }, d._nonTransition = function (t) {
      this.css(t.to), t.isCleaning && this._removeStyles(t.to);
      for (var e in t.onTransitionEnd) t.onTransitionEnd[e].call(this)
   }, d.transition = function (t) {
      if (!parseFloat(this.layout.options.transitionDuration)) return void this._nonTransition(t);
      var e = this._transn;
      for (var i in t.onTransitionEnd) e.onEnd[i] = t.onTransitionEnd[i];
      for (i in t.to) e.ingProperties[i] = !0, t.isCleaning && (e.clean[i] = !0);
      if (t.from) {
         this.css(t.from);
         var n = this.element.offsetHeight;
         n = null
      }
      this.enableTransition(t.to), this.css(t.to), this.isTransitioning = !0
   };
   var l = "opacity," + o(a);
   d.enableTransition = function () {
      if (!this.isTransitioning) {
         var t = this.layout.options.transitionDuration;
         t = "number" == typeof t ? t + "ms" : t, this.css({
            transitionProperty: l,
            transitionDuration: t,
            transitionDelay: this.staggerDelay || 0
         }), this.element.addEventListener(h, this, !1)
      }
   }, d.onwebkitTransitionEnd = function (t) {
      this.ontransitionend(t)
   }, d.onotransitionend = function (t) {
      this.ontransitionend(t)
   };
   var c = {
      "-webkit-transform": "transform"
   };
   d.ontransitionend = function (t) {
      if (t.target === this.element) {
         var e = this._transn,
            n = c[t.propertyName] || t.propertyName;
         if (delete e.ingProperties[n], i(e.ingProperties) && this.disableTransition(), n in e.clean && (this.element.style[t.propertyName] = "", delete e.clean[n]), n in e.onEnd) {
            var o = e.onEnd[n];
            o.call(this), delete e.onEnd[n]
         }
         this.emitEvent("transitionEnd", [this])
      }
   }, d.disableTransition = function () {
      this.removeTransitionStyles(), this.element.removeEventListener(h, this, !1), this.isTransitioning = !1
   }, d._removeStyles = function (t) {
      var e = {};
      for (var i in t) e[i] = "";
      this.css(e)
   };
   var f = {
      transitionProperty: "",
      transitionDuration: "",
      transitionDelay: ""
   };
   return d.removeTransitionStyles = function () {
      this.css(f)
   }, d.stagger = function (t) {
      t = isNaN(t) ? 0 : t, this.staggerDelay = t + "ms"
   }, d.removeElem = function () {
      this.element.parentNode.removeChild(this.element), this.css({
         display: ""
      }), this.emitEvent("remove", [this])
   }, d.remove = function () {
      return s && parseFloat(this.layout.options.transitionDuration) ? (this.once("transitionEnd", function () {
         this.removeElem()
      }), void this.hide()) : void this.removeElem()
   }, d.reveal = function () {
      delete this.isHidden, this.css({
         display: ""
      });
      var t = this.layout.options,
         e = {},
         i = this.getHideRevealTransitionEndProperty("visibleStyle");
      e[i] = this.onRevealTransitionEnd, this.transition({
         from: t.hiddenStyle,
         to: t.visibleStyle,
         isCleaning: !0,
         onTransitionEnd: e
      })
   }, d.onRevealTransitionEnd = function () {
      this.isHidden || this.emitEvent("reveal")
   }, d.getHideRevealTransitionEndProperty = function (t) {
      var e = this.layout.options[t];
      if (e.opacity) return "opacity";
      for (var i in e) return i
   }, d.hide = function () {
      this.isHidden = !0, this.css({
         display: ""
      });
      var t = this.layout.options,
         e = {},
         i = this.getHideRevealTransitionEndProperty("hiddenStyle");
      e[i] = this.onHideTransitionEnd, this.transition({
         from: t.visibleStyle,
         to: t.hiddenStyle,
         isCleaning: !0,
         onTransitionEnd: e
      })
   }, d.onHideTransitionEnd = function () {
      this.isHidden && (this.css({
         display: "none"
      }), this.emitEvent("hide"))
   }, d.destroy = function () {
      this.css({
         position: "",
         left: "",
         right: "",
         top: "",
         bottom: "",
         transition: "",
         transform: ""
      })
   }, n
}),
function (t, e) {
   "use strict";
   "function" == typeof define && define.amd ? define("outlayer/outlayer", ["ev-emitter/ev-emitter", "get-size/get-size", "fizzy-ui-utils/utils", "./item"], function (i, n, o, r) {
      return e(t, i, n, o, r)
   }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter"), require("get-size"), require("fizzy-ui-utils"), require("./item")) : t.Outlayer = e(t, t.EvEmitter, t.getSize, t.fizzyUIUtils, t.Outlayer.Item)
}(window, function (t, e, i, n, o) {
   "use strict";

   function r(t, e) {
      var i = n.getQueryElement(t);
      if (!i) return void(h && h.error("Bad element for " + this.constructor.namespace + ": " + (i || t)));
      this.element = i, u && (this.$element = u(this.element)), this.options = n.extend({}, this.constructor.defaults), this.option(e);
      var o = ++l;
      this.element.outlayerGUID = o, c[o] = this, this._create();
      var r = this._getOption("initLayout");
      r && this.layout()
   }

   function s(t) {
      function e() {
         t.apply(this, arguments)
      }
      return e.prototype = Object.create(t.prototype), e.prototype.constructor = e, e
   }

   function a(t) {
      if ("number" == typeof t) return t;
      var e = t.match(/(^\d*\.?\d*)(\w*)/),
         i = e && e[1],
         n = e && e[2];
      if (!i.length) return 0;
      i = parseFloat(i);
      var o = m[n] || 1;
      return i * o
   }
   var h = t.console,
      u = t.jQuery,
      d = function () {},
      l = 0,
      c = {};
   r.namespace = "outlayer", r.Item = o, r.defaults = {
      containerStyle: {
         position: "relative"
      },
      initLayout: !0,
      originLeft: !0,
      originTop: !0,
      resize: !0,
      resizeContainer: !0,
      transitionDuration: "0.4s",
      hiddenStyle: {
         opacity: 0,
         transform: "scale(0.001)"
      },
      visibleStyle: {
         opacity: 1,
         transform: "scale(1)"
      }
   };
   var f = r.prototype;
   n.extend(f, e.prototype), f.option = function (t) {
      n.extend(this.options, t)
   }, f._getOption = function (t) {
      var e = this.constructor.compatOptions[t];
      return e && void 0 !== this.options[e] ? this.options[e] : this.options[t]
   }, r.compatOptions = {
      initLayout: "isInitLayout",
      horizontal: "isHorizontal",
      layoutInstant: "isLayoutInstant",
      originLeft: "isOriginLeft",
      originTop: "isOriginTop",
      resize: "isResizeBound",
      resizeContainer: "isResizingContainer"
   }, f._create = function () {
      this.reloadItems(), this.stamps = [], this.stamp(this.options.stamp), n.extend(this.element.style, this.options.containerStyle);
      var t = this._getOption("resize");
      t && this.bindResize()
   }, f.reloadItems = function () {
      this.items = this._itemize(this.element.children)
   }, f._itemize = function (t) {
      for (var e = this._filterFindItemElements(t), i = this.constructor.Item, n = [], o = 0; o < e.length; o++) {
         var r = e[o],
            s = new i(r, this);
         n.push(s)
      }
      return n
   }, f._filterFindItemElements = function (t) {
      return n.filterFindElements(t, this.options.itemSelector)
   }, f.getItemElements = function () {
      return this.items.map(function (t) {
         return t.element
      })
   }, f.layout = function () {
      this._resetLayout(), this._manageStamps();
      var t = this._getOption("layoutInstant"),
         e = void 0 !== t ? t : !this._isLayoutInited;
      this.layoutItems(this.items, e), this._isLayoutInited = !0
   }, f._init = f.layout, f._resetLayout = function () {
      this.getSize()
   }, f.getSize = function () {
      this.size = i(this.element)
   }, f._getMeasurement = function (t, e) {
      var n, o = this.options[t];
      o ? ("string" == typeof o ? n = this.element.querySelector(o) : o instanceof HTMLElement && (n = o), this[t] = n ? i(n)[e] : o) : this[t] = 0
   }, f.layoutItems = function (t, e) {
      t = this._getItemsForLayout(t), this._layoutItems(t, e), this._postLayout()
   }, f._getItemsForLayout = function (t) {
      return t.filter(function (t) {
         return !t.isIgnored
      })
   }, f._layoutItems = function (t, e) {
      if (this._emitCompleteOnItems("layout", t), t && t.length) {
         var i = [];
         t.forEach(function (t) {
            var n = this._getItemLayoutPosition(t);
            n.item = t, n.isInstant = e || t.isLayoutInstant, i.push(n)
         }, this), this._processLayoutQueue(i)
      }
   }, f._getItemLayoutPosition = function () {
      return {
         x: 0,
         y: 0
      }
   }, f._processLayoutQueue = function (t) {
      this.updateStagger(), t.forEach(function (t, e) {
         this._positionItem(t.item, t.x, t.y, t.isInstant, e)
      }, this)
   }, f.updateStagger = function () {
      var t = this.options.stagger;
      return null === t || void 0 === t ? void(this.stagger = 0) : (this.stagger = a(t), this.stagger)
   }, f._positionItem = function (t, e, i, n, o) {
      n ? t.goTo(e, i) : (t.stagger(o * this.stagger), t.moveTo(e, i))
   }, f._postLayout = function () {
      this.resizeContainer()
   }, f.resizeContainer = function () {
      var t = this._getOption("resizeContainer");
      if (t) {
         var e = this._getContainerSize();
         e && (this._setContainerMeasure(e.width, !0), this._setContainerMeasure(e.height, !1))
      }
   }, f._getContainerSize = d, f._setContainerMeasure = function (t, e) {
      if (void 0 !== t) {
         var i = this.size;
         i.isBorderBox && (t += e ? i.paddingLeft + i.paddingRight + i.borderLeftWidth + i.borderRightWidth : i.paddingBottom + i.paddingTop + i.borderTopWidth + i.borderBottomWidth), t = Math.max(t, 0), this.element.style[e ? "width" : "height"] = t + "px"
      }
   }, f._emitCompleteOnItems = function (t, e) {
      function i() {
         o.dispatchEvent(t + "Complete", null, [e])
      }

      function n() {
         s++, s == r && i()
      }
      var o = this,
         r = e.length;
      if (!e || !r) return void i();
      var s = 0;
      e.forEach(function (e) {
         e.once(t, n)
      })
   }, f.dispatchEvent = function (t, e, i) {
      var n = e ? [e].concat(i) : i;
      if (this.emitEvent(t, n), u)
         if (this.$element = this.$element || u(this.element), e) {
            var o = u.Event(e);
            o.type = t, this.$element.trigger(o, i)
         } else this.$element.trigger(t, i)
   }, f.ignore = function (t) {
      var e = this.getItem(t);
      e && (e.isIgnored = !0)
   }, f.unignore = function (t) {
      var e = this.getItem(t);
      e && delete e.isIgnored
   }, f.stamp = function (t) {
      t = this._find(t), t && (this.stamps = this.stamps.concat(t), t.forEach(this.ignore, this))
   }, f.unstamp = function (t) {
      t = this._find(t), t && t.forEach(function (t) {
         n.removeFrom(this.stamps, t), this.unignore(t)
      }, this)
   }, f._find = function (t) {
      return t ? ("string" == typeof t && (t = this.element.querySelectorAll(t)), t = n.makeArray(t)) : void 0
   }, f._manageStamps = function () {
      this.stamps && this.stamps.length && (this._getBoundingRect(), this.stamps.forEach(this._manageStamp, this))
   }, f._getBoundingRect = function () {
      var t = this.element.getBoundingClientRect(),
         e = this.size;
      this._boundingRect = {
         left: t.left + e.paddingLeft + e.borderLeftWidth,
         top: t.top + e.paddingTop + e.borderTopWidth,
         right: t.right - (e.paddingRight + e.borderRightWidth),
         bottom: t.bottom - (e.paddingBottom + e.borderBottomWidth)
      }
   }, f._manageStamp = d, f._getElementOffset = function (t) {
      var e = t.getBoundingClientRect(),
         n = this._boundingRect,
         o = i(t),
         r = {
            left: e.left - n.left - o.marginLeft,
            top: e.top - n.top - o.marginTop,
            right: n.right - e.right - o.marginRight,
            bottom: n.bottom - e.bottom - o.marginBottom
         };
      return r
   }, f.handleEvent = n.handleEvent, f.bindResize = function () {
      t.addEventListener("resize", this), this.isResizeBound = !0
   }, f.unbindResize = function () {
      t.removeEventListener("resize", this), this.isResizeBound = !1
   }, f.onresize = function () {
      this.resize()
   }, n.debounceMethod(r, "onresize", 100), f.resize = function () {
      this.isResizeBound && this.needsResizeLayout() && this.layout()
   }, f.needsResizeLayout = function () {
      var t = i(this.element),
         e = this.size && t;
      return e && t.innerWidth !== this.size.innerWidth
   }, f.addItems = function (t) {
      var e = this._itemize(t);
      return e.length && (this.items = this.items.concat(e)), e
   }, f.appended = function (t) {
      var e = this.addItems(t);
      e.length && (this.layoutItems(e, !0), this.reveal(e))
   }, f.prepended = function (t) {
      var e = this._itemize(t);
      if (e.length) {
         var i = this.items.slice(0);
         this.items = e.concat(i), this._resetLayout(), this._manageStamps(), this.layoutItems(e, !0), this.reveal(e), this.layoutItems(i)
      }
   }, f.reveal = function (t) {
      if (this._emitCompleteOnItems("reveal", t), t && t.length) {
         var e = this.updateStagger();
         t.forEach(function (t, i) {
            t.stagger(i * e), t.reveal()
         })
      }
   }, f.hide = function (t) {
      if (this._emitCompleteOnItems("hide", t), t && t.length) {
         var e = this.updateStagger();
         t.forEach(function (t, i) {
            t.stagger(i * e), t.hide()
         })
      }
   }, f.revealItemElements = function (t) {
      var e = this.getItems(t);
      this.reveal(e)
   }, f.hideItemElements = function (t) {
      var e = this.getItems(t);
      this.hide(e)
   }, f.getItem = function (t) {
      for (var e = 0; e < this.items.length; e++) {
         var i = this.items[e];
         if (i.element == t) return i
      }
   }, f.getItems = function (t) {
      t = n.makeArray(t);
      var e = [];
      return t.forEach(function (t) {
         var i = this.getItem(t);
         i && e.push(i)
      }, this), e
   }, f.remove = function (t) {
      var e = this.getItems(t);
      this._emitCompleteOnItems("remove", e), e && e.length && e.forEach(function (t) {
         t.remove(), n.removeFrom(this.items, t)
      }, this)
   }, f.destroy = function () {
      var t = this.element.style;
      t.height = "", t.position = "", t.width = "", this.items.forEach(function (t) {
         t.destroy()
      }), this.unbindResize();
      var e = this.element.outlayerGUID;
      delete c[e], delete this.element.outlayerGUID, u && u.removeData(this.element, this.constructor.namespace)
   }, r.data = function (t) {
      t = n.getQueryElement(t);
      var e = t && t.outlayerGUID;
      return e && c[e]
   }, r.create = function (t, e) {
      var i = s(r);
      return i.defaults = n.extend({}, r.defaults), n.extend(i.defaults, e), i.compatOptions = n.extend({}, r.compatOptions), i.namespace = t, i.data = r.data, i.Item = s(o), n.htmlInit(i, t), u && u.bridget && u.bridget(t, i), i
   };
   var m = {
      ms: 1,
      s: 1e3
   };
   return r.Item = o, r
}),
function (t, e) {
   "function" == typeof define && define.amd ? define(["outlayer/outlayer", "get-size/get-size"], e) : "object" == typeof module && module.exports ? module.exports = e(require("outlayer"), require("get-size")) : t.Masonry = e(t.Outlayer, t.getSize)
}(window, function (t, e) {
   var i = t.create("masonry");
   i.compatOptions.fitWidth = "isFitWidth";
   var n = i.prototype;
   return n._resetLayout = function () {
      this.getSize(), this._getMeasurement("columnWidth", "outerWidth"), this._getMeasurement("gutter", "outerWidth"), this.measureColumns(), this.colYs = [];
      for (var t = 0; t < this.cols; t++) this.colYs.push(0);
      this.maxY = 0, this.horizontalColIndex = 0
   }, n.measureColumns = function () {
      if (this.getContainerWidth(), !this.columnWidth) {
         var t = this.items[0],
            i = t && t.element;
         this.columnWidth = i && e(i).outerWidth || this.containerWidth
      }
      var n = this.columnWidth += this.gutter,
         o = this.containerWidth + this.gutter,
         r = o / n,
         s = n - o % n,
         a = s && 1 > s ? "round" : "floor";
      r = Math[a](r), this.cols = Math.max(r, 1)
   }, n.getContainerWidth = function () {
      var t = this._getOption("fitWidth"),
         i = t ? this.element.parentNode : this.element,
         n = e(i);
      this.containerWidth = n && n.innerWidth
   }, n._getItemLayoutPosition = function (t) {
      t.getSize();
      var e = t.size.outerWidth % this.columnWidth,
         i = e && 1 > e ? "round" : "ceil",
         n = Math[i](t.size.outerWidth / this.columnWidth);
      n = Math.min(n, this.cols);
      for (var o = this.options.horizontalOrder ? "_getHorizontalColPosition" : "_getTopColPosition", r = this[o](n, t), s = {
            x: this.columnWidth * r.col,
            y: r.y
         }, a = r.y + t.size.outerHeight, h = n + r.col, u = r.col; h > u; u++) this.colYs[u] = a;
      return s
   }, n._getTopColPosition = function (t) {
      var e = this._getTopColGroup(t),
         i = Math.min.apply(Math, e);
      return {
         col: e.indexOf(i),
         y: i
      }
   }, n._getTopColGroup = function (t) {
      if (2 > t) return this.colYs;
      for (var e = [], i = this.cols + 1 - t, n = 0; i > n; n++) e[n] = this._getColGroupY(n, t);
      return e
   }, n._getColGroupY = function (t, e) {
      if (2 > e) return this.colYs[t];
      var i = this.colYs.slice(t, t + e);
      return Math.max.apply(Math, i)
   }, n._getHorizontalColPosition = function (t, e) {
      var i = this.horizontalColIndex % this.cols,
         n = t > 1 && i + t > this.cols;
      i = n ? 0 : i;
      var o = e.size.outerWidth && e.size.outerHeight;
      return this.horizontalColIndex = o ? i + t : this.horizontalColIndex, {
         col: i,
         y: this._getColGroupY(i, t)
      }
   }, n._manageStamp = function (t) {
      var i = e(t),
         n = this._getElementOffset(t),
         o = this._getOption("originLeft"),
         r = o ? n.left : n.right,
         s = r + i.outerWidth,
         a = Math.floor(r / this.columnWidth);
      a = Math.max(0, a);
      var h = Math.floor(s / this.columnWidth);
      h -= s % this.columnWidth ? 0 : 1, h = Math.min(this.cols - 1, h);
      for (var u = this._getOption("originTop"), d = (u ? n.top : n.bottom) + i.outerHeight, l = a; h >= l; l++) this.colYs[l] = Math.max(d, this.colYs[l])
   }, n._getContainerSize = function () {
      this.maxY = Math.max.apply(Math, this.colYs);
      var t = {
         height: this.maxY
      };
      return this._getOption("fitWidth") && (t.width = this._getContainerFitWidth()), t
   }, n._getContainerFitWidth = function () {
      for (var t = 0, e = this.cols; --e && 0 === this.colYs[e];) t++;
      return (this.cols - t) * this.columnWidth - this.gutter
   }, n.needsResizeLayout = function () {
      var t = this.containerWidth;
      return this.getContainerWidth(), t != this.containerWidth
   }, i
});
ValidationFormSelf("validation-newsletter");
ValidationFormSelf("validation-cart");
ValidationFormSelf("validation-user");
ValidationFormSelf("validation-contact");
$.fn.exists = function () {
   return this.length;
};
NN_FRAMEWORK.BackToTop = function () {
   $(window).scroll(function () {
      if (!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
      if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
      else $('.scrollToTop').fadeOut();
   });
   $('body').on("click", ".scrollToTop,.back-to-top", function () {
      $('html, body').animate({
         scrollTop: 0
      }, 800);
      return false;
   });
};
NN_FRAMEWORK.AltImages = function () {
   $('img').each(function (index, element) {
      if (!$(this).attr('alt') || $(this).attr('alt') == '') {
         $(this).attr('alt', WEBSITE_NAME);
      }
   });
};
NN_FRAMEWORK.FixMenu = function () {
   $(window).scroll(function () {
      if ($(window).scrollTop() >= $('#fix').offset().top) {
         $(".block-menu").addClass('sticky');
      } else {
         $(".block-menu").removeClass('sticky');
      }
   });
};
NN_FRAMEWORK.Tools = function () {
   if ($(".toolbar").exists()) {
      $(".footer").css({
         marginBottom: $(".toolbar").innerHeight()
      });
   }
};
NN_FRAMEWORK.Tabs = function () {
   if ($(".ul-tabs-pro-detail").exists()) {
      $(".ul-tabs-pro-detail li").click(function () {
         var tabs = $(this).data("tabs");
         $(".content-tabs-pro-detail, .ul-tabs-pro-detail li").removeClass("active");
         $(this).addClass("active");
         $("." + tabs).addClass("active");
      });
   }
};
NN_FRAMEWORK.Cart = function () {
   function open_mini_cart() {
      var time = new Date();
      $.ajax({
         url: 'ajax/ajax_cart.php?v=' + time.getTime(),
         type: 'POST',
         data: {
            cmd: 'open-mini-cart'
         },
         dataType: 'JSON',
         success: function (res) {
            $.fancybox.close();
            $('.cart-panel-body').html(res.items);
            $('.count-cart,.count-cart2').html(res.max);
            $('.load-chiet-khau').html(res.text_chiet_khau);
            if (res.max == 0) {
               $('.cart-panel-footer').hide();
            } else {
               $('.text-temp-total').html(res.temp_total);
               $('.text-total').html(res.total);
               $('.cart-panel-footer').show();
            }
            $('body').addClass('overflow-hidden open-cart');
            $('.mini-cart').addClass('active');
         }
      });
   }

   function close_mini_cart(e) {
      $('.mini-cart').removeClass('active');
      setTimeout(function () {
         $('body').removeClass('overflow-hidden open-cart');
      }, 300);
   }
   $('.link-gio-hang').click(function (event) {
      event.preventDefault();
      open_mini_cart();
   });
   $(document).on('click', function (e) {
      if ($(e.target).is('.mini-cart.active')) {
         close_mini_cart();
      }
   });
   $('#close-cart').click(function (e) {
      event.preventDefault();
      close_mini_cart();
   });
   $("body").on("click", ".addcart", function () {
      var mau = ($(".color-pro-detail input:checked").val()) ? $(".color-pro-detail input:checked").val() : 0;
      var size = ($(".size-pro-detail input:checked").val()) ? $(".size-pro-detail input:checked").val() : 0;
      var id = $(this).data("id");
      var action = $(this).data("action");
      var quantity = ($(".qty-pro").val()) ? $(".qty-pro").val() : 1;
      if (id) {
         $.ajax({
            url: 'ajax/ajax_cart.php',
            type: "POST",
            dataType: 'json',
            async: false,
            data: {
               cmd: 'add-cart',
               id: id,
               mau: mau,
               size: size,
               quantity: quantity
            },
            success: function (result) {
               if (action == 'addnow') {
                  open_mini_cart();
               } else if (action == 'buynow') {
                  window.location = CONFIG_BASE + "gio-hang";
               }
            }
         });
      }
   });
   $("body").on("click", ".del-procart", function () {
      if (confirm(LANG['delete_product_from_cart'])) {
         var code = $(this).data("code");
         var ship = $(".price-ship").val();
         $.ajax({
            type: "POST",
            url: 'ajax/ajax_cart.php',
            dataType: 'json',
            data: {
               cmd: 'delete-cart',
               code: code,
               ship: ship
            },
            success: function (result) {
               $('.count-cart').html(result.max);
               if (result.max) {
                  $('.load-price-temp').html(result.tempText);
                  $('.load-price-total').html(result.totalText);
                  $(".procart-" + code).remove();
               } else {
                  window.location.reload();
                  $(".wrap-cart").html('<a href="" class="empty-cart text-decoration-none"><i class="fa fa-cart-arrow-down"></i><p>' + LANG['no_products_in_cart'] + '</p><span>' + LANG['back_to_home'] + '</span></a>');
               }
            }
         });
      }
   });
   $("body").on("click", ".counter-procart", function () {
      var $button = $(this);
      var input = $button.parent().find("input");
      var id = input.data('pid');
      var code = input.data('code');
      var oldValue = $button.parent().find("input").val();
      if ($button.text() == "+") quantity = parseFloat(oldValue) + 1;
      else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
      else quantity = 1;
      $button.parent().find("input").val(quantity);
      update_cart(id, code, quantity);
   });
   $("body").on("click", ".spin-arrow-box button", function (event) {
      let input = $(this).parent().find("input");
      let val = parseInt(input.val());
      if ($(this).hasClass('minus')) {
         input.val(val - 1 <= 1 ? 1 : val - 1);
      } else {
         input.val(val + 1);
      }
   });
   $("body").on("change", "input.quantity-procat", function () {
      var quantity = $(this).val();
      var id = $(this).data("pid");
      var code = $(this).data("code");
      update_cart(id, code, quantity);
   });
   if ($(".select-city-cart").exists()) {
      $(".select-city-cart").change(function () {
         var id = $(this).val();
         load_district(id);
         load_ship();
      });
   }
   if ($(".select-district-cart").exists()) {
      $(".select-district-cart").change(function () {
         var id = $(this).val();
         load_wards(id);
         load_ship();
      });
   }
   if ($(".select-wards-cart").exists()) {
      $(".select-wards-cart").change(function () {
         var id = $(this).val();
         load_ship(id);
      });
   }
   $("body").on('change', "input[name='payments']", function (event) {
      var id = $(this).val();
      var b = $(".method-content#method_" + id);
      var p = $(this).parent();
      $(".method-item label").css('margin-bottom', 0).removeClass('checked');
      p.addClass('checked');
      $(".method-content").slideUp('300');
      b.slideDown('300');
   });
   if ($(".color-pro-detail").exists()) {
      $(".color-pro-detail").click(function () {
         $(".color-pro-detail").removeClass("active");
         $(this).addClass("active");
         var id_mau = $("input[name=color-pro-detail]:checked").val();
         var idpro = $(this).data('idpro');
         $.ajax({
            url: 'ajax/ajax_color.php',
            type: "POST",
            dataType: 'html',
            data: {
               id_mau: id_mau,
               idpro: idpro
            },
            success: function (result) {
               if (result != '') {
                  $('.left-pro-detail').html(result);
                  MagicZoom.refresh("Zoom-1");
                  NN_FRAMEWORK.slickProductDetail();
               }
            }
         });
      });
   }
   if ($(".size-pro-detail").exists()) {
      $(".size-pro-detail").click(function () {
         $(".size-pro-detail").removeClass("active");
         $(this).addClass("active");
      });
   }
   if ($(".quantity-pro-detail span").exists()) {
      $(".quantity-pro-detail span").click(function () {
         var $button = $(this);
         var oldValue = $button.parent().find("input").val();
         if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
         } else {
            if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
            else var newVal = 1;
         }
         $button.parent().find("input").val(newVal);
      });
   }
   var vn_mb_phone_regex = /(0[7|5|8|9|3])+([0-9]{8})\b/;
   var email_regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   $.validator.addMethod('vn_mb_phone', function (value, element) {
      return this.optional(element) || vn_mb_phone_regex.test(value);
   }, LANG.txt_dienthoai_is_not_valid);
   $.validator.addMethod('email_re', function (value, element) {
      return this.optional(element) || email_regex.test(value);
   }, LANG.txt_email_is_not_valid);
   $("#form-checkout").validate({
      rules: {
         ten: {
            rangelength: [2, 50]
         },
         dienthoai: {
            vn_mb_phone: true,
         },
         email: {
            email: true,
            email_re: true
         },
      },
      messages: {
         ten: {
            required: LANG.txt_ten_required,
            rangelength: LANG.txt_ten_rangelength
         },
         dienthoai: {
            required: LANG.txt_dienthoai_required,
         },
         email: {
            email: LANG.txt_email_is_not_valid,
            required: LANG.txt_email_required,
            email_re: LANG.txt_email_is_not_valid
         },
         diachi: {
            required: LANG.txt_diachi_required
         },
      },
      errorElement: 'em',
   });
};
NN_FRAMEWORK.WowAnimation = function () {
   new WOW().init();
};
NN_FRAMEWORK.googleRecaptCha = function () {
   var trihoan_js = function (url, callback, id = '') {
      var script = document.createElement("script");
      script.type = "text/javascript";
      if (script.readyState) {
         script.onreadystatechange = function () {
            if (script.readyState === "loaded" || script.readyState === "complete") {
               script.onreadystatechange = null;
               if (typeof callback == "function") {
                  callback();
               }
            }
         };
      } else {
         if (typeof callback == "function") {
            script.onload = function () {
               callback();
            };
         }
      }
      script.src = url;
      if (id) {
         script.setAttribute('id', id);
      }
      document.getElementsByTagName("head")[0].appendChild(script);
   };
   if (GOOGLE_SITE_KEY != '') {
      var _flag = true;
      $("form").click(function (event) {
         if (_flag) {
            trihoan_js("https://www.google.com/recaptcha/api.js?render=${GOOGLE_SITE_KEY}", function () {
               grecaptcha.ready(function () {
                  grecaptcha.execute(GOOGLE_SITE_KEY, {
                     action: 'contact'
                  }).then((token) => {
                     var input = $("input[name='recaptcha_response']");
                     if (input.length) {
                        input.each(function (index, el) {
                           $(this).val(token);
                        });
                     }
                  });
               });
            });
            _flag = false;
         }
      });
   }
};
NN_FRAMEWORK.lazyLoad = function () {
   var ll = new LazyLoad({
      elements_selector: "img[data-src],iframe[data-src],[data-bg]"
   });
   $(document).ajaxComplete(function (event, xhr, settings) {
      ll.update();
   });
};
NN_FRAMEWORK.search = () => {
   $("body").on('submit', '.form-search', function (event) {
      event.preventDefault();
      var keywords = $(this).find('.txt_keywords');
      if (keywords.val()) {
         var k = keywords.val();
         window.location.href = encodeURI("${CONFIG_BASE}tim-kiem?keyword=${k}");
      } else {
         alert(LANG.no_keywords);
      }
   });
};
NN_FRAMEWORK.openFormSearch = () => {
   $(".btn-open-search").click(function (event) {
      event.stopPropagation();
      $(".block-search").toggleClass('active');
   });
   $(".block-search").click(function (event) {
      event.stopPropagation();
   });
   $(document).click(function (event) {
      $(".block-search").removeClass('active');
   });
   $(".btn-close-form-search").click(function (event) {
      $(".block-search").removeClass('active');
   });
};
NN_FRAMEWORK.slickProductDetail = () => {
   $("body").on("click", ".mz-thumb", function (event) {
      $(".mz-thumb").removeClass('mz-thumb-selected');
      $(this).addClass('mz-thumb-selected');
   });
   if ($(".slick-featured-product-photo").length) {
      $(".slick-featured-product-photo").slick({
         slidesToShow: 4,
         slidesToScroll: 1,
         arrows: true,
         prevArrow: "<div class='prevArrow slick-arrow-featured-product-photo'></div>",
         nextArrow: "<div class='nextArrow slick-arrow-featured-product-photo'></div>",
         dots: false,
         autoplay: false,
         autoplaySpeed: 3000,
         speed: 500,
         vertical: true,
         verticalSwiping: true,
         responsive: [{
            breakpoint: 501,
            settings: {
               vertical: false,
               verticalSwiping: false,
            }
         }, {
            breakpoint: 361,
            settings: {
               vertical: false,
               verticalSwiping: false,
               slidesToShow: 3
            }
         }]
      }).slick('slickGoTo', 1);
   }
};
NN_FRAMEWORK.jssor = function () {
   if ($("#jssor_1").exists()) {
      window.jssor_1_slider_init = function () {
         var jssor_1_SlideshowTransitions = [{
            $Duration: 500,
            $Delay: 12,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $SlideOut: true,
            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
            $Assembly: 2049,
            $Easing: $Jease$.$OutQuad
         }, {
            $Duration: 500,
            $Delay: 40,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $SlideOut: true,
            $Easing: $Jease$.$OutQuad
         }, {
            $Duration: 1000,
            x: -0.2,
            $Delay: 20,
            $Cols: 16,
            $SlideOut: true,
            $Formation: $JssorSlideshowFormations$.$FormationStraight,
            $Assembly: 260,
            $Easing: {
               $Left: $Jease$.$InOutExpo,
               $Opacity: $Jease$.$InOutQuad
            },
            $Opacity: 2,
            $Outside: true,
            $Round: {
               $Top: 0.5
            }
         }, {
            $Duration: 1600,
            y: -1,
            $Delay: 40,
            $Cols: 24,
            $SlideOut: true,
            $Formation: $JssorSlideshowFormations$.$FormationStraight,
            $Easing: $Jease$.$OutJump,
            $Round: {
               $Top: 1.5
            }
         }, {
            $Duration: 1200,
            x: 0.2,
            y: -0.1,
            $Delay: 16,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $During: {
               $Left: [0.3, 0.7],
               $Top: [0.3, 0.7]
            },
            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
            $Assembly: 260,
            $Easing: {
               $Left: $Jease$.$InWave,
               $Top: $Jease$.$InWave,
               $Clip: $Jease$.$OutQuad
            },
            $Round: {
               $Left: 1.3,
               $Top: 2.5
            }
         }, {
            $Duration: 1500,
            x: 0.3,
            y: -0.3,
            $Delay: 20,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $During: {
               $Left: [0.2, 0.8],
               $Top: [0.2, 0.8]
            },
            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
            $Assembly: 260,
            $Easing: {
               $Left: $Jease$.$InJump,
               $Top: $Jease$.$InJump,
               $Clip: $Jease$.$OutQuad
            },
            $Round: {
               $Left: 0.8,
               $Top: 2.5
            }
         }, {
            $Duration: 1500,
            x: 0.3,
            y: -0.3,
            $Delay: 20,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $During: {
               $Left: [0.1, 0.9],
               $Top: [0.1, 0.9]
            },
            $SlideOut: true,
            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
            $Assembly: 260,
            $Easing: {
               $Left: $Jease$.$InJump,
               $Top: $Jease$.$InJump,
               $Clip: $Jease$.$OutQuad
            },
            $Round: {
               $Left: 0.8,
               $Top: 2.5
            }
         }];
         var jssor_1_options = {
            $AutoPlay: 1,
            $FillMode: 2,
            $LazyLoading: 1,
            $SlideshowOptions: {
               $Class: $JssorSlideshowRunner$,
               $Transitions: jssor_1_SlideshowTransitions
            },
            $ArrowNavigatorOptions: {
               $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
               $Class: $JssorBulletNavigator$,
               $SpacingX: 16,
               $SpacingY: 16
            }
         };
         var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
         var MAX_WIDTH = 3000;

         function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
               var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
               jssor_1_slider.$ScaleWidth(expectedWidth);
            } else {
               window.setTimeout(ScaleSlider, 30);
            }
         }
         ScaleSlider();
         $Jssor$.$AddEvent(window, "load", ScaleSlider);
         $Jssor$.$AddEvent(window, "resize", ScaleSlider);
         $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      };
      jssor_1_slider_init();
   }
};
NN_FRAMEWORK.frontPage = () => {
   if ($(".slick-tin-tuc").length) {
      $(".slick-tin-tuc").slick({
         slidesToShow: 2,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         vertical: true,
         verticalSwiping: true,
         autoplaySpeed: 3000,
         speed: 500
      });
   }
   if ($(".slick-feedback").length) {
      $(".slick-feedback").slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         autoplaySpeed: 3000,
         speed: 500
      });
   }
   if ($(".slick-video").length) {
      $(".slick-video").slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         autoplaySpeed: 3000,
         speed: 500
      });
   }
   if ($(".slick-tieu_chi").length) {
      $(".slick-tieu_chi").slick({
         slidesToShow: 2,
         slidesToScroll: 1,
         arrows: false,
         dots: false,
         autoplay: true,
         autoplaySpeed: 3000,
         speed: 500,
         responsive: [{
            breakpoint: 993,
            settings: {
               slidesToShow: 1
            }
         }]
      });
   }
   $(".btn-ajax").click(function (event) {
      $(this).addClass('active').siblings().removeClass('active');
      $.ajax({
         url: 'ajax/ajax_fetch_data.php',
         type: 'GET',
         data: {
            id: $(this).attr('data-id')
         },
         success: (res) => {
            $(".show-result").html(res);
         }
      });
   });
   if ($(".btn-ajax").length) {
      $(".btn-ajax").eq(0).trigger('click');
   }
   $("#menu_mobile").mmenu({
      "extensions": ["theme-light", "position-front", "position-right"],
      "navbars": [{
         "position": "top",
         "content": ["prev", "title", "close"]
      }]
   });
   if ($(".grid-masonry").length) {
      $(".grid-masonry").masonry({
         itemSelector: ".grid-item",
         columnWidth: ".grid-item"
      });
   }
};
$(document).ready(function () {
   NN_FRAMEWORK.frontPage();
   NN_FRAMEWORK.WowAnimation();
   NN_FRAMEWORK.slickProductDetail();
   NN_FRAMEWORK.openFormSearch();
   NN_FRAMEWORK.search();
   NN_FRAMEWORK.jssor();
   NN_FRAMEWORK.lazyLoad();
   NN_FRAMEWORK.googleRecaptCha();
   NN_FRAMEWORK.Tools();
   NN_FRAMEWORK.AltImages();
   NN_FRAMEWORK.BackToTop();
   NN_FRAMEWORK.Tabs();
});