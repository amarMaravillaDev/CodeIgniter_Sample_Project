const globalFunctions = (() => {
	return {
		initialize: () => {
			// Cards
			$(`.fadeIn`).fadeIn(`slow`);

			// Toast
			const toasts = $(`#liveToast`);

			if (toasts.length) {
				const toastBS = bootstrap.Toast.getOrCreateInstance(toasts);

				toastBS.show();
			}

			// Show Password
			$(`.showPassword`).on(`click`, function (event) {
				event.preventDefault();

				let showPasswordIcon = $(this).find(`span`);
				let passwordInput = $(this)
					.parent()
					.find(`.password`)
					.find(`.password`);

				if ($.trim(showPasswordIcon.text()) == `visibility`) {
					console.log(showPasswordIcon.text() + " 1");
					showPasswordIcon.text(`visibility_off`);

					passwordInput.attr(`type`, `text`);
				} else {
					console.log(showPasswordIcon.text() + " 2");
					showPasswordIcon.text(`visibility`);

					passwordInput.attr(`type`, `password`);
				}
			});

			// Navigation Links
			let currentURL = window.location.href;

			$(`.sideBar a`).each(function () {
				if ($(this).attr(`href`) === currentURL.split(`?`)[0]) {
					$(this).addClass(`active fw-bold`);
				}
			});

			// Loaders
			$(`.tableLoader`).fadeOut(`slow`);

			// Table Headers
			$(`table thead th a`).on(`click`, function () {
				$(`.tableLoader`).show();
			});

			// Table Form
			$(`.tableForm`).on(`submit`, function () {
				$(`.tableLoader`).show();
			});

			// Paginations Links
			$(`.paginationLinks .page-item a`).on(`click`, function () {
				if ($(this).attr(`href`) != `#`) {
					$(`.tableLoader`).show();
				}
			});
		},
	};
})();

$(document).ready(() => {
	globalFunctions.initialize();
});
