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

			// Modal
			const myModal = $(`.modal`);
			const myInput = $(`#myInput`);

			myModal.on(`shown.bs.modal`, function () {
				myInput.focus();
			});

			// Show Password
			$(`.showPassword`).on(`click`, function (event) {
				event.preventDefault();

				let showPasswordIcon = $(this).find(`span`);
				let passwordInput = $(this)
					.parent()
					.find(`.password`)
					.find(`.password`);

				if ($.trim(showPasswordIcon.text()) == `visibility`) {
					showPasswordIcon.text(`visibility_off`);

					passwordInput.attr(`type`, `text`);
				} else {
					showPasswordIcon.text(`visibility`);

					passwordInput.attr(`type`, `password`);
				}
			});

			// Navigation Links
			let currentURL = window.location.href;

			$(`.sideBar a`).each(function () {
				if ($(this).attr(`href`) === currentURL.replace(/(\?|#).*$/, '')) {
					$(this).addClass(`active fw-bold`);

					if ($(this).parent().parent().prev().find(`button`)) {
						$(this)
							.parent()
							.parent()
							.prev()
							.find(`button`)
							.addClass(`active fw-bold`);
					}

					if (
						$(this)
							.parent()
							.parent()
							.prev()
							.find(`button`)
							.hasClass(`active fw-bold`)
					) {
						$(this).parent().parent().prev().find(`button`).trigger(`click`);
					}
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

			// Buttons
			$(`button[type=submit]`).on(`click`, function () {
				let spinner = $(`<div>`)
					.addClass(`spinner-grow spinner-grow-sm`)
					.attr(`role`, `status`);

					$(this).find(`.spinner-grow.spinner-grow-sm`).remove();

				$(this)
					.addClass(
						`disabled d-flex align-items-center justify-content-center gap-3`
					)
					.prepend(spinner);
			});

			// $(`form`).on(`submit`, function (event) {
			// 	event.preventDefault();
			// });
		},
	};
})();

// Ready Document
$(document).ready(() => {
	globalFunctions.initialize();
});
