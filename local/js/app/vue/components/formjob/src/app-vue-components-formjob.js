import {Vue} from 'ui.vue';

Vue.component('app-vue-components-formjob', {
	props: {
		'jobid': {}
	},
	data()
	{
		return {
			uid: 'formjob',
			assets: {
				images: false,
			},
			state: {
				sended: false,
			},
			data: {
				phone: '',
				name: ''
			}
		}
	},
	created () {
		this.assets.images = APP.config.assets.images;
		this.uid = 'jobform_' + this.jobid + '_' + Math.floor(Math.random() * 999);
 	},
	methods: {
		showMessage(title,text) {
			let popup = new BX.PopupWindow("app-vue-components-form-message", null, {
					content: '<h2>'+title+'</h2><p>'+text+'</p>',
					autoHide: true,
					closeIcon: {right: "20px", top: "10px"},
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
			let self = this;
			
			
			
			const formData = new FormData(this.$refs.form);
			const bxFormData = new BX.ajax.FormData();
			// данные из формы
			for(let [name, value] of formData) {
				console.log(name, value);
				bxFormData.append(name, value);
			}
			// данные из модели
			for(let name in this.data) {
				let value = this.data['name'];
				console.log(name, value);
				bxFormData.append(name, value);
			}
			
			bxFormData.send(
					'/local/ajax.php',
					(data) => {
							if (data.status) {
								self.showMessage('Ошибка!','Попробуйте позже');
							} else {
								self.showMessage('Спасибо!','Наш менеджер свяжется с вами в ближайшее время');
								self.state.sended = true
							}
						},
					() => {},
					() => {self.showMessage('Ошибка!','Попробуйте позже')}
				);
			
//			BX.ajax({   
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
		<div class="form__grid">
			<div class="form__left">
				<div class="form__title">
					<p class="large">понравилась вакансия —</p>
					<h2>отправь резюме</h2>
				</div>
			</div>
			<div class="form__right"  v-if="!state.sended">
				<div class="form__thank">
					<div class="form__thank-image"><img v-if="assets.images" v-bind:src="assets.images+'/deco-part.png'" alt=""></div>
					<div class="form__thank-info">
						<p class="large">благодарим</p>
						<p>ваша заявка принята</p>
					</div>
					<div class="form__thank-close"></div>
				</div>
				<div class="form__container">
					<form action="#" ref="form">
						<input type="hidden" name="jobid" v-bind:value="jobid">
						<div class="input-container">
							<input type="text"  v-model="data.name" placeholder="Ваше имя">
							<div class="label">Ваше имя</div>
						</div>
						<div class="input-container">
							<input type="text" v-model="data.phone" placeholder="телефон">
							<div class="label">телефон</div>
						</div>
						<div class="input-container">
							<input name="file" type="file" v-bind:id="uid+'_file'" class="field field__file" multiple="">
							<label class="field__file-wrapper" v-bind:for="uid+'_file'">
								<div class="field__file-fake">прикрепить файл</div>
								<div class="field__file-button">...</div>
							</label>
						</div>
						<button class="btn btn--border" v-on:click.prevent="send" v-bind:disabled="!valid">Оправить</button>
						<p>Нажимая кнопку Отправить, я даю <a href="/legal/">согласие на Обработку персональных данных</a></p>
					</form>
				</div>
			</div>
		</div>
	`
});
