doctype html
html(lang="en")
	head
		title @yield('title', 'mungjar')
		link(rel='stylesheet' href='./css/materialize.css')
	body
		header
			
		main
			h1 Pug - node template engine
			#container.col
			p You are amazing
			p.
				Pug is a terse and simple templating language with a strong focus on performance and powerful features.test
			a(class="waves-effect waves-ligh btn") hi
		footer
