const globalFunctions = (() => {
	// * Global Variables
	// * Toast Variables
	const toasts = $(`#toast`);
	const toastBS = bootstrap.Toast.getOrCreateInstance(toasts);

	return {
		initialize: () => {
			// Cards
			$(`.fadeIn`).fadeIn(`slow`);

			if (toasts.hasClass(`show`)) {
				toasts.removeClass(`show`);

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
		toast: (toastStatus = "", toastMessage = "", toastIcon = "") => {
			// console.log(toastData);

			// let toastClasses =  $(`.toast`).attr("class").split(" ");

			// let removeToastClass = globalFunctions.classFinder(toastClasses, [`border`]);

			// * Toast
			$(`.toast`).addClass(`border-${toastStatus}`);

			// * Toast Header
			$(`.toast-header`).addClass(`border-${toastStatus}`);
			$(`.toast-header`).find(`.toast-title`).addClass(`text-${toastStatus}`);

			// * Toast Body
			$(`.toast-body`).addClass(`bg-${toastStatus} text-light`);
			$(`.toast-body`).find(`span`).text(`${toastIcon}`);
			$(`.toast-body`).find(`p`).text(`${toastMessage}`);

			toastBS.show();
		},
		classFinder: (classes, findClass) => {
			let findingClass = classes.filter(function (className) {
				return findClass.some(function (keyword) {
					return className.includes(keyword);
				});
			});

			return findingClass;
		},
	};
})();

// Ready Document
$(document).ready(() => {
	globalFunctions.initialize();
});