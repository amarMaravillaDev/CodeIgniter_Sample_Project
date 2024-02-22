const usersFunctions = (() => {
	return {
		initialize: () => {
			// Dropdowns
			$(`.usersFilter`).on("change", function () {
				// Console Log
				console.log(`Users Filter: ${$(this).val()}`);

				// Function
				$(`#usersSearchForm`).submit();
			});
		},
	};
})();

$(document).ready(() => {
	usersFunctions.initialize();
});
