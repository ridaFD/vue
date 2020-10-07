Vue.component('message', {
	
	props: ['title', 'body'],

	data() {

		return {

			isVisible: true
		};
	},

	template: `

		<article class="message" v-show="isVisible">
		  <div class="message-header">

		    {{ title }}

		    <button class="delete" aria-label="delete" @click="isVisible = false"></button>
		  </div>

		  <div class="message-body">

		  	{{ body }}

		  </div>
		</article>
	`,

	methods: {

		// Because this method is easy we can do it inline in the article tag.
		// hideModal() {

		// 	this.isVisible = false;
		// }
	}
})

new Vue({

	el: '#root',
});