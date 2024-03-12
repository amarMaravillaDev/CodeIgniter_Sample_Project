const usersFunctions = (() => {
	return {
		initialize: () => {
			// Dropdowns
			$(`.usersFilter`).on("change", function () {
				// Console Log
				console.log(`File: Users.js => $('.usersFilter'): `, $(this).val())

				// Function
				$(`#usersSearchForm`).submit();
			});

			// View Profile Picture
			$(`.viewProfilePictureBtn`).on("click", function () {
				let currentURL = window.location.href;

				// Remove the Current Modal Body
				$(`.modal-body`).find(`.viewProfilePicture`).remove();

				$(`.modalLoader`).show();

				$.ajax({
					url: `${currentURL.replace(/(\?|#).*$/, '')}/view_profile_picture`,
					type: 'GET',
					data: {
					},
					success: function (response) {
						let vPPResponse;

						try {
							vPPResponse = response ? JSON.parse(response) : "";

							if (vPPResponse !== null && vPPResponse !== undefined) {
								if (typeof vPPResponse === `object` || typeof vPPResponse === `array`) {
									$(`.modalLoader`).fadeOut(`slow`);
	
									setTimeout(function () {
										// Modal Header
										if (vPPResponse.modalHeader !== undefined) {
											$(`.modal-title`).addClass(vPPResponse.modalHeader.titleTextColor);
											$(`.modal-title`).find(`span`).text(vPPResponse.modalHeader.titleLogo);
											$(`.modal-title`).find(`h5`).text(vPPResponse.modalHeader.title);
										}
	
										// Modal body
										if (vPPResponse.modalBody !== undefined) {
											$(`.modal-body`).append(vPPResponse.modalBody);
										}
	
										// Modal Footer
										if (vPPResponse.modalFooter !== undefined) {
											$(`.modal-footer`).removeClass(`d-none`);
										}
									}, 1000);
	
									console.log(`File: Users.js => vPPResponse: `, vPPResponse);
								}
								else {
									console.log(typeof vPPResponse);
								}
							}
							else {
								console.log(`No Response`);
							}
						} catch (error) {
							console.log(error);
						}
					},
					error: function (xhr, status, error) {
					}
				});
			});
		},
	};
})();

$(document).ready(() => {
	usersFunctions.initialize();
});
