const path = require('path');

module.exports = {
    stats: {
        children: true,
        warnings: false,
    },
    resolve: {
        alias: {
            '@': path.resolve('resouces/js'),
            'v@': path.resolve('resouces/js/vue'),
        },
    },
};
