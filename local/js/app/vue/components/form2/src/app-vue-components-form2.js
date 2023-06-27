import {Vue} from 'ui.vue';

Vue.component('app-vue-components-form2', {
	props: {
		service: {default: ''},
	},
	data()
	{
		return {
			assets: {
				images: false,
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
		}
	},
	created () {
		this.assets.images = APP.config.assets.images;
		this.data.service = this.service
	},
	methods: {
		showMessage(title,text) { return;
		
			let src = this.assets.images+'/deco-part.png'
			let popup = new BX.PopupWindow("app-vue-components-form-message", null, {
					content: `<div class="form__thank">
									<div class="form__thank-image"><img src="`+src+`" alt=""></div>
									<div class="form__thank-info">
									  <p class="large">`+title+`</p>
									  <p>`+text+`</p>
									</div>
									<div class="form__thank-close"></div>
								</div>`,
					autoHide: true,
					closeIcon: {right: "70px", top: "90px", opacity:0},
					closeByEsc : true,
					zIndex: 0,
					offsetLeft: 0,
					offsetTop: 0,
					draggable: {restrict: false},
					overlay: {backgroundColor: 'black', opacity: '80' },
					events: {
							onPopupClose: function () {
								this.destroy();
							}
						}
				});
			popup.show();
		},
		send() {
			let self = this
			
			
			
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
					onsuccess: function(data){
						self.state.showMessage=true;
						if (data.status) {
							self.showMessage('Ошибка!','Попробуйте позже');
                        } else {
							self.showMessage('Спасибо!','Наш менеджер свяжется с вами в ближайшее время');
							self.state.sended = true
						}
					},
					onfailure: function(){
						self.showMessage('Ошибка!','Попробуйте позже');
					}
				})
			this.data.phone='';
			this.data.name='';
		}
	},
	computed: {
		valid() {
			return !!(this.data.phone.replace(/[^\d]/g, '').length==11 && this.data.name);
		}
	},
	watch: {
		'data.phone' (val,oval) {
			
			if (val.length > oval.length) {
			
				let phone = val.replace(/[^\d]/g, '').substring(0,11);
				let lenPhone = phone.length;
				let tt = phone.split('');
				
				if (lenPhone > 1) tt.splice(1,"", "(");
				if (lenPhone > 3) tt.splice(5,"", ")");
				if (lenPhone > 5) tt.splice(9,"", "-");
				if (lenPhone > 7) tt.splice(12,"", "-");
				
				let phone_formated = '+'+tt.join('');
				
				if (val != phone_formated) {
					this.data.phone = phone_formated;
				}
			}
		}
	},template: `
		<div class="form" v-bind:class="{action:state.showMessage}">
			<div class="zag">Получите консультацию</div>
			<div class="txt">и бесплатный расчёт стоимости вашего проекта</div>
			<form action="#">
				<div class="input-container">
					<input type="text"  v-model="data.name" placeholder="Ваше имя">
					<div class="label">Ваше имя</div>
				</div>
				<div class="input-container">
					<input type="text" v-model="data.phone" placeholder="телефон">
					<div class="label">телефон</div>
				</div>
				<button class="btn btn--border" v-on:click.prevent="send" v-bind:disabled="!valid">жду звонка</button>
				<p>Нажимая кнопку Отправить, я даю <a href="/legal/">согласие на Обработку персональных данных</a></p>
			</form>
			
			<div class="form__thank">
				<div class="form__thank-image"><img v-bind:src="assets.images+'/deco-part.png'" alt=""></div>
				<div class="form__thank-info">
				  <p class="large">Спасибо</p>
				  <p>Мы вам ответим в течение 15 мин</p>
				</div>
				<div class="form__thank-close" v-on:click="state.showMessage = false"></div>
			</div>
			
		</div>
	`
});