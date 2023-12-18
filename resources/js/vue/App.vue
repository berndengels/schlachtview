<template>
	<div class="align-content-center justify-content-center w-100">
		<div id="player" v-if="current">
			<av-bars
				caps-color="#fff"
				:bar-color="['#f00', '#ff0', '#0f0']"
				canv-fill-color="transparent"
				:caps-height="2"
				:brick-space="1"
				:src="current.url"
			></av-bars>
		</div>
		<div class="row">
			<div class="col">
				<ul class="list-unstyled mt-3 ms-3">
					<li v-for="(song, index) in audioList" :key="index" @click="play" :data-index="index">{{ song.name }}</li>
				</ul>
				<br>
			</div>
			<div class="col">
				<h1 class="float-end">Schlachtvieh - Schocktherapie<span>(Berlin 1997)</span></h1>
			</div>
		</div>
		<div class="row persons">
			<div class="col"><strong>Lollo</strong><br><span>Kowalski-Bass</span></div>
			<div class="col"><strong>Peter</strong><br><span>Duracell-Häschen-Drums,<br>Texte, Gesang</span></div>
			<div class="col"><strong>Bernd</strong><br><span>Panic-Guitar</span></div>
		</div>
	</div>
</template>

<script>
import audios from "./data";
import { AVBars } from 'vue-audio-visual'

export default {
	name: "App",
	components: { AVBars },
	data() {
		return {
			current: null,
			audioList: audios,
		}
	},
	methods: {
		// Something to do before playing
		play(e) {
			let index = $(e.target).data('index');
			this.current = this.audioList[index];

			if(this.current) {
				setTimeout(() => {
					let audio = document.querySelector("audio"),
						canvas = document.querySelector("canvas")
					;
					console.info('audio', audio);
					audio.play()
					audio.onplay = () => $(canvas).show();
					audio.onend = () => $(canvas).hide();
					audio.onpause = () => $(canvas).hide();
				}, 500);
			}
		},
	}
}
</script>

<style scoped>

</style>