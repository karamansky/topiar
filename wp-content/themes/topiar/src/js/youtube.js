jQuery(document).ready(function( $ ) {

	function getParameterByName(name, url = window.location.href) {
		name = name.replace(/[\[\]]/g, '\\$&');
		var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, ' '));
	}

	const videos = document.querySelectorAll('.video');

	let generateUrl = function(id) {
		let query = '?rel=0&showinfo=0&autoplay=1';

		return 'https://www.youtube.com/embed/' + id + query;
	};

	let createIframe = function(id) {
		let iframe = document.createElement('iframe');

		iframe.setAttribute('allowfullscreen', '');
		iframe.setAttribute('allow', 'autoplay; encrypted-media');
		iframe.setAttribute('src', generateUrl(id));

		return iframe;
	};

	videos.forEach((el) => {
		let videoHref = el.getAttribute('data-video');
		let videoId = getParameterByName('v', videoHref );
		let img = el.querySelector('img');

		if( img !== null ){
			let youtubeImgSrc = 'https://i.ytimg.com/vi/' + videoId + '/maxresdefault.jpg';
			img.setAttribute('src', youtubeImgSrc);
		}

		el.addEventListener('click', (e) => {
			e.preventDefault();

			let iframe = createIframe(videoId);
			el.querySelector('img').remove();
			el.querySelector('a').remove();
			el.appendChild(iframe);
		});
	});

});