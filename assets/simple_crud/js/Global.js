const globalFunctions = (() => {
    return {
        initialize: () => {
            // Loaders
            $(`.tableLoader`).fadeOut(`slow`);
        }
    }
})();

$(document).ready(() => {
    globalFunctions.initialize();
});