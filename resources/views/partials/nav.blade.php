<nav class="bg-white shadow-lg">
	<div class="max-w-6xl mx-auto px-4">
		<div class="flex items-center justify-between">
			<div class="flex space-x-7">
				<div>
					<a href="/" class="flex items-center py-4 px-2">
						<img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-14">
					</a>
				</div>
			</div>

			<!-- Secondary Navbar items -->
			<div class="hidden md:flex items-center space-x-3 ">
				@guest
					<a href="login" class="py-2 px-3 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Iniciar sesión</a>
				@else
					<form action="logout" method="POST">
						@csrf
						<button class="text-gray-500">Cerrar sesión</button>
					</form>
				@endguest
			</div>
		</div>
	</div>
</nav>
