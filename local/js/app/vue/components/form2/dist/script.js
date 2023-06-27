this.BX = this.BX || {};
(function (exports,ui_vue) {
	'use strict';

	ui_vue.Vue.component('app-vue-components-form2', {
	  props: {
	    service: {
	      "default": ''
	    }
	  },
	  data: function data() {
	    return {
	      assets: {
	        images: false
	      },
	      state: {
	        sended: false,
	        showMessage: false
	      },
	      data: {
	        phone: '',
	        name: '',
	        service: ''
	      }
	    };
	  },
	  created: function created() {
	    this.assets.images = APP.config.assets.images;
	    this.data.service = this.service;
	  },
	  methods: {
	    showMessage: function showMessage(title, text) {
	      return;
	      var src = this.assets.images + '/deco-part.png';
	      var popup = new BX.PopupWindow("app-vue-components-form-message", null, {
	        content: "<div class=\"form__thank\">\n\t\t\t\t\t\t\t\t\t<div class=\"form__thank-image\"><img src=\"" + src + "\" alt=\"\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"form__thank-info\">\n\t\t\t\t\t\t\t\t\t  <p class=\"large\">" + title + "</p>\n\t\t\t\t\t\t\t\t\t  <p>" + text + "</p>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"form__thank-close\"></div>\n\t\t\t\t\t\t\t\t</div>",
	        autoHide: true,
	        closeIcon: {
	          right: "70px",
	          top: "90px",
	          opacity: 0
	        },
	        closeByEsc: true,
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
	      BX.ajax({
	        url: '/local/ajax.php',
	        data: this.data,
	        method: 'POST',
	        dataType: 'json',
	        timeout: 30,
	        async: true,
	        processData: true,
	        scriptsRunFirst: true,
	        emulateOnload: true,
	        start: true,
	        cache: false,
	        onsuccess: function onsuccess(data) {
	          self.state.showMessage = true;

	          if (data.status) {
	            self.showMessage('Ошибка!', 'Попробуйте позже');
	          } else {
	            self.showMessage('Спасибо!', 'Наш менеджер свяжется с вами в ближайшее время');
	            self.state.sended = true;
	          }
	        },
	        onfailure: function onfailure() {
	          self.showMessage('Ошибка!', 'Попробуйте позже');
	        }
	      });
	      this.data.phone = '';
	      this.data.name = '';
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
	  template: "\n\t\t<div class=\"form\" v-bind:class=\"{action:state.showMessage}\">\n\t\t\t<div class=\"zag\">\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u0435 \u043A\u043E\u043D\u0441\u0443\u043B\u044C\u0442\u0430\u0446\u0438\u044E</div>\n\t\t\t<div class=\"txt\">\u0438 \u0431\u0435\u0441\u043F\u043B\u0430\u0442\u043D\u044B\u0439 \u0440\u0430\u0441\u0447\u0451\u0442 \u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u0438 \u0432\u0430\u0448\u0435\u0433\u043E \u043F\u0440\u043E\u0435\u043A\u0442\u0430</div>\n\t\t\t<form action=\"#\">\n\t\t\t\t<div class=\"input-container\">\n\t\t\t\t\t<input type=\"text\"  v-model=\"data.name\" placeholder=\"\u0412\u0430\u0448\u0435 \u0438\u043C\u044F\">\n\t\t\t\t\t<div class=\"label\">\u0412\u0430\u0448\u0435 \u0438\u043C\u044F</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"input-container\">\n\t\t\t\t\t<input type=\"text\" v-model=\"data.phone\" placeholder=\"\u0442\u0435\u043B\u0435\u0444\u043E\u043D\">\n\t\t\t\t\t<div class=\"label\">\u0442\u0435\u043B\u0435\u0444\u043E\u043D</div>\n\t\t\t\t</div>\n\t\t\t\t<button class=\"btn btn--border\" v-on:click.prevent=\"send\" v-bind:disabled=\"!valid\">\u0436\u0434\u0443 \u0437\u0432\u043E\u043D\u043A\u0430</button>\n\t\t\t\t<p>\u041D\u0430\u0436\u0438\u043C\u0430\u044F \u043A\u043D\u043E\u043F\u043A\u0443 \u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C, \u044F \u0434\u0430\u044E <a href=\"/legal/\">\u0441\u043E\u0433\u043B\u0430\u0441\u0438\u0435 \u043D\u0430 \u041E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0443 \u043F\u0435\u0440\u0441\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0434\u0430\u043D\u043D\u044B\u0445</a></p>\n\t\t\t</form>\n\t\t\t\n\t\t\t<div class=\"form__thank\">\n\t\t\t\t<div class=\"form__thank-image\"><img v-bind:src=\"assets.images+'/deco-part.png'\" alt=\"\"></div>\n\t\t\t\t<div class=\"form__thank-info\">\n\t\t\t\t  <p class=\"large\">\u0421\u043F\u0430\u0441\u0438\u0431\u043E</p>\n\t\t\t\t  <p>\u041C\u044B \u0432\u0430\u043C \u043E\u0442\u0432\u0435\u0442\u0438\u043C \u0432 \u0442\u0435\u0447\u0435\u043D\u0438\u0435 15 \u043C\u0438\u043D</p>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"form__thank-close\" v-on:click=\"state.showMessage = false\"></div>\n\t\t\t</div>\n\t\t\t\n\t\t</div>\n\t"
	});

}((this.BX[''] = this.BX[''] || {}),BX));
//# sourceMappingURL=script.js.map
