this.BX = this.BX || {};
(function (exports,ui_vue) {
	'use strict';

	function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

	function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

	function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
	ui_vue.Vue.component('app-vue-components-formjob', {
	  props: {
	    'jobid': {}
	  },
	  data: function data() {
	    return {
	      uid: 'formjob',
	      assets: {
	        images: false
	      },
	      state: {
	        sended: false
	      },
	      data: {
	        phone: '',
	        name: ''
	      }
	    };
	  },
	  created: function created() {
	    this.assets.images = APP.config.assets.images;
	    this.uid = 'jobform_' + this.jobid + '_' + Math.floor(Math.random() * 999);
	  },
	  methods: {
	    showMessage: function showMessage(title, text) {
	      var popup = new BX.PopupWindow("app-vue-components-form-message", null, {
	        content: '<h2>' + title + '</h2><p>' + text + '</p>',
	        autoHide: true,
	        closeIcon: {
	          right: "20px",
	          top: "10px"
	        },
	        zIndex: 0,
	        offsetLeft: 0,
	        offsetTop: 0,
	        draggable: {
	          restrict: false
	        },
	        overlay: {
	          backgroundColor: 'black',
	          opacity: '80'
	        },
	        events: {
	          onPopupClose: function onPopupClose() {
	            this.destroy();
	          }
	        }
	      });
	      popup.show();
	    },
	    send: function send() {
	      var self = this;
	      var formData = new FormData(this.$refs.form);
	      var bxFormData = new BX.ajax.FormData(); // данные из формы

	      var _iterator = _createForOfIteratorHelper(formData),
	          _step;

	      try {
	        for (_iterator.s(); !(_step = _iterator.n()).done;) {
	          var _step$value = babelHelpers.slicedToArray(_step.value, 2),
	              _name = _step$value[0],
	              _value = _step$value[1];

	          console.log(_name, _value);
	          bxFormData.append(_name, _value);
	        } // данные из модели

	      } catch (err) {
	        _iterator.e(err);
	      } finally {
	        _iterator.f();
	      }

	      for (var name in this.data) {
	        var value = this.data['name'];
	        console.log(name, value);
	        bxFormData.append(name, value);
	      }

	      bxFormData.send('/local/ajax.php', function (data) {
	        if (data.status) {
	          self.showMessage('Ошибка!', 'Попробуйте позже');
	        } else {
	          self.showMessage('Спасибо!', 'Наш менеджер свяжется с вами в ближайшее время');
	          self.state.sended = true;
	        }
	      }, function () {}, function () {
	        self.showMessage('Ошибка!', 'Попробуйте позже');
	      }); //			BX.ajax({   
	      //					url: '/local/ajax.php',
	      //					data: this.data,
	      //					method: 'POST',
	      //					dataType: 'json',
	      //					timeout: 30,
	      //					async: true,
	      //					processData: true,
	      //					scriptsRunFirst: true,
	      //					emulateOnload: true,
	      //					start: true,
	      //					cache: false,
	      //					onsuccess: function(data){
	      //						console.log(data)
	      //						
	      //						if (data.status) {
	      //							self.showMessage('Ошибка!','Попробуйте позже');
	      //                        } else {
	      //							self.showMessage('Спасибо!','Наш менеджер свяжется с вами в ближайшее время');
	      //							self.state.sended = true
	      //						}
	      //					},
	      //					onfailure: function(){
	      //						self.showMessage('Ошибка!','Попробуйте позже');
	      //					}
	      //				})
	    }
	  },
	  computed: {
	    valid: function valid() {
	      return !!(this.data.phone.replace(/[^\d]/g, '').length == 11 && this.data.name);
	    }
	  },
	  watch: {
	    'data.phone': function dataPhone(val, oval) {
	      if (val.length > oval.length) {
	        var phone = val.replace(/[^\d]/g, '').substring(0, 11);
	        var lenPhone = phone.length;
	        var tt = phone.split('');
	        if (lenPhone > 1) tt.splice(1, "", "(");
	        if (lenPhone > 3) tt.splice(5, "", ")");
	        if (lenPhone > 5) tt.splice(9, "", "-");
	        if (lenPhone > 7) tt.splice(12, "", "-");
	        var phone_formated = '+' + tt.join('');

	        if (val != phone_formated) {
	          this.data.phone = phone_formated;
	        }
	      }
	    }
	  },
	  template: "\n\t\t<div class=\"form__grid\">\n\t\t\t<div class=\"form__left\">\n\t\t\t\t<div class=\"form__title\">\n\t\t\t\t\t<p class=\"large\">\u043F\u043E\u043D\u0440\u0430\u0432\u0438\u043B\u0430\u0441\u044C \u0432\u0430\u043A\u0430\u043D\u0441\u0438\u044F \u2014</p>\n\t\t\t\t\t<h2>\u043E\u0442\u043F\u0440\u0430\u0432\u044C \u0440\u0435\u0437\u044E\u043C\u0435</h2>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"form__right\"  v-if=\"!state.sended\">\n\t\t\t\t<div class=\"form__thank\">\n\t\t\t\t\t<div class=\"form__thank-image\"><img v-if=\"assets.images\" v-bind:src=\"assets.images+'/deco-part.png'\" alt=\"\"></div>\n\t\t\t\t\t<div class=\"form__thank-info\">\n\t\t\t\t\t\t<p class=\"large\">\u0431\u043B\u0430\u0433\u043E\u0434\u0430\u0440\u0438\u043C</p>\n\t\t\t\t\t\t<p>\u0432\u0430\u0448\u0430 \u0437\u0430\u044F\u0432\u043A\u0430 \u043F\u0440\u0438\u043D\u044F\u0442\u0430</p>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"form__thank-close\"></div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"form__container\">\n\t\t\t\t\t<form action=\"#\" ref=\"form\">\n\t\t\t\t\t\t<input type=\"hidden\" name=\"jobid\" v-bind:value=\"jobid\">\n\t\t\t\t\t\t<div class=\"input-container\">\n\t\t\t\t\t\t\t<input type=\"text\"  v-model=\"data.name\" placeholder=\"\u0412\u0430\u0448\u0435 \u0438\u043C\u044F\">\n\t\t\t\t\t\t\t<div class=\"label\">\u0412\u0430\u0448\u0435 \u0438\u043C\u044F</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"input-container\">\n\t\t\t\t\t\t\t<input type=\"text\" v-model=\"data.phone\" placeholder=\"\u0442\u0435\u043B\u0435\u0444\u043E\u043D\">\n\t\t\t\t\t\t\t<div class=\"label\">\u0442\u0435\u043B\u0435\u0444\u043E\u043D</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"input-container\">\n\t\t\t\t\t\t\t<input name=\"file\" type=\"file\" v-bind:id=\"uid+'_file'\" class=\"field field__file\" multiple=\"\">\n\t\t\t\t\t\t\t<label class=\"field__file-wrapper\" v-bind:for=\"uid+'_file'\">\n\t\t\t\t\t\t\t\t<div class=\"field__file-fake\">\u043F\u0440\u0438\u043A\u0440\u0435\u043F\u0438\u0442\u044C \u0444\u0430\u0439\u043B</div>\n\t\t\t\t\t\t\t\t<div class=\"field__file-button\">...</div>\n\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<button class=\"btn btn--border\" v-on:click.prevent=\"send\" v-bind:disabled=\"!valid\">\u041E\u043F\u0440\u0430\u0432\u0438\u0442\u044C</button>\n\t\t\t\t\t\t<p>\u041D\u0430\u0436\u0438\u043C\u0430\u044F \u043A\u043D\u043E\u043F\u043A\u0443 \u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C, \u044F \u0434\u0430\u044E <a href=\"/legal/\">\u0441\u043E\u0433\u043B\u0430\u0441\u0438\u0435 \u043D\u0430 \u041E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0443 \u043F\u0435\u0440\u0441\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0434\u0430\u043D\u043D\u044B\u0445</a></p>\n\t\t\t\t\t</form>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t"
	});

}((this.BX[''] = this.BX[''] || {}),BX));
//# sourceMappingURL=script.js.map
